<?php

declare(strict_types=1);

use Paqtcom\Simplicate\QueryBuilder;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class QueryBuilderTest extends TestCase
{
    public function testQueryBuilderHasCorrectDefaults(): void
    {
        $query = new QueryBuilder();

        $this->assertSame(['limit' => 99], $query->toArray());
        $this->assertSame('limit=99', http_build_query($query->toArray()));
    }

    public function testQueryBuilderCanQuery(): void
    {
        $query = QueryBuilder::query()->where('foo', 'bar')->where('bar', 'baz');
        $queryString = urldecode(http_build_query($query->toArray()));

        $this->assertSame(['limit' => 99, 'q' => [
            'foo' => 'bar',
            'bar' => 'baz',
        ]], $query->toArray());
        $this->assertSame('limit=99&q[foo]=bar&q[bar]=baz', $queryString);
    }

    public function testQueryBuilderCanQueryWithOrs(): void
    {
        $query = QueryBuilder::query()->where('foo', 'bar')->orWhere('bar', 'baz');
        $queryString = urldecode(http_build_query($query->toArray()));

        $this->assertSame(['limit' => 99, 'q' => [
            'foo' => 'bar',
            'or' => [
                'bar' => 'baz',
            ],
        ]], $query->toArray());
        $this->assertSame('limit=99&q[foo]=bar&q[or][bar]=baz', $queryString);
    }

    public function testQueryBuilderCanHandleOrsWithoutWheres(): void
    {
        $query = QueryBuilder::query()->orWhere('foo', 'bar')->orWhere('bar', 'baz');
        $queryString = urldecode(http_build_query($query->toArray()));

        $this->assertSame(['limit' => 99, 'q' => [
            'foo' => 'bar',
            'or' => [
                'bar' => 'baz',
            ],
        ]], $query->toArray());
        $this->assertSame('limit=99&q[foo]=bar&q[or][bar]=baz', $queryString);
    }

    #[DataProvider('operationsProvider')]
    public function testQueryBuilderCanQueryWithOperators($operator, $queryParameter): void
    {
        $query = QueryBuilder::query()->where('foo', $operator, 'bar');
        $queryString = urldecode(http_build_query($query->toArray()));

        if ($operator === '=') {
            $this->assertSame("limit=99&q[foo]=bar", $queryString);
        } else {
            $this->assertSame("limit=99&q[foo][$queryParameter]=bar", $queryString);
        }
    }

    #[DataProvider('operationsProvider')]
    public function testQueryBuilderCanQueryOrWheresWithOperators($operator, $queryParameter): void
    {
        $query = QueryBuilder::query()
            ->where('foo', 'bar')
            ->orWhere('bar', $operator, 'baz');
        $queryString = urldecode(http_build_query($query->toArray()));

        if ($operator === '=') {
            $this->assertSame("limit=99&q[foo]=bar&q[or][bar]=baz", $queryString);
        } else {
            $this->assertSame("limit=99&q[foo]=bar&q[or][bar][$queryParameter]=baz", $queryString);
        }
    }

    public static function operationsProvider(): array
    {
        return [
            ['>=', 'ge'], // greater than or equals
            ['>', 'gt'], // greater than
            ['<=', 'le'], // less than or equals
            ['<', 'lt'], // less than
            ['IN', 'in'], // column with a value that matches one of the values in a comma separated list of values
            ['NOT IN', 'nin'], // same as above, but negating
            ['=', null], // default
        ];
    }
}
