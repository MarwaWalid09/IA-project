<?php 

require ('../vendor/autoload.php');

$myobj= new  \App\Authentication();
$myobj->signup();



?>
 



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style1.css?v=<?php echo time()?>">
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
                    <input style="background:transparent;" id="username" required type="text" name="username" placeholder="Enter User_Name"/>
                </div>
            </div>

            <div class="email">
                <label for="email">Email</label>
                <div class="sec-2">
                    <ion-icon name="mail-outline"></ion-icon>
                    <label>
                        <input  style="background:transparent;" required type="email" name="email" placeholder="admin@domain.com"/>
                    </label>
                </div>
            </div>


            <div class="email">
                <label for="email">Phone</label>
                <div class="sec-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
</svg>
                    <label>
                        <input  style="background:transparent;" required type="phone" name="email" placeholder="Phone"/>
                    </label>
                </div>
            </div>

            <div class="password">
                <label for="password">Password</label>
                <div class="sec-2">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <label>
                        <input style="background:transparent;" required class="pas" type="password" name="password" placeholder="Password"/>
                    </label>
                </div>
            </div>

            <div class="password">
                <label for="password">Confirm Password</label>
                <div class="sec-2">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <label>
                        <input style="background:transparent;" required  class="pas" type="password" name="confirm_password" placeholder="Confirm_Password"/>
                    </label>
                </div>
            </div>

            <button type="submit" Name="signupbtn" class="login">Sign Up</button>

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