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
     <?php
                                     $connection =mysqli_connect("localhost","root","","patient");
                                    
                                   
                            
                                
                                 $query = "SELECT COUNT(id) as count
                                 FROM form
                                 WHERE category='General Physician';";  
                                 $query_result = mysqli_query($connection, $query);  
                                 while($row=mysqli_fetch_assoc($query_result)){
                                 $a=$row['count'];
                                
                                 }
                                  
                                 $query = "SELECT COUNT(id) as count
                                 FROM form
                                 WHERE category='Cancer';";  
                                 $query_result = mysqli_query($connection, $query);  
                                 while($row=mysqli_fetch_assoc($query_result)){
                                 $b=$row['count'];
                                
                                 }$query = "SELECT COUNT(id) as count
                                 FROM form
                                 WHERE category='Otolaryngology';";  
                                 $query_result = mysqli_query($connection, $query);  
                                 while($row=mysqli_fetch_assoc($query_result)){
                                 $c=$row['count'];
                                
                                 }$query = "SELECT COUNT(id) as count
                                 FROM form
                                 WHERE category='Dermatology';";  
                                 $query_result = mysqli_query($connection, $query);  
                                 while($row=mysqli_fetch_assoc($query_result)){
                                 $d=$row['count'];
                                
                                 }$query = "SELECT COUNT(id) as count
                                 FROM form
                                 WHERE category='Dental';";  
                                 $query_result = mysqli_query($connection, $query);  
                                 while($row=mysqli_fetch_assoc($query_result)){
                                 $e=$row['count'];
                                
                                 }
                         
                               ?>
                              

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
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script>
         var a =<?= $a ?>;
         var b =<?= $b ?>;
         var c =<?= $c ?>;
         var d =<?= $d ?>;
         var e =<?= $e ?>;
</script>
    <script type="text/javascript">
     
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['General Physician',    a],
          ['Cancer',      b],
          ['Otolaryngology',  c],
          ['Dermatology', d],
          ['Dental',    e]
        ]);

        var options = {
          title: 'Total Patients Chart'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <div id="piechart" style="width: 900px; height: 500px; position: absolute;
left: 301px;
top: 122px;" ></div>
 






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


  </body>

</html>