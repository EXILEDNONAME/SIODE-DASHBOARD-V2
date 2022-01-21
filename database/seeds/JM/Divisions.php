<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\JASAMARGA\Division;

class Divisions extends Seeder {
  public function run() {
    $data = [
      [
        'name'          => 'Other',
        'description'   => 'Lainnya',
        'created_at'    => Carbon::now(),
      ],
      [
        'name'          => 'BSD',
        'description'   => 'Business and Support Department',
        'created_at'    => Carbon::now(),
      ],
      [
        'name'          => 'CDS',
        'description'   => 'Community Development Service',
        'created_at'    => Carbon::now(),
      ],
      [
        'name'          => 'OMD',
        'description'   => 'Operation & Maintenance Department',
        'created_at'    => Carbon::now(),
      ],
    ];

    Division::insert($data);
  }
}
