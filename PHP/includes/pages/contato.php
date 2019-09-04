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
                                    <input type="email" placeholder="Email" name="email" required>
                                </div>
                            </div>


                            <div class="col">
                                <div class="form-group">
                                <input type="text" placeholder="Telefone" name="telefone" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
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
                            <textarea name="mensagem" placeholder="deixe aqui sua mensagem."></textarea required>
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