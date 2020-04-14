<?php

namespace App\src\controller;

use App\config\Parameter;

class BackController extends Controller
{
    public function allAgents()
    {
        $agents = $this->agentDAO->getAgents();
        return $this->view->renderTemplate('all_agents', [
            'agents' => $agents
        ]);
    }

    public function addAgent(Parameter $post)
    {
        if($post->get('submit')){
            $errors = $this->validation->validate($post, 'Agent');
            if($this->agentDAO->checkEmail($post)) {
                $errors['email'] = $this->agentDAO->checkEmail($post);
                var_dump($post);
            }
            if (!$errors){
                
                $this->agentDAO->addAgent($post);
                die();
                $this->session->set('addAgent', 'L\'inscription a bien été prise en compte');
                //header('Location: ../public/index.php?route=all_agents');
            }
            return $this->view->renderTemplate('addAgent', [
                'post' => $post,
                'errors' => $errors
            ]);
        }      
        return $this->view->renderTemplate('addAgent');
    }
}
