<?php

namespace AGrimes94\Esi\HttpClient\Util;

/**
 * Utility class for Path related functions.
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
final class PathBuilder
{
    /**
     * Builds a viable path given a path with incomplete parameters.
     *
     * given:   '/characters/{character_id}/skills/', ['character_id' => 1234, ]
     * returns: '/characters/1234/skills/'
     *
     * @param string $path
     * @param array  $pathData
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
