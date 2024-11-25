<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatilbe" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pampa Construções - Home</title>

    <!-- Referencias -->
    <?php require ('inc/links.php'); ?> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- CSS -->
    <style>
        .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px) {
            .availability-form{
                margin-top: 25px;
                padding: 0 35px;
                }

            .img-data-dimension{
            height: 250px;
                }
        }
    </style>
</head>
<body style="background-color: #FFDAB9;">

    <?php require ('inc/header.php'); ?>    

    <!-- Carrocel --> 
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="img-data-dimension" src="images/carousel/a.jpg" style="border-radius: 5px;"/>
                </div>
                <div class="swiper-slide">
                    <img class="img-data-dimension" src="images/carousel/b.jpg" style="border-radius: 5px;"/>
                </div>
                <div class="swiper-slide">
                    <img class="img-data-dimension" src="images/carousel/c.jpg" style="border-radius: 5px;"/>
                </div>
                <div class="swiper-slide">
                    <img class="img-data-dimension" src="images/carousel/d.jpg" style="border-radius: 5px;"/>
                </div>
                <div class="swiper-slide">
                    <img class="img-data-dimension" src="images/carousel/e.jpg" style="border-radius: 5px;"/>
                </div> 
            </div>
        </div>
    </div>

    <!-- Nossos serviços -->
     <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Nossos Serviços</h2>
     <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">  
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/constr.svg" width="80px">
                <h5 class="mt-3">Construção</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/gerenc.svg" width="80px">
                <h5 class="mt-3">Gerenciamento</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/paisag.svg" width="80px">
                <h5 class="mt-3">Paisagismo</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/projeto.svg" width="80px">
                <h5 class="mt-3">Projetos</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/residuos.svg" width="80px">
                <h5 class="mt-3">Residuos</h5>
            </div>
        </div>
     </div>

    <!-- Comentários -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Comentários</h2>
    <div class="container">
        <div class="swiper wiper-testemunhos">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-white p-4 shadow">
                    <div class="profile d-flex align-items-center p-4">
                        <h6 class="fw-bold">João Silva</h6>
                    </div>
                    <p>Estou muito satisfeito com o trabalho realizado pela empresa. Eles foram muito profissionais e entregaram a obra dentro do prazo combinado. A qualidade do acabamento superou minhas expectativas. Recomendo a todos!</p>
                    <div class="rating">
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill "></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4 shadow">
                    <div class="profile d-flex align-items-center p-4">
                        <h6 class="fw-bold">Maria Oliveira</h6>
                    </div>
                    <p>A equipe foi muito atenciosa e sempre disponível para tirar minhas dúvidas. O projeto ficou lindo e do jeito que eu imaginava. Só tive um pequeno atraso na entrega, mas foi resolvido rapidamente. No geral, estou muito feliz com o resultado.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star "></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4 shadow">
                    <div class="profile d-flex align-items-center p-4">
                        <h6 class="fw-bold">Carlos Pereira</h6>
                    </div>
                    <p>Fiquei impressionado com o nível de detalhamento e o cuidado que a empresa teve com cada etapa da construção. O resultado final ficou excelente, e a comunicação durante todo o processo foi clara e eficiente. Excelente trabalho!</p>
                    <div class="rating">
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-half "></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4 shadow">
                    <div class="profile d-flex align-items-center p-4">
                        <h6 class="fw-bold">Ana Souza</h6>
                    </div>
                    <p>A empresa fez um trabalho impecável! Desde o planejamento até a execução, tudo correu de forma organizada e dentro do esperado. O resultado final é maravilhoso. Eu não poderia estar mais feliz!</p>
                    <div class="rating">
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill "></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4 shadow">
                    <div class="profile d-flex align-items-center p-4">
                        <h6 class="fw-bold">Pedro Costa</h6>
                    </div>
                    <p>Gostei bastante da obra que foi feita, mas acho que alguns detalhes poderiam ter sido melhor explicados antes de iniciar. No entanto, o resultado final ficou muito bom, e a equipe foi sempre educada e prestativa. No geral, recomendo a empresa</p>
                    <div class="rating">
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill "></i>
                    </div>
                </div>
            </div>
        </div>    
    </div>

    <!-- Contate-nos -->
    <?php
        $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
        $values = [1];
        $contact_r = mysqli_fetch_assoc(select($contact_q, $values,'i'));
    ?>

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Contate-nos</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3">
            <iframe class="w-100 rouded" height="340px" src="<?php echo $contact_r['iframe'] ?>" loading="lazy"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rouded mb-4 shadow">
                    <h5>Contato</h5>
                    <p>
                        <?php echo $contact_r['address'] ?>
                    </p>
                    <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-line-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-whatsapp"></i> +<?php echo $contact_r['pn1'] ?>
                    </a><br><br>
                    <a href="tel: +<?php echo $contact_r['pn2'] ?>" class="d-line-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn2'] ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php require ('inc/footer.php'); ?>  
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script>
        var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay:3500,
            disableOnInteraction: false,
        }
        });

        var swiper = new Swiper(".wiper-testemunhos", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
                }
            });
    </script>
</body>
</html>