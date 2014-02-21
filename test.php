<?php
include 'aem_classes.module';

//This function replaces a built-in drupal function
function t($n) {
    return $n;
    }
 
$x = array(2,4);
$test = aem_classes_list_option_aemf("x","y","z",$x); 

echo '<pre>';
  print_r($test);
  echo '</pre>';
  ?>
