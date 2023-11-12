<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {

            background-image: url("FORM.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Patient History
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                        $connection =mysqli_connect("localhost","root","","patient");
                        $query = "select * from form";
                        $query_run = mysqli_query($connection, $query); 
                       
                        ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#ID</th>
                                    <th scope="col">FirstName</th>
                                    <th scope="col">LastName</th>
                                    <th scope="col">City</th>
                                    <th scope="col">State</th>
                                    <th scope="col">ZipCode</th>
                                    <th scope="col">MobNumber</th>
                                    <th scope="col">AadharNo.</th>
                                    <th scope="col">DOB</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Bgroup</th>
                                    <th scope="col">Allergy</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                 if(mysqli_num_rows( $query_run)>0)
                                 {
                            
                                  while($row = mysqli_fetch_array( $query_run)){
                                    
                                
                                 ?>
                                <tr>
                                    <!-- <th scope="row">1</th> -->
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['fname']; ?></td>
                                    <td><?php echo $row['lname']; ?></td>
                                    <td><?php echo $row['city']; ?></td>
                                    <td><?php echo $row['state']; ?></td>
                                    <td><?php echo $row['zipcode']; ?></td>
                                    <td><?php echo $row['mobnumber']; ?></td>
                                    <td><?php echo $row['aadharno']; ?></td>
                                    <td><?php echo $row['dob']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['Bgroup']; ?></td>
                                    <td><?php echo $row['Allergy']; ?></td>
                                    
                                </tr>
                                <?php
                                  }
                                }
                                else{
                                    ?>
                                    <tr>
                                        <td colspan="12">No Record Found</td>
                                    </tr>
                                    <?php
                                } 
                                ?>
                              
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>