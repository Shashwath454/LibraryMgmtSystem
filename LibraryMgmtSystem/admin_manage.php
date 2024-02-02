<?php 
$conn=mysqli_connect('localhost','root','','shash');
if(isset($_POST['addbook'])){
    $bookid=$_POST['book_id'];
    $bookname=$_POST['book_name'];
    $bookimage=$POST_['book_img'];
    $bookdetails=$POST_['book_details'];
    $author=$POST_['author'];
    $pubyear=$POST_['book_publish_year'];
    $query="INSERT INTO  books VALUES('$bookid','$bookname','$bookimage','$bookdetails','$author','$pubyear')";
    if($conn->query($query)){
        echo "Book Inserted";
    }
    else{
        echo "Error Cancelled";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Books</title>
</head>
<body> <fORM action="" method="POST">
    <h1><center>ADD YOUR BOOK</center></h1>
    <input type="number" name="book_id" placeholder="ENTER BOOK ID ">
    <br><br>
    <input type="text" name="book_name" placeholder="ENTER BOOK NAME">
    <br><br>
    <input type="text" name="book_image" placeholder="ENTER BOOK IMAGE NAME ">
    <br><br>
    <input type="text" name="book_details" placeholder="ENTER BOOK DETAILS ">
    <br><br>
    <input type="text" name="book_author" placeholder="ENTER BOOK AUTHOR ">
    <br><br>
    <input type="text" name="book_publish_year" placeholder="ENTER BOOK PUBLISH YEAR ">
    <br><br>
    <button type="submit" name="submit_button" >SUBMIT YOUR DETAILS</button>
    </fORM>

</body>
</html>
