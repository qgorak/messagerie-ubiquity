<?php
namespace controllers;

use Ubiquity\orm\DAO;
use models\User;
 /**
 * Controller TestUserController
 */
class TestUserController extends ControllerBase{

	public function index(){
		$users=DAO::getAll(User::class, 'firstname like ?', [
				'organization'
		],[
				'%g%'
		]);
		$this->loadDefaultView(['users'=> $users]);
	}
}
