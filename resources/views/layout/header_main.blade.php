<div class="header_main">
    <div class="container">
        <div class="row">

            <!-- Logo -->
            <div class="col-lg-2 col-sm-3 col-3 order-1">
                <div class="logo_container">
                    <div class="logo"><a href="/">OneTable</a></div>
                </div>
            </div>

            <!-- Search -->
            <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                <div class="header_search">
                    <div class="header_search_content">
                        <div class="header_search_form_container">
                            <form action="/shop/filter" method="get" class="header_search_form clearfix">
                                <input type="search" required="required" class="header_search_input" placeholder="Поиск..." name="searchString">
                                <button type="submit" class="header_search_button trans_300" value="Submit"><img src={{asset('images/search.png')}} alt=""></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Wishlist -->
            <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                    <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                        <div class="wishlist_icon"><img src= {{asset('images/heart.png')}} alt=""></div>
                        <div class="wishlist_content">
                            <div class="wishlist_text"><a href="/wishlist">Желаемое</a></div>
                            <div class="wishlist_count">{{app('wishlist')->getTotalQuantity()}}</div>
                        </div>
                    </div>

                    <!-- Cart -->
                    <div class="cart">
                        <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                            <div class="cart_icon">
                                <img src= {{asset('images/cart.png')}} alt="">
                                <div class="cart_count" ><span id="cart_count">{{app('cart')->getTotalQuantity()}}</span></div>
                            </div>
                            <div class="cart_content">
                                <div class="cart_text"><a href="/cart">Корзина</a></div>
                                <div class="cart_price" id="cart_price">{{app('cart')->getSubTotal().' ₽'}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
