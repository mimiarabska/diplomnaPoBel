<?php
  require_once "config.php";
   //Attempt select query execution
   $author_id=$_REQUEST['authorId'];
   $sql = "SELECT AuthorName FROM author WHERE AuthorID = $author_id";
   $result = mysqli_query($link, $sql);
   /*var_dump($result);*/
   if(mysqli_num_rows($result) > 0)
   {
		$row = mysqli_fetch_assoc($result);
		$author_name = $row['AuthorName'];
   }
   
   //Free result set
   
  else
   echo "ERROR: Cold not able to execute $sql. " . mysqli_error($link);
 
 ?>
<!DOCTYPE html>
     <head>
     
         <title>Literaturework</title>
         <link rel = "stylesheet" href="css/design.css">
         <link rel = "stylesheet" href="css/avtor.css">
           <meta charset="UTF-8">
     </head>
             
     <body>
      
      <nav class="col-1">
     
       <a href="http://localhost/diplomnaPoBel/php/Index.php" target="_blank">Начало</a>
       
       <a href="http://localhost/diplomnaPoBel/php/avtoriview.php" target="_blank">Автори</a>
       
       <a href="http://localhost/diplomnaPoBel/php/DZI.php" target="_blank">Тестове</a>
       
       <a href="screenfeedback.html" target=_blank>Обратна връзка</a>
     
          <a href="http://localhost/diplomnaPoBel/php/AboutUs.php" target="_blank">За нас</a>
      </nav>
       
     <div class="col-2">
       
       <header>
         
     <input type="text">
       
       <button>Търсене</button>
                 
                 
      </header>

     
      <main class="content">
     
         <article>
         
             <div class="center">
              
             <?php
		
        $sql = "SELECT AuthorName, Biography, Image FROM author WHERE AuthorID = $author_id";
        $result = mysqli_query($link, $sql);
        if(mysqli_num_rows($result) > 0)
        {
             while($row = mysqli_fetch_assoc($result))
             {
                 echo '<h1>'. $row['AuthorName'] . '</h1>';
                 echo '<div class="center">';
                 echo '<img src="' . $row['Image'] . '" alt="No image found for this litwork"> ';
                 echo '<p>"'. $row ['Biography'].'"</p>';
                 echo '</div>';
                 
                 
             }
        }
     
     ?>
                  
     
    
     

    
        </article>
     
     
     