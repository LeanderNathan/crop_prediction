<!DOCTYPE html>
<html>
<?php include ('header.php');  ?>

<body style="background-color: #F0E2D0;" id="top">

  <?php include ('nav.php');  ?>

  <div class="wrapper" >
    <div class="wrapper">
      <header class="jumbotron d-flex flex-column justify-content-center">
        <div class="container">
          <div class="row row-header">
            <div class="col">
              <h1 class="text-white text-center">Crop Prediction System</h1>
              <p class="text-white text-center">
               Empowering Farmers across India.
             </p>
           </div>
         </div>
       </div>
     </header>
     <!-- Page Content -->

     <!-- ======================================================================================================================================== -->

     <div class="section features-6 text-dark" id="about">
      <div class="container ">

        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <h3 class="display-3 ">About</h3>
          </div>
        </div>
        <br>

        <div class="row align-items-center">

          <div class="col-lg-6">
            <div class="display-3">
              <div class="description">
                <h3 class="display-3 text-justify" >Farmers</h3>
                <p class=" ">Farmers can get recommendations for crop and fertilizer and even 
                predictions for crop, yield and rainfall. All these are implemented using ML with proper dataset. </p>                
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-10 mx-md-auto d-none d-md-block">
            <img class="ml-lg-5  pull-right" src="assets/img/agri.png" width="100%">
          </div>
        </div>
      </div>
    </div>



    <!-- ======================================================================================================================================== -->

    <div class="section features-2 text-dark" id="features"> 
      <div class="container"> 
        <div class="row align-items-center"> 
          <div class="col-lg-5 col-md-8 mr-auto text-left"> 
            <div class="pr-md-5">
              <h3 class="display-3 text-justify">Features</h3>
              <p>The time is now for the next step in farming. We bring you the future of farming along with great tools for asisting the farmers.</p>
              <ul class="list-unstyled mt-3"> 
                <li class="py-2"> 
                  <div class="d-flex align-items-center"> 
                    <div>
                      <div class="badge badge-circle badge-primary mr-3"> <i class="ni ni-settings-gear-65"> </i></div>
                    </div>
                    <div>
                      <h6 class="mb-0">Crop Prediction and Recommendation</h6>
                    </div>
                  </div>
                </li>
                <li class="py-2"> 
                  <div class="d-flex align-items-center"> 
                    <div>
                      <div class="badge badge-circle badge-primary mr-3"> <i class="ni ni-html5"> </i></div>
                    </div>
                    <div>
                      <h6 class="mb-0">Fertilizer Recommendation</h6>
                    </div>
                  </div>
                </li>
                <li class="py-2"> 
                  <div class="d-flex align-items-center"> 
                    <div>
                      <div class="badge badge-circle badge-primary mr-3"> <i class="ni ni-settings-gear-65"> </i></div>
                    </div>
                    <div>
                      <h6 class="mb-0">Yield Prediction</h6>
                    </div>
                  </div>
                </li>
                <li class="py-2"> 
                  <div class="d-flex align-items-center"> 
                    <div>
                      <div class="badge badge-circle badge-primary mr-3"> <i class="ni ni-satisfied"> </i></div>
                    </div>
                    <div>
                      <h6 class="mb-0">Rainfall Prediction</h6>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>



          <div class="col-lg-7 col-md-12 pl-md-0"> 
           <img class="img-fluid ml-lg-5" src="assets/img/features.png" width="100%">
         </div>


       </div>
     </div>
     <span > </span>
   </div>

   <!-- ======================================================================================================================================== -->



   <div class="section features-6 text-dark" id="tech">
    <div class="container-fluid shado">

      <div class="row">
        <div class="col-md-8 mx-auto text-center">
          <h3 class="display-3 ">Our Development Stack</h3>
        </div>
      </div>

      <div class="row text-lg-center justify-content-center mt-3">
        <div class="col-md-2">
          <div class="info">
            <img class=" img-fluid" src="assets/img/html.png" alt="HTML5">                       
            <h6 class="info-title text-uppercase text-primary">HTML5</h6>
          </div>
        </div>

        <div class="col-md-2">
          <div class="info">
            <img class=" img-fluid" src="assets/img/css3.png" alt="CSS3">                       
            <h6 class="info-title text-uppercase text-primary">CSS3</h6>
          </div>
        </div>

        <div class="col-md-2">
          <div class="info">
            <img class=" img-fluid" src="assets/img/js.png" alt="JavaScript">                       
            <h6 class="info-title text-uppercase text-primary">JavaScript</h6>
          </div>
        </div>
        <div class="col-md-2 d-none d-md-block">
          <div class="info">
            <img class=" img-fluid" src="assets/img/bootstrap.png" alt="BootStrap4">                       
            <h6 class="info-title text-uppercase text-primary">BootStrap4</h6>
          </div>
        </div>
        <div class="col-md-2 d-none d-md-block">
          <div class="info">
            <img class=" img-fluid" src="assets/img/apache.png" alt="Apache">                       
            <h6 class="info-title text-uppercase text-primary">Apache</h6>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require("footer.php");?>


</body>
<style type="text/css">
  header {
    background-image: url('assets/img/header_img.jpg');
    height: 100vh;
    z-index: -2;
  }

  header:after {
    content: '';
    position: absolute;
    z-index: -1;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, transparent 10%, black 100%);
  }

  h1 {
    font-size: 60px;
  }
</style>
</html>