<?php
 require_once "../repositories/productoRepository.php"

 class ProductoController{
    private $productoRepository;

    public function _construct(){
        $this->productoRepository = new ProductoRepository();

    }

    public function crearProducto($data){
        $producto = new Producto();
        $producto->nombre = $data["nombre"];
        $producto->descripcion = $data ["descripcion"];
        $producto->tipo = $data["tipo"];
        $producto->precio = $data["precio"];
        $producto->imagen = $data["imagen"];
        return 
        $this->productoRepository->crearProducto($producto);

    }

    public function actualizarProducto($data){
        $producto = new Producto();
        $producto->nombre = $data["nombre"];
        $producto->descripcion = $data ["descripcion"];
        $producto->tipo = $data["tipo"];
        $producto->precio = $data["precio"];
        $producto->imagen = $data["imagen"];
        return 
        $this->productoRepository->actualizarProducto($producto);

    }

    public function borrarProducto($idproducto)
    {
        return $this->productoRepository->borrarProducto($idproducto);
    }
    public function obtenerProductos()
    {
        return $this->productoRepository->obtenerProductos();
    }
    public function obtenerProductosPorNombre($nombre)
    {
        return $this->productoRepository->obtenerProductosPorNombre($nombre);
    }
 }


?>