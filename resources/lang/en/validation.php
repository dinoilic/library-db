<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute mora biti prihvaćen.',
    'active_url'           => ':attribute nije validan URL.',
    'after'                => ':attribute mora biti datum nakon :date.',
    'alpha'                => ':attribute može sadržavat samo slova.',
    'alpha_dash'           => ':attribute može sadržavat samo slova, brojeve i crtice.',
    'alpha_num'            => ':attribute može sadržavat samo slova i brojeve.',
    'array'                => ':attribute mora biti polje.',
    'before'               => ':attribute mora biti datum prije :date.',
    'between'              => [
        'numeric' => ':attribute mora biti u rasponu :min i :max.',
        'file'    => ':attribute mora biti u rasponu :min i :max kilobajta.',
        'string'  => ':attribute mora biti u rasponu :min i :max znakova.',
        'array'   => ':attribute mora imati u rasponu :min i :max artikala.',
    ],
    'boolean'              => ':attribute mora biti true ili false.',
    'confirmed'            => ':attribute potvrda se ne poklapa.',
    'date'                 => ':attribute nije validan datum.',
    'date_format'          => ':attribute nije jednak formatu :format.',
    'different'            => ':attribute i :other se moraju razlikovati.',
    'digits'               => ':attribute se mora sastojati od :digits znamenki.',
    'digits_between'       => ':attribute must be between :min and :max digits.',
    'dimensions'           => ':attribute se sastoji od krive dimenzije slike.',
    'distinct'             => ':attribute ima duplikatnu vrijednost.',
    'email'                => 'E-mail mora biti ispravna adresa.',
    'exists'               => 'Odabrani :attribute je invalidan.',
    'file'                 => ':attribute mora biti datoteka.',
    'filled'               => 'Polje :attribute je obavezno.',
    'image'                => ':attribute mora biti slika.',
    'in'                   => 'Odabrani :attribute je invalidan.',
    'in_array'             => 'Polje :attribute ne postoji u :other.',
    'integer'              => ':attribute mora biti integer.',
    'ip'                   => ':attribute mora biti validna IP adresa.',
    'json'                 => ':attribute mora biti validan JSON string.',
    'max'                  => [
        'numeric' => ':attribute mora biti veći od :max.',
        'file'    => ':attribute ne smije biti veći od :max kilobajta.',
        'string'  => ':attribute ne smije biti veći od :max znakova.',
        'array'   => ':attribute ne smije imat više od :max artikala.',
    ],
    'mimes'                => ':attribute mora biti datoteka tipa: :values.',
    'mimetypes'            => ':attribute mora biti datoteka tipa: :values.',
    'min'                  => [
        'numeric' => ':attribute mora biti barem :min.',
        'file'    => ':attribute mora biti barem :min kilobajta.',
        'string'  => ':attribute mora imati barem :min znakova.',
        'array'   => ':attribute se mora sastojati :min artikala.',
    ],
    'not_in'               => 'Odabrani :attribute nije validan.',
    'numeric'              => ':attribute mora biti broj.',
    'present'              => 'Polje :attribute mora biti prisutno.',
    'regex'                => 'Format :attribute nije validan.',
    'required'             => 'Polje :attribute je obavezno.',
    'required_if'          => 'Polje :attribute je obavezno kada :other iznosi :value.',
    'required_unless'      => 'Polje :attribute je obavezno osim ako je :other u :values.',
    'required_with'        => 'Polje :attribute je obavezno kada :values je prisutno.',
    'required_with_all'    => 'Polje :attribute je obavezno kada :values je prisutno.',
    'required_without'     => 'Polje :attribute je obavezno kada :values nije prisutno.',
    'required_without_all' => 'Polje :attribute je obavezno kada niti jedna od :values nije prisutna.',
    'same'                 => ':attribute i :other moraju biti jednaki.',
    'size'                 => [
        'numeric' => ':attribute mora iznosit :size.',
        'file'    => ':attribute mmora biti :size kilobajta.',
        'string'  => ':attribute must be :size znakova.',
        'array'   => ':attribute se mora sastojati od :size artikala.',
    ],
    'string'               => ':attribute mora biti string.',
    'timezone'             => ':attribute mora biti validne zone.',
    'unique'               => ':attribute već postoji.',
    'uploaded'             => ':attribute se nije uspio učitati.',
    'url'                  => ':attribute format nije validan.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'email' => 'E-Mail adresa',
        'firstName' => 'Ime',
        'lastName' => 'Prezime',
        'password' => 'Lozinka',
    ],

];
