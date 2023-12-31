<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */

namespace PYS_PRO_GLOBAL\FacebookAds\Object;

use PYS_PRO_GLOBAL\FacebookAds\ApiRequest;
use PYS_PRO_GLOBAL\FacebookAds\Cursor;
use PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface;
use PYS_PRO_GLOBAL\FacebookAds\TypeChecker;
use PYS_PRO_GLOBAL\FacebookAds\Object\Fields\AdNetworkAnalyticsSyncQueryResultFields;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\AdNetworkAnalyticsSyncQueryResultAggregationPeriodValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\AdNetworkAnalyticsSyncQueryResultBreakdownsValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\AdNetworkAnalyticsSyncQueryResultMetricsValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\AdNetworkAnalyticsSyncQueryResultOrderingColumnValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\AdNetworkAnalyticsSyncQueryResultOrderingTypeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdNetworkAnalyticsSyncQueryResult extends AbstractObject {

  /**
   * @return AdNetworkAnalyticsSyncQueryResultFields
   */
  public static function getFieldsEnum() {
    return AdNetworkAnalyticsSyncQueryResultFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['AggregationPeriod'] = AdNetworkAnalyticsSyncQueryResultAggregationPeriodValues::getInstance()->getValues();
    $ref_enums['Breakdowns'] = AdNetworkAnalyticsSyncQueryResultBreakdownsValues::getInstance()->getValues();
    $ref_enums['Metrics'] = AdNetworkAnalyticsSyncQueryResultMetricsValues::getInstance()->getValues();
    $ref_enums['OrderingColumn'] = AdNetworkAnalyticsSyncQueryResultOrderingColumnValues::getInstance()->getValues();
    $ref_enums['OrderingType'] = AdNetworkAnalyticsSyncQueryResultOrderingTypeValues::getInstance()->getValues();
    return $ref_enums;
  }


}
