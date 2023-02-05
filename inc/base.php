<!DOCTYPE html>
<html lang="id">
<base href="/tripodnews/" />
<?php 
  $_SERVER['TRIPOD'] = $_SERVER['DOCUMENT_ROOT'] . '/tripodnews/';
  $anticache = date ('s'.'i'.'H'.'d'.'m'.'Y');
  
  $kanal_array = array();
  $kanal_array[]=array('kanal_id'=>'home','kanal_name'=>'Home','kanal_link'=>'','custom_class'=>'');
?>