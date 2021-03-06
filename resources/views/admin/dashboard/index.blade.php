@extends('layouts.admin')
@section('title', ' Dashboard | mycityperks.com')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h4 style="color: #4e73df;">Admin Dashboard <button data-toggle="modal" data-target="#adminuser" class="btn btn-primary">Add Admin Profile</button></h4><br/>

                    <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Sr.No.</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">User Roll</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                   </tr>
               </thead>

        <?php

       /* $records = mysqli_query($link,"select * from fan_register"); // fetch data from database

        while($data = mysqli_fetch_array($records))
        {
        ?>
          <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['first_name'].' '.$data['last_name']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['password']; ?></td>  
            <td><?php echo $data['roll']; ?></td>  
            <td><a href="edit_record.php?id=<?php echo $data['id']; ?>" class="btn btn-success">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a></td>
          </tr> 
        <?php
        }*/
        ?>
        </table>

                </div>
                 

    <div class="modal fade" id="adminuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
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

@stop
