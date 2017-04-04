@extends('master')
@section('content')
@include ('projects.list')

<Modal :message="message" :showmodal="showmodal"></Modal>

<form action="/store" method="post" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
    <div class="field">
      <label class="label">Проект</label>
      <p class="control">
        <input class="input" type="text" placeholder="Название" name="name" value="" v-model="form.name">
      </p>
      <p class="help is-danger animated flash" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></p>
    </div>

    <div class="field">
      <label class="label">Подробное описание</label>
      <p class="control">
        <textarea class="textarea" placeholder="Описание" name="description" v-model="form.description"></textarea>
      </p>
      <p class="help is-danger animated flash" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></p>
    </div>

    <div class="field is-grouped">
      <p class="control">
        <button type="submit" class="button is-primary" :disabled="form.errors.any()">Save</button>
      </p>
      <p class="control">
        <button type="reset" class="button is-link">Cancel</button>
      </p>
    </div>

</form>
@endsection
