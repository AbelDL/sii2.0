<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    public function reporteGeneral()
    {
        $datos = DB::select("
            SELECT
                u.id AS id_usuario,
                u.nombre AS nombre_usuario,
                u.ap_pat,
                u.ap_mat,
                g.id AS id_grupo,
                g.nombre AS nombre_grupo,
                h.id AS id_horario,
                ho.hora AS rango_hora,
                m.nombre AS materia
            FROM usuario u
            JOIN grupo_usuario gu ON u.id = gu.id_usuario
            JOIN grupo g ON gu.id_grupo = g.id
            JOIN grupo_horario gh ON g.id = gh.id_grupo
            JOIN horario h ON gh.id_horario = h.id
            JOIN hora ho ON h.id_hora = ho.id
            JOIN materia m ON h.id_materia = m.id
            ORDER BY g.id, ho.hora
        ");

        return view('reportes.general', ['datos' => $datos]);
    }
}
