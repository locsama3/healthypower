<?php
class Blog extends Controller{

    public $blogModel;
    public $request, $response;

    public function __construct(){
        $this->blogModel = $this->model('BlogModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function index()
    {
        $data['content'] = 'admins.blogs.index';

         
        // $data['sub_content']['...'] = ...;

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Liệt kê Danh sách Bài viết";

        return $this->view('layouts.admin_layout', $data);
    }

    public function create()
    {
        $data['content'] = 'admins.blogs.create';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js'
        ];

        $data['page_title'] = "Thêm mới bài viết";

        return $this->view('layouts.admin_layout', $data);
    }

    public function store()
    {
        
    }

    public function edit($id)
    {
        // code...
    }

    public function update($id)
    {
        // code...
    }

    public function destroy($id)
    {
        // code...
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

    // public function post_user(){
    //     $userId = 20;
    //     $request = new Request();
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