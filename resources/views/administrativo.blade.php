@extends('layout')

@section('title', 'Panel Alumno')

@section('content')

 <div class="container nav-buttons mt-3">
    <div class="d-flex justify-content-center flex-wrap gap-3">

    
<div>
        <div class="dropdown">
<button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
            Registro
          </button>
<ul class="dropdown-menu">
           <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('altas')">Registro Alta</a></li>
           <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('bajas')">Registro Baja</a></li>
              <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('adeudo')">Registro Adeudo</a></li>
          <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('quitar')">Quitar Adeudo.</a></li>
               <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('c')">Actividades C.</a></li>
          <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('s')">Servicio Social</a></li>
         <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('resi')">Residencias</a></li>
        
         </ul>
        </div>
      </div>

      <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
            Generar
          </button>
          <ul class="dropdown-menu">
          <li><a  class="btn btn-light btn-menu" onclick="mostrarSeccion('p')">Alumnos</a></li>
          <li><a  class="btn btn-light btn-menu" onclick="mostrarSeccion('cal')">Calendario</a></li>
           <li><a  class="btn btn-light btn-menu" onclick="mostrarSeccion('car')">Carga de Calificación</a></li>
          <li><a  class="btn btn-light btn-menu" onclick="mostrarSeccion('ca')">Carga de Avance</a></li>
           <li><a  class="btn btn-light btn-menu" onclick="mostrarSeccion('co')">Constancia</a></li>
      </ul>
        </div>
      </div>

      
<div id="altas" class="container mt-4" style="display: none;">
  <h2>Formulario de Registro</h2>
  <form>
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre Completo:</label>
      <input type="text" id="nombre" name="nombre" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="matricula" class="form-label">Matrícula:</label>
      <input type="number" id="matricula" name="matricula" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Correo institucional:</label>
      <input type="email" id="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="carrera" class="form-label">Carrera:</label>
      <select id="carrera" name="carrera" class="form-select" required>
        <option value="ISC">Ingeniería en Sistemas Computacionales</option>
        <option value="IBQ">Ingeniería en Bioquímica</option>
        <option value="IGE">Ingeniería en Gestión Empresarial</option>
        <option value="IIA">Ingeniería en Industrias Alimentarias</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="semestre" class="form-label">Semestre:</label>
      <select id="semestre" name="semestre" class="form-select" required>
        @for ($i = 1; $i <= 12; $i++)
          <option value="{{ $i }}">{{ $i }}°</option>
        @endfor
      </select>
    </div>

    <div class="mb-3">
      <label for="edad" class="form-label">Edad:</label>
      <input type="number" id="edad" name="edad" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
</div>

<!--bajas-->
<div id="bajas" class="container mt-4" style="display: none;">
  <h2>Formulario de Baja</h2>
  <form>
    <div class="mb-3">
      <label for="matricula-baja" class="form-label">Matrícula:</label>
      <input type="number" id="matricula-baja" name="matricula-baja" class="form-control" onblur="buscarAlumno()" required>
    </div>

    <div id="datos-alumno" style="display: none;">
      <div class="mb-3">
        <label class="form-label">ID:</label>
        <p id="alumno-id"></p>
      </div>
      <div class="mb-3">
        <label class="form-label">Nombre completo:</label>
        <p id="alumno-nombre"></p>
      </div>
      <div class="mb-3">
        <label class="form-label">Carrera:</label>
        <p id="alumno-carrera"></p>
      </div>
      <div class="mb-3">
        <label class="form-label">Semestre:</label>
        <p id="alumno-semestre"></p>
      </div>
    </div>

    <div class="mb-3">
      <label for="motivo" class="form-label">Motivo de la baja:</label>
      <textarea id="motivo" name="motivo" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-danger">Dar de baja</button>
  </form>
