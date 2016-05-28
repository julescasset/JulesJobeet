<?php
/**
 * Created by PhpStorm.
 * User: Jules
 * Date: 23/05/2016
 * Time: 14:33
 */

namespace Ens\JulesBundle\Utils;
class Jobeet
{
    static public function slugify($text)
    {
        // replace all non letters or digits by -
        $text = preg_replace('/\W+/', '-', $text);

        // trim and lowercase
        $text = strtolower(trim($text, '-'));

        if (empty($text))
        {
            return 'n-a';
        }

        return $text;
    }
}