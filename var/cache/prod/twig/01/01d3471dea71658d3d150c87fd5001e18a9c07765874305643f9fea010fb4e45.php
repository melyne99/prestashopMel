<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__bf495a87c0eb7c7a3bf2b3266156ee3760969d38b877d4f5d5aca5c7df19d9f0 */
class __TwigTemplate_6143607f6e4b29143a0473fc5512dd82f8477123fb7fa77384b6d22a03c0a633 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Thème et logo > Thème • Note Nexus</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.0.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '1aa7b7f6e3d1b39da1ec9c2f9ead1069';
    var token_admin_orders = tokenAdminOrders = '8437beb9a04bd4f2e5c7433019e97d2e';
    var token_admin_customers = 'f3e5dca8d65551db29b8460fcec81aad';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '6ececdbab4a09bfb67ae067a73ce634e';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = 'be24aaf1bd9db849883c4329252d7395';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/admin740bkrvsxq3gteokzum/index.php/improve/modules/manage?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic';
    var admin_notification_get_link = '/admin740bkrvsxq3gteokzum/index.php/common/notifications?_token=";
        // line 42
        echo "QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic';
    var admin_notification_push_link = adminNotificationPushLink = '/admin740bkrvsxq3gteokzum/index.php/common/notifications/ack?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/admin740bkrvsxq3gteokzum/themes/new-theme/public/703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin740bkrvsxq3gteokzum/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin740bkrvsxq3gteokzum/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin740bkrvsxq3gteokzum\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin740bkrvsxq3gteokzum\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols";
        // line 69
        echo "\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin740bkrvsxq3gteokzum/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/admin740bkrvsxq3gteokzum/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin740bkrvsxq3gteokzum/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin740bkrvsxq3gteokzum/index.php/common/notifications?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminthemes\"
  data-base-url=\"/admin740bkrvsxq3gteokzum/index.php\"  data-token=\"QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminDashboard&amp;token=e603ef837b21efc49f3f9f8fe95bb4fc\"></a>
      <span id=\"shop_version\">8.0.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php/sell/orders?token=65bb9be5851f8dd34d79e2b5db442c10\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=9c0238b88c905ba9fd94d880031c1e68\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php/improve/modules/manage?token=65bb9be5851f8dd34d79e2b5db442c10\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminCartR";
        // line 136
        echo "ules&amp;addcart_rule&amp;token=3a93ed47a815e27bb34fa85bbfbcfb7c\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php/sell/catalog/products/new?token=65bb9be5851f8dd34d79e2b5db442c10\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php/sell/catalog/categories/new?token=65bb9be5851f8dd34d79e2b5db442c10\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"81\"
        data-icon=\"icon-AdminThemesParent\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes/import\"
        data-post-link=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminQuickAccesses&token=c63bdc67790673f6f797b5513f15b480\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Th&egrave;me et logo - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminQuickAccesses&token=c63bdc67790673f6f797b5513f15b480\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropd";
        // line 173
        echo "own-form collapsed\"
      method=\"post\"
      action=\"/admin740bkrvsxq3gteokzum/index.php?controller=AdminSearch&amp;token=a61ed1ce65626e868980c37b0b1d1525\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"m";
        // line 191
        echo "aterial-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php/sell/orders?token=65bb9be5851f8dd34d79e2b5db442c10\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=9c0238b88c905ba9fd94d880031c1e68\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php/improve/modules/manage?token=65bb9be5851f8dd34d79e2b5db442c10\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminCartRules&amp;addcart_rule&a";
        // line 225
        echo "mp;token=3a93ed47a815e27bb34fa85bbfbcfb7c\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php/sell/catalog/products/new?token=65bb9be5851f8dd34d79e2b5db442c10\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php/sell/catalog/categories/new?token=65bb9be5851f8dd34d79e2b5db442c10\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"101\"
      data-icon=\"icon-AdminThemesParent\"
      data-method=\"add\"
      data-url=\"index.php/improve/design/themes/import\"
      data-post-link=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminQuickAccesses&token=c63bdc67790673f6f797b5513f15b480\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Th&egrave;me et logo - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminQuickAccesses&token=c63bdc67790673f6f797b5513f15b480\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://app-prestamel.projets.garage404.com/\" target= \"_blank\">
      <";
        // line 267
        echo "i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\"";
        // line 321
        echo ">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos &lt;strong&gt;&lt;a href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminCarts&amp;action=filterOnlyAbandonedCarts&amp;token=f0876bda502596b57ea3731dd442523f\"&gt;paniers abandonnés&lt;/a&gt;&lt;/strong&gt; ?&lt;br&gt; Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i cl";
        // line 364
        echo "ass=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://app-prestamel.projets.garage404.com/img/pr/default.jpg\" alt=\"Melyne\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Melyne</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin740bkrvsxq3gteokzum/index.php/configure/advanced/employees/1/edit?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminLogin&amp;logout=1&amp;token=5d6db69f084042e1dda5ebfe0ad05617\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin740bkrvsxq3gteokzum/index.php/configure/advanced/employees/toggle-navigation?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
  ";
        // line 411
        echo "        <a id=\"header_logo\" class=\"logo float-left\" href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminDashboard&amp;token=e603ef837b21efc49f3f9f8fe95bb4fc\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.4</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminDashboard&amp;token=e603ef837b21efc49f3f9f8fe95bb4fc\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin740bkrvsxq3gteokzum/index.php/sell/orders/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                      ";
        // line 450
        echo "                                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/sell/orders/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/sell/orders/invoices/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/sell/orders/credit-slips/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/sell/orders/delivery-slips/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Bons de livraison
                         ";
        // line 479
        echo "       </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminCarts&amp;token=f0876bda502596b57ea3731dd442523f\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin740bkrvsxq3gteokzum/index.php/sell/catalog/products?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.ph";
        // line 511
        echo "p/sell/catalog/products?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/sell/catalog/categories?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/sell/catalog/monitoring/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminAttributesGroups&amp;token=6a006aa24064bd3b1609740fb64b2b60\" class=\"link\"> Attributs et caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                    ";
        // line 541
        echo "        
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/sell/catalog/brands/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/sell/attachments/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminCartRules&amp;token=3a93ed47a815e27bb34fa85bbfbcfb7c\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/sell/stocks/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Stock
                                </a>
                              </li>

  ";
        // line 571
        echo "                                                                            </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin740bkrvsxq3gteokzum/index.php/sell/customers/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/sell/customers/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/sell/addresses/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgerii";
        // line 600
        echo "c\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminCustomerThreads&amp;token=6ececdbab4a09bfb67ae067a73ce634e\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminCustomerThreads&amp;token=6ececdbab4a09bfb67ae067a73ce634e\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
 ";
        // line 632
        echo "                             <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/sell/customer-service/order-messages/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminReturn&amp;token=fd0f11c8e468a8c1a8d58e4d7f651a93\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminStats&amp;token=9c0238b88c905ba9fd94d880031c1e68\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </";
        // line 661
        echo "li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin740bkrvsxq3gteokzum/index.php/improve/modules/manage?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/improve/modules/manage?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
   ";
        // line 698
        echo "               
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin740bkrvsxq3gteokzum/index.php/improve/design/themes/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/improve/design/themes/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/improve/design/mail_theme/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Thème d&#039;e-mail
                             ";
        // line 725
        echo "   </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/improve/design/cms-pages/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/improve/design/modules/positions/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminImages&amp;token=48a51f5a4e03af5e1e62f4d897d215c3\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin7";
        // line 756
        echo "40bkrvsxq3gteokzum/index.php/modules/link-widget/list?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminCarriers&amp;token=1f0f43adf81cee0503d0bb577ee661c7\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminCarriers&amp;token=1f0f43adf81cee0503d0bb577ee661c7\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              ";
        // line 786
        echo "
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/improve/shipping/preferences/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin740bkrvsxq3gteokzum/index.php/improve/payment/payment_methods?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/improve/payment/payment_methods?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Moyens de paiement
                                </a>
   ";
        // line 816
        echo "                           </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/improve/payment/preferences?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin740bkrvsxq3gteokzum/index.php/improve/international/localization/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin740bkrvsxq";
        // line 847
        echo "3gteokzum/index.php/improve/international/localization/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/improve/international/zones/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/improve/international/taxes/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/improve/international/translations/settings?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                           ";
        // line 877
        echo "   
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin740bkrvsxq3gteokzum/index.php/configure/shop/preferences/preferences?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/configure/shop/preferences/preferences?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo";
        // line 913
        echo "\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/configure/shop/order-preferences/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/configure/shop/product-preferences/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/configure/shop/customer-preferences/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/configure/shop/contacts/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Contact
                                </a>
                              </li>

                                                   ";
        // line 942
        echo "                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/configure/shop/seo-urls/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminSearchConf&amp;token=8ba893a70c664b91fe4caa8614dd8422\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin740bkrvsxq3gteokzum/index.php/configure/advanced/system-information/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
         ";
        // line 972
        echo "                                                   </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/configure/advanced/system-information/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/configure/advanced/performance/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/configure/advanced/administration/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
         ";
        // line 1002
        echo "                     <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/configure/advanced/emails/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/configure/advanced/import/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/configure/advanced/employees/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/configure/advanced/sql-requests/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Base de données
                                </a>
                              </li>

                                          ";
        // line 1031
        echo "                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/configure/advanced/logs/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/configure/advanced/webservice-keys/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin740bkrvsxq3gteokzum/index.php/configure/advanced/feature-flags/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
           ";
        // line 1059
        echo "                     <a href=\"/admin740bkrvsxq3gteokzum/index.php/configure/advanced/security/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Thème et logo</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Thème et logo &gt; Thème          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin740bkrvsxq3gteokzum/index.php/improve/design/themes/import?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\"                  title=\"Ajouter un thème\"                >
                  <i class=\"material-icons\">add</i>                  Ajouter un thème
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/admin740bkrvsxq3gteokzum/index.php/improve/design/themes/export?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\"                  title=\"Exporter le thème actif\"                >
                  <i class=\"material-icons\">cloud_download</i>                  Exporter le thème actif
                </a>
                                      
           ";
        // line 1107
        echo " 
                              <a class=\"btn btn-outline-secondary btn-help\" href=\"https://help.prestashop-project.org/fr/doc/AdminThemes?version=8.0.4&amp;country=fr\" title=\"Aide\">
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <li class=\"nav-item\">
                    <a href=\"/admin740bkrvsxq3gteokzum/index.php/improve/design/themes/?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\" id=\"subtab-AdminThemes\" class=\"nav-link tab active current\" data-submenu=\"44\">
                      Thème et logo
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminPsThemeCustoConfiguration&token=e9d88d1ad81254869d47f65f2b452f24\" id=\"subtab-AdminPsThemeCustoConfiguration\" class=\"nav-link tab \" data-submenu=\"127\">
                      Pages Configuration
                      <span cla";
        // line 1132
        echo "ss=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminPsThemeCustoAdvanced&token=95986e328f7f7577f5304d6cc0ae1706\" id=\"subtab-AdminPsThemeCustoAdvanced\" class=\"nav-link tab \" data-submenu=\"128\">
                      Personnalisation avancée
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu";
        // line 1153
        echo "\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/admin740bkrvsxq3gteokzum/index.php/improve/design/themes/import?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\"              title=\"Ajouter un thème\"            >
              Ajouter un thème
              <i class=\"material-icons\">add</i>            </a>
                                        <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-export\"
              href=\"/admin740bkrvsxq3gteokzum/index.php/improve/design/themes/export?_token=QjR3jFuXmiUJuq5Hs5hghVcvEi9cBxQv5WJiBgeriic\"              title=\"Exporter le thème actif\"            >
              Exporter le thème actif
              <i class=\"material-icons\">cloud_download</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help\" href=\"https://help.prestashop-project.org/fr/doc/AdminThemes?version=8.0.4&amp;country=fr\" title=\"Aide\">
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1186
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"https://app-prestamel.projets.garage404.com/admin740bkrvsxq3gteokzum/index.php?controller=AdminDashboard&amp;token=e603ef837b21efc49f3f9f8fe95bb4fc\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1220
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1186
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1220
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__bf495a87c0eb7c7a3bf2b3266156ee3760969d38b877d4f5d5aca5c7df19d9f0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1387 => 1220,  1366 => 1186,  1355 => 102,  1346 => 1220,  1306 => 1186,  1271 => 1153,  1248 => 1132,  1221 => 1107,  1171 => 1059,  1141 => 1031,  1110 => 1002,  1078 => 972,  1046 => 942,  1015 => 913,  977 => 877,  945 => 847,  912 => 816,  880 => 786,  848 => 756,  815 => 725,  786 => 698,  747 => 661,  716 => 632,  682 => 600,  651 => 571,  619 => 541,  587 => 511,  553 => 479,  522 => 450,  481 => 411,  432 => 364,  387 => 321,  331 => 267,  287 => 225,  251 => 191,  231 => 173,  192 => 136,  153 => 102,  118 => 69,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__bf495a87c0eb7c7a3bf2b3266156ee3760969d38b877d4f5d5aca5c7df19d9f0", "");
    }
}