</div>
 <!-- REGISTRAR ADEUDO -->
      <div id="adeudo" class="page-content">
        <main class="form-container">
            <h2>Formulario de Registro</h2>
            <form>
    
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
              </div>
    
              <div class="mb-3">
                <label for="matricula" class="form-label">Matrícula:</label>
                <input type="number" id="matricula" name="matricula" class="form-control" required>
              </div>
    
              <div class="mb-3">
                <label for="nombre" class="form-label">Concepto Adeudo:</label>
                <input type="text" id="conceptoAdeudo" name="conceptoAdeudo" class="form-control" required>
              </div>
        
              <div class="mb-3">
                <label for="edad" class="form-label">Monto:</label>
                <input type="number" id="monto" name="monto" class="form-control" required>
              </div>
    
              <div class="mb-3">
                <label for="fecha" class="form-label">Fecha:</label>
                <input type="date" id="fecha" name="fecha" class="form-control" required>
              </div>
        
              <button type="submit" class="btn btn-primary">Registrar Adeudo</button>
            </form>
          </main>
      </div>

      <!-- QUITAR ADEUDO -->
<div id="quitar" class="page-content" style="display: none;">
  <h2 class="mb-4">Lista de Adeudos</h2>

  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>ID Adeudo</th>
        <th>Nombre del Alumno</th>
        <th>Matrícula</th>
        <th>Concepto</th>
        <th>Monto ($MXN)</th>
        <th>Fecha</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody id="tablaAdeudos">
    </tbody>
  </table>
</div>

<!-- REGISTRO DE ACTIVIDADES C -->
      <div id="c" class="page-content" style="display: none;">
        <h2>Actividades Complementarias</h2>
        <main class="form-container">
            <form>
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
              </div>
        
              <div class="mb-3">
                <label for="matricula" class="form-label">Matrícula:</label>
                <input type="number" id="matricula" name="matricula" class="form-control" required>
              </div>
        
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre de la actividad:</label>
                <input type="actividad" id="actividad" name="actividad" class="form-control" required>
              </div>
        
              <div class="mb-3">
                <label for="tipo" class="form-label">Tipo:</label>
                <select id="tipo" name="tipo" class="form-select" required>
                  <option value="cultura">Cultural</option>
                  <option value="civico">Cívico</option>
                </select>
              </div>
        
              <div class="mb-3">
                <label for="fecha" class="form-label">Fecha:</label>
                <input type="date" id="fecha" name="fecha" class="form-control" required>
              </div>
        
              <div class="mb-3">
                <label for="duracion" class="form-label">Duración:</label>
                <input type="text" id="duracion" name="duracion" class="form-control" required>
              </div>
        
              <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
          </main>
      </div>
 <!-- SERVICIO SOCIAL -->
      <div id="servicio-social" class="page-content">
        <h2>Servicio Social</h2>
        <main class="form-container">
            <form>
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
              </div>
        
              <div class="mb-3">
                <label for="matricula" class="form-label">Matrícula:</label>
                <input type="number" id="matricula" name="matricula" class="form-control" required>
              </div>
        
              <div class="mb-3">
                <label for="pop" class="form-label">Programa o Proyecto:</label>
                <select id="pop" name="pop" class="form-select" required>
                  <option value="programa">Programa</option>
                  <option value="proyecto">Proyecto</option>
                </select>
              </div>
    
              <div class="mb-3">
                <label for="iod" class="form-label">Instituto o Dependencia:</label>
                <select id="iod" name="iod" class="form-select" required>
                  <option value="instituto">Instituto</option>
                  <option value="dependencia">Dependencia</option>
                </select>
              </div>
        
              <div class="mb-3">
                <label for="fechai" class="form-label">Fecha de Inicio:</label>
                <input type="date" id="fechai" name="fechai" class="form-control" required>
              </div>
    
              <div class="mb-3">
                <label for="fechat" class="form-label">Fecha de Termino:</label>
                <input type="date" id="fechat" name="fechat" class="form-control" required>
              </div>
        
              <div class="mb-3">
                <label for="horascubiertas" class="form-label">Horas Cubiertas:</label>
                <input type="number" id="horas" name="horas" class="form-control" required>
              </div>
        
              <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
          </main>
      </div>




       <!-- CALENDARIO -->
      <div id="cal" class="page-content">
        <h2>Calendario</h2>
        <main class="form-container">

            <fieldset class="border p-3 bg-white rounded shadow-sm mt-3">
                <legend class="float-none w-auto px-2">Datos del Ciclo Escolar</legend>
          
                <div class="mb-3">
                  <label>Fecha de Inicio de Clases:</label>
                  <input type="date" class="form-control" placeholder="dd/mm/aaaa">
                </div>
                <div class="mb-3">
                  <label>Fecha de Fin de Clases:</label>
                  <input type="date" class="form-control" placeholder="dd/mm/aaaa">
                </div>
                <div class="mb-3">
                  <label>Periodo de Inscripciones:</label>
                  <input type="text" class="form-control" placeholder="Ejemplo: 1 al 5 de agosto">
                </div>
                <div class="mb-3">
                  <label>Periodo de Vacaciones:</label>
                  <input type="text" class="form-control" placeholder="Ejemplo: 20 de diciembre al ...">
                </div>
                <div class="mb-3">
                  <label>Fechas de Exámenes Finales:</label>
                  <input type="text" class="form-control" placeholder="Ejemplo: 10 al 20 de noviembre">
                </div>
                <div class="mb-3">
                  <label>Entrega de Calificaciones:</label>
                  <input type="date" class="form-control">
                </div>
                <button class="btn btn-primary">Generar Calendario</button>
              </fieldset>
            </div>
          </main>
      </div>
