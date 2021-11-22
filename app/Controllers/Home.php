<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $user = $model->find(1);
        return $this->response->setJSON(["user" =>$user->getSurName()]);
    }
}
