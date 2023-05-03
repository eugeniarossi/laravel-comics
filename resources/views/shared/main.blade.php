<!-- main -->
<main>
    <!-- jumbotron -->
    <div class="jumbotron"></div>
    <!-- /jumbotron -->
    <!-- main-content -->
    <div class="main-content">
        <div class="container">
            <h5>CURRENT SERIES</h5>
            <section>  
                @yield('main.content')
            </section>
            <button>LOAD MORE</button>
        </div>
    </div>
    <!-- /main-content -->
    <!-- nav -->
    <nav>
        <div class="container">
            <nav>
                @yield('main.nav')
            </nav>
        </div>
    </nav>
    <!-- /nav -->
</main>
<!-- /main -->