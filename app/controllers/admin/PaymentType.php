<?php
class PaymentType extends Controller{

    public $paymentTypeModel;
    public $request, $response;

    public function __construct(){
        $this->paymentTypeModel = $this->model('PaymentTypeModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function index()
    {
        $data['content'] = 'admins.payment_types.index';

         
        $data['sub_content']['list_payment'] = $this->paymentTypeModel->findByField([]);

        $data['sub_content']['paymentCount'] = $this->paymentTypeModel->countIf([]);

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Danh sách Phương thức thanh toán";

        $data['data_js'] = [
            'ajax' => 'admins.payment_types.js'
        ];

        return $this->view('layouts.admin_layout', $data);
    }

    public function create()
    {
        $data['sub_content']['payment_types'] = $this->paymentTypeModel->all();

        $data['content'] = 'admins.payment_types.create';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js',
            'slug' => 'ChangeToSlug.js',
            'validate' => 'validate.js'
        ];

        $data['data_js'] = [
            'js' => 'admins.payment_types.js_create'
        ];

        $data['page_title'] = "Thêm mới phương thức thanh toán";

        return $this->view('layouts.admin_layout', $data);
    }

    public function store()
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'paymentName' => 'required|min:5|max:88|unique:shop_payment_types:payment_name'
            ]);

            //Set message
            $this->request->message([
                'paymentName.required' => 'Tên nhà cung ứng không được để trống',
                'paymentName.min' => 'Tên nhà cung ứng phải lớn hơn 5 ký tự',
                'paymentName.max' => 'Tên nhà cung ứng phải nhỏ hơn 30 ký tự',
                'paymentName.unique' => 'Tên nhà cung ứng đã tồn tại trong hệ thống'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại.');
                return $this->response->redirect('payment-types-create');

            }
        }

        // lấy dữ liệu từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();

        // đưa data vào
        $data = [
            'payment_name' => $dataFields['paymentName'],
            'payment_code' => $dataFields['paymentCode'],
            'payment_slug' => $dataFields['slug'],
            'page_title' => $dataFields['pageTitle'],
            'description' => $dataFields['description'],
            'created_at' => date('Y-m-d h:i:s')
        ];

        $get_image = $dataFile['image'];

        if($get_image){
            $uploadPath = "public/uploads/payment_type/";
            $unique_image = ProcessImage::checkImage($get_image, $uploadPath);
            if($unique_image){
                $data['image'] = $unique_image;
            }
        }

        $this->paymentTypeModel->create($data);
        Session::flash('msg', 'Thêm phương thức thanh toán thành công!');

        return $this->response->redirect('payment-types-create');
    }

    public function edit($id)
    {
        $data['sub_content']['payment_by_id'] = $this->paymentTypeModel->find($id);

        $data['content'] = 'admins.payment_types.edit';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js',
            'slug' => 'ChangeToSlug.js',
            'validate' => 'validate.js'
        ];

        $data['data_js'] = [
            'js' => 'admins.payment_types.js_edit'
        ];

        $data['page_title'] = "Cập nhật phương thức thanh toán";

        return $this->view('layouts.admin_layout', $data);
    }

    public function update($id)
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'paymentName' => 'required|min:5|max:88|unique:shop_payment_types:payment_name'
            ]);

            //Set message
            $this->request->message([
                'paymentName.required' => 'Tên nhà cung ứng không được để trống',
                'paymentName.min' => 'Tên nhà cung ứng phải lớn hơn 5 ký tự',
                'paymentName.max' => 'Tên nhà cung ứng phải nhỏ hơn 30 ký tự',
                'paymentName.unique' => 'Tên nhà cung ứng đã tồn tại trong hệ thống'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại.');
                return $this->response->redirect('payment-types-edit/editid-'.$id);

            }
        }

        // lấy dữ liệu từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();

        // đưa data vào
        $data = [
            'payment_name' => $dataFields['paymentName'],
            'payment_code' => $dataFields['paymentCode'],
            'payment_slug' => $dataFields['slug'],
            'page_title' => $dataFields['pageTitle'],
            'description' => $dataFields['description'],
            'updated_at' => date('Y-m-d h:i:s')
        ];

        $get_image = $dataFile['image'];

        if(!empty($get_image)){
            $uploadPath = "public/uploads/payment_type/";
            $unique_image = ProcessImage::checkImage($get_image, $uploadPath);
            if($unique_image){
                $data['image'] = $unique_image;
            }
        }

        $this->paymentTypeModel->edit($id,$data);
        Session::flash('msg', 'Bạn đã cập nhật phương thức thanh toán!');

        return $this->response->redirect('payment-types');
    }

    public function status()
    {
        $dataFields = $this->request->getFields();
        $id = $dataFields['id'];
        $status_value = $dataFields['status_value'];

        $data['status'] = $status_value;

        $this->paymentTypeModel->edit($id,$data);
    }

    public function destroy()
    {
        // $dataFields = $this->request->getFields();
        // $id = $dataFields['id'];

        // $this->paymentTypeModel->destroy($id);
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