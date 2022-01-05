<?php

namespace App\Models\Backend\Main\JASAMARGA;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class User extends Model {

  use LogsActivity;

  protected $table = 'jasamarga_users';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
