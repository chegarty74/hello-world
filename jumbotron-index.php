<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jumbotron Page</title>

    <!-- Latest compiled and minified CSS
(This is from the CDN.) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Custom styles for this template. This is from the Starter Template Code. -->
<link rel="stylesheet" href="jumbotron-ch.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">CRH</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- Main jumbotron for a primary marketing message of call to action-->

<div class="jumbotron">
    <div class="container">
        <h1>My Server Playground</h1>
        <p>This page runs locally from the server I've set up with XAMPP. I'm going to use it build and practice back-end development.</I></p>

        <?php date_default_timezone_set('America/Chicago'); ?>

        <p>Today's date is <?php echo date("m/d/Y"); ?>. </p>

        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn More &raquo;</a></p>
    </div>
</div>

<div class="container">
    
    <!-- Begin row of columns: -->
  <div class="row">
    <div class="col-md-4">
        <h2>Heading 1</h2>
        <p>Here is text for the 1st column. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.  </p>

        <p><a class="btn btn-default" href="#" role="button">View Details &raquo;</a></p>
    </div>

    <div class="col-md-4">
        <h2>Heading 2</h2>
        <p>Here is text for the 2nd column. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.</p>
        
        <p><a class="btn btn-default" href="#" role="button">View Details &raquo;</a></p>
        
    </div>

    <div class="col-md-4">
        <h2>Heading 3</h2>
        <p>Here is text for the 3rd column. Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

        <p><a class="btn btn-default" href="#" role="button">View Details &raquo;</a></p>
    </div>

  </div> <!--close row-->

  <div class="container">
    <h2>Contact</h2>
  </div>

  <form action="form-submission.php" method="post">
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last name">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4"></label>
      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4"></label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  

  <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
</form>


    <hr>

    <footer>
        <p>&copy; 2019 AIM Institute</p>
    </footer>

</div> <!-- close container -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  

</body>
</html>