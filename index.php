

<title>Currency conversion </title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<div class="container">

<Br>
<Br>
<Br>

<marquee style="color:grey;font-size:35px">  Todays Currency Rate (Date: <?php echo date('d-m-Y', time()); ?> | Day: <?php echo date('D', strtotime(date('d-m-Y'))); ?>)</marquee>

	<h2>Currency convertor</h2>	

<form method="POST"  action="convert.php" >
    
    <p>
        <label>From Rate</label>
        <input type="hidden" id="hidden_current_posttype" value="services"><select name="from" class="form-control">


        <option value="ZAR">
                    South African Rand (ZAR)         </option>
                            <option value="AFA">
                    Afghan Afghani (AFA)                </option>
                            <option value="AWG">
                    Aruban Florin (AWG)                </option>
                            <option value="AUD">
                    Australian Dollars (AUD)                </option>
                            <option value="ARS">
                    Argentine Pes (ARS)                </option>
                            <option value="AZN">
                    Azerbaijanian Manat (AZN)                </option>
                            <option value="BSD">
                    Bahamian Dollar (BSD)                </option>
                            <option value="BDT">
                    Bangladeshi Taka (BDT)                </option>
                            <option value="BBD">
                    Barbados Dollar (BBD)                </option>
                            <option value="BYR">
                    Belarussian Rouble (BYR)                </option>
                            <option value="BOB">
                    Bolivian Boliviano (BOB)                </option>
                            <option value="BRL">
                    Brazilian Real (BRL)                </option>
                            <option value="GBP">
                    British Pounds Sterling (GBP)                </option>
                            <option value="BGN">
                    Bulgarian Lev (BGN)                </option>
                            <option value="KHR">
                    Cambodia Riel (KHR)                </option>
                            <option value="CAD">
                    Canadian Dollars (CAD)                </option>
                            <option value="KYD">
                    Cayman Islands Dollar (KYD)                </option>
                            <option value="CLP">
                    Chilean Peso (CLP)                </option>
                            <option value="CNY">
                    Chinese Renminbi Yuan (CNY)                </option>
                            <option value="COP">
                    Colombian Peso (COP)                </option>
                            <option value="CRC">
                    Costa Rican Colon (CRC)                </option>
                            <option value="HRK">
                    Croatia Kuna (HRK)                </option>
                            <option value="CPY">
                    Cypriot Pounds (CPY)                </option>
                            <option value="CZK">
                    Czech Koruna (CZK)                </option>
                            <option value="DKK">
                    Danish Krone (DKK)                </option>
                            <option value="DOP">
                    Dominican Republic Peso (DOP)                </option>
                            <option value="XCD">
                    East Caribbean Dollar (XCD)                </option>
                            <option value="EGP">
                    Egyptian Pound (EGP)                </option>
                            <option value="ERN">
                    Eritrean Nakfa (ERN)                </option>
                            <option value="EEK">
                    Estonia Kroon (EEK)                </option>
                            <option value="EUR">
                    Euro (EUR)                </option>
                            <option value="GEL">
                    Georgian Lari (GEL)                </option>
                            <option value="GHC">
                    Ghana Cedi (GHC)                </option>
                            <option value="GIP">
                    Gibraltar Pound (GIP)                </option>
                            <option value="GTQ">
                    Guatemala Quetzal (GTQ)                </option>
                            <option value="HNL">
                    Honduras Lempira (HNL)                </option>
                            <option value="HKD">
                    Hong Kong Dollars (HKD)                </option>
                            <option value="HUF">
                    Hungary Forint (HUF)                </option>
                            <option value="ISK">
                    Icelandic Krona (ISK)                </option>
                            <option value="INR">
                    Indian Rupee (INR)                </option>
                            <option value="IDR">
                    Indonesia Rupiah (IDR)                </option>
                            <option value="ILS">
                    Israel Shekel (ILS)                </option>
                            <option value="JMD">
                    Jamaican Dollar (JMD)                </option>
                            <option value="JPY">
                    Japanese yen (JPY)                </option>
                            <option value="KZT">
                    Kazakhstan Tenge (KZT)                </option>
                            <option value="KES">
                    Kenyan Shilling (KES)                </option>
                            <option value="KWD">
                    Kuwaiti Dinar (KWD)                </option>
                            <option value="LVL">
                    Latvia Lat (LVL)                </option>
                            <option value="LBP">
                    Lebanese Pound (LBP)                </option>
                            <option value="LTL">
                    Lithuania Litas (LTL)                </option>
                            <option value="MOP">
                    Macau Pataca (MOP)                </option>
                            <option value="MKD">
                    Macedonian Denar (MKD)                </option>
                            <option value="MGA">
                    Malagascy Ariary (MGA)                </option>
                            <option value="MYR">
                    Malaysian Ringgit (MYR)                </option>
                            <option value="MTL">
                    Maltese Lira (MTL)                </option>
                            <option value="BAM">
                    Marka (BAM)                </option>
                            <option value="MUR">
                    Mauritius Rupee (MUR)                </option>
                            <option value="MXN">
                    Mexican Pesos (MXN)                </option>
                            <option value="MZM">
                    Mozambique Metical (MZM)                </option>
                            <option value="NPR">
                    Nepalese Rupee (NPR)                </option>
                            <option value="ANG">
                    Netherlands Antilles Guilder (ANG)    </option>
                            <option value="TWD">
                    New Taiwanese Dollars (TWD)                </option>
                            <option value="NZD">
                    New Zealand Dollars (NZD)                </option>
                            <option value="NIO">
                    Nicaragua Cordoba (NIO)                </option>
                            <option value="NGN">
                    Nigeria Naira (NGN)                </option>
                            <option value="KPW">
                    North Korean Won (KPW)                </option>
                            <option value="NOK">
                    Norwegian Krone (NOK)                </option>
                            <option value="OMR">
                    Omani Riyal (OMR)                </option>
                            <option value="PKR">
                    Pakistani Rupee (PKR)                </option>
                            <option value="PYG">
                    Paraguay Guarani (PYG)                </option>
                            <option value="PEN">
                    Peru New Sol (PEN)                </option>
                            <option value="PHP">
                    Philippine Pesos (PHP)                </option>
                            <option value="QAR">
                    Qatari Riyal (QAR)                </option>
                            <option value="RON">
                    Romanian New Leu (RON)                </option>
                            <option value="RUB">
                    Russian Federation Ruble (RUB)                </option>
                            <option value="SAR">
                    Saudi Riyal (SAR)                </option>
                            <option value="CSD">
                    Serbian Dinar (CSD)                </option>
                            <option value="SCR">
                    Seychelles Rupee (SCR)                </option>
                            <option value="SGD">
                    Singapore Dollars (SGD)                </option>
                            <option value="SKK">
                    Slovak Koruna (SKK)                </option>
                            <option value="SIT">
                    Slovenia Tolar (SIT)                </option>
                   
                            <option value="KRW">
                    South Korean Won (KRW)                </option>
                            <option value="LKR">
                    Sri Lankan Rupee (LKR)                </option>
                            <option value="SRD">
                    Surinam Dollar (SRD)                </option>
                            <option value="SEK">
                    Swedish Krona (SEK)                </option>
                            <option value="CHF">
                    Swiss Francs (CHF)                </option>
                            <option value="TZS">
                    Tanzanian Shilling (TZS)                </option>
                            <option value="THB">
                    Thai Baht (THB)                </option>
                            <option value="TTD">
                    Trinidad and Tobago Dollar (TTD)                </option>
                            <option value="TRY">
                    Turkish New Lira (TRY)                </option>
                            <option value="AED">
                    UAE Dirham (AED)                </option>
                            <option value="USD">
                    US Dollars (USD)                </option>
                            <option value="UGX">
                    Ugandian Shilling (UGX)                </option>
                            <option value="UAH">
                    Ukraine Hryvna (UAH)                </option>
                            <option value="UYU">
                    Uruguayan Peso (UYU)                </option>
                            <option value="UZS">
                    Uzbekistani Som (UZS)                </option>
                            <option value="VEB">
                    Venezuela Bolivar (VEB)                </option>
                            <option value="VND">
                    Vietnam Dong (VND)                </option>
                            <option value="AMK">
                    Zambian Kwacha (AMK)                </option>
                            <option value="ZWD">
                    Zimbabwe Dollar (ZWD)                </option>
                    </select>
    </p>

    <p>
        <label>To Rate</label><br>
        <select name="to" class="form-control">

        <option value="USD">
                    US Dollars (USD)                </option>
                            <option value="AFA">
                    Afghan Afghani (AFA)                </option>
                            <option value="AWG">
                    Aruban Florin (AWG)                </option>
                            <option value="AUD">
                    Australian Dollars (AUD)                </option>
                            <option value="ARS">
                    Argentine Pes (ARS)                </option>
                            <option value="AZN">
                    Azerbaijanian Manat (AZN)                </option>
                            <option value="BSD">
                    Bahamian Dollar (BSD)                </option>
                            <option value="BDT">
                    Bangladeshi Taka (BDT)                </option>
                            <option value="BBD">
                    Barbados Dollar (BBD)                </option>
                            <option value="BYR">
                    Belarussian Rouble (BYR)                </option>
                            <option value="BOB">
                    Bolivian Boliviano (BOB)                </option>
                            <option value="BRL">
                    Brazilian Real (BRL)                </option>
                            <option value="GBP">
                    British Pounds Sterling (GBP)                </option>
                            <option value="BGN">
                    Bulgarian Lev (BGN)                </option>
                            <option value="KHR">
                    Cambodia Riel (KHR)                </option>
                            <option value="CAD">
                    Canadian Dollars (CAD)                </option>
                            <option value="KYD">
                    Cayman Islands Dollar (KYD)                </option>
                            <option value="CLP">
                    Chilean Peso (CLP)                </option>
                            <option value="CNY">
                    Chinese Renminbi Yuan (CNY)                </option>
                            <option value="COP">
                    Colombian Peso (COP)                </option>
                            <option value="CRC">
                    Costa Rican Colon (CRC)                </option>
                            <option value="HRK">
                    Croatia Kuna (HRK)                </option>
                            <option value="CPY">
                    Cypriot Pounds (CPY)                </option>
                            <option value="CZK">
                    Czech Koruna (CZK)                </option>
                            <option value="DKK">
                    Danish Krone (DKK)                </option>
                            <option value="DOP">
                    Dominican Republic Peso (DOP)                </option>
                            <option value="XCD">
                    East Caribbean Dollar (XCD)                </option>
                            <option value="EGP">
                    Egyptian Pound (EGP)                </option>
                            <option value="ERN">
                    Eritrean Nakfa (ERN)                </option>
                            <option value="EEK">
                    Estonia Kroon (EEK)                </option>
                            <option value="EUR">
                    Euro (EUR)                </option>
                            <option value="GEL">
                    Georgian Lari (GEL)                </option>
                            <option value="GHC">
                    Ghana Cedi (GHC)                </option>
                            <option value="GIP">
                    Gibraltar Pound (GIP)                </option>
                            <option value="GTQ">
                    Guatemala Quetzal (GTQ)                </option>
                            <option value="HNL">
                    Honduras Lempira (HNL)                </option>
                            <option value="HKD">
                    Hong Kong Dollars (HKD)                </option>
                            <option value="HUF">
                    Hungary Forint (HUF)                </option>
                            <option value="ISK">
                    Icelandic Krona (ISK)                </option>
                            <option value="INR">
                    Indian Rupee (INR)                </option>
                            <option value="IDR">
                    Indonesia Rupiah (IDR)                </option>
                            <option value="ILS">
                    Israel Shekel (ILS)                </option>
                            <option value="JMD">
                    Jamaican Dollar (JMD)                </option>
                            <option value="JPY">
                    Japanese yen (JPY)                </option>
                            <option value="KZT">
                    Kazakhstan Tenge (KZT)                </option>
                            <option value="KES">
                    Kenyan Shilling (KES)                </option>
                            <option value="KWD">
                    Kuwaiti Dinar (KWD)                </option>
                            <option value="LVL">
                    Latvia Lat (LVL)                </option>
                            <option value="LBP">
                    Lebanese Pound (LBP)                </option>
                            <option value="LTL">
                    Lithuania Litas (LTL)                </option>
                            <option value="MOP">
                    Macau Pataca (MOP)                </option>
                            <option value="MKD">
                    Macedonian Denar (MKD)                </option>
                            <option value="MGA">
                    Malagascy Ariary (MGA)                </option>
                            <option value="MYR">
                    Malaysian Ringgit (MYR)                </option>
                            <option value="MTL">
                    Maltese Lira (MTL)                </option>
                            <option value="BAM">
                    Marka (BAM)                </option>
                            <option value="MUR">
                    Mauritius Rupee (MUR)                </option>
                            <option value="MXN">
                    Mexican Pesos (MXN)                </option>
                            <option value="MZM">
                    Mozambique Metical (MZM)                </option>
                            <option value="NPR">
                    Nepalese Rupee (NPR)                </option>
                            <option value="ANG">
                    Netherlands Antilles Guilder (ANG)                </option>
                            <option value="TWD">
                    New Taiwanese Dollars (TWD)                </option>
                            <option value="NZD">
                    New Zealand Dollars (NZD)                </option>
                            <option value="NIO">
                    Nicaragua Cordoba (NIO)                </option>
                            <option value="NGN">
                    Nigeria Naira (NGN)                </option>
                            <option value="KPW">
                    North Korean Won (KPW)                </option>
                            <option value="NOK">
                    Norwegian Krone (NOK)                </option>
                            <option value="OMR">
                    Omani Riyal (OMR)                </option>
                            <option value="PKR">
                    Pakistani Rupee (PKR)                </option>
                            <option value="PYG">
                    Paraguay Guarani (PYG)                </option>
                            <option value="PEN">
                    Peru New Sol (PEN)                </option>
                            <option value="PHP">
                    Philippine Pesos (PHP)                </option>
                            <option value="QAR">
                    Qatari Riyal (QAR)                </option>
                            <option value="RON">
                    Romanian New Leu (RON)                </option>
                            <option value="RUB">
                    Russian Federation Ruble (RUB)                </option>
                            <option value="SAR">
                    Saudi Riyal (SAR)                </option>
                            <option value="CSD">
                    Serbian Dinar (CSD)                </option>
                            <option value="SCR">
                    Seychelles Rupee (SCR)                </option>
                            <option value="SGD">
                    Singapore Dollars (SGD)                </option>
                            <option value="SKK">
                    Slovak Koruna (SKK)                </option>
                            <option value="SIT">
                    Slovenia Tolar (SIT)                </option>
                            <option value="ZAR">
                    South African Rand (ZAR)                </option>
                            <option value="KRW">
                    South Korean Won (KRW)                </option>
                            <option value="LKR">
                    Sri Lankan Rupee (LKR)                </option>
                            <option value="SRD">
                    Surinam Dollar (SRD)                </option>
                            <option value="SEK">
                    Swedish Krona (SEK)                </option>
                            <option value="CHF">
                    Swiss Francs (CHF)                </option>
                            <option value="TZS">
                    Tanzanian Shilling (TZS)                </option>
                            <option value="THB">
                    Thai Baht (THB)                </option>
                            <option value="TTD">
                    Trinidad and Tobago Dollar (TTD)                </option>
                            <option value="TRY">
                    Turkish New Lira (TRY)                </option>
                            <option value="AED">
                    UAE Dirham (AED)                </option>
                            <option value="UGX">
                    Ugandian Shilling (UGX)                </option>
                            <option value="UAH">
                    Ukraine Hryvna (UAH)                </option>
                            <option value="UYU">
                    Uruguayan Peso (UYU)                </option>
                            <option value="UZS">
                    Uzbekistani Som (UZS)                </option>
                            <option value="VEB">
                    Venezuela Bolivar (VEB)                </option>
                            <option value="VND">
                    Vietnam Dong (VND)                </option>
                            <option value="AMK">
                    Zambian Kwacha (AMK)                </option>
                            <option value="ZWD">
                    Zimbabwe Dollar (ZWD)                </option>
                    </select>
    </p>

    <div class="form-group">
        <label>Amount</label><br>
        <input type="number" placeholder="100" name="amount" class="form-control" value="" style="width: 98%;">
    </div>

    <input type="submit" class="btn btn-primary" name="submit" value="Convert">
</form>


</div>