<!DOCTYPE html>
<html lang="">
    <head>
    <meta charset="utf-8">
       <link rel="stylesheet" type="text/css" href="../../styles/styles.css">
        <link rel="stylesheet" type="text/css" href="../../styles/font-awesome/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="shortcut icon" href="../../imgs/logo.jpg" >
    <title>PRODUTOS</title>
    </head>

    <body>
        <main>
                <header>
               
               <div><img src="../../imgs/esquerda2.jpg"></div>
                <div id="logo"><a href="../../pages/index.php"><img src="../../imgs/logo.jpg"></a></div>
                <div><img src="../../imgs/direita2.jpg"></div>
                
                </header>
                 
                <nav id="menu">
                  <?php
                require("header/menu.php");
                ?>
                </nav>
                <article>
                    <div id="produtos">
                        <h1>PRODUTOS</h1>
                        <p>Pensados especialmente para deixar sua louça com um cheiro agradável, controlando os odores mais fortes, como os de peixe, alho, cebola, ovo e etc. Mestres em limpeza profunda e brilho. </p>
                        <div>
                            <img src="../../imgs/P5.jpg">
                            <h6>Sabão em Barra de Lavanda</h6>
                        </div>
                        <div>
                            <img src="../../imgs/P2.jpg">
                            <h6>Sabão em Barra de Alecrim</h6>
                        </div>
                        <div>
                            <img src="../../imgs/P3.jpg">
                            <h6>Sabão em Barra de Erva-doce </h6>
                        </div>
                    </div>
                    
                    <div id="produtos2">
                        <div>
                            <img src="../../imgs/P1.jpg">
                            <h6>Sabão em Barra de Coco</h6>
                        </div>
                        <div>
                            <img src="../../imgs/P4.jpg">
                            <h6>Sabão em Barra de Flor de Cerejeira</h6>
                        </div>
                    </div>
                </article>   
            
            
                <footer id="rodape">
                <?php
                require("footer/rodape.php");
                ?>
                </footer>
      
        
        </main>
    
    
    
    
    
    </body>
</html>
