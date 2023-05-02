<!-- include layout -->
@extends('layouts.app')

<!-- section header -->
@section('page.header')
    <div class="container">
        <a href="#">
            <img src="/dc-logo.png" alt="dc logo">
        </a>
        <nav>
            <ul>
                @foreach ($navLinks as $link)
                    <li>{{ $link }}</li>
                @endforeach
            </ul>
        </nav>
    </div>
@endsection
<!-- /section header -->

<!-- section main -->
@section('page.main')
    <div class="container">
        <h3>CURRENT SERIES</h3>
        <ul>
            @foreach ($comics as $item)
                <li>{{ $item['title'] }}</li>
            @endforeach
        </ul>
    </div>
@endsection
<!-- /section main -->

<!-- section footer -->
@section('page.footer')
    <div class="container">
        <h5>footer</h5>
    </div>
@endsection
<!-- /section footer -->