<!doctype html>

<?php

  require_once "config.php";
  ?>
<head>

<title>feedbackscreen</title>

<link rel = "stylesheet" href="css/design.css">
<link rel = "stylesheet" href="css/feedback.css">
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
      
 
     
      <title>Обратна връзка</title>


 <form class="myForm" method="post">

    <div class="message">
        <label for="msg">Съобщение</label>
        <textarea id="msg" name="msg"></textarea>
    </div>
    <div class="contact">
        <label for="name">Име</label>
        <input type="text" id="name" name="name">
        <label for="email">Имейл</label>
        <input type="email" id="email" name="email">
        <button type="submit">Изпращане</button>
    </div>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $to = 'mimi_arabska@abv.bg'; // your email address
        $subject = 'Website';
      
        $message = 'Message: ' . $_POST['msg'] . "\n";
        $message .= 'Name: ' . $_POST['name'] . "\n";
        $message .= 'Email: ' . $_POST['email'] . "\n";
      
        $headers = 'From: ' . $_POST['email'] . "\r\n" .
          'Reply-To: ' . $_POST['email'] . "\r\n" .
          'X-Mailer: PHP/' . phpversion();
      
          mail($to, $subject, $message, $headers);
      }
    ?>
</form>

 
	</article>

  </div>
  
  </main>
 
 </div>

