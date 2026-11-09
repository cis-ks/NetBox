<?php /** @noinspection PhpUnused */

namespace Cis\NetBox\Api;

use Cis\NetBox\NetBoxResult;


class NetBoxCore extends NetBoxApiAbstract
{
    private const string BACKGROUND_QUEUES = 'core/background-queues';
    private const string BACKGROUND_TASKS = 'core/background-tasks';
    private const string BACKGROUND_WORKERS = 'core/background-workers';
    private const string DATA_FILES = 'core/data-files';
    private const string DATA_SOURCES = 'core/data-sources';
    private const string JOBS = 'core/jobs';
    private const string OBJECT_CHANGES = 'core/object-changes';
    private const string OBJECT_TYPES = 'core/object-types';

    #region backgroundQueues
    public function backgroundQueues(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::BACKGROUND_QUEUES, $parameters);
    }
    #endregion backgroundQueues

    #region backgroundTasks
    public function backgroundTasks(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::BACKGROUND_TASKS, $parameters);
    }

    public function backgroundTasksById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::BACKGROUND_TASKS, $parameters, $id);
    }

    public function backgroundTasksByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::BACKGROUND_TASKS, $parameters, $id, 'delete');
    }

    public function backgroundTasksByIdEnqueue(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::BACKGROUND_TASKS, $parameters, $id, 'enqueue');
    }

    public function backgroundTasksByIdRequeue(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::BACKGROUND_TASKS, $parameters, $id, 'requeue');
    }

    public function backgroundTasksByIdStop(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::BACKGROUND_TASKS, $parameters, $id, 'stop');
    }
    #endregion backgroundTasks

    #region backgroundWorkers
    public function backgroundWorkers(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::BACKGROUND_WORKERS, $parameters);
    }
    #endregion backgroundWorkers

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

    #region objectTypes
    public function objectTypes(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::OBJECT_TYPES, $parameters);
    }

    public function objectTypesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::OBJECT_TYPES, $parameters, $id);
    }
    #endregion objectTypes
}
