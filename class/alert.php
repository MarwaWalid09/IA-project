<?php

namespace App;

class Alert
{
    public static function printmessages($text,$type)

    {
        if($type=="Danger")
            echo "<div style='text-align:center;margin_bottom:0;' class= 'alert alert-danger' role='alert'>" . $text ."</div>";
        else
            echo "<div style='text-align:center;margin_bottom:0;' class= 'alert alert-primary' role='alert'>" . $text ."</div>";

    }

    public function alertAfterSignUp()
    {
        if (isset($_GET['doneSignUp'])) {
            \App\Alert::printmessages("Done", "Normal");
        }
        }

        public function alertIfUserAuth()
        {
            if (isset($_SESSION['alert_already_auth'])) {
                \App\Alert::printmessages("Already Authenticated !!!", "Normal");
                unset($_SESSION['alert_already_auth']);
            }
        }
    }
