<?php

include ("inc/header.php");

?>
<div class ="container p-y-2"><!-- main content container -->
  <div class="row">
    <div class="col-sm-12 col-lg-6 m-t-2"><!-- div basics -->
      <h3 class="display-5">Basic Track</h3>
      <img src="img/basictrackwelcome.png" alt="" class="img-fluid img-rounded">
      <p class="lead">Learn the basic skills that are necessary to read 12 lead ECGs.</p>
      <p>By the end of this course you will be able to confidently identify normal rhythms as well as a few life threatening rhythms.</p>
      <ul>
        <li>Identify Components of an ECG</li>
        <li>Anatomy of the Heart</li>
        <li>Electrode Placement</li>
        <li>Systematic Approach</li>
        <li>Basic Rhythms</li>
      </ul>
      <a class="btn btn-info btn-lg" href="basics.php" role="button">Get Started</a>
    </div><!-- div basics -->
    
    <div class="col-sm-12 col-lg-6 m-t-2"><!-- div advanced -->
      <h3 class="display-5">Advanced Track</h3>
      <img src="img/stemi.jpeg" alt="" class="img-fluid img-rounded">
      <p class="lead">Learn more advanced techniques for interpretation and take your skills to the next level.</p>
      <ul>
        <li>Axis of the Heart</li>
        <li>Electrolyte Imbalances</li>
        <li>R wave Progression</li>
        <li>STEMI</li>
        <li>Sgarbossa Criteria</li>
      </ul>
      <a class="btn btn-success btn-lg" href="advanced.php" role="button">Get Started</a>
    </div><!-- div advanced -->
      
    <div class="clearfix visible-sm-block visible-md-block visible-lg-block"></div><!-- clearfix -->
    <div class="col-sm-12 col-lg-6 m-t-2"><!-- div resource center -->
      <h3 class="display-5">Resource Center</h3>
      <img src="img/tcaoverdose.png" alt="" width="60%" class="img-fluid img-rounded">
      <p class="lead">In the resources tab you can browse through a list of rhythm strips with definitions for each condition.</p>
      <a class="btn btn-warning btn-lg" href="resources.php" role="button">Learn more</a>
    </div><!-- div resource center -->
    
<!--
         <div class="col-sm-12 col-lg-6 m-t-2">
          <h3 class="display-5 text-sm-center">Community</h3>
          <img src="img/community.jpeg" alt="" class="img-fluid img-rounded">
          <p class="lead">Contribute, learn and grow with us.</p>  
      <a class="btn btn-primary btn-lg" href="community.php" role="button">Learn more</a>
        </div>
-->
  </div><!-- row -->
</div><!-- main content container -->
    
    <?php include ("inc/footer.php");?>
    