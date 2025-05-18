@extends('layout')

@section('title', 'Panel Alumno')

@section('content')


<div class="nav-buttons mb-4">
<div class="d-flex justify-content-center flex-wrap gap-3">
    <button class="btn" onclick="mostrarSeccion('formulario')">Registro</button>
    <button class="btn" onclick="mostrarSeccion('historial')">Historial Académico</button>
    <button class="btn" onclick="mostrarSeccion('tabs')">Trámites</button>
  </div>
  </div>


<!-- Sección de formulario (oculto por defecto) -->
<div id="formulario" style="display: none;">
  <form action="#" method="POST" class="container mt-4 text-start">
    @csrf
    <div class="mb-3">
      <label for="tipoPersona" class="form-label">Tipo de persona</label>
      <select class="form-select" id="tipoPersona" name="tipoPersona" onchange="actualizarOpciones()" required>
        <option selected disabled>Selecciona...</option>
        <option value="alumno">Alumno</option>
        <option value="docente">Docente</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre completo</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>

    <div class="mb-3">
      <label for="matricula" class="form-label">Matrícula o ID</label>
      <input type="text" class="form-control" id="matricula" name="matricula" required>
    </div>

    <div class="mb-3">
      <label for="carrera" class="form-label">Carrera o Departamento</label>
      <select class="form-select" id="carrera" name="carrera" required>
        <option selected disabled>Selecciona un tipo de persona primero</option>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Documentos entregados:</label><br>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="documentos[]" value="Certificado médico" id="doc1">
        <label class="form-check-label" for="doc1">Certificado médico</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="documentos[]" value="Comprobante de domicilio" id="doc2">
        <label class="form-check-label" for="doc2">Comprobante de domicilio</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="documentos[]" value="Seguro" id="doc3">
        <label class="form-check-label" for="doc3">Seguro</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="documentos[]" value="CURP" id="doc4">
        <label class="form-check-label" for="doc4">CURP</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="documentos[]" value="Otro" id="doc5">
        <label class="form-check-label" for="doc5">Otro</label>
      </div>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Enviar registro</button>
  </form>
</div>
<!-- Historial academico -->
 <div id="historial" style="display: none;">
        <h3 class="mb-4">Consulta de Historial</h3>
        <form onsubmit="mostrarHistorial(event)">
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Tipo de persona</label>
            <div class="col-sm-9">
              <select class="form-select" id="tipo_persona_historial" required>
                <option value="">Selecciona...</option>
                <option value="alumno">Alumno</option>
                <option value="docente">Docente</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Matrícula / ID</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="id_persona" required>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
        <hr>
        <div id="resultado" class="mt-4"></div>
      </div>
  <!-- Tramites-->
  <div id="tabs" style="display: none;">
    <ul class="nav nav-tabs" id="menuTabs" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#residencias" type="button">Residencias</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#servicio" type="button">Servicio Social</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#vinculacion" type="button">Vinculación</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#liberaciones" type="button">Liberaciones</button>
      </li>
    </ul>
  
    <div class="tab-content mt-4">
      <!-- Residencias -->
      <div class="tab-pane fade show active" id="residencias" role="tabpanel">
        <h4>Gestión de Residencias Profesionales</h4>
        <ul class="list-group">
          <li class="list-group-item bg-light"><i class="fas fa-file-alt"></i> 📄 Revisión de Anteproyectos</li>
          <li class="list-group-item"><i class="fas fa-chalkboard-teacher"></i> 👨‍🏫 Asignación de Asesores Internos</li>
          <li class="list-group-item"><i class="fas fa-pen"></i> 📝 Validación de Reportes Finales</li>
          <li class="list-group-item"><i class="fas fa-certificate"></i> 📃 Emisión de Cartas de Aceptación o Terminación</li>
        </ul>
        <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#nuevoAnteproyectoModal">Nuevo Anteproyecto</button>
      </div>
  
      <!-- Servicio Social -->
      <div class="tab-pane fade" id="servicio" role="tabpanel">
        <h4>Servicio Social</h4>
        <ul class="list-group">
          <li class="list-group-item">📌 Registro de proyectos</li>
          <li class="list-group-item">📆 Asignación de fechas</li>
          <li class="list-group-item">✅ Validación de actividades</li>
        </ul>
      </div>
  
      <!-- Vinculación -->
      <div class="tab-pane fade" id="vinculacion" role="tabpanel">
        <h4>Vinculación</h4>
        <ul class="list-group">
          <li class="list-group-item">🤝 Convenios con Empresas</li>
          <li class="list-group-item">📢 Difusión de Oportunidades</li>
          <li class="list-group-item">💼 Seguimiento a Egresados</li>
        </ul>
      </div>
  
      <!-- Liberaciones -->
      <div class="tab-pane fade" id="liberaciones" role="tabpanel">
        <h4>Liberaciones</h4>
        <ul class="list-group">
          <li class="list-group-item">🗂 Recepción de Documentación</li>
          <li class="list-group-item">📑 Verificación de Cumplimiento</li>
          <li class="list-group-item">🏁 Liberación Oficial</li>
        </ul>
      </div>
    </div>
  </div>
  


@endsection
<script src="{{ asset('profesionales.js') }}"></script> 

