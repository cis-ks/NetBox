<?php /** @noinspection PhpUnused */

namespace Cis\NetBox\Api;

use Cis\NetBox\NetBoxResult;


class NetBoxCore extends NetBoxApiAbstract
{
    private const string DATA_FILES = 'core/data-files';
    private const string DATA_SOURCES = 'core/data-sources';
    private const string JOBS = 'core/jobs';
    private const string OBJECT_CHANGES = 'core/object-changes';

    #region dataFiles
    public function dataFiles(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::DATA_FILES, $parameters);
    }

    public function dataFilesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::DATA_FILES, $parameters, $id);
    }
    #endregion dataFiles

    #region dataSources
    public function dataSources(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::DATA_SOURCES, $parameters);
    }

    public function dataSourcesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::DATA_SOURCES, $parameters);
    }

    public function dataSourcesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::DATA_SOURCES, $parameters);
    }

    public function dataSourcesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::DATA_SOURCES, $parameters);
    }

    public function dataSourcesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::DATA_SOURCES, $parameters);
    }

    public function dataSourcesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::DATA_SOURCES, $parameters, $id);
    }

    public function dataSourcesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::DATA_SOURCES, $parameters, $id);
    }

    public function dataSourcesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::DATA_SOURCES, $parameters, $id);
    }

    public function dataSourcesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::DATA_SOURCES, $parameters, $id);
    }

    public function dataSourcesByIdSync(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::DATA_SOURCES, $parameters, $id, 'sync');
    }
    #endregion dataSources

    #region jobs
    public function jobs(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::JOBS, $parameters);
    }

    public function jobsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::JOBS, $parameters, $id);
    }
    #endregion jobs

    #region objectChanges
    public function objectChanges(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::OBJECT_CHANGES, $parameters);
    }

    public function objectChangesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::OBJECT_CHANGES, $parameters, $id);
    }
    #endregion objectChanges
}