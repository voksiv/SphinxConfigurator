<?php
/**
 * @author: Viskov Sergey
 * @date: 3/18/16
 * @time: 5:11 PM
 */

namespace LTDBeget\sphinx\configurator\configurationEntities\base;


use LTDBeget\sphinx\configurator\Configuration;
use LTDBeget\sphinx\configurator\configurationEntities\Option;
use LTDBeget\sphinx\enums\base\eOption;
use LTDBeget\sphinx\enums\eSection;
use LTDBeget\sphinx\informer\Informer;
use ReflectionClass;

/**
 * Class Section
 * @package LTDBeget\sphinx\configurator\configurationEntities\base
 * @method Option addOption(eOption $name, string $value)
 */
abstract class Section
{
    /**
     * @var Configuration
     */
    private $configuration;

    /**
     * @var eSection
     */
    private $type;

    /**
     * @var Option[]
     */
    private $options = [];

    /**
     * @var boolean
     */
    private $isDeleted = false;

    /**
     * Section constructor.
     * @param Configuration $configuration
     */
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function className() : string
    {
        return get_called_class();
    }

    /**
     * @return eSection
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    final public function getType() : eSection
    {
        if (null === $this->type) {
            $this->initType();
        }

        return $this->type;
    }

    /**
     * @return Configuration
     */
    final public function getConfiguration() : Configuration
    {
        return $this->configuration;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        try {
            $string = (string) $this->getType();
        } catch (\Exception $e) {
            $string = '';
        }
        
        return $string;
    }

    /**
     * @return Option[]
     */
    final public function iterateOptions()
    {
        foreach ($this->options as $option) {
            if (is_array($option)) {
                foreach ($option as $multiOption) {
                    /**
                     * @var Option $multiOption
                     */
                    if(! $multiOption->isDeleted()) {
                        yield $multiOption;
                    }

                }
            } else {
                if(! $option->isDeleted()) {
                    yield $option;
                }
            }

        }
    }

    /**
     * mark section as deleted
     */
    public function delete()
    {
        $this->isDeleted = true;
    }

    /**
     * is option marked as deleted
     * @return bool
     */
    final public function isDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * @param eOption $name
     * @param string $value
     * @return Option
     * @throws \LogicException
     * @throws \InvalidArgumentException
     * @throws \LTDBeget\sphinx\informer\exceptions\InformerRuntimeException
     */
    final protected function addOptionInternal(eOption $name, string $value) : Option
    {
        $option = $this->createOption($name, $value);
        $option_name = (string) $option->getName();

        if ($option->isMultiValue()) {
            $this->options[$option_name] = $this->options[$option_name] ?? [];
            /** @noinspection OffsetOperationsInspection */
            $this->options[$option_name][] = $option;
        } else {
            $this->options[$option_name] = $option;
        }

        return $option;
    }

    /**
     * @return Informer
     */
    protected function getInformer() : Informer
    {
        return $this
            ->getConfiguration()
            ->getInformer();
    }

    /**
     * @internal
     * @return string
     */
    private function shortClassName() : string
    {
        return (new ReflectionClass($this->className()))->getShortName();
    }

    /**
     * @internal
     * @param eOption $name
     * @param string $value
     * @return Option
     * @throws \LogicException
     * @throws \InvalidArgumentException
     * @throws \LTDBeget\sphinx\informer\exceptions\InformerRuntimeException
     */
    final private function createOption(eOption $name, string $value)
    {
        $informer = $this->getInformer();
        $isMultiValue = $informer->getOptionInfo($this->getType(), $name)->isIsMultiValue();

        return new Option($this, $name, $value, $isMultiValue);
    }

    /**
     * @internal
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    private function initType()
    {
        $this->type = eSection::get(strtolower($this->shortClassName()));
    }
}