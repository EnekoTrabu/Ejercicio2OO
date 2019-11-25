<?php

namespace NsDanza;

class Actividad
{

    private $id;
    private $descripcion;
    private $fecha;
    private $lugar;

    public function __construct($id, $descripcion, $fecha, $lugar)
    {
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->fecha = $fecha;
        $this->lugar = $lugar;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * Get the value of fecha
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * Get the value of lugar
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set the value of lugar
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;
    }

    public function mostrar()
    {
        echo "La actividad " . $this->descripcion . " se realizará en: " . $this->lugar . " el: " . $this->fecha;
    }
}

class Baile extends Actividad
{

    private static $profesor;
    private $claseHora;

    public function __construct($id, $descripcion, $fecha, $lugar, $profesor, $claseHora)
    {
        $this::$profesor = $profesor;
        $this->claseHora = $claseHora;
        parent::__construct($id, $descripcion, $fecha, $lugar);
    }

    /**
     * Get the value of profesor
     */ 
    public function getProfesor()
    {
        return $this->profesor;
    }

    /**
     * Set the value of profesor
     */ 
    public function setProfesor($profesor)
    {
        $this->profesor = $profesor;
    }

    /**
     * Get the value of claseHora
     */ 
    public function getClaseHora()
    {
        return $this->claseHora;
    }

    /**
     * Set the value of claseHora
     */ 
    public function setClaseHora($claseHora)
    {
        $this->claseHora = $claseHora;
    }

    public function mostrar()
    {
        parent::mostrar();
        echo " y la realiza " . $this::$profesor . " que cobra la hora " . $this->claseHora . "€";
    }
}
