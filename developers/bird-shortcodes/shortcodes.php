<?php
/**
 *
 * Bootstrap v.3.1.1 (see more http://getbootstrap.com/)
 * Bootstrap elements: Grid (Text Columns), Togglable Tabs, Accordion (Collapse)
 * Others elements: Information boxes, Divider, Highlighting, Buttons
 * Icons: Font Awesome Icons v.4.0.3 (see more http://fontawesome.io/)
 *
 */

/**
 * Text Columns (Bootstrap)
 */
// Row columns wrap
if (!function_exists('bird_sc_grid_row')) {
  function bird_sc_grid_row($atts, $content = null) {
    $html_output = '<div class="row bsc-columns-wrap clearfix">'.do_shortcode($content).'</div>';
	  return $html_output;
  }
  add_shortcode('row', 'bird_sc_grid_row');
}

// 2 Columns
if (!function_exists('bird_sc_grid_2')) {
  function bird_sc_grid_2($atts, $content = null) {
    $html_output = '<div class="col-md-6 bsc-col-bottom-indent">'.do_shortcode($content).'</div>';
	  return $html_output;
  }
  add_shortcode('two_column', 'bird_sc_grid_2');
}

// 3 Columns
if (!function_exists('bird_sc_grid_3')) {
  function bird_sc_grid_3($atts, $content = null) {
    $html_output = '<div class="col-md-4 bsc-col-bottom-indent">'.do_shortcode($content).'</div>';
	  return $html_output;
  }
  add_shortcode('three_column', 'bird_sc_grid_3');
}

// 4 Columns
if (!function_exists('bird_sc_grid_4')) {
  function bird_sc_grid_4($atts, $content = null) {
    $html_output = '<div class="col-md-3 bsc-col-bottom-indent">'.do_shortcode($content).'</div>';
	  return $html_output;
  }
  add_shortcode('four_column', 'bird_sc_grid_4');
}

// 6 Columns
if (!function_exists('bird_sc_grid_6')) {
  function bird_sc_grid_6($atts, $content = null) {
    $html_output = '<div class="col-md-2 bsc-col-bottom-indent">'.do_shortcode($content).'</div>';
	  return $html_output;
  }
  add_shortcode('six_column', 'bird_sc_grid_6');
}
/**
 * End Text Columns
 */

/**
 * Information boxes
 */
if (!function_exists('bird_sc_info_box')) {
  function bird_sc_info_box($atts, $content = null) {
    extract(shortcode_atts(array(
      'color' => 'blue',
      'width' => '100%',
      'float' => 'left',
      'text_align' => 'left'
    ), $atts));

    $html_output = '<div class="bsc-info-box bsc-text-white bsc-bg-'.$color.'" style="width: '.$width.'; float: '.$float.'; text-align: '.$text_align.';">'.do_shortcode($content).'</div>';
    return $html_output;
  }
  add_shortcode('info_box', 'bird_sc_info_box');
}

/**
 * divider (dotted, dashed, solid, double, groove, ridge, inset, outset)
 */
if (!function_exists('bird_sc_divider')) {
  function bird_sc_divider($atts, $content = null) {
    extract(shortcode_atts(array(
      'color' => 'blue',
      'type' => 'solid',
      'width' => '100%',
      'height' => '1px',
      'float' => 'left'
    ), $atts));

    if ($color) {
      $divider_color = 'bsc-border-top-'.$color;
    }  else {
      $divider_color = '';
    }

    $html_output = '<div class="bsc-divider '.$divider_color.'" style="width: '.$width.'; float: '.$float.'; border-top-width: '.$height.'; border-top-style: '.$type.'"></div>';
    return $html_output;
  }
  add_shortcode('divider', 'bird_sc_divider');
}

/**
 * text highlighting
 */
