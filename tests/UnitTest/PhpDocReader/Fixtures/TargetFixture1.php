<?php

namespace UnitTest\PhpDocReader\Fixtures;

use UnitTest\PhpDocReader\Fixtures\Subspace\SomeDependencyFixture;

/**
 * Has a dependency locally aliased from another namespace
 */
class TargetFixture1
{

    /**
     * @var SomeDependencyFixture
     */
    protected $dependency1;

    /**
     * @var Subspace\SomeDependencyFixture2
     */
    protected $dependency2;

    /**
     * @param SomeDependencyFixture $dependency1
     * @param Subspace\SomeDependencyFixture2 $dependency2
     */
    public function SomeMethod($dependency1, $dependency2)
    {
    }

}
