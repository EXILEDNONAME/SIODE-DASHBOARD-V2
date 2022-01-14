<?php

namespace App\Http\Controllers\Backend\Main\JASAMARGA;

use Auth;
use DataTables;
use Redirect,Response;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

use App\Http\Requests\Backend\Main\JASAMARGA\User\StoreRequest;
use App\Http\Requests\Backend\Main\JASAMARGA\User\UpdateRequest;

use Notification;
use App\Notifications\DataStoreNotification;

class UserController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
    $this->url = '/dashboard/jasamarga/users';
    $this->path = 'pages.backend.main.jasamarga.user';
    $this->model = 'App\Models\Backend\Main\Jasamarga\User';
    $this->data = $this->model::get();
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index() {
    $model = $this->model;
    if(request()->ajax()) {
      return DataTables::of($this->data)
      ->editColumn('id_devices', function($order) { return $order->jasamarga_devices->name; })
      ->editColumn('id_divisions', function($order) { return $order->jasamarga_divisions->name; })
      ->editColumn('progress', function($order) {
        if ( $order->name != NULL ) { $progress = 1; }
        if ( $order->npp != NULL ) { $progress += 1; }
        if ( $order->mac_address != NULL ) { $progress += 1; }
        if ( $order->pc_name != NULL ) { $progress += 1; }
        if ( $order->pc_password != NULL ) { $progress += 1; }
        if ( $order->specification_os != NULL ) { $progress += 1; }
        if ( $order->specification_processor != NULL ) { $progress += 1; }
        if ( $order->specification_harddisk != NULL ) { $progress += 1; }
        if ( $order->specification_memory != NULL ) { $progress += 1; }
        if ( $order->printer != NULL ) { $progress += 1; }
        return round( (($progress/10) *100 ), 2);
      })
      ->rawColumns(['description'])
      ->addIndexColumn()
      ->make(true);
    }
    return view($this->path . '.index', compact('model'));
  }

  /**
  **************************************************
  * @return Show
  **************************************************
  **/

  public function show($id) {
    $model = $this->model;
    $data = $this->model::findOrFail($id);
    return view($this->path . '.show', compact('data', 'model'));
  }

  /**
  **************************************************
  * @return Create
  **************************************************
  **/

  public function create() {
    $path = $this->path;
    $model = $this->model;
    return view($this->path . '.create', compact('path', 'model'));
  }

  /**
  **************************************************
  * @return Store
  **************************************************
  **/

  public function store(StoreRequest $request) {
    $store = $request->all();
    $this->model::create($store);
    $userSchema = User::first();
    Notification::send($userSchema, new DataStoreNotification($store));
    event(new \App\Events\NotificationEvent($this->model::get()->count()));
    return redirect($this->url)->with('success', trans('default.notification.success.item-created'));

  }

  /**
  **************************************************
  * @return Edit
  **************************************************
  **/

  public function edit($id) {
    $path = $this->path;
    $model = $this->model;
    $data = $this->model::findOrFail($id);
    return view($this->path . '.edit', compact('path', 'data', 'model'));
  }

  /**
  **************************************************
  * @return Update
  **************************************************
  **/

  public function update(UpdateRequest $request, $id) {
    $data = $this->model::findOrFail($id);
    $update = $request->all();
    $data->update($update);
    return redirect($this->url)->with('success', trans('default.notification.success.item-updated'));
  }

  /**
  **************************************************
  * @return Destroy
  **************************************************
  **/

  public function destroy($id) {
    try {
      $this->model::destroy($id);
      return redirect($this->url)->with('success', trans('default.notification.success.item-deleted'));
    } catch (\Exception $e) {
      return redirect($this->url)->with('error', trans('default.notification.error'));
    }
  }

  /**
  **************************************************
  * @return Enable
  * @return Disable
  * @return Status-Done
  * @return Status-Pending
  **************************************************
  **/

  public function enable($id) {
    $data = $this->model::where('id', $id)->update([ 'active' => 1 ]);
    return Response::json($data);
  }

  public function disable($id) {
    $data = $this->model::where('id', $id)->update([ 'active' => 2 ]);
    return Response::json($data);
  }

  public function status_done($id) {
    $data = $this->model::where('id', $id)->update([ 'status' => 1 ]);
    return Response::json($data);
  }

  public function status_pending($id) {
    $data = $this->model::where('id', $id)->update([ 'status' => 2 ]);
    return Response::json($data);
  }

  /**
  **************************************************
  * @return Delete
  **************************************************
  **/

  public function delete($id) {
    $this->model::destroy($id);
    $data = $this->model::where('id',$id)->delete();
    return Response::json($data);
  }

  /**
  **************************************************
  * @return Delete-All
  **************************************************
  **/

  public function deleteall(Request $request) {
    $exilednoname = $request->EXILEDNONAME;
    $this->model::whereIn('id',explode(",",$exilednoname))->delete();
    return Response::json($exilednoname);
  }

}
