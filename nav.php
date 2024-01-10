    <nav
    id="navbar-main"
    class="
    navbar navbar-main navbar-expand-lg
    position-sticky
    top-0
    shadow
    p-0
    ">
    <div class="container-fluid">
      <ul class="navbar-nav align-items-lg-center" >
          <a href="index.php" class="navbar-brand mr-lg-5 text-white">
         <img class="main-logo" src="assets/img/logo_icon.png" height="50">
         </a>
      </ul>

      <button
       class="navbar-toggler bg-white"
       type="button"
       data-toggle="collapse"
       data-target="#navbar_global"
       aria-controls="navbar_global"
       aria-expanded="false"
       aria-label="Toggle navigation"
      >
   </button>
   <div class="navbar-collapse collapse" id="navbar_global">
    <div class="navbar-collapse-header">
      <div class="row">
        <div class="col-10 collapse-brand">
          <a href="index.html">
            <img src="assets/img/nav.png" />
          </a>
        </div>
        <div class="col-2 collapse-close bg-danger">
          <button
          type="button"
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbar_global"
          aria-controls="navbar_global"
          aria-expanded="false"
          aria-label="Toggle navigation"
          >
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </div>

  <ul class="navbar-nav align-items-lg-center ml-auto topnav" id="nav">
    <li class="nav-item" id="recommendation">
      <div class="dropdown show ">
        <a class="nav-link dropdown-toggle text-white " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="text-white item"
          ><i class="text-white text-center"></i>Services</span
          >
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
         <a class="dropdown-item" href="crop_recommendation.php">Crop Recommendation​</a>
         <a class="dropdown-item" href="crop_prediction.php">Crop Prediction​</a>
         <a class="dropdown-item" href="yield_prediction.php">Yield Prediction​</a>
         <a class="dropdown-item" href="fertilizer_recommendation.php">Fertilizer Recommendation​</a>
         <a class="dropdown-item" href="rainfall_prediction.php">Rainfall Prediction​</a>
       </div>
     </div>
   </li>
   <li class="nav-item" id="prediction">
    <a class="nav-link text-white " href="#about" role="button">
      <span class="text-white item">About</span>
    </a>
  </li>
</ul>
</div>
</div>
</nav>



<style>
  nav {
    background-color: #AA8976;
    height: 75px;
  }

  .main-logo {
    height: 60px !important;
  }

  .navbar-brand {
    font-size: 30px;
  }

  .navbar-brand a:hover {
    color: white !important;
  }

  .topnav a {
    border-bottom: 5px solid transparent;
  }

  .topnav a:hover {
    border-bottom: 5px solid #C6EBC9;
  }

  .topnav a.activa {
    border-bottom: 5px solid #C6EBC9;
  }

  .item {
    font-size: 16px;
  }

</style>	

<script>
  $("#nav li a").each(function() {   
    if (this.href == window.location.href) {
      $(this).addClass("activaa");
    }
  });
</script>