<?php
/**
 * User: salvador
 * Date: 6/6/14
 * Time: 10:47 AM
 */

class Validador
{
    protected $manejadorErrores;
    public function __construct(ManejadorErrores $manejadorErrores)
    {
        $this->manejadorErrores = $manejadorErrores;
    }

    public function check($items, $reglas)
    {
        foreach($items as $item => $valor)
        {
            echo $item . ' ' . $valor;
        }
    }
}