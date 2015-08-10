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
        $this->version = 'v3';
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
     * @return Google_Service_Contacts_Photo
     *
     */
    public function get($contactId)
    {
        $params = array('contactId' => $contactId);
        return $this->call('get', array($params), "Google_Service_Contacts_Photo");
    }

    /**
     * Updates a contact photo. (photos.update)
     *
     * @param string $contactId Contact identifier.
     * @param Google_Photo $postBody
     *
     * @return Google_Service_Contacts_Photo
     */
    public function update($contactId, Google_Service_Contacts_Photo $postBody)
    {
        $params = array('contactId' => $contactId, 'postBody' => $postBody);
        return $this->call('update', array($params), "Google_Service_Contacts_Photo");
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
     * @return Google_Service_Contacts_Group
     *
     */
    public function get($groupId)
    {
        $params = array('groupId' => $groupId);
        return $this->call('get', array($params), "Google_Service_Contacts_Group");
    }

    /**
     * Creates a group. (groups.insert)
     *
     * @param Google_Group $postBody
     *
     * @return Google_Service_Contacts_Group
     *
     */
    public function insert(Google_Service_Contacts_Group $postBody)
    {
        $params = array('postBody' => $postBody);
        return $this->call('insert', array($params), "Google_Service_Contacts_Group");
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
     * @return Google_Service_Contacts_Groups
     *
     */
    public function listGroups($optParams = array())
    {
        $params = $optParams;
        return $this->call('list', array($params), "Google_Service_Contacts_Groups");
    }

    /**
     * Updates a group. (groups.update)
     *
     * @param string $groupId Contact identifier.
     * @param Google_Groups $postBody
     *
     * @return Google_Service_Contacts_Group
     */
    public function update($groupId, Google_Service_Contacts_Group $postBody)
    {
        $params = array('groupId' => $groupId, 'postBody' => $postBody);
        return $this->call('update', array($params), "Google_Service_Contacts_Group");
    }

    /**
     * Performs batch operations on groups. (groups.batch)
     *
     * @param Google_Groups $postBody
     *
     * @return Google_Service_Contacts_Groups
     */
    public function batch(Google_Service_Contacts_Groups $postBody)
    {
        $params = array('postBody' => $postBody);
        return $this->call('batch', array($params), "Google_Service_Contacts_Groups");
    }
}

class Google_Service_Contacts_Contact extends Google_Model
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
    protected $nicknameType = 'Google_Service_Contacts_Nickname';
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

