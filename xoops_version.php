<?php

// ------------------------------------------------------------------------- //
//               Xoops: Content Management System                           //
//                       < https://www.xoops.org >                          //
// ---------------------------------------------------------------------- //
// Author: Jan304														 //
// Author Email : jan304@pandora.be 									//
// Author website: http://www.jan304.org							   //
// ------------------------------------------------------------------ //

$modversion['name'] = _CO_NAME;
$modversion['version'] = 1.5;
$modversion['description'] = _CO_DESC;
$modversion['credits'] = 'The XOOPS Project';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'logo.gif';
$modversion['dirname'] = 'comics';
$modversion['author'] = 'Jan304 - http://www.jan304.org';

// Menu
$modversion['hasMain'] = 1;
// comment the following 4 lines out if you want to get rid of the submenus
$modversion['sub'][1]['name'] = 'Dilbert';
$modversion['sub'][1]['url'] = 'showcomic.php?comic=dilbert';
$modversion['sub'][2]['name'] = 'Garfield';
$modversion['sub'][2]['url'] = 'showcomic.php?comic=garfield';
// commented out by default, since this is something that was still from an ooolllddd version
// $modversion['sub'][3]['name'] = _CO_MORE;
// $modversion['sub'][3]['url'] = "index.php?nav=1";

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';

// Templates
$modversion['templates'][1]['file'] = 'comics_index.html';
$modversion['templates'][1]['description'] = 'The template file of the index file';
$modversion['templates'][2]['file'] = 'comics_showcomic.html';
$modversion['templates'][2]['description'] = 'The template file of the table of the comics.';
$modversion['templates'][3]['file'] = 'comics_dynamicmenu.html';
$modversion['templates'][3]['description'] = 'The dynamic menu.';
$modversion['templates'][4]['file'] = 'comics_comic.html';
$modversion['templates'][4]['description'] = 'The comic itself.';
$modversion['templates'][5]['file'] = 'comics_owncomic.html';
$modversion['templates'][5]['description'] = 'If user has comic, this is the place to place it.';

// Blocks
$modversion['blocks'][1]['file'] = 'comics_blocks.php';
$modversion['blocks'][1]['name'] = 'Comics';
$modversion['blocks'][1]['description'] = 'Shows a comic in a blok';
$modversion['blocks'][1]['show_func'] = 'comics_show';
$modversion['blocks'][1]['edit_func'] = 'comics_edit';
$modversion['blocks'][1]['options'] = 'dilbert';
$modversion['blocks'][1]['template'] = 'comics_daily.html';
