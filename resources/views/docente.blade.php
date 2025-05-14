<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema Integral de Información</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .top-bar {
      background-color: #1b2a4e;
      color: white;
      padding: 15px;
    }
    .nav-buttons button {
      margin: 0 10px;
      min-width: 150px;
    }
    .info-box {
      background-color: #495057;
      color: white;
      padding: 15px;
    }
    .section-title {
      background-color: #1b2a4e;
      color: white;
      padding: 8px;
      font-weight: bold;
    }
    .materia-btn {
      background-color: #6495ed;
      color: black;
      width: 250px;
      height: 150px;
      margin: 10px;
      font-size: 1.1rem;
      font-weight: 500;
      border: none;
      border-radius: 6px;
    }
    .logout-fixed {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 999;
    }
  </style>
</head>
<body>

  <!-- Encabezado -->
  <div class="top-bar text-center">
    <div class="d-flex justify-content-between align-items-center">
      <div><img src="public\images\Secretaria.png" alt="" width="200"></div>
      <div>
        <h5>Sistema Integral de Información<br>INSTITUTO TECNOLOGICO DE MILPA ALTA</h5>
      </div>
      <div><img src="public\images\TECNM.png" alt="" width="200"></div>
    </div>
  </div>

  <!-- Navegación fija -->
  <div class="text-center my-3 nav-buttons d-flex justify-content-center gap-2 flex-wrap">
    <div class="btn-group">
      <button class="btn btn-secondary main-btn" data-bs-toggle="collapse" data-bs-target="#materiasCollapse" aria-expanded="false" aria-controls="materiasCollapse">Materias</button>
    </div>
    <div class="btn-group">
      <button class="btn btn-secondary main-btn" data-bs-toggle="collapse" data-bs-target="#gruposCollapse" aria-expanded="false" aria-controls="gruposCollapse">Grupos</button>
    </div>
    <button class="btn btn-secondary main-btn" data-bs-toggle="collapse" data-bs-target="#calificacionesCollapse" aria-expanded="false" aria-controls="calificacionesCollapse">Calificaciones</button>
    <button class="btn btn-secondary main-btn" data-bs-toggle="collapse" data-bs-target="#fechasCollapse" aria-expanded="false" aria-controls="fechasCollapse">Fechas de cierre</button>
  </div>

  <!-- Contenido desplegable para Materias -->
  <div class="container mb-4">
    <div class="collapse" id="materiasCollapse">
      <div class="card card-body text-start">
        <button class="btn btn-secondary mb-2" data-bs-toggle="collapse" data-bs-target="#materiasCurso">En curso</button>
        <button class="btn btn-secondary mb-2" data-bs-toggle="collapse" data-bs-target="#materiasCierre">Cierre</button>

        <!-- Tabla de horarios -->
        <div class="collapse mt-3" id="materiasCurso">
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
        <div class="collapse mt-3" id="materiasCierre">
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

  <!-- Contenido desplegable para Grupos -->
  <div class="container mb-4">
    <div class="collapse" id="gruposCollapse">
      <div class="card card-body text-start">
        <button class="btn btn-secondary mb-2" style="min-width: 150px;">En curso</button>
        <button class="btn btn-secondary mb-2" style="min-width: 150px;">Cierre</button>
      </div>
    </div>
  </div>

  <!-- Contenido desplegable para Calificaciones -->
  <div class="container mb-4">
    <div class="collapse" id="calificacionesCollapse">
      <div class="card card-body text-start">
        <button class="btn btn-secondary mb-2" style="min-width: 150px;">Registrar</button>
        <button class="btn btn-secondary mb-2" style="min-width: 150px;">Historial</button>
        <button class="btn btn-secondary mb-2" style="min-width: 150px;" id="enCursoBtn">En curso</button>

        <!-- Opciones en curso -->
        <div id="materiasEnCurso" class="mt-3 d-none text-center">
          <button class="materia-btn">Informática<br><small>CND2204 S-91</small></button>
          <button class="materia-btn">Desarrollo<br><small>CND2204 S-91</small></button>
          <button class="materia-btn">Taller<br><small>CND2204 S-91</small></button>
        </div>
      </div>
    </div>
  </div>

  <!-- Tabla de alumnos -->
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

  <!-- Fechas de cierre -->
  <div class="container mb-4">
    <div class="collapse" id="fechasCollapse">
      <div class="card card-body">
        <button class="btn btn-primary mb-2" data-bs-toggle="collapse" data-bs-target="#alertaCierre" aria-expanded="false" aria-controls="alertaCierre">Alerta de Cierre</button>
        <div class="collapse" id="alertaCierre">
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
      </div>
    </div>
  </div>

  <!-- Bienvenida -->
  <div class="text-center my-3">
    <h5><strong>Bienvenid(@)</strong><br>Perla Angelica Hernandez Aguilar<br>(211070025)</h5>
    <img src="public\images\MapacheTECNM.png" alt="" width="200">
  </div>

  <!-- Sección Quejas -->
  <div class="container mb-3 seccion-extra" id="seccionQuejas">
    <div class="section-title text-center">QUEJAS Y SUGERENCIAS</div>
    <div class="info-box text-center">
      Quejas y Sugerencias: Recuerda que la sección de Quejas y Sugerencias se encuentra en el menú de Información Escolar. Es anónimo y solo la autoridad correspondiente lo leerá.
    </div>
  </div>

  <!-- Sección Ambiental -->
  <div class="container mb-5 seccion-extra" id="seccionAmbiental">
    <div class="section-title text-center">SISTEMA DE GESTIÓN AMBIENTAL</div>
    <div class="info-box text-center">
      Sistema de Gestión Ambiental: Si deseas colaborar activamente en el cuidado del medio ambiente, intégrate al club ambiental, haciendo tu registro en: calidad@itmilpaalta.edu.mx
    </div>
  </div>

  <!-- Cerrar sesión -->
  <div class="logout-fixed">
    <a name="Cerrar sección" class="btn btn-danger" href="#" role="button">Cerrar sesión</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    let seccionesVisibles = true;

    document.querySelectorAll('.main-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const secciones = document.querySelectorAll('.seccion-extra');
        secciones.forEach(seccion => {
          if (seccionesVisibles) {
            seccion.classList.add('d-none');
          } else {
            seccion.classList.remove('d-none');
          }
        });
        seccionesVisibles = !seccionesVisibles;
      });
    });

    document.getElementById('enCursoBtn').addEventListener('click', () => {
      const materias = document.getElementById('materiasEnCurso');
      materias.classList.toggle('d-none');
    });

    document.querySelectorAll('.materia-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const tabla = document.getElementById('tablaAlumnos');
        tabla.classList.toggle('d-none');
      });
    });
  </script>
</body>
</html>
