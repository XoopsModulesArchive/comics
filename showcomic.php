<?php

//--------------------------------------------
// What a sort of request is this?
//--------------------------------------------
unset($validrequest);
unset($url_to_image);
unset($copywho);
unset($url_to_archive);
unset($skamalang);
unset($sbaldolang);
unset($comic);
//--------------------------------------------
// Include header, this includes mainfile.php
//--------------------------------------------
include 'header.php';
//--------------------------------------------
// Define the to use template
//--------------------------------------------
$GLOBALS['xoopsOption']['template_main'] = 'comics_showcomic.html';
//--------------------------------------------
// Include xoops header
//--------------------------------------------
require XOOPS_ROOT_PATH . '/header.php';
//--------------------------------------------
// Include settings
//--------------------------------------------
require XOOPS_ROOT_PATH . '/modules/comics/cache/settings.php';
//--------------------------------------------
// Fix the problems if register_globals are off
//--------------------------------------------
$comic = $_GET['comic'];
//--------------------------------------------
// What year are we, what day are we?
//--------------------------------------------
$copyear = date('Y');
$theday = date('w');
//--------------------------------------------
// We start loading the comics
//--------------------------------------------
/* Loading Dilbert */
if ('On' == $sdilbert) {
    if ('dilbert' == $comic) {
        // Dilbert part Created by Ali (^_^)

        // dbz_gt01@hotmail.com

        $inhoud = file('http://www.dilbert.com/');

        $inhoud = implode('', $inhoud);

        $part = explode('<!-- TABS AND COMIC TABLE BEGIN -->', $inhoud);

        $part1 = explode('<IMG SRC="/comics/dilbert/archive', $part[1]);

        $part2 = explode('" BORDER=0 ALT="', $part1[1]);

        $picture = $part2[0];

        $url_to_image = 'http://www.dilbert.com/comics/dilbert/archive' . $picture . '';

        $copywho = 'dilbert.com';

        $url_to_archive = 'http://www.dilbert.com';

        $validrequest = 1;
    }
}
/* Dilbert is on your page	*/

/* go load garfield */
if ('On' == $sgarfield) {
    if ('garfield' == $comic) {
        $yeargar = date('Y');

        $yeargar2 = date('y');

        $monthgar = date('m');

        $daygar = date('d');

        $url_to_image = 'http://images.ucomics.com/comics/ga/' . $yeargar . '/ga' . $yeargar2 . '' . $monthgar . '' . $daygar . '.gif';

        $copywho = 'Paws, Inc';

        $nav2text .= "=&gt;Garfield&lt;=<br>\n";

        $url_to_archive = 'http://www.ucomics.com/garfield/';

        $validrequest = 1;
    }
}
/* done loading garfield */

/* go to load 9 to 5 */
if ('On' == $s9to5) {
    if ('9to5' == $comic) {
        $yeartmntf = date('Y');

        $yeartmntf2 = date('y');

        $monthtmntf = date('m');

        $daytmntf = date('d');

        $url_to_image = 'http://images.ucomics.com/comics/tmntf/' . $yeartmntf . '/tmntf' . $yeartmntf2 . '' . $monthtmntf . '' . $daytmntf . '.gif';

        $copywho = 'Harley Schwadron';

        $url_to_archive = 'http://www.ucomics.com/9to5/';

        $validrequest = 1;
    }
}
/* done loading 9 to 5 */

/* go to load Close to Home */
if ('On' == $sclose) {
    if ('close' == $comic) {
        $yearcl = date('Y');

        $yearcl2 = date('y');

        $monthcl = date('m');

        $daycl = date('d');

        $url_to_image = 'http://images.ucomics.com/comics/cl/' . $yearcl . '/cl' . $yearcl2 . '' . $monthcl . '' . $daycl . '.gif';

        $copywho = 'John McPherson';

        $url_to_archive = 'http://www.ucomics.com/closetohome/';

        $validrequest = 1;
    }
}
/* done loading Close to Home */

/* go to load Baldo */
if ('On' == $sbaldo) {
    if ('baldo' == $comic) {
        if ('1' == $sbaldolang) {
            $yearba = date('Y');

            $yearba2 = date('y');

            $monthba = date('m');

            $dayba = date('d');

            $url_to_image = 'http://images.ucomics.com/comics/ba/' . $yearba . '/ba' . $yearba2 . '' . $monthba . '' . $dayba . '.gif';

            $copywho = 'Hector D. Cantu and Carlos Castellanos';

            $url_to_archive = 'http://www.ucomics.com/baldo/';

            $validrequest = 1;
        } else {
            $yearba = date('Y');

            $yearba2 = date('y');

            $monthba = date('m');

            $dayba = date('d');

            $url_to_image = 'http://images.ucomics.com/comics/be/' . $yearba . '/be' . $yearba2 . '' . $monthba . '' . $dayba . '.gif';

            $copywho = 'Hector D. Cantu and Carlos Castellanos';

            $url_to_archive = 'http://www.ucomics.com/baldoespanol/';

            $validrequest = 1;
        }
    }
}
/* Done loading Baldo */

/* done loading Kamagurka */
if ('On' == $skama) {
    if ('kama' == $comic) {
        if ('1' == $skamalang) {    // ex. www.kamagurka.com/nederl/daily/4-8.gif
            $monthka = date('n');

            $dayka = date('j');

            $url_to_image = 'http://www.kamagurka.com/nederl/daily/' . $monthka . '-' . $dayka . '.gif';

            $copywho = 'Kamagurka';

            $url_to_archive = 'http://www.kamagurka.com';

            $validrequest = 1;
        } else {    // ex. www.kamagurka.com/english/daily/8-4.gif
            $monthka = date('n');

            $dayka = date('j');

            $url_to_image = 'http://www.kamagurka.com/english/daily/' . $dayka . '-' . $monthka . '.gif';

            $copywho = 'Kamagurka';

            $url_to_archive = 'http://www.kamagurka.com';

            $validrequest = 1;
        }
    }
}
/* done loading Kamagurka */

