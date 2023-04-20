<!DOCTYPE html>
<head>

    <title>Автори</title>
    <link rel = "stylesheet" href="css/design.css">
    <link rel = "stylesheet" href="css/avtoriview.css">
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
<h1>Автори</h1>

<?php


  require_once "config.php";
   //Attempt select query execution
   
   $authors = "SELECT AuthorID,AuthorName FROM author ORDER BY AuthorName asc";
   $result=  mysqli_query($link,$authors);
   if(mysqli_num_rows($result) > 0)
	{
		$prevLetter = 'c';
		 while($row = mysqli_fetch_assoc($result))
		 {
			 
			$currentLetter = substr($row['AuthorName'], 0, 1);
			//var_dump($currentLetter);
			if($currentLetter !== $prevLetter){
				echo "<h2> $currentLetter </h2>";
				$prevLetter = $currentLetter;
			}
			
			echo '<br><a href="avtor.php?AuthorId=' . $row['AuthorID'] . '">'.$row['AuthorName'].' </a>';
			$prevLetter = $currentLetter;
			
			 
			 
		 }
	}
   ?>


</article>
</body>







