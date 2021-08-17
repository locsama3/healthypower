<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <ul>
                <!-- <li class="home"> <a href="index.html" title="Go to Home Page">Trang chủ</a><span>&mdash;›</span></li>
                <li class=""> <a href="grid.html" title="Go to Home Page">Danh mục sản phẩm</a><span>&mdash;›</span></li>
                <li class="category13"><strong> Sản phẩm chi tiết </strong></li> -->
            </ul>
        </div>
    </div>
</div>
<!-- end breadcrumbs -->
<!-- main-container -->

<section class="main-container col1-layout">
    <div class="main container">
        <div class="col-main">
            <div class="row">
                <div class="product-view wow">
                    <div class="product-essential">
                        <form method="post" id="product_addtocart_form">
                            <input type="hidden" id="id_product" value="{{$product['id']}}">
                            <div class="product-img-box col-lg-6 col-sm-6 col-xs-12">
                                <ul class="moreview" id="moreview">
                                    <li class="moreview_thumb thumb_1"> 
                                        <img class="moreview_thumb_image" src="{{ _WEB_ROOT }}/public/uploads/products/{{ $product['image'] }}"> 
                                        <img class="moreview_source_image" src="{{ _WEB_ROOT }}/public/uploads/products/{{ $product['image'] }}" alt=""> 
                                        <span class="roll-over">Di chuyển chuột vào hình ảnh để phóng to</span> 
                                        <img style="position: absolute;" class="zoomImg" src="{{ _WEB_ROOT }}/public/uploads/products/{{ $product['image'] }}">
                                    </li>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($list_gallary as $image)
                                    @php
                                        $i++;
                                    @endphp
                                    <li class="moreview_thumb thumb_{{$i}} moreview_thumb_active"> 
                                        <img class="moreview_thumb_image" src="{{ _WEB_ROOT }}/public/uploads/products/{{ $image['image'] }}"> 
                                        <img class="moreview_source_image" src="{{ _WEB_ROOT }}/public/uploads/products/{{ $image['image'] }}" alt=""> 
                                        <span class="roll-over">Di chuyển chuột vào hình ảnh để phóng to</span> 
                                        <img style="position: absolute;" class="zoomImg" src="{{ _WEB_ROOT }}/public/uploads/products/{{ $image['image'] }}">
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="moreview-control"> 
                                    <a style="right: 42px;" href="javascript:void(0)" class="moreview-prev"></a> 
                                    <a style="right: 42px;" href="javascript:void(0)" class="moreview-next"></a> 
                                </div>
                            </div>
                            <!-- end: more-images -->
                            <div class="product-shop col-lg-6 col-sm-6 col-xs-12">
                                <div class="product-name">
                                    <h1>{{ $product['product_name'] }}</h1>
                                </div>
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
                                    <p class="rating-links"> <a href="#">{{ $count }} Đánh giá</a> <span class="separator"></span></p>
                                </div>
                                @if ($product['discontinued'] == 1)
                                @if ($product['quantity'] > 0 )
                                <p class="availability in-stock"><span>Còn hàng</span></p>
                                @else 
                                <p class="unavailable in-stock"><span>Hết hàng</span></p>
                                @endif
                                @else 
                                <p class="unavailable in-stock"><span>Ngừng kinh doanh</span></p>
                                @endif
                                <div class="price-block">
                                    <div class="price-box">
                                        @php
                                            $check = false;
                                        @endphp
                                        @foreach ($list_discounts as $discount)
                                            @if ($discount['product_id'] == $product['id'])
                                            <p class="old-price"> <span class="price-label">Special Price</span> <span class="price"> {{ number_format($product['list_price'], 0, ',', '.') }} đ</span> </p>
                                            <p class="special-price"> <span class="price-label">Regular Price:</span> <span class="price"> {{ number_format($product['list_price']*(1 - $discount['discount_percentage']/100), 0, ',', '.') }} đ</span> </p>
                                            @php
                                                $check = true;
                                            @endphp
                                            @endif
                                        @endforeach
                                        @if ($check == false)
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> {{ number_format($product['list_price'], 0, ',', '.') }} đ</span> </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="add-to-box">
                                    <div class="add-to-cart">
                                        <label for="qty">Số lượng:</label>
                                        <div class="pull-left">
                                            <div class="custom pull-left">
                                                <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
                                                <!-- <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty"> -->
                                                <input type="number" class="input-text" style="padding: 12px 4px; width:40px; font-size: 16px; font-weight: bold" id="qty" min="1" name="qty" value="1">
                                                <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0) result.value--;return false;" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                                            </div>
                                        </div>
                                        @if ($product['quantity'] == 0 || $product['discontinued'] == 0)
                                        <button class="button btn-cart" title="Add to Cart" type="button" disabled><span><i class="icon-basket"></i> Thêm vào giỏ hàng</span></button>
                                        @endif
                                        @if ($product['quantity'] > 0 && $product['discontinued'] == 1)
                                        <button class="button btn-cart" title="Add to Cart" id="submit-cart" type="button"><span><i class="icon-basket"></i> Thêm vào giỏ hàng</span></button>
                                        @endif
                                    </div>
                                    <div class="email-addto-box">
                                        <ul class="add-to-links">
                                            <li> <a class="link-wishlist" href="#"><span>Thêm vào danh sách xem sau</span></a></li>
                                            <li><span class="separator">|</span> <a class="link-compare" href="#"><span>Thêm vào so sánh</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="custom-box"><img alt="banner" src="{{ _WEB_ROOT}}/public/clients/images/cus-img.png"></div>
                            </div>
                        </form>
                    </div>
                    <div class="product-collateral">
                        <div class="col-sm-12 wow">
                            <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                <li class="active"> 
                                    <a href="#product_tabs_description" data-toggle="tab"> Mô tả sản phẩm </a> 
                                </li>
                                <li> <a href="#reviews_tabs" data-toggle="tab">Đánh giá</a> </li>
                            </ul>
                            <div id="productTabContent" class="tab-content">
                                <div class="tab-pane fade in active" id="product_tabs_description">
                                    <div class="std">
                                       {! $product['description'] !}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews_tabs" >
                                    <div class="col-sm-12">
                                        <ul class="data-user-detail">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                  <circle cx="12" cy="7" r="4" />
                                                  <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                </svg>
                                                @php
                                                    $user_data = Session::data('user_data');
                                                @endphp
                                                @if($user_data != null)
                                                    {{$user_data['username']}}
                                                @else
                                                    Người dùng
                                                @endif
                                            </li>
                                            <!-- <li><a href=""><i class="fa fa-clock-o"></i>11:47 PM</a></li>
                                            -->
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-time" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                  <path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" />
                                                  <circle cx="18" cy="18" r="4" />
                                                  <path d="M15 3v4" />
                                                  <path d="M7 3v4" />
                                                  <path d="M3 11h16" />
                                                  <path d="M18 16.496v1.504l1 1" />
                                                </svg>
                                                {{ date('d-m-Y h:i:s') }}
                                            </li>
                                        </ul>
                                        <style>
                                            .style_comment {
                                                border: 1px solid #ddd;
                                                background: #eeeeee47;
                                                margin: 0;
                                                margin-bottom: 16px;
                                            }
                                        </style>    
                                        <div class="row style_comment" data-prod_id = "{{ $product['id'] }}">
                                            
                                        </div>
                                        <p><b style="font-size: 16px; ">Để lại đánh giá của bạn</b></p>
                                        <!-- Rating here -->
                                        <ul class="list-inline" title="Average Rating">
                                            @php 
                                                for ($countRate=1; $countRate <=5 ; $countRate++) { 
                                                    if($countRate <= $product_rating){
                                                        $color = 'color:#ffcc00;';
                                                    }else{
                                                        $color = 'color:#ccc;';
                                                    }
                                            @endphp
                                            <li title = "star_rating" data-index = "{{ $countRate }}" 
                                            data-prod_id = "{{ $product['id'] }}" 
                                            data-rating = "{{ $product_rating }}" style = "{{ $color }}"
                                            class = "rating" id = "{{ $product['id'].'-'.$countRate }}"
                                            >
                                                &#9733;
                                            </li>
                                            @php 
                                                }
                                            @endphp
                                        </ul>
                                        <form>
                                            <div class="review1">
                                              <span>
                                                <ul class="form-list">
                                                  <li>
                                                    <label class="required my-label" for="nickname_field">Họ và tên<em>*</em></label>
                                                    <div class="input-box">
                                                      <input type="text" 
                                                        @if($user_data != null)
                                                            {! 'value="'. $user_data['username'] . '"' !}
                                                        @else
                                                            {! 'placeholder="Họ và tên"' !}
                                                        @endif
                                                      id = "nickname_field"/>
                                                    </div>
                                                  </li>
                                                  <li>
                                                    <label class="required my-label" for="email_field">Email<em>*</em></label>
                                                    <div class="input-box">
                                                      <input type="email" 
                                                        @if($user_data != null)
                                                            {! 'value="'. $user_data['user_email'] . '"' !}
                                                        @else
                                                            {! 'placeholder = "Địa chỉ Email"' !}
                                                        @endif
                                                      id = "email_field"/>
                                                    </div>
                                                  </li>
                                                </ul>
                                              </span>
                                            </div>
                                            <div class="review2">
                                                <ul>
                                                  <li>
                                                    <label class="required label-wide my-label" for="review_field">Đánh giá<em>*</em></label>
                                                    <div class="input-box">
                                                      <textarea name="comment_content" class="comment_content" placeholder="Nhập đánh giá"></textarea>
                                                    </div>
                                                  </li>
                                                </ul>
                                                <input type="hidden" class="user_id" value="{{ $user_data['id_user'] }}">
                                                <div class="buttons-set">
                                                  <button type="button" class="btn btn-default send-comment">
                                                    Bình luận
                                                  </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="box-additional">
                                <div class="related-pro wow">
                                    <div class="slider-items-products">
                                    <div class="new_title center">
                                        <h2>Sản phẩm liên quan</h2>
                                    </div>
                                    <div id="related-products-slider" class="product-flexslider hidden-buttons">
                                        <div class="slider-items slider-width-col4"> 
                                        @foreach ($list_related_products as $product)
                                        <!-- Item -->
                                        <div class="item">
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
                                                            <button type="button" title="Thêm vào giỏ hàng" class="button btn-cart" onclick="location.href=`{{_WEB_ROOT}}/them-gio-hang/id-{{ $product['id'] }}`;"><span>Thêm vào giỏ</span></button>
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
                                        </div>
                                        <!-- End Item --> 
                                        @endforeach
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                @if (!empty($list_viewed_products))
                                <div class="upsell-pro wow">
                                    <div class="slider-items-products">
                                    <div class="new_title center">
                                        <h2>Sản phẩm bạn đã xem</h2>
                                    </div>
                                    <div id="upsell-products-slider" class="product-flexslider hidden-buttons">
                                        <div class="slider-items slider-width-col4"> 
                                        @foreach ($list_viewed_products as $product)
                                        <!-- Item -->
                                        <div class="item">
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
                                        </div>
                                        <!-- End Item -->  
                                        @endforeach
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End main-container