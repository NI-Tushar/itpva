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
        return view('pages.products.email');
    }

    public function gmail()
    {
        return view('pages.products.gmail');
    }

    public function buyGmailAccounts()
    {
        return view('pages.products.buy-gmail-accounts');
    }

    public function buyGmailAgedAccounts()
    {
        return view('pages.products.buy-gmail-aged-accounts');
    }

    public function googleVoice()
    {
        return view('pages.products.google-voice');
    }

    public function buyGoogleVoiceAccounts()
    {
        return view('pages.products.buy-google-voice-accounts');
    }

    public function agedGoogleVoice()
    {
        return view('pages.products.aged-google-voice');
    }

    public function yahoo()
    {
        return view('pages.products.yahoo');
    }

    public function socialMedia()
    {
        return view('pages.products.social-media');
    }

    public function facebookAccounts()
    {
        return view('pages.products.facebook-accounts');
    }

    public function instagramAccounts()
    {
        return view('pages.products.instagram-accounts');
    }

    public function twitterAccounts()
    {
        return view('pages.products.twitter-accounts');
    }

    public function youtubeAccounts()
    {
        return view('pages.products.youtube-accounts');
    }

    public function more()
    {
        return view('pages.products.more');
    }

    public function linkedIn()
    {
        return view('pages.products.linked-in');
    }

    public function hotmail()
    {
        return view('pages.products.hotmail');
    }

    public function raddit()
    {
        return view('pages.products.raddit');
    }

    public function textNow()
    {
        return view('pages.products.textnow');
    }

    public function digitalOcean()
    {
        return view('pages.products.digital-ocean');
    }

    public function googleCloud()
    {
        return view('pages.products.google-cloud');
    }

    public function amazonWebServices()
    {
        return view('pages.products.amazon-web-services');
    }

    public function azureAccount()
    {
        return view('pages.products.azure-account');
    }

    public function aolAccount()
    {
        return view('pages.products.aol-account');
    }

    public function domainGv()
    {
        return view('pages.products.domain-gv');
    }

    public function productHunt()
    {
        return view('pages.products.product-hunt');
    }

    public function aboutUs()
    {
        return view('pages.products.about-us');
    }

    public function contact()
    {
        return view('pages.products.contact');
    }
}
