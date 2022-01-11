@extends('layouts.backend.system.index', ['status' => 'true'])
@push('title', 'JASAMARGA Users')

@push('content-head')
<th> Device </th>
<th> Division </th>
<th> Name </th>
<th> NPP </th>
<th> PC Name </th>
<th> PC Password </th>
<th> Printer </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'id_devices' },
{ data: 'id_divisions' },
{ data: 'name' },
{
  data: 'npp', orderable: true, 'className': 'align-middle', 'width': '1',
  render: function ( data, type, row ) {
    if ( data == null ) { return ' '; }
    else { return '0' + data; }
  }
},
{ data: 'pc_name' },
{ data: 'pc_password' },
{
  data: 'status', orderable: true, 'className': 'align-middle', 'width': '1',
  render: function ( data, type, row ) {
    if ( data == 1 ) { return '<a href="javascript:void(0);" id="status_pending" data-toggle="tooltip" data-original-title="Success" data-id="' + row.id + '"><span class="label label-outline-success label-pill label-inline"> {{ trans("default.label.yes") }} </span></a>'; }
    if ( data == 2 ) { return '<a href="javascript:void(0);" id="status_done" data-toggle="tooltip" data-original-title="Pending" data-id="' + row.id + '"><span class="label label-outline-warning label-pill label-inline"> {{ trans("default.label.no") }} </span></a>'; }
  }
},
{ data: 'description' },
@endpush

@push('widget')
<div class="row">

  <div class="col-xl-3">
    <div class="card card-custom wave wave-animate-slow wave-primary gutter-b" data-card="true" id="kt_card_3">
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label"> Users </h3>
        </div>
        <div class="card-toolbar">
          <a class="btn btn-sm btn-icon btn-clean btn-light-md" data-card-tool="toggle"><i class="fas fa-caret-down"></i></a>
        </div>
      </div>
      <div class="card-body">
        TEST 1
      </div>
    </div>
  </div>

  <div class="col-xl-3">
    <div class="card card-custom wave wave-animate-slow wave-danger gutter-b" data-card="true" id="kt_card_3">
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label"> Total Printers </h3>
        </div>
        <div class="card-toolbar">
          <a class="btn btn-sm btn-icon btn-clean btn-light-md" data-card-tool="toggle"><i class="fas fa-caret-down"></i></a>
        </div>
      </div>
      <div class="card-body">
        TEST 1
      </div>
    </div>
  </div>

  <div class="col-xl-3">
    <div class="card card-custom gutter-b" data-card="true" id="kt_card_3">
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label"> Maintenance Data </h3>
        </div>
        <div class="card-toolbar">
          <a class="btn btn-sm btn-icon btn-clean btn-light-md" data-card-tool="toggle"><i class="fas fa-caret-down"></i></a>
        </div>
      </div>
      <div class="card-body">
        TEST 1
      </div>
    </div>
  </div>

  <div class="col-xl-3">
    <div class="card card-custom gutter-b" data-card="true" id="kt_card_3">
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label"> PC Lenovo  </h3>
        </div>
        <div class="card-toolbar">
          <a class="btn btn-sm btn-icon btn-clean btn-light-md" data-card-tool="toggle"><i class="fas fa-caret-down"></i></a>
        </div>
      </div>
      <div class="card-body">
        TEST 2
      </div>
    </div>
  </div>

</div>
@endpush
