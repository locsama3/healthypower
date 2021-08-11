<?php
class Blog extends Controller{

    public $blogModel;
    public $blogCateModel;
    public $request, $response;

    public function __construct(){
        $this->blogModel = $this->model('BlogModel');
        $this->blogCateModel = $this->model('BlogCategoryModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    // controller clients
    public function show_blogs()
    {
        $data['content'] = 'clients.blogs.blog_list';

        $data['sub_content']['most_view'] = $this->blogModel->get_most_view();

        $data['sub_content']['parent_category'] = $this->blogCateModel->get_parent();

        $data['sub_content']['child_category'] = $this->blogCateModel->get_children();

        $data['dataMeta'] = [
            'meta_title' => 'Bài viết',
            'meta_desc' => 'blogs, bài viết, dinh dưỡng, sức khỏe',
            'meta_keywords' => 'heathy, whey, vitamin, oars',
            'url_canonical' => _WEB_ROOT.'/bai-viet',
            'meta_author' => 'Lộc sama',
            'image_og' => 'favicon.ico'
        ];

        $data['page_title'] = 'Bài viết';

        $data['libraryCSS']['list_css'] = [
            'blogmate' => 'blogmate.css'
        ];

        $data['data_js'] = [
            'ajax' => 'admins.customers.js_list'
        ];
        
        $current_page = 1;

        $postTotal = $this->blogModel->count_blogs(); // Lấy tổng số bài viết.

        $postOnePage = 6; // Số bài viết hiển thị trong 1 trang.

        // Khi đã có tổng số bài viết và số bài viết trong một trang ta có thể tính ra được tổng số trang
        $pageTotal = ceil($postTotal / $postOnePage);

        $limit = ($current_page - 1) * $postOnePage;
          
        $data['sub_content']['blogs_list'] = $this->blogModel->get_all_post($limit, $postOnePage);

        $data['sub_content']['current_page'] = $current_page;

        $data['sub_content']['pageTotal'] = $pageTotal;

        return $this->view('layouts.client_layout', $data);
    }

    public function blog_on_page($page)
    {
        $data['content'] = 'clients.blogs.blog_list';

        $data['sub_content']['most_view'] = $this->blogModel->get_most_view();

        $data['sub_content']['parent_category'] = $this->blogCateModel->get_parent();

        $data['sub_content']['child_category'] = $this->blogCateModel->get_children();

        $data['dataMeta'] = [
            'meta_title' => 'Bài viết',
            'meta_desc' => 'blogs, bài viết, dinh dưỡng, sức khỏe',
            'meta_keywords' => 'heathy, whey, vitamin, oars',
            'url_canonical' => _WEB_ROOT.'/bai-viet',
            'meta_author' => 'Lộc sama',
            'image_og' => 'favicon.ico'
        ];

        $data['page_title'] = 'Bài viết';

        $data['libraryCSS']['list_css'] = [
            'blogmate' => 'blogmate.css'
        ];

        $current_page = $page;

        $postTotal = $this->blogModel->count_blogs(); // Lấy tổng số bài viết.

        $postOnePage = 6; // Số bài viết hiển thị trong 1 trang.

        // Khi đã có tổng số bài viết và số bài viết trong một trang ta có thể tính ra được tổng số trang
        $pageTotal = ceil($postTotal / $postOnePage);

        $limit = ($current_page - 1) * $postOnePage;
          
        $data['sub_content']['blogs_list'] = $this->blogModel->get_all_post($limit, $postOnePage);

        $data['sub_content']['current_page'] = $current_page;

        $data['sub_content']['pageTotal'] = $pageTotal;

        return $this->view('layouts.client_layout', $data);
    }

    // function blog_on_page($page)
    // {
    //     $current_page = $page;

    //     $postTotal = $this->blogModel->count_blogs(); // Lấy tổng số bài viết.

    //     $postOnePage = 6; // Số bài viết hiển thị trong 1 trang.

    //     // Khi đã có tổng số bài viết và số bài viết trong một trang ta có thể tính ra được tổng số trang
    //     $pageTotal = ceil($postTotal / $postOnePage);

    //     $limit = ($current_page - 1) * $postOnePage;
          
    //     $blogOnPage = $this->blogModel->get_all_post($limit, $postOnePage);

    //     $output = '';

    //     foreach($blogs_list as $key => $value){  
    //         $output =' 
    //         <!-- Blog post -->
    //         <div class="col-sm-6 col-md-6">
    //           <article class="container-paper-table">
    //             <div class="title">
    //               <h2 class="entry-title">
    //                 <a href="' ._WEB_ROOT. '/bai-viet/'. $value['slug']. '">
    //                   ' .$value['title']. '
    //                 </a>
    //               </h2>
    //             </div>
    //             <div class="post-container"> 
    //               <a href="blog_single_post.html">
    //                 <img class="img-responsive" src="'. _WEB_ROOT. '/public/uploads/blogs/' .$value['thumbnail']. '" alt="' .$value['title']. '">
    //               </a>
    //               <div class="text">
    //                 <ul class="list-info">
    //                   <li><span class="icon-user">&nbsp;</span>Tác giả ' .$value['author']. '</li>
    //                   <li><span class="icon-time">&nbsp;</span>' .$value['created_at']. '</li>
    //                 </ul>
    //                 <p class="post-excerpt">' .$value['subtitle']. ' </p>
    //                 <a href="' ._WEB_ROOT. '/bai-viet/'. $value['slug']. '" class="btn btn-mega">Đọc tiếp &nbsp; <span class="icon icon-arrow-right-5"></span></a>
    //                 <ul class="list-info">
    //                   <li><span class="icon-eye-open">&nbsp;</span>' .$value['view']. ' lượt xem</li>
    //                   <li><span class="icon-comments">&nbsp;</span><a href="#"></a></li>
    //                 </ul>
    //               </div>
    //             </div>
    //           </article>
    //         </div>
    //         <!-- //end Blog post -->';
    //     }

    //     // Phân trang
    //     $output .= '<div class="col col-xs-8">
    //                     <ul class="pagination hidden-xs pull-right">';
    //     if ($current_page > 1) {
    //         $output .= '<li><a href="' ._WEB_ROOT. '/muc-bai-viet/trang-' . ($current_page - 1) . '">«</a></li>';
    //     }
    //     for ($i = 1; $i <= $pageTotal; $i++) {
    //         $class = ($current_page == $i) ? 'active' : '';
    //         $output .= '<li class="' . $class . '">';
    //         $output .= '<a href="' ._WEB_ROOT. '/muc-bai-viet/trang-' . $i . '">' . $i . '</a>';
    //         $output .= '</li>';
    //     }
    //     if ($current_page < $pageTotal) {
    //         $output .= '<li><a href ="' ._WEB_ROOT. '/muc-bai-viet/trang-'.($current_page + 1).'">»</a></li>';
    //     }
    //     $output .= '</ul>
    //                 </div>
    //                 </div>
    //                 </div>';
    //     die($output);
    // }

    public function show_category_home($slug)
    {
        $data['content'] = 'clients.blogs.blog_category';

        $get_category = $this->blogCateModel->find_by_slug($slug);

        $cate_id = $get_category['id'];
         
        $data['sub_content']['blogs_by_cate'] = $this->blogModel->get_blogs_by_cate($cate_id);

        $data['sub_content']['most_view'] = $this->blogModel->get_most_view();

        $data['sub_content']['get_category'] = $get_category;

        $data['sub_content']['parent_category'] = $this->blogCateModel->get_parent();

        $data['sub_content']['child_category'] = $this->blogCateModel->get_children();

        $data['dataMeta'] = [
            'meta_title' => $get_category['page_title'],
            'meta_desc' => 'blogs, bài viết, dinh dưỡng, sức khỏe',
            'meta_keywords' => 'heathy, whey, vitamin, oars',
            'url_canonical' => _WEB_ROOT,
            'meta_author' => 'Lộc sama',
            'image_og' => 'favicon.ico'
        ];

        $data['page_title'] = $get_category['page_title'];

        $data['libraryCSS']['list_css'] = [
            'blogmate' => 'blogmate.css'
        ];

        return $this->view('layouts.client_layout', $data);
    }

    public function show_blog_detail($slug)
    {
        $data['content'] = 'clients.blogs.blog_detail';

        $get_blogs = $this->blogModel->get_blogs_by_slug($slug);
         
        $data['sub_content']['blogs_by_slug'] = $get_blogs;

        $data['sub_content']['most_view'] = $this->blogModel->get_most_view();

        $data['sub_content']['parent_category'] = $this->blogCateModel->get_parent();

        $data['sub_content']['child_category'] = $this->blogCateModel->get_children();


        $data['dataMeta'] = [
            'meta_title' => $get_blogs['title'],
            'meta_desc' => $get_blogs['blog_meta_desc'],
            'meta_keywords' => $get_blogs['blog_meta_keywords'],
            'url_canonical' => _WEB_ROOT.'/bai-viet/'.$get_blogs['slug'],
            'meta_author' => $get_blogs['author'],
            'image_og' => 'favicon.ico'
        ];

        $data['page_title'] = $get_blogs['title'];

        $data['libraryCSS']['list_css'] = [
            'blogmate' => 'blogmate.css'
        ];

        $data['data_js'] = [
            'ajax' => 'clients.blogs.js_detail'
        ];

        $sessionKey = 'post_' . $get_blogs['id'];
        $sessionView = Session::data($sessionKey);

        if (!$sessionView) { // nếu chưa có session
            Session::data($sessionKey, 1); //set giá trị cho session
            $data_view['view'] = $get_blogs['view'] + 1;
            $this->blogModel->edit($get_blogs['id'], $data_view);
        }

        return $this->view('layouts.client_layout', $data);
    }


    public function loadMetaTag()
    {
        return $dataMeta = [
            'meta_title' => 'Bài viết',
            'meta_desc' => 'blogs, bài viết, dinh dưỡng, sức khỏe',
            'meta_keywords' => 'heathy, whey, vitamin, oars',
            'url_canonical' => _WEB_ROOT,
            'meta_author' => 'Lộc sama',
            'image_og' => 'favicon.ico'
        ];  
    }

    public function loadLibCSS()
    {
        return $list_css = [
            'bootstrap' => 'bootstrap.css'
        ];  
    }

    public function loadLibJS()
    {
        return $list_js = [
            'jquery' => 'jquery.js'
        ];  
    }
}