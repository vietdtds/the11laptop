@extends('Layout')
@section('title')    
Search
@endsection
@section('content-layout')
<!-- Breadcrumb Start -->
<div class="breadcrumb-area mt-30">
    <div class="container">
        <div class="breadcrumb">
            <ul class="d-flex align-items-center">
                <li><a href="{{route('trang-chu')}}">{{ trans('home.home') }}</a></li>
                <li class="active"><a href="{{$url_canonical}}">Search</a></li>
            </ul>
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Shop Page Start -->
<div class="main-shop-page pt-100 pb-100 ptb-sm-60">
    <div class="container">
        <!-- Row End -->
        <div class="row">
            <!-- Sidebar Shopping Option Start -->
            <div class="col-lg-3 order-2 order-lg-1">
                <div class="sidebar">
                    <!-- Sidebar Electronics Categorie Start -->
                    <div class="electronics mb-40">
                        <h3 class="sidebar-title">Type</h3>
                        <div id="shop-cate-toggle" class="category-menu sidebar-menu sidbar-style">
                            <ul>
                                @foreach($loai_sanpham as $sl)
                                <?php $sp_sp = App\Models\Product::where('id_type',$sl->id )->get()->count(); ?>
                                <li>
                                    <a href="{{route('loaisanpham',$sl->id)}}">{{$sl->name_type}} ({{$sp_sp}})</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- category-menu-end -->
                    </div>
                    <!-- Sidebar Electronics Categorie End -->
                    <!-- Price Filter Options Start -->
                    <style type="text/css">
                        .style-range p {
                            float: left;
                            width: 37%;
                        }
                    </style>
                    <div class="search-filter mb-40">
                        <h3 class="sidebar-title">filter by price</h3>
                        <form class="sidbar-style">
                            <div id="slider-range"></div>
                            <div class="style-range">
                                <p><input type="text" id="amount_start" class="amount-range" ></p>
                                <p><input type="text" id="amount_end" class="amount-range" ></p>
                            </div>
                            <input type="hidden" id="start_price" name="start_price">
                            <input type="hidden" id="end_price" name="end_price">
                            <div class="clearfix"></div>
                            <input type="submit" name="filter_price" class="btn btn-default" value="Filter">
                        </form>
                    </div>
                    <!-- Price Filter Options End -->
                    <!-- Sidebar Categorie Start -->

                    <!-- Sidebar Categorie Start -->
                    <!-- Product Top Start -->
                    <div class="top-new mb-40">
                        <h3 class="sidebar-title">Top New</h3>
                        <div class="side-product-active owl-carousel">
                            <!-- Side Item Start -->
                            <div class="side-pro-item">
                                <!-- Single Product Start -->
                                @foreach($sanpham_new as $new_pr)
                                <div class="single-product single-product-sidebar">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{route('chitietsanpham',['id'=> $new_pr->id, 'product_slug'=>$new_pr->product_slug])}}">
                                            <img class="primary-img" src="source/image/product/{{$new_pr->image}}" alt="single-product" height="102.6px" width="102.6px">
                                            <img class="secondary-img" src="source/image/product/{{$new_pr->image}}" alt="single-product" height="102.6px" width="102.6px">
                                        </a>
                                        @if($new_pr->promotion_price != 0)
                                        <div class="label-product l_sale">{{number_format(100-($new_pr->promotion_price/$new_pr->unit_price)*100)}}<span class="symbol-percent">%</span></div>
                                        @endif
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="{{route('chitietsanpham',['id'=> $new_pr->id, 'product_slug'=>$new_pr->product_slug])}}">{{$new_pr->$multisp}}</a></h4>
                                        <p>
                                            @if($new_pr->promotion_price == 0)
                                            <span class="price">{{number_format($new_pr->unit_price,0,',','.')}} VNĐ</span>
                                            @else
                                            <span class="price">{{number_format($new_pr->promotion_price,0,',','.')}} VNĐ</span>
                                            <del class="prev-price">{{number_format($new_pr->unit_price,0,',','.')}} VNĐ</del>
                                            @endif
                                        </p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                @endforeach
                                <!-- Single Product End -->                                       
                            </div>
                            <!-- Side Item End -->
                        </div>
                    </div>
                    <!-- Product Top End -->                            
                    <!-- Single Banner Start -->
                    <div class="col-img">
                        <a href="#"><img src="{{asset('source/assets/frontend/img/banner/banner-sidebar.jpg')}}" alt="slider-banner"></a>
                    </div>
                    <!-- Single Banner End -->
                </div>
            </div>
            <!-- Sidebar Shopping Option End -->
            <!-- Product Categorie List Start -->
            <div class="col-lg-9 order-1 order-lg-2">
                <!-- Grid & List View Start -->
                <div class="grid-list-top border-default universal-padding d-md-flex justify-content-md-between align-items-center mb-30">
                    <div class="grid-list-view  mb-sm-15">
                        <ul class="nav tabs-area d-flex align-items-center">
                            <li><a class="active" data-toggle="tab" href="#grid-view"><i class="fa fa-th"></i></a></li>
                            <li><a data-toggle="tab" href="#list-view"><i class="fa fa-list-ul"></i></a></li>
                        </ul>
                    </div>
                    <!-- Toolbar Short Area Start -->
