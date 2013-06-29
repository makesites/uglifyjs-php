<?php

include("../uglifyjs.php");

$compiler = new UglifyJS();

$compiler->cacheDir("./tmp/")
		->add("./src/jquery.js")
		->add("./src/underscore.js")
		->add("./src/backbone.js")
		->write( true );

?>