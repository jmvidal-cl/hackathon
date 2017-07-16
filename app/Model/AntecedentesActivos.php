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
					insert into TB_workflow (
						rut,
						id_proceso,
						fecha_proceso,
						sla_estado,
						id_archivo,
						flag_msg_actual,
						flag_pro_sig
					)values(
						'".$_SESSION["datosUsuario"]["Cliente"]["rut"]."',
						'2.5',
						'".date('Y-m-d')."',
						'2',
						'0',
						'0',
						'0'
					);	
					";
			
			$db = $this->getDataSource();
			$result = $db->fetchAll($sql);
			return $result;
		}

		
	}