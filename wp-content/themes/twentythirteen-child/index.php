<?php
/* 
Template Name:Home
*/
get_header(); ?>


<div style="min-height: 400px;width: 100%;">
    <h1 style="text-align: center">AngularJS in Wordpress!!!</h1>
</div>

<!--
<div ng-controller="mycontroller">
  <ul>
    <li ng-repeat="post in postdata">{{post.title}}</li>
  </ul>
</div>-->


<a  href="/AngularJS-with-Wordpress/home">Home</a>
<a  href="/AngularJS-with-Wordpress/about">About</a>
<a  href="/AngularJS-with-Wordpress/contact">Contact</a>

<div ng-controller="RouteCtrl">
    <div ng-view="">in this area by Routes content will change !!!!</div>
</div>


<?php
get_footer(); ?>