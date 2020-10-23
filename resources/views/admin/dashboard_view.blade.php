
@extends('admin.header')

@section('title')
    Dashboard
@endsection

@section('content')
<style>
    img{
        pointer-events: none;
    }
</style>

<?php $total = json_decode($total); ?>

<!-- [ navigation menu ] end -->
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header card dashboard" style="margin: 15px 35px 10px;">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-home bg-c-blue"></i>
                        <div class="d-inline">
                            <h6>Dashboard</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class=" breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="{{ url('welcome') }}"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url('welcome') }}">Dashboard</a> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <!-- [ page content ] start -->
                        <div class="row">
                            <div class="col-xl-3 col-md-12">
                                <div class="card comp-card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-b-25">Vistors</h6>
                                                <h3 class="f-w-700 text-c-green">{{ $total->visitor }}</h3>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#"><i class="fa fa-users bg-c-green"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-12">
                                <div class="card comp-card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-b-25">Blogs</h6>
                                                <h3 class="f-w-700 text-c-blue">{{ $total->blog }}</h3>
                                            </div>
                                            <div class="col-auto">
                                                <a href="{{url('/admin/blog')}}"><i class="fa fa-clone bg-c-blue"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ page content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!-- <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>   -->
<script type="text/javascript" src="{{ asset('public/js/canvas/canvasjs.min.js') }}"></script>

<script type="text/javascript">
    window.onload = function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    }
</script>
@endsection

