<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/click_view_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Services;

class ClickViewService
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
�
3google/ads/googleads/v6/common/click_location.protogoogle.ads.googleads.v6.common"�
ClickLocation
city (	H �
country (	H�
metro (	H�
most_specific	 (	H�
region
 (	H�B
_cityB

_countryB
_metroB
_most_specificB	
_regionB�
"com.google.ads.googleads.v6.commonBClickLocationProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v6/common;common�GAA�Google.Ads.GoogleAds.V6.Common�Google\\Ads\\GoogleAds\\V6\\Common�"Google::Ads::GoogleAds::V6::Commonbproto3
�
2google/ads/googleads/v6/resources/click_view.proto!google.ads.googleads.v6.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
	ClickViewA
resource_name (	B*�A�A$
"googleads.googleapis.com/ClickView
gclid (	B�AH �L
area_of_interest (2-.google.ads.googleads.v6.common.ClickLocationB�AP
location_of_presence (2-.google.ads.googleads.v6.common.ClickLocationB�A
page_number	 (B�AH�D
ad_group_ad
 (	B*�A�A$
"googleads.googleapis.com/AdGroupAdH�Y
campaign_location_target (	B2�A�A,
*googleads.googleapis.com/GeoTargetConstantH�A
	user_list (	B)�A�A#
!googleads.googleapis.com/UserListH�:Z�AW
"googleads.googleapis.com/ClickView1customers/{customer_id}/clickViews/{date}~{gclid}B
_gclidB
_page_numberB
_ad_group_adB
_campaign_location_targetB

_user_listB�
%com.google.ads.googleads.v6.resourcesBClickViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3
�
9google/ads/googleads/v6/services/click_view_service.proto google.ads.googleads.v6.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"X
GetClickViewRequestA
resource_name (	B*�A�A$
"googleads.googleapis.com/ClickView2�
ClickViewService�
GetClickView5.google.ads.googleads.v6.services.GetClickViewRequest,.google.ads.googleads.v6.resources.ClickView"D���.,/v6/{resource_name=customers/*/clickViews/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v6.servicesBClickViewServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v6/services;services�GAA� Google.Ads.GoogleAds.V6.Services� Google\\Ads\\GoogleAds\\V6\\Services�$Google::Ads::GoogleAds::V6::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

