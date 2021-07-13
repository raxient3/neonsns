<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/customer_client.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Resources;

class CustomerClient
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
�
7google/ads/googleads/v6/resources/customer_client.proto!google.ads.googleads.v6.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
CustomerClientF
resource_name (	B/�A�A)
\'googleads.googleapis.com/CustomerClientG
client_customer (	B)�A�A#
!googleads.googleapis.com/CustomerH �
hidden (B�AH�
level (B�AH�
	time_zone (	B�AH�
test_account (B�AH�
manager (B�AH�"
descriptive_name (	B�AH�
currency_code (	B�AH�
id (B�AH�:j�Ag
\'googleads.googleapis.com/CustomerClient<customers/{customer_id}/customerClients/{client_customer_id}B
_client_customerB	
_hiddenB
_levelB

_time_zoneB
_test_accountB

_managerB
_descriptive_nameB
_currency_codeB
_idB�
%com.google.ads.googleads.v6.resourcesBCustomerClientProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

