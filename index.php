<?php
function url(){
  $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
  return $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	</head>
	<body>
		<pre>
			Just put a URL here and type submit, Enjoy ;)
			<form action="./readityourself.php">
				<input type="text" name="url" id="url" maxlength="2048" size="80" /><input type="submit">
			</form>
				CHANGE: 
					2013-03-01 : 
						* use cURL if php extension is present, otherwise use file_get_contents
						* now ReadItYourself can handle URL forward
						* Add a Bookmarklet for <a href="javascript:(function(){var%20url%20=%20location.href;var%20title%20=%20document.title%20||%20url;window.open('<? echo url()?>/readityourself.php?url='%20+%20encodeURIComponent(url),'_self');})();" title="ReadItYourself">ReadItYourself</a> Coded by Tristan Velter for Read It Yourself (thanks ;) ) <a href="http://velter.org/">http://velter.org/</a>
						* use RainTPL to render html page
						* add footer to put licence, where to find information about ReadItYourself and version number


			This page is based on :
			* http://www.keyvan.net/2010/08/php-readability/ (modified by me...) in order to get content
			* Encoding from https://github.com/neitanod/forceutf8 to enconding all pages in UTF-8 without characters issues
			* http://code.google.com/p/better-web-readability-project/ for CSS but modified a little by me
			
			
			This page can :
			* extract content from a URL, and try to suppress ads, tweet, comments, navigation, etc...
			* remove "bad" css from URL
			* add css, font, size, margin, padding etc... to increase redability of content
			
			Your can find the source code here: <a href="./readityourself_0.0.3.zip">readityourself_0.0.3.zip</a>
			
			Best regards,
			Mémîks
			
							LICENCE:
			
										DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
											   Version 2, December 2004
							 
							Copyright (C) 2004 Sam Hocevar <sam@hocevar.net>
							 
							Everyone is permitted to copy and distribute verbatim or modified
							copies of this license document, and changing it is allowed as long
							as the name is changed.
							 
									   DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
							  TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
							 
							 0. You just DO WHAT THE FUCK YOU WANT TO.
							 
							 
							 
										LICENCE PUBLIQUE RIEN À BRANLER
												 Version 1, Mars 2009

							Copyright (C) 2009 Sam Hocevar
							 14 rue de Plaisance, 75014 Paris, France

							La copie et la distribution de copies exactes de cette licence sont
							autorisées, et toute modification est permise à condition de changer
							le nom. 

									CONDITIONS DE COPIE, DISTRIBUTON ET MODIFICATION
										  DE LA LICENCE PUBLIQUE RIEN À BRANLER

							 0. Faites ce que vous voulez, j’en ai RIEN À BRANLER.
							 
		</pre>
	</body>
</html>