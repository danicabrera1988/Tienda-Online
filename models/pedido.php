<?php

class Pedido{

    private $id;
    private $usuario_id;
    private $provincia;
    private $localidad;
    private $direccion;
    private $coste;
    private $estado;
    private $fecha;
    private $hora;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUsuario_id()
    {
        return $this->usuario_id;
    }
    public function setUsuario_id($usuario_id)
    {
        $this->usuario_id = $usuario_id;
    }

    public function getProvincia()
    {
        return $this->provincia;
    }
    public function setProvincia($provincia)
    {
        $this->provincia = $this->db->real_escape_string($provincia);
    }

    public function getLocalidad()
    {
        return $this->localidad;
    }
    public function setLocalidad($localidad)
    {
        $this->localidad = $this->db->real_escape_string($localidad);
    }

    public function getDireccion()
    {
        return $this->direccion;
    }
    public function setDireccion($direccion)
    {
        $this->direccion = $this->db->real_escape_string($direccion);
    }

    public function getCoste()
    {
        return $this->coste;
    }
    public function setCoste($coste)
    {
        $this->coste = $coste;
    }

    public function getEstado()
    {
        return $this->estado;
    }
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getFecha()
    {
        return $this->fecha;
    }
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getHora()
    {
        return $this->hora;
    }
    public function setHora($hora)
    {
        $this->hora = $hora;
    }

    public function getAll(){
        $pedidos = $this->db->query("SELECT * FROM pedidos ORDER BY id DESC");
        return $pedidos;
    }

    public function getOne(){
        $pedido = $this->db->query("SELECT * FROM pedidos WHERE id = {$this->getId()}");
        return $pedido ->fetch_object();
    }

    public function getOneByUser(){
        $sql = "SELECT id, coste FROM pedidos 
                WHERE usuario_id = {$this->getUsuario_id()}
                ORDER BY id DESC LIMIT 1";
        $pedido = $this->db->query($sql);
        return $pedido ->fetch_object();
    }

    public function getAllByUser(){
        $sql = "SELECT * FROM pedidos 
                WHERE usuario_id = {$this->getUsuario_id()}
                ORDER BY id DESC";
        $pedido = $this->db->query($sql);
        return $pedido;;
    }

    public function getProductosByPedido($id){
        $sql = "SELECT p.*, lp.* FROM productos p
                INNER JOIN lineas_pedidos lp ON lp.producto_id = p.id 
                WHERE lp.pedido_id = {$id}";
        $productos = $this->db->query($sql);
        return $productos;
    }

    public function save(){
        $sql = "INSERT INTO pedidos VALUES(NULL, {$this->getUsuario_id()}, '{$this->getProvincia()}', '{$this->getLocalidad()}', '{$this->getDireccion()}', {$this->getCoste()}, 'confirm', CURDATE(), CURTIME())";
        $save = $this->db->query($sql); 

        $result = false;
        if($save){
            $result = true;
        }

        return $result;
    }

    public function save_linea(){
        $sql = "SELECT LAST_INSERT_ID() AS 'pedido'"; // Obtener el ID del ultimo registro
        $query = $this->db->query($sql); 
        $pedido_id = $query->fetch_object()->pedido;

        foreach($_SESSION['carrito'] as $elemento){
            $producto = $elemento['producto'];
            $insert = "INSERT INTO lineas_pedidos VALUES(null, {$pedido_id}, {$producto->id}, {$elemento['unidades']})";
            $save = $this->db->query($insert);
        }

        $result = false;
        if($save){
            $result = true;
        }

        return $result;
    }

    public function edit(){
        
        $sql = "UPDATE pedidos SET estado = '{$this->getEstado()}'
                WHERE id = {$this->getId()}";
        $save = $this->db->query($sql); 
        $result = false;
        if($save){
            $result = true;
        }

        return $result;
    }

}
?>