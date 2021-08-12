<?php
class Role extends Controller{

    public $roleModel;
    public $request, $response;

    public function __construct(){
        $this->roleModel = $this->model('RoleModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function index()
    {
        $data['content'] = 'admins.roles.index';

         
        $data['sub_content']['list_roles'] = $this->roleModel->all();

        $data['sub_content']['rolesCount'] = $this->roleModel->countIf([]);

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Danh sách chức vụ";

        $data['data_js'] = [
            'ajax' => 'admins.roles.js'
        ];

        return $this->view('layouts.admin_layout', $data);
    }

    public function create()
    {
        $data['content'] = 'admins.roles.create';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'slug' => 'ChangeToSlug.js',
            'validate' => 'validate.js'
        ];

        $data['data_js'] = [
            'js' => 'admins.roles.js_create'
        ];

        $data['page_title'] = "Thêm chức vụ mới";

        return $this->view('layouts.admin_layout', $data);
    }

    public function store()
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request ->rules([
                'roleName' => 'required|min:5|max:88|unique:acl_roles:name',
                'guardName' => 'required|min:5|max:88|unique:acl_roles:guard_name'
            ]);

            //Set message
            $this->request->message([
                'roleName.required' => 'Tên chức vụ không được để trống',
                'roleName.min' => 'Tên chức vụ phải lớn hơn 5 ký tự',
                'roleName.max' => 'Tên chức vụ phải nhỏ hơn 88 ký tự',
                'roleName.unique' => 'Tên chức vụ đã tồn tại trong hệ thống',
                'guardName.required' => 'Tên bảo mật không được để trống',
                'guardName.min' => 'Tên bảo mật phải lớn hơn 5 ký tự',
                'guardName.max' => 'Tên bảo mật phải nhỏ hơn 88 ký tự',
                'guardName.unique' => 'Tên bảo mật đã tồn tại trong hệ thống'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại.');
                return $this->response->redirect('roles-create');

            }
        }

        // lấy dữ liệu từ form
        $dataFields = $this->request->getFields();

        // đưa data vào
        $data = [
            'name' => $dataFields['roleName'],
            'slug' => $dataFields['slug'],
            'display_name' => $dataFields['displayName'],
            'guard_name' => $dataFields['guardName'],
            'created_at' => date('Y-m-d h:i:s')
        ];

        $this->roleModel->create($data);
        Session::flash('msg', 'Thêm chức vụ thành công!');

        return $this->response->redirect('roles-create');
    }

    public function edit($id)
    {
        $data['sub_content']['role_by_id'] = $this->roleModel->find($id);

        $data['content'] = 'admins.roles.edit';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js',
            'slug' => 'ChangeToSlug.js',
            'validate' => 'validate.js'
        ];

        $data['data_js'] = [
            'js' => 'admins.roles.js_edit'
        ];

        $data['page_title'] = "Cập nhật chức vụ";

        return $this->view('layouts.admin_layout', $data);
    }

    public function update($id)
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request ->rules([
                'roleName' => 'required|min:5|max:88|unique:acl_roles:name',
                'guardName' => 'required|min:5|max:88|unique:acl_roles:guard_name'
            ]);

            //Set message
            $this->request->message([
                'roleName.required' => 'Tên chức vụ không được để trống',
                'roleName.min' => 'Tên chức vụ phải lớn hơn 5 ký tự',
                'roleName.max' => 'Tên chức vụ phải nhỏ hơn 88 ký tự',
                'roleName.unique' => 'Tên chức vụ đã tồn tại trong hệ thống',
                'guardName.required' => 'Tên bảo mật không được để trống',
                'guardName.min' => 'Tên bảo mật phải lớn hơn 5 ký tự',
                'guardName.max' => 'Tên bảo mật phải nhỏ hơn 88 ký tự',
                'guardName.unique' => 'Tên bảo mật đã tồn tại trong hệ thống'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại.');
                return $this->response->redirect('roles-edit/editid-'.$id);

            }
        }

        // lấy dữ liệu từ form
        $dataFields = $this->request->getFields();

        // đưa data vào
        $data = [
            'name' => $dataFields['roleName'],
            'slug' => $dataFields['slug'],
            'display_name' => $dataFields['displayName'],
            'guard_name' => $dataFields['guardName'],
            'updated_at' => date('Y-m-d h:i:s')
        ];


        $this->roleModel->edit($id,$data);
        Session::flash('msg', 'Bạn đã cập nhật chức vụ!');

        return $this->response->redirect('roles');
    }

    public function destroy()
    {
        // $dataFields = $this->request->getFields();
        // $id = $dataFields['id'];

        // $this->roleModel->destroy($id);
    }   

    public function loadMetaTag()
    {
        return $dataMeta = [
            'meta_title' => 'Chức vụ',
            'meta_desc' => 'chức vụ, vai trò, quản lý, quản trị',
            'meta_keywords' => 'thực phẩm, whey, vitamin',
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