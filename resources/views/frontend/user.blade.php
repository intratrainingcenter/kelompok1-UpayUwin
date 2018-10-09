@extends('index_frontend')
@section('content')
	<!-- inner banner -->
	<div class="ibanner_w3 pt-sm-5 pt-3">
		<h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
			<span>f</span>ashion
			<span>h</span>ub</h4>
	</div>
	<!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- Shop -->
    <div class="innerf-pages section">
        <div class="container">
            <!-- grid right -->
            <div class="py-sm-5 py-3 right-product-grid">
                <!-- card group 2 -->
                <h5 class="shop_w3 text-capitalize">
                    User's Profile</h5>
                <!-- Profile Tabs -->
                <div class="container" style="padding-top: 60px;">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="text-center">
                            <img src="http://lorempixel.com/200/200/people/9/" class="avatar img-circle img-thumbnail" alt="avatar">
                            <h6>Upload a different photo...</h6>
                            <input type="file" class="text-center center-block well well-sm">
                        </div>
                        </div>
                        <!-- edit form column -->
                        <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
                            <div class="alert alert-info alert-dismissable">
                                <a class="panel-close close" data-dismiss="alert">×</a> 
                                <i class="fa fa-coffee"></i>
                                This is an <strong>.alert</strong>. Use this to show important messages to the user.
                            </div>
                            <h3>Personal info</h3>
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">First name:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="Jane" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Last name:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="Bishop" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Email:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="janesemail@gmail.com" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Username:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" value="janeuser" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Password:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" value="11111122333" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Confirm password:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" value="11111122333" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-8">
                                        <input class="btn btn-primary" value="Save Changes" type="button">
                                        <span></span>
                                        <input class="btn btn-default" value="Cancel" type="reset">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                <!-- End Profile -->
                </div>
        </div>
    </div>
    <!--// Shop -->
@endsection