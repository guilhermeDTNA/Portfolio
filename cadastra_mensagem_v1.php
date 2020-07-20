<?php
if (isset($_POST['BTEnvia'])) {
	
	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	$nome = $_POST['nome_autor'];
	$email = $_POST['email_autor'];
	$telefone = $_POST['telefone_autor']; 
	$mensagem = $_POST['conteudo'];
	//$arquivo = $_FILES['arquivo'];
	//====================================================
	
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//==================================================== 
	$email_remetente = "$email"; // deve ser uma conta de email do seu dominio 
	//====================================================
	
	//Configurações do email, ajustar conforme necessidade
	//==================================================== 
	$email_destinatario = "gleite98@gmail.com"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email"; 
	$email_assunto = "Nova Mensagem no Portfólio"; // Este será o assunto da mensagem
	//====================================================
	
	
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $nome \n"; 
	$email_conteudo .= "Email = $email \n";
	$email_conteudo .= "Telefone = $telefone \n"; 
	$email_conteudo .= "Mensagem = $mensagem \n"; 
	//$email_conteudo .= "Anexo = $arquivo \n";
	
	//Envio para o remetente
	$conteudo_remetente = "Você enviou uma mensagem recentemente em www.guilhermerocha.tk, eis o conteúdo:\n\n";
	//====================================================
	
	
	//Seta os Headers (Alterar somente caso necessario) 
	//==================================================== 
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	
	//Enviando o email 
	//==================================================== 
	//if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
	if ((mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers))&&(mail ($email, $email_assunto, nl2br($conteudo_remetente.$email_conteudo), $email_headers))){
					echo  "<script>alert('Mensagem enviada com Sucesso!');</script>";
                    echo "<script>window.location='index.php';</script>";
					} 
			else{ 
			        echo  "<script>alert('Mensagem NÃO Enviada!');</script>";
			        echo "<script>window.location='contato.php';</script>";
			    } 
	//====================================================
} 
            
?>
