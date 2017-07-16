<?php 
	App::uses('AppModel', 'Model');
	
	class TBarchivo extends AppModel {
		
		public $useTable = 'TB_archivo';

		public function saveTBarchivo($ruta,$tipo,$idProceso = null){
			$sql = "
					insert into TB_archivo (
						Id_Cliente,
						nombre,
						ruta,
						codigo_documento
					)values(
						'".$_SESSION["datosUsuario"]["Cliente"]["id"]."',
						'".$ruta."',
						'".$ruta."',
						'".$tipo."'
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
						'".$idProceso."',
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