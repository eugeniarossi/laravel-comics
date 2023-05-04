@extends('layouts.app')

<!-- section header top -->
@section('header.top')
    <div class="container">
        <a href="#">dc power visa</a>
        <a href="#">additional dc sites</a>
    </div>
@endsection
<!-- /section header top -->

<!-- section main -->
@section('main')
    <div class="product-main">
        <!-- main-content -->
        <div class="main-content">
            <div class="container">
                <section>  
                    <ul>
                        <li><a href=""><h1>{{ $comic['title'] }}</h1></a></li>
                    </ul>
                </section>
            </div>
        </div>
        <!-- /main-content -->
        <!-- nav -->
        <nav>
            <div class="container">
                <nav>
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
                </nav>
            </div>
        </nav>
        <!-- /nav -->
    </div>
    <!-- /section main -->
@endsection

<!-- section footer -->
@section('page.footer')
    
@endsection
<!-- /section footer -->