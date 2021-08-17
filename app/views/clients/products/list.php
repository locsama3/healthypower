<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <ul>
                <!-- <li class="home"> <a href="index.html" title="Go to Home Page">Trang chủ</a><span>&mdash;›</span></li>
                <li class=""> <a href="grid.html" title="Go to Home Page">Tên danh mục</a><span>&mdash;›</span></li>
                <li class="category13"><strong>Tên tìm kiếm</strong></li> -->
            </ul>
        </div>
    </div>
</div>
<!-- End breadcrumbs -->

<!-- Two columns content -->
<section class="main-container col2-left-layout">
    <div class="main container">
        <div class="row">
            <section class="col-main col-sm-9 col-sm-push-3 wow">
                <div class="category-title">
                    <h1>Sản phẩm hàng đầu</h1>
                    <!-- &amp; -->
                </div>
                <!-- category banner -->
                <div class="category-description std">
                    <div class="slider-items-products">
                        <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col1">

                                <!-- Item -->
                                <div class="item"> <a href="#"><img alt="category-banner" src="{{ _WEB_ROOT }}/public/clients/images/category-banner-img.jpg"></a>
                                    <div class="cat-img-title cat-bg cat-box">
                                        <h2 class="cat-heading">Thời trang 2021</h2>
                                        <p>Trẻ trung, năng động, thể hiện cá tính của gen Z</p>
                                    </div>
                                </div>
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="item"> <a href="#x"><img alt="category-banner" src="{{ _WEB_ROOT }}/public/clients/images/category-banner-img1.jpg"></a> </div>
                                <!-- End Item -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- category banner -->
                <div class="category-products">
                    <div class="toolbar">
                        <div class="sorter">
                            <div class="view-mode"> <span title="Grid" class="button button-active button-grid" style="font-size: 13px;"></span><a href="list.html" title="List" class="button button-list" style="font-size: 13px;"></a> </div>
                        </div>
                        <div id="sort-by">
                            <label class="left">Sắp xếp: </label>
                            <ul>
                                <li><a href="#">Vị trí<span class="right-arrow"></span></a>
                                    <ul>
                                        <li><a href="#">Tên</a></li>
                                        <li><a href="#">Giá</a></li>
                                        <li><a href="#">Vị trí</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <a class="button-asc left" href="#" title="Set Descending Direction"><span style="color:#999;font-size:11px;" class="glyphicon glyphicon-arrow-up"></span></a>
                        </div>
                        <div class="pager">
                            <div id="limiter">
                                <label>SL: </label>
                                <ul>
                                    <li><a href="#">15<span class="right-arrow"></span></a>
                                        <ul>
                                            <li><a href="#">20</a></li>
                                            <li><a href="#">30</a></li>
                                            <li><a href="#">35</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="pages">
                                <label>Page:</label>
                                <ul class="pagination hidden-xs">
                                  @php
                                    $curURL = getCurURL();
                                    $pos = strpos($curURL, '?danhmuc');

                                    if ($pos !== false) {
                                        $myURL = $curURL . "&";
                                    } else {
                                        $myURL = '?';
                                    }
                                    
                                  @endphp
                                  @if($current_page > 1)
                                  <li><a href="{{$myURL. 'trang=' .($current_page - 1)}}">«</a></li>
                                  @endif

                                  @for($i = 1; $i <= $pageTotal; $i++)
                                  <li class="{{($current_page == $i) ? 'active' : ''}}">
                                    <a href="{{$myURL. 'trang=' .$i}}">{{$i}}</a>
                                  </li>
                                  @endfor

                                  @if($current_page < $pageTotal)
                                  <li><a href="{{$myURL. 'trang=' .($current_page + 1)}}">»</a></li>
                                  @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="products-grid">
                        @foreach ($list_products as $product)
                        <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            @php
                            $check = false;
                            $discount_amount = 0;
                            @endphp
                            <div class="col-item">
                                @foreach ($list_discounts as $discount)
                                    @if ($discount['product_id'] == $product['id'])
                                    <div class="sale-label sale-top-right">{{ $discount['discount_percentage'] }} %</div>
                                    @php
                                    $check = true;
                                    $discount_amount = $discount['discount_percentage']/100;
                                    break;
                                    @endphp
                                    @endif
                                @endforeach
                                <div class="images-container"> 
                                    <a class="product-image" title="Sample Product" href="chi-tiet-san-pham/id-{{ $product['id'] }}"> 
                                        <img src="{{ _WEB_ROOT }}/public/uploads/products/{{ $product['image'] }}" class="img-responsive" alt="a" /> 
                                    </a>
                                    <div class="actions">
                                        <div class="actions-inner">
                                            <button type="button" title="Thêm vào giỏ hàng" class="button btn-cart" value="{{$product['id']}}" onclick="addToCart(this.value)"><span>Thêm vào giỏ</span></button>
                                            <ul class="add-to-links">
                                                <li>
                                                    <a href="wishlist.html" title="Thêm vào mục yêu thích" class="link-wishlist">
                                                        <span>Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html" title="Thêm vào so sánh" class="link-compare ">
                                                        <span>Add to Compare</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="qv-button-container"> 
                                        <a class="qv-e-button btn-quickview-1" href="quick_view.html">
                                            <span>Quick View</span>
                                        </a> 
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="info-inner">
                                        <div class="item-title"> 
                                            <a title="{{ $product['product_name'] }}" href="chi-tiet-san-pham/san-pham-{{ $product['id'] }}">{{ $product['product_name'] }}</a> 
                                        </div>
                                        <!--item-title-->
                                        <div class="item-content">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                @php
                                                $total = 0;
                                                $count = 0;
                                                @endphp
                                                @foreach ($list_reviews as $review)
                                                    @if ($review['product_id'] == $product['id'])
                                                    @php
                                                        $total += $review['rating'];
                                                        $count ++;
                                                    @endphp
                                                    @endif
                                                @endforeach

                                                @if($count != 0)
                                                <div style="width:{{ $total/$count*20 . '%' }}" class="rating"></div>
                                                @else
                                                <div style="width:0%" class="rating"></div>

                                                @endif
                                                </div>
                                            </div>
                                            <div class="price-box">
                                                <p class="special-price"> 
                                                    <span class="price">
                                                    @if ($check == true)
                                                    {{ number_format($product['list_price']*(1-$discount_amount), 0, ',', '.') }}
                                                    @endif
                                                    @if ($check == false)
                                                    {{ number_format($product['list_price'], 0, ',', '.') }}
                                                    @endif
                                                    </span> 
                                                </p>
                                                @if ($check == true)
                                                <p class="old-price"> 
                                                    <span class="price-sep">-</span> 
                                                    <span class="price">{{ number_format($product['list_price'], 0, ',', '.') }}</span>
                                                </p>
                                                @endif
                                            </div>
                                        </div>
                                        <!--item-content-->
                                    </div>
                                    <!--info-inner-->

                                    <!--actions-->

                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="toolbar">
                        <div class="sorter">
                            <div class="view-mode"> <span title="Grid" class="button button-active button-grid" style="font-size: 13px;"></span><a href="list.html" title="List" class="button button-list" style="font-size: 13px;"></a> </div>
                        </div>
                        <div id="sort-by">
                            <label class="left">Sắp xếp: </label>
                            <ul>
                                <li><a href="#">Vị trí<span class="right-arrow"></span></a>
                                    <ul>
                                        <li><a href="#">Tên</a></li>
                                        <li><a href="#">Giá</a></li>
                                        <li><a href="#">Vị trí</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <a class="button-asc left" href="#" title="Set Descending Direction"><span style="color:#999;font-size:11px;" class="glyphicon glyphicon-arrow-up"></span></a>
                        </div>
                        <div class="pager">
                            <div id="limiter">
                                <label>SL: </label>
                                <ul>
                                    <li><a href="#">15<span class="right-arrow"></span></a>
                                        <ul>
                                            <li><a href="#">20</a></li>
                                            <li><a href="#">30</a></li>
                                            <li><a href="#">35</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="pages">
                                <label>Page:</label>
                                <ul class="pagination hidden-xs">
                                  @php
                                    $curURL = getCurURL();
                                    $pos = strpos($curURL, '?danhmuc');

                                    if ($pos !== false) {
                                        $myURL = $curURL . "&";
                                    } else {
                                        $myURL = '?';
                                    }
                                    
                                  @endphp
                                  @if($current_page > 1)
                                  <li><a href="{{$myURL. 'trang=' .($current_page - 1)}}">«</a></li>
                                  @endif

                                  @for($i = 1; $i <= $pageTotal; $i++)
                                  <li class="{{($current_page == $i) ? 'active' : ''}}">
                                    <a href="{{$myURL. 'trang=' .$i}}">{{$i}}</a>
                                  </li>
                                  @endfor

                                  @if($current_page < $pageTotal)
                                  <li><a href="{{$myURL. 'trang=' .($current_page + 1)}}">»</a></li>
                                  @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow">
                <div class="side-nav-categories">
                    <div class="block-title"> Danh mục sản phẩm </div>
                    <!--block-title-->
                    <!-- BEGIN BOX-CATEGORY -->
                    <div class="box-content box-category">
                        <ul>
                            <!--level 0-->
                            <li> <a href="#.html">Danh mục khác</a> <span class="subDropdown plus"></span>
                                <ul class="level0_482" style="display:none">
                                    <li> <a href="#/smartphones.html"> Smartphones </a> <span class="subDropdown plus"></span>
                                        <ul class="level1" style="display:none">
                                            <li> <a href="#/smartphones/samsung.html"> Samsung </a> </li>
                                            <li> <a href="#/smartphones/apple.html"> Apple </a> </li>
                                            <li> <a href="#/smartphones/blackberry.html"> Blackberry </a> </li>
                                            <li> <a href="#/smartphones/nokia.html"> Nokia </a> </li>
                                            <li> <a href="#/smartphones/htc.html"> HTC </a> </li>
                                            <!--end for-each -->
                                        </ul>
                                        <!--level1-->
                                    </li>
                                    <!--level1-->
                                    <li> <a href="#/cameras.html"> Cameras </a> <span class="subDropdown plus"></span>
                                        <ul class="level1" style="display:none">
                                            <li> <a href="#/cameras/digital-cameras.html"> Digital Cameras </a> </li>
                                            <li> <a href="#/cameras/camcorders.html"> Camcorders </a> </li>
                                            <li> <a href="#/cameras/lenses.html"> Lenses </a> </li>
                                            <li> <a href="#/cameras/filters.html"> Filters </a> </li>
                                            <li> <a href="#/cameras/tripod.html"> Tripod </a> </li>
                                            <!--end for-each -->
                                        </ul>
                                        <!--level1-->
                                    </li>
                                    <!--level1-->
                                    <li> <a href="#/accesories.html"> Accesories </a> <span class="subDropdown plus"></span>
                                        <ul class="level1" style="display:none">
                                            <li> <a href="#/accesories/headsets.html"> HeadSets </a> </li>
                                            <li> <a href="#/accesories/batteries.html"> Batteries </a> </li>
                                            <li> <a href="#/accesories/screen-protectors.html"> Screen Protectors </a> </li>
                                            <li> <a href="#/accesories/memory-cards.html"> Memory Cards </a> </li>
                                            <li> <a href="#/accesories/cases.html"> Cases </a> </li>
                                            <!--end for-each -->
                                        </ul>
                                        <!--level1-->
                                    </li>
                                    <!--level1-->
                                </ul>
                                <!--level0-->
                            </li>
                            @foreach ($list_prod_cates as $category)
                            <!--level 0-->
                            <li> <a  style="text-transform: capitalize;" href="?danhmuc={{ $category['id'] }}">{{ $category['category_name'] }}</a> </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--box-content box-category-->
                </div>
                <div class="block block-layered-nav">
                    <div class="block-title"><span>Bộ lọc</span></div>
                    <div class="block-content">
                        <p class="block-subtitle">Lựa chọn</p>
                        <dl id="narrow-by-list">
                            <dt class="odd">Giá</dt>
                            <dd class="odd">
                                <ol>
                                    <li> <a href="#"><span class="price">0 đ</span> - <span class="price">200.000 đ</span></a> (6)
                                    </li>
                                    <li> <a href="#"><span class="price">200.000 đ</span> và lớn hơn</a> (6) </li>
                                </ol>
                            </dd>
                            <dt class="even">Thương hiệu</dt>
                            <dd class="even">
                                <ol>
                                    <li> <a href="#">TheBrand</a> (9) </li>
                                    <li> <a href="#">Company</a> (4) </li>
                                    <li> <a href="#">LogoFashion</a> (1) </li>
                                </ol>
                            </dd>
                            <dt class="odd">Màu sắc</dt>
                            <dd class="odd">
                                <ol>
                                    <li> <a href="#">Xanh lá</a> (1) </li>
                                    <li> <a href="#">Trắng</a> (5) </li>
                                    <li> <a href="#">Đen</a> (5) </li>
                                    <li> <a href="#">Xám</a> (4) </li>
                                    <li> <a href="#">Xám đen</a> (3) </li>
                                    <li> <a href="#">Xanh dương</a> (1) </li>
                                </ol>
                            </dd>
                            <dt class="last even">Size</dt>
                            <dd class="last even">
                                <ol>
                                    <li> <a href="#">S</a> (6) </li>
                                    <li> <a href="#">M</a> (6) </li>
                                    <li> <a href="#">L</a> (4) </li>
                                    <li> <a href="#">XL</a> (4) </li>
                                </ol>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="block block-banner"><a href="#"><img src="{{ _WEB_ROOT }}/public/clients/images/banner_health.png" alt="block-banner"></a></div>
            </aside>
        </div>
    </div>
</section>
<!-- End Two columns content -->