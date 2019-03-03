<?php
/**
 * Created by Artyom Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2019
 */

use Arrayzy\ArrayImitator;
use Stringy\Stringy;

/**
 * Prints clear string into the console with new line char at the end
 *
 * @param string $message
 */
function alert(string $message)
{
    echo $message . PHP_EOL;
}

/**
 * Dump and die (Laravel alternative)
 *
 * @param $value
 */
function dd($value)
{
    var_dump($value);
    die();
}

/**
 * Returns or sets $_ENV variable (type casting support)
 *
 * @param string $key
 * @param null $value
 *
 * @return array|bool|false|string
 */
function env(string $key, $value = null)
{
    if (!is_null($value)) {
        $setting = "{$key}='{$value}'";

        return putenv($setting);
    }

    $value = getenv($key);

    return is_json($value) ? json_decode($value, true) : $value;
}

/**
 * Checks if is a string value JSON format
 *
 * @param string $input
 *
 * @return bool
 */
function is_json(string $input)
{
    json_decode($input);

    return json_last_error() == JSON_ERROR_NONE;
}

/**
 * Returns Arrayzy instance, also from different arguments
 *
 * @param null $data
 * @param null $separator
 *
 * @return \Arrayzy\AbstractArray
 */
function arrayzy($data = null, $separator = null)
{
    if (!is_null($data)) {
        if (is_array($data)) {
            return ArrayImitator::create($data);
        } else if (is_object($data)) {
            return ArrayImitator::createFromObject($data);
        } else if (is_string($data) && !is_null($separator)) {
            return ArrayImitator::createFromString($data, $separator);
        } else if (is_json($data)) {
            return ArrayImitator::createFromJson($data);
        }
    }

    return ArrayImitator::create([]);
}

/**
 * Returns Stringy instance, also from different arguments
 * @param string $content
 *
 * @return Stringy
 */
function stringy(string $content = '')
{
    return Stringy::create($content);
}

/**
 * Returns a new Carbon instance
 * @return \Carbon\Carbon|\Carbon\CarbonInterface
 */
function moment()
{
    return \Carbon\Carbon::now();
}