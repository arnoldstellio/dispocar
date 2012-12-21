<?php

/************************************************************************* fonctions membres ****************************** */
class OvehiculesController extends AppController {

	var $name = 'Ovehicules';
	var $helpers = array('Ck');

	function membres_index() {
		$this->Ovehicule->recursive = 0;
		$this->set('ovehicules', $this->paginate());
	}

	function membres_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ovehicule', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ovehicule', $this->Ovehicule->read(null, $id));
	}

	function membres_add() {
		if (!empty($this->data)) {
			$this->Ovehicule->create();
			if ($this->Ovehicule->save($this->data)) {
				$this->Session->setFlash(__('The ovehicule has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ovehicule could not be saved. Please, try again.', true));
			}
		}
		$parcs = $this->Ovehicule->Parc->find('list');
		$this->set(compact('parcs'));
	}

	function membres_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ovehicule', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ovehicule->save($this->data)) {
				$this->Session->setFlash(__('The ovehicule has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ovehicule could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ovehicule->read(null, $id);
		}
		$parcs = $this->Ovehicule->Parc->find('list');
		$this->set(compact('parcs'));
	}

	function membres_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ovehicule', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ovehicule->delete($id)) {
			$this->Session->setFlash(__('Ovehicule deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ovehicule was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	/************************************************************************* fonctions admin ****************************** */
	
	function admin_index() {
		$this->Ovehicule->recursive = 0;
		$this->set('ovehicules', $this->paginate());
	}
	
	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ovehicule', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ovehicule', $this->Ovehicule->read(null, $id));
	}

}
