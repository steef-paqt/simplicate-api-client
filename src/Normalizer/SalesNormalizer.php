<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Runtime\Normalizer\CheckArray;
use Paqtcom\Simplicate\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === \Paqtcom\Simplicate\Model\Sales::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === \Paqtcom\Simplicate\Model\Sales::class;
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Paqtcom\Simplicate\Model\Sales();
        if (\array_key_exists('expected_revenue', $data) && \is_int($data['expected_revenue'])) {
            $data['expected_revenue'] = (float) $data['expected_revenue'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('my_organization_profile_id', $data)) {
            $object->setMyOrganizationProfileId($data['my_organization_profile_id']);
        }
        if (\array_key_exists('organization_id', $data)) {
            $object->setOrganizationId($data['organization_id']);
        }
        if (\array_key_exists('person_id', $data)) {
            $object->setPersonId($data['person_id']);
        }
        if (\array_key_exists('contact_id', $data)) {
            $object->setContactId($data['contact_id']);
        }
        if (\array_key_exists('reason', $data)) {
            $object->setReason($this->denormalizer->denormalize($data['reason'], \Paqtcom\Simplicate\Model\SalesReason::class, 'json', $context));
        }
        if (\array_key_exists('contact', $data)) {
            $object->setContact($this->denormalizer->denormalize($data['contact'], \Paqtcom\Simplicate\Model\ContactPerson::class, 'json', $context));
        }
        if (\array_key_exists('subject', $data)) {
            $object->setSubject($data['subject']);
        }
        if (\array_key_exists('start_date', $data)) {
            $object->setStartDate($data['start_date']);
        }
        if (\array_key_exists('expected_closing_date', $data)) {
            $object->setExpectedClosingDate($data['expected_closing_date']);
        }
        if (\array_key_exists('expected_revenue', $data)) {
            $object->setExpectedRevenue($data['expected_revenue']);
        }
        if (\array_key_exists('note', $data)) {
            $object->setNote($data['note']);
        }
        if (\array_key_exists('chance_to_score', $data)) {
            $object->setChanceToScore($data['chance_to_score']);
        }
        if (\array_key_exists('lost_to_competitor', $data)) {
            $object->setLostToCompetitor($this->denormalizer->denormalize($data['lost_to_competitor'], \Paqtcom\Simplicate\Model\LostToCompetitor::class, 'json', $context));
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('myOrganizationProfileId') && null !== $object->getMyOrganizationProfileId()) {
            $data['my_organization_profile_id'] = $object->getMyOrganizationProfileId();
        }
        if ($object->isInitialized('organizationId') && null !== $object->getOrganizationId()) {
            $data['organization_id'] = $object->getOrganizationId();
        }
        if ($object->isInitialized('personId') && null !== $object->getPersonId()) {
            $data['person_id'] = $object->getPersonId();
        }
        if ($object->isInitialized('contactId') && null !== $object->getContactId()) {
            $data['contact_id'] = $object->getContactId();
        }
        if ($object->isInitialized('reason') && null !== $object->getReason()) {
            $data['reason'] = $this->normalizer->normalize($object->getReason(), 'json', $context);
        }
        if ($object->isInitialized('contact') && null !== $object->getContact()) {
            $data['contact'] = $this->normalizer->normalize($object->getContact(), 'json', $context);
        }
        if ($object->isInitialized('subject') && null !== $object->getSubject()) {
            $data['subject'] = $object->getSubject();
        }
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate();
        }
        if ($object->isInitialized('expectedClosingDate') && null !== $object->getExpectedClosingDate()) {
            $data['expected_closing_date'] = $object->getExpectedClosingDate();
        }
        if ($object->isInitialized('expectedRevenue') && null !== $object->getExpectedRevenue()) {
            $data['expected_revenue'] = $object->getExpectedRevenue();
        }
        if ($object->isInitialized('note') && null !== $object->getNote()) {
            $data['note'] = $object->getNote();
        }
        if ($object->isInitialized('chanceToScore') && null !== $object->getChanceToScore()) {
            $data['chance_to_score'] = $object->getChanceToScore();
        }
        if ($object->isInitialized('lostToCompetitor') && null !== $object->getLostToCompetitor()) {
            $data['lost_to_competitor'] = $this->normalizer->normalize($object->getLostToCompetitor(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Paqtcom\Simplicate\Model\Sales::class => false];
    }
}
