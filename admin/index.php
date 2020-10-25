<?php

// ------------------------------------------------------------------------- //
//                XOOPS - PHP Content Management System                      //
//                       <https://www.xoops.org>                             //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
// ------------------------------------------------------------------------- //
include 'admin_header.php';

function ComicsList()
{
    OpenTable();

    echo '<br>' . _CO_OPT . ":\n" . '<blockquote>' . "- <a href=?com=ComicsAdmin>Change status</a><br>\n" . "- <a href=?com=ComicsAdd>Add own comic</A><br>\n" . "</blockquote>\n";

    CloseTable();
}

function ComicsAdmin()
{
    OpenTable();

    require '../cache/settings.php';

    echo _CO_KEU . ':<BR>';

    echo "<form action=\"index.php\" method=\"post\" enctype=\"multipart/form-data\">\n";

    if ('On' == $sdilbert) {
        echo 'Dilbert: (English)<BR>';

        echo "<input type=\"radio\" name=\"dilbertwrite\" value=\"On\" checked>On\n";

        echo "			<input type=\"radio\" name=\"dilbertwrite\" value=\"Off\">Off<P>\n";

        echo "\n";
    } else {
        echo 'Dilbert: (English)<BR>';

        echo "<input type=\"radio\" name=\"dilbertwrite\" value=\"On\" >On\n";

        echo "			<input type=\"radio\" name=\"dilbertwrite\" value=\"Off\" checked>Off<P>\n";

        echo "\n";
    }

    if ('On' == $sgarfield) {
        echo 'Garfield: (English)<BR>';

        echo "<input type=\"radio\" name=\"garfieldwrite\" value=\"On\" checked>On\n";

        echo "			<input type=\"radio\" name=\"garfieldwrite\" value=\"Off\">Off<P>\n";

        echo "\n";
    } else {
        echo 'Garfield: (English)<BR>';

        echo "<input type=\"radio\" name=\"garfieldwrite\" value=\"On\">On\n";

        echo "			<input type=\"radio\" name=\"garfieldwrite\" value=\"Off\" checked>Off<P>\n";

        echo "\n";
    }

    if ('On' == $s9to5) {
        echo '9 to 5: (English)<BR>';

        echo "<input type=\"radio\" name=\"9to5write\" value=\"On\" checked>On\n";

        echo "			<input type=\"radio\" name=\"9to5write\" value=\"Off\">Off<P>\n";

        echo "\n";
    } else {
        echo '9 to 5: (English)<BR>';

        echo "<input type=\"radio\" name=\"9to5write\" value=\"On\">On\n";

        echo "			<input type=\"radio\" name=\"9to5write\" value=\"Off\" checked>Off<P>\n";

        echo "\n";
    }

    if ('On' == $sclose) {
        echo 'Close: (English)<BR>';

        echo "<input type=\"radio\" name=\"closewrite\" value=\"On\" checked>On\n";

        echo "			<input type=\"radio\" name=\"closewrite\" value=\"Off\">Off<P>\n";

        echo "\n";
    } else {
        echo 'Close: (English)<BR>';

        echo "<input type=\"radio\" name=\"closewrite\" value=\"On\">On\n";

        echo "			<input type=\"radio\" name=\"closewrite\" value=\"Off\" checked>Off<P>\n";

        echo "\n";
    }

    if ('On' == $sbaldo) {
        echo 'Baldo: (English)<BR>';

        echo "<input type=\"radio\" name=\"baldowrite\" value=\"On\" checked>On\n";

        echo "			<input type=\"radio\" name=\"baldowrite\" value=\"Off\">Off\n";

        echo "\n";
    } else {
        echo 'Baldo: (English)<BR>';

        echo "<input type=\"radio\" name=\"baldowrite\" value=\"On\">On\n";

        echo "			<input type=\"radio\" name=\"baldowrite\" value=\"Off\" checked>Off\n";

        echo "\n";
    }

    if ('1' == $sbaldolang) {
        echo "&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <select name=\"baldolangwrite\"><option value=\"1\">English\n";

        echo "			<option value=\"2\">Spanish</select><P>\n";

        echo "\n";
    } else {
        echo "&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <select name=\"baldolangwrite\"><option value=\"2\">Spanish\n";

        echo "			<option value=\"1\">English</select><P>\n";

        echo "\n";
    }

    if ('On' == $smopvddag) {
        echo 'Mop van de dag: (Dutch)<BR>';

        echo "<input type=\"radio\" name=\"mopvddagwrite\" value=\"On\" checked>On\n";

        echo "			<input type=\"radio\" name=\"mopvddagwrite\" value=\"Off\">Off<P>\n";

        echo "\n";
    } else {
        echo 'Mop van de dag: (Dutch)<BR>';

        echo "<input type=\"radio\" name=\"mopvddagwrite\" value=\"On\">On\n";

        echo "			<input type=\"radio\" name=\"mopvddagwrite\" value=\"Off\" checked>Off<P>\n";

        echo "\n";
    }

    if ('On' == $skama) {
        echo 'Kamagurka:<BR>';

        echo "<input type=\"radio\" name=\"kamawrite\" value=\"On\" checked>On\n";

        echo "			<input type=\"radio\" name=\"kamawrite\" value=\"Off\">Off\n";
    } else {
        echo 'Kamagurka:<BR>';

        echo "<input type=\"radio\" name=\"kamawrite\" value=\"On\">On\n";

        echo "			<input type=\"radio\" name=\"kamawrite\" value=\"Off\" checked>Off\n";
    }

    if ('1' == $skamalang) {
        echo "&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <select name=\"kamalangwrite\"><option value=\"1\">Dutch\n";

        echo "			<option value=\"2\">English</select><P>\n";

        echo "\n";
    } else {
        echo "&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <select name=\"kamalangwrite\"><option value=\"2\">English\n";

        echo "			<option value=\"1\">Dutch</select><P>\n";

        echo "\n";
    }

    if ('On' == $sufriendly) {
        echo 'User Friendly: (English)<BR>';

        echo "<input type=\"radio\" name=\"ufriendlywrite\" value=\"On\" checked>On\n";

        echo "			<input type=\"radio\" name=\"ufriendlywrite\" value=\"Off\">Off<P>\n";

        echo "\n";
    } else {
        echo 'Userfriendly: (English)<BR>';

        echo "<input type=\"radio\" name=\"ufriendlywrite\" value=\"On\">On\n";

        echo "			<input type=\"radio\" name=\"ufriendlywrite\" value=\"Off\" checked>Off<P>\n";

        echo "\n";
    }

    if ('On' == $shumorgraf) {
        echo 'Humor grafico: (Spanish)<BR>';

        echo "<input type=\"radio\" name=\"humorgrafwrite\" value=\"On\" checked>On\n";

        echo "			<input type=\"radio\" name=\"humorgrafwrite\" value=\"Off\">Off<P>\n";

        echo "\n";
    } else {
        echo 'Humor grafico: (Spanish)<BR>';

        echo "<input type=\"radio\" name=\"humorgrafwrite\" value=\"On\">On\n";

        echo "			<input type=\"radio\" name=\"humorgrafwrite\" value=\"Off\" checked>Off<P>\n";

        echo "\n";
    }

    if ('On' == $smomma) {
        echo 'Momma: (English)<BR>';

        echo "<input type=\"radio\" name=\"mommawrite\" value=\"On\" checked>On\n";

        echo "			<input type=\"radio\" name=\"mommawrite\" value=\"Off\">Off<P>\n";

        echo "\n";
    } else {
        echo 'Momma: (English)<BR>';

        echo "<input type=\"radio\" name=\"mommawrite\" value=\"On\">On\n";

        echo "			<input type=\"radio\" name=\"mommawrite\" value=\"Off\" checked>Off<P>\n";

        echo "\n";
    }

    if ('On' == $ssinfest) {
        echo 'Sinfest: (English)<BR>';

        echo "<input type=\"radio\" name=\"sinfestwrite\" value=\"On\" checked>On\n";

        echo "			<input type=\"radio\" name=\"sinfestwrite\" value=\"Off\">Off<P>\n";

        echo "\n";
    } else {
        echo 'Sinfest: (English)<BR>';

        echo "<input type=\"radio\" name=\"sinfestwrite\" value=\"On\">On\n";

        echo "			<input type=\"radio\" name=\"sinfestwrite\" value=\"Off\" checked>Off<P>\n";

        echo "\n";
    }

    if ('On' == $suser) {
        echo $susertitel . ':<BR>';

        echo '<table><tr>';

        echo '<td>Name:<br><input type="text" name="usertitelwrite" value="' . $susertitel . '"></td><BR>';

        echo "<input type=\"radio\" name=\"userwrite\" value=\"On\" checked>On\n";

        echo "			<input type=\"radio\" name=\"userwrite\" value=\"Off\">Off<br>\n";

        echo '<td>Copyright: <br><input type="text" name="usercopwrite" value="' . $susercop . '"></td>';

        echo "</tr></table>\n";
    } else {
        echo 'Own comic:<BR>';

        echo "<input type=\"radio\" name=\"userwrite\" value=\"On\">On\n";

        echo "			<input type=\"radio\" name=\"userwrite\" value=\"Off\" checked>Off<br>\n";

        echo '<input type="hidden" name="usercopwrite" value="' . $susercop . '">';

        echo '<input type="hidden" name="usertitelwrite" value="' . $susertitel . '">';

        echo "<p>\n";
    }

    echo "<input type=\"hidden\" name=\"com\" value=\"ComicsChange\"><br \><br \><br \><br \>";

    echo '<input type="submit" value="' . _CO_SUB . '">';

    echo '</form>';

    CloseTable();
}

