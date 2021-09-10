<?php

namespace Devpark\Transfers24;

/**
 * Class Language ISO 3166.
 */
class Language extends CodeTranslate
{
    const POLISH = 'pl';
    const ENGLISH = 'en';
    const SPANISH = 'es';
    const ITALIAN = 'it';
    const GERMAN = 'de';
    const BULGARIA = 'bg';
    const CZECHIA = 'cz';
    const FRANCE = 'fr';
    const CROATIA = 'hr';
    const HUNGARY = 'hu';
    const NETHERLANDS = 'nl';
    const PORTUGAL = 'pt';
    const SWEDEN = 'se';
    const SLOVAKIA = 'sk';

    /**
     * Get Code language.
     *
     * @param string $language
     *
     * @return string
     */
    public static function get($language = self::POLISH)
    {
        $languageCode = static::getCode($language, static::POLISH);

        return $languageCode;
    }
}
