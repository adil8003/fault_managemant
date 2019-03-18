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
        <style>
            * {
                box-sizing: border-box;
            }
            .card-border {
                border: 1px solid #e41258;
            }

            #regForm {
                background-color: #ffffff;
                /*margin: 100px auto;*/
                font-family: Raleway;
                padding: 40px;
                width: 100%;
                /*min-width: 300px;*/
            }

            h1 {
                text-align: center;  
            }

            input {
                padding: 10px;
                width: 100%;
                font-size: 17px;
                font-family: Raleway;
                border: 1px solid #aaaaaa;
            }

            input.invalid {
                background-color: #ffdddd;
            }

            .tab {
                display: none;
            }

            button {
                background-color: #4CAF50;
                color: #ffffff;
                border: none;
                padding: 10px 20px;
                font-size: 17px;
                font-family: Raleway;
                cursor: pointer;
            }

            button:hover {
                opacity: 0.8;
            }

            #prevBtn {
                background-color: #bbbbbb;
            }

            /* Make circles that indicate the steps of the form: */
            .step {
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbbbbb;
                border: none;  
                border-radius: 50%;
                display: inline-block;
                opacity: 0.5;
            }

            .step.active {
                opacity: 1;
            }

            /* Mark the steps that are finished and valid: */
            .step.finish {
                background-color: #4CAF50;
            }
            .img-border{
                border-bottom: 3px solid #49222fb3;
            }
        </style>
    </head>
    <body>
        <?php $this->load->view('menubar'); ?>
        <div class="jumbotron">
            <form id="regForm" action="">

                <h3>What is your problem?:</h3>
                <hr>
                <div class="tab"><h5>Select problem image:<h5>
                            <div class="row scrolDiv" style="padding: 4px;">
                                <div class="col-lg-3 col-sm-3">
                                    <div class="card card-border">
                                        <img class="card-img-top img-border" src="<?php echo base_url(); ?>asset/images/leak.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h6 class="card-title card-text">Card title</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="card card-border">
                                        <img class="card-img-top img-border" src="<?php echo base_url(); ?>asset/images/leak.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h6 class="card-title card-text">Card title</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="card card-border">
                                        <img class="card-img-top img-border" src="<?php echo base_url(); ?>asset/images/leak.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h6 class="card-title card-text">Card title</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="card card-border    ">
                                        <img class="card-img-top img-border" src="<?php echo base_url(); ?>asset/images/leak.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h6 class="card-title card-text">Card title</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="card card-border">
                                        <img class="card-img-top img-border" src="<?php echo base_url(); ?>asset/images/leak.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h6 class="card-title card-text">Card title</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="card card-border">
                                        <img class="card-img-top img-border" src="<?php echo base_url(); ?>asset/images/leak.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h6 class="card-title card-text">Card title</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="card card-border">
                                        <img class="card-img-top img-border" src="<?php echo base_url(); ?>asset/images/leak.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h6 class="card-title card-text">Card title</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="card card-border ">
                                        <img class="card-img-top img-border" src="<?php echo base_url(); ?>asset/images/leak.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h6 class="card-title card-text">Card title</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="tab"><h5>Select category:</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select class="form-control border-input input-sm"  id="roleid" name="roleid" >
                                                <option value="">Select category</option>
                                                <option value="">jjj</option>
                                                <option value="">jjj</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select class="form-control border-input input-sm"  id="roleid" name="roleid" >
                                                <option value="">Select sub category</option>
                                                <option value="">jjj</option>
                                                <option value="">jjj</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="alert alert-dark" role="alert" style=" padding: 0.35rem 1.25rem;
                                             background-color: #abb0b587;
                                             color: black;">
                                            Other
                                        </div>
                                        <label>Fault details</label>
                                        <div class="form-group">
                                            <textarea id="otherIssue" style="width: 100% "  rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab"><h5>Upload image: </h5>
                                <div class="content">
                                    <div class="author" >
                                        <div style="">
                                            <img width="200" height="150" src="<?php echo base_url(); ?>asset/images/leak.jpg" id="profilepic-admin" alt="Raised Image" class="img-rounded img-responsive img-raised">
                                        </div>
                                        <h6 class="card-subtitle text-muted">
                                            <progress  style="width:100%;height:5px;margin-bottom: 5px;" id="progressimage" class="hide progress" value="0" max="100">0%</progress>
                                        </h6>
                                        <h5 class="title title-height adminName" ></h5>
                                        <h5><a href="#"><small></small></a></h5>

                                        <h6 style="cursor:pointer;">
                                            <span id="userProfile" class="card-title"> Drop Image Or <i id="profilepic" class="ti-image"></i>
                                            </span>&nbsp; 
                                            <span id="iconHide"> 
                                                <i class="ti-trash" id="picid" ></i>
                                            </span>
                                        </h6>                    
                                    </div>
                                </div>  
                            </div>

                            <div class="tab"><h5>Address details:</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Address:<span class="asterik">*</span></label>
                                            <input type="text" class="form-control border-input input-sm " name="joblocation" id="joblocation" placeholder="Address">
                                            <span  class="errmsg" id="err-joblocation"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Town: </label>
                                            <input type="text" class="form-control border-input input-sm " name="positions" id="positions" placeholder="Town">
                                            <span  class="errmsg" id="err-positions"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Postcode: </label>
                                            <input type="text" class="form-control border-input input-sm " name="positions" id="positions" placeholder="Postcode">
                                            <span  class="errmsg" id="err-positions"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Results </label>
                                            <select class="form-control border-input input-sm"  id="roleid" name="roleid" >
                                                <option value="">Results</option>
                                                <option value="">sample data</option>
                                                <option value="">sample data</option>
                                                <option value="">sample data</option>
                                                <option value="">sample data</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab"><h5>Contact details:</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Title<span class="asterik">*</span></label>
                                            <input type="text" class="form-control border-input input-sm " name="joblocation" id="joblocation" placeholder="Title">
                                            <span  class="errmsg" id="err-joblocation"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>First name: </label>
                                            <input type="text" class="form-control border-input input-sm " name="positions" id="positions" placeholder="First name">
                                            <span  class="errmsg" id="err-positions"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Email address: </label>
                                            <input type="email" class="form-control border-input input-sm " name="positions" id="positions" placeholder="Email address ">
                                            <span  class="errmsg" id="err-positions"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Telephone number: </label>
                                            <input type="text" class="form-control border-input input-sm " name="positions" id="positions" placeholder="Telephone number ">
                                            <span  class="errmsg" id="err-positions"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Telephone number (alt.) </label>
                                            <input type="text" class="form-control border-input input-sm " name="positions" id="positions" placeholder="No. of position">
                                            <span  class="errmsg" id="err-positions"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab"><h5>Confirm & send:</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Fault details</label>
                                        <div class="form-group">
                                            <textarea id="otherIssue" style="width: 100% "  rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="radio disabled">
                                            <label><input type="radio" name="optradio" disabled>i give authority for my propery from</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">i give authority for my propery from</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="optradio" checked>i give authority for my propery from</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="overflow:auto;">
                                <div style="float:right;">
                                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                </div>
                            </div>

                            <div style="text-align:center;margin-top:40px;">
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                            </div>

                            </form>
                            </div>


                            <?php $this->load->view('footer'); ?>
                            <script>
                                var currentTab = 0;
                                showTab(currentTab);

                                function showTab(n) {

                                    var x = document.getElementsByClassName("tab");
                                    x[n].style.display = "block";

                                    if (n == 0) {
                                        document.getElementById("prevBtn").style.display = "none";
                                    } else {
                                        document.getElementById("prevBtn").style.display = "inline";
                                    }
                                    if (n == (x.length - 1)) {
                                        document.getElementById("nextBtn").innerHTML = "Submit";
                                    } else {
                                        document.getElementById("nextBtn").innerHTML = "Next";
                                    }

                                    fixStepIndicator(n)
                                }

                                function nextPrev(n) {

                                    var x = document.getElementsByClassName("tab");

                                    if (n == 1 && !validateForm())
                                        return false;

                                    x[currentTab].style.display = "none";
                                    // Increase or decrease the current tab by 1:
                                    currentTab = currentTab + n;
                                    // if you have reached the end of the form...
                                    if (currentTab >= x.length) {
                                        // ... the form gets submitted:
                                        document.getElementById("regForm").submit();
                                        return false;
                                    }
                                    // Otherwise, display the correct tab:
                                    showTab(currentTab);
                                }

                                function validateForm() {
                                    var x, y, i, valid = true;
                                    x = document.getElementsByClassName("tab");
                                    y = x[currentTab].getElementsByTagName("input");
                                    // A loop that checks every input field in the current tab:
                                    for (i = 0; i < y.length; i++) {
                                        // If a field is empty...
                                        if (y[i].value == "") {
                                            // add an "invalid" class to the field:
                                            y[i].className += " invalid";
                                            // and set the current valid status to false
                                            valid = false;
                                        }
                                    }
                                    // If the valid status is true, mark the step as finished and valid:
                                    if (valid) {
                                        document.getElementsByClassName("step")[currentTab].className += " finish";
                                    }
                                    return valid; // return the valid status
                                }

                                function fixStepIndicator(n) {
                                    // This function removes the "active" class of all steps...
                                    var i, x = document.getElementsByClassName("step");
                                    for (i = 0; i < x.length; i++) {
                                        x[i].className = x[i].className.replace(" active", "");
                                    }
                                    //... and adds the "active" class on the current step:
                                    x[n].className += " active";
                                }
                            </script>
                            </body>
                            </html>