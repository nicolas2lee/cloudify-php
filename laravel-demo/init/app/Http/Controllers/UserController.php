<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class UserController extends Controller {
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index() {
        //return "hello";
        return User::all();
    }

    public function show($id) {
        Log::emergency( $id);
        return json_encode(User::find($id));
    }

/*    public function store(Request $request)
    {
        return User::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = User::findOrFail($id);
        $article->update($request->all());

        return $article;
    }*/

   /* public function delete(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->delete();

        return 204;
    }*/
}
