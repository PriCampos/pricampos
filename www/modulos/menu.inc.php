<!-- Menu e Box Search Responsive -->
<span id="top" name="top"></span>
<input type="checkbox" id="btn-menu-resp" name="btn-menu-resp">
<div class="div-menu-resp" id="div-menu-resp" name="div-menu-resp">
    <label for="btn-menu-resp" class="btn-menu-resp">&#9776;</label>
    <!-- Search box -->
    <form class="form-search-resp" id="form-search-resp" name="form-search-resp" method="get" action="www.pricampos.blog.br/modulos/search.php">
        <label for="nm-search">
            <input type="search" class="box-search-resp" id="box-search-resp" name="box-search-resp" placeholder="Pesquisar no site...">
            <button type="submit" class="btn-search-resp" id="btn-search-resp" name="btn-search-resp">&nbsp;<i class="fa fa-search" aria-hidden="true"></i></button>
        </label>
    </form>
</div>
    <!-- Menu Descktop -->
<nav class="menu" id="menu" name="menu">
    <ul class="ul-menu" id="ul-menu" name="ul-menu">
        <li class="li-menu" id="home" name="home"> 
            <a class="a-menu" href="/pricampos.blog.br/www/index.php">
                <i class="fa fa-home" aria-hidden="true" id="icon-resp"></i>&nbsp; Início
            </a>
        </li>
        <li class="li-menu" id="about" name="about">
            <a  class="a-menu" href="/pricampos.blog.br/www/about-me.php">
                <i class="fa fa-hand-spock-o" aria-hidden="true" id="icon-resp"></i>&nbsp; Pri Campos
            </a>
        </li>
        <li class="li-menu" id="category" name="category">
            <a class="a-menu">
                <i class="fa fa-newspaper-o" aria-hidden="true" id="icon-resp"></i>&nbsp; Assuntos <i class="fa fa-angle-down" aria-hidden="true" id="icon-descktop"></i>
            </a>
            <ul class="ul-submenu" id="submenu" name="submenu">
                <li class="li-submenu" id="front-end" name="front-end">
                    <a class="a-submenu" href="/">
                        Front-end
                    </a>
                </li>
                <li class="li-submenu" id="tests" name="tests">
                    <a class="a-submenu" href="/">
                        Teste de Software
                    </a>
                </li>
            </ul>
        </li>
        <li class="li-menu" id="contact" name="contact">
            <a class="a-menu" href="/">
                <i class="fa fa-paper-plane" aria-hidden="true" id="icon-resp"></i>&nbsp; Contato
            </a>
        </li>
        <!-- Search box - Descktop -->
        <li class="li-menu" id="search-descktop" name="search-descktop">
            <form class="form-search" id="form-search" name="form-search" method="get" action="http://127.0.0.1:81/pricampos/www/modulos/search.php">
                <label for="box-search">
                    <input type="search" class="box-search" id="box-search" name="box-search" placeholder="Pesquisar no site...">
                    <button type="submit" class="btn-search" id="btn-search" name="btn-search"><i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
                </label>
            </form>
        </li>
    </ul>
</nav>
