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
    public $photos;
    public $groups;


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
        $this->version = '3.0';
        $this->serviceName = 'contacts';

        $this->contacts = new Google_Service_Contacts_Contacts_Resource(
            $this,
            $this->serviceName,
            'contacts',
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
        $this->photos = new Google_Service_Contacts_Photos_Resource(
            $this,
            $this->serviceName,
            'photos',
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
        $this->groups = new Google_Service_Contacts_Groups_Resource(
            $this,
            $this->serviceName,
            'groups',
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
                        'path' => 'groups/default/full/{groupId}',
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
class Google_Service_Contacts_Contacts_Resource extends Google_Service_Resource
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
     * Returns a contact. (contacts.get)
     *
     * @param string $contactId Contact identifier.
     *
     * @return Google_Service_Contacts_Response
     *
     */
    public function get($contactId, $optParams = array())
    {
        $params = array('contactId' => $contactId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Contacts_Response");
    }

    /**
     * Creates a contact. (contacts.insert)
     *
     * @param Google_Contact $postBody
     *
     * @return Google_Service_Contacts_Response
     *
     */
    public function insert(Google_Service_Contacts_Entry $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Contacts_Response");
    }

    /**
     * Returns all contacts. (contacts.list)
     *
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
     * @return Google_Service_Contacts_Response
     *
     */
    public function listContacts($optParams = array())
    {
        $params = $optParams;
        return $this->call('list', array($params), "Google_Service_Contacts_Response");
    }

    /**
     * Updates a contact. (contacts.update)
     *
     * @param string $contactId Contact identifier.
     * @param Google_Contact $postBody
     *
     * @return Google_Service_Contacts_Response
     */
    public function update($contactId, Google_Service_Contacts_Entry $postBody, $optParams = array())
    {
        $params = array('contactId' => $contactId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Contacts_Response");
    }

    /**
     * Performs batch operations on contacts. (contacts.batch)
     *
     * @param Google_Contacts $postBody
     *
     * @return Google_Service_Contacts_Response
     */
    public function batch(Google_Service_Contacts_Feed $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('batch', array($params), "Google_Service_Contacts_Response");
    }
}

/**
 * The "photos" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contactService = new Google_Service_Contacts(...);
 *   $photos = $contactService->photos;
 *  </code>
 */
class Google_Service_Contacts_Photos_Resource extends Google_Service_Resource
{

    /**
     * Returns a contact photo. (photos.get)
     *
     * @param string $contactId Contact identifier.
     *
     * @return string
     *
     */
    public function get($contactId, $optParams = array())
    {
        $params = array('contactId' => $contactId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params));
    }

    /**
     * Updates a contact photo. (photos.update)
     *
     * @param string $contactId Contact identifier.
     * @param Google_Photo $postBody
     *
     * @return string
     */
    public function update($contactId, $postBody, $optParams = array())
    {
        $params = array('contactId' => $contactId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params));
    }

    /**
     * Deletes a contact photo. (photos.delete)
     *
     * @param string $contactId Contact identifier.
     *
     */
    public function delete($contactId)
    {
        $params = array('contactId' => $contactId);
        return $this->call('delete', array($params));
    }
}

/**
 * The "groups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contactService = new Google_Service_Contacts(...);
 *   $groups = $contactService->groups;
 *  </code>
 */
class Google_Service_Contacts_Groups_Resource extends Google_Service_Resource
{
    /**
     * Deletes a group. (groups.delete)
     *
     * @param string $groupId Group identifier.
     *
     */
    public function delete($groupId)
    {
        $params = array('groupId' => $groupId);
        return $this->call('delete', array($params));
    }

    /**
     * Returns a group. (groups.get)
     *
     * @param string $groupId Group identifier.
     *
     * @return Google_Service_Contacts_Response
     *
     */
    public function get($groupId, $optParams = array())
    {
        $params = array('groupId' => $groupId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Contacts_Response");
    }

    /**
     * Creates a group. (groups.insert)
     *
     * @param Google_Group $postBody
     *
     * @return Google_Service_Contacts_Response
     *
     */
    public function insert(Google_Service_Contacts_Entry $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Contacts_Response");
    }

    /**
     * Returns all groups. (groups.list)
     *
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
     *
     * @return Google_Service_Contacts_Response
     *
     */
    public function listGroups($optParams = array())
    {
        $params = $optParams;
        return $this->call('list', array($params), "Google_Service_Contacts_Response");
    }

    /**
     * Updates a group. (groups.update)
     *
     * @param string $groupId Contact identifier.
     * @param Google_Groups $postBody
     *
     * @return Google_Service_Contacts_Response
     */
    public function update($groupId, Google_Service_Contacts_Entry $postBody, $optParams = array())
    {
        $params = array('groupId' => $groupId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Contacts_Response");
    }

    /**
     * Performs batch operations on groups. (groups.batch)
     *
     * @param Google_Groups $postBody
     *
     * @return Google_Service_Contacts_Response
     */
    public function batch(Google_Service_Contacts_Feed $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('batch', array($params), "Google_Service_Contacts_Response");
    }
}

class Google_Service_Contacts_Response extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $version;
    public $encoding;
    protected $entryType = 'Google_Service_Contacts_Entry';
    protected $entryDataType = '';
    protected $feedType = 'Google_Service_Contacts_Feed';
    protected $feedDataType = '';

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return mixed
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * @param mixed $encoding
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
    }

    /**
     * @return string
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * @param string $entry
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;
    }

    /**
     * @return string
     */
    public function getFeed()
    {
        return $this->feed;
    }

    /**
     * @param string $feed
     */
    public function setFeed($feed)
    {
        $this->feed = $feed;
    }


}

class Google_Service_Contacts_Feed extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $idType = 'Google_Service_Contacts_Value';
    protected $idDataType = '';
    protected $updatedType = 'Google_Service_Contacts_Value';
    protected $updatedDataType = '';
    protected $categoryType = 'Google_Service_Contacts_Category';
    protected $categoryDataType = 'array';
    protected $titleType = 'Google_Service_Contacts_Value';
    protected $titleDataType = '';
    protected $linkType = 'Google_Service_Contacts_Link';
    protected $linkDataType = 'array';
    protected $authorType = 'Google_Service_Contacts_Author';
    protected $authorDataType = 'array';
    protected $totalResultsType = 'Google_Service_Contacts_Value';
    protected $totalResultsDataType = '';
    protected $startIndexType = 'Google_Service_Contacts_Value';
    protected $startIndexDataType = '';
    protected $itemsPerPageType = 'Google_Service_Contacts_Value';
    protected $itemsPerPageDataType = '';
    protected $entryType = 'Google_Service_Contacts_Entry';
    protected $entryDataType = 'array';

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getTotalResults()
    {
        return $this->totalResults;
    }

    /**
     * @param string $totalResults
     */
    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }

    /**
     * @return string
     */
    public function getStartIndex()
    {
        return $this->startIndex;
    }

    /**
     * @param string $startIndex
     */
    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;
    }

    /**
     * @return string
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
    }

    /**
     * @param string $itemsPerPage
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }

    /**
     * @return string
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * @param string $entry
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;
    }


}

class Google_Service_Contacts_Entry extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $idType = 'Google_Service_Contacts_Value';
    protected $idDataType = '';
    public $etag;
    protected $updatedType = 'Google_Service_Contacts_Value';
    protected $updatedDataType = '';
    protected $categoryType = 'Google_Service_Contacts_Category';
    protected $categoryDataType = 'array';
    protected $titleType = 'Google_Service_Contacts_Value';
    protected $titleDataType = '';
    protected $contentType = 'Google_Service_Contacts_Value';
    protected $contentDataType = '';
    protected $linkType = 'Google_Service_Contacts_Link';
    protected $linkDataType = 'array';
    protected $nameType = 'Google_Service_Contacts_Name';
    protected $nameDataType = '';
    protected $nicknameType = 'Google_Service_Contacts_Value';
    protected $nicknameDataType = '';
    protected $birthdayType = 'Google_Service_Contacts_Birthday';
    protected $birthdayDataType = '';
    protected $organizationType = 'Google_Service_Contacts_Organization';
    protected $organizationDataType = 'array';
    protected $emailType = 'Google_Service_Contacts_Email';
    protected $emailDataType = 'array';
    protected $imType = 'Google_Service_Contacts_IM';
    protected $imDataType = 'array';
    protected $phoneNumberType = 'Google_Service_Contacts_PhoneNumber';
    protected $phoneNumberDataType = 'array';
    protected $structuredPostalAddressType = 'Google_Service_Contacts_StructuredAddress';
    protected $structuredPostalAddressDataType = 'array';
    protected $relationType = 'Google_Service_Contacts_Relation';
    protected $relationDataType = 'array';
    protected $userDefinedFieldType = 'Google_Service_Contacts_UserDefinedField';
    protected $userDefinedFieldDataType = 'array';
    protected $websiteType = 'Google_Service_Contacts_Website';
    protected $websiteDataType = 'array';
    protected $groupMembershipInfoType = 'Google_Service_Contacts_GroupMembershipInfo';
    protected $groupMembershipInfoDataType = 'array';
    protected $extendedPropertyType = 'Google_Service_Contacts_ExtendedProperty';
    protected $extendedPropertyDataType = 'array';

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param mixed $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    /**
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @param string $nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    /**
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param string $organization
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getIm()
    {
        return $this->im;
    }

    /**
     * @param string $im
     */
    public function setIm($im)
    {
        $this->im = $im;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return string
     */
    public function getStructuredPostalAddress()
    {
        return $this->structuredPostalAddress;
    }

    /**
     * @param string $structuredPostalAddress
     */
    public function setStructuredPostalAddress($structuredPostalAddress)
    {
        $this->structuredPostalAddress = $structuredPostalAddress;
    }

    /**
     * @return string
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * @param string $relation
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;
    }

    /**
     * @return string
     */
    public function getUserDefinedField()
    {
        return $this->userDefinedField;
    }

    /**
     * @param string $userDefinedField
     */
    public function setUserDefinedField($userDefinedField)
    {
        $this->userDefinedField = $userDefinedField;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return string
     */
    public function getGroupMembershipInfo()
    {
        return $this->groupMembershipInfo;
    }

    /**
     * @param string $groupMembershipInfo
     */
    public function setGroupMembershipInfo($groupMembershipInfo)
    {
        $this->groupMembershipInfo = $groupMembershipInfo;
    }

    /**
     * @return string
     */
    public function getExtendedProperty()
    {
        return $this->extendedProperty;
    }

    /**
     * @param string $extendedProperty
     */
    public function setExtendedProperty($extendedProperty)
    {
        $this->extendedProperty = $extendedProperty;
    }
}

class Google_Service_Contacts_Value extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $value;

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}

