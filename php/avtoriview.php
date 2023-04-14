<!DOCTYPE html>
<head>

    <title>Literaturework</title>
    <link rel = "stylesheet" href="css/design.css">
    <link rel = "stylesheet" href="css/avtoriview.css">
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
<h1>Автори</h1>
<h2>A</h2>
<?php

  require_once "config.php";
   //Attempt select query execution
   $authors = array("Алеко Константинов", "Атанас Далчев", "Борис Христов", "Виктор Пасков", "Димитър Талев", "Диsмчо Дебелянов", "Елин Пелин", "Елисавета Багряна", "Емилиян Станев"," Иван Вазов", "Йордан Йовков", "Йордан Радичков", "Никола Вапцаров");
   $prevLetter = substr ($authors[0], 0, 1);
   
   foreach($authors as $author)
{
  $currentLetter = substr($authors[0], 0, 1);
   if($currentLetter !== $prevLetter){
   echo "<div><br> $authors[$i] </br></div>";
  $prevLetter = $currentLetter;
   }
  else    
  {
    echo $author;
  }
  
}
   ?>


<a href="https://bg.wikipedia.org/wiki/%D0%90%D0%BB%D0%B5%D0%BA%D0%BE_%D0%9A%D0%BE%D0%BD%D1%81%D1%82%D0%B0%D0%BD%D1%82%D0%B8%D0%BD%D0%BE%D0%B2">Алеко Константинов</a>
<br><a href="https://bg.wikipedia.org/wiki/%D0%90%D1%82%D0%B0%D0%BD%D0%B0%D1%81_%D0%94%D0%B0%D0%BB%D1%87%D0%B5%D0%B2">Атанас Далчев</a>
<h2>Б</h2>
<br><a href="https://bg.wikipedia.org/wiki/%D0%91%D0%BE%D1%80%D0%B8%D1%81_%D0%A5%D1%80%D0%B8%D1%81%D1%82%D0%BE%D0%B2">Борис Христов</a>
<h2>В</h2>
<br><a href="https://bg.wikipedia.org/wiki/%D0%92%D0%B8%D0%BA%D1%82%D0%BE%D1%80_%D0%9F%D0%B0%D1%81%D0%BA%D0%BE%D0%B2">Виктор Пасков</a>
<h2>Г</h2>
<p>---</p>
<h2>Д</h2>
<a href="https://bg.wikipedia.org/wiki/%D0%94%D0%B8%D0%BC%D0%B8%D1%82%D1%8A%D1%80_%D0%A2%D0%B0%D0%BB%D0%B5%D0%B2">Димитър Талев</a><br>
<a href="https://bg.wikipedia.org/wiki/%D0%94%D0%B8%D0%BC%D1%87%D0%BE_%D0%94%D0%B5%D0%B1%D0%B5%D0%BB%D1%8F%D0%BD%D0%BE%D0%B2">Димчо Дебелянов</a>
<h2>Е</h2>
<a href="https://bg.wikipedia.org/wiki/%D0%95%D0%BB%D0%B8%D0%BD_%D0%9F%D0%B5%D0%BB%D0%B8%D0%BD">Елин Пелин</a><br>
<a href="https://bg.wikipedia.org/wiki/%D0%95%D0%BB%D0%B8%D1%81%D0%B0%D0%B2%D0%B5%D1%82%D0%B0_%D0%91%D0%B0%D0%B3%D1%80%D1%8F%D0%BD%D0%B0">Елисавета Багряна</a><br>
<a href="https://bg.wikipedia.org/wiki/%D0%95%D0%BC%D0%B8%D0%BB%D0%B8%D1%8F%D0%BD_%D0%A1%D1%82%D0%B0%D0%BD%D0%B5%D0%B2">Емилиян Станев</a><br>
<h2>Ж</h2>
<p>---</p>
<h2>З</h2>
<p>---</p>
<h2>И</h2>
<a href="https://bg.wikipedia.org/wiki/%D0%98%D0%B2%D0%B0%D0%BD_%D0%92%D0%B0%D0%B7%D0%BE%D0%B2">Иван Вазов</a>
<h2>Й</h2>
<a href="https://bg.wikipedia.org/wiki/%D0%99%D0%BE%D1%80%D0%B4%D0%B0%D0%BD_%D0%99%D0%BE%D0%B2%D0%BA%D0%BE%D0%B2">Йордан Йовков</a><br>
<a href="https://bg.wikipedia.org/wiki/%D0%99%D0%BE%D1%80%D0%B4%D0%B0%D0%BD_%D0%A0%D0%B0%D0%B4%D0%B8%D1%87%D0%BA%D0%BE%D0%B2">Йордан Радичков</a>
<h2>К</h2>
<p>---</p>
<h2>Л</h2>
<p>---</p>
<h2>М</h2>
<p>---</p>
<h2>Н</h2>
<a href="https://bg.wikipedia.org/wiki/%D0%9D%D0%B8%D0%BA%D0%BE%D0%BB%D0%B0_%D0%92%D0%B0%D0%BF%D1%86%D0%B0%D1%80%D0%BE%D0%B2">Никола Вапцаров</a>
<h2>О</h2>
<p>---</p>
<h2>П</h2>
<a href="https://bg.wikipedia.org/wiki/%D0%9F%D0%B5%D0%B9%D0%BE_%D0%AF%D0%B2%D0%BE%D1%80%D0%BE%D0%B2">Пейо Яворов</a><br>
<a href="https://bg.wikipedia.org/wiki/%D0%9F%D0%B5%D0%BD%D1%87%D0%BE_%D0%A1%D0%BB%D0%B0%D0%B2%D0%B5%D0%B9%D0%BA%D0%BE%D0%B2">Пенчо Славейков</a><br>
<a href="https://bg.wikipedia.org/wiki/%D0%9F%D0%B5%D1%82%D1%8F_%D0%94%D1%83%D0%B1%D0%B0%D1%80%D0%BE%D0%B2%D0%B0">Петя Дубарова</a>
<h2>Р</h2>
<p>---</p>
<h2>С</h2>
<a href="https://bg.wikipedia.org/wiki/%D0%A1%D1%82%D0%B0%D0%BD%D0%B8%D1%81%D0%BB%D0%B0%D0%B2_%D0%A1%D1%82%D1%80%D0%B0%D1%82%D0%B8%D0%B5%D0%B2">Станислав Стратиев</a>
<h2>Т</h2>
<p>---</p>
<h2>У</h2>
<p>---</p>
<h2>Ф</h2>
<p>---</p>
<h2>Х</h2>
<a href="https://bg.wikipedia.org/wiki/%D0%A5%D1%80%D0%B8%D1%81%D1%82%D0%BE_%D0%91%D0%BE%D1%82%D0%B5%D0%B2">Христо Ботев</a><br>
<a href="https://bg.wikipedia.org/wiki/%D0%A5%D1%80%D0%B8%D1%81%D1%82%D0%BE_%D0%A1%D0%BC%D0%B8%D1%80%D0%BD%D0%B5%D0%BD%D1%81%D0%BA%D0%B8">Христо Смирненски</a>
<a href="https://bg.wikipedia.org/wiki/%D0%A5%D1%80%D0%B8%D1%81%D1%82%D0%BE_%D0%A4%D0%BE%D1%82%D0%B5%D0%B2">Христо Фотев</a>


</article>
</body>







