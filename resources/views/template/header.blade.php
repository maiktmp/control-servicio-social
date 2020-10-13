<nav class="navbar navbar-expand navbar-dark bg-dark fixed-top" id="barraGobmx">

    <a class="navbar-brand" href="https://www.gob.mx/" target="_blank">
        <img loading="lazy" src="https://framework-gb.cdn.gob.mx/landing/img/logoheader.svg"
             height="29"
             alt="Gobierno de México">
    </a>

    <div class="collapse navbar-collapse pl-5 pl-lx-0" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link active" href="https://www.gob.mx/gobierno" target="_blank">
                    Gobierno
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="https://www.participa.gob.mx/" target="_blank">
                    Participa
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="https://datos.gob.mx/" target="_blank">
                    Datos
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="https://www.gob.mx/busqueda" target="_blank">
                    <span class="sr-only"> Búsqueda </span>
                    <img src="{!! asset('img/lupa.jpg') !!}" height="20" width="20">
                </a>
            </li>

            @auth
                <li class="nav-item"><a href="#">></a></li>
                <li class="nav-item"><a href="{!! asset('cerrarsession') !!}">Cerrar sesión</a></li>
            @endauth

        </ul>
    </div>
</nav>
