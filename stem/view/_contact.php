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
                     <div class="togle_main"><a class="class="openbtn" onclick="openNav()"><img src="images/togle-menu-icon.png" style="max-width: 100%;"></a></div>
                  </div>
               </div>
            </div>
         </div>
     </div>

   <div class="contact_section layout_padding">
      <div class="container">
         <h1 class="contact_text"><strong>Contact Us</strong></h1>
      </div>
            <div class="contact_main">
               <div class="enput_section">
                  <div class="email_box">
                    <div class="input_main">
                       <div class="container">
                          <form action="/action_page.php">
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Name" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Email" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Phone Numbar" name="Email">
                            </div>
                            
                            <div class="form-group">
                                <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                            </div>
                          </form>   
                       </div> 
                       <div class="send_btn">
                        <button type="button" class="main_bt"><a href="#">Send</a></button>
                       </div>                   
                    </div>
                 </div>
               </div>
            </div>
   </div>
   <?php include_once './view/inc/_footer.php'; ?>


