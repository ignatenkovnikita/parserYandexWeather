<?php
/**
 * Created by PhpStorm.
 * User: ignatenkov
 * Date: 23.08.15
 * Time: 5:32
 */

namespace YandexWeather;


class Mapping {

    public static function mapCity() {
        return array(
            "city" => "city",
            "country" => "country",
            "region" => "region"
        );
    }

    public static function mapFact() {
        return array(
            "temperature_from" => "temperature_from",
            "temperature_to" => "temperature_to",
            "station" => "station",
            "observation_time" => "observation_time",
            "uptime" => "uptime",
            "temperature" => "temperature",
            "weather_condition" => "weather_condition",
            "image" => "image",
            "image-v2" => "image_v2",
            "image-v3" => "image_v3",
            "weather_type" => "weather_type",
            "wind_direction" => "wind_direction",
            "wind_speed" => "wind_speed",
            "humidity" => "humidity",
            "pressure" => "pressure",
            "mslp_pressure" => "mslp_pressure",
            "daytime" => "daytime",
            "season" => "season",
            "ipad_image" => "ipad_image"
        );
    }

    public static function mapDay() {
        return array(
            "sunrise" => "sunrise",
            "sunset" => "sunset"
        );
    }

    public static function map() {
        return [
            "forecast" => [
                "name" => "City",
                "attributes" => [
                    "city" => "city",
                    "country" => "country"
                ],
                "fact" => [
                    "name" => "fact",
                    "station" => [
                        "name" => "station",
                        "attributes" => [
                            "lang" => "lang"
                        ]
                    ],
                    "uptime" => "uptime",
                    "image" => [
                        "name" => "image",
                        "attributes" => [
                            "type" => "type"
                        ]
                    ]
                ]
            ]
        ];
    }

}