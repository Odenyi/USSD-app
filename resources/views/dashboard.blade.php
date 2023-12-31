﻿
@extends('layouts.master')

@section('mainbody')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title br-0">Dashboard</h3>
				</div>
				<div class="right-title w-170">
					<span class="subheader_daterange font-weight-600" id="dashboard_daterangepicker">
						<span class="subheader_daterange-label">
							<span class="subheader_daterange-title"></span>
							<span class="subheader_daterange-date text-primary"></span>
						</span>
						<a href="#" class="btn btn-rounded btn-sm btn-primary">
							<i class="fa fa-angle-down"></i>
						</a>
					</span>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box pull-up">
						<div class="box-body">
							<div class="text-center">
								<p class="mb-0">Traffic</p>
								<h2 class="font-size-40 font-weight-700 my-0 text-primary">$45.5k</h2>
								<p class="text-fade">($17.4k Last Year)</p>
							</div>
							<div class="d-flex align-items-center justify-content-around">
								<div class="text-success">
									<i class="fa fa-arrow-up"></i> 142.11%
								</div>
								<div>
									<div id="chart-1" class="py-10"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box pull-up">
						<div class="box-body">
							<div class="text-center">
								<p class="mb-0">Purchase</p>
								<h2 class="font-size-40 font-weight-700 my-0 text-primary">$19.5k</h2>
								<p class="text-fade">($16.4k Last Year)</p>
							</div>
							<div class="d-flex align-items-center justify-content-around">
								<div class="text-danger">
									<i class="fa fa-arrow-down"></i> 12.11%
								</div>
								<div>
									<div id="chart-2" class="py-10"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box pull-up">
						<div class="box-body">
							<div class="text-center">
								<p class="mb-0">Return</p>
								<h2 class="font-size-40 font-weight-700 my-0 text-primary">$450</h2>
								<p class="text-fade">($10.4k Last Year)</p>
							</div>
							<div class="d-flex align-items-center justify-content-around">
								<div class="text-success">
									<i class="fa fa-arrow-up"></i> 42.11%
								</div>
								<div>
									<div id="chart-3" class="py-10"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box pull-up">
						<div class="box-body">
							<div class="text-center">
								<p class="mb-0">Marketing</p>
								<h2 class="font-size-40 font-weight-700 my-0 text-primary">$8.5k</h2>
								<p class="text-fade">($11.4k Last Year)</p>
							</div>
							<div class="d-flex align-items-center justify-content-around">
								<div class="text-danger">
									<i class="fa fa-arrow-down"></i> 27.11%
								</div>
								<div>
									<div id="chart-4" class="py-10"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Profit & Sales Overview</h4>
						</div>
						<div class="box-body">
							<div id="charts_widget_2_chart"></div>
							<div class="px-30 pt-30 mt-30 bt-1">
								<div class="d-lg-flex justify-content-between align-items-center">
									<div class="d-flex align-items-center">
										<div class="mr-15 h-40 w-40 l-h-50 rounded text-center">
											  <span class="icon-Library font-size-24 text-success"><span class="path1"></span><span class="path2"></span></span>
										</div>
										<div class="d-flex flex-column font-weight-500">
											<a href="#" class="hover-success font-size-16">$800</a>
											<span>Account Ballance</span>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div class="mr-15 h-40 w-40 l-h-50 rounded text-center">
											<span class="icon-Write font-size-24 text-warning"><span class="path1"></span><span class="path2"></span></span>
										</div>
										<div class="d-flex flex-column font-weight-500">
											<a href="#" class="hover-danger font-size-16">$400</a>
											<span>Ads Earning</span>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div class="mr-15 bg-white h-40 w-40 l-h-50 rounded text-center">
											<span class="icon-Group-chat font-size-24 text-primary"><span class="path1"></span><span class="path2"></span></span>
										</div>
										<div class="d-flex flex-column font-weight-500">
											<a href="#" class="hover-success font-size-16">$900</a>
											<span>Sales</span>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div class="mr-15 h-40 w-40 l-h-50 rounded text-center">
											<span class="icon-Attachment1 font-size-24 text-info"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
										</div>
										<div class="d-flex flex-column font-weight-500">
											<a href="#" class="hover-info font-size-16">$80</a>
											<span>Total Earning</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">User Traffic</h4>
						</div>
						<div class="box-body">
							<div id="charts_widget_2"></div>
							<div class="mt-30 bt-1">
								<div class="d-lg-flex justify-content-between align-items-center">
									<div>
										<h2 class="font-weight-700">35%</h2>
										<div class="d-flex align-items-center">
											<span class="badge badge-lg badge-dot bg-instagram mr-10"></span> Instagram
										</div>
									</div>
									<div>
										<h2 class="font-weight-700">22%</h2>
										<div class="d-flex align-items-center">
											<span class="badge badge-lg badge-dot bg-google mr-10"></span> Youtube
										</div>
									</div>
									<div>
										<h2 class="font-weight-700">53%</h2>
										<div class="d-flex align-items-center">
											<span class="badge badge-lg badge-dot bg-facebook mr-10"></span> Facebook
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">
								New Arrivals
							</h4>
						</div>
						<div class="box-body">
							<div class="table-responsive mb-0">
								<table class="table no-border">
									<thead>
										<tr class="text-uppercase bg-lightest">
											<th style="min-width: 250px"><span class="text-dark">products</span></th>
											<th style="min-width: 100px"><span class="text-dark">pruce</span></th>
											<th style="min-width: 100px"><span class="text-dark">deposit</span></th>
											<th style="min-width: 150px"><span class="text-dark">agent</span></th>
											<th style="min-width: 130px"><span class="text-dark">status</span></th>
											<th style="min-width: 120px"></th>
										</tr>
									</thead>
									<tbody>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(/images/gallery/creative/img-1.jpg)"></div>
													</div>

													<div>
														<a href="#" class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark font-weight-600 d-block font-size-16">
													$45,800k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark font-weight-600 d-block font-size-16">
													$45k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Sophia
												</span>
												<span class="text-dark font-weight-600 d-block font-size-16">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-primary badge-lg">Approved</span>
											</td>
											<td class="text-right">
												<a href="#" class="btn btn-primary btn-circle mx-5"><span class="icon-Bookmark"></span></a>
												<a href="#" class="btn btn-primary btn-circle mx-5"><span class="icon-Arrow-right"><span class="path1"></span><span class="path2"></span></span></a>
											</td>
										</tr>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(/images/gallery/creative/img-2.jpg)"></div>
													</div>

													<div>
														<a href="#" class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark font-weight-600 d-block font-size-16">
													$45,800k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark font-weight-600 d-block font-size-16">
													$45k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Sophia
												</span>
												<span class="text-dark font-weight-600 d-block font-size-16">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-warning badge-lg">In Progress</span>
											</td>
											<td class="text-right">
												<a href="#" class="btn btn-primary btn-circle mx-5"><span class="icon-Bookmark"></span></a>
												<a href="#" class="btn btn-primary btn-circle mx-5"><span class="icon-Arrow-right"><span class="path1"></span><span class="path2"></span></span></a>
											</td>
										</tr>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(/images/gallery/creative/img-3.jpg)"></div>
													</div>

													<div>
														<a href="#" class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark font-weight-600 d-block font-size-16">
													$45,800k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark font-weight-600 d-block font-size-16">
													$45k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Sophia
												</span>
												<span class="text-dark font-weight-600 d-block font-size-16">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-success badge-lg">Success</span>
											</td>
											<td class="text-right">
												<a href="#" class="btn btn-primary btn-circle mx-5"><span class="icon-Bookmark"></span></a>
												<a href="#" class="btn btn-primary btn-circle mx-5"><span class="icon-Arrow-right"><span class="path1"></span><span class="path2"></span></span></a>
											</td>
										</tr>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(/images/gallery/creative/img-4.jpg)"></div>
													</div>

													<div>
														<a href="#" class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark font-weight-600 d-block font-size-16">
													$45,800k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark font-weight-600 d-block font-size-16">
													$45k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Sophia
												</span>
												<span class="text-dark font-weight-600 d-block font-size-16">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-danger badge-lg">Rejected</span>
											</td>
											<td class="text-right">
												<a href="#" class="btn btn-primary btn-circle mx-5"><span class="icon-Bookmark"></span></a>
												<a href="#" class="btn btn-primary btn-circle mx-5"><span class="icon-Arrow-right"><span class="path1"></span><span class="path2"></span></span></a>
											</td>
										</tr>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(/images/gallery/creative/img-5.jpg)"></div>
													</div>

													<div>
														<a href="#" class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark font-weight-600 d-block font-size-16">
													$45,800k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark font-weight-600 d-block font-size-16">
													$45k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Sophia
												</span>
												<span class="text-dark font-weight-600 d-block font-size-16">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-warning badge-lg">In Progress</span>
											</td>
											<td class="text-right">
												<a href="#" class="btn btn-primary btn-circle mx-5"><span class="icon-Bookmark"></span></a>
												<a href="#" class="btn btn-primary btn-circle mx-5"><span class="icon-Arrow-right"><span class="path1"></span><span class="path2"></span></span></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
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
 
