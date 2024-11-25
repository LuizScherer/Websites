<?php
    require('inc/essentials.php');
    adminLogin();
    session_regenerate_id(true);
?>

<!DOCTYPE html>
<html lang="pt-BR"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações</title>
    <?php require('inc/links.php'); ?> 
 
</head>
<body style="background-color: LightGrey;">
    
    <?php require('inc/header.php'); ?>

    <!-- Configurações -->
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Configurações</h3>
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Geral</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                            <i class="bi bi-pencil"></i> Editar
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Titulo do Site</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-2 fw-bold">Sobre nós</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                </div>

                <!-- Modal Confi. Geral -->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Geral</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Titulo do site</label>
                                        <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Sobre Nós</label>
                                        <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" rows="8"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_value" class="btn text-secondary shadow-none text-dark" data-bs-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!--  contato -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Contatos</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
                            <i class="bi bi-pencil"></i> Editar
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Endereço</h6>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Mapa</h6>
                                    <p class="card-text" id="gmap"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Telefone</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-whatsapp"></i>
                                        <span id="pn1"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="pn2"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Email</h6>
                                    <p class="card-text" id="email"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                                    <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal confi. contatos -->
                <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form id="contacts_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Configuração dos contatos</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="modal-body">
                                        <div class="container-fluid p-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold">Endereço</label>
                                                        <input type="text" name="address" id="address_inp" class="form-control shadow-none">
                                                    </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Link do google Maps</label>
                                                    <input type="text" name="gmap" id="gmap_inp" class="form-control shadow-none"></input>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Telefone (com código de área do Brasil)</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-whatsapp"></i></span>
                                                        <input type="number" name="pn1" id="pn1_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                                        <input type="number" name="pn2" id="pn2_inp" class="form-control shadow-none">
                                                    </div>
                                                </div>
                                            </div>
                                         
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold">Email</label>
                                                        <input type="email" name="emial" id="email_inp" class="form-control shadow-none"></input>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold">Fonte do iFrame</label>
                                                        <input type="text" name="iframe" id="iframe_inp" class="form-control shadow-none"></input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="contacts_inp(contacts_data)" class="btn text-secondary shadow-none text-dark" data-bs-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>
    <script src="script/settings.js"></script>
</body>
</html>