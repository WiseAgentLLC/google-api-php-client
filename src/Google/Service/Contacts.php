<?php
/*
 * Copyright 2015 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for Contacts (v3).
 *
 * <p>
 * Lets you manipulate contact data.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/google-apps/contacts/v3/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Dylan Intorf, Wise Agent LLC.
 */
class Google_Service_Contacts extends Google_Service
{
    /** Manage your calendars. */
    const CONTACTS =
        "https://www.google.com/m8/feeds";
    /** View your calendars. */
    const CONTACTS_READONLY =
        "https://www.googleapis.com/auth/contacts.readonly";

    public $contacts;
    public $contactPhoto;
    public $contactGroups;


    /**
     * Constructs the internal representation of the Contacts service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->rootUrl = 'https://www.google.com/';
        $this->servicePath = 'm8/feeds/';
        $this->version = 'v3';
        $this->serviceName = 'contacts';

        $this->contactList = new Google_Service_Contacts_ContactList_Resource(
            $this,
            $this->serviceName,
            'contactList',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => 'contacts/default/full/{contactId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'contactId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
                        'path' => 'contacts/default/full/{contactId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'contactId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => 'contacts/default/full',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ), 'list' => array(
                        'path' => 'contacts/default/full',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'alt' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'q' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'max-results' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'start-index' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'updatedMin' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'orderby' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'showdeleted' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'requirealldeleted' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'sortorder' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'group' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ), 'update' => array(
                        'path' => 'contacts/default/full/{contactId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'contactId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'batch' => array(
                        'path' => 'contacts/default/full/batch',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),
                )
            )
        );
        $this->contactPhotos = new Google_Service_Contacts_ContactPhotos_Resource(
            $this,
            $this->serviceName,
            'contactPhotos',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => 'photos/media/default/{contactId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'contactId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'update' => array(
                        'path' => 'photos/media/default/{contactId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'contactId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'delete' => array(
                        'path' => 'photos/media/default/{contactId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'contactId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->contactGroups = new Google_Service_Contacts_ContactGroups_Resource(
            $this,
            $this->serviceName,
            'contactGroups',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => 'groups/default/full/{groupId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'groupId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
                        'path' => 'default/full/{groupId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'groupId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => 'groups/default/full',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ), 'list' => array(
                        'path' => 'groups/default/full',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'alt' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'q' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'max-results' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'start-index' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'updatedMin' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'orderby' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'showdeleted' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'requirealldeleted' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'sortorder' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ), 'update' => array(
                        'path' => 'groups/default/full/{groupId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'groupId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'batch' => array(
                        'path' => 'groups/default/full/batch',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),
                )
            )
        );
    }
}


/**
 * The "contacts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contactService = new Google_Service_Contacts(...);
 *   $contacts = $contactService->contacts;
 *  </code>
 */
class Google_Service_Contacts_ContactList_Resource extends Google_Service_Resource
{

    /**
     * Deletes a contact. (contacts.delete)
     *
     * @param string $contactId Contact identifier.
     *
     */
    public function delete($contactId)
    {
        $params = array('contactId' => $contactId);
        return $this->call('delete', array($params));
    }

    /**
     * Returns a contact. (contact.get)
     *
     * @param string $contactId Contact identifier.
     *
     * @return Google_Service_Contacts_Contact
     *
     */
    public function get($contactId)
    {
        $params = array('contactId' => $contactId);
        return $this->call('get', array($params), "Google_Service_Contacts_Contact");
    }

    /**
     * Creates a contact. (contacts.insert)
     *
     * @param Google_Contact $postBody
     *
     * @return Google_Service_Contacts_Contact
     *
     */
    public function insert(Google_Service_Contacts_Contact $postBody)
    {
        $params = array('postBody' => $postBody);
        return $this->call('insert', array($params), "Google_Service_Contacts_Contact");
    }

