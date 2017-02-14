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
        $this->assets->addJs("js/script.js");
    }

    public function formAction($id=null)
    {

        $roles = Role::find();
        $this->view->setVar("roles",$roles);

        if($id != null)
        {
            $userModif = User::find("id =".$id);
            $texte = "Modification de".$userModif->getFirstname();
            $this->view->setVar($texte,'texte');
        } else {

            $texte = "Ajout d'un nouvel utilisateur";
            $this->view->setVar("texte",$texte);
        }

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