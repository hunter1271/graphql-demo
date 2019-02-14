<?php

declare(strict_types=1);

namespace App\GraphQL\Resolver;

use Overblog\GraphQLBundle\Definition\Resolver\ResolverInterface;

class GreetingResolver implements ResolverInterface
{
    public function sayHello(string $name): string
    {
        return sprintf('Hello, %s!', $name);
    }
}