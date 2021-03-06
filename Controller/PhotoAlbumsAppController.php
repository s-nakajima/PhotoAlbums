<?php
/**
 * PhotoAlbumsApp Controller
 *
 * @copyright Copyright 2014, NetCommons Project
 * @author Kohei Teraguchi <kteraguchi@commonsnet.org>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('AppController', 'Controller');

/**
 * PhotoAlbumsAppController Controller
 *
 */
class PhotoAlbumsAppController extends AppController {

/**
 * use components
 *
 * @var array
 */
	public $components = array(
		'Security',
	);
}
