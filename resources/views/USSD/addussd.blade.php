@extends('layouts.master')

@section('mainbody')
  
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
	<div class="container-full">
	  <!-- Content Header (Page header) -->
	  <div class="content-header">
		  <div class="d-flex align-items-center">
			  <div class="mr-auto">
				  <h3 class="page-title">USSD Mapping</h3>
				  <div class="d-inline-block align-items-center">
					  <nav>
						  <ol class="breadcrumb">
							  <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
							  <li class="breadcrumb-item" aria-current="page">USSD</li>
							  <li class="breadcrumb-item active" aria-current="page">USSD Mapping</li>
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
			<h4 class="box-title">Add USSD</h4>
		    @include('compenents.flashmessage')
		  </div>
		  <!-- /.box-header -->
		  <div class="box-body">
			<div class="row">
			  <div class="col">
				  <form action="{{ route('addussd') }}"  method="POST">
				  @csrf
					<div class="row">
					  <div class="col-12">	
					  	 <div class="form-group">
							  	<h5>USSD String <span class="text-danger">*</span></h5>
							  <div class="controls">
								  <select name="ussd_string" id="select" required class="form-control">
									  <option value="">Select USSD String</option>
									  @foreach ($ussdstrings as $ussd)
									  <option value="{{$ussd->id}}" {{ old("ussd_string") == $ussd->id ?"selected":" " }} >{{ $ussd->code  }}</option>
									  @endforeach
									  
								  </select>
							  </div>
						  </div>	
						  <div class="form-group">
							  	<h5>Partner<span class="text-danger">*</span></h5>
							  <div class="controls">
								  <select name="partner" id="select" required class="form-control">
									  <option value="">Select Partner</option>
									  <option value="1" {{ old("partner") == "1" ?"selected":" " }}>MEPP</option>
									  
								  </select>
							  </div>
						  </div>	
						  <div class="form-group">
							  <h5>Extension <span class="text-danger">*</span></h5>
							  <input type="number" name="extension" value="{{old('extension')}}" class="form-control" required data-validation-required-message="This field is required" max="9999">
							  <div class="form-control-feedback"> <small><i>Must be lower than 4 digits</i></small> </div>
						  </div>
						  <div class="form-group">
							  <h5>Enter URL <span class="text-danger">*</span></h5>
							  <div class="controls">
								  <input type="text" name="url" class="form-control" value="{{old('url')}}" placeholder="Add URL" data-validation-regex-regex="((http[s]?|ftp[s]?):\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*" data-validation-regex-message="Only Valid URL's">
								  <div class="form-control-feedback"><small>Add URL </small></div>
							  </div>
						  </div>
						  <div class="form-group">
							  <h5>Amount <span class="text-danger">*</span></h5>
							  <div class="input-group"> <span class="input-group-addon">KSH</span>
								  <input type="number" name="amount"  value="{{old('amount')}}" class="form-control" required data-validation-required-message="This field is required"> <span class="input-group-addon">.00</span> </div>
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