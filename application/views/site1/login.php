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


        <?php // $this->load->view('menubar'); ?>
        <div class="jumbotron"><br><br>
            <div class="row">
                <div class="col-lg-3 col-sm-6">

                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login-card card">
                        <div class="header text-center "><br>
                            <!--<h4 class="title"><img src="images/logo.png" /></h4>-->
                            <img src="<?php echo base_url(); ?>asset/images/home/logo1.png" alt="Maple Estate Agents">
                        </div>
                        <div class="content">
                            <form id="form-login" style="padding: 10px;" method="POST" action="index.php?r=site/verification">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" >
                                            <label >Username:<span class="asterik">*</span>
                                                <span  class="errmsg" id="err-fullname"></span> </label>
                                            <input  type="email" class="form-control border-input" placeholder="Email" name="email"  id="email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" >
                                            <label >Password:<span class="asterik">*</span>
                                                <span class="errmsg"  id="err-password"></span> </label>
                                            <input  type="password" class="form-control border-input" onblur="checkPassword();" placeholder="Password" id="password" name="password"  required>  
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button id="loginButton"  type="submit" class="btn btn-info btn-fill btn-wd">Login</button>
                                </div>
                                <div class="pull-right">
                                    <a href="index.php?r=site/forgotpassword" >Forgot Password</a>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">

                </div>
            </div>
        </div>

        <!--        <div class="container login-container">
                    <div class="row">
                        <div class="col-md-6 login-form-1">
                            <h3>Login for Form 1</h3>
        
                        </div>
                        <div class="col-md-6 login-form-2">
                            <h3>Login for Form 2</h3>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Your Password *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btnSubmit" value="Login" />
                                </div>
                                <div class="form-group">
        
                                    <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>-->




        <?php // $this->load->view('footer'); ?>
    </body>
</html>