<?php
 require_once "../config/database.php";
 require_once "../interfaces/productoInterface.php";
 
 private $conn;

 public function _construct(){
    $database = new Database();
    $this->conn = $database->getConnection();

    public function crearProducto($producto){
        $sql = "INSERT INTO productos (:nombre, :descripcion, :tipo, :precio, :imagen)";
        $resultado = $this->conn->prepare($sql);
        $resultado->bindParam(":nombre",
        $producto->nombre);
        $resultado->bindParam(":descripcion",
        $producto->descripcion);
        $resultado->bindParam(":tipo",
        $producto->tipo);
        $resultado->bindParam(":precio",
        $producto->precio);
        $resultado->bindParam(":imagen",
        $producto->imagen);

        if($result->execute()){
            return ["mensaje" => "producto Creado"];
        }
        return ["mensaje" => "Error al crear el producto"];
     }

     public function actualizarProducto($producto){
        $sql = "UPDATE productos SET nombre = :nombre, descripcion = :descripcion, tipo = :tipo, precio = :precio, imagen = :imagen WHERE idproducto = :idproducto";
        $resultado = $this->conn->prepare($sql);
        $resultado->bindParam(":idproducto",
        $producto->idproducto);
        $resultado->bindParam(":descripcion",
        $producto->descripcion);
        $resultado->bindParam(":tipo",
        $producto->tipo);
        $resultado->bindParam(":precio",
        $producto->precio);
        $resultado->bindParam(":imagen",
        $producto->imagen);

        if($result->execute()){
            return ["mensaje" => "producto Actualizado"];
        }
        return ["mensaje" => "Error al actualizar el producto"];
     }

     public function borrarProducto($idproducto)
     {
        $sql = "DELETE FROM productos WHERE 
        idproducto = :idproducto";
        $resultado = $this->conn->prepare($sql);
        $resultado->bindParam(":idproducto",
        $idproducto);
        if ($resultado->execute()){
            return ["mensaje" => "Producto Borrado"];
        }
        return ["mensaje" => "Error al borrar el producto" ];
     }

     public function obtenerProductos(){
        $sql = "SELECT * FROM productos";
        $resultado = $this->conn->prepare($sql);
        $resultado->execute();
        return $resultado->fetchAll
        (PDO::FETCH_ASSOC);
     }

     public function obtenerProductosPorNombre($nombre){
        $sql = "SELECT * FROM productos WHERE
        nombre = :nombre";
         $resultado = $this->conn->prepare($sql);
         $resultado ->bindParam(":nombre", $nombre);
        $resultado->execute();
        return $resultado->fetch
        (PDO::FETCH_ASSOC);
     }
   }
?>