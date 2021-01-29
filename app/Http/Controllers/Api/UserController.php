<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends BaseController
{
    public function me()
    {
        $data = ['user' => new UserResource(auth()->user())];
        return $this->sendResponse($data, 'User fetched successfully');
    }

    public function update(UserUpdateRequest $request)
    {

        $user = tap(auth()->user())->update($request->only(['name', 'email']));
        $data = ['user' => new UserResource($user)];
        return $this->sendResponse($data, 'User updated successfully');
    }
}
