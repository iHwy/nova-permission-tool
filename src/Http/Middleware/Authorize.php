<?php

namespace Lizhineng\PermissionTool\Http\Middleware;

use Lizhineng\PermissionTool\PermissionTool;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(PermissionTool::class)->authorize($request) ? $next($request) : abort(403);
    }
}
