<!DOCTYPE html>
<head>

    <title>Literaturework</title>
    <link rel = "stylesheet" href="css/design.css">
    <link rel = "stylesheet" href="css/Index.css">
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
   
<div class="back-link">
  <a href="#" onclick="history.back()">
    <span class="arrow">&larr;</span> Назад
  </a>
</div>
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
   echo '<a href="category.php?categoryId=' . $row['CategoryID'] . '">';
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





 



