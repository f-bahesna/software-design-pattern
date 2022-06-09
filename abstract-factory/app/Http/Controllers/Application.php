<?php
namespace App\Http\Controllers;

use App\SocialMedia\Factory\FacebookActionFactory;

class Application extends Controller
{
    public function run()
    {
        $app = new SocialMedia(new FacebookActionFactory());
        return $app->action();
    }
}
