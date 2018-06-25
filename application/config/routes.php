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

/* LOGIN */
$route['default_controller'] = 'Website';
$route['administrator'] = '/admin/Dashbord';
$route['administrator/settingsave'] = '/admin/Dashbord/settingsave';
$route['administrator/updatepaging/(:num)/(:any)'] = '/admin/Dashbord/updatepaging/$1/$2';

$route['login'] = 'Login';
$route['logout'] = 'Login/logout';
$route['login/mac'] = 'Login/mac';
$route['login/cek_login'] = 'Login/cek_login';
/* FILES */

$route['administrator/files'] = '/admin/Files';

// $route['administrator/files/grid'] = '/admin/Files/grid';
// $route['administrator/files/table'] = '/admin/Files/table';
$route['administrator/files/save'] = '/admin/Files/save';
$route['administrator/files/page'] = '/admin/Files';
$route['administrator/files/page/(:any)'] = '/admin/Files/page/$1';
$route['administrator/files/delete/(:num)'] = '/admin/Files/delete/$1';
$route['administrator/files/load/(:any)/(:any)/(:any)'] = '/admin/Files/load/$1/$2/$3';
$route['administrator/files/getDetail/(:num)'] = '/admin/Files/getDetail/$1';

/* CATEGORY */
$route['administrator/category'] = '/admin/Category';
$route['administrator/category/save'] = '/admin/Category/save';
$route['administrator/category/delete'] = '/admin/Category/delete';
$route['administrator/category/delete/(:any)'] = '/admin/Category/delete/$1';

/* NEWS */
$route['administrator/news'] = '/admin/News';
$route['administrator/news/page'] = '/admin/News';
$route['administrator/news/action'] = '/admin/News/action';
$route['administrator/news/page/(:any)'] = '/admin/News/index/$1';
$route['administrator/news/add'] = '/admin/News/add';
$route['administrator/news/save'] = '/admin/News/save';
$route['administrator/news/addimg'] = '/admin/News/addimg';
$route['administrator/news/upload'] = '/admin/News/upload';
$route['administrator/news/files/(:any)'] = '/admin/News/files/$1';
$route['administrator/news/deletefile'] = '/admin/News/deletefile';
$route['administrator/news/edit/(:num)'] = '/admin/News/edit/$1';
$route['administrator/news/addkategori/(:any)'] = '/admin/News/addkategori/$1';
$route['administrator/news/autosave'] = '/admin/News/autosave';
$route['administrator/news/savetodraf'] = '/admin/News/savetodraf';
$route['administrator/news/delete/(:num)'] = '/admin/News/delete/$1';
$route['administrator/news/create_corner/(:num)'] = '/admin/News/create_corner/$1';
$route['administrator/news/delete_corner/(:num)'] = '/admin/News/delete_corner/$1';
$route['administrator/news/update_pending/(:num)'] = '/admin/News/update_pending/$1';

/* PAGES */
$route['administrator/pages'] = '/admin/Pages';
$route['administrator/pages/(:num)'] = '/admin/Pages/index/$1';
$route['administrator/pages/action'] = '/admin/Pages/action';
$route['administrator/pages/add'] = '/admin/Pages/add';
$route['administrator/pages/save'] = '/admin/Pages/save';
$route['administrator/pages/edit/(:num)'] = '/admin/Pages/edit/$1';
$route['administrator/pages/autosave'] = '/admin/Pages/autosave';
$route['administrator/pages/savetodraf'] = '/admin/Pages/savetodraf';
$route['administrator/pages/delete/(:num)'] = '/admin/Pages/delete/$1';
/* RESEARCH */
$route['administrator/research'] = '/admin/Research';
$route['administrator/research/(:num)'] = '/admin/Research/index/$1';
$route['administrator/research/action'] = '/admin/Research/action';
$route['administrator/research/add'] = '/admin/Research/add';
$route['administrator/research/save'] = '/admin/Research/save';
$route['administrator/research/edit/(:num)'] = '/admin/Research/edit/$1';
$route['administrator/research/autosave'] = '/admin/Research/autosave';
$route['administrator/research/savetodraf'] = '/admin/Research/savetodraf';
$route['administrator/research/delete/(:num)'] = '/admin/Research/delete/$1';
/* MENU */
$route['administrator/menu'] = '/admin/Menu';
$route['administrator/menu/posisi'] = '/admin/Menu/posisi';
$route['administrator/menu/add'] = '/admin/Menu/add';
$route['administrator/menu/save'] = '/admin/Menu/save';
$route['administrator/menu/delete'] = '/admin/Menu/delete';
$route['administrator/menu/edit/(:any)'] = '/admin/Menu/edit/$1';
$route['administrator/menu/update'] = '/admin/Menu/update';
/* SETTING LAYOUT */
$route['administrator/layout'] = '/admin/Layout';
$route['administrator/layout/save'] = '/admin/Layout/save';
$route['administrator/layout/cek_post/(:num)/(:any)'] = '/admin/Layout/cek_post/$1/$2';

