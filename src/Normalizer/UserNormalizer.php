<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Model\Country;
use Paqtcom\Simplicate\Model\Right;
use Paqtcom\Simplicate\Model\Timezone;
use Paqtcom\Simplicate\Model\User;
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

class UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === User::class;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && $data::class === User::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new User();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('username', $data)) {
            $object->setUsername($data['username']);
        }
        if (array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (array_key_exists('gender', $data)) {
            $object->setGender($data['gender']);
        }
        if (array_key_exists('initials', $data)) {
            $object->setInitials($data['initials']);
        }
        if (array_key_exists('first_name', $data)) {
            $object->setFirstName($data['first_name']);
        }
        if (array_key_exists('family_name_prefix', $data)) {
            $object->setFamilyNamePrefix($data['family_name_prefix']);
        }
        if (array_key_exists('family_name', $data)) {
            $object->setFamilyName($data['family_name']);
        }
        if (array_key_exists('birthdate', $data)) {
            $object->setBirthdate($data['birthdate']);
        }
        if (array_key_exists('is_authy_enabled', $data)) {
            $object->setIsAuthyEnabled($data['is_authy_enabled']);
        }
        if (array_key_exists('is_employee', $data)) {
            $object->setIsEmployee($data['is_employee']);
        }
        if (array_key_exists('is_light_user', $data)) {
            $object->setIsLightUser($data['is_light_user']);
        }
        if (array_key_exists('employee_id', $data)) {
            $object->setEmployeeId($data['employee_id']);
        }
        if (array_key_exists('person_id', $data)) {
            $object->setPersonId($data['person_id']);
        }
        if (array_key_exists('is_blocked', $data)) {
            $object->setIsBlocked($data['is_blocked']);
        }
        if (array_key_exists('is_lock_nav', $data)) {
            $object->setIsLockNav($data['is_lock_nav']);
        }
        if (array_key_exists('key_identifier', $data)) {
            $object->setKeyIdentifier($data['key_identifier']);
        }
        if (array_key_exists('timezone', $data)) {
            $object->setTimezone($this->denormalizer->denormalize($data['timezone'], Timezone::class, 'json', $context));
        }
        if (array_key_exists('country', $data)) {
            $object->setCountry($this->denormalizer->denormalize($data['country'], Country::class, 'json', $context));
        }
        if (array_key_exists('hours_view_mode', $data)) {
            $object->setHoursViewMode($data['hours_view_mode']);
        }
        if (array_key_exists('is_account_owner', $data)) {
            $object->setIsAccountOwner($data['is_account_owner']);
        }
        if (array_key_exists('has_external_agenda_integration', $data)) {
            $object->setHasExternalAgendaIntegration($data['has_external_agenda_integration']);
        }
        if (array_key_exists('rights', $data)) {
            $values = [];
            foreach ($data['rights'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, Right::class, 'json', $context);
            }
            $object->setRights($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('username') && null !== $object->getUsername()) {
            $data['username'] = $object->getUsername();
        }
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('gender') && null !== $object->getGender()) {
            $data['gender'] = $object->getGender();
        }
        if ($object->isInitialized('initials') && null !== $object->getInitials()) {
            $data['initials'] = $object->getInitials();
        }
        if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
            $data['first_name'] = $object->getFirstName();
        }
        if ($object->isInitialized('familyNamePrefix') && null !== $object->getFamilyNamePrefix()) {
            $data['family_name_prefix'] = $object->getFamilyNamePrefix();
        }
        if ($object->isInitialized('familyName') && null !== $object->getFamilyName()) {
            $data['family_name'] = $object->getFamilyName();
        }
        if ($object->isInitialized('birthdate') && null !== $object->getBirthdate()) {
            $data['birthdate'] = $object->getBirthdate();
        }
        if ($object->isInitialized('isAuthyEnabled') && null !== $object->getIsAuthyEnabled()) {
            $data['is_authy_enabled'] = $object->getIsAuthyEnabled();
        }
        if ($object->isInitialized('isEmployee') && null !== $object->getIsEmployee()) {
            $data['is_employee'] = $object->getIsEmployee();
        }
        if ($object->isInitialized('isLightUser') && null !== $object->getIsLightUser()) {
            $data['is_light_user'] = $object->getIsLightUser();
        }
        if ($object->isInitialized('employeeId') && null !== $object->getEmployeeId()) {
            $data['employee_id'] = $object->getEmployeeId();
        }
        if ($object->isInitialized('personId') && null !== $object->getPersonId()) {
            $data['person_id'] = $object->getPersonId();
        }
        if ($object->isInitialized('isBlocked') && null !== $object->getIsBlocked()) {
            $data['is_blocked'] = $object->getIsBlocked();
        }
        if ($object->isInitialized('isLockNav') && null !== $object->getIsLockNav()) {
            $data['is_lock_nav'] = $object->getIsLockNav();
        }
        if ($object->isInitialized('keyIdentifier') && null !== $object->getKeyIdentifier()) {
            $data['key_identifier'] = $object->getKeyIdentifier();
        }
        if ($object->isInitialized('timezone') && null !== $object->getTimezone()) {
            $data['timezone'] = $this->normalizer->normalize($object->getTimezone(), 'json', $context);
        }
        if ($object->isInitialized('country') && null !== $object->getCountry()) {
            $data['country'] = $this->normalizer->normalize($object->getCountry(), 'json', $context);
        }
        if ($object->isInitialized('hoursViewMode') && null !== $object->getHoursViewMode()) {
            $data['hours_view_mode'] = $object->getHoursViewMode();
        }
        if ($object->isInitialized('isAccountOwner') && null !== $object->getIsAccountOwner()) {
            $data['is_account_owner'] = $object->getIsAccountOwner();
        }
        if ($object->isInitialized('hasExternalAgendaIntegration') && null !== $object->getHasExternalAgendaIntegration()) {
            $data['has_external_agenda_integration'] = $object->getHasExternalAgendaIntegration();
        }
        if ($object->isInitialized('rights') && null !== $object->getRights()) {
            $values = [];
            foreach ($object->getRights() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['rights'] = $values;
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [User::class => false];
    }
}
