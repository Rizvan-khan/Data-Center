@extends('Admin.AdminLayout.app')

@section('content')

	<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
			
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
				  <div class="col">
				      <a href="pending-order">
						  <div class="card radius-10 overflow-hidden">
							  <div class="card-body">
								  <div class="d-flex align-items-center">
									  <div>
										  <p class="mb-0">Pending Orders</p>
										  <h5 class="mb-0 text-white">0</h5>
									
									  </div>
									  <div class="ms-auto text-white">	<i class='bx bx-cart font-30'></i>
									  </div>
								  </div>
							  </div>
							  <div class="" ></div>
						  </div>
						  </a>
					  </div>
					  <div class="col">
				      <a href="approved-order">
						  <div class="card radius-10 overflow-hidden">
							  <div class="card-body">
								  <div class="d-flex align-items-center">
									  <div>
										  <p class="mb-0">Approved Orders</p>
										  <h5 class="mb-0 text-white">0</h5>
									
									  </div>
									  <div class="ms-auto text-white">	<i class='bx bx-cart font-30'></i>
									  </div>
								  </div>
							  </div>
							  <div class=""></div>
						  </div>
						  </a>
					  </div>
					  <div class="col">
				      <a href="cancel-order">
						  <div class="card radius-10 overflow-hidden">
							  <div class="card-body">
								  <div class="d-flex align-items-center">
									  <div>
										  <p class="mb-0">Cancel Orders</p>
										  <h5 class="mb-0 text-white">0</h5>
									
									  </div>
									  <div class="ms-auto text-white">	<i class='bx bx-cart font-30'></i>
									  </div>
								  </div>
							  </div>
							  <div class=""></div>
						  </div>
						  </a>
					  </div>
					  <div class="col">
				      <a href="order-delevered">
						  <div class="card radius-10 overflow-hidden">
							  <div class="card-body">
								  <div class="d-flex align-items-center">
									  <div>
										  <p class="mb-0">Delivered Orders</p>
										  <h5 class="mb-0 text-white">0</h5>
									
									  </div>
									  <div class="ms-auto text-white">	<i class='bx bx-cart font-30'></i>
									  </div>
								  </div>
							  </div>
							  <div class="" ></div>
						  </div>
						  </a>
					  </div>
					  <div class="col">
						  <div class="card radius-10 overflow-hidden">
							  <div class="card-body">
								  <div class="d-flex align-items-center">
									  <div>
										  <p class="mb-0">Total Income</p>
										 0
									  </div>
									  <div class="ms-auto text-white">	<i class='bx bx-wallet font-30'></i>
									  </div>
								  </div>
							  </div>
							  <div class="" ></div>
						  </div>
					  </div>
					  <div class="col">
					      <a href="user-profile">
						  <div class="card radius-10 overflow-hidden">
							  <div class="card-body">
								  <div class="d-flex align-items-center">
									  <div>
										  <p class="mb-0">Total Users</p>
										  <h5 class="mb-0 text-white">0</h5>
									  </div>
									  <div class="ms-auto text-white">	<i class='bx bx-group font-30'></i>
									  </div>
								  </div>
							  </div>
							  <div class="" ></div>
						  </div>
						  </a>
					  </div>
					  <div class="col">
					      <a href="manage-enquery">
						  <div class="card radius-10 overflow-hidden">
							  <div class="card-body">
								  <div class="d-flex align-items-center">
									  <div>
										  <p class="mb-0">Total Enquiries</p>
										  <h5 class="mb-0 text-white">0</h5>
									  </div>
									  <div class="ms-auto text-white">	<i class='bx bx-chat font-30'></i>
									  </div>
								  </div>
							  </div>
							  <div class=""></div>
						  </div>
						  </a>
					  </div>
				</div><!--end row-->
			  </div>
		</div>
	
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->

@endsection