<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = 'error/notfound';
$route['translate_uri_dashes'] = FALSE;
$route['inicio'] = 'home/inicio';
$route['enviar-email'] = "home/sendemail";


/*ATENÇÃO:

 * AS ROTAS DE ACESSO AO PORTAL DO ALUNO ESTÃO CRIPTOGRAFADAS EM HASH MD5, POR EXEMPLO:
 * 
 * 
 *  O HASH: eab9e0b513487b2d4249bcdb356b7b04 CORRESPONDE À STRING 'meusdados', CONFORME ABAIXO:
 * 
 * $route['eab9e0b513487b2d4249bcdb356b7b04'] = 'home/meusdados';
 *  */

$route['inicio'] = 'home/inicio';
$route['quem-somos'] = 'home/sobre';
$route['nossos-cursos'] = 'home/cursos';
$route['simulador'] = 'home/simulador';
$route['aeronaves'] = 'home/frota';
$route['login'] = 'home/login';
$route['a6BMnaIGv6'] = 'home/portal';





$route['d52483908d02d1f417914982340702b2'] = 'home/quadroaviso';
$route['893ce80729195afed54dd71286ef15bc'] = 'home/inicio';
$route['686d4ba6996ab7e2bd626c9a3cc965c6'] = 'home/biblioteca';
$route['eab9e0b513487b2d4249bcdb356b7b04'] = 'home/meusdados';
$route['d77c0ae076adaeb3d214ed44ae3f49ea'] = 'home/pessoafisica';
$route['6183b37347b357daa37d3a5d6404f519'] = 'home/matricula';
$route['502d3f1c9100e0a1885b313db326f8be'] = 'home/gerarlogin';
$route['2e9c80ed9c52ddaaadd8448612e81a6f'] = 'home/novasemana';
$route['d0dbdfd8edf8dd1608405055c26adc94'] = 'home/agenda';
$route['13360ec8b88491302a9a77858058b398'] = 'home/restricoes';
$route['6cdcf6057f3a901d67ee966e3c4d8cb1'] = 'home/instrutores';
$route['1e34b7f181eec0093a8f7eda4d464d70'] = 'home/aeronaves';
$route['f6930a77eef8db4493e7ca8d5b2c6a02'] = 'home/nivelacesso';
$route['6b7efc47e7c76c3912203106eca72c56'] = 'home/noticias';
$route['27fcbab1da917bc875c8ac791a705b63'] = 'home/bancoimagens';
$route['alunos'] = 'home/alunos';

$route['recortar'] = 'pessoafisica/Recortar';
$route['visualizacao'] = 'pessoafisica/Visualizacao';

    

$route['portal/p'] = "home/pessoafisica";
$route['portal/p/(:num)'] = "home/pessoafisica";
