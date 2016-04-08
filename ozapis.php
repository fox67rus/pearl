<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1280">
    <title>Стоматологическая клиника Жемчужина. Город Гагарин</title>
    <!--[if lt IE 9]><script src=http://html5shiv.googlecode.com/svn/trunk/html5.js>;</script><![endif]-->
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:700,300,500&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="wrapper">
 
  <header class="main">
    <div class="top_left">
              <div class="top_rezhim">
                  <b>Режим работы:</b>
                  <br> Пн-Сб: 08:00 - 20:00
                  <br> Вс: 08:00 - 16:00
                  <br>
              </div>
              <div class="top_adress">
                  г. Гагарин,
                  <br> улица 50 лет ВЛКСМ, 4А
                  <br> <a href="">Показать на карте</a>
                  <br>
              </div>
          </div>
    <div class="top_center"></div>
    <div class="top_right">
      <div class="tel_base">8(903)981-22-54</div>
      <div class="tel_reserv">8(48135)3-61-33</div>
      <div class="btn">Записаться на приём</div>
    </div>
    <nav>
      <ul>
        <li ><a href="index.html" class="first">&nbsp;</a></li>       
        <li><a  href="uslugi.html" >Услуги и цены</a></li>
        <li><a href="#">Специалисты</a></li>
        <li><a  href="about.html">О клинике</a></li>
        <li><a href="#">Режим работы</a></li>
        <li><a href="articles.html">Статьи</a></li>
        <li><a  href="contacts.html">Контакты</a></li>
      </ul>
    </nav> 
  </header>
  
  <section class="photo"></section>
    <footer>
    <p>
      &copy; 2016 Стоматологическая клиника “Жемчужина”. Все права защищены.
    </p>
    <p>
      Дизайн и разработка сайта 
      <a href="" target="_blank" title="Дизайн и разработка сайта" alt="EV Pavlova">E.V. Pavlova</a>
    </p>
  </footer>
</div>
</body>
</html>






 <h2>Заполните форму представленную ниже:</h2>



<?php
  $name = $_POST['firstname'] . ' ' . $_POST['lastname'];
  $when_it_happened = $_POST['whenithappened'];
  $how_long = $_POST['howlong'];
  $how_many = $_POST['howmany'];
  $alien_description = $_POST['aliendescription'];
  $what_they_did = $_POST['whattheydid'];
  $fang_spotted = $_POST['fangspotted'];
  $email = $_POST['email'];
  $other = $_POST['other'];

  $to = 'fox67rus@mail.ru';
  $subject = 'Aliens Abducted Me - Abduction Report';
  $msg = "$name was abducted $when_it_happened and was gone for $how_long.\n" .
    "Number of aliens: $how_many\n" .
    "Alien description: $alien_description\n" .
    "What they did: $what_they_did\n" .
    "Fang spotted: $fang_spotted\n" .
    "Other comments: $other";
  mail($to, $subject, $msg, 'From:' . $email);

  echo 'Thanks for submitting the form.<br />';
  echo 'You were abducted ' . $when_it_happened;
  echo ' and were gone for ' . $how_long . '<br />';
  echo 'Number of aliens: ' . $how_many . '<br />';
  echo 'Describe them: ' . $alien_description . '<br />';
  echo 'The aliens did this: ' . $what_they_did . '<br />';
  echo 'Was Fang there? ' . $fang_spotted . '<br />';
  echo 'Other comments: ' . $other . '<br />';
  echo 'Your email address is ' . $email;
?>
    
