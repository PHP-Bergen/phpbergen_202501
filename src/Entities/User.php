<?php

namespace phpbergen\Attributes\Entities;

use phpbergen\Attributes\Attributes\Serializable;

final class User
{

    #[Serializable]
    private string $name;

    #[Serializable]
    private string $email;

    // This property will not be serialized.
    private string $password;

    public function __construct(
      string $name,
      string $email,
      string $password,
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

}
