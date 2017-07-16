<?php

	App::uses('Folder', 'Utility');
	App::uses('File', 'Utility');
		

	class HomeController extends AppController {
		
		
		public function index(){
			
		}
		
		public function googleApi() {

		}
				
		public function facebookApi() {
		
		}
		
		public function nicoprueba(){

		}

		public function workflow(){
			$datos = $this->BciApi();
			$auxDatos = [];
			foreach ($datos["places"] as $dato){
				array_push($auxDatos, $dato["title"]);
			}
			$this->set('Sucursales',$auxDatos);
			$this->set('tengoSueno',$this->request->params["pass"][0]);
			$this->loadModel('TBdocumentos');
			$documentos = $this->TBdocumentos->getTbdocumentos();
			$this->set('TiposDeDocumentos',$documentos);

		}

		public function workflowFinal(){
			$this->loadModel('TBdocumentos');
			$documentos = $this->TBdocumentos->getTbdocumentos();
			$this->set('TiposDeDocumentos',$documentos);
		}
	
		public function guardarAntecedentes(){
			if ($this->request->is('ajax')) {
				$this->layout="ajax";
				$this->view="ajax";
				$datos = $this->request->data;
				// procesar documento cotizaciones previcionales
				if(!empty($_FILES["cot_prev"]["name"])){
					if(move_uploaded_file($_FILES["cot_prev"]["tmp_name"], "documentos/".$_FILES["cot_prev"]["name"])){
						$this->loadModel("TBarchivo");
						$this->TBarchivo->saveTBarchivo($_FILES["cot_prev"]["name"],"DOC_001");
					}else{
						
					}
				}
				
				
				echo "<pre>";
				print_r($_FILES);
				echo "</pre>";
				exit;
				
				// antecedentes adicionales
				$this->loadModel('AntecedentesAdicionales');
				$this->AntecedentesAdicionales->saveAntecedentesAdicionales($datos);
				// antecedentes educaciones
				$this->loadModel('AntecedentesEducacionales');
				$this->AntecedentesEducacionales->saveAntecedentesEducacionales($datos);
				// antecedentes laborales
				$this->loadModel('AntecedentesLaborales');
				$this->AntecedentesLaborales->saveAntecedentesLaborales($datos);
				// antecedentes conyugales
				$this->loadModel('AntecedentesConyugales');
				$this->AntecedentesConyugales->saveAntecedentesConyugales($datos);
				// antecedentes activos
				$this->loadModel('AntecedentesActivos');
				$this->AntecedentesActivos->saveAntecedentesActivos($datos);
				$this->set('info',"Datos Guardados.");
				

			}else{
				throw new NotFoundException('Error 404');
			}
		}
		
		public function UploadFiles(){
			echo "<pre>";
			print_r($_FILES);
			echo "</pre>";
			
		}
		
		private function BciApi(){
			$curl = curl_init();
			
			curl_setopt_array($curl, array(
					CURLOPT_URL => "https://api.us.apiconnect.ibmcloud.com/portal-api-developers-desarrollo/sandbox/info-banco/sucursales",
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_ENCODING => "",
					CURLOPT_MAXREDIRS => 10,
					CURLOPT_TIMEOUT => 30,
					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					CURLOPT_CUSTOMREQUEST => "GET",
					CURLOPT_HTTPHEADER => array(
							"accept: application/json",
							"x-ibm-client-id: ba937f61-1f8f-4070-892a-181144631bd3"
					),
			));
			
			$response = curl_exec($curl);
			$err = curl_error($curl);
			
			curl_close($curl);
			
			if ($err) {
				return  json_decode(["Error en llamada a la API"]);
			} else {
				return  json_decode($response, true);
			}
		}
	}