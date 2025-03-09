@extends('layouts.default')

@section('content')
    @if (isset($age))
        @if ($age > 18)
            <p>Ваш возраст: {{ $age }}</p>
        @else
            <p>Предупреждение: указанный человек слишком молод.</p>
        @endif
    @else
        <p>Возраст не указан.</p>
    @endif

    @if (isset($email) && !empty($email))
        <p>Ваш адрес электронной почты: {{ $email }}</p>
    @else
        <p>Адрес электронной почты не указан.</p>
    @endif
@stop