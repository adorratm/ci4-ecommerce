<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Install extends BaseController
{
    // Create Table Migrations
    public function createTable()
    {
        $migrate = \Config\Services::migrations();
        $migrate->latest();
    }

    // Create Admin Seeder
    public function createAdmin(){
        $seeder = \Config\Database::seeder();
        $seeder->call('\App\Database\Seeds\AdminSeeder');
    }

    // Create Demo Seeder
    public function createDemo(){
        $seeder = \Config\Database::seeder();
        $seeder->call('\App\Database\Seeds\Demo\UserSeeder');
    }
}