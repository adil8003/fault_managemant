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
                <div class="col-lg-8 col-sm-8" id="mainDiv">
                    <div class=" card">
                        <div class="header ">
                            <div class="row no-gutters">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="alert alert-dark tabHeader" role="alert">
                                        Ticket history
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-sm-12 pull-right">
                                <!--                                <form action="#">
                                                                    <input type="text" placeholder="Search.." name="search">
                                                                    <button type="submit"><i class="fa fa-search"></i></button>
                                                                </form>-->
                            </div>

                        </div>
                        <div class="content" style="height: 550px"  >
                            <div class="card shadow1">
                                <div class="alert alert-dark " role="alert">
                                    <b>Ticket name  <span class="pull-right">&nbsp;&nbsp;<i id="profilepic" class="fa fa-trash-o"></i></span><span class="pull-right"><i id="profilepic" class="fa fa-pencil"></i></span></b>
                                </div>
                                <p> Maple is a company with a human face and not a corporate one. Apart from our extensive and unrivalled experience in the area we recognise.</p>
                            </div>
                            <div class="card shadow2">
                                <div class="alert alert-dark " role="alert">
                                    <b>Ticket name <span class="pull-right">&nbsp;&nbsp;<i id="profilepic" class="fa fa-trash-o"></i></span>&nbsp;&nbsp;<span class="pull-right"><i id="profilepic" class="fa fa-pencil"></i></span></b>
                                </div>
                                <p> Maple is a company with a human face and not a corporate one. Apart from our extensive and unrivalled experience in the area we recognise.</p>
                            </div>
                            <div class="card shadow2">
                                <div class="alert alert-dark " role="alert">
                                    <b>Ticket <span class="pull-right">&nbsp;&nbsp;<i id="profilepic" class="fa fa-trash-o"></i></span>&nbsp;&nbsp;<span class="pull-right"><i id="profilepic" class="fa fa-pencil"></i></span></b>
                                </div>
                                <p> Maple is a company with a human face and not a corporate one. Apart from our extensive and unrivalled experience in the area we recognise.</p>
                            </div>

                            <div id="pagination">
                                <span class="all-pages">Page 1 of 3 </span>
                                <!--<span  class="page-num"></span>-->
                                <span class="current page-num">3 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 sideDiv" id="sideDiv">
                    <div class="login-card card">
                        <div class="alert alert-dark tabHeader" role="alert">
                            Ticket Status
                        </div>
                        <div class="content" style="height: 500px">
                            <div class="row">
                                <div class="col-sm-4" id="app">
                                    <a  href="#" class="text-white "> <div class="p-1  bg-dark">Reported </div></a>
                                </div>
                                <div class="col-sm-4" id="rew">
                                    <a  href="#" class="text-white"> <div class="p-1 bg-warning">In progress </div></a>
                                </div>
                                <div class="col-sm-4" id="reject">
                                    <a  href="#" class="text-white"> <div class="p-1 bg-success">Closed </div></a>
                                </div>
                            </div>
                            <hr>
                            <div id="updateprofile">
                                <div class="content" >
                                    <div class="row " id="amenitiesList">

                                        <div class="card shadow">
                                            <div class="alert alert-primary " role="alert">
                                                <b>Live ticket </b>
                                            </div>
                                            <p> Maple is a company with a human face and not a corporate one. Apart from our extensive and unrivalled experience in the area we recognise.</p>
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

            });

        </script>
    </body>
</html>