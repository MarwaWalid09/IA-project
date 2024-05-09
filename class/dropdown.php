<?php
 namespace App;

 class dropdown {
  
    public function drop() {
        $mydb= new \App\DB() ;
        $mydb->connect() ;
        $select=$mydb->Con->query(" SELECT  * FROM department ") ;
       
       
        while($rows=mysqli_fetch_array($select)){
            $id=$rows['ID'];
            $name=$rows['name'];
            echo "<option value='$name'> $name  </option>";
            $_SESSION['id']= $id;
           
        }
        
         
        
        
    
    }
}
 