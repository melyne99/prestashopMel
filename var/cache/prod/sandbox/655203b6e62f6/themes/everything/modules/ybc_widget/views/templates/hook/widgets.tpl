{if $widgets}
    {if $widget_hook == "display-top-column" }
        {if $page_name == "index"}
            <div class="home_widget_top_column home_top_colum_layout3">
                    <div class="">
                        <ul class="ybc-widget-{$widget_hook} row">
                            {foreach from=$widgets item='widget'}
                                <li class="ybc-widget-item{if isset($tc_config.YBC_TC_FLOAT_CSS3) && $tc_config.YBC_TC_FLOAT_CSS3 == 1} wow zoomIn{/if}">
                                    <div class="ybc-widget-item-wrap">
                                        <div class="ybc-widget-item-content">
                                            {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                                            {if $widget.show_image && $widget.image}
                                                {if $widget.link}
                                                <a class="ybc_widget_link_img" href="{$widget.link}"
                                                {if $widget.show_image && $widget.image} style="background-image:url({$widget_module_path}images/widget/{$widget.image});"{/if}>{/if}
                                                <img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />
                                                {if $widget.link}
                                                </a>
                                                {/if}
                                            {/if}
                                            
                                            {if $widget.show_title && $widget.title || $widget.show_description && $widget.description}
                                            <div class="ybc-widget-description-content"> 
                                                {if $widget.show_title && $widget.title}
                                                    <h4 class="ybc-widget-title">
                                                        {if $widget.link}
                                                        <a href="{$widget.link}">{/if}{$widget.title}
                                                        {if $widget.link}</a>{/if}
                                                    </h4>
                                                {/if}
                                                {if $widget.show_description && $widget.description}
                                                    <div class="ybc-widget-description">
                                                        {$widget.description}
                                                    </div>
                                                {/if}
                                            </div>
                                            {/if}
                                        </div>
                                    </div>
                                </li>
                            {/foreach}
                        </ul>
                    </div>                        
            </div>
        {/if}
    {else if ($widget_hook == "display-left-column" || $widget_hook == "display-right-column")}
        <div class="block">
            <ul class="ybc-widget-{$widget_hook} block_content">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                        {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                        {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                        
                        
                        {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description}</div>{/if}
                    </li>
                {/foreach}
            </ul>
        </div>
    {else if $widget_hook == "display-footer"}
        <section class="footer-block col-xs-12 col-sm-2">
            <ul class="ybc-widget-{$widget_hook}">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                        <div class="block_content toggle-footer">
                            {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                            {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                            {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description}</div>{/if}
                        </div>
                    </li>
                {/foreach}
            </ul>
        </section>
    
    {else if $widget_hook == "ybc-footer-links"}
            <ul class="ybc-widget-{$widget_hook}">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        {if $widget.show_title && $widget.title}<h4 class="">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                        <div class="block_content toggle-footer">
                            {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                            {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                            {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description}</div>{/if}
                        </div>
                    </li>
                {/foreach}
            </ul>
        
    {else if $widget_hook == "ybc-ybcpaymentlogo-hook"}
        <ul class="ybc-widget-{$widget_hook}">
            {foreach from=$widgets item='widget'}
                <li class="ybc-widget-item">
                    {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                    {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                    {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                    
                    
                    {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description}</div>{/if}
                </li>
            {/foreach}
        </ul>
    {else if $widget_hook == "display-home"}
        <ul class="ybc-widget-{$widget_hook}">                
            {foreach from=$widgets item='widget'}
                <li class="ybc-widget-item">
                    <div class="ybc-widget-item-content">
                        {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                        {if $widget.show_image && $widget.image}
                            {if $widget.link}
                            <a class="ybc_widget_link_img" href="{$widget.link}"
                            {if $widget.show_image && $widget.image}style="background-image:url({$widget_module_path}images/widget/{$widget.image});"{/if}>
                                <img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />
                            </a>
                            {/if}
                        {/if}
                        <div class="ybc-widget-description-content">
                            {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}
                            <a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                            {if $widget.show_description && $widget.description}
                                <div class="ybc-widget-description">{$widget.description}</div>
                            {/if}
                        </div>
                    </div>
                </li>
            {/foreach}
        </ul>
        {hook h='NewsletterCustom'}
    {else}
        <div class="container">
            <ul class="ybc-widget-{$widget_hook}">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item{if isset($tc_config.YBC_TC_FLOAT_CSS3) && $tc_config.YBC_TC_FLOAT_CSS3 == 1} wow zoomIn{/if}">
                        <div class="ybc-widget-item-content"> 
                            {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                            {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                            
                            {if $widget.show_title && $widget.title || $widget.show_description && $widget.description}
                                <div class="ybc-widget-description-content"> 
                                    {if $widget.show_title && $widget.title}
                                        <h4 class="ybc-widget-title">
                                            {if $widget.link}
                                            <a href="{$widget.link}">{/if}{$widget.title}
                                            {if $widget.link}</a>{/if}
                                        </h4>
                                    {/if}
                                    {if $widget.show_description && $widget.description}
                                        <div class="ybc-widget-description">
                                            {$widget.description}
                                        </div>
                                    {/if}
                                </div>
                            {/if}
                        </div>
                    </li>
                {/foreach}
            </ul>
        </div>
    {/if}
{/if}