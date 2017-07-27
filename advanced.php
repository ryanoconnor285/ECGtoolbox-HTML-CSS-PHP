<?php

include ("inc/trackList.php");
include ("inc/functions.php");
include ("inc/header.php");

$pageTitle = "Advanced";

?>
<div class ="container p-y-2"><!-- main content container -->
<h1><?php echo $pageTitle ?></h1>
<div class="row">
  
<?php foreach($tracks as $id => $item) {
if ($item["category"] == "advanced") {
  $trackColor = "success";
  echo get_track_html($id,$item,$trackColor);
  }
}
?>
    
</div><!--row-->
</div><!-- main content container -->

<?php include ("inc/footer.php"); ?>