<?php

/**
 * Get an example of a beer style.
 *
 * @param string $style
 *   Beer style to query for.
 *
 * @return string
 *   Returns beer style or if nothing found, a empty string.
 *
 * @throws \UnexpectedValueException
 */
function get_beer_style($style)
{
    if ($style === 'IPA') {
        return 'Ægir IPA';
    }

    throw new UnexpectedValueException('Unknown beer style');
}

$example = get_beer_style('IPA');
