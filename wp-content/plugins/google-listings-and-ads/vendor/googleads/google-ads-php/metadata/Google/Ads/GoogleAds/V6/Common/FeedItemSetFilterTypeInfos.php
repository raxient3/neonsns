<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/common/feed_item_set_filter_type_infos.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Common;

class FeedItemSetFilterTypeInfos
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
Dgoogle/ads/googleads/v6/enums/feed_item_set_string_filter_type.protogoogle.ads.googleads.v6.enums"i
FeedItemSetStringFilterTypeEnum"F
FeedItemSetStringFilterType
UNSPECIFIED 
UNKNOWN	
EXACTB�
!com.google.ads.googleads.v6.enumsB FeedItemSetStringFilterTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
Dgoogle/ads/googleads/v6/common/feed_item_set_filter_type_infos.protogoogle.ads.googleads.v6.commongoogle/api/annotations.proto"|
DynamicLocationSetFilter
labels (	P
business_name_filter (22.google.ads.googleads.v6.common.BusinessNameFilter"�
BusinessNameFilter
business_name (	o
filter_type (2Z.google.ads.googleads.v6.enums.FeedItemSetStringFilterTypeEnum.FeedItemSetStringFilterType"6
!DynamicAffiliateLocationSetFilter
	chain_ids (B�
"com.google.ads.googleads.v6.commonBFeedItemSetFilterTypeInfosProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v6/common;common�GAA�Google.Ads.GoogleAds.V6.Common�Google\\Ads\\GoogleAds\\V6\\Common�"Google::Ads::GoogleAds::V6::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

