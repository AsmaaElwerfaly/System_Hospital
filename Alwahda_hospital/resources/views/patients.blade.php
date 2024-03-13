@extends('layouts.master')
@section('title')
						
إضافة ملف المريض
					@stop
					
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">  اضافة ملف المريض</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0"></span>
						</div>
					</div>
				
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
					
					
					@section('content')
					
						@if (session()->has('Add'))
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>{{ session()->get('Add') }}</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						@endif
					
						<!-- row -->
						<div class="row">
					
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-body">
										<form action="{{route('patients.store')}}" method="post" enctype="multipart/form-data"
											autocomplete="off">
											{{ csrf_field() }}
											{{-- 1 --}}
					
											<div class="row">
												

												<div class="col">
													<label for="inputName" class="control-label">    اسم المريض بالكامل </label>
													<input type="text" class="form-control" id="inputName" name="name" autocomplete="off"
														title="يرجي ادخال  اسم المريض" required>
												</div>


												<div class="col">
													
													<label for="inputName" class="control-label">القسم</label>
													<select class='form-control' name='sections_id' required>
														<!--placeholder-->
													
														<option value="" selected disabled>حدد القسم</option>
														@foreach ($sections as $section)
															<option value="{{ $section->id }}"> {{ $section->name }}</option>
														@endforeach
														</select>
												</div>



												<div class="col">
													<label>تاريخ الدخول</label>
													<input class="form-control fc-datepicker" name="dateofentry" placeholder="YYYY-MM-DD"
														type="text" value="{{ date('Y-m-d') }}" required>
												</div>
					
											
					
											</div><br>
					
											{{-- 2 --}}
											<div class="row">

												
												<div class="col">
													<label for="inputName" class="control-label">    العمر   </label>
													<input type="text" class="form-control" id="inputName" name="age"
														title="يرجي ادخال العمر " required>
												</div>

												

												<div class="col">
													<label for="inputName" class="control-label">    ذكر/أنثى  </label>
													<select class='form-control' name='Gender' required>
														<option value="" selected>اختار من القائمة</option>
														<option value="ذكر">ذكر</option>
														<option value="انثى">انثى</option>
													</select>
												</div>

												

												<div class="col">
													<label for="inputName" class="control-label">    متزوج/أعزب  </label>
													<select class='form-control' name='maritalstatus' required>
														<option value="" selected>اختار من القائمة</option>
														<option value="اعزب">اعزب</option>
														<option value="متزوج">متزوج</option>
													</select>
												</div>






					
												
												<div class="col">
													<label for="inputName" class="control-label">    المهنة   </label>
													<input type="text" class="form-control" id="inputName" name="job"
														title="يرجي ادخال المهنة " required>
												</div>
											</div><br>
												<div class="row">
													
												<div class="col">
													<label for="inputName" class="control-label">    رقم الهاتف   </label>
													<input type="text" class="form-control" id="inputName" name="phone" autocomplete="off"
														title="يرجي ادخال رقم الهاتف" required>
												</div>

												<div class="col">
													<label for="inputName" class="control-label">    عنوان السكن </label>
													<input type="text" class="form-control" id="inputName" name="address" autocomplete="off"
														title="يرجي ادخال  عنوان السكن" required>
												</div>

												<div class="col">
													<label for="inputName" class="control-label">    اقرب الأقارب وعنوانه</label>
													<input type="text" class="form-control" id="inputName" name="family"
														title="يرجي ادخال بيانات الاقارب " required>
												</div>

												<div class="col">
													<label for="inputName" class="control-label">     رقم البطاقة الشخصية   </label>
													<input type="text" class="form-control" id="inputName" name="idcard"
														title="يرجي ادخال رقم البطاقة الشخصية" required>
												</div>

												
												
												</div>
												
											</div>
					
					
									
												<div class="col">
													
													<label for="exampleTextarea">ملاحظات</label>
													<textarea class="form-control" id="exampleTextarea" name="note" rows="3"></textarea>
												</div>
										<br>
										<div class="col">
											<label for="inputName" class="control-label">   الحالة  </label>
											<input type="text" class="form-control" id="state" name="state" value="دخول" readonly>

										</div><br>
											<div class="col">
												<label for="inputName" class="control-label">    موظف الإستعلامات  </label>
												<input type="text" class="form-control" id="user" name="user" value="{{Auth::user()->name }}" readonly>

												
													
											</div>
											<br><br><br>
																
											<div class="d-flex justify-content-center">
												<button type="submit" class="btn btn-primary">حفظ البيانات</button>
											</div>
											<br><br>
										</div>
											
					
											
					
										</form>
									</div>
								</div>
							</div>
						</div>
					
						</div>
					
						<!-- row closed -->
						</div>
						<!-- Container closed -->
						</div>
						<!-- main-content closed -->
					@endsection
					@section('js')
						<!-- Internal Select2 js-->
						<script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
						<!--Internal Fileuploads js-->
						<script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
						<script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
						<!--Internal Fancy uploader js-->
						<script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
						<script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
						<script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
						<script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
						<script src="{{ URL::asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
						<!--Internal  Form-elements js-->
						<script src="{{ URL::asset('assets/js/advanced-form-elements.js') }}"></script>
						<script src="{{ URL::asset('assets/js/select2.js') }}"></script>
						<!--Internal Sumoselect js-->
						<script src="{{ URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
						<!--Internal  Datepicker js -->
						<script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
						<!--Internal  jquery.maskedinput js -->
						<script src="{{ URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
						<!--Internal  spectrum-colorpicker js -->
						<script src="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js') }}"></script>
						<!-- Internal form-elements js -->
						<script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>
					
						<script>
							var date = $('.fc-datepicker').datepicker({
								dateFormat: 'yy-mm-dd'
							}).val();
					
						</script>
					
						
					
					
					
					@endsection
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection