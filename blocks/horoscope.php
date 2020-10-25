<?php

// ------------------------------------------------------------------------- //
//                XOOPS - PHP Content Management System                      //
//                       <http://xoops.codigolivre.org.br>                             //
// ------------------------------------------------------------------------- //
// Based on:                                                                     //
// myPHPNUKE Web Portal System - http://myphpnuke.com/                               //
// PHP-NUKE Web Portal System - http://phpnuke.org/                               //
// Thatware - http://thatware.org/                                             //
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
# ORIGINAL FILE INFO
#
# Filename          : horoscope.php
# Purpose           : Ce script affiche l'horoscope du jour'
# Version Xoops RC2 : Philippe Muller alias --(melkahdor)--
# email             : webmaster@melkahdor.com | http://melkahdor.com
################################################################################

function b_horoscope_show()
{
    global $xoopsConfig, $xoopsTheme;

    $block = [];

    $block['title'] = _MB_HOROSCOPE_TITLE1;

    // ."modules/horoscope/ (block)

    $block['content'] = "<div align=\"center\">
 <iframe src=\"http://www.horoscope.fr/horoscope/ZodiaqueJour/HoroscopesDuJour.html\" name=\"Horoscope.fr : tous vos horoscopes par des professionnels de l'astrologie.\" width=\"320\" height=\"700\" marginwidth=\"0\" marginheight=\"0\" hspace=\"0\" align=\"middle\">;
  <a href=\"http://www.horoscope.fr\" target=\"_blank\">Horoscope.fr</a> : tous vos horoscopes par des professionnels de l'astrologie.<br>;
  <a href=\"http://www.horoscope.fr\" target=\"_blank\">Astrologie, voyance et horoscopes en fran&ccedil;ais Copyright &copy;</a>;
 </iframe>
 </div>";

    return $block;
}
