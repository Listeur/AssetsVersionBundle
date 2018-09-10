# AthomeAssetsVersionBundle

This bundle generate a version number that you can use in your assets to prevent reloading from cache after deployment on live application.

After [installing the bundle][1] you can use the twig global `athome_assets_version`. For example

```twig
<link rel="stylesheet" href="{{ asset('css/style.css')~'?'~athome_assets_version }}">
```

With the git strategy it result with the following:

```html
<link rel="stylesheet" href="/css/style.css?2.0.3">
```

[1]: Resources/doc/installation.md
