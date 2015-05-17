<?php
App::uses('AppController', 'Controller');
/**
 * LineaGrupos Controller
 *
 * @property LineaGrupo $LineaGrupo
 * @property PaginatorComponent $Paginator
 */
class LineaGruposController extends AppController {

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
		$this->LineaGrupo->recursive = 0;
		$this->set('lineaGrupos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LineaGrupo->exists($id)) {
			throw new NotFoundException(__('Invalid linea grupo'));
		}
		$options = array('conditions' => array('LineaGrupo.' . $this->LineaGrupo->primaryKey => $id));
		$this->set('lineaGrupo', $this->LineaGrupo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LineaGrupo->create();
			if ($this->LineaGrupo->save($this->request->data)) {
				$this->Session->setFlash(__('The linea grupo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The linea grupo could not be saved. Please, try again.'));
			}
		}
		$grupoInvestigacions = $this->LineaGrupo->GrupoInvestigacion->find('list');
		$lineaInvestigacions = $this->LineaGrupo->LineaInvestigacion->find('list');
		$this->set(compact('grupoInvestigacions', 'lineaInvestigacions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LineaGrupo->exists($id)) {
			throw new NotFoundException(__('Invalid linea grupo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LineaGrupo->save($this->request->data)) {
				$this->Session->setFlash(__('The linea grupo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The linea grupo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LineaGrupo.' . $this->LineaGrupo->primaryKey => $id));
			$this->request->data = $this->LineaGrupo->find('first', $options);
		}
		$grupoInvestigacions = $this->LineaGrupo->GrupoInvestigacion->find('list');
		$lineaInvestigacions = $this->LineaGrupo->LineaInvestigacion->find('list');
		$this->set(compact('grupoInvestigacions', 'lineaInvestigacions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LineaGrupo->id = $id;
		if (!$this->LineaGrupo->exists()) {
			throw new NotFoundException(__('Invalid linea grupo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LineaGrupo->delete()) {
			$this->Session->setFlash(__('The linea grupo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The linea grupo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
