<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatilbe" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pampa Construções - Serviços</title>

    <!-- Referencias -->
    <?php require ('inc/links.php'); ?> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- CSS -->
    <style>
        .pick:hover{
            border-top-color: var(--teal) !important;
            transform: scale(1.04);
            transition: all 0.3s;
        }
    </style>
</head>
<body style="background-color: #FFDAB9;">

    <?php require ('inc/header.php'); ?>    

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Nossos serviços</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Na Pampa Construções, oferecemos uma gama completa de serviços para transformar seus projetos em realidade.<br>
            Desde a construção de residências e comerciais até reformas e ampliações, nossa equipe dedicada garante qualidade e excelência<br>
            em cada etapa. Com soluções personalizadas e atenção aos detalhes, estamos comprometidos em entregar resultados que superam suas
            expectativas.<br> Construa o futuro com a gente!

        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pick">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/features/constr.svg" width="40px">
                        <h5 class="mt-3 m-0"> Construção</h5>
                    </div>
                    <p>
                        Oferecemos serviços completos de construção, desde o planejamento até a entrega final. Nossa equipe experiente garante qualidade e eficiência, trabalhando com os melhores materiais e técnicas para realizar seu projeto com precisão e no prazo
                    </p>  
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pick">
                    <div class="d-flex align-items-center mb-2">
                    <img src="images/features/gerenc.svg" width="40px">
                    <h5 class="mt-3">Gerenciamento</h5>
                    </div>
                    <p>
                        Assegura que cada projeto seja executado com precisão e eficiência. Coordenamos todas as etapas, desde o planejamento até a finalização, gerenciando recursos, cronogramas e qualidade. Com nossa expertise
                    </p>  
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pick">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/features/reparo.svg" width="40px">
                        <h5 class="mt-3 m-0"> Manutenção</h5>
                    </div>
                    <p>
                        Oferecemos serviços de manutenção para garantir a longevidade e o bom estado de suas construções. Realizamos inspeções regulares, reparos e ajustes com atenção aos detalhes, assegurando que tudo funcione perfeitamente e mantendo a qualidade e segurança ao longo do tempo.
                    </p>  
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pick">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/features/paisag.svg" width="40px">
                        <h5 class="mt-3">Paisagismo</h5>
                    </div>
                    <p>
                        Na Pampa Construções, transformamos espaços externos com nosso serviço de paisagismo. Criamos jardins e áreas ao ar livre que combinam beleza e funcionalidade, utilizando design inovador e plantas de qualidade. Deixe-nos transformar seu ambiente com um toque verde e elegante.
                    </p>  
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pick">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/features/projeto.svg" width="40px">
                        <h5 class="mt-3">Projetos</h5>
                    </div>
                    <p>
                        Desenvolvemos projetos personalizados que atendem às suas necessidades e sonhos. Desde o conceito inicial até o planejamento detalhado, nossa equipe cria soluções inovadoras e funcionais para garantir que cada projeto se torne realidade com precisão e qualidade.
                    </p>  
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pick">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/features/residuos.svg" width="40px">
                        <h5 class="mt-3">Gestão de Residuos</h5>
                    </div>
                    <p>
                        Gerenciamos resíduos sólidos com responsabilidade e eficiência. Implementamos práticas sustentáveis para a coleta, separação e descarte adequado dos materiais, contribuindo para um ambiente mais limpo e seguro. Nossa abordagem garante conformidade com normas ambientais e reduz o impacto no meio ambiente.
                    </p>  
                </div>
            </div>
        </div>
    </div>
        
    <?php require ('inc/footer.php'); ?>  
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>