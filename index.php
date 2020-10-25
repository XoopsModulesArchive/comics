<?php

//--------------------------------------------
// Including header.php, includes mainfile.php
//--------------------------------------------
include 'header.php';
//--------------------------------------------
// Load Template
//--------------------------------------------
$GLOBALS['xoopsOption']['template_main'] = 'comics_index.html';
//--------------------------------------------
// Include header
//--------------------------------------------
require XOOPS_ROOT_PATH . '/header.php';
//--------------------------------------------
// Include user settings
//--------------------------------------------
require XOOPS_ROOT_PATH . '/modules/comics/cache/settings.php';

// to templates => comics
$xoopsTpl->assign('sdilbert', $sdilbert);
$xoopsTpl->assign('sgarfield', $sgarfield);
$xoopsTpl->assign('s9to5', $s9to5);
$xoopsTpl->assign('sclose', $sclose);
$xoopsTpl->assign('sbaldo', $sbaldo);
$xoopsTpl->assign('skama', $skama);
$xoopsTpl->assign('smopvddag', $smopvddag);
$xoopsTpl->assign('sufriendly', $sufriendly);
$xoopsTpl->assign('shumorgraf', $shumorgraf);
$xoopsTpl->assign('smomma', $smomma);
$xoopsTpl->assign('ssinfest', $ssinfest);
$xoopsTpl->assign('suser', $suser);
// to templates => language
$xoopsTpl->assign('lang_co_nb', _CO_NB);
$xoopsTpl->assign('lang_co_kies', _CO_KIES);
$xoopsTpl->assign('lang_co_IND', _CO_IND);
$xoopsTpl->assign('lang_co_INT', _CO_INT);
// to templates => the user his comic
$xoopsTpl->assign('susertitel', $susertitel);
$xoopsTpl->assign('susercop', $susercop);

//--------------------------------------------
// Include footer
//--------------------------------------------
require XOOPS_ROOT_PATH . '/footer.php';
// done