function ComicsChange()
{
    error_reporting(E_ALL);

    $content = '<' . "?php \n";

    $content .= '$sdilbert = "' . $_POST['dilbertwrite'] . "\"; 	// English \n";

    $content .= '$sgarfield = "' . $_POST['garfieldwrite'] . "\"; 	// English \n";

    $content .= '$s9to5 = "' . $_POST['9to5write'] . "\"; 		// English \n";

    $content .= '$sclose = "' . $_POST['closewrite'] . "\"; 	// English \n";

    $content .= '$sbaldo = "' . $_POST['baldowrite'] . "\"; 	// English \n";

    $content .= '$sbaldolang = "' . $_POST['baldolangwrite'] . "\";	// 1 = english, 2 = spanish \n";

    $content .= '$smopvddag = "' . $_POST['mopvddagwrite'] . "\";	// Dutch \n";

    $content .= '$skama = "' . $_POST['kamawrite'] . "\"; \n";

    $content .= '$skamalang = "' . $_POST['kamalangwrite'] . "\";	// 1 = dutch, 2 = English \n";

    $content .= '$sufriendly = "' . $_POST['ufriendlywrite'] . "\";	// English \n";

    $content .= '$shumorgraf = "' . $_POST['humorgrafwrite'] . "\";	// Spanish \n";

    $content .= '$smomma = "' . $_POST['mommawrite'] . "\";		// English \n";

    $content .= '$ssinfest = "' . $_POST['sinfestwrite'] . "\";		// English \n";

    $content .= '$suser = "' . $_POST['userwrite'] . "\";\n";

    $content .= '$susertitel = "' . $_POST['usertitelwrite'] . "\";\n";

    $content .= '$susercop = "' . $_POST['usercopwrite'] . "\";\n";

    $content .= '?' . '>';

    $checkfile = @fopen('../cache/settings.php', 'wb');

    if ($checkfile) {
        $file = fopen('../cache/settings.php', 'wb');

        fwrite($file, $content);

        fclose($file);

        redirect_header('index.php?com=ComicsAdmin', 1, _CO_WRITTEN);

        exit();
    }

    redirect_header('index.php?com=ComicsAdmin', 5, _CO_ERRWR);

    exit();
}

