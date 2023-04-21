<!DOCTYPE html>
<head>

    <title>Произведение</title>
    <link rel = "stylesheet" href="css/design.css">
    <link rel = "stylesheet" href="css/Literaturework.css">
	<meta charset="UTF-8">
  <style>
    nav2.navigation {
    display: flex;
    flex-direction: row;
justify-content: space-around;
align-items: center;
   }

    a{
        position:relative;
        text-decoration: none;
        color: #222;
        font-size: 18px;
        letter-spacing: .5px;
        padding: 0 20px;
        cursor: pointer;
    }
    a:before,
    a:after{
        content:"";
        position: absolute;
        height:3px;
        width:0;
        background:rgb(143, 189, 201);
        transition: .5s;
    }
    a:after{
        left:0;
        bottom: -10px;
    
    }
    a:before{
        right: 0;
        top: -10px;
    }
    a:hover:after,
    a:hover:before{
        width: 100%;
    }

    div.box
    {

      
    }
</style>
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
        <?php
        require_once "config.php"; 
        $lit_Id= $_REQUEST['litId'];
    $sql = "SELECT LiteratureworkID, LiteratureworkTittle,AuthorID, AuthorName,Content, HistoryOfWriting, Genre,Composition,Maincharacters,theme FROM literaturework WHERE LiteratureworkID= $lit_Id";
    $result=  mysqli_query($link,$sql);
   if(mysqli_num_rows($result) > 0)
	{
        while($row = mysqli_fetch_assoc($result))
        {
        echo '<a href="Literaturework.php?literatureworkId=' . $row['LiteratureworkID'] . '">';
        echo '<h2 style="text-align:center">' . $row['LiteratureworkTittle'] . '</h2>';
        echo '<h3 style="text-align:center">' . $row['AuthorName'] . '</h3>';
        echo '<nav2 class="navigation">';
        echo '<a href="#">Съдържание</a>';
        echo '<a href="#">Творческа история</a>';
        echo '<a href="#">Жанр</a>';
        echo '<a href="#">Композиция</a>';
        echo '<a href="#">Основни герои</a>';
        echo '<a href="#">Тематика</a>';
        echo  '</nav2>';
        echo '<div>"'.$row['Content'].'"</div>';
        echo '<div>"'.$row['HistoryOfWriting'].'"</div>';
        echo '<div>"'.$row['Genre'].'"</div>';
        echo '<div>"'.$row['Composition'].'"</div>';
        echo '<div>"'.$row['Maincharacters'].'"</div>';
        echo '<div>"'.$row['theme'].'"</div>';
         }

    }
    ?>
       

</body>
</html>
