<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/customer_user_access.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Resources;

class CustomerUserAccess
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/ads/googleads/v6/enums/access_role.protogoogle.ads.googleads.v6.enums"t
AccessRoleEnum"b

AccessRole
UNSPECIFIED 
UNKNOWN	
ADMIN
STANDARD
	READ_ONLY

EMAIL_ONLYB�
!com.google.ads.googleads.v6.enumsBAccessRoleProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
<google/ads/googleads/v6/resources/customer_user_access.proto!google.ads.googleads.v6.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
CustomerUserAccessJ
resource_name (	B3�A�A-
+googleads.googleapis.com/CustomerUserAccess
user_id (B�A
email_address (	B�AH �M
access_role (28.google.ads.googleads.v6.enums.AccessRoleEnum.AccessRole+
access_creation_date_time (	B�AH�,
inviter_user_email_address (	B�AH�:h�Ae
+googleads.googleapis.com/CustomerUserAccess6customers/{customer_id}/customerUserAccesses/{user_id}B
_email_addressB
_access_creation_date_timeB
_inviter_user_email_addressB�
%com.google.ads.googleads.v6.resourcesBCustomerUserAccessProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