    /**
     * Returns events on the specified calendar. (events.listEvents)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string alt The type of feed to return, such as atom (the default), rss, or json.
     * Optional. The default value is atom.
     * @opt_param string q Fulltext query on contacts data fields. The API currently supports simple
     * search queries such as q=term1 term2 term3 and exact search queries such as q="term1 term2 term3".
     * Optional.
     * @opt_param integer max-results The maximum number of entries to return. If you want to receive
     * all of the contacts, rather than only the default maximum, you can specify a very large number
     * for max-results. Optional.
     * @opt_param integer max-results The 1-based index of the first result to be retrieved (for paging).
     * Optional.
     * @opt_param string updated-min The lower bound on entry update dates. Optional.
     * @opt_param string orderby Sorting criterion. The only supported value is lastmodified.
     * Optional. The default is an unspecified, stable order.
     * @opt_param boolean showdeleted Include deleted contacts in the returned contacts feed.
     * Deleted contacts are shown as entries that contain nothing but an <atom:id> element and a
     * <gd:deleted> element. (Google usually retains placeholders for deleted contacts for 30 days
     * after deletion; during that time, you can request the placeholders using the showdeleted query
     * parameter.) Valid values are true or false. When the server decides it cannot guarantee that it
     * still has information about all deleted contacts pertinent to the query, then it's behavior depends
     * on the value of the requirealldeleted query parameter. Optional. The default is False.
     * @opt_param boolean requirealldeleted Only relevant if showdeleted and updated-min are also provided.
     * It dictates the behavior of the server in case it detects that placeholders of some entries deleted
     * since the point in time specified as updated-min may have been lost. If requirealldeleted is false,
     * the server simply returns all the placeholders it still knows about. If true, the server returns the
     * 410 HTTP response code. Optional. The default value is false.
     * @opt_param string sortorder Sorting order direction. Can be either ascending or descending.
     * Optional.
     * @opt_param string group Constrains the results to only the contacts belonging to the group specified.
     * Value of this parameter specifies group ID (see also: gContact:groupMembershipInfo). Optional.
     *
     * @return Google_Service_Contacts_Contacts
     *
     */
    public function listContacts($optParams = array())
    {
        $params = $optParams;
        return $this->call('list', array($params), "Google_Service_Contacts_Contacts");
    }

    /**
     * Updates a contact. (contacts.update)
     *
     * @param string $contactId Contact identifier.
     * @param Google_Contact $postBody
     *
     * @return Google_Service_Contacts_Contact
     */
    public function update($contactId, Google_Service_Contacts_Contact $postBody)
    {
        $params = array('contactId' => $contactId, 'postBody' => $postBody);
        return $this->call('update', array($params), "Google_Service_Contacts_Contact");
    }

    /**
     * Performs batch operations on contacts. (contacts.batch)
     *
     * @param Google_Contacts $postBody
     *
     * @return Google_Service_Contacts_Contacts
     */
    public function batch(Google_Service_Contacts_Contacts $postBody)
    {
        $params = array('postBody' => $postBody);
        return $this->call('batch', array($params), "Google_Service_Contacts_Contacts");
    }
}

/**
 * The "freebusy" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_Service_Calendar(...);
 *   $freebusy = $calendarService->freebusy;
 *  </code>
 */
class Google_Service_Calendar_Freebusy_Resource extends Google_Service_Resource
{

    /**
     * Returns free/busy information for a set of calendars. (freebusy.query)
     *
     * @param Google_FreeBusyRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Calendar_FreeBusyResponse
     */
    public function query(Google_Service_Calendar_FreeBusyRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('query', array($params), "Google_Service_Calendar_FreeBusyResponse");
    }
}

/**
 * The "settings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_Service_Calendar(...);
 *   $settings = $calendarService->settings;
 *  </code>
 */
class Google_Service_Calendar_Settings_Resource extends Google_Service_Resource
{

    /**
     * Returns a single user setting. (settings.get)
     *
     * @param string $setting The id of the user setting.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Calendar_Setting
     */
    public function get($setting, $optParams = array())
    {
        $params = array('setting' => $setting);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Calendar_Setting");
    }

