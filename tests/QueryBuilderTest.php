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
        $queryString = $this->getQueryString($query);

        $this->assertSame(['limit' => 99], $query->toArray());
        $this->assertSame('limit=99', $queryString);
    }

    public function testQueryBuilderCanQuery(): void
    {
        $query = QueryBuilder::query()->where('foo', 'bar')->where('bar', 'baz');
        $queryString = $this->getQueryString($query);

        $this->assertSame(['limit' => 99, 'q' => [
            'foo' => 'bar',
            'bar' => 'baz',
        ]], $query->toArray());
        $this->assertSame('limit=99&q[foo]=bar&q[bar]=baz', $queryString);
    }

    public function testQueryBuilderCanQueryWithOrs(): void
    {
        $query = QueryBuilder::query()->where('foo', 'bar')->orWhere('bar', 'baz');
        $queryString = $this->getQueryString($query);

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
        $queryString = $this->getQueryString($query);

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
        $queryString = $this->getQueryString($query);

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
        $queryString = $this->getQueryString($query);

        if ($operator === '=') {
            $this->assertSame("limit=99&q[foo]=bar&q[or][bar]=baz", $queryString);
        } else {
            $this->assertSame("limit=99&q[foo]=bar&q[or][bar][$queryParameter]=baz", $queryString);
        }
    }

    public function testQueryBuilderCanQueryWithInOperator(): void
    {
        $query = QueryBuilder::query()->whereIn('foo', ['bar', 'baz']);
        $queryString = $this->getQueryString($query);

        $this->assertSame("limit=99&q[foo][in]=bar,baz", $queryString);
    }

    public function testQueryBuilderCanQueryWithNotInOperator(): void
    {
        $query = QueryBuilder::query()->whereNotIn('foo', ['bar', 'baz']);
        $queryString = $this->getQueryString($query);

        $this->assertSame("limit=99&q[foo][nin]=bar,baz", $queryString);
    }

    public function testQueryBuilderCanQueryWithOrInOperator(): void
    {
        $query = QueryBuilder::query()->orWhereIn('foo', ['bar', 'baz']);
        $queryString = $this->getQueryString($query);

        $this->assertSame("limit=99&q[foo][or][in]=bar,baz", $queryString);
    }

    public function testQueryBuilderCanQueryWithOrNotInOperator(): void
    {
        $query = QueryBuilder::query()->orWhereNotIn('foo', ['bar', 'baz']);
        $queryString = $this->getQueryString($query);

        $this->assertSame("limit=99&q[foo][or][nin]=bar,baz", $queryString);
    }

    public static function operationsProvider(): array
    {
        return [
            ['>=', 'ge'], // greater than or equals
            ['>', 'gt'], // greater than
            ['<=', 'le'], // less than or equals
            ['<', 'lt'], // less than
            ['=', null], // default
        ];
    }

    public static function inOperationsProvider(): array
    {
        return [
            ['IN', 'in'], // column with a value that matches one of the values in a comma separated list of values
            ['NOT IN', 'nin'], // same as above, but negating
        ];
    }

    private function getQueryString(QueryBuilder $query): string
    {
        return urldecode(http_build_query($query->toArray()));
    }
}
