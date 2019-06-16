<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login'] = 'session_controller/index';
$route['login/login_action'] = 'session_controller/login_action';
$route['logout'] = 'session_controller/logout';

$route['pendataan'] = 'pendataan_controller/index';
$route['pendataan/tambah'] = 'pendataan_controller/create';
$route['pendataan/tambah_keluarga'] = 'pendataan_controller/add_keluarga';
$route['pendataan/tambah_saudara'] = 'pendataan_controller/add_saudara';
$route['pendataan/edit/(:any)'] = 'pendataan_controller/edit/$1';
$route['pendataan/hapus_saudara/(:any)'] = 'pendataan_controller/hapus_saudara/$1';
$route['pendataan/update_keluarga/(:any)'] = 'pendataan_controller/update_keluarga/$1';
$route['pendataan/update_saudara/(:any)'] = 'pendataan_controller/update_saudara/$1';
$route['pendataan/hapus/(:any)'] = 'pendataan_controller/delete_keluarga/$1';

$route['pengguna'] = 'pengguna_controller/index';
$route['pengguna/simpan'] = 'pengguna_controller/simpan';
$route['pengguna/update'] = 'pengguna_controller/update';
$route['pengguna/hapus'] = 'pengguna_controller/hapus';
$route['pengguna/reset_password/(:num)'] = 'pengguna_controller/reset_password/$1';

$route['berita'] = 'berita_controller/index';
$route['berita/tulis'] = 'berita_controller/tulis';
$route['berita/tulis/simpan'] = 'berita_controller/simpan';
$route['berita/tulis/edit/(:any)'] = 'berita_controller/edit/$1';
$route['berita/tulis/update'] = 'berita_controller/update';
$route['berita/tulis/hapus'] = 'berita_controller/hapus';

$route['berita/kategori'] = 'kategori_controller/index';
$route['berita/kategori/simpan'] = 'kategori_controller/simpan';
$route['berita/kategori/update'] = 'kategori_controller/update';
$route['berita/kategori/hapus'] = 'kategori_controller/hapus';

$route['agenda'] = 'agenda_controller/index';
$route['agenda/simpan'] = 'agenda_controller/simpan';
$route['agenda/update'] = 'agenda_controller/update';
$route['agenda/hapus'] = 'agenda_controller/hapus';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
