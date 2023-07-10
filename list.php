<?php 
require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Student Details
                        <a href="employee_form.php" class="btn btn-primary float-end">Add Employee</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Employee name</th>
                                <th>Employee department</th>
                                <th>Employee age</th>
                                <th>Employee salary</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        $query="SELECT * FROM tbl_emp";
                        $query_run = mysqli_query($con,$query);
                        if(mysqli_num_rows($query_run) > 0)
                        {

                            foreach($query_run as $tbl_emp)
                            {
                                ?>
                                
                                <tr>
                                    <td><?= $tbl_emp['em_id']; ?></td>
                                    <td><?= $tbl_emp['em_name']; ?></td>
                                    <td><?= $tbl_emp['em_department']; ?></td>
                                    <td><?= $tbl_emp['em_age']; ?></td>
                                    <td><?= $tbl_emp['em_salary']; ?></td>
                                   
                                </tr>
                        <?php
                            }
                        }
                        else{
                            echo "<h5>No record present</h5>";
                        }
                        ?>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>