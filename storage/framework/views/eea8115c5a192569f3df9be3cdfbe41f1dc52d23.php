<div class="popup_banner">
    <span class="popup_off_banner">×</span>
    <div class="banner_popup_area">
            <img src="<?php echo e(asset('source/assets/frontend/img/banner/pop-banner.png')); ?>" alt="">
    </div>
</div>
<!-- Banner Popup End -->
<!-- Newsletter Popup Start -->
<div class="popup_wrapper">
    <div class="test">
        <span class="popup_off">Close</span>
        <div class="subscribe_area text-center mt-60">
            <h2>Newsletter</h2>
            <p>Subscribe to the Truemart mailing list to receive updates on new arrivals, special offers and other discount information.</p>
            <div class="subscribe-form-group">
                <form action="#">
                    <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">
                    <button type="submit">subscribe</button>
                </form>
            </div>
            <div class="subscribe-bottom mt-15">
                <input type="checkbox" id="newsletter-permission">
                <label for="newsletter-permission">Don't show this popup again</label>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter Popup End -->
<!-- Main Header Area Start Here -->
<header>


    
    <?php $__env->startSection('content-dx'); ?>
    <?php $__env->stopSection(); ?>
    <!-- Header Top Start Here -->
    <div class="header-top-area">
        <div class="container">
            <!-- Header Top Start -->
            <div class="header-top">
                <ul>
                    <li><a href="#"><?php echo e(trans('home.freeship')); ?></a></li>

                    <?php if(Session('cart')): ?>
                    <li><a href="<?php echo e(route('shoppingcart')); ?>"><?php echo e(trans('home.carttt')); ?></a></li>
                    <!-- <li><a href="<?php echo e(route('dathang')); ?>">Checkout</a></li> -->
                    <?php endif; ?>
                </ul>
                <ul>
                    <li><span><?php echo e(trans('home.lang_1')); ?>:</span> <a href="#">
                        <?php if(config('app.locale') != 'en'): ?>
                        <img src="<?php echo e(asset('source/assets/dest/img/vn.png')); ?>" width="16px" alt="language-selector">
                        <?php else: ?>
                        <img src="<?php echo e(asset('source/assets/frontend/img/header/1.jpg')); ?>" alt="language-selector">
                        <?php endif; ?>
                        <i class="lnr lnr-chevron-down"></i></a>
                        <!-- Dropdown Start -->
                        <ul class="ht-dropdown">
                            <li><a href="<?php echo e(URL::asset('')); ?>language/vi"><img src="<?php echo e(asset('source/assets/dest/img/vn.png')); ?>" width="16px" alt="language-selector"><?php echo e(trans('home.languagevi')); ?></a></li>
                            <li><a href="<?php echo e(URL::asset('')); ?>language/en"><img src="<?php echo e(asset('source/assets/frontend/img/header/1.jpg')); ?>" alt="language-selector"><?php echo e(trans('home.languageen')); ?></a></li>

                        </ul>
                        <!-- Dropdown End -->
                    </li>
                    <?php if(Auth::check() || Session::get('user_id_login')): ?>
                    <li>
                        <a href="<?php echo e(route('thongtincanhan')); ?>"><i class="far fa-id-card"></i> <?php echo e(trans('home.hi')); ?>,
                            <?php if(Session::get('user_name_login')): ?>
                            <?php echo e(Session::get('user_name_login')); ?>

                            <?php else: ?>
                            <?php echo e(Auth::user()->full_name); ?>

                            <?php endif; ?>
                        </a>
                    </li>
                    <li><a href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> <?php echo e(trans('home.logout')); ?></a></li>
                    <?php if(Session::get('user_name_login')): ?>

                    <?php elseif(Auth::user()->level == 1): ?>
                    <li><a href="<?php echo e(route('trang-chu-admin')); ?>">Go Admin</a></li>
                    <?php endif; ?>
                    <?php else: ?>
     <!--                <li><a href="#">My Account<i class="lnr lnr-chevron-down"></i></a>

                        <ul class="ht-dropdown">
                            <li><a href="<?php echo e(route('dangky')); ?>"><i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i>  <?php echo e(trans('home.signup')); ?></a></li>
                            <li><a href="<?php echo e(route('dangnhap')); ?>"><i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i> <?php echo e(trans('home.signin')); ?></a></li>
                        </ul>

                    </li>  -->
                    <?php endif; ?>
                </ul>
            </div>
            <!-- Header Top End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Header Top End Here -->
    <!-- Header Middle Start Here -->
    <div class="header-middle ptb-15">
        <div class="container">
            <div class="row align-items-center no-gutters">
                <div class="col-lg-3 col-md-12">
                    <div class="logo mb-all-30">
                        <a href="<?php echo e(route('trang-chu')); ?>"><img src="<?php echo e(asset('source/assets/dest/images/the11laptop.png')); ?>" style="width: 214px; height: 162px" alt="logo-image"></a>
                    </div>
                </div>
                <!-- Categorie Search Box Start Here -->
                <div class="col-lg-5 col-md-8 ml-auto mr-auto col-10">
                    <div class="categorie-search-box">
                        <form role="search" method="post" id="searchform" action="<?php echo e(route('timkiem')); ?>" onsubmit="return validate()" autocomplete="off">
                            <?php echo csrf_field(); ?>
                            <input id="key" type="text" name="search" placeholder="<?php echo e(trans('home.search')); ?>" >
                            <div id="search_ajax"></div>
                            <button type="submit"><i class="lnr lnr-magnifier"></i></button>
                        </form>
                    </div>
                </div>
                <!-- Categorie Search Box End Here -->
                <!-- Cart Box Start Here -->
                <div class="col-lg-4 col-md-12">
                    <div class="cart-box mt-all-30">
                        <ul class="d-flex justify-content-lg-end justify-content-center align-items-center">
                            <li>
                                <a><i class="lnr lnr-cart"></i>
                                <span class="my-cart">
                                    <span class="total-pro">
                                        <?php if(Session::has('cart')): ?>
                                            <?php if(Auth::check()): ?>
                                            <?php echo e(Session('cart')->totalQty); ?>

                                            <?php elseif(Session::get('user_name_login')): ?>
                                            <?php echo e(Session('cart')->totalQty); ?>

                                            <?php endif; ?>

                                        <?php else: ?> 0
                                        <?php endif; ?>
                                    </span>
                                    <span><?php echo e(trans('home.carttt')); ?></span></span>
                                </a>
                                <?php if(Auth::check() && Session::has('cart') ): ?>
                                <ul class="ht-dropdown cart-box-width">
                                    <li>
                                        <?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poroduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <!-- Cart Box Start -->
                                        <div class="single-cart-box">
                                            <div class="cart-img">
                                                <a href="#"><img src="source/image/product/<?php echo e($poroduct['item']['image']); ?>" alt="cart-image"></a>
                                                <span class="pro-quantity"><?php echo e($poroduct['qty']); ?>X</span>
                                            </div>
                                            <div class="cart-content">
                                                <h6><a href="product.html"><?php echo e($poroduct['item']->$multisp); ?> </a></h6>
                                                <span class="cart-price"><?php if($poroduct['item']['promotion_price']==0): ?><?php echo e(number_format($poroduct['item']['unit_price'])); ?> VNĐ <?php else: ?> <?php echo e(number_format($poroduct['item']['promotion_price'])); ?> VNĐ <?php endif; ?></span>
                                            </div>
                                            <a class="del-icone" href="<?php echo e(route('xoagiohang',$poroduct['item']['id'])); ?>"><i class="ion-close"></i></a>
                                        </div>
                                        <!-- Cart Box End -->
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <!-- Cart Footer Inner Start -->
                                        <div class="cart-footer">
                                            <div class="cart-actions text-center">
                                                <a class="cart-checkout" href="<?php echo e(route('shoppingcart')); ?>"><?php echo e(trans('home.chitiet')); ?></a>
                                            </div>
                                        </div>
                                        <!-- Cart Footer Inner End -->
                                    </li>
                                </ul>
                                <?php elseif(Session::get('user_name_login') && Session::has('cart') ): ?>
                                <ul class="ht-dropdown cart-box-width">
                                    <li>
                                        <?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poroduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <!-- Cart Box Start -->
                                        <div class="single-cart-box">
                                            <div class="cart-img">
                                                <a href="#"><img src="source/image/product/<?php echo e($poroduct['item']['image']); ?>" alt="cart-image"></a>
                                                <span class="pro-quantity"><?php echo e($poroduct['qty']); ?>X</span>
                                            </div>
                                            <div class="cart-content">
                                                <h6><a href="product.html"><?php echo e($poroduct['item']->$multisp); ?> </a></h6>
                                                <span class="cart-price"><?php if($poroduct['item']['promotion_price']==0): ?><?php echo e(number_format($poroduct['item']['unit_price'])); ?> VNĐ <?php else: ?> <?php echo e(number_format($poroduct['item']['promotion_price'])); ?> VNĐ <?php endif; ?></span>
                                            </div>
                                            <a class="del-icone" href="<?php echo e(route('xoagiohang',$poroduct['item']['id'])); ?>"><i class="ion-close"></i></a>
                                        </div>
                                        <!-- Cart Box End -->
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <!-- Cart Footer Inner Start -->
                                        <div class="cart-footer">
                                            <div class="cart-actions text-center">
                                                <a class="cart-checkout" href="<?php echo e(route('shoppingcart')); ?>"><?php echo e(trans('home.chitiet')); ?></a>
                                            </div>
                                        </div>
                                        <!-- Cart Footer Inner End -->
                                    </li>
                                </ul>
                                <?php endif; ?>
                            </li>
                            <li>
                                <a href="#wish_top" id="count_wish">

                                </a>
                            </li>
                            <?php if(Auth::check() || Session::get('user_name_login')): ?>
                            <?php else: ?>
                            <li><a href="<?php echo e(route('dangnhap')); ?>"><i class="lnr lnr-user"></i><span class="my-cart"><span> <strong><?php echo e(trans('home.signin')); ?></strong> Or</span><span> <?php echo e(trans('home.signup')); ?></span></span></a>

                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <!-- Cart Box End Here -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Header Middle End Here -->
    <!-- Header Bottom Start Here -->
    <div class="header-bottom  header-sticky">
        <div class="container">
            <div class="row align-items-center">
                 <div class="col-xl-3 col-lg-4 col-md-6 vertical-menu d-none d-lg-block">
                    <span class="categorie-title"><?php echo e(trans('home.brand')); ?></span>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-12 ">
                    <nav class="d-none d-lg-block">
                        <ul class="header-bottom-list d-flex">
                            <?php if($url_canonical == route('trang-chu')): ?>
                                <li class="active"><a href="<?php echo e(route('trang-chu')); ?>"><?php echo e(trans('home.home')); ?></a>
                                </li>
                            <?php else: ?>
                                <li><a href="<?php echo e(route('trang-chu')); ?>"><?php echo e(trans('home.home')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if($url_canonical == route('allproduct')): ?>
                            <li class="active"><a href="<?php echo e(route('allproduct')); ?>"><?php echo e(trans('home.producttt')); ?><i class="fa fa-angle-down"></i></a>
                                <!-- Home Version Dropdown Start -->
                                <ul class="ht-dropdown dropdown-style-two">
                                    <?php $__currentLoopData = $loai_sanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lsp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(route('loaisanpham', $lsp->id)); ?>"><?php echo e($lsp->name_type); ?></a>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <!-- Home Version Dropdown End -->
                            </li>
                            <?php else: ?>
                            <li><a href="<?php echo e(route('allproduct')); ?>"><?php echo e(trans('home.producttt')); ?><i class="fa fa-angle-down"></i></a>
                                <!-- Home Version Dropdown Start -->
                                <ul class="ht-dropdown dropdown-style-two">
                                    <?php $__currentLoopData = $loai_sanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lsp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(route('loaisanpham', $lsp->id)); ?>"><?php echo e($lsp->name_type); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <!-- Home Version Dropdown End -->
                            </li>
                            <?php endif; ?>


                            <?php if($url_canonical == route('gioithieu')): ?>
                                <li class="active"><a href="<?php echo e(route('gioithieu')); ?>"><?php echo e(trans('home.about')); ?></a></li>
                            <?php else: ?>
                                <li><a href="<?php echo e(route('gioithieu')); ?>"><?php echo e(trans('home.about')); ?></a></li>
                            <?php endif; ?>
                            <?php if($url_canonical == route('lienhe')): ?>
                                <li class="active"><a href="<?php echo e(route('lienhe')); ?>"><?php echo e(trans('home.contact')); ?></a></li>
                            <?php else: ?>
                                <li><a href="<?php echo e(route('lienhe')); ?>"><?php echo e(trans('home.contact')); ?></a></li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                    <div class="mobile-menu d-block d-lg-none">
                        <nav>
                            <ul>
                                <li><a href="<?php echo e(route('trang-chu')); ?>">home</a>
                                </li>
                                <li><a><?php echo e(trans('home.producttt')); ?></a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <?php $__currentLoopData = $loai_sanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lsp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e(route('loaisanpham', $lsp->id)); ?>"><?php echo e($lsp->name_type); ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>

                                    <!-- Mobile Menu Dropdown End -->
                                </li>


                                <li><a href="<?php echo e(route('gioithieu')); ?>"><?php echo e(trans('home.about')); ?></a></li>
                                <li><a href="<?php echo e(route('lienhe')); ?>"><?php echo e(trans('home.contact')); ?></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Header Bottom End Here -->
    <!-- Mobile Vertical Menu Start Here -->
    <div class="container d-block d-lg-none">
        <div class="vertical-menu mt-30">
            <span class="categorie-title mobile-categorei-menu"><?php echo e(trans('home.brand')); ?></span>
            <nav>
                <div id="cate-mobile-toggle" class="category-menu sidebar-menu sidbar-style mobile-categorei-menu-list menu-hidden ">
                    <ul>
                        <?php $__currentLoopData = $loai_sanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="has-sub"><a href="<?php echo e(route('loaisanpham',$sl->id)); ?>">Laptop <?php echo e($sl->name_type); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <!-- category-menu-end -->
            </nav>
        </div>
    </div>
    <!-- Mobile Vertical Menu Start End -->
</header>
<!-- Main Header Area End Here -->

<?php echo $__env->make('dk-dn-dx/dangxuat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\the11laptop\resources\views/FrontEnd/Header.blade.php ENDPATH**/ ?>