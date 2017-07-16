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
						'2.1',
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