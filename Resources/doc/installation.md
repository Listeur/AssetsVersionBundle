# Installation

## 1. Install the bundle

```
php composer.phar require athome/assets-version-bundle
```

## 2. Register

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Athome\Bundle\AssetsVersionBundle\AthomeAssetsVersionBundle(),
    );
}
```

## 3. Configuration

```yml
#app/config/config.yml
athome_assets_version:
    strategy: timestamp # can be timestamp or git
```

The git strategy use the `git describe` command. You can for example use the timestamp strategy in dev environment and
the git strategy for the production.

