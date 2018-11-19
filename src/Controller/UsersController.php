<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    private $userRepository;
    /**
     * UsersController constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository  = $userRepository;
    }

    /**
     * Matches /users exactly
     *
     * @Route("/users", name="user_list")
     */

    public function createAction(): User
    {
        $user = new User();
        return $user;
    }
}
