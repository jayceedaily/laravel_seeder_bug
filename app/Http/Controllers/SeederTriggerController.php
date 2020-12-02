<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Database\Seeders\DatabaseSeeder;

class SeederTriggerController extends Controller
{
    public function index()
    {
        $seeder = new DatabaseSeeder;

        $seeder->run();
    }
}
