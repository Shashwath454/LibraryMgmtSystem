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
<style>
    body{
        background-color: lightblue;
    }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PAI BOOKS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex" role="search" method="GET">
        <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" name="searchbutton">Search</button>
      </form>
    </div>
  </div>
  <ul>
    <li>
        <form method="POST" action="logout.php">
            <button type="submit" name="logout" class="btn btn-success">LOGOUT</button>
        </form>
    </li>
  </ul>
</nav>
<?php if(isset($_GET["searchbutton"])){
    $book=$_GET['search'];?>
    <div class="container py-5">
        <div class="row mt-4">
            <?php
            $conn=mysqli_connect("localhost","root","","shash");
            $query="SELECT * FROM books WHERE Book_Name LIKE '%$book%'";
            $queryrun=mysqli_query($conn,$query);
            if(mysqli_num_rows($queryrun)>0){
                while($row=mysqli_fetch_array($queryrun)){

             
?>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body"><form action="details.php" method="GET">
                        <img src="images/<?php echo $row["Book_Img"];?>"alt=book" height="200px" width="200px">

                        <h2 class="card-title"><?php echo $row["Book_Name"];?></h2>
                            <p class="card-text"><?php echo $row["Book_Des"];?></p>
                            <input type="hidden" name="img" value="images/<?php echo $row["Book_Img"];?>">
                            <input type="hidden" name="bookname" value="<?php echo $row["Book_Name"];?>">
                            <input type="hidden" name="bookdes" value="<?php echo $row["Book_Des"];?>">
                            <input type="hidden" name="bookid" value="<?php echo $row["Book_Id"];?>">

                            <button class="button" type="submit" name="detailsbutton">DETAILS</button>
                </form>
                
                    
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>
    </div>

   <?php
}
else{
?>
    <div class="container py-5">
        <div class="row mt-4">
            <?php
            $conn=mysqli_connect("localhost","root","","shash");
            $query="SELECT * FROM books";
            $queryrun=mysqli_query($conn,$query);
            if(mysqli_num_rows($queryrun)>0){
                while($row=mysqli_fetch_array($queryrun)){
             
?>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body"><form action="details.php" method="GET">
                        <img src="images/<?php echo $row["Book_Img"];?>"alt=book" height="200px" width="200px">

                        <h2 class="card-title"><?php echo $row["Book_Name"];?></h2>
                            <p class="card-text"><?php echo $row["Book_Des"];?>
                            <input type="hidden" name="img" value="images/<?php echo $row["Book_Img"];?>">
                            <input type="hidden" name="bookname" value="<?php echo $row["Book_Name"];?>">
                            <input type="hidden" name="bookdes" value="<?php echo $row["Book_Des"];?>">
                            <input type="hidden" name="bookid" value="<?php echo $row["Book_Id"];?>">

                            <button class="button" type="submit" name="detailsbutton">DETAILS</button>
                </form></div>
                </div>
            </div>
        
            <?php
                
                }
            }
            ?>
        </div>
    </div>
    <?php } ?>

</body>
</html>