    /**
     * Returns all user settings for the authenticated user. (settings.listSettings)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken Token specifying which result page to return.
     * Optional.
     * @opt_param int maxResults Maximum number of entries returned on one result
     * page. By default the value is 100 entries. The page size can never be larger
     * than 250 entries. Optional.
     * @opt_param string syncToken Token obtained from the nextSyncToken field
     * returned on the last page of results from the previous list request. It makes
     * the result of this list request contain only entries that have changed since
     * then. If the syncToken expires, the server will respond with a 410 GONE
     * response code and the client should clear its storage and perform a full
     * synchronization without any syncToken. Learn more about incremental
     * synchronization. Optional. The default is to return all entries.
     * @return Google_Service_Calendar_Settings
     */
    public function listSettings($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Calendar_Settings");
    }

    /**
     * Watch for changes to Settings resources. (settings.watch)
     *
     * @param Google_Channel $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken Token specifying which result page to return.
     * Optional.
     * @opt_param int maxResults Maximum number of entries returned on one result
     * page. By default the value is 100 entries. The page size can never be larger
     * than 250 entries. Optional.
     * @opt_param string syncToken Token obtained from the nextSyncToken field
     * returned on the last page of results from the previous list request. It makes
     * the result of this list request contain only entries that have changed since
     * then. If the syncToken expires, the server will respond with a 410 GONE
     * response code and the client should clear its storage and perform a full
     * synchronization without any syncToken. Learn more about incremental
     * synchronization. Optional. The default is to return all entries.
     * @return Google_Service_Calendar_Channel
     */
    public function watch(Google_Service_Calendar_Channel $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('watch', array($params), "Google_Service_Calendar_Channel");
    }
}


class Google_Service_Calendar_Acl extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $etag;
    protected $itemsType = 'Google_Service_Calendar_AclRule';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $nextSyncToken;


    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setItems($items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setNextSyncToken($nextSyncToken)
    {
        $this->nextSyncToken = $nextSyncToken;
    }

    public function getNextSyncToken()
    {
        return $this->nextSyncToken;
    }
}

class Google_Service_Calendar_AclRule extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $etag;
    public $id;
    public $kind;
    public $role;
    protected $scopeType = 'Google_Service_Calendar_AclRuleScope';
    protected $scopeDataType = '';


    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setScope(Google_Service_Calendar_AclRuleScope $scope)
    {
        $this->scope = $scope;
    }

    public function getScope()
    {
        return $this->scope;
    }
}

class Google_Service_Calendar_AclRuleScope extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $type;
    public $value;


    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}

class Google_Service_Calendar_Calendar extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $description;
    public $etag;
    public $id;
    public $kind;
    public $location;
    public $summary;
    public $timeZone;


    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }

    public function getTimeZone()
    {
        return $this->timeZone;
    }
}

class Google_Service_Calendar_CalendarList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $etag;
    protected $itemsType = 'Google_Service_Calendar_CalendarListEntry';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $nextSyncToken;


    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setItems($items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setNextSyncToken($nextSyncToken)
    {
        $this->nextSyncToken = $nextSyncToken;
    }

    public function getNextSyncToken()
    {
        return $this->nextSyncToken;
    }
}

class Google_Service_Calendar_CalendarListEntry extends Google_Collection
{
    protected $collection_key = 'defaultReminders';
    protected $internal_gapi_mappings = array();
    public $accessRole;
    public $backgroundColor;
    public $colorId;
    protected $defaultRemindersType = 'Google_Service_Calendar_EventReminder';
    protected $defaultRemindersDataType = 'array';
    public $deleted;
    public $description;
    public $etag;
    public $foregroundColor;
    public $hidden;
    public $id;
    public $kind;
    public $location;
    protected $notificationSettingsType = 'Google_Service_Calendar_CalendarListEntryNotificationSettings';
    protected $notificationSettingsDataType = '';
    public $primary;
    public $selected;
    public $summary;
    public $summaryOverride;
    public $timeZone;


    public function setAccessRole($accessRole)
    {
        $this->accessRole = $accessRole;
    }

