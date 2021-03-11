<?php
use Contao\CoreBundle\DataContainer\PaletteManipulator;
use Contao\DataContainer;

    $GLOBALS['TL_DCA']['tl_content']['fields']['slider_show_nav'] = [ 
        'label'     => &$GLOBALS['TL_LANG']['tl_content']['slider_show_nav'], 
        'inputType' => 'checkbox', 
        'eval'      => array('tl_class' => 'w50 cbx'),
        'sql'       => "char(1) NOT NULL default ''" 
    ];
    $GLOBALS['TL_DCA']['tl_content']['fields']['slider_ken_burns'] = [ 
        'label'     => &$GLOBALS['TL_LANG']['tl_content']['slider_ken_burns'], 
        'inputType' => 'checkbox', 
        'eval'      => array('tl_class' => 'w50 cbx'),
        'sql'       => "char(1) NOT NULL default ''" 
    ];
    $GLOBALS['TL_DCA']['tl_content']['fields']['slider_full_height'] = [ 
        'label'     => &$GLOBALS['TL_LANG']['tl_content']['slider_full_height'], 
        'inputType' => 'checkbox', 
        'eval'      => array('tl_class' => 'w50 cbx'),
        'sql'       => "char(1) NOT NULL default ''" 
    ];
    $GLOBALS['TL_DCA']['tl_content']['fields']['slider_animate_captions'] = [ 
        'label'     => &$GLOBALS['TL_LANG']['tl_content']['slider_animate_captions'], 
        'inputType' => 'checkbox', 
        'eval'      => array('tl_class' => 'w50 cbx'),
        'sql'       => "char(1) NOT NULL default ''" 
    ];
    $GLOBALS['TL_DCA']['tl_content']['fields']['slider_animation_direction'] = [ 
        'label'     => &$GLOBALS['TL_LANG']['tl_content']['slider_animation_direction'], 
        'inputType' => 'checkbox', 
        'eval'      => array('tl_class' => 'w50 cbx'),
        'sql'       => "char(1) NOT NULL default ''" 
    ];
    $GLOBALS['TL_DCA']['tl_content']['fields']['slider_items'] = [ 
        'label'     => &$GLOBALS['TL_LANG']['tl_content']['slider_items'], 
        'inputType' => 'text', 
        'eval'      => array('tl_class' => 'w50'),
        'sql'       => "char(2) NOT NULL default ''" 
    ];
    $GLOBALS['TL_DCA']['tl_content']['fields']['slider_items_resp'] = [ 
        'label'     => &$GLOBALS['TL_LANG']['tl_content']['slider_items_resp'], 
        'inputType' => 'text', 
        'eval'      => array('tl_class' => 'w50'),
        'sql'       => "char(2) NOT NULL default ''" 
    ];
    $GLOBALS['TL_DCA']['tl_content']['fields']['transition_timing_function'] = [ 
        'label'     => &$GLOBALS['TL_LANG']['tl_content']['transition_timing_function'], 
        'inputType' => 'text', 
        'eval'      => array('tl_class' => 'w50'),
        'sql'       => "char(20) NOT NULL default ''" 
    ];
    $GLOBALS['TL_DCA']['tl_content']['fields']['slider_mode'] = [ 
        'label'     => &$GLOBALS['TL_LANG']['tl_content']['slider_mode'], 
        'inputType' => 'radio',
        'options'   => array(
            'gallery' => 'faden (überblenden)',
            'carousel' => 'sliden (schieben)'
        ), 
        'eval'      => array('tl_class' => 'w50'),
        'sql'       => "char(10) NOT NULL default ''" 
    ];
    
    PaletteManipulator::create()
    ->addField('slider_items', 'slider_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('slider_items_resp', 'slider_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('slider_mode', 'slider_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('transition_timing_function', 'slider_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('slider_animation_direction', 'slider_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('slider_full_height', 'slider_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('slider_ken_burns', 'slider_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('slider_animate_captions', 'slider_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('slider_show_nav', 'slider_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('sliderStart', 'tl_content');
