<?php



switch($_GET['action'])
{
case "reboot":
  shell_exec('sudo reboot');
case "halt":
  shell_exec('sudo shutdown -h now');
}


?>