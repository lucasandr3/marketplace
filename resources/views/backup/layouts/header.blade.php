/*=============================================
Traer él listado de categorías
=============================================*/

tet

/*=============================================
Traer lista de deseos
=============================================*/
teste

<header class="header header--standard header--market-place-4" data-sticky="true">

    <!--=====================================
    Header TOP
    ======================================-->

    <div class="header__top">

        <div class="container">

            <!--=====================================
            Social
            ======================================-->

            <div class="header__left">
                <ul class="d-flex justify-content-center">
                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f mr-4"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram mr-4"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-twitter mr-4"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-youtube mr-4"></i></a></li>
                </ul>
            </div>

            <!--=====================================
            Contact & lenguage
            ======================================-->

            <div class="header__right">
                <ul class="header__top-links">
                    <li><a href="/become-vendor">Sell on MarketPlace</a></li>
                    <li><a href="/store-list">Store List</a></li>
                    <li><i class="icon-telephone"></i> Hotline:<strong> 1-800-234-5678</strong></li>
                    <li>
                        <div class="ps-dropdown language">
                            <a class="btn" onclick="changeLang('en')">
                                <img src="img/template/en.png" alt="">English
                            </a>
                            <ul class="ps-dropdown-menu">
                                <li>
                                    <a class="btn" onclick="changeLang('es')">
                                        <img src="img/template/es.png" alt=""> Spanish</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

        </div><!-- End Container -->

    </div><!-- Header Top -->

    <!--=====================================
    Header Content
    ======================================-->

    <div class="header__content">

        <div class="container">

            <div class="header__content-left">

                <!--=====================================
                Logo
                ======================================-->

                <a class="ps-logo" href="/">
                    <img src="img/template/logo_light.png" alt="">
                </a>

                <!--=====================================
                Menú
                ======================================-->

                <div class="menu--product-categories">

                    <div class="menu__toggle">
                        <i class="icon-menu"></i>
                        <span> Shop by Department</span>
                    </div>

                    <div class="menu__content">

                        <ul class="menu--dropdown">


                            <li class="menu-item-has-children has-mega-menu">

                                <a href="#">
                                    <i class=""></i>
                                    category
                                </a>

                                <div class="mega-menu">

                                    <!--=====================================
                                    Traer el listado de títulos
                                    ======================================-->

                                    teste

                                    <div class="mega-menu__column">

                                        <h4>10<span class="sub-toggle"></span></h4>

                                        <ul class="mega-menu__list">

                                            <!--=====================================
                                            Traer las subcategorías
                                            ======================================-->

                                            teste

                                            <li>
                                                <a href="#">teste</a>
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                            </li>


                        </ul>

                    </div>

                </div><!-- End menu-->

            </div><!-- End Header Content Left-->

            <!--=====================================
            Search
            ======================================-->

            <div class="header__content-center">

                <form class="ps-form--quick-search">

                    <input class="form-control inputSearch" type="text" placeholder="I'm shopping for...">

                    <button type="button" class="btnSearch" path="#">Search</button>

                </form>

            </div>

            <div class="header__content-right">

                <div class="header__actions">

                    <!--=====================================
                    Wishlist
                    ======================================-->

                    <a class="header__extra" href="#account&wishlist">
                        <i class="icon-heart"></i>
                        <span>
                            <i class="totalWishlist">0</i>
                        </span>
                    </a>

                    <!--=====================================
                    Cart
                    ======================================-->

                    <div class="ps-cart--mini">

                        <a class="header__extra">
                            <i class="icon-bag2"></i><span><i>10</i></span>
                        </a>

                        <div class="ps-cart__content">

                            <div class="ps-cart__items">

                                10

                                <div class="ps-product--cart-mobile">

                                    <div class="ps-product__thumbnail">
                                        <a href="#">
                                            <img src="img/products/">
                                        </a>
                                    </div>

                                    <div class="ps-product__content">

                                        <!-- Eliminar el producto -->
                                        <a
                                            class="ps-product__remove btn"
                                            onclick="removeSC('','')">
                                            <i class="icon-cross"></i>
                                        </a>

                                        <!-- Nombre del producto -->
                                        <a href="#">
                                            teste
                                        </a>

                                        <!-- Tienda del producto -->
                                        <p class="mb-0"><strong>Sold by: </strong>v</p>

                                        <!-- Detalles del producto -->
                                        <div class="small text-secondary">

                                            10

                                        </div>

                                        <!-- El precio de envío del producto -->
                                        <p class="mb-0">
                                            <strong>Shipping:</strong> $
                                            10

                                        </p>

                                        <!-- El precio del producto y la cantidad -->
                                        <p class="mb-0">

                                            <!-- La cantidad del producto -->
                                        <p class="float-left">

                                            <strong>Quantity:</strong> 1

                                        </p>

                                        <!-- Precio del producto -->

                                        <h4 class="ps-product__price sale float-right text-danger mt-5">

                                            <del class="text-muted"> $10</del>

                                        </h4>


                                        <h4 class="ps-product__price float-right text-secondary mt-5">$
                                            10
                                        </h4>


                                        </p>


                                    </div>

                                </div>


                            </div>

                            <div class="ps-cart__footer">

                                <h3>Total:<strong>$10</strong></h3>
                                <figure>
                                    <a class="ps-btn" href="#shopping-cart">View Cart</a>
                                    <a class="ps-btn" href="#checkout">Checkout</a>
                                </figure>

                            </div>

                        </div>


                    </div>

                    <!--=====================================
                    Cuentas de usuario
                    ======================================-->

                    <div class="ps-block--user-header">
                        <div class="ps-block__left">

                            <img class="img-fluid rounded-circle w-50 ml-auto" src="img/users/default/default.png">


                            <img class="img-fluid rounded-circle w-50 ml-auto"
                                 src="img/users/">


                            <img class="img-fluid rounded-circle w-50 ml-auto"
                                 src="">


                            <img class="img-fluid rounded-circle w-50 ml-auto"
                                 src="img/users/">

                        </div>
                        <div class="ps-block__right">
                            <a href="#account&wishlist">My Acccount</a>
                        </div>
                    </div>


                    <!--=====================================
                Login and Register
                ======================================-->

                    <div class="ps-block--user-header">
                        <div class="ps-block__left">
                            <i class="icon-user"></i>
                        </div>
                        <div class="ps-block__right">
                            <a href="#account&login">Login</a>
                            <a href="#account&enrollment">Register</a>
                        </div>
                    </div>


                </div><!-- End Header Actions-->

            </div><!-- End Header Content Right-->

        </div><!-- End Container-->

    </div><!-- End Header Content-->

</header>

