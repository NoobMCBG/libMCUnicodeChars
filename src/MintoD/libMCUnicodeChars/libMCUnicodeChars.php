<?php

declare(strict_types=1);

namespace MintoD\libMCUnicodeChars;

class libMCUnicodeChars
{
    public const CharactersName = ["FORWARD_ARROW_BUTTON", "LEFT_ARROW_BUTTON", "BACKWARDS_ARROW_BUTTON", "RIGHT_ARROW_BUTTON", "JUMP_BUTTON", "CROUCH_BUTTON", "FLY_UP_BUTTON", "FLY_DOWN_BUTTON", "CRAFTABLE_BUTTON_ON", "CRAFTABLE_BUTTON_OFF", "FOOD_ICON", "ARMOR_ICON", "MINECOIN", "CODE_BUILDER_BUTTON", "IMMERSIVE_READER_BUTTON", "TOKEN"];
    public const MCUnicodeChars = ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""];

    public static function replace(string $str): string
    {
        return str_replace(self::CharactersName, self::MCUnicodeChars, $str);
    }
}
