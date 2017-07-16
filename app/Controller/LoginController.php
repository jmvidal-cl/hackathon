<?php
	class LoginController extends AppController {
		
		public function index() {

		}
		
		public function validarUsuario(){
			if ($this->request->is('ajax')) {
				$this->layout="ajax";
				$this->view="ajax";
				$this->loadModel('Cliente');
				$datos = $this->request->data;
				$InformacionUsuarioLogged = $this->Cliente->getUsuario($datos["rut"],$datos["password"]);
				if(!empty($InformacionUsuarioLogged)){
					// usuario correcto	
					$_SESSION["datosUsuario"] = $InformacionUsuarioLogged[0];
					$this->set('info',"Usuario correcto.");
				}else{
					// usuario incorrecto
					$this->set('info',"Usuario incorrecto.");
				}
			}else{
				throw new NotFoundException('Error 404');
			}
		}
		
		public function cerrarSession(){
			$this->layout="ajax";
			$this->view="ajax";
			unset($_SESSION["datosUsuario"]);
			
			return $this->redirect(
				array('controller' => 'Login', 'action' => 'index')
			);
		}
		
		public function registrar(){
			if ($this->request->is('ajax')) {
				$this->layout="ajax";
				$this->view="ajax";
				$this->loadModel('Cliente');
				$datos = $this->request->data;
				$InformacionUsuarioLogged = $this->Cliente->saveUsuario($datos);
				$this->set('info',"Usuario registrado.");
			}else{
				throw new NotFoundException('Error 404');
			}
		}
	}