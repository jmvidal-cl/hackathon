<?php 
	App::uses('AppModel', 'Model');
	
	class TBarchivo extends AppModel {
		
		public $useTable = 'TB_archivo';

		public function saveTBarchivo($ruta,$tipo){
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
					";
			$db = $this->getDataSource();
			$result = $db->fetchAll($sql);
			return $result;
		}
	}