/*SLIDER */
$route['administrator/slider'] = 'admin/Slider';
$route['administrator/slider/add'] = 'admin/Slider/add';
$route['administrator/slider/edit/(:num)'] = 'admin/Slider/edit/$1';
$route['administrator/slider/delete/(:num)'] = 'admin/Slider/delete/$1';
$route['administrator/slider/openPOPUP/(:any)'] = 'admin/Slider/openPOPUP/$1';
$route['administrator/slider/save'] = 'admin/Slider/save';
$route['administrator/slider/update'] = 'admin/Slider/update';





 /* AKN PONOROGO */
/* ===========  */
/*  PENGUMUMAN */
$route['administrator/announcement'] = 'admin/Announcement';
$route['administrator/announcement/(:num)'] = '/admin/Announcement/index/$1';
$route['administrator/announcement/action'] = '/admin/Announcement/action';
$route['administrator/announcement/add'] = '/admin/Announcement/add';
$route['administrator/announcement/save'] = '/admin/Announcement/save';
$route['administrator/announcement/edit/(:num)'] = '/admin/Announcement/edit/$1';
$route['administrator/announcement/autosave'] = '/admin/Announcement/autosave';
$route['administrator/announcement/savetodraf'] = '/admin/Announcement/savetodraf';
$route['administrator/announcement/delete/(:num)'] = '/admin/Announcement/delete/$1';
$route['administrator/announcement/eng_post/(:num)'] = '/admin/Announcement/eng_post/$1';
$route['administrator/announcement/eng_post_save'] = '/admin/Announcement/eng_post_save';

/*  AGENDA */
$route['administrator/agenda'] = 'admin/Agenda';
$route['administrator/agenda/(:num)'] = '/admin/Agenda/index/$1';
$route['administrator/agenda/action'] = '/admin/Agenda/action';
$route['administrator/agenda/add'] = '/admin/Agenda/add';
$route['administrator/agenda/save'] = '/admin/Agenda/save';
$route['administrator/agenda/edit/(:num)'] = '/admin/Agenda/edit/$1';
$route['administrator/agenda/autosave'] = '/admin/Agenda/autosave';
$route['administrator/agenda/savetodraf'] = '/admin/Agenda/savetodraf';
$route['administrator/agenda/delete/(:num)'] = '/admin/Agenda/delete/$1';

/*  PRODUK */
$route['administrator/product'] = 'admin/Product';
$route['administrator/product/(:num)'] = '/admin/Product/index/$1';
$route['administrator/product/action'] = '/admin/Product/action';
$route['administrator/product/add'] = '/admin/Product/add';
$route['administrator/product/save'] = '/admin/Product/save';
$route['administrator/product/edit/(:num)'] = '/admin/Product/edit/$1';
$route['administrator/product/autosave'] = '/admin/Product/autosave';
$route['administrator/product/savetodraf'] = '/admin/Product/savetodraf';
$route['administrator/product/delete/(:num)'] = '/admin/Product/delete/$1';

/*  MODULE */
$route['administrator/module'] = '/admin/Module';
$route['administrator/module/(:num)'] = '/admin/Module/index/$1';
$route['administrator/module/action'] = '/admin/Module/action';
$route['administrator/module/add'] = '/admin/Module/add';
$route['administrator/module/save'] = '/admin/Module/save';
$route['administrator/module/update'] = '/admin/Module/update';
$route['administrator/module/edit/(:num)'] = '/admin/Module/edit/$1';
$route['administrator/module/delete'] = '/admin/Module/delete';
$route['administrator/module/ambil_cabang/(:num)'] = '/admin/Module/ambil_cabang/$1';

