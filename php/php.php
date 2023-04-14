<?php
  require_once "config.php";
   //Attempt select query execution
   $authors = array("Алеко Константинов", "Атанас Далчев", "Борис Христов", "Виктор Пасков", "Димитър Талев", "Димчо Дебелянов", "Елин Пелин", "Елисавета Багряна", "Емилиян Станев"," Иван Вазов", "Йордан Йовков", "Йордан Радичков", "Никола Вапцаров");
   $prevLetter = substr ($authors[0, 0, 1]);
   
   foreach($authors as $author)
{
  $currentLetter = substr($authors, 0, 1);
   if($currentLetter !== $prevLetter){
   echo "<div> $authors[$i] </div>";
  $prevLetter = $currentLetter;
  else    
  {
    echo $author;
  }
  }
}

   $dir = ". / images";
   $files = scandir($dir);
   var_dump($files);

   $scanned_directory = array_diff($files, array ('..', '.'));
   var_dump($scanned_directory);

































  $last_avtor = ($row'AuthorName');

   $result = mysqli_query($link, $sql);

   if($result = mysqli_query($link, $sql ))
   if(mysqli_num_rows($result) > 0)

   
   while($row = mysqli_fetch_array($result)){
   echo '<a href="avtor.php?AuthorId=' . $row["AuthorID= $sql" ] . '">';
   if($first_letter !=== )
   echo $row['AuthorName'];
   echo "</a>";
   }

















   require_once "config.php";
   //Attempt select query execution
   $sql ="SELECT AuhtorID FROM author ORDER BY AuthorName"; 
  $first_letter= substr("AuthorName", 0);
   $result = mysqli_query($link, $sql);
   var_dump($first_letter);
   if($result = mysqli_query($link, $sql ))
   if(mysqli_num_rows($result) > 0)
   while($row = mysqli_fetch_array($result)){
   echo '<a href="avtor.php?AuthorId=' . $row["AuthorID= $sql" ] . '">';
   if($first_letter !=== )
   echo $row['AuthorName'];
   echo "</a>";
   }
   ?>