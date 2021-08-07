<!-- ========== MAIN CONTENT ========== -->
    <!-- Navbar Vertical -->
    

    
    <!-- End Navbar Vertical -->

    <main id="content" role="main" class="main" data-id = "{{ $blog_by_id['id'] }}">
      <!-- Content -->
      <form id ="form-ce" class="content container-fluid" method="POST" enctype="multipart/form-data">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{_WEB_ROOT}}/blogs">Bài viết</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Sửa bài viết</li>
                </ol>
              </nav>

              <h1 class="page-header-title">Sửa bài viết</h1>
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Page Header -->
  
        <div class="row">
          <div class="col-lg-8">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Body -->
              <div class="card-body">
                <!-- Tiêu đề -->
                <div class="form-group">
                  <label for="title" class="input-label my-input-label">Tiêu đề <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Tiêu đề"></i></label>

                  <input type="text" class="form-control" name="title" id="title" 
                  value = "{{ $blog_by_id['title'] }}" aria-label="Tiêu đề" onkeyup="setTimeout(ChangeToSlug(),2000)">
                  <span class = "form-message"></span>
                </div>
                <!-- End Tiêu đề -->

                <!-- Liên kết tĩnh -->
                <div class="form-group">
                  <label for="convert_slug" class="input-label my-input-label">Liên kết tĩnh <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Liên kết tĩnh"></i></label>

                  <input type="text" class="form-control" name="slug" id="convert_slug" value="{{ $blog_by_id['slug'] }}">
                </div>
                <!-- End Liên kết tĩnh -->

                <!-- Giới thiệu ngắn gọn -->
                <div class="form-group">
                  <label for="subtitle" class="input-label my-input-label">Giới thiệu ngắn gọn <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Giới thiệu ngắn gọn"></i></label>

                  <input type="text" class="form-control" name="subtitle" id="subtitle" 
                  value="{{ $blog_by_id['subtitle'] }}" aria-label="Giới thiệu ngắn gọn">
                  <span class = "form-message"></span>
                </div>
                <!-- End Giới thiệu ngắn gọn -->

                <!-- Nội dung chính -->
                <div class="form-group">
                  <label class="input-label my-input-label">Nội dung chi tiết <span class="input-label-secondary"></span></label>

                  <!-- Quill -->
                  <textarea name="content" id="ckeditor1" cols="30" rows="10" placeholder="Nội dung chi tiết">{{ $blog_by_id['content'] }}</textarea>
                  <!-- End Quill -->
                  <span class = "form-message"></span>
                </div>
                <!-- End nội dung chính -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->

            <!-- Hình minh họa -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Ảnh minh họa</h4>

                <!-- Unfold -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-sm btn-ghost-secondary" href="javascript:;" data-hs-unfold-options='{
                       "target": "#mediaDropdown",
                       "type": "css-animation"
                     }'>
                    Thêm hình ảnh từ URL <i class="tio-chevron-down"></i>
                  </a>

                  <div id="mediaDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                    <a class="dropdown-item" href="javascript:;" data-toggle="modal" data-target="#addImageFromURLModal">
                      <i class="tio-link dropdown-item-icon"></i> Thêm ảnh từ URL
                    </a>
                    <a class="dropdown-item" href="javascript:;" data-toggle="modal" data-target="#embedVideoModal">
                      <i class="tio-youtube-outlined dropdown-item-icon"></i> Nhúng video
                    </a>
                  </div>
                </div>
                <!-- End Unfold -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <div id="fancyboxGallery" class="js-fancybox row justify-content-sm-center gx-2" data-hs-fancybox-options='{
                       "selector": "#fancyboxGallery .js-fancybox-item"
                     }'>
                  <div class="col-6 col-sm-4 col-md-3 mb-3 mb-lg-5">
                    <!-- Card -->
                    <div class="card card-sm">
                      <img class="card-img-top" src="{{_WEB_ROOT.'/public/uploads/blogs/'.$blog_by_id['thumbnail']}}" alt="{{ $blog_by_id['slug'] }}">

                      <div class="card-body">
                        <div class="row text-center">
                          <div class="col">
                            <a class="js-fancybox-item text-body" href="javascript:;" data-toggle="tooltip" data-placement="top" title="View" data-src="{{_WEB_ROOT.'/public/admin/img/725x1080/img1.jpg'}}" data-caption="Image #01">
                              <i class="tio-visible-outlined"></i>
                            </a>
                          </div>

                          <div class="col column-divider">
                            <a class="text-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">
                              <i class="tio-delete-outlined"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                    <!-- End Card -->
                  </div>

                </div>
                <!-- End Gallery -->
                <!-- Dropzone -->
                <div id="attachFilesNewProjectLabel" class="js-dropzone dropzone-custom custom-file-boxed form-group">
                  <div class="dz-message custom-file-boxed-label">
                    <img class="avatar avatar-xl avatar-4by3 mb-3" src="{{_WEB_ROOT.'\public\admin\svg\illustrations\browse.svg'}}" alt="Image Description">
                    
                    <label for = "thumbnail" class="btn btn-sm btn-primary">Duyệt hình ảnh</label>

                    <input type="file" name="thumbnail" id = "thumbnail" class = "hide_input_file">
                  </div>
                  <span class="form-message"></span>
                </div>
                <!-- End Dropzone -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Hình minh họa -->
          </div>

          <div class="col-lg-4">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Body -->
              <div class="card-body">
                <!-- Chuyên mục bài viết -->
                <div class="form-group">
                  <label for="priceNameLabel" class="input-label my-input-label">Chuyên mục của bài viết</label>
  
                  <div class="input-group">
                    <table class="table table-striped table-bordered table-hover">
                      <tbody>
                        @foreach ($blog_categories_parent as $key => $value)
                          <tr>
                            <td class="custom-control custom-checkbox">
                              <input id = "cateCheckbox{{$value['id']}}" type="checkbox" name = "cateids[]" class = "custom-control-input" value="{{ $value['id'] }}" 
                              {{ in_array($value['id'], $cate_of_blog) ? 'checked' : '' }}>
                              <label class="custom-control-label" for="cateCheckbox{{$value['id']}}"
                              style="margin-left: 1rem;">
                                {{ $value['name'] }}
                              </label>
                            </td>
                            <td class="custom-radio">
                              <input id = "catright_{{$value['id']}}" style="display: none;" type="radio" name = "cateid" title = "Chủ đề chính cho bài viết" class = "custom-control-input" value="{{ $value['id'] }}"
                              {{ $value['id'] == $main_cate ? 'checked' : '' }}
                              >
                              <label class="custom-control-label my-custom-label" for="catright_{{$value['id']}}" id = "catrightLabel_{{ $value['id'] }}" 
                              {! in_array($value['id'], $cate_of_blog) ? '' : 'style="display: none"' !}></label>
                            </div>
                            </td>
                          </tr>
                          @foreach ($blog_categories_child as $ckey => $child)
                          @if ($value['id'] == $child['parent_id'])
                          <tr>
                            <td class="custom-control custom-checkbox">
                              <input id = "cateCheckbox{{$child['id']}}" type="checkbox" name = "cateids[]" class = "custom-control-input" value="{{ $child['id'] }}"
                              {{ in_array($child['id'], $cate_of_blog) ? 'checked' : '' }} >
                              <label class="custom-control-label" for="cateCheckbox{{$child['id']}}"
                               style="margin-left: 1.5rem;">
                                {{ $child['name'] }}
                              </label>
                            </td>
                            <td class="custom-radio">
                              <input id = "catright_{{$child['id']}}" type="radio" name = "cateid" title = "Chủ đề chính cho bài viết" class = "custom-control-input" value="{{ $child['id'] }}"
                              {{ $child['id'] == $main_cate ? 'checked' : '' }}
                              >
                              <label class="custom-control-label my-custom-label" for="catright_{{$child['id']}}" id = "catrightLabel_{{$child['id']}}"
                              {! in_array($child['id'], $cate_of_blog) ? '' : 'style="display: none;"' !} ></label>
                            </td>
                          </tr>
                          @endif
                          @endforeach
                        @endforeach
                      </tbody>
                    </table>
                  </div>

                  <span class="form-message"></span>
                </div>
                <!-- End Chuyên mục bài viết -->

                <!-- Mô tả -->
                <div class="form-group">
                  <label for="meta_desc" class="input-label my-input-label">Mô tả bài viết</label>

                  <input type="text" class="form-control" name="meta_desc" id="meta_desc" value="{{ $blog_by_id['blog_meta_desc'] }}">
                </div>
                <!-- End Mô tả -->

                <!-- Key word -->
                <div class="form-group">
                  <label for="meta_keyword" class="input-label my-input-label">Các từ khóa cho bài viết</label>

                  <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" value="{{ $blog_by_id['blog_meta_keywords'] }}">
                </div>
                <!-- End Key word -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Body -->
              <div class="card-body">
                <!-- Tác giả -->
                <div class="form-group">
                  <label for="author" class="input-label my-input-label">Tác giả</label>

                  <input type="text" class="form-control" name="author" id="author" value="{{ $blog_by_id['author'] }}">
                </div>
                <!-- End Tác giả -->

                <!-- Nguồn tin -->
                <div class="form-group">
                  <label for="resource" class="input-label my-input-label">Nguồn tin</label>

                  <input type="text" class="form-control" name="resource" id="resource" placeholder="" aria-label="">
                </div>
                <!-- End Nguồn tin -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->

          </div>
        </div>
        <!-- End Row -->

        <div class="position-fixed bottom-0 content-centered-x w-100 z-index-99 mb-3" style="max-width: 40rem;">
          <!-- Card -->
          <div class="card card-sm bg-dark border-dark mx-2">
            <div class="card-body">
              <div class="row justify-content-center justify-content-sm-between">
                <div class="col">
                  <button type="button" class="btn btn-ghost-danger">Xóa</button>
                </div>
                <div class="col-auto">
                  <button type="button" class="btn btn-ghost-light mr-2">Loại bỏ</button>
                  <button type="submit" class="btn btn-primary">Cập nhật bài viết</button>
                </div>
              </div>
              <!-- End Row -->
            </div>
          </div>
          <!-- End Card -->
        </div>
      </form>
      <!-- End Content -->

      <!-- Footer -->
      
        <div class="footer">
          <div class="row justify-content-between align-items-center">
            <div class="col">
              <p class="font-size-sm mb-0">&copy; Healthy Power <span class="d-none d-sm-inline-block">2021</span></p>
            </div>
            <div class="col-auto">
              <div class="d-flex justify-content-end">
                <!-- List Dot -->
                <ul class="list-inline list-separator">
                  <li class="list-inline-item">
                    <a class="list-separator-link" href="#">Câu hỏi</a>
                  </li>

                  <li class="list-inline-item">
                    <a class="list-separator-link" href="#">Bảo mật</a>
                  </li>

                  <li class="list-inline-item">
                    <!-- Keyboard Shortcuts Toggle -->
                    <div class="hs-unfold">
                        <i class="tio-command-key"></i>
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

                  <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-primary badge-pill"><span class="legend-indicator bg-primary"></span>"In progress"</span></p>

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

    <!-- Add Image from URL Modal -->
    <div class="modal fade" id="addImageFromURLModal" tabindex="-1" role="dialog" aria-labelledby="addImageFromURLModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h4 id="addImageFromURLModalTitle" class="modal-title">Add image from URL</h4>

            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body">
            <label for="pasteImageURLNameLabel" class="input-label my-input-label">Paste image URL</label>
            <input type="text" class="form-control" name="projectName" id="pasteImageURLNameLabel" placeholder="https://" aria-label="https://">
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
            <button type="button" class="btn btn-primary">Add media</button>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>
    <!-- End Add Image from URL Modal -->

    <!-- Embed Video Modal -->
    <div class="modal fade" id="embedVideoModal" tabindex="-1" role="dialog" aria-labelledby="embedVideoModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h4 id="embedVideoModalTitle" class="modal-title">Embed video</h4>

            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body">
            <label for="pasteVideoURLNameLabel" class="input-label my-input-label">Paste video URL</label>
            <input type="text" class="form-control" name="projectName" id="pasteVideoURLNameLabel" placeholder="https://" aria-label="https://">
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
            <button type="button" class="btn btn-primary">Add media</button>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    -</div>
    <!-- End Embed Video Modal -->

    <!-- ========== END SECONDARY CONTENTS ========== -->