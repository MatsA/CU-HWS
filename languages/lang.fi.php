<?php
/* 
-----------------
Language Translation File for HOMEWEATHERSTATION Template
Language: FINNISH
Translation By :  Timo Kiiveri - veikkola-weather.com/weather34 -- https://veikkola-weather.com/ 2019-02-16
Developed By: Brian Underdown/Erik M Madsen
November 2016
*/
# -----------------------------------------------------
# Day / Months do not edit
# -----------------------------------------------------
setlocale(LC_TIME, 'finnish.utf8','fi_FI.utf8','suomi.utf8');
$day = date("l");
$day2 = date("l", time()+86400);
$daynum = date("j");
$monthtrans = date("F");
$year = date("Y");
# -----------------------------------------------------
# -----------------------------------------------------
$lang = array();

// Menu

$lang['Till'] = ' ';
$lang['Settings'] = 'Asetukset';
$lang['Layout'] = 'Vaihda ulkoasu';
$lang['Lighttheme'] = 'Vaalea teema';
$lang['Darktheme'] = 'Tumma teema';
$lang['Nonmetric'] = 'Fahrenheit (F) ';
$lang['Metric'] = 'Celcius (C) ';
$lang['UKmetric'] = 'UK (MPH) ';
$lang['Scandinavia'] = 'Skandinavinen (m/s)';

$lang['Worldwideearthquakes'] = 'Maanj�ristykset';
$lang['Toggle'] = 'Vaihda kokon�ytt��n ';
$lang['Contactinfo'] = 'Ota yhteytt�';
$lang['Templateinfo'] = 'Avustajat';
$lang['language'] = 'Valitse kieli';
$lang['Weatherstationinfo'] = 'Weather Station Info';
$lang['Webdesigninfo'] = 'Template Info';


//temperature
$lang['Temperature'] = 'L�mp�tila';
$lang['Feelslike'] = 'Tuntuu kuin';
$lang['Humidity'] = 'Kosteus';
$lang['Dewpoint'] = 'Kastepiste';
$lang['Trend'] = 'Muutos';
$lang['Heatindex'] = 'Tukaluus';
$lang['Windchill'] = 'Hyyt�vyys';
$lang['Tempfactors'] = 'Temp Factors';
$lang['Nocautions'] = 'Ei varoituksia';
$lang['Wetbulb'] = 'M�rk�lt';
$lang['dry'] = '& Dry';
$lang['verydry'] = '& Very Dry';
//new feature temperature feels
$lang['FreezingCold'] = 'Suuri paleltumisvaara';
$lang['FeelingVeryCold'] = 'Paleltumisvaara';
$lang['FeelingCold'] = 'Eritt�in kylm�';
$lang['FeelingCool'] = 'Kylm�';
$lang['FeelingComfortable'] = 'Miellytt�v�';
$lang['FeelingWarm'] = 'L�mmin';
$lang['FeelingHot'] = 'Kuuma';
$lang['FeelingUncomfortable'] = 'Tukala';
$lang['FeelingVeryHot'] = 'Tukala';
$lang['FeelingExtremelyHot'] = 'Eritt�in tukala';



//wind
$lang['Windspeed'] = 'Tuulen nopeus';
$lang['Gust'] = 'Puuska';
$lang['Direction'] = 'Suunta';
$lang['Gusting'] = 'Gusting at';
$lang['Blowing'] = 'Blowing at';
$lang['Wind'] = 'Tuuli';
$lang['Windrun'] = 'Tuulen matka';

$lang['Calm'] = 'Tyynt�';
$lang['Lightair'] = 'Heikkoa tuulta';
$lang['Lightbreeze'] = 'Heikkoa tuulta';
$lang['Gentelbreeze'] = 'Kohtalaista tuulta';
$lang['Moderatebreeze'] = 'Kohtalaista tuulta';
$lang['Freshbreeze'] = 'Navakkaa tuulta';
$lang['Strongbreeze'] = 'Navakkaa tuulta';
$lang['Neargale'] = 'Kovaa tuulta';
$lang['Galeforce'] = 'Kovaa tuulta';
$lang['Stronggale'] = 'Myrsky';
$lang['Storm'] = 'Myrsky';
$lang['Violentstorm'] = 'Myrsky';
$lang['Hurricane'] = 'Hirmumyrsky';

