@extends('layout')

@section('title', 'Panel Alumno')

@section('content')


  <div class="container nav-buttons mt-3">
    <div class="d-flex justify-content-center flex-wrap gap-3">
      <div>
        <button class="btn btn-light btn-menu" onclick="mostrarSeccion('perfil')">Perfil</button>
      </div>
      <div>
        <div class="dropdown">

          <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
            Información Escolar
          </button>
          <ul class="dropdown-menu">
            <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('kardex')">Kardex</a></li>
            <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('boleta')">Boleta de Calificaciones</a></li>
            <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('avance')">Avance Reticular</a></li>
            <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('servicio')">Servicio Social</a></li>
            <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('residencias')">Residencias</a></li>
          </ul>
        </div>
      </div>
  
      <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
            Información Escolar
          </button>
          <ul class="dropdown-menu">
            <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('documentos')">Documentos</a></li>
            <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('registro')">Registros</a></li>
         </ul>
  
      <div>
        <button class="btn btn-light btn-menu" onclick="mostrarSeccion('evaluacion')">Evaluación Docente</button>
      </div>
  
      <div>
        <button class="btn btn-light btn-menu" onclick="mostrarSeccion('centro')">Centro de Información</button>
      </div>
    </div>
  </div>

  
  <div class="container mt-4" id="seccion-perfil" style="display: none;">
    <!-- Información del alumno -->
    <div class="card mb-3">
      <div class="card-header bg-primary text-white">Información del Alumno</div>
      <div class="card-body">
        <p><strong>Nombre:</strong> Perla Angélica Hernández Aguilar</p>
        <p><strong>Créditos:</strong> 85% completado</p>
        <p><strong>Promedio:</strong> 9.1</p>
      </div>
    </div>
  
    <!-- Horario de clases -->
    <div class="card mb-3">
      <div class="card-header bg-success text-white">Horario de Clases</div>
      <div class="card-body">
        <ul>
          <li>Lunes: Programación Lógica - 8:00 a 10:00</li>
          <li>Martes: Redes - 10:00 a 12:00</li>
          <li>Miércoles: Web - 12:00 a 14:00</li>
          <li>Jueves: Diseño y Prototipo - 10:00 a 12:00</li>
          <li>Viernes: Hibridad 2 - 8:00 a 10:00</li>
        </ul>
      </div>
    </div>
  
    <!-- Notificaciones escolares -->
    <div class="card mb-3">
      <div class="card-header bg-warning">Notificaciones Escolares</div>
      <div class="card-body">
        <ul>
          <li>Mañana 10 de abril no hay clases.</li>
          <li>Registro de Inglés abierto hasta el 15 de abril.</li>
        </ul>
      </div>
    </div>
  
    <!-- Notificaciones de departamentos -->
    <div class="card">
      <div class="card-header bg-info text-white">Notificaciones de Departamentos</div>
      <div class="card-body">
        <ul>
          <li>Tu evaluación docente debe completarse antes del 10 de abril.</li>
          <li>Tu carta de presentación para residencias ya está lista.</li>
        </ul>
      </div>
    </div>
  </div>
<!--Contenido-->
<div class="container mt-4" id="seccion-kardex" style="display: none;">
    <div class="card">
      <div class="card-header bg-primary text-white">
        Kárdex Académico
      </div>
      <div class="card-body">
        <p><strong>Alumno:</strong> Perla Angélica Hernández Aguilar</p>
        <p><strong>Boleta:</strong> 211070025</p>
  
        <div class="table-responsive">
          <table class="table table-bordered text-center">
            <thead class="table-dark">
              <tr>
                <th>Semestre</th>
                <th>Materia</th>
                <th>Estado</th>
                <th>Calificación</th>
              </tr>
            </thead>
            <tbody>
              <!-- Ejemplo Primer Semestre -->
              <tr class="table-success">
                <td>1°</td>
                <td>Fundamentos de Programación</td>
                <td>Aprobada</td>
                <td>9</td>
              </tr>
              <tr class="table-success">
                <td>1°</td>
                <td>Matemáticas Discretas</td>
                <td>Aprobada</td>
                <td>8</td>
              </tr>
              <tr class="table-danger">
                <td>2°</td>
                <td>Contabilidad</td>
                <td>Curso Especial</td>
                <td>6</td>
              </tr>
              <tr class="table-warning">
                <td>3°</td>
                <td>Estructura de Datos</td>
                <td>Reprobada</td>
                <td>5</td>
              </tr>
              <tr class="table-secondary">
                <td>4°</td>
                <td>Redes de Computadoras</td>
                <td>No Cursada</td>
                <td>-</td>
              </tr>
              <!-- Agrega más filas según tus materias -->
            </tbody>
          </table>
        </div>
  
        <div class="mt-3">
          <strong>Colores:</strong><br>
          <span class="badge bg-success">Aprobada</span>
          <span class="badge bg-secondary">No Cursada</span>
          <span class="badge bg-danger">Curso Especial</span>
          <span class="badge bg-warning text-dark">Reprobada</span>
        </div>
      </div>
    </div>
  </div>
  


