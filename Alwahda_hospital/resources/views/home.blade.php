@extends('layouts.master')
@section('title')

نظام الإستعلامات بمستشفى الوحدة العلاجي التعليمي درنه


@stop
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div>
						
						 
						  <p class="mg-b-0">	<span>نظام الإستعلامات  بمستشفى الوحدة العلاجي التعليمي درنه</span>
						  </div></p>
						</div>
					</div>
					
				</div>
				<!-- /breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-primary-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">اجمالي الحالات</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">
											</h4>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
											<span class="text-white op-7">100%</span>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
					
				</div>
				<!-- row closed -->
			
				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-md-12 col-lg-12 col-xl-7">
						<div class="card">
							<div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-0">نسبة احصائية الفواتير</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
			
							</div>
							
						</div>
					</div>
			
			
					<div class="col-lg-12 col-xl-5">
						<div class="card card-dashboard-map-one">
							
						</div>
					</div>
				</div>
				<!-- row closed -->
				</div>
				</div>
				<!-- Container closed -->
			@endsection
			@section('js')
				<!--Internal  Chart.bundle js -->
				<script src="{{ URL::asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>
				<!-- Moment js -->
				<script src="{{ URL::asset('assets/plugins/raphael/raphael.min.js') }}"></script>
				<!--Internal  Flot js-->
				<script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
				<script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js') }}"></script>
				<script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
				<script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js') }}"></script>
				<script src="{{ URL::asset('assets/js/dashboard.sampledata.js') }}"></script>
				<script src="{{ URL::asset('assets/js/chart.flot.sampledata.js') }}"></script>
				<!--Internal Apexchart js-->
				<script src="{{ URL::asset('assets/js/apexcharts.js') }}"></script>
				<!-- Internal Map -->
				<script src="{{ URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
				<script src="{{ URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
				<script src="{{ URL::asset('assets/js/modal-popup.js') }}"></script>
				<!--Internal  index js -->
				<script src="{{ URL::asset('assets/js/index.js') }}"></script>
				<script src="{{ URL::asset('assets/js/jquery.vmap.sampledata.js') }}"></script>
			@endsection