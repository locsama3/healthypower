<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <ul>
                <li class="home"> <a href="index.html" title="Go to Home Page">Trang chủ</a><span>&mdash;›</span></li>
                <li class=""> <a href="grid.html" title="Go to Home Page">Danh mục sản phẩm</a><span>&mdash;›</span></li>
                <li class="category13"><strong> Sản phẩm chi tiết </strong></li>
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
                        <form action="{{_WEB_ROOT }}/cap-nhat-gio-hang/id-{{ $product['id'] }}" method="post" id="product_addtocart_form">
                            <div class="product-img-box col-lg-6 col-sm-6 col-xs-12">
                                <ul class="moreview" id="moreview">
                                    <li class="moreview_thumb thumb_1"> 
                                        <img class="moreview_thumb_image" src="{{ _WEB_ROOT }}/public/uploads/products/{{ $product['image'] }}"> 
                                        <img class="moreview_source_image" src="{{ _WEB_ROOT }}/public/uploads/products/{{ $product['image'] }}" alt=""> 
                                        <span class="roll-over">Di chuyển chuột vào hình ảnh để phóng to</span> 
                                        <img style="position: absolute;" class="zoomImg" src="{{ _WEB_ROOT }}/public/uploads/products/{{ $product['image'] }}">
                                    </li>
                                    @foreach ($list_gallary as $image)
                                    <li class="moreview_thumb thumb_2 moreview_thumb_active"> 
                                        <img class="moreview_thumb_image" src="{{ _WEB_ROOT }}/public/uploads/products/{{ $image['image'] }}"> 
                                        <img class="moreview_source_image" src="{{ _WEB_ROOT }}/public/uploads/products/{{ $image['image'] }}" alt=""> 
                                        <span class="roll-over">Di chuyển chuột vào hình ảnh để phóng to</span> 
                                        <img style="position: absolute;" class="zoomImg" src="{{ _WEB_ROOT }}/public/uploads/products/{{ $image['image'] }}">
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="moreview-control"> <a style="right: 42px;" href="javascript:void(0)" class="moreview-prev"></a> <a style="right: 42px;" href="javascript:void(0)" class="moreview-next"></a> </div>
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
                                        <div style="width:<?php echo $total/$count*20; ?>%" class="rating"></div>
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
                                            <p class="special-price"> <span class="price-label">Regular Price:</span> <span class="price"> {{ number_format($product['list_price']*(1 - $discount['discount_amount']), 0, ',', '.') }} đ</span> </p>
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
                                                <input type="number" class="input-text" id="qty" min="1" name="qty[<?=$product['id']?>]">
                                                <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0) result.value--;return false;" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                                            </div>
                                        </div>
                                        @if ($product['quantity'] == 0 || $product['discontinued'] == 0)
                                        <button class="button btn-cart" title="Add to Cart" type="button" disabled><span><i class="icon-basket"></i> Thêm vào giỏ hàng</span></button>
                                        @endif
                                        @if ($product['quantity'] > 0 && $product['discontinued'] == 1)
                                        <button class="button btn-cart" title="Add to Cart" type="submit"><span><i class="icon-basket"></i> Thêm vào giỏ hàng</span></button>
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
                                <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Mô tả sản phẩm </a> </li>
                                <!-- <li><a href="#product_tabs_tags" data-toggle="tab">Tags</a></li> -->
                                <li> <a href="#reviews_tabs" data-toggle="tab">Đánh giá</a> </li>
                                <!-- <li> <a href="#product_tabs_custom" data-toggle="tab">Custom Tab</a> </li>
                                <li> <a href="#product_tabs_custom1" data-toggle="tab">Custom Tab1</a> </li> -->
                            </ul>
                            <div id="productTabContent" class="tab-content">
                                <div class="tab-pane fade in active" id="product_tabs_description">
                                    <div class="std">
                                       {! $product['description'] !}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product_tabs_tags">
                                    <div class="box-collateral box-tags">
                                        <div class="tags">
                                            <form id="addTagForm" action="#" method="get">
                                                <div class="form-add-tags">
                                                    <label for="productTagName">Add Tags:</label>
                                                    <div class="input-box">
                                                        <input class="input-text required-entry" name="productTagName" id="productTagName" type="text" style="width:35%;">
                                                        <button type="button" title="Add Tags" class=" button btn-add" onClick="submitTagForm()"> <span>Add Tags</span> </button>
                                                    </div>
                                                    <!--input-box-->
                                                </div>
                                            </form>
                                        </div>
                                        <!--tags-->
                                        <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews_tabs">
                                    <div class="box-collateral box-reviews" id="customer-reviews">
                                        
                                        <div class="box-reviews2">
                                            <h3>Khách hàng đánh giá</h3>
                                            <div class="box visible">
                                                <ul>
                                                    @if (!empty($customers))
                                                    @foreach ($customers as $customer)
                                                    @foreach ($reviews as $review)
                                                    @if ($review['customer_id'] == $customer['id'])
                                                    <li>
                                                        <table class="ratings-table">
                                                            <colgroup>
                                                                <col width="1">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="rating-box">
                                                                            <div class="rating" style="width:<?php echo $review['rating']*20 ?>%;"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="review">
                                                            <strong>{{ $customer['fullname'] }}</strong>
                                                            <small> {{ $review['created_at'] }} </small>
                                                            <div class="review-txt"> {{ $review['comment'] }} </div>
                                                        </div>
                                                    </li>
                                                    @endif
                                                    @endforeach
                                                    @endforeach
                                                    @endif
                                                </ul>
                                            </div>
                                            <div class="actions"> <a class="button view-all" id="revies-button"><span><span>View all</span></span></a> </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product_tabs_custom">
                                    <div class="product-tabs-content-inner clearfix">
                                        <p><strong>Lorem Ipsum</strong><span>&nbsp;is
                                                simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                                has been the industry's standard dummy text ever since the 1500s, when
                                                an unknown printer took a galley of type and scrambled it to make a type
                                                specimen book. It has survived not only five centuries, but also the
                                                leap into electronic typesetting, remaining essentially unchanged. It
                                                was popularised in the 1960s with the release of Letraset sheets
                                                containing Lorem Ipsum passages, and more recently with desktop
                                                publishing software like Aldus PageMaker including versions of Lorem
                                                Ipsum.</span></p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product_tabs_custom1">
                                    <div class="product-tabs-content-inner clearfix">
                                        <p> <strong> Comfortable </strong><span>&nbsp;preshrunk shirts. Highest Quality Printing. 6.1 oz. 100% preshrunk heavyweight cotton Shoulder-to-shoulder taping Double-needle sleeves and bottom hem

                                                Lorem Ipsumis
                                                simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                                has been the industry's standard dummy text ever since the 1500s, when
                                                an unknown printer took a galley of type and scrambled it to make a type
                                                specimen book. It has survived not only five centuries, but also the
                                                leap into electronic typesetting, remaining essentially unchanged. It
                                                was popularised in the 1960s with the release of Letraset sheets
                                                containing Lorem Ipsum passages, and more recently with desktop
                                                publishing software like Aldus PageMaker including versions of Lorem
                                                Ipsum.</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="box-additional">
                                <div class="related-pro wow">
                                    <div class="slider-items-products">
                                        <div class="new_title center">
                                            <h2>Sản phẩm tương tự</h2>
                                        </div>
                                        <div id="related-products-slider" class="product-flexslider hidden-buttons">
                                            <div class="slider-items slider-width-col4">

                                                <!-- Item -->
                                                @foreach ($list_related_products as $product)
                                                <div class="item">
                                                    @php
                                                    $check = false;
                                                    $discount_amount = 0;
                                                    @endphp
                                                    <div class="col-item">
                                                        @foreach ($list_discounts as $discount)
                                                            @if ($discount['product_id'] == $product['id'])
                                                            <div class="sale-label sale-top-right">{{ $discount['discount_amount']*100}} %</div>
                                                            @php
                                                            $check = true;
                                                            $discount_amount = $discount['discount_amount'];
                                                            break;
                                                            @endphp
                                                            @endif
                                                        @endforeach
                                                        <div class="images-container"> <a class="product-image" title="Sample Product" href="chi-tiet-san-pham/id-{{ $product['id'] }}"> <img src="{{ _WEB_ROOT }}/public/uploads/products/{{ $product['image'] }}" class="img-responsive" alt="a" /> </a></a>
                                                            <div class="actions">
                                                                <div class="actions-inner">
                                                                    <button type="button" title="Thêm vào giỏ" class="button btn-cart"><span>Thêm vào giỏ</span></button>
                                                                    <ul class="add-to-links">
                                                                        <li><a title="Thêm vào mục yêu thích" class="link-wishlist" href="wishlist.html"><span>Thêm vào mục yêu thích</span></a></li>
                                                                        <li><a title="Thêm vào so sánh" class="link-compare" href="compare.html"><span>Thêm vào so sánh</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Xem nhanh</span></span></a> </div>
                                                        </div>
                                                        <div class="info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a href="#l" title="{{ $product['product_name'] }}"> {{ $product['product_name'] }} </a> </div>
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
                                                                        <div style="width:<?php echo $total/$count*20; ?>%" class="rating"></div>
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
                                                @endforeach
                                                <!-- End Item -->

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
                                                            <div class="sale-label sale-top-right">{{ $discount['discount_amount']*100}} %</div>
                                                            @php
                                                            $check = true;
                                                            $discount_amount = $discount['discount_amount'];
                                                            break;
                                                            @endphp
                                                            @endif
                                                        @endforeach
                                                        <div class="images-container"> <a class="product-image" title="Sample Product" href="hi-tiet-san-pham/id-{{ $product['id'] }}"> <img src="{{ _WEB_ROOT }}/public/uploads/products/{{ $product['image'] }}" class="img-responsive" alt="a" /> </a></a>
                                                            <div class="actions">
                                                                <div class="actions-inner">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart"><span>Thêm vào giỏ</span></button>
                                                                    <ul class="add-to-links">
                                                                        <li><a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Thêm vào mục yêu thích</span></a></li>
                                                                        <li><a title="Add to Compare" class="link-compare" href="compare.html"><span>Thêm vào so sánh</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
                                                        </div>
                                                        <div class="info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a href="#l" title=" Sample Product"> {{ $product['product_name'] }} </a> </div>
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
                                                                        <div style="width:<?php echo $total/$count*20; ?>%" class="rating"></div>
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
<!--End main-container -->