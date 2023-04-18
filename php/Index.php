<!DOCTYPE html>
<head>

    <title>Literaturework</title>
    <link rel = "stylesheet" href="css/design.css">
    <link rel = "stylesheet" href="css/Index.css">
	<meta charset="UTF-8">
</head>
        
<body>
 
 <nav class="col-1">

  <a href="http://localhost/diplomnaPoBel/php/Index.php" target="_blank">Начало</a>
  
  <a href="http://localhost/diplomnaPoBel/php/avtoriview.php" target="_blank">Автори</a>
  
  <a href="http://localhost/diplomnaPoBel/php/DZI.php" target="_blank">Тестове</a>
  
  <a href="http://localhost/diplomnaPoBel/php/feedback.php?" target=_blank>Обратна връзка</a>

     <a href="http://localhost/diplomnaPoBel/php/AboutUs.php" target="_blank">За нас</a>
	
    
 </nav>

<div class="col-2">
  
  <header>
   

<input type="text">
  
  <button>Търсене</button>
            
            
 </header>

 <main class="content">

 

 
    <article>
<h1>Добре дошли!</h1>
<h3>Материали в помощ ДЗИ БЕЛ</h3>
<h4>11, 12 клас</h4>
<h2>Теми</h2>
    <div class="button-grid">
    <?php
  require_once "config.php";
   //Attempt select query execution
   $sql = "SELECT * FROM category";
   if($result = mysqli_query($link, $sql ))
   if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_array($result)){
   echo '<a href="choosescreen.php?categoryId=' . $row['CategoryID'] . '">';
   echo "<button>";
   echo $row['CategoryTittle'];
   echo"</button>";
   echo "</a>";
   }
   
   //Free result set
   
   mysqli_free_result($result);
   } else{
   echo "No records matching your query were found.";
   }else
   echo "ERROR: Cold not able to execute $sql. " . mysqli_error($link);
 
  ?>
  </div>


</article>
</body>





 



