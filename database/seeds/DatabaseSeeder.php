<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  public function run() {
    $this->call(DefaultSeeder::class);

    // JASAMARGA
    $this->call(Devices::class);
    $this->call(Divisions::class);
  }
}
