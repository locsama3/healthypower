<?php
class ProductCategory extends Controller{

    public $prodCateModel;
    public $request, $response;

    public function __construct(){
        $this->prodCateModel = $this->model('ProductCategoryModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function index()
    {
        $data['content'] = 'admins.product_categories.index';

         
        $data['sub_content']['list_prod_cate'] = $this->prodCateModel->findByField([]);

        $data['sub_content']['prod_cate_count'] = $this->prodCateModel->countIf([]);

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Liệt kê Danh mục sản phẩm";

        $data['data_js'] = [
            'ajax' => 'admins.product_categories.js'
        ];

        return $this->view('layouts.admin_layout', $data);
    }

    public function create()
    {
        $data['sub_content']['product_categories'] = $this->prodCateModel->all();

        $data['content'] = 'admins.product_categories.create';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js',
            'slug' => 'ChangeToSlug.js',
            'validate' => 'validate.js'
        ];

        $data['data_js'] = [
            'js' => 'admins.product_categories.js_create'
        ];

        $data['page_title'] = "Thêm mới danh mục sản phẩm";

        return $this->view('layouts.admin_layout', $data);
    }

    public function store()
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'prodCateName' => 'required|min:5|max:88|unique:shop_categories:category_name'
            ]);

            //Set message
            $this->request->message([
                'prodCateName.required' => 'Tên danh mục không được để trống',
                'prodCateName.min' => 'Tên danh mục phải lớn hơn 5 ký tự',
                'prodCateName.max' => 'Tên danh mục phải nhỏ hơn 30 ký tự',
                'prodCateName.unique' => 'Tên danh mục đã tồn tại trong hệ thống'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại.');
                return $this->response->redirect('products-category-create');

            }
        }

        // lấy dữ liệu từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();

        // đưa data vào
        $data = [
            'category_name' => $dataFields['prodCateName'],
            'category_code' => $dataFields['prodCateCode'],
            'category_slug' => $dataFields['slug'],
            'page_title' => $dataFields['pageTitle'],
            'description' => $dataFields['cate_desc'],
            'created_at' => date('Y-m-d h:i:s')
        ];

        if(!empty($dataFields['parentCate'])){
            $data['parent_id'] = $dataFields['parentCate'];
        }

        $get_image = $dataFile['image'];

        if($get_image){
            $uploadPath = "public/uploads/prod_category/";
            $unique_image = ProcessImage::checkImage($get_image, $uploadPath);
            if($unique_image){
                $data['image'] = $unique_image;
            }
        }

        $this->prodCateModel->create($data);
        Session::flash('msg', 'Thêm danh mục thành công!');

        return $this->response->redirect('products-category-create');
    }

    public function edit($id)
    {
        $data['sub_content']['product_categories'] = $this->prodCateModel->all();

        $data['sub_content']['prod_cate_by_id'] = $this->prodCateModel->find($id);

        $data['content'] = 'admins.product_categories.edit';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js',
            'slug' => 'ChangeToSlug.js',
            'validate' => 'validate.js'
        ];

        $data['data_js'] = [
            'js' => 'admins.product_categories.js_edit'
        ];

        $data['page_title'] = "Cập nhật danh mục bài viết";

        return $this->view('layouts.admin_layout', $data);
    }

    public function update($id)
    {
        if ($this->request->isPost()){
            /*Set rules*/
            $this->request->rules([
                'prodCateName' => 'required|min:5|max:88|unique:shop_categories:category_name'
            ]);

            //Set message
            $this->request->message([
                'prodCateName.required' => 'Tên danh mục không được để trống',
                'prodCateName.min' => 'Tên danh mục phải lớn hơn 5 ký tự',
                'prodCateName.max' => 'Tên danh mục phải nhỏ hơn 30 ký tự',
                'prodCateName.unique' => 'Tên danh mục đã tồn tại trong hệ thống'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại.');
                return $this->response->redirect('products-category-edit/editid-'.$id);

            }
        }

        // lấy dữ liệu từ form
        $dataFields = $this->request->getFields();
        $dataFile = $this->request->getFiles();

        // đưa data vào
        $data = [
            'category_name' => $dataFields['prodCateName'],
            'category_code' => $dataFields['prodCateCode'],
            'category_slug' => $dataFields['slug'],
            'page_title' => $dataFields['pageTitle'],
            'description' => $dataFields['cate_desc'],
            'updated_at' => date('Y-m-d h:i:s')
        ];

        if(!empty($dataFields['parentCate'])){
            $data['parent_id'] = $dataFields['parentCate'];
        }

        $get_image = $dataFile['image'];

        if(!empty($get_image)){
            $uploadPath = "public/uploads/prod_category/";
            $unique_image = ProcessImage::checkImage($get_image, $uploadPath);
            if($unique_image){
                $data['image'] = $unique_image;
            }
        }

        $this->prodCateModel->edit($id,$data);
        Session::flash('msg', 'Bạn đã cập nhật danh mục sản phẩm!');

        return $this->response->redirect('products-category');
    }

    public function status()
    {
        $dataFields = $this->request->getFields();
        $id = $dataFields['id'];
        $status_value = $dataFields['status_value'];

        $data['status'] = $status_value;

        $this->prodCateModel->edit($id,$data);
    }

    public function destroy()
    {
        // $dataFields = $this->request->getFields();
        // $id = $dataFields['id'];

        // $this->prodCateModel->destroy($id);
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