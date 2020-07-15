<?php

namespace Hestia\src\controller;

use Hestia\config\Parameter;

class BackController extends Controller
{
    private function checkLoggedIn()
    {
        if(!$this->session->get('email')){
            $this->session->set('needLogin', 'Vous devez être connecté pour accéder à cet page');
            header('Location: index.php?route=login');
            exit();
        } else {
            return true;
        }
    }

    private function checkAdmin()
    {
        $this->checkLoggedIn();
        if(!($this->session->get('status') === '99')){
            $this->session->set('notAdmin', 'Vous n\'avez pas accès à cette page');
            header('Location: ../public/index.php?route=dashboard');
            exit();
        } else {
            return true;
        }
    }

    public function dashboard()
    {
        
        if($this->checkLoggedIn()){
            $agentId = $this->session->get('id');            
            
            $estates = $this->estateDAO->getEstates();
            $agents = $this->agentDAO->getAgents();
            $count = $this->estateDAO->getEstatePublishCount();
            $countDraft = $this->estateDAO->getEstateDraftCount();
            $countAgent = $this->agentDAO->getAgentCount();
            $estatesByAgent = $this->estateDAO->getEstatesByAgent($agentId);
            $estateByAgentCount = $this->estateDAO->getEstateByAgentCount($agentId);
            $countEstateByAgentDraft = $this->estateDAO->getCountEstateByAgentDraft($agentId);

            return $this->view->renderTemplate('dashboard', [
                'estates' => $estates,
                'agents' => $agents,
                'count' => $count,
                'countDraft' => $countDraft,
                'countAgent' => $countAgent,
                'estatesByAgent' => $estatesByAgent,
                'estateByAgentCount' => $estateByAgentCount,
                'countEstateByAgentDraft' => $countEstateByAgentDraft
            ]);
        }
    }