class Google_Service_Contacts_Category extends Google_Collection
{
    protected $collection_key = 'category';
    protected $internal_gapi_mappings = array();
    public $scheme;
    public $term;

    /**
     * @return mixed
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * @param mixed $scheme
     */
    public function setScheme($scheme)
    {
        $this->scheme = $scheme;
    }

    /**
     * @return mixed
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @param mixed $term
     */
    public function setTerm($term)
    {
        $this->term = $term;
    }
}

class Google_Service_Contacts_Link extends Google_Collection
{
    protected $collection_key = 'link';
    protected $internal_gapi_mappings = array();
    public $rel;
    public $type;
    public $href;
    public $etag;

    /**
     * @return mixed
     */
    public function getRel()
    {
        return $this->rel;
    }

    /**
     * @param mixed $rel
     */
    public function setRel($rel)
    {
        $this->rel = $rel;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * @param mixed $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }

    /**
     * @return mixed
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param mixed $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
}

class Google_Service_Contacts_Name extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $fullNameType = 'Google_Service_Contacts_Value';
    protected $fullNameDataType = '';
    protected $givenNameType = 'Google_Service_Contacts_Value';
    protected $givenNameDataType = '';
    protected $familyNameType = 'Google_Service_Contacts_Value';
    protected $familyNameDataType = '';

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * @return string
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * @param string $givenName
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    /**
     * @return string
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * @param string $familyName
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }
}

class Google_Service_Contacts_Birthday extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $when;

    /**
     * @return mixed
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * @param mixed $when
     */
    public function setWhen($when)
    {
        $this->when = $when;
    }
}

