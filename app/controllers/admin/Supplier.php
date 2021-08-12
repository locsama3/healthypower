<?php
class Supplier extends Controller{

    public $supplierModel;
    public $request, $response;

    public function __construct(){
        $this->supplierModel = $this->model('SupplierModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function index()
    {
        $data['content'] = 'admins.suppliers.index';
         
        $data['sub_content']['list_supplier'] = $this->supplierModel->all();

        $data['sub_content']['supplierCount'] = $this->supplierModel->countIf([]);

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Danh sách nhà cung ứng";

        $data['data_js'] = [
            'ajax' => 'admins.suppliers.js'
        ];

        return $this->view('layouts.admin_layout', $data);
    }

    public function create()
    {
        $data['sub_content']['suppliers'] = $this->supplierModel->all();

        $data['content'] = 'admins.suppliers.create';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js',
            'slug' => 'ChangeToSlug.js',
            'validate' => 'validate.js'
        ];

        $data['data_js'] = [
            'js' => 'admins.suppliers.js_create'
        ];

        $data['page_title'] = "Thêm mới nhà cung ứng";

        return $this->view('layouts.admin_layout', $data);
    }

    public function store()
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'supplierName' => 'required|min:5|max:88|unique:shop_suppliers:supplier_name'
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
                return $this->response->redirect('supplier-create');

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

        $this->supplierModel->create($data);
        Session::flash('msg', 'Thêm nhà cung ứng thành công!');

        return $this->response->redirect('supplier-create');
    }

    public function edit($id)
    {
        $data['sub_content']['supplier_by_id'] = $this->supplierModel->find($id);

        $data['content'] = 'admins.suppliers.edit';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js',
            'slug' => 'ChangeToSlug.js',
            'validate' => 'validate.js'
        ];

        $data['data_js'] = [
            'js' => 'admins.suppliers.js_edit'
        ];

        $data['page_title'] = "Cập nhật nhà cung ứng";

        return $this->view('layouts.admin_layout', $data);
    }

    public function update($id)
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'supplierName' => 'required|min:5|max:88|unique:shop_suppliers:supplier_name'
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
                return $this->response->redirect('supplier-edit/editid-'.$id);

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
            'updated_at' => date('Y-m-d h:i:s')
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

        $this->supplierModel->edit($id,$data);
        Session::flash('msg', 'Bạn đã cập nhật nhà cung ứng!');

        return $this->response->redirect('supplier');
    }

    public function status()
    {
        $dataFields = $this->request->getFields();
        $id = $dataFields['id'];
        $status_value = $dataFields['status_value'];

        $data['status'] = $status_value;

        $this->supplierModel->edit($id,$data);
    }

    public function destroy()
    {
        // $dataFields = $this->request->getFields();
        // $id = $dataFields['id'];

        // $this->supplierModel->destroy($id);
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