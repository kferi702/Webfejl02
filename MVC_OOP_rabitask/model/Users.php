<?php

/**
 * User model class
 * 
 * Methods for find users
 */
class Users extends BaseModel
{

    /**
     * Selects all user from db
     * 
     * @return array
     */
    public function findAllUser()
    {
        $sql = "SELECT * FROM users ORDER BY id ASC";
        return $this->sql->fetchAll($sql);
    }

    /**
     * Selects one user by id
     * 
     * @param int $id
     * 
     * @return array
     */
    public function findUserById($id)
    {
        $sql = "SELECT * FROM users WHERE id = :id";
        $params = [];
        $params[":id"] = $id;
        return $this->sql->fetchOne($sql, $params);
    }

    /**
     * Selects one user by username
     * 
     * @param string $name
     * 
     * @return array
     */
    public function findUserByName($name)
    {
        $sql = "SELECT * FROM users WHERE name = :name";
        $params = [];
        $params[":name"] = $name;
        return $this->sql->fetchOne($sql, $params);
    }

}