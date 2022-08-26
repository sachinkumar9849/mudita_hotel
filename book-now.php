<?php include 'header.php'; ?>
<section id="banner">
   <div class="container-fluid p-0">
      <div class="row">
         <div class="col-12">
            <div class="banner_block">
               <div class="banner_img">
                  <img class="image_bg" src="images/banner/about02.jpg" alt="">
               </div>
               <div class="banner text-white text-center">
                  <h2>BOOK NOW</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<a href="#book_now" class="scroll-down" address="true"></a>   
<section id="book_now" class="book-now contact padding bg_graylight right_bg position-relative">
   <div class="container">
      <div class="row">
         <div class="col-lg-5">
            <div class="section_title ">
               <div class="float-text">
                  <h1>Booking Now</h1>
               </div>
               <h1> 
                  Pick a room that best suits your taste and budget
               </h1>
            </div>
            <div class="left_block">
               <div class="div-wrapp d-flex mt-5">
                  <div class="icon_block text-center mr-4">
                     <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                  </div>
                  <div class="text_block d-flex flex-column justify-content-center">
                     <h3>Address</h3>
                     <p>Boudhadwar Marga, Boudha Kathmandu</p>
                  </div>
               </div>
               <div class="div-wrapp d-flex mt-5">
                  <div class="icon_block text-center mr-4">
                     <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                  </div>
                  <div class="text_block d-flex flex-column justify-content-center">
                     <h3>Phone Number</h3>
                     <p>+977-01-4494334, +977-01-4494335</p>
                  </div>
               </div>
               <div class="div-wrapp d-flex mt-5">
                  <div class="icon_block text-center mr-4">
                     <span><i class="fa fa-envelope-open-o" aria-hidden="true"></i></span>
                  </div>
                  <div class="text_block d-flex flex-column justify-content-center">
                     <h3>Email Address</h3>
                     <p>info@hotelmudita.com</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-7">
            <div class="right_side_box ">
               <form action="">
                  <div class="booking_block">
                     <h3>Booking</h3>
                     <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="mb-3 d-flex flex-column">
                              <label  class="form-label">Arrival Date</label>
                              <input type="date" class="form-control" >
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="mb-3 d-flex flex-column">
                              <label class="form-label">Depature Date</label>
                              <input type="date" class="form-control" >
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="mb-3 d-flex flex-column">
                              <label  class="form-label">Adult</label>
                              <div class="div_input">
                                 <input class="form-control"  value="0" type="number">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="mb-3 d-flex flex-column">
                              <label class="form-label">Children</label>
                              <div class="div_input">
                                 <input class="form-control"  value="0" type="number">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="personal_block">
                     <h3>Personal </h3>
                     <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="mb-3 d-flex flex-column">
                              <label  class="form-label">Name</label>
                              <input type="text" class="form-control" >
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="mb-3 d-flex flex-column">
                              <label  class="form-label">Address</label>
                              <input type="text" class="form-control" >
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="mb-3 d-flex flex-column">
                              <label class="form-label">Contact No.</label>
                              <input type="tel" class="form-control">
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="mb-3 d-flex flex-column">
                              <label  class="form-label">Email</label>
                              <input type="email" class="form-control" id="">
                           </div>
                        </div>
                     </div>
                     <label class="form-label">Message</label>
                     <textarea name="" id="" class="form-control"></textarea>
                     <button type="submit" class="btn  mt-5 mx-0 w-100 bg-white text-dark">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<section></section>
<?php include 'footer.php'; ?>