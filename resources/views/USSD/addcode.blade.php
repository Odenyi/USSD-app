@extends('layouts.master')

@section('mainbody')
  
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
	<div class="container-full">
	  <!-- Content Header (Page header) -->
	  <div class="content-header">
		  <div class="d-flex align-items-center">
			  <div class="mr-auto">
				  <h3 class="page-title">Add USSD Code</h3>
				  <div class="d-inline-block align-items-center">
					  <nav>
						  <ol class="breadcrumb">
							  <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
							  <li class="breadcrumb-item" aria-current="page">USSD</li>
							  <li class="breadcrumb-item active" aria-current="page">USSD Code</li>
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
			<h4 class="box-title">Add Code</h4>
			@if (session()->has('error'))
				<div class="alert alert-danger">
				{{session('error')}}
				</div>
			@endif

			@if (session()->has('success'))
				<div class="alert alert-success">
				{{session('success')}}
				</div>
			@endif
		
		  </div>
		  <!-- /.box-header -->
		  <div class="box-body">
			<div class="row">
			  <div class="col">
				  <form action="{{ route('addcode') }}"  method="POST">
				  @csrf
					<div class="row">
					  <div class="col-12">	
					  	
						  
						  <div class="form-group">
							  <h5>USSD String <span class="text-danger">*</span></h5>
							  <input type="number" name="code" value="{{old('code')}}" class="form-control" required data-validation-required-message="This field is required" max="999">
							  <div class="form-control-feedback"> <small><i>Must be 3 digits</i></small> </div>
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