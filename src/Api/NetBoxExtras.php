<?php /** @noinspection PhpUnused */

namespace Cis\NetBox\Api;

use Cis\NetBox\NetBoxResult;


class NetBoxExtras extends NetBoxApiAbstract
{
    private const string BOOKMARKS = 'extras/bookmarks';
    private const string CONFIG_CONTEXTS = 'extras/config-contexts';
    private const string CONFIG_TEMPLATES = 'extras/config-templates';
    private const string CUSTOM_FIELD_CHOICE_SETS = 'extras/custom-field-choice-sets';
    private const string CUSTOM_FIELDS = 'extras/custom-fields';
    private const string CUSTOM_LINKS = 'extras/custom-links';
    private const string DASHBOARD = 'extras/dashboard';
    private const string EVENT_RULES = 'extras/event-rules';
    private const string EXPORT_TEMPLATES = 'extras/export-templates';
    private const string IMAGE_ATTACHMENTS = 'extras/image-attachments';
    private const string JOURNAL_ENTRIES = 'extras/journal-entries';
    private const string NOTIFICATION_GROUPS = 'extras/notification-groups';
    private const string NOTIFICATIONS = 'extras/notifications';
    private const string OBJECT_TYPES = 'extras/object-types';
    private const string SAVED_FILTERS = 'extras/saved-filters';
    private const string SCRIPTS = 'extras/scripts';
    private const string SUBSCRIPTIONS = 'extras/subscriptions';
    private const string TAGS = 'extras/tags';
    private const string WEBHOOKS = 'extras/webhooks';

