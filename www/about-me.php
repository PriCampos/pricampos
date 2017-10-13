<!DOCTYPE html>
<html lang="pt-BR" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec" prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php
            //Page Information
            $header_title = "About Me";
            $header_description ="Um pouco sobre mim";
            $header_keywords = "pricampos.blog.br, priscila campos, priscila de oliveira campos, pri campos, blog, about me, sobre mim";
            $header_canonical = '"http://www.pricampos.blog.br/about-me"';

            //Facebook meta tag
            $header_ogurl = "http://www.pricampos.blog.br/about-me";
            $header_ogtitle = "About Me";
            $header_ogdescription = "Um pouco sobre Priscila Campos";
            $header_ogimage = '"http://127.0.0.1:81/pricampos/www/galeria/midiasocial/about-me-facebook.jpg"';

            //Google Tags
            $header_gdescription = "Um pouco sobre Priscila Campos";

            //Twitter Cards
            $header_ttitle = '"About Me"';
            $header_tdescription = '"Um pouco sobre Priscila Campos"';
            $header_timage = '"http://127.0.0.1:81/pricampos/www/galeria/midiasocial/about-me-twitter.jpg"';

            include ("modulos/header.inc.php"); 
        ?>
    </head>
    
    <body>
        <?php
            include("modulos/menu.inc.php");
        ?>
    </body>
</html>