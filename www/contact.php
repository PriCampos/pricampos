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
            $head_ogimage = '"http://127.0.0.1:81/pricampos.blog.br/www/galeria/midiasocial/artigo-pricampos-facebook.jpg"';

            //Google Tags
            $head_gdescription = "Entre em Contato";

            //Twitter Cards
            $head_ttitle = '"Contact"';
            $head_tdescription = '"Entre em Contato"';
            $head_timage = '"http://127.0.0.1:81/pricampos.blog.br/www/galeria/midiasocial/artigo-pricampos-twitter.jpg"';

            include ("modulos/head-seo.inc.php"); 
        ?>
    </head>
    
    <body>
        <header>
            <?php include("modulos/menu.inc.php"); ?>
        </header>
        
        <footer>
            <?php include ("modulos/footer.inc.php"); ?>
        </footer>
    </body>
</html>