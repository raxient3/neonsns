<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/user_list_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Enums;

class UserListType
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
2google/ads/googleads/v6/enums/user_list_type.protogoogle.ads.googleads.v6.enums"�
UserListTypeEnum"�
UserListType
UNSPECIFIED 
UNKNOWN
REMARKETING
LOGICAL
EXTERNAL_REMARKETING

RULE_BASED
SIMILAR
	CRM_BASEDB�
!com.google.ads.googleads.v6.enumsBUserListTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

