<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/conversion_attribution_event_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Enums;

class ConversionAttributionEventType
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
Egoogle/ads/googleads/v6/enums/conversion_attribution_event_type.protogoogle.ads.googleads.v6.enums"?
"ConversionAttributionEventTypeEnum"_
ConversionAttributionEventType
UNSPECIFIED 
UNKNOWN

IMPRESSION
INTERACTIONB?
!com.google.ads.googleads.v6.enumsB#ConversionAttributionEventTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums?GAA?Google.Ads.GoogleAds.V6.Enums?Google\\Ads\\GoogleAds\\V6\\Enums?!Google::Ads::GoogleAds::V6::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

