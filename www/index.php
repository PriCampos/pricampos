<!DOCTYPE html>
<html lang="pt-BR" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec" prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php
            //Page Information
            $header_title = "pricampos.blog.br - compartilhando estudos e experiências";
            $header_description ="blog sobre desenvolvimento e qualidade de software";
            $header_keywords = "pricampos.blog.br, priscila campos, priscila de oliveira campos, pri campos, blog";
            $header_canonical = '"http://www.pricampos.blog.br/"';

            //Facebook meta tag
            $header_ogurl = "http://www.pricampos.blog.br/";
            $header_ogtitle = "pricampos.blog.br - compartilhando estudos e experiências";
            $header_ogdescription = "Blog sobre desenvovimento e qualidade de software";
            $header_ogimage = '"http://127.0.0.1:81/pricampos/www/galeria/midiasocial/artigo-pricampos-facebook.jpg"';

            //Google Tags
            $header_gdescription = "blog sobre desenvolvimento e qualidade de software";

            //Twitter Cards
            $header_ttitle = '"pricampos.blog.br - compartilhando estudos e experiências"';
            $header_tdescription = '"blog sobre desenvolvimento e qualidade de software"';
            $header_timage = '"http://127.0.0.1:81/pricampos/www/galeria/midiasocial/artigo-pricampos-twitter.jpg"';

            include ("modulos/header.inc.php"); 
        ?>
    </head>

    <body>
        <header class="header">
            <?php include ("modulos/menu.inc.php"); ?>
            <div class="banner">
                <ul class="social-networks">
                    <li class="icon-network">   
                        <label for="facebook">
                            <a class="link-network" href="https://www.facebook.com/priscila.campos.752" target="_blank"><i class="fa fa-facebook-square fa-3x" aria-hidden="true" id="facebook"></i></a>
                        </label>
                    </li>
                    <li class="icon-network"> 
                        <label for="linkedin">
                            <a id="link-network" href="https://www.linkedin.com/in/priscila-campos-7b4653134/" target="_blank"><i class="fa fa-linkedin-square fa-3x" aria-hidden="true" id="linkedin"></i></a>
                        </label>
                    </li>
                    <li class="icon-network"> 
                        <label class="github">
                        <a class="link-network" href="https://github.com/PriCampos" target="_blank"><i class="fa fa-github-square fa-3x" aria-hidden="true" id="github"></i></a>
                        </label>
                    </li>
                </ul>
            </div>
        </header>
    </body>
</html>
