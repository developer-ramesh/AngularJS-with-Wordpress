<?php
/* 
Template Name:Home
*/
get_header(); ?>


<!--<div ng-include="'header1.php'"></div>-->

<div style="min-height: 400px;width: 100%;">
    <h1 style="text-align: center">AngularJS in Wordpress!!!</h1>
   
    <div ng-controller="RouteCtrl">
    <div ng-view="">in this area by Routes content will change !!!!</div>
    </div>
     
</div>


<!--<a  href="/AngularJS-with-Wordpress/home">Home</a>
<a  href="/AngularJS-with-Wordpress/about">About</a>
<a  href="/AngularJS-with-Wordpress/contact">Contact</a>
<a  href="/AngularJS-with-Wordpress/gallery">Gallery</a>-->


<?php get_footer(); ?>