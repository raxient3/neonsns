<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/third_party_app_analytics_link_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Services;

class ThirdPartyAppAnalyticsLinkService
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
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Fgoogle/ads/googleads/v6/resources/third_party_app_analytics_link.proto!google.ads.googleads.v6.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
ThirdPartyAppAnalyticsLinkR
resource_name (	B;�A�A5
3googleads.googleapis.com/ThirdPartyAppAnalyticsLink#
shareable_link_id (	B�AH �:��A}
3googleads.googleapis.com/ThirdPartyAppAnalyticsLinkFcustomers/{customer_id}/thirdPartyAppAnalyticsLinks/{customer_link_id}B
_shareable_link_idB�
%com.google.ads.googleads.v6.resourcesBThirdPartyAppAnalyticsLinkProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3
�

Mgoogle/ads/googleads/v6/services/third_party_app_analytics_link_service.proto google.ads.googleads.v6.servicesgoogle/api/annotations.protogoogle/api/resource.protogoogle/api/client.proto"w
$GetThirdPartyAppAnalyticsLinkRequestO
resource_name (	B8�A5
3googleads.googleapis.com/ThirdPartyAppAnalyticsLink"s
 RegenerateShareableLinkIdRequestO
resource_name (	B8�A5
3googleads.googleapis.com/ThirdPartyAppAnalyticsLink"#
!RegenerateShareableLinkIdResponse2�
!ThirdPartyAppAnalyticsLinkService�
GetThirdPartyAppAnalyticsLinkF.google.ads.googleads.v6.services.GetThirdPartyAppAnalyticsLinkRequest=.google.ads.googleads.v6.resources.ThirdPartyAppAnalyticsLink"E���?=/v6/{resource_name=customers/*/thirdPartyAppAnalyticsLinks/*}�
RegenerateShareableLinkIdB.google.ads.googleads.v6.services.RegenerateShareableLinkIdRequestC.google.ads.googleads.v6.services.RegenerateShareableLinkIdResponse"b���\\"W/v6/{resource_name=customers/*/thirdPartyAppAnalyticsLinks/*}:regenerateShareableLinkId:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v6.servicesB&ThirdPartyAppAnalyticsLinkServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v6/services;services�GAA� Google.Ads.GoogleAds.V6.Services� Google\\Ads\\GoogleAds\\V6\\Services�$Google::Ads::GoogleAds::V6::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

