<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2009 Gregor Hermens <gregor@a-mazing.de>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


/**
 * This class uses hooks of tx_vgetagcloud_pi1 to enable search results based on more than one tag
 *
 * @author		Gregor Hermens <gregor@a-mazing.de>
 * @package		TYPO3
 * @subpackage	tx_ghmultitag
 */
class tx_ghmultitag_vgetagcloud_hooks {

	var $submittedKeywords = array();
	var $submittedPages = array();

	/**
	 * Constructor
	 *
	 * Fetches url parameters submitted by tx_vgetagcloud_pi1 for use in other methods
	 */
	function tx_ghmultitag_vgetagcloud_hooks() {
		$gpVars = t3lib_div::_GP('tx_vgetagcloud_pi2');
		$keywords = $gpVars['keyword'];
		if(!empty($keywords)) {
			$this->submittedKeywords = t3lib_div::trimExplode('_', $keywords,1);
		}

		$pages = $gpVars['pages'];
		if(!empty($pages) and preg_match('|^[0-9_]+$|', $pages)) {
			$this->submittedPages = t3lib_div::trimExplode('_', $pages,1);
		}
	}

	/**
	 * This method receives an array containing all the keywords found by the vge_tagcloud extension
	 * before any processing has been done on the keywords, except for case conversion
	 *
	 * All keywords already included into the search are removed from this list
	 *
	 * @param	array	$keywords: list of keywords
	 * @param	mixed	$callingObj: callback to the calling object
	 *
	 * @return	array	transformed list of keywords
	 */
	function postProcessRawKeywords($keywords, &$callingObj) {

		// Only process keywords if we are on the targetPage
		if($callingObj->conf['targetPage'] != $callingObj->cObj->data['uid']) {
			return $keywords;
		}
		
		if(empty($this->submittedKeywords)) {
			return $keywords;
		}
		
		$transformedKeywords = array();
		foreach ($keywords as $aKeyword) {
			if (!in_array($aKeyword, $this->submittedKeywords)) {
				$transformedKeywords[] = $aKeyword;
			}
		}
		return $transformedKeywords;
	}

	/**
	 * This method recieves a comma separated list of pages, from which the tags for the cloud are extracted.
	 * If a list of pages has already been submitted the original list is replaced by this one.
	 *
	 * @param	string	$pages: comma separated list of pages
	 * @param	mixed	$callingObj: callback to the calling object
	 *
	 * @return	string transformed list of pages
	 */
	function postProcessPages($pages, &$callingObj) {

		// Only process pages if we are on the targetPage
		if($callingObj->conf['targetPage'] != $callingObj->cObj->data['uid']) {
			return $pages;
		}
		
		if(empty($this->submittedPages)) {
			return $pages;
		}
		
		return implode(',', $this->submittedPages);
	}

}
?>