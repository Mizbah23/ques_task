@extends('master')
@section('title'){{$title}}@stop

@section('link')
   <link rel="stylesheet" type="text/css" href="{{asset('public/back/vendors/css/tables/datatable/datatables.min.css')}}">
 
<!--   <link rel="stylesheet" type="text/css" href="{{asset('public/css/back/dataTables.checkboxes.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('public/css/back/data-list-view.css')}}">-->
{{--          <link rel="stylesheet" type="text/css" href="{{asset('public/css/select2.min.css')}}">
   <link rel="stylesheet" href="{{asset('public/css/back/bootstrap-timepicker.css')}}"> --}}
   <!--<script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>-->
   {{-- <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script> --}}
@stop
@section('content')
<style>
    .upimg{border: 1px solid gray;border-radius: 10px;width:180px; 
           height: 130px; line-height: 20px;}
    .picker--opened .picker__holder{width: 245px;}
    .mrgn{margin-top: -20px;} 
</style>

<!--***********************************addhour*******************************-->



<div class="modal fade addMdl" id="exampleModalScrollable" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
            
    <div class="modal-header bg-info">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Add Events</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
                                                     
    <div class="modal-body" style="padding-top: 23px;">
        <form method="post"  id="addFrm" enctype="multipart/form-data"> 
                <div class="row">
                    <div class="col-md-6 col-xl-6">
                  
                        <div class="form-group checkmail">
                            <label for="first-name-icon">Event Title</label> 
                             <input type="text" class="form-control" name="title" placeholder="Enter event title">
                            <div class="valid-feedback"></div><div class="invalid-feedback eitxt"></div>
                        </div>

                        <div class="form-group checkmail">
                            <label for="first-name-icon">Event Location</label> 
                             <input type="text" class="form-control" name="location" placeholder="Enter event location" autocomplete="off">
                            <div class="valid-feedback"></div><div class="invalid-feedback eitxt"></div>
                        </div>

                        <div class="form-group link">
                            <label for="first-name-icon">Link</label> 
                             <input type="text" class="form-control" name="link" placeholder="Enter event link">
                            <div class="valid-feedback"></div><div class="invalid-feedback eitxt"></div>
                        </div>
                    {{csrf_field()}}
                    </div> 
                    <div class="col-md-6 col-xl-6">
                        <div class="form-group">
                            <label for="exampleInputFile">Cover Image *</label>
                            <div class="controls">
                                <div data-provides="fileupload" class="fileupload fileupload-new">
                                    <div  class="fileupload-new thumbnail upimg">
                                        <img alt="" class="" src="">
                                    </div>
                                    <div  class="fileupload-preview fileupload-exists upimg thumbnail"></div>
                                    <div>
                                       <span class="btn btn-sm btn-success btn-file"><span class="fileupload-new">select</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" name="post_img" class="default"></span>
                                        <a data-dismiss="fileupload" class="btn btn-sm bg-maroon fileupload-exists btn-danger" href="#">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                         <div class="form-group">
                        <label for="first-name-icon">Description :</label>
                        <textarea name="description" id ="description"  cols="150" placeholder="Description"></textarea>
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



<div class="modal fade upMdl" id="exampleModalScrollable" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
            
    <div class="modal-header bg-info">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Update Events</h5>
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
                            <label for="first-name-icon">Event Title</label> 
                             <input type="text" class="form-control" name="utitle" id="utitle"  placeholder="Enter news Title">
                            <div class="valid-feedback"></div><div class="invalid-feedback eitxt"></div>
                        </div>
                        
                        <div class="form-group checkmail">
                            <label for="first-name-icon">Event Location</label> 
                             <input type="text" class="form-control" name="ulocation" id="ulocation"  placeholder="Enter event location">
                            <div class="valid-feedback"></div><div class="invalid-feedback eitxt"></div>
                        </div>

                        <div class="form-group link">
                            <label for="first-name-icon">Link</label> 
                             <input type="text" class="form-control" name="ulink" id="ulink" placeholder="Enter Event Link">
                            <div class="valid-feedback"></div><div class="invalid-feedback eitxt"></div>
                        </div>
                    {{csrf_field()}}
                    </div> 
                    <div class="col-md-6 col-xl-6">
                        <div class="form-group">
                            <label for="exampleInputFile">Cover Image *</label>
                            <div class="controls">
                                <div data-provides="fileupload" class="fileupload fileupload-new">
                                    <div  class="fileupload-new thumbnail upimg">
                                        <img alt="" class="oldimg" src="">
                                    </div>
                                    <div  class="fileupload-preview fileupload-exists upimg thumbnail"></div>
                                    <div>
                                       <span class="btn btn-sm btn-success btn-file"><span class="fileupload-new">select</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" name="upost_img" class="default"></span>
                                        <a data-dismiss="fileupload" class="btn btn-sm bg-maroon fileupload-exists btn-danger" href="#">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                         <div class="form-group">
                        <label for="first-name-icon">Description :</label>
                        <textarea name="udetails" id ="udetails"  cols="150" placeholder="Description"></textarea>
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




