<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf95d9 = null;
    private $initializerd8e28 = null;
    private static $publicProperties2217a = [
        
    ];
    public function getConnection()
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'getConnection', array(), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'getMetadataFactory', array(), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'getExpressionBuilder', array(), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'beginTransaction', array(), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'getCache', array(), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->getCache();
    }
    public function transactional($func)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'transactional', array('func' => $func), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'commit', array(), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->commit();
    }
    public function rollback()
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'rollback', array(), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'getClassMetadata', array('className' => $className), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'createQuery', array('dql' => $dql), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'createNamedQuery', array('name' => $name), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'createQueryBuilder', array(), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'flush', array('entity' => $entity), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'clear', array('entityName' => $entityName), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->clear($entityName);
    }
    public function close()
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'close', array(), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->close();
    }
    public function persist($entity)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'persist', array('entity' => $entity), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'remove', array('entity' => $entity), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'refresh', array('entity' => $entity), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'detach', array('entity' => $entity), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'merge', array('entity' => $entity), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'contains', array('entity' => $entity), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'getEventManager', array(), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'getConfiguration', array(), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'isOpen', array(), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'getUnitOfWork', array(), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'getProxyFactory', array(), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'initializeObject', array('obj' => $obj), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'getFilters', array(), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'isFiltersStateClean', array(), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'hasFilters', array(), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return $this->valueHolderf95d9->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerd8e28 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderf95d9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf95d9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderf95d9->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, '__get', ['name' => $name], $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        if (isset(self::$publicProperties2217a[$name])) {
            return $this->valueHolderf95d9->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf95d9;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf95d9;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf95d9;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf95d9;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, '__isset', array('name' => $name), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf95d9;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderf95d9;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, '__unset', array('name' => $name), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf95d9;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderf95d9;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, '__clone', array(), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        $this->valueHolderf95d9 = clone $this->valueHolderf95d9;
    }
    public function __sleep()
    {
        $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, '__sleep', array(), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
        return array('valueHolderf95d9');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd8e28 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd8e28;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerd8e28 && ($this->initializerd8e28->__invoke($valueHolderf95d9, $this, 'initializeProxy', array(), $this->initializerd8e28) || 1) && $this->valueHolderf95d9 = $valueHolderf95d9;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf95d9;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf95d9;
    }
}
