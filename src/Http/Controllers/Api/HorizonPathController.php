<?php

namespace GeneaLabs\NovaHorizon\Http\Controllers\Api;

use Illuminate\Routing\Controller;

class HorizonPathController extends Controller
{
    /**
     * @return string
     */
    public function __invoke(): string
    {
        return config("horizon.path");
    }
}
