<?php

declare(strict_types=1);

namespace MintoD\libMCUnicodeChars;

class libMCUnicodeChars
{
    public static string $FORWARD_ARROW_BUTTON = "";
    public static string $LEFT_ARROW_BUTTON = "";
    public static string $BACKWARDS_ARROW_BUTTON = "";
    public static string $RIGHT_ARROW_BUTTON = "";
    public static string $JUMP_BUTTON = "";
    public static string $CROUCH_BUTTON = "";
    public static string $FLY_UP_BUTTON = "";
    public static string $FLY_DOWN_BUTTON = "";
    public static string $CRAFTABLE_BUTTON_ON = "";
    public static string $CRAFTABLE_BUTTON_OFF = "";
    public static string $FOOD_ICON = "";
    public static string $ARMOR_ICON = "";
    public static string $MINECOIN = "";
    public static string $CODE_BUILDER_BUTTON = "";
    public static string $IMMERSIVE_READER_BUTTON = "";
    public static string $TOKEN = "";

    public static function replace(string $str): string
    {
        return str_replace("{IMMERSIVE_READER_BUTTON}", self::$IMMERSIVE_READER_BUTTON, str_replace("{TOKEN}", self::$TOKEN, str_replace("{CODE_BUILDER_BUTTON}", self::$CODE_BUILDER_BUTTON, str_replace("{MINECOIN}", self::$MINECOIN, str_replace("{ARMOR_ICON}", self::$ARMOR_ICON, str_replace("{CRAFTABLE_BUTTON_OFF}", self::$CRAFTABLE_BUTTON_OFF, str_replace("{FOOD_ICON}", self::$FOOD_ICON, str_replace("{CRAFTABLE_BUTTON_ON}", self::$CRAFTABLE_BUTTON_ON, str_replace("{FLY_UP_BUTTON}", self::$FLY_UP_BUTTON, str_replace("{FLY_DOWN_BUTTON}", self::$FLY_DOWN_BUTTON, str_replace("{CROUCH_BUTTON}", self::$CROUCH_BUTTON, str_replace("{JUMP_BUTTON}", self::$JUMP_BUTTON, str_replace("{RIGHT_ARROW_BUTTON}", self::$RIGHT_ARROW_BUTTON, str_replace("{BACKWARDS_ARROW_BUTTON}", self::$BACKWARDS_ARROW_BUTTON,  str_replace("{FORWARD_ARROW_BUTTON}", self::$FORWARD_ARROW_BUTTON, str_replace("{LEFT_ARROW_BUTTON}", self::$LEFT_ARROW_BUTTON, $str))))))))))))))));
    }
}
