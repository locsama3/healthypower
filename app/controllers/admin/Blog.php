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

    public function index()
    {
        $data['content'] = 'admins.blogs.index';

        $data['sub_content']['list_blogs'] = $this->blogModel->get_list();

        $data['sub_content']['blog_categories_parent'] = $this->blogCateModel->get_parent();

        $data['sub_content']['blog_categories_child'] = $this->blogCateModel->get_children();

        $data['dataMeta'] = $this->loadMetaTag();

        $data['data_js'] = [
            'js' => 'admins.blogs.js_index'
        ];

        $data['page_title'] = "Liệt kê Danh sách Bài viết";

        return $this->view('layouts.admin_layout', $data);
    }

    public function create()
    {
        $data['content'] = 'admins.blogs.create';

        $data['sub_content']['blog_categories_parent'] = $this->blogCateModel->get_parent();

        $data['sub_content']['blog_categories_child'] = $this->blogCateModel->get_children();

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js',
            'slug' => 'ChangeToSlug.js',
            'validate' => 'validate.js'
        ];

        $data['data_js'] = [
            'js' => 'admins.blogs.js_create'
        ];

        $data['page_title'] = "Thêm mới bài viết";

        return $this->view('layouts.admin_layout', $data);
    }

    public function store()
    {
        if ($this->request->isPost()){
            // Lấy dữ liệu từ form
            $dataFields = $this->request->getFields();
            $dataFile = $this->request->getFiles();

            /*Set rules*/
            $this->request->rules([
                'title' => 'required',
                'main_content' => 'required'
            ]);

            //Set message
            $this->request->message([
                'title.required' => 'Tiêu đề không được để trống',
                'main_content.required' => 'Nội dung chính không được để trống'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                $message = [
                    'status' => '0',
                    'message' => "Đã có lỗi xảy ra. Vui lòng kiểm tra lại.",
                    'form' => 'form-ce'
                ];

                $sessionKey = Session::isInvalid();
                $error = Session::flash($sessionKey.'_errors');
                $message['error'] = $error;
                exit(json_encode($message));
            }

            // đưa data vào
            $data = [
                'title' => $dataFields['title'],
                'slug' => $dataFields['slug'],
                'subtitle' => $dataFields['subtitle'],
                'content' => $dataFields['main_content'],
                'author' => $dataFields['author'],
                'blog_meta_desc' => $dataFields['meta_desc'],
                'blog_meta_keywords' => $dataFields['meta_keyword'],
                'created_at' => date('Y-m-d h:i:s')
            ];

            $get_image = $dataFile['thumbnail'];

            if($get_image){
                $uploadPath = "public/uploads/blogs/";
                $unique_image = ProcessImage::checkImage($get_image, $uploadPath);
                if($unique_image){
                    $data['thumbnail'] = $unique_image;
                }
            }
    
            $result =  $this->blogModel->create($data);

            $cateids = $dataFields['cateids'];

            $main_cate = $dataFields['cateid'];

            $this->create_blog_details($result, $cateids, $main_cate);

            $message = [
                "status" => "1",
                'message' => "Thêm bài viết thành công!"
            ];
    
            exit(json_encode($message));
        }
    }

    public function create_blog_details($blog_id, $cateids, $main_cate)
    {   
        foreach ($cateids as $key => $value) {
            $dataDetail = [
                'blog_id' => $blog_id,
                'cate_id' => $value 
            ];

            if($value == $main_cate){
                $dataDetail['main_cate'] = 1;
            }

            $this->blogModel->create_details($dataDetail);
        }
    }

    public function edit($id)
    {
        $data['content'] = 'admins.blogs.edit';

        $data['sub_content']['blog_by_id'] = $this->blogModel->find($id);

        $blog_details = $this->blogModel->get_detail_by_id($id);

        $data['sub_content']['blog_categories_parent'] = $this->blogCateModel->get_parent();

        $data['sub_content']['blog_categories_child'] = $this->blogCateModel->get_children();

        $data['dataMeta'] = $this->loadMetaTag();

        $main_cate = 0;

        $data_cate_detail = [];

        foreach ($blog_details as $key => $value) {
            $data_cate_detail[] = $value['cate_id'];
            if($value['main_cate'] == 1){
                $main_cate = $value['cate_id'];
            }
        }

        $data['sub_content']['cate_of_blog'] = $data_cate_detail;

        $data['sub_content']['main_cate'] = $main_cate;

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js',
            'slug' => 'ChangeToSlug.js',
            'validate' => 'validate.js',
            'helper' => 'functions.js'
        ];

        $data['data_js'] = [
            'js' => 'admins.blogs.js_edit'
        ];

        $data['page_title'] = "Chỉnh sửa bài viết";

        return $this->view('layouts.admin_layout', $data);
    }

    public function update($id)
    {
        if ($this->request->isPost()){
            // Lấy dữ liệu từ form
            $dataFields = $this->request->getFields();
            $dataFile = $this->request->getFiles();

            /*Set rules*/
            $this->request->rules([
                'title' => 'required',
                'main_content' => 'required'
            ]);

            //Set message
            $this->request->message([
                'title.required' => 'Tiêu đề không được để trống',
                'main_content.required' => 'Nội dung chính không được để trống'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                $message = [
                    'status' => '0',
                    'message' => "Đã có lỗi xảy ra. Vui lòng kiểm tra lại.",
                    'form' => 'form-ce'
                ];

                $sessionKey = Session::isInvalid();
                $error = Session::flash($sessionKey.'_errors');
                $message['error'] = $error;
                exit(json_encode($message));
            }

            // đưa data vào
            $data = [
                'title' => $dataFields['title'],
                'slug' => $dataFields['slug'],
                'subtitle' => $dataFields['subtitle'],
                'content' => $dataFields['main_content'],
                'author' => $dataFields['author'],
                'blog_meta_desc' => $dataFields['meta_desc'],
                'blog_meta_keywords' => $dataFields['meta_keyword'],
                'updated_at' => date('Y-m-d h:i:s')
            ];

            $get_image = $dataFile['thumbnail'];

            if(!empty($get_image)){
                $uploadPath = "public/uploads/blogs/";
                $unique_image = ProcessImage::checkImage($get_image, $uploadPath);
                if($unique_image){
                    $data['thumbnail'] = $unique_image;
                }
            }
    
            $this->blogModel->edit($id, $data);

            $cateids = $dataFields['cateids'];

            $main_cate = $dataFields['cateid'];

            self::update_blog_details($id, $cateids, $main_cate);

            $message = [
                "status" => "1",
                'message' => "Cập nhật bài viết thành công!"
            ];
    
            exit(json_encode($message));
        }
    }

    public function update_blog_details($blog_id, $cateids, $main_cate)
    {
        $blog_details = $this->db->table('tbl_blogs_details')->where('blog_id', '=', $blog_id)->get(); //mảng 1: 2, 3

        //mảng 2: 1
        // vòng lặp 1: - Giá trị 1 không có trong mảng 2 -> xóa trong mảng 1 và db-> mảng 1: 2
        //             - Giá trị 2 có trong mảng 2 -> xóa trong mảng 2 -> mảng 2: 3
        $checkMain = true;

        foreach ($blog_details as $ckey => $result) {
            if(!in_array($result['cate_id'], $cateids)){
                $this->blogModel->destroyBlogDetail($result['id']);
            }elseif($result['cate_id'] == $main_cate){
                if($result['main_cate'] == 1){
                    foreach (array_keys($cateids, $result['cate_id']) as $key) {
                        unset($cateids[$key]);
                    }
                }else{
                    $dataMain['main_cate'] = 1;
                    $this->blogModel->update_details($result['id'], $dataMain);
                    foreach (array_keys($cateids, $result['cate_id']) as $key) {
                        unset($cateids[$key]);
                    }

                    $checkMain = false;
                }
            }else{
                // ngược lại, vòng lặp 2: nếu có trong mảng 2, xóa trong mảng 2 -> mảng 2: 3
                foreach (array_keys($cateids, $result['cate_id']) as $key) {
                    unset($cateids[$key]);
                }
            }
        }  

        if(!empty($cateids)){
            if($checkMain){
                foreach ($cateids as $key => $value) {
                    $dataDetail = [
                        'blog_id' => $blog_id,
                        'cate_id' => $value
                    ];

                    if($value == $main_cate){
                        $dataDetail['main_cate'] = 1;
                    }

                    $this->blogModel->create_details($dataDetail);
                }
            }else{
                foreach ($cateids as $key => $value) {
                    $dataDetail = [
                        'blog_id' => $blog_id,
                        'cate_id' => $value
                    ];

                    $this->blogModel->create_details($dataDetail);
                }
            }   
        }  
    }

    public function status()
    {
        $dataFields = $this->request->getFields();

        $id = $dataFields['blog_id'];
        $data['status'] = $dataFields['status'];

        $this->blogModel->edit($id, $data);

        $message = [
            "status" => "1",
            "message" => "Cập nhật trạng thái thành công!",
            "check" => $dataFields
        ];

        exit(json_encode($message));
    }

    public function destroy($id)
    {
        $dataFields = $this->request->getFields();

        $ids = $dataFields['_id'];
        $data = [ 'deleted_at' => date('Y-m-d H:i:s')];

        $this->blogModel->deleteAt($ids, $data);

        $message = [
            "status" => "1",
            'message' => "Bài viết đã được chuyển vào thùng rác thành công!"
        ];
        exit(json_encode($message));
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

    // controller clients
    public function show_blogs()
    {
        $data['content'] = 'clients.blogs.blog_list';
         
        $data['sub_content']['blogs_list'] = $this->blogModel->get_show_list();

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

        return $this->view('layouts.client_layout', $data);
    }

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

        return $this->view('layouts.client_layout', $data);
    }
}