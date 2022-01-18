<?php
/**
 * BigBlueButton open source conferencing system - https://www.bigbluebutton.org/.
 *
 * Copyright (c) 2016-2018 BigBlueButton Inc. and by respective authors (see below).
 *
 * This program is free software; you can redistribute it and/or modify it under the
 * terms of the GNU Lesser General Public License as published by the Free Software
 * Foundation; either version 3.0 of the License, or (at your option) any later
 * version.
 *
 * BigBlueButton is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
 * PARTICULAR PURPOSE. See the GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License along
 * with BigBlueButton; if not, see <http://www.gnu.org/licenses/>.
 */
namespace BigBlueButton\Parameters;

/**
 * Class JoinMeetingParametersTest.
 *
 * @method string getFullName()
 * @method $this setFullName(string $fullName)
 * @method string getMeetingID()
 * @method $this setMeetingID(string $id)
 * @method string getPassword()
 * @method $this setPassword(string $password)
 * @method string getCreateTime()
 * @method $this setCreateTime(string $createTime)
 * @method string getUserID()
 * @method $this setUserID(string $userID)
 * @method string getWebVoiceConf()
 * @method $this setWebVoiceConf(string $webVoiceConf)
 * @method string getConfigToken()
 * @method $this setConfigToken(string $configToken)
 * @method string getDefaultLayout()
 * @method $this setDefaultLayout(string $defaultLayout)
 * @method string getAvatarURL()
 * @method $this setAvatarURL(string $avatarURL)
 * @method bool|null isRedirect()
 * @method $this setRedirect(bool $redirect)
 * @method string getClientURL()
 * @method $this setClientURL(string $clientURL)
 * @method bool|null isJoinViaHtml5()
 * @method $this setJoinViaHtml5(bool $joinViaHtml)
 * @method bool|null isGuest()
 * @method $this setGuest(bool $guest)
 * @method string getRole()
 * @method $this setRole(string $role)
 * @method bool|null isExcludeFromDashboard()
 * @method $this setExcludeFromDashboard(bool $excludeFromDashboard)
 */
class JoinMeetingParameters extends UserDataParameters
{
    const MODERATOR = 'MODERATOR';
    const VIEWER    = 'VIEWER';

    /**
     * @var string
     */
    protected $fullName;

    /**
     * @var string
     */
    protected $meetingID;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var int
     */
    protected $createTime;

    /**
     * @var string
     */
    protected $userID;

    /**
     * @var string
     */
    protected $webVoiceConf;

    /**
     * @var string
     */
    protected $configToken;

    /**
     * @var string
     */
    protected $defaultLayout;

    /**
     * @var string
     */
    protected $avatarURL;

    /**
     * @var boolean
     */
    protected $redirect;

    /**
     * @var string
     */
    protected $clientURL;

    /**
     * @var boolean
     */
    protected $joinViaHtml5;

    /**
     * @var boolean
     */
    protected $guest;

    /**
     * @var string
     */
    protected $role;

    /**
     * @var boolean
     */
    protected $excludeFromDashboard;

    /**
     * JoinMeetingParametersTest constructor.
     *
     * @param string $meetingId
     * @param string $fullName
     * @param string $password
     */
    public function __construct(string $meetingID, string $fullName, string $password)
    {
        $this->meetingID = $meetingID;
        $this->fullName  = $fullName;
        $this->password  = $password;
    }

    /**
     * @deprecated use getMeetingID()
     * @return string
     */
    public function getMeetingId()
    {
        return $this->meetingID;
    }

    /**
     * @deprecated use setMeetingID()
     * @return JoinMeetingParameters
     */
    public function setMeetingId(string $meetingID)
    {
        $this->meetingID = $meetingID;

        return $this;
    }

    /**
     * @deprecated use getCreateTime()
     * @return int
     */
    public function getCreationTime()
    {
        return $this->createTime;
    }

    /**
     * @deprecated use setCreateTime()
     * @return JoinMeetingParameters
     */
    public function setCreationTime(int $createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * @deprecated use getFullName()
     * @return string
     */
    public function getUsername()
    {
        return $this->fullName;
    }

    /**
     * @deprecated use setFullName()
     * @return JoinMeetingParameters
     */
    public function setUsername(string $fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * @deprecated use getUserID()
     * @return string
     */
    public function getUserId()
    {
        return $this->userID;
    }

    /**
     * @deprecated use setUserID()
     * @return JoinMeetingParameters
     */
    public function setUserId(string $userID)
    {
        $this->userID = $userID;

        return $this;
    }
}
