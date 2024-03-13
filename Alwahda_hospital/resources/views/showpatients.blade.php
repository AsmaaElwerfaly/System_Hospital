@extends('layouts.master')
@section('title')
    عرض حالات الدخول 
@stop

@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> عرض حالات الدخول </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">
                    </span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')

    






    <!-- row -->
    <div class="row">
        <!--div-->
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    

                   
                        <a class="modal-effect btn btn-sm btn-primary" href="{{ url('export_invoices') }}"
                            style="color:white"><i class="fas fa-file-download"></i>&nbsp;تصدير اكسيل</a>
                    

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example2">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">ت</th>
                                    <th class="border-bottom-0">اسم المريض</th>
                                    <th class="border-bottom-0">تاريخ الدخول</th>
                                    <th class="border-bottom-0">القسم</th>
                                    <th class="border-bottom-0">العمر</th>
                                    <th class="border-bottom-0">اقرب الاقارب وعنوانه</th>
                                    <th class="border-bottom-0">عنوان السكن</th>
                                    <th class="border-bottom-0">رقم الهاتف </th>
                                    <th class="border-bottom-0">المهنة</th>
                                    <th class="border-bottom-0">الحالة الإجتماعية</th>
                                    <th class="border-bottom-0">الجنس</th>

                                    <th class="border-bottom-0">رقم البطاقة الشخصية</th>

                                    <th class="border-bottom-0">ملاحظات</th>
                                    <th class="border-bottom-0">حالة المريض</th>

                                    <th class="border-bottom-0">موظف الاستعلامات</th>
                                    <th class="border-bottom-0">العمليات</th>

                                </tr>
                            </thead>
                            <tbody>
                                                            
                                    <tr>
                                        <?php $i =0?>
                                        @foreach($patients as $x)
                                            <?php $i++?>
                                                                                         
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $x->name }} </td>
                                        <td>{{ $x->dateofentry }}</td>
                                        <td>{{ $x->sections->name }}</td>
  

                                        <td>{{ $x->age }}</td>

                                        <td>{{ $x->family }}</td>
                                        <td>{{ $x->address }}</td>
                                        <td>{{ $x->phone }}</td>
                                        <td>{{ $x->job }}</td>
                                        <td>{{ $x->maritalstatus }}</td>
                                        <td>{{ $x->Gender}}</td>
                                        <td>{{ $x->idcard }}</td>
                                      

                                        <td>{{ $x->note }}</td>
                                        <td>{{ $x->state }}</td>
                                        <td>{{ $x->user }}</td>

                                        

                                       
                                        
                                       
                                        <td>
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true"
                                                    class="btn ripple btn-primary btn-sm" data-toggle="dropdown"
                                                    type="button">العمليات<i class="fas fa-caret-down ml-1"></i></button>
                                                <div class="dropdown-menu tx-13">
                                                   
                                                    
                                                    <a class="dropdown-item" 
                                                        href=" {{ url('editlogin') }}/{{ $x->id }}">تعديل ملف الدخول
                                                        </a>
                                                          
                                                                                                               
                                                        <a class="dropdown-item" href="printlogin/{{ $x->id }}"><i
                                                                class="text-success fas fa-print"></i>&nbsp;&nbsp; طباعة ملف الدخول
                                                            
                                                        </a>

                                                        <a class="dropdown-item" data-effect="effect-scale"
                                                        data-id="{{ $x->id }}" data-name="{{ $x->name }}" data-toggle="modal"
                                                        href="#exampleModal2" title="تعديل"><i class="las la-pen"></i>   تاريخ الخروج </a>


                                                  
                                                       
                                              
                                                   
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                              
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">إضافة تاريخ الخروج </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
        
                            <form action="patientsexit/update" method="post" autocomplete="off">
                                {{ method_field('patch') }}
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="hidden" name="id" id="id" value="">
                                    <label for="recipient-name" class="col-form-label">اسم المريض  :</label>
                                    <input class="form-control" name="name" id="name" type="text">
                                </div>
                                
                                <div class="form-group">

                                <label>تاريخ الخروج</label>
                                
													<input class="form-control fc-datepicker" name="exitdate" placeholder="YYYY-MM-DD"
														type="text" value="{{ date('Y-m-d') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">   الحالة  </label>
                            <input type="text" class="form-control" id="state" name="state" value="خروج" readonly>
                        </div>


                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">تاكيد</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        
            </div>
        </div>
        <!--/div-->
    </div>

   


    <!-- ارشيف الفاتورة -->
   

    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')

<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
<script src="{{URL::asset('assets/js/modal.js')}}"></script>

<script>
    var date = $('.fc-datepicker').datepicker({
        dateFormat: 'yy-mm-dd'
    }).val();

</script>
   

<script>
    $('#exampleModal2').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var name = button.data('name')
        var exitdate = button.data('exitdate')


        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #exitdate').val(exitdate);

    })

</script>






@endsection