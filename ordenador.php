<?php
class ordenador{
	public $marca;
	public $ram;
}
public function __construct($marca,$ram)
    {
        $this->marca=array ('hp','nvidia','apple');
		$this->ram = array(1,8, 3);
    }

public function getMarca(){
	return $this->marca;
}
public function getRam(){
	return $this->ram;
}
public function setMarca($marca){
	$this->marca=$marca;
}
public function setRam($ram){
	$this->ram=$ram;
}
?>