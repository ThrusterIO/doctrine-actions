<?php

namespace Thruster\Action\DoctrineActions\Tests;

use Thruster\Action\DoctrineActions\DoctrinePersistActionExecutor;

class DoctrinePersistActionExecutorTest extends \PHPUnit_Framework_TestCase
{

    public function testSupportedActionName()
    {
        $entityManagerMock = $this->getMockBuilder('\Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();

        $executor = new DoctrinePersistActionExecutor($entityManagerMock);

        $this->assertSame('thruster_doctrine_persist_action', $executor->getSupportedAction());
    }

    public function testExecuteManagerDefault()
    {
        $object = new \stdClass();

        $em = $this->getMockBuilder('\Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();

        $em->expects($this->once())
            ->method('persist')
            ->with($object);

        $em->expects($this->once())
            ->method('flush');

        $executor = new DoctrinePersistActionExecutor($em);
        $executor->execute([$object]);
    }
}
