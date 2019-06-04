<?php

namespace application\models;

use application\core\Model;
use Imagick;

class Admin extends Model {

	public $error;

	public function loginValidate($post) {
		$config = require 'application/config/admin.php';
		if ($config['login'] != $post['login'] or $config['password'] != $post['password']) {
			$this->error = 'Логин или пароль указан неверно';
			return false;
		}
		return true;
	}

	public function postValidate($post, $type) {
		$nameLen = iconv_strlen($post['name']);
		$descriptionLen = iconv_strlen($post['description']);
		$textLen = iconv_strlen($post['text']);
		if ($nameLen < 3 or $nameLen > 100) {
			$this->error = 'Название должно содержать от 3 до 100 символов';
			return false;
		} elseif ($descriptionLen < 3 or $descriptionLen > 100) {
			$this->error = 'Описание должно содержать от 3 до 100 символов';
			return false;
		} elseif ($textLen < 10 or $textLen > 5000) {
			$this->error = 'Текст должнен содержать от 10 до 5000 символов';
			return false;
		}
		// if (empty($_FILES['img']['tmp_name']) and $type == 'add') {
		// 	$this->error = 'Изображение не выбрано';
		// 	return false;
		// }
		return true;
	}


	public function postAdd($post) {
		$params = [
			'id' => '',
			'name' => $post['name'],
			'description' => $post['description'],
			'text' => $post['text'],
			'youtube' => $post['youtube'],
			'client' => $post['client'],
			'price' => $post['price'],
			'title' =>  $post['titlepage'],
			'mdescription' => $post['mdescription'],
			'keywords' => $post['keywds'],
		];
		$this->db->query('INSERT INTO posts VALUES (:id, :name, :description, :text, :youtube, :client,
			:price, :title, :mdescription, :keywords )', $params);
		return $this->db->lastInsertId();
	}

	public function postEdit($post, $id) {
		$params = [
			'id' => $id,
			'name' => $post['name'],
			'description' => $post['description'],
			'text' => $post['text'],
			'youtube' => $post['youtube'],
			'client' => $post['client'],
			'price' => $post['price'],
			'title' =>  $post['titlepage'],
			'mdescription' => $post['mdescription'],
			'keywords' => $post['keywds'],
		];
		$this->db->query('UPDATE posts SET name = :name, description = :description,
			 text = :text, youtube= :youtube, client= :client, price= :price, title= :title,
			 mdescription= :mdescription, keywords= :keywords  WHERE id = :id', $params);
		/*
		$this->db->query('UPDATE posts SET name = :name, description = :description,
			 text = :text, youtube= :youtube, client= :client,
			 price= :price, title= :title, description= :description,
			 keywords= :keywords  WHERE id = :id', $params);
		}
		*/
	}

	public function postUploadImage($path, $id) {
		move_uploaded_file($path, 'public/materials/'.$id.'.jpg');
		// $img = new Imagick($path);
		// $img->cropThumbnailImage(1080, 600);
		// $img->setImageCompressionQuality(80);
		// $img->writeImage('public/materials/'.$id.'.jpg');
	}

	public function postUploadImages($path, $id){
        mkdir('public/materials/'.$id);
		foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name){
			$temp = $_FILES["files"]["tmp_name"][$key];
			$name = $_FILES["files"]["name"][$key];
			if(empty($temp))
			{
				break;
			}

			move_uploaded_file($temp,'public/materials/'.$id.'/'.$name);
		}
	}

	// public function postUploadImages($path, $id) {
	// 	foreach($_FILES['file']['name'] as $k=>$f) {
	// 		if (!$_FILES['file']['error'][$k]) {
	// 			if (is_uploaded_file($_FILES['file']['tmp_name'][$k])) {//Проверка загрузки файла во временное хранилище
	// 				if (move_uploaded_file($_FILES['file']['tmp_name'][$k], $dir . $_FILES['file']['name'][$k])) {//Перемещение временного файла
	// 					echo '<p>Файл: '.$_FILES['file']['name'][$k].' загружен.</p>';
	// 				}
	// 			}
	// 		}
	// 		$sql = "insert into file_multi values(NULL, \"{$_FILES['file']['name'][$k]}\")";
	// 		$conn->query($sql);
	// 	}
	// 	move_uploaded_file($path, 'public/materials/'.$id.'.jpg');
	// }

	public function isPostExists($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->column('SELECT id FROM posts WHERE id = :id', $params);
	}

	public function postDelete($id) {
		$params = [
			'id' => $id,
		];
		$this->db->query('DELETE FROM posts WHERE id = :id', $params);
		unlink('public/materials/'.$id.'.jpg');
	}

	public function postData($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->row('SELECT * FROM posts WHERE id = :id', $params);
	}

}
