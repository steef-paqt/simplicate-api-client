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
            '=' => null, // default
            '>=' => 'ge', // greater than or equals
            '>' => 'gt', // greater than
            '<=' => 'le', // less than or equals
            '<' => 'lt', // less than
            'IN' => 'in', // column with a value that matches one of the values in a comma separated list of values
            'NOT IN' => 'nin', // same as above, but negating
        ];
        if (!array_key_exists(strtoupper($operator), $operators)) {
            throw new \UnexpectedValueException('operator is not valid: ' . $operator);
        }

        return $operators[strtoupper($operator)];
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
