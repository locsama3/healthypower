<?php
class AdminAccount extends Controller{

    public $adminModel, $roleModel, $permissionModel;
    public $request, $response;

    public function __construct(){
        $this->adminModel = $this->model('AdminAccountModel');
        $this->roleModel = $this->model('RoleModel');
        $this->permissionModel = $this->model('PermissionModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function index()
    {
        $data['content'] = 'admins.admin_accounts.index';

        // truy van co so du lieu
        $data['sub_content']['list_admins'] = $this->adminModel->list_user();

        $data['sub_content']['adminsCount'] = $this->adminModel->countIf([]);

        $lastmonth = mktime(0, 0, 0, date("m"), 1, date("Y"));
        $startDate = date('Y-m-d H:i:s', $lastmonth);

        $data['sub_content']['adminsCountOld'] = $this->adminModel->countIf(['created_at <= '. $startDate]);
        
        $data['sub_content']['adminsCountActive'] = $this->adminModel->countIf(['status : 1']);

        $data['sub_content']['adminsCountActiveOld'] = $this->adminModel->countIf(['status : 1', 'created_at <= '. $startDate]);

        $data['sub_content']['list_jobtitles'] = $this->adminModel->list_jobtitle();

        $data['sub_content']['roles'] = $this->roleModel->all();

        $data['sub_content']['permissions'] = $this->permissionModel->all();

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Danh sách quản trị viên";

        $data['libraryJS']['list_js'] = [
            'validate' => 'validate.js'
        ];

        $data['data_js'] = [
            'ajax' => 'admins.admin_accounts.js'
        ];

        return $this->view('layouts.admin_layout', $data);
    }

    public function create()
    {
        $data['content'] = 'admins.admin_accounts.create';

        $data['sub_content']['roles'] = $this->roleModel->all();

        $data['sub_content']['permissions'] = $this->permissionModel->all();

        // $data['sub_content']['managers'] = $this->adminModel->all();

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'validate' => 'validate.js'
        ];

        $data['data_js'] = [
            'js' => 'admins.admin_accounts.js_create'
        ];

        $data['page_title'] = "Thêm quản trị viên";

        return $this->view('layouts.admin_layout', $data);
    }

    public function store()
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request ->rules([
                'fullName' => 'required|min:5|max:88',
                'email' => 'required|email|min:5|unique:acl_users:email',
                'userName' => 'required|min:5|max:68|unique:acl_users:username',
                'password' => 'required|min:8',
                'confirmPassword' => 'required|match:password',
                'userAccountTypeRadio' => 'required',
                'jobTitle' => 'required'
            ]);

            //Set message
            $this->request->message([
                'fullName.required' => 'Họ và tên không được để trống',
                'fullName.min' => 'Họ và tên phải lớn hơn 5 ký tự',
                'fullName.max' => 'Họ và tên phải nhỏ hơn 88 ký tự',
                'email.required' => 'Email không được để trống',
                'email.email' => 'Định dạng email không hợp lệ',
                'email.min' => 'Email phải lớn hơn 6 ký tự',
                'email.unique' => 'Email đã tồn tại trong hệ thống',
                'userName.required' => 'Tên đăng nhập không được để trống',
                'userName.min' => 'Tên đăng nhập phải lớn hơn 6 ký tự',
                'userName.max' => 'Tên đăng nhập phải nhỏ hơn 68 ký tự',
                'userName.unique' => 'Tên đăng nhập đã tồn tại trong hệ thống',
                'password.required' => 'Mật khẩu không được để trống',
                'password.min' => 'Mật khẩu phải lớn hơn 8 ký tự',
                'confirmPassword.required' => 'Xác nhận mật khẩu không được để trống',
                'confirmPassword.match' => 'Mật khẩu nhập lại không khớp',
                'userAccountTypeRadio.required' => 'Loại tài khoản không được để trống'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại.');
                return $this->response->redirect('admin-accounts-create');

            }
        }

        // lấy dữ liệu từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();

        if($dataFields['userAccountTypeRadio'] == "Quản lý"){
            $adminCode = uniqid("MN_");
            $role = $dataFields['role'];
        }else if($dataFields['userAccountTypeRadio'] == "Quản trị viên"){
            $adminCode = uniqid("STF_");
            $role = "2";
        }

        $address1 = "";
        if(!empty($dataFields['city']) && !empty($dataFields['state']) && !empty($dataFields['addressLine1'])){
            $address1 = $dataFields['addressLine1'] . ', ' . $dataFields['state'] . ', ' .$dataFields['city'];
        }

        // đưa data vào
        $data = [
            'username' => $dataFields['userName'],
            'password' => md5($dataFields['password']),
            'fullname' => $dataFields['fullName'],
            'email' => $dataFields['email'],
            'code' => $adminCode,
            'job_title' => $dataFields['jobTitle'],
            'department' => $dataFields['department'],
            'phone' => $dataFields['phone'],
            'address1' => $address1,
            'address2' => $dataFields['addressLine2'],
            'postal_code' => $dataFields['postalCode'],
            'created_at' => date('Y-m-d h:i:s')
        ];

        if(!empty($dataFields['manager_id'])){
            $data['manager_id'] = $dataFields['manager_id'];
        }

        $get_image = $dataFile['avatar'];

        if($get_image){
            $uploadPath = "public/uploads/avatar/";
            $unique_image = ProcessImage::checkImage($get_image, $uploadPath);
            if($unique_image){
                $data['avatar'] = $unique_image;
            }
        }

        $id = $this->adminModel->create($data);

        if(!empty($role)){
           self::user_role($id, $role); 
        }

        $permissions = $dataFields['permissions'];
        
        self::user_permission($id, $permissions);

        return $this->response->redirect('admin-accounts-cresuccess');
    }

