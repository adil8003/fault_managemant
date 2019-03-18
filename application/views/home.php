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
            .tabContent{
                background-color: #49222f;
            }
            #panel {
                padding: 10px;
                display: none;
            }
            #panel1 {
                padding: 10px;
                display: none;
            }
            #panel2 {
                padding: 10px;
                display: none;
            }
            #panel3 {
                padding: 10px;
                display: none;
            }
            #panel4 {
                padding: 10px;
                display: none;
            }
        </style>
    </head>
    <body>
        <?php $this->load->view('menubar'); ?>
        <div class="jumbotron">
            <div class="row">
                <div class="col-lg-8 col-sm-8" id="mainDiv">
                    <div class=" card">
                        <div class="header ">
                            <div class="row no-gutters">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="alert alert-dark tabHeader" role="alert">
                                        What is the problem?
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-6">
                                <div class="alert alert-dark" role="alert" style="font-size: 16px;   padding: 0.12rem 1.25rem;
                                     background-color: #abb0b5;
                                     color: white;">
                                    Please click on the relevant picture
                                </div>
                            </div>
                            <div class="col-6">
                                <form action="#">
                                    <input type="text" placeholder="Search.." name="search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="content">
                            <br>

                            <div class="row scrolDiv" style="padding: 4px;">
                                <div class="col-lg-3 col-sm-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url(); ?>asset/images/leak.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h6 class="card-title card-text">Card title</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url(); ?>asset/images/leak.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h6 class="card-title card-text">Card title</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url(); ?>asset/images/leak.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h6 class="card-title card-text">Card title</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url(); ?>asset/images/leak.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h6 class="card-title card-text">Card title</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding: 4px;">
                                <div class="col-lg-3 col-sm-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url(); ?>asset/images/leak.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h6 class="card-title card-text">Card title</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url(); ?>asset/images/leak.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h6 class="card-title card-text">Card title</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url(); ?>asset/images/leak.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h6 class="card-title card-text">Card title</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url(); ?>asset/images/leak.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h6 class="card-title card-text">Card title</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div  class="tabContent">What is the problem?</div>-->
                            <div id="flip" class="row no-gutters">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="alert alert-dark tabHeader" role="alert" >
                                        Select image title name.
                                    </div>
                                </div>
                            </div>
                            <div id="panel">
                                <form>
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
                                                    <option value="">sample data</option>
                                                    <option value="">sample data</option>
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
                                </form>
                            </div>
                            <div id="flip1" class="row no-gutters">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="alert alert-dark tabHeader" role="alert" >
                                        Select image title name.
                                    </div>
                                </div>
                            </div>
                            <div id="panel1">
                                <form>
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
                                </form>
                            </div>
                            <div id="flip2" class="row no-gutters">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="alert alert-dark tabHeader" role="alert" >
                                        Address details
                                    </div>
                                </div>
                            </div>
                            <div id="panel2">
                                <form class="col-8 " style="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address<span class="asterik">*</span></label>
                                                <input type="text" class="form-control border-input input-sm " name="joblocation" id="joblocation" placeholder="Job location">
                                                <span  class="errmsg" id="err-joblocation"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Town </label>
                                                <input type="text" class="form-control border-input input-sm " name="positions" id="positions" placeholder="No. of position">
                                                <span  class="errmsg" id="err-positions"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Postcode </label>
                                                <input type="text" class="form-control border-input input-sm " name="positions" id="positions" placeholder="No. of position">
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
                                </form>
                            </div>
                            <div id="flip3" class="row no-gutters">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="alert alert-dark tabHeader" role="alert" >
                                        Contact details
                                    </div>
                                </div>
                            </div>
                            <div id="panel3">
                                <form class="col-8 " style="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Title<span class="asterik">*</span></label>
                                                <input type="text" class="form-control border-input input-sm " name="joblocation" id="joblocation" placeholder="Job location">
                                                <span  class="errmsg" id="err-joblocation"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>First name </label>
                                                <input type="text" class="form-control border-input input-sm " name="positions" id="positions" placeholder="No. of position">
                                                <span  class="errmsg" id="err-positions"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email address </label>
                                                <input type="text" class="form-control border-input input-sm " name="positions" id="positions" placeholder="No. of position">
                                                <span  class="errmsg" id="err-positions"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Telephone number </label>
                                                <input type="text" class="form-control border-input input-sm " name="positions" id="positions" placeholder="No. of position">
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

                                </form>
                            </div>
                            <div id="flip4" class="row no-gutters">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="alert alert-dark tabHeader" role="alert" >
                                        Confirm & send
                                    </div>
                                </div>
                            </div>



                            <div id="panel4">
                                <form class="col-8 " style="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!--                                            <div class="alert alert-dark" role="alert" style=" padding: 0.35rem 1.25rem;
                                                                                             background-color: #abb0b587;
                                                                                             color: black;">
                                                                                            Other
                                                                                        </div>-->
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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 sideDiv" id="sideDiv">
                    <div class="login-card card">
                        <div class="header text-center "><br>

                        </div>
                        <div class="content" style="height: 500px">

                        </div>
                    </div>
                </div>

            </div>
        </div>


        <?php $this->load->view('footer'); ?>
        <script>
            $(document).ready(function () {
//                 $("#panel").html("slow");
                $("#flip").click(function () {
//                    $("#panel").click('slow');
                    $("#panel").slideToggle("slow");

                });
                $("#flip1").click(function () {
//                    $("#panel").click('slow');
                    $("#panel1").slideToggle("slow");

                });
                $("#flip2").click(function () {
//                    $("#panel").click('slow');
                    $("#panel2").slideToggle("slow");

                });
                $("#flip3").click(function () {
//                    $("#panel").click('slow');
                    $("#panel3").slideToggle("slow");

                });
                $("#flip4").click(function () {
//                    $("#panel").click('slow');
                    $("#panel4").slideToggle("slow");

                });
                $(window).scroll(function () {

                    var height = $('.scrolDiv').height();
                    console.log(height);
                    var scrollTop = $(window).scrollTop();
                    // console.log('scroll=',scrollTop);

                    if (scrollTop >= height - 40) {
//                        $('.sideDiv').addClass('solid-nav');
//                        $('.sideDiv').style.margin-top = '20px';
                        document.getElementById("sideDiv").style.marginTop = "500px";
                    } else {
                        document.getElementById("sideDiv").style.marginTop = "0px";
                    }


                });

                $(window).scroll(function () {
                    $("#sideDiv").stop().
                            animate({"marginTop": ($(window).scrollTop()) + "px", "marginLeft": ($(window)
                                        .scrollLeft()) + "px"}, "slow");
                });
//                var totaltext = "";
//                for (var i = 0; i < 100; i++) {
////                    totaltext += "scroll!<br />";
//                }
//                $("#mainDiv").html();
//                return  false;

            });
        </script>
    </body>
</html>