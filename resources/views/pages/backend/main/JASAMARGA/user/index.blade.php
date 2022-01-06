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
