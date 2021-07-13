<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/feed_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Services;

class FeedService
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
�
Mgoogle/ads/googleads/v6/enums/affiliate_location_feed_relationship_type.protogoogle.ads.googleads.v6.enums"�
)AffiliateLocationFeedRelationshipTypeEnum"[
%AffiliateLocationFeedRelationshipType
UNSPECIFIED 
UNKNOWN
GENERAL_RETAILERB�
!com.google.ads.googleads.v6.enumsB*AffiliateLocationFeedRelationshipTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
7google/ads/googleads/v6/enums/feed_attribute_type.protogoogle.ads.googleads.v6.enums"�
FeedAttributeTypeEnum"�
FeedAttributeType
UNSPECIFIED 
UNKNOWN	
INT64

DOUBLE

STRING
BOOLEAN
URL
	DATE_TIME

INT64_LIST
DOUBLE_LIST	
STRING_LIST

BOOLEAN_LIST
URL_LIST
DATE_TIME_LIST	
PRICEB�
!com.google.ads.googleads.v6.enumsBFeedAttributeTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
/google/ads/googleads/v6/enums/feed_origin.protogoogle.ads.googleads.v6.enums"R
FeedOriginEnum"@

FeedOrigin
UNSPECIFIED 
UNKNOWN
USER

GOOGLEB�
!com.google.ads.googleads.v6.enumsBFeedOriginProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
/google/ads/googleads/v6/enums/feed_status.protogoogle.ads.googleads.v6.enums"V
FeedStatusEnum"D

FeedStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
!com.google.ads.googleads.v6.enumsBFeedStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
9google/ads/googleads/v6/enums/response_content_type.protogoogle.ads.googleads.v6.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
!com.google.ads.googleads.v6.enumsBResponseContentTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
,google/ads/googleads/v6/resources/feed.proto!google.ads.googleads.v6.resources7google/ads/googleads/v6/enums/feed_attribute_type.proto/google/ads/googleads/v6/enums/feed_origin.proto/google/ads/googleads/v6/enums/feed_status.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
Feed<
resource_name (	B%�A�A
googleads.googleapis.com/Feed
id (B�AH�
name (	B�AH�D

attributes (20.google.ads.googleads.v6.resources.FeedAttributeW
attribute_operations	 (29.google.ads.googleads.v6.resources.FeedAttributeOperationM
origin (28.google.ads.googleads.v6.enums.FeedOriginEnum.FeedOriginB�AM
status (28.google.ads.googleads.v6.enums.FeedStatusEnum.FeedStatusB�Ac
places_location_feed_data (2>.google.ads.googleads.v6.resources.Feed.PlacesLocationFeedDataH i
affiliate_location_feed_data (2A.google.ads.googleads.v6.resources.Feed.AffiliateLocationFeedDataH �
PlacesLocationFeedDataa

oauth_info (2H.google.ads.googleads.v6.resources.Feed.PlacesLocationFeedData.OAuthInfoB�A
email_address (	H �
business_account_id (	!
business_name_filter	 (	H�
category_filters (	
label_filters (	�
	OAuthInfo
http_method (	H �
http_request_url (	H�&
http_authorization_header (	H�B
_http_methodB
_http_request_urlB
_http_authorization_headerB
_email_addressB
_business_name_filter�
AffiliateLocationFeedData
	chain_ids (�
relationship_type (2n.google.ads.googleads.v6.enums.AffiliateLocationFeedRelationshipTypeEnum.AffiliateLocationFeedRelationshipType:K�AH
googleads.googleapis.com/Feed\'customers/{customer_id}/feeds/{feed_id}B
system_feed_generation_dataB
_idB
_name"�
FeedAttribute
id (H �
name (	H�T
type (2F.google.ads.googleads.v6.enums.FeedAttributeTypeEnum.FeedAttributeType
is_part_of_key (H�B
_idB
_nameB
_is_part_of_key"�
FeedAttributeOperationY
operator (2B.google.ads.googleads.v6.resources.FeedAttributeOperation.OperatorB�AD
value (20.google.ads.googleads.v6.resources.FeedAttributeB�A"1
Operator
UNSPECIFIED 
UNKNOWN
ADDB�
%com.google.ads.googleads.v6.resourcesB	FeedProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3
�
3google/ads/googleads/v6/services/feed_service.proto google.ads.googleads.v6.services,google/ads/googleads/v6/resources/feed.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"N
GetFeedRequest<
resource_name (	B%�A�A
googleads.googleapis.com/Feed"�
MutateFeedsRequest
customer_id (	B�AH

operations (2/.google.ads.googleads.v6.services.FeedOperationB�A
partial_failure (
validate_only (i
response_content_type (2J.google.ads.googleads.v6.enums.ResponseContentTypeEnum.ResponseContentType"�
FeedOperation/
update_mask (2.google.protobuf.FieldMask9
create (2\'.google.ads.googleads.v6.resources.FeedH 9
update (2\'.google.ads.googleads.v6.resources.FeedH 
remove (	H B
	operation"�
MutateFeedsResponse1
partial_failure_error (2.google.rpc.StatusC
results (22.google.ads.googleads.v6.services.MutateFeedResult"`
MutateFeedResult
resource_name (	5
feed (2\'.google.ads.googleads.v6.resources.Feed2�
FeedService�
GetFeed0.google.ads.googleads.v6.services.GetFeedRequest\'.google.ads.googleads.v6.resources.Feed"?���)\'/v6/{resource_name=customers/*/feeds/*}�Aresource_name�
MutateFeeds4.google.ads.googleads.v6.services.MutateFeedsRequest5.google.ads.googleads.v6.services.MutateFeedsResponse"N���/"*/v6/customers/{customer_id=*}/feeds:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v6.servicesBFeedServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v6/services;services�GAA� Google.Ads.GoogleAds.V6.Services� Google\\Ads\\GoogleAds\\V6\\Services�$Google::Ads::GoogleAds::V6::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

