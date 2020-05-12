<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../styles/styles.css">
        <link rel="stylesheet" type="text/css" href="../styles/font-awesome/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="shortcut icon" href="../imgs/logo.jpg" >
        <link rel="stylesheet" href="../styles/slideshow/style-slide-show.css">
        <script type="text/javascript" src="../js/slideshow.js"></script>
        <title>ITAPÓ</title>
    
    </head>
    
    <body>
        <main>
            <header>
                <div><img src="../imgs/esquerda2.jpg"></div>
                <div id="logo"><a href="../pages/index.php"><img src="../imgs/logo.jpg"></a></div>
                <div><img src="../imgs/direita2.jpg"></div>
            </header>
            
            <nav id="menu">
              <?php
                require("article/header/menu.php");
                ?>
            </nav>
            <div id="slide">
                <?php 
                require("slideshow/slide.php");
                ?>
            </div>
            <article>
                
                <div id="produtos">
                        <h1>PRODUTOS</h1>
                        <div>
                            <img src="../imgs/P5.jpg">
                            <h6>Sabão em Barra de Lavanda</h6>
                        </div>
                        <div>
                            <img src="../imgs/P2.jpg">
                            <h6>Sabão em Barra de Alecrim</h6>
                        </div>
                        <div>
                            <img src="../imgs/P3.jpg">
                            <h6>Sabão em Barra de Erva-doce </h6>
                        </div>
                    </div>
                    
            </article>   
            
            
            <footer id="rodape">
             <?php
                require("article/footer/rodape.php");
                ?>
            </footer>
      
        
        </main>
    </body>






</html>
