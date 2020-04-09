<?php

//Pour toutes les classes dans DAO
namespace App\src\DAO;

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
        $agent->setDescription($row['description']);
        $agent->setAvatar($row['Avatar']);
        return $agent;
    }

    public function getAgents(){
        $sql ='SELECT * FROM agent';
        $result = $this->createQuery($sql);
        $agents = [];
        foreach ($result as $row){
            $agentId = $row['id'];
            $agents[$agentId] = $this->buidObject($row);
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
}