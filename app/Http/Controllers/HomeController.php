<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.home');
    }

    public function email()
    {
        return view('pages.email');
    }

    public function gmail()
    {
        return view('pages.gmail');
    }

    public function buyGmailAccounts()
    {
        return view('pages.buy-gmail-accounts');
    }

    public function buyGmailAgedAccounts()
    {
        return view('pages.buy-gmail-aged-accounts');
    }

    public function googleVoice()
    {
        return view('pages.google-voice');
    }

    public function buyGoogleVoiceAccounts()
    {
        return view('pages.buy-google-voice-accounts');
    }

    public function agedGoogleVoice()
    {
        return view('pages.aged-google-voice');
    }

    public function yahoo()
    {
        return view('pages.yahoo');
    }

    public function socialMedia()
    {
        return view('pages.social-media');
    }

    public function facebookAccounts()
    {
        return view('pages.facebook-accounts');
    }

    public function instagramAccounts()
    {
        return view('pages.instagram-accounts');
    }

    public function twitterAccounts()
    {
        return view('pages.twitter-accounts');
    }

    public function youtubeAccounts()
    {
        return view('pages.youtube-accounts');
    }

    public function more()
    {
        return view('pages.more');
    }

    public function linkedIn()
    {
        return view('pages.linked-in');
    }

    public function hotmail()
    {
        return view('pages.hotmail');
    }

    public function raddit()
    {
        return view('pages.raddit');
    }

    public function textNow()
    {
        return view('pages.textnow');
    }

    public function digitalOcean()
    {
        return view('pages.digital-ocean');
    }

    public function googleCloud()
    {
        return view('pages.google-cloud');
    }

    public function amazonWebServices()
    {
        return view('pages.amazon-web-services');
    }

    public function azureAccount()
    {
        return view('pages.azure-account');
    }

    public function aolAccount()
    {
        return view('pages.aol-account');
    }

    public function domainGv()
    {
        return view('pages.domain-gv');
    }

    public function productHunt()
    {
        return view('pages.product-hunt');
    }

    public function aboutUs()
    {
        return view('pages.about-us');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
