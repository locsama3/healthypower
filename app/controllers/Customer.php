<?php
class Customer extends Controller{

    public $customerModel;
    public $request, $response;

    public function __construct(){
        $this->customerModel = $this->model('CustomerModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function index()
    {
        $data['content'] = 'admins.customers.index';

         
        $data['sub_content']['list_customers'] = $this->customerModel->all();

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Danh sách khách hàng";

        $data['data_js'] = [
            'ajax' => 'admins.customers.js_index'
        ];

        return $this->view('layouts.admin_layout', $data);
    }

    public function create()
    {
        // $data['sub_content']['customers'] = $this->customerModel->all();

        $data['content'] = 'admins.customers.create';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Thêm mới khách hàng";

        $data['data_js'] = [
            'ajax' => 'admins.customers.js_create'
        ];

        return $this->view('layouts.admin_layout', $data);
    }

    public function store()
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
        }

        $get_image = $dataFile['image_cate'];

        if($get_image){
            $uploadPath = "public/uploads/blog_category/";
            $unique_image = ProcessImage::checkImage($get_image, $uploadPath);
            if($unique_image){
                $data['banner'] = $unique_image;
            }
        }

        $this->customerModel->create($data);
        Session::flash('msg', 'Thêm danh mục thành công!');

        return $this->response->redirect('blogs-category-create');
    }

    public function edit($id)
    {
        echo $id;
        $data['sub_content']['customer_by_id'] = $this->customerModel->find($id);

        $data['content'] = 'admins.customers.edit';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js',
            'slug' => 'ChangeToSlug.js'
        ];

        $data['page_title'] = "Cập nhật thông tin khách hàng";

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // die();

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

        $this->customerModel->edit($id,$data);
        Session::flash('msg', 'Bạn đã cập nhật danh mục bài viết!');

        return $this->response->redirect('blogs-category');
    }

    public function status()
    {
        $dataFields = $this->request->getFields();
        $id = $dataFields['id'];
        $status_value = $dataFields['status_value'];

        $data['status'] = $status_value;

        $this->customerModel->edit($id,$data);
    }

    public function destroy()
    {
        // $dataFields = $this->request->getFields();
        // $id = $dataFields['id'];

        // $this->customerModel->destroy($id);
    }   

    public function loadMetaTag()
    {
        return $dataMeta = [
            'meta_title' => 'Khách hàng',
            'meta_desc' => 'danh sách khách hàng, thông tin, trạng thái',
            'meta_keywords' => 'heathy, whey, vitamin, oars',
            'url_canonical' => _WEB_ROOT,
            'meta_author' => 'nhóm không tên',
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

    // public function post_user(){
    //     $userId = 20;
    //     $this->request = new Request();
    //     if ($request->isPost()){
    //         /*Set rules*/
    //         $request->rules([
    //             'fullname' => 'required|min:5|max:30',
    //             'email' => 'required|email|min:6|unique:users:email',
    //             'password' => 'required|min:3',
    //             'confirm_password' => 'required|match:password',
    //             'age' => 'required|callback_check_age'
    //         ]);

    //         //Set message
    //         $request->message([
    //             'fullname.required' => 'Họ tên không được để trống',
    //             'fullname.min' => 'Họ tên phải lớn hơn 5 ký tự',
    //             'fullname.max' => 'Họ tên phải nhỏ hơn 30 ký tự',
    //             'email.required' => 'Email không được để trống',
    //             'email.email' => 'Định dạng email không hợp lệ',
    //             'email.min' => 'Email phải lớn hơn 6 ký tự',
    //             'email.unique' => 'Email đã tồn tại trong hệ thống',
    //             'password.required' => 'Mật khẩu không được để trống',
    //             'password.min' => 'Mật khẩu phải lớn hơn 3 ký tự',
    //             'confirm_password.required' => 'Nhập lại mật khẩu không được để trống',
    //             'confirm_password.match' => 'Mật khẩu nhập lại không khớp',
    //             'age.required' => 'Tuổi không được để trống',
    //             'age.callback_check_age' => 'Tuổi không được nhỏ hơn 20'
    //         ]);

    //         $validate = $request->validate();
    //         if (!$validate){
    //             Session::flash('msg', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
    //         }

    //     }

    //     $response = new Response();
    //     $response->redirect('home/get_user');
    // }
}