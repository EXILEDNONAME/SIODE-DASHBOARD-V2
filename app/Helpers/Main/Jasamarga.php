<?php

use App\Models\Backend\Main\JASAMARGA\Device;
use App\Models\Backend\Main\JASAMARGA\Division;

function jasamarga_devices() {
  $items = Device::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function jasamarga_divisions() {
  $items = Division::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function filter_jasamarga_devices() {
  $items = Device::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

function filter_jasamarga_divisions() {
  $items = Division::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}
