<!-- Book_Master(Book_Code,Book_name,Author_name,cost,ISBN_NO) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book Master</title>
</head>
<body>
    <form action="" method="post">
        <div>
        <input name="code" type="text" placeholder="Book Code">
        <input name="name" type="text" placeholder="Book Name">
        <input name="aut" type="text" placeholder="Author Name">
        <input name="price" type="number" placeholder="Price">
        <input name="isbn" type="text" placeholder="ISBN NO"><br>
        <center>
        INSERT
        <input value="insert" name="choice" type="radio"> ||
        UPDATE   
        <input value="update" name="choice" type="radio"> ||
        DELETE
        <input value="delete" name="choice" type="radio">
        <br>
        <input type="submit" value="save">
        </center>
        </div>
    </form>

    <?php
    $sever="localhost";
    $username="root";
    $pswd="";
    $db="ass3";

    $con = mysqli_connect($sever,$username,$pswd,$db);

     $sql = "SELECT * FROM Book_Master";
        if($result = mysqli_query($con, $sql)){
            if(mysqli_num_rows($result) > 0){
                echo "<table  border='solid black 1px' >";
                    echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>Book Code</th>";
                        echo "<th>Book Name</th>";
                        echo "<th>Author</th>";
                        echo "<th>Price</th>";
                        echo "<th>ISBN NO</th>";
                    echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['ID'] . "</td>";
                        echo "<td>" . $row['Book_Code'] . "</td>";
                        echo "<td>" . $row['Book_name'] . "</td>";
                        echo "<td>" . $row['Author_name'] . "</td>";
                        echo "<td>" . $row['cost'] . "</td>";
                        echo "<td>" . $row['ISBN_NO'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        }

    if(isset($_POST["code"],$_POST["name"],$_POST["aut"],$_POST["price"],$_POST["isbn"]))
    {

        $code = $_POST["code"];
        $name = $_POST["name"];
        $aut = $_POST["aut"];
        $price = $_POST["price"];
        $isbn = $_POST["isbn"];
        $ch = $_POST["choice"];
        
        
        if($ch=="insert")
        {
            $INS = "insert into Book_Master(Book_Code,Book_name,Author_name,cost,ISBN_NO) values('$code','$name','$aut','$price','$isbn') ";
            if(mysqli_query($con,$INS)){
                echo "successfully inserted";
            }
        }
        elseif($ch=="update")
        {
           $UPDT = "update Book_Master set Book_name='$name',Author_name='$aut',cost='$price',ISBN_NO='$isbn' where Book_Code='$code' ";
           if(mysqli_query($con,$UPDT)){
               echo "succesfully updated";
            }
        }
        elseif($ch=="delete")
        {
           $DLT = "delete from Book_Master where Book_Code='$code' ";

        if(mysqli_query($con,$DLT)){
            echo "successfully DELETED";
        }
        
       }
        
       
       
    }
        ?>
</body>
</html>