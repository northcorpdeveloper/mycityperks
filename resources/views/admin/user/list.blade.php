@extends('layouts.admin')
@section('title', ' Dashboard | mycityperks.com')

@section('content')
  

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h4 style="color: #4e73df;">User List <!--<button data-toggle="modal" data-target="#adminuser" class="btn btn-primary">Add Admin Profile</button> --></h4><br/>

                    
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                    <th scope="col">Sr.No.</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">User Roll</th>
                    <th scope="col">Action</th>
                   </tr>
               </thead>
                <tbody>
                   <?php $i=1; $user_type=''; ?>

                       <?php //print_r($all_users); die; ?>
                  @if(isset($all_users) && !empty($all_users))

                  @foreach($all_users as $user_list)


                  <?php 
                  if($user_list->user_type == '1'){
                  $user_type="User";
                  }else if($user_list->user_type == '2'){
                  $user_type="Content Creator";
                  }else{
                  $user_type="Admin";
                   } 
                   ?> 
                  <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $user_list->name}}</td>
                    <td>{{ $user_list->email}}</td>
                    <td>{{ $user_list->mobile}}</td>  
                    <td>{{ $user_type}}</td>
                    <td>
                        <i data="<?php echo $user_list->id; ?>" class="status_checks btn
  <?php echo ($user_list->status)? 'btn-success': 'btn-danger'?>"><?php echo ($user_list->status)? 'Active' : 'Inactive' ?>
 </i></td>

                  </tr> 
                   <?php $i++; ?>
                  @endforeach
                  @endif
                </tbody>
            </table>
                    <br><br><br>     
        </div>
                 

    <div class="modal fade" id="adminuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                      <div class="form-group"> 
                        <label> Enter Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" Required>
                      </div>
                      <div class="form-group"> 
                        <label> Enter email</label>
                        <input type="email" name="email" class="form-control" placeholder="email" Required>
                      </div>
                      <div class="form-group"> 
                        <label> Enter password</label>
                        <input type="password" name="password" class="form-control" placeholder="password" Required>
                      </div>
                      <input type="hidden" name="roll" value="admin">
                      <input type="submit" name="admin_user" value="Save" class="btn btn-success">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

                
 <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
$(document).on('click','.status_checks',function(){
      var status = ($(this).hasClass("btn-success")) ? '0' : '1';
      var msg = (status=='0')? 'Deactivate' : 'Activate';
      if(confirm("Are you sure to "+ msg)){
        var current_element = $(this);
        url = "{{url('admin/updateStatus')}}";
        
          $.ajax({
                url: url,
                type: 'post',
                dataType: 'json',
                data: {
                        "_token": "{{ csrf_token() }}",   
                        "id":$(current_element).attr('data'),
                        "status":status
                
                },
                success:function(data)
                {
                     location.reload();
                },
                
            });
      }      
    });
</script>

@stop
