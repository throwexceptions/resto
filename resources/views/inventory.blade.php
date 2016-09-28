@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">Inventory Panel</div>
<div class="panel-body">
    {!! Form::open(['url' => '/inventory/create', 'method' => 'POST']) !!}
      <div class="form-group">
        <label>Menu Name:</label>
        {!! Form::text('name',null,['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        <label>Regular Price:</label>
        {!! Form::text('regualar',null,['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        <label>Special Price:</label>
        {!! Form::text('special',null,['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        <label>Type:</label>
        {!! Form::select('type', ['Appetizer' => 'Appetizer', 'Main Dish' => 'Main Dish'], 'Main Dish', ['class' => 'form-control']); !!}
       </div>
       <div class="form-group">
        <label>Status:</label>
        {!! Form::select('type', ['1' => 'Available', '0' => 'Not Available'], '0', ['class' => 'form-control']); !!}
       </div>
    {!! Form::close() !!}
</div>
<div class="panel-footer" style="height: 55px;">
    <button type="submit" class="btn btn-primary pull-right">Submit</button>
</div>
</div>
</div>
</div>
</div>
@endsection
