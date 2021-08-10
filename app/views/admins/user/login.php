    <main id="content" role="main" class="main pt-0">
      <!-- Content -->
      <div class="container-fluid px-3">
        <div class="row">
          <!-- Cover -->
          <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center min-vh-lg-100 position-relative bg-light px-0">
            <!-- Logo & Language -->
            <div class="position-absolute top-0 left-0 right-0 mt-3 mx-3">
              <div class="d-none d-lg-flex justify-content-between">
                <a href="index.html">

                </a>

                <!-- Select -->
                <div id="languageSelect1" class="select2-custom select2-custom-right">
                  <select class="js-select2-custom" data-hs-select2-options='{
                            "dropdownParent": "#languageSelect1",
                            "minimumResultsForSearch": "Infinity",
                            "placeholder": "Select language",
                            "customClass": "custom-select custom-select-sm custom-select-borderless bg-transparent",
                            "dropdownAutoWidth": true,
                            "dropdownWidth": "12rem"
                          }'>
                    <option label="empty"></option>
                    <option value="language1" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{_WEB_ROOT}}/public\admin/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16"/><span>English (US)</span></span>'>English (US)</option>
                    <option value="language2" selected="" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{_WEB_ROOT}}/public\admin/vendor/flag-icon-css/flags/1x1/vn.svg" alt="Image description" width="16"/><span>Tiếng Việt (VN)</span></span>'>Tiếng Việt (VN)</option>
                    <option value="language3" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{_WEB_ROOT}}/public\admin/vendor/flag-icon-css/flags/1x1/de.svg" alt="Image description" width="16"/><span>Deutsch</span></span>'>Deutsch</option>
                    <option value="language4" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{_WEB_ROOT}}/public\admin/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Image description" width="16"/><span>Dansk</span></span>'>Dansk</option>
                    <option value="language5" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{_WEB_ROOT}}/public\admin/vendor/flag-icon-css/flags/1x1/es.svg" alt="Image description" width="16"/><span>Español</span></span>'>Español</option>
                    <option value="language6" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{_WEB_ROOT}}/public\admin/vendor/flag-icon-css/flags/1x1/nl.svg" alt="Image description" width="16"/><span>Nederlands</span></span>'>Nederlands</option>
                    <option value="language7" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{_WEB_ROOT}}/public\admin/vendor/flag-icon-css/flags/1x1/it.svg" alt="Image description" width="16"/><span>Italiano</span></span>'>Italiano</option>
                    <option value="language8" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{_WEB_ROOT}}/public\admin/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Image description" width="16"/><span>中文 (繁體)</span></span>'>中文 (繁體)</option>
                  </select>
                </div>
                <!-- End Select -->
              </div>
            </div>
            <!-- End Logo & Language -->

            <div style="max-width: 23rem;">
              <div class="text-center mb-5">
                <img class="img-fluid" src="{{_WEB_ROOT}}\public\admin\svg\illustrations\chat.svg" alt="Image Description" style="width: 12rem;">
              </div>

             

              <!-- List Checked -->
              <!-- <ul class="list-checked list-checked-lg list-checked-primary list-unstyled-py-4">
                <li class="list-checked-item">
                  <span class="d-block font-weight-bold mb-1">All-in-one tool</span>
                  Build, run, and scale your apps - end to end
                </li>

                <li class="list-checked-item">
                  <span class="d-block font-weight-bold mb-1">Easily add &amp; manage your services</span>
                  It brings together your tasks, projects, timelines, files and more
                </li>
              </ul> -->
              <!-- End List Checked -->

              <div class="row justify-content-between mt-5 gx-2">
                <div class="col">
                  <img class="img-fluid" src="{{_WEB_ROOT}}\public\admin\svg\brands\gitlab-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid" src="{{_WEB_ROOT}}\public\admin\svg\brands\fitbit-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid" src="{{_WEB_ROOT}}\public\admin\svg\brands\flow-xo-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid" src="{{_WEB_ROOT}}\public\admin\svg\brands\layar-gray.svg" alt="Image Description">
                </div>
              </div>
              <!-- End Row -->
            </div>
          </div>
          <!-- End Cover -->

          <div class="col-lg-6 d-flex justify-content-center align-items-center min-vh-lg-100">
            <div class="w-100 pt-10 pt-lg-7 pb-7" style="max-width: 25rem;">
              <!-- Form -->
              <form id="form-login" method="post">
              
                <div class="text-center mb-5">
                  <h1 class="display-4">Đăng nhập</h1>
                  
                </div>

                <!-- Form Group -->
                <div class="js-form-message form-group">
                  <label class="input-label" for="signupSrEmail">Email</label>
                          
                  <input type="text" class="form-control form-control-lg" name="email" id="signupSrEmail">
                  <div class="form-message text-danger"></div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group">
                  <label class="input-label" for="signupSrPassword" tabindex="0">
                    <span class="d-flex justify-content-between align-items-center">
                      Mật khẩu
                    </span>
                  </label>

                  <div class="input-group input-group-merge">
                    <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" data-hs-toggle-password-options='{
                             "target": "#changePassTarget",
                             "defaultClass": "tio-hidden-outlined",
                             "showClass": "tio-visible-outlined",
                             "classChangeTarget": "#changePassIcon"
                           }'>
                    <div id="changePassTarget" class="input-group-append">
                      <a class="input-group-text" href="javascript:;">
                        <i id="changePassIcon" class="tio-visible-outlined"></i>
                      </a>
                    </div>
                  </div>
                  <div class="form-message text-danger"></div>
                </div>
                <!-- End Form Group -->

                <!-- Checkbox -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox">
                    <label class="custom-control-label text-muted" for="termsCheckbox">Ghi nhớ đăng nhập</label>
                  </div>
                </div>
                <!-- End Checkbox -->

                <button type="submit" class="btn btn-lg btn-block btn-primary">Đăng nhập</button>
              </form>
              <!-- End Form -->
            </div>
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Content -->
    </main>