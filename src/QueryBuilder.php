<?php

namespace Paqtcom\Simplicate;

class QueryBuilder
{
    private array $query = [];

    public function __construct(
        public int $offset = 0, // https://developer.simplicate.com/getting-started#pagination
        public int $limit = 99,
        public array $select = [], // https://developer.simplicate.com/getting-started#filtering
        public ?string $sort = null // https://developer.simplicate.com/getting-started#sorting
    ) {
    }

    public static function query(
        int $offset = 0, // https://developer.simplicate.com/getting-started#pagination
        int $limit = 99,
        array $select = [], // https://developer.simplicate.com/getting-started#filtering
        ?string $sort = null // https://developer.simplicate.com/getting-started#sorting
    ): self {
        return new self($offset, $limit, $select, $sort);
    }

    public function where(string $key, string $operatorOrValue, string $value = null): self
    {
        $this->query[$key] = $this->getValue($operatorOrValue, $value);

        return $this;
    }

    public function orWhere(string $key, string $operatorOrValue, string $value = null): self
    {
        $this->query['or'][$key] = $this->getValue($operatorOrValue, $value);

        return $this;
    }

    /**
     * Column with a value that matches one of the values in a comma separated list of values.
     */
    public function whereIn(string $key, array $value): self
    {
        $this->query[$key]['IN'] = implode(',', $value);

        return $this;
    }

    /**
     * Column with a value that does not match none of the values in a comma separated list of values.
     */
    public function whereNotIn(string $key, array $value): self
    {
        $this->query[$key]['NIN'] = implode(',', $value);

        return $this;
    }

    /**
     * Column with a value that matches one of the values in a comma separated list of values.
     */
    public function orWhereIn(string $key, array $value): self
    {
        $this->query[$key]['or']['IN'] = implode(',', $value);

        return $this;
    }

    /**
     * Column with a value that does not match none of the values in a comma separated list of values.
     */
    public function orWhereNotIn(string $key, array $value): self
    {
        $this->query[$key]['or']['NIN'] = implode(',', $value);

        return $this;
    }

    /**
     * @return array<string, int|string>
     */
    public function toArray(): array
    {
        $params = [
            'limit' => $this->limit,
        ];
        if ($this->offset > 0) {
            $params['offset'] = $this->offset;
        }
        if ($this->select) {
            $params['select'] = implode(',', $this->select);
        }
        if ($this->sort) {
            $params['sort'] = $this->sort;
        }
        if ($query = $this->buildQuery()) {
            $params['q'] = $query;
        }

        return $params;
    }

    private function buildQuery(): ?array
    {
        if (!$this->query) {
            return null;
        }
        $query = $this->query;
        if (count($query) === 1 && isset($query['or'])) {
            $query[key($query['or'])] = array_shift($query['or']);
            $query = array_reverse($query, true);
        }

        return $query;
    }

    private function getOperator(string $operator): ?string
    {
        $operators = [
            '='  => null, // default
            '>=' => 'ge', // greater than or equals
            '>'  => 'gt', // greater than
            '<=' => 'le', // less than or equals
            '<'  => 'lt', // less than
        ];
        if (!array_key_exists($operator, $operators)) {
            throw new \UnexpectedValueException('operator is not valid: ' . $operator);
        }

        return $operators[$operator];
    }

    private function getValue(string $operatorOrValue, ?string $value): string|array
    {
        if (is_null($value) || $operatorOrValue === '=') {
            return $operatorOrValue === '=' && is_string($value)
                ? $value
                : $operatorOrValue;
        }

        $operatorKey = $this->getOperator($operatorOrValue);

        return [$operatorKey => $value];
    }
}
