 <?php

use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PostController::index');
$routes->post('post/add/', 'PostController::addPost');
$routes->get('posts/ajax', 'PostController::ajaxPosts');
$routes->get('post/fetch/(:num)', 'PostController::getPost/$1');
$routes->get('post/delete/(:num)', 'PostController::deletePost/$1');
$routes->post('post/update/', 'PostController::updatePost');
$routes->get('post/show/(:num)', 'PostController::showPost/$1');



