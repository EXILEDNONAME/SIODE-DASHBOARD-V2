@extends('layouts.backend.system.index')
@push('title', 'JASAMARGA Users')

@push('content-head')
<th> Name </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'name' },
{ data: 'description' },
@endpush
