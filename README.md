<div align="center">
  <a href="https://github.com/MintoD/libMCUnicodeChars">
    <img src="https://raw.githubusercontent.com/MintoD/libMCUnicodeChars/main/assets/code-builder.png" alt="Logo" width="auto" height="auto">
  </a>

<h3 align="center">libMCUnicodeChars</h3>

  <p align="center">
    Minecraft Bedrock unicode characters library
    <br />
    <a href="https://github.com/MintoD/libMCUnicodeChars/releases">Releases</a>
    ·
    <a href="https://github.com/MintoD/libMCUnicodeChars/issues">Report Bug</a>
    ·
    <a href="https://github.com/MintoD/libMCUnicodeChars/wiki">Wiki</a>
  </p>
</div>

# Usage
```php
use MintoD\libMCUnicodeChars\libMCUnicodeChars as MCUnicodeChars;

sendMessage(MCUnicodeChars::$CODE_BUILDER_BUTTON);
```
**Use replace function**  
The replace function will replace the character name in curly braces with the character.
```php
use MintoD\libMCUnicodeChars\libMCUnicodeChars as MCUnicodeChars;

MCUnicodeChars::replace("{$CODE_BUILDER_BUTTON} is a character"); //WIll return MCUnicodeChars::$CODE_BUILDER_BUTTON is a character
```

# Support characters
|           Name          | Character |                                                 In-game                                                 |
|:-----------------------:|:---------:|:-------------------------------------------------------------------------------------------------------:|
|   FOWARD_ARROW_BUTTON   |          |      ![](https://raw.githubusercontent.com/MintoD/libMCUnicodeChars/main/assets/forward-arrow.png)      |
|    LEFT_ARROW_BUTTON    |          |        ![](https://raw.githubusercontent.com/MintoD/libMCUnicodeChars/main/assets/left-arrow.png)       |
|  BACKWARDS_ARROW_BUTTON |          |     ![](https://raw.githubusercontent.com/MintoD/libMCUnicodeChars/main/assets/down-arrow.png)     |
|    RIGHT_ARROW_BUTTON   |          |       ![](https://raw.githubusercontent.com/MintoD/libMCUnicodeChars/main/assets/right-arrow.png)       |
|       JUMP_BUTTON       |          |       ![](https://raw.githubusercontent.com/MintoD/libMCUnicodeChars/main/assets/jump-button.png)       |
|      CROUCH_BUTTON      |          |      ![](https://raw.githubusercontent.com/MintoD/libMCUnicodeChars/main/assets/crouch-button.png)      |
|      FLY_UP_BUTTON      |          |      ![](https://raw.githubusercontent.com/MintoD/libMCUnicodeChars/main/assets/fly-up-button.png)      |
|     FLY_DOWN_BUTTON     |          |     ![](https://raw.githubusercontent.com/MintoD/libMCUnicodeChars/main/assets/fly-down-button.png)     |
|   CRAFTABLE_BUTTON_ON   |          |       ![](https://raw.githubusercontent.com/MintoD/libMCUnicodeChars/main/assets/craftable-on.png)      |
|   CRAFTABLE_BUTTON_OFF  |          |      ![](https://raw.githubusercontent.com/MintoD/libMCUnicodeChars/main/assets/craftable-off.png)      |
|        FOOD_ICON        |          |           ![](https://raw.githubusercontent.com/MintoD/libMCUnicodeChars/main/assets/food.png)          |
|        ARMOR_ICON       |          |          ![](https://raw.githubusercontent.com/MintoD/libMCUnicodeChars/main/assets/armor.png)          |
|         MINECOIN        |          |         ![](https://raw.githubusercontent.com/MintoD/libMCUnicodeChars/main/assets/minecoin.png)        |
|   CODE_BUILDER_BUTTON   |          |       ![](https://raw.githubusercontent.com/MintoD/libMCUnicodeChars/main/assets/code-builder.png)      |
| IMMERSIVE_READER_BUTTON |          | ![](https://raw.githubusercontent.com/MintoD/libMCUnicodeChars/main/assets/immersive-reader-button.png) |
|          TOKEN          |          |          ![](https://raw.githubusercontent.com/MintoD/libMCUnicodeChars/main/assets/token.png)          |
# Todo
- [x] Make replace function.

# License
Copyright (c) MintoD. All rights reserved.

Licensed under the [MIT](https://github.com/MintoD/libMCUnicodeChars/blob/main/LICENSE) license.
