<?php 

Business Manager ID: 1479528516134875

/**
 * ! Asad's First App :: Details
 */
App ID : 264718769864602
App secret : 24a6396e097f480b748e57906d65d668
Client Token : 654ad7fe584778895501e5fab087e28a
access_token : 264718769864602|zrK_MgnKYuZUWSSTh2JGA6ATi-0



/**
 * ! client_id
 * ! client_secret
 */

https://graph.facebook.com/oauth/access_token?client_id=264718769864602&client_secret=24a6396e097f480b748e57906d65d668&grant_type=client_credentials
{"access_token":"264718769864602|zrK_MgnKYuZUWSSTh2JGA6ATi-0","token_type":"bearer"}

/**
 * ! client_id
 * ! access_token
 */
https://graph.facebook.com/264718769864602?access_token=264718769864602|zrK_MgnKYuZUWSSTh2JGA6ATi-0

{
    "link": "https://www.facebook.com/games/?app_id=264718769864602",
    "name": "Asad's First App",
    "id": "264718769864602"
 }


 /**
 * ! client_id
 * ! access_token
 */
 https://graph.facebook.com/264718769864602?metadata=1&access_token=264718769864602|zrK_MgnKYuZUWSSTh2JGA6ATi-0

 {
    "link": "https://www.facebook.com/games/?app_id=264718769864602",
    "name": "Asad's First App",
    "metadata": {
       "fields": [
          {
             "name": "id",
             "description": "The app ID",
             "type": "numeric string"
          },
          {
             "name": "aam_rules",
             "description": "Rules of Auto Advanced Matching in FB SDKs",
             "type": "string"
          },
          {
             "name": "an_ad_space_limit",
             "description": "The maximum number of Ad Spaces allowed for each Audience Network supported platform",
             "type": "unsigned int32"
          },
          {
             "name": "an_platforms",
             "description": "The platforms associated with the app in the Audience Network product. Not enforced, but when present, it can be used to provide the user with platform specific information for the app and its placements",
             "type": "list\u003Cenum>"
          },
          {
             "name": "app_domains",
             "description": "Domains and subdomains this app can use",
             "type": "list\u003Cstring>"
          },
          {
             "name": "app_events_config",
             "description": "Configuration for app events",
             "type": "applicationappeventsconfig"
          },
          {
             "name": "app_install_tracked",
             "description": "Whether the app install is trackable or not",
             "type": "bool"
          },
          {
             "name": "app_name",
             "description": "App name",
             "type": "string"
          },
          {
             "name": "app_signals_binding_ios",
             "description": "List of app event bindings for iOS app",
             "type": "list\u003Cbinding>"
          },
          {
             "name": "app_type",
             "description": "App type",
             "type": "unsigned int32"
          },
          {
             "name": "auth_dialog_data_help_url",
             "description": "The URL of a special landing page that helps people who are using an app begin publishing Open Graph activity",
             "type": "string"
          },
          {
             "name": "auth_dialog_headline",
             "description": "One line description of an app that appears in the Login Dialog",
             "type": "string"
          },
          {
             "name": "auth_dialog_perms_explanation",
             "description": "The text to explain why an app needs additional permissions.  This appears in the Login Dialog",
             "type": "string"
          },
          {
             "name": "auth_referral_default_activity_privacy",
             "description": "The default privacy setting selected for Open Graph activities in the Auth Dialog",
             "type": "string"
          },
          {
             "name": "auth_referral_enabled",
             "description": "Indicates whether Authenticated Referrals are enabled",
             "type": "unsigned int32"
          },
          {
             "name": "auth_referral_extended_perms",
             "description": "Extended permissions that a person can choose to grant when Authenticated Referrals are enabled",
             "type": "list\u003Cstring>"
          },
          {
             "name": "auth_referral_friend_perms",
             "description": "Basic friends permissions that a user must grant when Authenticated Referrals are enabled",
             "type": "list\u003Cstring>"
          },
          {
             "name": "auth_referral_response_type",
             "description": "The format that an app receives for the authentication token from the Login Dialog",
             "type": "string"
          },
          {
             "name": "auth_referral_user_perms",
             "description": "Basic user permissions that a user must grant when Authenticated Referrals are enabled",
             "type": "list\u003Cstring>"
          },
          {
             "name": "canvas_fluid_height",
             "description": "Indicates whether the app uses fluid or settable height values for Canvas",
             "type": "bool"
          },
          {
             "name": "canvas_fluid_width",
             "description": "Indicates whether the app uses fluid or fixed width values for Canvas",
             "type": "unsigned int32"
          },
          {
             "name": "canvas_url",
             "description": "The non-secure URL from which Canvas app content is loaded",
             "type": "string"
          },
          {
             "name": "category",
             "description": "The category of the app",
             "type": "string"
          },
          {
             "name": "client_config",
             "description": "Config data for the client",
             "type": "map"
          },
          {
             "name": "company",
             "description": "The company the app belongs to",
             "type": "string"
          },
          {
             "name": "configured_ios_sso",
             "description": "True if the app has configured Single Sign On on iOS",
             "type": "bool"
          },
          {
             "name": "contact_email",
             "description": "Email address listed for people using the app to contact developers",
             "type": "string"
          },
          {
             "name": "created_time",
             "description": "Timestamp that indicates when the app was created",
             "type": "datetime"
          },
          {
             "name": "creator_uid",
             "description": "User ID of the creator of this app",
             "type": "id"
          },
          {
             "name": "daily_active_users",
             "description": "The number of daily active users the app has ",
             "type": "numeric string"
          },
          {
             "name": "daily_active_users_rank",
             "description": "Ranking of this app vs other apps comparing daily active users",
             "type": "unsigned int32"
          },
          {
             "name": "deauth_callback_url",
             "description": "URL that is pinged whenever a person removes the app",
             "type": "string"
          },
          {
             "name": "default_share_mode",
             "description": "The platform that should be used to share content",
             "type": "string"
          },
          {
             "name": "description",
             "description": "The description of the app, as provided by the developer",
             "type": "string"
          },
          {
             "name": "financial_id",
             "description": "The ID for the corresponding audience network financial entity.",
             "type": "string"
          },
          {
             "name": "hosting_url",
             "description": "Webspace created with one of our hosting partners for this app",
             "type": "string"
          },
          {
             "name": "icon_url",
             "description": "The URL of this app's icon",
             "type": "string"
          },
          {
             "name": "ios_bundle_id",
             "description": "Bundle ID of the associated iOS app",
             "type": "list\u003Cstring>"
          },
          {
             "name": "ios_supports_native_proxy_auth_flow",
             "description": "Whether to support the native proxy login flow",
             "type": "bool"
          },
          {
             "name": "ios_supports_system_auth",
             "description": "Whether to support the iOS integrated Login Dialog",
             "type": "bool"
          },
          {
             "name": "ipad_app_store_id",
             "description": "ID of the app in the iPad App Store",
             "type": "string"
          },
          {
             "name": "iphone_app_store_id",
             "description": "ID of the app in the iPhone App Store",
             "type": "string"
          },
          {
             "name": "latest_sdk_version",
             "description": "App latest sdk version",
             "type": "applicationsdkinfo"
          },
          {
             "name": "link",
             "description": "A link to the app on Facebook",
             "type": "string"
          },
          {
             "name": "logging_token",
             "description": "To use for logging purposes",
             "type": "string"
          },
          {
             "name": "logo_url",
             "description": "The URL of the app's logo",
             "type": "string"
          },
          {
             "name": "migrations",
             "description": "Status of migrations for this app",
             "type": "map\u003Cstring, bool>"
          },
          {
             "name": "mobile_profile_section_url",
             "description": "Mobile URL of the app section on a person's profile",
             "type": "string"
          },
          {
             "name": "mobile_web_url",
             "description": "URL to which Mobile users will be directed when using the app",
             "type": "string"
          },
          {
             "name": "monthly_active_users",
             "description": "The number of monthly active users the app has",
             "type": "numeric string"
          },
          {
             "name": "monthly_active_users_rank",
             "description": "Ranking of this app vs other apps comparing monthly active users",
             "type": "unsigned int32"
          },
          {
             "name": "name",
             "description": "The name of the app",
             "type": "string"
          },
          {
             "name": "namespace",
             "description": "The string appended to `apps.facebook.com/` to navigate to the app's canvas page",
             "type": "string"
          },
          {
             "name": "object_store_urls",
             "description": "Mobile store URLs for the app",
             "type": "applicationobjectstoreurls"
          },
          {
             "name": "page_tab_default_name",
             "description": "The title of the app when used in a Page Tab",
             "type": "string"
          },
          {
             "name": "page_tab_url",
             "description": "The non-secure URL from which Page Tab app content is loaded",
             "type": "string"
          },
          {
             "name": "photo_url",
             "description": "The URL of the app photo",
             "type": "string"
          },
          {
             "name": "privacy_policy_url",
             "description": "The URL that links to a Privacy Policy for the app",
             "type": "string"
          },
          {
             "name": "profile_section_url",
             "description": "URL of the app section on a user's profile for the desktop site",
             "type": "string"
          },
          {
             "name": "property_id",
             "description": "The monetization property which owns this app",
             "type": "string"
          },
          {
             "name": "protected_mode_rules",
             "description": "protected_mode_rules",
             "type": "applicationprotectedmoderules"
          },
          {
             "name": "real_time_mode_devices",
             "description": "List of real time hashed device",
             "type": "list\u003Cstring>"
          },
          {
             "name": "restrictions",
             "description": "Demographic restrictions for the app",
             "type": "applicationrestrictioninfo"
          },
          {
             "name": "restrictive_data_filter_params",
             "description": "Params used to filter out restrictive data",
             "type": "string"
          },
          {
             "name": "secure_canvas_url",
             "description": "The secure URL from which Canvas app content is loaded",
             "type": "string"
          },
          {
             "name": "secure_page_tab_url",
             "description": "The secure URL from which Page Tab app content is loaded",
             "type": "string"
          },
          {
             "name": "server_ip_whitelist",
             "description": "App requests must originate from this comma-separated list of IP addresses",
             "type": "string"
          },
          {
             "name": "social_discovery",
             "description": "Indicates whether app usage stories show up in the Ticker or Feed",
             "type": "unsigned int32"
          },
          {
             "name": "subcategory",
             "description": "The subcategory the app can be found under",
             "type": "string"
          },
          {
             "name": "suggested_events_setting",
             "description": "Settings for suggested events",
             "type": "string"
          },
          {
             "name": "supported_platforms",
             "description": "All the platform the app supports",
             "type": "list\u003Cenum {web, canvas, mobile_web, iphone, ipad, android, windows, amazon, supplementary_images, gameroom, instant_game, oculus, samsung, xiaomi}>"
          },
          {
             "name": "terms_of_service_url",
             "description": "URL to Terms of Service that appears in the Login Dialog",
             "type": "string"
          },
          {
             "name": "url_scheme_suffix",
             "description": "URL scheme suffix",
             "type": "string"
          },
          {
             "name": "user_support_email",
             "description": "Main contact email for this app where people can receive support",
             "type": "string"
          },
          {
             "name": "user_support_url",
             "description": "URL shown in the Canvas footer that people can visit to get support for the app",
             "type": "string"
          },
          {
             "name": "website_url",
             "description": "URL of a website that integrates with this app",
             "type": "string"
          },
          {
             "name": "weekly_active_users",
             "description": "The number of weekly active users the app has",
             "type": "numeric string"
          }
       ],
       "type": "application",
       "connections": {
          "accounts": "https://graph.facebook.com/v18.0/264718769864602/accounts?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "ad_placement_groups": "https://graph.facebook.com/v18.0/264718769864602/ad_placement_groups?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "adnetwork_placements": "https://graph.facebook.com/v18.0/264718769864602/adnetwork_placements?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "adnetworkanalytics": "https://graph.facebook.com/v18.0/264718769864602/adnetworkanalytics?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "adnetworkanalytics_results": "https://graph.facebook.com/v18.0/264718769864602/adnetworkanalytics_results?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "aem_attribution": "https://graph.facebook.com/v18.0/264718769864602/aem_attribution?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "aem_conversion_configs": "https://graph.facebook.com/v18.0/264718769864602/aem_conversion_configs?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "aem_conversion_filter": "https://graph.facebook.com/v18.0/264718769864602/aem_conversion_filter?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "agencies": "https://graph.facebook.com/v18.0/264718769864602/agencies?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "app_capi_settings": "https://graph.facebook.com/v18.0/264718769864602/app_capi_settings?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "app_event_types": "https://graph.facebook.com/v18.0/264718769864602/app_event_types?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "app_installed_groups": "https://graph.facebook.com/v18.0/264718769864602/app_installed_groups?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "appassets": "https://graph.facebook.com/v18.0/264718769864602/appassets?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "authorized_adaccounts": "https://graph.facebook.com/v18.0/264718769864602/authorized_adaccounts?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "banned": "https://graph.facebook.com/v18.0/264718769864602/banned?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "button_auto_detection_device_selection": "https://graph.facebook.com/v18.0/264718769864602/button_auto_detection_device_selection?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "cloudbridge_settings": "https://graph.facebook.com/v18.0/264718769864602/cloudbridge_settings?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "da_checks": "https://graph.facebook.com/v18.0/264718769864602/da_checks?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "events": "https://graph.facebook.com/v18.0/264718769864602/events?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "iap_purchases": "https://graph.facebook.com/v18.0/264718769864602/iap_purchases?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "insights_push_schedule": "https://graph.facebook.com/v18.0/264718769864602/insights_push_schedule?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "ios_skadnetwork_conversion_config": "https://graph.facebook.com/v18.0/264718769864602/ios_skadnetwork_conversion_config?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "linked_dataset": "https://graph.facebook.com/v18.0/264718769864602/linked_dataset?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "mobile_sdk_gk": "https://graph.facebook.com/v18.0/264718769864602/mobile_sdk_gk?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "model_asset": "https://graph.facebook.com/v18.0/264718769864602/model_asset?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "monetized_digital_store_objects": "https://graph.facebook.com/v18.0/264718769864602/monetized_digital_store_objects?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "object_types": "https://graph.facebook.com/v18.0/264718769864602/object_types?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "objects": "https://graph.facebook.com/v18.0/264718769864602/objects?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "permissions": "https://graph.facebook.com/v18.0/264718769864602/permissions?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "products": "https://graph.facebook.com/v18.0/264718769864602/products?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "purchases": "https://graph.facebook.com/v18.0/264718769864602/purchases?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "roles": "https://graph.facebook.com/v18.0/264718769864602/roles?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "server_domain_infos": "https://graph.facebook.com/v18.0/264718769864602/server_domain_infos?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "subscribed_domains": "https://graph.facebook.com/v18.0/264718769864602/subscribed_domains?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "subscribed_domains_phishing": "https://graph.facebook.com/v18.0/264718769864602/subscribed_domains_phishing?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0",
          "subscriptions": "https://graph.facebook.com/v18.0/264718769864602/subscriptions?access_token=264718769864602\u00257CzrK_MgnKYuZUWSSTh2JGA6ATi-0"
       }
    },
    "id": "264718769864602"
 }


 /**
 * ! me
 */
https://graph.facebook.com/me?access_token=264718769864602|654ad7fe584778895501e5fab087e28a

 /**
 * ! photos
 */
https://graph.facebook.com/264718769864602/photos?access_token=654ad7fe584778895501e5fab087e28a
https://graph.facebook.com/264718769864602/photos?access_token=654ad7fe584778895501e5fab087e28a

https://graph.facebook.com/264718769864602/accounts?access_token=264718769864602|zrK_MgnKYuZUWSSTh2JGA6ATi-0

?>
