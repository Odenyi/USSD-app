
@extends('layouts.master')

@section('mainbody')

  
<!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
	<div class="container-full">
	  <!-- Content Header (Page header) -->
	  <div class="content-header">
		  <div class="d-flex align-items-center">
			  <div class="mr-auto">
				  <h3 class="page-title">Editable Tables</h3>
				  <div class="d-inline-block align-items-center">
					  <nav>
						  <ol class="breadcrumb">
							  <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
							  <li class="breadcrumb-item" aria-current="page">Tables</li>
							  <li class="breadcrumb-item active" aria-current="page">Editable Tables</li>
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
					  <h4 class="box-title">Editable with <strong>Datatable</strong></h4>	
					  <h6 class="subtitle">Just click on word which you want to change and enter</h6>
				  </div>

			<div class="box-body">
				<div class="table-responsive">
				  <table id="example1" class="table table-bordered table-separated">
					  <thead>
						  <tr>
							  <th>Partner</th>
							  <th>USSD</th>
							  <th>Extension</th>
							  <th>URL</th>
							  <th>Expiry Date</th>
							  <th>Date created</th>
							  <th>Date Updated</th>
							  <th>Actions</th>
							 
							  
						  </tr>
					  </thead>
					  <tbody>
						@foreach ( $extensions as $extension)
						
						  <tr class="extension_row">
						  <input type="hidden" class="delete_class" value="{{$extension->id}}">
							  <td>{{ $extension->getuserinfo->Company }}</td>
							  <td class="code_class">{{ $extension->getcode->code }}</td>
							  <td class="extension_class">{{ $extension->extension }}</td>
							  <td>{{ $extension->url}}</td>
							  <td>{{ $extension->expiry_date }}</td>
							  <td>{{ $extension->created_at }}</td>
							  <td>{{ $extension->updated_at }}</td>
							  <td>
								<a href="{{ route('editussd', ['id' => $extension->id]) }}"><i class="fas fa-edit"></i></a>
								<a href="javascript:void(0);" class="text-danger deleteicon " 
                                            data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" 
                                            data-bs-placement="top" title="Delete">
                                            <i class="fas fa-trash-can font-size-18"></i></a>
							  </td>
						  </tr>

						  @endforeach
						
					  </tbody>
					  <tfoot>
					  <tr>
							  <th>Partner</th>
							  <th>USSD</th>
							  <th>Extension</th>
							  <th>URL</th>
							  <th>Expiry Date</th>
							  <th>Date created</th>
							  <th>Date Updated</th>
							  <th>Actions</th>
							 
							  
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

  