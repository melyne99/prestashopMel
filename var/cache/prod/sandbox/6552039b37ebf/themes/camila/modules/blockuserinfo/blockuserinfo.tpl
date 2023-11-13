
<!-- Block user information module NAV  -->
<div class="ybc_myaccout">
    <div class="toogle_user">
        <a class="my_account" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='My account' mod='blockuserinfo'}">
            <i class="fa fa-user" aria-hidden="true"></i>
        </a>
    </div>
     
    <div class="header_user_info blockuserinfo">
    	{if $is_logged}
    		<a class="logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='blockuserinfo'}">
    			<i class="fa fa-unlock-alt" aria-hidden="true"></i>
                {l s='Log out' mod='blockuserinfo'}
    		</a>
    	{else}
    		<a class="login" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log in to your customer account' mod='blockuserinfo'}">
    			<i class="fa fa-lock" aria-hidden="true"></i>
                {l s='Log in' mod='blockuserinfo'}
    		</a>
        {/if}
        <a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow">
            <span class="">{l s='My Account' mod='blockuserinfo'}</span>
        </a>                
        <a class="bt_wishlist_userinfor" href="{$link->getModuleLink('blockwishlist', 'mywishlist', array(), true)|escape:'html':'UTF-8'}" title="{l s='My wishlists' mod='blockuserinfo'}">
            <span>{l s='My wishlists' mod='blockuserinfo'}</span>
        </a>
        <a class="bt_compare_userinfor" href="{$link->getPageLink('products-comparison')|escape:'html':'UTF-8'}" title="{l s='My comparison' mod='blockuserinfo'}">
            <span>{l s='My comparison' mod='blockuserinfo'}</span>
        </a>
    </div>
</div>
{capture name='displayNav'}{hook h='displayNav'}{/capture}
{if $smarty.capture.displayNav}
	<div class="setting">
        <i class="icon_cog"></i>
        <div class="currency_lang">{$smarty.capture.displayNav}</div>
    </div>
{/if}

<!-- /Block usmodule NAV -->
