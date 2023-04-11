<?php include_once './view/inc/_header.php'; ?>

         <div class="row">
            <div class="col-sm-4">
               <div class="search_icon"><img src="images/search-icon.png"></div>
            </div>
            <div class="col-sm-4">
               <div class="logo"><img src="images/logo.png"></div>
            </div>
            <div class="col-sm-4">
               <div class="togle_3">
                  <div class="left_main">
                     <div class="menu_main">
                        <a href="#"><i class="fa fa-fw fa-user"></i> Login</a>
                     </div>
                  </div>
                  <div class="middle_main">
                     <div class="shoping_bag"><img src="images/shopping-bag.png"></div>
                  </div>
                  <div class="right_main">
                     <div class="togle_main"><a class="class="openbtn onclick="openNav()"><img src="images/togle-menu-icon.png" style="max-width: 100%;"></a></div>
                  </div>
               </div>
            </div>
         </div>
     </div>

   <!-- our section start -->
   <div class="our_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <h1 class="our_text"><strong>Our<span style="color: #000;">Cycles</span></strong></h1>
               <p class="about_lorem">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</p>
            </div>
         </div>
      </div>
      <div class="our_section_2">
         <div class="our_main">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="images/our-img-1.png" alt="First slide">
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="images/our-img-1.png" alt="Second slide">
               </div>
               <div class="carousel-item">
                 <img class="d-block w-100" src="images/our-img-1.png" alt="Third slide">
               </div>
            </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
               </a>
            </div>
          </div>
          <button class="seemore_bt">See More</button>
      </div>
   </div>
   <?php include_once './view/inc/_footer.php'; ?>


