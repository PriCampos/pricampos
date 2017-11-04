<!DOCTYPE html>
<html lang="pt-BR" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec" prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php
            //Page Information
            $head_title = "Por um mundo mais colaborativo!";
            $head_description ="blog sobre desenvolvimento e qualidade de software";
            $head_keywords = "pricampos.blog.br, priscila campos, priscila de oliveira campos, pri campos, blog";
            $head_canonical = '"http://www.pricampos.blog.br/"';

            //Facebook meta tag
            $head_ogurl = "http://www.pricampos.blog.br/";
            $head_ogtitle = "Por um mundo mais colaborativo!";
            $head_ogdescription = "Blog sobre desenvovimento e qualidade de software";
            $head_ogimage = '"/pricampos.blog.br/www/galeria/midiasocial/artigo-pricampos-facebook.jpg"';

            //Google Tags
            $head_gdescription = "blog sobre desenvolvimento e qualidade de software";

            //Twitter Cards
            $head_ttitle = '"Por um mundo mais colaborativo!"';
            $head_tdescription = '"blog sobre desenvolvimento e qualidade de software"';
            $head_timage = '"/pricampos.blog.br/www/galeria/midiasocial/artigo-pricampos-twitter.jpg"';

            include ("modulos/head-seo.inc.php"); 
        
            //CSS & JS
            print @$head_main_preload;
            print @$head_main;
        ?>
    </head>

    <body>
        <header class="header">
            <?php include ("modulos/menu.inc.php"); ?>
            <section class="banner">
                <div class="banner-msg">
                    <h1>Para Que(m) Serve o Teu Conhecimento?</h1>
                </div>
            </section>
        </header>


        <footer>
            <?php include ("modulos/footer.inc.php"); ?>
        </footer>
    </body>
</html>