if (!function_exists('bird_sc_text_highlighting')) {
  function bird_sc_text_highlighting($atts, $content = null) {
    extract(shortcode_atts(array(
      'color' => 'red'
    ), $atts));

    if ($color) {
      $highlight_color = 'bsc-bg-'.$color;
    } else {
      $highlight_color = '';
    }

    $html_output = '<span class="bsc-text-highlight bsc-text-white '.$highlight_color.'">'.do_shortcode($content).'</span>';
    return $html_output;
  }
  add_shortcode('highlight', 'bird_sc_text_highlighting');
}

/**
 * Tabs (Bootstrap)
 */
// nav tabs wrap
if (!function_exists('bird_sc_nav_tabs_wrap')) {
  function bird_sc_nav_tabs_wrap($atts, $content = null) {
	  global $tab_num;
    $tab_num = mt_rand(1, 99999);

    $html_output = '
	  <script type=\'text/javascript\'>
	  jQuery.noConflict()(function($) {
	    $(document).ready(function() {
		    $(\'#bsc-tabs-num-'.$tab_num.' a:first\').tab(\'show\');
	    });
	  });
	  </script>
	  <ul class="nav nav-tabs bsc-nav-tabs" id="bsc-tabs-num-'.$tab_num.'">'.do_shortcode($content).'</ul>';
	  return $html_output;
  }
  add_shortcode('nav', 'bird_sc_nav_tabs_wrap');
}

// tab 1
if (!function_exists('bird_sc_tab_1')) {
  function bird_sc_tab_1($atts, $content = null) {
	  global $tab_num;
    $html_output = '<li class="active"><a href="#bsc-tab-1-'.$tab_num.'" data-toggle="tab">'.do_shortcode($content).'</a></li>';
	  return $html_output;
  }
  add_shortcode('tab1', 'bird_sc_tab_1');
}

// tab 2
if (!function_exists('bird_sc_tab_2')) {
  function bird_sc_tab_2($atts, $content = null) {
	  global $tab_num;
    $html_output = '<li><a href="#bsc-tab-2-'.$tab_num.'" data-toggle="tab">'.do_shortcode($content).'</a></li>';
	  return $html_output;
  }
  add_shortcode('tab2', 'bird_sc_tab_2');
}

// tab 3
if (!function_exists('bird_sc_tab_3')) {
  function bird_sc_tab_3($atts, $content = null) {
	  global $tab_num;
    $html_output = '<li><a href="#bsc-tab-3-'.$tab_num.'" data-toggle="tab">'.do_shortcode($content).'</a></li>';
	  return $html_output;
  }
  add_shortcode('tab3', 'bird_sc_tab_3');
}

// tab 4
if (!function_exists('bird_sc_tab_4')) {
  function bird_sc_tab_4($atts, $content = null) {
	  global $tab_num;
    $html_output = '<li><a href="#bsc-tab-4-'.$tab_num.'" data-toggle="tab">'.do_shortcode($content).'</a></li>';
	  return $html_output;
  }
  add_shortcode('tab4', 'bird_sc_tab_4');
}

// tab 5
if (!function_exists('bird_sc_tab_5')) {
  function bird_sc_tab_5($atts, $content = null) {
	  global $tab_num;
    $html_output = '<li><a href="#bsc-tab-5-'.$tab_num.'" data-toggle="tab">'.do_shortcode($content).'</a></li>';
	  return $html_output;
  }
  add_shortcode('tab5', 'bird_sc_tab_5');
}

// tab 6
if (!function_exists('bird_sc_tab_6')) {
  function bird_sc_tab_6($atts, $content = null) {
	  global $tab_num;
    $html_output = '<li><a href="#bsc-tab-6-'.$tab_num.'" data-toggle="tab">'.do_shortcode($content).'</a></li>';
	  return $html_output;
  }
  add_shortcode('tab6', 'bird_sc_tab_6');
}

// tab 7
if (!function_exists('bird_sc_tab_7')) {
  function bird_sc_tab_7($atts, $content = null) {
	  global $tab_num;
    $html_output = '<li><a href="#bsc-tab-7-'.$tab_num.'" data-toggle="tab">'.do_shortcode($content).'</a></li>';
	  return $html_output;
  }
  add_shortcode('tab7', 'bird_sc_tab_7');
}

// tab 8
if (!function_exists('bird_sc_tab_8')) {
  function bird_sc_tab_8($atts, $content = null) {
	  global $tab_num;
    $html_output = '<li><a href="#bsc-tab-8-'.$tab_num.'" data-toggle="tab">'.do_shortcode($content).'</a></li>';
	  return $html_output;
  }
  add_shortcode('tab8', 'bird_sc_tab_8');
}

// tabs content wrap
if (!function_exists('bird_sc_tab_content_wrap')) {
  function bird_sc_tab_content_wrap($atts, $content = null) {
    $html_output = '<div class="tab-content bsc-tab-content">'.do_shortcode($content).'</div>';
	  return $html_output;
  }
  add_shortcode('tabs_content', 'bird_sc_tab_content_wrap');
}

// tab content 1
if (!function_exists('bird_sc_tab_content_1')) {
  function bird_sc_tab_content_1($atts, $content = null) {
	  global $tab_num;
    $html_output = '<div class="tab-pane fade in active" id="bsc-tab-1-'.$tab_num.'">'.do_shortcode($content).'</div>';
	  return $html_output;
  }
  add_shortcode('tab_content1', 'bird_sc_tab_content_1');
}

// tab content 2
if (!function_exists('bird_sc_tab_content_2')) {
  function bird_sc_tab_content_2($atts, $content = null) {
	  global $tab_num;
    $html_output = '<div class="tab-pane fade" id="bsc-tab-2-'.$tab_num.'">'.do_shortcode($content).'</div>';
	  return $html_output;
  }
  add_shortcode('tab_content2', 'bird_sc_tab_content_2');
}

// tab content 3
if (!function_exists('bird_sc_tab_content_3')) {
  function bird_sc_tab_content_3($atts, $content = null) {
	  global $tab_num;
    $html_output = '<div class="tab-pane fade" id="bsc-tab-3-'.$tab_num.'">'.do_shortcode($content).'</div>';
	  return $html_output;
  }
  add_shortcode('tab_content3', 'bird_sc_tab_content_3');
}

// tab content 4
if (!function_exists('bird_sc_tab_content_4')) {
  function bird_sc_tab_content_4($atts, $content = null) {
	  global $tab_num;
    $html_output = '<div class="tab-pane fade" id="bsc-tab-4-'.$tab_num.'">'.do_shortcode($content).'</div>';
	  return $html_output;
  }
  add_shortcode('tab_content4', 'bird_sc_tab_content_4');
}

// tab content 5
if (!function_exists('bird_sc_tab_content_5')) {
  function bird_sc_tab_content_5($atts, $content = null) {
	  global $tab_num;
    $html_output = '<div class="tab-pane fade" id="bsc-tab-5-'.$tab_num.'">'.do_shortcode($content).'</div>';
	  return $html_output;
  }
  add_shortcode('tab_content5', 'bird_sc_tab_content_5');
}

// tab content 6
if (!function_exists('bird_sc_tab_content_6')) {
  function bird_sc_tab_content_6($atts, $content = null) {
	  global $tab_num;
    $html_output = '<div class="tab-pane fade" id="bsc-tab-6-'.$tab_num.'">'.do_shortcode($content).'</div>';
	  return $html_output;
  }
  add_shortcode('tab_content6', 'bird_sc_tab_content_6');
}

// tab content 7
if (!function_exists('bird_sc_tab_content_7')) {
  function bird_sc_tab_content_7($atts, $content = null) {
	  global $tab_num;
    $html_output = '<div class="tab-pane fade" id="bsc-tab-7-'.$tab_num.'">'.do_shortcode($content).'</div>';
	  return $html_output;
  }
  add_shortcode('tab_content7', 'bird_sc_tab_content_7');
}

// tab content 8
if (!function_exists('bird_sc_tab_content_8')) {
  function bird_sc_tab_content_8($atts, $content = null) {
	  global $tab_num;
    $html_output = '<div class="tab-pane fade" id="bsc-tab-8-'.$tab_num.'">'.do_shortcode($content).'</div>';
	  return $html_output;
  }
  add_shortcode('tab_content8', 'bird_sc_tab_content_8');
}

/**
 * Accordion (Bootstrap)
 */
// accordion wrap
if (!function_exists('bird_sc_accordion_wrap')) {
  function bird_sc_accordion_wrap($atts, $content = null) {
	  global $accordion_num;
    $accordion_num = mt_rand(1, 99999);

    $html_output = '<div class="panel-group bsc-accordion-wrap" id="bsc-accordion-'.$accordion_num.'">'.do_shortcode($content).'</div>';
	  return $html_output;
  }
  add_shortcode('accordion', 'bird_sc_accordion_wrap');
}

// accordion section
if (!function_exists('bird_sc_accordion_section')) {
  function bird_sc_accordion_section($atts, $content = null) {
	  extract(shortcode_atts(array(
	    'number' => '1',
	    'title' => 'Title'
	  ), $atts));
	  
  	if (!$number) {
	    $number = '1';
	  }
	  
	  if ($number == 1) {
	    $collapse_in = 'in';
	  } else {
	    $collapse_in = '';
	  }
	
	  global $accordion_num;

    $html_output = '
	  <div class="panel bsc-accordion-section panel-default">
	    <div class="bsc-accordion-heading">
		    <h4 class="bsc-accordion-title">
		      <a class="clearfix" data-toggle="collapse" data-parent="#bsc-accordion-'.$accordion_num.'" href="#bsc-accordion-collapse-'.$number.'-'.$accordion_num.'">
		        '.$title.'
		        <span><i class="fa fa-bars"></i></span>
		      </a>
		    </h4>
	    </div>
	    <div id="bsc-accordion-collapse-'.$number.'-'.$accordion_num.'" class="panel-collapse collapse '.$collapse_in.'">
		    <div class="bsc-accordion-body">
		    '.do_shortcode($content).'
		    </div>
	    </div>
	  </div>
	  ';
	  return $html_output;
  }
  add_shortcode('accordion_section', 'bird_sc_accordion_section');
}

/**
 * Font Awesome Icons (http://fontawesome.io/icons/)
 */
if (!function_exists('bird_sc_awesome_icons')) {
  function bird_sc_awesome_icons($atts, $content = null) {
	  extract(shortcode_atts(array(
	    'type' => 'fa-star',
	    'size' => '14px',
	    'color' => 'black'
	  ), $atts));
	
	  if (!$type) { $type = 'fa-star'; }
	
	  $html_output = '<i class="fa '.$type.' bsc-fa-icon bsc-icon-'.$color.'" style="font-size: '.$size.'"></i>';
	  return $html_output;
  }
  add_shortcode('icon', 'bird_sc_awesome_icons');
}

/**
 * Buttons
 */
if (!function_exists('bird_sc_buttons')) {
  function bird_sc_buttons($atts, $content = null) {
    extract(shortcode_atts(array(
      'href' => '#',
      'target' => '_self', // _self, _blank, _parent, _top
      'color' => 'red',
      'width' => '10%',
      'icon' => '',
    ), $atts));

    if (!$target) {
      $target = '_self';
    }

    if (!$color) {
      $color = 'red';
    }

    if ($width == '100%') {
      $margin_none = 'margin-left: 0; margin-right: 0;';
    } else {
      $margin_none = '';
    }

    if ($icon) {
      $html_icon = '<i class="fa '.$icon.' bsc-button-icon"></i>';
      $icon_padding = 'bsc-button-padding';
    } else {
      $html_icon = '';
      $icon_padding = '';
    }

    $html_output = '<a href="'.$href.'" target="'.$target.'" class="bsc-button bsc-button-'.$color.' '.$icon_padding.'" style="width: '.$width.'; '.$margin_none.'">'.$html_icon.''.do_shortcode($content).'</a>';
    return $html_output;
  }
  add_shortcode('button', 'bird_sc_buttons');
}