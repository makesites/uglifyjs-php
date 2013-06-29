# UglifyJS.php

Using UglifyJS as a service for JavaScript minification in PHP

## Usage

```
$compiler = new UglifyJS();

$compiler->add("js/my-app.js")
		->add("js/popup.js")
		->cacheDir("/tmp/js-cache/")
		->write();
```

## Credits

Created by Makis Tracend ( [@tracend](http://github.com/tracend) )

Distributed through [Makesites.org](http://makesites.org/)

### Trivia

* Originally created to be part of [KISSCMS](https://github.com/makesites/kisscms/issues/99)
* Based on [PHP Closure](http://code.google.com/p/php-closure/) by Daniel Pupius

### License

Released under the [Apache License v2.0](http://makesites.org/licenses/APACHE-2.0)