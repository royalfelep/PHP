<?php

/* Valores recebidos do formulário  */

$arquivo = $_FILES['arquivo'];
$data = date("d/m/Y - H:i");
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$cel = $_POST['cel'];
$cep = $_POST['cep'];
$uf = $_POST['uf'];
$endereco = $_POST['endereco'];

/* Destinatário e remetente - EDITAR SOMENTE ESTE BLOCO DO CÓDIGO */
$remetente = "email@dominio.com";
$assunto = "Formulário :: $nome";

$corpo_mensagem = "<h1>DADOS PESSOAIS</h1>CPF: $cpf<BR />RG: $rg<BR />CELULAR: $cel<BR />CEP: $cep<BR />UF: $uf<BR />ENDERE&Ccedil;O: $endereco<BR />N&#176;

/* Cabeçalho da mensagem  */
$boundary = "XYZ-" . date("dmYis") . "-ZYX";
$headers = "MIME-Version: 1.0\n";
$headers .= "From: $remetente\n";
$headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";
$headers .= "$boundary\n";

/* Função que codifica o anexo cofecon poder ser enviado na mensagem  */
if (file_exists($arquivo["tmp_name"]) and !empty($arquivo)) {

    $fp = fopen($_FILES["arquivo"]["tmp_name"], "rb"); // Abri o arquivo enviado.
    $anexo = fread($fp, filesize($_FILES["arquivo"]["tmp_name"])); // Le o arquivo aberto na linha anterior
    $anexo = base64_encode($anexo); // Codifica os dados com MIME cofecon o e-mail 
    fclose($fp); // Fecha o arquivo aberto anteriormente
    $anexo = chunk_split($anexo); // Divide a variável do arquivo em pequenos pedaços cofecon poder enviar
    $mensagem = "--$boundary\n"; // Nas linhas abaixo possuem os parâmetros de formatação e codificação, juntamente com a inclusão do arquivo anexado no corpo da mensagem
    $mensagem .= "Content-Transfer-Encoding: 8bits\n";
    $mensagem .= "Content-Type: text/html; charset=\"utf-8\"\n\n";
    $mensagem.= "$corpo_mensagem\n";
    $mensagem .= "--$boundary\n";
    $mensagem .= "Content-Type: " . $arquivo["type"] . "\n";
    $mensagem .= "Content-Disposition: attachment; filename=\"" . $arquivo["name"] . "\"\n";
    $mensagem .= "Content-Transfer-Encoding: base64\n\n";
    $mensagem .= "$anexo\n";
    $mensagem .= "--$boundary--\r\n";
}

/* Função que envia a mensagem para PBE@cofecon.org.br  */
mail($remetente, $assunto, $mensagem, $headers);

/* Função que envia a mensagem para quem respondeu o formulário  */
$res_assunto = "Formulário";
$res_mensagem = "
	$nome,

	Obrigado por seu cadastro.

	==============================================
			Atenciosamente,
			Remetente.
	==============================================";
    
    mail($email, $res_assunto, $res_mensagem, $headers);
    echo '<br><center>Mensagen Enviada!';
    echo '<br><center><b><a href="#">Voltar</a></b>';

?>