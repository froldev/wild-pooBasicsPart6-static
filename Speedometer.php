<?php

class Speedometer
{
    const convertion = 1.61;

    public static function convertKmToMiles($km)
    {
        return $km / self::convertion;
    }
    public static function convertMilesToKm($miles)
    {
        return $miles * self::convertion;
    }
}
