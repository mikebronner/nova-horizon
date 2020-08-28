# Horizon Integration for Nova

## Installation
1. Install the package:
    ```sh
    composer require genealabs/nova-horizon
    ```

2. Add the tool to your Nova provider `app\Providers\NovaServiceProvider.php`:
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
  
