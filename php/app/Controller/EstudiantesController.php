<?php
App::uses('AppController', 'Controller');
/**
 * Estudiantes Controller
 *
 * @property Estudiante $Estudiante
 * @property PaginatorComponent $Paginator
 */
class EstudiantesController extends AppController {

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
		$this->Estudiante->recursive = 0;
		$this->set('estudiantes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Estudiante->exists($id)) {
			throw new NotFoundException(__('Invalid estudiante'));
		}
		$options = array('conditions' => array('Estudiante.' . $this->Estudiante->primaryKey => $id));
		$this->set('estudiante', $this->Estudiante->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Estudiante->create();
			if ($this->Estudiante->save($this->request->data)) {
				$this->Session->setFlash(__('The estudiante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estudiante could not be saved. Please, try again.'));
			}
		}
		$grupoInvestigacions = $this->Estudiante->GrupoInvestigacion->find('list');
		$programas = $this->Estudiante->Programa->find('list');
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
		if (!$this->Estudiante->exists($id)) {
			throw new NotFoundException(__('Invalid estudiante'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Estudiante->save($this->request->data)) {
				$this->Session->setFlash(__('The estudiante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estudiante could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Estudiante.' . $this->Estudiante->primaryKey => $id));
			$this->request->data = $this->Estudiante->find('first', $options);
		}
		$grupoInvestigacions = $this->Estudiante->GrupoInvestigacion->find('list');
		$programas = $this->Estudiante->Programa->find('list');
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
		$this->Estudiante->id = $id;
		if (!$this->Estudiante->exists()) {
			throw new NotFoundException(__('Invalid estudiante'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Estudiante->delete()) {
			$this->Session->setFlash(__('The estudiante has been deleted.'));
		} else {
			$this->Session->setFlash(__('The estudiante could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
