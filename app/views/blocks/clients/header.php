<?php 
    $old = Session::flash('old');
    
    if (empty($old)) {
        $old = [];
    }
?>
<div class="page">

<!-- Header -->
  <header class="header-container">
    <div class="header-top">
      <div class="container">
        <div class="row"> 
          <!-- Header Language -->
          <div class="col-xs-6">
            <div class="welcome-msg hidden-xs"> Healthy Power </div>
            <div class="dropdown block-language-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="{{_WEB_ROOT.'/public/clients/images/vietnam.jpg'}}" alt="language"> Việt Nam <span class="caret"></span> </a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{_WEB_ROOT.'/public/clients/images/vietnam.jpg'}}" alt="language"> Việt Nam </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{_WEB_ROOT.'/public/clients/images/english.png'}}" alt="language"> English </a></li>
                <!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{_WEB_ROOT.'/public/clients/images/francais.png'}}" alt="language"> French </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{_WEB_ROOT.'/public/clients/images/german.png'}}" alt="language"> German </a></li> -->
              </ul>
            </div>
            <!-- End Header Language --> 
            <!-- Header Currency -->
            <div class="dropdown block-currency-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> VND <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> đ - VND </a></li>
                <!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li> -->
              </ul>
            </div>
            <!-- End Header Currency -->
            <!-- <div class="welcome-msg hidden-xs"> Healthy Power </div> -->
          </div>
          <div class="col-xs-6"> 
            <!-- Header Top Links -->
            <div class="toplinks">
              <div class="links">
                <div class="myaccount"><a title="My Account" href="login.html"><span class="hidden-xs">Tài khoản</span></a></div>
                <div class="wishlist"><a title="My Wishlist" href="wishlist.html"><span class="hidden-xs">Danh sách yêu thích</span></a></div>
                <div class="check"><a title="Checkout" href="checkout.html"><span class="hidden-xs">Thanh toán</span></a></div>
                <div class="phone hidden-xs">0123 456 789</div>
              </div>
            </div>
            <!-- End Header Top Links --> 
          </div>
        </div>
      </div>
    </div>
    <div class="header container">
      <div class="row header-wrapper">
        <div class="col-lg-2 col-sm-3 col-md-2 col-xs-12"> 
          <!-- Header Logo --> 
          <a class="logo" title="Magento Commerce" href="{{ _WEB_ROOT }}"><img alt="Magento Commerce" src="{{_WEB_ROOT.'/public/clients/images/logo.png'}}" width="50%"></a> 
          <!-- End Header Logo --> 
        </div>
        <div class="col-lg-7 col-sm-4 col-md-6 col-xs-12"> 
          <!-- Search-col -->
          <div class="search-box">
            <form method="POST" id="search_mini_form" name="Categories">
              <input type="hidden" name="_token" id="_tokenSearch" value="">
              <select name="category_id" class="cate-dropdown hidden-xs">
                <option value="0">Tất cả</option>
                @foreach ($list_prod_cates as $category)
                @if ((!empty($old) && array_key_exists('category_id', $old)) && $old['category_id'] == $category['id'])
                <option value="{{ $category['id'] }}" selected>{{ $category['category_name'] }}</option>
                @else
                <option value="{{ $category['id'] }}">{{ $category['category_name'] }}</option>
                @endif
                @endforeach
              </select>
              <input type="text" placeholder="Tìm kiếm sản phẩm" value="{{ (!empty($old) && array_key_exists('search', $old)) ? $old['search'] : '' }}" maxlength="70" class="" name="search" id="search">
              <button id="submit-button" type="submit" class="search-btn-bg">Tìm kiếm</button>
            </form>
          </div>
          <!-- End Search-col --> 
        </div>
        <!-- Top Cart -->
        <div class="col-lg-3 col-sm-5 col-md-4 col-xs-12 d-flex align-items-center justify-content-center">
          @if (!empty(Session::data('user_login')))
          <div class="user_login" style="display: flex; align-items: center; justify-content: center; position: relative">
            <div class="user_avatar" style="border-radius: 50%; width: 34px; height: 34px; overflow: hidden; margin-right: 8px">
              <img src="{{ _WEB_ROOT }}/public/uploads/customer/{{ Session::data('user_data')['user_avatar'] }}" alt="logo" style="width: 100%;">
            </div>
            <div class="user_account" style="display: flex; align-items: center; justify-content: center">
                <p style="font-size: 12px; margin-right: 6px; margin-bottom: 0">{{ Session::data('user_data')['username'] }}</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="14" height="14" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <polyline points="6 9 12 15 18 9" />
                </svg>
            </div>
            <div class="user_more_info" style="position:absolute; top: 100%; left: 0; right:0">
                <ul class="user_more_info_list">
                    <div class="user_more_info_item">
                        <a href="{{ _WEB_ROOT }}/customer-order" class="user_more_info_link">
                            Đơn hàng của tôi
                        </a>    
                    </div>
                    <div class="user_more_info_item">
                        <a href="{{ _WEB_ROOT }}/customer-notification" class="user_more_info_link">
                            Thông báo của tôi
                        </a>    
                    </div>
                    <div class="user_more_info_item">
                        <a href="{{ _WEB_ROOT }}/thong-tin-tai-khoan" class="user_more_info_link">
                            Tài khoản của tôi
                        </a>    
                    </div>
                    <div class="user_more_info_item">
                        <a href="{{ _WEB_ROOT }}/dang-xuat" class="user_more_info_link">
                            Đăng xuất
                        </a>    
                    </div>
                </ul>
            </div>
          </div>
          @else
          <div class="signup"><a title="Đăng ký" href="{{ _WEB_ROOT }}/dang-ky"><span>Đăng ký</span></a></div>
          <span class="or"> | </span>
          <div class="login"><a title="Đăng nhập" href="{{ _WEB_ROOT }}/dang-nhap"><span>Đăng nhập</span></a></div>
          @endif
        </div>
        <div class="top-cart-contain">
          <div class="mini-cart">
            <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> 
              <a href="shopping_cart.html" class="d-flex justify-content-center align-items-center"> 
                <i class="icon-cart"></i>
                <div class="cart-box"><span class="title">Giỏ hàng</span>
                  <span id="cart-total">  
                    @php
                  
                      if(Session::data('cart') != null)
                      {
                        $array = Session::data('cart');
                        $result = array_reduce($array,function($a, $b){
                          return $a + $b['qty'];
                        }, 0);
                        echo $result;
                      }
                      else
                      {
                        echo 0;
                      }
                      
                    @endphp
                  </span>
              </div>
              </a>
            </div>
            <div>
              <div class="top-cart-content arrow_box">
                <!-- <div class="block-subtitle">Recently added item(s)</div> -->
                <ul id="cart-sidebar" class="mini-products-list">
                  @if(!empty(Session::data('cart')))
                  @foreach(Session::data('cart') as $data)
                  <li class="item even"> 
                    <a class="product-image" href="#" title="Downloadable Product ">
                      <img alt="Downloadable Product " src="{{_WEB_ROOT.'/public/uploads/products/'.$data['image']}}" width="80">
                    </a>
                    <div class="detail-item">
                      <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="glyphicon glyphicon-pencil" title="Edit item" href="#">&nbsp;</a>
                        <p class="product-name"> {{$data['product_name']}} </p>
                      </div>
                      <div class="product-details-bottom"> <span class="price">{! number_format($data['list_price']) !} đ</span><span class="title-desc">Qty:</span> <strong>{{$data['qty']}}</strong> </div>
                    </div>
                  </li>
                  @endforeach
                  @endif
                </ul>
                <div class="top-subtotal">Subtotal: <span class="price">{! number_format(Session::data('total') ?? null) !} đ</span></div>
                <div class="actions">
                  <button class="btn-checkout" type="button"><span>Thanh toán</span></button>
                  <button class="view-cart" onclick="location.href=`{{_WEB_ROOT.'/gio-hang'}}`;" type="button"><span>Xem giỏ hàng</span></button>
                </div>
              </div>
            </div>
          </div>
          <div id="ajaxconfig_info" style="display:none"> <a href="#/"></a>
            <input value="" type="hidden">
            <input id="enable_module" value="1" type="hidden">
            <input class="effect_to_cart" value="1" type="hidden">
            <input class="title_shopping_cart" value="Đi tới giỏ hàng" type="hidden">
        
          </div>
        </div>
        <!-- End Top Cart --> 
      </div>
    </div>
  </header>
  <!-- end header --> 
  <!-- Navbar -->
  <nav>
    <div class="container">
      <div class="nav-inner"> 
        
        <!-- mobile-menu -->
        <div class="hidden-desktop" id="mobile-menu">
          <ul class="navmenu">
            <li>
              <div class="menutop">
                <div class="toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></div>
                <h2>Thanh công cụ</h2>
              </div>
              <ul style="display:none;" class="submenu">
                <li>
                  <ul class="topnav">
                    <li class="level0 nav-6 level-top first parent"> 
                      <a class="level-top" href="{{_WEB_ROOT}}"> <span>Trang chủ</span> </a>
                    </li>
                    <li class="level0 nav-6 level-top"> 
                      <a class="level-top" href="#"> <span>Giới thiệu</span> </a>
                    </li>
                    <li class="level0 nav-7 level-top parent"> <a class="level-top" href="grid.html"> <span>Sản phẩm</span> </a> </li>
                    <li class="level0 nav-8 level-top parent"> <a class="level-top" href="grid.html"> <span>Liên hệ</span> </a> </li>
                    <li class="level0 parent drop-menu">
                      <a href="{{_WEB_ROOT.'/bai-viet'}}">
                        <span>Bài viết</span> 
                      </a>
                      <ul class="level1">
                        @foreach ($header_blog_categories as $key => $value)
                        <li class="level1 first">
                          <a href="{{_WEB_ROOT.'/danh-muc-bai-viet/'.$value['slug']}}">
                            <span>{{$value['name']}}</span>
                          </a>
                        </li>
                        @endforeach
                      </ul>
                    </li>
                    <li class="level0 nav-9 level-top last parent "> <a class="level-top" href="contact.html"> <span>Contact</span> </a> </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <!--navmenu--> 
        </div>
        <!--End mobile-menu --> 
        <a class="logo-small" title="Magento Commerce" href="{{_WEB_ROOT}}">
          <!-- <img alt="Magento Commerce" src="{{_WEB_ROOT.'/public/clients/images/logo-healthypower.jpg'}}"> -->
          <span>Healthy</span>
        </a>
        <ul id="nav" class="hidden-xs">
          <li class="level0 parent drop-menu">
            <a href="{{_WEB_ROOT}}" class="active"><span>Trang chủ</span> </a>
          </li>
          <li class="level0 parent drop-menu"><a href="#"><span>Giới thiệu</span> </a>
            <ul class="level1">
              <li class="level1 first"><a href="grid.html"><span>Grid</span></a></li>
              <li class="level1 nav-10-2"> <a href="list.html"> <span>List</span> </a> </li>
              <li class="level1 nav-10-3"> <a href="product_detail.html"> <span>Product Detail</span> </a> </li>
              <li class="level1 nav-10-4"> <a href="shopping_cart.html"> <span>Shopping Cart</span> </a> </li>
              <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a>
                <ul class="level2">
                  <li class="level2 nav-2-1-1 first"><a href="checkout_method.html"><span>Checkout Method</span></a></li>
                  <li class="level2 nav-2-1-5 last"><a href="checkout_billing-info.html"><span>Checkout Billing Info</span></a></li>
                </ul>
              </li>
              <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
              <li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
              <li class="level1"> <a href="multiple_addresses.html"> <span>Multiple Addresses</span> </a> </li>
              <li class="level1"> <a href="about.html"> <span>About us</span> </a> </li>
              <li class="level1"><a href="compare.html"><span>Compare</span></a></li>
              <li class="level1"><a href="delivery.html"><span>Delivery</span></a> </li>
              <li class="level1"><a href="faq.html"><span>FAQ</span></a> </li>
              <li class="level1"><a href="quick_view.html"><span>Quick View</span></a> </li>
              <li class="level1"><a href="newsletter.html"><span>Newsletter</span></a> </li>
              <li class="level1"><a href="contact_us.html"><span>Contact us</span></a> </li>
              <li class="level1"><a href="sitemap.html"><span>Sitemap</span></a> </li>
              <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
            </ul>
          </li>
          <li class="level0 nav-5 level-top first"> <a href="grid.html" class="level-top"> <span>Sản phẩm</span> </a>
            <div class="level0-wrapper dropdown-6col" style="display:none;">
              <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                  <ul class="level0">
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Styliest Bag</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Clutch Handbags</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Diaper Bags</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bags</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Hobo Handbags</span></a> </li>
                      </ul>
                      <!--sub sub category--> 
                    </li>
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Material Bag</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Beaded Handbags</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fabric Handbags</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Handbags</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Leather Handbags</span></a> </li>
                      </ul>
                      <!--sub sub category--> 
                    </li>
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Shoes</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Flat Shoes</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Flat Sandals</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Boots</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Heels</span></a> </li>
                      </ul>
                      <!--sub sub category--> 
                    </li>
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Jwellery</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bracelets</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Necklaces &amp; Pendants</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Pendants</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Pins &amp; Brooches</span></a> </li>
                      </ul>
                      <!--sub sub category--> 
                    </li>
                  </ul>
                  <div class="nav-add">
                    <div class="push_item1">
                      <div class="push_img"> <a href="#"> <img  alt="women jwellery" src="{{_WEB_ROOT.'/public/clients/images/women-cate-banner.jpg'}}"> </a> </div>
                    </div>
                    <div class="push_item1">
                      <div class="push_img"> <a href="#"> <img  alt="women_jwellery" src="{{_WEB_ROOT.'/public/clients/images/women-cate-banner1.jpg'}}"> </a> </div>
                    </div>
                    <div class="push_item1 push_item1_last">
                      <div class="push_img"> <a href="#"> <img  alt="women_bag" src="{{_WEB_ROOT.'/public/clients/images/women-cate-banner2.jpg'}}"> </a> </div>
                    </div>
                    <br class="clear">
                  </div>
                </div>
                <!--nav-block nav-block-center-->
                <div class="nav-block nav-block-right std grid12-4">
                  <p><a href="#"><img class="fade-on-hover" src="{{_WEB_ROOT.'/public/clients/images/nav-women-banner.jpg'}}" alt="nav img"></a></p>
                </div>
                <!--nav-block nav-block-right std grid12-4--> 
              </div>
            </div>
          </li>
          <li class="level0 nav-7 level-top parent"> <a href="grid.html" class="level-top"> <span>Liên hệ</span> </a>
            <div class="level0-wrapper dropdown-6col" style="display: none;">
              <div class="level0-wrapper2"> 
                <!--nav-block nav-block-center-->
                <div class="nav-block nav-block-left std grid12-6">
                  <p><a href="#"><img class="fade-on-hover" src="{{_WEB_ROOT.'/public/clients/images/nav-men-banner.jpg'}}" alt="nav img"></a></p>
                </div>
                <!--nav-block nav-block-right std grid12-4-->
                
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                  <ul class="level0">
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Shoes</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sport Shoes</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Casual Shoes</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Leather Shoes</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Canvas shoes</span></a> </li>
                      </ul>
                      <!--sub sub category--> 
                    </li>
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Dresses</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Casual Dresses</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Evening</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Designer</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Party</span></a> </li>
                      </ul>
                      <!--sub sub category--> 
                    </li>
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Jackets</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Coats</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Formal Jackets</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Leather Jackets</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Blazers</span></a> </li>
                      </ul>
                      <!--sub sub category--> 
                    </li>
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Watches</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fasttrack</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Casio</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Titan</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Tommy-Hilfiger</span></a> </li>
                      </ul>
                      <!--sub sub category--> 
                    </li>
                  </ul>
                  <div class="nav-add">
                    <div class="push_item">
                      <div class="push_img"> <a href="#"> <img  alt="women_jwellery" src="{{_WEB_ROOT.'/public/clients/images/men-banner-img.jpg'}}"> </a> </div>
                    </div>
                    <div class="push_item last">
                      <div class="push_img"> <a href="#"> <img  alt="women_jwellery" src="{{_WEB_ROOT.'/public/clients/images/men-banner-img1.jpg'}}"> </a> </div>
                    </div>
                    <br class="clear">
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="level0 parent drop-menu">
            <a href="{{_WEB_ROOT.'/bai-viet'}}">
              <span>Bài viết</span> 
            </a>

            <ul style="display: none;" class="level1">
              @foreach ($header_blog_categories as $key => $value)
              <li class="level1 first">
                <a href="{{_WEB_ROOT.'/danh-muc-bai-viet/'.$value['slug']}}">
                  <span>{{$value['name']}}</span>
                </a> 
              </li>
              
              @endforeach
            </ul>
          </li>
          <li class="nav-custom-link level0 level-top parent"> <a class="level-top" href="#"><span>Đối tác</span></a>
            <div class="level0-wrapper custom-menu" style="left: 0px; display: none;">
              <div class="header-nav-dropdown-wrapper clearer">
                <div class="grid12-5">
                  <div class="custom_img"><a href="#"><img src="{{_WEB_ROOT.'/public/clients/images/custom-img1.jpg'}}" alt="custom img1"></a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                  <button class="learn_more_btn" title="Add to Cart" type="button"><span>Learn More</span></button>
                </div>
                <div class="grid12-5">
                  <div class="custom_img"><a href="#"><img src="{{_WEB_ROOT.'/public/clients/images/custom-img2.jpg'}}" alt="custom img2"></a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                  <button class="learn_more_btn" title="Add to Cart" type="button"><span>Learn More</span></button>
                </div>
                <div class="grid12-5">
                  <div class="custom_img"><a href="#"><img src="{{_WEB_ROOT.'/public/clients/images/custom-img3.jpg'}}" alt="custom img3"></a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                  <button class="learn_more_btn" title="Add to Cart" type="button"><span>Learn More</span></button>
                </div>
                <div class="grid12-5">
                  <div class="custom_img"><a href="#"><img src="{{_WEB_ROOT.'/public/clients/images/custom-img4.jpg'}}" alt="custom img4"></a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                  <button class="learn_more_btn" title="Add to Cart" type="button"><span>Learn More</span></button>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end nav -->
</div>