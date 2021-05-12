<?php

//1 mile =  1,60934 km
//1km = 0,621371 mile

class Speedometer
{
    public const MILES = 0.621371;
    public const KM = 1.60934;

    public static function convertKmToMiles(int $kilometre): ?float
    {
        return $kilometre * self::MILES;

    }

    public static function convertMilesToKm(int $miles): ?float
    {
        return $miles * self::KM;

    }
}