
   <!-- Nav Bar Ends here -->
   @extends('layouts.master')
   @section('title')
   Home - Fame 3
@endsection

@push('styles')
  
@endpush
   <!-- Hero Image Starts here -->
@section('content')
   <div class="hero-image">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="hero-text">
                  {{-- <h5>Renew car insurance in 2 minutes</h5>
                  <h1 class="text-pink">Get your Car & Bike insured <span class="text-black">@ only $50/Year</span></h1> --}}
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
         <!-- Swiper -->
            <div class="swiper-container">
               <div class="swiper-wrapper">
                  
                  <div class="swiper-slide">
                     
                     <div class="slider-text-bg">
                              
                        <div class="title" data-swiper-parallax="900">
                           <img src="images/hero_car_2.png" class="img-fluid" alt="">
                        </div>
                     
                        <div class="text" data-swiper-parallax="1500">
                           <img src="images/hero_car_1.png" class="img-fluid" alt="">
                        </div>

                     </div>
                  </div>
                  
                  <div class="swiper-slide">
                     
                     <div class="slider-text-bg">
                              
                        <div class="title" data-swiper-parallax="600">
                           <img src="images/hero_bike_2.png" class="img-fluid" alt="">
                        </div>
                     
                        <div class="text" data-swiper-parallax="1000">
                           <img src="images/hero_bike_1.png" class="img-fluid" alt="">
                        </div>

                     </div>
                  </div>
                  
                  
               </div>
               <!-- Add Pagination -->
               <div class="swiper-pagination swiper-pagination-h"></div>
            </div>
         <!-- Swiper -->
            </div>

            <div class="col-lg-5 col-md-5 col-sm-12 offset-lg-1 offset-md-1">
             
               
               <div class="form-home">
                  <form>
                     <div class="row">
                 
                        <div class="col-12">
                           <a href="{{route('signin',encrypt(1))}}" class="btn btn-prim-round mt-4" ><i class=""></i> NAB/MHI</a>
                        </div>
                        <div class="col-12">
                           <a href="{{route('signin',encrypt(2))}}" class="btn btn-prim-round mt-4" >OEM</a>
                        </div>
                        <div class="col-12">
                           <a href="{{route('signin',encrypt(3))}}" class="btn btn-prim-round mt-4" >Dealers</a>
                        </div>
                        <div class="col-12">
                           <a href="{{route('signin',encrypt(4))}}" class="btn btn-prim-round mt-4" >Testing Agency</a>
                        </div>
                        
                      
                     </div>
                     
                  </form>
               </div>
            </div>
         </div>
        
      </div>
   </div>

   <!-- Hero Image Ends here -->
   
   <!-- Three columns start here -->
   <div class="section-larger bg-img-left-2">
      <div class="container">
         <div class="row">
            <div class="col-lg-4">
               <div class="numbers">
                  <h2>96%
                     <span>5 Star Ratings</span>
                  </h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, iusto!</p>
                  <div class="number-icons">
                     <img src="images/number_icon_1.png" class="img-fluid" alt="">
                  </div>
               </div>
            </div>
            
            <div class="col-lg-4">
               <div class="numbers">
                  <h2>4.5cr
                     <span>Happy Clients</span>
                  </h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, iusto!</p>
                  <div class="number-icons">
                     <img src="images/number_icon_2.png" class="img-fluid" alt="">
                  </div>
               </div>
            </div>
            
            <div class="col-lg-4">
               <div class="numbers">
                  <h2>99%
                     <span>Quality Products</span>
                  </h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, iusto!</p>
                  <div class="number-icons">
                     <img src="images/number_icon_3.png" class="img-fluid" alt="">
                  </div>
               </div>
            </div>
   
         </div>
      </div>
   </div>
   <!-- Three columns Ends here -->
  
   <!-- Full width Starts here -->

      <div class="section-larger bg-color">
         <div class="container">
            <div class="row vertical-cntr">
               <div class="col-lg-5">
                  <div class="point-list">
                     <ul>
                        <li>
                           <div class="list-icon">
                              <span class="flaticon-credit"></span>
                           </div>
                           <div class="list-text">                              
                              <h6>Incredibly Low Prices</h6>
                              <p>Get the best price, every single time. for your Car and Bike</p>
                           </div>
                        </li>
                        <li>
                           <div class="list-icon">
                              <span class="flaticon-car-insurance-2"></span>
                           </div>
                           <div class="list-text">
                              <h6>Terribly Convenient</h6>
                              <p>Get the best price, every single time. for your Car and Bike</p>
                           </div>
                        </li>
                        <li>
                           <div class="list-icon">
                              <span class="flaticon-document"></span>
                           </div>
                           <div class="list-text">
                              <h6>Zero-Hassle Claims</h6>
                              <p>Get the best price, every single time. for your Car and Bike</p>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-6 col-md-12 col-sm-12 offset-lg-1">
                  <div class="img-container">
                     <img src="images/home_img_1.png" class="img-fluid mt" alt="">
                  </div>
                  <div class="text-container">
                     <h2><span class="sub-heading-1">Special support & caring</span>Insurance Company</h2>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, fugit laudantium? Ad quibusdam blanditiis quas aspernatur.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>

   <!-- Full width Ends here -->
   
   <!-- Four points and text Starts here -->
      <div class="section-larger bg-img-left">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6">
                        
                        <div class="col-icon-bg-cntr">
                           <div class="icon-cntr"><span class="flaticon-fender-bender"></span></div>
                           <div class="col-text-cntr">
                              <h6>Accidents</h6>
                              <p>Lorem ipsum, dolor sit amet conse ctetur adipi.</p>
                           </div>
                        </div>

                     </div>
                     
                     <div class="col-lg-6 col-md-6 col-sm-6">
                        
                        <div class="col-icon-bg-cntr">
                           <div class="icon-cntr"><span class="flaticon-fire-1"></span></div>
                           <div class="col-text-cntr">
                              <h6>Fire</h6>
                              <p>Lorem ipsum, dolor sit amet conse ctetur adipi.</p>
                           </div>
                        </div>

                     </div>

                     <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="col-icon-bg-cntr">
                           <div class="icon-cntr"><span class="flaticon-theft"></span></div>
                           <div class="col-text-cntr">
                              <h6>Theft</h6>
                              <p>Lorem ipsum, dolor sit amet conse ctetur adipi.</p>
                           </div>
                        </div>
                     </div>

                     <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="col-icon-bg-cntr">
                           <div class="icon-cntr"><span class="flaticon-flood"></span></div>
                           <div class="col-text-cntr">
                              <h6>Calamities</h6>
                              <p>Lorem ipsum, dolor sit amet conse ctetur adipi.</p>
                           </div>
                        </div>
                     </div>                  
                    
                  </div>
               </div>
               
               <div class="col-lg-6 col-md-12 col-sm-12 text-container-right">
                  
                     <div class="container-text">
                        <h2>What's Covered Under Our Insurance?</h2>
                        <span class="sub-heading-2">Specific methods and techniques have changed considerably over the years</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis cumque esse excepturi voluptate iusto soluta optio autem nulla aperiam deleniti!</p>
                        <button type="Submit" class="btn btn-prim-round mt-lg-5 mt-md-3 mt-sm-3">Read more</button>
                     </div>
                     
               </div>
            </div>
         </div>
      </div>
   <!-- Four points and text Ends here -->
   
   <!-- Feedback section Starts here -->
   <div class="section bg-color">
      <div class="container">
         <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 vertical-cntr">
               <div class="feedback">
                  <img src="images/feedback_bg.png" class="img-fluid" alt="">
                  <span class="sub-heading-1">Customer’s Feedback</span>
                  <h2>Words of Appreciation</h2>
                  
               <div class="img-container">
                  <img src="images/feedback.png" class="img-fluid" alt="">
               </div>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia tempora dolor mollitia, aspernatur ratione incidunt quia at fugiat dicta odio.</p>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 offset-lg-1 offset-md-1">
               <div class="feedback-list">
                  <div class="client-feedback-left owl-carousel owl-theme">
                     <div class="item-1">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="feedback-content-left">
                                    <div class="feedback-pic-left">
                                       <img src="images/pic_1.jpg" alt="">
                                    </div>
                                    <div class="feedback-text-left">
                                       <h6>BMW Owner, NYC
                                          <span>Mark Smith</span>
                                       </h6>
                                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ea pariatur quae quis reprehenderit quisquam, iusto laborum fuga!</p>
                                    </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     <div class="item-1">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="feedback-content-left">
                                    <div class="feedback-pic-left">
                                       <img src="images/pic_1.jpg" alt="">
                                    </div>
                                    <div class="feedback-text-left">
                                       <h6>BMW Owner, NYC
                                          <span>Mark Smith</span>
                                       </h6>
                                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ea pariatur quae quis reprehenderit quisquam, iusto laborum fuga!</p>
                                    </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     <div class="item-1">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="feedback-content-left">
                                    <div class="feedback-pic-left">
                                       <img src="images/pic_1.jpg" alt="">
                                    </div>
                                    <div class="feedback-text-left">
                                       <h6>BMW Owner, NYC
                                          <span>Mark Smith</span>
                                       </h6>
                                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ea pariatur quae quis reprehenderit quisquam, iusto laborum fuga!</p>
                                    </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Feedback section Ends here -->

   <!-- Client section Starts here -->
   <div class="section-larger bg-img-right">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="title-center">
                  <span class="sub-heading-1">200+ Companies</span>
                  <h2>Connected with us</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, dignissimos.</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 col-6 client"><img src="images/client_1.jpg" class="img-fluid" alt=""></div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6 client"><img src="images/client_2.jpg" class="img-fluid" alt=""></div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6 client"><img src="images/client_1.jpg" class="img-fluid" alt=""></div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6 client"><img src="images/client_2.jpg" class="img-fluid" alt=""></div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6 client"><img src="images/client_2.jpg" class="img-fluid" alt=""></div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6 client"><img src="images/client_1.jpg" class="img-fluid" alt=""></div>
         </div>
      </div>
   </div>
   <!-- Client section Ends here -->
   
   <!-- Insurance section Start here -->
   <div class="section bg-color">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 car-pb">
               <div class="new-car">
                  <div class="new-veh-img"><img src="images/new_car.png" class="img-fluid" alt=""></div>
                  <div class="new-veh-text">
                     <p><strong>Got new car?</strong></p>
                     <p>Save flat 35% on first insurance</p>
                     <a href="#">Insuare</a>
                  </div>
                  
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
               <div class="new-car">
                  <div class="new-veh-img"><img src="images/new_bike.png" class="img-fluid" alt=""></div>
                  <div class="new-veh-text">
                     <p><strong>Bought new Bike?</strong></p>
                     <p>Save flat 35% on first insurance</p>
                     <a href="#">Insuare</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Insurance section Ends here -->

   <!-- Awwards section Starts here -->
   <div class="section-large bg-color-dark">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="title-center">
                  <span class="sub-heading-1">We Achived</span>
                  <h2>Awards & Recognition</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="col-img-cntr">
                    <div class="img-cntr-claim">
                     <div class="img-container-sml">
                        <img src="images/awward_1.png" alt="">
                     </div>
                    </div>
                    <div class="col-text-claim">
                        <h6>Best Company</h6>
                        <p>Animi illo corrupti amet fugiat quod quaerat quibusdam.</p>
                    </div>
                </div>
            </div>
           
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="col-img-cntr">
                    <div class="img-cntr-claim">
                     <div class="img-container-sml">
                        <img src="images/awward_2.png" alt="">
                     </div>
                    </div>
                    <div class="col-text-claim">
                        <h6>Great Support</h6>
                        <p>Animi illo corrupti amet fugiat quod quaerat quibusdam.</p>
                    </div>
                </div>
            </div>
           
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="col-img-cntr">
                    <div class="img-cntr-claim">
                     <div class="img-container-sml">
                        <img src="images/awward_1.png" alt="">
                     </div>
                    </div>
                    <div class="col-text-claim">
                        <h6>Growing Business</h6>
                        <p>Animi illo corrupti amet fugiat quod quaerat quibusdam.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12">
               <div class="col-img-cntr">
                   <div class="img-cntr-claim">
                    <div class="img-container-sml">
                       <img src="images/awward_2.png" alt="">
                    </div>
                   </div>
                   <div class="col-text-claim">
                       <h6>Excellent Service</h6>
                       <p>Animi illo corrupti amet fugiat quod quaerat quibusdam.</p>
                   </div>
               </div>
           </div>
           
         </div>
      </div>
  </div>
   <!-- Awwards section Ends here -->
   
   <!-- Newsletter section Strats here -->
      <div class="section-large bg-img-left-2">
         <div class="container-fluid">
            <div class="container">
               <div class="row">
                  <div class="col-lg-5 col-md-6 col-sm-12 m-auto">
                     <div class="img-container">
                        <img src="images/bg_newsletter.png" alt="">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-7 col-md-7 col-sm-12 m-auto">
                     <div class="title-center pb-4">
                        <h4>Subscribe for Newsletter</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, dignissimos.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-5 col-md-7 col-sm-12 m-auto p-0">
                     <div class="form">
                        <div class="form-group m-0">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="Your email" aria-label="Your email" aria-describedby="basic-addon2" id="basic-addon2">
                              <div class="input-group-append">
                                <button class="btn btn-link" type="button">Submit</button>
                              </div>
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <!-- Newsletter section Ends here -->

 @endsection