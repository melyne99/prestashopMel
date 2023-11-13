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

{if count($categoryProducts) > 0 && $categoryProducts !== false}
<li>
    <div class="page-product-box blockproductscategory">
    	<h4 class="title_toggle active">{l s='Similar products' mod='productscategory'}</h4>
    	<div id="productscategory_list" class="products_block content_toggle active">
    		<ul id="bxslider1" class="bxslider clearfix product_list">
    		{foreach from=$categoryProducts item='categoryProduct' name=categoryProduct}
    			<li class="product-box item">
                    <div class="product-box-content product-container">
                        <div class="left-block">
                            <div class="product-image-container">
                				<a href="{$link->getProductLink($categoryProduct.id_product, $categoryProduct.link_rewrite, $categoryProduct.category, $categoryProduct.ean13)}" class="lnk_img product-image product_img_link" title="{$categoryProduct.name|htmlspecialchars}">
                                    <img src="{$link->getImageLink($categoryProduct.link_rewrite, $categoryProduct.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{$categoryProduct.name|htmlspecialchars}" />
                                </a>
                            </div>
                            <div class="ybc_button_option">
            					{if !$PS_CATALOG_MODE && ($categoryProduct.allow_oosp || $categoryProduct.quantity > 0)}
            						<div class="no-print">
            							<a class="exclusive button ajax_add_to_cart_button" href="{$link->getPageLink('cart', true, NULL, "qty=1&amp;id_product={$categoryProduct.id_product|intval}&amp;token={$static_token}&amp;add")|escape:'html':'UTF-8'}" data-id-product="{$categoryProduct.id_product|intval}" title="{l s='Add to cart' mod='productscategory'}">
            								
            							</a>
            						</div>
            					{/if}
                                <div class="functional-buttons clearfix" data-toggle="tooltip" data-placement="left" title="{l s='Add to whishlist' mod='productscategory'}">
                					{hook h='displayProductListFunctionalButtons' product=$categoryProduct}
                				</div>
            				</div>
                            
                        </div>
                        <div class="right-block">
            				{if $ProdDisplayPrice && $categoryProduct.show_price == 1 && !isset($restricted_country_mode) && !$PS_CATALOG_MODE}
                                <h5></h5>
            					<div class="content_price">
                					{if isset($categoryProduct.specific_prices) && $categoryProduct.specific_prices
                					&& ($categoryProduct.displayed_price|number_format:2 !== $categoryProduct.price_without_reduction|number_format:2)}
                                        <span class="old-price">{displayWtPrice p=$categoryProduct.price_without_reduction}</span>
                                        <span class="price product-price">{convertPrice price=$categoryProduct.displayed_price}</span>
                					{else}
                						<span class="price product-price">{convertPrice price=$categoryProduct.displayed_price}</span>
                					{/if}
            					</div>
            				{/if}     
                        </div>
                    </div>
    			</li>
    		{/foreach}
    		</ul>
            <div class="scroll_bar">
                <span class="scroll_move"></span>
            </div>
    	</div>
    </div>
</li>
{addJsDefL name=min_item}{l s='Please select at least one product' js=1}{/addJsDefL}
{addJsDefL name=max_item}{l s='You cannot add more than %d product(s) to the product comparison' sprintf=$comparator_max_item js=1}{/addJsDefL}
{addJsDef comparator_max_item=$comparator_max_item}
{addJsDef comparedProductsIds=$compared_products}
{/if}