<!-- CARGA DE CALIFICACION -->
      <div id="car" class="page-content">
        <h2>Carga de Calificación</h2>
        <main class="form-container">

            <form>
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
              </div>
        
              <div class="mb-3">
                <label for="matricula" class="form-label">Matrícula:</label>
                <input type="number" id="matricula" name="matricula" class="form-control" required>
              </div>
        
              <div class="mb-3">
                <label for="materia" class="form-label">Materia:</label>
                <input type="materia" id="materia" name="materia" class="form-control" required>
              </div>
        
              <div class="mb-3">
                <label for="calificacion" class="form-label">Calificación:</label>
                <input type="number" id="calificacion" name="calificacion" class="form-control" required>
              </div>
    
              <div class="mb-3">
                <label for="periodoa" class="form-label">Periodo Academico:</label>
                <input type="text" id="periodoa" name="periodoa" class="form-control" required>
              </div>
        
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
          </main>
      </div>

 <!-- CARGA DE AVANCE -->
      <div id="ca" class="page-content">
        <h2>Carga de avance</h2>
        <main class="form-container">

            <form>
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
              </div>
        
              <div class="mb-3">
                <label for="matricula" class="form-label">Matrícula:</label>
                <input type="number" id="matricula" name="matricula" class="form-control" required>
              </div>
        
              <div class="mb-3">
                <label for="semestrea" class="form-label">Semestre Actual:</label>
                <select id="semestrea" name="semestrea" class="form-select" required>
                  <option value="1">1°</option>
                  <option value="2">2°</option>
                  <option value="3">3°</option>
                  <option value="4">4°</option>
                  <option value="5">5°</option>
                  <option value="6">6°</option>
                  <option value="7">7°</option>
                  <option value="8">8°</option>
                  <option value="9">9°</option>
                  <option value="10">10°</option>
                  <option value="11">11°</option>
                  <option value="12">12°</option>
                </select>
              </div>
        
              <div class="mb-3">
                <label for="porcentajea" class="form-label">Porcentaje Actual:</label>
                <input type="number" id="porcentajea" name="porcentajea" class="form-control" required>
              </div>
        
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
          </main>
      </div>


 <!-- CONSTANCIAS -->
      <div id="co" class="page-content">
        <main class="form-container">
            <h2>Datos del Alumno</h2>
            <form>
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Alumno:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
              </div>
        
              <div class="mb-3">
                <label for="matricula" class="form-label">Matrícula:</label>
                <input type="number" id="matricula" name="matricula" class="form-control" required>
              </div>
        
              <div class="mb-3">
                <label for="carrera" class="form-label">Carrera:</label>
                <select id="carrera" name="carrera" class="form-select" required>
                  <option value="ISC">Ingeniería en Sistemas Computacionales</option>
                  <option value="IBQ">Ingeniería en Bioquímica</option>
                  <option value="IGE">Ingeniería en Gestión Empresarial</option>
                  <option value="IIA">Ingeniería en Industrias Alimentarias</option>
                </select>
              </div>
        
              <div class="mb-3">
                <label for="semestrea" class="form-label">Semestre Actual:</label>
                <select id="semestrea" name="semestrea" class="form-select" required>
                  <option value="1">1°</option>
                  <option value="2">2°</option>
                  <option value="3">3°</option>
                  <option value="4">4°</option>
                  <option value="5">5°</option>
                  <option value="6">6°</option>
                  <option value="7">7°</option>
                  <option value="8">8°</option>
                  <option value="9">9°</option>
                  <option value="10">10°</option>
                  <option value="11">11°</option>
                  <option value="12">12°</option>
                </select>
              </div>
        
              <div class="mb-3">
                <label for="periodoe" class="form-label">Periodo Escolar:</label>
                <input type="text" id="periodoe" name="periodoe" class="form-control" required>
              </div>
    
              <div class="mb-3">
                <label for="fechae" class="form-label">Fecha de Emisión:</label>
                <input type="date" id="fechae" name="fechae" class="form-control" required>
              </div>
        
              <button type="submit" class="btn btn-primary">Generar Constancia</button>
            </form>
          </main>
      </div>

