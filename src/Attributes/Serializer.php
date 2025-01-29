<?php

namespace phpbergen\Attributes\Attributes;

use ReflectionClass;

final class Serializer
{

    public static function serialize(object $object): string
    {
        $reflectionClass = new ReflectionClass($object);
        $data = [];

        $properties = $reflectionClass->getProperties();

        foreach ($properties as $property) {
            $property->setAccessible(true);

            if (self::isSerializable($property)) {
                $name = $property->getName();
                $data[$name] = $property->getValue($object);
            }
        }

        return json_encode($data);
    }

    private static function isSerializable(ReflectionProperty $property): bool
    {
        $attrs = $property->getAttributes(Serializable::class);
        return !empty($attrs);
    }

}
