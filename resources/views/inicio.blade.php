<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema Integral de Información - ITMA</title>
     <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">

</head>
<body>
    <header>
        <div class="left">
            <img src="../assets/imagenes/secretaria.png" alt="Logo SEP">
        </div>
        <div class="center">
            <div>Sistema Integral de Información</div>
            <div><strong>INSTITUTO TECNOLOGICO DE MILPA ALTA</strong></div>
        </div>
        <div class="right">
         <img src="{{ asset('assets/imagenes/nacional.png') }}" alt="Logo TecNM"><br>
        </div>
    </header>

    <div class="container">
        <div class="logo">
             <img src="{{ asset('assets/imagenes/tecnm-removebg-preview.png') }}" alt="Logo ITMA"><br>
        </div>

        <div class="roles">
            <div class="role">
                <button class="role-button" onclick="mostrarLogin('docente')">Docente</button>
                <div> <img src="../assets/imagenes/p.png" alt="Logo ITMA"></div>
            </div>
            <div class="role">
                <button class="role-button" onclick="mostrarLogin('alumno')">Alumno</button>
                <div> <img src="../assets/imagenes/alumno.png" alt="Logo ITMA"></div>
            </div>
            <div class="role">
                <a href="{{ url('/aspirante') }}"><button class="role-button" onclick="location.href='aspirante.html'">Aspirante</button></a>
                <div> <img src="../assets/imagenes/alumno.png" alt="Logo ITMA"></div>
            </div>
        </div>
    </div>

    <!--Alumno-->
    <div id="login-alumno" style="display: none;">
        <div class="login-box">
            <div class="title-auth">Autenticación para acceso al sistema</div>
            <div class="styled-input">
                <input type="text" placeholder="No. Control:">
            </div>
            <div class="styled-input">
                <input type="password" placeholder="NIP:">
            </div>
            <br>
            <a href="{{ url('/estudiante') }}"><button>Ingresar alumno</button></a>
        </div>
    </div>

    <!--Docente-->
    <div id="login-docente" style="display: none;">
        <div class="login-box">
            <div class="title-auth">Autenticación para acceso al sistema</div>
            <div class="styled-input">
                <input type="text" placeholder="Usuario">
            </div>
            <div class="styled-input">
                <input type="password" placeholder="Contraseña">
            </div>
            <br>
            <a href="{{ url('/docente') }}"><button>Ingresar Docente</button></a>
        </div>
    </div>

<script src="{{ asset('inicio.js') }}"></script>

</body>
</html>
