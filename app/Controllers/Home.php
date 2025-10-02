<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function getindex(): string
    {
        return view('welcome_message');
    }
    public function getTest($echo = 'Test String Empty')
    {
        return $this->response->setJSON([
            'Your test string' => $echo
        ]);
    }
}
