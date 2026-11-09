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
    public function backgroundQueues(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::BACKGROUND_QUEUES, $parameters);
    }
    #endregion backgroundQueues

    #region backgroundTasks
    public function backgroundTasks(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::BACKGROUND_TASKS, $parameters);
    }

    public function backgroundTasksById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::BACKGROUND_TASKS, ['id' => $id, ...$parameters]);
    }

    public function backgroundTasksByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::BACKGROUND_TASKS, ['id' => $id, 'submodule' => 'delete', ...$parameters]);
    }

    public function backgroundTasksByIdEnqueue(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::BACKGROUND_TASKS, ['id' => $id, 'submodule' => 'enqueue', ...$parameters]);
    }

    public function backgroundTasksByIdRequeue(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::BACKGROUND_TASKS, ['id' => $id, 'submodule' => 'requeue', ...$parameters]);
    }

    public function backgroundTasksByIdStop(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::BACKGROUND_TASKS, ['id' => $id, 'submodule' => 'stop', ...$parameters]);
    }
    #endregion backgroundTasks

    #region backgroundWorkers
    public function backgroundWorkers(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::BACKGROUND_WORKERS, $parameters);
    }
    #endregion backgroundWorkers

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

    #region objectTypes
    public function objectTypes(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::OBJECT_TYPES, $parameters);
    }

    public function objectTypesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::OBJECT_TYPES, ['id' => $id, ...$parameters]);
    }
    #endregion objectTypes
}
