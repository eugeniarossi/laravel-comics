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
@section('main')
    <div class="home-main">
        <!-- main-content -->
        <div class="main-content">
            <div class="container">
                <h5>CURRENT SERIES</h5>
                <section>  
                    <ul>
                        @foreach ($comics as $item)
                            <li><a href="#">{{ $item['title'] }}</a></li>
                        @endforeach
                    </ul>
                </section>
                <button>LOAD MORE</button>
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