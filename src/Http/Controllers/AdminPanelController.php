<?php


namespace Roocket\Cms\Http\Controllers;


use Cms;

class AdminPanelController extends BaseController
{
    public function index()
    {
        return \Cms::listAdmin();
    }
}