class Google_Service_Contacts_Organization extends Google_Collection
{
    protected $collection_key = 'organization';
    protected $internal_gapi_mappings = array();
    public $rel;
    protected $orgNameType = 'Google_Service_Contacts_Value';
    protected $orgNameDataType = '';
    protected $orgTitleType = 'Google_Service_Contacts_Value';
    protected $orgTitleDataType = '';

    /**
     * @return mixed
     */
    public function getRel()
    {
        return $this->rel;
    }

    /**
     * @param mixed $rel
     */
    public function setRel($rel)
    {
        $this->rel = $rel;
    }

    /**
     * @return string
     */
    public function getOrgName()
    {
        return $this->orgName;
    }

    /**
     * @param string $orgName
     */
    public function setOrgName($orgName)
    {
        $this->orgName = $orgName;
    }

    /**
     * @return string
     */
    public function getOrgTitle()
    {
        return $this->orgTitle;
    }

    /**
     * @param string $orgTitle
     */
    public function setOrgTitle($orgTitle)
    {
        $this->orgTitle = $orgTitle;
    }
}

class Google_Service_Contacts_Email extends Google_Collection
{
    protected $collection_key = 'email';
    protected $internal_gapi_mappings = array();
    public $address;
    public $primary;
    public $rel;

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * @param mixed $primary
     */
    public function setPrimary($primary)
    {
        $this->primary = $primary;
    }

