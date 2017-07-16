<?php 
	App::uses('AppModel', 'Model');
	
	class TBworkflow extends AppModel {
		
		public $useTable = 'TB_workflow';

		public function saveTBworkflow($idProceso = null){
			$sql = "
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
						'".date('Y-m-d H:i:s')."',
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