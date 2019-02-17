<?php
	// Format the date
	function formatDate ($date)
	{
		return date('F j, Y, g:i a', strtotime($date));
	}

	// Shorten 
	function shortenText ($text, $chars = 450)
	{
		$text = $text . " ";
		$text = substr($text, 0, $chars); // Substring, start at 0 until $chars (450 by default)
		$text = substr($text, 0, strrpos($text, ' ')); // Prevent cut-off mid-word
		$text = $text . "..."; // Display ... after limited text
		return $text;
	}