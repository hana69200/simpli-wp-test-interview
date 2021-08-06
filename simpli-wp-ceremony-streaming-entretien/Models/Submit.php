<?php

require_once(PATH_MODELS . 'DAO.php');

class Submit extends DAO {

    public function createSubmit($name, $content, $metadata)
    {
    	
		// Ajout du submit en base
		$this -> _requete("INSERT INTO Submit (name, content, metadata) VALUES (?, ?, ?)", array($name,$content, $metadata));
		return $name;
    }


}