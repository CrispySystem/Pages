<?php

namespace CrispySystem\Modules\Pages\Controllers;

use CrispySystem\Controllers\ABackendController;
use CrispySystem\Controllers\ICrudController;
use CrispySystem\View\SmartyView;

class BackendController extends ABackendController implements ICrudController
{
    public function __construct(SmartyView $view)
    {
        parent::__construct($view);
    }

    public function index()
    {
        return $this->view
            ->template('index.tpl', 'Pages')
            ->display();
    }

    public function new()
    {
    }

    public function create()
    {
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }

    public function destroy()
    {
    }

}