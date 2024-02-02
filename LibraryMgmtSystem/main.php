<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PAI Books</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">

    <div class="container-fluid">
      <a class="navbar-brand" href="#"><B>PAI BOOKS</B></a>
      <br>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex" role="search" method="GET">
          <a class="navbar-brand" href="#">HOME</a>

          <a class="navbar-brand" href="signin.php">CREATE ACCOUNT</a>
          <a class="navbar-brand" href="login.php">LOGIN HERE</a>



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
  <h1><B>THE BEST ONLINE BOOK STORE IS HERE<B></h1>
  <p><I>We are here to give you the access for all types of books you've been searching for at very low subscription prise. </I></p>



  <h1><B>PRICING</B></h1>
  <h2>Free - ₹0/month</h2>
  <ul>
    <li>Email support</li>

    <button> <a class="navbar-brand" href="signin.php">Sign Up Now</a></button>

  </ul>

  <h2>Basic - ₹150/month</h2>
  <ul>
    <li>Email support</li>
    <li>Help center access</li>
    <button> <a class="navbar-brand" href="signin.php">Sign Up Now</a></button>
  </ul>

  <h2>Pro - ₹500/month</h2>
  <ul>
    <li>One Month Free Access</li>
    <li>Email support</li>
    <li>Help center access</li>
    <button> <a class="navbar-brand" href="signin.php">Sign Up Now</a></button>
  </ul>
  <style>
    body {
      background-color: darkorange;
    }
  </style>
</body>
<footer>
  Copyright &copy; paibooks.com | All rights reserved
</footer>


</body>

</html>