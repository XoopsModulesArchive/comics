<?php

/*********************************/

// Enabling all errors, this can be
// commented out safely
/*********************************/
error_reporting(E_ALL);

/*********************************/
// Starting the function the
// creates the block.
/*********************************/
function comics_show($options)
{
    /*********************************/ // Including the setting the user

    // has selected in the admin,

    // at this moment only useable for

    // the language

    /*********************************/

    require XOOPS_ROOT_PATH . '/modules/comics/cache/settings.php';

    /*********************************/ // Starting to check what comic

    // the user has selected.

    /*********************************/

    if ('dilbert' == $options[0]) {
        // Dilbert part Created by Ali (^_^)

        // dbz_gt01@hotmail.com

        $inhoud = file('http://www.dilbert.com/');

        $inhoud = implode('', $inhoud);

        $part = explode('<!-- TABS AND COMIC TABLE BEGIN -->', $inhoud);

        $part1 = explode('<IMG SRC="/comics/dilbert/archive', $part[1]);

        $part2 = explode('" BORDER=0 ALT="', $part1[1]);

        $picture = $part2[0];

        $comics['url_to_image'] = 'http://www.dilbert.com/comics/dilbert/archive' . $picture . '';

        $comics['copywho'] = 'dilbert.com';

        $comics['url_to_archive'] = 'http://www.dilbert.com';
    }

    if ('garfield' == $options[0]) {
        $yeargar = date('Y');

        $yeargar2 = date('y');

        $monthgar = date('m');

        $daygar = date('d');

        $comics['url_to_image'] = 'http://images.ucomics.com/comics/ga/' . $yeargar . '/ga' . $yeargar2 . '' . $monthgar . '' . $daygar . '.gif';

        $comics['copywho'] = 'Paws, Inc';

        $comics['url_to_archive'] = 'http://www.ucomics.com/garfield/';
    }

    if ('9to5' == $options[0]) {
        $yeartmntf = date('Y');

        $yeartmntf2 = date('y');

        $monthtmntf = date('m');

        $daytmntf = date('d');

        $comics['url_to_image'] = 'http://images.ucomics.com/comics/tmntf/' . $yeartmntf . '/tmntf' . $yeartmntf2 . '' . $monthtmntf . '' . $daytmntf . '.gif';

        $comics['copywho'] = 'Harley Schwadron';

        $comics['url_to_archive'] = 'http://www.ucomics.com/9to5/';
    }

    if ('close' == $options[0]) {
        $yearcl = date('Y');

        $yearcl2 = date('y');

        $monthcl = date('m');

        $daycl = date('d');

        $comics['url_to_image'] = 'http://images.ucomics.com/comics/cl/' . $yearcl . '/cl' . $yearcl2 . '' . $monthcl . '' . $daycl . '.gif';

        $comics['copywho'] = 'John McPherson';

        $comics['url_to_archive'] = 'http://www.ucomics.com/closetohome/';
    }

    if ('baldo' == $options[0]) {
        if ('1' == $sbaldolang) {
            $yearba = date('Y');

            $yearba2 = date('y');

            $monthba = date('m');

            $dayba = date('d');

            $comics['url_to_image'] = 'http://images.ucomics.com/comics/ba/' . $yearba . '/ba' . $yearba2 . '' . $monthba . '' . $dayba . '.gif';

            $comics['copywho'] = 'Hector D. Cantu and Carlos Castellanos';

            $comics['url_to_archive'] = 'http://www.ucomics.com/baldo/';
        } else {
            $yearba = date('Y');

            $yearba2 = date('y');

            $monthba = date('m');

            $dayba = date('d');

            $comics['url_to_image'] = 'http://images.ucomics.com/comics/be/' . $yearba . '/be' . $yearba2 . '' . $monthba . '' . $dayba . '.gif';

            $comics['copywho'] = 'Hector D. Cantu and Carlos Castellanos';

            $comics['url_to_archive'] = 'http://www.ucomics.com/baldoespanol/';
        }
    }

    if ('kama' == $options[0]) {
        if ('1' == $skamalang) {    // ex. www.kamagurka.com/nederl/daily/4-8.gif
            $monthka = date('n');

            $dayka = date('j');

            $comics['url_to_image'] = 'http://www.kamagurka.com/nederl/daily/' . $monthka . '-' . $dayka . '.gif';

            $comics['copywho'] = 'Kamagurka';

            $comics['url_to_archive'] = 'http://www.kamagurka.com';
        } else {    // ex. www.kamagurka.com/english/daily/8-4.gif
            $monthka = date('n');

            $dayka = date('j');

            $comics['url_to_image'] = 'http://www.kamagurka.com/english/daily/' . $dayka . '-' . $monthka . '.gif';

            $comics['copywho'] = 'Kamagurka';

            $comics['url_to_archive'] = 'http://www.kamagurka.com';
        }
    }

    if ('ufriendly' == $options[0]) {
        $yeargar = date('Y');

        $monthgar = date('m');

        $daygar = date('d');

        $inhoud = file('http://ars.userfriendly.org/cartoons/?id=' . $yeargar . '' . $monthgar . '' . $daygar . '');

        $inhoud = implode('', $inhoud);

        $part = explode('<a href="/cartoons/?id=' . $yeargar . '' . $monthgar . '' . $daygar . '">', $inhoud);

        $part1 = explode('<img border="0" src="http://www.userfriendly.org/cartoons/archives/', $part[1]);

        $part2 = explode('" width="', $part1[1]);

        $picture = $part2[0];

        $comics['url_to_image'] = 'http://www.userfriendly.org/cartoons/archives/' . $picture . '';

        $comics['copywho'] = 'userfriendly.org';

        $comics['url_to_archive'] = 'http://www.userfriendly.org';
    }

    if ('humorgraf' == $options[0]) {
        $comics['url_to_image'] = 'http://www.humornegro.com/modules/fotodeldia/foto_del_dia.jpg';

        $comics['copywho'] = 'humornegro.com';

        $comics['url_to_archive'] = 'http://www.humornegro.com';
    }

    if ('momma' == $options[0]) {
        $yearmom = date('Y');

        $monthmom = date('m');

        $daymom = date('d');

        $inhoud = file('http://www.comics.com/creators/momma/');

        $inhoud = implode('', $inhoud);

        $part = explode('<TD WIDTH="609" BGCOLOR="#FFFFFF" COLSPAN="8">', $inhoud);

        $part1 = explode('<IMG SRC="/creators/momma/archive/images/', $part[1]);

        $part2 = explode("\" ALT=\"Today's Comic\" BORDER=\"0\">", $part1[1]);

        $picture = $part2[0];

        $comics['url_to_image'] = 'http://www.comics.com/creators/momma/archive/images/' . $picture . '';

        $comics['copywho'] = 'Mell Lazarus';

        $comics['url_to_archive'] = 'http://www.comics.com/creators/momma';
    }

    if ('momma' == $options[0]) {
        $yearS = date('Y');

        $monthS = date('m');

        $dayS = date('d');

        $comics['url_to_image'] = 'http://www.sinfest.net/comics/sf' . $yearS . $monthS . $dayS . '.gif';

        $comics['copywho'] = 'Sinfest Productions';

        $comics['url_to_archive'] = 'http://www.sinfest.net/';
    }

    /*********************************/ // Define the year the will get

    // listed at the copyright

    /*********************************/

    $comics['copyear'] = date('Y');

    return $comics;
}

