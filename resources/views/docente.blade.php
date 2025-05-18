

@extends('layout')

@section('title', 'Panel Alumno')

@section('content')

 <div class="container nav-buttons mt-3">
    <div class="d-flex justify-content-center flex-wrap gap-3">

    <!-- Materias -->
    <div>
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
          Materias
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#" onclick="mostrarSeccion('curso')">En curso</a></li>

          <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('cierre')">Cierre</a></li>
        </ul>
      </div>
    </div>

    <!-- Grupos -->
    <div>
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
          Grupos
        </button>
        <ul class="dropdown-menu">
          <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('curso2')">En curso</a></li>
          <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('cierre2')">Cierre</a></li>
        </ul>
      </div>
    </div>

    <!-- Generar -->
    <div>
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
          Generar
        </button>
        <ul class="dropdown-menu">
          <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('registrar')">Registrar</a></li>
          <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('historial')">Historial</a></li>
          <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('cur')">En curso</a></li>
        </ul>
      </div>
    </div>

    <!-- Fechas de cierre -->
    <div>
      <button class="btn btn-light btn-menu" onclick="mostrarSeccion('fechas')">Fechas de cierre</button>
    </div>

  </div>
</div>

        <!-- Tabla de horarios -->
       <div id="curso" class="page-content" style="display:none;">
          <h5>Horarios de Clase</h5>
          <table class="table table-bordered">
            <thead class="table-dark">
              <tr>
                <th>Materia</th>
                <th>Grupo</th>
                <th>Hora</th>
                <th>Días</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>Programación</td><td>S91</td><td>08:00 - 09:30</td><td>Lunes, Miércoles</td></tr>
              <tr><td>Bases de Datos</td><td>S91</td><td>09:30 - 11:00</td><td>Martes, Jueves</td></tr>
              <tr><td>Redes</td><td>S91</td><td>11:30 - 13:00</td><td>Viernes</td></tr>
            </tbody>
          </table>
        </div>

        <!-- Tabla de cierre -->
       <div id="cierre" class="page-content" style="display:none;">
          <h5>Cierre de Calificaciones</h5>
          <table class="table table-bordered">
            <thead class="table-dark">
              <tr>
                <th>Materia</th>
                <th>Grupo</th>
                <th>Fecha Límite</th>
                <th>Estado</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>Programación</td><td>S91</td><td>20 de junio</td><td>Pendiente</td></tr>
              <tr><td>Bases de Datos</td><td>S91</td><td>18 de junio</td><td>Completado</td></tr>
              <tr><td>Redes</td><td>S91</td><td>22 de junio</td><td>Pendiente</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>





        <!-- Opciones en curso -->
<div id="cur" class="mt-3 d-none text-center">
  <button class="materia-btn" onclick="mostrarSeccion('tablaAlumnos')">Informática<br><small>CND2204 S-91</small></button>
  <button class="materia-btn" onclick="mostrarSeccion('tablaAlumnos')">Desarrollo<br><small>CND2204 S-91</small></button>
  <button class="materia-btn" onclick="mostrarSeccion('tablaAlumnos')">Taller<br><small>CND2204 S-91</small></button>
</div>
  <div id="tablaAlumnos" class="container mt-4 d-none">
  <h5 class="text-center fw-bold">Lista de Alumnos</h5>
  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>Número</th>
        <th>Matrícula</th>
        <th>Nombre</th>
        <th>Unidad1</th>
        <th>Unidad2</th>
        <th>Unidad3</th>
        <th>Unidad4</th>
        <th>Final</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>1</td><td>21107555</td><td>marcos aldair rosas rodriges</td><td></td><td></td><td></td><td></td><td></td></tr>
      <tr><td>2</td><td>2110287</td><td>jorge castañeda vazquez</td><td></td><td></td><td></td><td></td><td></td></tr>
      <tr><td>3</td><td>2158788</td><td>marcos aldair rosas rodriges</td><td></td><td></td><td></td><td></td><td></td></tr>
      <tr><td>4</td><td>32158788</td><td>migue rosas</td><td></td><td></td><td></td><td></td><td></td></tr>
      <tr><td>5</td><td>21458799</td><td>sergios el negro cordoba</td><td></td><td></td><td></td><td></td><td></td></tr>
      <tr><td>6</td><td>3215587</td><td>abel lujan</td><td></td><td></td><td></td><td></td><td></td></tr>
      <tr><td>7</td><td>3215698</td><td>hernadez saul</td><td></td><td></td><td></td><td></td><td></td></tr>
    </tbody>
  </table>
</div>

 

  <!-- FECHAS DE CIERRE -->
<div id="fechas" class="page-content" style="display:none;">
  <div class="card card-body text-start mt-2">
    <h5 class="text-danger fw-bold">¡Atención! El periodo de captura de calificaciones termina el 31 de Junio.</h5>
    <button class="btn btn-secondary mb-3">Marcar como leído</button>
    <ul>
      <li>Periodo 1–31 de Febrero <button class="btn btn-primary btn-sm ms-2">Realizado</button></li>
      <li>Periodo 1–31 de Febrero <button class="btn btn-primary btn-sm ms-2">Realizado</button></li>
      <li>Periodo 1–31 de Febrero <button class="btn btn-primary btn-sm ms-2">Realizado</button></li>
    </ul>
  </div>
</div>
@endsection

@section('scripts')

<script src="{{ asset('docente.js') }}"></script>
