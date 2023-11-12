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
   
                                   
                            
                                







                                    // $connection =mysqli_connect("localhost","root","","patient");
                                    
                                   
                            
                                
                                 $query = "SELECT COUNT(id) as count
                                 FROM form
                                 WHERE doctor='Dr.D.K Sharma(M.B.B.S)';";  
                                 $query_result = mysqli_query($connection, $query);  
                                 while($row=mysqli_fetch_assoc($query_result)){
                                 $g1=$row['count'];
                                
                                 }
                                  
                                 $query = "SELECT COUNT(id) as count
                                 FROM form
                                 WHERE doctor='Dr. I.R.Singh(M.B.B.S/AIIMS)';";  
                                 $query_result = mysqli_query($connection, $query);  
                                 while($row=mysqli_fetch_assoc($query_result)){
                                 $g2=$row['count'];
                                
                                 }$query = "SELECT COUNT(id) as count
                                 FROM form
                                 WHERE doctor='Dr. D.M.Waghmare(M.B.B.S)';";  
                                 $query_result = mysqli_query($connection, $query);  
                                 while($row=mysqli_fetch_assoc($query_result)){
                                 $g3=$row['count'];
                                



                                 
                                 }$query = "SELECT COUNT(id) as count
                                 FROM form
                                 WHERE doctor='Dr.A.K Sharma(MD)';";  
                                 $query_result = mysqli_query($connection, $query);  
                                 while($row=mysqli_fetch_assoc($query_result)){
                                 $c1=$row['count'];
                                
                                 }$query = "SELECT COUNT(id) as count
                                 FROM form
                                 WHERE doctor='Dr. M.S.Singh(MD)';";  
                                 $query_result = mysqli_query($connection, $query);  
                                 while($row=mysqli_fetch_assoc($query_result)){
                                 $c2=$row['count'];

                                 }

                                 $query = "SELECT COUNT(id) as count
                                 FROM form
                                 WHERE doctor='Dr. A.P.Shinde(MD)';";  
                                 $query_result = mysqli_query($connection, $query);  
                                 while($row=mysqli_fetch_assoc($query_result)){
                                 $c3=$row['count'];
                                
                                 }
                                  





                                 $query = "SELECT COUNT(id) as count
                                 FROM form
                                 WHERE doctor='Dr.R.P.Lalwani(M.B.B.S/MS)';";  
                                 $query_result = mysqli_query($connection, $query);  
                                 while($row=mysqli_fetch_assoc($query_result)){
                                 $o1=$row['count'];
                                
                                 }$query = "SELECT COUNT(id) as count
                                 FROM form
                                 WHERE doctor='Dr.I.S.Pant(M.B.B.S/MS)';";  
                                 $query_result = mysqli_query($connection, $query);  
                                 while($row=mysqli_fetch_assoc($query_result)){
                                 $o2=$row['count'];
                                
                                 }$query = "SELECT COUNT(id) as count
                                 FROM form
                                 WHERE doctor='Dr.A.U.Patil(M.B.B.S/MS)';";  
                                 $query_result = mysqli_query($connection, $query);  
                                 while($row=mysqli_fetch_assoc($query_result)){
                                 $o3=$row['count'];
                                
                                 }
                                 
                                 
                                 
                                 $query = "SELECT COUNT(id) as count
                                 FROM form
                                 WHERE doctor='Dr.A.S.Patil(M.B.B.S/MS)';";  
                                 $query_result = mysqli_query($connection, $query);  
                                 while($row=mysqli_fetch_assoc($query_result)){
                                 $der1=$row['count'];}


                                 $query = "SELECT COUNT(id) as count
                                 FROM form
                                 WHERE doctor='Dr.A.C.Chavan(M.B.B.S/MS)';";  
                                 $query_result = mysqli_query($connection, $query);  
                                 while($row=mysqli_fetch_assoc($query_result)){
                                 $der2=$row['count'];
                                
                                 }
                                  
                                 $query = "SELECT COUNT(id) as count
                                 FROM form
                                 WHERE doctor='Dr.G.S.Raut(M.B.B.S/MS)';";  
                                 $query_result = mysqli_query($connection, $query);  
                                 while($row=mysqli_fetch_assoc($query_result)){
                                 $der3=$row['count'];
                                
                                 }
                                 
                                 
                                 
                                 
                                 
                                 
                                 $query = "SELECT COUNT(id) as count
                                 FROM form
                                 WHERE doctor='Dr.P.P.Patil(B.D.S)';";  
                                 $query_result = mysqli_query($connection, $query);  
                                 while($row=mysqli_fetch_assoc($query_result)){
                                 $den1=$row['count'];
                                
                                 }$query = "SELECT COUNT(id) as count
                                 FROM form
                                 WHERE doctor='Dr.D.S.Shinde(B.D.S)';";  
                                 $query_result = mysqli_query($connection, $query);  
                                 while($row=mysqli_fetch_assoc($query_result)){
                                 $den2=$row['count'];
                                
                                 }$query = "SELECT COUNT(id) as count
                                 FROM form
                                 WHERE doctor='Dr.V.R.Sharma(B.D.S)';";  
                                 $query_result = mysqli_query($connection, $query);  
                                 while($row=mysqli_fetch_assoc($query_result)){
                                 $den3=$row['count'];
                                
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
        <!-- <script>
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
 left: 301px; top: 122px;
"  
></div>
 






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->


    <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <script>
         var g1 =<?= $g1 ?>;
         var g2 =<?= $g2 ?>;
         var g3 =<?= $g3 ?>;
        

         var c1 =<?= $c1 ?>;
         var c2 =<?= $c2 ?>;
         var c3 =<?= $c3 ?>;

         var o1 =<?= $o1 ?>;
         var o2 =<?= $o2 ?>;
         var o3 =<?= $o3?>;


         var der1 =<?= $der1 ?>;
         var der2 =<?= $der2 ?>;
         var der3 =<?= $der3 ?>;


         var den1 =<?= $den1 ?>;
         var den2 =<?= $den2 ?>;
         var den3 =<?= $den3 ?>;

         
</script> 







    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Doctor 1', 'Doctor 2', 'Doctor 3'],
        //   ['General Physician',1,2,3]
          ['General Physician', g1, g2, g3],
          ['Cancer', c1,c2,c3],
          ['Otolaryngology', o1,o2,o3],
          ['Dermatology', der1,der2,der3],
          ['Dental', den1,den2,den3]
        ]);

        var options = {
          chart: {
            title: 'Hospital Performance',
            subtitle: 'Revanue, Majority, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;position: absolute;
left: 301px;
top: 122px;"></div>
  </body> 

</html>