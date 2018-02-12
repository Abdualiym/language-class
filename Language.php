<?php

namespace abdualiym\languageClass;

use yii\base\Model;
use yii\helpers\ArrayHelper;

class Language extends Model
{
    public static function getLangByPrefix($prefix)
    {
        $langList = self::langList();
        for ($i = 0; $i < count($langList); $i++) {
            if ($langList[$i]['prefix'] === $prefix) {
                return $langList[$i];
            }
        }
    }

    public static function getPrefixesLangForCodemix()
    {
        $langList = self::langList();
        $langPrefixes = array();
        for ($i = 0; $i < count($langList); $i++) {
            $langPrefixes[] = $langList[$i]['prefix'];
        }
        return $langPrefixes;
    }


    public static function langList($languages = null, $indexById = false)
    {
        $list = self::getLanguagesArray();

        if (!$languages) {
            return $list;
        }

        $lang = array();
        for ($i = 0; $i < count($list); $i++) {
            for ($j = 0; $j < count($languages); $j++) {
                if ($list[$i]['prefix'] == $languages[$j]) {
                    $lang[] = $list[$i];
                }
            }
        }

        return $indexById ? ArrayHelper::index($lang, 'id') : $lang;
    }

    public static function langIds()
    {
        $langList = self::langList();
        foreach ($langList as $lang) {
            $ids[] = $lang['id'];
        }
        return $ids;
    }

    private function getLanguagesArray()
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
                'prefix' => 'uz',
                'title' => 'O`zbekcha'
            ],
            [
                'id' => '4',
                'prefix' => 'oz',
                'title' => 'Ўзбекча'
            ],
        ];
    }
}