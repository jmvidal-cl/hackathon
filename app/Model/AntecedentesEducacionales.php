<?php 
	App::uses('AppModel', 'Model');
	
	class AntecedentesEducacionales extends AppModel {
		
		public $useTable = 'Antecedentes_Educacionales';
		
		
		public function saveAntecedentesEducacionales($datos){
			$sql = "
					insert into Antecedentes_Educacionales (
						Id_Cliente,
						Nivel_Educacional,
						Universidad,
						Profesion
					)values(
						'".$_SESSION["datosUsuario"]["Cliente"]["id"]."',
						'".$datos["nivel_educacion"]."',
						'".$datos["universidad"]."',
						'".$datos["profesion"]."'
					);
					";

			$db = $this->getDataSource();
			$result = $db->fetchAll($sql);
			return $result;
		}

		
	}