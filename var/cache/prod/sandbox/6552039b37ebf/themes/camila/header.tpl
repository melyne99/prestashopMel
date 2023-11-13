{*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<html{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}>
	<head>
		<meta charset="utf-8" />
        <meta name="link-id" content="38"/>
                        
		<title>{$meta_title|escape:'html':'UTF-8'}</title>
           	{literal}
		<script type="text/javascript">
			if (window.location !== window.top.location) {
				window.top.location = window.location;
			}
		</script>
	{/literal}
		{if isset($meta_description) AND $meta_description}
			<meta name="description" content="{$meta_description|escape:'html':'UTF-8'}" />
		{/if}
		{if isset($meta_keywords) AND $meta_keywords}
			<meta name="keywords" content="{$meta_keywords|escape:'html':'UTF-8'}" />
		{/if}
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="{if isset($nobots)}no{/if}index,{if isset($nofollow) && $nofollow}no{/if}follow" />
		<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1, initial-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="{$favicon_url}?{$img_update_time}" />
		<link rel="shortcut icon" type="image/x-icon" href="{$favicon_url}?{$img_update_time}" />
		<link rel="stylesheet" href="{$css_dir}owl/owl.carousel.css" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" />
        {if isset($css_files)}
			{foreach from=$css_files key=css_uri item=media}
				{if $css_uri == 'lteIE9'}
					<!--[if lte IE 9]>
					{foreach from=$css_files[$css_uri] key=css_uriie9 item=mediaie9}
					<link rel="stylesheet" href="{$css_uriie9|escape:'html':'UTF-8'}" type="text/css" media="{$mediaie9|escape:'html':'UTF-8'}" />
					{/foreach}
					<![endif]-->
				{else}
					<link rel="stylesheet" href="{$css_uri|escape:'html':'UTF-8'}" type="text/css" media="{$media|escape:'html':'UTF-8'}" />
				{/if}
			{/foreach}
		{/if}
		{if isset($js_defer) && !$js_defer && isset($js_files) && isset($js_def)}
			{$js_def}
			{foreach from=$js_files item=js_uri}
			<script type="text/javascript" src="{$js_uri|escape:'html':'UTF-8'}"></script>
			{/foreach}
		{/if}
		{$HOOK_HEADER}        
        
        <!--[if IE 8]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>    
	<body{if isset($page_name)} id="{$page_name|escape:'html':'UTF-8'}"{/if} class="{if isset($page_name)}{$page_name|escape:'html':'UTF-8'}{/if}{if isset($body_classes) && $body_classes|@count} {implode value=$body_classes separator=' '}{/if}{if $hide_left_column} hide-left-column{else} show-left-column{/if}{if $hide_right_column} hide-right-column{else} show-right-column{/if}{if isset($content_only) && $content_only} content_only{/if} lang_{$lang_iso} {if isset($YBC_TC_CLASSES)}{$YBC_TC_CLASSES}{/if}">
	{if !isset($content_only) || !$content_only}
		{if isset($restricted_country_mode) && $restricted_country_mode}
			<div id="restricted-country">
				<p>{l s='You cannot place a new order from your country.'}{if isset($geolocation_country) && $geolocation_country} <span class="bold">{$geolocation_country|escape:'html':'UTF-8'}</span>{/if}</p>
			</div>
		{/if}
		<div id="page">
                <div class="header-container">           
                    <header id="header">
                        {capture name='displayBanner'}{hook h='displayBanner'}{/capture}
                        {if $smarty.capture.displayBanner}
                        	<div class="banner">
                        		<div class="container">
                        			<div class="row">
                        				{$smarty.capture.displayBanner}
                        			</div>
                        		</div>
                        	</div>
                        {/if}
                        <div class="nav hidden-sm hidden-lg hidden-md">
                            <div class="container">
                                <div class="row">
                                    <div class="social_header section_social">
                                   	    <ul>
                                    		{if isset($tc_config.BLOCKSOCIAL_FACEBOOK) && $tc_config.BLOCKSOCIAL_FACEBOOK != ''}
                                    			<li class="facebook">
                                    				<a class="_blank" href="{$tc_config.BLOCKSOCIAL_FACEBOOK|escape:html:'UTF-8'}">
                                    					<span><i class="icon-facebook"></i></span>
                                                        <span class="icon_hover"><i class="icon-facebook"></i></span>
                                    				</a>
                                    			</li>
                                    		{/if}
                                            {if isset($tc_config.BLOCKSOCIAL_GOOGLE_PLUS) && $tc_config.BLOCKSOCIAL_GOOGLE_PLUS != ''}
                                            	<li class="google-plus">
                                            		<a class="_blank" href="{$tc_config.BLOCKSOCIAL_GOOGLE_PLUS|escape:html:'UTF-8'}" rel="publisher">
                                            			<span><i class="fa fa-google"></i></span>
                                                        <span class="icon_hover"><i class="fa fa-google"></i></span>
                                            		</a>
                                            	</li>
                                            {/if}
                                    		{if isset($tc_config.BLOCKSOCIAL_TWITTER) && $tc_config.BLOCKSOCIAL_TWITTER != ''}
                                    			<li class="twitter">
                                    				<a class="_blank" href="{$tc_config.BLOCKSOCIAL_TWITTER|escape:html:'UTF-8'}">
                                    					<span><i class="icon-twitter"></i></span>
                                                        <span class="icon_hover"><i class="icon-twitter"></i></span>
                                    				</a>
                                    			</li>
                                    		{/if}
                                            {if isset($tc_config.BLOCKSOCIAL_LINKEDIN) && $tc_config.BLOCKSOCIAL_LINKEDIN != ''}
                                    			<li class="linkedin">
                                    				<a class="_blank" href="{$tc_config.BLOCKSOCIAL_LINKEDIN|escape:html:'UTF-8'}">
                                    					<span><i class="icon-linkedin"></i></span>
                                                        <span class="icon_hover"><i class="icon-linkedin"></i></span>
                                    				</a>
                                    			</li>
                                    		{/if}
                                    		
                                            {if isset($tc_config.BLOCKSOCIAL_YOUTUBE) && $tc_config.BLOCKSOCIAL_YOUTUBE != ''}
                                            	<li class="youtube">
                                            		<a class="_blank" href="{$tc_config.BLOCKSOCIAL_YOUTUBE|escape:html:'UTF-8'}">
                                            			<span><i class="fa fa-youtube-play"></i></span>
                                                        <span class="icon_hover"><i class="fa fa-youtube-play"></i></span>
                                            		</a>
                                            	</li>
                                            {/if}
                                            {if isset($tc_config.BLOCKSOCIAL_RSS) && $tc_config.BLOCKSOCIAL_RSS != ''}
                                    			<li class="rss">
                                    				<a class="_blank" href="{$tc_config.BLOCKSOCIAL_RSS|escape:html:'UTF-8'}">
                                    					<span><i class="icon-rss"></i></span>
                                                        <span class="icon_hover"><i class="icon-rss"></i></span>
                                    				</a>
                                    			</li>
                                    		{/if}
                                            {if isset($tc_config.BLOCKSOCIAL_PINTEREST) && $tc_config.BLOCKSOCIAL_PINTEREST != ''}
                                            	<li class="pinterest">
                                            		<a class="_blank" href="{$tc_config.BLOCKSOCIAL_PINTEREST|escape:html:'UTF-8'}">
                                            			<span><i class="icon-pinterest-p"></i></span>
                                                        <span class="icon_hover"><i class="icon-pinterest-p"></i></span>
                                            		</a>
                                            	</li>
                                            {/if}
                                            {if isset($tc_config.BLOCKSOCIAL_VIMEO) && $tc_config.BLOCKSOCIAL_VIMEO != ''}
                                            	<li class="vimeo">
                                            		<a class="_blank" href="{$tc_config.BLOCKSOCIAL_VIMEO|escape:html:'UTF-8'}">
                                            			<span><i class="icon-vimeo"></i></span>
                                                        <span class="icon_hover"><i class="icon-vimeo"></i></span>
                                            		</a>
                                            	</li>
                                            {/if}
                                            {if isset($tc_config.BLOCKSOCIAL_INSTAGRAM) && $tc_config.BLOCKSOCIAL_INSTAGRAM != ''}
                                            	<li class="instagram">
                                            		<a class="_blank" href="{$tc_config.BLOCKSOCIAL_INSTAGRAM|escape:html:'UTF-8'}">
                                            			<span><i class="icon-instagram"></i></span>
                                                        <span class="icon_hover"><i class="icon-instagram"></i></span>
                                            		</a>
                                            	</li>
                                            {/if}
                                    	</ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="main-menu"> 
                            <div id="header_logo" class="">
                				<a href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}" title="{$shop_name|escape:'html':'UTF-8'}">
                                    <img class="logo img-responsive" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/>
                				</a>
                    		</div> 
                            <div class="header_icon">
                                <div class="header_icon_list">
                        			{if isset($HOOK_TOP)}
                                        {$HOOK_TOP}
                                    {/if}
                                    
                                    <div class="show_mobile ybc-menu-toggle ybc-menu-btn hidden-lg hidden-md hidden-sm">
                                      <div class="ybc-menu-button-toggle">            
                                            <span class="ybc-menu-button-toggle_icon">
                                                <i class="icon-bar"></i>
                                                <i class="icon-bar"></i>
                                                <i class="icon-bar"></i>
                                            </span>
                                      </div>
                                    </div>
                                </div>  
                            </div>                 
                            {hook h='custom'}
                            <div class="header_bottom_foot">
                                <div id="social_block" class="section_social">
                                	<ul>
                                		{if isset($tc_config.BLOCKSOCIAL_FACEBOOK) && $tc_config.BLOCKSOCIAL_FACEBOOK != ''}
                                			<li class="facebook">
                                				<a class="_blank" href="{$tc_config.BLOCKSOCIAL_FACEBOOK|escape:html:'UTF-8'}">
                                					<span><i class="icon-facebook"></i></span>
                                                    <span class="icon_hover"><i class="icon-facebook"></i></span>
                                				</a>
                                			</li>
                                		{/if}
                                        {if isset($tc_config.BLOCKSOCIAL_GOOGLE_PLUS) && $tc_config.BLOCKSOCIAL_GOOGLE_PLUS != ''}
                                        	<li class="google-plus">
                                        		<a class="_blank" href="{$tc_config.BLOCKSOCIAL_GOOGLE_PLUS|escape:html:'UTF-8'}" rel="publisher">
                                        			<span><i class="fa fa-google"></i></span>
                                                    <span class="icon_hover"><i class="fa fa-google"></i></span>
                                        		</a>
                                        	</li>
                                        {/if}
                                		{if isset($tc_config.BLOCKSOCIAL_TWITTER) && $tc_config.BLOCKSOCIAL_TWITTER != ''}
                                			<li class="twitter">
                                				<a class="_blank" href="{$tc_config.BLOCKSOCIAL_TWITTER|escape:html:'UTF-8'}">
                                					<span><i class="icon-twitter"></i></span>
                                                    <span class="icon_hover"><i class="icon-twitter"></i></span>
                                				</a>
                                			</li>
                                		{/if}
                                        {if isset($tc_config.BLOCKSOCIAL_LINKEDIN) && $tc_config.BLOCKSOCIAL_LINKEDIN != ''}
                                			<li class="linkedin">
                                				<a class="_blank" href="{$tc_config.BLOCKSOCIAL_LINKEDIN|escape:html:'UTF-8'}">
                                					<span><i class="icon-linkedin"></i></span>
                                                    <span class="icon_hover"><i class="icon-linkedin"></i></span>
                                				</a>
                                			</li>
                                		{/if}
                                		
                                        {if isset($tc_config.BLOCKSOCIAL_YOUTUBE) && $tc_config.BLOCKSOCIAL_YOUTUBE != ''}
                                        	<li class="youtube">
                                        		<a class="_blank" href="{$tc_config.BLOCKSOCIAL_YOUTUBE|escape:html:'UTF-8'}">
                                        			<span><i class="fa fa-youtube-play"></i></span>
                                                    <span class="icon_hover"><i class="fa fa-youtube-play"></i></span>
                                        		</a>
                                        	</li>
                                        {/if}
                                        {if isset($tc_config.BLOCKSOCIAL_RSS) && $tc_config.BLOCKSOCIAL_RSS != ''}
                                			<li class="rss">
                                				<a class="_blank" href="{$tc_config.BLOCKSOCIAL_RSS|escape:html:'UTF-8'}">
                                					<span><i class="icon-rss"></i></span>
                                                    <span class="icon_hover"><i class="icon-rss"></i></span>
                                				</a>
                                			</li>
                                		{/if}
                                        {if isset($tc_config.BLOCKSOCIAL_PINTEREST) && $tc_config.BLOCKSOCIAL_PINTEREST != ''}
                                        	<li class="pinterest">
                                        		<a class="_blank" href="{$tc_config.BLOCKSOCIAL_PINTEREST|escape:html:'UTF-8'}">
                                        			<span><i class="icon-pinterest-p"></i></span>
                                                    <span class="icon_hover"><i class="icon-pinterest-p"></i></span>
                                        		</a>
                                        	</li>
                                        {/if}
                                        {if isset($tc_config.BLOCKSOCIAL_VIMEO) && $tc_config.BLOCKSOCIAL_VIMEO != ''}
                                        	<li class="vimeo">
                                        		<a class="_blank" href="{$tc_config.BLOCKSOCIAL_VIMEO|escape:html:'UTF-8'}">
                                        			<span><i class="icon-vimeo"></i></span>
                                                    <span class="icon_hover"><i class="icon-vimeo"></i></span>
                                        		</a>
                                        	</li>
                                        {/if}
                                        {if isset($tc_config.BLOCKSOCIAL_INSTAGRAM) && $tc_config.BLOCKSOCIAL_INSTAGRAM != ''}
                                        	<li class="instagram">
                                        		<a class="_blank" href="{$tc_config.BLOCKSOCIAL_INSTAGRAM|escape:html:'UTF-8'}">
                                        			<span><i class="icon-instagram"></i></span>
                                                    <span class="icon_hover"><i class="icon-instagram"></i></span>
                                        		</a>
                                        	</li>
                                        {/if}
                                	</ul>
                                </div>
                                {hook h='configcustom'}
                                <div class="copy_right">
                                    {if isset($tc_config.YBC_TC_COPYRIGHT_TEXT) && $tc_config.YBC_TC_COPYRIGHT_TEXT != ''}
                                        {$tc_config.YBC_TC_COPYRIGHT_TEXT}
                                    {/if}
                                    
                                </div>
                            </div>
                          </div>
                    </header>
                </div>
                <div id="main_right">
            	<div class="columns-container">
                            <div id="slider_row" class="">
                                {capture name='displayTopColumn'}{hook h='displayTopColumn'}{/capture}
            					{if $smarty.capture.displayTopColumn}
            						<div id="top_column" class="">{$smarty.capture.displayTopColumn}</div>
            					{/if}
                			</div>
                            {if $page_name !='index' && $page_name !='pagenotfound'}
                                <div class="ybc_full_bg_breadcrum">
                                    <div class="container">                            
                        					{include file="$tpl_dir./breadcrumb.tpl"}            				
                                    </div>
                                </div>
                            {/if}
            		<div id="columns" class="container">
            			<div class="{if $page_name != 'index'}row{/if}">
            				{if isset($left_column_size) && !empty($left_column_size)}
            				<div id="left_column" class="column col-xs-12 col-sm-{$left_column_size|intval}">{$HOOK_LEFT_COLUMN}</div>
            				{/if}
            				{if isset($left_column_size) && isset($right_column_size)}{assign var='cols' value=(12 - $left_column_size - $right_column_size)}{else}{assign var='cols' value=12}{/if}
            				<div id="center_column" class="center_column col-xs-12 col-sm-{$cols|intval}">
	{/if}
    
    
