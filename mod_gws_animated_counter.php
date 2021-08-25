<?php

// No direct access
defined('_JEXEC') or die;
use Joomla\CMS\Factory;
// Add CSS file for all pages
$document = Factory::getDocument();
JHtml::script(Juri::base() . 'modules/mod_gws_animated_counter/assets/js/animationCounter.min.js');
JHtml::script(Juri::base() . 'modules/mod_gws_animated_counter/assets/js/gws-animated-counter.js');
$items = (array)$params->get('counteritems');
$layout =  $params->get('layout', 'default');
require JModuleHelper::getLayoutPath('mod_gws_animated_counter', $layout);