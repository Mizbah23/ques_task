@extends('master')
@section('title'){{$title}}@stop

@section('link')
   <link rel="stylesheet" type="text/css" href="{{asset('public/back/vendors/css/charts/apexcharts.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('public/back/vendors/css/tables/datatable/datatables.min.css')}}">
   <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
   <link href="{{asset('public/back/css/bootstrap-fileupload.css')}}" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="{{asset('public/back/vendors/css/forms/select/select2.min.css')}}">
   <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
@stop
@section('content')
      <link rel="stylesheet" href="{{asset('public/front/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{asset('public/front/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('public/front/css/linearicons.css')}}">
<link rel="stylesheet" href="{{asset('public/front/css/flaticon.css')}}">
<!--<link rel="stylesheet" href="{{asset('public/front/css/simple-line-icons.css')}}">-->
<style>
    .upimg{border: 1px solid gray;border-radius: 10px;width:180px; 
           height: 130px; line-height: 20px;}
    .picker--opened .picker__holder{width: 245px;}
    .mrgn{margin-top: -20px;} 

    .menuselect {
        padding-left: 7px;
        padding-top: 4px;
        border: 1px solid #CCCCCC;
        border-radius:4px; padding-bottom: 31px;
    }

</style>

<!-- *****************************add model**********************************-->
<div class="modal fade addMdl" id="exampleModalScrollable" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
            
    <div class="modal-header bg-info">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
                                                     
    <div class="modal-body" style="padding-top: 23px;">
        <form method="post"  id="addFrm" enctype="multipart/form-data"> 
                <div class="row">
                    <div class="col-md-6 col-xl-6">
                  
                        <div class="form-group checkmail">
                            <label for="first-name-icon">Title</label> 
                             <input type="text" class="form-control" name="title" placeholder="Enter title">
                            <div class="valid-feedback"></div><div class="invalid-feedback eitxt"></div>
                        </div>

                     

                    {{csrf_field()}}
                    </div> 
                     
                </div>
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                         <div class="form-group">
                        <label for="first-name-icon">Description :</label>
                        <textarea name="details" id ="details"  cols="150" placeholder="Description"></textarea>
                        </div> 
                    </div>

               </div>
      
    </div>
    <div class="modal-footer">
        <button type="reset" class="btn btn-outline-warning  waves-effect waves-light">Reset</button>
        <button type="submit" class="btn btn-outline-info  waves-effect waves-light">Save
            <span class="addbtn" role="status" aria-hidden="true"></span> 
        </button>
         </form>
    </div>
   
    </div>
            </div>
</div>

<!-- *****************************edit model**********************************-->
<div class="modal fade upMdl" id="exampleModalScrollable" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
            
    <div class="modal-header bg-info">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
                                                     
    <div class="modal-body" style="padding-top: 23px;">
        <form method="post"  id="upFrm" enctype="multipart/form-data"> 
            <input type="hidden" name="id" id="id">
            <input type="hidden" name="oldimg" id="oldimg">
                <div class="row">
                    <div class="col-md-6 col-xl-6">
                  
                        <div class="form-group checkmail">
                            <label for="first-name-icon">Title</label> 
                             <input type="text" class="form-control" name="utitle" id="utitle"  placeholder="Enter news Title">
                            <div class="valid-feedback"></div><div class="invalid-feedback eitxt"></div>
                        </div>
                        
                        

                   
                    {{csrf_field()}}
                    </div> 
                           
                </div>
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                         <div class="form-group">
                        <label for="first-name-icon">Description :</label>
                        <textarea name="udetails" id ="udetails"   placeholder="Description"></textarea>
                        </div> 
                    </div>

               </div>
      
    </div>
    <div class="modal-footer">
        <button type="reset" class="btn btn-outline-warning  waves-effect waves-light">Reset</button>
        <button type="submit" class="btn btn-outline-info  waves-effect waves-light">Update
            <span class="addbtn" role="status" aria-hidden="true"></span> 
        </button>
         </form>
    </div>
   
    </div>
            </div>
</div>

<!-- *****************************delete model**********************************-->









<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="padding-top:3px;">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a>
                        </li>
<!--                                    <li class="breadcrumb-item"><a href="#">Components</a>
                        </li>-->
                         <li class="breadcrumb-item active"> <span class="badge badge-primary">Service</span>
                        </li>
                        
                    </ol>

                    {{-- <button type="button" class="openAdd btn-sm btn-primary waves-effect waves-light" data-toggle="modal">
                    <i class="feather icon-plus-circle"></i> Service
                    </button> --}}
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard" style="padding-top: 0px;">
                        <div class="table-responsive">
                            <table id="userTbl" class="table zero-configuration ">
                                <thead>
                                    <tr style="background-color: #7367F0;color:white;">
                                        <th>Title</th>
                                        <th>Service Details</th>                                
                                        <th>Created</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>           
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@stop
@section('script')
  <script src="{{asset('public/back/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
    <script src="{{asset('public/back/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
    <script src="{{asset('public/back/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('public/back/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{asset('public/back/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
    <script src="{{asset('public/back/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
    <script src="{{asset('public/back/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('public/back/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/back/js/scripts/datatables/datatable.js')}}"></script>


