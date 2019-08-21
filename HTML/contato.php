<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Meu Portifólio</title>
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/contato.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
    <nav class="menu-responsivo">
        <ul>
            <li><a href="index.html">Início</a></li>
            <li><a href="sobre.html">Sobre</a></li>
            <li><a href="portifolio.html">Portfólio</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="#" class="fecha-menu">Fechar Menu</a></li>
        </ul>
    </nav>

    <div class="layout">
        <header>
            <div class="container">
                <div class="logo">
                    <img src="images/Logo.png" alt="Logo TAG topo">
                </div>

                <div class="links">
                    <nav>
                        <ul>
                            <li><a href="index.html">Início</a></li>
                            <li><a href="sobre.html">Sobre</a></li>
                            <li><a href="portifolio.html">Portfólio</a></li>
                            <li><a href="contato.php">Contato</a></li>
                        </ul>
                    </nav>

                    <a class="toggle" href="javascript:;">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>

                    <ul class="social">
                        <li>
<<<<<<< HEAD
							<a href="https://github.com/FuzariFrancisco" target="_blank"><img src="images/Github.png" alt="" style="width: 30px; height: 30px;"></a>
						</li>
						<li>
							<a href="https://www.linkedin.com/in/francisco-henrique-010912189/" target="_blank"><img src="images//Linkedin.png" alt="" style="width: 30px; height: 30px;"></a>
=======
							<a href="https://github.com/FuzariFrancisco" target="_blank"><img src="images/Github.png" alt="" style="width: 30px; height: 30px;"></img></a>
						</li>
						<li>
							<a href="https://www.linkedin.com/in/francisco-henrique-010912189/" target="_blank"><img src="images//Linkedin.png" alt="" style="width: 30px; height: 30px;"></img></a>
>>>>>>> 515fefa6a6716d72d6388c12147727462ce8d725
						</li>
                    </ul>
                </div>

                <h1><strong>Contato</strong></h1>
                <p>Learn // Code // Play</p>
            </div>
        </header>

        <main>
            <section class="contato">
                <div class="container">
                    <form method="POST" action="#">
                        <div class="cols">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" placeholder="Nome" name="nome" required>
                                </div>
                            </div>


                            <div class="col">
                                <div class="form-group">
                                    <input type="email" placeholder="Email" name="email">
                                </div>
                            </div>


                            <div class="col">
                                <div class="form-group">
                                <input type="text" placeholder="Telefone" name="telefone" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                </div>
                            </div>


                            <div class="col">
                                <div class="form-group">
                                    <select name="assunto">
                                        <option>Selecione uma opção</option>
                                        <option>Orçamento</option>
                                        <option>Sugestão</option>
                                        <option>Outras Informações</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <textarea name="mensagem" placeholder="deixe aqui sua mensagem."></textarea>
                        </div>

                        <div class="form-group">
                            <button class="botao medio">Enviar Contato</button>
                        </div>


                        
                        

                        <?php    
                            //header('Content-Type:text/html;charset=utf-8');
                            define('SERVIDOR', 'francisco_francisco123@outlook.com');
                            define('DESTINO', 'FranciscoFuzariDev@outlook.com');


                            if (isset($_POST['nome'])){
                            
                                $nome    = (isset($_POST['nome']))? $_POST['nome']: '';
                                $email   = (isset($_POST['email']))? $_POST['email']: '';
                                $assunto = (isset($_POST['assunto']))? $_POST['assunto']: '';
                                $msg     = (isset($_POST['mensagem']))? $_POST['mensagem']: '';
                                $telefone     = (isset($_POST['telefone']))? $_POST['telefone']: '';
                                
                                    $mensagem = "Contato enviado pelo site "."\n";
                                    $mensagem .= "**********************************************************\n";
                                    $mensagem .= "Nome do Contato: ".$nome."\n";
                                    $mensagem .= "E-mail do Contato: ".$email."\n";
                                    $mensagem .= "Telefone do Contato: ".$telefone."\n";
                                    $mensagem .= "**********************************************************\n";
                                    $mensagem .= "Mensagem: \n".$msg."\n";
                            
                                $retorno = EnviaEmail(DESTINO, $email, $assunto, $mensagem);
                                if ($retorno){
                                    echo "<p class='text-success'>Seu Contato Foi Enviado Com Sucesso.</p>";
                                    }else{
                                        echo "<p class='text-danger'>Sua Mensagem Não foi enviada, Tente novamente.</p>";
                                    }
                                }

                            
                            function EnviaEmail($para, $from, $assunto, $mensagem){
                            
                                $headers = "From: ".SERVIDOR."\n";
                                $headers .= "Reply-To: $para\n";
                                $headers .= "Subject: $assunto\n";
                                $headers .= "Return-Path: ".SERVIDOR."\n";
                                $headers .= "MIME-Version: 1.0\n";
                                $headers .= "X-Priority: 3\n";
                                $headers .= "Content-Type: text/html; charset=UTF-8\n";
                            
                                $retorno = mail($para, $assunto, nl2br($mensagem), $headers);
                                return $retorno;  
                            }
                        ?>
                    </form>
                </div>
            </section>
        </main>


        <footer>
            <div class="logo-rodape">
                <a href="index.html">
                    <img src="images/Logo.png" alt="logo-rodape">
                    <p>2019 Todos os Direitos Reservados</p>
                </a>
            </div>
        </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$(function(){	
			$('.toggle').click(function(){
				$('.layout').toggleClass('ativo');
				$(this).toggleClass('ativo');
			});

			$('.fecha-menu').click(function(){
				$('.layout').toggleClass('ativo');
				$(this).toggleClass('ativo');
			});
		});
	</script>
</body>

</html>