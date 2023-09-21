<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SOFCODE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "bootstrap/css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
	<nav class="navbar navbar-expand-lg bg-danger-subtle">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><B>SOFCODE <i class = "fa fa-cube"></i></B></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About.php">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">CONTACT US</a>
        </li>
      <li class="nav-item">
          <a class="nav-link" href="product.php">PRODUCTS</a>
        </li>
      </ul>
	  <DIV class="d-flex" role="log in/sign up">
      <button class="btn btn-outline-success" type="sign up">LOG IN</button>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
		<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">sofcode</strong>
    <small class="text-body-secondary">11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
   sign up succesfull
  </div>
</div>
      </form>
    </div>
  </div>
</nav>
<div>
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
</div>
 <footer class = "bg-green">
        <div class = "container">
            <div class = "row pt-4 text-white">
                <div class = "col-md-6 text-center text-md-start">
                    <p><span class = "fw-bold">SOFCODE &copy;</span> Copyright 2023</p>
                </div>
                <div class = "col-md-6 d-flex justify-content-center justify-content-md-end">
                    <ul class = "d-flex p-0">
                        <li><i class = "fab fa-facebook-f px-2"></i></li>
                        <li><i class = "fab fa-twitter px-2"></i></li>
                        <li><i class = "fab fa-instagram px-2"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>