<?php

namespace julianeffendi/eofficeboilerplate\Controllers;

/**
 * Class DashboardController.
 */
class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            "coba"=> "Sasds"
        ];

        return view('julianeffendi/eofficeboilerplate\Views\dashboard', $data);
    }
}
