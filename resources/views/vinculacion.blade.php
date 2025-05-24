@extends('layout')

@section('title', 'Panel Alumno')

@section('content')
   {{-- Botones principales --}}
  <div class="container nav-buttons mt-3">
    <div class="d-flex justify-content-center flex-wrap gap-3">
      <div><button class="btn btn-light" onclick="mostrarSeccion('horario')">Generar Horario</button></div>
      <div><button class="btn btn-light" onclick="mostrarSeccion('seguimiento')">Seguimiento Docente</button></div>
      <div><button class="btn btn-light" onclick="mostrarSeccion('grupos')">Grupos</button></div>
      <div><button class="btn btn-light" onclick="mostrarSeccion('alumnos')">Alumnos</button></div>
      <div><button class="btn btn-light" onclick="mostrarSeccion('docentes')">Docente</button></div>
    </div>
  </div>

  <!-- Secciones que se mostrarán dinámicamente -->
  <div id="contenido" class="mt-4">

    <!-- GENERAR HORARIO -->
    <div id="horario" class="seccion" style="display:none;">
      <h3 class="text-center mb-4">Crear Horario</h3>
      <form>
        <div class="row mb-3">
          <div class="col-md-4">
            <label for="grupo">Grupo</label>
            <input type="text" class="form-control" placeholder="Selecciona un grupo" id="grupo">
          </div>
          <div class="col-md-4">
            <label for="materia">Materia</label>
            <input type="text" class="form-control" placeholder="Selecciona una materia" id="materia">
          </div>
          <div class="col-md-4">
            <label for="docente">Docente</label>
            <input type="text" class="form-control" placeholder="Selecciona un docente" id="docente">
          </div>
        </div>
  
        <div class="row mb-3">
          <div class="col-md-4">
            <label for="dia">Día</label>
            <input type="text" class="form-control" placeholder="Selecciona un día" id="dia">
          </div>
          <div class="col-md-4">
            <label for="hora">Hora</label>
            <input type="time" class="form-control" id="hora">
          </div>
          <div class="col-md-4">
            <label for="salon">Salón</label>
            <input type="text" class="form-control" id="salon">
          </div>
        </div>
  
        <div class="text-center">
          <button type="submit" class="btn btn-success">Agregar al Horario</button>
        </div>
      </form>
    </div>
  
  
