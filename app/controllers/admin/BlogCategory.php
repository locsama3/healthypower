<?php
class BlogCategory extends Controller{

    public $blogCateModel;
    public $request, $response;

    public function __construct(){
        $this->blogCateModel = $this->model('BlogCategoryModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function index()
    {
        $data['content'] = 'admins.blog_categories.index';

         
        $data['sub_content']['list_blog_cate'] = $this->blogCateModel->findByField([]);

        $data['sub_content']['blog_cate_count'] = $this->blogCateModel->countIf([]);

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Liệt kê Danh mục Bài viết";

        $data['data_js'] = [
            'ajax' => 'admins.blog_categories.js'
        ];

        return $this->view('layouts.admin_layout', $data);
    }

    public function create()
    {
        $data['sub_content']['blog_categories'] = $this->blogCateModel->all();

        $data['content'] = 'admins.blog_categories.create';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js',
            'slug' => 'ChangeToSlug.js',
            'validate' => 'validate.js'
        ];

        $data['data_js'] = [
            'js' => 'admins.blog_categories.js_create'
        ];

        $data['page_title'] = "Thêm mới danh mục bài viết";

        return $this->view('layouts.admin_layout', $data);
    }

    public function store()
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request ->rules([
                'blogCateName' => 'required|min:5|max:88|unique:tbl_blogs_categories:name'
            ]);

            //Set message
            $this->request->message([
                'blogCateName.required' => 'Tên danh mục không được để trống',
                'blogCateName.min' => 'Tên danh mục phải lớn hơn 5 ký tự',
                'blogCateName.max' => 'Tên danh mục phải nhỏ hơn 30 ký tự',
                'blogCateName.unique' => 'Tên danh mục đã tồn tại trong hệ thống'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại.');
                return $this->response->redirect('blogs-category-create');

            }
        }

        // lấy dữ liệu từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();

        // đưa data vào
        $data = [
            'name' => $dataFields['blogCateName'],
            'slug' => $dataFields['slug'],
            'page_title' => $dataFields['pageTitle'],
            'description' => $dataFields['cate_desc'],
            'created_at' => date('Y-m-d h:i:s')
        ];

        if(!empty($dataFields['parentCate'])){
            $data['parent_id'] = $dataFields['parentCate'];

            $get_position_child = $this->blogCateModel->get_position_child($dataFields['parentCate']);

            $data['position'] = $get_position_child['this_position'] + 1;
        }

        $get_position = $this->blogCateModel->get_position();

        $data['position'] = $get_position['this_position'] + 1;

        $get_image = $dataFile['image_cate'];

        if($get_image){
            $uploadPath = "public/uploads/blog_category/";
            $unique_image = ProcessImage::checkImage($get_image, $uploadPath);
            if($unique_image){
                $data['banner'] = $unique_image;
            }
        }

        $this->blogCateModel->create($data);
        Session::flash('msg', 'Thêm danh mục thành công!');

        return $this->response->redirect('blogs-category-create');
    }

    public function edit($id)
    {
        $data['sub_content']['blog_categories'] = $this->blogCateModel->all();

        $data['sub_content']['blog_cate_by_id'] = $this->blogCateModel->find($id);

        $data['content'] = 'admins.blog_categories.edit';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js',
            'slug' => 'ChangeToSlug.js',
            'validate' => 'validate.js'
        ];

        $data['data_js'] = [
            'js' => 'admins.blog_categories.js_edit'
        ];

        $data['page_title'] = "Cập nhật danh mục bài viết";

        return $this->view('layouts.admin_layout', $data);
    }

    public function update($id)
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'blogCateName' => 'required|min:5|max:88|unique:tbl_blogs_categories:name'
            ]);

            //Set message
            $this->request->message([
                'blogCateName.required' => 'Tên danh mục không được để trống',
                'blogCateName.min' => 'Tên danh mục phải lớn hơn 5 ký tự',
                'blogCateName.max' => 'Tên danh mục phải nhỏ hơn 30 ký tự',
                'blogCateName.unique' => 'Tên danh mục đã tồn tại trong hệ thống'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại.');
                return $this->response->redirect('blogs-category-edit/editid-'.$id);

            }
        }

        // lấy dữ liệu từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();

        // đưa data vào
        $data = [
            'name' => $dataFields['blogCateName'],
            'slug' => $dataFields['slug'],
            'page_title' => $dataFields['pageTitle'],
            'description' => $dataFields['cate_desc'],
            'updated_at' => date('Y-m-d h:i:s')
        ];

        if(!empty($dataFields['parentCate'])){
            $data['parent_id'] = $dataFields['parentCate'];
        }

        $get_image = $dataFile['image_cate'];

        if(!empty($get_image)){
            $uploadPath = "public/uploads/blog_category/";
            $unique_image = ProcessImage::checkImage($get_image, $uploadPath);
            if($unique_image){
                $data['banner'] = $unique_image;
            }
        }

        $this->blogCateModel->edit($id,$data);
        Session::flash('msg', 'Bạn đã cập nhật danh mục bài viết!');

        return $this->response->redirect('blogs-category');
    }

    public function status()
    {
        $dataFields = $this->request->getFields();
        $id = $dataFields['id'];
        $status_value = $dataFields['status_value'];

        $data['status'] = $status_value;

        $this->blogCateModel->edit($id,$data);
    }

    public function destroy()
    {
        // $dataFields = $this->request->getFields();
        // $id = $dataFields['id'];

        // $this->blogCateModel->destroy($id);
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
    

}