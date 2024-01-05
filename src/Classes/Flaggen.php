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

namespace Schachbulle\ContaoFlaggenBundle\Classes;

class Flaggen extends \Frontend
{

	public function run($strTag)
	{
		$arrSplit = explode('::', $strTag);

		// Inserttag {{alter::TT.MM.JJJJ}}
		// Liefert zu einem Geburtstag das Alter in Jahren
		if($arrSplit[0] == 'flagge' || $arrSplit[0] == 'cache_flagge')
		{
			// Parameter angegeben?
			if(isset($arrSplit[1]))
			{
				//return self::getAlter($arrSplit[1]);
			}
			else
			{
				//return 'Geburtstag fehlt!';
			}
		}
		else
		{
			return false; // Tag nicht dabei
		}

	}
}
