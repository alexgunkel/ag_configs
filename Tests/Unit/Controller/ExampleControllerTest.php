<?php

use Alexgunkel\Typo3template\Controller\ExampleController;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class ExampleControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Alexgunkel\Typo3template\Controller\ExampleController
     */
    protected $subject = null;

    /**
     * @var ViewInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $view = null;

    /**
     * @var ExampleRepository|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $exampleRepository = null;

    protected function setUp()
    {
        $this->subject = new ExampleController();

        $this->view = $this->getMock(ViewInterface::class);
        $this->inject($this->subject, 'view', $this->view);

        $this->exampleRepository = $this->getMock(ExampleRepository::class, [], [], '', false);
        $this->inject($this->subject, 'exampleRepository', $this->exampleRepository);
    }

    /**
     * @test
     */
    public function indexActionCanBeCalled()
    {
        $this->subject->indexAction();
    }

    /**
     * @test
     */
    public function indexActionPassesAllTestimonialsAsTestimonialsToView()
    {
        $allEamples = new ObjectStorage();
        $this->exampleRepository->expects(self::any())->method('findAll')
            ->will(self::returnValue($allTestimonials));
        $this->view->expects(self::once())->method('assign')->with('testimonials', $allEamples);
        $this->subject->indexAction();
    }
}