<?php
if (isset($_POST['BTEnvia'])) {

    $nome = $_POST['nome_autor'];
    $email = $_POST['email_autor'];
    $telefone = $_POST['telefone_autor']; 
    $mensagem_autor = $_POST['conteudo'];
    $arquivo = $_FILES["arquivo"];



    $to = "gleite98@gmail.com";
$remetente = $email; // Deve ser um email válido do domínio
$assunto = "Nova Mensagem no Portfólio";
$assunto_remetente = "Você enviou uma mensagem no portfólio de Guilherme Rocha Leite";

/* Cabeçalho da mensagem  */
$boundary = "XYZ-" . date("dmYis") . "-ZYX";
$headers = "MIME-Version: 1.0\n";
$headers.= "From: $remetente\n";
$headers.= "Reply-To: $remetente\n";
$headers.= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";  
$headers.= "$boundary\n"; 

/* Layout da mensagem  */
$corpo_mensagem = " 
<br>Formulário via site
<br>--------------------------------------------<br>
<br><strong>Nome:</strong> $nome
<br><strong>Email:</strong> $remetente
<br><strong>Telefone:</strong> $telefone
<br><br><strong>Mensagem:</strong> $mensagem_autor
<br><br>--------------------------------------------
";

$corpo_mensagem_remetente = " 
<br>Olá!<br>
<br>Você enviou uma mensagem recentemente em www.guilhermerocha.tk, eis o conteúdo:
<br><br><strong>Nome:</strong> $nome
<br><strong>Email:</strong> $remetente
<br><strong>Telefone:</strong> $telefone
<br><br><strong>Mensagem:</strong> $mensagem_autor
<br><br>--------------------------------------------
";

/* Função que codifica o anexo para poder ser enviado na mensagem  */
if(file_exists($arquivo["tmp_name"]) and !empty($arquivo)){

 $fp = fopen($_FILES["arquivo"]["tmp_name"],"rb"); // Abri o arquivo enviado.
 $anexo = fread($fp,filesize($_FILES["arquivo"]["tmp_name"])); // Le o arquivo aberto na linha anterior
 $anexo = base64_encode($anexo); // Codifica os dados com MIME para o e-mail 
 fclose($fp); // Fecha o arquivo aberto anteriormente
    $anexo = chunk_split($anexo); // Divide a variável do arquivo em pequenos pedaços para poder enviar
    
    //Para o destinatário
    $mensagem = "--$boundary\n"; // Nas linhas abaixo possuem os parâmetros de formatação e codificação, juntamente com a inclusão do arquivo anexado no corpo da mensagem
    $mensagem.= "Content-Transfer-Encoding: 8bits\n"; 
    $mensagem.= "Content-Type: text/html; charset=\"utf-8\"\n\n";
    $mensagem.= "$corpo_mensagem\n"; 
    $mensagem.= "--$boundary\n"; 
    $mensagem.= "Content-Type: ".$arquivo["type"]."\n";  
    $mensagem.= "Content-Disposition: attachment; filename=\"".$arquivo["name"]."\"\n";  
    $mensagem.= "Content-Transfer-Encoding: base64\n\n";  
    $mensagem.= "$anexo\n";  
    $mensagem.= "--$boundary--\r\n"; 


    //Para o remetente
    $mensagemRemetente = "--$boundary\n"; // Nas linhas abaixo possuem os parâmetros de formatação e codificação, juntamente com a inclusão do arquivo anexado no corpo da mensagem
    $mensagemRemetente.= "Content-Transfer-Encoding: 8bits\n"; 
    $mensagemRemetente.= "Content-Type: text/html; charset=\"utf-8\"\n\n";
    $mensagemRemetente.= "$corpo_mensagem_remetente\n"; 
    $mensagemRemetente.= "--$boundary\n"; 
    $mensagemRemetente.= "Content-Type: ".$arquivo["type"]."\n";  
    $mensagemRemetente.= "Content-Disposition: attachment; filename=\"".$arquivo["name"]."\"\n";  
    $mensagemRemetente.= "Content-Transfer-Encoding: base64\n\n";  
    $mensagemRemetente.= "$anexo\n";  
    $mensagemRemetente.= "--$boundary--\r\n"; 
}
 else // Caso não tenha anexo
 {
     $mensagem = "--$boundary\n"; 
     $mensagem.= "Content-Transfer-Encoding: 8bits\n"; 
     $mensagem.= "Content-Type: text/html; charset=\"utf-8\"\n\n";
     $mensagem.= "$corpo_mensagem\n";

     $mensagemRemetente = "--$boundary\n"; 
     $mensagemRemetente.= "Content-Transfer-Encoding: 8bits\n"; 
     $mensagemRemetente.= "Content-Type: text/html; charset=\"utf-8\"\n\n";
     $mensagemRemetente.= "$corpo_mensagem_remetente\n";
 }

 /* Função que envia a mensagem  */
 if(mail($to, $assunto, $mensagem, $headers) && mail($remetente, $assunto_remetente, $mensagemRemetente, $headers))
 {
     echo  "<script>alert('Mensagem enviada com Sucesso!');</script>";
     echo "<script>window.location='index.php';</script>";
 } 
 else
 {
     echo  "<script>alert('Mensagem NÃO Enviada!');</script>";
     echo "<script>window.location='contato.php';</script>";
 }
}

?>