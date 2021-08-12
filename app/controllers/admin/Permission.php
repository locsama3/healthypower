<?php
class Permission extends Controller{

    public $permissionModel;
    public $request, $response;

    public function __construct(){
        $this->permissionModel = $this->model('PermissionModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function index()
    {
        $data['content'] = 'admins.permissions.index';
         
        $data['sub_content']['list_permissions'] = $this->permissionModel->all();

        $data['sub_content']['permissionsCount'] = $this->permissionModel->countIf([]);

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Danh sách quyền hạn";

        $data['data_js'] = [
            'ajax' => 'admins.permissions.js'
        ];

        return $this->view('layouts.admin_layout', $data);
    }

    public function create()
    {
        $data['content'] = 'admins.permissions.create';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js',
            'slug' => 'ChangeToSlug.js',
            'validate' => 'validate.js'
        ];

        $data['data_js'] = [
            'js' => 'admins.permissions.js_create'
        ];

        $data['page_title'] = "Thêm quyền hạn mới";

        return $this->view('layouts.admin_layout', $data);
    }

    public function store()
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request ->rules([
                'permissionName' => 'required|min:5|max:88|unique:acl_permissions:name',
                'guardName' => 'required|min:5|max:88|unique:acl_permissions:guard_name'
            ]);

            //Set message
            $this->request->message([
                'permissionName.required' => 'Tên quyền hạn không được để trống',
                'permissionName.min' => 'Tên quyền hạn phải lớn hơn 5 ký tự',
                'permissionName.max' => 'Tên quyền hạn phải nhỏ hơn 88 ký tự',
                'permissionName.unique' => 'Tên quyền hạn đã tồn tại trong hệ thống',
                'guardName.required' => 'Tên bảo mật không được để trống',
                'guardName.min' => 'Tên bảo mật phải lớn hơn 5 ký tự',
                'guardName.max' => 'Tên bảo mật phải nhỏ hơn 88 ký tự',
                'guardName.unique' => 'Tên bảo mật đã tồn tại trong hệ thống'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại.');
                return $this->response->redirect('permissions-create');

            }
        }

        // lấy dữ liệu từ form
        $dataFields = $this->request->getFields();

        // đưa data vào
        $data = [
            'name' => $dataFields['permissionName'],
            'slug' => $dataFields['slug'],
            'display_name' => $dataFields['displayName'],
            'guard_name' => $dataFields['guardName'],
            'created_at' => date('Y-m-d h:i:s')
        ];

        $this->permissionModel->create($data);
        Session::flash('msg', 'Thêm quyền hạn thành công!');

        return $this->response->redirect('permissions-create');
    }

    public function edit($id)
    {
        $data['sub_content']['permission_by_id'] = $this->permissionModel->find($id);

        $data['content'] = 'admins.permissions.edit';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js',
            'slug' => 'ChangeToSlug.js',
            'validate' => 'validate.js'
        ];

        $data['data_js'] = [
            'js' => 'admins.permissions.js_edit'
        ];

        $data['page_title'] = "Cập nhật danh mục bài viết";

        return $this->view('layouts.admin_layout', $data);
    }

    public function update($id)
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request ->rules([
                'permissionName' => 'required|min:5|max:88|unique:acl_permissions:name',
                'guardName' => 'required|min:5|max:88|unique:acl_permissions:guard_name'
            ]);

            //Set message
            $this->request->message([
                'permissionName.required' => 'Tên quyền hạn không được để trống',
                'permissionName.min' => 'Tên quyền hạn phải lớn hơn 5 ký tự',
                'permissionName.max' => 'Tên quyền hạn phải nhỏ hơn 88 ký tự',
                'permissionName.unique' => 'Tên quyền hạn đã tồn tại trong hệ thống',
                'guardName.required' => 'Tên bảo mật không được để trống',
                'guardName.min' => 'Tên bảo mật phải lớn hơn 5 ký tự',
                'guardName.max' => 'Tên bảo mật phải nhỏ hơn 88 ký tự',
                'guardName.unique' => 'Tên bảo mật đã tồn tại trong hệ thống'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại.');
                return $this->response->redirect('permissions-edit/editid-'.$id);

            }
        }

        // lấy dữ liệu từ form
        $dataFields = $this->request->getFields();

        // đưa data vào
        $data = [
            'name' => $dataFields['permissionName'],
            'slug' => $dataFields['slug'],
            'display_name' => $dataFields['displayName'],
            'guard_name' => $dataFields['guardName'],
            'updated_at' => date('Y-m-d h:i:s')
        ];


        $this->permissionModel->edit($id,$data);
        Session::flash('msg', 'Bạn đã cập nhật quyền hạn!');

        return $this->response->redirect('permissions');
    }

    public function status()
    {
        $dataFields = $this->request->getFields();
        $id = $dataFields['id'];
        $status_value = $dataFields['status_value'];

        $data['status'] = $status_value;

        $this->permissionModel->edit($id,$data);
    }

    public function destroy()
    {
        // $dataFields = $this->request->getFields();
        // $id = $dataFields['id'];

        // $this->permissionModel->destroy($id);
    }   

    public function loadMetaTag()
    {
        return $dataMeta = [
            'meta_title' => 'quyền hạn',
            'meta_desc' => 'quyền hạn, vai trò, quản lý, quản trị',
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