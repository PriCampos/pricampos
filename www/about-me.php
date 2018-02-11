<!DOCTYPE html>
<html lang="pt-BR" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec" prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php
            //Page Information
            $head_title = "About Me";
            $head_description ="Um pouco sobre mim";
            $head_keywords = "pricampos.blog.br, priscila campos, priscila de oliveira campos, pri campos, blog, about me, sobre mim";
            $head_canonical = '"http://www.pricampos.blog.br/about-me"';

            //Facebook meta tag
            $head_ogurl = "http://www.pricampos.blog.br/about-me";
            $head_ogtitle = "About Me";
            $head_ogdescription = "Um pouco sobre Priscila Campos";
            $head_ogimage = '"/pricampos.blog.br/www/galeria/midiasocial/about-me-facebook.jpg"';

            //Google Tags
            $head_gdescription = "Um pouco sobre Priscila Campos";

            //Twitter Cards
            $head_ttitle = '"About Me"';
            $head_tdescription = '"Um pouco sobre Priscila Campos"';
            $head_timage = '"/pricampos.blog.br/www/galeria/midiasocial/about-me-twitter.jpg"';

            include ("modulos/head-seo.inc.php"); 
        
            //CSS & JS
            print @$head_about_me_preload;
            print @$head_about_me;            
        ?>
    </head>
    
    <body class="body-about-me">
        <header>
            <?php include("modulos/menu.inc.php"); ?>
        </header>
        <div class="background-about-me">
        <section class="about-me">
            <h1 class="title-about-me">A Little Bit About Me...</h1>
            
            <h1 class="title-name">Priscila Campos, 33 anos</h1>
            
            <h4 class="title-address"><i class="fa fa-map-marker" aria-hidden="true"></i> Ribeirão das Neves, MG</h4>

           
            <p>Sou graduanda do curso de Engenharia da Computação, pelo Centro Universitário UNA e desde 2012, atuo na área de Teste de Software.</p>
            
            <p>Estou em busca de aprendizado constante e ações que tornem o mercado tecnológico mais inclusivo.</p>

            <p>Curto: desenhar, crochetar, anotar as frases que me marcam, correr, pedalar, natureza, seriados, filmes, viajar, rock, MPB, jazz, massas...</p>
            
            <p>Decidi fazer esse blog, porquê quando compartilho um estudo, tenho mais atenção aos detalhes diante da responsabilidade de replicar à informação, também por ser um meio de obter feedback e melhorar a escrita. Outro ponto legal é ter um acervo on-line do que tenho estudado; seja para uso próprio, ou para outras pessoas que buscam um conteúdo com uma outra percepção, ou linguagem.</p>

            <p> Muito obrigada, por em algum momento, fazer parte deste projeto! Um abraço!</p>
                    
            <img class="img-about-me" src="/pricampos.blog.br/www/galeria/banner/priscila.png" />
            
            <div class="div-network">
                <h4><a class="a-network" href="https://www.facebook.com/priscila.campos.752" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>&nbsp;Facebook</a></h4>
                <h4><a class="a-network" href="https://www.linkedin.com/in/priscila-campos-7b4653134/" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true" ></i>&nbsp;Linkedin</a></h4>
                <h4><a class="a-network" href="https://github.com/PriCampos" target="_blank"><i class="fa fa-github-square fa-2x" aria-hidden="true" ></i>&nbsp;GitHub</a></h4>
            </div>     
        </section> 
   </div>
        <footer>
            <?php include ("modulos/footer.inc.php"); ?>
        </footer>
    </body>
</html>