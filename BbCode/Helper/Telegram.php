<?php

/**
 * This file is a part of add-on "[Telegram] BB Code - Media Post".
 *
 * Developed by CrazyHackGUT aka Kruzya.
 * (c) 2018-2021
 */

namespace Kruzya\TelegramBbMedia\BbCode\Helper;


use XF\Entity\BbCodeMediaSite;

class Telegram
{
    /**
     * @param string $url
     * @param string $matchedId
     * @param BbCodeMediaSite $site
     * @param string $siteId
     * @return false|string
     */
    public static function onMatch($url, $matchedId, BbCodeMediaSite $site, $siteId)
    {
        $matchedId = false;
        if (preg_match('#t\.me\/(?P<channel>.{1,})\/(?P<postId>.{1,})#si', $url, $matches))
            $matchedId = $matches['channel'] . '/' . $matches['postId'];

        return $matchedId;
    }
}
