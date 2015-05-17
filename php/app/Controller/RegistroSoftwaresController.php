<?php
App::uses('AppController', 'Controller');
/**
 * RegistroSoftwares Controller
 *
 * @property RegistroSoftware $RegistroSoftware
 * @property PaginatorComponent $Paginator
 */
class RegistroSoftwaresController extends AppController {

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
		$this->RegistroSoftware->recursive = 0;
		$this->set('registroSoftwares', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RegistroSoftware->exists($id)) {
			throw new NotFoundException(__('Invalid registro software'));
		}
		$options = array('conditions' => array('RegistroSoftware.' . $this->RegistroSoftware->primaryKey => $id));
		$this->set('registroSoftware', $this->RegistroSoftware->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RegistroSoftware->create();
			if ($this->RegistroSoftware->save($this->request->data)) {
				$this->Session->setFlash(__('The registro software has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The registro software could not be saved. Please, try again.'));
			}
		}
		$proyectos = $this->RegistroSoftware->Proyecto->find('list');
		$this->set(compact('proyectos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RegistroSoftware->exists($id)) {
			throw new NotFoundException(__('Invalid registro software'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RegistroSoftware->save($this->request->data)) {
				$this->Session->setFlash(__('The registro software has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The registro software could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RegistroSoftware.' . $this->RegistroSoftware->primaryKey => $id));
			$this->request->data = $this->RegistroSoftware->find('first', $options);
		}
		$proyectos = $this->RegistroSoftware->Proyecto->find('list');
		$this->set(compact('proyectos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->RegistroSoftware->id = $id;
		if (!$this->RegistroSoftware->exists()) {
			throw new NotFoundException(__('Invalid registro software'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RegistroSoftware->delete()) {
			$this->Session->setFlash(__('The registro software has been deleted.'));
		} else {
			$this->Session->setFlash(__('The registro software could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
