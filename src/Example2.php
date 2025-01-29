<?php

namespace phpbergen\Attributes;

use Attribute;

class ProductSubscriber
{
    #[ListensTo(ProductCreated::class)]
    public function onProductCreated(ProductCreated $event) {}

    #[ListensTo(ProductDeleted::class)]
    public function onProductDeleted(ProductDeleted $event) {}
}

#[Attribute]
class ListensTo
{
    public function __construct(
        public string $event
    ) {}
}
