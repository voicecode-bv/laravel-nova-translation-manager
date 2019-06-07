<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Voicecode\NovaTranslationManager\Http\Controllers')->group(function () {
    Route::resource('groups', 'GroupsController');
    Route::get('locales', 'LocalesController@locales');
    Route::post('translations/export', 'TranslationsController@export');
    Route::resource('translations', 'TranslationsController');
});
