<?php

// It is used to turn a foreign interface into a common interface.

// The below code get data from a database, we do not know which database.

class Storage
{
    private $source;

    public function __constructor(AdapterInterface $source)
    {
        $this->source = $source;
    }
    public function getOne(int $id): ?object
    {
        return $this->source->find($id);
    }

    public function getAll(array $criteria = []): Collection
    {
        return $this->source->findAll($criteria);
    }
}

// An adapter with generic function to get one or many data is created

interface AdapterInterface
{
    public function find(int $id): ?object;
    public function findAll(array $criteria = []): Collection;
}

// Then for example we decided to implement MySQL

class MySqlAdapter implements AdapterInterface
{
    // We use the mysql function to get one or many data

    public function find(int $id): ?object
    {
        $data = $this->mysql->fetchRow(['id' => $id]);
        // some data transformation
    }
    public function findAll(array $criteria = []): Collection
    {

        $data = $this->mysql->fetchAll($criteria);
        // some data transformation
    }
}

$storage = new Storage(new MySqlAdapter($mysql));