function ComicsAdd()
{
    error_reporting(E_ALL);

    if (!isset($_POST['verzenden'])) {
        echo "<i>Diese Funktion ist geändert. In der frühen 1.3.x Version wurde alles in eine Datei geschrieben, aber seit XOOPS sich so stark verändert hat, benutze ich was Neues: Die Templates!\n<br><br>\n"
             . "Um das Template-File zu ändern, musst den System-Admin benutzen,  um einfach die richtige Datei zu finden brauchst du nur diesen Link anzuklicken:</i>\n<br><br>\n"
             . '&nbsp;&nbsp;&nbsp;&nbsp;<a href="'
             . XOOPS_URL
             . "/modules/system/admin.php?fct=tplsets&op=listtpl&tplset=x2t&moddir=comics\">Die Liste der Templates für das Comic-Modul</a> (Wenn du das Template-Set <b>x2t</b> verwendest)<br><br>\n"
             . "<i>Klicke auf den Link und ändere das folgende Template comics_owncomic.html<br>\n"
             . 'Um den Namen zu ändern und um das Copyright einzusehen, klicke hier: <a href="'
             . XOOPS_URL
             . "/modules/comics/admin/index.php?com=ComicsAdmin\">here</a></i>\n"
             . "<form action=\"index.php\" method=\"post\">\n"
             . "<input type=\"text\" name=\"thetemplate\" value=\"Der Name deines momentanen Template-Sets\">\n<input type=\"submit\" name=\"verzenden\"value=\"Versenden\">\n"
             . "<input type=\"hidden\" name=\"com\" value=\"ComicsAdd\">\n"
             . "<input type=\"hidden\" name=\"send\" value=\"yes\">\n"
             . '</form>';
    } else {
        echo '<b>Daten erhalten, lädt...</b><br>'
             . '<b>Link =&gt; Erzeugt!</b><br><br>'
             . '&nbsp;&nbsp;&nbsp;&nbsp;<a href="'
             . XOOPS_URL
             . '/modules/system/admin.php?fct=tplsets&op=listtpl&tplset='
             . $_POST['thetemplate']
             . '&moddir=comics">Die Liste der Templates des Comic-Moduls</a> (Templateset Name: <b>'
             . $_POST['thetemplate']
             . "</b>)<br><br>\n"
             . "<i>Klicke auf den Link und ändere folgendes Template: comics_owncomic.html<br>\n"
             . 'Um den Namen zu ändern und um das Copyright einzusehen, klicke hier: <a href="'
             . XOOPS_URL
             . "/modules/comics/admin/index.php?com=ComicsAdmin\">here</a></i>\n"
             . '<br>';
    }
}

