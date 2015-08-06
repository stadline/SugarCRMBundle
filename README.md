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
    api_sugar_crm.base_url: "http://your.sugar.url"
    api_sugar_crm.username: login
    api_sugar_crm.password: password

# Sugar CRM
api_sugar_crm:
    base_url: %api_sugar_crm.base_url%
    username: %api_sugar_crm.username%
    password: %api_sugar_crm.password%
