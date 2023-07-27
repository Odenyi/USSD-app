@extends('layouts.master')

@section('mainbody')
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Box Color</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Box Cards</li>
								<li class="breadcrumb-item active" aria-current="page">Box Color</li>
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

			  <!--Background color!-->
			  <div class="col-12">
				<div class="box">
				  <div class="box-body">
					  <h4>Background Color</h4>
					<p>Each box can accpet <code>.box-*</code> class that <b>*</b> is a <a href="../ui/general.html" target="_blank">color name</a>. To make the color texts white, you should also add <code>.box-inverse</code> to the <em>.box</em> tag.</p>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-12">
				<div class="box box-inverse box-primary">
				  <div class="box-header with-border">
					<h4 class="box-title"><strong>Primary</strong></h4>
					<div class="box-tools pull-right">					
						<ul class="box-controls">
						  <li><a class="box-btn-close" href="#"></a></li>
						</ul>
					</div>
				  </div>

				  <div class="box-body">
					<p>Which is the same as saying through shrinking from toil and pain.</p>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-12">
				<div class="box box-inverse box-secondary">
				  <div class="box-header with-border">
					<h4 class="box-title"><strong>Secondary</strong> <small class="sidetitle">Without .box-inverse</small></h4>
					<div class="box-tools pull-right">					
						<ul class="box-controls">
						  <li><a class="box-btn-close" href="#"></a></li>
						</ul>
					</div>
				  </div>

				  <div class="box-body">
					Which is the same as saying through shrinking from toil and pain.
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-12">
				<div class="box box-inverse box-success">
				  <div class="box-header">
					<h4 class="box-title"><strong>Success</strong></h4>
					<div class="box-tools pull-right">					
						<ul class="box-controls">
						  <li><a class="box-btn-close" href="#"></a></li>
						</ul>
					</div>
				  </div>

				  <div class="box-body">
					Which is the same as saying through shrinking from toil and pain.
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-12">
				<div class="box box-inverse box-info">
				  <div class="box-header">
					<h4 class="box-title"><strong>Info</strong></h4>
					<div class="box-tools pull-right">					
						<ul class="box-controls">
						  <li><a class="box-btn-close" href="#"></a></li>
						</ul>
					</div>
				  </div>

				  <div class="box-body">
					Which is the same as saying through shrinking from toil and pain.
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-12">
				<div class="box box-inverse box-warning">
				  <div class="box-header">
					<h4 class="box-title"><strong>Warning</strong></h4>
					<div class="box-tools pull-right">					
						<ul class="box-controls">
						  <li><a class="box-btn-close" href="#"></a></li>
						</ul>
					</div>
				  </div>

				  <div class="box-body">
					Which is the same as saying through shrinking from toil and pain.
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-12">
				<div class="box box-inverse box-danger">
				  <div class="box-header">
					<h4 class="box-title"><strong>Danger</strong></h4>
					<div class="box-tools pull-right">					
						<ul class="box-controls">
						  <li><a class="box-btn-close" href="#"></a></li>
						</ul>
					</div>
				  </div>

				  <div class="box-body">
					Which is the same as saying through shrinking from toil and pain.
				  </div>
				</div>
			  </div>

			</div>	

			<div class="row">

			  <!--Solid box header!-->
			  <div class="col-12">
				<div class="box">
				  <div class="box-body">
					  <h4>Solid box header</h4>
					<p>Each box can accpet <code>.box-solid .bg-*</code> class that <b>*</b> is a color name.</p>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-12">
				<div class="box box-solid bg-primary">
				  <div class="box-header">
					<h4 class="box-title"><strong>Primary</strong></h4>
				  </div>

				  <div class="box-body">
					<p>Which is the same as saying through shrinking from toil and pain.</p>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-12">
				<div class="box box-solid bg-secondary">
				  <div class="box-header">
					<h4 class="box-title"><strong>Secondary</strong></h4>
				  </div>

				  <div class="box-body">
					Which is the same as saying through shrinking from toil and pain.
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-12">
				<div class="box box-solid bg-success">
				  <div class="box-header">
					<h4 class="box-title"><strong>Success</strong></h4>
				  </div>

				  <div class="box-body">
					Which is the same as saying through shrinking from toil and pain.
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-12">
				<div class="box box-solid bg-info">
				  <div class="box-header">
					<h4 class="box-title"><strong>Info</strong></h4>
				  </div>

				  <div class="box-body">
					Which is the same as saying through shrinking from toil and pain.
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-12">
				<div class="box box-solid bg-warning">
				  <div class="box-header">
					<h4 class="box-title"><strong>Warning</strong></h4>
				  </div>

				  <div class="box-body">
					Which is the same as saying through shrinking from toil and pain.
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-12">
				<div class="box box-solid bg-danger">
				  <div class="box-header">
					<h4 class="box-title"><strong>Danger</strong></h4>
				  </div>


				  <div class="box-body">
					Which is the same as saying through shrinking from toil and pain.
				  </div>
				</div>
			  </div>

			</div>

			<div class="row">

			  <!--Outline boxs!-->
			  <div class="col-12">
				<div class="box">
				  <div class="box-body">
					  <h4>Outline boxs</h4>
					<p>Each box can accpet <code>.box-outline-*</code> class that <b>*</b> is a color name.</p>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-12">
				<div class="box box-outline-primary">
				  <div class="box-header with-border">
					<h4 class="box-title"><strong>Primary</strong></h4>
					<div class="box-tools pull-right">					
						<ul class="box-controls">
						  <li><a class="box-btn-close" href="#"></a></li>
						</ul>
					</div>
				  </div>

				  <div class="box-body">
					<p>Which is the same as saying through shrinking from toil and pain.</p>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-12">
				<div class="box box-outline-secondary">
				  <div class="box-header with-border">
					<h4 class="box-title"><strong>Secondary</strong> <small class="sidetitle">Without .box-inverse</small></h4>
					<div class="box-tools pull-right">					
						<ul class="box-controls">
						  <li><a class="box-btn-close" href="#"></a></li>
						</ul>
					</div>
				  </div>

				  <div class="box-body">
					Which is the same as saying through shrinking from toil and pain.
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-12">
				<div class="box box-outline-success">
				  <div class="box-header">
					<h4 class="box-title"><strong>Success</strong></h4>
					<div class="box-tools pull-right">					
						<ul class="box-controls">
						  <li><a class="box-btn-close" href="#"></a></li>
						</ul>
					</div>
				  </div>

				  <div class="box-body">
					Which is the same as saying through shrinking from toil and pain.
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-12">
				<div class="box box-outline-info">
				  <div class="box-header">
					<h4 class="box-title"><strong>Info</strong></h4>
					<div class="box-tools pull-right">					
						<ul class="box-controls">
						  <li><a class="box-btn-close" href="#"></a></li>
						</ul>
					</div>
				  </div>

				  <div class="box-body">
					Which is the same as saying through shrinking from toil and pain.
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-12">
				<div class="box box-outline-warning">
				  <div class="box-header">
					<h4 class="box-title"><strong>Warning</strong></h4>
					<div class="box-tools pull-right">					
						<ul class="box-controls">
						  <li><a class="box-btn-close" href="#"></a></li>
						</ul>
					</div>
				  </div>

				  <div class="box-body">
					Which is the same as saying through shrinking from toil and pain.
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-12">
				<div class="box box-outline-danger">
				  <div class="box-header">
					<h4 class="box-title"><strong>Danger</strong></h4>
					<div class="box-tools pull-right">					
						<ul class="box-controls">
						  <li><a class="box-btn-close" href="#"></a></li>
						</ul>
					</div>
				  </div>

				  <div class="box-body">
					Which is the same as saying through shrinking from toil and pain.
				  </div>
				</div>
			  </div>

			</div>			

			<div class="row">

			  <!--Bordery boxs!-->
			  <div class="col-12">
				<div class="box">
				  <div class="box-body">
					  <h4>Bordery boxs</h4>
					<p>You are able to add borders to any side of a box. In some cases, you might want to have a 3px border in one side of a box.</p>
				  </div>
				</div>
			  </div>


			  <div class="col-md-6">
				<div class="box bl-3 border-primary">
				  <div class="box-header">
					<h4 class="box-title">Bordery <strong>left</strong></h4>
				  </div>

				  <div class="box-body">
					<p><code>.bl-3.border-primary</code></p>
					<p>Which is the same as saying through shrinking from toil and pain.</p>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6">
				<div class="box bt-3 border-info">
				  <div class="box-header">
					<h4 class="box-title">Bordery <strong>Top</strong></h4>
				  </div>

				  <div class="box-body">
					<p><code>.bt-3.border-info</code></p>
					<p>Which is the same as saying through shrinking from toil and pain.</p>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6">
				<div class="box bb-3 border-warning">
				  <div class="box-header">
					<h4 class="box-title">Bordery <strong>Bottom</strong></h4>
				  </div>

				  <div class="box-body">
					<p><code>.bb-3.border-warning</code></p>
					<p>Which is the same as saying through shrinking from toil and pain.</p>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6">
				<div class="box br-3 border-danger">
				  <div class="box-header">
					<h4 class="box-title">Bordery <strong>Right</strong></h4>
				  </div>

				  <div class="box-body">
					<p><code>.br-3.border-danger</code></p>
					<p>Which is the same as saying through shrinking from toil and pain.</p>
				  </div>
				</div>
			  </div>


			</div>	

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
 
@endsection