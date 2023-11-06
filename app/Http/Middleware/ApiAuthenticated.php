<?php

namespace App\Http\Middleware;

use App\Models\Student;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->bearerToken()) {
            return response()->json(['message' => 'api token is required'], 401);
        }
        $token = $request->bearerToken();
        $student = Student::where("api_token", $token)->first();

        if (is_null($student)) {
            return response()->json(['message' => 'invalid token'], 401);
        }
        session(['auth' => $student]);
        return $next($request);
    }
}
