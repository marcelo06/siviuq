<?php
App::uses('AppController', 'Controller');
/**
 * GrupoProyectos Controller
 *
 * @property GrupoProyecto $GrupoProyecto
 * @property PaginatorComponent $Paginator
 */
class GrupoProyectosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GrupoProyecto->recursive = 0;
		$this->set('grupoProyectos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GrupoProyecto->exists($id)) {
			throw new NotFoundException(__('Invalid grupo proyecto'));
		}
		$options = array('conditions' => array('GrupoProyecto.' . $this->GrupoProyecto->primaryKey => $id));
		$this->set('grupoProyecto', $this->GrupoProyecto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GrupoProyecto->create();
			if ($this->GrupoProyecto->save($this->request->data)) {
				$this->Session->setFlash(__('The grupo proyecto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupo proyecto could not be saved. Please, try again.'));
			}
		}
		$grupoInvestigacions = $this->GrupoProyecto->GrupoInvestigacion->find('list');
		$proyectos = $this->GrupoProyecto->Proyecto->find('list');
		$this->set(compact('grupoInvestigacions', 'proyectos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->GrupoProyecto->exists($id)) {
			throw new NotFoundException(__('Invalid grupo proyecto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GrupoProyecto->save($this->request->data)) {
				$this->Session->setFlash(__('The grupo proyecto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupo proyecto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GrupoProyecto.' . $this->GrupoProyecto->primaryKey => $id));
			$this->request->data = $this->GrupoProyecto->find('first', $options);
		}
		$grupoInvestigacions = $this->GrupoProyecto->GrupoInvestigacion->find('list');
		$proyectos = $this->GrupoProyecto->Proyecto->find('list');
		$this->set(compact('grupoInvestigacions', 'proyectos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->GrupoProyecto->id = $id;
		if (!$this->GrupoProyecto->exists()) {
			throw new NotFoundException(__('Invalid grupo proyecto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->GrupoProyecto->delete()) {
			$this->Session->setFlash(__('The grupo proyecto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The grupo proyecto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
