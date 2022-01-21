@extends('layouts.backend.system.index')
@push('title', 'JASAMARGA Intercomes')

@push('content-head')
<th> Name </th>
<th> Area </th>
<th> Code </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'name' },
{ data: 'area' },
{ data: 'code' },
{ data: 'description' },
@endpush
