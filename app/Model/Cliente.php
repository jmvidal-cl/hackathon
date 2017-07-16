<?php 
	App::uses('AppModel', 'Model');
	
	class Cliente extends AppModel {
		
		public $useTable = 'Cliente';


		public function getUsuario($usuario, $clave){
			return $this->find('all',
					[
						'conditions' => array(
							'Cliente.rut' 		=> $usuario,
							'Cliente.clave' 	=> MD5($clave),
						),
					]
			);
			
		}
		
		public function saveUsuario($datos){
			$sql = "
					insert into Cliente (
						nombres,
						apellido_paterno,
						apellido_materno,
						email,
						rut,
						nacionalidad,
						direccion,
						comuna,
						telefono_celular,
						telefoto_fijo,
						fecha_nacimiento,
						sexo,
						clave,
						numero,
						region
					)values(
						'".$datos["nombres"]."',
						'".$datos["apellido_p"]."',
						'".$datos["apellido_m"]."',
						'".$datos["email"]."',
						'".$datos["rut"]."',
						'".$datos["nacionalidad"]."',
						'".$datos["direccion"]."',
						'".$datos["comuna"]."',
						'".$datos["tel_cel"]."',
						'".$datos["tel_fijo"]."',
						'".$datos["fecha_nacim"]."',
						'".$datos["sexo"]."',
						'".md5($datos["pass1"])."',
						'123',
						'".$datos["region"]."'
					);
					";
			$db = $this->getDataSource();
			$result = $db->fetchAll($sql);
			$queryGetIdCliente = "select id from Cliente order by id desc limit 1";
			$result = $db->fetchAll($queryGetIdCliente)[0]["Cliente"]["id"];
			$sqlInsertOtherTable = "
				insert into TB_workflow (
						id_proceso,
						Id_Cliente,
						fecha_inicio,
						sla_estado,
						id_archivo,
						flag_msg_actual,
						flag_pro_sig
					)values(
						1,
						".$result.",
						'".date("Y-m-d")."',
						0,
						0,
						0,
						0
					);
			";
			$result = $db->fetchAll($sqlInsertOtherTable);
			return $result;
		}
		
	}