// Wind phrases from Beaufort scale for current conditions area
$lang['CalmConditions'] = 'Calm Conditions';
$lang['LightBreezeattimes'] = 'Light Breeze at times ';
$lang['MildBreezeattimes'] = 'Mild Breeze at times ';
$lang['ModerateBreezeattimes'] = 'Moderate Breeze at times';
$lang['FreshBreezeattimes'] = 'Fresh Breeze at times';
$lang['StrongBreezeattimes'] = 'Strong Breeze at times';
$lang['NearGaleattimes'] = 'Near Gale at times';
$lang['GaleForceattimes'] = 'Gale Force at times';
$lang['StrongGaleattimes'] = 'Strong Gale at times';
$lang['StormConditions'] = 'Stormy Conditions';
$lang['ViolentStormConditions'] = 'Violent Storm Conditions';
$lang['HurricaneConditions'] = 'Hurricane Conditions';


$lang['Avg'] = '<span2> Avg: </span2>';

//wind direction compass
$lang['Northdir'] = '<span>Pohjoinen<br></span>';
$lang['NNEdir'] = '<span>Pohjoiskoillinen</span>';
$lang['NEdir'] = '<span>Koillinen<br></span>';
$lang['ENEdir'] = '<span>It�koillinen</span>';
$lang['Eastdir'] = '<span>It�<br></span>';
$lang['ESEdir'] = '<span>It�kaakko</span>';
$lang['SEdir'] = '<span>Kaakko</span>';
$lang['SSEdir'] = '<span>Etel�kaakko</span>';
$lang['Southdir'] = '<span>Etel�</span>';
$lang['SSWdir'] = '<span>Etel�lounas</span>';
$lang['SWdir'] = '<span>Lounas</span>';
$lang['WSWdir'] = '<span>L�nsilounas<br></span>';
$lang['Westdir'] = '<span>L�nsi</span>';
$lang['WNWdir'] = '<span>L�nsiluode</span>';
$lang['NWdir'] = '<span>Luode</span>';
$lang['NWNdir'] = '<span>Pohjoisluode</span>';




//wind direction avg
$lang['North'] = 'Pohjoinen';
$lang['NNE'] = 'PKO';
$lang['NE'] = 'KO';
$lang['ENE'] = 'IKO';
$lang['East'] = 'It�';
$lang['ESE'] = 'IKA';
$lang['SE'] = 'KA';
$lang['SSE'] = 'EKA';
$lang['South'] = 'Etel�';
$lang['SSW'] = 'ELO';
$lang['SW'] = 'LO';
$lang['WSW'] = 'LLO';
$lang['West'] = 'L�nsi';
$lang['WNW'] = 'LLU';
$lang['NW'] = 'LU';
$lang['NWN'] = 'PLU';

//rain
$lang['raintoday'] = 'sadem��r� t�n��n';
$lang['Rate'] = 'mm/h';
$lang['Rainfall'] = 'Sade';
$lang['Precip'] = 'Sade'; // must be short name do not use full precipatation !!!! ///
$lang['Rain'] = 'Sade';
$lang['Heavyrain'] = 'Rankkasade';
$lang['Flooding'] = 'Tulvan vaara';
$lang['Almanac'] = 'Almanakka';
$lang['Lasthour'] = 'Ed. tunti';
$lang['Yesterday'] = 'Eilen';

