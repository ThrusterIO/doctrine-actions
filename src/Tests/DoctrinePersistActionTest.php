<?php

namespace Thruster\Action\DoctrineActions\Tests;

use Thruster\Action\DoctrineActions\DoctrinePersistAction;

class DoctrinePersistActionTest extends \PHPUnit_Framework_TestCase
{
    public function testName()
    {
        $action = new DoctrinePersistAction();

        $this->assertSame('thruster_doctrine_persist_action', $action->getName());
    }
}
