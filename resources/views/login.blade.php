@extends('student-layout.master')

@section('title','Title login extends')

@section('header', 'header login extends')
@section('content')

<body>

    <header><h1 class="header">Header-login</h1></header>
    <form method="POST" action="{{ route('post-login') }}">
        @csrf
        <input name="username" placeholder="Username" type="text" />
        <input name="password" placeholder="Password" type="password" />
        <button type="submit">Submit</button>
    </form>
    <footer>Footer login</footer>

    @endsection
    @section('footer', 'Footer login extends')
