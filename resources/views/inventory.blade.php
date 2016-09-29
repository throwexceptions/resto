@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
<div class="col-md-2 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-heading">Inventory Panel</div>
<div class="panel-body">
  <a href="{{ url('/overview') }}" class="btn btn-default btn-block">Overview</a>
  <a href="{{ url('/addmenu') }}" class="btn btn-default btn-block">Add Menu</a>
  <a href="{{ url('/menutype') }}" class="btn btn-default btn-block">Add Menu Type</a>
</div>
</div>
</div>
<div class="col-md-8">
<div class="panel panel-default">
  @yield('invcon')
</div>
</div>
</div>
</div>
@endsection
