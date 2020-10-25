<?php

require_once '../../mainfile.php';
require_once $xoopsConfig['root_path'] . 'class/xoopsmodule.php';
require_once $xoopsConfig['root_path'] . 'class/xoopsgroup.php';
$xoopsModule = XoopsModule::getByDirname('horoscope');
if (!$xoopsModule) {
    redirect_header($xoopsConfig['xoops_url'] . '/', 2, _MODULENOEXIST);

    exit();
}
//if ( !$xoopsUser ) {
//                redirect_header($xoopsConfig['xoops_url']."/",2,_NOPERM);
//                exit();
//}
