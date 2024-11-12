<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate;

use Paqtcom\Simplicate\StructuredClients\CostsClient;
use Paqtcom\Simplicate\StructuredClients\CrmClient;
use Paqtcom\Simplicate\StructuredClients\CustomFieldsClient;
use Paqtcom\Simplicate\StructuredClients\DocumentsClient;
use Paqtcom\Simplicate\StructuredClients\HrmClient;
use Paqtcom\Simplicate\StructuredClients\MileageClient;
use Paqtcom\Simplicate\StructuredClients\ProjectsClient;
use Paqtcom\Simplicate\StructuredClients\SalesClient;
use Paqtcom\Simplicate\StructuredClients\ServicesClient;
use Paqtcom\Simplicate\StructuredClients\SharedClient;
use Paqtcom\Simplicate\StructuredClients\TimelineClient;
use Paqtcom\Simplicate\StructuredClients\TimersClient;
use Paqtcom\Simplicate\StructuredClients\UploadClient;

class StructuredClient
{
    public function __construct(private readonly Client $client)
    {
    }

    public function costs(): CostsClient
    {
        return new CostsClient($this->client);
    }

    public function crm(): CrmClient
    {
        return new CrmClient($this->client);
    }

    public function customFields(): CustomFieldsClient
    {
        return new CustomFieldsClient($this->client);
    }

    public function documents(): DocumentsClient
    {
        return new DocumentsClient($this->client);
    }

    public function hrm(): HrmClient
    {
        return new HrmClient($this->client);
    }

    public function mileages(): MileageClient
    {
        return new MileageClient($this->client);
    }

    public function projects(): ProjectsClient
    {
        return new ProjectsClient($this->client);
    }

    public function sales(): SalesClient
    {
        return new SalesClient($this->client);
    }

    public function services(): ServicesClient
    {
        return new ServicesClient($this->client);
    }

    public function shared(): SharedClient
    {
        return new SharedClient($this->client);
    }

    public function timelines(): TimelineClient
    {
        return new TimelineClient($this->client);
    }

    public function timers(): TimersClient
    {
        return new TimersClient($this->client);
    }

    public function uploads(): UploadClient
    {
        return new UploadClient($this->client);
    }
}
