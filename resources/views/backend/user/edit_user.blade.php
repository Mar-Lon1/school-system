@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

		
        <section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Update User</h4>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">


           <form method="post" action="{{ route ('users.update', $editData->id)}}">
            @csrf 
             <div class="row">
               <div class="col-12">		
                
               
<div class="row">
<div class="col-md-6">
<div class="form-group">
<h5>User Role <span class="text-danger">*</span></h5>
<div class="controls">
    <select name="usertype" id="usertype" required="" class="form-control">
        <option value="" selected="" disable= "">Select Role</option>
        <option value="Admin"  {{ ($editData->usertype =="Admin" ? "selected": "") }}>Admin</option>
        <option value="Accountant" {{ ($editData->usertype =="Accountant" ? "selected": "") }}>Accountant</option>
        <option value="HR"{{ ($editData->usertype =="HR" ? "selected": "") }}>HR</option>
        <option value="Teacher"{{ ($editData->usertype =="Teacher" ? "selected": "") }}>Teacher</option>
        <option value="Parent"{{ ($editData->usertype =="Parent" ? "selected": "") }}>Parent</option>
    </select>
</div>
</div>

</div>
 <!-- End Col Md-6 -->
<div class="col-md-6">
<div class="form-group">
        <h5>User Name <span class="text-danger">*</span></h5>
        <div class="controls">
            <input type="text" name="name" class="form-control" value="{{ $editData->name }}" required="" > </div>
       
   
</div>
</div> <!-- End Col Md-6 -->
</div> 
<!-- //End Row -->




<div class="row">
<div class="col-md-6">
<div class="form-group">
        <h5>User Email <span class="text-danger">*</span></h5>
        <div class="controls">
            <input type="email" name="email" class="form-control" value="{{ $editData->email }}" required="" > </div>
       
   
</div>

</div>
 <!-- End Col Md-6 -->
<div class="col-md-6">

       
   
</div>
</div> <!-- End Col Md-6 -->
</div> 
<!-- //End Row -->


</div>


    
                  
               <div class="text-xs-right">
               <!-- <a href="{{route('users.store')}}" style="float: right;" class="btn btn-rounded btn-success mb-5">Submit </a> -->

                <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
               </div>
           </form>

       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
   </div>
   <!-- /.box-body -->
 </div>
 <!-- /.box -->

</section>













	  
	  </div>
  </div>





@endsection
