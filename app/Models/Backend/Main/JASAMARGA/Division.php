<?php

namespace App\Models\Backend\Main\JASAMARGA;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Division extends Model {

  use LogsActivity;

  protected $table = 'jasamarga_divisions';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
