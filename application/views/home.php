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
            #flip {
                padding: 5px;
                text-align: center;
                background-color: rgb(82, 86, 89);
                border: solid 1px #c3c3c3;
                color: white;
            }

            #panel {
                padding: 50px;
                display: none;
            }
        </style>
    </head>
    <body>
        <?php $this->load->view('menubar'); ?>
        <div class="jumbotron"><br><br>
            <div class="row">
                <div class="col-lg-8 col-sm-8">


                    <div class="login-card card">
                        <div class="header "><br>
                        </div>
                        <div class="content">

                            <form action="#">
                                <input type="text" placeholder="Search.." name="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form><br>
                            <div class="row">
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
                            <div class="row">
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
                            <div id="flip" class="tabContent">What is the problem?</div>
                            <div id="panel">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
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
                    $("#panel").slideDown("slow");

                });
            });
        </script>
    </body>
</html>