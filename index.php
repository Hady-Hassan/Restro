<?php include("navbar.php"); ?>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #D58206;">
    <div class="container-fluid">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav" style = "margin: auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php" style="margin-left: 60px;">All <span class="sr-only">(current)</span></a>
          </li>

          

          <li class="nav-item active">
            <a class="nav-link" href="tables.php" style="margin-left: 60px;">Pizza</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="offers.php" style="margin-left: 60px;">Pasta</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="offers.php" style="margin-left: 60px;">Burger</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="offers.php" style="margin-left: 60px;">Deserts</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="offers.php" style="margin-left: 60px;">Drinks</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
<!--the slider should start here-->

<!--the slider should end here-->
<div class="card border-warning-5" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Pizza</h5>
    <p class="card-text">25$ <input type="number" value="1" min="1" max="1000" step="1" id="spinner" style="width: 50%;"/> </p>
    <a href="#" class="btn" style="background-color: #FF9900; color:white;">Add</a>
  </div>
</div>

<?php include("footer.php"); ?>