    /**
     * @return mixed
     */
    public function getRel()
    {
        return $this->rel;
    }

    /**
     * @param mixed $rel
     */
    public function setRel($rel)
    {
        $this->rel = $rel;
    }
}

class Google_Service_Contacts_IM extends Google_Collection
{
    protected $collection_key = 'im';
    protected $internal_gapi_mappings = array();
    public $address;
    public $protocol;
    public $rel;

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * @param mixed $protocol
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
    }

    /**
     * @return mixed
     */
    public function getRel()
    {
        return $this->rel;
    }

    /**
     * @param mixed $rel
     */
    public function setRel($rel)
    {
        $this->rel = $rel;
    }
}

class Google_Service_Contacts_PhoneNumber extends Google_Collection
{
    protected $collection_key = 'phoneNumber';
    protected $internal_gapi_mappings = array();
    public $rel;
    public $primary;
    public $value;

    /**
     * @return mixed
     */
    public function getRel()
    {
        return $this->rel;
    }

    /**
     * @param mixed $rel
     */
    public function setRel($rel)
    {
        $this->rel = $rel;
    }

    /**
     * @return mixed
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * @param mixed $primary
     */
    public function setPrimary($primary)
    {
        $this->primary = $primary;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}

class Google_Service_Contacts_StructuredAddress extends Google_Collection
{
    protected $collection_key = 'structuredAddress';
    protected $internal_gapi_mappings = array();
    public $rel;
    public $primary;
    protected $formattedAddressType = 'Google_Service_Contacts_Value';
    protected $formattedAddressDataType = '';
    protected $streetType = 'Google_Service_Contacts_Value';
    protected $streetDataType = '';
    protected $cityType = 'Google_Service_Contacts_Value';
    protected $cityDataType = '';
    protected $regionType = 'Google_Service_Contacts_Value';
    protected $regionDataType = '';

    /**
     * @return mixed
     */
    public function getRel()
    {
        return $this->rel;
    }

    /**
     * @param mixed $rel
     */
    public function setRel($rel)
    {
        $this->rel = $rel;
    }

    /**
     * @return mixed
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * @param mixed $primary
     */
    public function setPrimary($primary)
    {
        $this->primary = $primary;
    }

    /**
     * @return string
     */
    public function getFormattedAddress()
    {
        return $this->formattedAddress;
    }

    /**
     * @param string $formattedAddress
     */
    public function setFormattedAddress($formattedAddress)
    {
        $this->formattedAddress = $formattedAddress;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }
}

class Google_Service_Contacts_Relation extends Google_Collection
{
    protected $collection_key = 'relation';
    protected $internal_gapi_mappings = array();
    public $value;
    public $rel;

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getRel()
    {
        return $this->rel;
    }

    /**
     * @param mixed $rel
     */
    public function setRel($rel)
    {
        $this->rel = $rel;
    }
}

class Google_Service_Contacts_UserDefinedField extends Google_Collection
{
    protected $collection_key = 'userDefinedFields';
    protected $internal_gapi_mappings = array();
    public $key;
    public $value;

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}

class Google_Service_Contacts_Website extends Google_Collection
{
    protected $collection_key = 'website';
    protected $internal_gapi_mappings = array();
    public $href;
    public $primary;
    public $rel;

    /**
     * @return mixed
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * @param mixed $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }

    /**
     * @return mixed
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * @param mixed $primary
     */
    public function setPrimary($primary)
    {
        $this->primary = $primary;
    }

    /**
     * @return mixed
     */
    public function getRel()
    {
        return $this->rel;
    }

    /**
     * @param mixed $rel
     */
    public function setRel($rel)
    {
        $this->rel = $rel;
    }
}

class Google_Service_Contacts_GroupMembershipInfo extends Google_Collection
{
    protected $collection_key = 'groupMembershipInfo';
    protected $internal_gapi_mappings = array();
    public $deleted;
    public $href;

    /**
     * @return mixed
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param mixed $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    /**
     * @return mixed
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * @param mixed $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }
}

class Google_Service_Contacts_ExtendedProperty extends Google_Collection
{
    protected $collection_key = 'extendedProperty';
    protected $internal_gapi_mappings = array();
    public $name;
    public $value;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}

class Google_Service_Contacts_Author extends Google_Collection
{
    protected $collection_key = 'author';
    protected $internal_gapi_mappings = array();
    protected $nameType = 'Google_Service_Contacts_Value';
    protected $nameDataType = '';
    protected $emailType = 'Google_Service_Contacts_Value';
    protected $emailDataType = '';

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $value
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}