    #region bookmarks
    public function bookmarks(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::BOOKMARKS, $parameters);
    }

    public function bookmarksCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::BOOKMARKS, $parameters);
    }

    public function bookmarksPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::BOOKMARKS, $parameters);
    }

    public function bookmarksPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::BOOKMARKS, $parameters);
    }

    public function bookmarksDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::BOOKMARKS, $parameters);
    }

    public function bookmarksById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::BOOKMARKS, ['id' => $id, ...$parameters]);
    }

    public function bookmarksByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::BOOKMARKS, ['id' => $id, ...$parameters]);
    }

    public function bookmarksByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::BOOKMARKS, ['id' => $id, ...$parameters]);
    }

    public function bookmarksByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::BOOKMARKS, ['id' => $id, ...$parameters]);
    }
    #endregion bookmarks

    #region configContexts
    public function configContexts(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONFIG_CONTEXTS, $parameters);
    }

    public function configContextsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CONFIG_CONTEXTS, $parameters);
    }

    public function configContextsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CONFIG_CONTEXTS, $parameters);
    }

    public function configContextsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CONFIG_CONTEXTS, $parameters);
    }

    public function configContextsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CONFIG_CONTEXTS, $parameters);
    }

    public function configContextsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONFIG_CONTEXTS, ['id' => $id, ...$parameters]);
    }

    public function configContextsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CONFIG_CONTEXTS, ['id' => $id, ...$parameters]);
    }

    public function configContextsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CONFIG_CONTEXTS, ['id' => $id, ...$parameters]);
    }

    public function configContextsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CONFIG_CONTEXTS, ['id' => $id, ...$parameters]);
    }

    public function configContextsByIdSync(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONFIG_CONTEXTS, ['id' => $id, 'submodule' => 'sync', ...$parameters]);
    }
    #endregion configContexts

    #region configTemplates
    public function configTemplates(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONFIG_TEMPLATES, $parameters);
    }

    public function configTemplatesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CONFIG_TEMPLATES, $parameters);
    }

    public function configTemplatesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CONFIG_TEMPLATES, $parameters);
    }

    public function configTemplatesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CONFIG_TEMPLATES, $parameters);
    }

    public function configTemplatesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CONFIG_TEMPLATES, $parameters);
    }

    public function configTemplatesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONFIG_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function configTemplatesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CONFIG_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function configTemplatesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CONFIG_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function configTemplatesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CONFIG_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function configTemplatesByIdRender(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONFIG_TEMPLATES, ['id' => $id, 'submodule' => 'render', ...$parameters]);
    }

    public function configTemplatesByIdSync(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONFIG_TEMPLATES, ['id' => $id, 'submodule' => 'sync', ...$parameters]);
    }
    #endregion configTemplates

    #region customFieldChoiceSets
    public function customFieldChoiceSets(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CUSTOM_FIELD_CHOICE_SETS, $parameters);
    }

    public function customFieldChoiceSetsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CUSTOM_FIELD_CHOICE_SETS, $parameters);
    }

    public function customFieldChoiceSetsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CUSTOM_FIELD_CHOICE_SETS, $parameters);
    }

    public function customFieldChoiceSetsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CUSTOM_FIELD_CHOICE_SETS, $parameters);
    }

    public function customFieldChoiceSetsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CUSTOM_FIELD_CHOICE_SETS, $parameters);
    }

    public function customFieldChoiceSetsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CUSTOM_FIELD_CHOICE_SETS, ['id' => $id, ...$parameters]);
    }

    public function customFieldChoiceSetsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CUSTOM_FIELD_CHOICE_SETS, ['id' => $id, ...$parameters]);
    }

    public function customFieldChoiceSetsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CUSTOM_FIELD_CHOICE_SETS, ['id' => $id, ...$parameters]);
    }

    public function customFieldChoiceSetsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CUSTOM_FIELD_CHOICE_SETS, ['id' => $id, ...$parameters]);
    }

    public function customFieldChoiceSetsByIdChoices(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CUSTOM_FIELD_CHOICE_SETS, ['id' => $id, 'submodule' => 'choices', ...$parameters]);
    }
    #endregion customFieldChoiceSets

    #region customFields
    public function customFields(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CUSTOM_FIELDS, $parameters);
    }

    public function customFieldsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CUSTOM_FIELDS, $parameters);
    }

    public function customFieldsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CUSTOM_FIELDS, $parameters);
    }

    public function customFieldsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CUSTOM_FIELDS, $parameters);
    }

    public function customFieldsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CUSTOM_FIELDS, $parameters);
    }

    public function customFieldsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CUSTOM_FIELDS, ['id' => $id, ...$parameters]);
    }

    public function customFieldsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CUSTOM_FIELDS, ['id' => $id, ...$parameters]);
    }

    public function customFieldsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CUSTOM_FIELDS, ['id' => $id, ...$parameters]);
    }

    public function customFieldsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CUSTOM_FIELDS, ['id' => $id, ...$parameters]);
    }
    #endregion customFields

    #region customLinks
    public function customLinks(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CUSTOM_LINKS, $parameters);
    }

    public function customLinksCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CUSTOM_LINKS, $parameters);
    }

    public function customLinksPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CUSTOM_LINKS, $parameters);
    }

    public function customLinksPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CUSTOM_LINKS, $parameters);
    }

    public function customLinksDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CUSTOM_LINKS, $parameters);
    }

    public function customLinksById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CUSTOM_LINKS, ['id' => $id, ...$parameters]);
    }

    public function customLinksByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CUSTOM_LINKS, ['id' => $id, ...$parameters]);
    }

    public function customLinksByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CUSTOM_LINKS, ['id' => $id, ...$parameters]);
    }

    public function customLinksByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CUSTOM_LINKS, ['id' => $id, ...$parameters]);
    }
    #endregion customLinks

    #region dashboard
    public function dashboard(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::DASHBOARD, $parameters);
    }

    public function dashboardPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::DASHBOARD, $parameters);
    }

    public function dashboardPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::DASHBOARD, $parameters);
    }

    public function dashboardDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::DASHBOARD, $parameters);
    }
    #endregion dashboard

    #region eventRules
    public function eventRules(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::EVENT_RULES, $parameters);
    }

    public function eventRulesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::EVENT_RULES, $parameters);
    }

    public function eventRulesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::EVENT_RULES, $parameters);
    }

    public function eventRulesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::EVENT_RULES, $parameters);
    }

    public function eventRulesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::EVENT_RULES, $parameters);
    }

    public function eventRulesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::EVENT_RULES, ['id' => $id, ...$parameters]);
    }

    public function eventRulesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::EVENT_RULES, ['id' => $id, ...$parameters]);
    }

    public function eventRulesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::EVENT_RULES, ['id' => $id, ...$parameters]);
    }

    public function eventRulesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::EVENT_RULES, ['id' => $id, ...$parameters]);
    }
    #endregion eventRules

    #region exportTemplates
    public function exportTemplates(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::EXPORT_TEMPLATES, $parameters);
    }

    public function exportTemplatesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::EXPORT_TEMPLATES, $parameters);
    }

    public function exportTemplatesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::EXPORT_TEMPLATES, $parameters);
    }

    public function exportTemplatesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::EXPORT_TEMPLATES, $parameters);
    }

    public function exportTemplatesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::EXPORT_TEMPLATES, $parameters);
    }

    public function exportTemplatesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::EXPORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function exportTemplatesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::EXPORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function exportTemplatesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::EXPORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function exportTemplatesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::EXPORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function exportTemplatesByIdSync(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::EXPORT_TEMPLATES, ['id' => $id, 'submodule' => 'sync', ...$parameters]);
    }
    #endregion exportTemplates

    #region imageAttachments
    public function imageAttachments(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::IMAGE_ATTACHMENTS, $parameters);
    }

    public function imageAttachmentsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::IMAGE_ATTACHMENTS, $parameters);
    }

    public function imageAttachmentsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::IMAGE_ATTACHMENTS, $parameters);
    }

    public function imageAttachmentsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::IMAGE_ATTACHMENTS, $parameters);
    }

    public function imageAttachmentsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::IMAGE_ATTACHMENTS, $parameters);
    }

    public function imageAttachmentsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::IMAGE_ATTACHMENTS, ['id' => $id, ...$parameters]);
    }

    public function imageAttachmentsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::IMAGE_ATTACHMENTS, ['id' => $id, ...$parameters]);
    }

    public function imageAttachmentsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::IMAGE_ATTACHMENTS, ['id' => $id, ...$parameters]);
    }

    public function imageAttachmentsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::IMAGE_ATTACHMENTS, ['id' => $id, ...$parameters]);
    }
    #endregion imageAttachments

    #region journalEntries
    public function journalEntries(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::JOURNAL_ENTRIES, $parameters);
    }

    public function journalEntriesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::JOURNAL_ENTRIES, $parameters);
    }

    public function journalEntriesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::JOURNAL_ENTRIES, $parameters);
    }

    public function journalEntriesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::JOURNAL_ENTRIES, $parameters);
    }

    public function journalEntriesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::JOURNAL_ENTRIES, $parameters);
    }

    public function journalEntriesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::JOURNAL_ENTRIES, ['id' => $id, ...$parameters]);
    }

    public function journalEntriesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::JOURNAL_ENTRIES, ['id' => $id, ...$parameters]);
    }

    public function journalEntriesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::JOURNAL_ENTRIES, ['id' => $id, ...$parameters]);
    }

    public function journalEntriesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::JOURNAL_ENTRIES, ['id' => $id, ...$parameters]);
    }
    #endregion journalEntries

    #region notificationGroups
    public function notificationGroups(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::NOTIFICATION_GROUPS, $parameters);
    }

    public function notificationGroupsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::NOTIFICATION_GROUPS, $parameters);
    }

    public function notificationGroupsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::NOTIFICATION_GROUPS, $parameters);
    }

    public function notificationGroupsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::NOTIFICATION_GROUPS, $parameters);
    }

    public function notificationGroupsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::NOTIFICATION_GROUPS, $parameters);
    }

    public function notificationGroupsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::NOTIFICATION_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function notificationGroupsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::NOTIFICATION_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function notificationGroupsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::NOTIFICATION_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function notificationGroupsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::NOTIFICATION_GROUPS, ['id' => $id, ...$parameters]);
    }
    #endregion notificationGroups

    #region notifications
    public function notifications(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::NOTIFICATIONS, $parameters);
    }

    public function notificationsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::NOTIFICATIONS, $parameters);
    }

    public function notificationsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::NOTIFICATIONS, $parameters);
    }

    public function notificationsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::NOTIFICATIONS, $parameters);
    }

    public function notificationsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::NOTIFICATIONS, $parameters);
    }

    public function notificationsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::NOTIFICATIONS, ['id' => $id, ...$parameters]);
    }

    public function notificationsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::NOTIFICATIONS, ['id' => $id, ...$parameters]);
    }

    public function notificationsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::NOTIFICATIONS, ['id' => $id, ...$parameters]);
    }

    public function notificationsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::NOTIFICATIONS, ['id' => $id, ...$parameters]);
    }
    #endregion notifications

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

    #region savedFilters
    public function savedFilters(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::SAVED_FILTERS, $parameters);
    }

    public function savedFiltersCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::SAVED_FILTERS, $parameters);
    }

    public function savedFiltersPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::SAVED_FILTERS, $parameters);
    }

    public function savedFiltersPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::SAVED_FILTERS, $parameters);
    }

    public function savedFiltersDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::SAVED_FILTERS, $parameters);
    }

    public function savedFiltersById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::SAVED_FILTERS, ['id' => $id, ...$parameters]);
    }

    public function savedFiltersByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::SAVED_FILTERS, ['id' => $id, ...$parameters]);
    }

    public function savedFiltersByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::SAVED_FILTERS, ['id' => $id, ...$parameters]);
    }

    public function savedFiltersByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::SAVED_FILTERS, ['id' => $id, ...$parameters]);
    }
    #endregion savedFilters

    #region scripts
    public function scripts(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::SCRIPTS, $parameters);
    }

    public function scriptsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::SCRIPTS, $parameters);
    }

    public function scriptsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::SCRIPTS, ['id' => $id, ...$parameters]);
    }

    public function scriptsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::SCRIPTS, ['id' => $id, ...$parameters]);
    }

    public function scriptsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::SCRIPTS, ['id' => $id, ...$parameters]);
    }

    public function scriptsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::SCRIPTS, ['id' => $id, ...$parameters]);
    }
    #endregion scripts

    #region subscriptions
    public function subscriptions(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::SUBSCRIPTIONS, $parameters);
    }

    public function subscriptionsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::SUBSCRIPTIONS, $parameters);
    }

    public function subscriptionsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::SUBSCRIPTIONS, $parameters);
    }

    public function subscriptionsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::SUBSCRIPTIONS, $parameters);
    }

    public function subscriptionsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::SUBSCRIPTIONS, $parameters);
    }

    public function subscriptionsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::SUBSCRIPTIONS, ['id' => $id, ...$parameters]);
    }

    public function subscriptionsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::SUBSCRIPTIONS, ['id' => $id, ...$parameters]);
    }

    public function subscriptionsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::SUBSCRIPTIONS, ['id' => $id, ...$parameters]);
    }

    public function subscriptionsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::SUBSCRIPTIONS, ['id' => $id, ...$parameters]);
    }
    #endregion subscriptions

    #region tags
    public function tags(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::TAGS, $parameters);
    }

    public function tagsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::TAGS, $parameters);
    }

    public function tagsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::TAGS, $parameters);
    }

    public function tagsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::TAGS, $parameters);
    }

    public function tagsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::TAGS, $parameters);
    }

    public function tagsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::TAGS, ['id' => $id, ...$parameters]);
    }

    public function tagsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::TAGS, ['id' => $id, ...$parameters]);
    }

    public function tagsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::TAGS, ['id' => $id, ...$parameters]);
    }

    public function tagsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::TAGS, ['id' => $id, ...$parameters]);
    }
    #endregion tags

    #region webhooks
    public function webhooks(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::WEBHOOKS, $parameters);
    }

    public function webhooksCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::WEBHOOKS, $parameters);
    }

    public function webhooksPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::WEBHOOKS, $parameters);
    }

    public function webhooksPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::WEBHOOKS, $parameters);
    }

    public function webhooksDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::WEBHOOKS, $parameters);
    }

    public function webhooksById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::WEBHOOKS, ['id' => $id, ...$parameters]);
    }

    public function webhooksByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::WEBHOOKS, ['id' => $id, ...$parameters]);
    }

    public function webhooksByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::WEBHOOKS, ['id' => $id, ...$parameters]);
    }

    public function webhooksByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::WEBHOOKS, ['id' => $id, ...$parameters]);
    }
    #endregion webhooks
}