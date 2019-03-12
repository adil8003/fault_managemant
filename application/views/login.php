<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Maple Estate & Letting Agents Ltd. are Sales and Lettings Agents covering Harrow and the surrounding areas" />

<meta name="keywords" content="buy in Harrow, sell in Harrow, for sale in Harrow, selling in Harrow, estate agents in Harrow, buying in Harrow, houses in Harrow, properties in Harrow, homes in Harrow, flats in Harrow, to let in Harrow, to rent in Harrow, rent in Harrow, let in Harrow, lettings in Harrow, homes to let Harrow, houses to let Harrow, flats to let Harrow, homes to rent Harrow, houses to rent Harrow, flats to rent Harrow, property management in Harrow, lettings agents in Harrow, maple estate agents harrow, maple estates harrow, " />

	<title>Sales & Lettings in Harrow | Maple Estate & Letting Agents Ltd.</title>
    <?php $this->load->view('header'); ?>
	
</head>
<body>


<?php $this->load->view('menubar'); ?>
 <!-- Main Slider With Form -->
    <section class="osahan-slider">
         <div id="osahanslider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#osahanslider" data-slide-to="0" class="active"></li>
               <li data-target="#osahanslider" data-slide-to="1"></li>
               <li data-target="#osahanslider" data-slide-to="2"></li>
               <li data-target="#osahanslider" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <div class="carousel-item active slider-one">
                  <div class="overlay"></div>
               </div>
               <div class="carousel-item slider-two">
                  <div class="overlay"></div>
               </div>
               <div class="carousel-item slider-three">
                  <div class="overlay"></div>
               </div>
               <div class="carousel-item slider-four">
                  <div class="overlay"></div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#osahanslider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#osahanslider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         <div class="slider-form">
            <!-- <div class="container">
               <h2 class="text-left mb-5">Find Your Dream Home</h2>
               <form>
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">For Sale</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">TO LET</a>
                     </li>
                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row no-gutters">
                           <div class="col-md-4">
                              <div class="input-group">
                                 <div class="input-group-addon"><i class="mdi mdi-map-marker-multiple"></i></div>
                                 <input class="form-control" placeholder="Enter Location, Project or Landmark" type="text">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="input-group">
                                 <div class="input-group-addon"><i class="mdi mdi-google-maps"></i></div>
                                 <select class="form-control select2 no-radius">
                                    <option value="">Locations</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District Of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="input-group">
                                 <div class="input-group-addon"><i class="mdi mdi-security-home"></i></div>
                                 <select class="form-control select2 no-radius">
                                    <option value="">Property Type</option>
                                    <option value="">House/Villa</option>
                                    <option value="">Flat</option>
                                    <option value="">Plot/Land</option>
                                    <option value="">Office Space</option>
                                    <option value="">Shop/Showroom</option>
                                    <option value="">Commercial Land</option>
                                    <option value="">Warehouse/ Godown</option>
                                    <option value="">Industrial Building</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-2">  
                              <button type="submit" class="btn btn-secondary btn-block no-radius font-weight-bold">SEARCH</button>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row no-gutters">
                           <div class="col-md-7">
                              <div class="input-group">
                                 <div class="input-group-addon"><i class="mdi mdi-map-marker-multiple"></i></div>
                                 <input class="form-control" placeholder="Enter Landmark, Location or Society" type="text">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="input-group">
                                 <div class="input-group-addon"><i class="mdi mdi-security-home"></i></div>
                                 <select class="form-control select2 no-radius">
                                    <option value="">Property Type</option>
                                    <option value="">House/Villa</option>
                                    <option value="">Flat</option>
                                    <option value="">Plot/Land</option>
                                    <option value="">Office Space</option>
                                    <option value="">Shop/Showroom</option>
                                    <option value="">Commercial Land</option>
                                    <option value="">Warehouse/ Godown</option>
                                    <option value="">Industrial Building</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-2">  
                              <button type="submit" class="btn btn-secondary btn-block no-radius font-weight-bold">SEARCH</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
               <div class="top-search">
                  <strong><i class="mdi mdi-keyboard"></i> Top Search</strong>
                  <a href="#">Flat</a>
                  <a href="#">Plot/Land</a>
                  <a href="#">Office Space</a>
                  <a href="#">Shop/Showroom</a>
                  <a href="#">Commercial Land</a>
                  <a href="#">Warehouse/ Godown</a>
                  <a href="#">Industrial Building</a>
               </div>
            </div> -->
         </div>
    </section>
      <!-- End Main Slider With Form -->

   <section class="section-padding oddDiv">
         
         <div class="container">
            <div class="row">
              
               
               <div class="pl-4 col-lg-5 col-md-5 pr-4">
                  <img class="rounded img-fluid" src="<?php echo base_url(); ?>asset/images/home/i1.jpg" alt="Card image cap">
               </div>
               <div class="col-lg-6 col-md-6 pl-5 pr-5">
                  <div class="hiddenCls"></div>
               <h3>WELCOME TO MAPLE ESTATE & LETTING AGENTS LTD</h3>
               <br>
                <h6 >Maple is a company with a human face and not a corporate one.
                    Apart from our extensive and unrivalled experience in the area we recognise that whether 
                    buying, selling, renting or letting, your 'moving experience' should be as pain-free as
                    possible.
                </h6>
                 
               </div>
            </div><br>
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
               
               <h3 class="mt-0 " style="text-align:center;">For the most efficient fault reporting service please use our website <u> ‘report a fault’</u>
               under the contact us heading on our website</h3>
               
               <!-- <p class="mb-4 hometext"> -->
               <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
                     <u style="color:black;">Gas/Central Heating </u>    
                     <br>
                     <p style="color:black;">BRITISH GAS         0800 048 1000</p>
                     <br>
                  </div>
                  <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
                     <u style="color:black;">General Repairs</u>
                     <br>
                     <p style="color:black;">Emergency contact Number
                  
                     07867309435</p><br>
                  
                  </div>
                  <div class="col-md-2"></div>
                  
               </div>
                        <div class="text-center">
                              <button type="button" class="btn btn-primary">MORE</button>
                           
                        </div>
                  
            </div>    
         </div>
   </section> 
     <!-- Properties List -->
       <!-- What We Provide -->
    <section class="section-padding ">
         <div class="section-title text-center mb-5">
            <h2>SERVICES</h2>
            <p>WE SPECIALISE IN...    </p>                                                                                                                                                                                                                                                                                                                                                                            </p>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4 text-center">
                  <div class="mt-4 mb-4 "><i class="round-icon text-secondary mdi mdi-account-box-outline mdi-48px"></i></div>
                  <h5 class="mt-3 mb-3">Residential Sales</h5>
                  
               </div>
               <div class="col-lg-4 col-md-4 text-center">
                  <div class="mt-4 mb-4"><i class="round-icon text-secondary mdi mdi-check-circle-outline mdi-48px"></i></div>
                  <h5 class="mb-3">Residential Lettings</h5>
                 
               </div>
               <div class="col-lg-4 col-md-4 text-center">
                  <div class="mt-4 mb-4"><i class="round-icon text-secondary mdi mdi-account-multiple-outline mdi-48px"></i></div>
                  <h5 class="mt-3 mb-3">Local market knowledge</h5>
                  
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-4 text-center">
                  <div class="mt-4 mb-4"><i class="round-icon text-secondary mdi mdi-clock mdi-48px"></i></div>
                  <h5 class="mb-3">Free, no obligation valuations</h5>
                 
               </div>
               <div class="col-lg-4 col-md-4 text-center">
                  <div class="mt-4 mb-4"><i class="round-icon text-secondary mdi mdi-sticker-emoji mdi-48px"></i></div>
                  <h5 class="mt-3 mb-3">Informed and impartial advice</h5>
                 
               </div>
               <div class="col-lg-4 col-md-4 text-center">
                  <div class="mt-4 mb-4"><i class="round-icon text-secondary mdi mdi-comment-alert-outline mdi-48px"></i></div>
                  <h5 class="mt-3 mb-3">Commercial Property</h5>
                  
               </div>
            </div>
         </div>
    </section>
      <!-- End What We Provide -->
    <section class="section-padding oddDiv">
         <div class="section-title text-center mb-5">
            <h2>FEATURED PROPERTIES</h2>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <div class="card card-list">
                     <a href="#">
                        <div class="card-img">
                           <div class="love-badge text-danger"><i class="mdi mdi-heart"></i></div>
                           <div class="badge images-badge"><i class="mdi mdi-image-filter"></i> 12</div>
                           <span class="badge badge-primary">For Sale</span>
                           <img class="card-img-top" src="<?php echo base_url(); ?>asset/images/home/f1.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                           <h2 class="text-primary mb-2 mt-0">
                           £20,000 <small>/Per Annum Fees</small>
                           </h2>
                           <h5 class="card-title mb-2">Loft Above The City</h5>
                           <h6 class="card-subtitle mt-1 mb-0 text-muted"><i class="mdi mdi-home-map-marker"></i> Nolton Place, Edgware, Middlesex, HA8</h6>
                        </div>
                        <div class="card-footer">
                           <span><i class="mdi mdi-sofa"></i> Beds : <strong>3</strong></span>
                           <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>2</strong></span>
                           <span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>587 sq ft</strong></span>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="card card-list">
                     <a href="#">
                        <div class="card-img">
                           <div class="love-badge text-danger"><i class="mdi mdi-heart"></i></div>
                           <div class="badge images-badge"><i class="mdi mdi-image-filter"></i> 60</div>
                           <span class="badge badge-secondary">TO LET</span>
                           <img class="card-img-top" src="<?php echo base_url(); ?>asset/images/home/f1.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                           <h2 class="text-primary mb-2 mt-0">
                           £630,000 <small>/Per Annum Fees</small>
                           </h2>
                           <h5 class="card-title mb-2">Loft Above The City</h5>
                           <h6 class="card-subtitle mt-1 mb-0 text-muted"><i class="mdi mdi-home-map-marker"></i> Stuart Road, Harrow, Middlesex, HA3</h6>
                        </div>
                        <div class="card-footer">
                           <span><i class="mdi mdi-sofa"></i> Beds : <strong>5</strong></span>
                           <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>3</strong></span>
                           <span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>300 sq ft</strong></span>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="card card-list">
                     <a href="#">
                        <div class="card-img">
                           <div class="love-badge text-danger"><i class="mdi mdi-heart-outline"></i></div>
                           <div class="badge images-badge"><i class="mdi mdi-image-filter"></i> 03</div>
                           <span class="badge badge-success">For Sale</span>
                           <img class="card-img-top"src="<?php echo base_url(); ?>asset/images/home/f1.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                           <h2 class="text-primary mb-2 mt-0">
                           £20,000 <small>/Per Annum Fees</small>
                           </h2>
                           <h5 class="card-title mb-2">Loft Above The City</h5>
                           <h6 class="card-subtitle mt-1 mb-0 text-muted"><i class="mdi mdi-home-map-marker"></i> Nolton Place, Edgware, Middlesex, HA8</h6>
                        </div>
                        <div class="card-footer">
                           <span><i class="mdi mdi-sofa"></i> Beds : <strong>2</strong></span>
                           <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>1</strong></span>
                           <span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>100 sq ft</strong></span>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <div class="card card-list">
                     <a href="#">
                        <div class="card-img">
                           <div class="love-badge text-danger"><i class="mdi mdi-heart-outline"></i></div>
                           <div class="badge images-badge"><i class="mdi mdi-image-filter"></i> 18</div>
                           <span class="badge badge-danger">For Sale</span>
                           <img class="card-img-top" src="<?php echo base_url(); ?>asset/images/home/f1.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                           <h2 class="text-primary mb-2 mt-0">
                           £630,000 <small>/Per Annum Fees</small>
                           </h2>
                           <h5 class="card-title mb-2">Store Space Greenville</h5>
                           <h6 class="card-subtitle mt-1 mb-0 text-muted"><i class="mdi mdi-home-map-marker"></i> Stuart Road, Harrow, Middlesex, HA3</h6>
                        </div>
                        <div class="card-footer">
                           <span><i class="mdi mdi-sofa"></i> Beds : <strong>6</strong></span>
                           <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>4</strong></span>
                           <span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>987 sq ft</strong></span>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="card card-list">
                     <a href="#">
                        <div class="card-img">
                           <div class="love-badge text-danger"><i class="mdi mdi-heart"></i></div>
                           <div class="badge images-badge"><i class="mdi mdi-image-filter"></i> 04</div>
                           <span class="badge badge-warning">TO LET</span>
                           <img class="card-img-top" src="<?php echo base_url(); ?>asset/images/home/f1.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                           <h2 class="text-primary mb-2 mt-0">
                           £20,000 <small>/Per Annum Fees</small>
                           </h2>
                           <h5 class="card-title mb-2">Villa in Melbourne</h5>
                           <h6 class="card-subtitle mt-1 mb-0 text-muted"><i class="mdi mdi-home-map-marker"></i> Nolton Place, Edgware, Middlesex, HA8</h6>
                        </div>
                        <div class="card-footer">
                           <span><i class="mdi mdi-sofa"></i> Beds : <strong>8</strong></span>
                           <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>4</strong></span>
                           <span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>120 sq ft</strong></span>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="card card-list">
                     <a href="#">
                        <div class="card-img">
                           <div class="love-badge text-danger"><i class="mdi mdi-heart-outline"></i></div>
                           <div class="badge images-badge"><i class="mdi mdi-image-filter"></i> 45</div>
                           <span class="badge badge-info">TO LET</span>
                           <img class="card-img-top" src="<?php echo base_url(); ?>asset/images/home/f1.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                           <h2 class="text-primary mb-2 mt-0">
                           £630,000 <small>/Per Annum Fees</small>
                           </h2>
                           <h5 class="card-title mb-2">Villa on Hollywood Boulev</h5>
                           <h6 class="card-subtitle mt-1 mb-0 text-muted"><i class="mdi mdi-home-map-marker"></i>Stuart Road, Harrow, Middlesex, HA3</h6>
                        </div>
                        <div class="card-footer">
                           <span><i class="mdi mdi-sofa"></i> Beds : <strong>1</strong></span>
                           <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>3</strong></span>
                           <span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>187 sq ft</strong></span>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row mt-4">
               <div class="col-md-12 text-center">
               <button type="button" class="btn btn-primary" type="submit">VIEW ALL</button>
               </div>
            </div>
         </div>
    </section>
      <!-- End Properties List -->
     <!-- Trusted Agents -->
    <section class="section-padding ">
         <div class="section-title text-center mb-5">
            <h2>REVIEWS</h2>
           
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <div class="agents-card text-center">
                     <img class="img-fluid mb-4" src="<?php echo base_url(); ?>asset/images/review/user.jpg" alt="">
                     <p class="mb-4">Gems of estate agency, I was given practical and clear advice
                        updated regularly and thoroughly explained requirements and procedures. Complete service from start to finish - will be back as soon as I buy another property. </p>
                     <h6 class="mb-0 text-primary">- Stave Martin
                        <span class="star-rating">
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star-half text-warning"></i>
                        </span>
                     </h6>
                     <small>Buying Agent</small>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="agents-card text-center">
                     <img class="img-fluid mb-4" src="<?php echo base_url(); ?>asset/images/review/user.jpg" alt="">
                     <p class="mb-4">First of all, need to thank Ewelina. She was so helpful, kind, professional and friendly. She did understand very quickly which were my necessities and she has worked hard to find what could best suit me.</p>
                     <h6 class="mb-0 text-primary">- Mark Smith
                        <span class="star-rating">
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star-half text-warning"></i>
                        </span>
                     </h6>
                     <small>Selling Agent</small>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="agents-card text-center">
                     <img class="img-fluid mb-4" src="<?php echo base_url(); ?>asset/images/review/user.jpg" alt="">
                     <p class="mb-4">Very knowledgeable and efficient team, I was impressed from the moment I walked in, friendly people, know the market very well and gave good practical advice.</p>
                     <h6 class="mb-0 text-primary">- Ryan Printz 
                        <span class="star-rating">
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star-half text-warning"></i>
                        </span>
                     </h6>
                     <small>Real Estate Broker</small>
                  </div>
               </div>
            </div>
         </div>
    </section>
      <!-- End Trusted Agents -->

	

<?php $this->load->view('footer'); ?>
</body>
</html>