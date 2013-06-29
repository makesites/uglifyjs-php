# UglifyJS.php

Using UglifyJS as a service for JavaScript minification in PHP

Note that this class is abstructing the requests to a remote service run by an [UglifyJS-service](https://github.com/marijnh/UglifyJS-service)


## Usage

```
$compiler = new UglifyJS();

$compiler->add("js/my-app.js")
		->add("js/popup.js")
		->cacheDir("/tmp/js-cache/")
		->write();
```

## API

These are the main methods to execute:

### cacheDir( $path )

Setting the temp dir for the cached files.

### compiler( $url )

Setting the compiler location as a full url (including port) . Defaults to ```http://marijnhaverbeke.nl:80/uglifyjs```

### add( $script )

Add a script in the queue to be compressed.

### write( $output );

Parsing queue and compressing files. Optionally outputting the result if ```$output=true``` (default: false)


## Credits

Created by Makis Tracend ( [@tracend](http://github.com/tracend) )

Distributed through [Makesites.org](http://makesites.org/)

### Trivia

* Originally created to be part of [KISSCMS](https://github.com/makesites/kisscms/issues/99)
* Based on [PHP Closure](http://code.google.com/p/php-closure/) by Daniel Pupius

### License

Released under the [Apache License v2.0](http://makesites.org/licenses/APACHE-2.0)