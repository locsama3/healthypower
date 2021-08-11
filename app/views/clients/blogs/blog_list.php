<div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <div class="col-main col-sm-9">
          <div class="page-title">
            <h2>Bài viết</h2>
          </div>
          <div class="blog-wrapper" id="main">
            <div class="posts-isotope row blog-panel"> 
              @foreach ($blogs_list as $key => $value)  
              <!-- Blog post -->
              <div class="col-sm-6 col-md-6">
                <article class="container-paper-table">
                  <div class="title">
                    <h2 class="entry-title">
                      <a href="{{_WEB_ROOT.'/bai-viet/'.$value['slug']}}">
                        {{ $value['title'] }}
                      </a>
                    </h2>
                  </div>
                  <div class="post-container"> 
                    <a href="blog_single_post.html">
                      <img class="img-responsive" src="{{_WEB_ROOT.'/public/uploads/blogs/'.$value['thumbnail']}}" alt="{{$value['title']}}">
                    </a>
                    <div class="text">
                      <ul class="list-info">
                        <li><span class="icon-user">&nbsp;</span>Tác giả {{$value['author']}}</li>
                        <li><span class="icon-time">&nbsp;</span>{{ $value['created_at'] }}</li>
                      </ul>
                      <p class="post-excerpt">{{ textShorten($value['subtitle'], 135)}} </p>
                      <a href="{{_WEB_ROOT.'/bai-viet/'.$value['slug']}}" class="btn btn-mega">Đọc tiếp &nbsp; <span class="icon icon-arrow-right-5"></span></a>
                      <ul class="list-info">
                        <li><span class="icon-eye-open">&nbsp;</span>{{$value['view']}} lượt xem</li>
                        <li><span class="icon-comments">&nbsp;</span><a href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
              <!-- //end Blog post --> 
              @endforeach
              <!-- Pagination -->
              <div class="col col-xs-8">
                <ul class="pagination hidden-xs pull-right">
                  @if($current_page > 1)
                  <li><a href="{{_WEB_ROOT.'/muc-bai-viet/trang-'.($current_page - 1)}}">«</a></li>
                  @endif

                  @for($i = 1; $i <= $pageTotal; $i++)
                  <li class="{{($current_page == $i) ? 'active' : ''}}">
                    <a href="{{_WEB_ROOT.'/muc-bai-viet/trang-'.$i}}">{{$i}}</a>
                  </li>
                  @endfor

                  @if($current_page < $pageTotal)
                  <li><a href="{{_WEB_ROOT.'/muc-bai-viet/trang-'.($current_page + 1)}}">»</a></li>
                  @endif
                </ul>
              </div>
              <!-- //end Pagination --> 
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
            <!-- <div class="ad-spots widget widget__sidebar">
              <h3 class="widget-title"><span>Ad Spots</span></h3>
              <div class="widget-content"><a target="_self" href="#" title=""><img alt="offer banner" src="images/RHS-banner-img.jpg"></a></div>
            </div> -->
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

  <!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>