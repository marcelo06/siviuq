<?php
App::uses('AppController', 'Controller');
/**
 * GrupoInvestigacions Controller
 *
 * @property GrupoInvestigacion $GrupoInvestigacion
 * @property PaginatorComponent $Paginator
 */
class GrupoInvestigacionsController extends AppController {

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
		$this->GrupoInvestigacion->recursive = 0;
		$this->set('grupoInvestigacions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GrupoInvestigacion->exists($id)) {
			throw new NotFoundException(__('Invalid grupo investigacion'));
		}
		$options = array('conditions' => array('GrupoInvestigacion.' . $this->GrupoInvestigacion->primaryKey => $id));
		$this->set('grupoInvestigacion', $this->GrupoInvestigacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GrupoInvestigacion->create();
			if ($this->GrupoInvestigacion->save($this->request->data)) {
				$this->Session->setFlash(__('The grupo investigacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupo investigacion could not be saved. Please, try again.'));
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
		if (!$this->GrupoInvestigacion->exists($id)) {
			throw new NotFoundException(__('Invalid grupo investigacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GrupoInvestigacion->save($this->request->data)) {
				$this->Session->setFlash(__('The grupo investigacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupo investigacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GrupoInvestigacion.' . $this->GrupoInvestigacion->primaryKey => $id));
			$this->request->data = $this->GrupoInvestigacion->find('first', $options);
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
		$this->GrupoInvestigacion->id = $id;
		if (!$this->GrupoInvestigacion->exists()) {
			throw new NotFoundException(__('Invalid grupo investigacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->GrupoInvestigacion->delete()) {
			$this->Session->setFlash(__('The grupo investigacion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The grupo investigacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}



/**
 * find method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function find() {
			
		$options = array('conditions' => array('GrupoInvestigacion.' . $this->GrupoInvestigacion->primaryKey => $id));
		$this->set('grupoInvestigacion', $this->GrupoInvestigacion->find('first', $options));
	}

}