    public function user_role($id, $role)
    {
        $dataRole = [
            'user_id' => $id,
            'role_id' => $role
        ];

        $this->roleModel->createUserRole($dataRole);
    }

    public function user_permission($id, $permissions)
    {
        foreach ($permissions as $key => $value) {
            $dataPermission = [
                'user_id' => $id,
                'permission_id' => $value
            ];

            $this->permissionModel->createUserPermission($dataPermission);
        }
    }

    public function create_success()
    {
        $data['content'] = 'admins.admin_accounts.create_success';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Thêm quản trị viên thành công";

        return $this->view('layouts.admin_layout', $data);
    }

    public function edit($id)
    {
    }

    public function update()
    {
    }

    public function status()
    {
        $dataFields = $this->request->getFields();
        $id = $dataFields['id'];
        $status_value = $dataFields['status_value'];

        $data['status'] = $status_value;

        $this->adminModel->edit($id,$data);
    }

    public function change_password()
    {
        $dataFields = $this->request->getFields();

        $id = $dataFields['id'];

        $old_password = md5($dataFields['old_password']);

        $new_password = md5($dataFields['new_password']);

        $data['password'] = $new_password;

        $check = $this->adminModel->check_password($id, $old_password);

        if(!empty($check)){
            $this->adminModel->edit_password($id, $old_password, $data);
            echo 'true';
        }else{
            echo 'false';
        }
    }

    public function change_address()
    {
        // lấy dữ liệu từ form
        $dataFields = $this->request->getFields();

        $id = $dataFields['id'];

        $address1 = "";
        if(!empty($dataFields['city']) && !empty($dataFields['state']) && !empty($dataFields['addressLine1'])){
            $address1 = $dataFields['addressLine1'] . ', ' . $dataFields['state'] . ', ' .$dataFields['city'];
        }

        // đưa data vào
        $data = [
            'address1' => $address1,
            'address2' => $dataFields['addressLine2'],
            'postal_code' => $dataFields['postalCode'],
            'updated_at' => date('Y-m-d h:i:s')
        ];

        $result = $this->adminModel->edit($id,$data);

        if($result){
            echo "true";
        }else{
            echo "false";
        }
    }

