<?php
require_once config["CONTROLLER_FOLDER"] . "HomeController.php";
require_once config["CONTROLLER_FOLDER"] . "NotFoundController.php";
require_once config["CONTROLLER_FOLDER"] . "LoginController.php";

Route::addRoute("", new HomeController($dataBase));
Route::addRoute("home", new HomeController($dataBase));
Route::addRoute("404", new NotFoundController($dataBase));
Route::addRoute("login", new LoginController($dataBase));