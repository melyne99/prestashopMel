<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.webservice_configuration' shared service.

return $this->services['form.type.webservice_configuration'] = new \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Webservice\WebserviceConfigurationType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getLanguages());
