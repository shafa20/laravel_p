<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class SocialLogin extends Controller
{
    public function gotogoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function googleinfostore(){
        try{
            $googleUser=Socialite::driver('google')->user();
            $findUser=User::where('socialId', $googleUser->id)->first();
            if($findUser){
                Auth::login($findUser);
                return redirect()->intended(RouteServiceProvider::HOME);
            }
            else{
                $tableField= new User();
                $tableField->fname='Google User';
                $tableField->name=$googleUser->name;
                $tableField->email=$googleUser->email;
                $tableField->role='3';
                $tableField->socialId=$googleUser->id;
                $tableField->password=encrypt($googleUser->id);
                $tableField->save();
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        }
        catch(Exception $e){
            dd($e->getMessage());
        }
    }
}