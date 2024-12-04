<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Paqtcom\Simplicate\Runtime\Normalizer\CheckArray;
use Paqtcom\Simplicate\Runtime\Normalizer\ReferenceNormalizer;
use Paqtcom\Simplicate\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    protected array $normalizers = [
        '\\' . Reference::class => '\\' . ReferenceNormalizer::class
    ];
    protected array $normalizersCache = [];
    protected array $supportedTypes = [];

    public function __construct()
    {
        $normalizers = $this->getClasses(__DIR__);
        $models = $this->getClasses(dirname(__DIR__) . '/Model');
        foreach ($models as $class => $model) {
            $normalizer = $class . 'Normalizer';
            if (str_starts_with($class, 'Abstract')) {
                continue;
            }
            if (!array_key_exists($normalizer, $normalizers)) {
                throw new \RuntimeException("Normalizer $normalizer not found for the $model model");
            }

            $this->normalizers[$model] = $normalizers[$normalizer];
            $this->supportedTypes[$model] = false;
        }
    }

    /**
     * @return array<string, string>
     */
    private function getClasses(string $directory): array
    {
        $allFiles = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($directory));
        $phpFiles = new \RegexIterator($allFiles, '/\.php$/');

        $classes = [];
        $rootNamespace = 'Paqtcom\Simplicate\\';
        foreach ($phpFiles as $file) {
            /** @var \SplFileInfo $file */
            $class = substr($file->getFilename(), 0, strrpos("{$file->getFilename()}", '.php'));
            $namespace = $rootNamespace
                . substr($file->getPath(), strrpos("/{$file->getPath()}", '/'))
                . '\\'
                . $class;
            $classes[$class] = $namespace;
        }

        return $classes;
    }

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists($data::class, $this->normalizers);
    }

    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $normalizerClass = $this->normalizers[$object::class];
        $normalizer = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($object, $format, $context);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];

        return $this->getNormalizer($denormalizerClass)->denormalize($data, $type, $format, $context);
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;

        return $normalizer;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return $this->supportedTypes;
    }
}
