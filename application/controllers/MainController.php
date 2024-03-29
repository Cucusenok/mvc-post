<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Admin;

class MainController extends Controller {

	public function indexAction() {

		$pagination = new Pagination($this->route, $this->model->postsCount());
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $this->model->postsList($this->route),
		];
		$this->view->render('Главная страница', $vars);
	}



		public function priceAction() {
		$this->view->render('Главная страница');
	}

	public function reviewsAction() {
	$this->view->render('Главная страница');
}


		public function galleryAction() {
		$pagination = new Pagination($this->route, $this->model->postsCount());
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $this->model->postsList($this->route),
		];
		$this->view->render('Главная страница', $vars);
	}



	public function postAction() {
		$adminModel = new Admin;
		if (!$adminModel->isPostExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		$vars = [
			'data' => $adminModel->postData($this->route['id'])[0],];


		$test =   $adminModel->postData($this->route['id'])[0];
		$this->view->render($test, $vars);

	}

}
