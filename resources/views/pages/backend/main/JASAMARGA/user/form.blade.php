<div class="form-group row">
  <label class="col-lg-3 col-form-label"> <a href="{{ URL::Current() }}/../../devices/create" target="_blank" class="text-danger font-weight-bold"><u> Device </u></a></label>
  <div class="col-lg-9">
    {!! Form::select('id_device', jasamarga_devices(), (isset($data->id_device) ? $data->id_device : NULL), ['placeholder' => '- Select Device -', 'class' => 'form-control', 'required' => 'required']) !!}
    @error('id_device') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> <a href="{{ URL::Current() }}/../../divisions/create" target="_blank" class="text-danger font-weight-bold"><u> Division </u></a></label>
  <div class="col-lg-9">
    {!! Form::select('id_division', jasamarga_divisions(), (isset($data->id_division) ? $data->id_division : NULL), ['placeholder' => '- Select Division -', 'class' => 'form-control', 'required' => 'required']) !!}
    @error('id_division') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Name </label>
  <div class="col-lg-9">
    {!! Form::text('name', (isset($data->name) ? $data->name : ''), ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> NPP </label>
  <div class="col-lg-9">
    {!! Form::text('npp', (isset($data->npp) ? $data->npp : ''), ['class' => $errors->has('npp') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('npp') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> MAC Address </label>
  <div class="col-lg-9">
    {!! Form::text('mac_address', (isset($data->mac_address) ? $data->mac_address : ''), ['class' => $errors->has('mac_address') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('mac_address') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> PC Name </label>
  <div class="col-lg-9">
    {!! Form::text('pc_name', (isset($data->pc_name) ? $data->pc_name : ''), ['class' => $errors->has('pc_name') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('pc_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> PC Password </label>
  <div class="col-lg-9">
    {!! Form::text('pc_password', (isset($data->pc_password) ? $data->pc_password : ''), ['class' => $errors->has('pc_password') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('pc_password') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Printer </label>
  <div class="col-lg-9">
    {{ Form::select('printer', ['1' => 'Yes', '2' => 'No'], (isset($data->printer) ? $data->printer : '2'), ['class' => $errors->has('printer') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) }}
    @error('printer') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Model Printer </label>
  <div class="col-lg-9">
    {!! Form::text('model_printer', (isset($data->model_printer) ? $data->model_printer : ''), ['class' => $errors->has('model_printer') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('model_printer') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Maintenance </label>
  <div class="col-lg-9">
    {{ Form::select('maintenance', ['1' => 'Yes', '2' => 'No'], (isset($data->maintenance) ? $data->maintenance : '2'), ['class' => $errors->has('maintenance') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) }}
    @error('maintenance') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Connection </label>
  <div class="col-lg-9">
    {{ Form::select('connection', ['1' => 'WLAN', '2' => 'LAN'], (isset($data->connection) ? $data->connection : '2'), ['class' => $errors->has('connection') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) }}
    @error('connection') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Spec OS </label>
  <div class="col-lg-9">
    {!! Form::text('specification_os', (isset($data->specification_os) ? $data->specification_os : ''), ['class' => $errors->has('specification_os') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('specification_os') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Spec Processor </label>
  <div class="col-lg-9">
    {!! Form::text('specification_processor', (isset($data->specification_processor) ? $data->specification_processor : ''), ['class' => $errors->has('specification_processor') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('specification_processor') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Spec HDD </label>
  <div class="col-lg-9">
    {!! Form::text('specification_harddisk', (isset($data->specification_harddisk) ? $data->specification_harddisk : ''), ['class' => $errors->has('specification_harddisk') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('specification_harddisk') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Spec RAM </label>
  <div class="col-lg-9">
    {!! Form::text('specification_memory', (isset($data->specification_memory) ? $data->specification_memory : ''), ['class' => $errors->has('specification_memory') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('specification_memory') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Description </label>
  <div class="col-lg-9">
    {!! Form::textarea('description', (isset($data->description) ? $data->description : ''), ['class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

@include('includes.partial.datatable.form')
