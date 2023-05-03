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

<!-- section main content -->
@section('main.content')
    <ul>
        @foreach ($comics as $item)
            <li><a href="#">{{ $item['title'] }}</a></li>
        @endforeach
    </ul>
@endsection
<!-- /section main content -->

<!-- section main nav -->
@section('main.nav')
    <ul>
        @foreach ($mainNavLinks as $link)
            <li>
                <a href="#">
                    <img src="{{ $link['src'] }}" alt="#">
                    <div>{{ $link['name'] }}</div>
                </a>
            </li>
        @endforeach
    </ul>
@endsection
<!-- /section main nav -->

<!-- section footer -->
@section('page.footer')
    
@endsection
<!-- /section footer -->