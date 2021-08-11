<div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <div class="col-main col-sm-9 wow">
          <div class="page-title">
            <h2>Bài viết</h2>
          </div>
          <div class="blog-wrapper" id="main">
            <div class="site-content" id="primary">
              <div role="main" id="content">
                <article class="blog_entry clearfix" id="post-29">
                  <header class="blog_entry-header clearfix">
                    <div class="blog_entry-header-inner">
                      <h2 class="blog_entry-title"> {{$blogs_by_slug['title']}} </h2>
                    </div>
                    <hr class="hr-title">
                    <!--blog_entry-header-inner--> 
                    <div class="blog_entry-header-inner">
                      <h3 class="blog_entry-title" style="font-size: 18px"> {{$blogs_by_slug['subtitle']}} </h2>
                    </div>
                  </header>
                  <!--blog_entry-header clearfix-->
                  <div class="entry-content">
                    <div class="featured-thumb">
                      <a href="#">
                        <img alt="blog-img4" src="{{_WEB_ROOT.'/public/uploads/blogs/'.$blogs_by_slug['thumbnail']}}">
                      </a>
                    </div>
                    <div class="entry-content">
                      {! $blogs_by_slug['content'] !}
                    </div>
                  </div>
                  <footer class="entry-meta"> Ngày đăng						 <a rel="category tag" title="View all posts in First Category" href="#first-category"></a>
                    <time datetime="2014-07-10T06:53:43+00:00" class="entry-date">{! $blogs_by_slug['created_at'] !}</time>
                    . </footer>
                </article>
                <div class="comment-content wow" data-blog_id = "{{$blogs_by_slug['id']}}">
                  <div class="comments-wrapper">
                    <h3> Bình luận </h3>
                    <ul class="commentlist">
                      
                      <!--comment-->
                    </ul>
                    <!--commentlist--> 
                  </div>
                  <!--comments-wrapper-->
                  
                  <div class="comments-form-wrapper clearfix">
                    <h3>Để lại bình luận của bạn</h3>
                    @php
                        $user_data = Session::data('user_data');
                    @endphp
                    <form class="comment-form" method="post" id="postComment" action="#">
                      <div class="field">
                        <label for="name">Họ và tên<em class="required">*</em></label>
                        <input type="text" class="input-text" title="Name" id="user" name="user_name"
                        @if($user_data != null)
                            {! 'value="'. $user_data['username'] . '"' !}
                        @else
                            {! 'placeholder="Họ và tên"' !}
                        @endif
                        />
                      </div>
                      <div class="field">
                        <label for="email">Địa chỉ Email<em class="required">*</em></label>
                        <input type="text" class="input-text validate-email" title="Email" id="email" name="user_email"
                        @if($user_data != null)
                            {! 'value="'. $user_data['user_email'] . '"' !}
                        @else
                            {! 'placeholder = "Địa chỉ Email"' !}
                        @endif
                        />
                      </div>
                      <div class="clear"></div>
                      <div class="field aw-blog-comment-area">
                        <label for="comment">Bình luận<em class="required">*</em></label>
                        <textarea rows="5" cols="50" class="input-text" title="Comment" id="blog_comment" name="comment"></textarea>
                      </div>
                      <div style="width:96%" class="button-set">
                        <input type="hidden" class="user_id" value="{{ $user_data['id_user'] }}">
                        <button type="button" class="bnt-comment send-comment"><span><span>Bình luận</span></span></button>
                      </div>
                    </form>
                  </div>
                  <!--comments-form-wrapper clearfix--> 
       
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-right sidebar col-sm-3">
          <div role="complementary" class="widget_wrapper13" id="secondary">
            <div class="popular-posts widget widget__sidebar wow" id="recent-posts-4">
              <h3 class="widget-title"><span>Bài viết xem nhiều</span></h3>
              <div class="widget-content">
                <ul class="posts-list unstyled clearfix">
                  @foreach ($most_view as $key => $value)
                  <li>
                    <figure class="featured-thumb"> 
                      <a href="{{_WEB_ROOT.'/bai-viet/'.$value['slug']}}"> 
                        <img width="80" height="53" alt="{{$value['title']}}" src="{{_WEB_ROOT.'/public/uploads/blogs/'.$value['thumbnail']}}"> 
                      </a> 
                    </figure>
                    <!--featured-thumb-->
                    <h4><a title="Pellentesque posuere" href="{{_WEB_ROOT.'/bai-viet/'.$value['slug']}}">{{ $value['title'] }}</a></h4>
                    <p class="post-meta"><i class="icon-calendar"></i>
                      <time datetime="{{ $value['created_at'] }}" class="entry-date">{{ $value['created_at'] }}</time>
                      .</p>
                  </li>
                  @endforeach
                  <!-- end 1 most news -->
                </ul>
              </div>
              <!--widget-content--> 
            </div>
            <div class="popular-posts widget widget_categories wow" id="categories-2">
              <h3 class="widget-title"><span>Danh mục bài viết</span></h3>
              <ul>
                @foreach ($parent_category as $pkey => $parent)
                <li class="cat-item cat-item-19599" style="
                    display: flex;
                    justify-content: space-between;
                ">
                  <a href="{{_WEB_ROOT.'/danh-muc-bai-viet/'.$parent['slug']}}">{{ $parent['name'] }}</a>
                  
                  <a data-toggle="collapse" href="#cateCollapse{{$parent['id']}}" role="button" aria-expanded="false" aria-controls="cateCollapse{{$parent['id']}}" style="display: inline-block; text-align: right;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round" style = "">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <polyline points="6 9 12 15 18 9" />
                    </svg>
                  </a>
                </li>
                <ul class = "collapse multi-collapse" id = "cateCollapse{{$parent['id']}}">
                  @foreach ($child_category as $ckey => $child)
                  @if ($parent['id'] == $child['parent_id'])
                  <li class="cat-item cat-item-19599" style="margin-left: 15px;">
                    <a href="{{_WEB_ROOT.'/danh-muc-bai-viet/'.$child['slug']}}">{{ $child['name'] }}</a>
                  </li>
                  @endif
                  @endforeach
                </ul>
                @endforeach
              </ul>
            </div>
            <!-- Banner Ad Block -->
            <div class="ad-spots widget widget__sidebar">
              <h3 class="widget-title"><span></span></h3>
              <div class="widget-content"><a target="_self" href="#" title=""><img alt="offer banner" src="{{_WEB_ROOT.'/public/clients/images/banner_health.png'}}"></a></div>
            </div>
            <!-- Banner Text Block -->
            <!-- <div class="text-widget widget widget__sidebar">
              <h3 class="widget-title"><span>Text Widget</span></h3>
              <div class="widget-content">Mauris at blandit erat. Nam vel tortor non quam scelerisque cursus. Praesent nunc vitae magna pellentesque auctor. Quisque id lectus.<br>
                <br>
                Massa, eget eleifend tellus. Proin nec ante leo ssim nunc sit amet velit malesuada pharetra. Nulla neque sapien, sollicitudin non ornare quis, malesuada.</div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>