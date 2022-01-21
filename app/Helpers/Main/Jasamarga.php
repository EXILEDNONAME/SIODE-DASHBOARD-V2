<?php

use App\Models\Backend\Main\JASAMARGA\Device;
use App\Models\Backend\Main\JASAMARGA\Division;
use App\Models\Backend\Main\JASAMARGA\User;

function jasamarga_divisions() {
  $items = DB::table('jasamarga_divisions as a')
    ->selectRaw('CONCAT("", a.name, " - ", a.description) as concatname, a.id')
    ->where('a.active', 1)
    ->pluck('concatname', 'a.id');
  return $items;
}

function jasamarga_devices() {
  $items = Device::orderBy('sort','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}
// 
// function jasamarga_divisions() {
//   $items = Division::orderBy('sort','asc')->where('active', 1)->pluck('name', 'id')->toArray();
//   return $items;
// }

function filter_jasamarga_devices() {
  $items = Device::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

function filter_jasamarga_divisions() {
  $items = Division::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}
