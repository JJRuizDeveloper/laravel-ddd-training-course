<?php

namespace Src\admin\user\application;

use Src\admin\user\domain\contract\UserRepositoryInterface;

class GetUserByIdUseCase 
{

    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userInterface)
    {
        $this->userInterface = $userInterface;
    }

    public function ___invoke(int $id):?User
    {
        return $this->userRepository->findById($id);
    }
}