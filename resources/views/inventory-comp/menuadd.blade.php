@extends('inventory')

@section('invcon')
<div class="panel-heading">Add Menu Panel</div>
{!! Form::open(['url' => '/addmenu', 'method' => 'POST']) !!}
  @include('inventory-comp/menuform')
  <div class="panel-footer" style="height: 55px;">
	    <button type="submit" class="btn btn-primary pull-right">Save</button>
	</div>
{!! Form::close() !!}
@endsection