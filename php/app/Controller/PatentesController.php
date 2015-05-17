<?php
App::uses('AppController', 'Controller');
/**
 * Patentes Controller
 *
 * @property Patente $Patente
 * @property PaginatorComponent $Paginator
 */
class PatentesController extends AppController {

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
		$this->Patente->recursive = 0;
		$this->set('patentes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Patente->exists($id)) {
			throw new NotFoundException(__('Invalid patente'));
		}
		$options = array('conditions' => array('Patente.' . $this->Patente->primaryKey => $id));
		$this->set('patente', $this->Patente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Patente->create();
			if ($this->Patente->save($this->request->data)) {
				$this->Session->setFlash(__('The patente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patente could not be saved. Please, try again.'));
			}
		}
		$grupoInvestigacions = $this->Patente->GrupoInvestigacion->find('list');
		$this->set(compact('grupoInvestigacions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Patente->exists($id)) {
			throw new NotFoundException(__('Invalid patente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Patente->save($this->request->data)) {
				$this->Session->setFlash(__('The patente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Patente.' . $this->Patente->primaryKey => $id));
			$this->request->data = $this->Patente->find('first', $options);
		}
		$grupoInvestigacions = $this->Patente->GrupoInvestigacion->find('list');
		$this->set(compact('grupoInvestigacions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Patente->id = $id;
		if (!$this->Patente->exists()) {
			throw new NotFoundException(__('Invalid patente'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Patente->delete()) {
			$this->Session->setFlash(__('The patente has been deleted.'));
		} else {
			$this->Session->setFlash(__('The patente could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
