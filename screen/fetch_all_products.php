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