<?php

namespace Thruster\Action\DoctrineActions;

use Thruster\Component\Actions\Action\BaseAction;

/**
 * Class DoctrinePersistAction
 *
 * @package Thruster\Action\DoctrineActions
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class DoctrinePersistAction extends BaseAction
{
    /**
     * @inheritDoc
     */
    public function getName() : string
    {
        return 'thruster_doctrine_persist_action';
    }
}
