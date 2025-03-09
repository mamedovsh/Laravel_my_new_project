@extends('layouts.default')

@section('contacts')
    <h1>Страница Контактов</h1>
    @if($ageContacts > 18)
        <p>Возраст: {{ $ageContacts }}</p>
    @else
        <p>Предупреждение: указанный человек слишком молод.</p>
    @endif

    @if(empty($email))
        <p>Адрес электронной почты не указан.</p>
    @endif
@endsection