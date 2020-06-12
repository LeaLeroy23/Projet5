<?php

namespace Hestia\src\controller;

use Hestia\config\Parameter;

class BackController extends Controller
{
    private function checkLoggedIn()
    {
        if(!$this->session->get('email')){
            $this->session->set('needLogin', 'Vous devez être connecté pour accéder à cet page');
            header('Location: ../public/index.php?route=login');
            exit();
        }
    }

    private function checkAdmin()
    {
        $this->checkLoggedIn();
        if(!($this->session->get('status') === '99')){
            $this->session->set('notAdmin', 'Vous n\'avez pas accès à cette page');
            header('Location: ../public/index.php?route=dashboard');
            exit();
        }
    }

    public function dashboard()
    {
        if($this->checkLoggedIn()){
            $estates = $this->estateDAO->getEstates();
            $agents = $this->agentDAO->getAgents();
            $count = $this->estateDAO->getEstatePublishCount();
            $countDraft = $this->estateDAO->getEstateDraftCount();
            $countAgent = $this->agentDAO->getAgentCount();
            //$estatesByAgent = $this->estateDAO->getEstatesByAgent();
            
            return $this->view->renderTemplate('dashboard', [
                'estates' => $estates,
                'agents' => $agents,
                'count' => $count,
                'countDraft' => $countDraft,
                'countAgent' => $countAgent
            ]);
        }
    }

