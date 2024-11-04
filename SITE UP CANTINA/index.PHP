<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Hand:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="#" class="logo">Site Cantina</a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Página Inicial</a></li>
            <li><a href="#about">Sobre Nós</a></li>
            <li><a href="#menu">Lanches</a></li>
            <li><a href="#services">Serviços</a></li>
            <li><a href="#contact">Carrinho</a></li>
            <li><a href="#contact">Contato</a></li>
            <li><a href="#cadastro" onclick="mostrarCadastro(event)">Cadastro</a></li> <!-- Link de cadastro -->

        </ul>
    </header>

<!------INICIO FORMS-->

<div id="modalCadastro" class="modal">
    <div class="modal-content">
        <span class="close" onclick="fecharCadastro()">&times;</span>
        <h2>Cadastro</h2>

        <form method="post">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" placeholder="Digite seu nome" required>

            <label for="password">Senha</label>
            <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
           
                <p style="color:red;"></p>
            

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</div>


    <!------INICIO CORPO-->
    
    <section class="home" id="home">
      <div class="home-text">
        <h1>Bem Vindo</h1>
        <h2>Aqui você encontra uma <span> seleção deliciosa de lanches</span></h2>
        <a href="#" class="btn">Veja Mais</a>
      </div>

      <div class="home-img">
        <img src="img/home.png" alt="" >
      </div>
    </section>

     <!------INICIO SOBRE NOS-->

     <section class="about" id="about">
        <div class="about-img">
            <img src="img/about.png" alt="">
        </div>

        <div class="about-text">
            <span>Sobre Nós</span>
            <h2>Sabor e Praticidade <span></span> na Palma da Sua Mão</span></h2>
            <p>Descubra uma variedade de lanches frescos e deliciosos com apenas alguns cliques. Faça seu pedido e aproveite uma experiência de sabor única, com entrega rápida e fácil.</p>
            <a href="#" class="btn">Veja Mais</a>
        </div>

     </section>

     <!------INICIO DIV LANCHES-->

     <section class="menu" id="menu">
        <div class="heading">
            <span>Menu De Lanches</span>
            <h2>Com grandes promoções</h2>
        </div>

        <div class="menu-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/food1.png" alt="">

                </div>
                <h2>Hamburguer</h2>
                <h3>Fast food</h3>
                <span>R$ 5,00</span>
                <i class="bx bx-cart-alt"></i>
            </div>


            <div class="box">
                <div class="box-img">
                    <img src="img/food2.png" alt="">

                </div>
                <h2>Hamburguer</h2>
                <h3>Fast food</h3>
                <span>R$ 5,00</span>
                <i class="bx bx-cart-alt"></i>
            </div>


            <div class="box">
                <div class="box-img">
                    <img src="img/food3.png" alt="">

                </div>
                <h2>Hamburguer</h2>
                <h3>Fast food</h3>
                <span>R$ 5,00</span>
                <i class="bx bx-cart-alt"></i>
            </div>

        </div>

     </section>

     <!------INICIO servicos-->

     <section class="services" id="services">
        <div class="heading">
            <span>Nossos Serviços</span>
            <h2>Catálogo de Produtos</h2>
        </div>

        <div class="service-container">
            <div class="s-box">
                <img src="img/s1.png" alt="">
                <h3>Catálogo de Produtos</h3>
                <p>Exibição de um menu completo com descrições detalhadas, imagens e preços.</p>
            </div>

            <div class="s-box">
                <img src="img/s2.png" alt="">
                <h3>Sistema de Pedidos Online</h3>
                <p>Funcionalidade de carrinho de compras que permite adicionar, remover e modificar itens.</p>
            </div>

            <div class="s-box">
                <img src="img/s3.png" alt="">
                <h3>Gestão de Estoque</h3>
                <p>Sistema de notificações para informar os clientes sobre a reposição de produtos fora de estoque.</p>
            </div>
        </div>
     </section>


      <!------INICIO CONTATO-->

      <section class="cta">
         <h2>Nós temos lanches de qualidade <br> Todo dia</h2>
         <a href="#" class="btn">Veja Mais</a>
      </section>

      <!------footer-->

      <section id="contact">
        <div class="footer">
            <div class="main">
                <div class="col">
                    <h4>Menu Links</h4>
                    <ul>
                        <li><a href="#home">Página Inicial</a></li>
                        <li><a href="#about">Sobre Nós</a></li>
                        <li><a href="#menu">Lanches</a></li>
                        <li><a href="#services">Serviços</a></li>
                        <li><a href="#contact">Contato</a></li>
                    </ul>
                </div>

                <div class="col">
                    <h4>Menu Links</h4>
                    <ul>
                        <li><a href="#home">Página Inicial</a></li>
                        <li><a href="#about">Sobre Nós</a></li>
                        <li><a href="#menu">Lanches</a></li>
                        <li><a href="#services">Serviços</a></li>
                        <li><a href="#contact">Contato</a></li>
                    </ul>
                </div>

                <div class="col">
                    <h4>Menu Links</h4>
                    <ul>
                        <li><a href="#home">Página Inicial</a></li>
                        <li><a href="#about">Sobre Nós</a></li>
                        <li><a href="#menu">Lanches</a></li>
                        <li><a href="#services">Serviços</a></li>
                        <li><a href="#contact">Contato</a></li>
                    </ul>
                </div>

                <div class="col">
                    <h4>Faça Contato</h4>
                    <div class="social">
                        <a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>
                        <a href="#" target="_blank"><i class="bx bxl-instagram"></i></a>
                        <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                        <a href="#" target="_blank"><i class="bx bxl-youtube"></i></a>
                    </div>

                </div>

            </div>

        </div>

      </section>

            <!------JAVASCRIPT-->
            
            <script type="text/javascript" src="js/script.js"></script>
    
</body>
</html>