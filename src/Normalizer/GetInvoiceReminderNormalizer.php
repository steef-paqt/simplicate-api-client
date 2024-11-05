<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\GetInvoiceReminder;
use Paqtcom\Simplicate\Model\ReminderSet;
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

class GetInvoiceReminderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === GetInvoiceReminder::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === GetInvoiceReminder::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetInvoiceReminder();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('set', $data)) {
            $object->setSet($this->denormalizer->denormalize($data['set'], ReminderSet::class, 'json', $context));
        }
        if (array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (array_key_exists('paused', $data)) {
            $object->setPaused($data['paused']);
        }
        if (array_key_exists('next_action', $data)) {
            $object->setNextAction($data['next_action']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('set') && null !== $object->getSet()) {
            $data['set'] = $this->normalizer->normalize($object->getSet(), 'json', $context);
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('paused') && null !== $object->getPaused()) {
            $data['paused'] = $object->getPaused();
        }
        if ($object->isInitialized('nextAction') && null !== $object->getNextAction()) {
            $data['next_action'] = $object->getNextAction();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [GetInvoiceReminder::class => false];
    }
}
