<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/user_list_membership_status.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Enums;

class UserListMembershipStatus
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
?
?google/ads/googleads/v6/enums/user_list_membership_status.protogoogle.ads.googleads.v6.enums"n
UserListMembershipStatusEnum"N
UserListMembershipStatus
UNSPECIFIED 
UNKNOWN
OPEN

CLOSEDB?
!com.google.ads.googleads.v6.enumsBUserListMembershipStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums?GAA?Google.Ads.GoogleAds.V6.Enums?Google\\Ads\\GoogleAds\\V6\\Enums?!Google::Ads::GoogleAds::V6::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

