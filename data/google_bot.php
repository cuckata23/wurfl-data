<?php
return array (
  'id' => 'google_bot',
  'fallback' => 'generic_web_crawler',
  'capabilities' => 
  array (
    'model_name' => 'Bot',
    'is_bot' => 'true',
    'brand_name' => 'Google',
    'controlcap_is_robot' => 'force_true',
  ),
);
