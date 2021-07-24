<header class="component-menu-header">
    <a href="{{ Route('home') }}"><img src="{{ asset('img/logo.png') }}" class="componente-menu-header__logo"></a>
    <nav>
        <ul class="component-menu-header__li">
            <a href="{{ Route('home') }}"><li>Home</li></a>
            <a href=""><li>Anúncios</li></a>
            <a href=""><li>Fale Conosco</li></a>
            <a href=""><li>Sobre</li></a>
            <a href=""><li>Contato</li></a>
            <a href="{{ Route('entrar') }}"><li>Login</li></a>
        </ul>
    </nav>
</header>