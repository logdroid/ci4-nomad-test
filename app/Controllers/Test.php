<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Test extends BaseController
{
    public function getIndex()
    {
        return $this->response->setJSON([
            "status"=> "success",
        ]);
    }
    public function getEcho($echo)
    {
        return $this->response->setJSON([
            "Echo" => $echo,
        ]);
    }
}
