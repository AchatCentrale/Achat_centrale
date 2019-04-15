<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class SiteFilter extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('categHome', [$this, 'formatCategHome']),
            new TwigFilter('encodingFrom', [$this, 'encodingFromDatabase']),
        ];
    }




    public function formatCategHome($promoDescr)
    {
        $findme   = ' ';
        $pos = strpos($promoDescr, $findme);

        $tpl = "<span class='Promo_Mot1'>".substr($promoDescr, 0, $pos)."</span><span class='Promo_Mot2'> ".substr($promoDescr, $pos+1, strlen($promoDescr))."</span>";

        return $tpl;
    }


    public function encodingFromDatabase($value){


        return utf8_encode($value);

    }
}