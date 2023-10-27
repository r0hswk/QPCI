
<?php
require_once("config/connection.php");
$query ="select * from  about";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Item Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color:#ccc;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        h1 {
            color: #333;
        }
        .details {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container" style="display: flex;margin-top: 110px;" >
        <!-- <h1>Item Details</h1> -->
        <div style="margin-right: 10px; height: 350px; width: 500px; background-color: f9f9f9"> <img src="bans.webp" class="card-img-top" height="380px" width="300"  object-fit: cover; alt="Card Image"></div>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        
        ?>
        <div class="details">
        

       
        `  <h2>  <?php echo $row["id"] ?></h2>
        



                <h2><?php  echo $row["age"]?></`h2>
            <p><strong>Description:</strong> This is a detailed description of the item. You can provide information about its features, specifications, and any other relevant details.</p>
            <p><strong>Price:</strong> $19.99</p>
            <p><strong>Availability:</strong> In Stock</p>
            <p><strong>Manufacturer:</strong> Company Name</p>
            <p><strong>Category:</strong> Category Name</p>
        </div>
        <?php
         }
         ?>
    </div>
</body>
</html>

