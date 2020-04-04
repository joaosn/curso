<?php
require 'simple_html_dom.php';

$html = file_get_html('https://www.google.com/search?sxsrf=ACYBGNSjZRjr1M1QqgHV1KxbuvjkxlnHGw%3A1574709570633&ei=QincXamkJpeu5OUPjdSlyAc&q=helow+word&oq=helow+word&gs_l=psy-ab.3..0i10l10.3870.5150..5342...0.2..0.132.648.0j5......0....1..gws-wiz.......0i71j0.0q2RVl1GJMs&ved=0ahUKEwipzdOkiobmAhUXF7kGHQ1qCXkQ4dUDCAs&uact=5');

$resultado = $html->find('.g');

foreach ($resultado as $video) {
	
	$image = $video->find('',);
    
	print_r($image);
	echo "<hr/>";
	exit;
}