@extends('dashboard.layouts.main')

@section('title', 'Admin Dashboard')

@section('sidebar')
 @include('dashboard.admin.sidebar')
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <h2>ADMIN DASHBOARD</h2>
        </div>
    </div>
    <!-- /. ROW  -->
    <hr/>
    <div class="row">
        <div class="col-lg-12 ">
            @isset($quote)
            <div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                {{ $quote['body'] }} - {{ $quote['author'] }}
            </div>
            @endisset
        </div>
    </div>
    <!-- /. ROW  -->
    <div class="row text-center pad-top">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="{{route('admin.teacher.list')}}" title="Teachers' list">
                    <i class="fa fa-user-circle fa-5x fa-spin"></i>
                    <h4>Teachers</h4>
                </a>
            </div>
        </div>


        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="blank.html">
                    <i class="fa fa-envelope-o fa-5x"></i>
                    <h4>Mail Box</h4>
                </a>
            </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="blank.html">
                    <i class="fa fa-lightbulb-o fa-5x"></i>
                    <h4>New Issues</h4>
                </a>
            </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="blank.html">
                    <i class="fa fa-users fa-5x"></i>
                    <h4>See Users</h4>
                </a>
            </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="blank.html">
                    <i class="fa fa-key fa-5x"></i>
                    <h4>Admin </h4>
                </a>
            </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="blank.html">
                    <i class="fa fa-comments-o fa-5x"></i>
                    <h4>Support</h4>
                </a>
            </div>
        </div>

    </div>
    <!-- /. ROW  -->

@endsection