<?php
include_once 'model/user.php';
include_once 'function/main.php';
include_once 'config/static.php';

class UserController {
    static function login_index() {
        view('login');
    }

    static function register_index() {
        view('register');
    }

    static function login() {
        $post = array_map('htmlspecialchars', $_POST);

        $user = User::login([
            'email' => $post['email'], 
            'password' => $post['password']
        ]);
        if ($user) {
            unset($user['password']);
            $_SESSION['user'] = $user;
            header('Location: '.BASEURL.'home');
        }
        else {
            header('Location: '.BASEURL.'login?failed=true');
        }
    }

    static function register() {
        $post = array_map('htmlspecialchars', $_POST);

        $user = User::register([
            'email' => $post['email'],
            'password' => $post['password']
        ]);

        if ($user) {
            header('Location: '.BASEURL.'login');
        }
        else {
            header('Location: '.BASEURL.'register?failed=true');
        }
    }

    static function logout() {
        $_SESSION = array();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        session_destroy();
        header('Location: '.BASEURL. 'login');
    }
}