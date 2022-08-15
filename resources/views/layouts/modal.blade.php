<!-- Modal categorie -->
<div id="categorie-modal" class="modal fade">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">@lang("Configuration d'une categorie")</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <p class="mt-1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">@lang('Nom d\'une categorie')</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="@lang('Nom de l\'agent')">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">@lang('Image Descriptive')</label>
                            <input type="file" class="form-control" name="images">
                        </div>
                    </div>
                </div>
                </p>
                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">@lang("Annuler")</button>
                <a href="" class="btn btn-primary mt-2 comfirm-link" id="supp" data-id="">@lang("Supprimer")</a>
            </div>
        </div>
    </div>
</div>
<div id="categorie-modif-modal" class="modal fade">
    <div class="modal-dialog modal-md">
        <form action="{{ route('categories.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title h6">@lang("Modifier une categorie")</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <p class="mt-1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="id" id="idCat" hidden>
                                <label for="">@lang('Nom d\'une categorie')</label>
                                <input type="text" class="form-control" name="name" id="nameCat" aria-describedby="helpId" placeholder="@lang('Nom de l\'agent')">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">@lang('Image Descriptive')</label>
                                <input type="file" class="form-control" name="images">
                            </div>
                        </div>
                    </div>
                    </p>
                    <button type="button" class="btn btn-link mt-2" data-dismiss="modal">@lang("Annuler")</button>
                    <button type="submit" class="btn btn-primary mt-2 comfirm-link">@lang("Enregistrer")</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div id="categorie-info-modal" class="modal fade">
    <div class="modal-dialog modal-dialog-right">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h6">Information</h5>
                <button type="button" class="close" data-dismiss="modal">
                </button>
            </div>
            <div class="modal-body c-scrollbar-light position-relative" id="info-modal-content">
                <div class="c-preloader text-center absolute-center">
                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal categorie -->
<!-- Suppression modal -->
<div id="delete-modal" class="modal fade">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">@lang("Confirmation de suppression")</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mt-1">@lang("Voulez-vous vraiment supprimer cet element?")</p>
                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">@lang("Annuler")</button>
                <a href="" class="btn btn-primary mt-2 comfirm-link" id="supp" data-id="">@lang("Supprimer")</a>
            </div>
        </div>
    </div>
</div>
<!-- Suppression modal -->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
            </div>

            <div class="modal-body">
                <p>@lang("Supprimer le message de confirmation")</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">@lang("Annuler")</button>
                <a id="delete_link" class="btn btn-danger btn-ok">@lang("Supprimer")</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addcards">
    <div class="modal-dialog modal-lg modal-dialog-zoom product-modal" role="document">
        <div class="modal-content position-relative">
            <div class="c-preloader text-center p-3">
                <i class="las la-spinner la-spin la-3x"></i>
            </div>
            <button type="button" class="close absolute-top-right btn-icon close z-1" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="la-2x">&times;</span>
            </button>
            <div id="addToCart-modal-body">

            </div>
        </div>
    </div>
</div>

