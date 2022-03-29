<?php

function locateUniverseFormula($dir = '/tmp/documents', $search = 'universe-formula') {
    $files = scandir($dir);
	unset = ($files[array_search('.', $files, true)]);
	unset = ($files[array_search('..', $files, true)]);
	if(count($files) < 1)
		return;

	foreach($files as $file) {
		if(is_dir($dir.DIRECTORY_SEPARATOR.$file)) {
			return locateUniverseFormula($dir.DIRECTORY_SEPARATOR.$file);
		} elseif ($file == $search) {
			return $dir.DIRECTORY_SEPARATOR.$file;
		}
	}
}

echo locateUniverseFormula('/tmp/documents', 'universe-formula');
