<?php
    
    function writeCount(){
        $counter = file_get_contents("count.txt"); //Einlesen des Wertes
        $counter++; //Wert um 1 erhöhen
        file_put_contents("count.txt", $counter); //Abspeichern des Wertes
        
        //header("Location: kw.itsnice2.de");
        //exit();
    }
    
    if (isset($_POST['myButton'])) {
        writeCount();
      }
      

?>