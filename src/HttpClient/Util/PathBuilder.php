<?php

namespace AGrimes94\Esi\HttpClient\Util;

/**
 * Utility class for Path related functions.
 *
 * @author Anthony Grimes <contact@anthonygrimes.co.uk>
 */
final class PathBuilder
{
    /**
     * Builds a viable path given a "unfull" path
     *
     * given:   '/characters/{character_id}/skills/', ['character_id' => 1234,]
     * returns: '/characters/1234/skills/'
     *
     * @param string $path
     * @param array $pathData
     *
     * @return string
     */
    public static function build(string $path, array $pathData): string
    {
        if (preg_match_all('/{+(.*?)}/', $path, $matches)) {
            foreach ($matches[1] as $match) {
                $path = str_replace('{' . $match . '}', $pathData[$match], $path);
            }
        }

        return $path;
    }
}