<!DOCTYPE html>

<head>

<title>DZI</title>
<link rel = "stylesheet" href="css/design.css">
<link rel = "stylesheet" href="css/DZI.css">
	<meta charset="UTF-8">

</head>

        
<body>
 
 <nav class="col-1">

  <a href="Index.php" target="_blank">Начало</a>
  
  <a href="avtoriview.html" target="_blank">Автори</a>
  
  <a href="DZI.html" target="_blank">Тестове</a>
  
  <a href="screenfeedback.html" target=_blank>Обратна връзка</a>

     <a href="AboutUs.html" target="_blank">За нас</a>
 

 </nav>
  
<div class="col-2">
  
  <header>
    
<input type="text">
  
  <button>Търсене</button>
            
            
 </header>

 <main class="content">
    
    <article>
<h1>Изпитни варианти и отговори за ДЗИ БЕЛ!</h1>
<h3>Изтеглете тест:</h3>
    <div class="button-grid">
      <?php
$file_name = urlencode($file); // encode the file name
$folder_path= "/diplomnaPoBel/php/dzi/";
$files  =  scandir ( $folder_path );  // Loop through the files and output them as headings with download links   foreach  ( $files   as   $file ) {  if  ( $file  !==  '.'  &&  $file  !==  '..' ) {  $file_path  =  $folder_path  .  '/'  .  $file ;
foreach ($files as $file) {
  if ($file !== '.' && $file !== '..') {
    $file_path = $folder_path . '/' . $file;
    
  }
}
  echo "<button><h2><a href=\"$file_path\" download=\"$file_name\">$files</a></h2></button>";
?>
  </div>


</article>
</body>
