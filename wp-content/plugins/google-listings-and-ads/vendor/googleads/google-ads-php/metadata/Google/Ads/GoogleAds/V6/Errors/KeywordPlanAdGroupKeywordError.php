<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/errors/keyword_plan_ad_group_keyword_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Errors;

class KeywordPlanAdGroupKeywordError
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
�
Hgoogle/ads/googleads/v6/errors/keyword_plan_ad_group_keyword_error.protogoogle.ads.googleads.v6.errors"�
"KeywordPlanAdGroupKeywordErrorEnum"�
KeywordPlanAdGroupKeywordError
UNSPECIFIED 
UNKNOWN
INVALID_KEYWORD_MATCH_TYPE
DUPLICATE_KEYWORD
KEYWORD_TEXT_TOO_LONG
KEYWORD_HAS_INVALID_CHARS
KEYWORD_HAS_TOO_MANY_WORDS
INVALID_KEYWORD_TEXT 
NEGATIVE_KEYWORD_HAS_CPC_BIDB�
"com.google.ads.googleads.v6.errorsB#KeywordPlanAdGroupKeywordErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v6/errors;errors�GAA�Google.Ads.GoogleAds.V6.Errors�Google\\Ads\\GoogleAds\\V6\\Errors�"Google::Ads::GoogleAds::V6::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

