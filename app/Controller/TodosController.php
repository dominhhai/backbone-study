<?php
App::uses ( 'AppController', 'Controller' );
/**
 * Todos Controller
 *
 * @property Todo $Todo
 */
class TodosController extends AppController {
	
	public function beforeFilter() {
		parent::beforeFilter ();
	}
	
	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
	}
}
