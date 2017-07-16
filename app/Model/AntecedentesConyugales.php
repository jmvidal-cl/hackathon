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
						'2.4',
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