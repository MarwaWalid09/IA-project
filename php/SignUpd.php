<?php 

require ('../vendor/autoload.php');


$myobj= new  \App\Authentication1();
$myobj->signup();



?>
 



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet'
          href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
    <title>Sign Up</title>
</head>

<body>
    
<?php require ( $_SERVER['DOCUMENT_ROOT'].'/Project/php/navbar/nav.php');?>
<form method="post">
    <div class="Login-Card">
        <div class="screen-1">

            <div class="email">
                <label for="username">Username</label>
                <div class="sec-2">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input style="background:transparent;" id="username" required type="text" name="username1" placeholder="Enter User_Name"/>
                </div>
            </div>

            <div class="email">
                <label for="email">Email</label>
                <div class="sec-2">
                    <ion-icon name="mail-outline"></ion-icon>
                    <label>
                        <input  style="background:transparent;" required type="email" name="email1" placeholder="admin@domain.com"/>
                    </label>
                </div>
            </div>

            <div class="password">
                <label for="password">Password</label>
                <div class="sec-2">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <label>
                        <input style="background:transparent;" required class="pas" type="password" name="password1" placeholder="Password"/>
                    </label>
                </div>
            </div>

           
            <div class="password">
                <label for="password">Confirm Password</label>
                <div class="sec-2">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <label>
                        <input style="background:transparent;" required  class="pas" type="password" name="confirm_password1" placeholder="Confirm_Password"/>
                    </label>
                </div>
            </div>

            <div class="password">
                  <label for="dep">Department:</label>
                  <select style="background:transparent;" name="dep" id="dep">
                     <option value="">Choose Department</option>
                     <?php
                     $d= new \App\dropdown();
                     $d->drop() ;
                     
                     ?>
                     
                    
                 </select>
            </div>

            <button type="submit" Name="signupbtn1" class="login">Sign Up</button>

            <div class="footer">
                <a href="">
                    Log In
                </a>
                <span>Forgot Password?</span>
            </div>

        </div>




     </div>



</form>
</body>

</html>