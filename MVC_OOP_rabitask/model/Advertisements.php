<?php

/**
 * Advertisement model class
 * 
 * Methods for find advertisements
 */
class Advertisements extends BaseModel
{
    
    /**
     * Join fields to avoid duplication and make easier to write SQL command
     * 
     * @return string
     */
    private function getJoinFields() {
        return 
            "advertisements.id AS id,".
            "advertisements.title AS title,".
            "users.id AS userid,".
            "users.name AS name";
    }

    /**
     * Selects all advertisement
     * 
     * @return array
     */
    public function findAllAdvertisements()
    {
        $fields = $this->getJoinFields();
        $sql = "SELECT $fields FROM advertisements JOIN users ON users.id = advertisements.userid ORDER BY id ASC";
        return $this->sql->fetchAll($sql);
    }

    /**
     * Selects one advertisement by id
     * 
     * @param int $id
     * @return array
     */
    public function findById($id)
    {
        $fields = $this->getJoinFields();
        $sql = "SELECT $fields FROM advertisements JOIN users ON users.id = advertisements.userid WHERE advertisements.id = :id";
        $params = [];
        $params[":id"] = $id;
        return $this->sql->fetchOne($sql, $params);
    }

    /**
     * Selects one advertisement by title
     * 
     * @param string $title
     * @return array
     */
    public function findByTitle($title)
    {
        $fields = $this->getJoinFields();
        $sql = "SELECT $fields FROM advertisements JOIN users ON users.id = advertisements.userid WHERE title = :title";
        $params = [];
        $params[":title"] = $title;
        return $this->sql->fetchOne($sql, $params);
    }

}