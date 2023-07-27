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
				  <form action="{{ route('editpartner', ['id' => $partner->id]) }}" method="POST">
					@csrf
					<div class="row">
					  <div class="col-12">						
						  <div class="form-group">
							  <h5>Enter User name<span class="text-danger">*</span></h5>
							  <div class="controls">
								  <input type="text" name="name" class="form-control"  value='{{ old("name")?old("name"):$partner->name}}' required data-validation-required-message="This field is required"> </div>
							  <div class="form-control-feedback"><small>Enter Name.</small></div>
						  </div>
						  <div class="form-group">
							  <h5>Phone number<span class="text-danger">*</span></h5>
							  <div class="controls">
								  <input type="number" name="phone" value='{{ old("phone")?old("phone"):$partner->phone}}' class="form-control" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="No Characters Allowed, Only Numbers"> </div>
						  </div>

						  <div class="form-group">
							  <h5>Email <span class="text-danger">*</span></h5>
							  <div class="controls">
								  <input type="email" name="email" value='{{ old("email")?old("email"):$partner->email}}' class="form-control" required data-validation-required-message="This field is required"> </div>
						  </div>
						  <div class="form-group">
							  <h5>Partner<span class="text-danger">*</span></h5>
							  <div class="controls">
								  <input type="text" name="Company" class="form-control" value='{{ old("Company")?old("Company"):$partner->Company}}' required data-validation-required-message="This field is required"> </div>
							  <div class="form-control-feedback"><small>Partner.</small></div>
						  </div>
						  <div class="form-group">
							  	<h5>User Access <span class="text-danger">*</span></h5>
							  <div class="controls">
								  <select name="acceslevel" id="select" required class="form-control">
								  <option value="1" @if(old('acceslevel', $partner->acceslevel) == 1) selected @endif>Active</option>
								  <option value="2" @if(old('acceslevel', $partner->acceslevel) == 2) selected @endif>Pending</option>
								  <option value="3" @if(old('acceslevel', $partner->acceslevel) == 3) selected @endif>Suspended</option>
									 
									  
								  </select>
							  </div>
						  </div>
						  <div class="form-group">
							  	<h5>User Privilege <span class="text-danger">*</span></h5>
							  <div class="controls">
								  <select name="userpriviledge" id="select" required class="form-control">
								  <option value="1" @if(old('userpriviledge', $partner->userpriviledge) == 1) selected @endif>Admin</option>
								  <option value="2" @if(old('userpriviledge', $partner->userpriviledge) == 2) selected @endif>Partner Admin</option>
								  <option value="3" @if(old('userpriviledge', $partner->userpriviledge) == 3) selected @endif>User</option>
									 
									  
								  </select>
							  </div>
						  </div>
						  <div class="form-group">
							  <h5>Password <span class="text-danger">[Leave empty to retain the current password]</span></h5>
							  <div class="controls">
								  <input type="password" name="password" value='{{ old("password")}}' class="form-control" data-validation-required-message="This field is required"> </div>
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