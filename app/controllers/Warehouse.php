<?php
class Warehouse extends Controller{

    public $warehouseModel;
    public $request, $response;

    public function __construct(){
        $this->warehouseModel = $this->model('WarehouseModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function index()
    {
        $data['content'] = 'admins.warehouse.index';

         
        $data['sub_content']['list_warehouse'] = $this->warehouseModel->all();

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Danh sách kho hàng";

        $data['data_js'] = [
            'ajax' => 'admins.warehouse.js'
        ];

        return $this->view('layouts.admin_layout', $data);
    }

    public function create()
    {
        $data['content'] = 'admins.warehouse.create';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js',
            'slug' => 'ChangeToSlug.js'
        ];

        $data['page_title'] = "Thêm mới kho hàng";

        return $this->view('layouts.admin_layout', $data);
    }

    public function store()
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'warehouseName' => 'required|min:5|max:88|unique:shop_stores:store_name'
            ]);

            //Set message
            $this->request->message([
                'blogCateName.required' => 'Tên kho hàng không được để trống',
                'blogCateName.min' => 'Tên kho hàng phải lớn hơn 5 ký tự',
                'blogCateName.max' => 'Tên kho hàng phải nhỏ hơn 30 ký tự',
                'blogCateName.unique' => 'Tên kho hàng đã tồn tại trong hệ thống'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại.');
                return $this->response->redirect('warehouse-create');

            }
        }

        // lấy dữ liệu từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();

        // đưa data vào
        $data = [
            'store_name' => $dataFields['warehouseName'],
            'store_code' => $dataFields['warehouseCode'],
            'slug' => $dataFields['slug'],
            'page_title' => $dataFields['pageTitle'],
            'description' => $dataFields['warehouse_desc'],
            'created_at' => date('Y-m-d h:i:s')
        ];

        $get_image = $dataFile['image'];

        if($get_image){
            $uploadPath = "public/uploads/warehouse/";
            $unique_image = ProcessImage::checkImage($get_image, $uploadPath);
            if($unique_image){
                $data['image'] = $unique_image;
            }
        }

        $this->warehouseModel->create($data);
        Session::flash('msg', 'Thêm kho hàng thành công!');

        return $this->response->redirect('warehouse-create');
    }

    public function edit($id)
    {
        $data['sub_content']['warehouse_by_id'] = $this->warehouseModel->find($id);

        $data['content'] = 'admins.warehouse.edit';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js',
            'slug' => 'ChangeToSlug.js'
        ];

        $data['page_title'] = "Cập nhật kho hàng";

        return $this->view('layouts.admin_layout', $data);
    }

    public function update($id)
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'warehouseName' => 'required|min:5|max:88|unique:shop_stores:store_name'
            ]);

            //Set message
            $this->request->message([
                'blogCateName.required' => 'Tên kho hàng không được để trống',
                'blogCateName.min' => 'Tên kho hàng phải lớn hơn 5 ký tự',
                'blogCateName.max' => 'Tên kho hàng phải nhỏ hơn 30 ký tự',
                'blogCateName.unique' => 'Tên kho hàng đã tồn tại trong hệ thống'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại.');
                return $this->response->redirect('warehouse-edit/editid-'.$id);

            }
        }

        // lấy dữ liệu từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();

        // đưa data vào
        $data = [
            'store_name' => $dataFields['warehouseName'],
            'store_code' => $dataFields['warehouseCode'],
            'slug' => $dataFields['slug'],
            'page_title' => $dataFields['pageTitle'],
            'description' => $dataFields['warehouse_desc'],
            'updated_at' => date('Y-m-d h:i:s')
        ];

        $get_image = $dataFile['image'];

        if(!empty($get_image)){
            $uploadPath = "public/uploads/warehouse/";
            $unique_image = ProcessImage::checkImage($get_image, $uploadPath);
            if($unique_image){
                $data['image'] = $unique_image;
            }
        }

        $this->warehouseModel->edit($id,$data);
        Session::flash('msg', 'Bạn đã cập nhật kho hàng!');

        return $this->response->redirect('warehouse');
    }

    public function status()
    {
        $dataFields = $this->request->getFields();
        $id = $dataFields['id'];
        $status_value = $dataFields['status_value'];

        $data['status'] = $status_value;

        $this->warehouseModel->edit($id,$data);
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
            'meta_title' => 'Kho hàng',
            'meta_desc' => 'kho hàng',
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