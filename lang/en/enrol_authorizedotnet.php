<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'enrol_authorizedotnet', language 'en'.
 *
 * @package    enrol_authorizedotnet
 * @author     DualCube <admin@dualcube.com>
 * @copyright  2021 DualCube (https://dualcube.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['pluginname'] = 'Authorize.net';
$string['pluginname_desc'] = 'The Authorize.net module allows you to set up paid courses.  If the cost for any course is zero, then students are not asked to pay for entry.  There is a site-wide cost that you set here as a default for the whole site and then a course setting that you can set for each course individually. The course cost overrides the site cost.';
$string['loginid'] = 'Authorize.net Login ID';
$string['transactionkey'] = 'Authorize.net Transaction Key';
$string['merchantmd5hash'] = 'Authorize.net Merchant MD5 hash key';
$string['clientkey'] = 'Authorize.net public Client key';
$string['checkproductionmode'] = 'Enable test Mode';
$string['mailadmins'] = 'Notify admin';
$string['mailstudents'] = 'Notify students';
$string['mailteachers'] = 'Notify teachers';
$string['expiredaction'] = 'Enrolment expiration action';
$string['expiredaction_help'] = 'Select action to carry out when user enrolment expires. Please note that some user data and settings are purged from course during course unenrolment.';
$string['cost'] = 'Enrol cost';
$string['costerror'] = 'The enrolment cost is not numeric';
$string['costorkey'] = 'Please choose one of the following methods of enrolment.';
$string['currency'] = 'Currency';
$string['currencynote'] = 'Authorize.Net supports a single currency per gateway account, so if you need to accept payments in multiple currencies, your client must have multiple gateway accounts and your code will switch to the correct currency.';
$string['assignrole'] = 'Assign role';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during Authorize.net enrolments';
$string['enrolenddate'] = 'End date';
$string['enrolenddate_help'] = 'If enabled, users can be enrolled until this date only.';
$string['enrolenddaterror'] = 'Enrolment end date cannot be earlier than start date';
$string['enrolperiod'] = 'Enrolment duration';
$string['enrolperiod_desc'] = 'Default length of time that the enrolment is valid. If set to zero, the enrolment duration will be unlimited by default.';
$string['enrolperiod_help'] = 'Length of time that the enrolment is valid, starting with the moment the user is enrolled. If disabled, the enrolment duration will be unlimited.';
$string['enrolstartdate'] = 'Start date';
$string['enrolstartdate_help'] = 'If enabled, users can be enrolled from this date onward only.';
$string['expiredaction'] = 'Enrolment expiration action';
$string['expiredaction_help'] = 'Select action to carry out when user enrolment expires. Please note that some user data and settings are purged from course during course unenrolment.';
$string['authorizedotnet:config'] = 'Configure Authorize.net enrol instances';
$string['authorizedotnet:manage'] = 'Manage enrolled users';
$string['authorizedotnet:unenrol'] = 'Unenrol users from course';
$string['authorizedotnet:unenrolself'] = 'Unenrol self from the course';
$string['status'] = 'Allow Authorize.net enrolments';
$string['status_desc'] = 'Allow users to use Authorize.net to enrol into a course by default.';
$string['unenrolselfconfirm'] = 'Do you really want to unenrol yourself from course "{$a}"?';
$string['token_empty_error'] = 'Web service token could not be empty';
$string['webservice_token_string'] = 'User Token';
$string['create_user_token'] = 'To make stripe callback works, kindly  enable Moodle REST protocol on your site';
$string['enabled_rest_protocol'] = 'Also kindly create your token';
$string['from_here'] = 'from here';
$string['requires_payment'] = 'This course requires a payment for entry.';
$string['make_payment'] = 'Make Your Payment';
$string['card_payment'] = 'Card Payment';
$string['account_payment'] = 'Account Payment';
$string['pay'] = 'Pay';
$string['success'] = 'Success';
$string['successmsg'] = 'Your payment has been successful!';
$string['tarnsactionfail'] = 'Transaction failed! ';
$string['errorcode'] = ' Error code  : ';
$string['errormsg'] = ' Error message : ';
$string['transactionfailmsg'] = 'Transaction failed! No response returned';
$string['errorsubmission'] = 'Error on form submission.';
$string['orderinfo'] = 'Order information';
$string['paymentinfo'] = 'Payment information';
$string['billinginfo'] = 'Billing information';
$string['cardnumber'] = 'Card number';
$string['cost'] = 'Cost :';
$string['cardnumberplaceholder'] = '';
$string['cardnumberreq'] = '(enter card number without spaces or dashes)';
$string['expdate'] = 'Expiry date';
$string['expdatedes'] = '(mm yyyy)';
$string['expmonthplaceholder'] = 'MM';
$string['expyearplaceholder'] = 'YYYY';
$string['cardcode'] = 'Card code';
$string['cardcodeplaceholder'] = 'xxx';
$string['whatscvv'] = 'what\'s that';
$string['firstname'] = 'First name';
$string['lastname'] = 'Last name';
$string['address'] = 'Address';
$string['addressplaceholder'] = '808 E UTAH VALLY DR';
$string['ZIP'] = 'ZIP/Postal code';
$string['ZIPplaceholder'] = '46214-9707';
$string['clientkey_descrition'] = 'Generate client key from merchant account & paste here';
$string['transactionkey_description'] = 'Copy API transaction Key from merchant account & paste here';
$string['loginid_description'] = 'Copy API login ID from merchant account & paste here';
$string['invaliduserid'] = 'Not a valid user id';
$string['invalidcourseid'] = 'Not a valid course id';
$string['invalidcontextid'] = 'Not a valid context id';
$string['invalidintanceid'] = 'Not a valid instance id';
$string['invaliduserid'] = 'Not a valid user id';
$string['expmonth'] = 'Expiration  month';
$string['expyear'] = 'Expiration  year';
$string['email'] = 'Email';
$string['phone'] = 'Phone';
$string['optional'] = 'Optional';
$string['city'] = 'City';
$string['state'] = 'State';
$string['country'] = 'Country';
$string['country_us'] = 'United States';
$string['country_australia'] = 'Australia';
$string['country_canada'] = 'Canada';
$string['emailplaceholder'] = 'abc@gmail.com';
$string['phoneplaceholder'] = '123-456-7890';
$string['cityplaceholder'] = 'San Francisco';
$string['stateplaceholder'] = 'Sydney';
$string['notselected'] = 'Please select your country';
$string['required'] = 'required';
$string['invalidsesskey'] = 'Invalid sesskey';
