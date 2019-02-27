<?php

include(__DIR__ . '/../model/Users.php');
include(__DIR__ . '/../model/Advertisements.php');

/**
 * Controller that serves actions as list everything in the base page
 * list each user
 * list each advertisement
 * 
 */
class DefaultController extends BaseController
{

    /**
     * Lists user by id
     * 
     * @param int $userid
     * @return string
     */
    public function actionUserById($userid)
    {
        $user = new Users($this->sql);
        return $this->render('user.php', ['data' => $user->findUserById($userid)]);
    }

    /**
     * Lists user by username
     * 
     * @param string $username
     * @return string
     */
    public function actionUserByName($username)
    {
        $user = new Users($this->sql);
        return $this->render('user.php', ['data' => $user->findUserByName($username)]);
    }

    /**
     * Lists advertisement by id
     * 
     * @param int $id
     * @return string
     */
    public function actionAdvById($id)
    {
        $adv = new Advertisements($this->sql);
        return $this->render('advertisement.php', ['data' => $adv->findById($id)]);
    }

    /**
     * Lists advertisement by title
     * 
     * @param string $title
     * @return string
     */
    public function actionAdvByTitle($title)
    {
        $adv = new Advertisements($this->sql);
        return $this->render('advertisement.php', ['data' => $adv->findByTitle($title)]);
    }

    /**
     * Lists everything (users, advertisements with id's) at home page
     * 
     * @return string
     */
    public function actionAll()
    {
        $users = new Users($this->sql);
        $advs = new Advertisements($this->sql);
        return $this->render('all.php', ['users' => $users->findAllUser(), 'advs' => $advs->findAllAdvertisements()]);
    }

}