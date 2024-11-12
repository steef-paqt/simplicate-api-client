<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Psr\Http\Message\ResponseInterface;

class CustomFieldsClient extends AbstractStructuredClient
{
    public function getGroups(array $queryParameters = []): Model\RestResultCustomFieldGroups|ResponseInterface|null
    {
        return $this->client->getCustomfieldsGroup($queryParameters);
    }

    public function deleteGroup(string $id): ?ResponseInterface
    {
        return $this->client->deleteCustomfieldsGroupById($id);
    }

    public function getGroup(array $queryParameters = []): Model\RestResultCustomFieldGroup|ResponseInterface|null
    {
        return $this->client->getCustomfieldsGroupById($queryParameters);
    }

    public function postGroup(string $id, Model\CustomFieldGroup $body): ?ResponseInterface
    {
        return $this->client->postCustomfieldsGroupById($id, $body);
    }

    public function putGroup(string $id, Model\CustomFieldGroup $body): ?ResponseInterface
    {
        return $this->client->putCustomfieldsGroupById($id, $body);
    }

    public function getModels(array $queryParameters = []): Model\RestResultCustomFieldModels|ResponseInterface|null
    {
        return $this->client->getCustomfieldsModel($queryParameters);
    }

    public function getModel(array $queryParameters = []): Model\RestResultCustomFieldModel|ResponseInterface|null
    {
        return $this->client->getCustomfieldsModelById($queryParameters);
    }

    public function getOptions(array $queryParameters = []): Model\RestResultCustomFieldOptions|ResponseInterface|null
    {
        return $this->client->getCustomfieldsOption($queryParameters);
    }

    public function deleteOption(string $id): ?ResponseInterface
    {
        return $this->client->deleteCustomfieldsOptionById($id);
    }

    public function getOption(string $id, array $queryParameters = []): Model\RestResultCustomFieldOption|ResponseInterface|null
    {
        return $this->client->getCustomfieldsOptionById($id, $queryParameters);
    }

    public function postOption(Model\CustomFieldOption $body): ?ResponseInterface
    {
        return $this->client->postCustomfieldsOptionById($body);
    }

    public function putOption(string $id, Model\CustomFieldOption $body): ?ResponseInterface
    {
        return $this->client->putCustomfieldsOptionById($id, $body);
    }

    public function getTypes(array $queryParameters = []): Model\RestResultCustomFieldTypes|ResponseInterface|null
    {
        return $this->client->getCustomfieldsType($queryParameters);
    }

    public function getType(array $queryParameters = []): Model\RestResultCustomFieldType|ResponseInterface|null
    {
        return $this->client->getCustomfieldsTypeById($queryParameters);
    }
}
