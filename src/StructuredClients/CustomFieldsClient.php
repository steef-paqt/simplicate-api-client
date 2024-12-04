<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Paqtcom\Simplicate\QueryBuilder;
use Psr\Http\Message\ResponseInterface;

class CustomFieldsClient extends AbstractStructuredClient
{
    public function getGroups(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultCustomFieldGroups|ResponseInterface|null
    {
        return $this->client->getCustomfieldsGroup($queryParameters->toArray());
    }

    public function deleteGroup(string $id): ?ResponseInterface
    {
        return $this->client->deleteCustomfieldsGroupById($id);
    }

    public function getGroup(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultCustomFieldGroup|ResponseInterface|null
    {
        return $this->client->getCustomfieldsGroupById($queryParameters->toArray());
    }

    public function postGroup(string $id, Model\CustomFieldGroup $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postCustomfieldsGroupById($id, $body);
    }

    public function putGroup(string $id, Model\CustomFieldGroup $body): ?ResponseInterface
    {
        return $this->client->putCustomfieldsGroupById($id, $body);
    }

    public function getModels(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultCustomFieldModels|ResponseInterface|null
    {
        return $this->client->getCustomfieldsModel($queryParameters->toArray());
    }

    public function getModel(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultCustomFieldModel|ResponseInterface|null
    {
        return $this->client->getCustomfieldsModelById($queryParameters->toArray());
    }

    public function getOptions(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultCustomFieldOptions|ResponseInterface|null
    {
        return $this->client->getCustomfieldsOption($queryParameters->toArray());
    }

    public function deleteOption(string $id): ?ResponseInterface
    {
        return $this->client->deleteCustomfieldsOptionById($id);
    }

    public function getOption(string $id, QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultCustomFieldOption|ResponseInterface|null
    {
        return $this->client->getCustomfieldsOptionById($id, $queryParameters->toArray());
    }

    public function postOption(Model\CustomFieldOption $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postCustomfieldsOptionById($body);
    }

    public function putOption(string $id, Model\CustomFieldOption $body): ?ResponseInterface
    {
        return $this->client->putCustomfieldsOptionById($id, $body);
    }

    public function getTypes(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultCustomFieldTypes|ResponseInterface|null
    {
        return $this->client->getCustomfieldsType($queryParameters->toArray());
    }

    public function getType(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultCustomFieldType|ResponseInterface|null
    {
        return $this->client->getCustomfieldsTypeById($queryParameters->toArray());
    }
}