/* loading Mop van de dag */
if ('On' == $smopvddag) {
    if ('mopvddag' == $comic) {
        // Copyright 2002 - Ali!

        // dbz_gt01@hotmail.com

        $inhoud = file('http://www.moppen.nl/main_moppen.php3');

        $inhoud = implode('', $inhoud);

        $top1 = explode('<!-- moptitel -->', $inhoud);

        $top2 = explode('<font face="Arial" size="3" color="#FFCC00"><b>', $top1[1]);

        $top3 = explode('</b></font><br>', $top2[1]);

        $titel = $top3[0];

        $part1 = explode('<form><textarea name="textfield"', $inhoud);

        $compleet = $part1[1];

        $part2 = explode(' cols="45" rows="7" wrap="auto">', $compleet);

        $part3 = explode('</textarea>', $part2[1]);

        $link = $part3[0];

        $link = nl2br($link);

        $link = stripslashes($link);

        $copywho = 'moppen.nl';

        $url_to_archive = 'http://www.moppen.nl';

        $validrequest = 1;
    }
}
/* done loading Mop van de dag */

/* loading Userfriendly */
if ('On' == $sufriendly) {
    if ('ufriendly' == $comic) {
        $yeargar = date('Y');

        $monthgar = date('m');

        $daygar = date('d');

        $inhoud = file('http://ars.userfriendly.org/cartoons/?id=' . $yeargar . '' . $monthgar . '' . $daygar . '');

        $inhoud = implode('', $inhoud);

        $part = explode('<a href="/cartoons/?id=' . $yeargar . '' . $monthgar . '' . $daygar . '">', $inhoud);

        $part1 = explode('<img border="0" src="http://www.userfriendly.org/cartoons/archives/', $part[1]);

        $part2 = explode('" width="', $part1[1]);

        $picture = $part2[0];

        $url_to_image = 'http://www.userfriendly.org/cartoons/archives/' . $picture . '';

        $copywho = 'userfriendly.org';

        $url_to_archive = 'http://www.userfriendly.org';

        $validrequest = 1;
    }
}
/* done loading User friendly */

/* loading Humor Grafico */
if ('On' == $shumorgraf) {
    if ('humorgraf' == $comic) {
        $url_to_image = 'http://www.humornegro.com/modules/fotodeldia/foto_del_dia.jpg';

        $copywho = 'humornegro.com';

        $url_to_archive = 'http://www.humornegro.com';

        $validrequest = 1;
    }
}
/* done loading Humor Grafico */

/* loading Mommy */
if ('On' == $smomma) {
    if ('momma' == $comic) {
        $yearmom = date('Y');

        $monthmom = date('m');

        $daymom = date('d');

        $inhoud = file('http://www.comics.com/creators/momma/');

        $inhoud = implode('', $inhoud);

        $part = explode('<TD WIDTH="609" BGCOLOR="#FFFFFF" COLSPAN="8">', $inhoud);

        $part1 = explode('<IMG SRC="/creators/momma/archive/images/', $part[1]);

        $part2 = explode("\" ALT=\"Today's Comic\" BORDER=\"0\">", $part1[1]);

        $picture = $part2[0];

        $url_to_image = 'http://www.comics.com/creators/momma/archive/images/' . $picture . '';

        $copywho = 'Mell Lazarus';

        $url_to_archive = 'http://www.comics.com/creators/momma';

        $validrequest = 1;
    }
}
/* done loading Mommy */

/* go to load Sinfest */
if ('On' == $ssinfest) {
    if ('sinfest' == $comic) {
        $yearS = date('Y');

        $monthS = date('m');

        $dayS = date('d');

        $url_to_image = 'http://www.sinfest.net/comics/sf' . $yearS . $monthS . $dayS . '.gif';

        $copywho = 'Sinfest Productions';

        $url_to_archive = 'http://www.sinfest.net/';

        $validrequest = 1;
    }
}
/* done loading Sinfest */

/* loading user comic */
if ('On' == $suser) {
    if ('user' == $comic) {
        $validrequest = 1;
    }
}
/* done loading user comic */

//--------------------------------------------
// Sending all data to the templates
//--------------------------------------------
$xoopsTpl->assign('comic', $comic);
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
$xoopsTpl->assign('lang_co_ind', _CO_IND);
$xoopsTpl->assign('lang_co_int', _CO_INT);
// to templates =>
$xoopsTpl->assign('copyear', $copyear);
$xoopsTpl->assign('theday', $theday);
$xoopsTpl->assign('url_to_image', $url_to_image);
$xoopsTpl->assign('copywho', $copywho);
$xoopsTpl->assign('url_to_archive', $url_to_archive);
// to templates => mop vd dag
$xoopsTpl->assign('titel_mop_vd_dag', $titel);
$xoopsTpl->assign('text_mop_vd_dag', $link);
// to templates => the user templates info has to get sended to templates
$xoopsTpl->assign('susertitel', $susertitel);
$xoopsTpl->assign('susercop', $susercop);

//--------------------------------------------
// Weird, the comic is EMPTY...
//--------------------------------------------
if (empty($comic)) {
    redirect_header('index.php', 3, _CO_NCS);

    exit();
}
//--------------------------------------------
// Are people messing with the url?
//--------------------------------------------
if (empty($validrequest)) {
    redirect_header('index.php', 3, _CO_NVR);
}

// including footer of xoops
require XOOPS_ROOT_PATH . '/footer.php';
// done
