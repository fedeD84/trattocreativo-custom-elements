<?php

/**
 * Plugin Name: Tratto Creativo Custom Elements
 * Plugin URI: https://trattocreativo.it/
 * Description: Custom elements created with Element Studio from Tratto Creativo.
 * Author: Tratto Creativo
 * Author URI: https://breakdance.com/
 * License: GPLv2
 * Text Domain: breakdance
 * Domain Path: /languages/
 * Version: 0.0.1
 */



namespace TrattoCreativoCustomElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'TrattoCreativoCustomElements',
        'element',
        'Tratto Creativo Custom Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'TrattoCreativoCustomElements',
        'macro',
        'Tratto Creativo Custom Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'TrattoCreativoCustomElements',
        'preset',
        'Tratto Creativo Custom Presets',
        false,
    );
},
    // register elements before loading them
    9
);
