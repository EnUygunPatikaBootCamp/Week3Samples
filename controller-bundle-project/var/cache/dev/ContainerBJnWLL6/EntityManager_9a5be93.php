<?php

namespace ContainerBJnWLL6;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderadb6f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6f43a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5cae6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'getConnection', array(), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'getMetadataFactory', array(), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'getExpressionBuilder', array(), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'beginTransaction', array(), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'getCache', array(), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'transactional', array('func' => $func), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'commit', array(), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->commit();
    }

    public function rollback()
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'rollback', array(), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'getClassMetadata', array('className' => $className), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'createQuery', array('dql' => $dql), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'createNamedQuery', array('name' => $name), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'createQueryBuilder', array(), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'flush', array('entity' => $entity), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'clear', array('entityName' => $entityName), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->clear($entityName);
    }

    public function close()
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'close', array(), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->close();
    }

    public function persist($entity)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'persist', array('entity' => $entity), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'remove', array('entity' => $entity), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'refresh', array('entity' => $entity), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'detach', array('entity' => $entity), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'merge', array('entity' => $entity), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'contains', array('entity' => $entity), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'getEventManager', array(), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'getConfiguration', array(), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'isOpen', array(), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'getUnitOfWork', array(), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'getProxyFactory', array(), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'initializeObject', array('obj' => $obj), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'getFilters', array(), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'isFiltersStateClean', array(), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'hasFilters', array(), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return $this->valueHolderadb6f->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer6f43a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderadb6f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderadb6f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderadb6f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, '__get', ['name' => $name], $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        if (isset(self::$publicProperties5cae6[$name])) {
            return $this->valueHolderadb6f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderadb6f;

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

        $targetObject = $this->valueHolderadb6f;
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
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderadb6f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderadb6f;
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
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, '__isset', array('name' => $name), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderadb6f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderadb6f;
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
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, '__unset', array('name' => $name), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderadb6f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderadb6f;
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
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, '__clone', array(), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        $this->valueHolderadb6f = clone $this->valueHolderadb6f;
    }

    public function __sleep()
    {
        $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, '__sleep', array(), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;

        return array('valueHolderadb6f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6f43a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6f43a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6f43a && ($this->initializer6f43a->__invoke($valueHolderadb6f, $this, 'initializeProxy', array(), $this->initializer6f43a) || 1) && $this->valueHolderadb6f = $valueHolderadb6f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderadb6f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderadb6f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
