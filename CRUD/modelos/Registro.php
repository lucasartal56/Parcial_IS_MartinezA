
<?php
require './Conexion.php';
class Registro extends Conexion{
    public $persona_id;
    public $persona_nombre;
    public $persona_apellido;
    public $persona_procedencia;
    public $persona_entrada;
    public $persona_salida;
    public $persona_razon;



    public function __construct($args = [])
    {
        $this->persona_id = $args['persona_id'] ?? null;
        $this->persona_nombre = $args['persona_nombre'] ?? '';
        $this->persona_apellido = $args['persona_apellido'] ?? '';
        $this->persona_procedencia = $args['persona_procedencia'] ?? '';
        $this->persona_entrada = $args['persona_entrada'] ?? date();
        $this->persona_salida = $args['persona_salida'] ?? date();
        $this->persona_razon = $args['persona_razon'] ?? '';
    }

}