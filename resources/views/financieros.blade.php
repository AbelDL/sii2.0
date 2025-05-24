
@extends('layout')

@section('title', 'Panel Alumno')

@section('content')
 <div class="container nav-buttons mt-3">
  <div class="d-flex justify-content-center flex-wrap gap-3">
    <div><button class="btn btn-light" onclick="mostrarSeccion('recibo')">Generar Recibo</button></div>
    <div><button class="btn btn-light" onclick="mostrarSeccion('notificacion')">Notificación de Adeudo</button></div>
    <div><button class="btn btn-light" onclick="mostrarSeccion('alumnos-section')">Alumnos</button></div>
    <div><button class="btn btn-light" onclick="mostrarSeccion('pag')">Generar pago</button></div>
  </div>
</div>

<!-- Recibo -->
<div id="recibo" class="mt-4" style="display: none;">
  <h2 class="text-center mb-4">Generar Recibo Escolar</h2>
  <div class="card p-4 mb-4">
    <div class="row mb-2">
      <div class="col">
        <label>Nombre del Estudiante:</label>
        <input type="text" id="nombre" class="form-control" required>
      </div>
      <div class="col">
        <label>Concepto:</label>
        <input type="text" id="concepto" class="form-control" required>
      </div>
      <div class="col">
        <label>Monto:</label>
        <input type="number" id="monto" class="form-control" required>
      </div>
    </div>
    <button class="btn btn-primary mt-3" onclick="generarRecibo('gene')">Generar Recibo</button>
  </div>

  <div id="gene" class="card p-4 d-none">
    <h4 class="text-center mb-3">Recibo Oficial - ITMA</h4>
    <hr>
    <p><strong>Nombre del Estudiante:</strong> <span id="recibo-nombre"></span></p>
    <p><strong>Concepto:</strong> <span id="recibo-concepto"></span></p>
    <p><strong>Monto:</strong> $<span id="recibo-monto"></span> MXN</p>
    <p><strong>Fecha:</strong> <span id="recibo-fecha"></span></p>
    <hr>
    <p class="text-end"><em>Firma del Responsable</em></p>
    <button class="btn btn-success mt-3" onclick="window.print()">Imprimir Recibo</button>
    <div class="col mt-3">
      <label>Correo electrónico:</label>
      <input type="email" id="correo" class="form-control" required>
      <button class="btn btn-info mt-3" onclick="enviarCorreo()">Enviar por Correo</button>
    </div>
  </div>
</div>

<!-- Notificación -->
<div id="notificacion" class="mt-4" style="display: none;">
  <div class="info"><strong>Control:</strong> 211070009 &nbsp;&nbsp; <strong>Carrera:</strong> ISC &nbsp;&nbsp; <strong>Concepto:</strong> Reinscripción 2021</div>
  <div class="info">Rosas Rodríguez Marcos Aldair</div>
  <div class="info">Monto: $XXXX.XX</div>
  <div class="info">Alumno usted tiene un adeudo de Reinscripción</div>
  <div class="email-section mt-3">
    <input type="email" id="correoNotificacion" value="l21107@milpaalta.tecnm.mx" class="form-control">
    <button class="btn btn-primary mt-2" onclick="enviarCorreoNotificacion()">Enviar</button>
  </div>
</div>

<!-- Alumnos -->
<div id="alumnos-section" class="mt-4" style="display: none;">
  <div class="card p-4 mb-4 shadow">
    <h4 class="mb-4 text-center">Consulta de Alumno</h4>
    <div class="form-group row">
      <label for="buscarId" class="col-sm-3 col-form-label">Buscar Alumno / ID:</label>
      <div class="col-sm-6">
        <input type="text" id="buscarId" class="form-control" placeholder="Ej. 211070009">
      </div>
      <div class="col-sm-3">
        <button class="btn btn-primary btn-block" onclick="buscarAlumno()">Buscar</button>
      </div>
    </div>

    <div id="infoAlumno" class="mt-4" style="display: none;">
      <h5 class="mb-3">Información del Alumno</h5>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label><strong>Nombre(s):</strong></label>
          <input type="text" class="form-control" id="nombre" disabled>
        </div>
        <div class="col-md-6 mb-3">
          <label><strong>Apellido Paterno:</strong></label>
          <input type="text" class="form-control" id="apellidoP" disabled>
        </div>
        <div class="col-md-6 mb-3">
          <label><strong>Apellido Materno:</strong></label>
          <input type="text" class="form-control" id="apellidoM" disabled>
        </div>
        <div class="col-md-6 mb-3">
          <label><strong>Número de Control:</strong></label>
          <input type="text" class="form-control" id="numControl" disabled>
        </div>
        <div class="col-md-6 mb-3">
          <label><strong>Teléfono:</strong></label>
          <input type="text" class="form-control" id="telefono" disabled>
        </div>
        <div class="col-md-6 mb-3">
          <label><strong>Dirección:</strong></label>
          <input type="text" class="form-control" id="direccion" disabled>
        </div>
        <div class="col-md-6 mb-3">
          <label><strong>NSS:</strong></label>
          <input type="text" class="form-control" id="nss" disabled>
        </div>
        <div class="col-md-6 mb-3">
          <label><strong>Fecha de Inscripción:</strong></label>
          <input type="text" class="form-control" id="fechaInscripcion" disabled>
        </div>
        <div class="col-md-6 mb-3">
          <label><strong>Adeudo:</strong></label>
          <input type="text" class="form-control" id="adeudo" disabled>
        </div>
        <div class="col-md-6 mb-3">
          <label><strong>Fecha de Registro:</strong></label>
          <input type="text" class="form-control" id="fechaRegistro" disabled>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Pago -->
<div id="pag" class="mt-4" style="display: none;">
  <h4 class="mb-4 text-center">Generar Línea de Captura</h4>
  <div class="card p-4 shadow">
    <div class="row mb-3">
      <div class="col-md-6">
        <label>Nombre:</label>
        <input type="text" id="nombrePago" class="form-control">
      </div>
      <div class="col-md-6">
        <label>Número de Control:</label>
        <input type="text" id="controlPago" class="form-control">
      </div>
      <div class="col-md-6">
        <label>Carrera:</label>
        <input type="text" id="carreraPago" class="form-control">
      </div>
      <div class="col-md-6">
        <label>Concepto:</label>
        <input type="text" id="conceptoPago" class="form-control">
      </div>
      <div class="col-md-6">
        <label>Monto:</label>
        <input type="number" id="montoPago" class="form-control">
      </div>
      <div class="col-md-6">
        <label>Fecha:</label>
        <input type="date" id="fechaPago" class="form-control">
      </div>
      <div class="col-md-6">
        <label>Correo:</label>
        <input type="email" id="correoPago" class="form-control">
      </div>
    </div>
    <button class="btn btn-success mt-2" onclick="generarPago()">Generar Línea de Captura</button>

    <div id="resultadoPago" class="mt-4" style="display: none;">
      <p><strong>Clave Generada:</strong> <span id="lineaCaptura"></span></p>
      <p><strong>Enviada a:</strong> <span id="correoConfirmado"></span></p>
    </div>
  </div>
</div>
@endsection
@section('scripts')

<script src="{{ asset('recibo.js') }}"></script>