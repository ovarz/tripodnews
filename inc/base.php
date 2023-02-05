<!DOCTYPE html>
<html lang="id">
<base href="/tripodnews/" />
<?php 
  $_SERVER['TRIPOD'] = $_SERVER['DOCUMENT_ROOT'] . '/tripodnews/';
  $anticache = date ('s'.'i'.'H'.'d'.'m'.'Y');
  
  $kanal_array = array();
  $kanal_array[]=array('kanal_id'=>'home','kanal_name'=>'Home','kanal_link'=>'');
  $kanal_array[]=array('kanal_id'=>'news','kanal_name'=>'News','kanal_link'=>'');
  $kanal_array[]=array('kanal_id'=>'ekonomi','kanal_name'=>'Ekonomi','kanal_link'=>'');
  $kanal_array[]=array('kanal_id'=>'sport','kanal_name'=>'Sport','kanal_link'=>'');
  $kanal_array[]=array('kanal_id'=>'otomotif','kanal_name'=>'Otomotif','kanal_link'=>'');
  $kanal_array[]=array('kanal_id'=>'hiburan','kanal_name'=>'Hiburan','kanal_link'=>'');
  $kanal_array[]=array('kanal_id'=>'wisata','kanal_name'=>'Wisata','kanal_link'=>'');
  $kanal_array[]=array('kanal_id'=>'opini','kanal_name'=>'Opini','kanal_link'=>'');
  $kanal_array[]=array('kanal_id'=>'politik','kanal_name'=>'Politik','kanal_link'=>'');
  $kanal_array[]=array('kanal_id'=>'foto','kanal_name'=>'Foto','kanal_link'=>'');
  $kanal_array[]=array('kanal_id'=>'indeks','kanal_name'=>'Indeks','kanal_link'=>'');
?>