<?php 
	App::uses('AppModel', 'Model');
	
	class TBdocumentos extends AppModel {
		
		public $useTable = 'TB_documentos';

		public function getTbdocumentos(){
			
			return $this->find('all',
					[

					]
				);
		}

		
	}