<!--Contenido-->
<div class="container mt-4" id="seccion-boleta" style="display: none;">
    <div class="row">
      <div class="col-md-4">
        <div class="card bg-dark text-white">
          <div class="card-header">Selecciona la boleta de calificaciones</div>
          <div class="card-body">
            <select class="form-select" id="selectSemestre" onchange="cargarBoleta()">
              <option value="1">Semestre 1</option>
              <option value="2">Semestre 2</option>
              <option value="3">Semestre 3</option>
              <!-- Agrega más semestres si es necesario -->
            </select>
          </div>
        </div>
      </div>
      <div class="col-md-8 text-center">
        <p class="text-muted">Aquí se mostrará la boleta seleccionada.</p>
        <iframe id="visorBoleta" src="" width="100%" height="400px" style="border: 1px solid #ccc;"></iframe>
        <br>
        <a id="descargarBoleta" class="btn btn-outline-primary mt-2" href="#" target="_blank" download>Descargar boleta</a>
      </div>
    </div>
  </div>
  


<!--Contenido-->
<div class="container mt-4" id="seccion-servicio" style="display: none;">
    <h5 class="text-center">DEPARTAMENTO DE GESTIÓN TECNOLÓGICA Y VINCULACIÓN<br>SOLICITUD DE SERVICIO SOCIAL</h5>
  
    <div class="card mt-3">
      <div class="card-header bg-primary text-white">DATOS PERSONALES</div>
      <div class="card-body row">
        <div class="col-md-6"><strong>Nombre completo:</strong> ROSAS RODRIGUEZ MARCOS ALDAIR</div>
        <div class="col-md-3"><strong>Teléfono:</strong> 5558620154</div>
        <div class="col-md-3"><strong>No. de Control:</strong> 211070009</div>
        <div class="col-md-6"><strong>Sexo:</strong> Masculino</div>
        <div class="col-md-6"><strong>Domicilio:</strong> HERMENEGILDO GALIANA #18 SAN SALVADOR CUAUHTENCO CDMX</div>
        <div class="col-md-6"><strong>Periodo:</strong> ENERO-JUNIO/2025</div>
      </div>
    </div>
  
    <div class="card mt-3">
      <div class="card-header bg-primary text-white">ESCOLARIDAD</div>
      <div class="card-body row">
        <div class="col-md-9"><strong>Carrera:</strong> INGENIERÍA EN SISTEMAS COMPUTACIONALES</div>
        <div class="col-md-3"><strong>Semestre:</strong> 8</div>
      </div>
    </div>
  
    <div class="card mt-3">
      <div class="card-header bg-primary text-white">DATOS DEL PROGRAMA</div>
      <div class="card-body row">
        <div class="col-md-6 mb-2">
          <label>Dependencia Oficial:</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-6 mb-2">
          <label>Dirección de la Dependencia:</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-4 mb-2">
          <label>Ciudad:</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-4 mb-2">
          <label>Estado:</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-4 mb-2">
          <label>Puesto:</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-4 mb-2">
          <label>Modalidad:</label>
          <select class="form-select">
            <option selected>- Seleccione -</option>
            <option>Presencial</option>
            <option>Virtual</option>
          </select>
        </div>
        <div class="col-md-4 mb-2">
          <label>Fecha de Inicio:</label>
          <input type="date" class="form-control" value="2025-05-01">
        </div>
        <div class="col-md-4 mb-2">
          <label>Fecha de Término:</label>
          <input type="date" class="form-control" value="2025-05-01">
        </div>
        <div class="col-md-6 mb-2">
          <label>Nombre del programa:</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-6 mb-2">
          <label>Responsable del programa:</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-6 mb-2">
          <label>Titular:</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-12 mb-2">
          <label>Actividades:</label>
          <textarea class="form-control" rows="3"></textarea>
        </div>
      </div>
    </div>
  
    <div class="card mt-3">
      <div class="card-header bg-primary text-white">TIPO DE PROGRAMA</div>
      <div class="card-body">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="tipoPrograma" id="adultos" value="adultos">
          <label class="form-check-label" for="adultos">Educación para adultos</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="tipoPrograma" id="comunidad" value="comunidad">
          <label class="form-check-label" for="comunidad">Desarrollo de comunidad</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="tipoPrograma" id="deportivas" value="deportivas">
          <label class="form-check-label" for="deportivas">Actividades deportivas</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="tipoPrograma" id="culturales" value="culturales">
          <label class="form-check-label" for="culturales">Actividades culturales</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="tipoPrograma" id="pronasol" value="pronasol">
          <label class="form-check-label" for="pronasol">PRONASOL</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="tipoPrograma" id="otros" value="otros">
          <label class="form-check-label" for="otros">Otros</label>
        </div>
      </div>
    </div>
  
    <div class="text-center mt-4 mb-5">
      <button class="btn btn-primary">REGISTRAR</button>
      <button class="btn btn-secondary">CANCELAR</button>
    </div>
  </div>
  