    public function addEstate(Parameter $post)
    {
        if($this->checkLoggedIn()){
            $categories = $this->categoryDAO->getCategories();
            $types = $this->typeDAO->getTypes();
            $energies = $this->energyDAO->getEnergies();
            $frequencies = $this->frequencyDAO->getFrequencies();
            $errors = $this->validation->validate($post, 'Estate');

            if($post->get('submit')){
                if (!$errors){
                    $maxsize = 5 * 1024 * 1024;
                    $filename = "";
                    if (isset($_FILES["picture_url"]) && $_FILES["picture_url"]["error"] == 0) {
                        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "PNG" => "image/PNG");
                        $filename = $_FILES["picture_url"]["name"];
                        $filetype = $_FILES["picture_url"]["type"];
                        $filesize = $_FILES["picture_url"]["size"];

                        $ext = pathinfo($filename, PATHINFO_EXTENSION);
                        if (!array_key_exists($ext, $allowed)) {
                            $this->session->set('format', "Erreur : Veuillez sélectionner un format de fichier valide.");
                        }

                        if ($filesize > $maxsize) {
                            $this->session->set('size', "Erreur: La taille du fichier est supérieure à la limite autorisée.");
                        }

                        if (in_array($filetype, $allowed)) {
                            /**verifie si le fichier existe avant de le telecharger*/
                            if (file_exists("img/slider/" . $_FILES["picture_url"]["name"])) {
                                $this->session->set('exist', $_FILES["picture_url"]["name"] . " existe déjà.");
                            } else {
                                $filename = uniqid() . '.' . $ext;
                                move_uploaded_file($_FILES["picture_url"]["tmp_name"], "img/slider/" .  $filename);
                            }
                        } else {
                            $this->session->set('error', "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer.");
                        }
                        
                    }
                
                $this->estateDAO->addEstate($post, $filename);
                $this->session->set('addEstate', 'L\'ajout d\'une annonce a été faite');
                header('Location: index.php?route=allEstates');
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
                    $maxsize = 5 * 1024 * 1024;
                    $filename = "";
                    if (isset($_FILES["picture_url"])) {
                        
                        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "PNG" => "image/PNG");
                        $filename = $_FILES["picture_url"]["name"];
                        $filetype = $_FILES["picture_url"]["type"];
                        $filesize = $_FILES["picture_url"]["size"];

                        $ext = pathinfo($filename, PATHINFO_EXTENSION);
                        if (!array_key_exists($ext, $allowed)) {
                            $this->session->set('format', "Erreur : Veuillez sélectionner un format de fichier valide.");
                        }

                        if ($filesize > $maxsize) {
                            $this->session->set('size', "Erreur: La taille du fichier est supérieure à la limite autorisée.");
                        }

                        if (in_array($filetype, $allowed)) {
                            /**verifie si le fichier existe avant de le telecharger*/
                            if (file_exists("img/slider/" . $_FILES["picture_url"]["name"])) {
                                $this->session->set('exist', $_FILES["picture_url"]["name"] . " existe déjà.");
                            } else {
                                $filename = uniqid() . '.' . $ext;
                                move_uploaded_file($_FILES["picture_url"]["tmp_name"], "img/slider/" .  $filename);
                            }
                        } else {
                            $this->session->set('error', "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer.");
                        }
                        
                    }

                    $this->estateDAO->editEstate($post, $filename, $estateId);
                    $this->session->set('editEstate', 'Le bien a été mis à jour');
                    header('Location: index.php?route=allEstates');
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
            header('Location: index.php?route=allEstates');
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

    public function addPictures(Parameter $post, $estateId)
    {
        if($this->checkLoggedIn()){
            $estate = $this->estateDAO->getEstate($estateId);
            $pictures = $this->pictureDAO->getPicturesByEstateId($estateId);

            $folder_name = 'img/upload/';
            
            if (!empty($_FILES)) 
            {
                $temp_file = $_FILES['file']['tmp_name'];
                //$location = $folder_name . $_FILES['file']['name'];
                $filename = $_FILES['file']['name'];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                $filename = uniqid() . '.' . $ext;
                $location = $folder_name . $filename;
                move_uploaded_file($temp_file, $location);
                
                $this->pictureDAO->addPictures($filename, $estateId);
                $this->session->set('addPictures', 'Le ou les images ont bien été ajouté');
            }
            
            return $this->view->renderTemplate('add_pictures', [
                'post' => $post,
                'estate' => $estate,
                'pictures' => $pictures
            ]);
        }
    }

    public function uploadPictures(Parameter $post, Parameter $files, $estateId)
    {
        if($this->checkLoggedIn()){
            //$estate = $this->estateDAO->getEstate($estateId);
            //$pictures = $this->pictureDAO->getPicturesByEstateId($estateId);

            $result = array();
            $files = $this->pictureDAO->getPicturesByEstateId($estateId);
            echo $files;
            die();
            $output = '';

            /*if(!empty($files))
                {*/
                    foreach($files as $file)
                    {
                        if('.' !=  $file && '..' != $file)
                        {
                            $output .= '
                            <tr>
                                <td><img src="img/upload/'.$file->getFile().'" height="150px"></td>
                                <td>'.$file->getFile().'</td>
                                <td><a href="index.php?route=deletePicture&pictureId='.$file->getId().'"><button class="btn btn-danger btn-xs" title="Supprimer"><i class="fa fa-trash-o "></i> Supprimer</button></a></td>
                            </tr>
                            ';
                        }
                    }
                /*}*/
            echo $output;

            $this->session->set('uploadPicture', 'L\'image a bien été ajouter');
            
        }
    }

    public function deletePicture($pictureId)
    {
        if($this->checkLoggedIn()){
            $this->pictureDAO->deletePicture($pictureId);
            $this->session->set('deletePicture', 'L\'image a bien été supprimé');
            header('Location: index.php?route=allEstates');
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
                    header('Location: index.php?route=configuration');
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
                    header('Location: index.php?route=configuration');
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
                    header('Location: index.php?route=configuration');
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
                    header('Location: index.php?route=configuration');
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
            header('Location: index.php?route=configuration');
            exit();
        }
    }

    public function deleteType($typeId)
    {
        if($this->checkAdmin()){
            $this->typeDAO->deleteType($typeId);
            $this->session->set('deleteType', 'Le type a été supprimer avec succès');
            header('Location: index.php?route=configuration');
            exit();
        }
    }

    public function deleteEnergy($energyId)
    {
        if($this->checkAdmin()){
            $this->energyDAO->deleteEnergy($energyId);
            $this->session->set('deleteEnergy', 'Le type d\'énergie a été supprimer avec succès');
            header('Location: index.php?route=configuration');
            exit();
        }
    }

    public function deleteFrequency($frequencyId)
    {
        if($this->checkAdmin()){
            $this->frequencyDAO->deleteFrequency($frequencyId);
            $this->session->set('deleteFrequency', 'La fréquence de charge a été supprimer avec succès');
            header('Location: index.php?route=configuration');
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
                    $createdAt = new \Datetime('NOW');
                    $password = password_hash($post->get('password'), PASSWORD_BCRYPT);

                    $form=[];
                    $maxsize = 5 * 1024 * 1024; 
                    $filename = "";
                    if (isset($_FILES["avatar"]) && $_FILES["avatar"]["error"] == 0) {

                        $allowed = array("jpg" => "image/jpg", "JPG" => "image/JPG", "jpeg" => "image/jpeg", "png" => "image/png", "PNG" => "image/PNG");
                        $filename = $_FILES["avatar"]["name"];
                        $filetype = $_FILES["avatar"]["type"];
                        $filesize = $_FILES["avatar"]["size"];

                        $ext = pathinfo($filename, PATHINFO_EXTENSION);
                        if (!array_key_exists($ext, $allowed)) {
                            $this->session->set('format', "Erreur : Veuillez sélectionner un format de fichier valide.");
                        }

                        if ($filesize > $maxsize) {
                            $this->session->set('size', "Erreur: La taille du fichier est supérieure à la limite autorisée.");
                        }

                        if (in_array($filetype, $allowed)) {
                            /**verifie si le fichier existe avant de le telecharger*/
                            if (file_exists("../public/img/agent/" . $_FILES["avatar"]["name"])) {
                                $this->session->set('exist', $_FILES["picture_url"]["name"] . " existe déjà.");
                            } else {
                                $filename = uniqid() . '.' . $ext;
                                move_uploaded_file($_FILES["avatar"]["tmp_name"], "../public/img/agent/" .  $filename);
                            }
                        } else {
                            $this->session->set('error', "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer.");
                        }
                        
                    }

                    $this->agentDAO->addAgent($post, $password, $filename, $createdAt->format('Y-m-d H:i:s'));
                    $this->session->set('addAgent', 'L\'inscription a bien été prise en compte');
                    header('Location: index.php?route=allAgents');
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

    public function editAgent(Parameter $post, $agentId)
    {
        if($this->checkLoggedIn()){
            $agent = $this->agentDAO->getAgent($agentId);
            $errors = $this->validation->validate($post, 'Agent');
            

            if($post->get('submit')){
                if (!$errors){
                    $form=[];
                    $maxsize = 5 * 1024 * 1024; 
                    $filename = "";
                    if (isset($_FILES["avatar"]) && $_FILES["avatar"]["error"] == 0) {

                        $allowed = array("jpg" => "image/jpg", "JPG" => "image/JPG", "jpeg" => "image/jpeg", "png" => "image/png", "PNG" => "image/PNG");
                        $filename = $_FILES["avatar"]["name"];
                        $filetype = $_FILES["avatar"]["type"];
                        $filesize = $_FILES["avatar"]["size"];

                        $ext = pathinfo($filename, PATHINFO_EXTENSION);
                        if (!array_key_exists($ext, $allowed)) {
                            $this->session->set('format', "Erreur : Veuillez sélectionner un format de fichier valide.");

                        }

                        if ($filesize > $maxsize) {
                            $this->session->set('size', "Erreur: La taille du fichier est supérieure à la limite autorisée.");
                        }

                        if (in_array($filetype, $allowed)) {
                            /**verifie si le fichier existe avant de le telecharger*/
                            if (file_exists("img/agent/" . $_FILES["avatar"]["name"])) {
                                $this->session->set('exist', $_FILES["picture_url"]["name"] . " existe déjà.");
                            } else {
                                $filename = uniqid() . '.' . $ext;
                                move_uploaded_file($_FILES["avatar"]["tmp_name"], "img/agent/" .  $filename);
                            }
                        } else {
                            $this->session->set('error', "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer.");
                        }
                        
                    }

                    $this->agentDAO->editAgent($post, $filename, $agentId);
                    $this->session->set('editAgent', 'L\'agent a été mis à jour');
                    header('Location: index.php?route=allAgents');
                    exit();
                }
            }
            return $this->view->renderTemplate('edit_agent', [
                'agent' => $agent,
                'errors' => $errors
            ]);
        }
    }

    public function deleteAgent($agentId)
    {
        if($this->checkAdmin()){
            $this->agentDAO->deleteAgent($agentId);
            $this->session->set('deleteAgent', "L'\agent' a été supprimer avec succès");
            header('Location: index.php?route=allAgents');
            exit();
        }
    }

    public function profile()
    {
        if($this->checkLoggedIn()){
            $agentId = $this->session->get('id');
            $agent = $this->agentDAO->getAgent($agentId);
            $count = $this->estateDAO->getEstatePublishCount();
            $estatesByAgent = $this->estateDAO->getEstatesByAgent($agentId);
            $estateByAgentCount = $this->estateDAO->getEstateByAgentCount($agentId);
            $countEstateByAgentDraft = $this->estateDAO->getCountEstateByAgentDraft($agentId);


            return $this->view->renderTemplate('profile', [
                'agent' => $agent,
                'count' => $count,
                'estatesByAgent' => $estatesByAgent,
                'estateByAgentCount' => $estateByAgentCount,
                'countEstateByAgentDraft' => $countEstateByAgentDraft
            ]);
        }
    }

    public function updatePassword(Parameter $post, $agentId)
    {
        if($this->checkAdmin()){
            if($post->get('submit')){
                if($post->get('newPassword') == $post->get('confirmPassword')){
                    $password = $post->get('confirmPassword');
                    $this->agentDAO->updatePassword($password, $agentId);
                    $this->session->set('updatePassword', 'Votre mot de passe a été mis à jour avec succès');
                    header('Location: index.php?route=allAgents');
                    exit();
                } else {
                    $this->session->set('wrongPassword', 'Erreur: Vos mots de passe ne sont pas identique');
                    header('Location: index.php?route=editAgent&agentId=' . $agentId);
                    exit();
                }
               
            }
            return $this->view->renderTemplate('all_agents');
        }
    }

    public function editProfile(Parameter $post, $agentId)
    {
        $errors = $this->validation->validate($post, 'Agent');
        $agentId = $this->session->get('id');
        if ($post->get('submit')) {
            if (!$errors) {
                $form=[];
                $maxsize = 5 * 1024 * 1024;
                $filename = "";
                if (isset($_FILES["avatar"]) && $_FILES["avatar"]["error"] == 0) {
                    $allowed = array("jpg" => "image/jpg", "JPG" => "image/JPG", "jpeg" => "image/jpeg", "png" => "image/png", "PNG" => "image/PNG");
                    $filename = $_FILES["avatar"]["name"];
                    $filetype = $_FILES["avatar"]["type"];
                    $filesize = $_FILES["avatar"]["size"];

                    $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    if (!array_key_exists($ext, $allowed)) {
                        $this->session->set('format', "Erreur : Veuillez sélectionner un format de fichier valide.");
                    }

                    if ($filesize > $maxsize) {
                        $this->session->set('size', "Erreur: La taille du fichier est supérieure à la limite autorisée.");
                    }

                    if (in_array($filetype, $allowed)) {
                        /**verifie si le fichier existe avant de le telecharger*/
                        if (file_exists("img/agent/" . $_FILES["avatar"]["name"])) {
                            $this->session->set('exist', $_FILES["picture_url"]["name"] . " existe déjà.");
                        } else {
                            $filename = uniqid() . '.' . $ext;
                            move_uploaded_file($_FILES["avatar"]["tmp_name"], "img/agent/" .  $filename);
                        }
                    } else {
                        $this->session->set('error', "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer.");
                    }
                }

                $this->agentDAO->editProfile($post, $filename, $agentId);
                
                $this->session->set('editProfile', 'L\'agent a été mis à jour');
                header('Location: index.php?route=profile');
                exit();
            }
            
        }

        return $this->view->renderTemplate('profile', [
            'agent' => $agent,
            'errors' => $errors
        ]);
    }

    public function updatePasswordProfile(Parameter $post, $agentId){
        if($this->checkLoggedIn()){
            if($post->get('submit')){
                if($post->get('newPassword') == $post->get('confirmPassword')){
                    $password = $post->get('confirmPassword');
                    $this->agentDAO->updatePassword($password, $agentId);
                    $this->session->set('updatePassword', 'Votre mot de passe a été mis à jour avec succès');
                    header('Location: index.php?route=Profile');
                    exit();
                } else {
                    $this->session->set('wrongPassword', 'Erreur: Vos mots de passe ne sont pas identique');
                    header('Location: index.php?route=profile');
                    exit();
                }
               
            }
            return $this->view->renderTemplate('profile');
        }
    }

    public function logout()
    {
        if($this->checkLoggedIn()){
            $this->session->stop();
            $this->session->start();
            $this->session->set('logout', 'À bientôt');
            header('Location: index.php');
            exit();
        }
    }

}
