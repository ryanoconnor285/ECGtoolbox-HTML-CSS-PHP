<?php

function get_track_html($id,$item,$trackColor) {
  $output = 
  "<div class='col-lg-12 m-t-2'><!-- div track -->"  
. "<div class='card clearfix'>" 
. "<div class='card-header bg-" . $trackColor . "'>" 
. $item["title"]     
. "</div>"
. "<div class='card-block'>"
. "<h4 class='card-title'>"
. "Topics:"
. "</h4>"
. "<p class='card-text'>"
. implode(", ", $item["topics"])
. "</p>"
. "<a href='details.php?id=" . $id . "' class='btn btn-" . $trackColor . "'>Start</a>"
. "</div>"
. "</div>"
. "</div><!-- div track -->";
  return $output;
}

function get_resource_html ($id,$item,$trackColor) {
  $generateResource = 
    "<div class='col-lg-8 m-t-2'><!-- div resource -->" 
.   "<div class='card'>"
.  "<img class='card-img-top' src='"
.  $item["img"] 
.  "' alt=''>"
.  "<div class='card-block'>"
.  "<div class='card-header bg-" . $trackColor . "'>"  
.  "<h4 class='card-title'>"
.  $item["rhythm"] 
.  "</h4>"
.  "</div>"
.  "<p class='card-text'>"
.  "<ul class='list-group list-group-flush'><li class='list-group-item'>"
.  implode("</li><li class='list-group-item'>", $item["definition"]) 
.  "</li></ul"
.  "</p>"
.  "</div>"
.  "</div>"
.  "</div><!-- div resource -->";
    return $generateResource;
}

function get_details_html($id,$item,$trackColor) {
  $output = 
  "<div class='jumbotron'>"
. "<div class='container'>"
. "<h1 class='display-3'>" . $trackColor . "'>" 
. $item["title"]     
. "</div>"
. "<div class='card-block'>"
. "<h4 class='card-title'>"
. $item["title"]
. "</h4>"
. "<p class='card-text'>"
. implode(", ", $item["topics"])
. "</p>"
. "<a href='details.php?id=" . $id . "' class='btn btn-" . $trackColor . "'>Start</a>"
. "</div>"
. "</div>"
. "</div><!-- div track -->";
  return $output;
}