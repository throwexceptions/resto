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
        <label>Request For:</label>
        {{ Form::select('size', ['occupy' => 'Occupy', 'reserve' => 'For Reserve'], 'occupy',['class'=>'form-control']) }}
      </div>
      <div class="form-group">
        <label>Payment:</label>
        {{ Form::select('size', ['1' => 'Paid', '0' => 'Not Yet Paid'], '1',['class'=>'form-control']) }}
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection