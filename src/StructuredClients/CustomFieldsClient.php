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

    public function getGroup(string $id): Model\RestResultCustomFieldGroup|ResponseInterface|null
    {
        return $this->client->getCustomfieldsGroupById($id);
    }

    public function postGroup(string $id, Model\CustomFieldGroup $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postCustomfieldsGroupById($id, $body);
    }

    public function putGroup(string $id, Model\CustomFieldGroup $body): Model\RestPutResult|ResponseInterface|null
    {
        return $this->client->putCustomfieldsGroupById($id, $body);
    }

    public function getModels(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultCustomFieldModels|ResponseInterface|null
    {
        return $this->client->getCustomfieldsModel($queryParameters->toArray());
    }

    public function getModel(string $id): Model\RestResultCustomFieldModel|ResponseInterface|null
    {
        return $this->client->getCustomfieldsModelById($id);
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

    public function putOption(string $id, Model\CustomFieldOption $body): Model\RestPutResult|ResponseInterface|null
    {
        return $this->client->putCustomfieldsOptionById($id, $body);
    }

    public function getTypes(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultCustomFieldTypes|ResponseInterface|null
    {
        return $this->client->getCustomfieldsType($queryParameters->toArray());
    }

    public function getType(string $id): Model\RestResultCustomFieldType|ResponseInterface|null
    {
        return $this->client->getCustomfieldsTypeById($id);
    }
}
