<?php
  require_once "config.php";
   //Attempt select query execution
   $cat_id=$_REQUEST['categoryId'];
   $sql = "SELECT CategoryTittle FROM category WHERE CategoryID = $cat_id";
   $result = mysqli_query($link, $sql);
   if(mysqli_num_rows($result) > 0)
   {
		$row = mysqli_fetch_assoc($result);
		$category_name = $row['CategoryTittle'];
   }
   
   //Free result set
   
  else
   echo "ERROR: Cold not able to execute $sql. " . mysqli_error($link);
 
 ?>
<!doctype html>
    <head>

        <title>Literatureworks</title>
        <link rel = "stylesheet" href="css/design.css">
        <link rel = "stylesheet" href="css/ChooseScreen.css">
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

       
        <div class="row">
			
			<?php
		
		   $sql = "SELECT LiteratureworkTittle, HistoryOfWriting, AuthorName, Image FROM literaturework WHERE CategoryID = $cat_id";
		   $result = mysqli_query($link, $sql);
		   if(mysqli_num_rows($result) > 0)
		   {
				while($row = mysqli_fetch_assoc($result))
				{
					echo '<div class="column">';
					echo '<div class="card">';
					echo '<img src="' . $row['Image'] . '" alt="No image found for this litwork" style="width:100%"> ';
					echo '<div class="container">';
					echo '<h2>' . $row['LiteratureworkTittle'] . '</h2>';
					echo '<p class="author">' . $row['AuthorName'] . '</p>';
					echo '<p>' . substr($row['HistoryOfWriting'], 0, 60) . '</p>';
					echo '<p><button class="button">Прочети</button></p>';
					echo '</div>';
					echo '</div>';
					echo '</div>';
					
				}
		   }
		
		?>

			
		</div>

         