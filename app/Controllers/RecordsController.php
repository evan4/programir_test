<?php

namespace App\Controllers;

use Mycms\Controller;
use App\Models\Test;

class RecordsController extends Controller
{

    public static function test_method_select()
    {
        $recordModel = new Test();
        $records = $recordModel->getRecords([
            'id', 'name'
        ]);
        return json_encode($records);
    }

    public function test_method_details()
    {
        $recordModel = new Test();
        $id = (int) $_GET['id'];
        
        $records = $recordModel->getRecord(
            [
                'test.name_descr'
            ],
            [
                'test.id' => $id
            ]);
        
        echo json_encode([
            'records' => $records,
            'success' => true
        ]);
        die();

    }
}