<!-- CARGA DE MATERIAS CON PORCENTAJES EDITABLES -->
<div id="p" class="page-content" style="display: none;">
  <h2 class="mb-4">Consulta y Edición de Carga de Materias</h2>

  <div class="mb-3">
    <label for="matriculaConsulta" class="form-label">Ingresa Matrícula:</label>
    <input type="number" id="matriculaConsulta" class="form-control" placeholder="Ejemplo: 123456">
  </div>

  <button class="btn btn-primary mb-3" onclick="buscarMaterias()">Buscar Materias</button>

  <table class="table table-bordered table-striped" id="tablaMaterias" style="display: none;">
    <thead class="table-dark">
      <tr>
        <th>Matrícula</th>
        <th>Nombre Alumno</th>
        <th>Materia</th>
        <th>Profesor</th>
        <th>Créditos</th>
        <th>Semestre</th>
        <th>% Promedio</th>
        <th>% Avance</th>
      </tr>
    </thead>
    <tbody id="tbodyMaterias"></tbody>
  </table>

  <button id="btnGuardar" class="btn btn-success mt-3" style="display:none;" onclick="guardarCambios()">Guardar Cambios</button>

  <p id="mensajeNoDatos" style="display:none; color: red;">No se encontraron materias para esta matrícula.</p>
</div>
<!-- Sección Servicio Social -->
<div id="s" class="page-content" style="display: none;">
  <h5 class="text-center">DEPARTAMENTO DE GESTIÓN TECNOLÓGICA Y VINCULACIÓN<br>SOLICITUD DE SERVICIO SOCIAL</h5>

  <!-- Buscar Alumno -->
  <div class="card mt-3">
    <div class="card-header bg-secondary text-white">Buscar Alumno</div>
    <div class="card-body row">
      <div class="col-md-6 mb-2">
        <label for="matricula">Ingrese Matrícula:</label>
        <input type="text" id="matricula" class="form-control" placeholder="Ej. 211070009">
      </div>
      <div class="col-md-6 mb-2 d-flex align-items-end">
        <button class="btn btn-primary" onclick="buscarAlumno()">Buscar</button>
      </div>
    </div>
  </div>

  <!-- Formulario del Alumno: inicialmente oculto -->
  <div id="formularioAlumno" style="display: none;">
    <div class="card mt-3">
      <div class="card-header bg-primary text-white">DATOS PERSONALES</div>
      <div class="card-body row">
        <div class="col-md-6"><strong>Nombre completo:</strong> <span id="nombreAlumno">-</span></div>
        <div class="col-md-3"><strong>Teléfono:</strong> <span id="telefonoAlumno">-</span></div>
        <div class="col-md-3"><strong>No. de Control:</strong> <span id="controlAlumno">-</span></div>
        <div class="col-md-6"><strong>Sexo:</strong> <span id="sexoAlumno">-</span></div>
        <div class="col-md-6"><strong>Domicilio:</strong> <span id="domicilioAlumno">-</span></div>
        <div class="col-md-6"><strong>Periodo:</strong> <span id="periodoAlumno">-</span></div>
      </div>
    </div>

    <div class="card mt-3">
      <div class="card-header bg-primary text-white">ESCOLARIDAD</div>
      <div class="card-body row">
        <div class="col-md-9"><strong>Carrera:</strong> <span id="carreraAlumno">-</span></div>
        <div class="col-md-3"><strong>Semestre:</strong> <span id="semestreAlumno">-</span></div>
      </div>
    </div>

    <!-- Aquí seguiría el resto del formulario que ya tienes -->

    <div class="card mt-3">
      <div class="card-header bg-primary text-white">DATOS DEL PROGRAMA</div>
      <div class="card-body row">
        <div class="col-md-6 mb-2">
          <label>Dependencia Oficial:</label>
          <input type="text" class="form-control">
        </div>
        <!-- resto de inputs -->
      </div>
    </div>

    <!-- resto del formulario -->

    <div class="text-center mt-4 mb-5">
      <button class="btn btn-primary">Modificar</button>
    </div>
  </div>
