<div class="header-bottom">
    <div class="container">
        <div class="row">

            <div class="sidebar-menu col-md-3 col-sm-6 col-xs-12 ">
                <div class="responsive so-megamenu ">
                    <div class="so-vertical-menu no-gutter ">
                        <nav class="navbar-default">

                            <div class="container-megamenu vertical open">
                                <div id="menuHeading">
                                    <div class="megamenuToogle-wrapper">
                                        <div class="megamenuToogle-pattern">
                                            <div class="container">
                                                <div>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                                All Categories
                                                <i class="fa pull-right arrow-circle fa-chevron-circle-up"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar-header">
                                    <button type="button" id="show-verticalmenu" data-toggle="collapse"
                                        class="navbar-toggle fa fa-list-alt">

                                    </button>
                                    {{-- All Categories --}}
                                </div>
                                <div class="vertical-wrapper">
                                    <span id="remove-verticalmenu" class="fa fa-times"></span>
                                    <div class="megamenu-pattern">
                                        <div class="container">
                                            <ul class="megamenu">
                                                @foreach ($categories as $category)
                                                <li class="item-vertical style1 with-sub-menu hover">
                                                    <p class="close-menu"></p>
                                                    <a href="" class="clearfix">
                                                        <img src="image/theme/icons/9.png" alt="icon">
                                                        <span>{{ $category->nama }}</span>
                                                    </a>
                                                </li>
                                                @endforeach
                                                <li class="loadmore">
                                                    <i class="fa fa-plus-square-o"></i>
                                                    <span class="more-view">More Categories</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>

            </div>

            <!-- Main menu -->
            <div class="megamenu-hori header-bottom-right  col-md-9 col-sm-6 col-xs-12 ">
                <div class="responsive so-megamenu ">
                    <nav class="navbar-default">
                        <div class=" container-megamenu  horizontal">
                            <div class="navbar-header">
                                <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                Navigation
                            </div>

                            <div class="megamenu-wrapper">
                                <span id="remove-megamenu" class="fa fa-times"></span>
                                <div class="megamenu-pattern">
                                    <div class="container">
                                        <ul class="megamenu " data-transition="slide" data-animationtime="250">
                                            <li class=" {{ request()->routeIs('home') ? 'home' : '' }} hover">
                                                <a href="/" wire:navigate>Home</a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- //end Main menu -->

        </div>
    </div>

</div>
