<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.administration.general.form_provider' shared service.

return $this->services['prestashop.adapter.administration.general.form_provider'] = new \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Administration\GeneralDataProvider(($this->services['prestashop.adapter.general.configuration'] ?? $this->load('getPrestashop_Adapter_General_ConfigurationService.php')), ($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->getBoolean("PS_SSL_ENABLED"), ($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->getBoolean("PS_SSL_ENABLED_EVERYWHERE"));
