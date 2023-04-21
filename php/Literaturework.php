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
        <h2 style="text-align:center">Литературна творба</h2>
        <h3 style="text-align:center">Автор</h3>
        <nav2 class="navigation">
            <a href="#">Съдържание</a>
            <a href="#">Творческа история</a>
            <a href="#">Жанр</a>
            <a href="#">Композиция</a>
            <a href="#">Основни герои</a>
            <a href="#">Тематика</a>
            </nav2>
            <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
            <div>...</div>
            <div>...</div>
            <div>...</div>
            <div>...</div>

</body>
</html>
