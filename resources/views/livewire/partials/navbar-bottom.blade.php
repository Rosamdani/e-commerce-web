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
                                            <li class="home hover">
                                                <a href="/" wire:navigate>Home</a>
                                            </li>
                                            <li class="with-sub-menu hover">
                                                <p class="close-menu"></p>
                                                <a href="#" class="clearfix">
                                                    <strong>Features</strong>
                                                    <img class="label-hot" src="image/theme/icons/hot-icon.png"
                                                        alt="icon items">
                                                    <b class="caret"></b>
                                                </a>
                                                <div class="sub-menu" style="width: 100%; right: auto;">
                                                    <div class="content">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="column">
                                                                    <a href="#" class="title-submenu">Listing
                                                                        pages</a>
                                                                    <div>
                                                                        <ul class="row-list">
                                                                            <li><a href="category.html">Category
                                                                                    Page 1 </a></li>
                                                                            <li><a href="category-v2.html">Category
                                                                                    Page 2</a></li>
                                                                            <li><a href="category-v3.html">Category
                                                                                    Page 3</a></li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="column">
                                                                    <a href="#" class="title-submenu">Product
                                                                        pages</a>
                                                                    <div>
                                                                        <ul class="row-list">
                                                                            <li><a href="product.html">Image
                                                                                    size - big</a></li>
                                                                            <li><a href="product-v2.html">Image
                                                                                    size - medium</a></li>
                                                                            <li><a href="product-v3.html">Image
                                                                                    size - small</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="column">
                                                                    <a href="#" class="title-submenu">Shopping
                                                                        pages</a>
                                                                    <div>
                                                                        <ul class="row-list">
                                                                            <li><a href="/cart" wire:navigate>Shopping
                                                                                    Cart Page</a></li>
                                                                            <li><a href="checkout.html">Checkout
                                                                                    Page</a></li>
                                                                            <li><a href="compare.html">Compare
                                                                                    Page</a></li>
                                                                            <li><a href="wishlist.html">Wishlist
                                                                                    Page</a></li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="column">
                                                                    <a href="#" class="title-submenu">My
                                                                        Account pages</a>
                                                                    <div>
                                                                        <ul class="row-list">
                                                                            <li><a href="login.html">Login
                                                                                    Page</a></li>
                                                                            <li><a href="register.html">Register
                                                                                    Page</a></li>
                                                                            <li><a href="my-account.html">My
                                                                                    Account</a></li>
                                                                            <li><a href="order-history.html">Order
                                                                                    History</a></li>
                                                                            <li><a href="order-information.html">Order
                                                                                    Information</a></li>
                                                                            <li><a href="return.html">Product
                                                                                    Returns</a></li>
                                                                            <li><a href="gift-voucher.html">Gift
                                                                                    Voucher</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="with-sub-menu hover">
                                                <p class="close-menu"></p>
                                                <a href="#" class="clearfix">
                                                    <strong>Pages</strong>
                                                    <img class="label-hot" src="image/theme/icons/hot-icon.png"
                                                        alt="icon items">
                                                    <b class="caret"></b>
                                                </a>
                                                <div class="sub-menu" style="width: 40%; ">
                                                    <div class="content">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <ul class="row-list">
                                                                    <li><a class="subcategory_item"
                                                                            href="faq.html">FAQ</a></li>

                                                                    <li><a class="subcategory_item"
                                                                            href="sitemap.html">Site Map</a>
                                                                    </li>
                                                                    <li><a class="subcategory_item"
                                                                            href="contact.html">Contact
                                                                            us</a></li>
                                                                    <li><a class="subcategory_item"
                                                                            href="banner-effect.html">Banner
                                                                            Effect</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <ul class="row-list">
                                                                    <li><a class="subcategory_item"
                                                                            href="about-us.html">About Us
                                                                            1</a></li>
                                                                    <li><a class="subcategory_item"
                                                                            href="about-us-2.html">About Us
                                                                            2</a></li>
                                                                    <li><a class="subcategory_item"
                                                                            href="about-us-3.html">About Us
                                                                            3</a></li>
                                                                    <li><a class="subcategory_item"
                                                                            href="about-us-4.html">About Us
                                                                            4</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="with-sub-menu hover">
                                                <p class="close-menu"></p>
                                                <a href="#" class="clearfix">
                                                    <strong>Categories</strong>
                                                    <span class="label"></span>
                                                    <b class="caret"></b>
                                                </a>
                                                <div class="sub-menu" style="width: 100%; display: none;">
                                                    <div class="content">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-3 img img1">
                                                                        <a href="#"><img
                                                                                src="image/demo/cms/img1.jpg"
                                                                                alt="banner1"></a>
                                                                    </div>
                                                                    <div class="col-md-3 img img2">
                                                                        <a href="#"><img
                                                                                src="image/demo/cms/img2.jpg"
                                                                                alt="banner2"></a>
                                                                    </div>
                                                                    <div class="col-md-3 img img3">
                                                                        <a href="#"><img
                                                                                src="image/demo/cms/img3.jpg"
                                                                                alt="banner3"></a>
                                                                    </div>
                                                                    <div class="col-md-3 img img4">
                                                                        <a href="#"><img
                                                                                src="image/demo/cms/img4.jpg"
                                                                                alt="banner4"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <a href="#" class="title-submenu">Automotive</a>
                                                                <div class="row">
                                                                    <div class="col-md-12 hover-menu">
                                                                        <div class="menu">
                                                                            <ul>
                                                                                <li><a href="#"
                                                                                        class="main-menu">Car
                                                                                        Alarms and
                                                                                        Security</a></li>
                                                                                <li><a href="#"
                                                                                        class="main-menu">Car
                                                                                        Audio &amp;
                                                                                        Speakers</a></li>
                                                                                <li><a href="#"
                                                                                        class="main-menu">Gadgets
                                                                                        &amp; Auto Parts</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        class="main-menu">More
                                                                                        Car Accessories</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#"
                                                                    class="title-submenu">Electronics</a>
                                                                <div class="row">
                                                                    <div class="col-md-12 hover-menu">
                                                                        <div class="menu">
                                                                            <ul>
                                                                                <li><a href="#"
                                                                                        class="main-menu">Battereries
                                                                                        &amp; Chargers</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        class="main-menu">Headphones,
                                                                                        Headsets</a></li>
                                                                                <li><a href="#"
                                                                                        class="main-menu">Home
                                                                                        Audio</a></li>
                                                                                <li><a href="#"
                                                                                        class="main-menu">Mp3
                                                                                        Players &amp;
                                                                                        Accessories</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#" class="title-submenu">Jewelry
                                                                    &amp; Watches</a>
                                                                <div class="row">
                                                                    <div class="col-md-12 hover-menu">
                                                                        <div class="menu">
                                                                            <ul>
                                                                                <li><a href="#"
                                                                                        class="main-menu">Earings</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        class="main-menu">Wedding
                                                                                        Rings</a></li>
                                                                                <li><a href="#"
                                                                                        class="main-menu">Men
                                                                                        Watches</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#" class="title-submenu">Bags,
                                                                    Holiday Supplies</a>
                                                                <div class="row">
                                                                    <div class="col-md-12 hover-menu">
                                                                        <div class="menu">
                                                                            <ul>
                                                                                <li><a href="#"
                                                                                        class="main-menu">Gift
                                                                                        &amp; Lifestyle
                                                                                        Gadgets</a></li>
                                                                                <li><a href="#"
                                                                                        class="main-menu">Gift
                                                                                        for Man</a></li>
                                                                                <li><a href="#"
                                                                                        class="main-menu">Gift
                                                                                        for Woman</a></li>
                                                                                <li><a href="#"
                                                                                        class="main-menu">Lighter
                                                                                        &amp; Cigar
                                                                                        Supplies</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="with-sub-menu hover">
                                                <p class="close-menu"></p>
                                                <a href="#" class="clearfix">
                                                    <strong>Accessories</strong>

                                                    <b class="caret"></b>
                                                </a>
                                                <div class="sub-menu" style="width: 100%; display: none;">
                                                    <div class="content" style="display: none;">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="row">
                                                                    <div class="col-md-6 static-menu">
                                                                        <div class="menu">
                                                                            <ul>
                                                                                <li>
                                                                                    <a href="#"
                                                                                        class="main-menu">Automotive</a>
                                                                                    <ul>
                                                                                        <li><a href="#">Car
                                                                                                Alarms and
                                                                                                Security</a>
                                                                                        </li>
                                                                                        <li><a href="#">Car
                                                                                                Audio &amp;
                                                                                                Speakers</a>
                                                                                        </li>
                                                                                        <li><a href="3#">Gadgets
                                                                                                &amp; Auto
                                                                                                Parts</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"
                                                                                        class="main-menu">Smartphone
                                                                                        &amp; Tablets</a>
                                                                                    <ul>
                                                                                        <li><a href="#">Accessories
                                                                                                for i
                                                                                                Pad</a></li>
                                                                                        <li><a
                                                                                                href="#">Apparel</a>
                                                                                        </li>
                                                                                        <li><a href="#">Accessories
                                                                                                for
                                                                                                iPhone</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 static-menu">
                                                                        <div class="menu">
                                                                            <ul>
                                                                                <li>
                                                                                    <a href="#"
                                                                                        class="main-menu">Sports
                                                                                        &amp; Outdoors</a>
                                                                                    <ul>
                                                                                        <li><a href="#">Camping
                                                                                                &amp;
                                                                                                Hiking</a>
                                                                                        </li>
                                                                                        <li><a href="#">Cameras
                                                                                                &amp;
                                                                                                Photo</a>
                                                                                        </li>
                                                                                        <li><a href="#">Cables
                                                                                                &amp;
                                                                                                Connectors</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"
                                                                                        class="main-menu">Electronics</a>
                                                                                    <ul>
                                                                                        <li><a href="#">Battereries
                                                                                                &amp;
                                                                                                Chargers</a>
                                                                                        </li>
                                                                                        <li><a href="#">Bath
                                                                                                &amp;
                                                                                                Body</a>
                                                                                        </li>
                                                                                        <li><a href="#">Outdoor
                                                                                                &amp;
                                                                                                Traveling</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="title-submenu">Bestseller</span>
                                                                <div class="col-sm-12 list-product">
                                                                    <div class="product-thumb">
                                                                        <div class="image pull-left">
                                                                            <a href="#"><img
                                                                                    src="image/demo/shop/product/35.jpg"
                                                                                    width="80" alt="Filet Mign"
                                                                                    title="Filet Mign"
                                                                                    class="img-responsive"></a>
                                                                        </div>
                                                                        <div class="caption">
                                                                            <h4><a href="#">Filet Mign</a>
                                                                            </h4>
                                                                            <div class="rating-box">
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-1x"></i><i
                                                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-1x"></i><i
                                                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-1x"></i><i
                                                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-1x"></i><i
                                                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-1x"></i><i
                                                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                                            </div>
                                                                            <p class="price">$1,202.00</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 list-product">
                                                                    <div class="product-thumb">
                                                                        <div class="image pull-left">
                                                                            <a href="#"><img
                                                                                    src="image/demo/shop/product/W1.jpg"
                                                                                    width="80" alt="Dail Lulpa"
                                                                                    title="Dail Lulpa"
                                                                                    class="img-responsive"></a>
                                                                        </div>
                                                                        <div class="caption">
                                                                            <h4><a href="#">Dail Lulpa</a>
                                                                            </h4>
                                                                            <div class="rating-box">
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-1x"></i><i
                                                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-1x"></i><i
                                                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-1x"></i><i
                                                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-1x"></i><i
                                                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                                            </div>
                                                                            <p class="price">$78.00</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 list-product">
                                                                    <div class="product-thumb">
                                                                        <div class="image pull-left">
                                                                            <a href="#"><img
                                                                                    src="image/demo/shop/product/141.jpg"
                                                                                    width="80" alt="Canon EOS 5D"
                                                                                    title="Canon EOS 5D"
                                                                                    class="img-responsive"></a>
                                                                        </div>
                                                                        <div class="caption">
                                                                            <h4><a href="#">Canon EOS 5D</a>
                                                                            </h4>

                                                                            <div class="rating-box">
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                                            </div>
                                                                            <p class="price">
                                                                                <span class="price-new">$60.00</span>
                                                                                <span class="price-old">$145.00</span>

                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="">
                                                <p class="close-menu"></p>
                                                <a href="blog-page.html" class="clearfix">
                                                    <strong>Blog</strong>
                                                    <span class="label"></span>
                                                </a>
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
