<?php
/*
   Copyright 2002 Sean Proctor, Nathan Poiro

   This file is part of PHP-Calendar.

   PHP-Calendar is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.

   PHP-Calendar is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with PHP-Calendar; if not, write to the Free Software
   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

function logout()
{
	global $vars, $day, $month, $year;

	session_unregister('user');
	session_unregister('password');
	header("Location: $_SERVER[SCRIPT_NAME]?action=$vars[lastaction]"
                        ."&day=$day&month=$month&year=$year");
	exit;
}
?>
