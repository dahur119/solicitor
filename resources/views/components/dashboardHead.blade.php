<header class="transparent">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="/">
                                <img alt="" class="logo" src="images/logo-light.png" />
                                <img alt="" class="logo-2" src="images/logo.png" />
                            </a>
                        </div>
                        <!-- logo close -->
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">About</a>
                                <ul>
                                    <li><a href="/team">The Team</a></li>
                                </ul>
                            </li>
                            <li><a href="/practice-areas">Practice Areas</a></li>
                            <li><a href="/news">News</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                        <!-- mainmenu close -->
                    </div>
                    <div class="de-flex-col">
                        <!-- User Profile Dropdown -->
                       
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf  <!-- CSRF Token -->
                            <button type="submit" class="">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

