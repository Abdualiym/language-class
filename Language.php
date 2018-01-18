<?php

namespace abdualiym\languageClass;

class Language
{
    public static function getLangByPrefix(string $prefix) : array
    {
        $langList = self::langList();
        for ($i = 0; $i < count($langList); $i++) {
            if ($langList[$i]['prefix'] === $prefix) {
                return $langList[$i];
            }
        }
    }

    public static function getPrefixesLangForCodemix() : array
    {
        $langList = self::langList();
        $langPrefixes = array();
        for ($i = 0; $i < count($langList); $i++) {
            $langPrefixes[] = $langList[$i]['prefix'];
        }
        return $langPrefixes;
    }


    public static function langList() : array
    {
        return [
            [
                'id' => '1',
                'prefix' => 'en',
                'title' => 'English'
            ],
            [
                'id' => '2',
                'prefix' => 'ru',
                'title' => 'Русский'
            ],
            [
                'id' => '3',
                'prefix' => 'oz',
                'title' => 'O`zbekcha'
            ],
            [
                'id' => '4',
                'prefix' => 'uz',
                'title' => 'Ўзбекча'
            ],
        ];
    }

    public static function langIds() : array
    {
        $langList = self::langList();
        foreach ($langList as $lang){
            $ids[] = $lang['id'];
        }
        return $ids;
    }
}