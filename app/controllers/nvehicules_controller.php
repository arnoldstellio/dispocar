<?php
class NvehiculesController extends AppController {

	var $name = 'Nvehicules';
	var $helpers = array('Ck');

/************************************************************************ fonctions admin****/

	function admin_index() {
		$this->Nvehicule->recursive = 0;
		$this->set('nvehicules', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid nvehicule', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('nvehicule', $this->Nvehicule->read(null, $id));
	}

	
/****************************************************************************************** fonctions membres****/
	
    function membres_index() {
		$this->Nvehicule->recursive = 0;
		$this->set('nvehicules', $this->paginate());
	}
	
	function membres_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid nvehicule', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('nvehicule', $this->Nvehicule->read(null, $id));
	}
	
	function membres_add() {
		if (!empty($this->data)) {
			$this->Nvehicule->create();
			if ($this->Nvehicule->save($this->data)) {
				$this->Session->setFlash(__('The nvehicule has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nvehicule could not be saved. Please, try again.', true));
			}
		}
		$parcs = $this->Nvehicule->Parc->find('list');
		$this->set(compact('parcs'));

	}
	
	function membres_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid nvehicule', true));
			$this->redirect(array('action' => 'index'));
			$this->Nvehicule->save($this->data);

		}
		if (!empty($this->data)) {
			if ($this->Nvehicule->save($this->data)) {
				$this->Session->setFlash(__('The nvehicule has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nvehicule could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Nvehicule->read(null, $id);
		}
		$parcs = $this->Nvehicule->Parc->find('list');
		$this->set(compact('parcs'));
	}
	
		function membres_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for nvehicule', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Nvehicule->delete($id)) {
			$this->Session->setFlash(__('Nvehicule deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Nvehicule was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	
	
	

}
