<?php

//Pour toutes les classes dans DAO
namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\Agent;

class AgentDAO extends DAO
{
    private function buildObject($row){
        $agent = new Agent;
        $agent->setId($row['id']);
        $agent->setFirstname($row['firstname']);
        $agent->setLastname($row['lastname']);
        $agent->setPhone($row['phone']);
        $agent->setEmail($row['email']);
        $agent->setFunction($row['function']);
        $agent->setFunction($row['password']);
        $agent->setFunction($row['status']);
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
    
    public function addAgent(Parameter $post, $password, $token, $createdAt)
    {
        
        
        $sql = "INSERT INTO agent (firstname, lastname, phone, email, function, description, avatar, password, token, status, created_at)
                VALUES (:firstname, :lastname, :phone, :email, :function, :description, :avatar, :password, :token, :status, :created_at)";
        
        $this->createQuery($sql, [
            'firstname' => $post->get('firstname'),
            'lastname' => $post->get('lastname'),
            'phone' => $post->get('phone'),
            'email' => $post->get('email'),
            'function' => $post->get('function'),
            'description' => null,
            'avatar' => null,
            'password' => $password,
            'token' => $token,
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

    public function login(Parameter $post)
    {
        $sql= 'SELECT id, password FROM agent WHERE email = ?';
        $data = $this->createQuery($sql, [$post->get('email')]);
        $result = $data->fetch();
        $isPasswordValid =$post->get('password');
        //$isPasswordValid = password_verify($post->get('password'), $result['password']);
        return[
            'result' => $result,
            'isPasswordValid' => $isPasswordValid
        ];
    }

    public function updatePassword(Parameter $post, $email){
        var_dump($post);
        die();
        $sql = 'UPDATE agent SET password = ? WHERE email = ?';
        $this->createQuery($sql, [password_hash($post->get('password'), PASSWORD_BCRYPT), $email]);
    }

    public function updateProfile(Parameter $post, $email){
        $sql = 'UPDATE agent SET function = ?, lname = ?, fname = ?, phone = ?, email = ?, description = ?, avatar = ? WHERE email = ?';
        $this->createQuery($sql, [password_hash($post->get('password'), PASSWORD_BCRYPT), $email]);
    }

}