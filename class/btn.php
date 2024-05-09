<?php
namespace App;

class btn{

public function direct(){
    if(isset($_POST["1"])){
        header('Location: SignUpd.php');



    }
    if(isset($_POST['2'])){

        header('Location: SignUp.php');
    }
    


    




}


}