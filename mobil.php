<?php
class mobil{
public $namamerk;
public $tahun;
public $type;

public function __construct($namamerk,$tahun,$type){
	$this->namamerk=$namamerk;
	$this->tahun=$tahun;
	$this->type=$type;
}
public function get_namamerk(){
return $this->namamerk;
}
public function get_tahun(){
return $this->tahun;
}
public function get_type(){
return $this->type;	
}

}
?>