<!--Contenido-->
<div class="container mt-4" id="seccion-residencias" style="display: none;">
    <h5 class="text-center">SOLICITUD DE RESIDENCIAS PROFESIONALES</h5>
  
    <div class="card mt-3">
      <div class="card-header bg-primary text-white">DATOS PERSONALES</div>
      <div class="card-body row">
        <div class="col-md-6 mb-2">
          <label><strong>Nombre completo:</strong></label>
          <input type="text" class="form-control" value="ROSAS RODRIGUEZ MARCOS ALDAIR">
        </div>
        <div class="col-md-3 mb-2">
          <label><strong>Teléfono:</strong></label>
          <input type="text" class="form-control" value="5558620154">
        </div>
        <div class="col-md-3 mb-2">
          <label><strong>Sexo:</strong></label>
          <input type="text" class="form-control" value="Masculino">
        </div>
        <div class="col-md-6 mb-2">
          <label><strong>Domicilio:</strong></label>
          <input type="text" class="form-control" value="HERMENEGILDO GALIANA #18 SAN SALVADOR CUAUHTENCO CDMX">
        </div>
        <div class="col-md-3 mb-2">
          <label><strong>No. de Control:</strong></label>
          <input type="text" class="form-control" value="211070009">
        </div>
        <div class="col-md-3 mb-2">
          <label><strong>Matrícula:</strong></label>
          <input type="text" class="form-control" value="211070009">
        </div>
        <div class="col-md-3 mb-2">
          <label><strong>Periodo:</strong></label>
          <input type="text" class="form-control" value="ENERO-JUNIO/2025">
        </div>
        <div class="col-md-3 mb-2">
          <label><strong>Semestre:</strong></label>
          <input type="text" class="form-control" value="8">
        </div>
        <div class="col-md-6 mb-2">
          <label><strong>Carrera:</strong></label>
          <input type="text" class="form-control" value="INGENIERÍA EN SISTEMAS COMPUTACIONALES">
        </div>
      </div>
    </div>
  
    <div class="card mt-3">
      <div class="card-header bg-primary text-white">DATOS DEL PROYECTO</div>
      <div class="card-body row">
        <div class="col-md-6 mb-2">
          <label>Nombre del Proyecto:</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-12 mb-2">
          <label>Descripción del Proyecto:</label>
          <textarea class="form-control" rows="2"></textarea>
        </div>
        <div class="col-md-6 mb-2">
          <label>Área del Proyecto:</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-6 mb-2">
          <label>Área de Aplicación:</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-4 mb-2">
          <label>Periodo:</label>
          <input type="text" class="form-control" value="ENERO-JUNIO">
        </div>
        <div class="col-md-2 mb-2">
          <label>Año:</label>
          <input type="number" class="form-control" value="2025">
        </div>
        <div class="col-md-3 mb-2">
          <label>Horas requeridas:</label>
          <input type="number" class="form-control" value="500">
        </div>
        <div class="col-md-3 mb-2">
          <label>Actividades:</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-6 mb-2">
          <label>Fecha de Inicio:</label>
          <input type="date" class="form-control">
        </div>
        <div class="col-md-6 mb-2">
          <label>Fecha de Término:</label>
          <input type="date" class="form-control">
        </div>
      </div>
    </div>
  
    <div class="card mt-3">
      <div class="card-header bg-primary text-white">DATOS DE LA EMPRESA</div>
      <div class="card-body row">
        <div class="col-md-6 mb-2">
          <label>Nombre de la Empresa:</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-6 mb-2">
          <label>Dirección:</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-6 mb-2">
          <label>Asesor Interno:</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-6 mb-2">
          <label>Asesor Externo:</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-6 mb-2">
          <label>Responsable del Proyecto en la Empresa:</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-6 mb-2">
          <label>Tipo de Empresa:</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipoEmpresa" id="publica" value="Publica">
            <label class="form-check-label" for="publica">Pública</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipoEmpresa" id="privada" value="Privada">
            <label class="form-check-label" for="privada">Privada</label>
          </div>
        </div>
      </div>
    </div>
  
    <div class="text-center mt-4 mb-5">
      <button class="btn btn-primary">REGISTRAR</button>
      <button class="btn btn-secondary">CANCELAR</button>
    </div>
  </div>
  

