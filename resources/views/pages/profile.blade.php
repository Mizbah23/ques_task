@extends('master')
@section('title'){{$title}}@stop

@section('link')

   <link href="{{asset('public/back/css/bootstrap-fileupload.css')}}" rel="stylesheet" />


@stop
@section('content')
<style>
    .upimg{border: 1px solid gray;border-radius: 10px;width:180px; 
           height: 130px; line-height: 20px;}
    .picker--opened .picker__holder{width: 245px;}
    .mrgn{margin-top: -20px;} 
</style>

<!--***********************************addimage*******************************-->
<section id="basic-tabs-components" style="margin-top: -20px;">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card overflow-hidden">
                        
                            
                       <div class="card-content">
                                    <div class="card-body">
                                        
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="basic-tab" data-toggle="tab" href="#basic" aria-controls="basic" role="tab" aria-selected="true">
                Basic Info
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pass-tab" data-toggle="tab" href="#pass" aria-controls="pass" role="tab" aria-selected="false">
                Change Password
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="mail-tab" data-toggle="tab" href="#mail" aria-controls="phn" role="tab" aria-selected="false">
                Company Info
            </a>
        </li>
<!--        <li class="nav-item">
            <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" aria-controls="about" role="tab" aria-selected="false">About us section image</a>
        </li>-->

<!--        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile" role="tab" aria-selected="false">#</a>
        </li>-->

    </ul>
                                        
                                        
                                        
                                        
    <div class="tab-content">
                                            
        <div class="tab-pane active" id="basic" aria-labelledby="offer-tab" role="tabpanel">
            
            <form method="post" id="basicFrm" enctype="multipart/form-data"> 
                <input type="hidden" name="old_img" value="{{asset($info->image)}}" id="old_img">
            <div class="row" >  
                <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
                    <label for="basicInput"><b>Profile Image</b></label>
                    <div data-provides="fileupload" class="fileupload fileupload-new">
                            <div  class="fileupload-new thumbnail upimg">
                                <img alt="" class="old_img" src="{{asset($info->image)}}">
                            </div>
                            <div  class="fileupload-preview fileupload-exists upimg thumbnail"></div>
                            <div>
                               <span class="btn btn-sm btn-success btn-file"><span class="fileupload-new">Select</span>
                               <span class="fileupload-exists">Change</span>
                               <input type="file" name="new_img" class="default"></span>
                                <a data-dismiss="fileupload" class="btn btn-sm bg-maroon fileupload-exists btn-danger" href="#">Remove</a>
                            </div>
                        </div>  
                    </div>
                    <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
                        <label for="basicInput"><b>Name</b></label>
                            <fieldset class="form-group position-relative has-icon-left">
                            <input type="text" class="form-control" name="name" id="name" value="{{$info->name}}" placeholder="Enter Last Name">
                                <div class="form-control-position">
                                    <i class="feather icon-edit"></i>
                                </div>
                            </fieldset> 
                    </div>

                <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
                <label for="basicInput"><b>Change Email</b></label>
                    <fieldset class="form-group position-relative has-icon-left">
                      <input type="text" class="form-control" name="email" id="email" value="{{$info->email}}" required placeholder="Enter New Email Address">
                            <div class="form-control-position">
                                <i class="feather icon-mail"></i>
                            </div>
                    </fieldset>     
                </div>

               

                    {{csrf_field()}} 
                </div>
            
            <div class="row">
                <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
                    <div style="float:left;"> 
                    <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Update</button>

                    </div>   
                </div> 
            </div>
                            </form>
            
            
            
        </div>
        
        
        
        
        
        
        
        <div class="tab-pane" id="pass" aria-labelledby="pass-tab" role="tabpanel">
             <form method="post" id="passFrm" enctype="multipart/form-data"> 
            
            <div class="row" >  
                <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
                    <label for="basicInput"><b>Old Password</b></label>
                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="password" class="form-control" name="old_pass" id="old_pass" required="" placeholder="Enter Old Password">
                                <div class="form-control-position">
                                    <i class="feather icon-lock"></i>
                                </div>
                        </fieldset>     
                </div>
                <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
                    <label for="basicInput"><b>New Password</b></label>
                        <fieldset class="form-group position-relative has-icon-left">
                          <input type="password" class="form-control" name="new_pass" id="new_pass" required placeholder="Enter New Password">
                                <div class="form-control-position">
                                    <i class="feather icon-lock"></i>
                                </div>
                        </fieldset>     
                </div>
                <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
                    <label for="basicInput"><b>Confirm Password</b></label>
                        <fieldset class="form-group position-relative has-icon-left">
                          <input type="password" class="form-control" name="con_pass" id="con_pass" required placeholder="Confirm New Password">
                                <div class="form-control-position">
                                    <i class="feather icon-lock"></i>
                                </div>
                        </fieldset>     
                </div>

                    {{csrf_field()}} 
                </div>
             <div class="row">
                <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
                    <div style="float:left;"> 
                    <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Change</button>

                    </div>   
                </div> 
            </div>
                 </form>
        </div>

        <div class="tab-pane" id="mail" aria-labelledby="mail-tab" role="tabpanel">
             <form method="post" id="mailFrm" enctype="multipart/form-data"> 
            
            <div class="row" >  
                <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
                    <label for="basicInput"><b>Company Phone</b></label>
                        <fieldset class="form-group position-relative has-icon-left">
                          <input type="text" class="form-control" name="phone" id="phone" value="{{$company_info->phone}}" placeholder="Enter Company Phone">
                                <div class="form-control-position">
                                    <i class="feather icon-phone"></i>
                                </div>
                        </fieldset>     
                </div>
                <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
                    <label for="basicInput"><b>Company Mail</b></label>
                        <fieldset class="form-group position-relative has-icon-left">
                          <input type="text" class="form-control" name="mail" id="mail" value="{{$company_info->email}}" placeholder="Enter Company Mail">
                                <div class="form-control-position">
                                    <i class="feather icon-mail"></i>
                                </div>
                        </fieldset>     
                </div>

                <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
                    <label for="basicInput"><b>Address</b></label>
                        <fieldset class="form-group">
                            <textarea class="form-control" name="adrs" id="adrs" rows="3" placeholder="{{$company_info->address}}">{{ old('adrs', $company_info->address ?? null) }}</textarea>
                        </fieldset>   
                </div>


                    {{csrf_field()}} 
                </div>
             <div class="row">
                <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
                    <div style="float:left;"> 
                    <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Change</button>

                    </div>   
                </div> 
            </div>
                 </form>
        </div>
        
        
        

        
