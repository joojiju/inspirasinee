<?php

include('_secure.php');
    include('header.php');
        include('include/db.php');
            include('include/function.php');
$ID = $_GET['ID'];
$query = "select * from services_uploade where ID='".$ID."'";
$result = mysqli_query($db, $query);

while($row=mysqli_fetch_assoc($result))
{
    $ID = $row['ID'];
    $Ser_Name = $row['Services_Name'];
    $Ser_Type = $row['Services_Type'];
    $Dry_Price = $row['Dry_Price'];
    $Laundry_Price = $row['Laundry_Price'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="bg-dark">

<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card mt-5">
                <div class="card-title">
                    <h3 class="bg-success text-white text-center py-3"> Update Data</h3>
                </div>
                <div class="card-body">

                    <form action="update.php?ID=<?php echo $ID ?>" method="post">
                        <input type="text" class="form-control mb-2" placeholder=" Material " name="Services_Name" value="<?php echo $Ser_Name ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Service " name="Services_Type" value="<?php echo $Ser_Type ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Laundry Price " name="Dry_Price" value="<?php echo $Dry_Price ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Deodorant Price " name="Laundry_Price" value="<?php echo $Laundry_Price ?>">
                        <button class="btn btn-primary" name="update">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>