<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

<script type="text/javascript" src="{{asset('public/back/js/bootstrap-fileupload.js')}}"></script>
 <script src="{{asset('public/back/vendors/js/forms/select/select2.full.min.js')}}"></script>
 <script src="{{asset('public/back/js/scripts/forms/select/form-select2.js')}}"></script>
 <script>

//    $("#day_id").select2({
//    maximumSelectionLength: 1
//});
CKEDITOR.replace('details');
CKEDITOR.replace('udetails');
    $(document).ready(function()
    {
       $('.nw').addClass('active');
       countslot();
       
    });
    $(function () {
        $('.timepicker').timepicker({
         showInputs: false
       });
     });
    var table = $('#userTbl').DataTable(
    {
        "responsive" : true,"autoWidth"  : false,
        "processing" : true,"serverSide": true,
        "ajax":{"url":"{{route('list.service')}}","dataType":"json",
            "type":"POST","data": function ( d )
            {d._token= $('meta[name="csrf-token"]').attr('content');}},
        "columns":[
        {"data":"title"},
        {"data":"details"},
        {"data":"created_by"},
        {"data":"created_at"},
        {"data":"action","searchable":false,"orderable":false}
    ],
        "order": [[1, 'desc']]   
});



//slot saving
$(document).on('click', '.openAdd', function()
{
    document.getElementById("addFrm").reset();
    $('.sClass').removeClass('is-valid');
    $('.eClass').removeClass('is-valid');
    $('.addMdl').modal('show');
    
});   
$("#addFrm").on('submit',function(event)
{  
    event.preventDefault();
    $('.addbtn').addClass('spinner-border spinner-border-sm');
    var formData = new FormData(this);
    formData.append('details', CKEDITOR.instances['details'].getData());
    $.ajax({
        type: 'POST',
        url: "{{route('save.service')}}",
        data:formData,
        dataType:'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success:function(data)
        {
            table.ajax.reload( null, false );
            $('.addMdl').modal('hide');
            toastr[data.type](data.message);
            document.getElementById("addFrm").reset();
            $('.addbtn').removeClass('spinner-border spinner-border-sm');
        }
    });
});   



$(document).on('click', '.editmdl', function()
{
    document.getElementById("upFrm").reset();
    $('#id').val($(this).data('pid'));
    $('#utitle').val($(this).data('pttl'));
    $('#usubtitle').val($(this).data('plink'));
    $('#udetails').val($(this).data('dtl'));
    CKEDITOR.instances['udetails'].setData($(this).data('dtl'));
    $('#oldimg').val($(this).data('pimg'));
    $('.oldimg').attr('src',$(this).data('pimg'));
    $('.upMdl').modal('show');
}); 
$("#upFrm").on('submit',function(event)
{  
    event.preventDefault();
    $('.upbtn').addClass('spinner-border spinner-border-sm');
    var formData = new FormData(this);
    formData.append('udetails', CKEDITOR.instances['udetails'].getData());
    $.ajax({type: 'POST',
        url: "{{route('update.service')}}",data:formData,
        dataType:'JSON',contentType: false,
        cache: false,processData: false,
        success:function(data)
        {
            table.ajax.reload( null, false );
            $('.upMdl').modal('hide');
            toastr[data.type](data.message);
            document.getElementById("upFrm").reset();
            $('.upbtn').removeClass('spinner-border spinner-border-sm');
        }
    });
    
});
$(document).on('click', '.csts', function()
{
    $.ajax({
      type: 'POST',url: "",
      data: {
        _token: $('meta[name="csrf-token"]').attr('content'),
        id: $(this).data('id'),sts: $(this).data('sts')},
      success: function(data){
      table.ajax.reload( null, false );
      toastr[data.type](data.message);}
    });
});
$(document).on('click', '.delmdl', function()
{
    $('.delbtn').removeClass('spinner-border spinner-border-sm');
    $('#did').val($(this).data('did'));
    $('.ttl').html($(this).data('ttl'));
    $('.delMdl').modal('show');
}); 

