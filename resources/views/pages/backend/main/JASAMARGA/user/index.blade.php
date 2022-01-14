@extends('layouts.backend.system.index')
@push('title', 'JASAMARGA Users')

@push('content-head')
<th width="1"> Device </th>
<th width="1"> Division </th>
<th> Name </th>
<th> NPP </th>
<th> Printer </th>
<th> Model Printer </th>
<th> MT </th>
<th> Progress </th>
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
{
  data: 'printer', orderable: false, 'className': 'text-center align-middle', 'width': '1',
  render: function ( data, type, row ) {
    if ( data != null ) { return '<i class="fas fa-check"></i>'; }
    else { return ''; }
  }
},
{ data: 'printer' },
{
  data: 'maintenance', orderable: false, 'className': 'text-center align-middle', 'width': '1',
  render: function ( data, type, row ) {
    if ( data != null ) { return '<span class="label label-dot label-success"></span>'; }
    else { return ''; }
  }
},
{
  data: 'progress', orderable: true, 'className': 'align-middle', 'width': '1',
  render: function ( data, type, row ) {
    if ( data < '50' ) { return '<div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width:' +data+ '%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" title="' +data+ '"></div></div>'; }
    if ( data < '100' ) { return '<div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:' +data+ '%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" title="' +data+ '"></div></div>'; }
    if ( data > '99' ) { return '<div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width:' +data+ '%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" title="' +data+ '"></div></div>'; }
  }
},
@endpush

@push('filter-header')
<div class="col-md-2 my-2 my-md-0">
  <div class="d-flex align-items-center">
    {!! Form::select(NULL, filter_jasamarga_devices(), NULL, ['data-column' => 2, 'placeholder' => '- Device -', 'class' => 'form-control filter-jasamarga-devices']) !!}
  </div>
</div>
<div class="col-md-2 my-2 my-md-0">
  <div class="d-flex align-items-center">
    {!! Form::select(NULL, filter_jasamarga_divisions(), NULL, ['data-column' => 3, 'placeholder' => '- Division -', 'class' => 'form-control filter-jasamarga-divisions']) !!}
  </div>
</div>
@endpush

@push('filter-function')
d.filter_jasamarga_devices = $('#filter_jasamarga_devices').val();
d.filter_jasamarga_divisions = $('#filter_jasamarga_divisions').val();
@endpush

@push('filter-data')
$('.filter-jasamarga-devices').change(function () {
  table.column(2)
  .search( $(this).val() )
  .draw();
});
$('.filter-jasamarga-divisions').change(function () {
  table.column(3)
  .search( $(this).val() )
  .draw();
});
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
        {{ \DB::table('jasamarga_users')->where('active', '1')->get()->count() }}
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
        {{ \DB::table('jasamarga_users')->where('printer', '!=', 'null')->where('active', 1)->get()->count() }}
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
        {{ \DB::table('jasamarga_users')->where('maintenance', '!=', 'null')->where('active', 1)->get()->count() }}
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
