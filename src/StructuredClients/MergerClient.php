<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Psr\Http\Message\ResponseInterface;

class MergerClient extends AbstractStructuredClient
{
    public function postCompareOrganization(Model\PostMergerCompare $body): ResponseInterface|Model\RestResultMergerCompare|null
    {
        return $this->client->postMergerCompareorganization($body);
    }

    public function postComparePerson(Model\PostMergerCompare $body): ResponseInterface|Model\RestResultMergerCompare|null
    {
        return $this->client->postMergerCompareperson($body);
    }

    public function postMergeOrganization(Model\PostMerger $body): Model\ResultMergerMerge|ResponseInterface|null
    {
        return $this->client->postCrmMergeorganization($body);
    }

    public function postMergePerson(Model\PostMerger $body): Model\ResultMergerMerge|ResponseInterface|null
    {
        return $this->client->postCrmMergeperson($body);
    }
}
