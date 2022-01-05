<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJasamargaUsersTable extends Migration {
  public function up() {
    Schema::create('jasamarga_users', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_device')->unsigned();
      $table->integer('id_division')->unsigned();
      $table->string('name');
      $table->string('npp');
      $table->string('mac_address');
      $table->string('pc_name');
      $table->string('pc_password');
      $table->string('specification_os');
      $table->string('specification_processor');
      $table->string('specification_harddisk');
      $table->string('specification_memory');
      $table->string('printer');
      $table->string('connection');
      $table->text('description')->nullable();
      $table->integer('active')->default(1);
      $table->integer('sort')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable()->default('0');
      $table->integer('updated_by')->nullable()->default('0');
      $table->foreign('id_device')->references('id')->on('jasamarga_devices')->onDelete('restrict')->onUpdate('restrict');
      $table->foreign('id_division')->references('id')->on('jasamarga_divisions')->onDelete('restrict')->onUpdate('restrict');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('jasamarga_users');
  }
}
