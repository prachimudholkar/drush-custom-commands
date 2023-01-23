<?php

namespace Drupal\drush9_commands\Commands;

use Drush\Commands\DrushCommands;
use core\lib\Drupal;

/**
 * A drush command file.
 *
 * @package Drupal\drush9_custom_commands\Commands
 */
class Drush9CustomCommands extends DrushCommands {

  /**
   * Drush command that displays the given text.
   *
   * @param string $text
   *   Argument with message to be displayed.
   *
   * @command drush9_commands:message
   * @aliases d9-message d9-msg
   * @option uppercase
   *   Uppercase the message.
   * @option reverse
   *   Reverse the message.
   * @usage drush9_custom_commands:message --uppercase --reverse drupal8
   */
   
  public function message($text = 'Successfully created drush9 custom commands', $options = ['uppercase' => FALSE, 'reverse' => FALSE]) {
    if ($options['uppercase']) {
      $text = strtoupper($text);
    }
    if ($options['reverse']) {
      $text = strrev($text);
    }
    $this->output()->writeln($text);
  }
  
   /**
   * Echos back hello with the argument provided.
   *
   * @param string $name
   *   Argument provided to the drush command.
   *
   * @command drush9_commands:hello
   * @aliases d9-hello
   * @options arr An option that takes multiple values.
   * @options msg Whether or not an extra message should be displayed to the user.
   * @usage drush9_commands:hello prachi --msg
   *   Display 'Hello Prachi!' and a message.
   */
  
  public function hello($name, $options = ['msg' => FALSE]) {
    if ($options['msg']) {
      $this->output()->writeln('Hello ' . $name . '! This is your first Drush 9 command.');
    }
    else {
      $this->output()->writeln('Hello ' . $name . '!');
    }
  }
  
  /**
   * Echos back drupal install profile.
   *
   *
   * @command drush9_commands:drupro
   * @aliases d9-drupro
   * @usage drush9_commands:drupro
   */
   
   public function installProfile() {
	   $profile = \Drupal::installProfile();
	   $this->output()->writeln($profile);
   }
  
}

?>