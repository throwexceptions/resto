@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">Order Panel</div>
<div class="panel-body">
    <form>
      <div class="form-group">
        <label>Email address:</label>
        <input type="email" class="form-control" id="email">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection