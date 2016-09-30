@extends('inventory')

@section('invcon')
<div class="panel-heading">Overview Menu Panel</div>
<div class="panel-body">
<div class="row">
  <div class="col-md-12">
    <h3>Menu List</h3>
  </div>
  <div class="col-md-12">   
  <table class="table table-striped">
    <thead>
      <th>Menu name</th>
      <th>Type</th>
      <th>Regular Price</th>
      <th>Special Proce</th>
      <th>Status</th>
      <th>Action</th>
    </thead>
    <tbody>
      @foreach($results as $result)
      <tr>
        <td>{{ $result->name }}</td>
        <td>{{ $result->type }}</td>
        <td>{{ $result->regular }}</td>
        <td>{{ $result->special }}</td>
        <td>
          @if($result->status == 0)
            Not Available
          @else
            Available
          @endif
        </td>
        <td>
          <a href="/overview/{{ $result->id }}/show" class="btn btn-xs btn-info">Update</a>
          <a href="/overview/{{ $result->id }}/delete" class="btn btn-xs btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  <div class="col-md-12">
    <h3>Menu Type</h3>
  </div>
  <div class="col-md-4">
    <table class="table table-striped">
      <thead>
        <th>Name</th>
        <th>Action</th>
      </thead>
      <tbody>
        @foreach($types as $type)
        <tr>
          <td>{{ $type->name }}</td>
          <td>
            <a href="/overview/{{ $type->id }}/delete/type" class="btn btn-xs btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
@endsection