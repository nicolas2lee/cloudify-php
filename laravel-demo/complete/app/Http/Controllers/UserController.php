<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Routing\Controller;

class UserController extends Controller {
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function health() {
        //return "hello";
        return User::healthcheck();
    }

    public function index() {
        //return "hello";
        return User::all();
    }

    public function show($id) {
        //Log::emergency( $id);
        return json_encode(User::find($id));
    }
}
