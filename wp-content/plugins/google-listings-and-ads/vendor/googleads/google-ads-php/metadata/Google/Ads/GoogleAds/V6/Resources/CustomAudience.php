<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/custom_audience.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Resources;

class CustomAudience
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
:google/ads/googleads/v6/enums/custom_audience_status.protogoogle.ads.googleads.v6.enums"j
CustomAudienceStatusEnum"N
CustomAudienceStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
!com.google.ads.googleads.v6.enumsBCustomAudienceStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
?google/ads/googleads/v6/enums/custom_audience_member_type.protogoogle.ads.googleads.v6.enums"�
CustomAudienceMemberTypeEnum"k
CustomAudienceMemberType
UNSPECIFIED 
UNKNOWN
KEYWORD
URL
PLACE_CATEGORY
APPB�
!com.google.ads.googleads.v6.enumsBCustomAudienceMemberTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
8google/ads/googleads/v6/enums/custom_audience_type.protogoogle.ads.googleads.v6.enums"�
CustomAudienceTypeEnum"k
CustomAudienceType
UNSPECIFIED 
UNKNOWN
AUTO
INTEREST
PURCHASE_INTENT

SEARCHB�
!com.google.ads.googleads.v6.enumsBCustomAudienceTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�

7google/ads/googleads/v6/resources/custom_audience.proto!google.ads.googleads.v6.resources:google/ads/googleads/v6/enums/custom_audience_status.proto8google/ads/googleads/v6/enums/custom_audience_type.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
CustomAudienceF
resource_name (	B/�A�A)
\'googleads.googleapis.com/CustomAudience
id (B�Aa
status (2L.google.ads.googleads.v6.enums.CustomAudienceStatusEnum.CustomAudienceStatusB�A
name (	V
type (2H.google.ads.googleads.v6.enums.CustomAudienceTypeEnum.CustomAudienceType
description (	H
members (27.google.ads.googleads.v6.resources.CustomAudienceMember:j�Ag
\'googleads.googleapis.com/CustomAudience<customers/{customer_id}/customAudiences/{custom_audience_id}"�
CustomAudienceMemberi
member_type (2T.google.ads.googleads.v6.enums.CustomAudienceMemberTypeEnum.CustomAudienceMemberType
keyword (	H 
url (	H 
place_category (H 
app (	H B
valueB�
%com.google.ads.googleads.v6.resourcesBCustomAudienceProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

