<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/location_placeholder_field.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Enums;

class LocationPlaceholderField
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
�
>google/ads/googleads/v6/enums/location_placeholder_field.protogoogle.ads.googleads.v6.enums"�
LocationPlaceholderFieldEnum"�
LocationPlaceholderField
UNSPECIFIED 
UNKNOWN
BUSINESS_NAME
ADDRESS_LINE_1
ADDRESS_LINE_2
CITY
PROVINCE
POSTAL_CODE
COUNTRY_CODE
PHONE_NUMBER	B�
!com.google.ads.googleads.v6.enumsBLocationPlaceholderFieldProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