    public function getAccessRole()
    {
        return $this->accessRole;
    }

    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
    }

    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    public function setColorId($colorId)
    {
        $this->colorId = $colorId;
    }

    public function getColorId()
    {
        return $this->colorId;
    }

    public function setDefaultReminders($defaultReminders)
    {
        $this->defaultReminders = $defaultReminders;
    }

    public function getDefaultReminders()
    {
        return $this->defaultReminders;
    }

    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    public function getDeleted()
    {
        return $this->deleted;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setForegroundColor($foregroundColor)
    {
        $this->foregroundColor = $foregroundColor;
    }

    public function getForegroundColor()
    {
        return $this->foregroundColor;
    }

    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
    }

    public function getHidden()
    {
        return $this->hidden;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setNotificationSettings(Google_Service_Calendar_CalendarListEntryNotificationSettings $notificationSettings)
    {
        $this->notificationSettings = $notificationSettings;
    }

    public function getNotificationSettings()
    {
        return $this->notificationSettings;
    }

    public function setPrimary($primary)
    {
        $this->primary = $primary;
    }

    public function getPrimary()
    {
        return $this->primary;
    }

    public function setSelected($selected)
    {
        $this->selected = $selected;
    }

    public function getSelected()
    {
        return $this->selected;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setSummaryOverride($summaryOverride)
    {
        $this->summaryOverride = $summaryOverride;
    }

    public function getSummaryOverride()
    {
        return $this->summaryOverride;
    }

    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }

    public function getTimeZone()
    {
        return $this->timeZone;
    }
}

class Google_Service_Calendar_CalendarListEntryNotificationSettings extends Google_Collection
{
    protected $collection_key = 'notifications';
    protected $internal_gapi_mappings = array();
    protected $notificationsType = 'Google_Service_Calendar_CalendarNotification';
    protected $notificationsDataType = 'array';


    public function setNotifications($notifications)
    {
        $this->notifications = $notifications;
    }

    public function getNotifications()
    {
        return $this->notifications;
    }
}

class Google_Service_Calendar_CalendarNotification extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $method;
    public $type;


    public function setMethod($method)
    {
        $this->method = $method;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}

class Google_Service_Calendar_Channel extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $address;
    public $expiration;
    public $id;
    public $kind;
    public $params;
    public $payload;
    public $resourceId;
    public $resourceUri;
    public $token;
    public $type;


    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;
    }

    public function getExpiration()
    {
        return $this->expiration;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setParams($params)
    {
        $this->params = $params;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function setPayload($payload)
    {
        $this->payload = $payload;
    }

    public function getPayload()
    {
        return $this->payload;
    }

    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;
    }

    public function getResourceId()
    {
        return $this->resourceId;
    }

    public function setResourceUri($resourceUri)
    {
        $this->resourceUri = $resourceUri;
    }

    public function getResourceUri()
    {
        return $this->resourceUri;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}

class Google_Service_Calendar_ChannelParams extends Google_Model
{
}

class Google_Service_Calendar_ColorDefinition extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $background;
    public $foreground;


    public function setBackground($background)
    {
        $this->background = $background;
    }

    public function getBackground()
    {
        return $this->background;
    }

    public function setForeground($foreground)
    {
        $this->foreground = $foreground;
    }

    public function getForeground()
    {
        return $this->foreground;
    }
}

class Google_Service_Calendar_Colors extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $calendarType = 'Google_Service_Calendar_ColorDefinition';
    protected $calendarDataType = 'map';
    protected $eventType = 'Google_Service_Calendar_ColorDefinition';
    protected $eventDataType = 'map';
    public $kind;
    public $updated;


    public function setCalendar($calendar)
    {
        $this->calendar = $calendar;
    }

    public function getCalendar()
    {
        return $this->calendar;
    }

    public function setEvent($event)
    {
        $this->event = $event;
    }

    public function getEvent()
    {
        return $this->event;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
    }
}

class Google_Service_Calendar_ColorsCalendar extends Google_Model
{
}

class Google_Service_Calendar_ColorsEvent extends Google_Model
{
}

class Google_Service_Calendar_Error extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $domain;
    public $reason;


    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    public function getDomain()
    {
        return $this->domain;
    }

    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    public function getReason()
    {
        return $this->reason;
    }
}

class Google_Service_Calendar_Event extends Google_Collection
{
    protected $collection_key = 'recurrence';
    protected $internal_gapi_mappings = array();
    public $anyoneCanAddSelf;
    protected $attachmentsType = 'Google_Service_Calendar_EventAttachment';
    protected $attachmentsDataType = 'array';
    protected $attendeesType = 'Google_Service_Calendar_EventAttendee';
    protected $attendeesDataType = 'array';
    public $attendeesOmitted;
    public $colorId;
    public $created;
    protected $creatorType = 'Google_Service_Calendar_EventCreator';
    protected $creatorDataType = '';
    public $description;
    protected $endType = 'Google_Service_Calendar_EventDateTime';
    protected $endDataType = '';
    public $endTimeUnspecified;
    public $etag;
    protected $extendedPropertiesType = 'Google_Service_Calendar_EventExtendedProperties';
    protected $extendedPropertiesDataType = '';
    protected $gadgetType = 'Google_Service_Calendar_EventGadget';
    protected $gadgetDataType = '';
    public $guestsCanInviteOthers;
    public $guestsCanModify;
    public $guestsCanSeeOtherGuests;
    public $hangoutLink;
    public $htmlLink;
    public $iCalUID;
    public $id;
    public $kind;
    public $location;
    public $locked;
    protected $organizerType = 'Google_Service_Calendar_EventOrganizer';
    protected $organizerDataType = '';
    protected $originalStartTimeType = 'Google_Service_Calendar_EventDateTime';
    protected $originalStartTimeDataType = '';
    public $privateCopy;
    public $recurrence;
    public $recurringEventId;
    protected $remindersType = 'Google_Service_Calendar_EventReminders';
    protected $remindersDataType = '';
    public $sequence;
    protected $sourceType = 'Google_Service_Calendar_EventSource';
    protected $sourceDataType = '';
    protected $startType = 'Google_Service_Calendar_EventDateTime';
    protected $startDataType = '';
    public $status;
    public $summary;
    public $transparency;
    public $updated;
    public $visibility;


    public function setAnyoneCanAddSelf($anyoneCanAddSelf)
    {
        $this->anyoneCanAddSelf = $anyoneCanAddSelf;
    }

    public function getAnyoneCanAddSelf()
    {
        return $this->anyoneCanAddSelf;
    }

    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;
    }

    public function getAttachments()
    {
        return $this->attachments;
    }

    public function setAttendees($attendees)
    {
        $this->attendees = $attendees;
    }

    public function getAttendees()
    {
        return $this->attendees;
    }

    public function setAttendeesOmitted($attendeesOmitted)
    {
        $this->attendeesOmitted = $attendeesOmitted;
    }

    public function getAttendeesOmitted()
    {
        return $this->attendeesOmitted;
    }

    public function setColorId($colorId)
    {
        $this->colorId = $colorId;
    }

    public function getColorId()
    {
        return $this->colorId;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCreator(Google_Service_Calendar_EventCreator $creator)
    {
        $this->creator = $creator;
    }

    public function getCreator()
    {
        return $this->creator;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setEnd(Google_Service_Calendar_EventDateTime $end)
    {
        $this->end = $end;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function setEndTimeUnspecified($endTimeUnspecified)
    {
        $this->endTimeUnspecified = $endTimeUnspecified;
    }

    public function getEndTimeUnspecified()
    {
        return $this->endTimeUnspecified;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setExtendedProperties(Google_Service_Calendar_EventExtendedProperties $extendedProperties)
    {
        $this->extendedProperties = $extendedProperties;
    }

    public function getExtendedProperties()
    {
        return $this->extendedProperties;
    }

    public function setGadget(Google_Service_Calendar_EventGadget $gadget)
    {
        $this->gadget = $gadget;
    }

    public function getGadget()
    {
        return $this->gadget;
    }

    public function setGuestsCanInviteOthers($guestsCanInviteOthers)
    {
        $this->guestsCanInviteOthers = $guestsCanInviteOthers;
    }

    public function getGuestsCanInviteOthers()
    {
        return $this->guestsCanInviteOthers;
    }

    public function setGuestsCanModify($guestsCanModify)
    {
        $this->guestsCanModify = $guestsCanModify;
    }

    public function getGuestsCanModify()
    {
        return $this->guestsCanModify;
    }

    public function setGuestsCanSeeOtherGuests($guestsCanSeeOtherGuests)
    {
        $this->guestsCanSeeOtherGuests = $guestsCanSeeOtherGuests;
    }

    public function getGuestsCanSeeOtherGuests()
    {
        return $this->guestsCanSeeOtherGuests;
    }

    public function setHangoutLink($hangoutLink)
    {
        $this->hangoutLink = $hangoutLink;
    }

    public function getHangoutLink()
    {
        return $this->hangoutLink;
    }

    public function setHtmlLink($htmlLink)
    {
        $this->htmlLink = $htmlLink;
    }

    public function getHtmlLink()
    {
        return $this->htmlLink;
    }

    public function setICalUID($iCalUID)
    {
        $this->iCalUID = $iCalUID;
    }

    public function getICalUID()
    {
        return $this->iCalUID;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocked($locked)
    {
        $this->locked = $locked;
    }

    public function getLocked()
    {
        return $this->locked;
    }

    public function setOrganizer(Google_Service_Calendar_EventOrganizer $organizer)
    {
        $this->organizer = $organizer;
    }

    public function getOrganizer()
    {
        return $this->organizer;
    }

    public function setOriginalStartTime(Google_Service_Calendar_EventDateTime $originalStartTime)
    {
        $this->originalStartTime = $originalStartTime;
    }

    public function getOriginalStartTime()
    {
        return $this->originalStartTime;
    }

    public function setPrivateCopy($privateCopy)
    {
        $this->privateCopy = $privateCopy;
    }

    public function getPrivateCopy()
    {
        return $this->privateCopy;
    }

    public function setRecurrence($recurrence)
    {
        $this->recurrence = $recurrence;
    }

    public function getRecurrence()
    {
        return $this->recurrence;
    }

    public function setRecurringEventId($recurringEventId)
    {
        $this->recurringEventId = $recurringEventId;
    }

    public function getRecurringEventId()
    {
        return $this->recurringEventId;
    }

    public function setReminders(Google_Service_Calendar_EventReminders $reminders)
    {
        $this->reminders = $reminders;
    }

    public function getReminders()
    {
        return $this->reminders;
    }

    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
    }

    public function getSequence()
    {
        return $this->sequence;
    }

    public function setSource(Google_Service_Calendar_EventSource $source)
    {
        $this->source = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function setStart(Google_Service_Calendar_EventDateTime $start)
    {
        $this->start = $start;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setTransparency($transparency)
    {
        $this->transparency = $transparency;
    }

    public function getTransparency()
    {
        return $this->transparency;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    }

    public function getVisibility()
    {
        return $this->visibility;
    }
}

class Google_Service_Calendar_EventAttachment extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $fileUrl;
    public $iconLink;
    public $mimeType;
    public $title;


    public function setFileUrl($fileUrl)
    {
        $this->fileUrl = $fileUrl;
    }

    public function getFileUrl()
    {
        return $this->fileUrl;
    }

    public function setIconLink($iconLink)
    {
        $this->iconLink = $iconLink;
    }

    public function getIconLink()
    {
        return $this->iconLink;
    }

    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
    }

    public function getMimeType()
    {
        return $this->mimeType;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

class Google_Service_Calendar_EventAttendee extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $additionalGuests;
    public $comment;
    public $displayName;
    public $email;
    public $id;
    public $optional;
    public $organizer;
    public $resource;
    public $responseStatus;
    public $self;


    public function setAdditionalGuests($additionalGuests)
    {
        $this->additionalGuests = $additionalGuests;
    }

    public function getAdditionalGuests()
    {
        return $this->additionalGuests;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setOptional($optional)
    {
        $this->optional = $optional;
    }

    public function getOptional()
    {
        return $this->optional;
    }

    public function setOrganizer($organizer)
    {
        $this->organizer = $organizer;
    }

    public function getOrganizer()
    {
        return $this->organizer;
    }

    public function setResource($resource)
    {
        $this->resource = $resource;
    }

    public function getResource()
    {
        return $this->resource;
    }

    public function setResponseStatus($responseStatus)
    {
        $this->responseStatus = $responseStatus;
    }

    public function getResponseStatus()
    {
        return $this->responseStatus;
    }

    public function setSelf($self)
    {
        $this->self = $self;
    }

    public function getSelf()
    {
        return $this->self;
    }
}

class Google_Service_Calendar_EventCreator extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $displayName;
    public $email;
    public $id;
    public $self;


    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setSelf($self)
    {
        $this->self = $self;
    }

    public function getSelf()
    {
        return $this->self;
    }
}

class Google_Service_Calendar_EventDateTime extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $date;
    public $dateTime;
    public $timeZone;


    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
    }

    public function getDateTime()
    {
        return $this->dateTime;
    }

    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }

    public function getTimeZone()
    {
        return $this->timeZone;
    }
}

class Google_Service_Calendar_EventExtendedProperties extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $private;
    public $shared;


    public function setPrivate($private)
    {
        $this->private = $private;
    }

    public function getPrivate()
    {
        return $this->private;
    }

    public function setShared($shared)
    {
        $this->shared = $shared;
    }

    public function getShared()
    {
        return $this->shared;
    }
}

