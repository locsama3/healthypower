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

         
        $data['sub_content']['list_voucher'] = $this->voucherModel->show_voucher();

        $data['sub_content']['voucherCount'] = $this->voucherModel->countIf(['deleted_at : null']);

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Danh sách Mã khuyến mãi";

        $data['data_js'] = [
            'ajax' => 'admins.vouchers.js'
        ];

        return $this->view('layouts.admin_layout', $data);
    }

    public function create()
    {
        $data['content'] = 'admins.vouchers.create';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js',
            'slug' => 'ChangeToSlug.js'
        ];

        $data['data_js'] = [
            'flatpickr' => 'admins.vouchers.js_create'
        ];

        $data['page_title'] = "Thêm mới mã khuyễn mãi";

        return $this->view('layouts.admin_layout', $data);
    }

    public function store()
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'voucherName' => 'required|min:5|max:88|unique:shop_vouchers:voucher_name',
                'voucherCode' => 'required|min:3|max:30|unique:shop_vouchers:voucher_code',
                'max_uses' => 'required|min:1',
                'max_uses_user' => 'required|min:1',
                'type' => 'required',
                'discount_amount' => 'required|min:1',
                'start_date' => 'required',
                'end_date' => 'required|callback_check_date',
            ]);

            //Set message
            $this->request->message([
                'voucherName.required' => 'Tên mã khuyến mãi không được để trống',
                'voucherName.min' => 'Tên mã khuyến mãi phải lớn hơn 5 ký tự',
                'voucherName.max' => 'Tên mã khuyến mãi phải nhỏ hơn 30 ký tự',
                'voucherName.unique' => 'Tên mã khuyến mãi đã tồn tại trong hệ thống',
                'voucherCode.required' => 'Mã khuyến mãi không được để trống',
                'voucherCode.min' => 'Mã khuyến mãi phải lớn hơn 5 ký tự',
                'voucherCode.max' => 'Mã khuyến mãi phải nhỏ hơn 30 ký tự',
                'voucherCode.unique' => 'Mã khuyến mãi đã tồn tại trong hệ thống',
                'max_uses.required' => 'Số lượng mã khuyến mãi không được để trống',
                'max_uses.min' => 'Số lượng mã khuyến mãi phải lớn hơn 1',
                'max_uses_user.required' => 'Số mã khuyến mãi khách hàng được sử dụng không được để trống',
                'max_uses_user.min' => 'Số mã khuyến mãi khách hàng được sử dụng phải lớn hơn 1',
                'type.required' => 'Loại mã không được để trống',
                'discount_amount.required' => 'Giá trị giảm của mã không được để trống',
                'discount_amount.min' => 'Giá trị giảm của mã phải lớn hơn 1',
                'start_date.required' => 'Ngày bắt đầu không được để trống',
                'end_date.required' => 'Ngày kết thúc không được để trống',
                'age.callback_check_date' => 'Ngày kết thúc không được nhỏ hơn ngày bắt đầu'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại.');
                return $this->response->redirect('vouchers-create');

            }
        }

        // lấy dữ liệu từ form
        $dataFields = $this->request->getFields();

        // đưa data vào
        $data = [
            'voucher_name' => $dataFields['voucherName'],
            'voucher_code' => $dataFields['voucherCode'],
            'voucher_slug' => $dataFields['slug'],
            'description' => $dataFields['description'],
            'max_uses' => $dataFields['max_uses'],
            'max_uses_user' => $dataFields['max_uses_user'],
            'type' => $dataFields['type'],
            'discount_amount' => $dataFields['discount_amount'],
            'start_date' => $dataFields['start_date'],
            'end_date' => $dataFields['end_date'],
            'created_at' => date('Y-m-d h:i:s')
        ];

        $this->voucherModel->create($data);
        Session::flash('msg', 'Thêm mã khuyến mãi thành công!');

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

        $data['data_js'] = [
            'flatpickr' => 'admins.vouchers.js_create'
        ];

        $data['page_title'] = "Cập nhật mã khuyến mãi";

        return $this->view('layouts.admin_layout', $data);
    }

    public function update($id)
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'voucherName' => 'required|min:5|max:88|unique:shop_vouchers:voucher_name:id='.$id.'',
                'voucherCode' => 'required|min:3|max:30|unique:shop_vouchers:voucher_code:id='.$id.'',
                'max_uses' => 'required|min:1',
                'max_uses_user' => 'required|min:1',
                'type' => 'required',
                'discount_amount' => 'required|min:1',
                'start_date' => 'required',
                'end_date' => 'required|callback_check_date',
            ]);

            //Set message
            $this->request->message([
                'voucherName.required' => 'Tên mã khuyến mãi không được để trống',
                'voucherName.min' => 'Tên mã khuyến mãi phải lớn hơn 5 ký tự',
                'voucherName.max' => 'Tên mã khuyến mãi phải nhỏ hơn 30 ký tự',
                'voucherName.unique' => 'Tên mã khuyến mãi đã tồn tại trong hệ thống',
                'voucherCode.required' => 'Mã khuyến mãi không được để trống',
                'voucherCode.min' => 'Mã khuyến mãi phải lớn hơn 5 ký tự',
                'voucherCode.max' => 'Mã khuyến mãi phải nhỏ hơn 30 ký tự',
                'voucherCode.unique' => 'Mã khuyến mãi đã tồn tại trong hệ thống',
                'max_uses.required' => 'Số lượng mã khuyến mãi không được để trống',
                'max_uses.min' => 'Số lượng mã khuyến mãi phải lớn hơn 1',
                'max_uses_user.required' => 'Số mã khuyến mãi khách hàng được sử dụng không được để trống',
                'max_uses_user.min' => 'Số mã khuyến mãi khách hàng được sử dụng phải lớn hơn 1',
                'type.required' => 'Loại mã không được để trống',
                'discount_amount.required' => 'Giá trị giảm của mã không được để trống',
                'discount_amount.min' => 'Giá trị giảm của mã phải lớn hơn 1',
                'start_date.required' => 'Ngày bắt đầu không được để trống',
                'end_date.required' => 'Ngày kết thúc không được để trống',
                'age.callback_check_date' => 'Ngày kết thúc không được nhỏ hơn ngày bắt đầu'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại.');
                return $this->response->redirect('vouchers-edit/editid-'.$id);

            }
        }

        // lấy dữ liệu từ form
        $dataFields = $this->request->getFields();

        // đưa data vào
        $data = [
            'voucher_name' => $dataFields['voucherName'],
            'voucher_code' => $dataFields['voucherCode'],
            'voucher_slug' => $dataFields['slug'],
            'description' => $dataFields['description'],
            'max_uses' => $dataFields['max_uses'],
            'max_uses_user' => $dataFields['max_uses_user'],
            'type' => $dataFields['type'],
            'discount_amount' => $dataFields['discount_amount'],
            'is_fixed' => 1,
            'start_date' => $dataFields['start_date'],
            'end_date' => $dataFields['end_date'],
            'updated_at' => date('Y-m-d h:i:s')
        ];

        $this->voucherModel->edit($id,$data);
        Session::flash('msg', 'Bạn đã cập nhật mã khuyến mãi!');

        return $this->response->redirect('vouchers');
    }

    public function destroy()
    {
        $dataFields = $this->request->getFields();
        $id = $dataFields['id'];

        $data['deleted_at'] = date('Y-m-d h:i:s');

        $this->voucherModel->edit($id,$data);
    }   

    public function loadMetaTag()
    {
        return $dataMeta = [
            'meta_title' => 'Khuyến mãi và mã giảm giá',
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

    public function check_date($end_date)
    {
        $dataFields = $this->request->getFields();
        $start_date = strtotime($dataFields['start_date']);

        $end_date = strtotime($end_date);

        if($start_date >= $end_date){
            return false;
        }

        return true;
    }
}