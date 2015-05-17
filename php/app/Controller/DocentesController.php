<?php
App::uses('AppController', 'Controller');
/**
 * Docentes Controller
 *
 * @property Docente $Docente
 * @property PaginatorComponent $Paginator
 */
class DocentesController extends AppController {

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
		$this->Docente->recursive = 0;
		$this->set('docentes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Docente->exists($id)) {
			throw new NotFoundException(__('Invalid docente'));
		}
		$options = array('conditions' => array('Docente.' . $this->Docente->primaryKey => $id));
		$this->set('docente', $this->Docente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Docente->create();
			if ($this->Docente->save($this->request->data)) {
				$this->Session->setFlash(__('The docente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The docente could not be saved. Please, try again.'));
			}
		}
		$grupoInvestigacions = $this->Docente->GrupoInvestigacion->find('list');
		$programas = $this->Docente->Programa->find('list');
		$this->set(compact('grupoInvestigacions', 'programas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Docente->exists($id)) {
			throw new NotFoundException(__('Invalid docente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Docente->save($this->request->data)) {
				$this->Session->setFlash(__('The docente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The docente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Docente.' . $this->Docente->primaryKey => $id));
			$this->request->data = $this->Docente->find('first', $options);
		}
		$grupoInvestigacions = $this->Docente->GrupoInvestigacion->find('list');
		$programas = $this->Docente->Programa->find('list');
		$this->set(compact('grupoInvestigacions', 'programas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Docente->id = $id;
		if (!$this->Docente->exists()) {
			throw new NotFoundException(__('Invalid docente'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Docente->delete()) {
			$this->Session->setFlash(__('The docente has been deleted.'));
		} else {
			$this->Session->setFlash(__('The docente could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
