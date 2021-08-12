  <!-- Footer -->
  <footer class="footer">
    <div class="brand-logo ">
      <div class="container">
        <div class="slider-items-products">
          <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col6">
              @foreach ($list_suppliers as $key => $supplier)
              <!-- Item -->   
              
              <div class="item"> <a href="#x"><img style="width: 100%;" src="{{ _WEB_ROOT }}/public/uploads/supplier/{{ $supplier['image'] }}" alt="Image"></a> </div>
              <!-- End Item -->
              
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-middle container">
      <div class="col-md-3 col-sm-4">
        <div class="footer-logo"><a href="index.html" title="Logo"><img style="width: auto; height: 36px" src="{{_WEB_ROOT.'/public/clients/images/logo_client_chu.png'}}" alt="logo"></a></div>
        <p>Heathy Power hỗ trợ mọi giải pháp thanh toán một cách dễ dàng nhất</p>
        <div class="payment-accept">
          <div><img src="{{_WEB_ROOT.'/public/clients/images/payment-1.png'}}" alt="payment"> <img src="{{_WEB_ROOT.'/public/clients/images/payment-2.png'}}" alt="payment"> <img src="{{_WEB_ROOT.'/public/clients/images/payment-3.png'}}" alt="payment"> <img src="{{_WEB_ROOT.'/public/clients/images/payment-4.png'}}" alt="payment"></div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4">
        <h4>Hướng dẫn mua sắm</h4>
        <ul class="links">
          <li><a href="faq.html" title="FAQs">FAQs</a></li>
          <li><a href="#" title="Payment">Thanh toán</a></li>
          <li><a href="#" title="Shipment&lt;/a&gt;">Vận chuyển</a></li>
          <li><a href="delivery.html" title="delivery">Hoàn tiền</a></li>
          <li class="last"><a href="#" title="Return policy">Chính sách đổi trả</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-4">
        <h4>Thông tin</h4>
        <ul class="links">
          <li><a href="#/" title="Search Terms">Điều khoản</a></li>
          <li><a href="#" title="Advanced Search">Nâng cao</a></li>
          <li><a href="contact_us.html" title="Contact Us">Liên hệ với chúng tôi</a></li>
          <li><a href="#" title="Suppliers">Đối tác</a></li>
          <li class=" last"><a href="#" title="Our stores" class="link-rss">Danh sách cửa hàng</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-4">
        <h4>Liên hệ</h4>
        <div class="contacts-info">
          <address>
            <i class="add-icon">&nbsp;</i>Lô D2 Trung Tâm Phần Mềm Quang Trung, Quận 12, TP HCM<br>
          </address>
          <div class="phone-footer"><i class="phone-icon">&nbsp;</i> 09991992999</div>
          <div class="email-footer"><i class="email-icon">&nbsp;</i> <a href="mailto:support@magikcommerce.com">support@healthypower.com</a> </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom container">
      <div class="col-xs-12 coppyright" style="text-align: center;"> &copy; 2021 nhomkhongten. tất cả được bảo mật.</div>
    </div>
  </footer>

  <!-- End Footer -->
  </div>
  <div class="social">
    <ul>
      <li class="fb"><a href="#"></a></li>
      <li class="tw"><a href="#"></a></li>
      <li class="googleplus"><a href="#"></a></li>
      <li class="rss"><a href="#"></a></li>
      <li class="pintrest"><a href="#"></a></li>
      <li class="linkedin"><a href="#"></a></li>
      <li class="youtube"><a href="#"></a></li>
    </ul>
  </div>

  <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>

  <!-- JavaScript -->
  <script type="text/javascript" src="{{_WEB_ROOT.'/public/clients/js/jquery.min.js'}}"></script>
  <script type="text/javascript" src="{{_WEB_ROOT.'/public/clients/js/bootstrap.min.js'}}"></script>

  <script type="text/javascript" src="{{_WEB_ROOT.'/public/clients/js/jquery.jcarousel.min.js'}}"></script> 

  <script type="text/javascript" src="{{_WEB_ROOT.'/public/clients/js/common.js'}}"></script>
  <script type="text/javascript" src="{{_WEB_ROOT.'/public/clients/js/cloudzoom.js'}}"></script>
  <script type="text/javascript" src="{{_WEB_ROOT.'/public/clients/js/revslider.js'}}"></script>
  <script type="text/javascript" src="{{_WEB_ROOT.'/public/clients/js/owl.carousel.min.js'}}"></script>
  <script type="text/javascript" src="{{_WEB_ROOT.'/public/clients/js/sweetalert.js'}}"></script>
  <script type='text/javascript'>
    jQuery(document).ready(function() {
      jQuery('#rev_slider_4').show().revolution({
        dottedOverlay: 'none',
        delay: 5000,
        startwidth: 1170,
        startheight: 580,

        hideThumbs: 200,
        thumbWidth: 200,
        thumbHeight: 50,
        thumbAmount: 2,

        navigationType: 'thumb',
        navigationArrows: 'solo',
        navigationStyle: 'round',

        touchenabled: 'on',
        onHoverStop: 'on',

        swipe_velocity: 0.7,
        swipe_min_touches: 1,
        swipe_max_touches: 1,
        drag_block_vertical: false,

        spinner: 'spinner0',
        keyboardNavigation: 'off',

        navigationHAlign: 'center',
        navigationVAlign: 'bottom',
        navigationHOffset: 0,
        navigationVOffset: 20,

        soloArrowLeftHalign: 'left',
        soloArrowLeftValign: 'center',
        soloArrowLeftHOffset: 20,
        soloArrowLeftVOffset: 0,

        soloArrowRightHalign: 'right',
        soloArrowRightValign: 'center',
        soloArrowRightHOffset: 20,
        soloArrowRightVOffset: 0,

        shadow: 0,
        fullWidth: 'on',
        fullScreen: 'off',

        stopLoop: 'off',
        stopAfterLoops: -1,
        stopAtSlide: -1,

        shuffle: 'off',

        autoHeight: 'off',
        forceFullWidth: 'on',
        fullScreenAlignForce: 'off',
        minFullScreenHeight: 0,
        hideNavDelayOnMobile: 1500,

        hideThumbsOnMobile: 'off',
        hideBulletsOnMobile: 'off',
        hideArrowsOnMobile: 'off',
        hideThumbsUnderResolution: 0,

        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        startWithSlide: 0,
        fullScreenOffsetContainer: ''
      });

      const url = `{{ _WEB_ROOT }}/danh-sach-san-pham`
      var token = $('meta[name=csrf-token]').attr("content")
      btnSearch = document.querySelector('#submit-button')
      tokenSearch = document.querySelector('#_tokenSearch')

      btnSearch.addEventListener('click', (e) => {
        e.preventDefault();
        tokenSearch.value = token
        formSearch = document.querySelector('#search_mini_form')

        formData = new FormData(formSearch)

        formSearch.action = url
        formSearch.submit()
      })
    });
  </script>
   <script>
  
    updateVisitCount();

    function updateVisitCount() {
        fetch('https://api.countapi.xyz/update/healthypower.com/youtube/?amount=1')
        .then(res => res.json())
    }
    if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }
  </script>
