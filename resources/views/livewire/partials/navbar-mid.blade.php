<div class="header-center left">
    <div class="container">
        <div class="row">
            <!-- Logo -->
            <div class="navbar-logo col-md-3 col-sm-12 col-xs-12">
                <a href="/" wire:navigate><img src="image/demo/logos/theme_logo.png" title="Your Store"
                        alt="Your Store" /></a>
            </div>
            <!-- //end Logo -->

            <!-- Search -->
            <div id="sosearchpro" class="col-sm-7 search-pro">
                <form method="GET" action="/" wire:navigate>
                    <div id="search0" class="search input-group">
                        <div class="select_category filter_type icon-select">
                            <select class="no-border" name="category_id">
                                <option value="0">All Categories</option>
                                <option value="78">Apparel</option>
                                <option value="77">Cables &amp; Connectors</option>
                                <option value="82">Cameras &amp; Photo</option>
                                <option value="80">Flashlights &amp; Lamps</option>
                                <option value="81">Mobile Accessories</option>
                                <option value="79">Video Games</option>
                                <option value="20">Jewelry &amp; Watches</option>
                                <option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earings</option>
                                <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding Rings
                                </option>
                                <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men Watches</option>
                            </select>
                        </div>

                        <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off"
                            placeholder="Search" name="search">
                        <span class="input-group-btn">
                            <button type="submit" class="button-search btn btn-primary" name="submit_search"><i
                                    class="fa fa-search"></i></button>
                        </span>
                    </div>
                    <input type="hidden" name="route" value="product/search" />
                </form>
            </div>
            <!-- //end Search -->

            <!-- Secondary menu -->
            <div class="col-md-2 col-sm-5 col-xs-12 shopping_cart pull-right">
                <!--cart-->
                <div id="cart" class=" btn-group btn-shopping-cart">
                    <a data-loading-text="Loading..." class="top_cart dropdown-toggle" data-toggle="dropdown">
                        <div class="shopcart">
                            <span class="handle pull-left"></span>
                            <span class="title">My cart</span>
                            <p class="text-shopping-cart cart-total-full">2 item(s) - $1,262.00 </p>
                        </div>
                    </a>

                    <ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">

                        <li>
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td class="text-center" style="width:70px">
                                            <a href="product.html"> <img src="image/demo/shop/product/resize/2.jpg"
                                                    style="width:70px" alt="Filet Mign" title="Filet Mign"
                                                    class="preview"> </a>
                                        </td>
                                        <td class="text-left"> <a class="cart_product_name" href="product.html">Filet
                                                Mign</a> </td>
                                        <td class="text-center"> x1 </td>
                                        <td class="text-center"> $1,202.00 </td>
                                        <td class="text-right">
                                            <a href="product.html" class="fa fa-edit"></a>
                                        </td>
                                        <td class="text-right">
                                            <a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" style="width:70px">
                                            <a href="product.html"> <img src="image/demo/shop/product/resize/3.jpg"
                                                    style="width:70px" alt="Canon EOS 5D" title="Canon EOS 5D"
                                                    class="preview"> </a>
                                        </td>
                                        <td class="text-left"> <a class="cart_product_name" href="product.html">Canon
                                                EOS 5D</a> </td>
                                        <td class="text-center"> x1 </td>
                                        <td class="text-center"> $60.00 </td>
                                        <td class="text-right">
                                            <a href="product.html" class="fa fa-edit"></a>
                                        </td>
                                        <td class="text-right">
                                            <a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                        <li>
                            <div>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class="text-left"><strong>Sub-Total</strong>
                                            </td>
                                            <td class="text-right">$1,060.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left"><strong>Eco Tax (-2.00)</strong>
                                            </td>
                                            <td class="text-right">$2.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left"><strong>VAT (20%)</strong>
                                            </td>
                                            <td class="text-right">$200.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left"><strong>Total</strong>
                                            </td>
                                            <td class="text-right">$1,262.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="text-right"> <a class="btn view-cart" href="/cart" wire:navigate><i
                                            class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp;
                                    <a class="btn btn-mega checkout-cart" href="checkout.html"><i
                                            class="fa fa-share"></i>Checkout</a>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--//cart-->
            </div>
        </div>

    </div>
</div>
