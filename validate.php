<?php

if(isset($_POST['email'])) {
  $list = array (
    array(date('Y-m-d H:i:s') , $_POST['email'], $_POST['validated']),
  );
  $file = fopen("logs/logs.csv","a"); 
  foreach ($list as $line) {
    fputcsv($file, $line);
  }
  fclose($file);
}

if(isset($_POST['email']) ){
    if($_POST['validated'] == 'false'){
      header('HTTP/1.1 500 Internal Server Error', true, 500);
    }
}
?>