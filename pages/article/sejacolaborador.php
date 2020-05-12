<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
          <link rel="stylesheet" type="text/css" href="../../styles/styles.css">
        <link rel="stylesheet" type="text/css" href="../../styles/font-awesome/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="shortcut icon" href="../../imgs/logo.jpg" >
        <title>SEJA COLABORADOR</title>
       
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
                <div id="sjc">
                
                    <h1> Nosso Foco</h1>
                        <p>O óleo de cozinha usado, em muitos casos, acaba sendo jogado no ralo da pia ou mesmo nos vasos sanitários. Outras pessoas já preferem colocá-lo em algum recipiente vedado e descartá-lo com o lixo orgânico comum. Entretanto, todos esses métodos de descarte do óleo de cozinha são meios de contaminação do meio ambiente, podendo poluir as águas, o solo e até mesmo a atmosfera. Nós o transformamos em produtos de limpeza, extraindo assim uma esperança de algo maléfico. Seja um colaborador, trocando seu óleo por desconto em produtos e nos apoiando nesse combate a poluição.</p>
                    <h1>Como Colaborar?</h1>
                        <p> Através dos nossos pontos de coleta ou trazendo diretamente para nós.Temos diversas parcerias:Escolas publicas e particulares, Empresas Cooperadas, CUCAS.</p>
                    <h1>Duvidas?</h1>
                    <h6>Prencha o formulario abaixo para mais informações.</h6>
                       
                    <div id="form">
                        <form method="post" action="">
                        <input type="text" placeholder="Nome" required>
                        <input type="tel" placeholder="Telefone" required>
                        <input type="text" placeholder="Cidade" required>
                        <input type="text" placeholder="Estado"required>
                        <input type="email" placeholder="Email" id="email" required>
                        <input type="text" placeholder="Assunto" id="assunto" required>
                        <textarea  placeholder="Duvida" id="duvida" required></textarea>   
                            <button type="submit" value="ENVIAR DUVIDA" id="button"><i class="fa fa-share" aria-hidden="true"></i>ENVIAR DUVIDA</button>

    



                        </form>
                    
                    
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