<!--Contenido-->
<!-- Sección de Registro -->
<div id="seccion-registro" style="display: none;">
    <div class="row my-3">
      <!-- Semestre 1 -->
      <div class="col">
        <h5>Semestre 1</h5>
        <div class="btn btn-success w-100 my-1">ACF-0901 Fund. de Inv.</div>
        <div class="btn btn-success w-100 my-1">AED-1286 Fund. de Prog.</div>
      </div>
  
      <!-- Semestre 2 -->
      <div class="col">
        <h5>Semestre 2</h5>
        <div class="btn btn-success w-100 my-1">ACF-0902 Taller Ética</div>
        <div class="btn btn-success w-100 my-1">AED-1287 Estructuras Datos</div>
      </div>
  
      <!-- Semestre 3 -->
      <div class="col">
        <h5>Semestre 3</h5>
        <label class="btn btn-primary w-100 my-1">
          <input type="checkbox" class="materia" value="AED-1288 Sistemas Operativos" hidden> AED-1288 Sistemas Operativos
        </label>
        <label class="btn btn-primary w-100 my-1">
          <input type="checkbox" class="materia" value="AED-1289 Base de Datos" hidden> AED-1289 Base de Datos
        </label>
      </div>
  
      <!-- Semestre 4 -->
      <div class="col">
        <h5>Semestre 4</h5>
        <div class="btn btn-secondary w-100 my-1 disabled">AED-1290 Prog. Web</div>
        <div class="btn btn-secondary w-100 my-1 disabled">AED-1291 Redes</div>
      </div>
    </div>
  
    <button class="btn btn-primary my-2" onclick="generarHorario()">Generar Horario</button>
  
    <!-- Horario Generado -->
    <div class="card mt-3">
      <div class="card-header bg-primary text-white">
        Horario Generado
      </div>
      <div class="card-body" id="resultado">
        No hay materias seleccionadas.
      </div>
    </div>
  </div>
  
<!--Contenido-->
<!-- Sección de subida de documentos -->
<div id="seccion-documentos" style="display: none;" class="mt-4">
    <h4>Sube tus documentos</h4>
    <form id="formularioArchivos" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label">Boleta de calificaciones (PDF)</label>
        <input type="file" name="boleta" accept="application/pdf" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Comprobante de domicilio (PDF)</label>
        <input type="file" name="domicilio" accept="application/pdf" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Vigencia del seguro (PDF)</label>
        <input type="file" name="seguro" accept="application/pdf" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Factura de reinscripción (PDF)</label>
        <input type="file" name="factura" accept="application/pdf" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-success">Enviar Documentos</button>
    </form>
  </div>
  
<!--Contenido evaluacion-->
<!-- Sección de evaluación oculta al principio -->
<div class="container mt-4" id="seccion-evaluacion" style="display: none;">
    <div style="margin-top: 20px;">
        <div style="background-color: #173B71; color: white; padding: 10px; text-align: center; border-radius: 5px 5px 0 0;">
            <strong>Evaluación Docente</strong>
        </div>
        <div style="text-align: center; margin: 10px 0;">
            Profesor: <strong>Mtro. López</strong> | Materia: <strong>Programación Web</strong>
        </div>
        <table border="1" style="width: 100%; border-collapse: collapse; text-align: center;">
            <thead style="background-color: #cce0ff;">
                <tr>
                    <th>Criterio</th>
                    <th>Bueno</th>
                    <th>Regular</th>
                    <th>Malo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Explica claramente los temas</td>
                    <td><input type="radio" name="p1" value="bueno"></td>
                    <td><input type="radio" name="p1" value="regular"></td>
                    <td><input type="radio" name="p1" value="malo"></td>
                </tr>
                <tr>
                    <td>Resuelve dudas oportunamente</td>
                    <td><input type="radio" name="p2" value="bueno"></td>
                    <td><input type="radio" name="p2" value="regular"></td>
                    <td><input type="radio" name="p2" value="malo"></td>
                </tr>
                <tr>
                    <td>Es puntual y cumple con las clases</td>
                    <td><input type="radio" name="p3" value="bueno"></td>
                    <td><input type="radio" name="p3" value="regular"></td>
                    <td><input type="radio" name="p3" value="malo"></td>
                </tr>
            </tbody>
        </table>
        <div style="text-align: center; margin-top: 15px;">
            <button class="btn btn-primary">Enviar Evaluación</button>
        </div>
    </div>
