<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = Users::whereStatus(true)
            ->paginate(15);
        return view("admin.users.index", ['users' => $users]);
    }

    public function create()
    {
        return view("admin.users.create");
    }

    public function createPost(Request $req)
    {
        $user = new Users();
        $user->fill($req->all());
        $user->password = bcrypt($user->password);
        $user->status = true;
        $user->save();
        return response()->redirectToRoute("admin_users_index");
    }

    public function update($userId)
    {
        $user = Users::find($userId);
        return view("admin.users.update", ["user" => $user]);
    }

    public function updatePost(Request $req, $userId)
    {
        $user = Users::find($userId);
        $oldPassword = $user->password;
        $user->fill($req->all());
        if ($req->input("password", null) !== null) {
            $user->password = bcrypt($user->password);
        } else {
            $user->password = $oldPassword;
        }
        $user->save();
        return response()->redirectToRoute("admin_users_index");
    }

    public function delete($userId)
    {
        $user = Users::find($userId);
        $user->status = false;
        $user->save();
        return response()->redirectToRoute("admin_users_index");
    }

}
