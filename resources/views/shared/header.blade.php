<!-- header -->
<header>
    <!-- header top -->
    <div class="header-top">
        @yield('header.top')
    </div>
    <!-- /header top -->
    <!-- header bottom -->
    <div class="header-bottom">
        <div class="container">
            <a href="/"><img src="{{ $logo }}" alt="logo"></a>
            <nav>
                @yield('header.bottom.nav')
            </nav>
        </div>
    </div>
    <!-- /header bottom -->
</header>
<!-- /header -->