/*********************************/
// The function that lists the
// block options.
/*********************************/
function comics_edit($options)
{
    $checked = "selected='selected'";

    $form = 'Comics:&nbsp;';

    $form .= "<select name=options[0]>\n";

    if ('dilbert' != $options[0]) {
        $form .= "<option value='dilbert'>Dilbert\n";
    } else {
        $form .= "<option value='dilbert' $checked>Dilbert\n";
    }

    if ('garfield' != $options[0]) {
        $form .= "<option value='garfield'>Garfield\n";
    } else {
        $form .= "<option value='garfield' $checked>Garfield\n";
    }

    if ('9to5' != $options[0]) {
        $form .= "<option value='d9to5'>9 to 5\n";
    } else {
        $form .= "<option value='d9to5' $checked>9 to 5\n";
    }

    if ('close' != $options[0]) {
        $form .= "<option value='close'>Close to home\n";
    } else {
        $form .= "<option value='close' $checked>Close to home\n";
    }

    if ('baldo' != $options[0]) {
        $form .= "<option value='baldo'>Baldo\n";
    } else {
        $form .= "<option value='baldo' $checked>Baldo\n";
    }

    if ('kama' != $options[0]) {
        $form .= "<option value='kama'>Kamagurka\n";
    } else {
        $form .= "<option value='kama' $checked>Kamagurka\n";
    }

    if ('ufriendly' != $options[0]) {
        $form .= "<option value='ufriendly'>User Friendly\n";
    } else {
        $form .= "<option value='ufriendly' $checked>User Friendly\n";
    }

    if ('humorgraf' != $options[0]) {
        $form .= "<option value='humorgraf'>Humor Grafico\n";
    } else {
        $form .= "<option value='humorgraf' $checked>Humor Grafico\n";
    }

    if ('momma' != $options[0]) {
        $form .= "<option value='momma'>Momma\n";
    } else {
        $form .= "<option value='momma' $checked>Momma\n";
    }

    if ('sinfest' != $options[0]) {
        $form .= "<option value='sinfest'>Sinfest\n";
    } else {
        $form .= "<option value='sinfest' $checked>Sinfest\n";
    }

    $form .= '</select>';

    return $form;
}