</div>

  <!--Contenido Talleres-->
  <div id="seccion-talleres" style="display: none; margin-top: 20px;">
    <video autoplay muted loop width="1150" height="300" controls>
      <source src="../assets/video/tecnm.mp4">
    </video>
  
    <!-- Título de sección -->
    <h5 class="text-center my-4">TALLERES 2025 Enero-Junio</h5>
  
    <!-- Categorías -->
    <div class="row text-center mb-3">
      <div class="col">Deportivo</div>
      <div class="col">Cultural</div>
      <div class="col">Cívico</div>
      <div class="col"><a href="https://mooc.tecnm.mx/" target="_blank">Moocs</a></div>
    </div>
  
    <!-- Talleres -->
    <div class="row text-center">
      <div class="col">
        <a href="link_dE_taller.html">
          <img src="../assets/imagenes/deportivo.PNG" alt="Taller deportivo" class="img-thumb mb-2">
          <p>Lunes - Viernes<br>8:00 - 9:00<br>Fernando Villa<br>Salón 5-95</p>
        </a>
      </div>
      <div class="col">
        <a href="javascript:void(0);" class="btn btn-light btn-menu" onclick="mostrarTaller()">Taller Deportivo</a>
          <img src="../assets/imagenes/cultural.PNG" alt="Taller cultural" class="img-thumb mb-2">
          <p>Lunes - Viernes<br>8:00 - 9:00<br>Fernando Villa<br>Salón 5-95</p>
        </a>
      </div>
      <div class="col">
        <a href="link_dE_taller.html">
          <img src="../assets/imagenes/civico.PNG" alt="Taller cívico" class="img-thumb mb-2">
          <p>Lunes - Viernes<br>8:00 - 9:00<br>Fernando Villa<br>Salón 5-95</p>
        </a>
      </div>
    </div>
  </div>

      <!--Contenido-->
<!-- Contenido oculto al inicio -->
  
<div id="seccion-centro" style="display: none; margin-top: 20px;">
    <div style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap;">
      <div class="text-center my-3 nav-btns d-flex justify-content-center gap-2">
        <button class="btn btn-light btn-menu" onclick="mostrarSeccion('becas')">Becas</button>
        <button class="btn btn-light btn-menu" onclick="mostrarSeccion('talleres')">Talleres</button>
        
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Inglés</button>
          <ul class="dropdown-menu">
            <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('boleta-ingles')">Boleta</a></li>
            <li><a class="btn btn-light btn-menu" onclick="mostrarSeccion('registro-ingles')">Registrarse</a></li>
          </ul>
        </div>
      </div>
      
      <video autoplay muted loop width="1150" height="300" controls>
    <source src="{{ asset('assets/video/tecnm.mp4') }}" type="video/mp4">
    </video>

  
      <!-- Sección 1 -->
      <div class="row my-4 align-items-center">
        <div class="col-md-3">
          <img src="../assets/imagenes/t.png" alt="Imagen" class="img-thumb" />
        </div>
        <div class="col-md-9">
          <div class="info-card">
            <h3><a href="https://www.tecnm.mx/reglamentos.html" target="_blank" style="color: white; text-decoration: underline;">
              Reglamento del Tecnológico Nacional de México
            </a></h3>
            <p>El reglamento del TecNM establece normas para fomentar una formación académica integral...</p>
          </div>
        </div>
      </div>
  
      <!-- Sección 2 -->
      <div class="row my-4 align-items-center">
        <div class="col-md-3">
          <img src="../assets/imagenes/tec.PNG" alt="Imagen" class="img-thumb" />
        </div>
        <div class="col-md-9">
          <div class="info-card">
            <h3><a href="https://www.tecnm.mx/bibliotecas.html" target="_blank" style="color: white; text-decoration: underline;">
              Bibliotecas y la Importancia de la Lectura
            </a></h3>
            <p>Las bibliotecas del TecNM ofrecen acceso a recursos académicos esenciales para el aprendizaje...</p>
          </div>
        </div>
      </div>
    </div>
  </div>
        

          
  
