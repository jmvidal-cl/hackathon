<?php 
	App::uses('AppModel', 'Model');
	
	class AntecedentesLaborales extends AppModel {
		
		public $useTable = 'Antecedentes_Laborales';
		
		
		public function saveAntecedentesLaborales($datos){
			$sql = "
					insert into Antecedentes_Laborales (
						Id_Cliente,
						Dependiente,
						Nombre_Empresa,
						Cargo,
						Contrato,
						Ingreso_liquido
					)values(
						'".$_SESSION["datosUsuario"]["Cliente"]["id"]."',
						'si',
						'".$datos["empresa"]."',
						'".$datos["cargo"]."',
						'".$datos["contrato"]."',
						'".$datos["ingreso"]."'
					);
				";
			$db = $this->getDataSource();
			$result = $db->fetchAll($sql);
			return $result;
		}

		
	}