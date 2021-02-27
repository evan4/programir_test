<?php 

namespace App\Models;

use Mycms\Model;
use Exception;

class Test
{
    private $db;

    private $table = 'test';

    public function __construct()
    {
        $this->db = new Model($this->table);
    }

    public function getRecord(array $params = null, array $data)
    {
        return $this->db->select($params, $data);
    }

    public function getRecords(array $params = null, array $data = null)
    {
        return $this->db->selectAll($params, $data);
    }
    
}
