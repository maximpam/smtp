<?php
$start = microtime(true);
// Without Composer (and instead of "require 'vendor/autoload.php'"):
/*require("sendpulse-rest-api-php/src/ApiInterface.php");
require("sendpulse-rest-api-php/src/ApiClient.php");
require("sendpulse-rest-api-php/src/Storage/TokenStorageInterface.php");
require("sendpulse-rest-api-php/src/Storage/FileStorage.php");
require("sendpulse-rest-api-php/src/Storage/SessionStorage.php");
require("sendpulse-rest-api-php/src/Storage/MemcachedStorage.php");
require("sendpulse-rest-api-php/src/Storage/MemcacheStorage.php");*/

require("sendpulse-rest-api-php/src/Storage/TokenStorageInterface.php");
require("sendpulse-rest-api-php/src/Storage/FileStorage.php");
require("sendpulse-rest-api-php/src/ApiInterface.php");
require("sendpulse-rest-api-php/src/ApiClient.php");


use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\FileStorage;

// API credentials from https://login.sendpulse.com/settings/#api
define('API_USER_ID', '0f3eeca2973d223ad4939379a133bc43');
define('API_SECRET', '1070f870a5094cc5694a0a961ce1cd70');

$SPApiClient = new ApiClient(API_USER_ID, API_SECRET, new FileStorage());

$email = array(
    'html' => '<html>
      <head>
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>RateRank Update</title>
        <style>
    @media only screen and (max-width: 620px) {{
      table[class=body] h1 {{
        font-size: 28px !important;
        margin-bottom: 10px !important;
      }}

      table[class=body] p,
    table[class=body] ul,
    table[class=body] ol,
    table[class=body] td,
    table[class=body] span,
    table[class=body] a {{
        font-size: 16px !important;
      }}

      table[class=body] .wrapper,
    table[class=body] .article {{
        padding: 10px !important;
      }}

      table[class=body] .content {{
        padding: 0 !important;
      }}

      table[class=body] .container {{
        padding: 0 !important;
        width: 100% !important;
      }}

      table[class=body] .main {{
        border-left-width: 0 !important;
        border-radius: 0 !important;
        border-right-width: 0 !important;
      }}

      table[class=body] .btn table {{
        width: 100% !important;
      }}

      table[class=body] .btn a {{
        width: 100% !important;
      }}

      table[class=body] .img-responsive {{
        height: auto !important;
        max-width: 100% !important;
        width: auto !important;
      }}
    }}
    @media all {{
      .ExternalClass {{
        width: 100%;
      }}

      .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {{
        line-height: 100%;
      }}

      .apple-link a {{
        color: inherit !important;
        font-family: inherit !important;
        font-size: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
        text-decoration: none !important;
      }}

      #MessageViewBody a {{
        color: inherit;
        text-decoration: none;
        font-size: inherit;
        font-family: inherit;
        font-weight: inherit;
        line-height: inherit;
      }}

      .btn-primary table td:hover {{
        background-color: #34495e !important;
      }}

      .btn-primary a:hover {{
        background-color: #34495e !important;
        border-color: #34495e !important;
      }}
    }}
    </style>
      </head>
      <body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
        <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">RateRank noticed these banks changed rates recently:</span>
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f6f6f6; width: 100%;" width="100%" bgcolor="#f6f6f6">
          <tr>
            <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td>
            <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; max-width: 580px; padding: 10px; width: 580px; margin: 0 auto;" width="580" valign="top">
              <div class="content" style="box-sizing: border-box; display: block; margin: 0 auto; max-width: 580px; padding: 10px;">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background: #ffffff; border-radius: 3px; width: 100%;" width="100%">

                  <!-- START MAIN CONTENT AREA -->
                  <tr>
                    <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;" valign="top">
                      <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                        <tr>
                          <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">
                            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">RateRank noticed these banks changed rates recently:</p>
                            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;"> {html_delta} </p>
                            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Visit the RateRank site for all other tracked bank rates:</p>
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; width: 100%;" width="100%">
                              <tbody>
                                <tr>
                                  <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;" valign="top">
                                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
                                      <tbody>
                                        <tr>
                                          <td style="font-family: sans-serif; font-size: 14px; vertical-align: top; border-radius: 5px; text-align: center; background-color: #3498db;" valign="top" align="center" bgcolor="#3498db"> <a href="https://raterank.com.au/?=email" target="_blank" style="border: solid 1px #3498db; border-radius: 5px; box-sizing: border-box; cursor: pointer; display: inline-block; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px; text-decoration: none; text-transform: none; background-color: #3498db; border-color: #3498db; color: #ffffff;">View more on RateRank</a> </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>

                            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Happy rate hunting!.</p>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>

                <!-- END MAIN CONTENT AREA -->
                </table>
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer" style="clear: both; margin-top: 10px; text-align: center; width: 100%;">
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                    <tr>
                      <td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; color: #999999; font-size: 12px; text-align: center;" valign="top" align="center">
                        <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">Sydney, NSW 2000</span>
                        <br> Want to stop these emails? <a href="{{unsubscribe}}" style="text-decoration: underline; color: #999999; font-size: 12px; text-align: center;">Unsubscribe</a>.
                      </td>
                    </tr>
                    <tr>
                      <td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; color: #999999; font-size: 12px; text-align: center;" valign="top" align="center">
                        Powered by <a href="http://htmlemail.io" style="color: #999999; font-size: 12px; text-align: center; text-decoration: none;">HTMLemail</a>.
                      </td>
                    </tr>
                  </table>
                </div>
                <!-- END FOOTER -->

              </div>
            </td>
            <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td>
          </tr>
        </table>
      </body>
    </html>
',
    'text' => 'text',
    'subject' => 'Mail subject',
    'from' => array(
        'name' => 'John',
        'email' => 'test@kwebpage.ru',
    ),
    'to' => array(
        array(
            'name' => 'Client',
            'email' => 'maximpam@yandex.ru ',
        )
    ),
    'attachments' => array(
        'test.pdf' => file_get_contents('receipt.pdf')
    )
);
var_dump($SPApiClient->smtpSendMail($email));