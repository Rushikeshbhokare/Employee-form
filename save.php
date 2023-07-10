<?php 
session_start();
require 'dbcon.php';

if(isset($_POST['save_employee']))
{
    $em_name = mysqli_real_escape_string($con,$_POST['em_name']);
    $em_department = mysqli_real_escape_string($con,$_POST['em_department']);
    $em_age = mysqli_real_escape_string($con,$_POST['em_age']);
    $em_salary = mysqli_real_escape_string($con,$_POST['em_salary']);

    $query = "INSERT INTO tbl_emp (em_name,em_department,em_age,em_salary) VALUE ('$em_name','$em_department','$em_age','$em_salary') ";
    $query_run = mysqli_query($con, $query);
    if($query_run){
        $_SESSION['messege'] = "Employee Created Successfully";
        header("Location:employee_form.php");
        exit(0);
    }
    else{

        $_SESSION['messege'] = "Employee not Created";
        header("Location:employee_form.php");
        exit(0);
    }
}

?>