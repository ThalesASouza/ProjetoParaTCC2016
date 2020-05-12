<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
          <link rel="stylesheet" type="text/css" href="../../styles/styles.css">
        <link rel="stylesheet" type="text/css" href="../../styles/font-awesome/css/font-awesome.min.css">
          <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="shortcut icon" href="../../imgs/logo.jpg" >
        <title>QUEM SOMOS</title>
    
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
            <article id="qsomos">
                
                <h1>ITAPÓ</h1>
                <p>Uma empresa focada na produção de sabão através de materiais não biodegradáveis auxiliando no combate a devastação da natureza.</p>
               
                <div>
                    <img src="../../imgs/missao.png">
                    <h6>MISSÃO</h6>
                    <p>Promover a sustentabilidade através da coleta de óleo residual a fim de diminuir seus impactos no meio ambiente.</p>
                </div>
                <div>
                    <img src="../../imgs/visao.png">
                    <h6>VISÃO</h6>
                    <p>Ser referência no ramo industrial, proporcionando produtos acessíveis e sustentáveis aos nossos consumidores.</p>
                </div>
                <div>
                    <img src="../../imgs/valores.png">
                    <h6>VALORES</h6>
                    <p> Desenvolver o mercado industrial através de compromisso, ética, qualificação, inovação, sustentabilidade.</p>
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
