<?php
App::uses('AppController', 'Controller');
/**
 * PropuestaConvocatorias Controller
 *
 * @property PropuestaConvocatoria $PropuestaConvocatoria
 * @property PaginatorComponent $Paginator
 */
class PropuestaConvocatoriasController extends AppController {

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
		$this->PropuestaConvocatoria->recursive = 0;
		$this->set('propuestaConvocatorias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PropuestaConvocatoria->exists($id)) {
			throw new NotFoundException(__('Invalid propuesta convocatoria'));
		}
		$options = array('conditions' => array('PropuestaConvocatoria.' . $this->PropuestaConvocatoria->primaryKey => $id));
		$this->set('propuestaConvocatoria', $this->PropuestaConvocatoria->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {

			$archivo = $this->request->data['PropuestaConvocatoria']['archivo'];
			$this->Upload->upload($archivo);
			$this->PropuestaConvocatoria->create();
			$propuesta[]= array();
			$propuesta['convocatoria_id']=$this->request->data['PropuestaConvocatoria']['convocatoria_id'];
			$propuesta['grupo_investigacion_id']=$this->request->data['PropuestaConvocatoria']['grupo_investigacion_id'];
			$propuesta['titulo']=$this->request->data['PropuestaConvocatoria']['titulo'];
			$propuesta['descripcion']=$this->request->data['PropuestaConvocatoria']['descripcion'];
			$propuesta['nombre_archivo']=$archivo['name'];
			$propuesta['tamano']=$archivo['size'];					
			$propuesta['url']=WWW_ROOT.'img'.DS.'uploads/';
			$propuesta['estado']=$this->request->data['PropuestaConvocatoria']['estado'];
			


			if ($this->PropuestaConvocatoria->save($propuesta)) {
				$this->Session->setFlash(__('The propuesta convocatoria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The propuesta convocatoria could not be saved. Please, try again.'));
			}
		}

		$convocatorias = $this->PropuestaConvocatoria->Convocatoria->find('list');
		$grupoInvestigacions = $this->PropuestaConvocatoria->GrupoInvestigacion->find('list');
		$this->set(compact('convocatorias', 'grupoInvestigacions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PropuestaConvocatoria->exists($id)) {
			throw new NotFoundException(__('Invalid propuesta convocatoria'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PropuestaConvocatoria->save($this->request->data)) {
				$this->Session->setFlash(__('The propuesta convocatoria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The propuesta convocatoria could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PropuestaConvocatoria.' . $this->PropuestaConvocatoria->primaryKey => $id));
			$this->request->data = $this->PropuestaConvocatoria->find('first', $options);
		}
		$convocatorias = $this->PropuestaConvocatoria->Convocatorium->find('list');
		$grupoInvestigacions = $this->PropuestaConvocatoria->GrupoInvestigacion->find('list');
		$this->set(compact('convocatorias', 'grupoInvestigacions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PropuestaConvocatoria->id = $id;
		if (!$this->PropuestaConvocatoria->exists()) {
			throw new NotFoundException(__('Invalid propuesta convocatoria'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PropuestaConvocatoria->delete()) {
			$this->Session->setFlash(__('The propuesta convocatoria has been deleted.'));
		} else {
			$this->Session->setFlash(__('The propuesta convocatoria could not be deleted. Please, try again.'));
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
