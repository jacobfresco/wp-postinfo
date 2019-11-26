<?php

	/*
		Plugin Name: WP-PostInfo
		Plugin URI: https://www.jacobfresco.nl/wordpress/wp-postinfo
		Description: Show the word- and character count of a post on Wordpress
		Version: 0.2
		Author: Jacob Fresco
		Author URI: http://www.jacobfresco.nl

		Copyright 2011  Jacob Fresco

		This program is free software; you can redistribute it and/or modify
		it under the terms of the GNU General Public License as published by
		the Free Software Foundation; either version 2 of the License, or
		(at your option) any later version.

		This program is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
		GNU General Public License for more details.

		You should have received a copy of the GNU General Public License
		along with this program; if not, write to the Free Software
		Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
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
