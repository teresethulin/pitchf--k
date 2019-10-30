<?php

declare(strict_types=1);

require __DIR__ . '/data.php';

/**
 * Sorts published articles by date, latest first.
 *
 * @param array $todaysDate
 * @param array $datePublished
 * @return int
 */
function sortArticlesByDate(array $todaysDate, array $datePublished): int
{
    return strtotime($datePublished['date']) - strtotime($todaysDate['date']);
}

/**
 * Returns a given string of lorem ipsum with line breaks
 *
 * @param string $loremIpsum
 * @return string
 */
function contentWithLineBreak(string $loremIpsum): string
{
    return nl2br($loremIpsum);
}