// reggies
if ('' == $com) {
    $com = $_GET['com'];

    if ('' == $com) {
        $com = $_POST['com'];
    }
}
// reggies done

switch ($com) {
    case 'ComicsChange':
        ComicsChange();
        break;
    case 'ComicsAdd':
        xoops_cp_header();
        ComicsAdd();
        echo '<br>';
        break;
    case 'ComicsAdmin':
        xoops_cp_header();
        ComicsAdmin();
        echo '<br>';
        break;
    default:
        xoops_cp_header();
        ComicsList();
        echo '<br>';
        break;
}

OpenTable();
echo 'Debug:<br>';
echo '_SERVER["HTTP_ACCEPT"] => <font color=blue>' . $_SERVER['HTTP_ACCEPT'] . '</font><br>';
echo '_SERVER["HTTP_USER_AGENT"] => <font color=blue>' . $_SERVER['HTTP_USER_AGENT'] . '</font><br>';
echo '_SERVER["REQUEST_METHOD"] => <font color=blue>' . $_SERVER['REQUEST_METHOD'] . '</font><br>';
echo '_SERVER["SCRIPT_NAME"] => <font color=blue>' . $_SERVER['SCRIPT_NAME'] . '</font><br>';
echo '_SERVER["QUERY_STRING"] => <font color=blue>' . $_SERVER['QUERY_STRING'] . '</font><br>';
echo '_SERVER["PHP_SELF"] => <font color=blue>' . $_SERVER['PHP_SELF'] . '</font><br>';
CloseTable();

include 'admin_footer.php';
