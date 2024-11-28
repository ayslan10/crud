<?php
// Salve este arquivo como index.php
?>

    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="Ayslan">
        <div class="text-center">
            <h1>Bem-vindo à Barbearia Loyola</h1>
            <p>Corte, estilo e cuidado para o homem moderno.</p>
            <a href="servicos_listarr.php" class="btn btn-light btn-lg mt-3">Explore nossos serviços</a>
        </div>
    </section>

    <!-- Seção de Destaques -->
    <section class="container my-5">
        <h2 class="text-center mb-4">Nossos Diferenciais</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <i class="bi bi-scissors text-primary display-4"></i>
                <h3 class="mt-3">Cortes Modernos</h3>
                <p>Estilo que acompanha as tendências para todos os tipos de cabelo.</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-droplet-half text-success display-4"></i>
                <h3 class="mt-3">Cuidados</h3>
                <p>Produtos de alta qualidade para cuidar do seu visual e bem-estar.</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-calendar-check text-danger display-4"></i>
                <h3 class="mt-3">Atendimento Agendado</h3>
                <p>Evite filas com nosso sistema de agendamento prático e rápido.</p>
            </div>
        </div>
    </section>

    <!-- Seção de Contato -->
    <section class="bg-light py-5">
        <div class="container text-center">
            <h2>Entre em Contato</h2>
            <p class="mb-4">Agende seu horário ou tire suas dúvidas conosco!</p>
            <a href="agenda-listar.php" class="btn btn-primary btn-lg">Agendar Agora</a>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
