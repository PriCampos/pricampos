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
            $head_ogimage = '"http://127.0.0.1:81/pricampos.blog.br/www/galeria/midiasocial/about-me-facebook.jpg"';

            //Google Tags
            $head_gdescription = "Um pouco sobre Priscila Campos";

            //Twitter Cards
            $head_ttitle = '"About Me"';
            $head_tdescription = '"Um pouco sobre Priscila Campos"';
            $head_timage = '"http://127.0.0.1:81/pricampos.blog.br/www/galeria/midiasocial/about-me-twitter.jpg"';

            include ("modulos/head-seo.inc.php"); 
        ?>
    </head>
    
    <body class="body-about-me">
        <header>
            <?php include("modulos/menu.inc.php"); ?>
        </header>
        
        <section class="about-me">
            <h1 class="title-about-me">A Little Bit About Me...</h1>
            
            <h1 class="title-name">Priscila Campos</h1>
            
            <h4 class="title-address"><i class="fa fa-map-marker" aria-hidden="true"></i> Ribeirão das Neves, MG</h4>

           
            <p>Sou graduanda do curso de Engenharia da Computação, no Centro Universitário UNA. E desde 2012, atuo na área de Teste de Software.</p>

            <p>Meus hobbies favoritos são desenhar, crochetar, escrever frases que me marcam e alguns pensamentos, correr, pedalar, curti os meus catioros, observar a natureza, ouvir o Pe. Fábio de Melo e assistir séries e filmes.</p>

            <p>Busco aprendizado, me tornar uma das melhores profissionais da minha área e ter uma ideia que melhore a vida de outras pessoas, algo que dê desígnio aos estudos.</p>
                    
            <p>Acredito no poder de expandir as nossas ideias por meio do desenvolvimento conjunto e propósitos pluralistas.</p>
            
            <p>Decidi fazer o blog, porquê quando compartilho um estudo, percebo que me esforço mais para absorver o conteúdo, tenho mais atenção aos detalhes diante do desafio de reescrever um objeto de estudo. Outras vantagens é obter feedback e melhorar a escrita. Também considero válido um acervo on-line do que tenho estudado, seja para uso próprio e para outros que buscam um conteúdo com uma outra percepção ou linguagem.</p>

            <p> Muito obrigada, por em algum momento, fazer parte disso! Um abraço!</p>
                    
            <img class="img-about-me" src="http://localhost:81/pricampos.blog.br/www/galeria/banner/priscila.png" />
            
            <div class="div-network">
                <h4><a class="a-network" href="https://www.facebook.com/priscila.campos.752" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>&nbsp;Facebook</a></h4>
                <h4><a class="a-network" href="https://www.linkedin.com/in/priscila-campos-7b4653134/" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true" ></i>&nbsp;Linkedin</a></h4>
                <h4><a class="a-network" href="https://github.com/PriCampos" target="_blank"><i class="fa fa-github-square fa-2x" aria-hidden="true" ></i>&nbsp;GitHub</a></h4>
            </div>     
        </section> 
   
        <footer>
            <?php include ("modulos/footer.inc.php"); ?>
        </footer>
    </body>
</html>