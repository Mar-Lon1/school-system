@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

		
        <section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Edit Year </h4>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">


<form method="post" action="{{ route ('update.student.year', $editData ->id)}}">
@csrf 
    <div class="row">
    <div class="col-12">		
    


<div class="form-group">
        <h5>Year Name <span class="text-danger">*</span></h5>
        <div class="controls">
            <input type="text" name="name"  class="form-control" value = "{{ $editData ->name}}"  > </div>
       @error('name')
        <span class="text-danger"> {{$message}} </span>
       @enderror
</div>

       
   
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
