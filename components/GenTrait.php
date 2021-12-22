<?php

namespace app\components;

use app\models\User;

trait GenTrait
{
    /**
     * @param $minLen
     * @param $maxLen
     * @return string
     */
    protected function getWord($minLen, $maxLen = null)
    {
        $dic = 'qwertyuiopasdfghjklzxcvbnm';

        $str = '';
        $dicLen = strlen($dic);

        if ($maxLen) {
            $minLen = mt_rand($minLen, $maxLen);
        }
        for ($i = 0; $i < (int)$minLen; $i++) {
            $str .= $dic[mt_rand(0, $dicLen - 1)];
        }

        return ucfirst($str);
    }

    /**
     * @param $cnt
     * @param $minLen
     * @param $maxLen
     * @return string
     */
    protected function getWords($cnt, $minLen, $maxLen = null)
    {
        $str = [];
        for ($i = 0; $i < (int)$cnt; $i++) {
            $str [] = $this->getWord($minLen, $maxLen);
        }

        return implode(' ', $str);
    }
}