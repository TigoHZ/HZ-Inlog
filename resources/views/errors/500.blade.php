@extends('errors.layout')

@section('code', '500')
@section('message', 'Er is een interne serverfout opgetreden. Probeer het later opnieuw.')

@section('content')
    <article class="error-article">
        <h1 class="error-code">Error @yield('code')</h1>
        <p class="error-message">@yield('message')</p>
        <button onclick="goBack()" class="btn btn-dark">Terug</button>
    </article>
@endsection
