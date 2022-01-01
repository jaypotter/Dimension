<?php

namespace Potter\Dimension\Hybrid;

use Potter\Dimension\{
    Child\ChildDimensionInterface,
    Parent\ParentDimensionInterface
};

interface HybridDimensionInterface extends ChildDimensionInterface, ParentDimensionInterface
{

}