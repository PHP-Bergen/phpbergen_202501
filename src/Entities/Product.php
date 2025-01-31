<?php

namespace phpbergen\Attributes\Entities;

use phpbergen\Attributes\Attributes\Serializable;

class Product
{

  public function __construct(
    #[Serializable] private string $sku,
    #[Serializable] private string $name,
  ) {}

}
