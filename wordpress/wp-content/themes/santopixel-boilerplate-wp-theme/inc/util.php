<?php
	/**
	 * @package SantoPixel Boilerplate
	 */

	/**
	 * get_short_text
	 */
	function get_short_text( $text, $limit ) {
		$text = explode( ' ', $text, $limit );
		
		if ( count( $text ) >= $limit ) {
			array_pop( $text );
			$text = implode( " ", $text ) .'[...]';
		}
		else {
			$text = implode( " ", $text );
		}

		return $text;
	}

	/**
	 * format_text
	 */
	function format_text( $text ) {
		$text = trim( $text );
		$text = format_encoding( $text );

		if ( mb_strlen( $text ) > 10 ) {
			$text = mb_substr( $text, 0, 10 ) .'...';
		}

		return $text;
	}

	/**
	 * format_encoding
	 */
	function format_encoding( $text ) {
		$text = trim( $text );
		$text = utf8_encode( $text );
		return $text;
	}

	/**
	 * mb_ucfirst
	 */
	function mb_ucfirst( $string, $encoding = 'utf-8' ) {
		$strlen = mb_strlen( $string, $encoding );
		$firstChar = mb_substr( $string, 0, 1, $encoding );
		$then = mb_substr( $string, 1, $strlen - 1, $encoding );
		return mb_strtoupper( $firstChar, $encoding ) . $then;
	}

	/**
	 * get_month_text
	 */
	function get_month_text( $month ) {
		$return = '';

		switch ( $month ) {
			case 1 : $return = 'Janeiro'; break;
			case 2 : $return = 'Fevereiro'; break;
			case 3 : $return = 'Março'; break;
			case 4 : $return = 'Abril'; break;
			case 5 : $return = 'Maio'; break;
			case 6 : $return = 'Junho'; break;
			case 7 : $return = 'Julho'; break;
			case 8 : $return = 'Agosto'; break;
			case 9 : $return = 'Setembro'; break;
			case 10 : $return = 'Outubro'; break;
			case 11 : $return = 'Novembro'; break;
			case 12 : $return = 'Dezembro'; break;
		}

		return $return;
	}

	/**
	 * get_weekday_text
	 */
	function get_weekday_text( $weekday ) {
		$return = '';

		switch ( $weekday ) {
			case 0 : $return = 'Domingo'; break;
			case 1 : $return = 'Segunda'; break;
			case 2 : $return = 'Terça'; break;
			case 3 : $return = 'Quarta'; break;
			case 4 : $return = 'Quinta'; break;
			case 5 : $return = 'Sexta'; break;
			case 6 : $return = 'Sábado'; break;
		}

		return $return;
	}

	/**
	 * get_random_string
	 */
	function get_random_string( $length ) {
		$validCharacters = '12345abcdefghijklmnopqrstuvwxyz678910';
		$validCharNumber = strlen( $validCharacters );
		$result = '';
		for ( $i = 0; $i < $length; $i++ ) {
			$index = mt_rand( 0, $validCharNumber - 1 );
			$result .= $validCharacters[$index];
		}
		return $result;
	}

	/**
	 * hex2rgb
	 */
	function hex2rgb( $hex ) {
		$hex = str_replace( '#', '', $hex );

		if ( strlen( $hex ) == 3 ) {
			$r = hexdec( substr( $hex, 0, 1 ) . substr( $hex, 0, 1 ) );
			$g = hexdec( substr( $hex, 1, 1 ) . substr( $hex, 1, 1 ) );
			$b = hexdec( substr( $hex, 2, 1 ) . substr( $hex, 2, 1 ) );
		} else {
			$r = hexdec( substr( $hex, 0, 2 ) );
			$g = hexdec( substr( $hex, 2, 2 ) );
			$b = hexdec( substr( $hex, 4, 2 ) );
		}

		$rgb = array( $r, $g, $b );
		return implode( ',', $rgb ); // returns the rgb values separated by commas
		//return $rgb; // returns an array with the rgb values
	}

	/**
	 * nl2p
	 */
	function nl2p( $string, $class = '' ) {
		$paragraphs = '';

		foreach ( explode( "\n", $string ) as $line ) {
			if ( trim( $line ) ) {
				$paragraphs .= '<p'. ( ! empty( $class ) ? ( ' class="'. $class .'"' ) : '' ) .'>' . $line . '</p>';
			}
		}

		return $paragraphs;
	}

	/**
	* urlencode_santopixel
	*/
	function urlencode_santopixel( $text ) {
		$text = str_replace( ' ', '%20', $text );
		$text = str_replace( '#', '%23', $text );
		$text = str_replace( '&', '%26', $text );
		return $text;
	}

	/**
	* textencode_santopixel
	*/
	function textencode_santopixel( $text ) {
		$text = html_entity_decode( $text );
		$text = str_replace( ' ', '%20', $text );
		$text = str_replace( '#', '%23', $text );
		$text = str_replace( '&', '%26', $text );
		return $text;
	}
	
	/**
	 * get_date__from_gmt_to_brazil
	 */
	function get_date__from_gmt_to_brazil( $date ) {
		$gmt = new DateTimeZone( 'GMT' );
		$newTZ = new DateTimeZone( 'America/Sao_Paulo' );
		
		$date = new DateTime( $date, $gmt );
		$date->setTimezone( $newTZ );
		$date = $date->format( 'Y-m-d H:i:s' );

		return $date;
	}
	
	/**
	 * get_date__from_brazil_to_gmt
	 */
	function get_date__from_brazil_to_gmt( $date ) {
		$gmt = new DateTimeZone( 'America/Sao_Paulo' );
		$newTZ = new DateTimeZone( 'GMT' );
		
		$date = new DateTime( $date, $gmt );
		$date->setTimezone( $newTZ );
		$date = $date->format( 'Y-m-d H:i:s' );

		return $date;
	}
	
	/**
	 * get_gmt_timestamp
	 */
	function get_gmt_timestamp() {
		$dateNow = date_create( 'now', timezone_open( 'America/Sao_Paulo' ) );
		$dif = date_offset_get( $dateNow );
		$dateNow = date_timestamp_get( $dateNow ) + $dif;
		$dateNow = date( 'U', $dateNow );

		return $dateNow;
	}
	
	/**
	 * get_gmt_timestamp_from_hhii
	 */
	function get_gmt_timestamp_from_hhii( $time ) {
		$time = str_replace( 'h', ':', $time );

		$dateNow = date_create( 'now', timezone_open( 'America/Sao_Paulo' ) );
		$dif = date_offset_get( $dateNow );
		$dateNow = date_timestamp_get( $dateNow ) + $dif;

		$date = date( "Y-m-d", $dateNow );
		$date = "{$date} {$time}:00";
		$date = get_date__from_brazil_to_gmt( $date );
		
		$date = date_create( $date, timezone_open( 'America/Sao_Paulo' ) );
		$dif = date_offset_get( $date );
		$date = date_timestamp_get( $date ) + $dif + $dif;
		$date = date( 'U', $date );

		return $date;
	}

	/**
	 * clean string
	 */
	function hyphenize($string) {
	    $dict = array(
	        "I'm"      => "I am",
	        "thier"    => "their",
	    );
	    return strtolower(
	        preg_replace(
	          array( '#[\\s-]+#', '#[^A-Za-z0-9\. -]+#' ),
	          array( '-', '' ),
	          // the full clean_string() can be download from http://www.unexpectedit.com/php/php-clean-string-of-utf8-chars-convert-to-similar-ascii-char
	          clean_string(
	              str_replace( // preg_replace to support more complicated replacements
	                  array_keys($dict),
	                  array_values($dict),
	                  urldecode($string)
	              )
	          )
	        )
	    );
	}
	function clean_string($text) {
	    $utf8 = array(
	        '/[áàâãªä]/u'   =>   'a',
	        '/[ÁÀÂÃÄ]/u'    =>   'A',
	        '/[ÍÌÎÏ]/u'     =>   'I',
	        '/[íìîï]/u'     =>   'i',
	        '/[éèêë]/u'     =>   'e',
	        '/[ÉÈÊË]/u'     =>   'E',
	        '/[óòôõºö]/u'   =>   'o',
	        '/[ÓÒÔÕÖ]/u'    =>   'O',
	        '/[úùûü]/u'     =>   'u',
	        '/[ÚÙÛÜ]/u'     =>   'U',
	        '/ç/'           =>   'c',
	        '/Ç/'           =>   'C',
	        '/ñ/'           =>   'n',
	        '/Ñ/'           =>   'N',
	        '/–/'           =>   '-', // UTF-8 hyphen to "normal" hyphen
	        '/[’‘‹›‚]/u'    =>   ' ', // Literally a single quote
	        '/[“”«»„]/u'    =>   ' ', // Double quote
	        '/ /'           =>   ' ', // nonbreaking space (equiv. to 0x160)
	    );
	    return preg_replace(array_keys($utf8), array_values($utf8), $text);
	}


	/**
	 * frontend_get_the_excerpt_by_id
	 */
	function frontend_get_the_excerpt_by_id( $postId, $limit ) {
		$thePost = get_post( $postId );
		$text = $thePost->post_content;

		if ( strlen($text) > $limit) {
			$text = substr(get_the_content($before = '', $after = '', FALSE), 0, $limit) . '...';
		}

		return $text;
	}

	/**
	* get_share_image
	*/
	function get_share_image( $postId ) {
		$metaImage = wp_get_attachment_image_src( get_post_thumbnail_id( $postId ), 'large' );

		if ( (int) $metaImage[2] < 200 ) {
			$metaImage = get_template_directory_uri() .'/images/memorias-logo-social.jpg';
		}
		else {
			$metaImage = $metaImage[0];
		}

		return $metaImage;
	}
?>
