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
        <li>
            <a href="#">prodotto</a>
        </li>
    </ul>
@endsection
<!-- /section main content -->

<!-- section main nav -->
@section('main.nav')
    <ul>
        <li>
            <a href="#">link</a>
        </li>
    </ul>
@endsection
<!-- /section main nav -->

<!-- section footer -->
@section('page.footer')
    
@endsection
<!-- /section footer -->