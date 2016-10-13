@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">Order Panel</div>
<div class="panel-body">
<<<<<<< HEAD
<div class="row">
<div class="col-md-12">
  <div class="form-group">
    <label>Name:</label>
    {{ Form::text('customer', null, ['class' => 'form-control']) }}
  </div>
</div>
<div class="col-md-6">
<label>Summary:</label>
<ul class="list-group">
  <li class="list-group-item">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>
</div>
<div class="col-md-6">
	<div class="form-group">
		<label>Menu Types:</label>
		<select name="menutypes" class="form-control">
			@foreach($results as $result)
				<option value="{{ $result->name }}">{{ $result->name }}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Menu:</label>
		<select name="menu" class="form-control">
			
		</select>
	</div>
	<div class="form-group">
		<label>Quantity:</label>
		{{ Form::number('quantity', null, ['class' => 'form-control','min' => '0']) }}
	</div>
	<div class="form-group">
		<label>Price:</label>
		<i><label id="price">:price:</label></i>
	</div>
</div>
</div>
</div>
<div class="panel-footer">
  <button type="submit" class="btn btn-default">CheckOut</button>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
Call = (function(){

	var ajaxReq = function(url,data) {
		$.ajax({
		  url: url,
		  dataType: "Json",
		  data: { data },
		  success: function(res) {
		  	alert(JSON.stringify(res))
		  }
		})
	}

	var loadMenu = function(){
		ajaxReq("transaction/get/menu",{'taba':'taba'})
	}

	return {
		ajaxReq:ajaxReq,
		loadMenu: loadMenu
	}
})();

$(function() {
	Call.loadMenu()
})

$('[name=menutypes]').on('change',function(){
	Call.loadMenu()
})
</script>
@endsection