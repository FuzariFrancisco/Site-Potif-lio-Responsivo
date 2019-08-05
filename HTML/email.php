<?php    
header('Content-type: text/html; charset=utf-8');
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
           $array  = array('erro' => 0, 'mensagem' => 'Mensagem enviada com sucesso!');
           echo json_encode($array);
        }else{
           $array  = array('erro' => 1, 'mensagem' => 'Infelizmente houve um erro ao enviar sua mensagem!');
           echo json_encode($array);
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

