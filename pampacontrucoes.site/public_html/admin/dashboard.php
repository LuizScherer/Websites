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
    <title>Painel Administrativo</title>
    <?php require('inc/links.php'); ?> 
</head>
<body style="background-color: LightGrey;">
    
    <?php require('inc/header.php'); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            Como administrador da Pampa Construções, é essencial adotar boas práticas ao lidar com e-mails e na edição do site para garantir a segurança e eficiência das operações online.
            <br><br><h5>Cuidados ao Verificar E-mails:</h5>
                1 - Evite abrir anexos suspeitos: Não abra arquivos anexados de remetentes desconhecidos, pois podem conter malwares ou vírus.<br>
                2 - Cuidado com links: Passe o cursor sobre links para verificar o destino antes de clicar. Links falsos podem redirecionar para páginas de phishing.<br>
                3 - Verifique o remetente: Verifique se o endereço de e-mail é legítimo, especialmente se for uma mensagem pedindo informações confidenciais.<br>
                4 - Use autenticação de dois fatores: Para proteger seu acesso ao e-mail, habilite a autenticação de dois fatores (2FA), que fornece uma camada extra de segurança.<br>
                5 - Cuidado com solicitações urgentes: Ataques de phishing costumam se disfarçar de mensagens urgentes para induzir erros.<br><br>
                <h5>Cuidados ao Editar o Site</h5>
                1 - Faça backup regular do site: Antes de qualquer alteração, faça backup dos arquivos e banco de dados para evitar perda de dados em caso de erro.<br>
                2 - Mantenha o software atualizado: Mantenha o CMS (como WordPress) e plugins atualizados para evitar vulnerabilidades de segurança.<br>
                3 - Use senhas fortes: As credenciais de login devem ser complexas e alteradas regularmente para evitar acessos não autorizados.<br>
                4 - Revise permissões de usuários: Garanta que somente pessoas autorizadas possam editar o site, com níveis de acesso controlados.<br>
                5 - Teste as alterações: Ao fazer modificações, teste-as em um ambiente de desenvolvimento antes de aplicar ao site principal para evitar problemas ao vivo.<br>
                6 - Use certificados de segurança (SSL): Assegure-se de que o site utilize HTTPS, o que protege a comunicação entre o usuário e o site.<br>
                Seguindo essas práticas, o administrador pode manter a Pampa Construções segura contra ameaças digitais e operar com confiança tanto no gerenciamento de e-mails quanto na manutenção do site.
            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>
</body>
</html>