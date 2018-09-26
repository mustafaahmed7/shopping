@include('admin.layouts.head')

<div id="wrapper">
    <!-- Navigation -->
    @include('admin.layouts.navbar')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1></h1>
                <div class="container-fluid">
                    <div class="pull-right">
                        <button type="submit" form="form-setting"
                                data-toggle="tooltip" title="" class="btn btn-primary"
                                data-original-title="Save">
                            <i class="fa fa-save"></i>
                        </button>
                    </div>
                    <h1>Settings</h1>
                </div>
               <h5></h5>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-pencil"></i> Edit Setting</h3>
                    </div>
                    <div class="panel-body">
                        <form action="http://demo.harnishdesign.net/opencart/bigshop/v1/admin/index.php?route=setting/setting&amp;token=52a5084e6cda15173951004a63e1b431" method="post" enctype="multipart/form-data" id="form-setting" class="form-horizontal">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab-general" data-toggle="tab" aria-expanded="true">General</a></li>
                                <li class=""><a href="#tab-store" data-toggle="tab" aria-expanded="false">Store</a></li>
                                <li class=""><a href="#tab-local" data-toggle="tab" aria-expanded="false">Local</a></li>
                                <li class=""><a href="#tab-option" data-toggle="tab" aria-expanded="false">Option</a></li>
                                <li class=""><a href="#tab-image" data-toggle="tab" aria-expanded="false">Image</a></li>
                                <li class=""><a href="#tab-ftp" data-toggle="tab" aria-expanded="false">FTP</a></li>
                                <li class=""><a href="#tab-mail" data-toggle="tab" aria-expanded="false">Mail</a></li>
                                <li class=""><a href="#tab-server" data-toggle="tab" aria-expanded="false">Server</a></li>
                                <li class=""><a href="#tab-google" data-toggle="tab" aria-expanded="false">Google</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-general">
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-name">Store Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_name" value="Bigshop" placeholder="Store Name" id="input-name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-owner">Store Owner</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_owner" value="Bigshop" placeholder="Store Owner" id="input-owner" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-address">Address</label>
                                        <div class="col-sm-10">
                  <textarea name="config_address" placeholder="Address" rows="5" id="input-address" class="form-control">Bigshop Plaza,
