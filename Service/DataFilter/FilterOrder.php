<?php

namespace Repregid\ApiBundle\Service\DataFilter;


/**
 * Class FilterOrder
 * @package Repregid\ApiBundle\Service\DataFilter
 */
class FilterOrder
{
    const ORDER_ASC     = 'ASC';
    const ORDER_DESC    = 'DESC';

    /**
     * @var string
     */
    protected $field;

    /**
     * @var string
     */
    protected $order;

    /**
     * @var string
     */
    protected $alias;

    /**
     * FilterOrder constructor.
     * @param string $field
     * @param string $order
     */
    public function __construct(string $field, string $order = self::ORDER_ASC)
    {
        $this->field = $field;
        $this->order = $order;
    }

    /**
     * @param string $field
     * @return FilterOrder
     */
    public function setField(string $field): FilterOrder
    {
        $this->field = $field;

        return $this;
    }

    /**
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }

    /**
     * @param string $order
     * @return FilterOrder
     */
    public function setOrder(string $order): FilterOrder
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrder(): string
    {
        return $this->order;
    }

    /**
     * @return null|string
     */
    public function getAlias(): ?string
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     * @return $this
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }
}