@extends('inventory')

@section('invcon')
<div class="panel-heading">Overview Menu Panel</div>
<div class="panel-body">
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
@endsection