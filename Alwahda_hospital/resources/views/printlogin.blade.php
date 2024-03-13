@extends('layouts.master')
@section('title')
    ملف دخول المريض
@stop
@section('css')
<style>
	@media print {
		#print_Button {
			display: none;
		}
	}

</style>
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">تقارير</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ ملف دخول المريض</span>
						</div>
					</div>
					
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-12 col-xl-12">
						<div class=" main-content-body-invoice" id='print'>
							<div class="card card-invoice">
								<div class="card-body">
									<div class="invoice-header">
										<h1 class="invoice-title" >ملف المريض</h1>
										<div class="tx-center" >
											<h6 >وزارة الصحة</h6>
											<p>مستشفى الوحدة العلاجي التعليمي درنة<br>
											<br>
											</p>
										</div><!-- billed-from -->
									</div><!-- invoice-header -->
									<div class="row mg-t-20">
										
										<div class="col-md">
											<title style="align-: center">ملف دخول المريض</title>
											<p class="invoice-info-row"><span>تاريخ الدخول</span> <span>{{$patients->dateofentry}}</span></p>
											<p class="invoice-info-row"><span>اسم المريض</span> <span>{{$patients->name}}</span></p>
											<p class="invoice-info-row"><span>اسم القسم</span> <span>{{$patients->sections->name}}</span></p>

											<p class="invoice-info-row"><span>العمر</span> <span>{{$patients->age}}</span></p>
                                            <p class="invoice-info-row"><span>اقرب الاقارب وعنوانه</span> <span>{{$patients->family}}</span></p>
                                            <p class="invoice-info-row"><span>رقم الهاتف  </span> <span>{{$patients->phone}}</span></p>
                                            <p class="invoice-info-row"><span>المهنة</span> <span>{{$patients->job}}</span></p>
                                            <p class="invoice-info-row"><span>الحالة الإجتماعية</span> <span>{{$patients->maritalstatus}}</span></p>
                                            <p class="invoice-info-row"><span>  الجنس</span> <span>{{$patients->Gender}}</span></p>
                                            <p class="invoice-info-row"><span>  رقم البطاقة الشخصية </span> <span>{{$patients->idcard}}</span></p>
                                            <p class="invoice-info-row"><span> الملاحظات  </span> <span>{{$patients->note}}</span></p>
                                            

										</div>
									</div>
									<div class="table-responsive mg-t-40">
										<table class="table table-invoice border text-md-nowrap mb-0"  data-page-length='50' >
											<thead>
												<tr>
                                                   
													
													<th class="tx-right" >موظف الإستعلامات </th>
                                                    <th class="tx-left"> التوقيع : </th>
                                                </tr>
                                                    <tbody>
                                                        <tr>	
                                                    <td> {{Auth::user()->name}}</td>
                                                    <td> </td>
												</tr>
											</thead>
											<tbody>
												
											</tbody>
										</table>
									</div>
									<hr class="mg-b-40">
									
									<button class="btn btn-danger  float-left mt-3 mr-2" id="print_Button" onclick="printDiv()"> <i
										class="mdi mdi-printer ml-1"></i>طباعة</button>

									
									</a>
									
								</div>
							</div>
						</div>
					</div><!-- COL-END -->
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>


<script type="text/javascript">
	function printDiv() {
		var printContents = document.getElementById('print').innerHTML;
		var originalContents = document.body.innerHTML;
		document.body.innerHTML = printContents;
		window.print();
		document.body.innerHTML = originalContents;
		location.reload();
	}

</script>
@endsection