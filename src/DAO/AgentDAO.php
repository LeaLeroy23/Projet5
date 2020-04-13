<?php

//Pour toutes les classes dans DAO
namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\Agent;

class AgentDAO extends DAO
{
    /*private function buildObject($row){
        $agent = new Agent;
        $agent->setId($row['id']);
        $agent->setFunction($row['function']);
        $agent->setLastname($row['lastname']);
        $agent->setFirstname($row['firstname']);
        $agent->setAutorisation($row['autorisation']);
        $agent->setPhone($row['phone']);
        $agent->setEmail($row['email']);
        $agent->setFunction($row['password']);
        $agent->setFunction($row['status']);
        return $agent;
    }*/

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

    public function addAgent(Parameter $post)
    {
        $this->checkEmail($post);
        $sql = 'INSERT INTO agent (id, function, lastname, firstname, autorisation, phone, email, password, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
        $this->createQuery($sql, [$post->get('id'), $post->get('function'), $post->get('lastname'),$post->get('firstname'), $post->get('autorisation'), $post->get('phone'), $post->get('email'), $post->get('password'), $post->get('status') ]);
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

}