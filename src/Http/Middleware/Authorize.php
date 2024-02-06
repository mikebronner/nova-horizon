<?php namespace GeneaLabs\NovaHorizon\Http\Middleware;

use Closure;
use GeneaLabs\NovaHorizon\NovaHorizon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param Request                $request
     * @param Closure(Request):mixed $next
     *
     * @return Response
     */
    public function handle(Request $request, $next): Response
    {
        $tool = collect(Nova::registeredTools())->first([$this, 'matchesTool']);

        return optional($tool)->authorize($request) ? $next($request) : abort(403);
    }

    /**
     * Determine whether this tool belongs to the package.
     *
     * @param Tool $tool
     *
     * @return bool
     */
    public function matchesTool(Tool $tool): bool
    {
        return $tool instanceof NovaHorizon;
    }
}
