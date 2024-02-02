<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    $conn=mysqli_connect('localhost','root','','shash');
    if($_SERVER['REQUEST_METHOD']=='GET'){
        $name=$_GET["bookname"];
        $details=$_GET["bookdes"];
        $image=$_GET["img"];
        $bookid=$_GET["bookid"];
        $query="SELECT author,publish_year FROM books WHERE Book_Id='$bookid'";
        $queryrun=mysqli_query($conn,$query);
        if(mysqli_num_rows($queryrun)>0){
            while($row=mysqli_fetch_array($queryrun)){
            
      
            

                ?>
                <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="<?php echo $image;?>">

                        <h2 class="card-title">NAME : <?php echo $name;?></h2>
                        <h5 class="card-text">DETAILS : <?php echo $details;?></h5>
                        <h3>AUTHOR : <?php echo $row['author']?></h3>
                        <h4>Published Year : <?php echo $row['publish_year']?></h4>
                            
                    
                    
                    </div>
                </div>
            </div>
<?php
        }
    }
            }
?>

</body>
</html>