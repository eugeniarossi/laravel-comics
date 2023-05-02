<!-- include layout -->
@extends('layouts.app')

<!-- section header top -->
@section('header.top')
    <div class="container">
        <a href="#">dc power visa</a>
        <a href="#">additional dc sites</a>
    </div>
@endsection
<!-- /section header top -->

<!-- section header bottom -->
@section('header.bottom.nav')
    <ul>
        @foreach ($navLinks as $link)
            <li><a href="#">{{ $link }}</a></li>
        @endforeach
    </ul>
@endsection
<!-- /section header bottom -->

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