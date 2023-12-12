<?php

namespace Model;


class Cita extends ActiveRecord{
    //Base de datos
    protected static $tabla = 'citas';
    protected static $columnasDB = ['id', 'fecha', 'hora', 'usuarioId'];

    public $id;
    public $fecha;
    public $hora;
    public $usuarioId;

    public function __construct($arg = []){

        $this->id = $arg['id'] ?? null;
        $this->fecha = $arg['fecha'] ?? '';
        $this->hora = $arg['hora'] ?? '';
        $this->usuarioId = $arg['usuarioId'] ?? '';
    }
}