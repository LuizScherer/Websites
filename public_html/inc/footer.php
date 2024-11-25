<?php 
        $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
        $values = [1];
        $contact_r = mysqli_fetch_assoc(select($contact_q, $values,'i'));
?>
   <!-- Rodapé -->
    <div class="container-fluid bg-white mt-5">
        <div class="row">
            <div class="col-lg-4 p-4">
                <h3 class="h-font f2-bol fs-3 mb-2 fw-bold">Pampa Construções</h3>
                <p>
                    A Pampa Construções combina tradição e qualidade, garantindo excelência em cada projeto. Confiança e inovação definem seu trabalho.
                </p>
            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3 fw-bold">Links</h5>
                <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">HOME</a><br>
                <a href="rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">SERVIÇOS</a><br>
                <a href="aboutus.php" class="d-inline-block mb-2 text-dark text-decoration-none">SOBRE NÓS</a><br>
                <a href="https://www.ulbra.br/canoas/imprensa" class="d-inline-block mb-2 text-dark text-decoration-none">ULBRA</a>
            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3 fw-bold">Nossas Redes</h5>
                <a href="https://www.instagram.com/ulbrabr/" class="d-inline-block mb-3 text-decoration-none text-reset">
                    <i class="bi bi-instagram"></i> Instagram
                </a><br>
                <a href="https://www.facebook.com/ulbrabr/?locale=pt_BR" class="d-inline-block mb-3 text-decoration-none text-reset">
                    <i class="bi bi-facebook"></i> Facebook
                </a><br>
                <a href="https://www.linkedin.com/school/ulbra/posts/?feedView=all" class="d-inline-block mb-3 text-decoration-none text-reset">
                    <i class="bi bi-linkedin"></i> Linkedin
                </a><br>
                <span>
                    <i class="bi bi-whatsapp"></i> +<?php echo $contact_r['pn1'] ?>
                </span>
            </div>
        </div>
    </div>
    
<h6 class="text-center bg-danger text-white p-3">Desenvolvido pelo Luiz</h6>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    function navDark(){
        let navbar = document.getElementById('nav-bar');
        let a_tags = navbar.getElementsByTagName('a');

        for(i=0; i<a_tags.length; i++){
            let file = a_tags[i].href.split('/').pop();
            let file_name = file.split('.')[0];

            if(document.location.pathname.indexOf(file_name)>=0){
                a_tags[i].classList.add('active');

            }
        }
    }
    navDark();
</script>
