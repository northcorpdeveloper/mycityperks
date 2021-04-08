<?php

include ".../connection.php";

// $error = '';
// $success = '';
if (isset($_POST['admin_parametor']) && $_POST['admin_parametor'] == 'register_admin') {

    $admin_email = $_POST['admin-email'];
    $admin_password = md5($_POST['admin-password']);
    $admin_name = $_POST['admin-name'];
    
    $insert_data = "INSERT INTO fan_register (email, password, name) VALUES ('$admin_email','$admin_password','$admin_name')";

    $resul_tvalue = mysqli_query($link, $insert_data);

    //echo '<pre>'.print_r($resul_tvalue).'</pre>';
    if($resul_tvalue > 0 ) {

        echo 'success';
    } 
    
    else {
        echo 'fail';
    }



// if(isset($_POST['param']) && $_POST['param'] == "reset_user") {
//   $reset_email = $_POST['reset_email'];
//   $reset_pass = md5($_POST['reset_password']);
//   $reset_result = "SELECT * FROM fan_register WHERE email='$reset_email' ";
//   $resetvalue = mysqli_query($link, $reset_result);
//   //echo "<pre>"; print_r($resetvalue); echo "</pre>";
//   if ($resetvalue->num_rows > 0 ) 
//   {  
//     $update_date = "UPDATE `fan_register` SET `password`='$reset_pass' WHERE email='$reset_email'";
//     $updatevalue = mysqli_query($link,$update_date); 
//     if($updatevalue > 0)  {
//       echo "success";
//     }
//   } else{
//     echo "error";      
//   }  
// }
?>