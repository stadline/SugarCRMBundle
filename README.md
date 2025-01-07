# Update 07/01/2025

Jessy :
On reçoit des alertes depandabot sur ce repo
Pour moi il n'est plus utilisé
Je supprime les composer pour éviter les alertes
On devrait pouvoir archiver ce repo sans problème

# SugarCRMBundle

PROVIDE A QUICK ACCESS TO YOUR SUGAR CRM INSTANCE

## Requirements

* Symfony >=2.3

## INSTALLATION
### Composer :

    {
        "require": {
            "stadline/sugar-crm-bundle": "dev-master"
        },
        "repositories": [
            {
               "type": "vcs",
               "url": "https://github.com/stadline/SugarCRMBUndle.git"
           },
       ]
    }

### AppKernel.php

    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                new Geonaute\SwarmBundle\GeonauteSwarmBundle()
            );
        }
    }

### config.php

    parameters :
        stadline_sugar_crm.base_url: "http://your.sugar.url"
        stadline_sugar_crm.username: username
        stadline_sugar_crm.password: password

    # Sugar CRM
    api_sugar_crm:
        base_url: %stadline_sugar_crm.base_url%
        username: %stadline_sugar_crm.username%
        password: %stadline_sugar_crm.password%
