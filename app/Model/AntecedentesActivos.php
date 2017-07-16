<?php 
	App::uses('AppModel', 'Model');
	
	class AntecedentesActivos extends AppModel {
		
		public $useTable = 'Activos_Bienes';
		
		
		public function saveAntecedentesActivos($datos){
			$sql = "
					insert into Activos_Bienes (
						Id_Cliente,
						Propiedades,
						Valor_propiedad,
						Vehiculos,
						Valor_vehiculo
					)values(
						'".$_SESSION["datosUsuario"]["Cliente"]["id"]."',
						'1',
						'1',
						'".$datos["vehiculo"]."',
						".$datos["valor_vehiculo"]."
					);
					";
			$db = $this->getDataSource();
			$result = $db->fetchAll($sql);
			return $result;
		}

		
	}