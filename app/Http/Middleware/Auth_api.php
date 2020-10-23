<?php
namespace App\Http\Middleware;
use Closure;
use App\User;

class Auth_api
{
    /**
     * Handle an incoming request.
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $UserId = $request->header('UserId');
        $Token = $request->header('Token');

        if ($UserId == "" && $Token == "") {     
            return response()->json(['status' => false, 'statusCode' => "101", 'message'=>'Authentication data required.'], 200);
        }

        $get_token = User::where(['user_id' => $UserId, 'user_token' => $Token])->first();

        if (is_null($get_token)) {
            return response()->json(['status' => false, 'statusCode' => "101", 'message'=>'Authentication failed.'], 200);
        }
        
        return $response = $next($request);
    }
}