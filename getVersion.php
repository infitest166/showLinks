<?php
  
$data = array(
  'tid' => 100, 
  'app_version' => '标哥的技术博客',
  'url' => 'itms-services://?action=download-manifest&url=https://raw.githubusercontent.com/infitest166/showLinks/master/manifest.plist');
   
$response = array(
  'code'  => 200, 
  'message' => 'success for request',
  'data'  => $data,
  );
  
echojson_encode($response);
?>
