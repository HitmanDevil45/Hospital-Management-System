<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/styleSearchfilter.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <style>
        body {

            background-image: url("FORM.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

</head>

<body>
<section class="banner">
        <header>
            <a href="welcome.php"><span>Hearty</span>Fy</a>
            <div class="menu">
                <ul>
                    <li><a href="welcome.php">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="admin1.html">Dashboard</a></li>
              
                 
                </ul>
                <!-- <a href="login.php" class="btn">Log In</a> -->
            </div>
        </header> </section>
        <br>
        <br>
        <br>
        <br>
        <br>
    <div class="container">
        <div class="row ">
        <!-- margin-top and element spacing  -->
            <div class="col-md-16 mt-10" > 
                <div class="card md-16">
                    <div class="card-header">
                        <div class="card-title">
                            Patient History
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-16">
                                    <div class="form-group">
                                        <input type="text" name="filter_value" class="form-control" placeholder="SEARCH DATA BY NAME OR AADHARNO OR MOBNUMBER">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" name="filter_btn" class="btn btn-primary">Search Record</button>
                                </div>
                            </div>
                        </form>
                        
                   
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#ID</th>
                                    <th scope="col">FirstName</th>
                                    <th scope="col">LastName</th>
                                    <th scope="col">City</th>
                                    <th scope="col">State</th>
                                    <!-- <th scope="col">ZipCode</th> -->
                                    <th scope="col">Contact</th>
                                    <th scope="col">AadharNo.</th>
                                    <th scope="col">DOB</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">B.G.</th>
                                    <th scope="col">Allergy</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Doctor</th>
                              
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                     $connection =mysqli_connect("localhost","root","","patient");
                                    
                                   
                            
                                if(isset($_POST['filter_btn']))
                                {
                                    $value_filter = $_POST['filter_value'];
                                    // concat add two or more string toghter
                                 $query = "select * from form where concat(fname, mobnumber,aadharno) like '%$value_filter%'";  
                                 $query_run = mysqli_query($connection, $query);  

                                 if(mysqli_num_rows( $query_run)>0)
                                 {
                            
                                  while($row = mysqli_fetch_array( $query_run)){
                                    // echo $row['fname'];
                                    ?>
                                    <tr>
                                    <!-- <th scope="row">1</th> -->
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['fname']; ?></td>
                                    <td><?php echo $row['lname']; ?></td>
                                    <td><?php echo $row['city']; ?></td>
                                    <td><?php echo $row['state']; ?></td>
                                    <!-- <td><?php echo $row['zipcode']; ?></td> -->
                                    <td><?php echo $row['mobnumber']; ?></td>
                                    <td><?php echo $row['aadharno']; ?></td>
                                    <td><?php echo $row['dob']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['Bgroup']; ?></td>
                                    <td><?php echo $row['Allergy']; ?></td>
                                    <td><?php echo $row['category']; ?></td>
                                    <td><?php echo $row['doctor']; ?></td>
                                </tr>



                                    <?php

                                  }
                                }
                                  else{
                                   ?>
                                   <tr>
                                    <td colspan="12">
                                        No Record Found
                                    </td>
                                   </tr>

                                   <?php

                                  }
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