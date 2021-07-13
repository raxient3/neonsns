<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/offline_user_data_job.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Resources;

class OfflineUserDataJob
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
:google/ads/googleads/v6/enums/user_identifier_source.protogoogle.ads.googleads.v6.enums"r
UserIdentifierSourceEnum"V
UserIdentifierSource
UNSPECIFIED 
UNKNOWN
FIRST_PARTY
THIRD_PARTYB�
!com.google.ads.googleads.v6.enumsBUserIdentifierSourceProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
6google/ads/googleads/v6/common/offline_user_data.protogoogle.ads.googleads.v6.commongoogle/api/annotations.proto"�
OfflineUserAddressInfo
hashed_first_name (	H �
hashed_last_name (	H�
city	 (	H�
state
 (	H�
country_code (	H�
postal_code (	H�B
_hashed_first_nameB
_hashed_last_nameB
_cityB
_stateB
_country_codeB
_postal_code"�
UserIdentifierl
user_identifier_source (2L.google.ads.googleads.v6.enums.UserIdentifierSourceEnum.UserIdentifierSource
hashed_email (	H 
hashed_phone_number (	H 
	mobile_id	 (	H 
third_party_user_id
 (	H N
address_info (26.google.ads.googleads.v6.common.OfflineUserAddressInfoH B

identifier"�
TransactionAttribute"
transaction_date_time (	H �&
transaction_amount_micros	 (H�
currency_code
 (	H�
conversion_action (	H�
order_id (	H�G
store_attribute (2..google.ads.googleads.v6.common.StoreAttribute
custom_value (	H�B
_transaction_date_timeB
_transaction_amount_microsB
_currency_codeB
_conversion_actionB
	_order_idB
_custom_value"8
StoreAttribute

store_code (	H �B
_store_code"�
UserDataH
user_identifiers (2..google.ads.googleads.v6.common.UserIdentifierS
transaction_attribute (24.google.ads.googleads.v6.common.TransactionAttributeE
user_attribute (2-.google.ads.googleads.v6.common.UserAttribute"�
UserAttribute"
lifetime_value_micros (H �"
lifetime_value_bucket (H�B
_lifetime_value_microsB
_lifetime_value_bucket"E
CustomerMatchUserListMetadata
	user_list (	H �B

_user_list"�
StoreSalesMetadata
loyalty_fraction (H �(
transaction_upload_fraction (H�

custom_key (	H�Z
third_party_metadata (2<.google.ads.googleads.v6.common.StoreSalesThirdPartyMetadataB
_loyalty_fractionB
_transaction_upload_fractionB
_custom_key"�
StoreSalesThirdPartyMetadata(
advertiser_upload_date_time (	H �\'
valid_transaction_fraction (H�#
partner_match_fraction	 (H�$
partner_upload_fraction
 (H�"
bridge_map_version_id (	H�

partner_id (H�B
_advertiser_upload_date_timeB
_valid_transaction_fractionB
_partner_match_fractionB
_partner_upload_fractionB
_bridge_map_version_idB
_partner_idB�
"com.google.ads.googleads.v6.commonBOfflineUserDataProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v6/common;common�GAA�Google.Ads.GoogleAds.V6.Common�Google\\Ads\\GoogleAds\\V6\\Common�"Google::Ads::GoogleAds::V6::Commonbproto3
�
Hgoogle/ads/googleads/v6/enums/offline_user_data_job_failure_reason.protogoogle.ads.googleads.v6.enums"�
#OfflineUserDataJobFailureReasonEnum"�
OfflineUserDataJobFailureReason
UNSPECIFIED 
UNKNOWN%
!INSUFFICIENT_MATCHED_TRANSACTIONS
INSUFFICIENT_TRANSACTIONSB�
!com.google.ads.googleads.v6.enumsB$OfflineUserDataJobFailureReasonProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
@google/ads/googleads/v6/enums/offline_user_data_job_status.protogoogle.ads.googleads.v6.enums"�
OfflineUserDataJobStatusEnum"k
OfflineUserDataJobStatus
UNSPECIFIED 
UNKNOWN
PENDING
RUNNING
SUCCESS

FAILEDB�
!com.google.ads.googleads.v6.enumsBOfflineUserDataJobStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
>google/ads/googleads/v6/enums/offline_user_data_job_type.protogoogle.ads.googleads.v6.enums"�
OfflineUserDataJobTypeEnum"�
OfflineUserDataJobType
UNSPECIFIED 
UNKNOWN"
STORE_SALES_UPLOAD_FIRST_PARTY"
STORE_SALES_UPLOAD_THIRD_PARTY
CUSTOMER_MATCH_USER_LIST"
CUSTOMER_MATCH_WITH_ATTRIBUTESB�
!com.google.ads.googleads.v6.enumsBOfflineUserDataJobTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
=google/ads/googleads/v6/resources/offline_user_data_job.proto!google.ads.googleads.v6.resourcesHgoogle/ads/googleads/v6/enums/offline_user_data_job_failure_reason.proto@google/ads/googleads/v6/enums/offline_user_data_job_status.proto>google/ads/googleads/v6/enums/offline_user_data_job_type.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
OfflineUserDataJobJ
resource_name (	B3�A�A-
+googleads.googleapis.com/OfflineUserDataJob
id	 (B�AH�
external_id
 (B�AH�c
type (2P.google.ads.googleads.v6.enums.OfflineUserDataJobTypeEnum.OfflineUserDataJobTypeB�Ai
status (2T.google.ads.googleads.v6.enums.OfflineUserDataJobStatusEnum.OfflineUserDataJobStatusB�A
failure_reason (2b.google.ads.googleads.v6.enums.OfflineUserDataJobFailureReasonEnum.OfflineUserDataJobFailureReasonB�Ao
!customer_match_user_list_metadata (2=.google.ads.googleads.v6.common.CustomerMatchUserListMetadataB�AH W
store_sales_metadata (22.google.ads.googleads.v6.common.StoreSalesMetadataB�AH :{�Ax
+googleads.googleapis.com/OfflineUserDataJobIcustomers/{customer_id}/offlineUserDataJobs/{offline_user_data_update_id}B

metadataB
_idB
_external_idB�
%com.google.ads.googleads.v6.resourcesBOfflineUserDataJobProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

