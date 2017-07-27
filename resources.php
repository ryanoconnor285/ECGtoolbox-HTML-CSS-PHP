<?php

include ("inc/resourceList.php");
include ("inc/functions.php");
include ("inc/header.php");

$pageTitle = "Resources";

?>
<div class ="container p-y-2"><!-- main content container -->
<h1><?php echo $pageTitle ?></h1>
<div class="row">
  
<?php foreach($resource as $id => $item) {
  $trackColor = "warning";
  echo get_resource_html($id,$item,$trackColor);
}
?>
      
</div><!--row-->

<?php include ("inc/footer.php"); ?>