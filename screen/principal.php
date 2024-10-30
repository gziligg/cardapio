<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/design.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">

</head>
<body>
    <div class="sepnav">
        <div class="topnav">
            <div class="septopnav1">
                <p class="logo" style="letter-spacing: 3px;">Villa Gourmet</p>
            </div>
            <div class="septopnav2">
                <a class="carrinho" href="">CARRINHO</a>
                <a class="cardapio" href="">CARDÁPIO</a>
                <a class="pedidos" href="">PEDIDOS</a>
                <a class="cupons" href="">CUPONS</a>
                
                <div class="menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <div class="sepnavtop">
                    <a class="cel-cardapio" href=""><i class="fas fa-square-list"></i>CARDÁPIO</a>
                    <a class="cel-pedidos" href=""><i class="fas fa-burger-soda"></i>PEDIDOS</a>
                    <a class="cel-cupons" href=""><i class="fas fa-ticket"></i>CUPONS</a>
                    <a class="cel-carrinho" href=""><i class="fas fa-cart-shopping"></i>CARRINHO</a>
                </div>
            </div>
        </div>
        <nav>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="dashboard.php" class="link-ham">
                        <i class="fas fa-hamburger"></i>
                        <span class="nav-item">BURGUER</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="users.php" class="link-por">
                        <i class="fas fa-french-fries"></i>
                        <span class="nav-item">PORÇÕES</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="radio.php" class="link-beb">
                        <i class="fas fa-glass-citrus"></i>
                        <span class="nav-item">BEBIDAS</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="dashinfo.php" class="link-comb">
                        <i class="fas fa-burger-soda"></i>
                        <span class="nav-item">COMBOS</span>
                    </a>
                </li>   
            </ul>
        </nav>
        <div class="burguer">
            <a href="#" class="artesanal" data-category="BURGER ARTESANAL">
                <i class="fas fa-hamburger"></i>
                <span class="nav-item">ARTESANAL</span>
            </a>
            <a href="#" class="premium" data-category="BURGER PREMIUM">
                <i class="fas fa-hamburger"></i>
                <span class="nav-item">PREMIUM</span>
            </a>
            <a href="#" class="small" data-category="BURGER SMALL">
                <i class="fas fa-hamburger"></i>
                <span class="nav-item">SMALL</span>
            </a>
        </div>
        <div class="porcoes"></div>
        <div class="bebidas"></div>
        <div class="combos"></div>
        <div class="cont-geral">
            <div class="cont-secundario-geral">
                <?php
                    include_once '../conexao/conexao.php';

                    $categories = ['BURGER ARTESANAL', 'BURGER PREMIUM', 'BURGER SMALL'];

                    foreach ($categories as $category) {
                        echo '<h2>' . htmlspecialchars($category) . '</h2>';
                        echo '<div class="category">';

                        $sql = "SELECT * FROM produtos WHERE categoria='$category'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<div class="card">';
                                echo '  <div class="infos">';
                                echo '      <div class="titles">';
                                echo '          <div class="titsep1">';
                                echo '              <p>' . htmlspecialchars($row['nome']) . '</p>';
                                echo '              <p class="price">R$ ' . htmlspecialchars($row['preco']) . '</p>';
                                echo '              <p class="inf-burg">' . htmlspecialchars($row['descricao']) . '</p>';
                                echo '          </div>';
                                echo '          <div class="titsep2">';
                                echo '              <button class="cart-button"><i class="fa-solid fa-cart-shopping"></i><p>ADICIONAR</p></button>';
                                echo '          </div>';
                                echo '      </div>';
                                echo '  </div>';
                                echo '  <div class="image">';
                                echo '      <img src="../images/' . htmlspecialchars($row['foto']) . '" alt="">';
                                echo '  </div>';
                                echo '  <button class="cart-button-img"><i class="fa-solid fa-cart-shopping"></i><p>ADICIONAR</p></button>';
                                echo '</div>';
                            }
                        } else {
                            echo '<p>Nenhum produto encontrado.</p>';
                        }

                        echo '</div>'; // Fecha div.category
                    }

                    $conn->close();
                ?>
            </div>
        </div>
    <script src="../script/script.js"></script>
    <script>
    let openSpan = null; // Armazena o span atualmente aberto

    function toggleSpan(span) {
        if (openSpan && openSpan !== span) {
            openSpan.style.width = '0'; // Fecha o span atualmente aberto
        }
        const isOpen = span.style.width === '250px'; // Verifica se o span atual está aberto
        span.style.width = isOpen ? '0' : '250px'; // Alterna a largura

        // Atualiza o span aberto
        openSpan = isOpen ? null : span;
    }

    document.querySelector('.link-ham').addEventListener('click', function(event) {
        event.preventDefault(); // Evita o redirecionamento
        toggleSpan(document.querySelector('.burguer'));
    });

    document.querySelector('.link-por').addEventListener('click', function(event) {
        event.preventDefault(); // Evita o redirecionamento
        toggleSpan(document.querySelector('.porcoes'));
    });

    document.querySelector('.link-beb').addEventListener('click', function(event) {
        event.preventDefault(); // Evita o redirecionamento
        toggleSpan(document.querySelector('.bebidas'));
    });

    document.querySelector('.link-comb').addEventListener('click', function(event) {
        event.preventDefault(); // Evita o redirecionamento
        toggleSpan(document.querySelector('.combos'));
    });

    // Função para buscar produtos sem recarregar a página
    function fetchProducts(category = null) {
        const url = category ? `fetch_products.php?categoria=${category}` : `fetch_all_products.php`;
        
        fetch(url)
            .then(response => response.text())
            .then(data => {
                document.querySelector('.cont-secundario-geral').innerHTML = data;
            })
            .catch(error => console.error('Erro:', error));
    }

    document.querySelectorAll('.burguer a').forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Evita o redirecionamento

            // Verifica se o link clicado já está ativo
            if (this.classList.contains('active-category')) {
                this.classList.remove('active-category'); // Remove a classe ativa
                fetchProducts(); // Carrega todos os produtos separados por categoria
            } else {
                // Remove a classe 'active-category' de todos os links
                document.querySelectorAll('.burguer a').forEach(function(l) {
                    l.classList.remove('active-category');
                });

                // Adiciona a classe 'active-category' ao link clicado
                this.classList.add('active-category');

                const category = this.getAttribute('data-category');
                fetchProducts(category); // Chama a função para buscar produtos da categoria
            }
        });
    });
</script>

</body>
</html>
