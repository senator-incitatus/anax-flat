<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",

    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "css/base.min.css"
            ]
        ],

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "",
            "stylesheets" => [
                "css/default.min.css"
            ]
        ],

        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "light",
            "stylesheets" => [
                "css/light.min.css"
            ]
        ],

        "color"     => [
            "title"      => "Enhance the light theme by adding a tiny bit of color",
            "class"      => "color",
            "stylesheets" => [
                "css/color.min.css"
            ]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => [
                "css/dark.min.css"
            ]
        ],

        "colorful"  => [
            "title"      => "Make a very colorful theme",
            "class"      => "colorful",
            "stylesheets" => [
                "css/colorful.min.css"
            ]
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "light",
            "stylesheets" => [
                "css/typography.min.css"
            ]
        ],

        "separator2" => "------------------------------------------------",

        "texture"       => [
            "title"      => "A theme with texture",
            "class"      => "texture",
            "stylesheets" => [
                "css/texture.min.css"
            ]
        ],

        "photo"         => [
            "title"     => "A theme with photos",
            "class"     => "photo",
            "stylesheets" => [
                "css/photo.min.css"
            ]
        ],

        "gradient"      => [
            "title"     => "A theme with gradients and borders",
            "class"     => "gradient",
            "stylesheets" => [
                "css/gradient.min.css"
            ]
        ],
    ]
];