class Google_Service_Calendar_EventExtendedPropertiesPrivate extends Google_Model
{
}

class Google_Service_Calendar_EventExtendedPropertiesShared extends Google_Model
{
}

class Google_Service_Calendar_EventGadget extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $display;
    public $height;
    public $iconLink;
    public $link;
    public $preferences;
    public $title;
    public $type;
    public $width;


    public function setDisplay($display)
    {
        $this->display = $display;
    }

    public function getDisplay()
    {
        return $this->display;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setIconLink($iconLink)
    {
        $this->iconLink = $iconLink;
    }

    public function getIconLink()
    {
        return $this->iconLink;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setPreferences($preferences)
    {
        $this->preferences = $preferences;
    }

    public function getPreferences()
    {
        return $this->preferences;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }
}

class Google_Service_Calendar_EventGadgetPreferences extends Google_Model
{
}

class Google_Service_Calendar_EventOrganizer extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $displayName;
    public $email;
    public $id;
    public $self;


    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setSelf($self)
    {
        $this->self = $self;
    }

    public function getSelf()
    {
        return $this->self;
    }
}

class Google_Service_Calendar_EventReminder extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $method;
    public $minutes;


    public function setMethod($method)
    {
        $this->method = $method;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;
    }

    public function getMinutes()
    {
        return $this->minutes;
    }
}

class Google_Service_Calendar_EventReminders extends Google_Collection
{
    protected $collection_key = 'overrides';
    protected $internal_gapi_mappings = array();
    protected $overridesType = 'Google_Service_Calendar_EventReminder';
    protected $overridesDataType = 'array';
    public $useDefault;


    public function setOverrides($overrides)
    {
        $this->overrides = $overrides;
    }

    public function getOverrides()
    {
        return $this->overrides;
    }

    public function setUseDefault($useDefault)
    {
        $this->useDefault = $useDefault;
    }

    public function getUseDefault()
    {
        return $this->useDefault;
    }
}

class Google_Service_Calendar_EventSource extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $title;
    public $url;


    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }
}

