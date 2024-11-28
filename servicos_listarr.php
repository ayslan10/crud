<?php 
include "header.php"; 
include "conexao.php"; 
?>

<!-- Adicionando o container principal -->
<main class="container mt-5">

    <!-- Cabeçalho com título e botão -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary">Todos os serviços</h2>
        <a href="servicos-cadastro.php" class="btn btn-success">Adicionar novo serviço</a>
    </div>

    <!-- Tabela responsiva -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>SERVIÇO</th>
                    <th>DESCRIÇÃO</th>
                    <th>PREÇO</th>
                    <th>AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM servicos";
                $resultado = mysqli_query($conexao, $sql);

                while ($linha = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>{$linha['servico']}</td>";
                    echo "<td>{$linha['descricao']}</td>";

                   // Remove qualquer símbolo ou caractere não numérico do preço
$preco = is_numeric($linha['preco']) ? $linha['preco'] : preg_replace('/[^0-9.]/', '', $linha['preco']);

// Formata o preço corretamente
echo "<td>R$ " . number_format((float)$preco, 2, ',', '.') . "</td>";

                    echo "<td class='text-center'>";
                    echo "<a href='servicos-excluir.php?id={$linha['id']}' class='btn btn-danger btn-sm me-1'>";
                    echo "<i class='bi bi-trash'></i>";
                    echo "</a>";
                    echo "<a href='servicos-editar.php?id={$linha['id']}' class='btn btn-warning btn-sm'>";
                    echo "<i class='bi bi-pencil'></i>";
                    echo "</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                mysqli_close($conexao);
                ?>
            </tbody>
        </table>
    </div>

</main>

<?php include "footer.php"; ?>