//sun -moon-daylight-darkness
$lang['Sun'] = 'Aurinko';
$lang['Moon'] = 'Kuu';
$lang['Sunrise'] = 'Nousu';
$lang['Sunset'] = 'Lasku';
$lang['Moonrise'] = 'Nousu';
$lang['Moonset'] = 'Lasku';
$lang['Night'] = 'Y�';
$lang['Day'] = 'P�iv�';
$lang['Nextnewmoon'] = 'Uusikuu';
$lang['Nextfullmoon'] = 'T�ysikuu';
$lang['Luminance'] = 'Valaistuna';
$lang['Moonphase'] = 'Kuun vaihe';
$lang['Estimated'] = 'Aika';
$lang['Daylight'] = 'Valoisa';
$lang['Darkness'] = 'Pimeys';
$lang['Daysold'] = 'P�iv�� vanha';
$lang['Belowhorizon'] = 'horisontin<br>alapuolella';
$lang['Mintill'] = '<br>mins till';
$lang['Minago'] = ' minuuttia sitten';
$lang['Hrs'] = ' hr';
$lang['Mins'] = ' min';
$lang['TotalDarkness'] = 'Total Darkness';
$lang['TotalDaylight'] = 'Total Daylight';
$lang['Below'] = 'on horisontin alapuolella';
$lang['Tillsunset'] = 'auringon laskuun';
$lang['Tillsunrise'] = 'auringon nousuun';

$lang['Newmoon'] = 'Uusikuu';
$lang['Waxingcrescent'] = 'Kasvava<br/>sirppi';
$lang['Firstquarter'] = 'Ensimm�inen<br/>nelj�nnes';
$lang['Waxinggibbous'] = 'Kasvava<br/>kupera kuu';
$lang['Fullmoon'] = 'T�ysikuu';
$lang['Waninggibbous'] = 'V�henev�<br/>kupera kuu';
$lang['Lastquarter'] = 'Viimeinen<br/>nelj�nnes';
$lang['Waningcrescent'] = 'V�henev�<br/>sirppi';
$lang['Mooninfo'] = 'Kuun vaihe';

//trends

$lang['Falling'] = 'Laskee';
$lang['Rising'] = 'Nousee';
$lang['Steady'] = 'Vakaa';
$lang['Rapidly'] = 'nopeasti';
$lang['Temp'] = 'Temp';


//Solar-UV

//uv
$lang['Nocaution'] = 'No <color>caution</color> required';
$lang['Wearsunglasses'] = 'Wear <color>sunglasses</color> on bright days';
$lang['Stayinshade'] = 'Stay in the shade near midday when the <color>sun</color> is strongest';
$lang['Reducetime'] = 'Reduce time in the <color>sun</color> between 10am-4pm ';
$lang['Minimize'] = '<color>sun</color> exposure between 10am-4pm ';
$lang['Trytoavoid'] = 'Try to avoid <color>sun</color> exposure between 10am-4pm ';

//solar

$lang['Poor'] = 'Poor<color> <br>Radiation</color>';
$lang['Low'] = 'Low <br><color>Radiation</color>';
$lang['Moderate'] = 'Moderate <br><color>Radiation</color>';
$lang['Good'] = 'Good <br><color>Radiation</color>';
$lang['Solarradiation']= 'Solar Radiation';


//current sky
$lang['Currentsky'] = 'Viimeisimm�t havainnot';
$lang['Currently'] = 'T�ll� hetkell�';
$lang['Cloudcover'] = 'Pilvipeite';

//Notifications
$lang['Nocurrentalert'] = 'Ei varoituksia voimassa';
$lang['Windalert'] = 'Kovan tuulen varoitus';
$lang['Tempalert'] = 'Korkean l�mp�tilan varoitus';
$lang['Heatindexalert'] = 'Hellevaroitus';
$lang['Windchillalert'] = 'Pakkasvaroitus';
$lang['Dewpointalert'] = 'Tukala helle';
$lang['Dewpointcolderalert'] = 'Dewpoint Feeling Colder';
$lang['Feelslikecolderalert'] = 'Feels Colder';
$lang['Feelslikewarmeralert'] = 'Feels Warmer';
$lang['Rainratealert'] = 'per/hr<span> Rainfall ';
$lang['Fireriskalert'] = 'Mets�palon vaara';
$lang['Caution'] = 'Varoitus';
$lang['Belowfreezing'] = 'Nollan alapuolella';

