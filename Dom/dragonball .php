<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 5.2.1
 */

/**
 * Database `dragonball`
 */

/* `dragonball`.`characters` */
$characters = array(
  array('id' => '12','user_id' => '1','name' => 'Trunks','race' => 'Humano','level' => '1','strength' => '50','speed' => '50','endurance' => '50','experience' => '102','avatar' => 'Jolyne'),
  array('id' => '22','user_id' => '2','name' => 'Piccolo','race' => 'Majin','level' => '1','strength' => '50','speed' => '50','endurance' => '50','experience' => '0','avatar' => 'Dio')
);

/* `dragonball`.`character_transformations` */
$character_transformations = array(
  array('id' => '1222','character_id' => '22','transformation_id' => '222'),
  array('id' => '2222','character_id' => '12','transformation_id' => '122')
);

/* `dragonball`.`tournaments` */
$tournaments = array(
  array('id' => '12222','name' => 'Animatronix Ultra','date' => '2024-10-15','winner_id' => '12'),
  array('id' => '22222','name' => 'Pentatronix Mil','date' => '2024-10-15','winner_id' => '22')
);

/* `dragonball`.`tournament_participants` */
$tournament_participants = array(
  array('id' => '122222','tournament_id' => '12222','character_id' => '22'),
  array('id' => '222222','tournament_id' => '22222','character_id' => '12')
);

/* `dragonball`.`transformations` */
$transformations = array(
  array('id' => '122','name' => 'Transformacion Intergalactica','level_required' => '150'),
  array('id' => '222','name' => 'Transformacion Magnetica','level_required' => '110')
);

/* `dragonball`.`users` */
$users = array(
  array('id' => '1','name' => 'Camila','email' => 'camila@gmail.com','password' => 'Camila','avatar' => 'Jolyne Kujo'),
  array('id' => '2','name' => 'Dominyk','email' => 'dominyk@gmail.com','password' => 'Dominyk','avatar' => 'Dio ')
);
