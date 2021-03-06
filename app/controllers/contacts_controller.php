﻿<?php
class ContactsController extends AppController {

	var $name = 'Contacts';
	var $components = array('Auth');

	function index() {
		$this->Contact->recursive = 0;
		$this->set('contacts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid contact', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('contact', $this->Contact->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Contact->create();
			if ($this->Contact->save($this->data)) {
			         $this->redirect(array('action' => 'confirmation'));
			} else {
				$this->Session->setFlash(__('Le méssage ne peut être envoyé...', true));
			}
		}
		
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid contact', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Contact->save($this->data)) {
				$this->Session->setFlash(__('The contact has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Contact->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for contact', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Contact->delete($id)) {
			$this->Session->setFlash(__('Contact deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Contact was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Contact->recursive = 0;
		$this->set('contacts', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid contact', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('contact', $this->Contact->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Contact->create();
			if ($this->Contact->save($this->data)) {
				$this->Session->setFlash(__('The contact has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact could not be saved. Please, try again.', true));
			}
		}
	}
//fonction traiter , etat du mail
	function admin_traiter($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid contact', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Contact->save($this->data)) {
				$this->Session->setFlash(__('The contact has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Contact->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for contact', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Contact->delete($id)) {
			$this->Session->setFlash(__('Contact deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Contact was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function confirmation() {
	
	}
}
