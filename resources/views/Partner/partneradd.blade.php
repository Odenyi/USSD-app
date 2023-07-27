@extends('layouts.master')

@section('mainbody')
  

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
	<div class="container-full">
	  <!-- Content Header (Page header) -->
	  <div class="content-header">
		  <div class="d-flex align-items-center">
			  <div class="mr-auto">
				  <h3 class="page-title">Partner Add</h3>
				  <div class="d-inline-block align-items-center">
					  <nav>
						  <ol class="breadcrumb">
							  <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
							  <li class="breadcrumb-item" aria-current="page">Partner</li>
							  <li class="breadcrumb-item active" aria-current="page">Partner Add</li>
						  </ol>
					  </nav>
				  </div>
			  </div>
			  <div class="right-title">
				  <div class="dropdown">
					  <button class="btn btn-outline dropdown-toggle no-caret" type="button" data-toggle="dropdown"><i class="mdi mdi-dots-horizontal"></i></button>
					  <div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="#"><i class="mdi mdi-share"></i>Activity</a>
						<a class="dropdown-item" href="#"><i class="mdi mdi-email"></i>Messages</a>
						<a class="dropdown-item" href="#"><i class="mdi mdi-help-circle-outline"></i>FAQ</a>
						<a class="dropdown-item" href="#"><i class="mdi mdi-settings"></i>Support</a>
						<div class="dropdown-divider"></div>
						<button type="button" class="btn btn-rounded btn-success">Submit</button>
					  </div>
					</div>
			  </div>
		  </div>
	  </div>	  

	  <!-- Main content -->
	  <section class="content">

	   <!-- Basic Forms -->
		<div class="box">
		  <div class="box-header with-border">
			<h4 class="box-title">Partner Add</h4>
			@include('compenents.flashmessage')
		  </div>
		  <!-- /.box-header -->
		  <div class="box-body">
			<div class="row">
			  <div class="col">
				  <form action="{{ route('partneradd')  }}" method="POST">
					@csrf
					<div class="row">
					  <div class="col-12">						
						  <div class="form-group">
							  <h5>Enter User name<span class="text-danger">*</span></h5>
							  <div class="controls">
								  <input type="text" name="name" class="form-control"  value='{{ old("name")}}' required data-validation-required-message="This field is required"> </div>
							  <div class="form-control-feedback"><small>Enter Name.</small></div>
						  </div>
						  <div class="form-group">
							  <h5>Phone number<span class="text-danger">*</span></h5>
							  <div class="controls">
								  <input type="number" name="phone" value='{{ old("phone")}}' class="form-control" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="No Characters Allowed, Only Numbers"> </div>
						  </div>

						  <div class="form-group">
							  <h5>Email <span class="text-danger">*</span></h5>
							  <div class="controls">
								  <input type="email" name="email" value='{{ old("email")}}' class="form-control" required data-validation-required-message="This field is required"> </div>
						  </div>
						  <div class="form-group">
							  <h5>Partner<span class="text-danger">*</span></h5>
							  <div class="controls">
								  <input type="text" name="Company" class="form-control" value='{{ old("Company")}}' required data-validation-required-message="This field is required"> </div>
							  <div class="form-control-feedback"><small>Partner.</small></div>
						  </div>
						  <div class="form-group">
							  	<h5>User Privilege <span class="text-danger">*</span></h5>
							  <div class="controls">
								  <select name="userpriviledge" id="select" required class="form-control">
									  <option value="">Select User Priviledges</option>
									 
									  <option value="1" {{ old("userpriviledge") == "1"?"selected":" " }} >Admin</option>
									  <option value="2" {{ old("userpriviledge") == "2"?"selected":" " }} >Partner Admin</option>
									  <option value="3" {{ old("userpriviledge") == "3"?"selected":" " }} >Partner User</option>
									 
									  
								  </select>
							  </div>
						  </div>
						  <div class="form-group">
							  <h5>Password Input Field <span class="text-danger">*</span></h5>
							  <div class="controls">
								  <input type="password" name="password" value='{{ old("password")}}' class="form-control" required data-validation-required-message="This field is required"> </div>
						  </div>
						
						  <div class="form-group">
							  <h5>Repeat Password Input Field <span class="text-danger">*</span></h5>
							  <div class="controls">
								  <input type="password" name="password_confirmation" value='{{ old("password_confirmation")}}' data-validation-match-match="password" class="form-control" required> </div>
						  </div>
						
					  </div>
					  
					</div>
					 
					  <div class="text-xs-right">
						  <button type="submit" class="btn btn-rounded btn-info">Submit</button>
					  </div>
				  </form>

			  </div>
			  <!-- /.col -->
			</div>
			<!-- /.row -->
		  </div>
		  <!-- /.box-body -->
		</div>
		<!-- /.box -->

	  </section>
	  <!-- /.content -->
	</div>
</div>
<!-- /.content-wrapper -->
 
@endsection