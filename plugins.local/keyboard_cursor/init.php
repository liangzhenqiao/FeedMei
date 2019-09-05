<?php
class Keyboard_Cursor extends Plugin {

	private $host;

	function about() {
		return array(1.2, "
			Use cursor keys for tree-style article navigation.
			(Key: Command | Command with opened article)
			Up/Down: Select article row | Scroll through active article,
			Left: Jump to top | Deactivate article / focus headlines,
			Right: Read selected article | Read next article,
			Ctrl+Left/Right: Read previous/next article
			", "ltGuillaume");
	}

	function init($host) {}

	function get_js() {
		return file_get_contents(__DIR__ . "/init.js");
	}

	function api_version() {
		return 2;
	}

}