<?php

namespace App\Controllers;

use Mycms\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $records = RecordsController::test_method_select();
        
        echo $this->twig->render('home/index.twig', [
            'title' => 'Тестове приложение',
            'records' => json_decode($records)
        ]);
    }

}