<!--Contenido becas-->
<div id="seccion-becas" style="display: none; margin-top: 20px;">
    <div style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap;">
      <!-- Video -->
   <video autoplay muted loop width="1150" height="300" controls>
    <source src="{{ asset('assets/video/tecnm.mp4') }}" type="video/mp4">
    </video>

    <!-- Sección 1 -->
    
    <div class="row my-4 align-items-center">
        <div class="col-md-3">
          <img src="../assets/imagenes/jovenes.jpg" alt="Imagen" class="img-thumb" />
        </div>
        <div class="col-md-9">
          <div class="info-card">
            <h5>Beca Jóvenes Escribiendo el Futuro</h5>
            <p>
              Dirigida a estudiantes de escasos recursos económicos inscritos en instituciones públicas de educación superior. 
              Monto: $2,400 pesos mensuales. 
              Fecha: Inscripciones abiertas en el ciclo escolar correspondiente.
              <br><br>
              Más detalles: 
              <a href="https://misantla.tecnm.mx/becas.html?utm_source=chatgpt.com">Jóvenes Escribiendo el Futuro</a>
            </p>
          </div>
        </div>
      </div>
      
    <!-- Sección 2 -->
    <div class="row my-4 align-items-center">
        <div class="col-md-3">
          <img src="../assets/imagenes/excelencia.png" alt="Imagen" class="img-thumb" />
        </div>
        <div class="col-md-9">
          <div class="info-card">
            <h5>Beca de Excelencia</h5>
            <p>
              Reconoce a estudiantes con un desempeño académico sobresaliente. 
              Monto: $7,500 pesos en una sola exhibición. 
              Fecha: Convocatoria anual.
              <br><br>
              Más detalles: 
              <a href="https://sitio.tecnm.mx/academicas/programa-de-becas-para-estudiantes-de-educacion-superior?utm_source=chatgpt.com">Beca de Excelencia</a>
            </p>
          </div>
        </div>
      </div>
      
     <!-- Sección 3 -->
     <div class="row my-4 align-items-center">
        <div class="col-md-3">
          <img src="../assets/imagenes/vinculacion.png" alt="Imagen" class="img-thumb" />
        </div>
        <div class="col-md-9">
          <div class="info-card">
            <h5>Beca de Vinculación</h5>
            <p>
              Apoya a estudiantes en la realización de estadías, prácticas o residencias profesionales. 
              Monto: $9,000 pesos en una sola exhibición. 
              Fecha: Consultar convocatoria.
              <br><br>
              Más detalles: 
              <a href="https://sitio.tecnm.mx/academicas/programa-de-becas-para-estudiantes-de-educacion-superior?utm_source=chatgpt.com">Beca de Vinculación</a>
            </p>
          </div>
        </div>
      </div>
      

      <!-- Sección 4 -->

      <div class="row my-4 align-items-center">
        <div class="col-md-3">
          <img src="../assets/imagenes/social.jpg" alt="Imagen" class="img-thumb" />
        </div>
        <div class="col-md-9">
          <div class="info-card">
            <h5>Beca de Servicio Social</h5>
            <p>
              Dirigida a estudiantes que realizan su servicio social. 
              Monto: $9,000 pesos en una sola exhibición. 
              Fecha: Consultar convocatoria.
              <br><br>
              Más detalles: 
              <a href="https://sitio.tecnm.mx/academicas/programa-de-becas-para-estudiantes-de-educacion-superior?utm_source=chatgpt.com">Beca de Servicio Social</a>
            </p>
          </div>
        </div>
      </div>
      

       <!-- Sección 5 -->
       <div class="row my-4 align-items-center">
        <div class="col-md-3">
          <img src="../assets/imagenes/titulacion.png" alt="Imagen" class="img-thumb" />
        </div>
        <div class="col-md-9">
          <div class="info-card">
            <h5>Beca de Titulación</h5>
            <p>
              Apoya a estudiantes que han concluido sus estudios y desean titularse mediante tesis profesional u otro método de titulación. 
              Monto: $9,000 pesos en una sola exhibición. 
              Fecha: Consultar convocatoria.
              <br><br>
              Más detalles: 
              <a href="https://sitio.tecnm.mx/academicas/programa-de-becas-para-estudiantes-de-educacion-superior?utm_source=chatgpt.com">Beca de Titulación</a>
            </p>
          </div>
        </div>
      </div>
      


        <!-- Sección 6 -->
        <div class="row my-4 align-items-center">
            <div class="col-md-3">
              <img src="../assets/imagenes/movilidad.png" alt="Imagen" class="img-thumb" />
            </div>
            <div class="col-md-9">
              <div class="info-card">
                <h5>Beca de Movilidad</h5>
                <p>
                  Patrocina la internacionalización de la educación superior. 
                  Monto: Varía dependiendo del programa. 
                  Fecha: Consultar convocatoria.
                  <br><br>
                  Más detalles: 
                  <a href="https://sitio.tecnm.mx/academicas/programa-de-becas-para-estudiantes-de-educacion-superior?utm_source=chatgpt.com">Beca de Movilidad</a>
                </p>
              </div>
            </div>
          </div>
          

         <!-- Sección 7 -->
         <div class="row my-4 align-items-center">
            <div class="col-md-3">
              <img src="../assets/imagenes/superacion.jpg" alt="Imagen" class="img-thumb" />
            </div>
            <div class="col-md-9">
              <div class="info-card">
                <h5>Beca de Superación Profesional</h5>
                <p>
                  Para alumnos egresados que no pudieron acceder a un examen de ingreso al servicio docente. 
                  Monto: $7,500 pesos en una sola exhibición. 
                  Fecha: Consultar convocatoria.
                  <br><br>
                  Más detalles: 
                  <a href="https://sitio.tecnm.mx/academicas/programa-de-becas-para-estudiantes-de-educacion-superior?utm_source=chatgpt.com">Beca de Superación Profesional</a>
                </p>
              </div>
            </div>
          </div>
          
    </div>
  </div>

