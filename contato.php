<?php
    if (isset($_POST['enviar'])) {
        $para = 'contato@somosfollow.com.br';

        $nome = $_POST['nome'];
        $de = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        $headers = 'From:' . $de . "\r\n" .
                    'Reply-To:' . $para . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

        mail($para, $de, $mensagem, $headers);
        echo "<script>";
            echo "alert('E-Mail enviado com sucesso!')";
        echo "</script>";
    }
?>
<html>
    <head>
        <title>Follow | Contato</title>
        <?php include("PHP/meta.php");?>
        <link rel="stylesheet" type="text/css" href="CSS/contato.css">
    </head>
    <body id='content'>
        <?php include('PHP/header.php'); ?>
        <section class='preview pvSmall pvGradientPurple'>
            <h1 class='txtCenter txtWhite txtShadow txtGarnet txtUpper'>contato</h1>
        </section>
        <main id='body'>
            <div class='divMain'>
                <div class='divClassica'>
                    <div>
                        <article>
                            <div>
                                <i class='icofont-phone txtPurpleGradient'></i>
                            </div>
                            <div>
                                <h1 class='txtBlack txt600'>Nos ligue!</h1>
                                <h2 class='txtBlack txt400'>(61) 98122-8475</h2>
                                <h2 class='txtBlack txt400'>(61) 98203-0380</h2>
                            </div>
                        </article>
                        <article>
                            <div style='padding-top:27px'>
                                <i class='icofont-send-mail txtPurpleGradient' style='font-size:55px;'></i>
                            </div>
                            <div>
                                <h1 class='txtBlack txt600'>E-Mail</h1>
                                <h2 class='txtBlack txt400'>contato@somosfollow.com.br</h2>
                            </div>
                        </article>
                    </div>
                    <div>
                        <h1 class='txtBlack'>Entre em Contato!</h1>
                        <h2 class='txtBlack txt400'>Forneça seu e-mail, número de telefone e o que tem a nos dizer.</h2>
                        <form method='post'>
                            <input type="text" name='nome' placeholder='Seu nome *' class='input ipGrey ipBorder ipRound' required>
                            <input type="email" name='email' placeholder='Seu e-mail *' class='input ipGrey ipBorder ipRound' required>
                            <textarea name="mensagem" class='input ipGrey ipBorder ipRound' cols="30" rows="10" placeholder='Sua mensagem *'></textarea>
                            <input type="submit" name='enviar' class='button btPurpleGradient btRound' value='ENVIAR'>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <?php include('PHP/footer.php'); ?>
    </body>
</html>