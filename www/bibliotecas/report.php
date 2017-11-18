<!DOCTYPE html>
<html lang="pt-BR" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec" prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php
            //Page Information
            $head_title = "Enviar Formulário | pricampos.blog.br";
            $head_description ="Envio de formulário para a Administradora do blog";
            $head_keywords = "formulário de contato, contato, contate-me, contacte-me, formulario, contato, duvida, duvidas, dúvida, dúvidas, conexão, conexão, conechão, conechao";
            $head_canonical = '"http://www.pricampos.blog.br/report"';

            //Facebook meta tag
            $head_ogurl = "http://www.pricampos.blog.br/report";
            $head_ogtitle = "Enviar Formulário | pricampos.blog.br";
            $head_ogdescription = "Envio de formulário para a Administradora do blog";
            $head_ogimage = '"/pricampos.blog.br/www/galeria/midiasocial/about-me-facebook.jpg"';

            //Google Tags
            $head_gdescription = "Um pouco sobre Priscila Campos";

            //Twitter Cards
            $head_ttitle = '"Enviar Formulário | pricampos.blog.br"';
            $head_tdescription = '"Envio de formulário para a Administradora do blog"';
            $head_timage = '"/pricampos.blog.br/www/galeria/midiasocial/about-me-twitter.jpg"';

            include ("../modulos/head-seo.inc.php"); 
        ?>
    </head>
    <body>
        <?php
            //Include the doc class.phpmailer.php
            require_once ("phpmailer\class.phpmailer.php");
        
            //Include the doc data_mysql_smtp.php
            require_once ("data_mysql_smtp.php");
            
            //Start the PHPMailer class
            $mail = new PHPMailer();
        
            //Connection type and SMTP data
            $mail -> IsSMTP();
            $mail -> Host = $hostsmtp;
            $mail -> Port = $portsmtp;
            $mail -> SMTPAuth = true; //defines whether to use authentication
            $mail -> SMTPSecure = false; //defines whether use SSL/TLS
            $mail -> SMTPAutoTLS = false; //defines whether use TLS
            $mail -> Username = $emailcontact;
            $mail -> Password = $emailpassword;
    
            //Form data
            $nickname = $_POST['nickname'];
            $email_from = $_POST['email'];
            $email_subject = $_POST['subject'];
            $email_message = $_POST['message'];
        
            //Sender data
            $mail -> Sender = $emailcontact;
            $mail -> From  = $email_from;
            $mail -> FromName = $nickname;
        
            //Addressee data 
            $mail -> AddAddress('84priscila.campos@gmail.com','Priscila');
        
            //Define HTML/encoding
            $mail -> IsHTML (true); //e-mail sent as HTML
            $mail -> CharSet = 'utf-8';
        
            //Message Data
            $mail -> Subject = "Notificação pricampos.blog.br - ".$email_subject;
            $mail -> Body .= " Nome do Contato: ".$nickname."<br>";
            $mail -> Body .= " E-mail: ".$email_from."<br>";
            $mail -> Body .= " Assunto: ".$email_subject."<br>";
            $mail -> Body .= " Mensagem: ".nl2br($email_message)."<br>";
        
            //Sent e-mail
            $sent = $mail->send();
        
            //Clean addressee
            $mail -> ClearAllRecipients();
        
            if ($sent) {
                echo "Seu e-mail foi enviado com sucesso."."<br>";
                echo "Muito obrigada pelo contato, ".$nickname."!";
            } else {
                echo "Não foi possível enviar o e-mail." ."<br>";
                echo "Entre em contato por uma das redes sociais ou, pelo e-mail contactme@pricampos.blog.br"."<br>";
                echo "<b> Detalhes do Erro: </b>".$mail ->ErrorInfo;
            }
            
            
        ?>
    </body>
</html>