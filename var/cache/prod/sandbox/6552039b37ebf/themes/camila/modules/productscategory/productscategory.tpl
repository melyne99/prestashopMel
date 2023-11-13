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
                        </div>
                        <div class="right-block">
                            {if $ProdDisplayPrice && $categoryProduct.show_price == 1 && !isset($restricted_country_mode) && !$PS_CATALOG_MODE}
            					<p class="content_price">
                					{if isset($categoryProduct.specific_prices) && $categoryProduct.specific_prices
                					&& ($categoryProduct.displayed_price|number_format:2 !== $categoryProduct.price_without_reduction|number_format:2)}
                                        <span class="price product-price">{convertPrice price=$categoryProduct.displayed_price}</span>
                						<span class="old-price">{displayWtPrice p=$categoryProduct.price_without_reduction}</span>
                					{else}
                						<span class="price">{convertPrice price=$categoryProduct.displayed_price}</span>
                					{/if}
            					</p>
            				{/if} 
            				<h5 itemprop="name" class="product-name">
            					<a href="{$link->getProductLink($categoryProduct.id_product, $categoryProduct.link_rewrite, $categoryProduct.category, $categoryProduct.ean13)|escape:'html':'UTF-8'}" title="{$categoryProduct.name|htmlspecialchars}">{$categoryProduct.name|escape:'html':'UTF-8'}</a>
            				</h5>              
                        </div>
                    </div>
    			</li>
    		{/foreach}
    		</ul>
    	</div>
    </div>
</li>
{addJsDefL name=min_item}{l s='Please select at least one product' js=1}{/addJsDefL}
{addJsDefL name=max_item}{l s='You cannot add more than %d product(s) to the product comparison' sprintf=$comparator_max_item js=1}{/addJsDefL}
{addJsDef comparator_max_item=$comparator_max_item}
{addJsDef comparedProductsIds=$compared_products}
{/if}
