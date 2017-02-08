<?php

class UsersController extends ControllerBase
{
    public function indexAction()
    {
        $users = User::find();
        $roles = Role::find();
        $this->view->setVar("users",$users);
        $this->view->setVar("roles",$roles);
        $this->assets->addCss("css/indexUsers.css");
    }

    public function formAction()
    {

    }

    public function updateAction()
    {

    }

    public function deleteAction()
    {

    }

    public function messageAction()
    {

    }
}