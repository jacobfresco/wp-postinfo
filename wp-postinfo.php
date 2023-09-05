<?php

	/**

	* JewishDate 0.7
	*
	* @package           WP-PostInfo
	* @author            Jacob Fresco
	* @copyright         2019 Jacob Fresco
	* @license           GPL-3.0-or-later
	*
	* @wordpress-plugin
	* Plugin Name:       WP-PostInfo
	* Plugin URI:        https://github.com/jacobfresco/wp-postinfo
	* Description:       Show the word- and character count of a post on Wordpress
	* Version:           0.2
	* Requires PHP:      5.3
	* Author:            Jacob Fresco
	* Author URI:        https://jacobfresco.nl
	* License:           GPL v3 or later
	* License URI:       http://www.gnu.org/licenses/gpl-3.0.txt


	*/

	date_default_timezone_set(get_option('timezone_string'));
	
	function _count_words($text)
	{
		$NumOfWords = str_word_count(strip_tags($text), 0);
		return $NumOfWords;
	}
	
	function _count_chars($text)
	{
		$NumOfChars = strlen(strip_tags($text));
		return $NumOfChars;	
	}
	
	function showcount($text)
	{
		if (!get_post_meta(get_the_ID(), "no_post_count", true))
		{
			$replacedText = str_replace("[wordcount]", _count_words($text), $text);
			$replacedText = str_replace("[charcount]", _count_chars($text), $replacedText);	
		}
		else
		{
			$replacedText = $text;	
		}
		return $replacedText;
	}
	
	add_filter("the_content", "showcount");
	
?>