<div class="modal fade delMdl" id="animation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel6" aria-modal="true">
    <div class="modal-dialog modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            
        <div class="modal-header bg-primary">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Delete Events</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <input type="hidden" value="" id="did">                                        
        <div class="modal-body">
            Are You Sure You want to delete- <span class="ttl" style="color:red;"></span>?
        </div>
        <div class="modal-footer">
            <button type="button" id="delCategory" class="btn btn-outline-danger  waves-effect waves-light">
                Delete <span class="delbtn" role="status" aria-hidden="true"></span>
            </button>
        </div>
            </div>
        </div>
</div>
<!--*************edit Hour***************-->

<!--****************************-->





<section id="basic-datatable" style="margin-top: -20px;">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    
                    
                    <h4 class="card-title">
                        <div class="row">
                            <!--<div class="col-md-3 form-group col-sm-6">-->
                                Contact List
                                <a class="openAdd" style="padding-left: 8px;">
                                    {{-- <i class="ficon feather icon-plus-circle info "></i> --}}
                                </a>

                             
                        </div>
                       
                          
                    </h4>
                    
                    
                </div>
                
                
                
                
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table id="postTbl" class="table zero-configuration ">
                                <thead>
                                    <tr style="background-color: #6966ff;color: white;">
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Sent Date</th>
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
<script src="{{asset('public/back/vendors/js/tables/datatable/datatables.min.js')}}"></script>

<script src="{{asset('public/back/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>


{{-- <script type="text/javascript" src="{{asset('public/js/back/bootstrap-fileupload.js')}}"></script>
  <script src="{{asset('public/js/select2.full.min.js')}}"></script>

<script src="{{asset('public/js/back/form-select2.min.js')}}"></script> --}}


<script src="{{asset('public/back/js/bootstrap-timepicker.js')}}"></script>



<script>
//    $("#day_id").select2({
//    maximumSelectionLength: 1
//});
// CKEDITOR.replace('description');
// CKEDITOR.replace('udetails');
    $(document).ready(function()
    {
       $('.abouts').addClass('active');
       countslot();
       
    });
    $(function () {
        $('.timepicker').timepicker({
         showInputs: false
       });
     });
    var table = $('#postTbl').DataTable(
    {
        "responsive" : true,"autoWidth"  : false,
        "processing" : true,"serverSide": true,
        "ajax":{"url":"{{route('list.contact')}}","dataType":"json",
            "type":"POST","data": function ( d )
            {d._token= $('meta[name="csrf-token"]').attr('content');}},
        "columns":[
        {"data":"name"},
        {"data":"subject"},
        {"data":"email"},
        {"data":"message"},
        {"data":"created_at"},
        {"data":"sts"},
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
    formData.append('description', CKEDITOR.instances['description'].getData());
    $.ajax({
        type: 'POST',
        url: "",
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



// $(document).on('click', '.editmdl', function()
// {
//     document.getElementById("upFrm").reset();
//     $('#id').val($(this).data('pid'));
//     $('#utitle').val($(this).data('pttl'));
//     $('#ulocation').val($(this).data('loc'));
//     $('#ulink').val($(this).data('plink'));
//     $('#udetails').val($(this).data('dtl'));
//     CKEDITOR.instances['udetails'].setData($(this).data('dtl'));
//     $('#oldimg').val($(this).data('pimg'));
//     $('.oldimg').attr('src',$(this).data('pimg'));
//     $('.upMdl').modal('show');
// }); 
// $("#upFrm").on('submit',function(event)
// {  
//     event.preventDefault();
//     $('.upbtn').addClass('spinner-border spinner-border-sm');
//     var formData = new FormData(this);
//     formData.append('udetails', CKEDITOR.instances['udetails'].getData());
//     $.ajax({type: 'POST',
//         url: "",data:formData,
//         dataType:'JSON',contentType: false,
//         cache: false,processData: false,
//         success:function(data)
//         {
//             table.ajax.reload( null, false );
//             $('.upMdl').modal('hide');
//             toastr[data.type](data.message);
//             document.getElementById("upFrm").reset();
//             $('.upbtn').removeClass('spinner-border spinner-border-sm');
//         }
//     });
    
// });
$(document).on('click', '.csts', function()
{
    $.ajax({
      type: 'POST',url: "{{ route('sts.contact') }}",
      data: {
        _token: $('meta[name="csrf-token"]').attr('content'),
        id: $(this).data('pid'),sts: $(this).data('sts')},
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
      url: "{{ route('del.contact') }}",
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
@stop