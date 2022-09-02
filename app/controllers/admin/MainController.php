<?php

namespace app\controllers\admin;

class MainController extends AppController
{

    public function indexAction() {
        $title = 'HomePage';
        $this->setMeta('Admin.:.HomePage');
        $this->set(compact('title'));
    }

}