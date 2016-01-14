<?php
	$boxes = $this->requestAction(array('plugin' => 'boxes', 'controller' => 'boxes', 'admin' => false, 'action' => 'getOne'));
	$saida = "<div class=\"hotsite\">
				<div class=\"video\">
					<div class=\"fecharHot\"></div>
					<div id=\"player\" data-video=\"{$boxes[0]['Box']['code']}\"></div>
				</div>
			</div>
			<link rel=\"stylesheet\" href=\"/Boxes/css/wp-youtube-lightbox.css\">
			<script type=\"text/javascript\" src=\"/Boxes/js/youtube-lightbox.js\"></script>";

	echo $saida;
?>