<!--        <div class="tab-pane" id="about" aria-labelledby="about-tab" role="tabpanel">

        <label><code>Please select about us image</code></label>
          <div data-provides="fileupload" class="fileupload fileupload-new">
            <div  class="fileupload-new thumbnail upimg">
                <img alt="" class="oldabout" src="">
            </div>
                <div  class="fileupload-preview fileupload-exists upimg thumbnail"></div>
                <div>
                   <span class="btn btn-sm btn-success btn-file"><span class="fileupload-new">Select</span>
                   <span class="fileupload-exists">Change</span>
                   <input type="file" name="about_image" class="default"></span>
                    <a data-dismiss="fileupload" class="btn btn-sm bg-maroon fileupload-exists btn-danger" href="#">Remove</a>
                </div>
            </div>
        </div>-->
        
<!--        <div class="tab-pane" id="disable" role="tabpanel" aria-labelledby="disable-tab">
            <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops
                muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll
                cake icing cookie halvah cupcake.</p>
        </div>
        <div class="tab-pane" id="dropdown32" role="tabpanel" aria-labelledby="dropdown32-tab" aria-expanded="false">
            <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit
                tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear
                claw.</p>
        </div>
         <div class="tab-pane " id="profile" aria-labelledby="profile-tab" role="tabpanel">
            <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice
                cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream
                powder
                tootsie roll cake.</p>
        </div>-->
                                          
                                        </div>
                                    </div>
                                </div>
<!--                            <div style="float:right;"> 
                <button type="submit" class="btn btn-info mr-1 mb-1 waves-effect waves-light">Update</button>
                <button type="submit" class="btn btn-outline-info mr-1 mb-1 waves-effect waves-light">
                    Update <span class="addbtn" role="status" aria-hidden="true"></span>
                    
                </button>
                
            </div>-->
             
                            </div>
                        </div>
                    </div>
                </section>

        
        

@stop
@section('script')


<script type="text/javascript" src="{{asset('public/back/js/bootstrap-fileupload.js')}}"></script>
 <!--<script src="{{asset('public/js/back/toastr.min.js')}}"></script>-->

<script type="text/javascript">
toastr.options = {"closeButton": true,"progressBar": true,"timeOut": "2000","hideMethod": "fadeOut"};
$(document).ready(function(){$('.up').addClass('active');countslot();});
$("#basicFrm").on('submit',function(event){event.preventDefault();
var formData = new FormData(this);$.ajax({type: 'POST',url: "{{route('updatebasic')}}",data:formData,dataType:'JSON',contentType: false,cache: false,processData: false,
success:function(data){$('#old_img').val(data.img);toastr[data.type](data.message);}});});

$("#passFrm").on('submit',function(event){event.preventDefault();
var formData = new FormData(this);$.ajax({type: 'POST',url: "{{route('updatepass')}}",data:formData,dataType:'JSON',contentType: false,cache: false,processData: false,
success:function(data){toastr[data.type](data.message);if(data.succ){document.getElementById("passFrm").reset();}}});});
$("#mailFrm").on('submit',function(event){event.preventDefault();
var formData = new FormData(this);$.ajax({type: 'POST',url: "{{route('updatecom')}}",data:formData,dataType:'JSON',contentType: false,cache: false,processData: false,
success:function(data){toastr[data.type](data.message);}});});

</script>
@stop