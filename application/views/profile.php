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
        <div class="jumbotron">
            <div class="row">
                <div class="col-lg-12 col-sm-12" id="mainDiv">
                    <div class="card">
                        <div class="header ">
                            <div class="row no-gutters">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="alert alert-dark tabHeader" role="alert">
                                        Profile
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="card card-user">
                                    <!--<br><br><br><br>-->
                                    <div class="content">
                                        <!--<div class="author" >-->
                                        <div style="min-height:200px;">
                                            <img src="<?php echo base_url(); ?>asset/images/profile.png" id="profilepic-admin" alt="Raised Image" class="img-rounded img-responsive img-raised">
                                        </div>
                                        <h6 class="card-subtitle text-muted">
                                            <progress  style="width:100%;height:5px;margin-bottom: 5px;" id="progressimage" class="hide progress" value="0" max="100">0%</progress>
                                        </h6>
                                        <h5 class="title title-height adminName" > Adil</h5>
                                        <!--<h5><a href="#"><small> cd</small></a>< /h5>-->

                                        <h6 style="cursor:pointer;">
                                            <span id="userProfile" class="card-title"> Drop Image Or <i id="profilepic" class="fa fa-image"></i>
                                            </span>&nbsp; 
                                            <span id="iconHide"> 
                                                <i class="ti-trash" id="picid" onclick="deleteUserImage();"></i>
                                            </span>
                                        </h6>                    
                                        <!--</div>-->
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div  class="card">
                                    <div id="updateprofile">
                                        <div class="content" >
                                            <div class="header">
                                                <h4 class="title">Edit profile <span>
                                                        <button id="password"  class="btn btn-info btn-fill btn-xs btn-wd pull-right">Change Password</button></span></h4>
                                            </div><br><hr>
                                            <form name="form" >
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group" >
                                                            <label>First name:<span class="asterik">*</span>
                                                                <span  class="errmsg" id="err-fullname"></span> </label>
                                                            <input type="text" class="form-control border-input input-sm" value=""  name="fname" id="fname"  placeholder="Full Name" required/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 ">
                                                        <div class="form-group" >
                                                            <label>Last name:<span class="asterik">*</span>
                                                                <span  class="errmsg" id="err-fullname"></span> </label>
                                                            <input type="text" class="form-control border-input input-sm" value=""  name="lname" id="lname"  placeholder="Full Name" required/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group" >
                                                            <label>Username:<span class="asterik">*</span>
                                                                <span  class="errmsg" id="err-phone"></span> </label>
                                                            <input type="text" class="form-control border-input" name="phone" value="" id="email"  required placeholder="Username">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group" >
                                                            <label>Email:<span class="asterik">*</span>
                                                                <span  class="errmsg" id="err-phone"></span> </label>
                                                            <input type="email" class="form-control border-input" name="email" value="" id="email"  required placeholder="Email">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group" >
                                                            <label>Phone:<span class="asterik">*</span>
                                                                <span  class="errmsg" id="err-phone"></span> </label>
                                                            <input type="email" class="form-control border-input" name="phone" value="" id="phone"  required placeholder="phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group" >
                                                            <label>Town:<span class="asterik">*</span>
                                                                <span  class="errmsg" id="err-phone"></span> </label>
                                                            <input type="text" class="form-control border-input" name="town" value="" id="twon"  required placeholder="Town">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group" >
                                                            <label>Postcode:<span class="asterik">*</span>
                                                                <span  class="errmsg" id="err-phone"></span> </label>
                                                            <input type="text" class="form-control border-input" name="postcode" value="" id="postcode"  required placeholder="postcode">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group" >
                                                            <label>Address:<span class="asterik">*</span>
                                                                <span  class="errmsg" id="err-phone"></span> </label>
                                                            <input type="text" class="form-control border-input" name="address" value="" id="address"  required placeholder="Address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <button type="button" onclick="updateCustomer();"  class="btn btn-info btn-fill btn-wd">Edit profile</button>
                                                </div><br>
                                                <div class="clearfix"></div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="changePassword">
                                        <div class="content" >
                                            <div class="header">
                                                <h4 class="title">Change password 
                                                    <button id="passForm"  class="btn btn-info btn-fill btn-xs btn-wd pull-right">Edit profile</button></span></h4> 
                                            </div><br><hr>
                                            <div>
                                                <form name="form" id="customercam" onsubmit="checkPasswordMatch();">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group" >
                                                                <label>Old password:<span class="asterik">*</span>
                                                                    <span  class="errmsg" id="err-currentpassword"></span> </label>
                                                                <input type="password" class="form-control border-input input-sm"   id="currentpassword" onblur="checkCurrentpass();" name="currentpassword"  placeholder="Old Password" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group" >
                                                                <label>Password:<span class="asterik">*</span>
                                                                    <span class="errmsg" id="err-newpassword"></span> </label>
                                                                <input type="password" class="form-control border-input input-sm" id="newpassword"   name="newpassword"  placeholder="Password" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group" >
                                                                <label>Confirm password:<span class="asterik">*</span>
                                                                    <span class="errmsg" id="err-confirmpassword"></span> </label>
                                                                <input type="password" class="form-control border-input input-sm"  id="confirmpassword"    name="confirmpassword"   placeholder="Confirm Password" required/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="text-center">
                                                        <button type="button" onclick="saveChangePassword();" class="btn btn-info btn-fill  btn-wd">Update password</button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </form>
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


        <?php $this->load->view('footer'); ?>
        <script>
            $(document).ready(function () {
                $('#updateprofile').show();
                $('#changePassword').hide();
            });
            function updateCustomer() {

            }
            $(function () {
                $('.changePassword').hide();
                $("#password").click(function () {
                    if ($('.changePassword').is(':hidden')) {
                        $('.changePassword').show();
                        $('#updateprofile').hide();
                    } else {
                        $('.changePassword').show();
                        $('#updateprofile').show();
                    }
                });
            });
            $(function () {
                $('.changePassword').hide();
                $("#updateprofile").show();
                $("#passForm").click(function () {
                    $(".changePassword").hide();
                    $('#updateprofile').show();
                }
                );
            });
        </script>
    </body>
</html>