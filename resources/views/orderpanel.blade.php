@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">Order Panel</div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <a href="/transaction" class="btn btn-lg btn-primary btn-block">New Order Request</a>
            <br>
        </div>
        <div class="col-md-11 col-md-offset-1">
        <div class="col-md-2 occupied tabular">
            <div class="form-group">
                <h3>Table</h3>
                <h2><i class="fa fa-bell" aria-hidden="true">&nbsp;1</i></h2>
            </div>
        </div>
        <div class="col-md-2 reserved tabular">
            <div class="form-group">
                <h3>Table</h3>
                <h2><i class="fa fa-bell" aria-hidden="true">&nbsp;2</i></h2>
            </div>
        </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>
@endsection
