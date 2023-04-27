<!DOCTYPE html>
<?php
require_once "config.php";
$lit_Id= $_REQUEST['litId'];
$sql = "SELECT LiteratureworkID, LiteratureworkTittle,AuthorID, AuthorName,Content, HistoryOfWriting, Genre,Composition,Maincharacters,theme FROM literaturework WHERE LiteratureworkID= $lit_Id";
$result= mysqli_query($link,$sql);
if(mysqli_num_rows($result) > 0)
   {
		$row = mysqli_fetch_assoc($result);
		$litTitle = $row['LiteratureworkTittle'];
   }
   
   //Free result set
   
  else
   echo "ERROR: Cold not able to execute $sql. " . mysqli_error($link);
 

?>
<head>
<?php
    echo '<title>' . $row['LiteratureworkTittle'].'</title>';
    ?>
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

    nav2.navigation> a{
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
        background: rgb(220, 164, 144);
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
        text-align: justify; 
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
        
        $lit_Id= $_REQUEST['litId'];

        if(array_key_exists("openedTab",$_REQUEST)){
            $openedTab= $_REQUEST['openedTab'];
        }
        else {
            $openedTab= "0";
        }
    $sql = "SELECT LiteratureworkID, LiteratureworkTittle,AuthorID, AuthorName,Content, HistoryOfWriting, Genre,Composition,Maincharacters,theme FROM literaturework WHERE LiteratureworkID= $lit_Id";
    $result= mysqli_query($link,$sql);
   if(mysqli_num_rows($result) > 0)
	{
        $row = mysqli_fetch_assoc($result);
        echo '<h2 style="text-align:center">' . $row['LiteratureworkTittle'] . '</h2>';
        echo '<h3 style="text-align:center">' . $row['AuthorName'] . '</h3>';
        echo '<nav2 class="navigation">';
        echo '<a href="Literaturework.php?litId='.$lit_Id.'&openedTab=0">Съдържание</a>';
        echo '<a href="Literaturework.php?litId='.$lit_Id.'&openedTab=1">Творческа история</a>';
        echo '<a href="Literaturework.php?litId='.$lit_Id.'&openedTab=2">Жанр</a>';
        echo '<a href="Literaturework.php?litId='.$lit_Id.'&openedTab=3">Композиция</a>';
        echo '<a href="Literaturework.php?litId='.$lit_Id.'&openedTab=4">Основни герои</a>';
        echo '<a href="Literaturework.php?litId='.$lit_Id.'&openedTab=5">Тематика</a>';
        echo  '</nav2>';
        echo '<div class = "box">';
        if($openedTab=="0"){
        echo '<div>'.ReplaceNewLinesWithBrs($row['Content']).'</div>';
        }
        elseif($openedTab =="1")
        {
        echo '<div>'.ReplaceNewLinesWithBrs($row['HistoryOfWriting']).'</div>';
        
        }
        elseif($openedTab =="2")
        {
        echo '<div>'.ReplaceNewLinesWithBrs($row['Genre']).'</div>';
        }
        elseif($openedTab =="3")
        {
        echo '<div>'.ReplaceNewLinesWithBrs($row['Composition']).'</div>';
        }
        elseif($openedTab =="4")
        {
        echo '<div>'.ReplaceNewLinesWithBrs($row['Maincharacters']).'</div>';
        }
        elseif($openedTab =="5")
        {
        echo '<div>'.ReplaceNewLinesWithBrs($row['theme']).'</div>';
        }
echo '</div>';
    }

    function ReplaceNewLinesWithBrs($rawText)
    {
        return mb_eregi_replace("\n", "<br>", $rawText);
    }

    ?>
       

</body>
</html>