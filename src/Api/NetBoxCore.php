<?php

namespace Cis\NetBox\Api;

use Cis\NetBox\NetBoxApi;
use Cis\NetBox\NetBoxResult;


class NetBoxCore
{
    private const string DATA_FILES = 'core/data-files';
    private const string DATA_SOURCES = 'core/data-sources';
    private const string JOBS = 'core/jobs';
    private const string OBJECT_CHANGES = 'core/object-changes';

    public function __construct(
        private readonly NetBoxApi $api,
    ) {}

    #region dataFiles
    public function dataFiles(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::DATA_FILES, $parameters);
    }

    public function dataFilesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::DATA_FILES, ['id' => $id, ...$parameters]);
    }
    #endregion dataFiles

    #region dataSources
    public function dataSources(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::DATA_SOURCES, $parameters);
    }

    public function dataSourcesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::DATA_SOURCES, $parameters);
    }

    public function dataSourcesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::DATA_SOURCES, $parameters);
    }

    public function dataSourcesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::DATA_SOURCES, $parameters);
    }

    public function dataSourcesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::DATA_SOURCES, $parameters);
    }

    public function dataSourcesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::DATA_SOURCES, ['id' => $id, ...$parameters]);
    }

    public function dataSourcesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::DATA_SOURCES, ['id' => $id, ...$parameters]);
    }

    public function dataSourcesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::DATA_SOURCES, ['id' => $id, ...$parameters]);
    }

    public function dataSourcesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::DATA_SOURCES, ['id' => $id, ...$parameters]);
    }

    public function dataSourcesByIdSync(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::DATA_SOURCES, ['id' => $id, 'submodule' => 'sync', ...$parameters]);
    }
    #endregion dataSources

    #region jobs
    public function jobs(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::JOBS, $parameters);
    }

    public function jobsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::JOBS, ['id' => $id, ...$parameters]);
    }
    #endregion jobs

    #region objectChanges
    public function objectChanges(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::OBJECT_CHANGES, $parameters);
    }

    public function objectChangesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::OBJECT_CHANGES, ['id' => $id, ...$parameters]);
    }
    #endregion objectChanges
}