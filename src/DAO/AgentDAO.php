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
        $agent->setLname($row['lname']);
        $agent->setFname($row['fname']);
        $agent->setAutorisation($row['autorisation']);
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

    public function addAgent(Parameter $post)
    {
        $this->checkEmail($post);
        $sql = 'INSERT INTO agent (lname, fname, autorisation, phone, email, function, password, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
        $getData = [$post->get('fname'), $post->get('lname'), $post->get('autorisation'), $post->get('phone'), $post->get('email'), $post->get('function'), password_hash($post->get('password'), PASSWORD_BCRYPT), $post->get('status')];
        /*var_dump($getData);
        die();*/
        $result = $this->createQuery($sql, $getData);
        return $result;
        
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

}