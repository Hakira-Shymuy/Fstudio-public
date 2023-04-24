<?php

namespace FStudioCElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "FStudioCElements\\Container",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class Container extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return 'SquareIcon';
    }

    static function tag()
    {
        return 'div';
    }

    static function tagOptions()
    {
        return ['section', 'header', 'footer', 'nav', 'aside', 'figure', 'ul', 'ol', 'li', 'article', 'details', 'summary', 'p', 'span'];
    }

    static function tagControlPath()
    {
        return false;
    }

    static function name()
    {
        return 'Container';
    }

    static function className()
    {
        return 'fscontainer';
    }

    static function category()
    {
        return 'basic';
    }

    static function badge()
    {
        return false;
    }

    static function slug()
    {
        return get_class();
    }

    static function template()
    {
        return file_get_contents(__DIR__ . '/html.twig');
    }

    static function defaultCss()
    {
        return file_get_contents(__DIR__ . '/default.css');
    }

    static function defaultProperties()
    {
        return ['design' => ['grid_layout' => ['is_child' => null, 'column_span' => null], 'size' => ['width' => ['breakpoint_base' => ['number' => 100, 'unit' => '%', 'style' => '100%']]]]];
    }

    static function defaultChildren()
    {
        return false;
    }

    static function cssTemplate()
    {
        $template = file_get_contents(__DIR__ . '/css.twig');
        return $template;
    }

    static function designControls()
    {
        return [getPresetSection(
      "EssentialElements\\layout",
      "Flex Layout",
      "flex_layout",
       ['condition' => ['0' => []], 'type' => 'popout']
     ), c(
        "grid_layout",
        "Grid Layout",
        [c(
        "is_grid",
        "Is Grid",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "no_display_flex",
        "No Display Flex",
        [],
        ['type' => 'alert_box', 'layout' => 'vertical', 'alertBoxOptions' => ['style' => 'error', 'content' => '<p>You activated Grid, do not use Display Flex or you will have invalid CSS</p>'], 'condition' => ['0' => ['0' => ['path' => 'design.grid_layout.is_grid', 'operand' => 'is set', 'value' => '']]]],
        false,
        false,
        [],
      ), c(
        "auto_columns",
        "Auto Columns",
        [],
        ['type' => 'toggle', 'layout' => 'inline', 'triggerActionsButtonOptions' => ['text' => 'Auto Columns'], 'condition' => ['0' => ['0' => ['path' => 'design.grid_layout.is_child', 'operand' => 'is not set', 'value' => ''], '1' => ['path' => 'design.grid_layout.is_grid', 'operand' => 'is set', 'value' => '']]]],
        true,
        false,
        [],
      ), c(
        "auto_min",
        "Auto Min",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'px', '1' => 'rem', '2' => '%', '3' => 'vw', '4' => 'custom', '5' => 'calc']], 'condition' => ['0' => ['0' => ['path' => 'design.grid_layout.auto_columns', 'operand' => 'is set', 'value' => '']]]],
        true,
        false,
        [],
      ), c(
        "auto_max",
        "Auto Max",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'px', '1' => 'rem', '2' => '%', '3' => 'vw', '4' => 'custom', '5' => 'calc']], 'condition' => ['0' => ['0' => ['path' => 'design.grid_layout.auto_columns', 'operand' => 'is set', 'value' => '']]]],
        true,
        false,
        [],
      ), c(
        "grid_columns",
        "Grid Columns",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 1, 'max' => 12, 'step' => 1], 'condition' => ['0' => ['0' => ['path' => 'design.grid_layout.auto_columns', 'operand' => 'is not set', 'value' => ''], '1' => ['path' => 'design.grid_layout.is_child', 'operand' => 'is not set', 'value' => ''], '2' => ['path' => 'design.grid_layout.is_grid', 'operand' => 'is set', 'value' => '']]]],
        true,
        false,
        [],
      ), c(
        "column_gap",
        "Column Gap",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'px', '1' => 'em', '2' => 'rem', '3' => '%', '4' => 'vw', '5' => 'custom'], 'defaultType' => 'px'], 'condition' => ['0' => ['0' => ['path' => 'design.grid_layout.is_child', 'operand' => 'is not set', 'value' => ''], '1' => ['path' => 'design.grid_layout.is_grid', 'operand' => 'is set', 'value' => '']]]],
        true,
        false,
        [],
      ), c(
        "row_gap",
        "Row Gap",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'px', '1' => 'em', '2' => 'rem', '3' => '%', '4' => 'vw', '5' => 'calc'], 'defaultType' => 'px'], 'condition' => ['0' => ['0' => ['path' => 'design.grid_layout.is_child', 'operand' => 'is not set', 'value' => ''], '1' => ['path' => 'design.grid_layout.is_grid', 'operand' => 'is set', 'value' => '']]]],
        true,
        false,
        [],
      ), c(
        "align_items",
        "Align Items",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['value' => 'stretch', 'text' => 'Stretch'], '1' => ['value' => 'start', 'text' => 'Start'], '2' => ['value' => 'center', 'text' => 'Center'], '3' => ['value' => 'end', 'text' => 'End']], 'condition' => ['0' => ['0' => ['path' => 'design.grid_layout.is_grid', 'operand' => 'is set', 'value' => '']]]],
        true,
        false,
        [],
      ), c(
        "justify_items",
        "Justify Items",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['value' => 'stretch', 'text' => 'Stretch'], '1' => ['value' => 'start', 'text' => 'Start'], '2' => ['value' => 'center', 'text' => 'center'], '3' => ['value' => 'end', 'text' => 'End']], 'condition' => ['0' => ['0' => ['path' => 'design.grid_layout.is_grid', 'operand' => 'is set', 'value' => '']]]],
        true,
        false,
        [],
      ), c(
        "grid_alert",
        "Grid Alert",
        [],
        ['type' => 'alert_box', 'layout' => 'vertical', 'alertBoxOptions' => ['style' => 'warning', 'content' => '<p>CSS Grid <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Grid_Layout">https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Grid_Layout</a></p>']],
        false,
        false,
        [],
      ), c(
        "is_child",
        "Is Child",
        [],
        ['type' => 'toggle', 'layout' => 'inline', 'condition' => ['0' => ['0' => ['path' => 'design.grid_layout.is_grid', 'operand' => 'is not set', 'value' => '']]]],
        true,
        false,
        [],
      ), c(
        "column_span",
        "Column Span",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 1, 'max' => 12, 'step' => 1], 'condition' => ['0' => ['0' => ['path' => 'design.grid_layout.is_child', 'operand' => 'is set', 'value' => '']]]],
        true,
        false,
        [],
      )],
        ['type' => 'section', 'sectionOptions' => ['type' => 'accordion']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\size",
      "Size",
      "size",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\fancy_background",
      "Background",
      "background",
       ['type' => 'popout']
     )];
    }

    static function contentControls()
    {
        return [];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return false;
    }

    static function settings()
    {
        return false;
    }

    static function addPanelRules()
    {
        return false;
    }

    static public function actions()
    {
        return false;
    }

    static function nestingRule()
    {
        return ["type" => "container",   ];
    }

    static function spacingBars()
    {
        return false;
    }

    static function attributes()
    {
        return false;
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return 20;
    }

    static function dynamicPropertyPaths()
    {
        return ['0' => ['accepts' => 'image_url', 'path' => 'design.background.image'], '1' => ['accepts' => 'image_url', 'path' => 'design.background.overlay.image'], '2' => ['accepts' => 'image_url', 'path' => 'design.background.layers[].image']];
    }

    static function additionalClasses()
    {
        return false;
    }

    static function projectManagement()
    {
        return false;
    }

    static function propertyPathsToWhitelistInFlatProps()
    {
        return ['design.background.image', 'design.background.overlay.image', 'design.background.image_settings.unset_image_at', 'design.background.image_settings.size', 'design.background.image_settings.height', 'design.background.image_settings.repeat', 'design.background.image_settings.position', 'design.background.image_settings.left', 'design.background.image_settings.top', 'design.background.image_settings.attachment', 'design.background.image_settings.custom_position', 'design.background.image_settings.width', 'design.background.overlay.image_settings.custom_position', 'design.background.image_size', 'design.background.overlay.image_size', 'design.background.overlay.type', 'design.background.design.layout.horizontal.vertical_at', 'design.background.image_settings', 'design.grid_child.spans', 'design.grid_layout.column_span', 'design.grid_layout.column_gap'];
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
