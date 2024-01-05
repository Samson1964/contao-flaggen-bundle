<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2024 Leo Feyer
 *
 * @package   flaggen
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2024
 */
 
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('Schachbulle\ContaoHelperBundle\Classes\Flaggen', 'run');