22 Hoi Wing Road,
Delhi,
India.</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-geocode"><span data-toggle="tooltip" data-container="#tab-general" title="" data-original-title="Please enter your store location geocode manually.">Geocode</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_geocode" value="" placeholder="Geocode" id="input-geocode" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_email" value="harnishdesign@gmail.com" placeholder="E-Mail" id="input-email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_telephone" value="+91 9898989898" placeholder="Telephone" id="input-telephone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-fax">Fax</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_fax" value="+91 9898989898" placeholder="Fax" id="input-fax" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-image">Image</label>
                                        <div class="col-sm-10"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/no_image-100x100.png" alt="" title="" data-placeholder="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/no_image-100x100.png"></a>
                                            <input type="hidden" name="config_image" value="" id="input-image">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-open"><span data-toggle="tooltip" data-container="#tab-general" title="" data-original-title="Fill in your store's opening times.">Opening Times</span></label>
                                        <div class="col-sm-10">
                                            <textarea name="config_open" rows="5" placeholder="Opening Times" id="input-open" class="form-control"> 24X7 Customer Care</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-comment"><span data-toggle="tooltip" data-container="#tab-general" title="" data-original-title="This field is for any special notes you would like to tell the customer i.e. Store does not accept cheques.">Comment</span></label>
                                        <div class="col-sm-10">
                                            <textarea name="config_comment" rows="5" placeholder="Comment" id="input-comment" class="form-control">This field is for any special notes you would like to tell the customer i.e. Store does not accept cheques. </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-store">
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-meta-title">Meta Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_meta_title" value="Your Store" placeholder="Meta Title" id="input-meta-title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-meta-description">Meta Tag Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="config_meta_description" rows="5" placeholder="Meta Tag Description" id="input-meta-description" class="form-control">My Store</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-meta-keyword">Meta Tag Keywords</label>
                                        <div class="col-sm-10">
                                            <textarea name="config_meta_keyword" rows="5" placeholder="Meta Tag Keywords" id="input-meta-keyword" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-template">Template</label>
                                        <div class="col-sm-10">
                                            <select name="config_template" id="input-template" class="form-control">
                                                <option value="bigshop" selected="selected">bigshop</option>
                                                <option value="default">default</option>
                                            </select>
                                            <br>
                                            <img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/templates/bigshop.png" alt="" id="template" class="img-thumbnail"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-layout">Default Layout</label>
                                        <div class="col-sm-10">
                                            <select name="config_layout_id" id="input-layout" class="form-control">
                                                <option value="6">Account</option>
                                                <option value="14">Adv Ajax Filter</option>
                                                <option value="10">Affiliate</option>
                                                <option value="3">Category</option>
                                                <option value="7">Checkout</option>
                                                <option value="12">Compare</option>
                                                <option value="8">Contact</option>
                                                <option value="4" selected="selected">Default</option>
                                                <option value="1">Home</option>
                                                <option value="11">Information</option>
                                                <option value="5">Manufacturer</option>
                                                <option value="2">Product</option>
                                                <option value="13">Search</option>
                                                <option value="9">Sitemap</option>
                                                <option value="15">Special</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-local">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-country">Country</label>
                                        <div class="col-sm-10">
                                            <select name="config_country_id" id="input-country" class="form-control">
                                                <option value="244">Aaland Islands</option>
                                                <option value="1">Afghanistan</option>
                                                <option value="2">Albania</option>
                                                <option value="3">Algeria</option>
                                                <option value="4">American Samoa</option>
                                                <option value="5">Andorra</option>
                                                <option value="6">Angola</option>
                                                <option value="7">Anguilla</option>
                                                <option value="8">Antarctica</option>
                                                <option value="9">Antigua and Barbuda</option>
                                                <option value="10">Argentina</option>
                                                <option value="11">Armenia</option>
                                                <option value="12">Aruba</option>
                                                <option value="252">Ascension Island (British)</option>
                                                <option value="13">Australia</option>
                                                <option value="14">Austria</option>
                                                <option value="15">Azerbaijan</option>
                                                <option value="16">Bahamas</option>
                                                <option value="17">Bahrain</option>
                                                <option value="18">Bangladesh</option>
                                                <option value="19">Barbados</option>
                                                <option value="20">Belarus</option>
                                                <option value="21">Belgium</option>
                                                <option value="22">Belize</option>
                                                <option value="23">Benin</option>
                                                <option value="24">Bermuda</option>
                                                <option value="25">Bhutan</option>
                                                <option value="26">Bolivia</option>
                                                <option value="245">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="27">Bosnia and Herzegovina</option>
                                                <option value="28">Botswana</option>
                                                <option value="29">Bouvet Island</option>
                                                <option value="30">Brazil</option>
                                                <option value="31">British Indian Ocean Territory</option>
                                                <option value="32">Brunei Darussalam</option>
                                                <option value="33">Bulgaria</option>
                                                <option value="34">Burkina Faso</option>
                                                <option value="35">Burundi</option>
                                                <option value="36">Cambodia</option>
                                                <option value="37">Cameroon</option>
                                                <option value="38">Canada</option>
                                                <option value="251">Canary Islands</option>
                                                <option value="39">Cape Verde</option>
                                                <option value="40">Cayman Islands</option>
                                                <option value="41">Central African Republic</option>
                                                <option value="42">Chad</option>
                                                <option value="43">Chile</option>
                                                <option value="44">China</option>
                                                <option value="45">Christmas Island</option>
                                                <option value="46">Cocos (Keeling) Islands</option>
                                                <option value="47">Colombia</option>
                                                <option value="48">Comoros</option>
                                                <option value="49">Congo</option>
                                                <option value="50">Cook Islands</option>
                                                <option value="51">Costa Rica</option>
                                                <option value="52">Cote D'Ivoire</option>
                                                <option value="53">Croatia</option>
                                                <option value="54">Cuba</option>
                                                <option value="246">Curacao</option>
                                                <option value="55">Cyprus</option>
                                                <option value="56">Czech Republic</option>
                                                <option value="237">Democratic Republic of Congo</option>
                                                <option value="57">Denmark</option>
                                                <option value="58">Djibouti</option>
                                                <option value="59">Dominica</option>
                                                <option value="60">Dominican Republic</option>
                                                <option value="61">East Timor</option>
                                                <option value="62">Ecuador</option>
                                                <option value="63">Egypt</option>
                                                <option value="64">El Salvador</option>
                                                <option value="65">Equatorial Guinea</option>
                                                <option value="66">Eritrea</option>
                                                <option value="67">Estonia</option>
                                                <option value="68">Ethiopia</option>
                                                <option value="69">Falkland Islands (Malvinas)</option>
                                                <option value="70">Faroe Islands</option>
                                                <option value="71">Fiji</option>
                                                <option value="72">Finland</option>
                                                <option value="74">France, Metropolitan</option>
                                                <option value="75">French Guiana</option>
                                                <option value="76">French Polynesia</option>
                                                <option value="77">French Southern Territories</option>
                                                <option value="126">FYROM</option>
                                                <option value="78">Gabon</option>
                                                <option value="79">Gambia</option>
                                                <option value="80">Georgia</option>
                                                <option value="81">Germany</option>
                                                <option value="82">Ghana</option>
                                                <option value="83">Gibraltar</option>
                                                <option value="84">Greece</option>
                                                <option value="85">Greenland</option>
                                                <option value="86">Grenada</option>
                                                <option value="87">Guadeloupe</option>
                                                <option value="88">Guam</option>
                                                <option value="89">Guatemala</option>
                                                <option value="256">Guernsey</option>
                                                <option value="90">Guinea</option>
                                                <option value="91">Guinea-Bissau</option>
                                                <option value="92">Guyana</option>
                                                <option value="93">Haiti</option>
                                                <option value="94">Heard and Mc Donald Islands</option>
                                                <option value="95">Honduras</option>
                                                <option value="96">Hong Kong</option>
                                                <option value="97">Hungary</option>
                                                <option value="98">Iceland</option>
                                                <option value="99">India</option>
                                                <option value="100">Indonesia</option>
                                                <option value="101">Iran (Islamic Republic of)</option>
                                                <option value="102">Iraq</option>
                                                <option value="103">Ireland</option>
                                                <option value="254">Isle of Man</option>
                                                <option value="104">Israel</option>
                                                <option value="105">Italy</option>
                                                <option value="106">Jamaica</option>
                                                <option value="107">Japan</option>
                                                <option value="257">Jersey</option>
                                                <option value="108">Jordan</option>
                                                <option value="109">Kazakhstan</option>
                                                <option value="110">Kenya</option>
                                                <option value="111">Kiribati</option>
                                                <option value="113">Korea, Republic of</option>
                                                <option value="253">Kosovo, Republic of</option>
                                                <option value="114">Kuwait</option>
                                                <option value="115">Kyrgyzstan</option>
                                                <option value="116">Lao People's Democratic Republic</option>
                                                <option value="117">Latvia</option>
                                                <option value="118">Lebanon</option>
                                                <option value="119">Lesotho</option>
                                                <option value="120">Liberia</option>
                                                <option value="121">Libyan Arab Jamahiriya</option>
                                                <option value="122">Liechtenstein</option>
                                                <option value="123">Lithuania</option>
                                                <option value="124">Luxembourg</option>
                                                <option value="125">Macau</option>
                                                <option value="127">Madagascar</option>
                                                <option value="128">Malawi</option>
                                                <option value="129">Malaysia</option>
                                                <option value="130">Maldives</option>
                                                <option value="131">Mali</option>
                                                <option value="132">Malta</option>
                                                <option value="133">Marshall Islands</option>
                                                <option value="134">Martinique</option>
                                                <option value="135">Mauritania</option>
                                                <option value="136">Mauritius</option>
                                                <option value="137">Mayotte</option>
                                                <option value="138">Mexico</option>
                                                <option value="139">Micronesia, Federated States of</option>
                                                <option value="140">Moldova, Republic of</option>
                                                <option value="141">Monaco</option>
                                                <option value="142">Mongolia</option>
                                                <option value="242">Montenegro</option>
                                                <option value="143">Montserrat</option>
                                                <option value="144">Morocco</option>
                                                <option value="145">Mozambique</option>
                                                <option value="146">Myanmar</option>
                                                <option value="147">Namibia</option>
                                                <option value="148">Nauru</option>
                                                <option value="149">Nepal</option>
                                                <option value="150">Netherlands</option>
                                                <option value="151">Netherlands Antilles</option>
                                                <option value="152">New Caledonia</option>
                                                <option value="153">New Zealand</option>
                                                <option value="154">Nicaragua</option>
                                                <option value="155">Niger</option>
                                                <option value="156">Nigeria</option>
                                                <option value="157">Niue</option>
                                                <option value="158">Norfolk Island</option>
                                                <option value="112">North Korea</option>
                                                <option value="159">Northern Mariana Islands</option>
                                                <option value="160">Norway</option>
                                                <option value="161">Oman</option>
                                                <option value="162">Pakistan</option>
                                                <option value="163">Palau</option>
                                                <option value="247">Palestinian Territory, Occupied</option>
                                                <option value="164">Panama</option>
                                                <option value="165">Papua New Guinea</option>
                                                <option value="166">Paraguay</option>
                                                <option value="167">Peru</option>
                                                <option value="168">Philippines</option>
                                                <option value="169">Pitcairn</option>
                                                <option value="170">Poland</option>
                                                <option value="171">Portugal</option>
                                                <option value="172">Puerto Rico</option>
                                                <option value="173">Qatar</option>
                                                <option value="174">Reunion</option>
                                                <option value="175">Romania</option>
                                                <option value="176">Russian Federation</option>
                                                <option value="177">Rwanda</option>
                                                <option value="178">Saint Kitts and Nevis</option>
                                                <option value="179">Saint Lucia</option>
                                                <option value="180">Saint Vincent and the Grenadines</option>
                                                <option value="181">Samoa</option>
                                                <option value="182">San Marino</option>
                                                <option value="183">Sao Tome and Principe</option>
                                                <option value="184">Saudi Arabia</option>
                                                <option value="185">Senegal</option>
                                                <option value="243">Serbia</option>
                                                <option value="186">Seychelles</option>
                                                <option value="187">Sierra Leone</option>
                                                <option value="188">Singapore</option>
                                                <option value="189">Slovak Republic</option>
                                                <option value="190">Slovenia</option>
                                                <option value="191">Solomon Islands</option>
                                                <option value="192">Somalia</option>
                                                <option value="193">South Africa</option>
                                                <option value="194">South Georgia &amp; South Sandwich Islands</option>
                                                <option value="248">South Sudan</option>
                                                <option value="195">Spain</option>
                                                <option value="196">Sri Lanka</option>
                                                <option value="249">St. Barthelemy</option>
                                                <option value="197">St. Helena</option>
                                                <option value="250">St. Martin (French part)</option>
                                                <option value="198">St. Pierre and Miquelon</option>
                                                <option value="199">Sudan</option>
                                                <option value="200">Suriname</option>
                                                <option value="201">Svalbard and Jan Mayen Islands</option>
                                                <option value="202">Swaziland</option>
                                                <option value="203">Sweden</option>
                                                <option value="204">Switzerland</option>
                                                <option value="205">Syrian Arab Republic</option>
                                                <option value="206">Taiwan</option>
                                                <option value="207">Tajikistan</option>
                                                <option value="208">Tanzania, United Republic of</option>
                                                <option value="209">Thailand</option>
                                                <option value="210">Togo</option>
                                                <option value="211">Tokelau</option>
                                                <option value="212">Tonga</option>
                                                <option value="213">Trinidad and Tobago</option>
                                                <option value="255">Tristan da Cunha</option>
                                                <option value="214">Tunisia</option>
                                                <option value="215">Turkey</option>
                                                <option value="216">Turkmenistan</option>
                                                <option value="217">Turks and Caicos Islands</option>
                                                <option value="218">Tuvalu</option>
                                                <option value="219">Uganda</option>
                                                <option value="220">Ukraine</option>
                                                <option value="221">United Arab Emirates</option>
                                                <option value="222" selected="selected">United Kingdom</option>
                                                <option value="223">United States</option>
                                                <option value="224">United States Minor Outlying Islands</option>
                                                <option value="225">Uruguay</option>
                                                <option value="226">Uzbekistan</option>
                                                <option value="227">Vanuatu</option>
                                                <option value="228">Vatican City State (Holy See)</option>
                                                <option value="229">Venezuela</option>
                                                <option value="230">Viet Nam</option>
                                                <option value="231">Virgin Islands (British)</option>
                                                <option value="232">Virgin Islands (U.S.)</option>
                                                <option value="233">Wallis and Futuna Islands</option>
                                                <option value="234">Western Sahara</option>
                                                <option value="235">Yemen</option>
                                                <option value="238">Zambia</option>
                                                <option value="239">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-zone">Region / State</label>
                                        <div class="col-sm-10">
                                            <select name="config_zone_id" id="input-zone" class="form-control"><option value=""> --- Please Select --- </option><option value="3513">Aberdeen</option><option value="3514">Aberdeenshire</option><option value="3515">Anglesey</option><option value="3516">Angus</option><option value="3517">Argyll and Bute</option><option value="3518">Bedfordshire</option><option value="3519">Berkshire</option><option value="3520">Blaenau Gwent</option><option value="3521">Bridgend</option><option value="3522">Bristol</option><option value="3523">Buckinghamshire</option><option value="3524">Caerphilly</option><option value="3525">Cambridgeshire</option><option value="3526">Cardiff</option><option value="3527">Carmarthenshire</option><option value="3528">Ceredigion</option><option value="3529">Cheshire</option><option value="3530">Clackmannanshire</option><option value="3531">Conwy</option><option value="3532">Cornwall</option><option value="3949">County Antrim</option><option value="3950">County Armagh</option><option value="3951">County Down</option><option value="3952">County Fermanagh</option><option value="3953">County Londonderry</option><option value="3954">County Tyrone</option><option value="3955">Cumbria</option><option value="3533">Denbighshire</option><option value="3534">Derbyshire</option><option value="3535">Devon</option><option value="3536">Dorset</option><option value="3537">Dumfries and Galloway</option><option value="3538">Dundee</option><option value="3539">Durham</option><option value="3540">East Ayrshire</option><option value="3541">East Dunbartonshire</option><option value="3542">East Lothian</option><option value="3543">East Renfrewshire</option><option value="3544">East Riding of Yorkshire</option><option value="3545">East Sussex</option><option value="3546">Edinburgh</option><option value="3547">Essex</option><option value="3548">Falkirk</option><option value="3549">Fife</option><option value="3550">Flintshire</option><option value="3551">Glasgow</option><option value="3552">Gloucestershire</option><option value="3553">Greater London</option><option value="3554">Greater Manchester</option><option value="3555">Gwynedd</option><option value="3556">Hampshire</option><option value="3557">Herefordshire</option><option value="3558">Hertfordshire</option><option value="3559">Highlands</option><option value="3560">Inverclyde</option><option value="3561">Isle of Wight</option><option value="3562">Kent</option><option value="3563" selected="selected">Lancashire</option><option value="3564">Leicestershire</option><option value="3565">Lincolnshire</option><option value="3566">Merseyside</option><option value="3567">Merthyr Tydfil</option><option value="3568">Midlothian</option><option value="3569">Monmouthshire</option><option value="3570">Moray</option><option value="3571">Neath Port Talbot</option><option value="3572">Newport</option><option value="3573">Norfolk</option><option value="3574">North Ayrshire</option><option value="3575">North Lanarkshire</option><option value="3576">North Yorkshire</option><option value="3577">Northamptonshire</option><option value="3578">Northumberland</option><option value="3579">Nottinghamshire</option><option value="3580">Orkney Islands</option><option value="3581">Oxfordshire</option><option value="3582">Pembrokeshire</option><option value="3583">Perth and Kinross</option><option value="3584">Powys</option><option value="3585">Renfrewshire</option><option value="3586">Rhondda Cynon Taff</option><option value="3587">Rutland</option><option value="3588">Scottish Borders</option><option value="3589">Shetland Islands</option><option value="3590">Shropshire</option><option value="3591">Somerset</option><option value="3592">South Ayrshire</option><option value="3593">South Lanarkshire</option><option value="3594">South Yorkshire</option><option value="3595">Staffordshire</option><option value="3596">Stirling</option><option value="3597">Suffolk</option><option value="3598">Surrey</option><option value="3599">Swansea</option><option value="3600">Torfaen</option><option value="3601">Tyne and Wear</option><option value="3602">Vale of Glamorgan</option><option value="3603">Warwickshire</option><option value="3604">West Dunbartonshire</option><option value="3605">West Lothian</option><option value="3606">West Midlands</option><option value="3607">West Sussex</option><option value="3608">West Yorkshire</option><option value="3609">Western Isles</option><option value="3610">Wiltshire</option><option value="3611">Worcestershire</option><option value="3612">Wrexham</option></select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-language">Language</label>
                                        <div class="col-sm-10">
                                            <select name="config_language" id="input-language" class="form-control">
                                                <option value="en" selected="selected">English</option>
                                                <option value="ar">Arabic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-admin-language">Administration Language</label>
                                        <div class="col-sm-10">
                                            <select name="config_admin_language" id="input-admin-language" class="form-control">
                                                <option value="en" selected="selected">English</option>
                                                <option value="ar">Arabic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-currency"><span data-toggle="tooltip" title="" data-original-title="Change the default currency. Clear your browser cache to see the change and reset your existing cookie.">Currency</span></label>
                                        <div class="col-sm-10">
                                            <select name="config_currency" id="input-currency" class="form-control">
                                                <option value="EUR">Euro</option>
                                                <option value="GBP">Pound Sterling</option>
                                                <option value="USD" selected="selected">US Dollar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Set your store to automatically update currencies daily.">Auto Update Currency</span></label>
                                        <div class="col-sm-10">
                                            <label class="radio-inline">
                                                <input type="radio" name="config_currency_auto" value="1" checked="checked">
                                                Yes                                      </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="config_currency_auto" value="0">
                                                No                                      </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-length-class">Length Class</label>
                                        <div class="col-sm-10">
                                            <select name="config_length_class_id" id="input-length-class" class="form-control">
                                                <option value="1" selected="selected">Centimeter</option>
                                                <option value="2">Millimeter</option>
                                                <option value="3">Inch</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-weight-class">Weight Class</label>
                                        <div class="col-sm-10">
                                            <select name="config_weight_class_id" id="input-weight-class" class="form-control">
                                                <option value="1" selected="selected">Kilogram</option>
                                                <option value="2">Gram</option>
                                                <option value="5">Pound </option>
                                                <option value="6">Ounce</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-option">
                                    <fieldset>
                                        <legend>Products</legend>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Show the number of products inside the subcategories in the storefront header category menu. Be warned, this will cause an extreme performance hit for stores with a lot of subcategories!">Category Product Count</span></label>
                                            <div class="col-sm-10">
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_product_count" value="1" checked="checked">
                                                    Yes                                          </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_product_count" value="0">
                                                    No                                          </label>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-catalog-limit"><span data-toggle="tooltip" title="" data-original-title="Determines how many catalog items are shown per page (products, categories, etc).">Default Items Per Page (Catalog)</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" name="config_product_limit" value="15" placeholder="Default Items Per Page (Catalog)" id="input-catalog-limit" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-list-description-limit"><span data-toggle="tooltip" title="" data-original-title="In the list view, short description character limit (categories, special etc).">List Description Limit (Catalog)</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" name="config_product_description_length" value="100" placeholder="List Description Limit (Catalog)" id="input-list-description-limit" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-admin-limit"><span data-toggle="tooltip" title="" data-original-title="Determines how many admin items are shown per page (orders, customers, etc).">Default Items Per Page (Admin)</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" name="config_limit_admin" value="20" placeholder="Default Items Per Page (Admin)" id="input-admin-limit" class="form-control">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Reviews</legend>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Enable/Disable new review entry and display of existing reviews.">Allow Reviews</span></label>
                                            <div class="col-sm-10">
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_review_status" value="1" checked="checked">
                                                    Yes                                          </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_review_status" value="0">
                                                    No                                          </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Allow guests to post reviews.">Allow Guest Reviews</span></label>
                                            <div class="col-sm-10">
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_review_guest" value="1" checked="checked">
                                                    Yes                                          </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_review_guest" value="0">
                                                    No                                          </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Send an email to the store owner when a new review is created.">New Review Alert Mail</span></label>
                                            <div class="col-sm-10">
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_review_mail" value="1">
                                                    Yes                                          </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_review_mail" value="0" checked="checked">
                                                    No                                          </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Vouchers</legend>
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-voucher-min"><span data-toggle="tooltip" title="" data-original-title="Minimum amount a customer can purchase a voucher for.">Voucher Min</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" name="config_voucher_min" value="1" placeholder="Voucher Min" id="input-voucher-min" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-voucher-max"><span data-toggle="tooltip" title="" data-original-title="Maximum amount a customer can purchase a voucher for.">Voucher Max</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" name="config_voucher_max" value="1000" placeholder="Voucher Max" id="input-voucher-max" class="form-control">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Taxes</legend>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Display Prices With Tax</label>
                                            <div class="col-sm-10">
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_tax" value="1" checked="checked">
                                                    Yes                                          </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_tax" value="0">
                                                    No                                          </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-tax-default"><span data-toggle="tooltip" title="" data-original-title="Use the store address to calculate taxes if no one is logged in. You can choose to use the store address for the customer's shipping or payment address.">Use Store Tax Address</span></label>
                                            <div class="col-sm-10">
                                                <select name="config_tax_default" id="input-tax-default" class="form-control">
                                                    <option value=""> --- None --- </option>
                                                    <option value="shipping" selected="selected">Shipping Address</option>
                                                    <option value="payment">Payment Address</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-tax-customer"><span data-toggle="tooltip" title="" data-original-title="Use the customer's default address when they login to calculate taxes. You can choose to use the default address for the customer's shipping or payment address.">Use Customer Tax Address</span></label>
                                            <div class="col-sm-10">
                                                <select name="config_tax_customer" id="input-tax-customer" class="form-control">
                                                    <option value=""> --- None --- </option>
                                                    <option value="shipping" selected="selected">Shipping Address</option>
                                                    <option value="payment">Payment Address</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Account</legend>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Track customers online via the customer reports section.">Customers Online</span></label>
                                            <div class="col-sm-10">
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_customer_online" value="1">
                                                    Yes                                          </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_customer_online" value="0" checked="checked">
                                                    No                                          </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-customer-group"><span data-toggle="tooltip" title="" data-original-title="Default customer group.">Customer Group</span></label>
                                            <div class="col-sm-10">
                                                <select name="config_customer_group_id" id="input-customer-group" class="form-control">
                                                    <option value="1" selected="selected">Default</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Display customer groups that new customers can select to use such as wholesale and business when signing up.">Customer Groups</span></label>
                                            <div class="col-sm-10">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="config_customer_group_display[]" value="1" checked="checked">
                                                        Default                                              </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Only show prices when a customer is logged in.">Login Display Prices</span></label>
                                            <div class="col-sm-10">
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_customer_price" value="1">
                                                    Yes                                          </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_customer_price" value="0" checked="checked">
                                                    No                                          </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-login-attempts"><span data-toggle="tooltip" title="" data-original-title="Maximum login attempts allowed before the account is locked for 1 hour. Customer and affliate accounts can be unlocked on the customer or affliate admin pages.">Max Login Attempts</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" name="config_login_attempts" value="5" placeholder="Max Login Attempts" id="input-login-attempts" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-account"><span data-toggle="tooltip" title="" data-original-title="Forces people to agree to terms before an account can be created.">Account Terms</span></label>
                                            <div class="col-sm-10">
                                                <select name="config_account_id" id="input-account" class="form-control">
                                                    <option value="0"> --- None --- </option>
                                                    <option value="4">About Us</option>
                                                    <option value="6">Delivery Information</option>
                                                    <option value="3" selected="selected">Privacy Policy</option>
                                                    <option value="5">Terms &amp; Conditions</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Send an email to the store owner when a new account is registered.">New Account Alert Mail</span></label>
                                            <div class="col-sm-10">
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_account_mail" value="1">
                                                    Yes                                          </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_account_mail" value="0" checked="checked">
                                                    No                                          </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Checkout</legend>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-invoice-prefix"><span data-toggle="tooltip" title="" data-original-title="Set the invoice prefix (e.g. INV-2011-00). Invoice IDs will start at 1 for each unique prefix.">Invoice Prefix</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" name="config_invoice_prefix" value="INV-2013-00" placeholder="Invoice Prefix" id="input-invoice-prefix" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-api"><span data-toggle="tooltip" title="" data-original-title="Default API user the admin should use.">API User</span></label>
                                            <div class="col-sm-10">
                                                <select name="config_api_id" id="input-api" class="form-control">
                                                    <option value="0"> --- None --- </option>
                                                    <option value="1" selected="selected">Y2ordCEkUbpspa5JszxfKBw1QzyytkWcvIaYF0bs5iZAAkwWgxfYNgFKSmeSeaJ1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Show the cart weight on the cart page.">Display Weight on Cart Page</span></label>
                                            <div class="col-sm-10">
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_cart_weight" value="1" checked="checked">
                                                    Yes                                          </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_cart_weight" value="0">
                                                    No                                          </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Allow customers to checkout without creating an account. This will not be available when a downloadable product is in the shopping cart.">Guest Checkout</span></label>
                                            <div class="col-sm-10">
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_checkout_guest" value="1" checked="checked">
                                                    Yes                                          </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_checkout_guest" value="0">
                                                    No                                          </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-checkout"><span data-toggle="tooltip" title="" data-original-title="Forces people to agree to terms before a customer can checkout.">Checkout Terms</span></label>
                                            <div class="col-sm-10">
                                                <select name="config_checkout_id" id="input-checkout" class="form-control">
                                                    <option value="0"> --- None --- </option>
                                                    <option value="4">About Us</option>
                                                    <option value="6">Delivery Information</option>
                                                    <option value="3">Privacy Policy</option>
                                                    <option value="5" selected="selected">Terms &amp; Conditions</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-order-status"><span data-toggle="tooltip" title="" data-original-title="Set the default order status when an order is processed.">Order Status</span></label>
                                            <div class="col-sm-10">
                                                <select name="config_order_status_id" id="input-order-status" class="form-control">
                                                    <option value="7">Canceled</option>
                                                    <option value="9">Canceled Reversal</option>
                                                    <option value="13">Chargeback</option>
                                                    <option value="5">Complete</option>
                                                    <option value="8">Denied</option>
                                                    <option value="14">Expired</option>
                                                    <option value="10">Failed</option>
                                                    <option value="1" selected="selected">Pending</option>
                                                    <option value="15">Processed</option>
                                                    <option value="2">Processing</option>
                                                    <option value="11">Refunded</option>
                                                    <option value="12">Reversed</option>
                                                    <option value="3">Shipped</option>
                                                    <option value="16">Voided</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-process-status"><span data-toggle="tooltip" title="" data-original-title="Set the order status the customer's order must reach before the order starts stock subtraction and coupon, voucher and rewards redemption.">Processing Order Status</span></label>
                                            <div class="col-sm-10">
                                                <div class="well well-sm" style="height: 150px; overflow: auto;">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_processing_status[]" value="7">
                                                            Canceled                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_processing_status[]" value="9">
                                                            Canceled Reversal                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_processing_status[]" value="13">
                                                            Chargeback                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_processing_status[]" value="5">
                                                            Complete                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_processing_status[]" value="8">
                                                            Denied                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_processing_status[]" value="14">
                                                            Expired                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_processing_status[]" value="10">
                                                            Failed                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_processing_status[]" value="1">
                                                            Pending                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_processing_status[]" value="15">
                                                            Processed                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_processing_status[]" value="2" checked="checked">
                                                            Processing                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_processing_status[]" value="11">
                                                            Refunded                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_processing_status[]" value="12">
                                                            Reversed                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_processing_status[]" value="3">
                                                            Shipped                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_processing_status[]" value="16">
                                                            Voided                                                  </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-complete-status"><span data-toggle="tooltip" title="" data-original-title="Set the order status the customer's order must reach before they are allowed to access their downloadable products and gift vouchers.">Complete Order Status</span></label>
                                            <div class="col-sm-10">
                                                <div class="well well-sm" style="height: 150px; overflow: auto;">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_complete_status[]" value="7">
                                                            Canceled                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_complete_status[]" value="9">
                                                            Canceled Reversal                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_complete_status[]" value="13">
                                                            Chargeback                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_complete_status[]" value="5" checked="checked">
                                                            Complete                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_complete_status[]" value="8">
                                                            Denied                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_complete_status[]" value="14">
                                                            Expired                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_complete_status[]" value="10">
                                                            Failed                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_complete_status[]" value="1">
                                                            Pending                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_complete_status[]" value="15">
                                                            Processed                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_complete_status[]" value="2">
                                                            Processing                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_complete_status[]" value="11">
                                                            Refunded                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_complete_status[]" value="12">
                                                            Reversed                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_complete_status[]" value="3">
                                                            Shipped                                                  </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="config_complete_status[]" value="16">
                                                            Voided                                                  </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Send an email to the store owner when a new order is created.">New Order Alert Mail</span></label>
                                            <div class="col-sm-10">
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_order_mail" value="1">
                                                    Yes                                          </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_order_mail" value="0" checked="checked">
                                                    No                                          </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Stock</legend>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Display stock quantity on the product page.">Display Stock</span></label>
                                            <div class="col-sm-10">
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_stock_display" value="1">
                                                    Yes                                          </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_stock_display" value="0" checked="checked">
                                                    No                                          </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Display out of stock message on the shopping cart page if a product is out of stock but stock checkout is yes. (Warning always shows if stock checkout is no)">Show Out Of Stock Warning</span></label>
                                            <div class="col-sm-10">
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_stock_warning" value="1">
                                                    Yes                                          </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_stock_warning" value="0" checked="checked">
                                                    No                                          </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Allow customers to still checkout if the products they are ordering are not in stock.">Stock Checkout</span></label>
                                            <div class="col-sm-10">
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_stock_checkout" value="1">
                                                    Yes                                          </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_stock_checkout" value="0" checked="checked">
                                                    No                                          </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Affiliates</legend>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Automatically approve any new affiliates who sign up.">Affiliate Requires Approval</span></label>
                                            <div class="col-sm-10">
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_affiliate_approval" value="1">
                                                    Yes                                          </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_affiliate_approval" value="0" checked="checked">
                                                    No                                          </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Automatically add commission when each order reaches the complete status.">Automatic Commission</span></label>
                                            <div class="col-sm-10">
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_affiliate_auto" value="1">
                                                    Yes                                          </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_affiliate_auto" value="0" checked="checked">
                                                    No                                          </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-affiliate-commission"><span data-toggle="tooltip" title="" data-original-title="The default affiliate commission percentage.">Affiliate Commission (%)</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" name="config_affiliate_commission" value="5" placeholder="Affiliate Commission (%)" id="input-affiliate-commission" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-affiliate"><span data-toggle="tooltip" title="" data-original-title="Forces people to agree to terms before an affiliate account can be created.">Affiliate Terms</span></label>
                                            <div class="col-sm-10">
                                                <select name="config_affiliate_id" id="input-affiliate" class="form-control">
                                                    <option value="0"> --- None --- </option>
                                                    <option value="4" selected="selected">About Us</option>
                                                    <option value="6">Delivery Information</option>
                                                    <option value="3">Privacy Policy</option>
                                                    <option value="5">Terms &amp; Conditions</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Send an email to the store owner when a new affiliate is registered.">New Affiliate Alert Mail</span></label>
                                            <div class="col-sm-10">
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_affiliate_mail" value="1">
                                                    Yes                                          </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="config_affiliate_mail" value="0" checked="checked">
                                                    No                                          </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Returns</legend>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-return"><span data-toggle="tooltip" title="" data-original-title="Forces people to agree to terms before a return can be created.">Return Terms</span></label>
                                            <div class="col-sm-10">
                                                <select name="config_return_id" id="input-return" class="form-control">
                                                    <option value="0"> --- None --- </option>
                                                    <option value="4">About Us</option>
                                                    <option value="6">Delivery Information</option>
                                                    <option value="3">Privacy Policy</option>
                                                    <option value="5">Terms &amp; Conditions</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-return-status"><span data-toggle="tooltip" title="" data-original-title="Set the default return status when a return request is submitted.">Return Status</span></label>
                                            <div class="col-sm-10">
                                                <select name="config_return_status_id" id="input-return-status" class="form-control">
                                                    <option value="2" selected="selected">Awaiting Products</option>
                                                    <option value="3">Complete</option>
                                                    <option value="1">Pending</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="tab-pane" id="tab-image">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-logo">Store Logo</label>
                                        <div class="col-sm-10"><a href="" id="thumb-logo" data-toggle="image" class="img-thumbnail"><img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/logo-100x100.png" alt="" title="" data-placeholder="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/no_image-100x100.png"></a>
                                            <input type="hidden" name="config_logo" value="catalog/logo.png" id="input-logo">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-icon">Icon</label>
                                        <div class="col-sm-10"><a href="" id="thumb-icon" data-toggle="image" class="img-thumbnail"><img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/cart-100x100.png" alt="" title="" data-placeholder="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/no_image-100x100.png"></a>
                                            <input type="hidden" name="config_icon" value="catalog/cart.png" id="input-icon">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-image-category-width">Category Image Size</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" name="config_image_category_width" value="80" placeholder="Width" id="input-image-category-width" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="config_image_category_height" value="80" placeholder="Height" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-image-thumb-width">Product Image Thumb Size</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" name="config_image_thumb_width" value="350" placeholder="Width" id="input-image-thumb-width" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="config_image_thumb_height" value="350" placeholder="Height" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-image-popup-width">Product Image Popup Size</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" name="config_image_popup_width" value="500" placeholder="Width" id="input-image-popup-width" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="config_image_popup_height" value="500" placeholder="Height" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-image-product-width">Product Image List Size</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" name="config_image_product_width" value="200" placeholder="Width" id="input-image-product-width" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="config_image_product_height" value="200" placeholder="Height" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-image-additional-width">Additional Product Image Size</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" name="config_image_additional_width" value="350" placeholder="Width" id="input-image-additional-width" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="config_image_additional_height" value="350" placeholder="Height" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-image-related">Related Product Image Size</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" name="config_image_related_width" value="200" placeholder="Width" id="input-image-related" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="config_image_related_height" value="200" placeholder="Height" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-image-compare">Compare Image Size</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" name="config_image_compare_width" value="90" placeholder="Width" id="input-image-compare" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="config_image_compare_height" value="90" placeholder="Height" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-image-wishlist">Wish List Image Size</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" name="config_image_wishlist_width" value="47" placeholder="Width" id="input-image-wishlist" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="config_image_wishlist_height" value="47" placeholder="Height" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-image-cart">Cart Image Size</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" name="config_image_cart_width" value="47" placeholder="Width" id="input-image-cart" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="config_image_cart_height" value="47" placeholder="Height" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-image-location">Store Image Size</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" name="config_image_location_width" value="268" placeholder="Width" id="input-image-location" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="config_image_location_height" value="50" placeholder="Height" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-ftp">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-ftp-host">FTP Host</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_ftp_hostname" value="localhost" placeholder="FTP Host" id="input-ftp-host" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-ftp-port">FTP Port</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_ftp_port" value="21" placeholder="FTP Port" id="input-ftp-port" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-ftp-username">FTP Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_ftp_username" value="" placeholder="FTP Username" id="input-ftp-username" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-ftp-password">FTP Password</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_ftp_password" value="" placeholder="FTP Password" id="input-ftp-password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-ftp-root"><span data-toggle="tooltip" data-html="true" title="" data-original-title="The directory your OpenCart installation is stored in. Normally 'public_html/'.">FTP Root</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_ftp_root" value="" placeholder="FTP Root" id="input-ftp-root" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Enable FTP</label>
                                        <div class="col-sm-10">
                                            <label class="radio-inline">
                                                <input type="radio" name="config_ftp_status" value="1">
                                                Yes                                      </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="config_ftp_status" value="0" checked="checked">
                                                No                                      </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-mail">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-mail-protocol"><span data-toggle="tooltip" title="" data-original-title="Only choose 'Mail' unless your host has disabled the php mail function.">Mail Protocol</span></label>
                                        <div class="col-sm-10">
                                            <select name="config_mail_protocol" id="input-mail-protocol" class="form-control">
                                                <option value="mail" selected="selected">Mail</option>
                                                <option value="smtp">SMTP</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-mail-parameter"><span data-toggle="tooltip" title="" data-original-title="When using 'Mail', additional mail parameters can be added here (e.g. -f email@storeaddress.com).">Mail Parameters</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_mail_parameter" value="" placeholder="Mail Parameters" id="input-mail-parameter" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-mail-smtp-hostname"><span data-toggle="tooltip" title="" data-original-title="Add 'tls://' prefix if security connection is required. (e.g. tls://smtp.gmail.com).">SMTP Hostname</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_mail_smtp_hostname" value="" placeholder="SMTP Hostname" id="input-mail-smtp-hostname" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-mail-smtp-username">SMTP Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_mail_smtp_username" value="" placeholder="SMTP Username" id="input-mail-smtp-username" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-mail-smtp-password">SMTP Password</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_mail_smtp_password" value="" placeholder="SMTP Password" id="input-mail-smtp-password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-mail-smtp-port">SMTP Port</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_mail_smtp_port" value="25" placeholder="SMTP Port" id="input-mail-smtp-port" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-mail-smtp-timeout">SMTP Timeout</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_mail_smtp_timeout" value="5" placeholder="SMTP Timeout" id="input-mail-smtp-timeout" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-alert-email"><span data-toggle="tooltip" title="" data-original-title="Any additional emails you want to receive the alert email, in addition to the main store email. (comma separated).">Additional Alert E-Mails</span></label>
                                        <div class="col-sm-10">
                                            <textarea name="config_mail_alert" rows="5" placeholder="Additional Alert E-Mails" id="input-alert-email" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-server">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="To use SSL check with your host if a SSL certificate is installed and add the SSL URL to the catalog and admin config files.">Use SSL</span></label>
                                        <div class="col-sm-10">
                                            <label class="radio-inline">
                                                <input type="radio" name="config_secure" value="1">
                                                Yes                                      </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="config_secure" value="0" checked="checked">
                                                No                                      </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Try to share the session cookie between stores so the cart can be passed between different domains.">Use Shared Sessions</span></label>
                                        <div class="col-sm-10">
                                            <label class="radio-inline">
                                                <input type="radio" name="config_shared" value="1">
                                                Yes                                      </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="config_shared" value="0" checked="checked">
                                                No                                      </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-robots"><span data-toggle="tooltip" title="" data-original-title="A list of web crawler user agents that shared sessions will not be used with. Use separate lines for each user agent.">Robots</span></label>
                                        <div class="col-sm-10">
                  <textarea name="config_robots" rows="5" placeholder="Robots" id="input-robots" class="form-control">abot
dbot
ebot
hbot
kbot
lbot
mbot
nbot
obot
pbot
rbot
sbot
tbot
vbot
ybot
zbot
bot.
bot/
_bot
.bot
/bot
-bot
:bot
(bot
crawl
slurp
spider
seek
accoona
acoon
adressendeutschland
ah-ha.com
ahoy
altavista
ananzi
anthill
appie
arachnophilia
arale
araneo
aranha
architext
aretha
arks
asterias
atlocal
atn
atomz
augurfind
backrub
bannana_bot
baypup
bdfetch
big brother
biglotron
bjaaland
blackwidow
blaiz
blog
blo.
bloodhound
boitho
booch
bradley
butterfly
calif
cassandra
ccubee
cfetch
charlotte
churl
cienciaficcion
cmc
collective
comagent
combine
computingsite
csci
curl
cusco
daumoa
deepindex
delorie
depspid
deweb
die blinde kuh
digger
ditto
dmoz
docomo
download express
dtaagent
dwcp
ebiness
ebingbong
e-collector
ejupiter
emacs-w3 search engine
esther
evliya celebi
ezresult
falcon
felix ide
ferret
fetchrover
fido
findlinks
fireball
fish search
fouineur
funnelweb
gazz
gcreep
genieknows
getterroboplus
geturl
glx
goforit
golem
grabber
grapnel
gralon
griffon
gromit
grub
gulliver
hamahakki
harvest
havindex
helix
heritrix
hku www octopus
homerweb
htdig
html index
html_analyzer
htmlgobble
hubater
hyper-decontextualizer
ia_archiver
ibm_planetwide
ichiro
iconsurf
iltrovatore
image.kapsi.net
imagelock
incywincy
indexer
infobee
informant
ingrid
inktomisearch.com
inspector web
intelliagent
internet shinchakubin
ip3000
iron33
israeli-search
ivia
jack
jakarta
javabee
jetbot
jumpstation
katipo
kdd-explorer
kilroy
knowledge
kototoi
kretrieve
labelgrabber
lachesis
larbin
legs
libwww
linkalarm
link validator
linkscan
lockon
lwp
lycos
magpie
mantraagent
mapoftheinternet
marvin/
mattie
mediafox
mediapartners
mercator
merzscope
microsoft url control
minirank
miva
mj12
mnogosearch
moget
monster
moose
motor
multitext
muncher
muscatferret
mwd.search
myweb
najdi
nameprotect
nationaldirectory
nazilla
ncsa beta
nec-meshexplorer
nederland.zoek
netcarta webmap engine
netmechanic
netresearchserver
netscoop
newscan-online
nhse
nokia6682/
nomad
noyona
nutch
nzexplorer
objectssearch
occam
omni
open text
openfind
openintelligencedata
orb search
osis-project
pack rat
pageboy
pagebull
page_verifier
panscient
parasite
partnersite
patric
pear.
pegasus
peregrinator
pgp key agent
phantom
phpdig
picosearch
piltdownman
pimptrain
pinpoint
pioneer
piranha
plumtreewebaccessor
pogodak
poirot
pompos
poppelsdorf
poppi
popular iconoclast
psycheclone
publisher
python
rambler
raven search
roach
road runner
roadhouse
robbie
robofox
robozilla
rules
salty
sbider
scooter
scoutjet
scrubby
search.
searchprocess
semanticdiscovery
senrigan
sg-scout
shai'hulud
shark
shopwiki
sidewinder
sift
silk
simmany
site searcher
site valet
sitetech-rover
skymob.com
sleek
smartwit
sna-
snappy
snooper
sohu
speedfind
sphere
sphider
spinner
spyder
steeler/
suke
suntek
supersnooper
surfnomore
sven
sygol
szukacz
tach black widow
tarantula
templeton
/teoma
t-h-u-n-d-e-r-s-t-o-n-e
theophrastus
titan
titin
tkwww
toutatis
t-rex
tutorgig
twiceler
twisted
ucsd
udmsearch
url check
updated
vagabondo
valkyrie
verticrawl
victoria
vision-search
volcano
voyager/
voyager-hc
w3c_validator
w3m2
w3mir
walker
wallpaper
wanderer
wauuu
wavefire
web core
web hopper
web wombat
webbandit
webcatcher
webcopy
webfoot
weblayers
weblinker
weblog monitor
webmirror
webmonkey
webquest
webreaper
websitepulse
websnarf
webstolperer
webvac
webwalk
webwatch
webwombat
webzinger
whizbang
whowhere
wild ferret
worldlight
wwwc
wwwster
xenu
xget
xift
xirq
yandex
yanga
yeti
yodao
zao
zippp
zyborg</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="To use SEO URLs, apache module mod-rewrite must be installed and you need to rename the htaccess.txt to .htaccess.">Use SEO URLs</span></label>
                                        <div class="col-sm-10">
                                            <label class="radio-inline">
                                                <input type="radio" name="config_seo_url" value="1">
                                                Yes                                      </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="config_seo_url" value="0" checked="checked">
                                                No                                      </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-file-max-size"><span data-toggle="tooltip" title="" data-original-title="The maximum image file size you can upload in Image Manager. Enter as byte.">Max File Size</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_file_max_size" value="300000" placeholder="Max File Size" id="input-file-max-size" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-file-ext-allowed"><span data-toggle="tooltip" title="" data-original-title="Add which file extensions are allowed to be uploaded. Use a new line for each value.">Allowed File Extensions</span></label>
                                        <div class="col-sm-10">
                  <textarea name="config_file_ext_allowed" rows="5" placeholder="Allowed File Extensions" id="input-file-ext-allowed" class="form-control">zip
txt
png
jpe
jpeg
jpg
gif
bmp
ico
tiff
tif
svg
svgz
zip
rar
msi
cab
mp3
qt
mov
pdf
psd
ai
eps
ps
doc</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-file-mime-allowed"><span data-toggle="tooltip" title="" data-original-title="Add which file mime types are allowed to be uploaded. Use a new line for each value.">Allowed File Mime Types</span></label>
                                        <div class="col-sm-10">
                  <textarea name="config_file_mime_allowed" cols="60" rows="5" placeholder="Allowed File Mime Types" id="input-file-mime-allowed" class="form-control">text/plain
image/png
image/jpeg
image/gif
image/bmp
image/tiff
image/svg+xml
application/zip
"application/zip"
application/x-zip
"application/x-zip"
application/x-zip-compressed
"application/x-zip-compressed"
application/rar
"application/rar"
application/x-rar
"application/x-rar"
application/x-rar-compressed
"application/x-rar-compressed"
application/octet-stream
"application/octet-stream"
audio/mpeg
video/quicktime
application/pdf</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Prevents customers from browsing your store. They will instead see a maintenance message. If logged in as admin, you will see the store as normal.">Maintenance Mode</span></label>
                                        <div class="col-sm-10">
                                            <label class="radio-inline">
                                                <input type="radio" name="config_maintenance" value="1">
                                                Yes                                      </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="config_maintenance" value="0" checked="checked">
                                                No                                      </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Allow forgotten password to be used for the admin. This will be disabled automatically if the system detects a hack attempt.">Allow Forgotten Password</span></label>
                                        <div class="col-sm-10">
                                            <label class="radio-inline">
                                                <input type="radio" name="config_password" value="1" checked="checked">
                                                Yes                                      </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="config_password" value="0">
                                                No                                      </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-encryption"><span data-toggle="tooltip" title="" data-original-title="Please provide a secret key that will be used to encrypt private information when processing orders.">Encryption Key</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_encryption" value="6f0ab9e3e724c6a4541d3d96bdac4190" placeholder="Encryption Key" id="input-encryption" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-compression"><span data-toggle="tooltip" title="" data-original-title="GZIP for more efficient transfer to requesting clients. Compression level must be between 0 - 9.">Output Compression Level</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_compression" value="0" placeholder="Output Compression Level" id="input-compression" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Display Errors</label>
                                        <div class="col-sm-10">
                                            <label class="radio-inline">
                                                <input type="radio" name="config_error_display" value="1" checked="checked">
                                                Yes                                      </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="config_error_display" value="0">
                                                No                                      </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Log Errors</label>
                                        <div class="col-sm-10">
                                            <label class="radio-inline">
                                                <input type="radio" name="config_error_log" value="1" checked="checked">
                                                Yes                                      </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="config_error_log" value="0">
                                                No                                      </label>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-error-filename">Error Log Filename</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="config_error_filename" value="error.log" placeholder="Error Log Filename" id="input-error-filename" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-google">
                                    <fieldset>
                                        <legend>Google Analytics</legend>
                                        <div class="alert alert-info">Login to your <a href="http://www.google.com/analytics/" target="_blank"><u>Google Analytics</u></a> account and after creating your website profile copy and paste the analytics code into this field.</div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-google-analytics">Google Analytics Code</label>
                                            <div class="col-sm-10">
                                                <textarea name="config_google_analytics" rows="5" placeholder="Google Analytics Code" id="input-google-analytics" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-google-analytics-status">Status</label>
                                            <div class="col-sm-10">
                                                <select name="config_google_analytics_status" id="input-google-analytics-status" class="form-control">
                                                    <option value="1">Enabled</option>
                                                    <option value="0" selected="selected">Disabled</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Google reCAPTCHA</legend>
                                        <div class="alert alert-info">Go to <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank"><u>Google reCAPTCHA page</u></a> and register your website.</div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-google-captcha-public">Site key</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="config_google_captcha_public" value="" placeholder="Site key" id="input-google-captcha-public" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-google-captcha-secret">Secret key</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="config_google_captcha_secret" value="" placeholder="Secret key" id="input-google-captcha-secret" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-google-captcha-status">Status</label>
                                            <div class="col-sm-10">
                                                <select name="config_google_captcha_status" id="input-google-captcha-status" class="form-control">
                                                    <option value="1">Enabled</option>
                                                    <option value="0" selected="selected">Disabled</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
@include('admin.layouts.footer')