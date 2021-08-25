<?php

defined('_JEXEC') or die;

abstract class modGwsAnimatedCounterHelper
{
 
    public static function getDownload($params)
    { 
    // Obtain a database connection
$db = JFactory::getDbo();

// Retrieve the shout
$query = $db->getQuery(true)
            ->select('*')
            ->from($db->quoteName('#__gws_product'))
            ->where('id = '. $db->Quote($params)); 
     
// Prepare the query
$db->setQuery($query);

// Load the row.
$result = $db->loadObject();
  
// Return the Download
return $result;
    }
}