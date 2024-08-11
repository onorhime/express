<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Plan extends \App\Entity\Plan implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'amount' => [parent::class, 'amount', null],
        "\0".parent::class."\0".'complete' => [parent::class, 'complete', null],
        "\0".parent::class."\0".'enddate' => [parent::class, 'enddate', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'interest' => [parent::class, 'interest', null],
        "\0".parent::class."\0".'name' => [parent::class, 'name', null],
        "\0".parent::class."\0".'startdate' => [parent::class, 'startdate', null],
        "\0".parent::class."\0".'user' => [parent::class, 'user', null],
        'amount' => [parent::class, 'amount', null],
        'complete' => [parent::class, 'complete', null],
        'enddate' => [parent::class, 'enddate', null],
        'id' => [parent::class, 'id', null],
        'interest' => [parent::class, 'interest', null],
        'name' => [parent::class, 'name', null],
        'startdate' => [parent::class, 'startdate', null],
        'user' => [parent::class, 'user', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