$("#delCategory").on('click',function(event)
{ 
    $('.delbtn').addClass('spinner-border spinner-border-sm');
    $.ajax({
      type: 'POST',
      url: "",
      data: {
        _token: $('meta[name="csrf-token"]').attr('content'),
        did: $('#did').val()
      },
      success: function(data){
         table.ajax.reload( null, false );
         $('.delMdl').modal('hide');
         toastr[data.type](data.message);
      }
    });
});


</script>

{{-- <script>

    $(document).ready(function()
    {
       $('.catmnu').addClass('active');
        
    });
    var table = $('#userTbl').DataTable(
    {
        "responsive" : true,
        "autoWidth"  : false,
//        "ordering": false,
//        "paging" : true,
        "processing" : true,"serverSide": true,
//        "columnDefs": [{ responsivePriority: 1, targets: 0 }],
        "ajax":
            {
                "url":"<?= route('list.about') ?>",
                "dataType":"json",
                "type":"POST",
                "data": function ( d )
                {
                    d._token= $('meta[name="csrf-token"]').attr('content');
                }
            },
        "columns":[
        {"data":"a"},{"data":"b"},{"data":"c"},{"data":"d"},{"data":"e","searchable":false,"orderable":false}
    ],
        "order": [[0, 'asc']]   
});
//******************************add*********************************************
$(".addnew").on('click',function()
{
    $('.addbtn').removeClass('spinner-border spinner-border-sm');
    document.getElementById("addForm").reset();
    $('.addModel').modal('show');
});

$("#addForm").on('submit',function(event)
{ 
    $('.addbtn').removeClass('spinner-border spinner-border-sm');
    event.preventDefault();
    $('.addbtn').addClass('spinner-border spinner-border-sm');
    var formData = new FormData(this);
    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
    $.ajax({
        type: 'POST',
        url: "{{route('save.about')}}",
        data:formData,
        dataType:'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success:function(data)
        {
            console.log(data);
            table.ajax.reload( null, false );
            $('.addModel').modal('hide');
            toastr[data.type](data.message);
            document.getElementById("addForm").reset();
            $('.addbtn').removeClass('spinner-border spinner-border-sm');
        }
    });
});
//******************************edit*********************************************
$(document).on('click', '.editmdl', function()
{
    $('.upbtn').removeClass('spinner-border spinner-border-sm');
    document.getElementById("upForm").reset();
    $('#uname').val($(this).data('nm'));
    $('#cid').val($(this).data('cid'));$('#oldimg').val($(this).data('cimg'));
    $('.oldimg').attr('src',$(this).data('cimg'));
    $('#uicon').val($(this).data('icn')); $('#uicon').trigger('change');
    $('.upModel').modal('show');
});
$("#upForm").on('submit',function(event)
{ 
    event.preventDefault();
    var formData = new FormData(this);
    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
    $('.upbtn').addClass('spinner-border spinner-border-sm');
    $.ajax({
        type: 'POST',
        url: "{{route('update.about')}}",
        data:formData,
        dataType:'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success:function(data)
        {
            table.ajax.reload( null, false );
            $('.upModel').modal('hide');
            toastr[data.type](data.message);
            document.getElementById("upForm").reset();
            $('.upbtn').removeClass('spinner-border spinner-border-sm');
        }
    });
});





$(document).on('keyup', '#checkmail', function()
{
    check("email",$(this).val(),".checkmail");
}); 
$(document).on('keyup', '#checkphn', function()
{
    check("phone",$(this).val(),".checkphn");
});
$(document).on('keyup', '#ucheckmail', function()
{
    var id = $('#adminid').val();
    check("email",$(this).val(),".ucheckmail",id);
}); 
$(document).on('keyup', '#ucheckphn', function()
{
    var id = $('#adminid').val();
    check("phone",$(this).val(),".ucheckphn",id);
});

$(document).on('click', '.csts', function()
{
    $.ajax({
      type: 'POST',url: "",
      data: {
        _token: $('meta[name="csrf-token"]').attr('content'),
        cid: $(this).data('cid'),sts: $(this).data('sts')},
      success: function(data){
      table.ajax.reload( null, false );
      toastr[data.type](data.message);}
    });
});

$(document).on('click', '.delbs', function()
{
    toastr.info('Are you sure you want to delete this Supplier <b>'+$(this).data('ttl')+'</b>?<br /><br /><button type="button" data-did="'+$(this).data('did')+'" class="btn-sm btn-danger clear condel">Confirm</button>');
});
$(document).on('click', '.condel', function()
{
    $.ajax({type: 'POST',url: "{{route('del.about')}}",
    data: {_token: $('meta[name="csrf-token"]').attr('content'),did : $(this).data('did')},
    success: function(data){
    toastr[data.type](data.message);table.ajax.reload( null, false );countslot();}
    });
}); 


</script> --}}
@stop
