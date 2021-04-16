<?php

require "_connect.php";

if(isset($_POST['add']))
    {
        
        $name = $_POST["first_name"];
        $title = $_POST["last_name"];
        $dob = $_POST["date_of_birth"];
        $alias = $_POST["alias"];
        $active = $_POST["active"];
        $hero = $_POST["hero"];
        
        $sql= "INSERT INTO `supers` (`first_name`, `last_name`, `date_of_birth`, `alias`, `active`, `hero`) VALUES ('$name', '$title', ' $dob', ' $alias', '$active', '$hero')";
                $result = mysqli_query($conn, $sql); 
                if($result)
                {
                    header("location: index.php");
                }
          
    }
?>