<?php 
    if(isset($_POST['name'])){

        $server="localhost";
        $username="root";
        $password="";
        $con=mysqli_connect($server,$username,$password,"prac");
        if($con){
            echo "Successful";

            $name=$_POST['name'];
            $sql="INSERT INTO `labt` (`name` , `age`) VALUES('$name',4);";
            if($con->query($sql) == true){
                echo "Successfully inserted";
            }
        
            echo "hello";
            $sql="SELECT * FROM `labt`;";
            $result=$con->query($sql);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo $row['name'];
                    echo $row['age'];
                }
            }
        }
        else{
            die("connection to this  error".mysqli_connect_error());
        }


    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="SQL.php" method=post>
        Name : <input type='text' name='name' placeholder="NAME" />
    </form>
</body>
</html>