/*  USER */
$route['administrator/user'] = '/admin/User';
$route['administrator/user/(:num)'] = '/admin/User/index/$1';
$route['administrator/user/action'] = '/admin/User/action';
$route['administrator/user/add'] = '/admin/User/add';
$route['administrator/user/save'] = '/admin/User/save';
$route['administrator/user/update'] = '/admin/User/update';
$route['administrator/user/edit/(:num)'] = '/admin/User/edit/$1';
$route['administrator/user/delete/(:num)'] = '/admin/User/delete/$1';
$route['administrator/user/deleteAll'] = '/admin/User/deleteAll';
$route['administrator/user/cek_hak_akses_user'] = '/admin/User/cek_hak_akses_user';

/*PROFILE */
$route['administrator/profile'] = 'admin/Profile';
$route['administrator/profile/edit'] = 'admin/Profile/edit';
$route['administrator/profile/update'] = 'admin/Profile/update';

# LINK LUAR #
$route['administrator/link'] = 'admin/Link';
$route['administrator/link/save'] = 'admin/Link/save';
$route['administrator/link/edit/(:num)'] = 'admin/Link/edit/$1';
$route['administrator/link/update'] = 'admin/Link/update';
$route['administrator/link/delete'] = 'admin/Link/delete';

#GALERY
$route['administrator/galery'] = 'admin/Galery';
$route['administrator/galery/(:num)'] = 'admin/Galery/index/$1';
$route['administrator/galery/save'] = 'admin/Galery/save';
$route['administrator/galery/add'] = 'admin/Galery/add';
$route['administrator/galery/hapus/(:num)'] = 'admin/Galery/hapus/$1';
$route['administrator/galery/add_image_to_albume/(:num)/(:any)'] = 'admin/Galery/add_image_to_albume/$1/$2';

#  WEB FRONT ROUTES  #
# ================== #
$route['announcement'] = 'Website/announcement';
$route['announcement/(:any)'] = 'Website/announcement/$1';
$route['announcement/page'] = 'Website/announcement/page';
$route['announcement/page/(:num)'] = 'Website/announcement/$1';

$route['agenda'] = 'Website/agenda';
$route['agenda/(:any)'] = 'Website/agenda/$1';

$route['product'] = 'Website/product';
$route['product/(:any)'] = 'Website/product/$1';

$route['gallery'] = 'Website/gallery';
$route['gallery/(:num)'] = 'Website/gallery/$1';
# ================== #
$route['extractVideoID'] = 'Website/extractVideoID';
$route['sitemap'] = 'Website/sitemap';
$route['about'] = 'Website/about';
$route['location'] = 'Website/location';
$route['contact'] = 'Website/contact';
$route['contact/save'] = 'Website/contact_save';
$route['prestasi'] = 'Website/prestasi';
$route['prestasi/(:num)'] = 'Website/prestasi/$1';
$route['research'] = 'Website/research';
$route['research/(:any)'] = 'Website/research/$1';
$route['research_next/(:num)'] = 'Website/research_next/$1';
$route['lang'] = 'Website/lang';

$route['news'] = 'Website/news';
$route['news/page'] = 'Website/news/page';
$route['news/page/(:num)'] = 'Website/news/$1';
$route['tag/(:any)'] = 'Website/tag/$1';
$route['tag/(:any)/(:num)'] = 'Website/tag/$1/$2';
$route['news/(:num)/(:any)'] = 'Website/news/$1/$2';

$route['send_email'] = 'Website/send_email';

$route['(:any)'] = 'Website/pages/$1';
$route['(:any)/(:any)'] = 'Website/pages/$1/$2';

/* ERROR */
$route['NotFound'] = 'NotFound';
$route['not_access'] = 'NotFound/not_access';
$route['a/b'] = 'asset/images/files/';
$route['404_override'] = 'NotFound';
$route['translate_uri_dashes'] = FALSE;
