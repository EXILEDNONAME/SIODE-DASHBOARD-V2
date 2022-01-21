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
  data: 'printer', orderable: true, 'className': 'text-center align-middle', 'width': '1',
  render: function ( data, type, row ) {
    if ( data == 1 ) { return '<i class="fas fa-check"></i>'; }
    else { return ''; }
  }
},
{ data: 'model_printer' },
{
  data: 'maintenance', orderable: false, 'className': 'text-center align-middle', 'width': '1',
  render: function ( data, type, row ) {
    if ( data == 1 ) { return '<span class="label label-dot label-success"></span>'; }
    else { return ''; }
  }
},
{
  data: 'progress', orderable: true, 'className': 'align-middle', 'width': '1',
  render: function ( data, type, row ) {
    if ( data < '50' ) { return '<div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width:' +data+ '%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" title="' +data+ '%"></div></div>'; }
    if ( data < '100' ) { return '<div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:' +data+ '%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" title="' +data+ '%"></div></div>'; }
    if ( data > '99' ) { return '<div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width:' +data+ '%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" title="' +data+ '%"></div></div>'; }
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
<div class="col-md-2 my-2 my-md-0">
  <div class="d-flex align-items-center">
    <select data-column="6" class="form-control filter-jasamarga-printers">
      <option value=""> - Printer - </option>
      <option value="1"> Yes </option>
      <option value="2"> No </option>
    </select>
  </div>
</div>
@endpush

@push('filter-function')
d.filter_jasamarga_devices = $('#filter_jasamarga_devices').val();
d.filter_jasamarga_divisions = $('#filter_jasamarga_divisions').val();
d.filter_jasamarga_printers = $('#filter_jasamarga_printers').val();
@endpush

@push('filter-data')
$('.filter-jasamarga-devices').change(function () { table.column(2).search($(this).val()).draw(); });
$('.filter-jasamarga-divisions').change(function () { table.column(3).search($(this).val()).draw(); });
$('.filter-jasamarga-printers').change(function () { table.column(6).search($(this).val()).draw(); });
@endpush
