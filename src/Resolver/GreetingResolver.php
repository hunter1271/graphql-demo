<?php

declare(strict_types=1);

namespace App\Resolver;

use Overblog\GraphQLBundle\Definition\Resolver\ResolverInterface;

class GreetingResolver implements ResolverInterface
{
    public function resolve(): string
    {
        return 'Hello, world!';
    }
}