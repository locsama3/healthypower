<?php 
    $errors = Session::flash('errors');
    $old = Session::flash('old');
    
    if (empty($errors)) {
        $errors = [];
    }
    
    if (empty($old)) {
        $old = [];
    }
?>
<section class="main-container col1-layout">
    <div class="main container">
        <div class="account-login">
            <div class="page-title mb-5">
                <h2>Đặt lại mật khẩu</h2>
            </div>
            <div class="container d-flex justify-content-center">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
                        <div class="card card-signin my-5">
                            <div class="card-body">
                                <h5 class="card-title text-center">Đặt lại mật khẩu</h5>
                                <form method="post" class="form-signin" id="formReset">
                                    {! csrf_field()!}
                                    <div class="form-group form-label-group">
                                        <input id="inputEmail" name="email" class="form-control" placeholder="Nhập địa chỉ email" autofocus value="{{ (!empty($old) && array_key_exists('email', $old)) ? $old['email'] : '' }}">
                                        <span class="form-message">{{ (!empty($errors) ?? null && array_key_exists('email', $errors) ?? null) ? $errors['email'] : ''  }}</span>
                                    </div>

                                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Tiếp theo</button>
                                    <hr class="my-4">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div>
</section>