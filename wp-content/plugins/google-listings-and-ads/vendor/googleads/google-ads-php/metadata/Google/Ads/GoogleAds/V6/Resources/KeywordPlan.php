<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/keyword_plan.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Resources;

class KeywordPlan
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
*google/ads/googleads/v6/common/dates.protogoogle.ads.googleads.v6.common"W
	DateRange

start_date (	H �
end_date (	H�B
_start_dateB
	_end_dateB�
"com.google.ads.googleads.v6.commonB
DatesProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v6/common;common�GAA�Google.Ads.GoogleAds.V6.Common�Google\\Ads\\GoogleAds\\V6\\Common�"Google::Ads::GoogleAds::V6::Commonbproto3
�
Bgoogle/ads/googleads/v6/enums/keyword_plan_forecast_interval.protogoogle.ads.googleads.v6.enums"�
KeywordPlanForecastIntervalEnum"l
KeywordPlanForecastInterval
UNSPECIFIED 
UNKNOWN
	NEXT_WEEK

NEXT_MONTH
NEXT_QUARTERB�
!com.google.ads.googleads.v6.enumsB KeywordPlanForecastIntervalProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
4google/ads/googleads/v6/resources/keyword_plan.proto!google.ads.googleads.v6.resourcesBgoogle/ads/googleads/v6/enums/keyword_plan_forecast_interval.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
KeywordPlanC
resource_name (	B,�A�A&
$googleads.googleapis.com/KeywordPlan
id (B�AH �
name (	H�U
forecast_period (2<.google.ads.googleads.v6.resources.KeywordPlanForecastPeriod:a�A^
$googleads.googleapis.com/KeywordPlan6customers/{customer_id}/keywordPlans/{keyword_plan_id}B
_idB
_name"�
KeywordPlanForecastPeriods
date_interval (2Z.google.ads.googleads.v6.enums.KeywordPlanForecastIntervalEnum.KeywordPlanForecastIntervalH ?

date_range (2).google.ads.googleads.v6.common.DateRangeH B

intervalB�
%com.google.ads.googleads.v6.resourcesBKeywordPlanProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

