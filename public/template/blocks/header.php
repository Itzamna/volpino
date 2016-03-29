<?php
/**
 * ------------------------------------------------------------------------
 * JA T3v2 System Plugin
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites: http://www.joomlart.com - http://www.joomlancers.com
 * ------------------------------------------------------------------------
 */

// No direct access
defined('_JEXEC') or die;
?>
<?php
$app =  JFactory::getApplication();
$siteName = $app->getCfg('sitename');
if ($this->getParam('logoType', 'image')=='image'): ?>
<h1 class="logo">
    <a href="<?php JURI::base(true) ?>" title="<?php echo $siteName; ?>"><span><?php echo $siteName; ?></span></a>
</h1>
<?php else:
$logoText = (trim($this->getParam('logoText'))=='') ? $siteName : JText::_(trim($this->getParam('logoText')));
$sloganText = JText::_(trim($this->getParam('sloganText'))); ?>
<div class="logo-text">
    <h1><a href="<?php JURI::base(true) ?>" title="<?php echo $siteName; ?>"><span><?php echo $logoText; ?></span></a></h1>
    <p class="site-slogan"><?php echo $sloganText;?></p>
</div>
<?php endif; ?>
<a id="totop" name="totop">&nbsp;</a>

<?php if($this->countModules('banner')) : ?>
<div id="tz-banner">
    <jdoc:include type="modules" name="banner" />
</div>
<?php endif; ?>

<?php if($this->countModules('search')) : ?>
<div id="ja-search">
<!--    <jdoc:include type="modules" name="search" />-->
<img src='/images/right-header.png' style="margin-top:110px; margin-right:50px;" height="220px" >
</div>
<?php endif; ?>
<script type="text/javascript">
    jQuery(document).ready(function(){
        var mod_menu = jQuery('.moduletable_menu');
        var mod_duck = jQuery('.ja-moduletable.mod_tz_duck');
        var mod_border = jQuery('.ja-moduletable.mod_tz_border');
        mod_menu.append('<span class="mod_bottom">&nbsp;</span> ');
        mod_menu.prepend('<span class="mod_top">&nbsp;</span> ');
        mod_menu.prepend('<span class="mod_head">&nbsp;</span> ');
        mod_duck.prepend('<span class="mod_duck">&nbsp;</span> ');
        mod_border.prepend('<span class="mod_border mod_border_top_left">&nbsp;</span> ');
        mod_border.prepend('<span class="mod_border mod_border_top_right">&nbsp;</span> ');
        mod_border.prepend('<span class="mod_border mod_border_bottom_left">&nbsp;</span> ');
        mod_border.prepend('<span class="mod_border mod_border_bottom_right">&nbsp;</span> ');

    });
</script>
<script type="text/javascript">
    window.addEvent('domready', function() {
        // Smooth Scroll
        var mySmoothScroll = new Fx.SmoothScroll({
            links: 'a.Tztop',
            wheelStops: false
        });
    });
</script>