<!--Contenido-->

<div id="seccion-boleta-ingles" style="display: none; margin-top: 20px;">
    <!-- Video -->
    <div class="container mb-4">
        <video autoplay muted loop width="1150" height="300" controls>
    <source src="{{ asset('assets/video/tecnm.mp4') }}" type="video/mp4">
    </video>
    </div>
  
    <!-- Buscar boleta y vista previa -->
    <div class="container mt-4">
      <div class="row">
        <!-- Cuadro azul -->
        <div class="col-md-6">
          <div class="cuadro-azul p-3">
            <h5>Selecciona la boleta de calificaciones</h5>
            <select id="boletaSelect" class="form-control mt-3" onchange="mostrarBoleta()">
              <option value="">-- Selecciona un nivel --</option>
              <optgroup label="Básico">
                <option value="basico1.pdf">Básico 1</option>
                <option value="basico2.pdf">Básico 2</option>
                <option value="basico3.pdf">Básico 3</option>
                <option value="basico4.pdf">Básico 4</option>
                <option value="basico5.pdf">Básico 5</option>
              </optgroup>
              <optgroup label="Intermedio">
                <option value="intermedio1.pdf">Intermedio 1</option>
                <option value="intermedio2.pdf">Intermedio 2</option>
                <option value="intermedio3.pdf">Intermedio 3</option>
                <option value="intermedio4.pdf">Intermedio 4</option>
                <option value="intermedio5.pdf">Intermedio 5</option>
              </optgroup>
            </select>
          </div>
        </div>
  
        <!-- Vista previa PDF -->
        <div class="col-md-6">
          <div id="pdfPreview" class="vista-pdf">
            <p class="text-muted">Aquí se mostrará la boleta seleccionada.</p>
            <embed id="pdfViewer" type="application/pdf" width="100%" height="400px" style="display: none;">
            <a id="pdfDownload" class="btn btn-outline-primary mt-2" style="display: none;" download>Descargar boleta</a>
          </div>
        </div>
      </div>
    </div></div>
<!--Contenido-->
<!-- Sección de Registro -->
<div id="seccion-registro-ingles" style="display: none; margin-top: 20px;">
    <!-- Video simulado -->
       <video autoplay muted loop width="1150" height="300" controls>
    <source src="{{ asset('assets/video/tecnm.mp4') }}" type="video/mp4">
    </video>
  
    <!-- Título -->
    <h5 class="text-center mb-4">INGLES</h5>
  
    <!-- Taller + Formulario -->
    <div class="row">
      <!-- Imagen y descripción -->
      <div class="col-md-4 text-center">
        <h6>Inscripción Ingles</h6>
        <img src="../assets/imagenes/ingles.PNG" class="img-fluid mb-2" alt="Taller deportivo">
        <p>
          <!-- Puedes agregar una descripción si lo deseas -->
        </p>
      </div>
  
      <!-- Formulario -->
      <div class="col-md-8">
        <form enctype="multipart/form-data">
          <div class="row mb-2">
            <div class="col-md-4">Nombre(s)</div>
            <div class="col-md-8"><input type="text" class="form-control"></div>
          </div>
          <div class="row mb-2">
            <div class="col-md-4">Apellido Materno</div>
            <div class="col-md-8"><input type="text" class="form-control"></div>
          </div>
          <div class="row mb-2">
            <div class="col-md-4">Apellido Paterno</div>
            <div class="col-md-8"><input type="text" class="form-control"></div>
          </div>
          <div class="row mb-2">
            <div class="col-md-4">Correo Institucional</div>
            <div class="col-md-8"><input type="email" class="form-control"></div>
          </div>
          <div class="row mb-2">
            <div class="col-md-4">Número de Control</div>
            <div class="col-md-8"><input type="text" class="form-control"></div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4">Semestre</div>
            <div class="col-md-8">
              <select class="form-control">
                <option value="">Seleccione un semestre</option>
                <option value="1">1° semestre</option>
                <option value="2">2° semestre</option>
                <option value="3">3° semestre</option>
                <option value="4">4° semestre</option>
                <option value="5">5° semestre</option>
                <option value="6">6° semestre</option>
                <option value="7">7° semestre</option>
                <option value="8">8° semestre</option>
                <option value="9">9° semestre</option>
                <option value="10">10° semestre</option>
                <option value="11">11° semestre</option>
                <option value="12">12° semestre</option>
                <option value="13">13° semestre</option>
              </select>
            </div>
          </div>
  
          <!-- Nuevo campo: Nivel de inglés -->
          <div class="row mb-3">
            <div class="col-md-4">Nivel de Inglés</div>
            <div class="col-md-8">
              <select class="form-control">
                <option value="">Seleccione nivel</option>
                <optgroup label="Básico">
                  <option value="basico1">Básico 1</option>
                  <option value="basico2">Básico 2</option>
                  <option value="basico3">Básico 3</option>
                  <option value="basico4">Básico 4</option>
                  <option value="basico5">Básico 5</option>
                </optgroup>
                <optgroup label="Intermedio">
                  <option value="intermedio1">Intermedio 1</option>
                  <option value="intermedio2">Intermedio 2</option>
                  <option value="intermedio3">Intermedio 3</option>
                  <option value="intermedio4">Intermedio 4</option>
                  <option value="intermedio5">Intermedio 5</option>
                </optgroup>
              </select>
            </div>
          </div>
  
          <!-- Nuevo campo: Subir boleta -->
          <div class="row mb-3">
            <div class="col-md-4">Sube tu boleta de calificaciones (PDF)</div>
            <div class="col-md-8">
              <input type="file" class="form-control" accept="application/pdf">
            </div>
          </div>
  
          <div class="text-end">
            <button type="submit" class="btn btn-primary">Registrarse</button>
          </div>
        </form>
      </div>
    </div>
  
    <!-- Aviso -->
    <div class="alert alert-secondary mt-4 text-center" role="alert">
      <strong>¡AVISO!</strong><br>
      ¡Se recomienda realizar los ingles a partir de 5to semestre!
    </div>
  </div>

