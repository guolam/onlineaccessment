<?php

namespace App\Http\Controllers;

use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
  public function index()
  {
    SitemapGenerator::create("https://byn.jp")
      ->hasCrawled(function (Url $url) {
        if (!$url->segment(1)) { //home
          $url->setPriority(1.0);
        }
        if ($url->segment(1) === 'welcome') {
          $url->setPriority(0.8)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY);
        }

        if ($url->segment(1) === 'login') {
          $url->setPriority(0.6)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY);
        }
        if ($url->segment(1) === 'register') {
          $url->setPriority(0.6)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY);
        }
        return $url;
      })


      // サイトマップをxmlへ書き込み
      ->writeToFile(public_path('sitemap.xml'));

    // xmlを表示
    return redirect('/sitemap.xml');
  }
}
