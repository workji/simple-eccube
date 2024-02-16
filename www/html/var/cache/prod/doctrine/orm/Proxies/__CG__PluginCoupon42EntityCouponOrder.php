<?php

namespace Proxies\__CG__\Plugin\Coupon42\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CouponOrder extends \Plugin\Coupon42\Entity\CouponOrder implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'id', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'coupon_id', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'coupon_cd', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'coupon_name', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'user_id', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'email', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'order_id', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'pre_order_id', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'order_date', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'order_item_id', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'discount', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'visible', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'order_change_status', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'create_date', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'update_date'];
        }

        return ['__isInitialized__', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'id', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'coupon_id', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'coupon_cd', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'coupon_name', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'user_id', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'email', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'order_id', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'pre_order_id', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'order_date', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'order_item_id', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'discount', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'visible', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'order_change_status', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'create_date', '' . "\0" . 'Plugin\\Coupon42\\Entity\\CouponOrder' . "\0" . 'update_date'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CouponOrder $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCouponId($couponId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCouponId', [$couponId]);

        return parent::setCouponId($couponId);
    }

    /**
     * {@inheritDoc}
     */
    public function getCouponId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCouponId', []);

        return parent::getCouponId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCouponCd($couponCd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCouponCd', [$couponCd]);

        return parent::setCouponCd($couponCd);
    }

    /**
     * {@inheritDoc}
     */
    public function getCouponCd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCouponCd', []);

        return parent::getCouponCd();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserId($userId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserId', [$userId]);

        return parent::setUserId($userId);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserId', []);

        return parent::getUserId();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderId($orderId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderId', [$orderId]);

        return parent::setOrderId($orderId);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderId', []);

        return parent::getOrderId();
    }

    /**
     * {@inheritDoc}
     */
    public function setPreOrderId($preOrderId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreOrderId', [$preOrderId]);

        return parent::setPreOrderId($preOrderId);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreOrderId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreOrderId', []);

        return parent::getPreOrderId();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderDate($orderDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderDate', [$orderDate]);

        return parent::setOrderDate($orderDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderDate', []);

        return parent::getOrderDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiscount($discount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiscount', [$discount]);

        return parent::setDiscount($discount);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiscount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiscount', []);

        return parent::getDiscount();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisible($visible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisible', [$visible]);

        return parent::setVisible($visible);
    }

    /**
     * {@inheritDoc}
     */
    public function isVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isVisible', []);

        return parent::isVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreateDate($createDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateDate', [$createDate]);

        return parent::setCreateDate($createDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateDate', []);

        return parent::getCreateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateDate($updateDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateDate', [$updateDate]);

        return parent::setUpdateDate($updateDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateDate', []);

        return parent::getUpdateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function getCouponName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCouponName', []);

        return parent::getCouponName();
    }

    /**
     * {@inheritDoc}
     */
    public function setCouponName($coupon_name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCouponName', [$coupon_name]);

        return parent::setCouponName($coupon_name);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderChangeStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderChangeStatus', []);

        return parent::getOrderChangeStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderChangeStatus($orderChangeStatus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderChangeStatus', [$orderChangeStatus]);

        return parent::setOrderChangeStatus($orderChangeStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderItemId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderItemId', []);

        return parent::getOrderItemId();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderItemId(int $order_item_id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderItemId', [$order_item_id]);

        return parent::setOrderItemId($order_item_id);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetExists($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetExists', [$offset]);

        return parent::offsetExists($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetSet($offset, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetSet', [$offset, $value]);

        return parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetGet($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetGet', [$offset]);

        return parent::offsetGet($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetUnset($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetUnset', [$offset]);

        return parent::offsetUnset($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function setPropertiesFromArray(array $arrProps, array $excludeAttribute = [], \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPropertiesFromArray', [$arrProps, $excludeAttribute, $parentClass]);

        return parent::setPropertiesFromArray($arrProps, $excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(array $excludeAttribute = ['__initializer__', '__cloner__', '__isInitialized__'], \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', [$excludeAttribute, $parentClass]);

        return parent::toArray($excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toNormalizedArray(array $excludeAttribute = ['__initializer__', '__cloner__', '__isInitialized__'])
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toNormalizedArray', [$excludeAttribute]);

        return parent::toNormalizedArray($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toJSON(array $excludeAttribute = ['__initializer__', '__cloner__', '__isInitialized__'])
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toJSON', [$excludeAttribute]);

        return parent::toJSON($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toXML(array $excludeAttribute = ['__initializer__', '__cloner__', '__isInitialized__'])
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toXML', [$excludeAttribute]);

        return parent::toXML($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function copyProperties($srcObject, array $excludeAttribute = [])
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'copyProperties', [$srcObject, $excludeAttribute]);

        return parent::copyProperties($srcObject, $excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityIdentifierAsArray(\Eccube\Entity\AbstractEntity $Entity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityIdentifierAsArray', [$Entity]);

        return parent::getEntityIdentifierAsArray($Entity);
    }

}