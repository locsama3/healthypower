<?php
class Warehouse extends Controller{

    public $warehouseModel;
    public $request, $response;
    public $importModel;
    public $importDetailModel;
    public $exportModel;
    public $exportDetailModel;
    public $productModel;
    public $wareHouseModel;
    public $userModel;

    public function __construct(){
        $this->warehouseModel = $this->model('WarehouseModel');
        $this->request = new Request();
        $this->response = new Response();
        $this->importModel = $this->model('ImportModel');
        $this->importDetailModel = $this->model('ImportDetailModel');
        $this->exportModel = $this->model('ExportModel');
        $this->exportDetailModel = $this->model('ExportDetailModel');
        $this->productModel = $this->model('ProductModel');
        $this->wareHouseModel = $this->model('WarehouseModel');
        $this->userModel = $this->model('UserModel');
    }

    public function index()
    {
        $data['content'] = 'admins.warehouse.index';

         
        $data['sub_content']['list_warehouse'] = $this->warehouseModel->findByField([]);

        $data['sub_content']['warehouseCount'] = $this->warehouseModel->countIf([]);

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
            'slug' => 'ChangeToSlug.js',
            'validate' => 'validate.js'
        ];

        $data['data_js'] = [
            'js' => 'admins.warehouse.js_create'
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
            'slug' => 'ChangeToSlug.js',
            'validate' => 'validate.js'
        ];

        $data['data_js'] = [
            'js' => 'admins.warehouse.js_edit'
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

    public function export(){
        $data['content'] = 'admins.warehouse.export';
        $data['sub_content']['export_list'] = $this->exportModel->getExport();
        foreach($data['sub_content']['export_list'] as $value){
            $data['sub_content']['export_detail'][$value['id']] = $this->exportDetailModel->getExportDetail($value['id']);
        }
        $data['page_title'] = 'Danh sách xuất kho';

        $data['data_js'] = [
            'js'       => 'admins.order.js_index',
        ];
    
        return $this->view('layouts.admin_layout', $data);
    }
    
    public function import(){
        $data['content'] = 'admins.warehouse.import';
        $data['page_title'] = 'Danh sách nhập kho';
        $data['sub_content']['import_list'] = $this->importModel->getImport();
        foreach($data['sub_content']['import_list'] as $value){
            $data['sub_content']['import_detail'][$value['id']] = $this->importDetailModel->getImportDetail($value['id']);
        }
        $data['data_js'] = [
            'js'       => 'admins.order.js_index',
        ];
        return $this->view('layouts.admin_layout', $data);
    }

    public function createImport(){
        $data['content'] = 'admins.warehouse.create_import';
        $data['page_title'] = 'Tạo phiếu nhập kho';
        $data['sub_content']['list_store'] = $this->wareHouseModel->all();
        $data['sub_content']['list_user'] = $this->userModel->all();
        $data['data_js'] = [
            'js' => 'admins.warehouse.js_create_import'
        ];
        $data['libraryJS']['list_js'] = [
            'functions' => 'functions.js'
        ];
        return $this->view('layouts.admin_layout', $data);
    }

    public function insertImport(){
        $dataFields = $this->request->getFields();
        $product = explode(',', $dataFields['product']);
        if(array_search('',$product) !== false ){
            $message = [
                "status" => "0",
                'message' => "Vui lòng nhập đầy đủ dữ liệu!"
            ];
            exit(json_encode($message));
        }
        $product_length = count($product);
       
        $arrayProduct = [];
        for($i = 0; $i < $product_length; $i++){
            array_push($arrayProduct,[
                'id'    => $product[++$i],
                'qty'   => $product[$i+=2],
                'price' => $product[$i+=2]
            ]);
        }
       

        $this->db->insertData('shop_imports',[
            'store_id'    => $dataFields['store_id'],
            'employee_id' => $dataFields['user_id'],
            'import_date' => date('Y-m-d h:i:s'),
            'created_at'  => date('Y-m-d h:i:s')
        ]);
        
        $last_id_imports = $this->db->lastInsertId();
        for($i = 0; $i < $product_length/6; $i++){
            $this->db->insertData('shop_import_detail',[
                'import_id' => $last_id_imports,
                'product_id'=> $arrayProduct[$i]['id'],
                'quantity'  => $arrayProduct[$i]['qty'],
                'unit_price'=> $arrayProduct[$i]['price']
            ]);
            $this->productModel->updateQuantity($arrayProduct[$i]['id'], $arrayProduct[$i]['qty'], '+');
        }
        $message = [
            "status"  => "1",
            'message' => "Nhập hàng thành công!",
            'location'=> _WEB_ROOT.'/warehouse-import',
            'time'    => 1000
        ];
        exit(json_encode($message));
        
        
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

    public function getProduct(){
        $products = $this->productModel->all();
        $output = [];

        foreach($products as $data){
            $temp_array = array();
            $temp_array['value'] = $data['product_name'];
            $temp_array['id'] = $data['id'];
            $output[] = $temp_array;
        }
        

        echo json_encode($output);
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