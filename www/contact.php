<!DOCTYPE html>
<html lang="pt-BR" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec" prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php
            //Page Information
            $head_title = "Contact";
            $head_description ="Entre em contato";
            $head_keywords = "contato, network, redes sociais, network tecnologia";
            $head_canonical = '"http://www.pricampos.blog.br/contact"';

            //Facebook meta tag
            $head_ogurl = "http://www.pricampos.blog.br/contact";
            $head_ogtitle = "Contact";
            $head_ogdescription = "Entre em contato";
            $head_ogimage = '"/pricampos.blog.br/www/galeria/midiasocial/artigo-pricampos-facebook.jpg"';

            //Google Tags
            $head_gdescription = "Entre em Contato";

            //Twitter Cards
            $head_ttitle = '"Contact"';
            $head_tdescription = '"Entre em Contato"';
            $head_timage = '"/pricampos.blog.br/www/galeria/midiasocial/artigo-pricampos-twitter.jpg"';

            include ("modulos/head-seo.inc.php"); 
        ?>
    </head>
    
    <body class="body-contact">
        <header>
            <?php include("modulos/menu.inc.php"); ?>
        </header>
        
        <section class="section-contact">
            <img class="img-title-contact" src="/pricampos.blog.br/www/galeria/banner/contact.png" />
            
            <h1 class="initial-message">Quer retirar alguma dúvida, fazer sugestões, relatar algum erro no site ou simplesmente conversar sobre a vida? Não hesite em me contactar.</h1>
            
            <form class="form-contact" method="post" action="/pricampos.blog.br/www/bibliotecas/report.php">
                <label for="nickname">
                    <input id="nickname" name="nickname" type="text"  placeholder="Nome:" maxlength="30" required autofocus />
                </label><br/>
                <label for="email">
                    <input id="email" name="email" type="email" placeholder="E-mail:" required  maxlength="200"/> 
                </label><br/>
                <label for="subject">
                    <input id="subject" name="subject" type="text" placeholder="Assunto:" required maxlength="50">
                </label><br/>
                <label for="message">
                    <textarea id="message" name="message" placeholder="Mensagem:" maxlength="1000" rows="12" cols="80" required></textarea>
                </label><br/>
                <label for="submit" class="btn-enviar"> 
                    <input id="submit" name="submit" type="submit" value="Enviar" acesskey="1" />
                </label>
            </form>
        </section>
        <footer>
            <?php include ("modulos/footer.inc.php"); ?>
        </footer>
    </body>
</html>