<!-- Contenido seguimiento docente -->
<div id="seguimiento" class="seccion" style="display:none;">
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="p-3 rounded" style="background-color:#0d3b66; color:white;">
          <h5 class="text-center">Seleccionar Carrera</h5>
          <select id="carreraSelect" class="form-control mt-2">
            <option selected disabled>Selecciona una carrera</option>
            <option>Ingeniería en Sistemas y Computación</option>
            <option>Ingeniería Bioquímica</option>
            <option>Ingeniería en Gestión Empresarial</option>
            <option>Ingeniería en Alimentos</option>
          </select>
        </div>
      </div>
  
      <div class="col-md-6">
        <label>Buscar:</label>
        <input type="text" id="busqueda" class="form-control" placeholder="Introduce tu búsqueda">
        <button onclick="buscarDocente()" class="btn btn-outline-primary mt-2">Buscar</button>
      </div>
    </div>
  
    <!-- Resultado -->
    <div id="resultadoDocente" class="mt-4" style="display:none;">
      <h4>Información del Docente</h4>
      <table class="table table-bordered">
        <tbody>
          <tr><th>ID</th><td id="res_id">102</td></tr>
          <tr><th>Nombre</th><td id="res_nombre">Mtra. Laura Martínez</td></tr>
          <tr><th>Asistencia</th><td id="res_asistencia">92%</td></tr>
          <tr><th>Unidad 1</th><td>Completado</td></tr>
          <tr><th>Unidad 2</th><td>Completado</td></tr>
          <tr><th>Unidad 3</th><td>Completado</td></tr>
          <tr><th>Unidad 4</th><td>Completado</td></tr>
          <tr><th>Evaluación Final</th><td>Completado</td></tr>
          <tr><th>Evaluación de Alumnos</th><td>87%</td></tr>
          <tr>
            <th>Observaciones</th>
            <td><textarea class="form-control" id="observaciones">Excelente seguimiento, buen control de grupo.</textarea></td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-success" onclick="guardarObservaciones()">Guardar</button>
    </div>
  </div>
  
  <div id="grupos" class="seccion" style="display:none;">
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="p-3 rounded" style="background-color:#0d3b66; color:white;">
          <h5 class="text-center">Seleccionar Carrera</h5>
          <select id="carreraGrupo" class="form-control mt-2">
            <option selected disabled>Selecciona una carrera</option>
            <option>Ingeniería en Sistemas y Computación</option>
            <option>Ingeniería Bioquímica</option>
            <option>Ingeniería en Gestión Empresarial</option>
            <option>Ingeniería en Alimentos</option>
          </select>
        </div>
      </div>
  
      <div class="col-md-6">
        <div>
          <label>Seleccionar Semestre:</label>
          <select id="semestreGrupo" class="form-control">
            <option selected disabled>Selecciona un semestre</option>
            <option value="1">1° Semestre</option>
            <option value="2">2° Semestre</option>
            <option value="3">3° Semestre</option>
            <option value="4">4° Semestre</option>
            <option value="5">5° Semestre</option>
            <option value="6">6° Semestre</option>
            <option value="7">7° Semestre</option>
            <option value="8">8° Semestre</option>
            <option value="9">9° Semestre</option>
          </select>
          <button onclick="buscarGrupo()" class="btn btn-outline-primary mt-2">Buscar</button>
        </div>
      </div>
    </div>
  
    <!-- Resultado de horario -->
    <div id="resultadoGrupo" class="mt-4" style="display:none;">
      <h4>Horario del Grupo</h4>
      <table class="table table-bordered">
        <thead class="table-dark">
          <tr>
            <th>Grupo</th>
            <th>Materia</th>
            <th>Profesor</th>
            <th>Horario</th>
          </tr>
        </thead>
        <tbody id="tablaHorario">
          <!-- Datos se llenan por JS -->
        </tbody>
      </table>
    </div>
  </div>
  
  
  <div id="alumnos" class="seccion" style="display:none;">
    <div class="row mt-4">
      <div class="col-md-4">
        <div class="p-3 rounded" style="background-color:#0d3b66; color:white;">
          <h5 class="text-center">Seleccionar Carrera</h5>
          <select id="carreraAlumno" class="form-control mt-2">
            <option selected disabled>Selecciona una carrera</option>
            <option>Ingeniería en Sistemas y Computación</option>
            <option>Ingeniería Bioquímica</option>
            <option>Ingeniería en Gestión Empresarial</option>
            <option>Ingeniería en Alimentos</option>
          </select>
        </div>
      </div>
  
      <div class="col-md-4">
        <label>Seleccionar Semestre:</label>
        <select id="semestreAlumno" class="form-control">
          <option selected disabled>Selecciona un semestre</option>
          <option value="1">1° Semestre</option>
          <option value="2">2° Semestre</option>
          <option value="3">3° Semestre</option>
          <option value="4">4° Semestre</option>
          <option value="5">5° Semestre</option>
          <option value="6">6° Semestre</option>
          <option value="7">7° Semestre</option>
          <option value="8">8° Semestre</option>
          <option value="9">9° Semestre</option>
        </select>
      </div>
  
      <div class="col-md-4">
        <label>Nombre del Alumno:</label>
        <input type="text" id="nombreAlumno" class="form-control" placeholder="Introduce el nombre">
        <button onclick="buscarAlumno()" class="btn btn-outline-primary mt-2">Buscar</button>
      </div>
    </div>
  
    <!-- Retícula del alumno -->
    <div id="reticulaAlumno" class="mt-4" style="display:none;">
      <h4>Retícula de Materias</h4>
      <div class="row" id="materiasAlumno">
        <!-- Materias se agregan con JS -->
      </div>
  
      <!-- Leyenda de colores -->
      <div class="mt-4">
        <h5>Leyenda de Estados</h5>
        <ul style="list-style: none; padding-left: 0;">
          <li><span style="background-color:green; color:white; padding:5px;">Acreditado</span></li>
          <li><span style="background-color:purple; color:white; padding:5px;">Cursando</span></li>
          <li><span style="background-color:brown; color:white; padding:5px;">Cursada Sin Acreditar</span></li>
          <li><span style="background-color:yellow; color:black; padding:5px;">A Curso Especial</span></li>
          <li><span style="background-color:red; color:white; padding:5px;">Curso Esp. Reprobado</span></li>
          <li><span style="background-color:blue; color:white; padding:5px;">Reprobado</span></li>
          <li><span style="background-color:gray; color:white; padding:5px;">No Permitida Hasta Avance</span></li>
        </ul>
      </div>
    </div>
  </div>
  
  
  <div id="docentes" class="seccion" style="display:none;">
    <div class="row mt-4">
      <div class="col-md-6">
        <label>Nombre del Docente:</label>
        <input type="text" id="nombreDocente" class="form-control" placeholder="Introduce el nombre">
      </div>
      <div class="col-md-6 d-flex align-items-end">
        <button onclick="buscarDocente()" class="btn btn-outline-primary w-100">Buscar</button>
      </div>
    </div>
  
    <!-- Tabla de horario -->
    <div id="horarioDocente" class="mt-4" style="display:none;">
      <h4>Horario del Profesor</h4>
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>Día</th>
              <th>Hora</th>
              <th>Grupo</th>
              <th>Materia</th>
            </tr>
          </thead>
          <tbody id="tablaHorario">
            <!-- Se llenará con JS -->
          </tbody>
        </table>
      </div>
    </div>
  </div> 
@endsection
<script src="{{ asset('vinculacion.js') }}"></script> 