<!--                     <div class="main-toolbar-sorter clearfix">
                        <div class="toolbar-sorter d-flex align-items-center">
                            <label>Show:</label>
                            <select class="sorter wide" name="show">
                                <option value="12">12</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="75">75</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div> -->
                    <!-- Toolbar Short Area End -->
                </div>
                <!-- Grid & List View End -->
                @if(count($product) > 0)
                <div class="main-categorie mb-all-40">
                    <!-- Grid & List Main Area End -->
                    <div class="tab-content fix">
                        <div id="grid-view" class="tab-pane fade show active">
                            <div class="beta-products-details">
                                <p class="pull-left">{{count($product)}} styles found</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <!-- Single Product Start -->
                                @foreach($product as $seach_pro)
                                <input type="hidden" id="wishList_product_name{{$seach_pro->id}}" value="{{$seach_pro->$multisp}}" >
                                <input type="hidden" id="wishList_price{{$seach_pro->id}}" value="@if($seach_pro->promotion_price == 0)
                                {{number_format($seach_pro->unit_price,0,',','.')}} VNĐ
                                @else
                                {{number_format($seach_pro->promotion_price,0,',','.')}} VNĐ
                                @endif" >
                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a id="wishList_producturl{{$seach_pro->id}}" href="{{route('chitietsanpham',['id'=> $seach_pro->id, 'product_slug'=>$seach_pro->product_slug])}}">
                                                <img id="wishList_image{{$seach_pro->id}}" class="primary-img" src="source/image/product/{{$seach_pro->image}}" alt="single-product" height="268px" width="268px">
                                                <img class="secondary-img" src="source/image/product/{{$seach_pro->image}}" alt="single-product" height="268px" width="268px">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal_{{$seach_pro->id}}" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{route('chitietsanpham',['id'=> $seach_pro->id, 'product_slug'=>$seach_pro->product_slug])}}">{{$seach_pro->$multisp}}</a></h4>
                                                <p>
                                                    @if($seach_pro->promotion_price == 0)
                                                    <span class="price">{{number_format($seach_pro->unit_price,0,',','.')}} VNĐ</span>
                                                    @else
                                                    <span class="price">{{number_format($seach_pro->promotion_price,0,',','.')}} VNĐ</span>
                                                    <del class="prev-price">{{number_format($seach_pro->unit_price,0,',','.')}} VNĐ</del>
                                                    @endif
                                                </p>
                                                @if($seach_pro->promotion_price != 0)
                                                <div class="label-product l_sale">{{number_format(100-($seach_pro->promotion_price/$seach_pro->unit_price)*100)}}<span class="symbol-percent">%</span></div>
                                                @endif
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    @if($seach_pro->product_quantity>0)
                                                    <a 
                                                    <?php 
                                                        if(Auth::check() || Session::get('user_name_login')){
                                                            $addnewcart = route('themgiohang',$seach_pro->id);
                                                        }else{
                                                            $addnewcart = route('dangnhap');
                                                        }
                                                    ?>
                                                    href="{{$addnewcart}}"
                                                    title="{{ trans('home.addcart') }}"> + {{ trans('home.addcart') }}</a>
                                                    @else
                                                    <a class="disabled-link"> + {{ trans('home.addcart') }}</a>
                                                    @endif
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="{{ trans('home.addcompare') }}"><i class="lnr lnr-sync"></i> <span>{{ trans('home.addcompare') }}</span></a>
                                                    <a style="cursor: pointer;" id="{{$seach_pro->id}}" onclick="add_wishList_product(this.id)" title="{{ trans('home.addwishlist') }}"><i class="lnr lnr-heart"></i> <span>{{ trans('home.addwishlist') }}</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                </div>
                                @endforeach
                                <!-- Single Product End -->
                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- #grid view End -->
                        <div id="list-view" class="tab-pane fade">
                            <!-- Single Product Start -->
                            @foreach($product as $seach_pro)
                            <div class="single-product"> 
                                <div class="beta-products-details">
                                    <p class="pull-left">{{count($product)}} styles found</p>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">        
                                    <!-- Product Image Start -->
                                    <input type="hidden" id="wishList_product_name{{$seach_pro->id}}" value="{{$seach_pro->$multisp}}" >
                                    <input type="hidden" id="wishList_price{{$seach_pro->id}}" value="@if($seach_pro->promotion_price == 0)
                                    {{number_format($seach_pro->unit_price,0,',','.')}} VNĐ
                                    @else
                                    {{number_format($seach_pro->promotion_price,0,',','.')}} VNĐ
                                    @endif" >
                                    <div class="col-lg-4 col-md-5 col-sm-12">
                                        <div class="pro-img">
                                            <a id="wishList_producturl{{$seach_pro->id}}" href="{{route('chitietsanpham',['id'=> $seach_pro->id, 'product_slug'=>$seach_pro->product_slug])}}">
                                                <img id="wishList_image{{$seach_pro->id}}" class="primary-img" src="source/image/product/{{$seach_pro->image}}" alt="single-product" height="270px" width="270px">
                                                <img class="secondary-img" src="source/image/product/{{$seach_pro->image}}" alt="single-product" height="270px" width="270px">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal_{{$seach_pro->id}}" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                             @if($seach_pro->promotion_price != 0)
                                             <span class="sticker-new">{{ trans('home.sale') }}</span>
                                             @endif
                                        </div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="col-lg-8 col-md-7 col-sm-12">
                                        <div class="pro-content hot-product2">
                                            <h4><a href="{{route('chitietsanpham',['id'=> $seach_pro->id, 'product_slug'=>$seach_pro->product_slug])}}">{{$seach_pro->$multisp}}</a></h4>
                                            <p>
                                                @if($seach_pro->promotion_price == 0)
                                                <span class="price">{{number_format($seach_pro->unit_price,0,',','.')}} VNĐ</span>
                                                @else
                                                <span class="price">{{number_format($seach_pro->promotion_price,0,',','.')}} VNĐ</span>
                                                @endif
                                            </p>
                                            <p>{!! $seach_pro->$multi_description !!}</p>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    @if($seach_pro->product_quantity>0)
                                                    <a
                                                    <?php 
                                                        if(Auth::check() || Session::get('user_name_login')){
                                                            $addnewcart = route('themgiohang',$seach_pro->id);
                                                        }else{
                                                            $addnewcart = route('dangnhap');
                                                        }
                                                    ?> 
                                                    href="{{$addnewcart}}"
                                                    title="" data-original-title="{{ trans('home.addcart') }}"> + {{ trans('home.addcart') }}</a>
                                                    @else
                                                    <a class="disabled-link"> + {{ trans('home.addcart') }}</a>
                                                    @endif
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="" data-original-title="{{ trans('home.addcompare') }}"><i class="lnr lnr-sync"></i> <span>{{ trans('home.addcompare') }}</span></a>
                                                    <a style="cursor: pointer;" id="{{$seach_pro->id}}" onclick="add_wishList_product(this.id)" title="" data-original-title="{{ trans('home.addwishlist') }}"><i class="lnr lnr-heart"></i> <span>{{ trans('home.addwishlist') }}</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                            </div>

                            @endforeach
                            <!-- Single Product End -->
                        </div>

                        <!-- #list view End -->
                        {!! $product->render('FrontEnd.name')  !!}

                        </div>
                        <!-- Product Pagination Info -->
                    </div>
                    <!-- Grid & List Main Area End -->
                </div>
                @else
                <div class="beta-products-details">
                    <p class="pull-left">{{count($product)}} styles found</p>
                    <div class="clearfix"></div>
                </div>
                @endif
                
            </div>
            <!-- product Categorie List End -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Shop Page End -->
@endsection