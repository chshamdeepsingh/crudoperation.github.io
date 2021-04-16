<?php require "_header.php"?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="container">
        <a href="new.php" class="btn btn-dark m-2" style="float:right;">+Add</a>
        <table class="table table-bordered table-striped table-hover" id="myTable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Alias</th>
                    <th scope="col">Active Status</th>
                    <th scope="col">Hero</th>
                    <th scope="col" width="15%">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include '_connect.php';
                    $sql = "SELECT * FROM `supers`";
                    $result = mysqli_query($conn, $sql);
                    $Sno = 0;
                    while($row = mysqli_fetch_array($result)){
                        ?>
                <tr>
                    <th scope='row'><?php echo  $Sno = $Sno + 1;  ?></th>
                    <td><?php echo  $row['first_name']  ?></td>
                    <td><?php echo  $row['last_name']  ?></td>

                    <td><?php echo $row['date_of_birth'] ?></td>
                    <td><?php echo $row['alias'] ?></td>
                    <td><?php echo $row['active'] ?></td>
                    <td><?php echo $row['hero']?></td>
                    <td>
                        <button class='edit btn btn-sm btn-success'><a href="edit.php?id=<?php echo $row['id']?>"
                                class="text-white">Edit</a></button>
                        <button class='edit btn btn-sm btn-danger'><a href="delete.php?id=<?php echo $row['id']?>"
                                class="text-white">Delete</a></button>
                    </td>
                </tr>
                <?php
                    } 
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>

<?php require "_footer.php"?>