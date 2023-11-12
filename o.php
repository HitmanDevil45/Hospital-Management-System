<!-- Otolaryngology -->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <section class="#">
        <header>
            <a href="welcome.php"><span>Hearty</span>Fy</a>
            <div class="menu">
                
                <!-- <a href="login.php" class="btn">Log In</a> -->
            </div>
        </header> </section>
    <section class="register" id="register">
        <?php
        if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        ?>
            <h4><?php echo $_SESSION['status'] ?></h4>
        <?php
            unset($_SESSION['status']);
        }
        ?>
        <h1 class="heading">Patient Information</h1>


        <form action="code.php" name="form1" method="post">

            <div class="inputBox">
                <input type="text" id="fname" name="fname" placeholder="First Name" pattern=[A-Za-z]{0-25} required>
                <input type="text" id="lname" name="lname" placeholder="Last Name" pattern=[A-Za-z]{0-25} required>
            </div>

            <div class="inputBox">
                <input type="text" id="city" name="city" placeholder="Your City" pattern=[A-Za-z]{0-25} required>
                <input type="text" id="state" name="state" placeholder="Your State" pattern=[A-Za-z]{0-25} required>
                <input type="tel" id="zip-code" name="zipcode" placeholder="Your Zip-code" pattern=[0-9]{6} required>
                <input type="tel" id="number" name="mobnumber" placeholder="Contact Number" pattern=[0-9]{10}  required >
                <input type="tel" id="aadharno" name="aadharno" placeholder="Aadhar Number" pattern=[0-9]{12}  required>
                <input type="date" id="dob" name="dob" placeholder="DateOfBirth" required>
            </div>
            <input type="text" id="address" class="address" name="address" placeholder="Address" required>
            <select name="Bgroup" id="Bgroup" required>
                <option value="">Select Your Blood Group</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>
            <select name="Allergy" id="Allergy" required>
                <option value="">Any Allergy</option>
                <option value="No Allergy">No Allergy</option>
                <option value="Drug Allergy">Drug Allergy</option>
                <option value="Food Allergy"> Food Allergy</option>
                <option value="Contact Allergy">Contact Allergy</option>
            </select>
            <select name="category" id="category" required>
                <!-- <option value="">select category</option> -->
                <option value="Otolaryngology">Otolaryngology</option>
               
            </select>
            <select name="doctor" id="doctor" required>
            <option value="">Select Doctor Name </option>
                <option value="Dr.R.P.Lalwani(M.B.B.S/MS)">Dr.R.P.Lalwani(M.B.B.S/MS)</option>
                <option value="Dr.I.S.Pant(M.B.B.S/MS)">Dr.I.S.Pant(M.B.B.S/MS)</option>
                <option value="Dr.A.U.Patil(M.B.B.S/MS)"> Dr.A.U.Patil(M.B.B.S/MS)</option>
             
            </select>

            <div class="inputBox">
                <button type="submit" name="save_data" class="btn1">Submit</button>
                
               
            </div>






        </form>

    </section>

</body>

</html>
