  <!-- ========== MAIN CONTENT ========== -->
  <!-- Navbar Vertical -->



  <!-- End Navbar Vertical -->

  <main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
          <!-- Page Header -->
          <div class="page-header">
              <div class="row align-items-center">
                  <div class="col-sm mb-2 mb-sm-0">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb breadcrumb-no-gutter">
                              <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ _WEB_ROOT }}/customer">Khách hàng</a>
                              </li>
                              <li class="breadcrumb-item active" aria-current="page">Thêm khách hàng</li>
                          </ol>
                      </nav>

                      <h1 class="page-header-title">Thêm khách hàng</h1>
                  </div>
              </div>
          </div>
          <!-- End Page Header -->

          <div class="row">
              <div class="col-lg-4 mb-3 mb-lg-0">
                  <h4>Thông tin tài khoản</h4>
              </div>

              <div class="col-lg-8">
                  <!-- Card -->
                  <div class="card">
                      <!-- Body -->
                      <form method="post" id="form-info-account" enctype="multipart/form-data">
                          <div class="card-body">
                              <input type="hidden" id="form-info-input" name="formInfor" value="form-info-account">

                              <label for="avatarUploader" class="input-label">Avatar</label>
                              <div class="d-flex align-items-center mb-3">
                                  <!-- Avatar -->
                                  <label class="avatar avatar-xl avatar-circle avatar-uploader mr-5" for="avatarUploader">
                                      <img id="avatarImg" class="avatar-img" src="{{ _WEB_ROOT }}/public/admin/img/160x160/img1.jpg" alt="Image Description">

                                      <input type="file" class="js-file-attach avatar-uploader-input" name="avatarUpload" id="avatarUploader" data-hs-file-attach-options='{
                                            "textTarget": "#avatarImg",
                                            "mode": "image",
                                            "targetAttr": "src",
                                            "resetTarget": ".js-file-attach-reset-img",
                                            "resetImg": "{{ _WEB_ROOT }}/public/admin/img/160x160/img1.jpg",
                                            "allowTypes": [".png", ".jpeg", ".jpg"]
                                        }'>

                                      <span class="avatar-uploader-trigger">
                                          <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
                                      </span>
                                  </label>
                                  <!-- End Avatar -->

                                  <button type="button" class="js-file-attach-reset-img btn btn-white">Xóa</button>
                              </div>
                              <div class="row">
                                  <div class="col-sm-6">
                                      <!-- Form Group -->
                                      <div class="form-group">
                                          <label for="firstNameLabel" class="input-label">Tên</label>
                                          <input type="text" class="form-control" name="firstName" id="firstNameLabel" placeholder="Tùng" aria-label="Clarice">
                                          <span class="form-message"></span>
                                      </div>
                                      <!-- End Form Group -->
                                  </div>

                                  <div class="col-sm-6">
                                      <!-- Form Group -->
                                      <div class="form-group">
                                          <label for="lastNameLabel" class="input-label">Họ</label>
                                          <input type="text" class="form-control" name="lastName" id="lastNameLabel" placeholder="Sơn" aria-label="Boone">
                                          <span class="form-message"></span>
                                      </div>
                                      <!-- End Form Group -->
                                  </div>
                              </div>
                              <!-- End Row -->

                              <!-- Form Group -->
                              <div class="form-group">
                                  <label for="emailLabel" class="input-label">Email</label>
                                  <input type="email" class="form-control" name="email" id="emailLabel" placeholder="healthypower@example.com" aria-label="clarice@example.com">
                                  <span class="form-message"></span>
                              </div>
                              <!-- End Form Group -->

                              <!-- Form Group -->
                              <div class="js-add-field form-group" data-hs-add-field-options='{
                                    "template": "#addPhoneFieldTemplate",
                                    "container": "#addPhoneFieldContainer",
                                    "defaultCreated": 0
                                }'>
                                  <label for="phoneLabel" class="input-label">Số điện thoại <span class="input-label-secondary">(Optional)</span></label>

                                  <div class="input-group input-group-sm-down-break align-items-center">
                                      <input type="text" class="js-masked-input form-control" name="phone" id="phoneLabel" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                                            "template": "+0(000)000-00-00"
                                        }'>

                                      <div class="input-group-append">
                                          <!-- Select -->
                                          <div class="select2-custom">
                                              <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0;" name="phoneSelect" data-hs-select2-options='{
                                            "minimumResultsForSearch": "Infinity",
                                            "dropdownAutoWidth": true,
                                            "width": "6rem"
                                        }'>
                                                  <option value="Mobile" selected="">Mobile</option>
                                                  <option value="Home">Nhà</option>
                                                  <option value="Work">Công việc</option>
                                                  <option value="Fax">Fax</option>
                                                  <option value="Direct">Direct</option>
                                              </select>
                                              <!-- End Select -->
                                          </div>
                                      </div>
                                  </div>
                                  <span class="form-message"></span>
                              </div>
                              <!-- End Form Group -->

                              <div class="form-group">
                                  <label class="input-label">Giới tính</label>
                                  <!-- Input Group -->
                                  <div class="input-group input-group-md-down-break">
                                      <!-- Custom Radio -->
                                      <div class="form-control">
                                          <div class="custom-control custom-radio">
                                              <input type="radio" class="custom-control-input" name="gender" id="genderTypeRadioEg1" value="1">
                                              <label class="custom-control-label" for="genderTypeRadioEg1">Nam</label>
                                          </div>
                                      </div>
                                      <!-- End Custom Radio -->

                                      <!-- Custom Radio -->
                                      <div class="form-control">
                                          <div class="custom-control custom-radio">
                                              <input type="radio" class="custom-control-input" name="gender" id="genderTypeRadioEg2" value="2">
                                              <label class="custom-control-label" for="genderTypeRadioEg2">Nữ</label>
                                          </div>
                                      </div>
                                      <!-- End Custom Radio -->

                                      <!-- Custom Radio -->
                                      <div class="form-control">
                                          <div class="custom-control custom-radio">
                                              <input type="radio" class="custom-control-input" name="gender" id="genderTypeRadioEg3" value="3">
                                              <label class="custom-control-label" for="genderTypeRadioEg3">Khác</label>
                                          </div>
                                      </div>
                                      <!-- End Custom Radio -->
                                  </div>
                                  <!-- End Input Group -->
                                  <span class="form-message"></span>
                              </div>

                              <!-- Custom Checkbox -->
                              <div class="custom-control custom-checkbox form-group">
                                  <input type="checkbox" class="custom-control-input" id="marketingEmailsCheckbox">
                                  <label class="custom-control-label" for="marketingEmailsCheckbox">Tôi muốn nhận thông báo, email, và thông tin khuyến mãi</label>
                              </div>
                              <!-- End Custom Checkbox -->

                              <div class="d-flex justify-content-end">
                                  <button type="button" class="btn btn-white mr-2">Nhập lại</button>
                                  <button type="submit" class="btn btn-primary">Lưu</button>
                              </div>
                          </div>
                          <!-- Body -->
                      </form>
                  </div>
                  <!-- End Card -->
              </div>
          </div>
          <!-- End Row -->

          <hr class="my-5">

          <div class="row">
              <div class="col-lg-4 mb-3 mb-lg-0">
                  <h4>Địa chỉ giao hàng</h4>
                  <p>Địa chỉ giao hàng chính của khách hàng</p>
              </div>

              <div class="col-lg-8">
                  <!-- Card -->
                  <div class="card">
                      <form method="post" id="form-shipping-address">
                          <!-- Body -->
                          <div class="card-body">
                              <input type="hidden" id="form-shipping" name="formInfor" value="form-shipping-address">

                              <!-- Form Group -->
                              <div class="form-group">
                                  <label for="addressLocationLabel" class="input-label">Địa chỉ giao hàng</label>

                                  <!-- Select -->
                                  <div class="mb-3">
                                      <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" id="addressLocationLabel" data-hs-select2-options='{
                                            "placeholder": "Lựa chọn tỉnh, thành phố",
                                            "searchInputPlaceholder": "Search a country"
                                            }'>
                                          <option label="empty"></option>
                                          <option value="AF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/af.svg" alt="Afghanistan Flag" /><span class="text-truncate">Afghanistan</span></span>'>
                                              Afghanistan</option>
                                          <option value="AX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ax.svg" alt="Aland Islands Flag" /><span class="text-truncate">Aland Islands</span></span>'>
                                              Aland Islands</option>
                                          <option value="AL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/al.svg" alt="Albania Flag" /><span class="text-truncate">Albania</span></span>'>
                                              Albania</option>
                                          <option value="DZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/dz.svg" alt="Algeria Flag" /><span class="text-truncate">Algeria</span></span>'>
                                              Algeria</option>
                                          <option value="AS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/as.svg" alt="American Samoa Flag" /><span class="text-truncate">American Samoa</span></span>'>
                                              American Samoa</option>
                                          <option value="AD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ad.svg" alt="Andorra Flag" /><span class="text-truncate">Andorra</span></span>'>
                                              Andorra</option>
                                          <option value="AO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ao.svg" alt="Angola Flag" /><span class="text-truncate">Angola</span></span>'>
                                              Angola</option>
                                          <option value="AI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ai.svg" alt="Anguilla Flag" /><span class="text-truncate">Anguilla</span></span>'>
                                              Anguilla</option>
                                          <option value="AG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ag.svg" alt="Antigua and Barbuda Flag" /><span class="text-truncate">Antigua and Barbuda</span></span>'>
                                              Antigua and Barbuda</option>
                                          <option value="AR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ar.svg" alt="Argentina Flag" /><span class="text-truncate">Argentina</span></span>'>
                                              Argentina</option>
                                          <option value="AM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/am.svg" alt="Armenia Flag" /><span class="text-truncate">Armenia</span></span>'>
                                              Armenia</option>
                                          <option value="AW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/aw.svg" alt="Aruba Flag" /><span class="text-truncate">Aruba</span></span>'>
                                              Aruba</option>
                                          <option value="AU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/au.svg" alt="Australia Flag" /><span class="text-truncate">Australia</span></span>'>
                                              Australia</option>
                                          <option value="AT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/at.svg" alt="Austria Flag" /><span class="text-truncate">Austria</span></span>'>
                                              Austria</option>
                                          <option value="AZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/az.svg" alt="Azerbaijan Flag" /><span class="text-truncate">Azerbaijan</span></span>'>
                                              Azerbaijan</option>
                                          <option value="BS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bs.svg" alt="Bahamas Flag" /><span class="text-truncate">Bahamas</span></span>'>
                                              Bahamas</option>
                                          <option value="BH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bh.svg" alt="Bahrain Flag" /><span class="text-truncate">Bahrain</span></span>'>
                                              Bahrain</option>
                                          <option value="BD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bd.svg" alt="Bangladesh Flag" /><span class="text-truncate">Bangladesh</span></span>'>
                                              Bangladesh</option>
                                          <option value="BB" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bb.svg" alt="Barbados Flag" /><span class="text-truncate">Barbados</span></span>'>
                                              Barbados</option>
                                          <option value="BY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/by.svg" alt="Belarus Flag" /><span class="text-truncate">Belarus</span></span>'>
                                              Belarus</option>
                                          <option value="BE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/be.svg" alt="Belgium Flag" /><span class="text-truncate">Belgium</span></span>'>
                                              Belgium</option>
                                          <option value="BZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bz.svg" alt="Belize Flag" /><span class="text-truncate">Belize</span></span>'>
                                              Belize</option>
                                          <option value="BJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bj.svg" alt="Benin Flag" /><span class="text-truncate">Benin</span></span>'>
                                              Benin</option>
                                          <option value="BM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bm.svg" alt="Bermuda Flag" /><span class="text-truncate">Bermuda</span></span>'>
                                              Bermuda</option>
                                          <option value="BT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bt.svg" alt="Bhutan Flag" /><span class="text-truncate">Bhutan</span></span>'>
                                              Bhutan</option>
                                          <option value="BO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bo.svg" alt="Bolivia (Plurinational State of) Flag" /><span class="text-truncate">Bolivia (Plurinational State of)</span></span>'>
                                              Bolivia (Plurinational State of)</option>
                                          <option value="BQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bq.svg" alt="Bonaire, Sint Eustatius and Saba Flag" /><span class="text-truncate">Bonaire, Sint Eustatius and Saba</span></span>'>
                                              Bonaire, Sint Eustatius and Saba</option>
                                          <option value="BA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ba.svg" alt="Bosnia and Herzegovina Flag" /><span class="text-truncate">Bosnia and Herzegovina</span></span>'>
                                              Bosnia and Herzegovina</option>
                                          <option value="BW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bw.svg" alt="Botswana Flag" /><span class="text-truncate">Botswana</span></span>'>
                                              Botswana</option>
                                          <option value="BR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/br.svg" alt="Brazil Flag" /><span class="text-truncate">Brazil</span></span>'>
                                              Brazil</option>
                                          <option value="IO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/io.svg" alt="British Indian Ocean Territory Flag" /><span class="text-truncate">British Indian Ocean Territory</span></span>'>
                                              British Indian Ocean Territory</option>
                                          <option value="BN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bn.svg" alt="Brunei Darussalam Flag" /><span class="text-truncate">Brunei Darussalam</span></span>'>
                                              Brunei Darussalam</option>
                                          <option value="BG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bg.svg" alt="Bulgaria Flag" /><span class="text-truncate">Bulgaria</span></span>'>
                                              Bulgaria</option>
                                          <option value="BF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bf.svg" alt="Burkina Faso Flag" /><span class="text-truncate">Burkina Faso</span></span>'>
                                              Burkina Faso</option>
                                          <option value="BI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bi.svg" alt="Burundi Flag" /><span class="text-truncate">Burundi</span></span>'>
                                              Burundi</option>
                                          <option value="CV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cv.svg" alt="Cabo Verde Flag" /><span class="text-truncate">Cabo Verde</span></span>'>
                                              Cabo Verde</option>
                                          <option value="KH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/kh.svg" alt="Cambodia Flag" /><span class="text-truncate">Cambodia</span></span>'>
                                              Cambodia</option>
                                          <option value="CM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cm.svg" alt="Cameroon Flag" /><span class="text-truncate">Cameroon</span></span>'>
                                              Cameroon</option>
                                          <option value="CA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ca.svg" alt="Canada Flag" /><span class="text-truncate">Canada</span></span>'>
                                              Canada</option>
                                          <option value="KY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ky.svg" alt="Cayman Islands Flag" /><span class="text-truncate">Cayman Islands</span></span>'>
                                              Cayman Islands</option>
                                          <option value="CF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cf.svg" alt="Central African Republic Flag" /><span class="text-truncate">Central African Republic</span></span>'>
                                              Central African Republic</option>
                                          <option value="TD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/td.svg" alt="Chad Flag" /><span class="text-truncate">Chad</span></span>'>
                                              Chad</option>
                                          <option value="CL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cl.svg" alt="Chile Flag" /><span class="text-truncate">Chile</span></span>'>
                                              Chile</option>
                                          <option value="CN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="China Flag" /><span class="text-truncate">China</span></span>'>
                                              China</option>
                                          <option value="CX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cx.svg" alt="Christmas Island Flag" /><span class="text-truncate">Christmas Island</span></span>'>
                                              Christmas Island</option>
                                          <option value="CC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cc.svg" alt="Cocos (Keeling) Islands Flag" /><span class="text-truncate">Cocos (Keeling) Islands</span></span>'>
                                              Cocos (Keeling) Islands</option>
                                          <option value="CO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/co.svg" alt="Colombia Flag" /><span class="text-truncate">Colombia</span></span>'>
                                              Colombia</option>
                                          <option value="KM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/km.svg" alt="Comoros Flag" /><span class="text-truncate">Comoros</span></span>'>
                                              Comoros</option>
                                          <option value="CK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ck.svg" alt="Cook Islands Flag" /><span class="text-truncate">Cook Islands</span></span>'>
                                              Cook Islands</option>
                                          <option value="CR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cr.svg" alt="Costa Rica Flag" /><span class="text-truncate">Costa Rica</span></span>'>
                                              Costa Rica</option>
                                          <option value="HR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/hr.svg" alt="Croatia Flag" /><span class="text-truncate">Croatia</span></span>'>
                                              Croatia</option>
                                          <option value="CU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cu.svg" alt="Cuba Flag" /><span class="text-truncate">Cuba</span></span>'>
                                              Cuba</option>
                                          <option value="CW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cw.svg" alt="Curaçao Flag" /><span class="text-truncate">Curaçao</span></span>'>
                                              Curaçao</option>
                                          <option value="CY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cy.svg" alt="Cyprus Flag" /><span class="text-truncate">Cyprus</span></span>'>
                                              Cyprus</option>
                                          <option value="CZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cz.svg" alt="Czech Republic Flag" /><span class="text-truncate">Czech Republic</span></span>'>
                                              Czech Republic</option>
                                          <option value="CI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ci.svg" alt=Côte d&apos;Ivoire Flag" /><span class="text-truncate">Côte d&apos;Ivoire</span></span>'>
                                              Côte d'Ivoire</option>
                                          <option value="CD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cd.svg" alt="Democratic Republic of the Congo Flag" /><span class="text-truncate">Democratic Republic of the Congo</span></span>'>
                                              Democratic Republic of the Congo</option>
                                          <option value="DK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Denmark Flag" /><span class="text-truncate">Denmark</span></span>'>
                                              Denmark</option>
                                          <option value="DJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/dj.svg" alt="Djibouti Flag" /><span class="text-truncate">Djibouti</span></span>'>
                                              Djibouti</option>
                                          <option value="DM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/dm.svg" alt="Dominica Flag" /><span class="text-truncate">Dominica</span></span>'>
                                              Dominica</option>
                                          <option value="DO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/do.svg" alt="Dominican Republic Flag" /><span class="text-truncate">Dominican Republic</span></span>'>
                                              Dominican Republic</option>
                                          <option value="EC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ec.svg" alt="Ecuador Flag" /><span class="text-truncate">Ecuador</span></span>'>
                                              Ecuador</option>
                                          <option value="EG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/eg.svg" alt="Egypt Flag" /><span class="text-truncate">Egypt</span></span>'>
                                              Egypt</option>
                                          <option value="SV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sv.svg" alt="El Salvador Flag" /><span class="text-truncate">El Salvador</span></span>'>
                                              El Salvador</option>
                                          <option value="GB-ENG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb-eng.svg" alt="England Flag" /><span class="text-truncate">England</span></span>'>
                                              England</option>
                                          <option value="GQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gq.svg" alt="Equatorial Guinea Flag" /><span class="text-truncate">Equatorial Guinea</span></span>'>
                                              Equatorial Guinea</option>
                                          <option value="ER" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/er.svg" alt="Eritrea Flag" /><span class="text-truncate">Eritrea</span></span>'>
                                              Eritrea</option>
                                          <option value="EE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ee.svg" alt="Estonia Flag" /><span class="text-truncate">Estonia</span></span>'>
                                              Estonia</option>
                                          <option value="ET" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/et.svg" alt="Ethiopia Flag" /><span class="text-truncate">Ethiopia</span></span>'>
                                              Ethiopia</option>
                                          <option value="FK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/fk.svg" alt="Falkland Islands Flag" /><span class="text-truncate">Falkland Islands</span></span>'>
                                              Falkland Islands</option>
                                          <option value="FO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/fo.svg" alt="Faroe Islands Flag" /><span class="text-truncate">Faroe Islands</span></span>'>
                                              Faroe Islands</option>
                                          <option value="FM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/fm.svg" alt="Federated States of Micronesia Flag" /><span class="text-truncate">Federated States of Micronesia</span></span>'>
                                              Federated States of Micronesia</option>
                                          <option value="FJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/fj.svg" alt="Fiji Flag" /><span class="text-truncate">Fiji</span></span>'>
                                              Fiji</option>
                                          <option value="FI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/fi.svg" alt="Finland Flag" /><span class="text-truncate">Finland</span></span>'>
                                              Finland</option>
                                          <option value="FR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/fr.svg" alt="France Flag" /><span class="text-truncate">France</span></span>'>
                                              France</option>
                                          <option value="GF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gf.svg" alt="French Guiana Flag" /><span class="text-truncate">French Guiana</span></span>'>
                                              French Guiana</option>
                                          <option value="PF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pf.svg" alt="French Polynesia Flag" /><span class="text-truncate">French Polynesia</span></span>'>
                                              French Polynesia</option>
                                          <option value="TF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tf.svg" alt="French Southern Territories Flag" /><span class="text-truncate">French Southern Territories</span></span>'>
                                              French Southern Territories</option>
                                          <option value="GA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ga.svg" alt="Gabon Flag" /><span class="text-truncate">Gabon</span></span>'>
                                              Gabon</option>
                                          <option value="GM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gm.svg" alt="Gambia Flag" /><span class="text-truncate">Gambia</span></span>'>
                                              Gambia</option>
                                          <option value="GE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ge.svg" alt="Georgia Flag" /><span class="text-truncate">Georgia</span></span>'>
                                              Georgia</option>
                                          <option value="DE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Germany Flag" /><span class="text-truncate">Germany</span></span>'>
                                              Germany</option>
                                          <option value="GH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gh.svg" alt="Ghana Flag" /><span class="text-truncate">Ghana</span></span>'>
                                              Ghana</option>
                                          <option value="GI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gi.svg" alt="Gibraltar Flag" /><span class="text-truncate">Gibraltar</span></span>'>
                                              Gibraltar</option>
                                          <option value="GR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gr.svg" alt="Greece Flag" /><span class="text-truncate">Greece</span></span>'>
                                              Greece</option>
                                          <option value="GL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gl.svg" alt="Greenland Flag" /><span class="text-truncate">Greenland</span></span>'>
                                              Greenland</option>
                                          <option value="GD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gd.svg" alt="Grenada Flag" /><span class="text-truncate">Grenada</span></span>'>
                                              Grenada</option>
                                          <option value="GP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gp.svg" alt="Guadeloupe Flag" /><span class="text-truncate">Guadeloupe</span></span>'>
                                              Guadeloupe</option>
                                          <option value="GU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gu.svg" alt="Guam Flag" /><span class="text-truncate">Guam</span></span>'>
                                              Guam</option>
                                          <option value="GT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gt.svg" alt="Guatemala Flag" /><span class="text-truncate">Guatemala</span></span>'>
                                              Guatemala</option>
                                          <option value="GG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gg.svg" alt="Guernsey Flag" /><span class="text-truncate">Guernsey</span></span>'>
                                              Guernsey</option>
                                          <option value="GN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gn.svg" alt="Guinea Flag" /><span class="text-truncate">Guinea</span></span>'>
                                              Guinea</option>
                                          <option value="GW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gw.svg" alt="Guinea-Bissau Flag" /><span class="text-truncate">Guinea-Bissau</span></span>'>
                                              Guinea-Bissau</option>
                                          <option value="GY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gy.svg" alt="Guyana Flag" /><span class="text-truncate">Guyana</span></span>'>
                                              Guyana</option>
                                          <option value="HT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ht.svg" alt="Haiti Flag" /><span class="text-truncate">Haiti</span></span>'>
                                              Haiti</option>
                                          <option value="VA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/va.svg" alt="Holy See Flag" /><span class="text-truncate">Holy See</span></span>'>
                                              Holy See</option>
                                          <option value="HN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/hn.svg" alt="Honduras Flag" /><span class="text-truncate">Honduras</span></span>'>
                                              Honduras</option>
                                          <option value="HK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/hk.svg" alt="Hong Kong Flag" /><span class="text-truncate">Hong Kong</span></span>'>
                                              Hong Kong</option>
                                          <option value="HU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/hu.svg" alt="Hungary Flag" /><span class="text-truncate">Hungary</span></span>'>
                                              Hungary</option>
                                          <option value="IS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/is.svg" alt="Iceland Flag" /><span class="text-truncate">Iceland</span></span>'>
                                              Iceland</option>
                                          <option value="IN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/in.svg" alt="India Flag" /><span class="text-truncate">India</span></span>'>
                                              India</option>
                                          <option value="ID" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/id.svg" alt="Indonesia Flag" /><span class="text-truncate">Indonesia</span></span>'>
                                              Indonesia</option>
                                          <option value="IR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ir.svg" alt="Iran (Islamic Republic of) Flag" /><span class="text-truncate">Iran (Islamic Republic of)</span></span>'>
                                              Iran (Islamic Republic of)</option>
                                          <option value="IQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/iq.svg" alt="Iraq Flag" /><span class="text-truncate">Iraq</span></span>'>
                                              Iraq</option>
                                          <option value="IE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ie.svg" alt="Ireland Flag" /><span class="text-truncate">Ireland</span></span>'>
                                              Ireland</option>
                                          <option value="IM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/im.svg" alt="Isle of Man Flag" /><span class="text-truncate">Isle of Man</span></span>'>
                                              Isle of Man</option>
                                          <option value="IL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/il.svg" alt="Israel Flag" /><span class="text-truncate">Israel</span></span>'>
                                              Israel</option>
                                          <option value="IT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Italy Flag" /><span class="text-truncate">Italy</span></span>'>
                                              Italy</option>
                                          <option value="JM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/jm.svg" alt="Jamaica Flag" /><span class="text-truncate">Jamaica</span></span>'>
                                              Jamaica</option>
                                          <option value="JP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/jp.svg" alt="Japan Flag" /><span class="text-truncate">Japan</span></span>'>
                                              Japan</option>
                                          <option value="JE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/je.svg" alt="Jersey Flag" /><span class="text-truncate">Jersey</span></span>'>
                                              Jersey</option>
                                          <option value="JO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/jo.svg" alt="Jordan Flag" /><span class="text-truncate">Jordan</span></span>'>
                                              Jordan</option>
                                          <option value="KZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/kz.svg" alt="Kazakhstan Flag" /><span class="text-truncate">Kazakhstan</span></span>'>
                                              Kazakhstan</option>
                                          <option value="KE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ke.svg" alt="Kenya Flag" /><span class="text-truncate">Kenya</span></span>'>
                                              Kenya</option>
                                          <option value="KI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ki.svg" alt="Kiribati Flag" /><span class="text-truncate">Kiribati</span></span>'>
                                              Kiribati</option>
                                          <option value="KW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/kw.svg" alt="Kuwait Flag" /><span class="text-truncate">Kuwait</span></span>'>
                                              Kuwait</option>
                                          <option value="KG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/kg.svg" alt="Kyrgyzstan Flag" /><span class="text-truncate">Kyrgyzstan</span></span>'>
                                              Kyrgyzstan</option>
                                          <option value="LA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/la.svg" alt="Laos Flag" /><span class="text-truncate">Laos</span></span>'>
                                              Laos</option>
                                          <option value="LV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/lv.svg" alt="Latvia Flag" /><span class="text-truncate">Latvia</span></span>'>
                                              Latvia</option>
                                          <option value="LB" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/lb.svg" alt="Lebanon Flag" /><span class="text-truncate">Lebanon</span></span>'>
                                              Lebanon</option>
                                          <option value="LS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ls.svg" alt="Lesotho Flag" /><span class="text-truncate">Lesotho</span></span>'>
                                              Lesotho</option>
                                          <option value="LR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/lr.svg" alt="Liberia Flag" /><span class="text-truncate">Liberia</span></span>'>
                                              Liberia</option>
                                          <option value="LY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ly.svg" alt="Libya Flag" /><span class="text-truncate">Libya</span></span>'>
                                              Libya</option>
                                          <option value="LI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/li.svg" alt="Liechtenstein Flag" /><span class="text-truncate">Liechtenstein</span></span>'>
                                              Liechtenstein</option>
                                          <option value="LT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/lt.svg" alt="Lithuania Flag" /><span class="text-truncate">Lithuania</span></span>'>
                                              Lithuania</option>
                                          <option value="LU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/lu.svg" alt="Luxembourg Flag" /><span class="text-truncate">Luxembourg</span></span>'>
                                              Luxembourg</option>
                                          <option value="MO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mo.svg" alt="Macau Flag" /><span class="text-truncate">Macau</span></span>'>
                                              Macau</option>
                                          <option value="MG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mg.svg" alt="Madagascar Flag" /><span class="text-truncate">Madagascar</span></span>'>
                                              Madagascar</option>
                                          <option value="MW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mw.svg" alt="Malawi Flag" /><span class="text-truncate">Malawi</span></span>'>
                                              Malawi</option>
                                          <option value="MY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/my.svg" alt="Malaysia Flag" /><span class="text-truncate">Malaysia</span></span>'>
                                              Malaysia</option>
                                          <option value="MV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mv.svg" alt="Maldives Flag" /><span class="text-truncate">Maldives</span></span>'>
                                              Maldives</option>
                                          <option value="ML" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ml.svg" alt="Mali Flag" /><span class="text-truncate">Mali</span></span>'>
                                              Mali</option>
                                          <option value="MT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mt.svg" alt="Malta Flag" /><span class="text-truncate">Malta</span></span>'>
                                              Malta</option>
                                          <option value="MH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mh.svg" alt="Marshall Islands Flag" /><span class="text-truncate">Marshall Islands</span></span>'>
                                              Marshall Islands</option>
                                          <option value="MQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mq.svg" alt="Martinique Flag" /><span class="text-truncate">Martinique</span></span>'>
                                              Martinique</option>
                                          <option value="MR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mr.svg" alt="Mauritania Flag" /><span class="text-truncate">Mauritania</span></span>'>
                                              Mauritania</option>
                                          <option value="MU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mu.svg" alt="Mauritius Flag" /><span class="text-truncate">Mauritius</span></span>'>
                                              Mauritius</option>
                                          <option value="YT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/yt.svg" alt="Mayotte Flag" /><span class="text-truncate">Mayotte</span></span>'>
                                              Mayotte</option>
                                          <option value="MX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mx.svg" alt="Mexico Flag" /><span class="text-truncate">Mexico</span></span>'>
                                              Mexico</option>
                                          <option value="MD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/md.svg" alt="Moldova Flag" /><span class="text-truncate">Moldova</span></span>'>
                                              Moldova</option>
                                          <option value="MC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mc.svg" alt="Monaco Flag" /><span class="text-truncate">Monaco</span></span>'>
                                              Monaco</option>
                                          <option value="MN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mn.svg" alt="Mongolia Flag" /><span class="text-truncate">Mongolia</span></span>'>
                                              Mongolia</option>
                                          <option value="ME" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/me.svg" alt="Montenegro Flag" /><span class="text-truncate">Montenegro</span></span>'>
                                              Montenegro</option>
                                          <option value="MS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ms.svg" alt="Montserrat Flag" /><span class="text-truncate">Montserrat</span></span>'>
                                              Montserrat</option>
                                          <option value="MA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ma.svg" alt="Morocco Flag" /><span class="text-truncate">Morocco</span></span>'>
                                              Morocco</option>
                                          <option value="MZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mz.svg" alt="Mozambique Flag" /><span class="text-truncate">Mozambique</span></span>'>
                                              Mozambique</option>
                                          <option value="MM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mm.svg" alt="Myanmar Flag" /><span class="text-truncate">Myanmar</span></span>'>
                                              Myanmar</option>
                                          <option value="NA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/na.svg" alt="Namibia Flag" /><span class="text-truncate">Namibia</span></span>'>
                                              Namibia</option>
                                          <option value="NR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/nr.svg" alt="Nauru Flag" /><span class="text-truncate">Nauru</span></span>'>
                                              Nauru</option>
                                          <option value="NP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/np.svg" alt="Nepal Flag" /><span class="text-truncate">Nepal</span></span>'>
                                              Nepal</option>
                                          <option value="NL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/nl.svg" alt="Netherlands Flag" /><span class="text-truncate">Netherlands</span></span>'>
                                              Netherlands</option>
                                          <option value="NC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/nc.svg" "alt="New Caledonia Flag" /><span class="text-truncate">New Caledonia</span></span>'>
                                              New Caledonia</option>
                                          <option value="NZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/nz.svg" alt="New Zealand Flag" /><span class="text-truncate">New Zealand</span></span>'>
                                              New Zealand</option>
                                          <option value="NI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ni.svg" alt="Nicaragua Flag" /><span class="text-truncate">Nicaragua</span></span>'>
                                              Nicaragua</option>
                                          <option value="NE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ne.svg" alt="Niger Flag" /><span class="text-truncate">Niger</span></span>'>
                                              Niger</option>
                                          <option value="NG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ng.svg" alt="Nigeria Flag" /><span class="text-truncate">Nigeria</span></span>'>
                                              Nigeria</option>
                                          <option value="NU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/nu.svg" alt="Niue Flag" /><span class="text-truncate">Niue</span></span>'>
                                              Niue</option>
                                          <option value="NF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/nf.svg" alt="Norfolk Island Flag" /><span class="text-truncate">Norfolk Island</span></span>'>
                                              Norfolk Island</option>
                                          <option value="KP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/kp.svg" alt="North Korea Flag" /><span class="text-truncate">North Korea</span></span>'>
                                              North Korea</option>
                                          <option value="MK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mk.svg" alt="North Macedonia Flag" /><span class="text-truncate">North Macedonia</span></span>'>
                                              North Macedonia</option>
                                          <option value="GB-NIR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb-nir.svg" alt="Northern Ireland Flag" /><span class="text-truncate">Northern Ireland</span></span>'>
                                              Northern Ireland</option>
                                          <option value="MP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mp.svg" alt="Northern Markna Islands Flag" /><span class="text-truncate">Northern Markna Islands</span></span>'>
                                              Northern Markna Islands</option>
                                          <option value="NO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/no.svg" alt="Norway Flag" /><span class="text-truncate">Norway</span></span>'>
                                              Norway</option>
                                          <option value="OM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/om.svg" alt="Oman Flag" /><span class="text-truncate">Oman</span></span>'>
                                              Oman</option>
                                          <option value="PK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pk.svg" alt="Pakistan Flag" /><span class="text-truncate">Pakistan</span></span>'>
                                              Pakistan</option>
                                          <option value="PW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pw.svg" alt="Palau Flag" /><span class="text-truncate">Palau</span></span>'>
                                              Palau</option>
                                          <option value="PA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pa.svg" alt="Panama Flag" /><span class="text-truncate">Panama</span></span>'>
                                              Panama</option>
                                          <option value="PG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pg.svg" alt="Papua New Guinea Flag" /><span class="text-truncate">Papua New Guinea</span></span>'>
                                              Papua New Guinea</option>
                                          <option value="PY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/py.svg" alt="Paraguay Flag" /><span class="text-truncate">Paraguay</span></span>'>
                                              Paraguay</option>
                                          <option value="PE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pe.svg" alt="Peru Flag" /><span class="text-truncate">Peru</span></span>'>
                                              Peru</option>
                                          <option value="PH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ph.svg" alt="Philippines Flag" /><span class="text-truncate">Philippines</span></span>'>
                                              Philippines</option>
                                          <option value="PN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pn.svg" alt="Pitcairn Flag" /><span class="text-truncate">Pitcairn</span></span>'>
                                              Pitcairn</option>
                                          <option value="PL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pl.svg" alt="Poland Flag" /><span class="text-truncate">Poland</span></span>'>
                                              Poland</option>
                                          <option value="PT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pt.svg" alt="Portugal Flag" /><span class="text-truncate">Portugal</span></span>'>
                                              Portugal</option>
                                          <option value="PR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pr.svg" alt="Puerto Rico Flag" /><span class="text-truncate">Puerto Rico</span></span>'>
                                              Puerto Rico</option>
                                          <option value="QA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/qa.svg" alt="Qatar Flag" /><span class="text-truncate">Qatar</span></span>'>
                                              Qatar</option>
                                          <option value="CG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cg.svg" alt="Republic of the Congo Flag" /><span class="text-truncate">Republic of the Congo</span></span>'>
                                              Republic of the Congo</option>
                                          <option value="RO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ro.svg" alt="Romania Flag" /><span class="text-truncate">Romania</span></span>'>
                                              Romania</option>
                                          <option value="RU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ru.svg" alt="Russia Flag" /><span class="text-truncate">Russia</span></span>'>
                                              Russia</option>
                                          <option value="RW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/rw.svg" alt="Rwanda Flag" /><span class="text-truncate">Rwanda</span></span>'>
                                              Rwanda</option>
                                          <option value="RE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/re.svg" alt="Réunion Flag" /><span class="text-truncate">Réunion</span></span>'>
                                              Réunion</option>
                                          <option value="BL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bl.svg" alt="Saint Barthélemy Flag" /><span class="text-truncate">Saint Barthélemy</span></span>'>
                                              Saint Barthélemy</option>
                                          <option value="SH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sh.svg" alt="Saint Helena, Ascension and Tristan da Cunha Flag" /><span class="text-truncate">Saint Helena, Ascension and Tristan da Cunha</span></span>'>
                                              Saint Helena, Ascension and Tristan da Cunha</option>
                                          <option value="KN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/kn.svg" alt="Saint Kitts and Nevis Flag" /><span class="text-truncate">Saint Kitts and Nevis</span></span>'>
                                              Saint Kitts and Nevis</option>
                                          <option value="LC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/lc.svg" alt="Saint Lucia Flag" /><span class="text-truncate">Saint Lucia</span></span>'>
                                              Saint Lucia</option>
                                          <option value="MF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mf.svg" alt="Saint Martin Flag" /><span class="text-truncate">Saint Martin</span></span>'>
                                              Saint Martin</option>
                                          <option value="PM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pm.svg" alt="Saint Pierre and Miquelon Flag" /><span class="text-truncate">Saint Pierre and Miquelon</span></span>'>
                                              Saint Pierre and Miquelon</option>
                                          <option value="VC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/vc.svg" alt="Saint Vincent and the Grenadines Flag" /><span class="text-truncate">Saint Vincent and the Grenadines</span></span>'>
                                              Saint Vincent and the Grenadines</option>
                                          <option value="WS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ws.svg" alt="Samoa Flag" /><span class="text-truncate">Samoa</span></span>'>
                                              Samoa</option>
                                          <option value="SM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sm.svg" "alt="San Marino Flag" /><span class="text-truncate">San Marino</span></span>'>
                                              San Marino</option>
                                          <option value="ST" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/st.svg" "alt="Sao Tome and Principe Flag" /><span class="text-truncate">Sao Tome and Principe</span></span>'>
                                              Sao Tome and Principe</option>
                                          <option value="SA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sa.svg" alt="Saudi Arabia Flag" /><span class="text-truncate">Saudi Arabia</span></span>'>
                                              Saudi Arabia</option>
                                          <option value="GB-SCT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb-sct.svg" alt="Scotland Flag" /><span class="text-truncate">Scotland</span></span>'>
                                              Scotland</option>
                                          <option value="SN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sn.svg" alt="Senegal Flag" /><span class="text-truncate">Senegal</span></span>'>
                                              Senegal</option>
                                          <option value="RS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/rs.svg" alt="Serbia Flag" /><span class="text-truncate">Serbia</span></span>'>
                                              Serbia</option>
                                          <option value="SC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sc.svg" alt="Seychelles Flag" /><span class="text-truncate">Seychelles</span></span>'>
                                              Seychelles</option>
                                          <option value="SL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sl.svg" alt="Sierra Leone Flag" /><span class="text-truncate">Sierra Leone</span></span>'>
                                              Sierra Leone</option>
                                          <option value="SG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sg.svg" alt="Singapore Flag" /><span class="text-truncate">Singapore</span></span>'>
                                              Singapore</option>
                                          <option value="SX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sx.svg" alt="Sint Maarten Flag" /><span class="text-truncate">Sint Maarten</span></span>'>
                                              Sint Maarten</option>
                                          <option value="SK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sk.svg" alt="Slovakia Flag" /><span class="text-truncate">Slovakia</span></span>'>
                                              Slovakia</option>
                                          <option value="SI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/si.svg" alt="Slovenia Flag" /><span class="text-truncate">Slovenia</span></span>'>
                                              Slovenia</option>
                                          <option value="SB" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sb.svg" alt="Solomon Islands Flag" /><span class="text-truncate">Solomon Islands</span></span>'>
                                              Solomon Islands</option>
                                          <option value="SO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/so.svg" alt="Somalia Flag" /><span class="text-truncate">Somalia</span></span>'>
                                              Somalia</option>
                                          <option value="ZA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/za.svg" alt="South Africa Flag" /><span class="text-truncate">South Africa</span></span>'>
                                              South Africa</option>
                                          <option value="GS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gs.svg" alt="South Georgia and the South Sandwich Islands Flag" /><span class="text-truncate">South Georgia and the South Sandwich Islands</span></span>'>
                                              South Georgia and the South Sandwich Islands</option>
                                          <option value="KR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/kr.svg" alt="South Korea Flag" /><span class="text-truncate">South Korea</span></span>'>
                                              South Korea</option>
                                          <option value="SS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ss.svg" alt="South Sudan Flag" /><span class="text-truncate">South Sudan</span></span>'>
                                              South Sudan</option>
                                          <option value="ES" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/es.svg" alt="Spain Flag" /><span class="text-truncate">Spain</span></span>'>
                                              Spain</option>
                                          <option value="LK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/lk.svg" "alt="Sri Lanka Flag" /><span class="text-truncate">Sri Lanka</span></span>'>
                                              Sri Lanka</option>
                                          <option value="PS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ps.svg" alt="State of Palestine Flag" /><span class="text-truncate">State of Palestine</span></span>'>
                                              State of Palestine</option>
                                          <option value="SD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sd.svg" alt="Sudan Flag" /><span class="text-truncate">Sudan</span></span>'>
                                              Sudan</option>
                                          <option value="SR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sr.svg" alt="Suriname Flag" /><span class="text-truncate">Suriname</span></span>'>
                                              Suriname</option>
                                          <option value="SJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sj.svg" alt="Svalbard and Jan Mayen Flag" /><span class="text-truncate">Svalbard and Jan Mayen</span></span>'>
                                              Svalbard and Jan Mayen</option>
                                          <option value="SZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sz.svg" alt="Swaziland Flag" /><span class="text-truncate">Swaziland</span></span>'>
                                              Swaziland</option>
                                          <option value="SE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/se.svg" alt="Sweden Flag" /><span class="text-truncate">Sweden</span></span>'>
                                              Sweden</option>
                                          <option value="CH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ch.svg" alt="Switzerland Flag" /><span class="text-truncate">Switzerland</span></span>'>
                                              Switzerland</option>
                                          <option value="SY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sy.svg" alt="Syrian Arab Republic Flag" /><span class="text-truncate">Syrian Arab Republic</span></span>'>
                                              Syrian Arab Republic</option>
                                          <option value="TW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tw.svg" alt="Taiwan Flag" /><span class="text-truncate">Taiwan</span></span>'>
                                              Taiwan</option>
                                          <option value="TJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tj.svg" alt="Tajikistan Flag" /><span class="text-truncate">Tajikistan</span></span>'>
                                              Tajikistan</option>
                                          <option value="TZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tz.svg" alt="Tanzania Flag" /><span class="text-truncate">Tanzania</span></span>'>
                                              Tanzania</option>
                                          <option value="TH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/th.svg" alt="Thailand Flag" /><span class="text-truncate">Thailand</span></span>'>
                                              Thailand</option>
                                          <option value="TL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tl.svg" alt="Timor-Leste Flag" /><span class="text-truncate">Timor-Leste</span></span>'>
                                              Timor-Leste</option>
                                          <option value="TG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tg.svg" alt="Togo Flag" /><span class="text-truncate">Togo</span></span>'>
                                              Togo</option>
                                          <option value="TK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tk.svg" alt="Tokelau Flag" /><span class="text-truncate">Tokelau</span></span>'>
                                              Tokelau</option>
                                          <option value="TO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/to.svg" alt="Tonga Flag" /><span class="text-truncate">Tonga</span></span>'>
                                              Tonga</option>
                                          <option value="TT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tt.svg" alt="Trinidad and Tobago Flag" /><span class="text-truncate">Trinidad and Tobago</span></span>'>
                                              Trinidad and Tobago</option>
                                          <option value="TN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tn.svg" alt="Tunisia Flag" /><span class="text-truncate">Tunisia</span></span>'>
                                              Tunisia</option>
                                          <option value="TR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tr.svg" alt="Turkey Flag" /><span class="text-truncate">Turkey</span></span>'>
                                              Turkey</option>
                                          <option value="TM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tm.svg" alt="Turkmenistan Flag" /><span class="text-truncate">Turkmenistan</span></span>'>
                                              Turkmenistan</option>
                                          <option value="TC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tc.svg" alt="Turks and Caicos Islands Flag" /><span class="text-truncate">Turks and Caicos Islands</span></span>'>
                                              Turks and Caicos Islands</option>
                                          <option value="TV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tv.svg" alt="Tuvalu Flag" /><span class="text-truncate">Tuvalu</span></span>'>
                                              Tuvalu</option>
                                          <option value="UG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ug.svg" alt="Uganda Flag" /><span class="text-truncate">Uganda</span></span>'>
                                              Uganda</option>
                                          <option value="UA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ua.svg" alt="Ukraine Flag" /><span class="text-truncate">Ukraine</span></span>'>
                                              Ukraine</option>
                                          <option value="AE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ae.svg" alt="United Arab Emirates Flag" /><span class="text-truncate">United Arab Emirates</span></span>'>
                                              United Arab Emirates</option>
                                          <option value="GB" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="United Kingdom Flag" /><span class="text-truncate">United Kingdom</span></span>'>
                                              United Kingdom</option>
                                          <option value="UM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/um.svg" alt="United States Minor Outlying Islands Flag" /><span class="text-truncate">United States Minor Outlying Islands</span></span>'>
                                              United States Minor Outlying Islands</option>
                                          <option value="US" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States of America Flag" /><span class="text-truncate">United States of America</span></span>'>
                                              United States of America</option>
                                          <option value="UY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/uy.svg" alt="Uruguay Flag" /><span class="text-truncate">Uruguay</span></span>'>
                                              Uruguay</option>
                                          <option value="UZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/uz.svg" alt="Uzbekistan Flag" /><span class="text-truncate">Uzbekistan</span></span>'>
                                              Uzbekistan</option>
                                          <option value="VU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/vu.svg" alt="Vanuatu Flag" /><span class="text-truncate">Vanuatu</span></span>'>
                                              Vanuatu</option>
                                          <option value="VE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ve.svg" alt="Venezuela (Bolivarian Republic of) Flag" /><span class="text-truncate">Venezuela (Bolivarian Republic of)</span></span>'>
                                              Venezuela (Bolivarian Republic of)</option>
                                          <option value="VN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/vn.svg" alt="Vietnam Flag" /><span class="text-truncate">Vietnam</span></span>'>
                                              Vietnam</option>
                                          <option value="VG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/vg.svg" alt="Virgin Islands (British) Flag" /><span class="text-truncate">Virgin Islands (British)</span></span>'>
                                              Virgin Islands (British)</option>
                                          <option value="VI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/vi.svg" alt="Virgin Islands (U.S.) Flag" /><span class="text-truncate">Virgin Islands (U.S.)</span></span>'>
                                              Virgin Islands (U.S.)</option>
                                          <option value="GB-WLS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb-wls.svg" alt="Wales Flag" /><span class="text-truncate">Wales</span></span>'>
                                              Wales</option>
                                          <option value="WF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/wf.svg" alt="Wallis and Futuna Flag" /><span class="text-truncate">Wallis and Futuna</span></span>'>
                                              Wallis and Futuna</option>
                                          <option value="EH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/eh.svg" alt="Western Sahara Flag" /><span class="text-truncate">Western Sahara</span></span>'>
                                              Western Sahara</option>
                                          <option value="YE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ye.svg" alt="Yemen Flag" /><span class="text-truncate">Yemen</span></span>'>
                                              Yemen</option>
                                          <option value="ZM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/zm.svg" alt="Zambia Flag" /><span class="text-truncate">Zambia</span></span>'>
                                              Zambia</option>
                                          <option value="ZW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/zw.svg" alt="Zimbabwe Flag" /><span class="text-truncate">Zimbabwe</span></span>'>
                                              Zimbabwe</option>
                                      </select>
                                  </div>
                                  <!-- End Select -->

                                  <div class="mb-3">
                                      <input type="text" class="form-control" name="AddressCity" id="AddressCityLabel" placeholder="Quận, huyện" aria-label="City">
                                  </div>

                                  <input type="text" class="form-control" name="AddressState" id="AddressStateLabel" placeholder="Phường, xã" aria-label="State">
                              </div>
                              <!-- End Form Group -->

                              <!-- Form Group -->
                              <div class="form-group">
                                  <label for="AddressLine1Label" class="input-label">Địa chỉ chi tiết</label>
                                  <input type="text" class="form-control" name="AddressLine1" id="AddressLine1Label" placeholder="Địa chỉ của khách hàng" aria-label="Your address">
                              </div>
                              <!-- End Form Group -->

                              <!-- Form Group -->
                              <div class="form-group">
                                  <label for="addresszipCodeLabel" class="input-label">Zip code <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Bạn có thể tìm mã ZIP trong địa chỉ bưu điện"></i></label>

                                  <input type="text" class="js-masked-input form-control" name="addresszipCode" id="addresszipCodeLabel" placeholder="Mã ZIP" aria-label="Your zip code" data-hs-mask-options='{
                                    "template": "AA0 0AA"
                                    }'>
                              </div>
                              <!-- End Form Group -->

                              <!-- Custom Checkbox -->
                              <div class="custom-control custom-checkbox form-group">
                                  <input type="checkbox" class="custom-control-input" id="billingAddressCheckbox">
                                  <label class="custom-control-label" for="billingAddressCheckbox">Tương tự với địa chỉ thanh toán</label>
                              </div>
                              <!-- End Custom Checkbox -->

                              <div class="d-flex justify-content-end">
                                  <button type="button" class="btn btn-white mr-2">Loại bỏ</button>
                                  <button type="submit" class="btn btn-primary">Lưu</button>
                              </div>
                          </div>
                          <!-- Body -->
                      </form>
                  </div>
                  <!-- End Card -->
              </div>
          </div>
          <!-- End Row -->

          <hr class="my-5">

          <div class="row">
              <div class="col-lg-4 mb-3 mb-lg-0">
                  <h4>Địa chỉ thanh toán</h4>
                  <p>Địa chỉ thanh toán chính của khách hàng</p>
              </div>

              <div class="col-lg-8">
                  <!-- Card -->
                  <div class="card">
                      <form method="post" id="form-billing-address">
                          <!-- Body -->
                          <div class="card-body">
                              <input type="hidden" id="form-billing" name="formInfor" value="form-billing-address">

                              <!-- Form Group -->
                              <div class="form-group">
                                  <label for="billingLocationLabel" class="input-label">Địa chỉ thanh toán</label>

                                  <!-- Select -->
                                  <div class="mb-3">
                                      <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" id="billingLocationLabel" data-hs-select2-options='{
                                        "placeholder": "Lựa chọn tỉnh, thành phố",
                                        "searchInputPlaceholder": "Search a country"
                                        }'>
                                          <option label="empty"></option>
                                          <option value="AF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/af.svg" alt="Afghanistan Flag" /><span class="text-truncate">Afghanistan</span></span>'>
                                              Afghanistan</option>
                                          <option value="AX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ax.svg" alt="Aland Islands Flag" /><span class="text-truncate">Aland Islands</span></span>'>
                                              Aland Islands</option>
                                          <option value="AL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/al.svg" alt="Albania Flag" /><span class="text-truncate">Albania</span></span>'>
                                              Albania</option>
                                          <option value="DZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/dz.svg" alt="Algeria Flag" /><span class="text-truncate">Algeria</span></span>'>
                                              Algeria</option>
                                          <option value="AS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/as.svg" alt="American Samoa Flag" /><span class="text-truncate">American Samoa</span></span>'>
                                              American Samoa</option>
                                          <option value="AD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ad.svg" alt="Andorra Flag" /><span class="text-truncate">Andorra</span></span>'>
                                              Andorra</option>
                                          <option value="AO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ao.svg" alt="Angola Flag" /><span class="text-truncate">Angola</span></span>'>
                                              Angola</option>
                                          <option value="AI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ai.svg" alt="Anguilla Flag" /><span class="text-truncate">Anguilla</span></span>'>
                                              Anguilla</option>
                                          <option value="AG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ag.svg" alt="Antigua and Barbuda Flag" /><span class="text-truncate">Antigua and Barbuda</span></span>'>
                                              Antigua and Barbuda</option>
                                          <option value="AR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ar.svg" alt="Argentina Flag" /><span class="text-truncate">Argentina</span></span>'>
                                              Argentina</option>
                                          <option value="AM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/am.svg" alt="Armenia Flag" /><span class="text-truncate">Armenia</span></span>'>
                                              Armenia</option>
                                          <option value="AW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/aw.svg" alt="Aruba Flag" /><span class="text-truncate">Aruba</span></span>'>
                                              Aruba</option>
                                          <option value="AU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/au.svg" alt="Australia Flag" /><span class="text-truncate">Australia</span></span>'>
                                              Australia</option>
                                          <option value="AT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/at.svg" alt="Austria Flag" /><span class="text-truncate">Austria</span></span>'>
                                              Austria</option>
                                          <option value="AZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/az.svg" alt="Azerbaijan Flag" /><span class="text-truncate">Azerbaijan</span></span>'>
                                              Azerbaijan</option>
                                          <option value="BS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bs.svg" alt="Bahamas Flag" /><span class="text-truncate">Bahamas</span></span>'>
                                              Bahamas</option>
                                          <option value="BH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bh.svg" alt="Bahrain Flag" /><span class="text-truncate">Bahrain</span></span>'>
                                              Bahrain</option>
                                          <option value="BD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bd.svg" alt="Bangladesh Flag" /><span class="text-truncate">Bangladesh</span></span>'>
                                              Bangladesh</option>
                                          <option value="BB" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bb.svg" alt="Barbados Flag" /><span class="text-truncate">Barbados</span></span>'>
                                              Barbados</option>
                                          <option value="BY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/by.svg" alt="Belarus Flag" /><span class="text-truncate">Belarus</span></span>'>
                                              Belarus</option>
                                          <option value="BE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/be.svg" alt="Belgium Flag" /><span class="text-truncate">Belgium</span></span>'>
                                              Belgium</option>
                                          <option value="BZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bz.svg" alt="Belize Flag" /><span class="text-truncate">Belize</span></span>'>
                                              Belize</option>
                                          <option value="BJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bj.svg" alt="Benin Flag" /><span class="text-truncate">Benin</span></span>'>
                                              Benin</option>
                                          <option value="BM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bm.svg" alt="Bermuda Flag" /><span class="text-truncate">Bermuda</span></span>'>
                                              Bermuda</option>
                                          <option value="BT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bt.svg" alt="Bhutan Flag" /><span class="text-truncate">Bhutan</span></span>'>
                                              Bhutan</option>
                                          <option value="BO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bo.svg" alt="Bolivia (Plurinational State of) Flag" /><span class="text-truncate">Bolivia (Plurinational State of)</span></span>'>
                                              Bolivia (Plurinational State of)</option>
                                          <option value="BQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bq.svg" alt="Bonaire, Sint Eustatius and Saba Flag" /><span class="text-truncate">Bonaire, Sint Eustatius and Saba</span></span>'>
                                              Bonaire, Sint Eustatius and Saba</option>
                                          <option value="BA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ba.svg" alt="Bosnia and Herzegovina Flag" /><span class="text-truncate">Bosnia and Herzegovina</span></span>'>
                                              Bosnia and Herzegovina</option>
                                          <option value="BW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bw.svg" alt="Botswana Flag" /><span class="text-truncate">Botswana</span></span>'>
                                              Botswana</option>
                                          <option value="BR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/br.svg" alt="Brazil Flag" /><span class="text-truncate">Brazil</span></span>'>
                                              Brazil</option>
                                          <option value="IO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/io.svg" alt="British Indian Ocean Territory Flag" /><span class="text-truncate">British Indian Ocean Territory</span></span>'>
                                              British Indian Ocean Territory</option>
                                          <option value="BN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bn.svg" alt="Brunei Darussalam Flag" /><span class="text-truncate">Brunei Darussalam</span></span>'>
                                              Brunei Darussalam</option>
                                          <option value="BG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bg.svg" alt="Bulgaria Flag" /><span class="text-truncate">Bulgaria</span></span>'>
                                              Bulgaria</option>
                                          <option value="BF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bf.svg" alt="Burkina Faso Flag" /><span class="text-truncate">Burkina Faso</span></span>'>
                                              Burkina Faso</option>
                                          <option value="BI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bi.svg" alt="Burundi Flag" /><span class="text-truncate">Burundi</span></span>'>
                                              Burundi</option>
                                          <option value="CV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cv.svg" alt="Cabo Verde Flag" /><span class="text-truncate">Cabo Verde</span></span>'>
                                              Cabo Verde</option>
                                          <option value="KH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/kh.svg" alt="Cambodia Flag" /><span class="text-truncate">Cambodia</span></span>'>
                                              Cambodia</option>
                                          <option value="CM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cm.svg" alt="Cameroon Flag" /><span class="text-truncate">Cameroon</span></span>'>
                                              Cameroon</option>
                                          <option value="CA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ca.svg" alt="Canada Flag" /><span class="text-truncate">Canada</span></span>'>
                                              Canada</option>
                                          <option value="KY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ky.svg" alt="Cayman Islands Flag" /><span class="text-truncate">Cayman Islands</span></span>'>
                                              Cayman Islands</option>
                                          <option value="CF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cf.svg" alt="Central African Republic Flag" /><span class="text-truncate">Central African Republic</span></span>'>
                                              Central African Republic</option>
                                          <option value="TD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/td.svg" alt="Chad Flag" /><span class="text-truncate">Chad</span></span>'>
                                              Chad</option>
                                          <option value="CL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cl.svg" alt="Chile Flag" /><span class="text-truncate">Chile</span></span>'>
                                              Chile</option>
                                          <option value="CN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="China Flag" /><span class="text-truncate">China</span></span>'>
                                              China</option>
                                          <option value="CX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cx.svg" alt="Christmas Island Flag" /><span class="text-truncate">Christmas Island</span></span>'>
                                              Christmas Island</option>
                                          <option value="CC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cc.svg" alt="Cocos (Keeling) Islands Flag" /><span class="text-truncate">Cocos (Keeling) Islands</span></span>'>
                                              Cocos (Keeling) Islands</option>
                                          <option value="CO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/co.svg" alt="Colombia Flag" /><span class="text-truncate">Colombia</span></span>'>
                                              Colombia</option>
                                          <option value="KM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/km.svg" alt="Comoros Flag" /><span class="text-truncate">Comoros</span></span>'>
                                              Comoros</option>
                                          <option value="CK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ck.svg" alt="Cook Islands Flag" /><span class="text-truncate">Cook Islands</span></span>'>
                                              Cook Islands</option>
                                          <option value="CR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cr.svg" alt="Costa Rica Flag" /><span class="text-truncate">Costa Rica</span></span>'>
                                              Costa Rica</option>
                                          <option value="HR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/hr.svg" alt="Croatia Flag" /><span class="text-truncate">Croatia</span></span>'>
                                              Croatia</option>
                                          <option value="CU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cu.svg" alt="Cuba Flag" /><span class="text-truncate">Cuba</span></span>'>
                                              Cuba</option>
                                          <option value="CW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cw.svg" alt="Curaçao Flag" /><span class="text-truncate">Curaçao</span></span>'>
                                              Curaçao</option>
                                          <option value="CY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cy.svg" alt="Cyprus Flag" /><span class="text-truncate">Cyprus</span></span>'>
                                              Cyprus</option>
                                          <option value="CZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cz.svg" alt="Czech Republic Flag" /><span class="text-truncate">Czech Republic</span></span>'>
                                              Czech Republic</option>
                                          <option value="CI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ci.svg" alt=Côte d&apos;Ivoire Flag" /><span class="text-truncate">Côte d&apos;Ivoire</span></span>'>
                                              Côte d'Ivoire</option>
                                          <option value="CD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cd.svg" alt="Democratic Republic of the Congo Flag" /><span class="text-truncate">Democratic Republic of the Congo</span></span>'>
                                              Democratic Republic of the Congo</option>
                                          <option value="DK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Denmark Flag" /><span class="text-truncate">Denmark</span></span>'>
                                              Denmark</option>
                                          <option value="DJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/dj.svg" alt="Djibouti Flag" /><span class="text-truncate">Djibouti</span></span>'>
                                              Djibouti</option>
                                          <option value="DM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/dm.svg" alt="Dominica Flag" /><span class="text-truncate">Dominica</span></span>'>
                                              Dominica</option>
                                          <option value="DO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/do.svg" alt="Dominican Republic Flag" /><span class="text-truncate">Dominican Republic</span></span>'>
                                              Dominican Republic</option>
                                          <option value="EC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ec.svg" alt="Ecuador Flag" /><span class="text-truncate">Ecuador</span></span>'>
                                              Ecuador</option>
                                          <option value="EG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/eg.svg" alt="Egypt Flag" /><span class="text-truncate">Egypt</span></span>'>
                                              Egypt</option>
                                          <option value="SV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sv.svg" alt="El Salvador Flag" /><span class="text-truncate">El Salvador</span></span>'>
                                              El Salvador</option>
                                          <option value="GB-ENG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb-eng.svg" alt="England Flag" /><span class="text-truncate">England</span></span>'>
                                              England</option>
                                          <option value="GQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gq.svg" alt="Equatorial Guinea Flag" /><span class="text-truncate">Equatorial Guinea</span></span>'>
                                              Equatorial Guinea</option>
                                          <option value="ER" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/er.svg" alt="Eritrea Flag" /><span class="text-truncate">Eritrea</span></span>'>
                                              Eritrea</option>
                                          <option value="EE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ee.svg" alt="Estonia Flag" /><span class="text-truncate">Estonia</span></span>'>
                                              Estonia</option>
                                          <option value="ET" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/et.svg" alt="Ethiopia Flag" /><span class="text-truncate">Ethiopia</span></span>'>
                                              Ethiopia</option>
                                          <option value="FK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/fk.svg" alt="Falkland Islands Flag" /><span class="text-truncate">Falkland Islands</span></span>'>
                                              Falkland Islands</option>
                                          <option value="FO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/fo.svg" alt="Faroe Islands Flag" /><span class="text-truncate">Faroe Islands</span></span>'>
                                              Faroe Islands</option>
                                          <option value="FM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/fm.svg" alt="Federated States of Micronesia Flag" /><span class="text-truncate">Federated States of Micronesia</span></span>'>
                                              Federated States of Micronesia</option>
                                          <option value="FJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/fj.svg" alt="Fiji Flag" /><span class="text-truncate">Fiji</span></span>'>
                                              Fiji</option>
                                          <option value="FI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/fi.svg" alt="Finland Flag" /><span class="text-truncate">Finland</span></span>'>
                                              Finland</option>
                                          <option value="FR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/fr.svg" alt="France Flag" /><span class="text-truncate">France</span></span>'>
                                              France</option>
                                          <option value="GF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gf.svg" alt="French Guiana Flag" /><span class="text-truncate">French Guiana</span></span>'>
                                              French Guiana</option>
                                          <option value="PF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pf.svg" alt="French Polynesia Flag" /><span class="text-truncate">French Polynesia</span></span>'>
                                              French Polynesia</option>
                                          <option value="TF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tf.svg" alt="French Southern Territories Flag" /><span class="text-truncate">French Southern Territories</span></span>'>
                                              French Southern Territories</option>
                                          <option value="GA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ga.svg" alt="Gabon Flag" /><span class="text-truncate">Gabon</span></span>'>
                                              Gabon</option>
                                          <option value="GM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gm.svg" alt="Gambia Flag" /><span class="text-truncate">Gambia</span></span>'>
                                              Gambia</option>
                                          <option value="GE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ge.svg" alt="Georgia Flag" /><span class="text-truncate">Georgia</span></span>'>
                                              Georgia</option>
                                          <option value="DE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Germany Flag" /><span class="text-truncate">Germany</span></span>'>
                                              Germany</option>
                                          <option value="GH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gh.svg" alt="Ghana Flag" /><span class="text-truncate">Ghana</span></span>'>
                                              Ghana</option>
                                          <option value="GI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gi.svg" alt="Gibraltar Flag" /><span class="text-truncate">Gibraltar</span></span>'>
                                              Gibraltar</option>
                                          <option value="GR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gr.svg" alt="Greece Flag" /><span class="text-truncate">Greece</span></span>'>
                                              Greece</option>
                                          <option value="GL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gl.svg" alt="Greenland Flag" /><span class="text-truncate">Greenland</span></span>'>
                                              Greenland</option>
                                          <option value="GD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gd.svg" alt="Grenada Flag" /><span class="text-truncate">Grenada</span></span>'>
                                              Grenada</option>
                                          <option value="GP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gp.svg" alt="Guadeloupe Flag" /><span class="text-truncate">Guadeloupe</span></span>'>
                                              Guadeloupe</option>
                                          <option value="GU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gu.svg" alt="Guam Flag" /><span class="text-truncate">Guam</span></span>'>
                                              Guam</option>
                                          <option value="GT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gt.svg" alt="Guatemala Flag" /><span class="text-truncate">Guatemala</span></span>'>
                                              Guatemala</option>
                                          <option value="GG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gg.svg" alt="Guernsey Flag" /><span class="text-truncate">Guernsey</span></span>'>
                                              Guernsey</option>
                                          <option value="GN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gn.svg" alt="Guinea Flag" /><span class="text-truncate">Guinea</span></span>'>
                                              Guinea</option>
                                          <option value="GW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gw.svg" alt="Guinea-Bissau Flag" /><span class="text-truncate">Guinea-Bissau</span></span>'>
                                              Guinea-Bissau</option>
                                          <option value="GY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gy.svg" alt="Guyana Flag" /><span class="text-truncate">Guyana</span></span>'>
                                              Guyana</option>
                                          <option value="HT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ht.svg" alt="Haiti Flag" /><span class="text-truncate">Haiti</span></span>'>
                                              Haiti</option>
                                          <option value="VA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/va.svg" alt="Holy See Flag" /><span class="text-truncate">Holy See</span></span>'>
                                              Holy See</option>
                                          <option value="HN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/hn.svg" alt="Honduras Flag" /><span class="text-truncate">Honduras</span></span>'>
                                              Honduras</option>
                                          <option value="HK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/hk.svg" alt="Hong Kong Flag" /><span class="text-truncate">Hong Kong</span></span>'>
                                              Hong Kong</option>
                                          <option value="HU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/hu.svg" alt="Hungary Flag" /><span class="text-truncate">Hungary</span></span>'>
                                              Hungary</option>
                                          <option value="IS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/is.svg" alt="Iceland Flag" /><span class="text-truncate">Iceland</span></span>'>
                                              Iceland</option>
                                          <option value="IN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/in.svg" alt="India Flag" /><span class="text-truncate">India</span></span>'>
                                              India</option>
                                          <option value="ID" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/id.svg" alt="Indonesia Flag" /><span class="text-truncate">Indonesia</span></span>'>
                                              Indonesia</option>
                                          <option value="IR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ir.svg" alt="Iran (Islamic Republic of) Flag" /><span class="text-truncate">Iran (Islamic Republic of)</span></span>'>
                                              Iran (Islamic Republic of)</option>
                                          <option value="IQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/iq.svg" alt="Iraq Flag" /><span class="text-truncate">Iraq</span></span>'>
                                              Iraq</option>
                                          <option value="IE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ie.svg" alt="Ireland Flag" /><span class="text-truncate">Ireland</span></span>'>
                                              Ireland</option>
                                          <option value="IM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/im.svg" alt="Isle of Man Flag" /><span class="text-truncate">Isle of Man</span></span>'>
                                              Isle of Man</option>
                                          <option value="IL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/il.svg" alt="Israel Flag" /><span class="text-truncate">Israel</span></span>'>
                                              Israel</option>
                                          <option value="IT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Italy Flag" /><span class="text-truncate">Italy</span></span>'>
                                              Italy</option>
                                          <option value="JM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/jm.svg" alt="Jamaica Flag" /><span class="text-truncate">Jamaica</span></span>'>
                                              Jamaica</option>
                                          <option value="JP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/jp.svg" alt="Japan Flag" /><span class="text-truncate">Japan</span></span>'>
                                              Japan</option>
                                          <option value="JE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/je.svg" alt="Jersey Flag" /><span class="text-truncate">Jersey</span></span>'>
                                              Jersey</option>
                                          <option value="JO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/jo.svg" alt="Jordan Flag" /><span class="text-truncate">Jordan</span></span>'>
                                              Jordan</option>
                                          <option value="KZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/kz.svg" alt="Kazakhstan Flag" /><span class="text-truncate">Kazakhstan</span></span>'>
                                              Kazakhstan</option>
                                          <option value="KE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ke.svg" alt="Kenya Flag" /><span class="text-truncate">Kenya</span></span>'>
                                              Kenya</option>
                                          <option value="KI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ki.svg" alt="Kiribati Flag" /><span class="text-truncate">Kiribati</span></span>'>
                                              Kiribati</option>
                                          <option value="KW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/kw.svg" alt="Kuwait Flag" /><span class="text-truncate">Kuwait</span></span>'>
                                              Kuwait</option>
                                          <option value="KG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/kg.svg" alt="Kyrgyzstan Flag" /><span class="text-truncate">Kyrgyzstan</span></span>'>
                                              Kyrgyzstan</option>
                                          <option value="LA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/la.svg" alt="Laos Flag" /><span class="text-truncate">Laos</span></span>'>
                                              Laos</option>
                                          <option value="LV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/lv.svg" alt="Latvia Flag" /><span class="text-truncate">Latvia</span></span>'>
                                              Latvia</option>
                                          <option value="LB" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/lb.svg" alt="Lebanon Flag" /><span class="text-truncate">Lebanon</span></span>'>
                                              Lebanon</option>
                                          <option value="LS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ls.svg" alt="Lesotho Flag" /><span class="text-truncate">Lesotho</span></span>'>
                                              Lesotho</option>
                                          <option value="LR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/lr.svg" alt="Liberia Flag" /><span class="text-truncate">Liberia</span></span>'>
                                              Liberia</option>
                                          <option value="LY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ly.svg" alt="Libya Flag" /><span class="text-truncate">Libya</span></span>'>
                                              Libya</option>
                                          <option value="LI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/li.svg" alt="Liechtenstein Flag" /><span class="text-truncate">Liechtenstein</span></span>'>
                                              Liechtenstein</option>
                                          <option value="LT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/lt.svg" alt="Lithuania Flag" /><span class="text-truncate">Lithuania</span></span>'>
                                              Lithuania</option>
                                          <option value="LU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/lu.svg" alt="Luxembourg Flag" /><span class="text-truncate">Luxembourg</span></span>'>
                                              Luxembourg</option>
                                          <option value="MO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mo.svg" alt="Macau Flag" /><span class="text-truncate">Macau</span></span>'>
                                              Macau</option>
                                          <option value="MG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mg.svg" alt="Madagascar Flag" /><span class="text-truncate">Madagascar</span></span>'>
                                              Madagascar</option>
                                          <option value="MW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mw.svg" alt="Malawi Flag" /><span class="text-truncate">Malawi</span></span>'>
                                              Malawi</option>
                                          <option value="MY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/my.svg" alt="Malaysia Flag" /><span class="text-truncate">Malaysia</span></span>'>
                                              Malaysia</option>
                                          <option value="MV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mv.svg" alt="Maldives Flag" /><span class="text-truncate">Maldives</span></span>'>
                                              Maldives</option>
                                          <option value="ML" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ml.svg" alt="Mali Flag" /><span class="text-truncate">Mali</span></span>'>
                                              Mali</option>
                                          <option value="MT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mt.svg" alt="Malta Flag" /><span class="text-truncate">Malta</span></span>'>
                                              Malta</option>
                                          <option value="MH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mh.svg" alt="Marshall Islands Flag" /><span class="text-truncate">Marshall Islands</span></span>'>
                                              Marshall Islands</option>
                                          <option value="MQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mq.svg" alt="Martinique Flag" /><span class="text-truncate">Martinique</span></span>'>
                                              Martinique</option>
                                          <option value="MR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mr.svg" alt="Mauritania Flag" /><span class="text-truncate">Mauritania</span></span>'>
                                              Mauritania</option>
                                          <option value="MU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mu.svg" alt="Mauritius Flag" /><span class="text-truncate">Mauritius</span></span>'>
                                              Mauritius</option>
                                          <option value="YT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/yt.svg" alt="Mayotte Flag" /><span class="text-truncate">Mayotte</span></span>'>
                                              Mayotte</option>
                                          <option value="MX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mx.svg" alt="Mexico Flag" /><span class="text-truncate">Mexico</span></span>'>
                                              Mexico</option>
                                          <option value="MD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/md.svg" alt="Moldova Flag" /><span class="text-truncate">Moldova</span></span>'>
                                              Moldova</option>
                                          <option value="MC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mc.svg" alt="Monaco Flag" /><span class="text-truncate">Monaco</span></span>'>
                                              Monaco</option>
                                          <option value="MN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mn.svg" alt="Mongolia Flag" /><span class="text-truncate">Mongolia</span></span>'>
                                              Mongolia</option>
                                          <option value="ME" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/me.svg" alt="Montenegro Flag" /><span class="text-truncate">Montenegro</span></span>'>
                                              Montenegro</option>
                                          <option value="MS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ms.svg" alt="Montserrat Flag" /><span class="text-truncate">Montserrat</span></span>'>
                                              Montserrat</option>
                                          <option value="MA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ma.svg" alt="Morocco Flag" /><span class="text-truncate">Morocco</span></span>'>
                                              Morocco</option>
                                          <option value="MZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mz.svg" alt="Mozambique Flag" /><span class="text-truncate">Mozambique</span></span>'>
                                              Mozambique</option>
                                          <option value="MM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mm.svg" alt="Myanmar Flag" /><span class="text-truncate">Myanmar</span></span>'>
                                              Myanmar</option>
                                          <option value="NA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/na.svg" alt="Namibia Flag" /><span class="text-truncate">Namibia</span></span>'>
                                              Namibia</option>
                                          <option value="NR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/nr.svg" alt="Nauru Flag" /><span class="text-truncate">Nauru</span></span>'>
                                              Nauru</option>
                                          <option value="NP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/np.svg" alt="Nepal Flag" /><span class="text-truncate">Nepal</span></span>'>
                                              Nepal</option>
                                          <option value="NL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/nl.svg" alt="Netherlands Flag" /><span class="text-truncate">Netherlands</span></span>'>
                                              Netherlands</option>
                                          <option value="NC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/nc.svg" "alt="New Caledonia Flag" /><span class="text-truncate">New Caledonia</span></span>'>
                                              New Caledonia</option>
                                          <option value="NZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/nz.svg" alt="New Zealand Flag" /><span class="text-truncate">New Zealand</span></span>'>
                                              New Zealand</option>
                                          <option value="NI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ni.svg" alt="Nicaragua Flag" /><span class="text-truncate">Nicaragua</span></span>'>
                                              Nicaragua</option>
                                          <option value="NE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ne.svg" alt="Niger Flag" /><span class="text-truncate">Niger</span></span>'>
                                              Niger</option>
                                          <option value="NG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ng.svg" alt="Nigeria Flag" /><span class="text-truncate">Nigeria</span></span>'>
                                              Nigeria</option>
                                          <option value="NU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/nu.svg" alt="Niue Flag" /><span class="text-truncate">Niue</span></span>'>
                                              Niue</option>
                                          <option value="NF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/nf.svg" alt="Norfolk Island Flag" /><span class="text-truncate">Norfolk Island</span></span>'>
                                              Norfolk Island</option>
                                          <option value="KP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/kp.svg" alt="North Korea Flag" /><span class="text-truncate">North Korea</span></span>'>
                                              North Korea</option>
                                          <option value="MK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mk.svg" alt="North Macedonia Flag" /><span class="text-truncate">North Macedonia</span></span>'>
                                              North Macedonia</option>
                                          <option value="GB-NIR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb-nir.svg" alt="Northern Ireland Flag" /><span class="text-truncate">Northern Ireland</span></span>'>
                                              Northern Ireland</option>
                                          <option value="MP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mp.svg" alt="Northern Markna Islands Flag" /><span class="text-truncate">Northern Markna Islands</span></span>'>
                                              Northern Markna Islands</option>
                                          <option value="NO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/no.svg" alt="Norway Flag" /><span class="text-truncate">Norway</span></span>'>
                                              Norway</option>
                                          <option value="OM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/om.svg" alt="Oman Flag" /><span class="text-truncate">Oman</span></span>'>
                                              Oman</option>
                                          <option value="PK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pk.svg" alt="Pakistan Flag" /><span class="text-truncate">Pakistan</span></span>'>
                                              Pakistan</option>
                                          <option value="PW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pw.svg" alt="Palau Flag" /><span class="text-truncate">Palau</span></span>'>
                                              Palau</option>
                                          <option value="PA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pa.svg" alt="Panama Flag" /><span class="text-truncate">Panama</span></span>'>
                                              Panama</option>
                                          <option value="PG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pg.svg" alt="Papua New Guinea Flag" /><span class="text-truncate">Papua New Guinea</span></span>'>
                                              Papua New Guinea</option>
                                          <option value="PY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/py.svg" alt="Paraguay Flag" /><span class="text-truncate">Paraguay</span></span>'>
                                              Paraguay</option>
                                          <option value="PE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pe.svg" alt="Peru Flag" /><span class="text-truncate">Peru</span></span>'>
                                              Peru</option>
                                          <option value="PH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ph.svg" alt="Philippines Flag" /><span class="text-truncate">Philippines</span></span>'>
                                              Philippines</option>
                                          <option value="PN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pn.svg" alt="Pitcairn Flag" /><span class="text-truncate">Pitcairn</span></span>'>
                                              Pitcairn</option>
                                          <option value="PL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pl.svg" alt="Poland Flag" /><span class="text-truncate">Poland</span></span>'>
                                              Poland</option>
                                          <option value="PT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pt.svg" alt="Portugal Flag" /><span class="text-truncate">Portugal</span></span>'>
                                              Portugal</option>
                                          <option value="PR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pr.svg" alt="Puerto Rico Flag" /><span class="text-truncate">Puerto Rico</span></span>'>
                                              Puerto Rico</option>
                                          <option value="QA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/qa.svg" alt="Qatar Flag" /><span class="text-truncate">Qatar</span></span>'>
                                              Qatar</option>
                                          <option value="CG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cg.svg" alt="Republic of the Congo Flag" /><span class="text-truncate">Republic of the Congo</span></span>'>
                                              Republic of the Congo</option>
                                          <option value="RO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ro.svg" alt="Romania Flag" /><span class="text-truncate">Romania</span></span>'>
                                              Romania</option>
                                          <option value="RU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ru.svg" alt="Russia Flag" /><span class="text-truncate">Russia</span></span>'>
                                              Russia</option>
                                          <option value="RW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/rw.svg" alt="Rwanda Flag" /><span class="text-truncate">Rwanda</span></span>'>
                                              Rwanda</option>
                                          <option value="RE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/re.svg" alt="Réunion Flag" /><span class="text-truncate">Réunion</span></span>'>
                                              Réunion</option>
                                          <option value="BL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bl.svg" alt="Saint Barthélemy Flag" /><span class="text-truncate">Saint Barthélemy</span></span>'>
                                              Saint Barthélemy</option>
                                          <option value="SH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sh.svg" alt="Saint Helena, Ascension and Tristan da Cunha Flag" /><span class="text-truncate">Saint Helena, Ascension and Tristan da Cunha</span></span>'>
                                              Saint Helena, Ascension and Tristan da Cunha</option>
                                          <option value="KN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/kn.svg" alt="Saint Kitts and Nevis Flag" /><span class="text-truncate">Saint Kitts and Nevis</span></span>'>
                                              Saint Kitts and Nevis</option>
                                          <option value="LC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/lc.svg" alt="Saint Lucia Flag" /><span class="text-truncate">Saint Lucia</span></span>'>
                                              Saint Lucia</option>
                                          <option value="MF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mf.svg" alt="Saint Martin Flag" /><span class="text-truncate">Saint Martin</span></span>'>
                                              Saint Martin</option>
                                          <option value="PM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pm.svg" alt="Saint Pierre and Miquelon Flag" /><span class="text-truncate">Saint Pierre and Miquelon</span></span>'>
                                              Saint Pierre and Miquelon</option>
                                          <option value="VC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/vc.svg" alt="Saint Vincent and the Grenadines Flag" /><span class="text-truncate">Saint Vincent and the Grenadines</span></span>'>
                                              Saint Vincent and the Grenadines</option>
                                          <option value="WS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ws.svg" alt="Samoa Flag" /><span class="text-truncate">Samoa</span></span>'>
                                              Samoa</option>
                                          <option value="SM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sm.svg" "alt="San Marino Flag" /><span class="text-truncate">San Marino</span></span>'>
                                              San Marino</option>
                                          <option value="ST" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/st.svg" "alt="Sao Tome and Principe Flag" /><span class="text-truncate">Sao Tome and Principe</span></span>'>
                                              Sao Tome and Principe</option>
                                          <option value="SA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sa.svg" alt="Saudi Arabia Flag" /><span class="text-truncate">Saudi Arabia</span></span>'>
                                              Saudi Arabia</option>
                                          <option value="GB-SCT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb-sct.svg" alt="Scotland Flag" /><span class="text-truncate">Scotland</span></span>'>
                                              Scotland</option>
                                          <option value="SN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sn.svg" alt="Senegal Flag" /><span class="text-truncate">Senegal</span></span>'>
                                              Senegal</option>
                                          <option value="RS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/rs.svg" alt="Serbia Flag" /><span class="text-truncate">Serbia</span></span>'>
                                              Serbia</option>
                                          <option value="SC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sc.svg" alt="Seychelles Flag" /><span class="text-truncate">Seychelles</span></span>'>
                                              Seychelles</option>
                                          <option value="SL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sl.svg" alt="Sierra Leone Flag" /><span class="text-truncate">Sierra Leone</span></span>'>
                                              Sierra Leone</option>
                                          <option value="SG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sg.svg" alt="Singapore Flag" /><span class="text-truncate">Singapore</span></span>'>
                                              Singapore</option>
                                          <option value="SX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sx.svg" alt="Sint Maarten Flag" /><span class="text-truncate">Sint Maarten</span></span>'>
                                              Sint Maarten</option>
                                          <option value="SK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sk.svg" alt="Slovakia Flag" /><span class="text-truncate">Slovakia</span></span>'>
                                              Slovakia</option>
                                          <option value="SI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/si.svg" alt="Slovenia Flag" /><span class="text-truncate">Slovenia</span></span>'>
                                              Slovenia</option>
                                          <option value="SB" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sb.svg" alt="Solomon Islands Flag" /><span class="text-truncate">Solomon Islands</span></span>'>
                                              Solomon Islands</option>
                                          <option value="SO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/so.svg" alt="Somalia Flag" /><span class="text-truncate">Somalia</span></span>'>
                                              Somalia</option>
                                          <option value="ZA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/za.svg" alt="South Africa Flag" /><span class="text-truncate">South Africa</span></span>'>
                                              South Africa</option>
                                          <option value="GS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gs.svg" alt="South Georgia and the South Sandwich Islands Flag" /><span class="text-truncate">South Georgia and the South Sandwich Islands</span></span>'>
                                              South Georgia and the South Sandwich Islands</option>
                                          <option value="KR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/kr.svg" alt="South Korea Flag" /><span class="text-truncate">South Korea</span></span>'>
                                              South Korea</option>
                                          <option value="SS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ss.svg" alt="South Sudan Flag" /><span class="text-truncate">South Sudan</span></span>'>
                                              South Sudan</option>
                                          <option value="ES" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/es.svg" alt="Spain Flag" /><span class="text-truncate">Spain</span></span>'>
                                              Spain</option>
                                          <option value="LK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/lk.svg" "alt="Sri Lanka Flag" /><span class="text-truncate">Sri Lanka</span></span>'>
                                              Sri Lanka</option>
                                          <option value="PS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ps.svg" alt="State of Palestine Flag" /><span class="text-truncate">State of Palestine</span></span>'>
                                              State of Palestine</option>
                                          <option value="SD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sd.svg" alt="Sudan Flag" /><span class="text-truncate">Sudan</span></span>'>
                                              Sudan</option>
                                          <option value="SR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sr.svg" alt="Suriname Flag" /><span class="text-truncate">Suriname</span></span>'>
                                              Suriname</option>
                                          <option value="SJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sj.svg" alt="Svalbard and Jan Mayen Flag" /><span class="text-truncate">Svalbard and Jan Mayen</span></span>'>
                                              Svalbard and Jan Mayen</option>
                                          <option value="SZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sz.svg" alt="Swaziland Flag" /><span class="text-truncate">Swaziland</span></span>'>
                                              Swaziland</option>
                                          <option value="SE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/se.svg" alt="Sweden Flag" /><span class="text-truncate">Sweden</span></span>'>
                                              Sweden</option>
                                          <option value="CH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ch.svg" alt="Switzerland Flag" /><span class="text-truncate">Switzerland</span></span>'>
                                              Switzerland</option>
                                          <option value="SY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sy.svg" alt="Syrian Arab Republic Flag" /><span class="text-truncate">Syrian Arab Republic</span></span>'>
                                              Syrian Arab Republic</option>
                                          <option value="TW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tw.svg" alt="Taiwan Flag" /><span class="text-truncate">Taiwan</span></span>'>
                                              Taiwan</option>
                                          <option value="TJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tj.svg" alt="Tajikistan Flag" /><span class="text-truncate">Tajikistan</span></span>'>
                                              Tajikistan</option>
                                          <option value="TZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tz.svg" alt="Tanzania Flag" /><span class="text-truncate">Tanzania</span></span>'>
                                              Tanzania</option>
                                          <option value="TH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/th.svg" alt="Thailand Flag" /><span class="text-truncate">Thailand</span></span>'>
                                              Thailand</option>
                                          <option value="TL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tl.svg" alt="Timor-Leste Flag" /><span class="text-truncate">Timor-Leste</span></span>'>
                                              Timor-Leste</option>
                                          <option value="TG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tg.svg" alt="Togo Flag" /><span class="text-truncate">Togo</span></span>'>
                                              Togo</option>
                                          <option value="TK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tk.svg" alt="Tokelau Flag" /><span class="text-truncate">Tokelau</span></span>'>
                                              Tokelau</option>
                                          <option value="TO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/to.svg" alt="Tonga Flag" /><span class="text-truncate">Tonga</span></span>'>
                                              Tonga</option>
                                          <option value="TT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tt.svg" alt="Trinidad and Tobago Flag" /><span class="text-truncate">Trinidad and Tobago</span></span>'>
                                              Trinidad and Tobago</option>
                                          <option value="TN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tn.svg" alt="Tunisia Flag" /><span class="text-truncate">Tunisia</span></span>'>
                                              Tunisia</option>
                                          <option value="TR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tr.svg" alt="Turkey Flag" /><span class="text-truncate">Turkey</span></span>'>
                                              Turkey</option>
                                          <option value="TM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tm.svg" alt="Turkmenistan Flag" /><span class="text-truncate">Turkmenistan</span></span>'>
                                              Turkmenistan</option>
                                          <option value="TC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tc.svg" alt="Turks and Caicos Islands Flag" /><span class="text-truncate">Turks and Caicos Islands</span></span>'>
                                              Turks and Caicos Islands</option>
                                          <option value="TV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tv.svg" alt="Tuvalu Flag" /><span class="text-truncate">Tuvalu</span></span>'>
                                              Tuvalu</option>
                                          <option value="UG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ug.svg" alt="Uganda Flag" /><span class="text-truncate">Uganda</span></span>'>
                                              Uganda</option>
                                          <option value="UA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ua.svg" alt="Ukraine Flag" /><span class="text-truncate">Ukraine</span></span>'>
                                              Ukraine</option>
                                          <option value="AE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ae.svg" alt="United Arab Emirates Flag" /><span class="text-truncate">United Arab Emirates</span></span>'>
                                              United Arab Emirates</option>
                                          <option value="GB" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="United Kingdom Flag" /><span class="text-truncate">United Kingdom</span></span>'>
                                              United Kingdom</option>
                                          <option value="UM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/um.svg" alt="United States Minor Outlying Islands Flag" /><span class="text-truncate">United States Minor Outlying Islands</span></span>'>
                                              United States Minor Outlying Islands</option>
                                          <option value="US" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States of America Flag" /><span class="text-truncate">United States of America</span></span>'>
                                              United States of America</option>
                                          <option value="UY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/uy.svg" alt="Uruguay Flag" /><span class="text-truncate">Uruguay</span></span>'>
                                              Uruguay</option>
                                          <option value="UZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/uz.svg" alt="Uzbekistan Flag" /><span class="text-truncate">Uzbekistan</span></span>'>
                                              Uzbekistan</option>
                                          <option value="VU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/vu.svg" alt="Vanuatu Flag" /><span class="text-truncate">Vanuatu</span></span>'>
                                              Vanuatu</option>
                                          <option value="VE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ve.svg" alt="Venezuela (Bolivarian Republic of) Flag" /><span class="text-truncate">Venezuela (Bolivarian Republic of)</span></span>'>
                                              Venezuela (Bolivarian Republic of)</option>
                                          <option value="VN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/vn.svg" alt="Vietnam Flag" /><span class="text-truncate">Vietnam</span></span>'>
                                              Vietnam</option>
                                          <option value="VG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/vg.svg" alt="Virgin Islands (British) Flag" /><span class="text-truncate">Virgin Islands (British)</span></span>'>
                                              Virgin Islands (British)</option>
                                          <option value="VI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/vi.svg" alt="Virgin Islands (U.S.) Flag" /><span class="text-truncate">Virgin Islands (U.S.)</span></span>'>
                                              Virgin Islands (U.S.)</option>
                                          <option value="GB-WLS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb-wls.svg" alt="Wales Flag" /><span class="text-truncate">Wales</span></span>'>
                                              Wales</option>
                                          <option value="WF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/wf.svg" alt="Wallis and Futuna Flag" /><span class="text-truncate">Wallis and Futuna</span></span>'>
                                              Wallis and Futuna</option>
                                          <option value="EH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/eh.svg" alt="Western Sahara Flag" /><span class="text-truncate">Western Sahara</span></span>'>
                                              Western Sahara</option>
                                          <option value="YE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ye.svg" alt="Yemen Flag" /><span class="text-truncate">Yemen</span></span>'>
                                              Yemen</option>
                                          <option value="ZM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/zm.svg" alt="Zambia Flag" /><span class="text-truncate">Zambia</span></span>'>
                                              Zambia</option>
                                          <option value="ZW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/zw.svg" alt="Zimbabwe Flag" /><span class="text-truncate">Zimbabwe</span></span>'>
                                              Zimbabwe</option>
                                      </select>
                                  </div>
                                  <!-- End Select -->

                                  <div class="mb-3">
                                      <input type="text" class="form-control" name="city" id="cityLabel" placeholder="Quận, huyện" aria-label="City">
                                  </div>

                                  <input type="text" class="form-control" name="state" id="stateLabel" placeholder="Phường, Xã" aria-label="State">
                              </div>
                              <!-- End Form Group -->

                              <!-- Form Group -->
                              <div class="form-group">
                                  <label for="billingAddressLine1Label" class="input-label">Địa chỉ chi tiết</label>
                                  <input type="text" class="form-control" name="billingAddressLine1" id="billingAddressLine1Label" placeholder="Địa chỉ của khách hàng" aria-label="Your address">
                              </div>
                              <!-- End Form Group -->

                              <!-- Form Group -->
                              <div class="form-group">
                                  <label for="billingZipCodeLabel" class="input-label">Zip code <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Bạn có thể tìm mã ZIP trong địa chỉ bưu điện"></i></label>

                                  <input type="text" class="js-masked-input form-control" name="billingZipCode" id="billingZipCodeLabel" placeholder="Mã ZIP" aria-label="Your zip code" data-hs-mask-options='{
                                    "template": "AA0 0AA"
                                    }'>
                              </div>
                              <!-- End Form Group -->

                              <div class="d-flex justify-content-end">
                                  <button type="button" class="btn btn-white mr-2">Loại bỏ</button>
                                  <button type="submit" class="btn btn-primary">Lưu</button>
                              </div>
                          </div>
                          <!-- Body -->
                      </form>
                  </div>
                  <!-- End Card -->
              </div>
          </div>
          <!-- End Row -->
      </div>
      <!-- End Content -->

      <!-- Footer -->

      <div class="footer">
          <div class="row justify-content-between align-items-center">
              <div class="col">
                  <p class="font-size-sm mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2020 Htmlstream.</span></p>
              </div>
              <div class="col-auto">
                  <div class="d-flex justify-content-end">
                      <!-- List Dot -->
                      <ul class="list-inline list-separator">
                          <li class="list-inline-item">
                              <a class="list-separator-link" href="#">FAQ</a>
                          </li>

                          <li class="list-inline-item">
                              <a class="list-separator-link" href="#">License</a>
                          </li>

                          <li class="list-inline-item">
                              <!-- Keyboard Shortcuts Toggle -->
                              <div class="hs-unfold">
                                  <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                              "target": "#keyboardShortcutsSidebar",
                              "type": "css-animation",
                              "animationIn": "fadeInRight",
                              "animationOut": "fadeOutRight",
                              "hasOverlay": true,
                              "smartPositionOff": true
                             }'>
                                      <i class="tio-command-key"></i>
                                  </a>
                              </div>
                              <!-- End Keyboard Shortcuts Toggle -->
                          </li>
                      </ul>
                      <!-- End List Dot -->
                  </div>
              </div>
          </div>
      </div>



      <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->

  <!-- Activity -->
  <div id="activitySidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
      <div class="card card-lg sidebar-card">
          <div class="card-header">
              <h4 class="card-header-title">Activity stream</h4>

              <!-- Toggle Button -->
              <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;" data-hs-unfold-options='{
              "target": "#activitySidebar",
              "type": "css-animation",
              "animationIn": "fadeInRight",
              "animationOut": "fadeOutRight",
              "hasOverlay": true,
              "smartPositionOff": true
             }'>
                  <i class="tio-clear tio-lg"></i>
              </a>
              <!-- End Toggle Button -->
          </div>

          <!-- Body -->
          <div class="card-body sidebar-body sidebar-scrollbar">
              <!-- Step -->
              <ul class="step step-icon-sm step-avatar-sm">
                  <!-- Step Item -->
                  <li class="step-item">
                      <div class="step-content-wrapper">
                          <div class="step-avatar">
                              <img class="step-avatar-img" src="assets\img\160x160\img9.jpg" alt="Image Description">
                          </div>

                          <div class="step-content">
                              <h5 class="mb-1">Iana Robinson</h5>

                              <p class="font-size-sm mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fd-7</a></p>

                              <ul class="list-group list-group-sm">
                                  <!-- List Item -->
                                  <li class="list-group-item list-group-item-light">
                                      <div class="row gx-1">
                                          <div class="col-6">
                                              <div class="media">
                                                  <span class="mt-1 mr-2">
                                                      <img class="avatar avatar-xs" src="assets\svg\brands\excel.svg" alt="Image Description">
                                                  </span>
                                                  <div class="media-body text-truncate">
                                                      <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                                                      <small class="d-block text-muted">12kb</small>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="media">
                                                  <span class="mt-1 mr-2">
                                                      <img class="avatar avatar-xs" src="assets\svg\brands\word.svg" alt="Image Description">
                                                  </span>
                                                  <div class="media-body text-truncate">
                                                      <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                                                      <small class="d-block text-muted">4kb</small>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                                  <!-- End List Item -->
                              </ul>

                              <small class="text-muted text-uppercase">Now</small>
                          </div>
                      </div>
                  </li>
                  <!-- End Step Item -->

                  <!-- Step Item -->
                  <li class="step-item">
                      <div class="step-content-wrapper">
                          <span class="step-icon step-icon-soft-dark">B</span>

                          <div class="step-content">
                              <h5 class="mb-1">Bob Dean</h5>

                              <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-6</a> as <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

                              <small class="text-muted text-uppercase">Today</small>
                          </div>
                      </div>
                  </li>
                  <!-- End Step Item -->

                  <!-- Step Item -->
                  <li class="step-item">
                      <div class="step-content-wrapper">
                          <div class="step-avatar">
                              <img class="step-avatar-img" src="assets\img\160x160\img3.jpg" alt="Image Description">
                          </div>

                          <div class="step-content">
                              <h5 class="h5 mb-1">Crane</h5>

                              <p class="font-size-sm mb-1">Added 5 card to <a href="#">Payments</a></p>

                              <ul class="list-group list-group-sm">
                                  <li class="list-group-item list-group-item-light">
                                      <div class="row gx-1">
                                          <div class="col">
                                              <img class="img-fluid rounded ie-sidebar-activity-img" src="assets\svg\illustrations\card-1.svg" alt="Image Description">
                                          </div>
                                          <div class="col">
                                              <img class="img-fluid rounded ie-sidebar-activity-img" src="assets\svg\illustrations\card-2.svg" alt="Image Description">
                                          </div>
                                          <div class="col">
                                              <img class="img-fluid rounded ie-sidebar-activity-img" src="assets\svg\illustrations\card-3.svg" alt="Image Description">
                                          </div>
                                          <div class="col-auto align-self-center">
                                              <div class="text-center">
                                                  <a href="#">+2</a>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                              </ul>

                              <small class="text-muted text-uppercase">May 12</small>
                          </div>
                      </div>
                  </li>
                  <!-- End Step Item -->

                  <!-- Step Item -->
                  <li class="step-item">
                      <div class="step-content-wrapper">
                          <span class="step-icon step-icon-soft-info">D</span>

                          <div class="step-content">
                              <h5 class="mb-1">David Lidell</h5>

                              <p class="font-size-sm mb-1">Added a new member to Front Dashboard</p>

                              <small class="text-muted text-uppercase">May 15</small>
                          </div>
                      </div>
                  </li>
                  <!-- End Step Item -->

                  <!-- Step Item -->
                  <li class="step-item">
                      <div class="step-content-wrapper">
                          <div class="step-avatar">
                              <img class="step-avatar-img" src="assets\img\160x160\img7.jpg" alt="Image Description">
                          </div>

                          <div class="step-content">
                              <h5 class="mb-1">Rachel King</h5>

                              <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

                              <small class="text-muted text-uppercase">Apr 29</small>
                          </div>
                      </div>
                  </li>
                  <!-- End Step Item -->

                  <!-- Step Item -->
                  <li class="step-item">
                      <div class="step-content-wrapper">
                          <div class="step-avatar">
                              <img class="step-avatar-img" src="assets\img\160x160\img5.jpg" alt="Image Description">
                          </div>

                          <div class="step-content">
                              <h5 class="mb-1">Finch Hoot</h5>

                              <p class="font-size-sm mb-1">Earned a "Top endorsed" <i class="tio-verified text-primary"></i> badge</p>

                              <small class="text-muted text-uppercase">Apr 06</small>
                          </div>
                      </div>
                  </li>
                  <!-- End Step Item -->

                  <!-- Step Item -->
                  <li class="step-item">
                      <div class="step-content-wrapper">
                          <span class="step-icon step-icon-soft-primary">
                              <i class="tio-user"></i>
                          </span>

                          <div class="step-content">
                              <h5 class="mb-1">Project status updated</h5>

                              <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-primary badge-pill"><span class="legend-indicator bg-primary"></span>"In
                                      progress"</span></p>

                              <small class="text-muted text-uppercase">Feb 10</small>
                          </div>
                      </div>
                  </li>
                  <!-- End Step Item -->
              </ul>
              <!-- End Step -->

              <a class="btn btn-block btn-white" href="javascript:;">View all <i class="tio-chevron-right"></i></a>
          </div>
          <!-- End Body -->
      </div>
  </div>
  <!-- End Activity -->

  <!-- Welcome Message Modal -->
  <div class="modal fade" id="welcomeMessageModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <!-- Header -->
              <div class="modal-close">
                  <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
                      <i class="tio-clear tio-lg"></i>
                  </button>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="modal-body p-sm-5">
                  <div class="text-center">
                      <div class="w-75 w-sm-50 mx-auto mb-4">
                          <img class="img-fluid" src="assets\svg\illustrations\graphs.svg" alt="Image Description">
                      </div>

                      <h4 class="h1">Welcome to Front</h4>

                      <p>We're happy to see you in our community.</p>
                  </div>
              </div>
              <!-- End Body -->

              <!-- Footer -->
              <div class="modal-footer d-block text-center py-sm-5">
                  <small class="text-cap mb-4">Trusted by the world's best teams</small>

                  <div class="w-85 mx-auto">
                      <div class="row justify-content-between">
                          <div class="col">
                              <img class="img-fluid ie-welcome-brands" src="assets\svg\brands\gitlab-gray.svg" alt="Image Description">
                          </div>
                          <div class="col">
                              <img class="img-fluid ie-welcome-brands" src="assets\svg\brands\fitbit-gray.svg" alt="Image Description">
                          </div>
                          <div class="col">
                              <img class="img-fluid ie-welcome-brands" src="assets\svg\brands\flow-xo-gray.svg" alt="Image Description">
                          </div>
                          <div class="col">
                              <img class="img-fluid ie-welcome-brands" src="assets\svg\brands\layar-gray.svg" alt="Image Description">
                          </div>
                      </div>
                  </div>
              </div>
              <!-- End Footer -->
          </div>
      </div>
  </div>
  <!-- End Welcome Message Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->