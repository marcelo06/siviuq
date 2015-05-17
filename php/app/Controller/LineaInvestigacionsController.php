<?php
App::uses('AppController', 'Controller');
/**
 * LineaInvestigacions Controller
 *
 * @property LineaInvestigacion $LineaInvestigacion
 * @property PaginatorComponent $Paginator
 */
class LineaInvestigacionsController extends AppController {

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
		$this->LineaInvestigacion->recursive = 0;
		$this->set('lineaInvestigacions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LineaInvestigacion->exists($id)) {
			throw new NotFoundException(__('Invalid linea investigacion'));
		}
		$options = array('conditions' => array('LineaInvestigacion.' . $this->LineaInvestigacion->primaryKey => $id));
		$this->set('lineaInvestigacion', $this->LineaInvestigacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LineaInvestigacion->create();
			if ($this->LineaInvestigacion->save($this->request->data)) {
				$this->Session->setFlash(__('The linea investigacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The linea investigacion could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LineaInvestigacion->exists($id)) {
			throw new NotFoundException(__('Invalid linea investigacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LineaInvestigacion->save($this->request->data)) {
				$this->Session->setFlash(__('The linea investigacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The linea investigacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LineaInvestigacion.' . $this->LineaInvestigacion->primaryKey => $id));
			$this->request->data = $this->LineaInvestigacion->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LineaInvestigacion->id = $id;
		if (!$this->LineaInvestigacion->exists()) {
			throw new NotFoundException(__('Invalid linea investigacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LineaInvestigacion->delete()) {
			$this->Session->setFlash(__('The linea investigacion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The linea investigacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
