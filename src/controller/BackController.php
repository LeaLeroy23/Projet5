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
        $errors = $this->validation->validate($post, 'Estate');

        if($post->get('submit')){
            if (!$errors){
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
            
            $this->estateDAO->addEstate($post);
            $this->session->set('addEstate', 'L\'ajout d\'une annonce a été faite');
            header('Location: ../public/index.php?route=allEstates');
            exit();
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
        $categories = $this->categoryDAO->getCategories();
        $types = $this->typeDAO->getTypes();
        $energies = $this->energyDAO->getEnergies();
        $frequencies = $this->frequencyDAO->getFrequencies();
        $estate = $this->estateDAO->getEstate($estateId);
        $errors = $this->validation->validate($post, 'Estate');

        if($post->get('submit')){
            if (!$errors){
                $this->estateDAO->editEstate($post, $estateId);
                $this->session->set('edit_estate', 'Le bien a été mis à jour');
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

    public function deleteEstate($estateId){
        $this->estateDAO->deleteEstate($estateId);
        $this->session->set('delete_estate', 'L\'annonce a bien été supprimé');
        header('Location: ../public/index.php?route=allEstates');
    }

    public function allEstates()
    {
        $estates = $this->estateDAO->getEstates();

        return $this->view->renderTemplate('all_estates', [
            'estates' => $estates
        ]);
    }

    public function addPictures(Parameter $post, $estateId)
    {
        $estate = $this->estateDAO->getEstate($estateId);

            /*if (!empty($_FILES)) {
                $tempFile = $_FILES['file']['tmp_name'];
                $ds = DIRECTORY_SEPARATOR;
                $folder = 'upload';        
                $destination_path = dirname( __FILE__ , 3). $ds. 'public\img'. $ds. $folder. $ds;
                $target_path =  $destination_path. $_FILES['file']['name'];
                move_uploaded_file($temp,$target_path);
            }*/

            $target_dir = dirname( __FILE__ , 3) . 'public\img\upload';
            $target_file = $target_dir.basename($_FILES['file']['name']);
            if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)){
                $status = 1;
            }
           
            /*$this->pictureDAO->addPictures($post);
            $this->session->set('addPictures', 'L\'ajout d\'images a été faite');
            header('Location: ../public/index.php?route=allEstates');
            exit();*/
        
        return $this->view->renderTemplate('add_pictures', [
            'estate' => $estate,
            'post' => $post
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
            $post = strtolower($post);
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
            exit();
        }
        return $this->view->renderTemplate('update_password');
    }

    public function updateProfile(Parameter $post)
    {
        if($post->get('submit')){
            $this->agentDAO->updateProfile($post, $this->session->get('email'));
            $this->session->set('update_profile', 'Votre profile a été mis à jour');
            header('Location: ../public/index.php?route=updateProfile');
            exit();
        }
        return $this->view->renderTemplate('update_profile');
    }

    public function deleteProfile($agentId)
    {
        $this->agentDAO->deleteAgent($agentId);
        $this->session->set('deleteAgent', "L'\agent' a été supprimer avec succès");
        header('Location: ../public/index.php?route=allAgents');
        exit();
    }

}
