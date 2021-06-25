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
namespace BigBlueButton\Core;

abstract class ApiMethod
{
    const CREATE                    = 'create';
    const JOIN                      = 'join';
    const ENTER                     = 'enter';
    const END                       = 'end';
    const IS_MEETING_RUNNING        = 'isMeetingRunning';
    const GET_MEETING_INFO          = 'getMeetingInfo';
    const GET_MEETINGS              = 'getMeetings';
    /**
     * @deprecated since 4.0 and will be removed in 4.1. The getDefaultConfigXML API was related to the old Flash client which is no longer available since BigBlueButton 2.2. In BigBlueButton 2.3 the whole API call was removed.
     */
    const GET_DEFAULT_CONFIG_XML    = 'getDefaultConfigXML';
    /**
     * @deprecated since 4.0 and will be removed in 4.1. The setConfigXML API was related to the old Flash client which is no longer available since BigBlueButton 2.2. In BigBlueButton 2.3 the whole API call was removed.
     */
    const SET_CONFIG_XML            = 'setConfigXML';
    /**
     * Note: Unused in the whole project.
     *
     * @deprecated since 4.0 and will be removed in 4.1. The configXML API was related to the old Flash client which is no longer available since BigBlueButton 2.2. In BigBlueButton 2.3 the whole API call was removed.
     */
    const CONFIG_XML                = 'configXML';
    const SIGN_OUT                  = 'signOut';
    const GET_RECORDINGS            = 'getRecordings';
    const PUBLISH_RECORDINGS        = 'publishRecordings';
    const DELETE_RECORDINGS         = 'deleteRecordings';
    const UPDATE_RECORDINGS         = 'updateRecordings';
    const GET_RECORDING_TEXT_TRACKS = 'getRecordingTextTracks';
    const PUT_RECORDING_TEXT_TRACK  = 'putRecordingTextTrack';
    const HOOKS_CREATE              = 'hooks/create';
    const HOOKS_LIST                = 'hooks/list';
    const HOOKS_DESTROY             = 'hooks/destroy';
}
