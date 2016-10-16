<?php

/**
 * Set the default documentation version...
 */
define('DEFAULT_VERSION', 'master');

/**
 * Convert some text to Markdown...
 */
function markdown($text)
{
    return (new ParsedownExtra)->text($text);
}

Route::get('/', function () {
    return view('marketing')->with(['currentVersion' => DEFAULT_VERSION]);
});

Route::get('content', 'DocsController@showRootPage');
Route::get('content/{version}/{page?}', 'DocsController@show');