    public function change_info()
    {
        if ($this->request->isPost()){
            $dataFields = $this->request->getFields();

            $id = $dataFields['id'];

            /*Set rules*/
            $this->request ->rules([
                'fullName' => 'required|min:5|max:88',
                'email' => 'required|email|min:5|unique:acl_users:email:id='.$id,
                'jobTitle' => 'required'
            ]);

            //Set message
            $this->request->message([
                'fullName.required' => 'Họ và tên không được để trống',
                'fullName.min' => 'Họ và tên phải lớn hơn 5 ký tự',
                'fullName.max' => 'Họ và tên phải nhỏ hơn 88 ký tự',
                'email.required' => 'Email không được để trống',
                'email.email' => 'Định dạng email không hợp lệ',
                'email.min' => 'Email phải lớn hơn 6 ký tự',
                'email.unique' => 'Email đã tồn tại trong hệ thống',
                'jobTitle.required' => 'Chức danh không được để trống'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                $message = [
                    'status' => '0',
                    'message' => "Đã có lỗi xảy ra. Vui lòng kiểm tra lại.",
                    'form' => 'form-edit1'
                ];

                $sessionKey = Session::isInvalid();
                $error = Session::flash($sessionKey.'_errors');
                $message['error'] = $error;
                exit(json_encode($message));
            }
        }

        // lấy dữ liệu từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();

        $id = $dataFields['id'];

        // đưa data vào
        $data = [
            'fullname' => $dataFields['fullName'],
            'email' => $dataFields['email'],
            'job_title' => $dataFields['jobTitle'],
            'department' => $dataFields['department'],
            'phone' => $dataFields['phone'],
            'updated_at' => date('Y-m-d h:i:s')
        ];

        $get_image = $dataFile['avatar'];

        if(!empty($get_image)){
            $uploadPath = "public/uploads/avatar/";
            $unique_image = ProcessImage::checkImage($get_image, $uploadPath);
            if($unique_image){
                $data['avatar'] = $unique_image;
            }
        }

        $this->adminModel->edit($id,$data);

        $role = $dataFields['role'];

        if(!empty($role)){
           self::update_user_role($id, $role); 
        }

        $permissions = $dataFields['permissions'];
        
        self::update_user_permission($id, $permissions);

        $message = [
            "status" => "1",
            'message' => "Cập nhật thông tin thành công!"
        ];

        exit(json_encode($message));
    }

    public function update_user_role($user_id, $role)
    {
        $dataRole = [
            'role_id' => $role
        ];

        $this->roleModel->editUserRole($user_id, $dataRole);
    }

    public function update_user_permission($user_id, $permissions)
    {
        $user_permissions = $this->permissionModel->getUserPermission($user_id); //mảng 1: 2, 3

        //mảng 2: 1
        // vòng lặp 1: - Giá trị 1 không có trong mảng 2 -> xóa trong mảng 1 và db-> mảng 1: 2
        //             - Giá trị 2 có trong mảng 2 -> xóa trong mảng 2 -> mảng 2: 3

        foreach ($user_permissions as $ukey => $result) {
            if(!in_array($result['permission_id'], $permissions)){
                $this->permissionModel->destroyUserPermission($result['id']);
            }else{
                // ngược lại, vòng lặp 2: nếu có trong mảng 2, xóa trong mảng 2 -> mảng 2: 3
                foreach (array_keys($permissions, $result['permission_id']) as $key) {
                    unset($permissions[$key]);
                }
            }
        }  

        if(!empty($permissions)){
            foreach ($permissions as $key => $value) {
                $dataPermission = [
                    'user_id' => $user_id,
                    'permission_id' => $value
                ];

                $this->permissionModel->createUserPermission($dataPermission);
            }
        }              
    }

    // public function load_record($record)
    // {    
    //     $output = '';
    //     foreach ($record as $key => $value) {

    //         $depart = !empty($value["department"]) ? $value["department"] : "Không";

    //         if($value['status'] == 1){
    //             $status = '<span class="legend-indicator bg-success"></span>Đã Kích hoạt';
    //         }else{
    //             $status = '<span class="legend-indicator bg-danger"></span>Đã Hủy';
    //         }

    //         $link = "<div class='d-flex align-items-center'>Edit user <a href='#!' class='close close-light ml-auto'><i id='closeEditUserPopover' class='tio-clear'></i></a></div>";

    //         $output .= '
    //           <td class="table-column-pr-0">
    //             <div class="custom-control custom-checkbox">
    //               <input type="checkbox" class="custom-control-input" id="usersDataCheck' .$value['id']. '">
    //               <label class="custom-control-label" for="usersDataCheck' .$value['id']. '"></label>
    //             </div>
    //           </td>
    //           <td class="table-column-pl-0">
    //             <a class="d-flex align-items-center" href="'. $value['code']. 'asdssmissn">
    //               <div class="avatar avatar-circle">
    //                 <img class="avatar-img" alt="' .$value['fullname']. '"
    //                 src="' ._WEB_ROOT. '/public/uploads/avatar/' .$value['avatar']. '" >
    //               </div>
    //               <div class="ml-3">
    //                 <span class="d-block h5 text-hover-primary mb-0">' .$value['fullname']. '<i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
    //                 <span class="d-block font-size-sm text-body">' .$value['code']. '</span>
    //               </div>
    //             </a>
    //           </td>
    //           <td>
    //             <span class="d-block h5 mb-0">' .$value['job_title']. '</span>
    //             <span class="d-block font-size-sm">
    //               ' . $depart .'
    //             </span>
    //           </td>
    //           <td>' .$value['email']. '</td>
    //           <td>' .$status. '</td>
    //           <td>' .$value['display_name']. '</td>
    //           <td>
    //             <div id="editUserPopover" data-toggle="popover-dark" data-placement="left" title="' .$link. '" data-content="Xem ví dụ" data-html="true">
    //               <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
    //                 <i class="tio-edit"></i> Sửa
    //               </a>
    //             </div>
    //           </td>
    //         ';
    //     }

    //     echo $output;
    // }

    public function detail($code)
    {       
        $data['sub_content']['admin_by_code'] = $this->adminModel->get_admin_by_code($code);

        $data['dataMeta'] = $this->loadMetaTag();

        $admin = $data['sub_content']['admin_by_code'];

        $data['page_title'] = $admin['fullname'];

        $data['data_js'] = [
            'js' => 'admins.admin_accounts.js_detail'
        ];

        $data['content'] = 'admins.admin_accounts.detail';

        return $this->view('layouts.admin_layout', $data);
    }

    public function destroy()
    {
        // $dataFields = $this->request->getFields();
        // $id = $dataFields['id'];

        // $this->adminModel->destroy($id);
    }   

    public function loadMetaTag()
    {
        return $dataMeta = [
            'meta_title' => 'Quản trị viên',
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