@extends('master')
@section('content')
<article class="message is-danger">
  <div class="message-header">
    <p><strong>Ошибка! Документ не найден.</strong>!</p>
  </div>
  <div class="message-body">
    Запрашиваемая страница {{ Request::url() }} не найдена.
  </div>
</article>
@endsection
