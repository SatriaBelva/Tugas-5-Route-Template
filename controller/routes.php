<?php
route('/', 'get', function () {
    echo ('Hello World!');
});

route('login',    'get',  'user::login_index');
route('login',    'post', 'user::login');
route('register', 'post', 'user::register_index');
route('register', 'get',  'user::register');
route('logout',   'get',  'user::logout');

route('home',   'get',  'contact::index');
route('add',    'get',  'contact::add');
route('edit',   'get',  'contact::edit');
route('add',    'post', 'contact::create');
route('edit',   'post', 'contact::update');
route('delete', 'post', 'contact::delete');