</div>
<!--Residencias-->
<div id="resi" class="page-content" style="display: none;">
<h5 class="text-center">SOLICITUD DE RESIDENCIAS PROFESIONALES</h5>

  <!-- Sección de búsqueda -->
  <div class="card mt-3">
    <div class="card-header bg-secondary text-white">Buscar Alumno</div>
    <div class="card-body row align-items-center">
      <div class="col-md-6 mb-2">
        <label for="matriculaBusqueda"><strong>Matrícula:</strong></label>
        <input type="text" id="matriculaBusqueda" class="form-control" placeholder="Ingrese matrícula">
      </div>
      <div class="col-md-3 mb-2">
        <button class="btn btn-primary" onclick="buscarAlumno()">Buscar</button>
      </div>
    </div>
  </div>

  <!-- Formulario con datos, oculto hasta encontrar alumno -->
  <div id="formResidencias" style="display: none;">

    <div class="card mt-3">
      <div class="card-header bg-primary text-white">DATOS PERSONALES</div>
      <div class="card-body row">
        <div class="col-md-6 mb-2">
          <label><strong>Nombre completo:</strong></label>
          <input type="text" id="nombre" class="form-control" readonly>
        </div>
        <div class="col-md-3 mb-2">
          <label><strong>Teléfono:</strong></label>
          <input type="text" id="telefono" class="form-control" readonly>
        </div>
        <div class="col-md-3 mb-2">
          <label><strong>Sexo:</strong></label>
          <input type="text" id="sexo" class="form-control" readonly>
        </div>
        <div class="col-md-6 mb-2">
          <label><strong>Domicilio:</strong></label>
          <input type="text" id="domicilio" class="form-control" readonly>
        </div>
        <div class="col-md-3 mb-2">
          <label><strong>No. de Control:</strong></label>
          <input type="text" id="noControl" class="form-control" readonly>
        </div>
        <div class="col-md-3 mb-2">
          <label><strong>Matrícula:</strong></label>
          <input type="text" id="matricula" class="form-control" readonly>
        </div>
        <div class="col-md-3 mb-2">
          <label><strong>Periodo:</strong></label>
          <input type="text" id="periodo" class="form-control" readonly>
        </div>
        <div class="col-md-3 mb-2">
          <label><strong>Semestre:</strong></label>
          <input type="text" id="semestre" class="form-control" readonly>
        </div>
        <div class="col-md-6 mb-2">
          <label><strong>Carrera:</strong></label>
          <input type="text" id="carrera" class="form-control" readonly>
        </div>
      </div>
    </div>

    <!-- Aquí continúa tu formulario de residencias (datos del proyecto, empresa, etc) -->
    <div class="card mt-3">
      <div class="card-header bg-primary text-white">DATOS DEL PROYECTO</div>
      <div class="card-body row">
        <!-- Tus inputs de proyecto -->
        <div class="col-md-6 mb-2">
          <label>Nombre del Proyecto:</label>
          <input type="text" class="form-control">
        </div>
        <!-- demás campos... -->
      </div>
    </div>
    <!-- resto del formulario -->

    <div class="text-center mt-4 mb-5">
      <button class="btn btn-primary">Editar</button>
    </div>
  </div>
</div>


      </div>
  </div>

@endsection
<script src="{{ asset('administrativo.js') }}"></script> 