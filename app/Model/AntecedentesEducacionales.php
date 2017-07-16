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
						'2.2',
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