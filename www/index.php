<!DOCTYPE html>
<html lang="pt-BR" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec" prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php
            //Page Information
            $head_title = "pricampos.blog.br - compartilhando estudos e experiências";
            $head_description ="blog sobre desenvolvimento e qualidade de software";
            $head_keywords = "pricampos.blog.br, priscila campos, priscila de oliveira campos, pri campos, blog";
            $head_canonical = '"http://www.pricampos.blog.br/"';

            //Facebook meta tag
            $head_ogurl = "http://www.pricampos.blog.br/";
            $head_ogtitle = "pricampos.blog.br - compartilhando estudos e experiências";
            $head_ogdescription = "Blog sobre desenvovimento e qualidade de software";
            $head_ogimage = '"http://127.0.0.1:81/pricampos.blog.br/www/galeria/midiasocial/artigo-pricampos-facebook.jpg"';

            //Google Tags
            $head_gdescription = "blog sobre desenvolvimento e qualidade de software";

            //Twitter Cards
            $head_ttitle = '"pricampos.blog.br - compartilhando estudos e experiências"';
            $head_tdescription = '"blog sobre desenvolvimento e qualidade de software"';
            $head_timage = '"http://127.0.0.1:81/pricampos.blog.br/www/galeria/midiasocial/artigo-pricampos-twitter.jpg"';

            include ("modulos/head-seo.inc.php"); 
        ?>
    </head>

    <body>
        <header class="header">
            <?php include ("modulos/menu.inc.php"); ?>
            <section class="banner">
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
            </section>
        </header>


        <footer>
            <?php include ("modulos/footer.inc.php"); ?>
        </footer>
    </body>
</html>
