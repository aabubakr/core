<?php
$l=OC_L10N::get('admin_dependencies_chk');

OC_App::register( array( 
  'order' => 14,
  'id' => 'admin_dependencies_chk',
  'name' => 'Owncloud Install Info' ));

OC_APP::registerAdmin('admin_dependencies_chk','settings');
