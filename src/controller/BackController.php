<?php

namespace App\src\controller;

use App\config\Parameter;

class BackController extends Controller
{

    public function addEstate($post)
    {
        $categories = $this->categoryDAO->getCategories();
        $types = $this->typeDAO->getTypes();
        $energies = $this->energyDAO->getEnergies();
        $frequencies = $this->frequencyDAO->getFrequencies();
        if($post->get('submit')){
            $form=[];
            $maxsize = 5 * 1024 * 1024;
            $filename = "";
            if (isset($_FILES["filename"]) && $_FILES["filename"]["error"] == 0) {
                $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "PNG" => "image/PNG");
                $filename = $_FILES["filename"]["name"];
                $filetype = $_FILES["filename"]["type"];
                $filesize = $_FILES["filename"]["size"];

                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if (!array_key_exists($ext, $allowed)) {
                    die("Erreur : Veuillez sélectionner un format de fichier valide.");
                }

                if ($filesize > $maxsize) {
                    die("Erreur: La taille du fichier est supérieure à la limite autorisée.");
                }

                if (in_array($filetype, $allowed)) {
                    /**verifie si le fichier existe avant de le telecharger*/
                    if (file_exists("../public/img/upload/" . $_FILES["filename"]["name"])) {
                        die($_FILES["filename"]["name"] . "existe déjà.");
                    } else {
                        $filename = uniqid() . '.' . $ext;
                        move_uploaded_file($_FILES["filename"]["tmp_name"], "../public/img/upload/" .  $filename);
                    }
                } else {
                    die("Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer.");
                }
                
            }
       
            $this->estateDAO->addEstate($post);
            $this->session->set('addEstate', 'L\'ajout d\'une annonce a été faite');
            header('Location: ../public/index.php?route=add_estate');
            exit();
        }
        return $this->view->renderTemplate('add_estate', [
            'categories' => $categories,
            'types' => $types,
            'energies' => $energies,
            'frequencies' => $frequencies,
            'post', $post
        ]);
    }

    public function allEstate()
    {
        $estates = $this->estateDAO->getEstates();
        return $this->view->renderTemplate('all_estates', [
            'estates' => $estates
        ]);
    }

    public function configuration(){
        $categories = $this->categoryDAO->getCategories();
        $types = $this->typeDAO->getTypes();
        $energies = $this->energyDAO->getEnergies();
        $frequencies = $this->frequencyDAO->getFrequencies();
        return $this->view->renderTemplate('configForm', [
            'categories' => $categories,
            'types' => $types,
            'energies' => $energies,
            'frequencies' => $frequencies
        ]);
    }

    public function addCategory($post)
    {
        if($post->get('submit')){
            $categories = $this->categoryDAO->getCategories();
            $types = $this->typeDAO->getTypes();
            $energies = $this->energyDAO->getEnergies();
            $frequencies = $this->frequencyDAO->getFrequencies();
            $errors = $this->validation->validate($post, 'Category');
            if (!$errors){
                $this->categoryDAO->addCategory($post);
                $this->session->set('addCategory', 'L\'ajout d\'une catégorie a été faite');
                header('Location: ../public/index.php?route=configuration');
                exit();
            }
            return $this->view->renderTemplate('configForm', [
                'categories' => $categories,
                'types' => $types,
                'energies' => $energies,
                'frequencies' => $frequencies,
                'post'=> $post,
                'errors' => $errors
            ]);
        }
        return $this->view->renderTemplate('configForm');
    }

    public function addType($post)
    {
        if($post->get('submit')){
            $categories = $this->categoryDAO->getCategories();
            $types = $this->typeDAO->getTypes();
            $energies = $this->energyDAO->getEnergies();
            $frequencies = $this->frequencyDAO->getFrequencies();
            $errors = $this->validation->validate($post, 'Type');
            if (!$errors){
                $this->typeDAO->addType($post);
                $this->session->set('addType', 'L\'ajout d\'un type a été fait');
                header('Location: ../public/index.php?route=configuration');
                exit();
            }
            return $this->view->renderTemplate('configForm', [
                'categories' => $categories,
                'types' => $types,
                'energies' => $energies,
                'frequencies' => $frequencies,
                'post'=> $post,
                'errors' => $errors
            ]);
        }
        return $this->view->renderTemplate('configForm#type');
    }

    public function addEnergy($post)
    {
        if($post->get('submit')){
            $categories = $this->categoryDAO->getCategories();
            $types = $this->typeDAO->getTypes();
            $energies = $this->energyDAO->getEnergies();
            $frequencies = $this->frequencyDAO->getFrequencies();
            $errors = $this->validation->validate($post, 'Energy');
            if (!$errors){
                $this->energyDAO->addEnergy($post);
                $this->session->set('addEnergy', 'L\'ajout d\'un type d\'énergie a été faite');
                header('Location: ../public/index.php?route=configuration');
                exit();
            }
            return $this->view->renderTemplate('configForm', [
                'categories' => $categories,
                'types' => $types,
                'energies' => $energies,
                'frequencies' => $frequencies,
                'post'=> $post,
                'errors' => $errors
            ]);
        }
        return $this->view->renderTemplate('configForm');
    }

    public function addFrequency($post)
    {
        if($post->get('submit')){
            $categories = $this->categoryDAO->getCategories();
            $types = $this->typeDAO->getTypes();
            $energies = $this->energyDAO->getEnergies();
            $frequencies = $this->frequencyDAO->getFrequencies();
            $errors = $this->validation->validate($post, 'Frequency');
            if (!$errors){
                $this->session->set('addFrequency', 'L\'ajout d\'une frquence de charge a été faite');
                header('Location: ../public/index.php?route=configuration');
                exit();
            }
            return $this->view->renderTemplate('configForm', [
                'categories' => $categories,
                'types' => $types,
                'energies' => $energies,
                'frequencies' => $frequencies,
                'post'=> $post,
                'errors' => $errors
            ]);
        }
        return $this->view->renderTemplate('configForm');
    }

    public function deleteCategory($categoryId)
    {
        $this->categoryDAO->deleteCategory($categoryId);
        $this->session->set('deleteCategory', 'La catégorie a été supprimer avec succès');
        header('Location: ../public/index.php?route=configuration');
        exit();
    }

    public function deleteType($typeId)
    {
        $this->typeDAO->deleteType($typeId);
        $this->session->set('deleteType', 'Le type a été supprimer avec succès');
        header('Location: ../public/index.php?route=configuration');
        exit();
    }

    public function deleteEnergy($energyId)
    {
        $this->energyDAO->deleteEnergy($energyId);
        $this->session->set('deleteEnergy', 'Le type d\'énergie a été supprimer avec succès');
        header('Location: ../public/index.php?route=configuration');
        exit();
    }

    public function deleteFrequency($frequencyId)
    {
        $this->frequencyDAO->deleteFrequency($frequencyId);
        $this->session->set('deleteFrequency', 'La fréquence de charge a été supprimer avec succès');
        header('Location: ../public/index.php?route=configuration');
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
