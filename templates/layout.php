<!DOCTYPE HTML>
<html>
 <head>
     <title>Musika - <?= $title ?: '�bersicht' ?></title>
     <meta charset="windows-1252">
     <link rel="stylesheet" href="assets/stylesheets/stylesheet.css">
 </head>
 <body>
     <div class="page">
         <header>
             <h1>Musika - <?= $title ?: '�bersicht' ?></h1>
             <? if (Session::authenticated()) : ?>
                <a class="logout" href="?logout=1"><img src="assets/images/logout.png"></a>
            <? endif ?>
         </header>
         <main>
             <?= $content_for_layout ?>
         </main>
     </div>
 </body>
</html>