//Earthquake Notifications
$lang['Regional'] = 'Regional Earthquake';
$lang['Significant'] = 'Significant Earthquake';
$lang['Nosignificant'] = 'No Significant Earthquakes';


//Main page
$lang['Barometer'] = 'Ilmanpaine';
$lang['UVSOLAR'] = 'UV-Solar';
$lang['Earthquake'] = 'Earthquake Data';
$lang['Daynight'] = 'Daylight & Night Info';

$lang['Location'] = 'Sijainti';
$lang['Hardware'] = 'Laitteisto';
$lang['Rainfalltoday'] = 'Sadem��r� t�n��n';
$lang['Windspeed'] = 'Tuuli';
$lang['Winddirection'] = 'Tuulen suunta';
$lang['Measured'] = 'Measured Today';
$lang['Forecast'] = 'S��ennuste';
$lang['Forecastahead'] = 'Forecast Ahead';
$lang['Forecastsummary'] = 'S��ennuste';
$lang['WindGust'] = 'Tuulen nopeus | Puuska';

$lang['Hourlyforecast'] = 'Tuntiennuste';
$lang['Significantearthquake'] = 'Significant Earthquake';
$lang['Regionalearthquake'] = 'Regional Earthquake';
$lang['Average'] = 'Keskituuli';
$lang['Notifications'] = 'Notifications Alert';
$lang['Indoor'] = 'Indoor';
$lang['Today'] = 'T�n��n';
$lang['Tonight'] = 'T�n� y�n�';
$lang['Tomorrow'] = 'Huomenna';
$lang['Tomorrownight'] 		 = 'Ensi y�n�';
$lang['Updated'] 		 = 'P�ivitetty';
$lang['Meteor'] 		 = 'Meteoriparvet';
$lang['WeatherStationNotifications'] = 'S��varoitukset';   
$lang['Firerisk'] = 'Mets�paloriski'; 
$lang['Localtime'] = 'Paikallinen aika';
$lang['Nometeor'] = 'Ei meteoriparvia';
$lang['LiveWebCam'] = 'Live-kamera';
$lang['Online'] = 'Online';
$lang['Offline'] = 'Offline';
$lang['Weatherstation'] = 'S��asema';
$lang['Cloudbase'] = 'Pilvisyys';
$lang['uvalert'] = 'Varoitus: korkea UV s�teily';
$lang['Rainbow'] = 'Sateenkaari';
$lang['Windy'] = 'Windy';
$lang['Max'] = 'Max';
$lang['Min'] = 'Min';
$lang['Aurora'] = 'Revontulet';

//other
$lang['FullWxsimForecast'] = 'Indstillinger';
$lang['LiveWebcamimagesofWeatherstationSauwerd'] = 'Skift Layout';
$lang['EuropeanWeathernetworkForecast'] = 'Light Theme1';
$lang['Total'] = 'Yhteens�';
$lang['NearbyMetar'] = 'L�hin Metar';
$lang['Radar'] = 'Tutka';
$lang['Source'] = 'L�hde';

//earthquake TOP MODULE 10 July 2017
$lang['ModerateE'] = 'Moderate Earthquake';
$lang['MinorE'] = 'Minor Earthquake';
$lang['StrongE'] = 'Strong Earthquake';
$lang['RegionalE'] = 'Regional';

//extras
$lang['SunPosition'] = 'Auringonnousu ja -lasku';
$lang['Azimuth'] = 'Atsimuutti';
$lang['Elevation'] = 'Korkeus';
$lang['Conditions'] = '';
$lang['Cloudbase Height'] = 'Pilvikorkeus';
$lang['Station'] = 'S��asema';
$lang['Detailed Forecast'] = 'Detailed Forecast';
$lang['Summary Outlook'] = 'S��ennuste';

//Air Quality
$lang['Hazordous']= 'Vaarallinen';
$lang['VeryUnhealthy']= 'Eritt�in huono';
$lang['Unhealthy']= 'Huono';
$lang['UnhealthyFS']= 'V�ltt�v�';
$lang['Moderate']= 'Tyydytt�v�';
$lang['Good']= 'Hyv�';
?>