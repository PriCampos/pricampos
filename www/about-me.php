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
    
    <body>
        <header>
            <?php include("modulos/menu.inc.php"); ?>
        </header>

        <article>
            <p>Meu nome é Priscila, mas, pode me chamar de Pri. Sou mineira, de BH, estudante do curso de Engenharia da Computação, no Centro Universitário UNA. E desde 2012, atuo na área de Teste de Software.</p>

            <p>Tenho como hobbies: desenhar, crochetar, escrever poemas e frases que me marcam, escrever meus pensamentos, correr, pedalar, curti os serumaninhos de 4 patas, observar a natureza, ouvir o filosofo Pe. Fábio de Melo e assistir séries e filmes.</p>

            <p>Estou em busca de aprendizado, me tornar uma das melhores profissionais da minha área e ter uma ideia que melhore a vida de outras pessoas, algo que dê desígnio aos estudos! Acredito no poder de melhorar e reinventar nossas ideias por meio do desenvolvimento conjunto e propósitos pluralistas.</p>
            
            <p>Decidi fazer um blog, porquê quando compartilho um estudo, percebo que me esforço mais para absorver o conteúdo, tenho mais atenção aos detalhes diante do desafio de reescrever um objeto de estudo. Outras vantagens é obter feedback, melhorar a escrita e novos aprendizados. Também considero válido um acervo on-line do que tenho estudado, seja para uso próprio e para outros que buscam um conteúdo com uma outra percepção ou linguagem.</p>

            <h5> Muito obrigada, por em algum momento, fazer parte disso! </h5>
            
            <h4>Abraços!</h4>
        </article>  
        
        <footer>
            <?php include ("modulos/footer.inc.php"); ?>
        </footer>
    </body>
</html>