class Google_Service_Calendar_Events extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $accessRole;
    protected $defaultRemindersType = 'Google_Service_Calendar_EventReminder';
    protected $defaultRemindersDataType = 'array';
    public $description;
    public $etag;
    protected $itemsType = 'Google_Service_Calendar_Event';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $nextSyncToken;
    public $summary;
    public $timeZone;
    public $updated;


    public function setAccessRole($accessRole)
    {
        $this->accessRole = $accessRole;
    }

    public function getAccessRole()
    {
        return $this->accessRole;
    }

    public function setDefaultReminders($defaultReminders)
    {
        $this->defaultReminders = $defaultReminders;
    }

    public function getDefaultReminders()
    {
        return $this->defaultReminders;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setItems($items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setNextSyncToken($nextSyncToken)
    {
        $this->nextSyncToken = $nextSyncToken;
    }

    public function getNextSyncToken()
    {
        return $this->nextSyncToken;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }

    public function getTimeZone()
    {
        return $this->timeZone;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
    }
}

class Google_Service_Calendar_FreeBusyCalendar extends Google_Collection
{
    protected $collection_key = 'errors';
    protected $internal_gapi_mappings = array();
    protected $busyType = 'Google_Service_Calendar_TimePeriod';
    protected $busyDataType = 'array';
    protected $errorsType = 'Google_Service_Calendar_Error';
    protected $errorsDataType = 'array';


    public function setBusy($busy)
    {
        $this->busy = $busy;
    }

    public function getBusy()
    {
        return $this->busy;
    }

    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

    public function getErrors()
    {
        return $this->errors;
    }
}

class Google_Service_Calendar_FreeBusyGroup extends Google_Collection
{
    protected $collection_key = 'errors';
    protected $internal_gapi_mappings = array();
    public $calendars;
    protected $errorsType = 'Google_Service_Calendar_Error';
    protected $errorsDataType = 'array';


    public function setCalendars($calendars)
    {
        $this->calendars = $calendars;
    }

    public function getCalendars()
    {
        return $this->calendars;
    }

    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

    public function getErrors()
    {
        return $this->errors;
    }
}

class Google_Service_Calendar_FreeBusyRequest extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $calendarExpansionMax;
    public $groupExpansionMax;
    protected $itemsType = 'Google_Service_Calendar_FreeBusyRequestItem';
    protected $itemsDataType = 'array';
    public $timeMax;
    public $timeMin;
    public $timeZone;


    public function setCalendarExpansionMax($calendarExpansionMax)
    {
        $this->calendarExpansionMax = $calendarExpansionMax;
    }

    public function getCalendarExpansionMax()
    {
        return $this->calendarExpansionMax;
    }

    public function setGroupExpansionMax($groupExpansionMax)
    {
        $this->groupExpansionMax = $groupExpansionMax;
    }

    public function getGroupExpansionMax()
    {
        return $this->groupExpansionMax;
    }

    public function setItems($items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setTimeMax($timeMax)
    {
        $this->timeMax = $timeMax;
    }

    public function getTimeMax()
    {
        return $this->timeMax;
    }

    public function setTimeMin($timeMin)
    {
        $this->timeMin = $timeMin;
    }

    public function getTimeMin()
    {
        return $this->timeMin;
    }

    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }

    public function getTimeZone()
    {
        return $this->timeZone;
    }
}

class Google_Service_Calendar_FreeBusyRequestItem extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}

class Google_Service_Calendar_FreeBusyResponse extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $calendarsType = 'Google_Service_Calendar_FreeBusyCalendar';
    protected $calendarsDataType = 'map';
    protected $groupsType = 'Google_Service_Calendar_FreeBusyGroup';
    protected $groupsDataType = 'map';
    public $kind;
    public $timeMax;
    public $timeMin;


    public function setCalendars($calendars)
    {
        $this->calendars = $calendars;
    }

    public function getCalendars()
    {
        return $this->calendars;
    }

    public function setGroups($groups)
    {
        $this->groups = $groups;
    }

    public function getGroups()
    {
        return $this->groups;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setTimeMax($timeMax)
    {
        $this->timeMax = $timeMax;
    }

    public function getTimeMax()
    {
        return $this->timeMax;
    }

    public function setTimeMin($timeMin)
    {
        $this->timeMin = $timeMin;
    }

    public function getTimeMin()
    {
        return $this->timeMin;
    }
}

class Google_Service_Calendar_FreeBusyResponseCalendars extends Google_Model
{
}

class Google_Service_Calendar_FreeBusyResponseGroups extends Google_Model
{
}

class Google_Service_Calendar_Setting extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $etag;
    public $id;
    public $kind;
    public $value;


    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}

class Google_Service_Calendar_Settings extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $etag;
    protected $itemsType = 'Google_Service_Calendar_Setting';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $nextSyncToken;


    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setItems($items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setNextSyncToken($nextSyncToken)
    {
        $this->nextSyncToken = $nextSyncToken;
    }

    public function getNextSyncToken()
    {
        return $this->nextSyncToken;
    }
}

class Google_Service_Calendar_TimePeriod extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $end;
    public $start;


    public function setEnd($end)
    {
        $this->end = $end;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function setStart($start)
    {
        $this->start = $start;
    }

    public function getStart()
    {
        return $this->start;
    }
}
