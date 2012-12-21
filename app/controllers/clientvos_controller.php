<?php

//controleur du client qui achète un véhicule d'occassion

class ClientvosController extends AppController {

	var $name = 'Clientvos';
	var $helpers = array('Ck');


	
/****************************************************************************************** fonctions membres****/

	function membres_index() {
		$this->Clientvo->recursive = 0;
		$this->set('clientvos', $this->paginate());
	}

	function membres_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid client', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('clientvo', $this->Clientvo->read(null, $id));
	}

	function membres_add() {
		if (!empty($this->data)) {
			$this->Clientvo->create();
			if ($this->Clientvo->save($this->data)) {
				$this->Session->setFlash(__('The client has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client could not be saved. Please, try again.', true));
			}
		}
		$ovehicules = $this->Clientvo->Ovehicule->find('list');
		$this->set(compact('ovehicules'));
		
		
	}

	function membres_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid client', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Clientvo->save($this->data)) {
				$this->Session->setFlash(__('The client has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Clientvo->read(null, $id);
		}
	}

	function membres_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for client', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Clientvo->delete($id)) {
			$this->Session->setFlash(__('Client deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Client was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	/****************************************************************************************** fonctions admin****/
	
	function admin_index() {
		$this->Clientvo->recursive = 0;
		$this->set('clientvos', $this->paginate());
	}
	
	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid client', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('clientvo', $this->Clientvo->read(null, $id));
	}

}
