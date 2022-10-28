{{-- @extends('master')
@section('title'){{$title}}@stop

@section('link')
   <link rel="stylesheet" type="text/css" href="{{asset('public/back/vendors/css/charts/apexcharts.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('public/back/vendors/css/tables/datatable/datatables.min.css')}}">
   <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
   <link href="{{asset('public/back/css/bootstrap-fileupload.css')}}" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="{{asset('public/back/vendors/css/forms/select/select2.min.css')}}">
@stop
@section('content')
      <link rel="stylesheet" href="{{asset('public/front/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{asset('public/front/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('public/front/css/linearicons.css')}}">
<link rel="stylesheet" href="{{asset('public/front/css/flaticon.css')}}">
<!--<link rel="stylesheet" href="{{asset('public/front/css/simple-line-icons.css')}}">-->
<style>
    .upimg{
        border: 1px solid gray;
        border-radius: 10px;
        width:100%; 
        height: 200px; 
        line-height: 20px;
    }

    .menuselect {
        padding-left: 7px;
        padding-top: 4px;
        border: 1px solid #CCCCCC;
        border-radius:4px; padding-bottom: 31px;
    }

</style>

<!-- *****************************add model**********************************-->
<div class="modal fade text-left addModel"  role="dialog" aria-labelledby="myModalLabel130" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info white">
                <h5 class="modal-title" id="myModalLabel130" style="text-align: center;">Add New Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            
                <div class="modal-body" style="padding-top: 23px;">
                     <form method="post" id="addForm"  enctype="multipart/form-data">   
                         <div class="row">
 
                             <div class="col-md-12 col-xl-12">
                                 <div class="form-group">
                                     <label for="first-name-icon">Category Name</label>
                                     <input type="text"  class="form-control" name="name" required="" placeholder="Category Name">
                                 </div>
                             </div>
                         </div>
                    
        </div> 
            <div class="modal-footer">
                <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                <button type="submit" class="btn btn-outline-info mr-1 mb-1 waves-effect waves-light">
                    Save <span class="addbtn" role="status" aria-hidden="true"></span>
                </button>
            </div>
        </form>
           
        </div>
    </div>
</div>

<!-- *****************************edit model**********************************-->
<div class="modal fade text-left upModel"  role="dialog" aria-labelledby="myModalLabel130" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success white">
                <h5 class="modal-title" id="myModalLabel130" style="text-align: center;">Update Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            
                <div class="modal-body" style="padding-top: 23px;">
                     <form method="post" id="upForm"  enctype="multipart/form-data">   
                         <div class="row">
                             <input type="hidden" name="cid" id="cid">
                             <input type="hidden" name="oldimg" id="oldimg">
                             <div class="col-md-12 col-xl-12">
                                 <div class="form-group">
                                     <label for="first-name-icon">Category Name</label>
                                     <input type="text"  class="form-control" name="uname" required="" id="uname" placeholder="Category Name">
                                 </div>
                             </div>
                         </div>
                    
        </div> 
            <div class="modal-footer">
                <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                <button type="submit" class="btn btn-outline-success mr-1 mb-1 waves-effect waves-light">
                    Update <span class="upbtn" role="status" aria-hidden="true"></span>
                </button>
            </div>
        </form>
           
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
                         <li class="breadcrumb-item active"> <span class="badge badge-primary">Category Management</span>
                        </li>
                        
                    </ol>

                    <button type="button" class="addnew btn-sm btn-primary waves-effect waves-light" data-toggle="modal">
                    <i class="feather icon-plus-circle"></i> new category
                    </button>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard" style="padding-top: 0px;">
                        <div class="table-responsive">
                            <table id="userTbl" class="table zero-configuration ">
                                <thead>
                                    <tr style="background-color: #003366;color:white;">
                                        <th>ID</th>
                                        <th>Category</th>
                                        <th>Created</th>
                                        <th>Status</th>
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
                "url":"<?= route('list.categories') ?>",
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
        url: "{{route('save.category')}}",
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
        url: "{{route('update.category')}}",
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
      type: 'POST',url: "{{route('sts.category')}}",
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
    toastr.info('Are you sure you want to delete this Category <b>'+$(this).data('ttl')+'</b>?<br /><br /><button type="button" data-did="'+$(this).data('did')+'" class="btn-sm btn-danger clear condel">Confirm</button>');
});
$(document).on('click', '.condel', function()
{
    $.ajax({type: 'POST',url: "{{route('del.category')}}",
    data: {_token: $('meta[name="csrf-token"]').attr('content'),did : $(this).data('did')},
    success: function(data){
    toastr[data.type](data.message);table.ajax.reload( null, false );countslot();}
    });
}); 


</script>
@stop
 --}}