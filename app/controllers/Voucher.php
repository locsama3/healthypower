<?php
class Voucher extends Controller{

    public $voucherModel;
    public $request, $response;

    public function __construct(){
        $this->voucherModel = $this->model('VoucherModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function index()
    {
        $data['content'] = 'admins.vouchers.index';

         
        $data['sub_content']['list_voucher'] = $this->voucherModel->all();

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Danh sách Mã khuyến mãi";

        $data['data_js'] = [
            'ajax' => 'admins.vouchers.js'
        ];

        return $this->view('layouts.admin_layout', $data);
    }

    public function create()
    {
        $data['sub_content']['vouchers'] = $this->voucherModel->all();

        $data['content'] = 'admins.vouchers.create';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js',
            'slug' => 'ChangeToSlug.js'
        ];

        $data['page_title'] = "Thêm mới mã khuyễn mãi";

        return $this->view('layouts.admin_layout', $data);
    }

    public function store()
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'supplierName' => 'required|min:5|max:88|unique:tbl_blogs_categories:name'
            ]);

            //Set message
            $this->request->message([
                'supplierName.required' => 'Tên nhà cung ứng không được để trống',
                'supplierName.min' => 'Tên nhà cung ứng phải lớn hơn 5 ký tự',
                'supplierName.max' => 'Tên nhà cung ứng phải nhỏ hơn 30 ký tự',
                'supplierName.unique' => 'Tên nhà cung ứng đã tồn tại trong hệ thống'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại.');
                return $this->response->redirect('vouchers-create');

            }
        }

        // lấy dữ liệu từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();

        // đưa data vào
        $data = [
            'supplier_name' => $dataFields['supplierName'],
            'supplier_code' => $dataFields['supplierCode'],
            'supplier_slug' => $dataFields['slug'],
            'page_title' => $dataFields['pageTitle'],
            'description' => $dataFields['description'],
            'created_at' => date('Y-m-d h:i:s')
        ];

        if(!empty($dataFields['parentSupplier'])){
            $data['parent_id'] = $dataFields['parentSupplier'];
        }

        $get_image = $dataFile['image'];

        if($get_image){
            $uploadPath = "public/uploads/supplier/";
            $unique_image = ProcessImage::checkImage($get_image, $uploadPath);
            if($unique_image){
                $data['image'] = $unique_image;
            }
        }

        $this->voucherModel->create($data);
        Session::flash('msg', 'Thêm nhà cung ứng thành công!');

        return $this->response->redirect('vouchers-create');
    }

    public function edit($id)
    {
        $data['sub_content']['voucher_by_id'] = $this->voucherModel->find($id);

        $data['content'] = 'admins.vouchers.edit';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js',
            'slug' => 'ChangeToSlug.js'
        ];

        $data['page_title'] = "Cập nhật nhà cung ứng";

        return $this->view('layouts.admin_layout', $data);
    }

    public function update($id)
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'supplierName' => 'required|min:5|max:88|unique:tbl_blogs_categories:name'
            ]);

            //Set message
            $this->request->message([
                'supplierName.required' => 'Tên nhà cung ứng không được để trống',
                'supplierName.min' => 'Tên nhà cung ứng phải lớn hơn 5 ký tự',
                'supplierName.max' => 'Tên nhà cung ứng phải nhỏ hơn 30 ký tự',
                'supplierName.unique' => 'Tên nhà cung ứng đã tồn tại trong hệ thống'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại.');
                return $this->response->redirect('vouchers-create');

            }
        }

        // lấy dữ liệu từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();

        // đưa data vào
        $data = [
            'supplier_name' => $dataFields['supplierName'],
            'supplier_code' => $dataFields['supplierCode'],
            'supplier_slug' => $dataFields['slug'],
            'page_title' => $dataFields['pageTitle'],
            'description' => $dataFields['description'],
            'created_at' => date('Y-m-d h:i:s')
        ];

        if(!empty($dataFields['parentSupplier'])){
            $data['parent_id'] = $dataFields['parentSupplier'];
        }

        $get_image = $dataFile['image'];

        if(!empty($get_image)){
            $uploadPath = "public/uploads/supplier/";
            $unique_image = ProcessImage::checkImage($get_image, $uploadPath);
            if($unique_image){
                $data['image'] = $unique_image;
            }
        }

        $this->voucherModel->edit($id,$data);
        Session::flash('msg', 'Bạn đã cập nhật nhà cung ứng!');

        return $this->response->redirect('vouchers');
    }

    public function status()
    {
        $dataFields = $this->request->getFields();
        $id = $dataFields['id'];
        $status_value = $dataFields['status_value'];

        $data['status'] = $status_value;

        $this->voucherModel->edit($id,$data);
    }

    public function destroy()
    {
        // $dataFields = $this->request->getFields();
        // $id = $dataFields['id'];

        // $this->voucherModel->destroy($id);
    }   

    public function loadMetaTag()
    {
        return $dataMeta = [
            'meta_title' => 'Danh mục sản phẩm',
            'meta_desc' => 'sản phẩm, danh mục sản phẩm, mặt hàng buôn bán',
            'meta_keywords' => 'heathy, whey, vitamin, oars',
            'url_canonical' => _WEB_ROOT,
            'meta_author' => 'Team 1',
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