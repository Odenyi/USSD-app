@extends('layouts.master')

@section('mainbody')

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	<div class="container-full">
	  <!-- Content Header (Page header) -->
	  <div class="content-header">
		  <div class="d-flex align-items-center">
			  <div class="mr-auto">
				  <h3 class="page-title">USer</h3>
				  <div class="d-inline-block align-items-center">
					  <nav>
						  <ol class="breadcrumb">
							  <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
							  <li class="breadcrumb-item" aria-current="page">User</li>
							  <li class="breadcrumb-item active" aria-current="page">User View</li>
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

		<div class="row">

			<div class="col-12">
			  <div class="box">
				  <div class="box-header">
					  <h4 class="box-title">Edit/View/Delete <strong>User</strong></h4>	
					  <h6 class="subtitle">View User </h6>
				  </div>

			<div class="box-body">
				<div class="table-responsive">
				  <table id="example1" class="table table-bordered table-separated">
					  <thead>
						  <tr>
							  
							  <th>User_name</th>
							  <th>Email</th>
							  <th>Phone</th>
							  <th>Date created</th>
							  <th>Date updated</th>
							  <th>Action</th>
							  
						  </tr>
					  </thead>
					  <tbody>
						@foreach ($users as $partner)
				
						  <tr class="partner_row">
						  <input type="hidden" class="deletepartner_class editpartner_class" value="{{$partner->id}}">
						
						 
						       <td class="partner_class" style=" display:none; ">{{$partner->Company}}</td>
							  <td class="username_class">{{$partner->name}}</td>
							  <td>{{$partner->email}}</td>
							  <td>{{$partner->phone}}</td>
							  <td>{{$partner->created_at}}</td>
							  <td>{{$partner->updated_at}}</td>
							  <td>
							  <a href="{{ route('editpartner', ['id' => $partner->id]) }}"><i class="fas fa-edit font-size-14"></i></a>
							  <a href="javascript:void(0);" class="text-danger deletepartner " 
                                            data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" 
                                            data-bs-placement="top" title="Delete">
                                            <i class="fas fa-trash-can font-size-14"></i></a>
							  </td>
						  </tr>
						@endforeach
					  </tbody>
					  <tfoot>
						  <tr>
							
							<th>User_name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Date created</th>
							<th>Date updated</th>
							<th>Action</th>
							
						  </tr>
					  </tfoot>
					</table>
				</div>
			</div>
		  </div>
		  </div> 
		
		</div>

		<div class="row">

		</div>

	  </section>
	  <!-- /.content -->
	</div>
</div>
<!-- /.content-wrapper -->

@endsection