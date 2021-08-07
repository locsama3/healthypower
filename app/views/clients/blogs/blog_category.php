<div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <div class="col-main col-sm-9">
          <div class="page-title">
            <h2>{{$get_category['name']}}</h2>
          </div>
          <div class="blog-wrapper" id="main">
            <div class="site-content" id="primary">
              <div role="main" id="content">
                @foreach ($blogs_by_cate as $key => $value)
                <article class="blog_entry clearfix wow" id="post-{{$value['id']}}">
                  <header class="blog_entry-header clearfix">
                    <div class="blog_entry-header-inner">
                      <h2 class="blog_entry-title"> 
                        <a rel="bookmark" href="{{_WEB_ROOT.'/bai-viet/'.$value['slug']}}">
                          {{$value['title']}}
                        </a> 
                      </h2>
                    </div>
                    <!--blog_entry-header-inner--> 
                  </header>
                  <div class="entry-content">
                    <div class="featured-thumb">
                      <a href="{{_WEB_ROOT.'/bai-viet/'.$value['slug']}}">
                        <img alt="{{$value['title']}}" src="{{_WEB_ROOT.'/public/uploads/blogs/'.$value['thumbnail']}}">
                      </a>
                    </div>
                    <div class="entry-content">
                      <p>{{$value['subtitle']}}</p>
                    </div>
                    <p> <a class="btn" href="{{_WEB_ROOT.'/bai-viet/'.$value['slug']}}">Đọc tiếp</a> </p>
                  </div>
                  <footer class="entry-meta"> Được đăng           trong <a rel="category tag" title="Xem thêm từ {{$get_category['name']}}" href="{{_WEB_ROOT.'/danh-muc-bai-viet/'.$get_category['slug']}}">{{$get_category['name']}}</a> từ
                    <time datetime="2014-07-10T06:53:43+00:00" class="entry-date">Jul 10, 2014</time>
                    . </footer>
                </article>
                @endforeach
              </div>
            </div>
            <div class="pager">
              <p class="amount"> <strong>4 Item(s)</strong> </p>
              <div class="limiter">
                <label>Show</label>
                <select onchange="setLocation(this.value)">
                  <option selected="selected" value="#/blog/?limit=5"> 5 </option>
                  <option value="#/blog/?limit=10"> 10 </option>
                  <option value="#/blog/?limit=15"> 15 </option>
                  <option value="#/blog/?limit=20"> 20 </option>
                  <option value="#/blog/?limit=all"> All </option>
                </select>
                per page </div>
            </div>
          </div>
        </div>
        <div class="col-right sidebar col-sm-3 wow">
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
              <h3 class="widget-title"><span>Ad Spots</span></h3>
              <div class="widget-content"><a target="_self" href="#" title=""><img alt="offer banner" src="{{_WEB_ROOT.'/public/clients/images/RHS-banner-img.jpg'}}"></a></div>
            </div>
            <!-- Banner Text Block -->
            <div class="text-widget widget widget__sidebar">
              <h3 class="widget-title"><span>Chuyên mục {{$get_category['name']}}</span></h3>
              <div class="widget-content">{!$get_category['description']!}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>