<!--Contenido taller-->

<div id="contenido-taller" style="display:none;">
    <!-- Título -->
    <h5 class="text-center mb-4">TALLERES 2025 Enero-Junio</h5>
  
    <!-- Taller + Formulario -->
    <div class="row">
      <!-- Imagen y descripción -->
      <div class="col-md-4 text-center">
        <h6>Deportivo</h6>
        <img src="../assets/imagenes/cultural.PNG" class="img-fluid mb-2" alt="Taller deportivo">
        <p>
          Lunes - Viernes<br>
          8:00 - 9:00<br>
          Fernando Villa<br>
          Salón 5-95
        </p>
      </div>
  
      <!-- Formulario -->
      <div class="col-md-8">
        <form>
          <div class="row mb-2">
            <div class="col-md-4">Nombre(s)</div>
            <div class="col-md-8"><input type="text" class="form-control"></div>
          </div>
          <div class="row mb-2">
            <div class="col-md-4">Apellido Materno</div>
            <div class="col-md-8"><input type="text" class="form-control"></div>
          </div>
          <div class="row mb-2">
            <div class="col-md-4">Apellido Paterno</div>
            <div class="col-md-8"><input type="text" class="form-control"></div>
          </div>
          <div class="row mb-2">
            <div class="col-md-4">Correo Institucional</div>
            <div class="col-md-8"><input type="email" class="form-control"></div>
          </div>
          <div class="row mb-2">
            <div class="col-md-4">Número de Control</div>
            <div class="col-md-8"><input type="text" class="form-control"></div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4">Semestre</div>
            <div class="col-md-8">
              <select class="form-control">
                <option value="">Seleccione un semestre</option>
                <option value="1">1° semestre</option>
                <option value="2">2° semestre</option>
                <option value="3">3° semestre</option>
                <option value="4">4° semestre</option>
                <option value="5">5° semestre</option>
                <option value="6">6° semestre</option>
                <option value="7">7° semestre</option>
                <option value="8">8° semestre</option>
                <option value="9">9° semestre</option>
                <option value="10">10° semestre</option>
                <option value="11">11° semestre</option>
                <option value="12">12° semestre</option>
                <option value="13">13° semestre</option>
              </select>
            </div>
          </div>
          
          <div class="text-end">
            <button type="submit" class="btn btn-primary">Registrarse</button>
          </div>
        </form>
      </div>
    </div>
  
    <!-- Aviso -->
    <div class="alert alert-secondary mt-4 text-center" role="alert">
      <strong>¡AVISO!</strong><br>
      ¡Se recomienda realizar los talleres a partir de 5to semestre, verificar la disponibilidad del horario de sus materias posteriormente una vez concluido el taller realizar 2 Moocs!
    </div>
  </div>
  


@endsection
<script src="{{ asset('alumno.js') }}"></script> 