<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/ad_group_extension_setting_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Services;

class AdGroupExtensionSettingService
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
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
?
<google/ads/googleads/v6/enums/extension_setting_device.protogoogle.ads.googleads.v6.enums"m
ExtensionSettingDeviceEnum"O
ExtensionSettingDevice
UNSPECIFIED 
UNKNOWN

MOBILE
DESKTOPB?
!com.google.ads.googleads.v6.enumsBExtensionSettingDeviceProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums?GAA?Google.Ads.GoogleAds.V6.Enums?Google\\Ads\\GoogleAds\\V6\\Enums?!Google::Ads::GoogleAds::V6::Enumsbproto3
?
2google/ads/googleads/v6/enums/extension_type.protogoogle.ads.googleads.v6.enums"?
ExtensionTypeEnum"?
ExtensionType
UNSPECIFIED 
UNKNOWN
NONE
APP
CALL
CALLOUT
MESSAGE	
PRICE
	PROMOTION
SITELINK

STRUCTURED_SNIPPET
LOCATION
AFFILIATE_LOCATION
HOTEL_CALLOUT	
IMAGEB?
!com.google.ads.googleads.v6.enumsBExtensionTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums?GAA?Google.Ads.GoogleAds.V6.Enums?Google\\Ads\\GoogleAds\\V6\\Enums?!Google::Ads::GoogleAds::V6::Enumsbproto3
?
9google/ads/googleads/v6/enums/response_content_type.protogoogle.ads.googleads.v6.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB?
!com.google.ads.googleads.v6.enumsBResponseContentTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums?GAA?Google.Ads.GoogleAds.V6.Enums?Google\\Ads\\GoogleAds\\V6\\Enums?!Google::Ads::GoogleAds::V6::Enumsbproto3
?
Bgoogle/ads/googleads/v6/resources/ad_group_extension_setting.proto!google.ads.googleads.v6.resources2google/ads/googleads/v6/enums/extension_type.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"?
AdGroupExtensionSettingO
resource_name (	B8?A?A2
0googleads.googleapis.com/AdGroupExtensionSetting[
extension_type (2>.google.ads.googleads.v6.enums.ExtensionTypeEnum.ExtensionTypeB?A?
ad_group (	B(?A?A"
 googleads.googleapis.com/AdGroupH ?M
extension_feed_items (	B/?A,
*googleads.googleapis.com/ExtensionFeedItem`
device (2P.google.ads.googleads.v6.enums.ExtensionSettingDeviceEnum.ExtensionSettingDevice:??A?
0googleads.googleapis.com/AdGroupExtensionSettingOcustomers/{customer_id}/adGroupExtensionSettings/{ad_group_id}~{extension_type}B
	_ad_groupB?
%com.google.ads.googleads.v6.resourcesBAdGroupExtensionSettingProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources?GAA?!Google.Ads.GoogleAds.V6.Resources?!Google\\Ads\\GoogleAds\\V6\\Resources?%Google::Ads::GoogleAds::V6::Resourcesbproto3
?
Igoogle/ads/googleads/v6/services/ad_group_extension_setting_service.proto google.ads.googleads.v6.servicesBgoogle/ads/googleads/v6/resources/ad_group_extension_setting.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"t
!GetAdGroupExtensionSettingRequestO
resource_name (	B8?A?A2
0googleads.googleapis.com/AdGroupExtensionSetting"?
%MutateAdGroupExtensionSettingsRequest
customer_id (	B?A[

operations (2B.google.ads.googleads.v6.services.AdGroupExtensionSettingOperationB?A
partial_failure (
validate_only ("?
 AdGroupExtensionSettingOperation/
update_mask (2.google.protobuf.FieldMaski
response_content_type (2J.google.ads.googleads.v6.enums.ResponseContentTypeEnum.ResponseContentTypeL
create (2:.google.ads.googleads.v6.resources.AdGroupExtensionSettingH L
update (2:.google.ads.googleads.v6.resources.AdGroupExtensionSettingH 
remove (	H B
	operation"?
&MutateAdGroupExtensionSettingsResponse1
partial_failure_error (2.google.rpc.StatusV
results (2E.google.ads.googleads.v6.services.MutateAdGroupExtensionSettingResult"?
#MutateAdGroupExtensionSettingResult
resource_name (	^
ad_group_extension_setting (2:.google.ads.googleads.v6.resources.AdGroupExtensionSetting2?
AdGroupExtensionSettingService?
GetAdGroupExtensionSettingC.google.ads.googleads.v6.services.GetAdGroupExtensionSettingRequest:.google.ads.googleads.v6.resources.AdGroupExtensionSetting"R????<:/v6/{resource_name=customers/*/adGroupExtensionSettings/*}?Aresource_name?
MutateAdGroupExtensionSettingsG.google.ads.googleads.v6.services.MutateAdGroupExtensionSettingsRequestH.google.ads.googleads.v6.services.MutateAdGroupExtensionSettingsResponse"a????B"=/v6/customers/{customer_id=*}/adGroupExtensionSettings:mutate:*?Acustomer_id,operationsE?Agoogleads.googleapis.com?A\'https://www.googleapis.com/auth/adwordsB?
$com.google.ads.googleads.v6.servicesB#AdGroupExtensionSettingServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v6/services;services?GAA? Google.Ads.GoogleAds.V6.Services? Google\\Ads\\GoogleAds\\V6\\Services?$Google::Ads::GoogleAds::V6::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

