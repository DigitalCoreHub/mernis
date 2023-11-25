<?php

namespace DigitalCoreHub\Mernis;

use SoapClient;

class Mernis
{
    public static function mernis(
        string $name,
        string $surname,
        int|string $dateBirth,
        $identificationNumber
    ) {

        $client = new SoapClient('https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx?WSDL');

        try {
            $result = $client->TCKimlikNoDogrula([
                'TCKimlikNo' => $identificationNumber,
                'Ad' => $name,
                'Soyad' => $surname,
                'DogumYili' => $dateBirth,
            ]);

            return (bool) $result->TCKimlikNoDogrulaResult;
        } catch (Exception $e) {
            echo $e->faultstring;
        }
    }

    public static function dogrula($identificationNumber): bool
    {
        $identificationNumber = (string) $identificationNumber;

        if (strlen((string) $identificationNumber) !== 11) {
            return false;
        }

        return true;
    }
}
