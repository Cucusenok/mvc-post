<?php
function get_imgs($data_id){
$imgs_array = array();
	$imgs_dir = $data_id;
    $directory = "./public/materials/".$imgs_dir;    // Папка с изображениями
    $allowed_types=array("jpg", "png", "gif");  //разрешеные типы изображений
    $file_parts = array();
      $ext="";
      $title="";
      $i=0;
    //пробуем открыть папку
      $dir_handle = @opendir($directory) or die("Ошибка при открытии папки !!!");
    while ($file = readdir($dir_handle))    //поиск по файлам
      {
      if($file=="." || $file == "..") continue;  //пропустить ссылки на другие папки
      $file_parts = explode(".",$file);          //разделить имя файла и поместить его в массив
      $ext = strtolower(array_pop($file_parts));   //последний элеменет - это расширение


      if(in_array($ext,$allowed_types))
      {
        $res_dir = mb_substr( $directory, 1);
		array_push($imgs_array, $res_dir.'/'.$file );
     $i++;
      }
      }
    closedir($dir_handle);  //закрыть папку
	
	return $imgs_array;
}
?>