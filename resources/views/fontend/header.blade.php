<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> +8801737221657</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> majharul.islam1657@email.com</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> 1203 Road Rangpur</a></li>
            </ul>
            <ul class="header-links pull-right">
                <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
                <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="{{url('/')}}" class="logo">
                            <img src="./img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form>
                            <select class="input-select">
                                <option value="0">All Categories</option>
                                @foreach ($categories as $category)
                                <option>{{$category->name}}</option>
                                @endforeach

                            </select>
                            <input class="input" placeholder="Search here">
                            <button class="search-btn">Search</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Wishlist -->
                        <div>
                            <a href="#">
                                <i class="fa fa-heart-o"></i>
                                <span>Your Wishlist</span>
                                <div class="qty">2</div>
                            </a>
                        </div>
                        <!-- /Wishlist -->

                        <!-- Cart -->
                             @php
                               $cart_array = cardArray();
                             @endphp


                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Your Cart</span>
                                <div class="qty"><?= count($cart_array )?></div>
                            </a>
                            <div class="cart-dropdown">
                                <div class="cart-list">
                                    @foreach ($cart_array as $v_add_cart)


                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="./img/product01.png" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">{{$v_add_cart['name']}}</a></h3>
                                            <h4 class="product-price"><span class="qty">{{$v_add_cart['quantity']}}</span>&#2547;{{$v_add_cart['price']}}</h4>
                                        </div>
                                        <a href="{{url('/delete-cart'.$v_add_cart['id'])}}" class="delete"><i class="fa fa-close"></i></a>
                                     </div>
                                    @endforeach
                                </div>
                                <div class="cart-summary">
                                    <small><?= count($cart_array )?> Item(s) selected</small>
                                    <h5>SUBTOTAL: &#2547; {{cart::getTotal()}}</h5>
                                </div>
                                <div class="cart-btns">
                                    <a href="">View Cart</a>
                                    <a href="{{url('/checkout')}}">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>


<div><!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/64837b2bcc26a871b0219eab/1h2gpi8u8';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script--></div>


                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
