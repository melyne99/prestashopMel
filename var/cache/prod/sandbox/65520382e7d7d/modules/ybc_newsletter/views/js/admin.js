/*
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
*/
$(document).ready(function(){
    $('select[name="YBC_NEWSLETTER_TEMPLATE"]').change(function(){
        if(confirm('Do you want to load new template?'))
        {
            window.location = $('#module_form').attr('action')+'&loadteamplate='+$(this).val();
        }
        else
            return false;
    });
    $('.ybc-templates').click(function(){       
       $.fancybox({
         'autoScale': true,
         'transitionIn': 'elastic',
         'transitionOut': 'elastic',
         'speedIn': 500,
         'speedOut': 300,
         'autoDimensions': true,
         'centerOnScroll': true,
         'href' : ybc_newsletter_module_path+'views/img/preview/'+$('#YBC_NEWSLETTER_TEMPLATE').val()+'.png',
      }); 
    });
    if(parseInt($('input[name="YBC_NEWSLETTER_DISPLAY_THANK_YOU"]:checked').val()) == 0)
        $('input[name="YBC_NEWSLETTER_DISPLAY_THANK_YOU"]').parents('.form-group').eq(0).next().hide();
    
    if(parseInt($('input[name="YBC_REQUIRE_VERIFICATION"]:checked').val()) == 0)
        $('input[name="YBC_REQUIRE_VERIFICATION"]').parents('.form-group').eq(0).next().hide();
    if(parseInt($('input[name="YBC_CONFIRMATION"]:checked').val()) == 0)
        $('input[name="YBC_CONFIRMATION"]').parents('.form-group').eq(0).next().hide();
    $('input[name="YBC_NEWSLETTER_DISPLAY_THANK_YOU"], input[name="YBC_REQUIRE_VERIFICATION"], input[name="YBC_CONFIRMATION"]').change(function(){
        if(parseInt($('input[name="YBC_NEWSLETTER_DISPLAY_THANK_YOU"]:checked').val()) == 0)
            $('input[name="YBC_NEWSLETTER_DISPLAY_THANK_YOU"]').parents('.form-group').eq(0).next().hide();
        else
            $('input[name="YBC_NEWSLETTER_DISPLAY_THANK_YOU"]').parents('.form-group').eq(0).next().show();
        if(parseInt($('input[name="YBC_REQUIRE_VERIFICATION"]:checked').val()) == 0)
            $('input[name="YBC_REQUIRE_VERIFICATION"]').parents('.form-group').eq(0).next().hide();
        else
            $('input[name="YBC_REQUIRE_VERIFICATION"]').parents('.form-group').eq(0).next().show();
        if(parseInt($('input[name="YBC_CONFIRMATION"]:checked').val()) == 0)
            $('input[name="YBC_CONFIRMATION"]').parents('.form-group').eq(0).next().hide();
        else
            $('input[name="YBC_CONFIRMATION"]').parents('.form-group').eq(0).next().show();
    });
});