<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\JASAMARGA\Device;

class Devices extends Seeder {
  public function run() {
    $data = [
      [
        'name'          => 'Other',
        'description'   => 'Lainnya',
        'created_at'    => Carbon::now(),
      ],
      [
        'name'          => 'PC AIO',
        'description'   => 'PC All In One PBL',
        'created_at'    => Carbon::now(),
      ],
      [
        'name'          => 'PC PBL',
        'description'   => 'PC Purbaleunyi',
        'created_at'    => Carbon::now(),
      ],
      [
        'name'          => 'PC Lenovo',
        'description'   => 'PC Lenovo Pusat',
        'created_at'    => Carbon::now(),
      ],
      [
        'name'          => 'Laptop Lenovo',
        'description'   => 'Laptop Lenovo Pusat',
        'created_at'    => Carbon::now(),
      ],
    ];

    Device::insert($data);
  }
}
