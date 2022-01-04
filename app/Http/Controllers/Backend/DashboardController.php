<?php

namespace App\Http\Controllers\Backend;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\TestEvent;

use App\User;
use App\Models\Backend\Notification;

class DashboardController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware(['auth']);
    $this->url = '/dashboard';
    $this->path = 'pages.backend.system';
    $this->model = 'App\User';
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index(Request $request) {
    return view($this->path . '.dashboard.index');
  }

  public function notification() {
    return view($this->path . '.notification.index');
  }

  public function filemanager() {
    return view($this->path . '.file-manager.index');
  }

  public function documentation() {
    return view($this->path . '.documentation.index');
  }

  /**
  **************************************************
  * @return Logout
  **************************************************
  **/

  public function notification_read($id) {
    $data = Notification::where('id', $id)->update([ 'read_at' => 1 ]);
    return Response::json($data);
  }

  /**
  **************************************************
  * @return Logout
  **************************************************
  **/

  public function logout() {
    Auth::logout();
    return redirect('login');
  }

}
