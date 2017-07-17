<?php

$router = new \App\Router;

$router->get('/', function () {

    //return 'Hello';

    return new \App\View('home');

});


//$router->get('/register', function () {
//    return new \App\View('register');
//});
//
//$router->post('/register', function () {
//    new Validator([
//
//    ]);
//
//    User::create([
//        'name' => $_POST['name'],
//    ]);
//
//    return new \App\View('register.successful');
//});


//$router->post('/login', function () {
//
//            //User::login($,)
//    $user = User::where('email', $_POST['email'])->get();
//    if ($user) {
//        if (password_verify($user->password, $_POST['password'])) {
//
//        }
//    } else {
//        // zwróć błędy, że nie ma uzytkownika o tym emailu
//    }
//
//    return new \App\View('register.successful');
//});

$router->run();