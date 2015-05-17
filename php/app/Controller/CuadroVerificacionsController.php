<?php
App::uses('AppController', 'Controller');
/**
 * CuadroVerificacions Controller
 *
 * @property CuadroVerificacion $CuadroVerificacion
 * @property PaginatorComponent $Paginator
 */
class CuadroVerificacionsController extends AppController {

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
		$this->CuadroVerificacion->recursive = 0;
		$this->set('cuadroVerificacions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CuadroVerificacion->exists($id)) {
			throw new NotFoundException(__('Invalid cuadro verificacion'));
		}
		$options = array('conditions' => array('CuadroVerificacion.' . $this->CuadroVerificacion->primaryKey => $id));
		$this->set('cuadroVerificacion', $this->CuadroVerificacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CuadroVerificacion->create();
			if ($this->CuadroVerificacion->save($this->request->data)) {
				$this->Session->setFlash(__('The cuadro verificacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cuadro verificacion could not be saved. Please, try again.'));
			}
		}
		$administradors = $this->CuadroVerificacion->Administrador->find('list');
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
		if (!$this->CuadroVerificacion->exists($id)) {
			throw new NotFoundException(__('Invalid cuadro verificacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CuadroVerificacion->save($this->request->data)) {
				$this->Session->setFlash(__('The cuadro verificacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cuadro verificacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CuadroVerificacion.' . $this->CuadroVerificacion->primaryKey => $id));
			$this->request->data = $this->CuadroVerificacion->find('first', $options);
		}
		$administradors = $this->CuadroVerificacion->Administrador->find('list');
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
		$this->CuadroVerificacion->id = $id;
		if (!$this->CuadroVerificacion->exists()) {
			throw new NotFoundException(__('Invalid cuadro verificacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CuadroVerificacion->delete()) {
			$this->Session->setFlash(__('The cuadro verificacion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cuadro verificacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
