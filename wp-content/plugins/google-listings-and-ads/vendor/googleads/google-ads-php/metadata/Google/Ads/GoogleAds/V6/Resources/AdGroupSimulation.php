<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/ad_group_simulation.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Resources;

class AdGroupSimulation
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
�
/google/ads/googleads/v6/common/simulation.protogoogle.ads.googleads.v6.common"l
BidModifierSimulationPointListJ
points (2:.google.ads.googleads.v6.common.BidModifierSimulationPoint"b
CpcBidSimulationPointListE
points (25.google.ads.googleads.v6.common.CpcBidSimulationPoint"b
CpvBidSimulationPointListE
points (25.google.ads.googleads.v6.common.CpvBidSimulationPoint"h
TargetCpaSimulationPointListH
points (28.google.ads.googleads.v6.common.TargetCpaSimulationPoint"j
TargetRoasSimulationPointListI
points (29.google.ads.googleads.v6.common.TargetRoasSimulationPoint"p
 PercentCpcBidSimulationPointListL
points (2<.google.ads.googleads.v6.common.PercentCpcBidSimulationPoint"�
BidModifierSimulationPoint
bid_modifier (H �!
biddable_conversions (H�\'
biddable_conversions_value (H�
clicks (H�
cost_micros (H�
impressions (H�!
top_slot_impressions (H�(
parent_biddable_conversions (H�.
!parent_biddable_conversions_value (H�
parent_clicks (H	�
parent_cost_micros (H
�
parent_impressions (H�(
parent_top_slot_impressions (H�*
parent_required_budget_micros (H�B
_bid_modifierB
_biddable_conversionsB
_biddable_conversions_valueB	
_clicksB
_cost_microsB
_impressionsB
_top_slot_impressionsB
_parent_biddable_conversionsB$
"_parent_biddable_conversions_valueB
_parent_clicksB
_parent_cost_microsB
_parent_impressionsB
_parent_top_slot_impressionsB 
_parent_required_budget_micros"�
CpcBidSimulationPoint
cpc_bid_micros (H �!
biddable_conversions	 (H�\'
biddable_conversions_value
 (H�
clicks (H�
cost_micros (H�
impressions (H�!
top_slot_impressions (H�B
_cpc_bid_microsB
_biddable_conversionsB
_biddable_conversions_valueB	
_clicksB
_cost_microsB
_impressionsB
_top_slot_impressions"�
CpvBidSimulationPoint
cpv_bid_micros (H �
cost_micros (H�
impressions (H�
views (H�B
_cpv_bid_microsB
_cost_microsB
_impressionsB
_views"�
TargetCpaSimulationPoint
target_cpa_micros (H �!
biddable_conversions	 (H�\'
biddable_conversions_value
 (H�
clicks (H�
cost_micros (H�
impressions (H�!
top_slot_impressions (H�B
_target_cpa_microsB
_biddable_conversionsB
_biddable_conversions_valueB	
_clicksB
_cost_microsB
_impressionsB
_top_slot_impressions"�
TargetRoasSimulationPoint
target_roas (H �!
biddable_conversions	 (H�\'
biddable_conversions_value
 (H�
clicks (H�
cost_micros (H�
impressions (H�!
top_slot_impressions (H�B
_target_roasB
_biddable_conversionsB
_biddable_conversions_valueB	
_clicksB
_cost_microsB
_impressionsB
_top_slot_impressions"�
PercentCpcBidSimulationPoint#
percent_cpc_bid_micros (H �!
biddable_conversions (H�\'
biddable_conversions_value (H�
clicks (H�
cost_micros (H�
impressions (H�!
top_slot_impressions (H�B
_percent_cpc_bid_microsB
_biddable_conversionsB
_biddable_conversions_valueB	
_clicksB
_cost_microsB
_impressionsB
_top_slot_impressionsB�
"com.google.ads.googleads.v6.commonBSimulationProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v6/common;common�GAA�Google.Ads.GoogleAds.V6.Common�Google\\Ads\\GoogleAds\\V6\\Common�"Google::Ads::GoogleAds::V6::Commonbproto3
�
Bgoogle/ads/googleads/v6/enums/simulation_modification_method.protogoogle.ads.googleads.v6.enums"z
 SimulationModificationMethodEnum"V
SimulationModificationMethod
UNSPECIFIED 
UNKNOWN
UNIFORM
DEFAULTB�
!com.google.ads.googleads.v6.enumsB!SimulationModificationMethodProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
3google/ads/googleads/v6/enums/simulation_type.protogoogle.ads.googleads.v6.enums"�
SimulationTypeEnum"�
SimulationType
UNSPECIFIED 
UNKNOWN
CPC_BID
CPV_BID

TARGET_CPA
BID_MODIFIER
TARGET_ROAS
PERCENT_CPC_BIDB�
!com.google.ads.googleads.v6.enumsBSimulationTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
;google/ads/googleads/v6/resources/ad_group_simulation.proto!google.ads.googleads.v6.resourcesBgoogle/ads/googleads/v6/enums/simulation_modification_method.proto3google/ads/googleads/v6/enums/simulation_type.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
AdGroupSimulationI
resource_name (	B2�A�A,
*googleads.googleapis.com/AdGroupSimulation
ad_group_id (B�AH�S
type (2@.google.ads.googleads.v6.enums.SimulationTypeEnum.SimulationTypeB�A~
modification_method (2\\.google.ads.googleads.v6.enums.SimulationModificationMethodEnum.SimulationModificationMethodB�A

start_date (	B�AH�
end_date (	B�AH�\\
cpc_bid_point_list (29.google.ads.googleads.v6.common.CpcBidSimulationPointListB�AH \\
cpv_bid_point_list
 (29.google.ads.googleads.v6.common.CpvBidSimulationPointListB�AH b
target_cpa_point_list	 (2<.google.ads.googleads.v6.common.TargetCpaSimulationPointListB�AH d
target_roas_point_list (2=.google.ads.googleads.v6.common.TargetRoasSimulationPointListB�AH :��A�
*googleads.googleapis.com/AdGroupSimulationmcustomers/{customer_id}/adGroupSimulations/{ad_group_id}~{type}~{modification_method}~{start_date}~{end_date}B

point_listB
_ad_group_idB
_start_dateB
	_end_dateB�
%com.google.ads.googleads.v6.resourcesBAdGroupSimulationProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

