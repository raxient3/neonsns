<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/search_engine_results_page_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Enums;

class SearchEngineResultsPageType
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
Cgoogle/ads/googleads/v6/enums/search_engine_results_page_type.protogoogle.ads.googleads.v6.enums"�
SearchEngineResultsPageTypeEnum"p
SearchEngineResultsPageType
UNSPECIFIED 
UNKNOWN
ADS_ONLY
ORGANIC_ONLY
ADS_AND_ORGANICB�
!com.google.ads.googleads.v6.enumsB SearchEngineResultsPageTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

