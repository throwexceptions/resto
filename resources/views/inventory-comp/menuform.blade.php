<div class="panel-body">
      <div class="form-group">
        <label>Menu Name:</label>
        {!! Form::text('name',null,['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        <label>Regular Price:</label>
        {!! Form::text('regular',null,['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        <label>Special Price:</label>
        {!! Form::text('special',null,['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        <label>Type:</label>
        <select name="type" class="form-control">
          @foreach($types as $type)
            <option value="{{ $type->name }}">
              {{ $type->name }}
            </option>
          @endforeach
        </select>
       </div>
       <div class="form-group">
        <label>Status:</label>
        {!! Form::select('status', ['1' => 'Available', '0' => 'Not Available'], '0', ['class' => 'form-control']); !!}
       </div>
</div>