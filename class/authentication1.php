<?php 
 namespace App;

 class Authentication1{

    public function signup()
    {
        $myDB = new \App\DB();
        $myDB->connect();

        if(isset($_POST["signupbtn1"])){
            $username = $_POST['username1'];
            $email = $_POST['email1'];
            $password = $_POST['password1'];
            $confirm_password = $_POST['confirm_password1'];
            $department = $_POST['dep'];
            
            
            

            if ($password != $confirm_password) {
                \App\Alert::printmessages("password not match", "Danger");

            } else {

                
                $insert = "INSERT INTO `doctor`VALUES(NULL,?,?,?,?,?)";
                $query = $myDB->Con->prepare($insert);
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $query->bind_param('ssssi', $username, $hashedPassword, $email,$department,$_SESSION['id']);
                $check = $query->execute();
                if ($check)
                    header('Location: SignIn.php?doneSignUpd=1');
                else
                    \App\Alert::printmessages("WRONG INFO", "Danger");

            


        }

      }
    }  
 }    

   

