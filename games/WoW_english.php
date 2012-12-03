<?php
/******************************
 * EQdkp
 * Copyright 2002-2003
 * Licensed under the GNU GPL.  See COPYING for full terms.
 * ------------------
 * WoW.php
 * Began: Fri May 13 2005
 *
 * $Id$
 *
 ******************************/

if ( !defined('EQDKP_INC') )
{
    die('Hacking attempt');
}

class Manage_Game
{
 function do_it($db,$table_prefix,$install)
 {
   $queries = array(
   "DELETE FROM ". $table_prefix ."classes;",
   "UPDATE " . $table_prefix . "members SET member_level = 70 WHERE member_level >70;",
   "ALTER TABLE " . $table_prefix . "members MODIFY member_level tinyint(2) NOT NULL default '70';",
   "UPDATE " . $table_prefix . "style_config SET date_notime_long = 'F j, Y' WHERE style_id >0;",
   "UPDATE " . $table_prefix . "style_config SET date_notime_short = 'm/d/y' WHERE style_id >0;",
   "UPDATE " . $table_prefix . "style_config SET date_time = 'd.m.y h:ia T' WHERE style_id >0;",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (0, 'Unknown', 'Plate',0,70);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (1, 'Warrior', 'Mail',0,39);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (2, 'Rogue', 'Leather',0,70);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (3, 'Hunter', 'Leather',0,39);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (4, 'Hunter', 'Mail',40,70);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (5, 'Paladin', 'Mail',0,39);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (6, 'Priest', 'Silk',0,70);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (7, 'Druid', 'Leather',0,70);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (8, 'Shaman', 'Leather',0,39);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (9, 'Shaman', 'Mail',40,70);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (10, 'Warlock', 'Silk',0,70);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (11, 'Mage', 'Silk',0,70);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (12, 'Warrior', 'Plate',40,70);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (13, 'Paladin', 'Plate',40,70);",
   "DELETE FROM ". $table_prefix ."races;",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name) VALUES (0, 'Unknown');",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name) VALUES (1, 'Gnome');",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name) VALUES (2, 'Human');",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name) VALUES (3, 'Dwarf');",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name) VALUES (4, 'Night Elf');",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name) VALUES (5, 'Troll');",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name) VALUES (6, 'Undead');",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name) VALUES (7, 'Orc');",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name) VALUES (8, 'Tauren');",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name) VALUES (9, 'Draenei');",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name) VALUES (10,'Blood Elf');",
   "DELETE FROM ". $table_prefix ."factions;",
   "INSERT INTO ". $table_prefix ."factions (faction_id, faction_name) VALUES (1, 'Alliance');",
   "INSERT INTO ". $table_prefix ."factions (faction_id, faction_name) VALUES (2, 'Horde');",
   "UPDATE ". $table_prefix ."config SET config_value = 'WoW_english' WHERE config_name = 'default_game';",
   );
   foreach ( $queries as $sql )
   {
       $db->query($sql);
   }

   if (!$install)
   {
	 $redir = "admin/config.php";
	 redirect($redir);
	}
 }
}

?>
