<?php
declare(strict_types=1);

class Currency
{
     private string $isoCode;

     function __construct(string $inputIsoCodeValue)
     {
         $this->setIsoCode($inputIsoCodeValue);
     }

     private function setIsoCode(string $value):void
     {
         if ($this->validate($value)) {
             $this->isoCode = $value;
         }
         else {
             exit('Wrong currency ISO Code');
         }
     }

     public function getIsoCode():string
     {
         return $this->isoCode;
     }

     private function validate(string &$value):bool
     {
         $existingIsoCodes = ['AFN','ALL','DZD','USD','EUR','AOA','XCD','XCD','ARS','AMD','AWG',
             'SHP','AUD','AZN','BSD','BHD','BDT','BBD','BYN','BZD','XOF','BMD','BTN','BOB','BAM',
             'BWP','BRL','BND','BGN','XOF','BIF','CVE','KHR','XAF','CAD','KYD','XAF','XAF','NZD',
             'CLP','CNY','AUD','AUD','COP','KMF','CDF','XAF','CRC','XOF','HRK','CUP','ANG','CZK',
             'DKK','DJF','XCD','DOP','EGP','XAF','ERN','SZL','ETB','FKP','FJD','XPF','XAF','GMD',
             'GEL','GHS','GIP','DKK','XCD','GTQ','GGP','GNF','XOF','GYD','HTG','HNL','HKD','HUF',
             'ISK','INR','IDR','XDR','IRR','IQD','IMP','ILS','JMD','JPY','JEP','JOD','KZT','KES',
             'AUD','KWD','KGS','LAK','LBP','LSL','LRD','LYD','CHF','MOP','MGA','MWK','MYR','MVR',
             'XOF','MRU','MUR','MXN','MDL','MNT','XCD','MAD','MZN','MMK','NAD','AUD','NPR','XPF',
             'NZD','NIO','XOF','NGN','NZD','AUD','KPW','MKD','NOK','OMR','PKR','ILS','PGK','PYG',
             'PEN','PHP','NZD','PLN','QAR','RON','RUB','RWF','SHP','XCD','WST','STN','SAR','XOF',
             'RSD','SCR','SLL','SGD','ANG','SBD','SOS','ZAR','GBP','KRW','SSP','LKR','SDG','SRD',
             'NOK','SEK','CHF','SYP','TWD','TJS','TZS','THB','XOF','NZD','TOP','TTD','GBP','TND',
             'TRY','TMT','AUD','UGX','UAH','AED','GBP','UYU','UZS','VUV','VES','VND','XPF','YER',
             'ZMW'
         ];
         return in_array($value, $existingIsoCodes, true);
     }

     public function equals(Currency &$value): bool
     {
         return !(strcmp($this->isoCode, $value->getIsoCode()));
     }
}

$a = new Currency('USD');
$b = new Currency('EUR');
var_dump($a->equals($b));
//echo $a->getIsoCode();

