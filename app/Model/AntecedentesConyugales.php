<?php 
	App::uses('AppModel', 'Model');
	
	class AntecedentesConyugales extends AppModel {
		
		public $useTable = 'Antecedente_Conyuge';
		
		
		public function saveAntecedentesConyugales($datos){
			$sql = "
					insert into Antecedente_Conyuge (
						Id_Cliente,
						Nombre,
						Sexo,
						Profesion
					)values(
						'".$_SESSION["datosUsuario"]["Cliente"]["id"]."',
						'".$datos["nombre_conyugal"]."',
						'".$datos["sexo_conyugal"]."',
						'".$datos["profesion_conyugal"]."'
					);
					";
			$db = $this->getDataSource();
			$result = $db->fetchAll($sql);
			return $result;
		}

		
	}