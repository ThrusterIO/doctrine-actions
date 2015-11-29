<?php

namespace Thruster\Action\DoctrineActions;

use Doctrine\ORM\EntityManager;
use Thruster\Component\Actions\ActionExecutorInterface;

/**
 * Class DoctrinePersistActionExecutor
 *
 * @package Thruster\Action\DoctrineActions
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class DoctrinePersistActionExecutor implements ActionExecutorInterface
{
    /**
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @return EntityManager
     */
    public function getEntityManager() : EntityManager
    {
        return $this->entityManager;
    }

    /**
     * @inheritDoc
     */
    public function execute(array $arguments) : array
    {
        $entityManager = $this->getEntityManager();

        foreach ($arguments as $argument) {
            $entityManager->persist($argument);
        }

        $entityManager->flush();

        return $arguments;
    }

    /**
     * @inheritDoc
     */
    public static function getSupportedAction() : string
    {
        return 'thruster_doctrine_persist_action';
    }

}
