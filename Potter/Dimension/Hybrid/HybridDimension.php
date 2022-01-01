<?php

namespace Potter\Dimension\Hybrid;

use Potter\Dimension\{
    Child\ChildDimensionTrait,
    Parent\ParentDimensionTrait
};

abstract class HybridDimension extends AbstractHybridDimension
{
    use ChildDimensionTrait, ParentDimensionTrait;
}