<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\ExternalItemMetadataConfiguration;
use Paqtcom\Simplicate\Runtime\Normalizer\CheckArray;
use Paqtcom\Simplicate\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use function array_key_exists;
use function is_array;

class ExternalItemMetadataConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === ExternalItemMetadataConfiguration::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === ExternalItemMetadataConfiguration::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ExternalItemMetadataConfiguration();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('employee_id', $data)) {
            $object->setEmployeeId($data['employee_id']);
        }
        if (array_key_exists('has_external_agenda_integration', $data)) {
            $object->setHasExternalAgendaIntegration($data['has_external_agenda_integration']);
        }
        if (array_key_exists('external_agenda_sync_method', $data)) {
            $object->setExternalAgendaSyncMethod($data['external_agenda_sync_method']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('employeeId') && null !== $object->getEmployeeId()) {
            $data['employee_id'] = $object->getEmployeeId();
        }
        if ($object->isInitialized('hasExternalAgendaIntegration') && null !== $object->getHasExternalAgendaIntegration()) {
            $data['has_external_agenda_integration'] = $object->getHasExternalAgendaIntegration();
        }
        if ($object->isInitialized('externalAgendaSyncMethod') && null !== $object->getExternalAgendaSyncMethod()) {
            $data['external_agenda_sync_method'] = $object->getExternalAgendaSyncMethod();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ExternalItemMetadataConfiguration::class => false];
    }
}
