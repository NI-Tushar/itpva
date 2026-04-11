<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');

    return 'Storage linked successfully!';
});

Route::get('/unlinkstorage', function () {
    $link = public_path('storage');

    if (is_link($link)) {
        unlink($link);

        return 'Storage symlink removed successfully!';
    }

    if (is_dir($link)) {
        File::deleteDirectory($link);

        return 'Storage directory removed successfully!';
    }

    return 'No storage link or directory found.';
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');

    Route::get('/email', 'email')->name('email');
    Route::get('/email/gmail', 'gmail')->name('email.gmail');
    Route::get('/email/buy-gmail-accounts', 'buyGmailAccounts')->name('email.buy-gmail-accounts');
    Route::get('/email/buy-gmail-aged-accounts', 'buyGmailAgedAccounts')->name('email.buy-gmail-aged-accounts');

    Route::get('/google-voice', 'googleVoice')->name('google-voice');
    Route::get('/google-voice/buy-google-voice-accounts', 'buyGoogleVoiceAccounts')->name('google-voice.buy-google-voice-accounts');
    Route::get('/google-voice/aged-google-voice', 'agedGoogleVoice')->name('google-voice.aged-google-voice');

    Route::get('/yahoo', 'yahoo')->name('yahoo');

    Route::get('/social-media', 'socialMedia')->name('social-media');
    Route::get('/social-media/facebook-accounts', 'facebookAccounts')->name('social-media.facebook-accounts');
    Route::get('/social-media/instagram-accounts', 'instagramAccounts')->name('social-media.instagram-accounts');
    Route::get('/social-media/twitter-accounts', 'twitterAccounts')->name('social-media.twitter-accounts');
    Route::get('/social-media/youtube-accounts', 'youtubeAccounts')->name('social-media.youtube-accounts');

    Route::get('/more', 'more')->name('more');
    Route::get('/more/linked-in', 'linkedIn')->name('more.linked-in');
    Route::get('/more/hotmail', 'hotmail')->name('more.hotmail');
    Route::get('/more/raddit', 'raddit')->name('more.raddit');
    Route::get('/more/textnow', 'textNow')->name('more.textnow');
    Route::get('/more/digital-ocean', 'digitalOcean')->name('more.digital-ocean');
    Route::get('/more/google-cloud', 'googleCloud')->name('more.google-cloud');
    Route::get('/more/amazon-web-services', 'amazonWebServices')->name('more.amazon-web-services');
    Route::get('/more/azure-account', 'azureAccount')->name('more.azure-account');
    Route::get('/more/aol-account', 'aolAccount')->name('more.aol-account');
    Route::get('/more/domain-gv', 'domainGv')->name('more.domain-gv');
    Route::get('/more/product-hunt', 'productHunt')->name('more.product-hunt');

    Route::get('/about-us', 'aboutUs')->name('about-us');
    Route::get('/contact', 'contact')->name('contact');
});

Route::view('/dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__ . '/auth.php';
