<?php

/**
 * Plugin Name: FStudio Public for breakdance
 * Plugin URI: https://github.com/Hakira-Shymuy/Fstudio-public
 * Description: Alpha version
 * Author: Nuno Ferreira
 * Author URI: https://github.com/Hakira-Shymuy
 * License: GPLv3
 * Text Domain: breakdance
 * Domain Path: /languages/
 * Version: 0.0.4 - Alpha
 */

namespace FStudioCElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'FStudioCElements',
        'element',
        'Custom Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'FStudioCElements',
        'macro',
        'Custom Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'FStudioCElements',
        'preset',
        'Custom Presets',
        false,
    );
},
    // register elements before loading them
    9
);
