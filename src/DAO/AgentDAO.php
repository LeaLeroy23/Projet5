<?php

//Pour toutes les classes dans DAO
namespace Hestia\src\DAO;

use Hestia\config\Parameter;
use Hestia\src\model\Agent;

class AgentDAO extends DAO
{
    private function buildObject($row){
        $agent = new Agent;
        $agent->setId($row['id']);
        $agent->setFirstname($row['firstname']);
        $agent->setLastname($row['lastname']);
        $agent->setPhone($row['phone']);
        $agent->setEmail($row['email']);
        $agent->setAvatar($row['avatar']);
        $agent->setFunction($row['function']);
        $agent->setDescription($row['description']);
        $agent->setPassword($row['password']);
        $agent->setStatus($row['status']);
        $agent->setCreated_at($row['created_at']);
        return $agent;
    }

    public function getAgents(){
        $sql ='SELECT * FROM agent';
        $result = $this->createQuery($sql);
        $agents = [];
        foreach ($result as $row){
            $agentId = $row['id'];
            $agents[$agentId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $agents;
    }

    public function getAgent($agentId)
    {
        $sql= 'SELECT * FROM agent WHERE id = ?';
        $result = $this->createQuery($sql, [$agentId]);
        $agent = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($agent);
    }
    
    public function addAgent(Parameter $post, $password, $filename, $createdAt)
    {
        
        $sql = "INSERT INTO agent (firstname, lastname, phone, email, function, description, avatar, password, status, created_at)
                VALUES (:firstname, :lastname, :phone, :email, :function, :description, :avatar, :password, :status, :created_at)";
        
        $this->createQuery($sql, [
            'firstname' => $post->get('firstname'),
            'lastname' => $post->get('lastname'),
            'phone' => $post->get('phone'),
            'email' => $post->get('email'),
            'function' => $post->get('function'),
            'description' => $post->get('description'),
            'avatar' => $filename,
            'password' => $password,
            'status' => $post->get('status'),
            'created_at' => $createdAt
        ]);
    }

    public function checkEmail(Parameter $post)
    {
        $sql = 'SELECT COUNT(email) FROM agent WHERE email = ?';
        $result = $this->createQuery($sql, [$post->get('email')]);
        $isUnique = $result->fetchColumn();
        if($isUnique) {
            return '<p>Cette email existe déjà</p>';
        }
    }

    public function deleteAgent($agentId)
    {
        $sql = 'DELETE FROM agent WHERE id=?';
        $this->createQuery($sql, [$agentId]);
    }

    public function login(Parameter $post)
    {
        
        $sql= 'SELECT id, password, firstname, lastname, phone, function, description, avatar, status FROM agent WHERE email = ?';
        $data = $this->createQuery($sql, [
            $post->get('email')
        ]);
        $result = $data->fetch();
        $isPasswordValid = $post->get('password');
        $isPasswordValid = password_verify($post->get('password'), $result['password']);
        $firstname = $result['firstname'];
        $lastname = $result['lastname'];
        $phone = $result['phone'];
        $function = $result['function'];
        $description = $result['description'];
        $avatar = $result['avatar'];
        $status = $result['status'];
        
        return[
            'result' => $result,
            'isPasswordValid' => $isPasswordValid,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'phone' => $phone,
            'function' => $function,
            'description' => $description,
            'avatar' => $avatar,
            'status' => $status
        ];
        
    }

    public function updatePassword($password, $agentId){
        $sql = 'UPDATE agent SET password=:password WHERE id = agentId';
        $this->createQuery($sql, [
            password_hash($password, PASSWORD_BCRYPT), 
            'agentId' => $agentId
        ]);
    }

    public function editProfile(Parameter $post, $agentId){
        
        $sql = 'UPDATE agent SET firstname=:firstname, lastname=:lastname, phone=:phone, email =:email, description =:description, avatar =:avatar, token=:token, password=:password, status=:status, created_at=:created_at WHERE id = agentId';
        
        $this->createQuery($sql, [
            'firstname' => $post->get('firstname'),
            'lastname' => $post->get('lastname'),
            'phone' => $post->get('phone'),
            'email' => $post->get('email'),
            'description' => $post->get('description'),
            'avatar' => $post->get('avatar'),
            'token' => $post->get('token'),
            'password' => $post->get('password'),
            'status' => $post->get('status'),
            'created_at' => $post->get('created_at'),
            'agentId' => $agentId
        ]);
    }

    public function getAgentCount(){
        $sql = "SELECT COUNT(*) FROM agent";
        $countAgent = $this->createQuery($sql);
        return $countAgent->fetch()[0];
    }

}