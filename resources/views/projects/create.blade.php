@extends('master')
@section('content')
@include ('projects.list')
<form action="" method="post">
    <div class="field">
      <label class="label">Проект</label>
      <p class="control">
        <input class="input" type="text" placeholder="Название" value="">
      </p>
      <p class="help">This username is available</p>
    </div>

    <div class="field">
      <label class="label">Подробное описание</label>
      <p class="control">
        <textarea class="textarea" placeholder="Описание"></textarea>
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
