@extends('errors.layout')

@section('code', '404')
@section('message', 'Sorry, de pagina die je zoekt bestaat niet of is verwijderd.')

@section('content')
    <article class="error-article">
        <h1 class="error-code">Error @yield('code')</h1>
        <p class="error-message">@yield('message')</p>
        <button onclick="goBack()" class="btn btn-dark">Terug</button>
    </article>
@endsection