<div id="addcart" class="modal fade">
    <div class=" modal-dialog modal-lg modal-dialog-zoom product-modal">
        <div class="modal-content">
            <div class="modal-content position-relative">
                <div class="c-preloader text-center p-3">
                    <i class="las la-spinner la-spin la-3x"></i>
                </div>
                <button type="button" class="close absolute-top-right btn-icon close z-1" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la-2x">&times;</span>
                </button>
                <div id="addToCart-modal-body">
                    <section class="mb-4 pt-3">
                        <div class="container">
                            <div class="bg-white shadow-sm rounded p-3">
                                <div class="row">
                                    <div class="col-lg-7 mb-4">
                                        <div class="sticky-top z-3 row gutters-10">
                                            <div class="col order-1 order-md-2">
                                                <div class="aiz-carousel product-gallery images-res" data-nav-for='.product-gallery-thumb' data-fade='true' data-auto-height='true'>

                                                </div>
                                            </div>
                                            <div class="col-12 col-md-auto w-md-80px order-2 order-md-1 mt-3 mt-md-0">
                                                <div class="aiz-carousel product-gallery-thumb images-res-tumb" data-items='5' data-nav-for='.product-gallery' data-vertical='true' data-vertical-sm='false' data-focus-select='true' data-arrows='true'>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <div class="text-left">
                                            <h1 class="mb-2 fs-20 fw-600 title-details">

                                            </h1>

                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <span class="rating">
                                                        <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star'></i>
                                                    </span>
                                                    <span class="ml-1 opacity-50">(100 vues)</span>
                                                </div>
                                            </div>

                                            <form id="option-choice-forms">
                                                @csrf
                                                <div class="row no-gutters">
                                                    <div class="col-sm-2">
                                                        <div class="opacity-50 my-2">@lang("Quantite")</div>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <div class="product-quantity d-flex align-items-center">
                                                            <div class="row no-gutters align-items-center aiz-plus-minus mr-3" style="width: 130px;">
                                                                <button class="btn col-auto btn-icon btn-sm btn-circle btn-light" type="button" data-type="minus" data-field="quantity" disabled="">
                                                                    <i class="las la-minus"></i>
                                                                </button>
                                                                <input type="number" name="quantity" class="col border-0 text-center flex-grow-1 fs-16 input-number" placeholder="1" value="1" min="1" max="10" lang="fr">
                                                                <button class="btn  col-auto btn-icon btn-sm btn-circle btn-light" type="button" data-type="plus" data-field="quantity">
                                                                    <i class="las la-plus"></i>
                                                                </button>
                                                            </div>
                                                            <div class="avialable-amount opacity-60">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="row no-gutters pb-3 d-none" id="chosen_price_div">
                                                    <div class="col-sm-2">
                                                        <div class="opacity-50 my-2">@lang("Prix total")</div>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <div class="product-price">
                                                            <strong id="chosen_price" class="h4 fw-600 text-primary">

                                                            </strong>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>

                                            <div class="mt-3">
                                                <div class="row d-flex">
                                                    <a href="{{ route('produit.cart')}}" type="button" class="btn btn-soft-primary mr-2 add-to-cart fw-600" onclick="addToCart()">
                                                        <i class="las la-shopping-bag"></i>
                                                        <span class="d-none d-md-inline-block"> @lang("ajouter chariot")</span>
                                                    </a>
                                                    <button type="button" class="btn btn-primary buy-now fw-600" onclick="buyNow()">
                                                        <i class="la la-shopping-cart"></i> @lang("Achetez")
                                                    </button>
                                                </div>
                                                <button type="button" class="btn btn-secondary out-of-stock fw-600 d-none" disabled>
                                                    <i class="la la-cart-arrow-down"></i> @lang("Au dessus du stock")
                                                </button>
                                            </div>
                                            <div class="row no-gutters mt-3">
                                                <div class="col-3">
                                                    <div class="opacity-50 mt-2">@lang("Remboursement")</div>
                                                </div>
                                                <div class="col-9">
                                                    <a href="#" target="_blank">
                                                        <img src="{{ asset('assets/img/remboussement.jpg')}}" height="36">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row no-gutters mt-4">
                                                <div class="col-sm-3">
                                                    <div class="opacity-50 my-2">@lang("partager")</div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="aiz-share"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Adresse -->
