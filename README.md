# Horizon Integration for Nova

## Supporting This Package

This is an MIT-licensed open source project with its ongoing development made possible by the support of the community. If you'd like to support this, and our other packages, please consider sponsoring us via the button above.

We thank the following sponsors for their generosity, please take a moment to check them out:

- [LIX](https://lix-it.com)

## Installation
1. Install the package:
    ```sh
    composer require genealabs/nova-horizon
    ```

2. Add the tool to your Nova service provider `app\Providers\NovaServiceProvider.php`:
    ```php
    <?php

    namespace App\Providers;

    use GeneaLabs\NovaHorizon\NovaHorizon;
    use Laravel\Nova\NovaApplicationServiceProvider;

    class NovaServiceProvider extends NovaApplicationServiceProvider
    {
        //...
        
        public function tools()
        {
            return [
                //...
                new NovaHorizon,
            ];
        }
        
        //...
    }

    ```
  
3. When using customized Nova main sidebar menu (https://nova.laravel.com/docs/4.0/customization/menus.html#customizing-the-main-menu), add menu section to your Nova service provider `app\Providers\NovaServiceProvider.php`:
   ```php
    MenuSection::make('Horizon')
        ->path('/nova-horizon')
        ->icon('server')
    ```