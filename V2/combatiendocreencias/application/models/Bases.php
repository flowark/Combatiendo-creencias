<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bases extends CI_Model{
  function __construct(){
    parent::__construct();
  }
  public function validaUsuario($data){
    $cadena="select * from usuario where login='".$data['txtusuario']."' and password='".$data['txtpassword']."' ";
    $query = $this->db->query($cadena);
    if($query->num_rows() > 0)
      return $query;
    else
      return FALSE;
  }
  public function insertaRespuesta($data){
    $cadena="insert into form1inicial_ingles (pci1, pci2, pci3, pci4, pci5, pci6, pci7, pci8, pci9, pci10, pci11, pci12, pci13, pci14, pci15) values('".$data["p1respuesta"]."', '".$data["p2respuesta"]."', '".$data["p3respuesta"]."', '".$data["p4respuesta"]."', '".$data["p5respuesta"]."', '".$data["p6respuesta"]."', '".$data["p7respuesta"]."', '".$data["p8respuesta"]."', '".$data["p9respuesta"]."', '".$data["p10respuesta"]."', '".$data["p11respuesta"]."', '".$data["p12respuesta"]."', '".$data["p13respuesta"]."', '".$data["p14respuesta"]."', '".$data["p15respuesta"]."')";

    $this->db->query($cadena);
  }
}
