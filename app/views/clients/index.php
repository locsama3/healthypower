 <!-- offer banner section -->
 <div class="offer-banner-section">
    <div class="container">
      <div class="row">
        @foreach ( $list_categories as $category)
        <div class="col-lg-2 col-xs-12 col-md-3 col-sm-3 wow">
          <h3 style="text-align: center; text-transform: capitalize; font-size: 14px">{{ $category['category_name'] }}</h3>
          <a href="danh-sach-san-pham?danhmuc={{ $category['id'] }}">
            <img style="width:100%" alt="{{ $category['category_name'] }}" src="{{ _WEB_ROOT }}/public/uploads/prod_category/{{ $category['image'] }}">
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- end offer banner section -->
  <!-- main container -->
  <section class="main-container col1-layout home-content-container">
    <div class="container">
      <div class="row">
        <div class="std">
          <div class="col-lg-8 col-xs-12 col-sm-8 best-seller-pro wow">
            <div class="slider-items-products">
              <div class="new_title center">
                <h2>Bán chạy nhất</h2>
              </div>
              <div id="best-seller-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">
                @foreach ($list_bestseller as $product)
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
                      <div class="images-container"> <a class="product-image" title="Sample Product" href="chi-tiet-san-pham/id-{{ $product['id'] }}"> <img src="{{ _WEB_ROOT }}/public/uploads/products/{{ $product['image'] }}" class="img-responsive" alt="a" /> </a>
                        <div class="actions">
                          <div class="actions-inner">
                            <ul class="add-to-links">
                              <li><a href="wishlist.html" title="Thêm vào mục yêu thích" class="link-wishlist"><span>Thêm vào mục yêu thích</span></a></li>
                              <li><a href="compare.html" title="Thêm vào so sánh" class="link-compare "><span>Thêm vào so sánh</span></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="qv-button-container"> <a href="quick_view.html" class="qv-e-button btn-quickview-1"><span><span>Xem nhanh</span></span></a> </div>
                      </div>
                      <div class="info">
                        <div class="info-inner">
                          <div class="item-title"> <a title=" Sample Product" href="chi-tiet-san-pham/id-{{ $product['id'] }}">{{ $product['product_name']}}</a> </div>
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
                        <div class="actions">
                          <button type="button" title="Thêm vào giỏ" value="{{$product['id']}}" onclick="addToCart(this.value)" class="button btn-cart"><span>Thêm vào giỏ</span></button>
                        </div>
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
          <div class="col-lg-4 col-xs-12 col-sm-4 wow latest-pro small-pr-slider">
            <div class="slider-items-products">
              <div class="new_title center">
                <h2>Sản phẩm mới nhất</h2>
              </div>
              <div id="latest-deals-slider" class="product-flexslider hidden-buttons latest-item">
                <div class="slider-items slider-width-col4">
                  @foreach ($list_lastest as $product)
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
                      <div class="images-container"> <a class="product-image" title="Sample Product" href="chi-tiet-san-pham/id-{{ $product['id'] }}"> <img src="{{ _WEB_ROOT }}/public/uploads/products/{{ $product['image'] }}" class="img-responsive" alt="a" /> </a>
                        <div class="actions">
                          <div class="actions-inner">
                            <ul class="add-to-links">
                              <li><a href="wishlist.html" title="Thêm vào mục yêu thích" class="link-wishlist"><span>Thêm vào mục yêu thích</span></a></li>
                              <li><a href="compare.html" title="Thêm vào so sánh" class="link-compare "><span>Thêm vào so sánh</span></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="qv-button-container"> <a href="quick_view.html" class="qv-e-button btn-quickview-1"><span><span>Xem nhanh</span></span></a> </div>
                      </div>
                      <div class="info">
                        <div class="info-inner">
                          <div class="item-title"> <a title=" Sample Product" href="chi-tiet-san-pham/id-{{ $product['id'] }}">{{ $product['product_name']}}</a> </div>
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
                        <div class="actions">
                          <button type="button" value="{{$product['id']}}" onclick="addToCart(this.value)" title="Thêm vào giỏ" class="button btn-cart"><span>Thêm vào giỏ</span></button>
                        </div>
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
        </div>
      </div>
    </div>
  </section>
  <!-- End main container -->

  <!-- recommend slider -->
  <section class="recommend container">
    <div class="new-pro-slider small-pr-slider" style="overflow:visible">
      <div class="slider-items-products">
        <div class="new_title center">
          <h2>Sản phẩm nổi bật</h2>
        </div>
        <div id="recommend-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col3">
          @foreach ($list_featured as $product)
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
              <div class="images-container"> <a class="product-image" title="Sample Product" href="chi-tiet-san-pham/id-{{ $product['id'] }}"> <img src="{{ _WEB_ROOT }}/public/uploads/products/{{ $product['image'] }}" class="img-responsive" alt="a" /> </a>
                <div class="actions">
                  <div class="actions-inner">
                    <ul class="add-to-links">
                      <li><a href="wishlist.html" title="Thêm vào mục yêu thích" class="link-wishlist"><span>Thêm vào mục yêu thích</span></a></li>
                      <li><a href="compare.html" title="Thêm vào so sánh" class="link-compare "><span>Thêm vào so sánh</span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="qv-button-container"> <a href="quick_view.html" class="qv-e-button btn-quickview-1"><span><span>Xem nhanh</span></span></a> </div>
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title=" Sample Product" href="chi-tiet-san-pham/id-{{ $product['id'] }}">{{ $product['product_name']}}</a> </div>
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
                <div class="actions">
                  <button type="button" value="{{$product['id']}}" onclick="addToCart(this.value)" title="Thêm vào giỏ" class="button btn-cart"><span>Thêm vào giỏ</span></button>
                </div>
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
  </section>
  <!-- End Recommend slider -->

  <!-- banner section -->
  <!-- <div class="top-offer-banner wow">
    <div class="container">
      <div class="row">
        <div class="offer-inner col-lg-12"> -->
          <!--newsletter-wrap-->
          <!-- <div class="left">
            <div class="col-1">
              <div class="block-subscribe" style="background-color: green;">
                <div class="newsletter">
                  <form>
                    <h4><span>Đăng ký nhận mail</span></h4>
                    <h5> Nhận thông tin mới nhất và luôn cập nhật từ Healthy Power</h5>
                    <input type="text" placeholder="Nhập địa chỉ email của bạn ở đây" class="input-text required-entry validate-email" title="Sign up for our newsletter" id="newsletter1" name="email">
                    <button class="subscribe" title="Subscribe" type="submit"><span>Đăng ký</span></button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col mid" style="width:50%">
              <a href=""><img style="width: 100%;" src="{{ _WEB_ROOT }}/public/clients/images/banner_health3.png" alt="offer banner2"></a>
            </div>
            <div class="col last" style="width:50%">
              <a href=""><img style="width: 100%;" src="{{ _WEB_ROOT }}/public/clients/images/banner_health2.png" alt="offer banner2"></a>
            </div>
          </div>
          <div class="right">
            <div class="col">
              <div class="inner-text">
                <h3 style="">Ngày sức khỏe tinh thần thế giới</h3>
                <a href="" class="shop-now1">Tìm hiểu</a>
              </div>
              <a href="" title=""><img style="width: 100%; height:auto; filter: brightness(70%)" src="{{ _WEB_ROOT }}/public/clients/images/banner_health.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- End banner section -->
  
  <!-- promo banner section -->
  <div class="promo-banner-section container wow">
    <div class="container">
      <div class="row"> <img alt="promo-banner3" src="{{_WEB_ROOT.'/public/clients/images/bottom-banner.jpg'}}"></div>
    </div>
  </div>
  <!-- End promo banner section -->

  <!-- Latest Blog -->
  <section class="latest-blog container wow">
    <div class="blog-title">
      <h2><span>Bài viết mới nhất</span></h2>
    </div>
    <div class="row">
      @php
        $i = 1;
        $thumbnail = 'default.png';
      @endphp
      @foreach($latest_blogs as $key => $value)
      @php
      if(!empty($value['thumbnail'])){
        $thumbnail = $value['thumbnail'];     
      }
      @endphp
      <div class="col-xs-12 col-sm-4 {{$i == 2 ? 'wow' : ''}}">
        <div class="blog-img"> 
          <img src="{{_WEB_ROOT.'/public/uploads/blogs/'.$thumbnail}}" alt="{{$value['title']}}">
          <!--<div class="mask"> <a class="info" href="blog-detail.html">Read More</a> </div>-->
        </div>
        <p>
          <a href="{{_WEB_ROOT.'/bai-viet/'.$value['slug']}}">{{$value['title']}}</a> 
        </p>
        <div class="post-date">
          <i class="icon-calendar"></i> 
          @php
            $strtime = strtotime($value['created_at']);
            $time = date('D d/m/Y', $strtime);
          @endphp
          {{ format_date_vie($time) }}
        </div>
      </div>
      @endforeach
    </div>
  </section>
  <!-- End Latest Blog -->

  <!-- Featured Slider -->
  <section class="featured-pro wow animated parallax parallax-2">
    <div class="container">
      <div class="std">
        <div class="slider-items-products">
          <div class="featured_title center">
            <h2>Sản phẩm nổi bật</h2>
          </div>
          <div id="featured-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4">
            @foreach ($list_featured as $product)
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
                <div class="images-container"> <a class="product-image" title="Sample Product" href="chi-tiet-san-pham/id-{{ $product['id'] }}"> <img src="{{ _WEB_ROOT }}/public/uploads/products/{{ $product['image'] }}" class="img-responsive" alt="a" /> </a>
                  <div class="actions">
                    <div class="actions-inner">
                      <ul class="add-to-links">
                        <li><a href="wishlist.html" title="Thêm vào mục yêu thích" class="link-wishlist"><span>Thêm vào mục yêu thích</span></a></li>
                        <li><a href="compare.html" title="Thêm vào so sánh" class="link-compare "><span>Thêm vào so sánh</span></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="qv-button-container"> <a href="quick_view.html" class="qv-e-button btn-quickview-1"><span><span>Xem nhanh</span></span></a> </div>
                </div>
                <div class="info">
                  <div class="info-inner">
                    <div class="item-title"> <a title=" Sample Product" href="chi-tiet-san-pham/id-{{ $product['id'] }}">{{ $product['product_name']}}</a> </div>
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
                  <div class="actions">
                    <button type="button" value="{{$product['id']}}" onclick="addToCart(this.value)" title="Thêm vào giỏ" class="button btn-cart"><span>Thêm vào giỏ</span></button>
                  </div>
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
    </div>
  </section>
  <!-- End Featured Slider -->