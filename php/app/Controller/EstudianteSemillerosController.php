<?php
App::uses('AppController', 'Controller');
/**
 * EstudianteSemilleros Controller
 *
 * @property EstudianteSemillero $EstudianteSemillero
 * @property PaginatorComponent $Paginator
 */
class EstudianteSemillerosController extends AppController {

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
		$this->EstudianteSemillero->recursive = 0;
		$this->set('estudianteSemilleros', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EstudianteSemillero->exists($id)) {
			throw new NotFoundException(__('Invalid estudiante semillero'));
		}
		$options = array('conditions' => array('EstudianteSemillero.' . $this->EstudianteSemillero->primaryKey => $id));
		$this->set('estudianteSemillero', $this->EstudianteSemillero->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EstudianteSemillero->create();
			if ($this->EstudianteSemillero->save($this->request->data)) {
				$this->Session->setFlash(__('The estudiante semillero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estudiante semillero could not be saved. Please, try again.'));
			}
		}
		$estudiantes = $this->EstudianteSemillero->Estudiante->find('list');
		$semilleros = $this->EstudianteSemillero->Semillero->find('list');
		$this->set(compact('estudiantes', 'semilleros'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EstudianteSemillero->exists($id)) {
			throw new NotFoundException(__('Invalid estudiante semillero'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EstudianteSemillero->save($this->request->data)) {
				$this->Session->setFlash(__('The estudiante semillero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estudiante semillero could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EstudianteSemillero.' . $this->EstudianteSemillero->primaryKey => $id));
			$this->request->data = $this->EstudianteSemillero->find('first', $options);
		}
		$estudiantes = $this->EstudianteSemillero->Estudiante->find('list');
		$semilleros = $this->EstudianteSemillero->Semillero->find('list');
		$this->set(compact('estudiantes', 'semilleros'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EstudianteSemillero->id = $id;
		if (!$this->EstudianteSemillero->exists()) {
			throw new NotFoundException(__('Invalid estudiante semillero'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EstudianteSemillero->delete()) {
			$this->Session->setFlash(__('The estudiante semillero has been deleted.'));
		} else {
			$this->Session->setFlash(__('The estudiante semillero could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
