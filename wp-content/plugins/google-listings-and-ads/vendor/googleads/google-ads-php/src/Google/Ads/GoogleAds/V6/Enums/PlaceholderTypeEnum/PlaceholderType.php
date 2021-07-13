<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/placeholder_type.proto

namespace Google\Ads\GoogleAds\V6\Enums\PlaceholderTypeEnum;

use UnexpectedValueException;

/**
 * Possible placeholder types for a feed mapping.
 *
 * Protobuf type <code>google.ads.googleads.v6.enums.PlaceholderTypeEnum.PlaceholderType</code>
 */
class PlaceholderType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Lets you show links in your ad to pages from your website, including the
     * main landing page.
     *
     * Generated from protobuf enum <code>SITELINK = 2;</code>
     */
    const SITELINK = 2;
    /**
     * Lets you attach a phone number to an ad, allowing customers to call
     * directly from the ad.
     *
     * Generated from protobuf enum <code>CALL = 3;</code>
     */
    const CALL = 3;
    /**
     * Lets you provide users with a link that points to a mobile app in
     * addition to a website.
     *
     * Generated from protobuf enum <code>APP = 4;</code>
     */
    const APP = 4;
    /**
     * Lets you show locations of businesses from your Google My Business
     * account in your ad. This helps people find your locations by showing your
     * ads with your address, a map to your location, or the distance to your
     * business. This extension type is useful to draw customers to your
     * brick-and-mortar location.
     *
     * Generated from protobuf enum <code>LOCATION = 5;</code>
     */
    const LOCATION = 5;
    /**
     * If you sell your product through retail chains, affiliate location
     * extensions let you show nearby stores that carry your products.
     *
     * Generated from protobuf enum <code>AFFILIATE_LOCATION = 6;</code>
     */
    const AFFILIATE_LOCATION = 6;
    /**
     * Lets you include additional text with your search ads that provide
     * detailed information about your business, including products and services
     * you offer. Callouts appear in ads at the top and bottom of Google search
     * results.
     *
     * Generated from protobuf enum <code>CALLOUT = 7;</code>
     */
    const CALLOUT = 7;
    /**
     * Lets you add more info to your ad, specific to some predefined categories
     * such as types, brands, styles, etc. A minimum of 3 text (SNIPPETS) values
     * are required.
     *
     * Generated from protobuf enum <code>STRUCTURED_SNIPPET = 8;</code>
     */
    const STRUCTURED_SNIPPET = 8;
    /**
     * Allows users to see your ad, click an icon, and contact you directly by
     * text message. With one tap on your ad, people can contact you to book an
     * appointment, get a quote, ask for information, or request a service.
     *
     * Generated from protobuf enum <code>MESSAGE = 9;</code>
     */
    const MESSAGE = 9;
    /**
     * Lets you display prices for a list of items along with your ads. A price
     * feed is composed of three to eight price table rows.
     *
     * Generated from protobuf enum <code>PRICE = 10;</code>
     */
    const PRICE = 10;
    /**
     * Allows you to highlight sales and other promotions that let users see how
     * they can save by buying now.
     *
     * Generated from protobuf enum <code>PROMOTION = 11;</code>
     */
    const PROMOTION = 11;
    /**
     * Lets you dynamically inject custom data into the title and description
     * of your ads.
     *
     * Generated from protobuf enum <code>AD_CUSTOMIZER = 12;</code>
     */
    const AD_CUSTOMIZER = 12;
    /**
     * Indicates that this feed is for education dynamic remarketing.
     *
     * Generated from protobuf enum <code>DYNAMIC_EDUCATION = 13;</code>
     */
    const DYNAMIC_EDUCATION = 13;
    /**
     * Indicates that this feed is for flight dynamic remarketing.
     *
     * Generated from protobuf enum <code>DYNAMIC_FLIGHT = 14;</code>
     */
    const DYNAMIC_FLIGHT = 14;
    /**
     * Indicates that this feed is for a custom dynamic remarketing type. Use
     * this only if the other business types don't apply to your products or
     * services.
     *
     * Generated from protobuf enum <code>DYNAMIC_CUSTOM = 15;</code>
     */
    const DYNAMIC_CUSTOM = 15;
    /**
     * Indicates that this feed is for hotels and rentals dynamic remarketing.
     *
     * Generated from protobuf enum <code>DYNAMIC_HOTEL = 16;</code>
     */
    const DYNAMIC_HOTEL = 16;
    /**
     * Indicates that this feed is for real estate dynamic remarketing.
     *
     * Generated from protobuf enum <code>DYNAMIC_REAL_ESTATE = 17;</code>
     */
    const DYNAMIC_REAL_ESTATE = 17;
    /**
     * Indicates that this feed is for travel dynamic remarketing.
     *
     * Generated from protobuf enum <code>DYNAMIC_TRAVEL = 18;</code>
     */
    const DYNAMIC_TRAVEL = 18;
    /**
     * Indicates that this feed is for local deals dynamic remarketing.
     *
     * Generated from protobuf enum <code>DYNAMIC_LOCAL = 19;</code>
     */
    const DYNAMIC_LOCAL = 19;
    /**
     * Indicates that this feed is for job dynamic remarketing.
     *
     * Generated from protobuf enum <code>DYNAMIC_JOB = 20;</code>
     */
    const DYNAMIC_JOB = 20;
    /**
     * Lets you attach an image to an ad.
     *
     * Generated from protobuf enum <code>IMAGE = 21;</code>
     */
    const IMAGE = 21;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::SITELINK => 'SITELINK',
        self::CALL => 'CALL',
        self::APP => 'APP',
        self::LOCATION => 'LOCATION',
        self::AFFILIATE_LOCATION => 'AFFILIATE_LOCATION',
        self::CALLOUT => 'CALLOUT',
        self::STRUCTURED_SNIPPET => 'STRUCTURED_SNIPPET',
        self::MESSAGE => 'MESSAGE',
        self::PRICE => 'PRICE',
        self::PROMOTION => 'PROMOTION',
        self::AD_CUSTOMIZER => 'AD_CUSTOMIZER',
        self::DYNAMIC_EDUCATION => 'DYNAMIC_EDUCATION',
        self::DYNAMIC_FLIGHT => 'DYNAMIC_FLIGHT',
        self::DYNAMIC_CUSTOM => 'DYNAMIC_CUSTOM',
        self::DYNAMIC_HOTEL => 'DYNAMIC_HOTEL',
        self::DYNAMIC_REAL_ESTATE => 'DYNAMIC_REAL_ESTATE',
        self::DYNAMIC_TRAVEL => 'DYNAMIC_TRAVEL',
        self::DYNAMIC_LOCAL => 'DYNAMIC_LOCAL',
        self::DYNAMIC_JOB => 'DYNAMIC_JOB',
        self::IMAGE => 'IMAGE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PlaceholderType::class, \Google\Ads\GoogleAds\V6\Enums\PlaceholderTypeEnum_PlaceholderType::class);
