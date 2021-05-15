<?php 

include('Connection.php'); 

    if(isset($_POST['submit'])){
        $location=$_POST['location'];
        $size = $_POST['size'];
        $floor =$_POST['floor'];
        $bed=$_POST['bed'];
        $bath=$_POST['bath'];
        $price=$_POST['price']; 


    $query= "INSERT INTO users (Location,Size,Floor,Bed, Bath, Price) VALUES( '{$location}', '{$size}' , '{$floor}', '{$bed}' ,'{$bath}', '{$price}');"; 


    $performQuery= mysqli_query($conn, $query); 

    if(!$performQuery)
        echo 'Query Unsuccesful';
    else
        header('location:successMsg.html');

    $insertedId=mysqli_insert_id($conn);
        
} 
?>
<?php include('db_close.php'); ?>