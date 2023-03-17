<!doctype html>
    <head>

        <title>Literatureworks</title>
        <link rel = "stylesheet" href="css/design.css">
        <link rel = "stylesheet" href="css/ChooseScreen.css">
        <meta charset="UTF-8">
    </head>
        
        <body>
         
         <nav class="col-1">
          <a href="Welcome.html" target="_blank">Начало</a>
  
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
            <?php
  require_once "config.php";
   //Attempt select query execution
   $sql = "SELECT * FROM category";
   $cat_tittle= "SELECT CategoryTittle FROM category";
   $cat_id=$_REQUEST $sql['CategoryID'];
   var_dump($cat_id);
   if($result = mysqli_query($link, $sql ))
   if(mysqli_num_rows($result) > 0)

   {
   echo '<a href = "category.php?categoryId=' . $cat_id['CategoryID'] . '">';
   echo "<h2>";
   echo ['CategoryTittle'];
   echo"</h2>";
   echo "</a>";
   }
   
   //Free result set
   
  else
   echo "ERROR: Cold not able to execute $sql. " . mysqli_error($link);
 
  ?>
       
        <div class="row">
          <div class="column">
            <div class="card">
              <img src="jelezniqtsvetilnik.jfif" alt="jelezniqtsvetilnik" style="width:100%">
              <div class="container">
                <h2>"Железният светилник"</h2>
                <p class="author">Димитър Талев</p>
                <p>"Железният светилник"е роман написан от Димитър Талев....</p>
                <p><button class="button">Прочети</button></p>
              </div>
            </div>
          </div>
        
          <div class="column">
            <div class="card">
              <img src="baiganio.jfif" alt="baiganio" style="width: 100%">
              <div class="container">
                <h2>"Бай Ганьо"</h2>
                <p class="author">Алеко Константинов</p>
                <p>"Бай Ганьо" е сборник с фейлетони написан от Алеко Константинов.</p>
                <p><button class="button">Прочети</button></p>
              </div>
            </div>
          </div>
          
          <div class="column">
            <div class="card">
              <img src="balkanskisindom.jfif" alt="Balkanskisindrom" style="width: 100%">
              <div class="container">
                <h2>"Балкански синдром"</h2>
                <p class="author">Станислав Стратиев</p>
                <p>"Балкански синдром" е комедия написана от Станислав Стратиев.</p>
                <p><button class="button">Прочети</button></p>
            </div>
        </div>
      </div>
    </div>

         