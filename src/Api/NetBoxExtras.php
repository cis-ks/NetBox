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
    public function bookmarks(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::BOOKMARKS, $parameters);
    }

    public function bookmarksCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::BOOKMARKS, $parameters);
    }

    public function bookmarksPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::BOOKMARKS, $parameters);
    }

    public function bookmarksPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::BOOKMARKS, $parameters);
    }

    public function bookmarksDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::BOOKMARKS, $parameters);
    }

    public function bookmarksById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::BOOKMARKS, $parameters, $id);
    }

    public function bookmarksByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::BOOKMARKS, $parameters, $id);
    }

    public function bookmarksByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::BOOKMARKS, $parameters, $id);
    }

    public function bookmarksByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::BOOKMARKS, $parameters, $id);
    }
    #endregion bookmarks

    #region configContexts
    public function configContexts(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONFIG_CONTEXTS, $parameters);
    }

    public function configContextsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CONFIG_CONTEXTS, $parameters);
    }

    public function configContextsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CONFIG_CONTEXTS, $parameters);
    }

    public function configContextsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CONFIG_CONTEXTS, $parameters);
    }

    public function configContextsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CONFIG_CONTEXTS, $parameters);
    }

    public function configContextsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONFIG_CONTEXTS, $parameters, $id);
    }

    public function configContextsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CONFIG_CONTEXTS, $parameters, $id);
    }

    public function configContextsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CONFIG_CONTEXTS, $parameters, $id);
    }

    public function configContextsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CONFIG_CONTEXTS, $parameters, $id);
    }

    public function configContextsByIdSync(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONFIG_CONTEXTS, $parameters, $id, 'sync');
    }
    #endregion configContexts

    #region configTemplates
    public function configTemplates(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONFIG_TEMPLATES, $parameters);
    }

    public function configTemplatesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CONFIG_TEMPLATES, $parameters);
    }

    public function configTemplatesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CONFIG_TEMPLATES, $parameters);
    }

    public function configTemplatesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CONFIG_TEMPLATES, $parameters);
    }

    public function configTemplatesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CONFIG_TEMPLATES, $parameters);
    }

    public function configTemplatesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONFIG_TEMPLATES, $parameters, $id);
    }

    public function configTemplatesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CONFIG_TEMPLATES, $parameters, $id);
    }

    public function configTemplatesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CONFIG_TEMPLATES, $parameters, $id);
    }

    public function configTemplatesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CONFIG_TEMPLATES, $parameters, $id);
    }

    public function configTemplatesByIdRender(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONFIG_TEMPLATES, $parameters, $id, 'render');
    }

    public function configTemplatesByIdSync(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONFIG_TEMPLATES, $parameters, $id, 'sync');
    }
    #endregion configTemplates

    #region customFieldChoiceSets
    public function customFieldChoiceSets(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CUSTOM_FIELD_CHOICE_SETS, $parameters);
    }

    public function customFieldChoiceSetsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CUSTOM_FIELD_CHOICE_SETS, $parameters);
    }

    public function customFieldChoiceSetsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CUSTOM_FIELD_CHOICE_SETS, $parameters);
    }

    public function customFieldChoiceSetsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CUSTOM_FIELD_CHOICE_SETS, $parameters);
    }

    public function customFieldChoiceSetsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CUSTOM_FIELD_CHOICE_SETS, $parameters);
    }

    public function customFieldChoiceSetsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CUSTOM_FIELD_CHOICE_SETS, $parameters, $id);
    }

    public function customFieldChoiceSetsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CUSTOM_FIELD_CHOICE_SETS, $parameters, $id);
    }

    public function customFieldChoiceSetsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CUSTOM_FIELD_CHOICE_SETS, $parameters, $id);
    }

    public function customFieldChoiceSetsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CUSTOM_FIELD_CHOICE_SETS, $parameters, $id);
    }

    public function customFieldChoiceSetsByIdChoices(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CUSTOM_FIELD_CHOICE_SETS, $parameters, $id, 'choices');
    }
    #endregion customFieldChoiceSets

    #region customFields
    public function customFields(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CUSTOM_FIELDS, $parameters);
    }

    public function customFieldsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CUSTOM_FIELDS, $parameters);
    }

    public function customFieldsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CUSTOM_FIELDS, $parameters);
    }

    public function customFieldsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CUSTOM_FIELDS, $parameters);
    }

    public function customFieldsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CUSTOM_FIELDS, $parameters);
    }

    public function customFieldsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CUSTOM_FIELDS, $parameters, $id);
    }

    public function customFieldsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CUSTOM_FIELDS, $parameters, $id);
    }

    public function customFieldsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CUSTOM_FIELDS, $parameters, $id);
    }

    public function customFieldsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CUSTOM_FIELDS, $parameters, $id);
    }
    #endregion customFields

    #region customLinks
    public function customLinks(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CUSTOM_LINKS, $parameters);
    }

    public function customLinksCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CUSTOM_LINKS, $parameters);
    }

    public function customLinksPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CUSTOM_LINKS, $parameters);
    }

    public function customLinksPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CUSTOM_LINKS, $parameters);
    }

    public function customLinksDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CUSTOM_LINKS, $parameters);
    }

    public function customLinksById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CUSTOM_LINKS, $parameters, $id);
    }

    public function customLinksByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CUSTOM_LINKS, $parameters, $id);
    }

    public function customLinksByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CUSTOM_LINKS, $parameters, $id);
    }

    public function customLinksByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CUSTOM_LINKS, $parameters, $id);
    }
    #endregion customLinks

    #region dashboard
    public function dashboard(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::DASHBOARD, $parameters);
    }

    public function dashboardPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::DASHBOARD, $parameters);
    }

    public function dashboardPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::DASHBOARD, $parameters);
    }

    public function dashboardDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::DASHBOARD, $parameters);
    }
    #endregion dashboard

    #region eventRules
    public function eventRules(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::EVENT_RULES, $parameters);
    }

    public function eventRulesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::EVENT_RULES, $parameters);
    }

    public function eventRulesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::EVENT_RULES, $parameters);
    }

    public function eventRulesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::EVENT_RULES, $parameters);
    }

    public function eventRulesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::EVENT_RULES, $parameters);
    }

    public function eventRulesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::EVENT_RULES, $parameters, $id);
    }

    public function eventRulesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::EVENT_RULES, $parameters, $id);
    }

    public function eventRulesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::EVENT_RULES, $parameters, $id);
    }

    public function eventRulesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::EVENT_RULES, $parameters, $id);
    }
    #endregion eventRules

    #region exportTemplates
    public function exportTemplates(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::EXPORT_TEMPLATES, $parameters);
    }

    public function exportTemplatesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::EXPORT_TEMPLATES, $parameters);
    }

    public function exportTemplatesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::EXPORT_TEMPLATES, $parameters);
    }

    public function exportTemplatesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::EXPORT_TEMPLATES, $parameters);
    }

    public function exportTemplatesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::EXPORT_TEMPLATES, $parameters);
    }

    public function exportTemplatesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::EXPORT_TEMPLATES, $parameters, $id);
    }

    public function exportTemplatesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::EXPORT_TEMPLATES, $parameters, $id);
    }

    public function exportTemplatesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::EXPORT_TEMPLATES, $parameters, $id);
    }

    public function exportTemplatesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::EXPORT_TEMPLATES, $parameters, $id);
    }

    public function exportTemplatesByIdSync(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::EXPORT_TEMPLATES, $parameters, $id, 'sync');
    }
    #endregion exportTemplates

    #region imageAttachments
    public function imageAttachments(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::IMAGE_ATTACHMENTS, $parameters);
    }

    public function imageAttachmentsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::IMAGE_ATTACHMENTS, $parameters);
    }

    public function imageAttachmentsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::IMAGE_ATTACHMENTS, $parameters);
    }

    public function imageAttachmentsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::IMAGE_ATTACHMENTS, $parameters);
    }

    public function imageAttachmentsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::IMAGE_ATTACHMENTS, $parameters);
    }

    public function imageAttachmentsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::IMAGE_ATTACHMENTS, $parameters, $id);
    }

    public function imageAttachmentsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::IMAGE_ATTACHMENTS, $parameters, $id);
    }

    public function imageAttachmentsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::IMAGE_ATTACHMENTS, $parameters, $id);
    }

    public function imageAttachmentsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::IMAGE_ATTACHMENTS, $parameters, $id);
    }
    #endregion imageAttachments

    #region journalEntries
    public function journalEntries(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::JOURNAL_ENTRIES, $parameters);
    }

    public function journalEntriesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::JOURNAL_ENTRIES, $parameters);
    }

    public function journalEntriesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::JOURNAL_ENTRIES, $parameters);
    }

    public function journalEntriesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::JOURNAL_ENTRIES, $parameters);
    }

    public function journalEntriesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::JOURNAL_ENTRIES, $parameters);
    }

    public function journalEntriesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::JOURNAL_ENTRIES, $parameters, $id);
    }

    public function journalEntriesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::JOURNAL_ENTRIES, $parameters, $id);
    }

    public function journalEntriesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::JOURNAL_ENTRIES, $parameters, $id);
    }

    public function journalEntriesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::JOURNAL_ENTRIES, $parameters, $id);
    }
    #endregion journalEntries

    #region notificationGroups
    public function notificationGroups(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::NOTIFICATION_GROUPS, $parameters);
    }

    public function notificationGroupsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::NOTIFICATION_GROUPS, $parameters);
    }

    public function notificationGroupsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::NOTIFICATION_GROUPS, $parameters);
    }

    public function notificationGroupsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::NOTIFICATION_GROUPS, $parameters);
    }

    public function notificationGroupsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::NOTIFICATION_GROUPS, $parameters);
    }

    public function notificationGroupsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::NOTIFICATION_GROUPS, $parameters, $id);
    }

    public function notificationGroupsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::NOTIFICATION_GROUPS, $parameters, $id);
    }

    public function notificationGroupsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::NOTIFICATION_GROUPS, $parameters, $id);
    }

    public function notificationGroupsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::NOTIFICATION_GROUPS, $parameters, $id);
    }
    #endregion notificationGroups

    #region notifications
    public function notifications(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::NOTIFICATIONS, $parameters);
    }

    public function notificationsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::NOTIFICATIONS, $parameters);
    }

    public function notificationsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::NOTIFICATIONS, $parameters);
    }

    public function notificationsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::NOTIFICATIONS, $parameters);
    }

    public function notificationsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::NOTIFICATIONS, $parameters);
    }

    public function notificationsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::NOTIFICATIONS, $parameters, $id);
    }

    public function notificationsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::NOTIFICATIONS, $parameters, $id);
    }

    public function notificationsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::NOTIFICATIONS, $parameters, $id);
    }

    public function notificationsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::NOTIFICATIONS, $parameters, $id);
    }
    #endregion notifications

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

    #region savedFilters
    public function savedFilters(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::SAVED_FILTERS, $parameters);
    }

    public function savedFiltersCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::SAVED_FILTERS, $parameters);
    }

    public function savedFiltersPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::SAVED_FILTERS, $parameters);
    }

    public function savedFiltersPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::SAVED_FILTERS, $parameters);
    }

    public function savedFiltersDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::SAVED_FILTERS, $parameters);
    }

    public function savedFiltersById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::SAVED_FILTERS, $parameters, $id);
    }

    public function savedFiltersByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::SAVED_FILTERS, $parameters, $id);
    }

    public function savedFiltersByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::SAVED_FILTERS, $parameters, $id);
    }

    public function savedFiltersByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::SAVED_FILTERS, $parameters, $id);
    }
    #endregion savedFilters

    #region scripts
    public function scripts(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::SCRIPTS, $parameters);
    }

    public function scriptsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::SCRIPTS, $parameters);
    }

    public function scriptsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::SCRIPTS, $parameters, $id);
    }

    public function scriptsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::SCRIPTS, $parameters, $id);
    }

    public function scriptsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::SCRIPTS, $parameters, $id);
    }

    public function scriptsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::SCRIPTS, $parameters, $id);
    }
    #endregion scripts

    #region subscriptions
    public function subscriptions(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::SUBSCRIPTIONS, $parameters);
    }

    public function subscriptionsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::SUBSCRIPTIONS, $parameters);
    }

    public function subscriptionsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::SUBSCRIPTIONS, $parameters);
    }

    public function subscriptionsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::SUBSCRIPTIONS, $parameters);
    }

    public function subscriptionsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::SUBSCRIPTIONS, $parameters);
    }

    public function subscriptionsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::SUBSCRIPTIONS, $parameters, $id);
    }

    public function subscriptionsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::SUBSCRIPTIONS, $parameters, $id);
    }

    public function subscriptionsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::SUBSCRIPTIONS, $parameters, $id);
    }

    public function subscriptionsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::SUBSCRIPTIONS, $parameters, $id);
    }
    #endregion subscriptions

    #region tags
    public function tags(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::TAGS, $parameters);
    }

    public function tagsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::TAGS, $parameters);
    }

    public function tagsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::TAGS, $parameters);
    }

    public function tagsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::TAGS, $parameters);
    }

    public function tagsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::TAGS, $parameters);
    }

    public function tagsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::TAGS, $parameters, $id);
    }

    public function tagsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::TAGS, $parameters, $id);
    }

    public function tagsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::TAGS, $parameters, $id);
    }

    public function tagsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::TAGS, $parameters, $id);
    }
    #endregion tags

    #region webhooks
    public function webhooks(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::WEBHOOKS, $parameters);
    }

    public function webhooksCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::WEBHOOKS, $parameters);
    }

    public function webhooksPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::WEBHOOKS, $parameters);
    }

    public function webhooksPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::WEBHOOKS, $parameters);
    }

    public function webhooksDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::WEBHOOKS, $parameters);
    }

    public function webhooksById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::WEBHOOKS, $parameters, $id);
    }

    public function webhooksByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::WEBHOOKS, $parameters, $id);
    }

    public function webhooksByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::WEBHOOKS, $parameters, $id);
    }

    public function webhooksByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::WEBHOOKS, $parameters, $id);
    }
    #endregion webhooks
}