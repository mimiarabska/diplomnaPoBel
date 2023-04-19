<!doctype html>

<?php

  require_once "config.php";
  ?>
<head>

<title>Обратна връзка</title>

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
    ini_set("SMTP","smtp.gmail.com");
    ini_set("smtp_port","587");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $headers = array(
            'From: ' . $_POST['email'],
            'Reply-To: ' . $_POST['email'],
            'X-Mailer: PHP/' . phpversion()
        );
        
        $smtp = Mail::factory('smtp', array(
            'host' => 'smtp.gmail.com',
            'port' => '587',
            'auth' => true,
            'username' => 'your_username@gmail.com',
            'password' => 'your_password'
        ));
        
        $mail = $smtp->send($to, $headers, $message);
        
      }
    ?>
</form>

 
	</article>

  </div>
  
  </main>
 
 </div>

