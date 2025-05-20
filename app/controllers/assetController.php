use App\Validators\UserValidator;

$errors = UserValidator::validateRegistration($_POST);
if (!empty($errors)) {
    // エラー処理
}

<?php
require_once __DIR__ . '/../models/User.php';

class UserController {
    public function index() {
        $userModel = new User();
        $users = $userModel->getAll();
        include '../app/views/index.php';
    }

    public function store() {
        $userModel = new User();
        $data = [
            'name'  => $_POST['name'] ?? '',
            'email' => $_POST['email'] ?? '',
        ];
        $userModel->create($data);
        header('Location: /users');
    }
}

<?php

class UserController {
    public function create() {
        // 表示するビューを指定（レイアウト経由で読み込む）
        $viewPath = '../app/views/user_create.php';
        require_once '../app/views/layout.php';
    }

    public function store() {
        require_once '../app/models/User.php';
        $userModel = new User();

        $data = [
            'name'  => $_POST['name'] ?? '',
            'email' => $_POST['email'] ?? '',
        ];

        $userModel->create($data);

        // リダイレクト処理
        header('Location: /users');
        exit;
    }
}