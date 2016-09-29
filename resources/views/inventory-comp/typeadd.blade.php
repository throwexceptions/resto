@extends('inventory')

@section('invcon')
<div class="panel-heading">Add Menu Type Panel</div>
{!! Form::open(['url' => "/menutype/store", 'method' => 'POST']) !!}
  	<div class="panel-body">
      <div class="form-group">
        <label>Menu Type Name:</label>
        {!! Form::text('name',null,['class' => 'form-control']) !!}
      </div>
	</div>
	<div class="panel-footer" style="height: 55px;">
	    <button type="submit" class="btn btn-primary pull-right">Submit</button>
	</div>
{!! Form::close() !!}
@endsection