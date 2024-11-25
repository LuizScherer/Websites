<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatilbe" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pampa Construções - Sobre Nós</title>

    <!-- Referencias -->
    <?php require ('inc/links.php'); ?> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- CSS -->
    <style>
        .conte{
            border-top-color: black !important;
        }
    </style>

</head>
<body style="background-color: #FFDAB9;">

    <?php require ('inc/header.php'); 
    
  
        $contact_q = "SELECT * FROM `settings` WHERE `sr_no`=?";
        $values = [1];
        $contact_r = mysqli_fetch_assoc(select($contact_q, $values,'i'));
   
    
    ?>    

    
        <div class="my-5 px-4">
            <h2 class="fw-bold h-font text-center"><?php echo $contact_r['site_title'] ?></h2>
            <div class="h-line bg-dark"></div>
                <p class="mt-3 text-center">
                Construindo o Futuro com Tradição <br>
                Unimos experiência e inovação para transformar seus projetos em realidade com qualidade e eficiência. Confie em nós para construir o futuro que você deseja.
                </p>
            </div>
            <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-md-5 mb-4 text-center">
                    <h3 class="mb-3 fw-bold">Nossa história</h3>
                    <p>
                        <?php echo $contact_r['site_about'] ?>
                    </p>
                </div>
                <div class="col-lg-5 col-d-5 mb-4">
                    <img src="images/about/ceo.jpg" class="border border-dark arounded w-100">
                </div>
            </div>
            <div class="container mt-5" >
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4 px-4">
                        <div class="bg-white rounded shadow p-4 border-top border-4 text-center conte">
                            <img src="images/about/obras.svg" width="70px">
                            <h4>+20 obras realizadas</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 px-4">
                        <div class="bg-white rounded shadow p-4 border-top border-4 text-center conte">
                            <img src="images/about/clientes.svg" width="70px">
                            <h4>+300 clientes adquiridos</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 px-4">
                        <div class="bg-white rounded shadow p-4 border-top border-4 text-center conte">
                            <img src="images/about/projetos.svg" width="70px">
                            <h4>+110 projetos produzidos</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 px-4">
                        <div class="bg-white rounded shadow p-4 border-top border-4 text-center conte">
                            <img src="images/about/dinheiro.svg" width="70px">
                            <h4>+R$2000000 vendidos</h4>
                        </div>
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
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        });
    </script>
</body>
</html>