<div class="modal fade" id="new-address-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-default" role="form" action="#" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Address</label>
                            </div>
                            <div class="col-md-10">
                                <textarea class="form-control mb-3" placeholder="Your Address" rows="2" name="address" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Country</label>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <select class="form-control aiz-selectpicker" data-live-search="true" data-placeholder="Select your country" name="country_id" required>
                                        <option value="">Select your country</option>
                                        <option value="1">Afghanistan</option>
                                        <option value="2">Albania</option>
                                        <option value="3">Algeria</option>
                                        <option value="4">American Samoa</option>
                                        <option value="5">Andorra</option>
                                        <option value="6">Angola</option>
                                        <option value="7">Anguilla</option>
                                        <option value="8">Antarctica</option>
                                        <option value="9">Antigua And Barbuda</option>
                                        <option value="10">Argentina</option>
                                        <option value="11">Armenia</option>
                                        <option value="12">Aruba</option>
                                        <option value="13">Australia</option>
                                        <option value="14">Austria</option>
                                        <option value="15">Azerbaijan</option>
                                        <option value="16">Bahamas The</option>
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
                                        <option value="27">Bosnia and Herzegovina</option>
                                        <option value="28">Botswana</option>
                                        <option value="29">Bouvet Island</option>
                                        <option value="30">Brazil</option>
                                        <option value="31">British Indian Ocean Territory</option>
                                        <option value="32">Brunei</option>
                                        <option value="33">Bulgaria</option>
                                        <option value="34">Burkina Faso</option>
                                        <option value="35">Burundi</option>
                                        <option value="36">Cambodia</option>
                                        <option value="37">Cameroon</option>
                                        <option value="38">Canada</option>
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
                                        <option value="49">Republic Of The Congo</option>
                                        <option value="50">Democratic Republic Of The Congo</option>
                                        <option value="51">Cook Islands</option>
                                        <option value="52">Costa Rica</option>
                                        <option value="53">Cote D&#039;Ivoire (Ivory Coast)</option>
                                        <option value="54">Croatia (Hrvatska)</option>
                                        <option value="55">Cuba</option>
                                        <option value="56">Cyprus</option>
                                        <option value="57">Czech Republic</option>
                                        <option value="58">Denmark</option>
                                        <option value="59">Djibouti</option>
                                        <option value="60">Dominica</option>
                                        <option value="61">Dominican Republic</option>
                                        <option value="62">East Timor</option>
                                        <option value="63">Ecuador</option>
                                        <option value="64">Egypt</option>
                                        <option value="65">El Salvador</option>
                                        <option value="66">Equatorial Guinea</option>
                                        <option value="67">Eritrea</option>
                                        <option value="68">Estonia</option>
                                        <option value="69">Ethiopia</option>
                                        <option value="70">External Territories of Australia</option>
                                        <option value="71">Falkland Islands</option>
                                        <option value="72">Faroe Islands</option>
                                        <option value="73">Fiji Islands</option>
                                        <option value="74">Finland</option>
                                        <option value="75">France</option>
                                        <option value="76">French Guiana</option>
                                        <option value="77">French Polynesia</option>
                                        <option value="78">French Southern Territories</option>
                                        <option value="79">Gabon</option>
                                        <option value="80">Gambia The</option>
                                        <option value="81">Georgia</option>
                                        <option value="82">Germany</option>
                                        <option value="83">Ghana</option>
                                        <option value="84">Gibraltar</option>
                                        <option value="85">Greece</option>
                                        <option value="86">Greenland</option>
                                        <option value="87">Grenada</option>
                                        <option value="88">Guadeloupe</option>
                                        <option value="89">Guam</option>
                                        <option value="90">Guatemala</option>
                                        <option value="91">Guernsey and Alderney</option>
                                        <option value="92">Guinea</option>
                                        <option value="93">Guinea-Bissau</option>
                                        <option value="94">Guyana</option>
                                        <option value="95">Haiti</option>
                                        <option value="96">Heard and McDonald Islands</option>
                                        <option value="97">Honduras</option>
                                        <option value="98">Hong Kong S.A.R.</option>
                                        <option value="99">Hungary</option>
                                        <option value="100">Iceland</option>
                                        <option value="101">India</option>
                                        <option value="102">Indonesia</option>
                                        <option value="103">Iran</option>
                                        <option value="104">Iraq</option>
                                        <option value="105">Ireland</option>
                                        <option value="106">Israel</option>
                                        <option value="107">Italy</option>
                                        <option value="108">Jamaica</option>
                                        <option value="109">Japan</option>
                                        <option value="110">Jersey</option>
                                        <option value="111">Jordan</option>
                                        <option value="112">Kazakhstan</option>
                                        <option value="113">Kenya</option>
                                        <option value="114">Kiribati</option>
                                        <option value="115">Korea North</option>
                                        <option value="116">Korea South</option>
                                        <option value="117">Kuwait</option>
                                        <option value="118">Kyrgyzstan</option>
                                        <option value="119">Laos</option>
                                        <option value="120">Latvia</option>
                                        <option value="121">Lebanon</option>
                                        <option value="122">Lesotho</option>
                                        <option value="123">Liberia</option>
                                        <option value="124">Libya</option>
                                        <option value="125">Liechtenstein</option>
                                        <option value="126">Lithuania</option>
                                        <option value="127">Luxembourg</option>
                                        <option value="128">Macau S.A.R.</option>
                                        <option value="129">Macedonia</option>
                                        <option value="130">Madagascar</option>
                                        <option value="131">Malawi</option>
                                        <option value="132">Malaysia</option>
                                        <option value="133">Maldives</option>
                                        <option value="134">Mali</option>
                                        <option value="135">Malta</option>
                                        <option value="136">Man (Isle of)</option>
                                        <option value="137">Marshall Islands</option>
                                        <option value="138">Martinique</option>
                                        <option value="139">Mauritania</option>
                                        <option value="140">Mauritius</option>
                                        <option value="141">Mayotte</option>
                                        <option value="142">Mexico</option>
                                        <option value="143">Micronesia</option>
                                        <option value="144">Moldova</option>
                                        <option value="145">Monaco</option>
                                        <option value="146">Mongolia</option>
                                        <option value="147">Montserrat</option>
                                        <option value="148">Morocco</option>
                                        <option value="149">Mozambique</option>
                                        <option value="150">Myanmar</option>
                                        <option value="151">Namibia</option>
                                        <option value="152">Nauru</option>
                                        <option value="153">Nepal</option>
                                        <option value="154">Netherlands Antilles</option>
                                        <option value="155">Netherlands The</option>
                                        <option value="156">New Caledonia</option>
                                        <option value="157">New Zealand</option>
                                        <option value="158">Nicaragua</option>
                                        <option value="159">Niger</option>
                                        <option value="160">Nigeria</option>
                                        <option value="161">Niue</option>
                                        <option value="162">Norfolk Island</option>
                                        <option value="163">Northern Mariana Islands</option>
                                        <option value="164">Norway</option>
                                        <option value="165">Oman</option>
                                        <option value="166">Pakistan</option>
                                        <option value="167">Palau</option>
                                        <option value="168">Palestinian Territory Occupied</option>
                                        <option value="169">Panama</option>
                                        <option value="170">Papua new Guinea</option>
                                        <option value="171">Paraguay</option>
                                        <option value="172">Peru</option>
                                        <option value="173">Philippines</option>
                                        <option value="174">Pitcairn Island</option>
                                        <option value="175">Poland</option>
                                        <option value="176">Portugal</option>
                                        <option value="177">Puerto Rico</option>
                                        <option value="178">Qatar</option>
                                        <option value="179">Reunion</option>
                                        <option value="180">Romania</option>
                                        <option value="181">Russia</option>
                                        <option value="182">Rwanda</option>
                                        <option value="183">Saint Helena</option>
                                        <option value="184">Saint Kitts And Nevis</option>
                                        <option value="185">Saint Lucia</option>
                                        <option value="186">Saint Pierre and Miquelon</option>
                                        <option value="187">Saint Vincent And The Grenadines</option>
                                        <option value="188">Samoa</option>
                                        <option value="189">San Marino</option>
                                        <option value="190">Sao Tome and Principe</option>
                                        <option value="191">Saudi Arabia</option>
                                        <option value="192">Senegal</option>
                                        <option value="193">Serbia</option>
                                        <option value="194">Seychelles</option>
                                        <option value="195">Sierra Leone</option>
                                        <option value="196">Singapore</option>
                                        <option value="197">Slovakia</option>
                                        <option value="198">Slovenia</option>
                                        <option value="199">Smaller Territories of the UK</option>
                                        <option value="200">Solomon Islands</option>
                                        <option value="201">Somalia</option>
                                        <option value="202">South Africa</option>
                                        <option value="203">South Georgia</option>
                                        <option value="204">South Sudan</option>
                                        <option value="205">Spain</option>
                                        <option value="206">Sri Lanka</option>
                                        <option value="207">Sudan</option>
                                        <option value="208">Suriname</option>
                                        <option value="209">Svalbard And Jan Mayen Islands</option>
                                        <option value="210">Swaziland</option>
                                        <option value="211">Sweden</option>
                                        <option value="212">Switzerland</option>
                                        <option value="213">Syria</option>
                                        <option value="214">Taiwan</option>
                                        <option value="215">Tajikistan</option>
                                        <option value="216">Tanzania</option>
                                        <option value="217">Thailand</option>
                                        <option value="218">Togo</option>
                                        <option value="219">Tokelau</option>
                                        <option value="220">Tonga</option>
                                        <option value="221">Trinidad And Tobago</option>
                                        <option value="222">Tunisia</option>
                                        <option value="223">Turkey</option>
                                        <option value="224">Turkmenistan</option>
                                        <option value="225">Turks And Caicos Islands</option>
                                        <option value="226">Tuvalu</option>
                                        <option value="227">Uganda</option>
                                        <option value="228">Ukraine</option>
                                        <option value="229">United Arab Emirates</option>
                                        <option value="230">United Kingdom</option>
                                        <option value="231">United States</option>
                                        <option value="232">United States Minor Outlying Islands</option>
                                        <option value="233">Uruguay</option>
                                        <option value="234">Uzbekistan</option>
                                        <option value="235">Vanuatu</option>
                                        <option value="236">Vatican City State (Holy See)</option>
                                        <option value="237">Venezuela</option>
                                        <option value="238">Vietnam</option>
                                        <option value="239">Virgin Islands (British)</option>
                                        <option value="240">Virgin Islands (US)</option>
                                        <option value="241">Wallis And Futuna Islands</option>
                                        <option value="242">Western Sahara</option>
                                        <option value="243">Yemen</option>
                                        <option value="244">Yugoslavia</option>
                                        <option value="245">Zambia</option>
                                        <option value="246">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <label>State</label>
                            </div>
                            <div class="col-md-10">
                                <select class="form-control mb-3 aiz-selectpicker" data-live-search="true" name="state_id" required>

                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <label>City</label>
                            </div>
                            <div class="col-md-10">
                                <select class="form-control mb-3 aiz-selectpicker" data-live-search="true" name="city_id" required>

                                </select>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-2">
                                <label>Postal Code</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control mb-3" placeholder="Your Postal Code" name="postal_code" value="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control mb-3" placeholder="+880" name="phone" value="" required>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
