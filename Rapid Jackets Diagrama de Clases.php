<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ola K Ase</title>
</head>
<body>
<?php
class Catalogo {
	private $idCatalogo;
	private $nombreCat;
	private $descCat;
	private $estadoCat;
	private $fotoCat;
	
	public function guardar ($idCatalogo,$nombreCat, $descCat, $estadoCat, $fotoCat){
		$this-> idCat = $idCategoria;
		$this-> NomCat = $nombreCat;
		$this-> DesCat = $descCat;
		$this-> EstCat = $estadoCat;
		$this-> FotCat = $fotoCat;
	}
	
	public function modificar ($idCatalogo,$nombreCat, $descCat, $estadoCat, $fotoCat){
		$this-> idCat = $idCategoria;
		$this-> NomCat = $nombreCat;
		$this-> DesCat = $descCat;
		$this-> EstCat = $estadoCat;
		$this-> FotCat = $fotoCat;
	}
	
	public function buscar () {
	}
	
	public function visualizar () {
		echo "ID de Categoria: ". $this->idCat . "<br>";
		echo "Nombre de Categoria: " . $this->NomCat . "<br>";
		echo "Descripcion de Categoria: " . $this->DesCat . "<br>";
		echo "Estado de Categoria: " . $this->EstCat . "<br>";
		echo "Foto de Categoria: " . $this->FotCat . "<br><br><br>";
	}
}

class Producto {
	private $idProducto;
	private $nombrePor;
	private $precioPro;
	private $activoPro;
	private $cantidadPro;
	private $descPro;
	private $fotoPro;
	
	public function guardar ($idProducto,$nombrePro,$precioPro,$activoPro,$cantidadPro,$descPro,$fotoPro){
		$this->idPro = $idProducto;
		$this->nomPro = $nombrePro;
		$this->prePro = $precioPro;
		$this->actPro = $activoPro;
		$this->cantPro = $cantidadPro;
		$this->descPro = $descPro;
		$this->fotoPro = $fotoPro;
	}

	public function modificar($idProducto,$nombrePro,$precioPro,$activoPro,$cantidadPro,$descPro,$fotoPro){
		$this->idPro = $idProducto;
		$this->nomPro = $nombrePro;
		$this->prePro = $precioPro;
		$this->actPro = $activoPro;
		$this->cantPro = $cantidadPro;
		$this->descPro = $descPro;
		$this->fotoPro = $fotoPro;
	}
	public function buscar(){
	}
	
	public function visualizar(){
		echo "ID del producto:  ".$this->idPro."<br>";
		echo "Nombre del producto:  ".$this->nomPro."<br>";
		echo "Precio del producto:  ".$this->prePro."<br>";
		echo "El activo del producto:  ".$this->actPro."<br>";
		echo "La cantidad del producto:  ".$this->cantPro."<br>";
		echo "La descripcion del producto:  ".$this->descPro."<br>";
		echo "La foto del producto:  ".$this->fotoPro."<br>";
	}
}

class Inventario {
	private $idInventario;
	private $fechaInv;
	private $cantidadInv;
	private $precioMayor;
	private $obserInv;
	
	public function buscar(){
	}
	
	public function guardar($idInventario,$fechaInv,$cantidadInv,$precioMayor,$obserInv){
		$this->idInv = $idInventario;
		$this->fechaInv = $fechaInv;
		$this->cantInv = $cantidadInv;
		$this->preMayor = $precioMayor;
		$this->obserInv = $obserInv;
	}
}
	
?>

</body>
</html>