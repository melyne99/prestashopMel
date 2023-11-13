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

{if !isset($content_only) || !$content_only}
					</div><!-- #center_column -->
					{if isset($right_column_size) && !empty($right_column_size)}
						<div id="right_column" class="col-xs-12 col-sm-{$right_column_size|intval} column">{$HOOK_RIGHT_COLUMN}</div>
					{/if}
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
            
            {if isset($HOOK_FOOTER)}
				<!-- Footer -->
                <div class="footer-wrapper">
    				<div class="footer-container">
    					<footer id="footer">
                                {$HOOK_FOOTER}
                                {if isset($tc_config)}
                                    {if $tc_config.YBC_TC_COPYRIGHT_TEXT && $tc_config.YBC_TC_COPYRIGHT_TEXT != ''}
                                        <div class="footer_coppyright">{$tc_config.YBC_TC_COPYRIGHT_TEXT}</div>
                                    {/if}
                                    {if $tc_config.YBC_TC_LOGO_FOOTER_TEXT && $tc_config.YBC_TC_LOGO_FOOTER_TEXT != ''}
                                        <div class="footer_link">{$tc_config.YBC_TC_LOGO_FOOTER_TEXT}</div>
                                    {/if}
                                    {if isset($tc_config.YBC_TC_PAYMENT_LOGO) && $tc_config.YBC_TC_PAYMENT_LOGO}
                                        <div class="payment_footer">
                                            <img src="{$tc_module_path}images/config/{$tc_config.YBC_TC_PAYMENT_LOGO}" alt="" title="" />
                                        </div>
                                    {/if}
                                {/if}
    					</footer>
    				</div><!-- #footer -->
                </div>
			{/if}

            <div class="scroll_top"><span>{l s='TOP'}</span></div>
        </div>
        </div><!-- #page -->
{/if}
{include file="$tpl_dir./global.tpl"}
	</body>
</html>