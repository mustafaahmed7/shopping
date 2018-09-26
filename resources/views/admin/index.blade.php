@include('admin.layouts.head')

<div id="wrapper">
    <!-- Navigation -->
    @include('admin.layouts.navbar')

    <div id="page-wrapper" style="min-height: 317px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">26</div>
                                <div>TOTAL CUSTOMERS</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-credit-card fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">12</div>
                                <div>TOTAL SALES</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">124</div>
                                <div>TOTAL ORDERS</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-eye fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">13</div>
                                <div>PEOPLE ONLINE</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                        <div class="pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                        data-toggle="dropdown">
                                    Actions
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a href="#">Action</a>
                                    </li>
                                    <li><a href="#">Another action</a>
                                    </li>
                                    <li><a href="#">Something else here</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div id="morris-area-chart"
                             style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                            <svg height="347" version="1.1" width="650" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 style="overflow: hidden; position: relative;">
                                <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël
                                    2.2.0
                                </desc>
                                <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                                <text x="49.515625" y="313" text-anchor="end" font-family="sans-serif" font-size="12px"
                                      stroke="none" fill="#888888"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                      font-weight="normal">
                                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan>
                                </text>
                                <path fill="none" stroke="#aaaaaa" d="M62.015625,313H625" stroke-width="0.5"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <text x="49.515625" y="241" text-anchor="end" font-family="sans-serif" font-size="12px"
                                      stroke="none" fill="#888888"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                      font-weight="normal">
                                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">7,500</tspan>
                                </text>
                                <path fill="none" stroke="#aaaaaa" d="M62.015625,241H625" stroke-width="0.5"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <text x="49.515625" y="169" text-anchor="end" font-family="sans-serif" font-size="12px"
                                      stroke="none" fill="#888888"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                      font-weight="normal">
                                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15,000</tspan>
                                </text>
                                <path fill="none" stroke="#aaaaaa" d="M62.015625,169H625" stroke-width="0.5"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <text x="49.515625" y="97.00000000000003" text-anchor="end" font-family="sans-serif"
                                      font-size="12px" stroke="none" fill="#888888"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                      font-weight="normal">
                                    <tspan dy="4.000000000000028"
                                           style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">22,500
                                    </tspan>
                                </text>
                                <path fill="none" stroke="#aaaaaa" d="M62.015625,97.00000000000003H625"
                                      stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <text x="49.515625" y="25" text-anchor="end" font-family="sans-serif" font-size="12px"
                                      stroke="none" fill="#888888"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                      font-weight="normal">
                                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30,000</tspan>
                                </text>
                                <path fill="none" stroke="#aaaaaa" d="M62.015625,25H625" stroke-width="0.5"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <text x="521.0455665219483" y="325.5" text-anchor="middle" font-family="sans-serif"
                                      font-size="12px" stroke="none" fill="#888888"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                      font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan>
                                </text>
                                <text x="271.34969669257254" y="325.5" text-anchor="middle" font-family="sans-serif"
                                      font-size="12px" stroke="none" fill="#888888"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                      font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan>
                                </text>
                                <path fill="#7cb57c" stroke="none"
                                      d="M62.015625,261.9952C77.74275926693585,256.7152,109.19702780080756,245.75689404303512,124.92416206774341,240.8752C140.6584223583616,235.9912940430351,172.126942939598,229.61560628272252,187.8612032302162,222.93280000000001C203.43156497614046,216.31960628272253,234.57228846798898,189.66448883774456,250.14265021391324,187.6912C265.5348613677789,185.74048883774455,296.3192836755101,205.80161428898558,311.71149482937574,207.23680000000002C327.4386290963116,208.70321428898558,358.89289763018326,198.32102124575314,374.62003189711913,199.29760000000002C390.3542921877373,200.27462124575314,421.8228127689738,232.3866890052356,437.55707305959197,215.0512C453.12743480551626,197.8962890052356,484.2681582973647,69.70431494621195,499.838520043289,61.33600000000001C515.4017557655309,52.971514946211954,546.5282272100148,135.84980951947162,562.0914629322567,148.12C577.8185971991925,160.51940951947162,609.2728657330642,157.04080000000002,625,160.01440000000002L625,313L62.015625,313Z"
                                      fill-opacity="1"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path>
                                <path fill="none" stroke="#4da74d"
                                      d="M62.015625,261.9952C77.74275926693585,256.7152,109.19702780080756,245.75689404303512,124.92416206774341,240.8752C140.6584223583616,235.9912940430351,172.126942939598,229.61560628272252,187.8612032302162,222.93280000000001C203.43156497614046,216.31960628272253,234.57228846798898,189.66448883774456,250.14265021391324,187.6912C265.5348613677789,185.74048883774455,296.3192836755101,205.80161428898558,311.71149482937574,207.23680000000002C327.4386290963116,208.70321428898558,358.89289763018326,198.32102124575314,374.62003189711913,199.29760000000002C390.3542921877373,200.27462124575314,421.8228127689738,232.3866890052356,437.55707305959197,215.0512C453.12743480551626,197.8962890052356,484.2681582973647,69.70431494621195,499.838520043289,61.33600000000001C515.4017557655309,52.971514946211954,546.5282272100148,135.84980951947162,562.0914629322567,148.12C577.8185971991925,160.51940951947162,609.2728657330642,157.04080000000002,625,160.01440000000002"
                                      stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <circle cx="62.015625" cy="261.9952" r="2" fill="#4da74d" stroke="#ffffff"
                                        stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="124.92416206774341" cy="240.8752" r="2" fill="#4da74d" stroke="#ffffff"
                                        stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="187.8612032302162" cy="222.93280000000001" r="2" fill="#4da74d"
                                        stroke="#ffffff" stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="250.14265021391324" cy="187.6912" r="2" fill="#4da74d" stroke="#ffffff"
                                        stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="311.71149482937574" cy="207.23680000000002" r="2" fill="#4da74d"
                                        stroke="#ffffff" stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="374.62003189711913" cy="199.29760000000002" r="2" fill="#4da74d"
                                        stroke="#ffffff" stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="437.55707305959197" cy="215.0512" r="2" fill="#4da74d" stroke="#ffffff"
                                        stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="499.838520043289" cy="61.33600000000001" r="2" fill="#4da74d"
                                        stroke="#ffffff" stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="562.0914629322567" cy="148.12" r="2" fill="#4da74d" stroke="#ffffff"
                                        stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="625" cy="160.01440000000002" r="2" fill="#4da74d" stroke="#ffffff"
                                        stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <path fill="#a8b4bd" stroke="none"
                                      d="M62.015625,287.4064C77.74275926693585,281.632,109.19702780080756,269.3656543601359,124.92416206774341,264.3088C140.6584223583616,259.24965436013593,172.126942939598,249.70720000000003,187.8612032302162,246.94240000000002C203.43156497614046,244.20640000000003,234.57228846798898,244.52992497123134,250.14265021391324,242.30560000000003C265.5348613677789,240.10672497123133,296.3192836755101,232.33483379894662,311.71149482937574,229.2496C327.4386290963116,226.09723379894663,358.89289763018326,217.2244296262741,374.62003189711913,217.35520000000002C390.3542921877373,217.4860296262741,421.8228127689738,243.6579937172775,437.55707305959197,230.296C453.12743480551626,217.0731937172775,484.2681582973647,118.85619409475854,499.838520043289,111.01600000000002C515.4017557655309,103.17939409475855,546.5282272100148,159.3581391027101,562.0914629322567,167.58880000000002C577.8185971991925,175.90613910271009,609.2728657330642,174.8032,625,177.208L625,313L62.015625,313Z"
                                      fill-opacity="1"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path>
                                <path fill="none" stroke="#7a92a3"
                                      d="M62.015625,287.4064C77.74275926693585,281.632,109.19702780080756,269.3656543601359,124.92416206774341,264.3088C140.6584223583616,259.24965436013593,172.126942939598,249.70720000000003,187.8612032302162,246.94240000000002C203.43156497614046,244.20640000000003,234.57228846798898,244.52992497123134,250.14265021391324,242.30560000000003C265.5348613677789,240.10672497123133,296.3192836755101,232.33483379894662,311.71149482937574,229.2496C327.4386290963116,226.09723379894663,358.89289763018326,217.2244296262741,374.62003189711913,217.35520000000002C390.3542921877373,217.4860296262741,421.8228127689738,243.6579937172775,437.55707305959197,230.296C453.12743480551626,217.0731937172775,484.2681582973647,118.85619409475854,499.838520043289,111.01600000000002C515.4017557655309,103.17939409475855,546.5282272100148,159.3581391027101,562.0914629322567,167.58880000000002C577.8185971991925,175.90613910271009,609.2728657330642,174.8032,625,177.208"
                                      stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <circle cx="62.015625" cy="287.4064" r="2" fill="#7a92a3" stroke="#ffffff"
                                        stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="124.92416206774341" cy="264.3088" r="2" fill="#7a92a3" stroke="#ffffff"
                                        stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="187.8612032302162" cy="246.94240000000002" r="2" fill="#7a92a3"
                                        stroke="#ffffff" stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="250.14265021391324" cy="242.30560000000003" r="2" fill="#7a92a3"
                                        stroke="#ffffff" stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="311.71149482937574" cy="229.2496" r="2" fill="#7a92a3" stroke="#ffffff"
                                        stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="374.62003189711913" cy="217.35520000000002" r="2" fill="#7a92a3"
                                        stroke="#ffffff" stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="437.55707305959197" cy="230.296" r="2" fill="#7a92a3" stroke="#ffffff"
                                        stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="499.838520043289" cy="111.01600000000002" r="2" fill="#7a92a3"
                                        stroke="#ffffff" stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="562.0914629322567" cy="167.58880000000002" r="2" fill="#7a92a3"
                                        stroke="#ffffff" stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="625" cy="177.208" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <path fill="#2677b5" stroke="none"
                                      d="M62.015625,287.4064C77.74275926693585,287.1376,109.19702780080756,289.0257895356739,124.92416206774341,286.3312C140.6584223583616,283.6353895356739,172.126942939598,267.03781361256546,187.8612032302162,265.8448C203.43156497614046,264.66421361256545,234.57228846798898,279.12750471806675,250.14265021391324,276.8368C265.5348613677789,274.57230471806673,296.3192836755101,249.8830226700252,311.71149482937574,247.62400000000002C327.4386290963116,245.31582267002523,358.89289763018326,256.1805408833522,374.62003189711913,258.568C390.3542921877373,260.9565408833522,421.8228127689738,278.0706764397906,437.55707305959197,266.728C453.12743480551626,255.5034764397906,484.2681582973647,175.34121144426643,499.838520043289,168.2992C515.4017557655309,161.26041144426642,546.5282272100148,202.47734256433614,562.0914629322567,210.40480000000002C577.8185971991925,218.41574256433614,609.2728657330642,226.6408,625,232.0528L625,313L62.015625,313Z"
                                      fill-opacity="1"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path>
                                <path fill="none" stroke="#0b62a4"
                                      d="M62.015625,287.4064C77.74275926693585,287.1376,109.19702780080756,289.0257895356739,124.92416206774341,286.3312C140.6584223583616,283.6353895356739,172.126942939598,267.03781361256546,187.8612032302162,265.8448C203.43156497614046,264.66421361256545,234.57228846798898,279.12750471806675,250.14265021391324,276.8368C265.5348613677789,274.57230471806673,296.3192836755101,249.8830226700252,311.71149482937574,247.62400000000002C327.4386290963116,245.31582267002523,358.89289763018326,256.1805408833522,374.62003189711913,258.568C390.3542921877373,260.9565408833522,421.8228127689738,278.0706764397906,437.55707305959197,266.728C453.12743480551626,255.5034764397906,484.2681582973647,175.34121144426643,499.838520043289,168.2992C515.4017557655309,161.26041144426642,546.5282272100148,202.47734256433614,562.0914629322567,210.40480000000002C577.8185971991925,218.41574256433614,609.2728657330642,226.6408,625,232.0528"
                                      stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <circle cx="62.015625" cy="287.4064" r="2" fill="#0b62a4" stroke="#ffffff"
                                        stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="124.92416206774341" cy="286.3312" r="2" fill="#0b62a4" stroke="#ffffff"
                                        stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="187.8612032302162" cy="265.8448" r="2" fill="#0b62a4" stroke="#ffffff"
                                        stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="250.14265021391324" cy="276.8368" r="2" fill="#0b62a4" stroke="#ffffff"
                                        stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="311.71149482937574" cy="247.62400000000002" r="2" fill="#0b62a4"
                                        stroke="#ffffff" stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="374.62003189711913" cy="258.568" r="2" fill="#0b62a4" stroke="#ffffff"
                                        stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="437.55707305959197" cy="266.728" r="2" fill="#0b62a4" stroke="#ffffff"
                                        stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="499.838520043289" cy="168.2992" r="2" fill="#0b62a4" stroke="#ffffff"
                                        stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="562.0914629322567" cy="210.40480000000002" r="2" fill="#0b62a4"
                                        stroke="#ffffff" stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="625" cy="232.0528" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1"
                                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            </svg>
                            <div class="morris-hover morris-default-style"
                                 style="left: 68.8929px; top: 178px; display: none;">
                                <div class="morris-hover-row-label">2010 Q2</div>
                                <div class="morris-hover-point" style="color: #0b62a4">
                                    iPhone:
                                    2,778
                                </div>
                                <div class="morris-hover-point" style="color: #7A92A3">
                                    iPad:
                                    2,294
                                </div>
                                <div class="morris-hover-point" style="color: #4da74d">
                                    iPod Touch:
                                    2,441
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->

                <!-- /.panel -->

                <!-- /.panel -->
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-4">

                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example
                    </div>
                    <div class="panel-body">
                        <div id="morris-donut-chart">
                            <svg height="347" version="1.1" width="294" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 style="overflow: hidden; position: relative;">
                                <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël
                                    2.2.0
                                </desc>
                                <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                                <path fill="none" stroke="#0b62a4"
                                      d="M147,267.3333333333333A91.33333333333333,91.33333333333333,0,0,0,233.35180688739524,205.75135669275903"
                                      stroke-width="2" opacity="0"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                <path fill="#0b62a4" stroke="#ffffff"
                                      d="M147,270.3333333333333A94.33333333333333,94.33333333333333,0,0,0,236.1881801063243,206.72859103668176L271.8004216328778,218.99831113260063A132,132,0,0,1,147,308Z"
                                      stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <path fill="none" stroke="#3980b5"
                                      d="M233.35180688739524,205.75135669275903A91.33333333333333,91.33333333333333,0,0,0,65.0802706076015,135.61515489624878"
                                      stroke-width="2" opacity="1"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path>
                                <path fill="#3980b5" stroke="#ffffff"
                                      d="M236.1881801063243,206.72859103668176A94.33333333333333,94.33333333333333,0,0,0,62.38947657646432,134.28864538554163L24.120405911402244,115.42273234437317A137,137,0,0,1,276.52771033109286,220.62703503913855Z"
                                      stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <path fill="none" stroke="#679dc6"
                                      d="M65.0802706076015,135.61515489624878A91.33333333333333,91.33333333333333,0,0,0,146.97130678756912,267.33332882621403"
                                      stroke-width="2" opacity="0"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                <path fill="#679dc6" stroke="#ffffff"
                                      d="M62.38947657646432,134.28864538554163A94.33333333333333,94.33333333333333,0,0,0,146.97036430978855,270.33332867816995L146.95853097765465,307.99999348606116A132,132,0,0,1,28.60506262996421,117.63358152888509Z"
                                      stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <text x="147" y="166" text-anchor="middle" font-family="&quot;Arial&quot;"
                                      font-size="15px" stroke="none" fill="#000000"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;"
                                      font-weight="800" transform="matrix(1.4267,0,0,1.4267,-62.7153,-75.5184)"
                                      stroke-width="0.7009390206812651">
                                    <tspan dy="6" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">In-Store
                                        Sales
                                    </tspan>
                                </text>
                                <text x="147" y="186" text-anchor="middle" font-family="&quot;Arial&quot;"
                                      font-size="14px" stroke="none" fill="#000000"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;"
                                      transform="matrix(1.9028,0,0,1.9028,-132.793,-160.6944)"
                                      stroke-width="0.5255474452554745">
                                    <tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30</tspan>
                                </text>
                            </svg>
                        </div>
                        <a href="#" class="btn btn-default btn-block">View Details</a>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->

                <!-- /.panel .chat-panel -->
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-sx-12"><div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-calendar"></i> Recent Activity</h3>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">Elena Elena created a <a href="">new order</a>.<br>
                            <small class="text-muted"><i class="fa fa-clock-o"></i> 19/06/2018 07:55:28</small></li>

                    </ul>
                </div></div>
            <div class="col-lg-8 col-md-12 col-sm-12 col-sx-12"> <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-shopping-cart"></i> Latest Orders</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <td class="text-right">Order ID</td>
                                <td>Customer</td>
                                <td>Status</td>
                                <td>Date Added</td>
                                <td class="text-right">Total</td>
                                <td class="text-right">Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-right">70</td>
                                <td>Elena Elena</td>
                                <td>Pending</td>
                                <td>19/06/2018</td>
                                <td class="text-right">$1,205.00</td>
                                <td class="text-right"><a href="" data-toggle="tooltip" title="" class="btn btn-info" data-original-title="View"><i class="fa fa-eye"></i></a></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /#wrapper -->
@include('admin.layouts.footer')