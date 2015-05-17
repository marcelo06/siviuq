<?php
App::uses('AppController', 'Controller');
/**
 * Semilleros Controller
 *
 * @property Semillero $Semillero
 * @property PaginatorComponent $Paginator
 */
class SemillerosController extends AppController {

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
		$this->Semillero->recursive = 0;
		$this->set('semilleros', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Semillero->exists($id)) {
			throw new NotFoundException(__('Invalid semillero'));
		}
		$options = array('conditions' => array('Semillero.' . $this->Semillero->primaryKey => $id));
		$this->set('semillero', $this->Semillero->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Semillero->create();
			if ($this->Semillero->save($this->request->data)) {
				$this->Session->setFlash(__('The semillero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The semillero could not be saved. Please, try again.'));
			}
		}
		$grupoInvestigacions = $this->Semillero->GrupoInvestigacion->find('list');
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
		if (!$this->Semillero->exists($id)) {
			throw new NotFoundException(__('Invalid semillero'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Semillero->save($this->request->data)) {
				$this->Session->setFlash(__('The semillero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The semillero could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Semillero.' . $this->Semillero->primaryKey => $id));
			$this->request->data = $this->Semillero->find('first', $options);
		}
		$grupoInvestigacions = $this->Semillero->GrupoInvestigacion->find('list');
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
		$this->Semillero->id = $id;
		if (!$this->Semillero->exists()) {
			throw new NotFoundException(__('Invalid semillero'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Semillero->delete()) {
			$this->Session->setFlash(__('The semillero has been deleted.'));
		} else {
			$this->Session->setFlash(__('The semillero could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
