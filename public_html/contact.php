<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatilbe" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pampa Construções - Contato</title>

    <!-- Referencias -->
    <?php require ('inc/links.php'); ?> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <style>
        .custom-alert{
            position: fixed;
            top: 80px;
            right: 25px;
        }
    </style>
</head>
<body style="background-color: #FFDAB9;">

    <?php require ('inc/header.php'); ?>    
        
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Contato</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Aproveite que na nossa página de contatos nós disponibilizamos nosso endereço, email, telefone e whatsapp. Não quer sair da nossa página? Sem problemas, nos envie
            uma mensagem que nós retornaremos o mais rápido que puder!!
        </p>
    </div>

    <?php 
        $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
        $values = [1];
        $contact_r = mysqli_fetch_assoc(select($contact_q, $values,'i'));
    ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rouded mb-4" src="<?php echo $contact_r['iframe'] ?>" height="450" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Endereço</h5>
                    <a href="<?php echo $contact_r['gmap'] ?>" class="text-decoration-none text-dark" target="_blank">
                    <i class="bi bi-geo-alt-fill"></i><?php echo $contact_r['address'] ?>
                    </a>
                    <h5 class="mt-4">Contato</h5>
                    <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-line-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-whatsapp"></i> +<?php echo $contact_r['pn1'] ?>
                    </a><br><br>
                    <a href="tel: +<?php echo $contact_r['pn2'] ?>" class="d-line-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn2'] ?>
                    </a>
                    <h5 class="mt-4">Email</h5>
                    <a class="text-decoration-none text-dark" href="mailto: <?php echo $contact_r['email'] ?>">
                        <i class="bi bi-envelope"></i> <?php echo $contact_r['email'] ?>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form method="POST">
                        <h5>Dúvidas? Entre em contato</h5>
                        <div class="mb-3">
                            <label for="form-label" style="font-weight: 500;">Nome</label>
                            <input type="text" name="name"class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                            <label for="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" name="email" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                            <label for="form-label" style="font-weight: 500;">Assunto</label>
                            <input type="text" name="subject" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                            <label for="form-label" style="font-weight: 500;">Mensagem</label>
                            <textarea class="form-control shadow-none" name="message" rows="5" style="resize: none;" required></textarea>
                        </div>
                        <button type="submit" name="send" class="btn text-white custom-bg mt-3">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php 
        if(isset($_POST['send'])){
            $frm_data = filteration($_POST);
            
            $q = "INSERT INTO `user_queries`(`name`,`email`,`subject`,`message`) VALUES (?,?,?,?)";
            $values = [$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];

            $res = insert($q,$values,'ssss');
            if($res==1){
                alert('success','Mensagem Enviada com sucesso! Entraremos em contato em breve.');
            } 
            else{
                alert('error','Falha no Envio!');
            }
        }
    ?>

    <?php require ('inc/footer.php'); ?>  
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>