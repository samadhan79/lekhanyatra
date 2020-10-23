
@extends('admin.header')

@section('title')
    Theme Category
@endsection

@section('content')
<!-- [ navigation menu ] end -->
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        @include('_partials.messages')
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <!-- <div class="page-header-title">
                        <i class="fa fa-list-ul bg-c-blue"></i>
                        <div class="d-inline">
                            <h6>Theme Categories</h6>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class=" breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="{{ url('admin/welcome') }}"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url('admin/blog') }}">Blogs</a> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <div class="pcoded-inner-content">
            <div class="body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <!-- [ page content ] start -->
                        <!-- <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <button type="submit" class="btn btn-primary btn-round waves-effect waves-light" data-toggle="modal" data-target="#add_modal" ><i class="fa fa-plus" style="padding-right: 10px;"></i>Add Theme Category</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- [ page content ] end -->
                    <!-- </div>
                </div>

                <div class="page-wrapper">
                    <div class="page-body"> -->
                        <!-- [ page content ] start -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="padding-header">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <h6>Blogs List</h6>
                                            </div>
                                            <div class="col-sm-4">
                                                <button type="submit" class="btn btn-primary btn-round waves-effect waves-light" data-toggle="modal" data-target="#add_modal" style="    float: right;"><i class="fa fa-plus" style="padding-right: 10px;"></i>Add Blog</button>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: -35px;padding-top: 20px;margin-top: 5px;">
                                            <div class="col-sm-5">
                                            </div>
                                            <div class="col-sm-2">
                                                <span id="total_display" style="color: #6acb7a"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="padding-block">
                                        <div class="dt-responsive table-responsive">
                                            <table id="blog_tbl" class="table table-striped table-bordered nowrap tbl_font-13">
                                                <thead>
                                                    <tr>
                                                        <th>Blog Image</th>
                                                        <th>Blog Title</th>
                                                        <th>Added At</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="blog_tbl_body">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- </div> -->

                    <div class="modal fade" id="add_modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Blog</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" id="add_blog">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Blog Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="blog_title" name="blog_title" class="form-control">
                                            </div>
                                            <span class="col-sm-3"></span>
                                            <span class="col-sm-4 error" id="error_blog_title" ></span>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Blog Description</label>
                                            <div class="col-sm-9">
                                                <textarea id="blog_desc" name="blog_desc" class="form-control" rows="5"></textarea>
                                            </div>
                                            <span class="col-sm-3"></span>
                                            <span class="col-sm-4 error" id="error_blog_desc" ></span>
                                        </div>
                                        <div class="form-group row"  >
                                            <label class="col-sm-3 col-form-label">Blog Image</label>
                                            <div class="col-sm-5">
                                                <img id="blog_pre" height = "154px" width="108px" style="object-fit:cover;display: none;" ><br/>
                                                <input type="file" id="blog_img" name="blog_img" class="form-control" onchange="readurl('blog_img','blog_pre','error_blog_img',this);">
                                            </div>
                                            <span class="col-sm-4"></span>
                                            <span class="col-sm-3"></span>
                                            <span class="col-sm-4 error" id="error_blog_img" ></span>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4"></div>
                                            <span class="col-sm-4" id="error_message" style="color: red;" ></span>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-3">
                                                <button type="submit" class="btn btn-primary btn-round waves-effect waves-light" >save</button>
                                            </div>
                                            <div class="col-sm-2">
                                                <img class="loader" style="display: none;" src="{{asset('public/assets/loader/loader.gif')}}">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Blog</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" id="edit_blog">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Blog Title</label>
                                            <div class="col-sm-9">
                                                <input type="hidden" id="blog_id_edit" name="blog_id_edit" class="form-control">
                                                <input type="text" id="blog_title_edit" name="blog_title_edit" class="form-control">
                                            </div>
                                            <span class="col-sm-3"></span>
                                            <span class="col-sm-4 error" id="error_blog_title_edit" ></span>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Blog Description</label>
                                            <div class="col-sm-9">
                                                <textarea id="blog_desc_edit" name="blog_desc_edit" class="form-control" rows="10"></textarea>
                                            </div>
                                            <span class="col-sm-3"></span>
                                            <span class="col-sm-4 error" id="error_blog_desc_edit" ></span>
                                        </div>
                                        <div class="form-group row"  >
                                            <label class="col-sm-3 col-form-label">Blog Image</label>
                                            <div class="col-sm-5">
                                                <img id="blog_pre_edit" height = "154px" width=108px style="object-fit:cover;" ><br/><br>
                                                <input type="file" id="blog_img_edit" name="blog_img_edit" class="form-control" onchange="readurl('blog_img_edit','blog_pre_edit','error_blog_img_edit',this);">
                                            </div>
                                            <span class="col-sm-4"></span>
                                            <span class="col-sm-3"></span>
                                            <span class="col-sm-4 error" id="error_blog_img_edit" ></span>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4"></div>
                                            <span class="col-sm-4" id="error_message_edit" style="color: red;" ></span>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-3">
                                                <button type="submit" class="btn btn-primary btn-round waves-effect waves-light" >save</button>
                                            </div>
                                            <div class="col-sm-2">
                                                <img class="loader" style="display: none;" src="{{asset('public/assets/loader/loader.gif')}}">
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        var blog_ids = '';
        var tbl_info;
        var tbl;

        $(document).ready(function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.changeABC').delay(3500).fadeOut('slow');

            $(".loader1").css('display','block');
            list_blog();

            $('#add_modal').on('hidden.bs.modal', function(e) {
              $(this).find('#add_blog')[0].reset();
            });

            $("#add_blog").on("submit", function (e) {
                e.preventDefault();

                var blog_img = $("#blog_img").val();
                var blog_title = $("#blog_title").val();
                var blog_desc = $("#blog_desc").val();
                
                if (blog_title == null || blog_title == "") {
                    var data = "Please enter Blog Title.";
                    $("#error_blog_title").text(data);
                    return false;
                } else {
                    $("#error_blog_title").text("");
                }

                if (blog_desc == null || blog_desc == "") {
                    var data = "Please enter Blog Description.";
                    $("#error_blog_desc").text(data);
                    return false;
                } else {
                    $("#error_blog_desc").text("");
                }

                if (blog_img == null || blog_img == "") {
                    var data = "Please choose Blog Image.";
                    $("#error_blog_img").text(data);
                    return false;
                } else {
                    $("#error_blog_img").text("");
                }

                var all_data = new FormData(this);

                all_data.append('blog_title',blog_title);
                all_data.append('blog_desc',blog_desc);

                $('.loader').css('display','block');
                $.ajax({
                    type: 'POST',
                    url: "{{ url('/admin/add_blog') }}",
                    data: all_data,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data)
                    {
                        $('.loader').css('display','none');
                        if (data == 0) {
                            $('#add_modal').modal('hide');
                            location.reload();                            
                        }
                        if (data == 1) {
                            $("#error_message").text('Server Authentication Failed Please Try Again');
                        }

                    },
                    error: function () {
                        
                    }
                });
            });

            $("#edit_blog").on("submit", function (e) {
                e.preventDefault();
                var blog_id = $("#blog_id_edit").val();
                var blog_title = $("#blog_title_edit").val();
                var blog_desc = $("#blog_desc_edit").val();

                if (blog_title == null || blog_title == "") {
                    var data = "Please enter Blog Title.";
                    $("#error_blog_title_edit").text(data);
                    return false;
                } else {
                    $("#error_blog_title_edit").text("");
                }

                if (blog_desc == null || blog_desc == "") {
                    var data = "Please enter Blog Description.";
                    $("#error_blog_desc_edit").text(data);
                    return false;
                } else {
                    $("#error_blog_desc_edit").text("");
                }

                var all_data = new FormData(this);

                all_data.append('blog_id',blog_id);
                all_data.append('blog_title',blog_title);
                all_data.append('blog_desc',blog_desc);

                $('.loader').css('display','block');
                $.ajax({
                    type: 'POST',
                    url: "{{ url('/admin/edit_blog') }}",
                    data: all_data,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data)
                    {
                        $('.loader').css('display','none');
                        if (data == 0) {
                            $('#edit_modal').modal('hide');
                            window.location.reload();                            
                        }
                        if (data == 1) {
                            $("#error_message_edit").text('Server Authentication Failed Please Try Again');
                        }

                    },
                    error: function () {
                        
                    }
                });
            });
        });

        function list_blog(){
            
            $.ajax({
               type:'POST',
               url: '{{ url("/admin/view_blog") }}',
               success:function(data){
                    var json_obj = $.parseJSON(data);
                    
                    $("#blog_tbl_body").html(json_obj.blog);
                    $('.loader1').css('display','none');
                    
                    if(json_obj.total > 0){
                        tbl = $('#blog_tbl').DataTable({
                            "searching": true,
                            "ordering": true,
                            columnDefs : [
                                { targets: [0,3], sortable: false},
                                { "type": "date", "targets": 3 }
                            ],
                            order: []
                        }).on('search.dt', function() {
                            // var value = $('.dataTables_filter input').val();
                            // if(value != ''){
                            //     tbl_info = tbl.page.info();
                            //     var msg = '';
                            //     if(tbl_info.recordsDisplay <= 1)
                            //         msg = tbl_info.recordsDisplay + ' result';
                            //     else
                            //         msg = tbl_info.recordsDisplay + ' results';

                            //     $('#total_display').text(msg);
                            // }else{
                            //     $('#total_display').text('');
                            // }
                            
                        });
                    }
               }
            });
        }

        function edit_modal(blog_id){
            var base_url = "{{url('/admin/edit_blog')}}" + '/' + blog_id;
            $.ajax({
                url: base_url,
                success:function(data){
                    
                    $('#edit_modal').modal('show');
                    
                    var json_obj = $.parseJSON(data);
                    $('#blog_title_edit').val(json_obj.blog_title);
                    $('#blog_desc_edit').val(json_obj.blog_description);
                    $('#blog_id_edit').val(json_obj.blog_id);

                    var blog_img = '{{ asset("public/storage/image") }}'+ '/' + json_obj.blog_image;
                    $('#blog_pre_edit').attr('src',blog_img);
                }
            });
            
        }
         
        function get_blog_id(blog_id){
            blog_ids = blog_id;
            swal({
                  title: "Are you sure?",
                  text: "you want to delete this Blog!",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonClass: "btn-info",
                  confirmButtonText: "Yes, delete it!",
                  cancelButtonText: "No, cancel it!",
                  closeOnConfirm: true,
                  closeOnCancel: true
                },
                function(isConfirm) {
                  if (isConfirm) {
                    $.ajax({
                       type:'POST',
                       data:{blog_id: blog_ids},
                       url: '<?php echo url('/admin/delete_blog'); ?>',
                       success:function(data){
                            window.location.reload();
                       },
                       error:function(data){
                          console.log(data);
                       }
                    });
                  } else {
                    // swal("Cancelled", "Your data is safe.", "error");
                  }
            });
        }

        function readurl(img_name,preview,error,input) {
            var fuData = document.getElementById(img_name);
            var FileUploadPath = fuData.value;
            if (FileUploadPath == '')
            {
               $('#' + preview).css('display','none');
                alert("Please upload an image");
                return false;
            } else {
                var Extension = FileUploadPath.substring(
                        FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

                if (Extension == "jpeg" || Extension == "jpg" || Extension == "png") {
                    if (fuData.files && fuData.files[0]) {
                        var reader = new FileReader();
                        $('#' + preview).css('display','block');
                        reader.onload = function (e) {
                            $('#' + preview).attr('src', e.target.result);
                        }
                        reader.readAsDataURL(fuData.files[0]);                        
                    }
                } else {
                     $('#' + preview).css('display','none');
                    var data = "Please image only allows file types of jpeg,jpg,png.";
                    $("#" + error).text(data);
                    document.getElementById(img_name).value = '';
                    return false;
                }
            }
        }

    </script>
@endsection
