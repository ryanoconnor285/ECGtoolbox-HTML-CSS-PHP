<?php

include ("inc/trackList.php");
include ("inc/functions.php");
include ("inc/header.php");

if (isset($_GET["id"])) {
  $id = $_GET["id"];
  if (isset($tracks[$id])) {
    $item = $tracks[$id];
  }
}

if (!isset($item)) {
  header("location:index.php");
  exit;
}

if ($item["category"] == "basics") {
  $trackColor = "info";
  } else if ($item["category"] == "advanced") {
  $trackColor = "success"; 
}
$pageTitle = $item["title"];

?>

<div class="jumbotron jumbotron-fluid bg-<?php echo $trackColor ?>">
  <div class="container">
    <h1 class="display-4"><?php echo $pageTitle ?></h1>
    <p class="lead"><?php echo $item["description"] ?></p>
  </div>
</div>
<?php echo $item["content"] ?>

<!--
<div class="jumbotron">
  <div class="container">
    <div class="col-sm-12 col-lg-6 m-t-2">
    <ul class="list-group">
      <li class="list-group-item"><a href="<?php ?>"><?php echo implode("</li><br/><li class='list-group-item'>", $item["topics"])?></a></li>
    </ul>
    </div>
  </div>
</div>
-->




<?php include ("inc/footer.php"); ?>