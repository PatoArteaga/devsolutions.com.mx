<?php

class Conexion{

	public function conectar(){
		
		$link = new PDO("mysql:host=localhost;dbname=zitadb_web",
		"root",
		"Outwor1d");

		$link->exec("set names utf8");

		return $link;

	}

}