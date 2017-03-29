@extends('master')
@include ('projects.list')
@section('content')
<form action="" method="post">
    <div class="field">
      <label class="label">Project name</label>
      <p class="control">
        <input class="input" type="text" placeholder="" value="">
      </p>
      <p class="help">This username is available</p>
    </div>

    <div class="field">
      <label class="label">Project description</label>
      <p class="control">
        <textarea class="textarea" placeholder="Textarea"></textarea>
      </p>
      <p class="help">This username is available</p>
    </div>

    <div class="field is-grouped">
      <p class="control">
        <button type="submit" class="button is-primary">Save</button>
      </p>
      <p class="control">
        <button type="reset" class="button is-link">Cancel</button>
      </p>
    </div>

</form>
@endsection
