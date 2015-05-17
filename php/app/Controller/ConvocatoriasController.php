<?php
App::uses('AppController', 'Controller');
/**
 * Convocatorias Controller
 *
 * @property Convocatoria $Convocatoria
 * @property PaginatorComponent $Paginator
 */
class ConvocatoriasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Session','Upload');
	

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Convocatoria->recursive = 0;
		$this->set('convocatorias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Convocatoria->exists($id)) {
			throw new NotFoundException(__('Invalid convocatoria'));
		}
		$options = array('conditions' => array('Convocatoria.' . $this->Convocatoria->primaryKey => $id));
		$this->set('convocatoria', $this->Convocatoria->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			
			
			$archivo = $this->request->data['Convocatoria']['archivo'];
			$this->Upload->upload($archivo);
			$this->Convocatoria->create();
			$convocatoria[] = array();
			$convocatoria['nombre']=$this->request->data['Convocatoria']['nombre'];
			$convocatoria['descripcion']=$this->request->data['Convocatoria']['descripcion'];
			$convocatoria['nombre_archivo']=$archivo['name'];
			$convocatoria['tamano']=$archivo['size'];					
			$convocatoria['url']=WWW_ROOT.'img'.DS.'uploads/';
			$convocatoria['fecha_inicio'] = $this->request->data['Convocatoria']['fecha_inicio'];
			$convocatoria['fecha_final'] = $this->request->data['Convocatoria']['fecha_final'];
			$convocatoria['administrador_id'] = $this->request->data['Convocatoria']['administrador_id'];
			$convocatoria['estado'] = $this->request->data['Convocatoria']['estado'];
		

			if ($this->Convocatoria->save($convocatoria)) {
				$this->Session->setFlash(__('The convocatoria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The convocatoria could not be saved. Please, try again.'));
			}
		}
		$administradors = $this->Convocatoria->Administrador->find('list');
		$this->set(compact('administradors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Convocatoria->exists($id)) {
			throw new NotFoundException(__('Invalid convocatoria'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Convocatoria->save($this->request->data)) {
				$this->Session->setFlash(__('The convocatoria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The convocatoria could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Convocatoria.' . $this->Convocatoria->primaryKey => $id));
			$this->request->data = $this->Convocatoria->find('first', $options);
		}
		$administradors = $this->Convocatoria->Administrador->find('list');
		$this->set(compact('administradors'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Convocatoria->id = $id;
		if (!$this->Convocatoria->exists()) {
			throw new NotFoundException(__('Invalid convocatoria'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Convocatoria->delete()) {
			$this->Session->setFlash(__('The convocatoria has been deleted.'));
		} else {
			$this->Session->setFlash(__('The convocatoria could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function download($nombre_archivo = null){

		
		
		if(file_exists(WWW_ROOT.'img'.DS.'uploads'.DS.$nombre_archivo)){
			$file = file(WWW_ROOT.'img'.DS.'uploads'.DS.$nombre_archivo);
			
				$file2 = implode("", $file);
				header("Content-Type: application/octet-stream");
				header("Content-Disposition: attachment; filename=".$nombre_archivo);
				echo $file2;
			
		}else{
			$this->Session->setFlash(__('El archivo no existe'));
		}
			
	}

	
		
}
