@extends('inventory')

@section('invcon')
<div class="panel-heading">Edit Menu Panel (<b>{{ $results->name }}</b>)</div>
{!! Form::open(['url' => "/overview/$results->id/edit", 'method' => 'POST']) !!}
  	<div class="panel-body">
      <div class="form-group">
        <label>Regular Price:</label>
        {!! Form::text('regular',$results->regular,['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        <label>Special Price:</label>
        {!! Form::text('special',$results->special,['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        <label>Type:</label>
        {!! Form::select('type', ['Appetizer' => 'Appetizer', 'Main Dish' => 'Main Dish'], $results->type, ['class' => 'form-control']); !!}
       </div>
       <div class="form-group">
        <label>Status:</label>
        {!! Form::select('status', ['1' => 'Available', '0' => 'Not Available'], $results->status, ['class' => 'form-control']); !!}
       </div>
	</div>
	<div class="panel-footer" style="height: 55px;">
	    <button type="submit" class="btn btn-primary pull-right">Update</button>
	</div>
	{!! Form::text('id',$results->id,['class' => 'hidden']) !!}
{!! Form::close() !!}
@endsection