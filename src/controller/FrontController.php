<?php

namespace Hestia\src\controller;

use Hestia\config\Parameter;

class FrontController extends Controller
{

    public function home()
    {
        $estates = $this->estateDAO->getEstates();
        $agents = $this->agentDAO->getAgents();
        return $this->view->render('home', [
            'estates' => $estates,
            'agents' => $agents
        ]);
    }


    public function contact()
    {
        return $this->view->render('contact', [
        ]);
    }

    public function all_estate()
    {
        $estates = $this->estateDAO->getEstates();
        return $this->view->render('properties', [
            'estates' => $estates
        ]);
    }

    public function estate($estateId)
    {
        $estate = $this->estateDAO->getEstate($estateId);
        return $this->view->render('single-property', [
            'estate' => $estate
        ]);
    }

    public function team()
    {
        $agents = $this->agentDAO->getAgents();
        return $this->view->render('team', [
            'agents' => $agents
        ]);
    }

    public function agent($agentId)
    {
        $agent = $this->agentDAO->getAgent($agentId);
        return $this->view->render('single-agent', [
            'agent' => $agent
        ]);
    }

    public function login(Parameter $post)
    {
        if(!$this->checkLoggedIn()){
            if($post->get('submit')){
                $result = $this->agentDAO->login($post);
                if($result && $result['isPasswordValid']){
                    $this->session->set('login', 'Content de vous revoir');
                    $this->session->set('id', $result['result']['id']);
                    $this->session->set('status', $result['status']);
                    $this->session->set('firstname', $result['firstname']);
                    $this->session->set('lastname', $result['lastname']);
                    $this->session->set('description', $result['description']);
                    $this->session->set('avatar', $result['avatar']);
                    $this->session->set('phone', $result['phone']);
                    
                    $this->session->set('email', $post->get('email'));
                    header('Location: ../public/index.php?route=dashboard');
                }
                else {
                    $this->session->set('error_login', "L'identifiant ou le mot de passe sont incorrect");
                    return $this->view->render('login', [
                        'post' => $post
                    ]);
                }
            }
            return $this->view->render('login');
        }
    }

}