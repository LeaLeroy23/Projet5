<?php

namespace App\src\controller;

use App\config\Parameter;

class BackController extends Controller
{
    public function addEstate()
    {
        $categories = $this->categoryDAO->getCategories();
        $types = $this->typeDAO->getTypes();
        $energies = $this->energyDAO->getEnergies();
        return $this->view->renderTemplate('add_estate', [
            'categories' => $categories,
            'types' => $types,
            'energies' => $energies
        ]);
    }

    public function addCategory($post)
    {
        if($post->get('submit')){
            $this->categoryDAO->addCategory($post);
            $this->session->set('addCategory', 'L\'ajout d\'une catégorie a été faite');
            header('Location: ../public/index.php?route=addEstate');
            exit();
        }
        return $this->view->renderTemplate('add_estate', [
            'post', $post
        ]);
    }

    public function addType($post)
    {
        if($post->get('submit')){
            $this->typeDAO->addType($post);
            $this->session->set('addType', 'L\'ajout d\'un type a été fait');
            header('Location: ../public/index.php?route=addEstate');
            exit();
        }
        return $this->view->renderTemplate('add_estate', [
            'post', $post
        ]);
    }

    public function addEnergy($post)
    {
        if($post->get('submit')){
            $this->energyDAO->addEnergy($post);
            $this->session->set('addEnergy', 'L\'ajout d\'un type d\'énergie a été faite');
            header('Location: ../public/index.php?route=addEstate');
            exit();
        }
        return $this->view->renderTemplate('add_estate', [
            'post', $post
        ]);
    }

    public function deleteCategory($categoryId)
    {
        $this->categoryDAO->deleteCategory($categoryId);
        $this->session->set('deleteCategory', 'La catégorie a été supprimer avec succès');
        header('Location: ../public/index.php?route=addEstate');
        exit();
    }

    public function deleteType($typeId)
    {
        $this->typeDAO->deleteType($typeId);
        $this->session->set('deleteType', 'Le type a été supprimer avec succès');
        header('Location: ../public/index.php?route=addEstate');
        exit();
    }

    public function deleteEnergy($energyId)
    {
        $this->energyDAO->deleteEnergy($energyId);
        $this->session->set('deleteEnergy', 'Le type d\'énergie a été supprimer avec succès');
        header('Location: ../public/index.php?route=addEstate');
        exit();
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
            if($this->agentDAO->checkEmail($post)) {
                $errors['email'] = $this->agentDAO->checkEmail($post);
            }
            if (!$errors){
                $generateToken = openssl_random_pseudo_bytes(10);
                $token = bin2hex($generateToken);
                $createdAt = new \Datetime('NOW');
                $password = password_hash($post->get('password'), PASSWORD_BCRYPT);

                $this->agentDAO->addAgent($post, $password, $token, $createdAt->format('Y-m-d H:i:s'));
                $this->emailDAO->registerEmail($post);
                
                $this->session->set('addAgent', 'L\'inscription a bien été prise en compte');
                header('Location: ../public/index.php?route=all_agents');
                exit();
                
            }
            return $this->view->renderTemplate('add_agent', [
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
