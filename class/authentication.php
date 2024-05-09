<?php
 namespace App;


 class Authentication{
   public function signup()
    {
        $myDB = new \App\DB();
        $myDB->connect();
    
        if (isset($_POST['signupbtn'])) {
            // var_dump($_POST);#for debugging ba7otha l nafsy bs msh f al code
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            
            
            if ($password != $confirm_password) {
                \App\Alert::printmessages("password not match", "Danger");

            } else {
                $insert = "INSERT INTO `patient`VALUES(NULL,?,?,?)";

                $query = $myDB->Con->prepare($insert);
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $query->bind_param('sss', $username, $hashedPassword, $email);
                $check = $query->execute();
                if ($check)
                    header('Location: SignIn.php?doneSignUp=1');
                else
                    \App\Alert::printmessages("WRONG INFO", "Danger");

            }

        }

    }
 }


