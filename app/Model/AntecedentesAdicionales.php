<?php 
	App::uses('AppModel', 'Model');
	
	class AntecedentesAdicionales extends AppModel {
		
		public $useTable = 'Antecedentes_Adicionales';
		
		
		public function saveAntecedentesAdicionales($datos){
			$sql = "
					insert into Antecedentes_Adicionales (
						Id_Cliente,
						Estado_Civil,
						Regimen_Matrimonial,
						Sucursal_Atencion
					)values(
						'".$_SESSION["datosUsuario"]["Cliente"]["id"]."',
						'".$datos["estado_civil"]."',
						'',
						'".$datos["sucursales"]."'
					);
					";
			$db = $this->getDataSource();
			$result = $db->fetchAll($sql);
			return $result;
		}

		
	}