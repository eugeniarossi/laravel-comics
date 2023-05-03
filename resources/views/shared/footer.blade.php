<!-- footer -->
<footer>
    @yield('page.footer')

    <div class="top">
        <div class="container">
            <div id="menu">
                <div class="menu-section">
                    <h3>DC COMICS</h3>
                    <ul>
                        <li>
                            <small>
                                <a href="#">Characters</a>
                            </small>
                        </li>
                        <li>
                            <small>
                                <a href="#">Characters</a>
                            </small>
                        </li>
                        <li>
                            <small>
                                <a href="#">Characters</a>
                            </small>
                        </li>
                        <li>
                            <small>
                                <a href="#">Characters</a>
                            </small>
                        </li>
                        <li>
                            <small>
                                <a href="#">Characters</a>
                            </small>
                        </li>
        
                    </ul>
                    <h3>SHOP</h3>
                    <ul>
                        <li>
                            <small>
                                <a href="#">Characters</a>
                            </small>
                        </li>
                        <li>
                            <small>
                                <a href="#">Characters</a>
                            </small>
                        </li>
        
                    </ul>
                </div>
        
                <div class="menu-section">
                    <h3>DC</h3>
                    <ul>
                        <li>
                            <small>
                                <a href="#">Characters</a>
                            </small>
                        </li>
                        <li>
                            <small>
                                <a href="#">Characters</a>
                            </small>
                        </li>
                        <li>
                            <small>
                                <a href="#">Characters</a>
                            </small>
                        </li>
                        <li>
                            <small>
                                <a href="#">Characters</a>
                            </small>
                        </li>
                        <li>
                            <small>
                                <a href="#">Characters</a>
                            </small>
                        </li>
        
                    </ul>
                </div>
        
                <div class="menu-section">
                    <h3>SITES</h3>
                    <ul>
                        <li>
                            <small>
                                <a href="#">Characters</a>
                            </small>
                        </li>
                        <li>
                            <small>
                                <a href="#">Characters</a>
                            </small>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom">
        <div class="container">
            <div class="sign-up">
                <a href="#">
                    sign-up now!
                </a>
            </div>

            <nav>
                <h2>follow us</h2>
                <ul>
                    <li v-for="link in footerNavLinks">
                        <a href="#">
                            <img src="/images/" alt="social">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</footer>
<!-- /footer -->