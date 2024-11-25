    <?php
        require('admin/inc/db_config.php');
        require('admin/inc/essentials.php');
    ?>
    <!-- Cabeçalho -->
    <nav id="nav-bar"class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="#">Pampa Construções</a>
            <button class="navbar-toggler shadown-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link me-2" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="rooms.php">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="aboutus.php">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="contact.php">Contato</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button type="button" class="btn btn-outline-dark shadow-none " onclick="window.location.href='admin/dashboard.php';">
                        Administrador
                    </button>
                </div>
            </div>
        </div>
    </nav>'

    