    public function addEstate(Parameter $post, Parameter $files)
    {
        if($this->checkLoggedIn()){
            $categories = $this->categoryDAO->getCategories();
            $types = $this->typeDAO->getTypes();
            $energies = $this->energyDAO->getEnergies();
            $frequencies = $this->frequencyDAO->getFrequencies();
            $errors = $this->validation->validate($post, 'Estate');

            if($post->get('submit')){
                if (!$errors){
                    $form=[];
                    $maxsize = 5 * 1024 * 1024;
                    $filename = "";
                    if (isset($_FILES["picture_url"]) && $_FILES["picture_url"]["error"] == 0) {
                        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "PNG" => "image/PNG");
                        $filename = $_FILES["picture_url"]["name"];
                        $filetype = $_FILES["picture_url"]["type"];
                        $filesize = $_FILES["picture_url"]["size"];

                        $ext = pathinfo($filename, PATHINFO_EXTENSION);
                        if (!array_key_exists($ext, $allowed)) {
                            echo("Erreur : Veuillez sélectionner un format de fichier valide.");
                        }

                        if ($filesize > $maxsize) {
                            echo("Erreur: La taille du fichier est supérieure à la limite autorisée.");
                        }

                        if (in_array($filetype, $allowed)) {
                            /**verifie si le fichier existe avant de le telecharger*/
                            if (file_exists("../public/img/upload/" . $_FILES["picture_url"]["name"])) {
                                echo($_FILES["picture_url"]["name"] . "existe déjà.");
                            } else {
                                $filename = uniqid() . '.' . $ext;
                                move_uploaded_file($_FILES["picture_url"]["tmp_name"], "../public/img/upload/" .  $filename);
                            }
                        } else {
                            echo("Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer.");
                        }
                        
                    }
                
                $this->estateDAO->addEstate($post, $filename);
                $this->session->set('addEstate', 'L\'ajout d\'une annonce a été faite');
                header('Location: ../public/index.php?route=allEstates');
                exit();
                }
            }
        }
        return $this->view->renderTemplate('add_estate', [
            'categories' => $categories,
            'types' => $types,
            'energies' => $energies,
            'frequencies' => $frequencies,
            'errors' => $errors,
            'post'=> $post
        ]);
    }

    public function editEstate(Parameter $post, $estateId)
    {
        if($this->checkLoggedIn()){
            $categories = $this->categoryDAO->getCategories();
            $types = $this->typeDAO->getTypes();
            $energies = $this->energyDAO->getEnergies();
            $frequencies = $this->frequencyDAO->getFrequencies();
            $estate = $this->estateDAO->getEstate($estateId);
            $errors = $this->validation->validate($post, 'Estate');

            if($post->get('submit')){
                if (!$errors){
                    $this->estateDAO->editEstate($post, $estateId);
                    $this->session->set('editEstate', 'Le bien a été mis à jour');
                    header('Location: ../public/index.php?route=allEstates');
                    exit();
                }
            }
            return $this->view->renderTemplate('edit_estate', [
                'estate' => $estate,
                'categories' => $categories,
                'types' => $types,
                'energies' => $energies,
                'frequencies' => $frequencies,
                'errors' => $errors
            ]);
        }
    }

    public function deleteEstate($estateId)
    {
        if($this->checkLoggedIn()){
            $this->estateDAO->deleteEstate($estateId);
            $this->session->set('deleteEstate', 'L\'annonce a bien été supprimé');
            header('Location: ../public/index.php?route=allEstates');
        }
    }

    public function allEstates()
    {
        if($this->checkLoggedIn()){
            $estates = $this->estateDAO->getEstates();
            return $this->view->renderTemplate('all_estates', [
                'estates' => $estates
            ]);
        }
    }

    public function addPictures(Parameter $post, Parameter $files, $estateId)
    {
        if($this->checkLoggedIn()){
            $estate = $this->estateDAO->getEstate($estateId);
            $pictures = $this->pictureDAO->getPicturesByEstateId($estateId);
            $errors = $this->validation->validate($post, 'Pictures');

            if($post->get('submit')){
                
                if (!$errors){
                    $form=[];
                    $maxsize = 5 * 1024 * 1024;
                    if (isset($_FILES["filename"]) && $_FILES["filename"]["error"] == 0) {
                        
                        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "PNG" => "image/PNG");
                        $filename = $_FILES["filename"]["name"];
                        $filetype = $_FILES["filename"]["type"];
                        $filesize = $_FILES["filename"]["size"];

                        $ext = pathinfo($filename, PATHINFO_EXTENSION);
                        if (!array_key_exists($ext, $allowed)) {
                            echo("Erreur : Veuillez sélectionner un format de fichier valide.");
                        }

                        if ($filesize > $maxsize) {
                            echo("Erreur: La taille du fichier est supérieure à la limite autorisée.");
                        }

                        if (in_array($filetype, $allowed)) {
                            /**verifie si le fichier existe avant de le telecharger*/
                            if (file_exists("../public/img/upload/" . $_FILES["filename"]["name"])) {
                                echo($_FILES["filename"]["name"] . "existe déjà.");
                            } else {
                            
                                $filename = uniqid() . '.' . $ext;
                                move_uploaded_file($_FILES["filename"]["tmp_name"], "../public/img/upload/" .  $filename);
                            }
                        } else {
                            echo("Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer.");
                        }
                        
                    }
                $this->pictureDAO->addPictures($post, $files);
                $this->session->set('addPictures', 'L\'ajout d\'images a été faite avec succès');
                header('Location: ../public/index.php?route=allEstates');
                exit();
                }
            }
            
            return $this->view->renderTemplate('add_pictures', [
                'estate' => $estate,
                'pictures' => $pictures,
                'post' => $post
            ]);
        }
    }

    public function deletePicture($pictureId)
    {
        if($this->checkLoggedIn()){
            $this->pictureDAO->deletePicture($pictureId);
            $this->session->set('deleteEstate', 'L\'image a bien été supprimé');
            header('Location: ../public/index.php?route=allEstates');
            exit();
        }
    }

    public function configuration(){ 
        if($this->checkAdmin()){
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
    }

    public function addCategory($post)
    {
        if($this->checkAdmin()){
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
    }

    public function addType($post)
    {
        if($this->checkAdmin()){
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
    }

    public function addEnergy($post)
    {
        if($this->checkAdmin()){
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
    }

    public function addFrequency($post)
    {
        if($this->checkAdmin()){
            if($post->get('submit')){
                $categories = $this->categoryDAO->getCategories();
                $types = $this->typeDAO->getTypes();
                $energies = $this->energyDAO->getEnergies();
                $frequencies = $this->frequencyDAO->getFrequencies();
                $errors = $this->validation->validate($post, 'Frequency');
                if (!$errors){
                    $this->frequencyDAO->addFrequency($post);
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
    }

    public function deleteCategory($categoryId)
    {
        if($this->checkAdmin()){
            $this->categoryDAO->deleteCategory($categoryId);
            $this->session->set('deleteCategory', 'La catégorie a été supprimer avec succès');
            header('Location: ../public/index.php?route=configuration');
            exit();
        }
    }

    public function deleteType($typeId)
    {
        if($this->checkAdmin()){
            $this->typeDAO->deleteType($typeId);
            $this->session->set('deleteType', 'Le type a été supprimer avec succès');
            header('Location: ../public/index.php?route=configuration');
            exit();
        }
    }

    public function deleteEnergy($energyId)
    {
        if($this->checkAdmin()){
            $this->energyDAO->deleteEnergy($energyId);
            $this->session->set('deleteEnergy', 'Le type d\'énergie a été supprimer avec succès');
            header('Location: ../public/index.php?route=configuration');
            exit();
        }
    }

    public function deleteFrequency($frequencyId)
    {
        if($this->checkAdmin()){
            $this->frequencyDAO->deleteFrequency($frequencyId);
            $this->session->set('deleteFrequency', 'La fréquence de charge a été supprimer avec succès');
            header('Location: ../public/index.php?route=configuration');
            exit();
        }
    }

    public function allAgents()
    {
        if($this->checkLoggedIn()){
            $agents = $this->agentDAO->getAgents();
            return $this->view->renderTemplate('all_agents', [
                'agents' => $agents
            ]);
        }
    }

    public function addAgent(Parameter $post)
    {
        if($this->checkAdmin()){
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
    }

    public function profile()
    {
        if($this->checkLoggedIn()){
            return $this->view->renderTemplate('profile');
        }
    }

    public function updatePassword(Parameter $post)
    {
        if($this->checkLoggedIn()){
            if($post->get('submit')){
                $this->agentDAO->updatePassword($post, $this->session->get('email'));
                $this->session->set('update_password', 'Votre mot de passe a été mis à jour');
                header('Location: ../public/index.php?route=profile');
                exit();
            }
            return $this->view->renderTemplate('update_password');
        }
    }

    public function editProfile(Parameter $post)
    {
        if($this->checkLoggedIn()){
            if($post->get('submit')){
                $this->agentDAO->updateProfile($post, $this->session->get('email'));
                $this->session->set('update_profile', 'Votre profile a été mis à jour');
                header('Location: ../public/index.php?route=Profile');
                exit();
            }
            return $this->view->renderTemplate('profile');
        }
    }

    public function deleteProfile($agentId)
    {
        if($this->checkAdmin()){
            $this->agentDAO->deleteAgent($agentId);
            $this->session->set('deleteAgent', "L'\agent' a été supprimer avec succès");
            header('Location: ../public/index.php?route=allAgents');
            exit();
        }
    }

    public function logout()
    {
        if($this->checkLoggedIn()){
            $this->session->stop();
            $this->session->start();
            $this->session->set('logout', 'À bientôt');
            header('Location: ../public/index.php');
        }
    }

}
