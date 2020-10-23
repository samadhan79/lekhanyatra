
@extends('admin.header')

@section('title')
    Blog
@endsection

@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/css-toggle-switch@latest/dist/toggle-switch.css" />
    <style type="text/css">
    </style>
    <?php
        $blog = json_decode($blog);
        $comments = json_decode($comments);
    ?>
    <input type="hidden" name="blog_id" id="blog_id" value="{{$blog->blog_id}}">
<!-- [ navigation menu ] end -->    
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
            <div class="alert alert-success alert-dismissible fade show background-success " style="display: none;" id="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                <p id="alert_message"></p>
            </div>
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <!-- <div class="page-header-title">
                        <i class="fa fa-calendar-alt bg-c-blue"></i>
                        <div class="d-inline">
                            <h6>Event</h6>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class=" breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="{{ url('welcome') }}"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url('blog') }}">Blog</a> 
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Blog Detail</a> 
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

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card" style="padding-bottom: 15px;">
                                    <div class="padding-header">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5>Blog Details</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="padding-block">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                        <div class="col-sm-4"></div>
                                                        <label class="col-sm-4">
                                                            <img src="{{($blog->blog_image == '' || $blog->blog_image == null) ? asset('public/storage/default.png') : asset('public/storage/image') .'/' . $blog->blog_image}}" height="200px" width="140px" style="object-fit: cover;">
                                                        </label>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-6 label-bold">Blog Title</label>
                                                    <label class="col-sm-6">{{$blog->blog_title}}</label>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-6 label-bold">Created At</label>
                                                    <label class="col-sm-6">
                                                        <?php
                                                            $date = new DateTime($blog->created_at);
                                                            $date->setTimezone(new DateTimeZone(session('timezone')));
                                                            echo $date->format(env('date_formate'));
                                                        ?>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card" style="padding-bottom: 15px;">
                                    <div class="padding-header">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5>Blog Description</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="padding-block" style="height: 315px;overflow-y: scroll;">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <label class="col-sm-12" style="white-space: pre-line;">{{$blog->blog_description}}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <h4>Comments</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive">
                                            <table id="event_tbl" class="table table-striped table-bordered nowrap tbl_font-13">
                                                <thead>
                                                    <tr>
                                                        <th>User Name</th>
                                                        <th>Phone</th>
                                                        <th>Email</th>
                                                        <th>Comment</th>
                                                        <th>Added at</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="event_tbl_body">         
                                                    @if(count($comments) > 0)
                                                        @foreach($comments as $value)
                                                            <tr>
                                                                <td>{{ $value->user_name }}</td>
                                                                <td>{{ $value->user_phone }}</td>
                                                                <td>{{ ($value->user_email == null?'-':$value->user_email) }}</td>
                                                                <td><div style="white-space: pre-line;">{{ $value->comment_description }}</div></td>
                                                                <td>
                                                                    <?php
                                                                        $date = new DateTime($value->created_at);
                                                                        $date->setTimezone(new DateTimeZone(session('timezone')));
                                                                        echo $date->format(env('date_formate'));
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:void(0);" onclick="get_comment_id({{$value->comment_id}})"><button id="delete_btn" class="btn btn-fa waves-effect waves-light btn-danger btn-icon" title="Delete"><i class="fa fa-trash"></i></button></a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td colspan="6"><center> No Comment Found </center></td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- Color Open Accordion ends -->
                                </div>
                            </div>
                        </div>
                <!-- </div> -->
            </div>
        </div>
    </div>

@endsection

@section('script')

    <script type="text/javascript">
        var user_id = $('#user_id').val();
        $(document).ready(function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            @if(count($comments) > 0)
                $('#event_tbl').DataTable({
                    "searching": true,
                    "ordering": true,
                    columnDefs : [
                        { targets: [5], sortable: false},
                        { "type": "date", "targets": 4 }
                    ],
                    order: []
                });
            @endif

            // $('.loader1').css('display','block');

        });

        function get_comment_id(comment_id){
            comment_ids = comment_id;
            swal({
                  title: "Are you sure?",
                  text: "you want to delete this Comment!",
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
                            data:{comment_id: comment_ids},
                            url: '<?php echo url('/admin/delete_comment'); ?>',
                            success:function(data){
                                location.reload();
                            },
                            error:function(data){
                              console.log(data);
                            }
                        });
                    } else {
                        
                    }
            });
        }
    </script>
@endsection
