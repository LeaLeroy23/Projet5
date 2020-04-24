<?php

namespace App\src\controller;

use App\config\Parameter;

class BackController extends Controller
{
    public function addEstate()
    {
        return $this->view->renderTemplate('add_estate');
    }

    public function addCategory($post)
    {
        if($post->get('submit')){
            echo'hello';
            print_r($post);
            $this->categoryDAO->addCategory($post);
            header('Location: ../public/index.php?route=add_estate');
        }
        return $this->view->renderTemplate('add_estate');
    }

    public function allAgents()
    {
        $agents = $this->agentDAO->getAgents();
        return $this->view->renderTemplate('all_agents', [
            'agents' => $agents
        ]);
    }

    public function addAgent($post)
    {
        if($post->get('submit')){
            $errors = $this->validation->validate($post, 'Agent');
            /*if($this->agentDAO->checkEmail($post)) {
                $errors['email'] = $this->agentDAO->checkEmail($post);
            }*/
            if (!$errors){
                $createdAt = new \Datetime('NOW');
                $password = password_hash($post->get('password'), PASSWORD_BCRYPT);

                $this->agentDAO->addAgent($post, $password, null, $createdAt->format('Y-m-d H:i:s'));
                
                $this->session->set('addAgent', 'L\'inscription a bien été prise en compte');
                header('Location: ../public/index.php?route=dashboard');
                exit();
                
            }
            return $this->view->renderTemplate('addAgent', [
                'post' => $post,
                'errors' => $errors
            ]);
        }      
        return $this->view->renderTemplate('add_agent');
    }


    public function profile()
    {
        return $this->view->renderTemplate('profile');
    }

    public function updatePassword(Parameter $post)
    {
        if($post->get('submit')){
            $this->agentDAO->updatePassword($post, $this->session->get('email'));
            $this->session->set('update_password', 'Votre mot de passe a été mis à jour');
            header('Location: ../public/index.php?route=profile');
        }
        return $this->view->renderTemplate('update_password');
    }

    public function updateProfile(Parameter $post)
    {
        if($post->get('submit')){
            $this->agentDAO->updateProfile($post, $this->session->get('email'));
            $this->session->set('update_profile', 'Votre profile a été mis à jour');
            header('Location: ../public/index.php?route=update_profile');
        }
        return $this->view->renderTemplate('update_profile');
    }

}
