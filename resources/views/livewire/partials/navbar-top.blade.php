<div class="header-top ">
    <div class="container">
        <div class="row">
            <div class="header-top-left form-inline col-sm-6 col-xs-12 ">
                <div class="form-group languages-block ">

                </div>

                <div class="form-group currencies-block">

                </div>
            </div>
            <div class="header-top-right collapsed-block text-right  col-sm-6 col-xs-12 ">
                <h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i
                            class="fa fa-angle-down"></i></a></h5>
                <div class="tabBlock" id="TabBlock-1">
                    <ul class="top-link list-inline">
                        @if ($isLoggedIn)
                        <li class="account" id="my_account">
                            <a href="#" title="My Account" class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                                <span>My Account</span> <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu ">
                                <li><a href="/register" wire:navigate><i class="fa fa-user"></i> Register</a></li>
                                <li><a href="/login" wire:navigate><i class="fa fa-pencil-square-o"></i> Login</a>
                                </li>
                            </ul>
                        </li>
                        <li class="wishlist"><a href="wishlist.html" id="wishlist-total" class="top-link-wishlist"
                                title="Wish List (2)"><span>Wish List
                                    (2)</span></a></li>
                        <li class="checkout"><a href="checkout.html" class="top-link-checkout"
                                title="Checkout"><span>Checkout</span></a></li>
                        <li class="login"><a href="/cart" wire:navigate title="Shopping Cart"><span>Shopping
                                    Cart</span></a></li>
                        @else
                        <li class="account" id="my_account">
                            <a href="/login" wire:navigate title="My Account" class="btn btn-xs">
                                <span>Login</span></a>
                        </li>
                        <li class="account" id="my_account">
                            <a href="/register" wire:navigate title="My Account" class="btn btn-xs">
                                <span>Register</span></a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
