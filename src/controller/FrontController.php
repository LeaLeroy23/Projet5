<?php

namespace Hestia\src\controller;

use Hestia\config\Parameter;

class FrontController extends Controller
{
    private function loggedIn()
    {
        if($this->session->get('email')){
            $this->session->set('needLogin', 'Vous devez être connecté pour accéder à cet page');
            header('Location: index.php?route=dashboard');
            exit();
        } else {
            return true;
        }
    }

    public function home()
    {
        $sliderEstates = $this->estateDAO->getSliders();
        $latestEstates = $this->estateDAO->latestEstates(); 
        $estates = $this->estateDAO->getPublishedEstates();
        $estatesForSale = $this->estateDAO->forSaleEstates();
        $estatesForRent = $this->estateDAO->forRentEstates();
        $otherEstates = $this->estateDAO->otherEstates();
        $agents = $this->agentDAO->getAgents();
        return $this->view->render('home', [
            'sliderEstates' => $sliderEstates,
            'estates' => $estates,
            'estatesForSale' => $estatesForSale,
            'estatesForRent' => $estatesForRent,
            'latestEstates' => $latestEstates,
            'otherEstates' => $otherEstates,
            'agents' => $agents
        ]);
    }

    public function allProperties()
    {
        $estates = $this->estateDAO->getPublishedEstates();
        $latestEstates = $this->estateDAO->latestEstates();
        $estatesForSale = $this->estateDAO->forSaleEstates();
        $estatesForRent = $this->estateDAO->forRentEstates();
        return $this->view->render('properties', [
            'estates' => $estates,
            'estatesForSale' => $estatesForSale,
            'estatesForRent' => $estatesForRent,
            'latestEstates' => $latestEstates
        ]);
    }

    public function allPropertiesForSale()
    {
        $allPropertiesSales = $this->estateDAO->allPropertiesSales();
        $latestEstates = $this->estateDAO->latestEstates();
        $estatesForRent = $this->estateDAO->forRentEstates();
        return $this->view->render('properties_to_sale', [
            'allPropertiesSales' => $allPropertiesSales,
            'latestEstates' => $latestEstates,
            'estatesForRent' => $estatesForRent
        ]);
    }

    public function allPropertiesForRent()
    {
        $allPropertiesForRents = $this->estateDAO->allPropertiesRents();
        $latestEstates = $this->estateDAO->latestEstates();
        $estatesForSales = $this->estateDAO->forSaleEstates();
        return $this->view->render('properties_to_rent', [
            'allPropertiesForRents' => $allPropertiesForRents,
            'latestEstates' => $latestEstates,
            'estatesForSales' => $estatesForSales

        ]);
    }

    public function otherProperties()
    {
        $latestEstates = $this->estateDAO->latestEstates();
        $otherProperties = $this->estateDAO->otherProperties();
        $limitAgents = $this->agentDAO->getLimitAgents();
        return $this->view->render('other_properties', [
            'latestEstates' => $latestEstates,
            'otherProperties' => $otherProperties,
            'limitAgents' => $limitAgents

        ]);
    }

    public function estate($estateId)
    {
        $estate = $this->estateDAO->getSingleEstate($estateId);
        $pictures = $this->pictureDAO->getPicturesByEstateId($estateId);
        $latestEstates = $this->estateDAO->latestEstates();
        $limitAgents = $this->agentDAO->getLimitAgents();
        return $this->view->render('single-property', [
            'estate' => $estate,
            'pictures' => $pictures,
            'latestEstates' => $latestEstates,
            'limitAgents' => $limitAgents
        ]);
    }

    public function team()
    {
        $agents = $this->agentDAO->getAgents();
        $latestEstates = $this->estateDAO->latestEstates(); 
        return $this->view->render('team', [
            'agents' => $agents,
            'latestEstates' => $latestEstates
        ]);
    }

    public function agent($agentId)
    {
        $agent = $this->agentDAO->getAgent($agentId);
        $agents = $this->agentDAO->getAgents();
        $estatesByAgent = $this->estateDAO->getEstatesByAgent($agentId);
        $latestEstates = $this->estateDAO->latestEstates();
        return $this->view->render('single-agent', [
            'agent' => $agent,
            'agents' => $agents,
            'estatesByAgent'=> $estatesByAgent,
            'latestEstates' => $latestEstates
        ]);
    }

    public function login(Parameter $post)
    {
        if($this->loggedIn()){
            if($post->get('submit')){
                $result = $this->agentDAO->login($post);
                if($result && $result['isPasswordValid']){
                    $this->session->set('login', 'Content de vous revoir');
                    $this->session->set('id', $result['result']['id']);
                    $this->session->set('status', $result['status']);
                    $this->session->set('firstname', $result['firstname']);
                    $this->session->set('lastname', $result['lastname']);
                    $this->session->set('function', $result['function']);
                    $this->session->set('description', $result['description']);
                    $this->session->set('avatar', $result['avatar']);
                    $this->session->set('phone', $result['phone']);
                    $this->session->set('email', $post->get('email'));
                    
                    header('Location: index.php?route=dashboard');
                    $this->session->set('login', "Bienvenue");
                    exit();
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

    
    public function contact()
    {
        return $this->view->render('contact', [
        ]);
    }

    public function sendMail(Parameter $post)
    {
            $name = $post->get('name');
            $email = $post->get('email');
            $message = $post->get('message');
            $errors = $this->validation->validate($post, 'mail');

                if (!$errors){
                    $to      = 'lea.leroy@stratos-consulting.fr';
                    $subject = 'Message de '.$name;
                    $message = $post->get('message');
                    $headers = 'From: '.$email . "\r\n" .
                    'Reply-To: lea.leroy@hestia.fr' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

                    mail($to, $subject, $message, $headers);
                    $this->session->set('sendEmail', 'Votre mail à bien été envoyé');
                }

        return $this->view->render('contact', [
        ]);
    }

}