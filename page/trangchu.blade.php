        @extends('master')
        @section('content')
        <div class="fullwidthbanner-container">
            <div class="fullwidthbanner">
                <div class="bannercontainer">
                    <div>
                        <div style="margin-top: 6%;">
                            @php $gio = gmdate ("h", time() + 3600*7); @endphp
                            @if ($gio < 5) <h3 style="text-align:center">Chào Hữu buổi sáng</h3>
                                @elseif ($gio > 22)
                                <h3 style="text-align:center">Chào Hữu buổi chiều</h3>
                                @else
                                <h3 style="text-align:center">Chào Hữu buổi tối</h3>
                                @endif
                        </div>

                        @php
                        $ngay = date('d/m/Y');
                        $thu = date('N');
                        switch ($thu) {
                        case 1:
                        $chuoi_thu = 'Thứ 2';
                        break;
                        case 2:
                        $chuoi_thu = 'Thứ 3';
                        break;
                        case 3:
                        $chuoi_thu = 'Thứ 4';
                        break;
                        case 4:
                        $chuoi_thu = 'Thứ 5';
                        break;
                        case 5:
                        $chuoi_thu = 'Thứ 6';
                        break;
                        case 6:
                        $chuoi_thu = 'Thứ 7';
                        break;
                        default:
                        $chuoi_thu = 'Chủ nhật';
                        break;
                        }
                        @endphp



                    </div>
                    <div class="banner">
                        <ul>
                            @foreach($slide as $sl)
                            <!-- THE FIRST SLIDE -->
                            <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                    <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/{{$sl->image}}" data-src="source/image/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; 
								background-image: url('source/image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                    </div>
                                </div>

                            </li>
                            <!-- <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                    <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="assets/dest/images/thumbs/1.jpg" data-src="assets/dest/images/thumbs/1.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/thumbs/1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                    </div>
                                </div>

                            <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                    <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="assets/dest/images/thumbs/1.jpg" data-src="assets/dest/images/thumbs/1.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/thumbs/1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                    </div>
                                </div>

                            </li>

                            <li data-transition="boxfade" data-slotamount="20" class="active-revslide current-sr-slide-visible" style="width: 100%; height: 100%; overflow: hidden; visibility: inherit; opacity: 1; z-index: 20;">
                                <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                    <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="assets/dest/images/thumbs/1.jpg" data-src="assets/dest/images/thumbs/1.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/thumbs/1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                    </div>
                                </div>

                            </li> -->
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="tp-bannertimer"></div>
            </div>
        </div>
        <!--slider-->

        <div class="container">
            <div id="content" class="space-top-none">
                <div class="main-content">
                    <div class="space60">&nbsp;</div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="beta-products-list">
                                <h4>New Products</h4>
                                <div class="beta-products-details">
                                    <p class="pull-left">438 styles found {{count($new_product)}} sản phẩm</p>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="row">
                                    @foreach($new_product as $new)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            @if($new->promotion_price!=0)
                                            <div class="ribbon-wrapper">
                                                <div class="ribbon-sale">I love you</div>
                                            </div>
                                            @endif
                                            <div class="single-item-header">
                                                <a href="product.html"><img src="source/image/product/{{$new->image}}" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{$new-> name}}</p>
                                                <p class="single-item-price">
                                                    @if($new->promotion_price==0)
                                                    <span class="flash-sale">{{$new-> unit_price}} đồng</span>
                                                    @endif
                                                    <span class="flash-del">{{$new-> unit_price}} đồng</span>
                                                    <span class="flash-sale">{{$new-> promotion_price}} đồng</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="{{route('themgiohang',$new->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="chitiet_sanpham/{{$new->id}}">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="ribbon-wrapper">
                                                <div class="ribbon sale">Sale</div>
                                            </div>

                                            <div class="single-item-header">
                                                <a href="product.html"><img src="./source/assets/dest/images/products/2.jpg" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span class="flash-del">$34.55</span>
                                                    <span class="flash-sale">$33.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.html"><img src="./source/assets/dest/images/products/3.jpg" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span>$34.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.html"><img src="./source/assets/dest/images/products/3.jpg" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span>$34.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>

                            </div> <!-- .beta-products-list -->

                            <div class="space50">&nbsp;</div>

                            <div class="beta-products-list">
                                <h4>Top Products- San pham khuyen mai</h4>
                                <div class="beta-products-details">
                                    <p class="pull-left">Tim thay {{count($sanpham_khuyenmai)}} san pham</p>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    @foreach($sanpham_khuyenmai as $spkm)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.html"><img src="source/image/product/{{$spkm->image}}" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{$spkm->name}}</p>
                                                <p class="single-item-price" style="font-size: 18px">
                                                    <span class="flash-del">{{number_format($spkm->unit_price)}}đồng</span>
                                                    <span class="flash-sale">{{number_format($spkm->promotion_price)}}đồng</span>

                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="{{route('themgiohang',$spkm->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="chitiet_sanpham/{{$new->id}}">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>





                                <div class="space40">&nbsp;</div>
                                <div class="row">
                                    <!-- <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.html"><img src="./source/assets/dest/images/products/1.jpg" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span>$34.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="ribbon-wrapper">
                                                <div class="ribbon sale">Sale</div>
                                            </div>

                                            <div class="single-item-header">
                                                <a href="product.html"><img src="./source/assets/dest/images/products/2.jpg" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span class="flash-del">$34.55</span>
                                                    <span class="flash-sale">$33.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.html"><img src="./source/assets/dest/images/products/3.jpg" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span>$34.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.html"><img src="./source/assets/dest/images/products/3.jpg" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span>$34.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div> -->
                                    <!-- </div> -->
                                </div>
                            </div> <!-- .beta-products-list -->
                        </div>
                    </div> <!-- end section with sidebar and main content -->


                </div> <!-- .main-content -->
            </div> <!-- #content -->
        </div> <!-- .container -->
        @endsection