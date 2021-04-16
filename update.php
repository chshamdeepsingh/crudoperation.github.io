<?php require "_header.php"?>
<?php
// require "_connect.php";

// if (!$conn){
//     die("Sorry we failed to connect: ". mysqli_connect_error());
// }

// if(isset($_POST['update']))
//     { 
//       $id = $_GET['id'];
//       $name = $_POST["first_name"];
//       $title = $_POST["last_name"];
//       $dob = $_POST["date_of_birth"];
//       $alias = $_POST["alias"];
//       $active = $_POST["active"];
//       $hero = $_POST["hero"];

//                 $sql = "UPDATE `supers` SET `first_name`='$_POST[first_name]',`last_name`='$_POST[last_name]',`date_of_birth`='$_POST[date_of_birth]',`alias`='$_POST[alias]',`active`='$_POST[active]',`hero`= '$_POST[hero]' WHERE id = $id";
//                 $result = mysqli_query($conn, $sql); 
//                 if($result)
//                 {
//                     header("location: index.php");
//                 }
          
//     }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

    <div class="row">
        <div class="col-md-12">
            <br>
            <center>
                <h2>Update the item</h2>
            </center>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">

            <form method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name">
                </div>
                <div class="form-group">
                    <label for="date_of_birth">DOB</label>
                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" rows="3">
                </div>
                <div class="form-group">
                    <label for="alias">Alias</label>
                    <input type="text" class="form-control" id="alias" name="alias">
                </div>
                <div class="form-group">
                    <label for="active">Active</label>
                    <input type="text" class="form-control" id="active" name="active">
                </div>
                <div class="form-group">
                    <label for="hero">Hero</label>
                    <input type="text" class="form-control" id="hero" name="hero">
                </div>
                <button type="submit" class="btn btn-primary" id="update" name="update">Update</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>

    <?php require "_footer.php"?>
</body>

</html>