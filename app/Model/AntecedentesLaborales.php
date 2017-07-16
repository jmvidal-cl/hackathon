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
						'2.3',
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