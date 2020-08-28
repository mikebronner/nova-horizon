# Horizon Integration for Nova

## Installation
1. ```sh
  composer require genealabs/nova-horizon
  ```
2. Add the tool to your Nova provider:
  ```php
  <?php

  namespace App\Providers;

  use GeneaLabs\NovaHorizon\NovaHorizon;
  use Illuminate\Support\Facades\Gate;
  use Laravel\Nova\Nova;
  use Laravel\Nova\NovaApplicationServiceProvider;

  class NovaServiceProvider extends NovaApplicationServiceProvider
  {
      public function tools()
      {
          return [
              //...
              new NovaHorizon,
          ];
      }
  }

  ```
  
