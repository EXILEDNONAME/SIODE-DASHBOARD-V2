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
      $table->integer('npp')->nullable();
      $table->string('ip_address')->nullable();
      $table->string('mac_address')->nullable();
      $table->string('pc_name')->nullable();
      $table->string('pc_password')->nullable();
      $table->string('specification_os')->nullable();
      $table->string('specification_processor')->nullable();
      $table->string('specification_storage')->nullable();
      $table->string('specification_memory')->nullable();
      $table->integer('printer')->nullable()->default('0');
      $table->string('model_printer')->nullable();
      $table->integer('connection')->nullable();
      $table->integer('maintenance')->nullable();
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
