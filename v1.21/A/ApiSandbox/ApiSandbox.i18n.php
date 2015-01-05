<?php
/**
 * Internationalization file for the API sandbox extension.
 *
 * @file
 * @ingroup Extensions
*/

$messages = array();

$messages['en'] = array(
	'apisb-desc'              => 'Allows to debug [//www.mediawiki.org/wiki/API MediaWiki API] calls from browser',
	'apisandbox'              => 'API sandbox',
	'apisb-no-js'             => "'''Error:''' this feature requires JavaScript.",
	'apisb-intro'             => "Use this page to experiment with the '''MediaWiki web service API'''.
	Refer to [//www.mediawiki.org/wiki/API:Main_page the API documentation] for further details of API usage.  Example: [//www.mediawiki.org/wiki/API#A_simple_example get the content of a Main Page].  Select an action to see more examples.",
	'apisb-api-disabled'      => 'API is disabled on this site.',
	'apisb-legend-parameters' => 'Parameters',
	'apisb-legend-result'     => 'Result',
	'apisb-legend-generic-parameters'=> 'Generic parameters',
	'apisb-legend-generator-parameters'=> 'Generator',
	'apisb-result-request-url' => 'Request URL:',
	'apisb-result-request-post' => 'POST data:',
	'apisb-label-format'      => 'Format',
	'apisb-label-action'      => 'Action',
	'apisb-label-doc'         => 'Documentation',
	'apisb-select-action'     => '(select action)',
	'apisb-select-query'      => '(select query)',
	'apisb-select-value'      => '(select value)',
	'apisb-docs-more'         => 'read more',
	'apisb-params-param'      => 'Parameter',
	'apisb-params-input'      => 'Input',
	'apisb-params-desc'       => 'Description',
	'apisb-loading'           => 'Loading...',
	'apisb-load-error'        => 'Error loading API description',
	'apisb-request-error'     => 'Error performing API request',
	'apisb-namespaces-error'  => 'Error loading namespaces',
	'apisb-ns-main'           => '(Main)',
	'apisb-submit'            => 'Make request',
	'apisb-query-prop'        => 'Properties',
	'apisb-query-list'        => 'Lists',
	'apisb-query-meta'        => 'Meta information',
	'apisb-example'           => 'Example',
	'apisb-examples'          => 'Examples',
	'apisb-clear'             => 'Clear',
	'apisb-request-time'      => 'Request time: $1',
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author Krinkle
 * @author Lokal Profil
 * @author MaxSem
 * @author Purodha
 * @author Raymond
 * @author SPQRobin
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'apisb-desc' => '{{desc|name=Api Sandbox|url=http://www.mediawiki.org/wiki/Extension:ApiSandbox}}',
	'apisandbox' => 'Special page title',
	'apisb-legend-parameters' => '{{Identical|Parameter}}',
	'apisb-legend-result' => 'Used as "legend" in the form fieldset containing read-only fields with info about an executed API request.
{{Identical|Result}}',
	'apisb-legend-generator-parameters' => 'Refers to an [[mw:API:Query#Generators|API concept]]',
	'apisb-result-request-url' => 'Used as "label" for a read-only form field containing the exact URL that was (or is going to be) loaded.',
	'apisb-result-request-post' => 'Used as "label" for a ready-only form field containing the POST query parameters of the HTTP request made',
	'apisb-label-format' => 'Label text for selecting the output format (json, xml, php, ...)',
	'apisb-label-action' => 'Label text for selecting the action (query, edit, ...). The default text in the select list is {{msg-mw|apisb-select-action}}.',
	'apisb-label-doc' => 'Label text of information about the selected action.
{{Identical|Documentation}}',
	'apisb-select-action' => 'This is the placeholder text in the "select" dropdown menu containing options with various action modules.',
	'apisb-select-query' => 'This is the placeholder text in the "select" dropdown menu containing options with various query types.',
	'apisb-select-value' => 'This is the generic placeholder text in "select" dropdown menus containing custom options (e.g. wiki namespaces, content direction, ..)',
	'apisb-docs-more' => 'Used in parenthesis next to a short (but not cut off) version of the description. Links to a page on mediawiki.org with complete documentation.',
	'apisb-params-param' => 'Table heading of the column with the parameter identifiers.
{{Identical|Parameter}}',
	'apisb-params-input' => 'Table heading for the column with the input fields (e.g. text inputs, dropdown menus, checkboxes)',
	'apisb-params-desc' => 'Table heading of the column containing the descriptions.
{{Identical|Description}}',
	'apisb-loading' => '{{Identical|Loading}}',
	'apisb-ns-main' => 'Refers to the main namespace, commonly put in parenthesis.
{{Identical/Main namespace}}',
	'apisb-submit' => 'Submit button text that submits the form and performs the API request, after which the result is shown below',
	'apisb-query-prop' => '{{Identical|Property}}',
	'apisb-query-list' => '{{Identical|List}}',
	'apisb-example' => 'Button text that will reveal the example list, used if the list contains only 1 entry. See also {{msg-mw|apisb-examples}}',
	'apisb-examples' => 'Button text that will reveal the example list, used if the list contains multiple entries. See also {{msg-mw|apisb-example}}',
	'apisb-clear' => 'Title of the button that clears all inputs.
{{Identical|Clear}}',
	'apisb-request-time' => 'Time it took to process this request',
);

/** Afrikaans (Afrikaans)
 * @author Ansumang
 * @author Naudefj
 * @author පසිඳු කාවින්ද
 */
$messages['af'] = array(
	'apisb-api-disabled' => 'API is afgeskakel op hierdie webwerf.',
	'apisb-legend-result' => 'Resultaat',
	'apisb-legend-generic-parameters' => 'generiese parameters',
	'apisb-legend-generator-parameters' => 'Generator',
	'apisb-label-format' => 'Formaat',
	'apisb-label-action' => 'Handeling',
	'apisb-label-doc' => 'Dokumentasie',
	'apisb-select-action' => "Kies 'n aksie",
	'apisb-select-value' => "Kies 'n waarde", # Fuzzy
	'apisb-docs-more' => 'lees meer',
	'apisb-params-param' => 'Parameter',
	'apisb-params-input' => 'Invoer',
	'apisb-params-desc' => 'Beskrywing',
	'apisb-loading' => 'Laai tans…',
	'apisb-load-error' => 'Fout met laai API beskrywing',
	'apisb-request-error' => 'Fout met die uitvoering van API-versoek',
	'apisb-namespaces-error' => 'Fout tydens laai naamspasies',
	'apisb-ns-main' => '(Hoofnaamruimte)',
	'apisb-submit' => 'Maak versoek',
	'apisb-query-prop' => 'Eienskappe',
	'apisb-query-list' => 'Lyste',
	'apisb-query-meta' => 'Meta-inligting',
	'apisb-example' => 'Voorbeeld',
	'apisb-examples' => 'Voorbeelde',
	'apisb-clear' => 'Vee uit',
);

/** Amharic (አማርኛ)
 * @author Codex Sinaiticus
 */
$messages['am'] = array(
	'apisb-legend-result' => 'ውጤት',
	'apisb-label-action' => 'ድርጊት',
	'apisb-label-doc' => 'ሰነድ',
	'apisb-params-desc' => 'መግለጫ',
	'apisb-loading' => 'በመጫን ላይ ነው...',
	'apisb-query-list' => 'ዝርዝሮች',
	'apisb-example' => 'ምሳሌ',
	'apisb-examples' => 'ምሳሌዎች',
);

/** Arabic (العربية)
 * @author Meno25
 * @author روخو
 */
$messages['ar'] = array(
	'apisb-no-js' => "'''خطأ''' : هذه الخاصية تتطلب الجافا سكريبت.",
	'apisb-legend-parameters' => 'محددات',
	'apisb-legend-result' => 'النتيجة',
	'apisb-legend-generic-parameters' => 'محددات عامة',
	'apisb-legend-generator-parameters' => 'مولد',
	'apisb-label-format' => 'الصيغة',
	'apisb-label-action' => 'الفعل',
	'apisb-label-doc' => 'توثيق',
	'apisb-select-action' => 'اختر حدث',
	'apisb-select-query' => '(اختر الاستعلام)',
	'apisb-select-value' => '(اختر القيمة)',
	'apisb-docs-more' => 'اقرأ المزيد',
	'apisb-params-param' => 'محددات',
	'apisb-params-input' => 'المدخل',
	'apisb-params-desc' => 'الوصف',
	'apisb-loading' => 'جاري التحميل...',
	'apisb-ns-main' => '(رئيسي)',
	'apisb-submit' => 'عمل الطلب',
	'apisb-query-prop' => 'الخصائص',
	'apisb-query-list' => 'قوائم',
	'apisb-query-meta' => 'معلومات الميتا',
	'apisb-example' => 'مثال',
	'apisb-examples' => 'أمثلة',
	'apisb-clear' => 'إفراغ',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'apisandbox' => 'ܣܢܕܘܩܐ ܕܚܠܐ ܕܚܙܝܐ ܕܚܘܪܙܐ ܕܬܓܡܪܬܐ (API)',
	'apisb-legend-result' => 'ܦܠܛܐ',
	'apisb-label-action' => 'ܥܒܕܐ',
	'apisb-label-doc' => 'ܐܫܛܪܘܬܐ',
	'apisb-select-action' => '(ܓܒܝ ܥܒܕ̈ܐ)',
	'apisb-query-prop' => 'ܕ̈ܝܠܝܬܐ',
	'apisb-example' => 'ܛܘܦܣܐ',
	'apisb-examples' => 'ܛܘ̈ܦܣܐ',
	'apisb-clear' => 'ܐܣܦܩ',
);

/** Assamese (অসমীয়া)
 * @author Bishnu Saikia
 */
$messages['as'] = array(
	'apisb-legend-result' => 'ফলাফল',
	'apisb-label-action' => 'কাৰ্য',
	'apisb-params-desc' => 'বিৱৰণ',
	'apisb-ns-main' => '(মুখ্য)',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'apisb-desc' => "Permite depurar les llamaes a la [//www.mediawiki.org/wiki/API API de MediaWiki] dende'l navegador",
	'apisandbox' => 'Zona de pruebes API',
	'apisb-no-js' => "'''Error''': esta carauterística requier JavaScript.",
	'apisb-intro' => "Usa esta páxina pa esperimentar cola '''API de serviciu web de MediaWiki'''.
Consulta [//www.mediawiki.org/wiki/API:Main_page la documentación de la API] pa más detalles tocante al so usu.  Exemplu: [//www.mediawiki.org/wiki/API#A_simple_example llamar al conteníu d'una Páxina principal].  Seleiciona una aición pa ver más exemplos.",
	'apisb-api-disabled' => 'La API ta desactivada nesti sitiu.',
	'apisb-legend-parameters' => 'Parámetros',
	'apisb-legend-result' => 'Resultáu',
	'apisb-legend-generic-parameters' => 'Parámetros xenéricos',
	'apisb-legend-generator-parameters' => 'Xenerador',
	'apisb-result-request-url' => 'URL de la solicitú:',
	'apisb-result-request-post' => 'Datos POST:',
	'apisb-label-format' => 'Formatu',
	'apisb-label-action' => 'Aición',
	'apisb-label-doc' => 'Documentación',
	'apisb-select-action' => '(seleicionar aición)',
	'apisb-select-query' => '(seleicionar consulta)',
	'apisb-select-value' => '(seleicionar valor)',
	'apisb-docs-more' => 'lleer más',
	'apisb-params-param' => 'Parámetru',
	'apisb-params-input' => 'Entrada',
	'apisb-params-desc' => 'Descripción',
	'apisb-loading' => 'Cargando...',
	'apisb-load-error' => 'Error al cargar descripción de la API',
	'apisb-request-error' => 'Error al facer solicitú a la API',
	'apisb-namespaces-error' => 'Error al cargar los espacios de nomes',
	'apisb-ns-main' => '(Principal)',
	'apisb-submit' => 'Facer solicitú',
	'apisb-query-prop' => 'Propiedaes',
	'apisb-query-list' => 'Llistes',
	'apisb-query-meta' => 'Información de Meta',
	'apisb-example' => 'Exemplu',
	'apisb-examples' => 'Exemplos',
	'apisb-clear' => 'Llimpiar',
	'apisb-request-time' => 'Duración de la solicitú: $1',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 * @author Vago
 */
$messages['az'] = array(
	'apisb-legend-result' => 'Nəticə',
	'apisb-loading' => 'Yüklənir…',
	'apisb-ns-main' => '(Əsas)',
	'apisb-query-list' => 'Siyahılar',
	'apisb-query-meta' => 'Meta məlumatları',
);

/** South Azerbaijani (تورکجه)
 * @author Amir a57
 * @author E THP
 * @author පසිඳු කාවින්ද
 */
$messages['azb'] = array(
	'apisb-legend-result' => 'نتیجه',
	'apisb-label-format' => 'فورمت',
	'apisb-label-action' => 'فعالیت',
	'apisb-params-param' => 'پارامتر',
	'apisb-params-input' => 'گیریش',
	'apisb-params-desc' => 'شرح',
	'apisb-loading' => 'یوکلنیر...',
	'apisb-ns-main' => '(آنا)',
	'apisb-query-prop' => 'اؤزلیکلر',
	'apisb-query-list' => 'سییاهه‌لر',
	'apisb-query-meta' => 'مئتا بیلگی‌لری',
	'apisb-example' => 'میثال',
	'apisb-examples' => 'نومونه‌لر',
	'apisb-clear' => 'تمیزله',
	'apisb-request-time' => 'زامان ایستمک:$1',
);

/** Bashkir (башҡортса)
 * @author Haqmar
 * @author Sagan
 */
$messages['ba'] = array(
	'apisb-desc' => 'Браузерҙан мөрәжәғәттә яйға һала [//www.mediawiki.org/wiki/API MediaWiki API]',
	'apisandbox' => 'API һынау урыны',
	'apisb-no-js' => '"Хата". Бының өсөн JavaScript талап ителә.',
	'apisb-intro' => "''MediaWiki API''' өйрәнеү бите.  API ҡулланыу тураһында белешмә алыу өсөн [//www.mediawiki.org/wiki/API:Main_page API документацияһы]на мөрәжәғәт итегеҙ. Мәҫәләң, [//www.mediawiki.org/wiki/API#A_simple_example Башбит эстәлеген нисек алырға]. Башҡа миҫалдарҙы күреү өсөн ғәмәлде ҡулланығыҙ.",
	'apisb-api-disabled' => 'Был сайтта API һүндерелгән.',
	'apisb-legend-parameters' => 'Параметр',
	'apisb-legend-result' => 'Һөҙөмтә',
	'apisb-legend-generic-parameters' => 'Дөйөм параметрҙар',
	'apisb-legend-generator-parameters' => 'Генератор',
	'apisb-result-request-url' => 'Һоратыуҙың URL-адресы:',
	'apisb-result-request-post' => 'POST мәғлүмәттәр:',
	'apisb-label-format' => 'Формат',
	'apisb-label-action' => 'Ғәмәл',
	'apisb-label-doc' => 'Документация',
	'apisb-select-action' => 'Ғәмәлде һайларға',
	'apisb-select-query' => '(талап һайлағыҙ)',
	'apisb-select-value' => '(дәүмәлен һайлағыҙ)',
	'apisb-docs-more' => 'тулыраҡ',
	'apisb-params-param' => 'Параметр',
	'apisb-params-input' => 'Инеш',
	'apisb-params-desc' => 'Тасуирлама',
	'apisb-loading' => 'Асыла...',
	'apisb-load-error' => 'API тасуирламаһын тейәгәндә хата китте',
	'apisb-request-error' => 'API мөрәжәғәтен башҡарғанда хата китте',
	'apisb-namespaces-error' => 'Исемдәр арауығын тейәгәндә хата китте',
	'apisb-ns-main' => '(Төп)',
	'apisb-submit' => 'Һоратыу яһарға',
	'apisb-query-prop' => 'Үҙенсәлектәр',
	'apisb-query-list' => 'Исемлектәр',
	'apisb-query-meta' => 'Мета-мәғлүмәт',
	'apisb-example' => 'Миҫал',
	'apisb-examples' => 'Миҫалдар',
	'apisb-clear' => 'Таҙарт',
	'apisb-request-time' => 'Мөрәжәғәт ваҡыты:$1',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'apisb-desc' => 'Дазваляе налажваць выклікі [//www.mediawiki.org/wiki/API MediaWiki API] з браўзэра',
	'apisandbox' => 'Пясочніца API',
	'apisb-no-js' => "'''Памылка''': гэтая магчымасьць патрабуе JavaScript.",
	'apisb-intro' => "Выкарыстоўвайце гэтую старонку для экспэрымэнтаў з '''API вэб-сэрвіса MediaWiki'''.
Зьвяртайцеся да [//www.mediawiki.org/wiki/API:Main_page дакумэнтацыі API] для дадатковай інфармацыі па выкарыстаньні API. Напрыклад, [//www.mediawiki.org/wiki/API#A_simple_example як атрымаць зьмест Галоўнай старонкі]. Выберыце дзеяньне, каб пабачыць болей узораў.",
	'apisb-api-disabled' => 'API забаронены на гэтым сайце.',
	'apisb-legend-parameters' => 'Парамэтры',
	'apisb-legend-result' => 'Вынік',
	'apisb-legend-generic-parameters' => 'Агульныя парамэтры',
	'apisb-legend-generator-parameters' => 'Генэратар',
	'apisb-result-request-url' => 'URL-адрас запыту:',
	'apisb-result-request-post' => 'POST-зьвесткі:',
	'apisb-label-format' => 'Фармат',
	'apisb-label-action' => 'Дзеяньне',
	'apisb-label-doc' => 'Дакумэнтацыя',
	'apisb-select-action' => 'Выбраць дзеяньне',
	'apisb-select-query' => '(выбраць чаргу)',
	'apisb-select-value' => '(выбраць значэньне)',
	'apisb-docs-more' => 'даведацца болей',
	'apisb-params-param' => 'Парамэтар',
	'apisb-params-input' => 'Увод',
	'apisb-params-desc' => 'Апісаньне',
	'apisb-loading' => 'Загрузка…',
	'apisb-load-error' => 'Немагчыма загрузіць апісаньне API',
	'apisb-request-error' => 'Немагчыма апрацаваць запыт API',
	'apisb-namespaces-error' => 'Немагчыма загрузіць прасторы назваў',
	'apisb-ns-main' => '(Асноўная)',
	'apisb-submit' => 'Зрабіць запыт',
	'apisb-query-prop' => 'Уласьцівасьці',
	'apisb-query-list' => 'Сьпісы',
	'apisb-query-meta' => 'Мэтазьвесткі',
	'apisb-example' => 'Прыклад',
	'apisb-examples' => 'Прыклады',
	'apisb-clear' => 'Ачысьціць',
	'apisb-request-time' => 'Час апрацоўкі запыту: $1',
);

/** Bulgarian (български)
 * @author DCLXVI
 * @author පසිඳු කාවින්ද
 */
$messages['bg'] = array(
	'apisb-no-js' => "'''Грешка''': тази функционалност изисква Джаваскрипт.",
	'apisb-legend-parameters' => 'Параметри',
	'apisb-legend-result' => 'Резултат',
	'apisb-label-format' => 'Формат',
	'apisb-label-action' => 'Действие',
	'apisb-select-action' => 'Избиране на действие',
	'apisb-params-param' => 'Параметър',
	'apisb-params-desc' => 'Описание',
	'apisb-loading' => 'Зареждане...',
	'apisb-query-prop' => 'Свойства',
	'apisb-example' => 'Пример',
	'apisb-examples' => 'Примери',
	'apisb-clear' => 'Изчистване',
);

/** Bengali (বাংলা)
 * @author Bellayet
 */
$messages['bn'] = array(
	'apisb-legend-result' => 'ফলাফল',
	'apisb-label-format' => 'ফরম্যাট',
	'apisb-select-value' => 'মান নির্বাচন', # Fuzzy
	'apisb-docs-more' => 'আরও পড়ুন',
	'apisb-params-input' => 'ইনপুট',
	'apisb-params-desc' => 'বিবরণ',
	'apisb-loading' => 'লোডিং...',
	'apisb-ns-main' => '(প্রধান)',
	'apisb-submit' => 'অনুরোধ রাখুন',
	'apisb-query-prop' => 'বৈশিষ্ট্য',
	'apisb-query-list' => 'তালিকা',
	'apisb-query-meta' => 'মেটা তথ্য',
	'apisb-example' => 'উদাহরণ',
	'apisb-examples' => 'উদাহরণ',
	'apisb-clear' => 'পরিস্কার',
);

/** Breton (brezhoneg)
 * @author Fulup
 * @author Gwendal
 */
$messages['br'] = array(
	'apisb-desc' => 'Aotren dizreinañ galvadennoù [//www.mediawiki.org/wiki/API API MediaWikiI] eus ar merdeer',
	'apisandbox' => 'Poull-traezh API',
	'apisb-no-js' => "'''Fazi''' : Rekis eo JavaScript evit an arc'hwel-mañ.",
	'apisb-intro' => "Grit gant ar bajenn-mañ evit amprouiñ '''servij Web API MediaWiki'''.
Kit da deuler ur sell war [//www.mediawiki.org/wiki/API:Main_page titouroù an API] evit gouzout hiroc'h war an doare da embreger API. Da skouer : 
[//www.mediawiki.org/wiki/API#A_simple_example gwelet danvez ur bennbajenn]. Dibabit un oberiadenn bennak evit gwelet skouerioù all",
	'apisb-api-disabled' => "Diweredekaet eo API war al lec'hienn-mañ.",
	'apisb-legend-parameters' => 'Arventennoù',
	'apisb-legend-result' => "Disoc'h",
	'apisb-legend-generic-parameters' => 'Arventennoù hollek',
	'apisb-legend-generator-parameters' => 'Ganer',
	'apisb-result-request-url' => 'Goulenn URL :',
	'apisb-result-request-post' => 'roadennoù POST :',
	'apisb-label-format' => 'Furmad',
	'apisb-label-action' => 'Ober',
	'apisb-label-doc' => 'Teuliadur',
	'apisb-select-action' => 'Dibab un ober',
	'apisb-select-query' => '(dibab ar reked)',
	'apisb-select-value' => '(dibab an talvoud)',
	'apisb-docs-more' => "Lenn hiroc'h",
	'apisb-params-param' => 'Arventenn',
	'apisb-params-input' => 'Enmont',
	'apisb-params-desc' => 'Deskrivadur',
	'apisb-loading' => 'O kargañ...',
	'apisb-load-error' => 'Fazi en ur gargañ deskrivadur an API',
	'apisb-request-error' => 'Ur fazi zo bet o klask seveniñ ar goulenn API',
	'apisb-namespaces-error' => 'Fazi en ur gargañ an esaouennoù anv',
	'apisb-ns-main' => '(Pennañ)',
	'apisb-submit' => 'Sevel ar goulenn',
	'apisb-query-prop' => 'Perzhioù',
	'apisb-query-list' => 'Rolloù',
	'apisb-query-meta' => 'Titouroù Meta',
	'apisb-example' => 'Skouer',
	'apisb-examples' => 'Skouerioù',
	'apisb-clear' => 'Riñsañ',
	'apisb-request-time' => 'Pad ar goulenn: $1',
);

/** Catalan (català)
 * @author Arnaugir
 * @author Pitort
 * @author Solde
 */
$messages['ca'] = array(
	'apisandbox' => "Pàgina de proves de l'API",
	'apisb-no-js' => "'''Error''': aquesta característica requereix JavaScript.",
	'apisb-api-disabled' => "L'API està desactivada en aquest lloc.",
	'apisb-legend-parameters' => 'Paràmetres',
	'apisb-legend-result' => 'Resultat',
	'apisb-legend-generic-parameters' => 'Paràmetres genèrics',
	'apisb-legend-generator-parameters' => 'Generador',
	'apisb-result-request-url' => 'Sol·licita URL:',
	'apisb-result-request-post' => 'Data POST:',
	'apisb-label-format' => 'Format',
	'apisb-label-action' => 'Acció',
	'apisb-label-doc' => 'Documentació',
	'apisb-select-action' => '(escull acció)',
	'apisb-select-query' => '(escull consulta)',
	'apisb-select-value' => '(escull valor)',
	'apisb-docs-more' => 'llegeix-ne més',
	'apisb-params-param' => 'Paràmetre',
	'apisb-params-input' => 'Entrada',
	'apisb-params-desc' => 'Descripció',
	'apisb-loading' => 'Carregant...',
	'apisb-load-error' => "Error en carregar la descripció de l'API",
	'apisb-request-error' => 'Error duent a terme la sol·licitud API',
	'apisb-namespaces-error' => "Error carregant els noms d'espais",
	'apisb-ns-main' => '(Principal)',
	'apisb-submit' => 'Fes sol·licitud',
	'apisb-query-prop' => 'Propietats',
	'apisb-query-list' => 'Llistes',
	'apisb-query-meta' => 'Metainformació',
	'apisb-example' => 'Exemple',
	'apisb-examples' => 'Exemples',
	'apisb-clear' => 'Neteja',
	'apisb-request-time' => 'Temps de sol·licitud: $1',
);

/** Czech (česky)
 * @author Mormegil
 * @author Reaperman
 * @author Utar
 */
$messages['cs'] = array(
	'apisb-desc' => 'Umožňuje ladit volání [//www.mediawiki.org/wiki/API MediaWiki API] v prohlížeči',
	'apisandbox' => 'API pískoviště',
	'apisb-no-js' => "'''Chyba''': tato funkce vyžaduje JavaScript.",
	'apisb-intro' => "Pomocí této stránky můžete experimentovat s '''webovými službami MediaWiki API'''.
Podrobností využití API najdete v [//www.mediawiki.org/wiki/API:Main_page jeho dokumentaci]. Příklad: [//www.mediawiki.org/wiki/API#A_simple_example získání obsahu Hlavní stránky]. Další příklady uvidíte vybráním parametru action.",
	'apisb-api-disabled' => 'API je na tomto webu vypnuto.',
	'apisb-legend-parameters' => 'Parametry',
	'apisb-legend-result' => 'Výsledek',
	'apisb-legend-generic-parameters' => 'Obecné parametry',
	'apisb-legend-generator-parameters' => 'Generátor',
	'apisb-result-request-url' => 'URL požadavku:',
	'apisb-result-request-post' => 'POSTovaná data:',
	'apisb-label-format' => 'Formát',
	'apisb-label-action' => 'Akce',
	'apisb-label-doc' => 'Dokumentace',
	'apisb-select-action' => '(vyberte akci)',
	'apisb-select-query' => '(vyberte dotaz)',
	'apisb-select-value' => '(vyberte hodnotu)',
	'apisb-docs-more' => 'více informací',
	'apisb-params-param' => 'Parametr',
	'apisb-params-input' => 'Vstup',
	'apisb-params-desc' => 'Popis',
	'apisb-loading' => 'Načítá se…',
	'apisb-load-error' => 'Chyba při načítání popisu API',
	'apisb-request-error' => 'Chyba při provádění požadavku na API',
	'apisb-namespaces-error' => 'Chyba při načítání jmenných prostorů',
	'apisb-ns-main' => '(Hlavní)',
	'apisb-submit' => 'Odeslat požadavek',
	'apisb-query-prop' => 'Vlastnosti',
	'apisb-query-list' => 'Seznamy',
	'apisb-query-meta' => 'Meta informace',
	'apisb-example' => 'Příklad',
	'apisb-examples' => 'Příklady',
	'apisb-clear' => 'Vyčistit',
	'apisb-request-time' => 'Trvání požadavku: $1',
);

/** Welsh (Cymraeg)
 * @author Robin Owain
 */
$messages['cy'] = array(
	'apisb-ns-main' => '(Prif)',
);

/** Danish (dansk)
 * @author Christian List
 * @author Hylle
 * @author Kaare
 * @author Sarrus
 */
$messages['da'] = array(
	'apisb-desc' => 'Giver mulighed for at debugge [//www.mediawiki.org/wiki/API MediaWiki API] kald fra browseren',
	'apisandbox' => 'API-sandkassen',
	'apisb-no-js' => "'''Fejl''': denne funktion kræver JavaScript.",
	'apisb-intro' => "Brug denne side til at eksperimentere med '''MediaWiki web service API'' '.
Vi henviser til [//www.mediawiki.org/wiki/API:Main_page dokumentationen af API] for yderligere oplysninger om brug af API.  Eksempel: [//www.mediawiki.org/wiki/API#A_simple_example få indholdet af en forside]. Vælg en handling at se flere eksempler.",
	'apisb-api-disabled' => 'API er deaktiveret på dette websted.',
	'apisb-legend-parameters' => 'Parametre',
	'apisb-legend-result' => 'Resultat',
	'apisb-legend-generic-parameters' => 'Generelle parametre',
	'apisb-legend-generator-parameters' => 'Generator',
	'apisb-result-request-url' => 'Forespurgt URL:',
	'apisb-result-request-post' => 'POST data:',
	'apisb-label-format' => 'Format',
	'apisb-label-action' => 'Handling',
	'apisb-label-doc' => 'Dokumentation',
	'apisb-select-action' => '(vælg handling)',
	'apisb-select-query' => '(vælg forespørgsel)',
	'apisb-select-value' => '(vælg værdi)',
	'apisb-docs-more' => 'læs mere',
	'apisb-params-param' => 'Parameter',
	'apisb-params-input' => 'Input',
	'apisb-params-desc' => 'Beskrivelse',
	'apisb-loading' => 'Indlæser...',
	'apisb-load-error' => 'Fejl ved indlæsning af API-beskrivelse',
	'apisb-request-error' => 'Fejl ved udførelse af API-forespørgsel',
	'apisb-namespaces-error' => 'Fejl under indlæsning af navnerum',
	'apisb-ns-main' => '(Hoved)',
	'apisb-submit' => 'Lav forespørgsel',
	'apisb-query-prop' => 'Egenskaber',
	'apisb-query-list' => 'Lister',
	'apisb-query-meta' => 'Meta information',
	'apisb-example' => 'Eksempel',
	'apisb-examples' => 'Eksempler',
	'apisb-clear' => 'Ryd',
	'apisb-request-time' => 'Forespørgselstid: $1',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Metalhead64
 * @author Purodha
 */
$messages['de'] = array(
	'apisb-desc' => 'Ermöglicht das Beseitigen von Fehlern bei Aufrufen der [//www.mediawiki.org/wiki/API MediaWiki-API] mit dem Browser',
	'apisandbox' => 'API-Spielwiese',
	'apisb-no-js' => "'''Fehler:''' Diese Funktion erfordert JavaSkript.",
	'apisb-intro' => "Diese Seite kannst du für Versuche mit der '''MediaWiki-API''' verwenden.
Die [//www.mediawiki.org/wiki/API:Main_page/de Dokumentation zur API] enthält weitere Hinweise zu ihrer Nutzung. Beispiel: [//www.mediawiki.org/wiki/API:Main_page/de#Beispiel Den Inhalt der Hauptseite abrufen]. Für weitere Beispiele eine der verfügbaren Aktionen auswählen.",
	'apisb-api-disabled' => 'Die API wurde auf diesem Wiki deaktiviert.',
	'apisb-legend-parameters' => 'Parameter',
	'apisb-legend-result' => 'Ergebnis',
	'apisb-legend-generic-parameters' => 'Generische Parameter',
	'apisb-legend-generator-parameters' => 'Generator',
	'apisb-result-request-url' => 'Anforderungs-URL:',
	'apisb-result-request-post' => 'POST-Daten:',
	'apisb-label-format' => 'Format',
	'apisb-label-action' => 'Aktion',
	'apisb-label-doc' => 'Dokumentation',
	'apisb-select-action' => '(Aktion auswählen)',
	'apisb-select-query' => '(Abfrage auswählen)',
	'apisb-select-value' => '(Wert auswählen)',
	'apisb-docs-more' => 'Mehr',
	'apisb-params-param' => 'Parameter',
	'apisb-params-input' => 'Eingabe',
	'apisb-params-desc' => 'Beschreibung',
	'apisb-loading' => 'Lade …',
	'apisb-load-error' => 'Es ist ein Fehler beim Laden der API-Beschreibung aufgetreten.',
	'apisb-request-error' => 'Es ist ein Fehler beim Ausführen der API-Anforderung aufgetreten.',
	'apisb-namespaces-error' => 'Es ist ein Fehler beim Laden der Namensräume aufgetreten.',
	'apisb-ns-main' => '(Seiten)',
	'apisb-submit' => 'Anfrage ausführen',
	'apisb-query-prop' => 'Eigenschaften',
	'apisb-query-list' => 'Listen',
	'apisb-query-meta' => 'Metainformationen',
	'apisb-example' => 'Beispiel',
	'apisb-examples' => 'Beispiele',
	'apisb-clear' => 'Leeren',
	'apisb-request-time' => 'Dauer der Anfrage: $1',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'apisb-intro' => "Diese Seite können Sie für Versuche mit der '''MediaWiki-API''' verwenden.
Die [//www.mediawiki.org/wiki/API:Main_page/de Dokumentation zur API] enthält weitere Hinweise zu ihrer Nutzung. Beispiel: [//www.mediawiki.org/wiki/API:Main_page/de#Ein_einfaches_Beispiel Den Inhalt auf einer Seite abrufen]. Für weitere Beispiele eine der verfügbaren Aktionen auswählen.",
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Mirzali
 */
$messages['diq'] = array(
	'apisandbox' => 'API qumdor',
	'apisb-legend-parameters' => 'Parametrey',
	'apisb-legend-result' => 'Netice',
	'apisb-legend-generic-parameters' => 'Parametreyê heray',
	'apisb-legend-generator-parameters' => 'Vırazdar',
	'apisb-result-request-url' => 'URL waştış:',
	'apisb-label-format' => 'Format:',
	'apisb-label-action' => 'Kerden',
	'apisb-label-doc' => 'Dokumentasyon',
	'apisb-docs-more' => 'Zewbi buwane',
	'apisb-params-param' => 'Parametre',
	'apisb-params-desc' => 'Şınasnayış',
	'apisb-loading' => 'Bar beno...',
	'apisb-ns-main' => '(Ser)',
	'apisb-submit' => 'Bıwazê',
	'apisb-query-prop' => 'Xısusiyey',
	'apisb-query-list' => 'Listey',
	'apisb-query-meta' => 'Meta malumat',
	'apisb-example' => 'Misal',
	'apisb-examples' => 'Misali',
	'apisb-clear' => 'Bestern',
	'apisb-request-time' => 'Demê waştışi: $1',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'apisb-desc' => 'Zmóžnja wótpóranje zmólkow pśi wołanju [//www.mediawiki.org/wiki/API MediaWiki API] z woglědowaka',
	'apisandbox' => 'API-grajkanišćo',
	'apisb-no-js' => "'''Zmólka''': toś ta funkcija pomina se JavaScript.",
	'apisb-intro' => "Wužyj toś ten bok, aby z '''websłužbu Mediawiki API''' eksperimentěrował.
Glědaj [//www.mediawiki.org/wiki/API:Main_page API-dokumentaciju] za dalšne drobnostki za wužywanje API. Pśikład: [//www.mediawiki.org/wiki/API#A_simple_example Wopśimjeśe głownego boka wótwołaś]. Wubjeŕ akciju, aby dalšne pśikłady wiźeł.",
	'apisb-api-disabled' => 'API jo se na toś tom sedle znjemóžnił.',
	'apisb-legend-parameters' => 'Parametry',
	'apisb-legend-result' => 'Wuslědk',
	'apisb-legend-generic-parameters' => 'Powšykne parametry',
	'apisb-legend-generator-parameters' => 'Generator',
	'apisb-result-request-url' => 'URL napšašowanja:',
	'apisb-result-request-post' => 'POST-daty:',
	'apisb-label-format' => 'Format',
	'apisb-label-action' => 'Akcija',
	'apisb-label-doc' => 'Dokumentacija',
	'apisb-select-action' => 'akciju wubraś',
	'apisb-select-query' => '(napšašowanje wubraś)',
	'apisb-select-value' => '(gódnotu wubraś)',
	'apisb-docs-more' => 'dalšne informacije',
	'apisb-params-param' => 'Parameter',
	'apisb-params-input' => 'Zapódaśe',
	'apisb-params-desc' => 'Wopisanje',
	'apisb-loading' => 'Zacytujo se...',
	'apisb-load-error' => 'Zmólka pśi zacytowanju APU-wopisanja',
	'apisb-request-error' => 'Zmólka pśi pśewjeźenju API-napšašowanja',
	'apisb-namespaces-error' => 'Zmólka pśi zacytowanju mjenjowych rumow',
	'apisb-ns-main' => '(Nastawki)',
	'apisb-submit' => 'Napšašowanje pśewjasć',
	'apisb-query-prop' => 'Kakosći',
	'apisb-query-list' => 'Lisćiny',
	'apisb-query-meta' => 'Metainformacije',
	'apisb-example' => 'Pśikład',
	'apisb-examples' => 'Pśikłady',
	'apisb-clear' => 'Wuprozniś',
	'apisb-request-time' => 'Napšašowański cas: $1',
);

/** Greek (Ελληνικά)
 * @author AK
 * @author Crazymadlover
 * @author Glavkos
 * @author Lou
 * @author ZaDiak
 */
$messages['el'] = array(
	'apisandbox' => 'Αμμοδοχείο API',
	'apisb-no-js' => "'''Σφάλμα''': αυτό το χαρακτηριστικό απαιτεί τη χρήση της κονσόλας JavaScript.",
	'apisb-api-disabled' => 'Η Διεπαφή Προγραμματισμού Εφαρμογών (API) είναι απενεργοποιημένη σε αυτήν την τοποθεσία.',
	'apisb-legend-parameters' => 'Παράμετροι',
	'apisb-legend-result' => 'Αποτέλεσμα',
	'apisb-legend-generic-parameters' => 'Γενικές παράμετροι',
	'apisb-legend-generator-parameters' => 'Γεννήτρια',
	'apisb-result-request-url' => 'Αίτηση URL:',
	'apisb-result-request-post' => 'Δεδομένα POST:',
	'apisb-label-format' => 'Μορφή',
	'apisb-label-action' => 'Ενέργεια',
	'apisb-label-doc' => 'Τεκμηρίωση',
	'apisb-select-action' => 'Επιλέξτε ενέργεια',
	'apisb-select-query' => '(επιλογή ερώτησης)',
	'apisb-select-value' => '(επιλογή τιμής)',
	'apisb-docs-more' => 'διαβάστε περισσότερα',
	'apisb-params-param' => 'Η παράμετρος',
	'apisb-params-input' => 'Εισροή',
	'apisb-params-desc' => 'Περιγραφή',
	'apisb-loading' => 'Φόρτωση...',
	'apisb-namespaces-error' => 'Σφάλμα φόρτωσης ονοματοχώρων',
	'apisb-ns-main' => '(Κύρια)',
	'apisb-submit' => 'Κάντε αίτημα',
	'apisb-query-prop' => 'Ιδιότητες',
	'apisb-query-list' => 'Λίστες',
	'apisb-query-meta' => 'Πληροφορίες Meta',
	'apisb-example' => 'Παράδειγμα',
	'apisb-examples' => 'Παραδείγματα',
	'apisb-clear' => 'Εκκαθάριση',
	'apisb-request-time' => 'Ώρα αίτησης: $1',
);

/** Esperanto (Esperanto)
 * @author Blahma
 * @author Karika
 * @author Lucas
 * @author Yekrats
 */
$messages['eo'] = array(
	'apisb-desc' => 'Permesas sencimigadon de vokoj al [//www.mediawiki.org/wiki/API MediaWiki API] el la retumilo',
	'apisandbox' => 'API testejo',
	'apisb-no-js' => "'''Eraro''': tiu ĉi funkcio postulas Ĝavaskripton.",
	'apisb-intro' => "Uzu tiun ĉi paĝon por eksperimenti kun '''MediaWiki API'''.
Vidu [//www.mediawiki.org/wiki/API:Main_page la API-dokumentadon] por pli da detaloj pri la uzo de API. Ekz-e: [//www.mediawiki.org/wiki/API#A_simple_example atingi la enhavon de la Ĉefpaĝo]. Elektu agon por vidi pliajn ekzemplojn.",
	'apisb-api-disabled' => 'API estas malŝalta en ĉi tiu retejo.',
	'apisb-legend-parameters' => 'Parametroj',
	'apisb-legend-result' => 'Rezulto',
	'apisb-legend-generic-parameters' => 'Komunaj parametroj',
	'apisb-legend-generator-parameters' => 'Generanto',
	'apisb-result-request-url' => 'Mendi URL-on.',
	'apisb-result-request-post' => 'POST-datumoj:',
	'apisb-label-format' => 'Formato',
	'apisb-label-action' => 'Ago',
	'apisb-label-doc' => 'Dokumentado',
	'apisb-select-action' => 'Elekti agojn',
	'apisb-select-query' => '(elekti mendon)',
	'apisb-select-value' => '(elekti valoron)',
	'apisb-docs-more' => 'Legi plu',
	'apisb-params-param' => 'Parametro',
	'apisb-params-input' => 'Enigiloj',
	'apisb-params-desc' => 'Priskribo',
	'apisb-loading' => 'Ŝarĝante...',
	'apisb-load-error' => 'Okazis eraro dum ŝargado de la API-priskribo',
	'apisb-request-error' => 'Okazis eraro dum efektivigo de la API-peto',
	'apisb-namespaces-error' => 'Okazis eraro dum ŝargado de la nomspacoj',
	'apisb-ns-main' => '(Ĉefa)',
	'apisb-submit' => 'Fari mendon',
	'apisb-query-prop' => 'Atributoj',
	'apisb-query-list' => 'Listoj',
	'apisb-query-meta' => 'Metainformoj',
	'apisb-example' => 'Ekzemplo',
	'apisb-examples' => 'Ekzemploj',
	'apisb-clear' => 'Nuligi',
	'apisb-request-time' => 'Tempo de peto: $1',
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Fitoschido
 * @author Imre
 * @author Platonides
 * @author Pvgreenzebra
 */
$messages['es'] = array(
	'apisb-desc' => 'Permite depurar llamadas a la [//www.mediawiki.org/wiki/API API de MediaWiki] desde el navegador',
	'apisandbox' => 'Zona de pruebas API',
	'apisb-no-js' => "'''Error''': esta característica requiere JavaScript.",
	'apisb-intro' => "Usa esta página para experimentar con el '''API de servicio web de MediaWiki'''.
	Para más detalles sobre el uso del API, visita [//www.mediawiki.org/wiki/API:Main_page su documentación].  Ejemplo: [//www.mediawiki.org/wiki/API#A_simple_example obtener el contenido de una Página principal].  Selecciona una acción para ver más ejemplos.",
	'apisb-api-disabled' => 'La API está desactivada en este sitio.',
	'apisb-legend-parameters' => 'Parámetros',
	'apisb-legend-result' => 'Resultado',
	'apisb-legend-generic-parameters' => 'Parámetros genéricos',
	'apisb-legend-generator-parameters' => 'Generador',
	'apisb-result-request-url' => 'URL solicitante:',
	'apisb-result-request-post' => 'Datos POST:',
	'apisb-label-format' => 'Formato',
	'apisb-label-action' => 'Acción',
	'apisb-label-doc' => 'Documentación',
	'apisb-select-action' => 'Selecciona acción',
	'apisb-select-query' => '(Seleccione la consulta)',
	'apisb-select-value' => '(Seleccione el valor)',
	'apisb-docs-more' => 'Leer más',
	'apisb-params-param' => 'Parámetro',
	'apisb-params-input' => 'Entrada',
	'apisb-params-desc' => 'Descripción',
	'apisb-loading' => 'Cargando...',
	'apisb-load-error' => 'Error al cargar la descripción de la API',
	'apisb-request-error' => 'Error al realizar la solicitud de API',
	'apisb-namespaces-error' => 'Error al cargar los espacios de nombres',
	'apisb-ns-main' => '(Principal)',
	'apisb-submit' => 'Realizar solicitud',
	'apisb-query-prop' => 'Propiedades',
	'apisb-query-list' => 'Listas',
	'apisb-query-meta' => 'información de Meta',
	'apisb-example' => 'Ejemplo',
	'apisb-examples' => 'Ejemplos',
	'apisb-clear' => 'Limpiar',
	'apisb-request-time' => 'Tiempo de solicitud: $1',
);

/** Estonian (eesti)
 * @author Pikne
 */
$messages['et'] = array(
	'apisb-desc' => 'Võimaldab veebilehitseja kaudu tehtud [//www.mediawiki.org/wiki/API MediaWiki API] päringutest vigu leida.',
	'apisandbox' => 'API-liivakast',
	'apisb-no-js' => "'''Tõrge''': Selle funktsiooni jaoks on JavaScripti vaja.",
	'apisb-intro' => "Kasuta seda lehekülge '''MediaWiki API''' katsetamiseks.
Üksikasjad API kasutamise kohta leiad [//www.mediawiki.org/wiki/API:Main_page API dokumentatsioonist]. Näide: [//www.mediawiki.org/wiki/API#A_simple_example esilehe sisu hankimine]. Vali toiming, et näha veel näiteid.",
	'apisb-api-disabled' => 'API on selles võrgukohas keelatud.',
	'apisb-legend-parameters' => 'Parameetrid',
	'apisb-legend-result' => 'Tulemus',
	'apisb-legend-generic-parameters' => 'Üldised parameetrid',
	'apisb-legend-generator-parameters' => 'Generaator',
	'apisb-result-request-url' => 'Päringu URL:',
	'apisb-result-request-post' => 'POST-andmed:',
	'apisb-label-format' => 'Vorming',
	'apisb-label-action' => 'Toiming',
	'apisb-label-doc' => 'Dokumentatsioon',
	'apisb-select-action' => 'Vali toiming',
	'apisb-select-query' => '(vali päring)',
	'apisb-select-value' => '(vali väärtus)',
	'apisb-docs-more' => 'loe veel',
	'apisb-params-param' => 'Parameeter',
	'apisb-params-input' => 'Sisend',
	'apisb-params-desc' => 'Kirjeldus',
	'apisb-loading' => 'Laadimine...',
	'apisb-load-error' => 'API kirjelduse laadimisel esines tõrge',
	'apisb-request-error' => 'API-päringu sooritamisel esines tõrge',
	'apisb-namespaces-error' => 'Nimeruumide laadimisel esines tõrge',
	'apisb-ns-main' => '(Põhinimeruum)',
	'apisb-submit' => 'Tee päring',
	'apisb-query-prop' => 'Atribuudid',
	'apisb-query-list' => 'Loendid',
	'apisb-query-meta' => 'Metaandmed',
	'apisb-example' => 'Näide',
	'apisb-examples' => 'Näited',
	'apisb-clear' => 'Puhasta',
	'apisb-request-time' => 'Päringuaeg: $1',
);

/** Basque (euskara)
 * @author An13sa
 * @author පසිඳු කාවින්ද
 */
$messages['eu'] = array(
	'apisb-legend-result' => 'Emaitza',
	'apisb-label-format' => 'Formatua',
	'apisb-label-action' => 'Ekintza',
	'apisb-label-doc' => 'Dokumentazioa',
	'apisb-docs-more' => 'Gehiago irakurri',
	'apisb-params-desc' => 'Deskribapena',
	'apisb-loading' => 'Kargatzen…',
	'apisb-ns-main' => '(Nagusia)',
	'apisb-query-prop' => 'Propietateak',
	'apisb-query-list' => 'Zerrendak',
	'apisb-example' => 'Adibidea',
	'apisb-examples' => 'Adibidea',
	'apisb-clear' => 'Garbitu',
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Huji
 * @author Leyth
 * @author Mjbmr
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'apisb-desc' => 'اشکال‌یابی فراخوانی‌های [//www.mediawiki.org/wiki/API رابط برنامه‌نویسی مدیاویکی] را از طریق مرورگر اجازه می‌دهد',
	'apisandbox' => 'گودال ماسه‌بازی رابط برنامه‌نویسی',
	'apisb-no-js' => "'''خطا''': این قابلیت نیازمند جاوااسکریپت است.",
	'apisb-intro' => "از این صفحه برای آزمایش '''خدمات وب API مدیاویکی''' استفاده کنید.
برای جزئیات بیشتر دربارهٔ نحوهٔ استفاده از API به [//www.mediawiki.org/wiki/API:Main_page مستندات API] رجوع کنید. مثال: [//www.mediawiki.org/wiki/API#A_simple_example دریافت محتوای صفحهٔ اصلی]. برای دیدن مثال‌های بیشتر عملکردی را انتخاب کنید.",
	'apisb-api-disabled' => 'رابط برنامه‌نویسی در این تارنما غیرفعال شده‌است.',
	'apisb-legend-parameters' => 'پارامترها',
	'apisb-legend-result' => 'نتیجه',
	'apisb-legend-generic-parameters' => 'پارامترهای عمومی',
	'apisb-legend-generator-parameters' => 'تولیدکننده',
	'apisb-result-request-url' => 'درخواست آدرس:',
	'apisb-result-request-post' => 'فرستادن داده‌ها:',
	'apisb-label-format' => 'قالب',
	'apisb-label-action' => 'عمل',
	'apisb-label-doc' => 'مستندات',
	'apisb-select-action' => 'انتخاب اقدامات',
	'apisb-select-query' => '(درخواست را انتخاب کنید)',
	'apisb-select-value' => '(مقدار راانتخاب کنید)',
	'apisb-docs-more' => 'ادامه مطلب',
	'apisb-params-param' => 'پارامتر',
	'apisb-params-input' => 'ورودی',
	'apisb-params-desc' => 'توضیح',
	'apisb-loading' => 'در حال بارگیری...',
	'apisb-load-error' => 'خطا در بارگذاری توضیحات ای‌پی‌آی',
	'apisb-request-error' => 'خطا در اجرای درخواست ای‌پی‌آی',
	'apisb-namespaces-error' => 'خطا در بارگذاری فضاهای نام',
	'apisb-ns-main' => '(اصلی)',
	'apisb-submit' => 'ایجاد درخواست',
	'apisb-query-prop' => 'ویژگی‌ها',
	'apisb-query-list' => 'فهرست‌ها',
	'apisb-query-meta' => 'اطلاعات متا',
	'apisb-example' => 'مثال',
	'apisb-examples' => 'مثال‌ها',
	'apisb-clear' => 'پاک‌کردن',
	'apisb-request-time' => 'زمان درخواست: $1',
);

/** Finnish (suomi)
 * @author Crt
 * @author Nedergard
 * @author Olli
 */
$messages['fi'] = array(
	'apisb-desc' => '[//www.mediawiki.org/wiki/API MediaWiki API] -kyselyjen virheenkorjausmahdollisuus',
	'apisandbox' => 'API-hiekkalaatikko',
	'apisb-no-js' => "'''Virhe:''' Tämä ominaisuus vaatii JavaScriptin.",
	'apisb-intro' => "Tämä on '''MediaWiki API:n''' hiekkalaatikko.
[//www.mediawiki.org/wiki/API:Main_page API-dokumentaatio] kertoo lisää API:en käytöstä.", # Fuzzy
	'apisb-api-disabled' => 'API on poistettu käytöstä tällä sivustolla.',
	'apisb-legend-parameters' => 'Muuttujat',
	'apisb-legend-result' => 'Tulos',
	'apisb-legend-generic-parameters' => 'Yleiset parametrit',
	'apisb-legend-generator-parameters' => 'Generoija',
	'apisb-result-request-url' => 'Pyynnön URL',
	'apisb-result-request-post' => 'POST-tiedot',
	'apisb-label-format' => 'Muoto',
	'apisb-label-action' => 'Toiminto',
	'apisb-label-doc' => 'Ohjeet',
	'apisb-select-action' => '(valitse toiminto)',
	'apisb-select-query' => '(valitse kysely)',
	'apisb-select-value' => '(valitse arvo)',
	'apisb-docs-more' => 'lue lisää',
	'apisb-params-param' => 'Muuttuja',
	'apisb-params-input' => 'Syöte',
	'apisb-params-desc' => 'Kuvaus',
	'apisb-loading' => 'Ladataan...',
	'apisb-load-error' => 'API-kuvauksen latausvirhe',
	'apisb-request-error' => 'API-pyynnön suoritusvirhe',
	'apisb-namespaces-error' => 'Virhe ladattaessa nimiavaruuksia',
	'apisb-ns-main' => '(pää)',
	'apisb-submit' => 'Tee pyyntö',
	'apisb-query-prop' => 'Ominaisuudet',
	'apisb-query-list' => 'Luettelot',
	'apisb-query-meta' => 'Metatiedot',
	'apisb-example' => 'Esimerkki',
	'apisb-examples' => 'Esimerkit',
	'apisb-clear' => 'Tyhjennä',
	'apisb-request-time' => 'Pyyntöaika: $1',
);

/** French (français)
 * @author Balzac 40
 * @author Crochet.david
 * @author Gomoko
 * @author Grondin
 * @author IAlex
 * @author Jean-Frédéric
 * @author Tpt
 * @author Urhixidur
 * @author Verdy p
 */
$messages['fr'] = array(
	'apisb-desc' => 'Permet de déboguer les appels de l’[//www.mediawiki.org/wiki/API API de MediaWiki] à partir du navigateur',
	'apisandbox' => 'Bac à sable API',
	'apisb-no-js' => "''' Erreur ''': cette fonctionnalité nécessite JavaScript.",
	'apisb-intro' => "Utilisez cette page pour expérimenter le '''webservice MediaWiki'''.
Reportez-vous à [//www.mediawiki.org/wiki/API:Main_page la documentation de l’API] pour plus de détails sur l’API. Exemple: [//www.mediawiki.org/wiki/API#A_simple_example obtenir le contenu d'une page principale]. Choisissez une option pour voir d'autres exemples.",
	'apisb-api-disabled' => 'API est désactivé sur ce site.',
	'apisb-legend-parameters' => 'Paramètres',
	'apisb-legend-result' => 'Résultat',
	'apisb-legend-generic-parameters' => 'Paramètres génériques',
	'apisb-legend-generator-parameters' => 'Générateur',
	'apisb-result-request-url' => 'Requête URL :',
	'apisb-result-request-post' => 'données POST :',
	'apisb-label-format' => 'Format',
	'apisb-label-action' => 'Action',
	'apisb-label-doc' => 'Documentation',
	'apisb-select-action' => 'Sélectionner une action',
	'apisb-select-query' => '(choisir la requête)',
	'apisb-select-value' => '(choisir la valeur)',
	'apisb-docs-more' => 'en savoir plus',
	'apisb-params-param' => 'Paramètre',
	'apisb-params-input' => 'Entrée',
	'apisb-params-desc' => 'Description',
	'apisb-loading' => 'Chargement...',
	'apisb-load-error' => 'Erreur lors du chargement de description de l’API',
	'apisb-request-error' => 'Erreur lors de l’exécution d’une requête API',
	'apisb-namespaces-error' => 'Erreur lors du chargement des espaces de noms',
	'apisb-ns-main' => '(Principal)',
	'apisb-submit' => 'Faire la demande',
	'apisb-query-prop' => 'Propriétés',
	'apisb-query-list' => 'Listes',
	'apisb-query-meta' => 'Méta-information',
	'apisb-example' => 'Exemple',
	'apisb-examples' => 'Exemples',
	'apisb-clear' => 'Effacer',
	'apisb-request-time' => 'Durée de la demande: $1',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'apisb-desc' => 'Pèrmèt d’èliminar les cofieries des apèls de l’[//www.mediawiki.org/wiki/API API de MediaWiki] dês lo navigator.',
	'apisandbox' => 'Bouèta de sabla API',
	'apisb-no-js' => "'''Èrror :''' cela fonccionalitât at fôta de JavaScript.",
	'apisb-intro' => "Utilisâd ceta pâge por èxpèrimentar avouéc '''MediaWiki API'''.
Reportâd-vos sur [//www.mediawiki.org/wiki/API:Main_page la documentacion de l’API] por més de dètalys sur l’usâjo de l’API.", # Fuzzy
	'apisb-api-disabled' => 'API est dèsactivâ sur ceti seto.',
	'apisb-legend-parameters' => 'Paramètros',
	'apisb-legend-result' => 'Rèsultat',
	'apisb-legend-generic-parameters' => 'Paramètres g·ènèricos',
	'apisb-legend-generator-parameters' => 'G·ènèrator',
	'apisb-result-request-url' => 'Requéta URL :',
	'apisb-result-request-post' => 'Balyês POST :',
	'apisb-label-format' => 'Format',
	'apisb-label-action' => 'Accion',
	'apisb-label-doc' => 'Documentacion',
	'apisb-select-action' => 'Chouèsir una accion',
	'apisb-select-query' => '(chouèsir la requéta)',
	'apisb-select-value' => '(chouèsir la valor)',
	'apisb-docs-more' => 'nen savêr més',
	'apisb-params-param' => 'Paramètro',
	'apisb-params-input' => 'Entrâ',
	'apisb-params-desc' => 'Dèscripcion',
	'apisb-loading' => 'Chargement...',
	'apisb-load-error' => 'Èrror pendent lo chargement de la dèscripcion de l’API',
	'apisb-request-error' => 'Èrror pendent l’ègzécucion d’una requéta API',
	'apisb-namespaces-error' => 'Èrror pendent lo chargement des èspâços de noms',
	'apisb-ns-main' => '(Principâl)',
	'apisb-submit' => 'Fâre la demanda',
	'apisb-query-prop' => 'Propriètâts',
	'apisb-query-list' => 'Listes',
	'apisb-query-meta' => 'Mèta-enformacions',
	'apisb-example' => 'Ègzemplo',
	'apisb-examples' => 'Ègzemplos',
	'apisb-clear' => 'Èfaciér',
	'apisb-request-time' => 'Durâ de la demanda : $1',
);

/** Irish (Gaeilge)
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'apisb-label-format' => 'Formáid',
	'apisb-label-action' => 'Gníomh',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'apisb-desc' => 'Permite a depuración das chamadas da [//www.mediawiki.org/wiki/API API de MediaWiki] desde o navegador',
	'apisandbox' => 'Zona de probas API',
	'apisb-no-js' => "'''Erro:''' Esta característica necesita JavaScript.",
	'apisb-intro' => "Use esta páxina para experimentar co '''servizo web da API de MediaWiki'''.
Consulte a [//www.mediawiki.org/wiki/API:Main_page documentación da API] para obter máis información sobre o uso da API. Exemplo: [//www.mediawiki.org/wiki/API#A_simple_example obter o contido dunha páxina de inicio]. Seleccione unha acción para ollar máis exemplos.",
	'apisb-api-disabled' => 'API está desactivado neste sitio.',
	'apisb-legend-parameters' => 'Parámetros',
	'apisb-legend-result' => 'Resultado',
	'apisb-legend-generic-parameters' => 'Parámetros xenéricos',
	'apisb-legend-generator-parameters' => 'Xerador',
	'apisb-result-request-url' => 'URL da solicitude:',
	'apisb-result-request-post' => 'Datos POST:',
	'apisb-label-format' => 'Formato',
	'apisb-label-action' => 'Acción',
	'apisb-label-doc' => 'Documentación',
	'apisb-select-action' => 'Seleccionar unha acción',
	'apisb-select-query' => '(seleccione a consulta)',
	'apisb-select-value' => '(seleccione o valor)',
	'apisb-docs-more' => 'ler máis',
	'apisb-params-param' => 'Parámetro',
	'apisb-params-input' => 'Entrada',
	'apisb-params-desc' => 'Descrición',
	'apisb-loading' => 'Cargando...',
	'apisb-load-error' => 'Erro ao cargar a descrición API',
	'apisb-request-error' => 'Erro ao executar a solicitude API',
	'apisb-namespaces-error' => 'Erro ao cargar o espazo de nomes',
	'apisb-ns-main' => '(Principal)',
	'apisb-submit' => 'Facer a solicitude',
	'apisb-query-prop' => 'Propiedades',
	'apisb-query-list' => 'Listas',
	'apisb-query-meta' => 'Metainformación',
	'apisb-example' => 'Exemplo',
	'apisb-examples' => 'Exemplos',
	'apisb-clear' => 'Limpar',
	'apisb-request-time' => 'Duración da solicitude: $1',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Crazymadlover
 */
$messages['grc'] = array(
	'apisb-label-doc' => 'Τεκμηρίωσις',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'apisb-desc' => 'Macht s Korrigiere vu Fähler bi Ufruef vu dr [//www.mediawiki.org/wiki/API MediaWiki-API] mit em Browser megli',
	'apisandbox' => 'API-Sandchaschte',
	'apisb-no-js' => "'''Fähler:''' Die Funktion brucht JavaSkript.",
	'apisb-intro' => "Die Syte chasch bruche fir Versuech mit dr '''MediaWiki-API'''.
In dr [//www.mediawiki.org/wiki/API:Main_page/de Dokumäntation zue dr API] het s no meh Hiiwys zue ihre Nutzig. Byschpel: [//www.mediawiki.org/wiki/API:Main_page/de#Beispiel Dr Inhalt vu dr Hauptsyte abruefe]. Fir meh Byschpel eini vu dr verfiegbare Aktionen uuswehle.",
	'apisb-api-disabled' => 'D API isch uf däm Wiki deaktiviert wore.',
	'apisb-legend-parameters' => 'Parameter',
	'apisb-legend-result' => 'Ergebnis',
	'apisb-legend-generic-parameters' => 'Generischi Parameter',
	'apisb-legend-generator-parameters' => 'Generator',
	'apisb-result-request-url' => 'Aaforderigs-URL:',
	'apisb-result-request-post' => 'POST-Date:',
	'apisb-label-format' => 'Format',
	'apisb-label-action' => 'Aktion',
	'apisb-label-doc' => 'Dokumäntation',
	'apisb-select-action' => '(Aktion uuswehle)',
	'apisb-select-query' => '(Abfrog uuswehle)',
	'apisb-select-value' => '(Wärt uuswehle)',
	'apisb-docs-more' => 'Meh',
	'apisb-params-param' => 'Parameter',
	'apisb-params-input' => 'Yygab',
	'apisb-params-desc' => 'Bschryybig',
	'apisb-loading' => 'Am Lade …',
	'apisb-load-error' => 'Fähler bim Lade vu dr API-Bschryybig',
	'apisb-request-error' => 'Fähler bim Uusfiere vu dr API-Aaforderig',
	'apisb-namespaces-error' => 'Fähler bim Lade vu dr Namensryym',
	'apisb-ns-main' => '(Haupt)',
	'apisb-submit' => 'Aafrog uusfiere',
	'apisb-query-prop' => 'Eigeschafte',
	'apisb-query-list' => 'Lischte',
	'apisb-query-meta' => 'Metainformatione',
	'apisb-example' => 'Byyschpil',
	'apisb-examples' => 'Byyschpil',
	'apisb-clear' => 'Lääre',
	'apisb-request-time' => 'Aafrogzyt: $1',
);

/** Gujarati (ગુજરાતી)
 * @author KartikMistry
 */
$messages['gu'] = array(
	'apisb-legend-parameters' => 'પરિમાણો',
	'apisb-legend-result' => 'પરિણામ',
	'apisb-legend-generic-parameters' => 'સામાન્ય પરિમાણો',
	'apisb-label-action' => 'ક્રિયા',
	'apisb-select-action' => '(ક્રિયા પસંદ કરો)',
	'apisb-select-query' => '(પ્રશ્ન પસંદ કરો)',
	'apisb-select-value' => '(કિંમત પસંદ કરો)',
	'apisb-docs-more' => 'વધુ વાંચો',
	'apisb-params-param' => 'પરિમાણ',
	'apisb-params-desc' => 'વર્ણન',
	'apisb-loading' => 'લવાઇ રહ્યું છે...',
	'apisb-submit' => 'વિનંતી કરો',
	'apisb-query-prop' => 'ગુણધર્મો',
	'apisb-query-list' => 'યાદીઓ',
	'apisb-query-meta' => 'મેટા માહિતી',
	'apisb-example' => 'ઉદાહરણ',
	'apisb-examples' => 'ઉદાહરણો',
	'apisb-clear' => 'સાફ કરો',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Deror avi
 * @author Ofekalef
 */
$messages['he'] = array(
	'apisb-desc' => 'הפעלת ניפוי שגיאות של קריאות ל־[//www.mediawiki.org/wiki/API API של מדיה־ויקי] מהדפדפן',
	'apisandbox' => 'ארגז חול של API',
	'apisb-no-js' => "'''שגיאה''': היכולת הזאת דורשת JavaScript",
	'apisb-intro' => "השתמשו בדף הזה כדי להתנסות עם '''API של מדיה־ויקי'''.
פנו ל[//www.mediawiki.org/wiki/API:Main_page תיעוד של ה־API] למידע נוסף של שימוש ב־API (באנגלית). למשל: [//www.mediawiki.org/wiki/API#A_simple_example איך לקבל את התוכן של הדף הראשי]. בחרו בפעולה (action) לדוגמאות נוספות.",
	'apisb-api-disabled' => 'API אינו פעיל באתר הזה.',
	'apisb-legend-parameters' => 'פרמטרים',
	'apisb-legend-result' => 'תוצאה',
	'apisb-legend-generic-parameters' => 'פרמטרים כלליים',
	'apisb-legend-generator-parameters' => 'מחולל',
	'apisb-result-request-url' => 'כתובת ה־URL של הבקשה:',
	'apisb-result-request-post' => 'נתוני POST:',
	'apisb-label-format' => 'תסדיר',
	'apisb-label-action' => 'פעולה',
	'apisb-label-doc' => 'תיעוד',
	'apisb-select-action' => 'בחירת פעולה',
	'apisb-select-query' => '(בחירת שאילתה)',
	'apisb-select-value' => '(בחירת ערך)',
	'apisb-docs-more' => 'לקרוא עוד',
	'apisb-params-param' => 'פרמטר',
	'apisb-params-input' => 'קלט',
	'apisb-params-desc' => 'תיאור',
	'apisb-loading' => 'בטעינה...',
	'apisb-load-error' => 'שגיאה בטעינת תיאור API',
	'apisb-request-error' => 'שגיאה בביצוע בקשת API',
	'apisb-namespaces-error' => 'שגיאה בטעינת שם מתחם',
	'apisb-ns-main' => '(ראשי)',
	'apisb-submit' => 'ביצוע שאילתה',
	'apisb-query-prop' => 'מאפיינים',
	'apisb-query-list' => 'רשימות',
	'apisb-query-meta' => 'מידע נוסף',
	'apisb-example' => 'דוגמה',
	'apisb-examples' => 'דוגמאות',
	'apisb-clear' => 'ניקוי',
	'apisb-request-time' => 'זמן בקשה: $1',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 * @author Karthi.dr
 */
$messages['hi'] = array(
	'apisandbox' => 'एपीआई सांडबॉक्स',
	'apisb-legend-parameters' => 'मापदंडों',
	'apisb-legend-result' => 'परिणाम',
	'apisb-legend-generic-parameters' => 'जेनेरिक पैरामीटर्स',
	'apisb-legend-generator-parameters' => 'जेनरेटर',
	'apisb-result-request-url' => 'अनुरोध URL:',
	'apisb-result-request-post' => 'डेटा भेजें:',
	'apisb-label-format' => 'स्वरूप',
	'apisb-label-action' => 'क्रिया',
	'apisb-label-doc' => 'प्रलेखन',
	'apisb-select-action' => 'क्रिया चयन करें',
	'apisb-select-query' => '(क्वेरी चयन करें)',
	'apisb-select-value' => '(मूल्य चयन करें)',
	'apisb-docs-more' => 'अधिक पढ़ें',
	'apisb-params-param' => 'मापदंड',
	'apisb-params-input' => 'इनपुट',
	'apisb-params-desc' => 'विवरण',
	'apisb-loading' => 'लोड हो रहा है...',
	'apisb-namespaces-error' => 'नेमस्पेस लोड़ होने में त्रुटि',
	'apisb-ns-main' => '(मुख्य)',
	'apisb-submit' => 'अनुरोध करना',
	'apisb-query-prop' => 'गुणधर्म',
	'apisb-query-list' => 'सूचियाँ',
	'apisb-query-meta' => 'मेटा जानकारी',
	'apisb-example' => 'Example',
	'apisb-examples' => 'उदाहरण',
	'apisb-clear' => 'स्पष्ट',
	'apisb-request-time' => 'अनुरोध समय: $1',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'apisb-desc' => 'Zmóžnja wotstronjenje zmylkow při wołanju [//www.mediawiki.org/wiki/API MediaWiki API] z wobhladowaka',
	'apisandbox' => 'API-hrajkanišćo',
	'apisb-no-js' => "'''Zmylk''': tuta funkcija sej JavaScript wužaduje.",
	'apisb-intro' => "Wužij tutu stronu, zo by z '''websłužbu Mediawiki API''' eksperimentował.
Hlej [//www.mediawiki.org/wiki/API:Main_page API-dokumentaciju] za dalše podrobnosće za wužiwanje API. Přikład: [//www.mediawiki.org/wiki/API#A_simple_example Wobsah hłowneje strony wotwołać]. Wubjer akciju, zo by dalše přikłady widźał.",
	'apisb-api-disabled' => 'API je so na tutym sydle znjemóžnił.',
	'apisb-legend-parameters' => 'Parametry',
	'apisb-legend-result' => 'Wuslědk',
	'apisb-legend-generic-parameters' => 'Powšitkowne parametry',
	'apisb-legend-generator-parameters' => 'Generator',
	'apisb-result-request-url' => 'URL naprašowanja:',
	'apisb-result-request-post' => 'POST-daty:',
	'apisb-label-format' => 'Format',
	'apisb-label-action' => 'Akcija',
	'apisb-label-doc' => 'Dokumentacija',
	'apisb-select-action' => 'Akciju wubrać',
	'apisb-select-query' => '(naprašowanje wubrać)',
	'apisb-select-value' => '(Hódnotu wubrać)',
	'apisb-docs-more' => 'dalše informacije',
	'apisb-params-param' => 'Parameter',
	'apisb-params-input' => 'Zapodaće',
	'apisb-params-desc' => 'Wopisanje',
	'apisb-loading' => 'Začituje so...',
	'apisb-load-error' => 'Zmylk při začitowanju API-wopisanja',
	'apisb-request-error' => 'Zmylk při přewjedźenju API-naprašowanja',
	'apisb-namespaces-error' => 'Zmylk při začitowanju mjenowych rumow',
	'apisb-ns-main' => '(Nastawki)',
	'apisb-submit' => 'Naprašowanje přewjesć',
	'apisb-query-prop' => 'Kajkosće',
	'apisb-query-list' => 'Lisćiny',
	'apisb-query-meta' => 'Metainformacije',
	'apisb-example' => 'Přikład',
	'apisb-examples' => 'Přikłady',
	'apisb-clear' => 'Wuprózdnić',
	'apisb-request-time' => 'Naprašowanski čas: $1',
);

/** Hungarian (magyar)
 * @author Bináris
 * @author Dj
 */
$messages['hu'] = array(
	'apisb-desc' => 'Lehetőséget biztosít az [//www.mediawiki.org/wiki/API MediaWiki API] hívások nyomkövetésére a böngészőből',
	'apisandbox' => 'API homokozó',
	'apisb-no-js' => "'''Hiba''': ehhez a szolgáltatáshoz JavaScript szükséges.",
	'apisb-intro' => "Ezen az oldalon kísérletezhetsz a '''MediaWiki web service API'''-val.
A használattal kapcsolatos további részletek az [//www.mediawiki.org/wiki/API:Main_page API-dokumentációnál] találhatók. Példa: [//www.mediawiki.org/wiki/API#A_simple_example olvasd el a főoldal tartalomjegyzékét]. További példákért válassz egy tevékenységet!",
	'apisb-api-disabled' => 'API le van tiltva ezen az oldalon.',
	'apisb-legend-parameters' => 'Paraméterek',
	'apisb-legend-result' => 'Eredmény',
	'apisb-legend-generic-parameters' => 'Általános paraméterek',
	'apisb-legend-generator-parameters' => 'Generátor',
	'apisb-result-request-url' => 'Kérő URL:',
	'apisb-result-request-post' => 'POST adat:',
	'apisb-label-format' => 'Formátum',
	'apisb-label-action' => 'Művelet',
	'apisb-label-doc' => 'Dokumentáció',
	'apisb-select-action' => 'Műveletek kiválasztása',
	'apisb-select-query' => '(válassz lekérdezést)',
	'apisb-select-value' => '(válassz értéket)',
	'apisb-docs-more' => 'tudj meg többet',
	'apisb-params-param' => 'Paraméter',
	'apisb-params-input' => 'Input',
	'apisb-params-desc' => 'Leírás',
	'apisb-loading' => 'Betöltés…',
	'apisb-load-error' => 'Hiba a API leírás betöltésekor',
	'apisb-request-error' => 'Hiba az API kérés végrehajtásakor',
	'apisb-namespaces-error' => 'Hiba a névtér betöltése során',
	'apisb-ns-main' => '(Fő)',
	'apisb-submit' => 'Kérés végrehajtása',
	'apisb-query-prop' => 'Tulajdonságok',
	'apisb-query-list' => 'Listák',
	'apisb-query-meta' => 'Metaadatok',
	'apisb-example' => 'Példa',
	'apisb-examples' => 'Példák',
	'apisb-clear' => 'Törlés',
	'apisb-request-time' => 'Kérés ideje: $1',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'apisb-desc' => 'Permitte cercar defectos in appellos del [//www.mediawiki.org/wiki/API API de MediaWiki] ab le navigator del web',
	'apisandbox' => 'Cassa de sablo pro API',
	'apisb-no-js' => "'''Error''': iste function require JavaScript.",
	'apisb-intro' => "Usa iste pagina pro experimentar con le '''API de servicio web de MediaWiki'''.
Consulta [//www.mediawiki.org/wiki/API:Main_page le documentation del API] pro ulterior detalios concernente le uso del API. Per exemplo: [//www.mediawiki.org/wiki/API#A_simple_example obtener le contento de un Pagina principal]. Selige un action pro vider altere exemplos.",
	'apisb-api-disabled' => 'Le API ha essite disactivate in iste sito.',
	'apisb-legend-parameters' => 'Parametros',
	'apisb-legend-result' => 'Resultato',
	'apisb-legend-generic-parameters' => 'Parametros generic',
	'apisb-legend-generator-parameters' => 'Generator',
	'apisb-result-request-url' => 'URL de requesta:',
	'apisb-result-request-post' => 'Datos POST:',
	'apisb-label-format' => 'Formato',
	'apisb-label-action' => 'Action',
	'apisb-label-doc' => 'Documentation',
	'apisb-select-action' => 'Selige action',
	'apisb-select-query' => '(selige consulta)',
	'apisb-select-value' => '(selige valor)',
	'apisb-docs-more' => 'leger plus',
	'apisb-params-param' => 'Parametro',
	'apisb-params-input' => 'Entrata',
	'apisb-params-desc' => 'Description',
	'apisb-loading' => 'Cargamento…',
	'apisb-load-error' => 'Error durante le cargamento del description del API',
	'apisb-request-error' => 'Error durante le execution del requesta al API',
	'apisb-namespaces-error' => 'Error durante le cargamento del spatios de nomines',
	'apisb-ns-main' => '(Principal)',
	'apisb-submit' => 'Facer requesta',
	'apisb-query-prop' => 'Proprietates',
	'apisb-query-list' => 'Listas',
	'apisb-query-meta' => 'Metainformationes',
	'apisb-example' => 'Exemplo',
	'apisb-examples' => 'Exemplos',
	'apisb-clear' => 'Rader',
	'apisb-request-time' => 'Duration del requesta: $1',
);

/** Indonesian (Bahasa Indonesia)
 * @author Anakmalaysia
 * @author Farras
 * @author IvanLanin
 */
$messages['id'] = array(
	'apisb-desc' => 'Menyediakan fasilitas debug untuk pemanggilan [//www.mediawiki.org/wiki/API API MediaWiki] dari peramban',
	'apisandbox' => 'Bak pasir API',
	'apisb-no-js' => "'''Galat''': fitur ini memerlukan JavaScript.",
	'apisb-intro' => "Gunakan halaman ini untuk bereksperimen dengan '''API layanan web MediaWiki'''.
Lihat [//www.mediawiki.org/wiki/API:Main_page dokumentasi API] untuk perincian lanjut penggunaan API. Contoh: [//www.mediawiki.org/wiki/API#A_simple_example dapatkan konten Halaman Utama]. Pilih tindakan untuk melihat contoh lain.",
	'apisb-api-disabled' => 'API dinonaktifkan pada situs ini.',
	'apisb-legend-parameters' => 'Parameter',
	'apisb-legend-result' => 'Hasil',
	'apisb-legend-generic-parameters' => 'Parameter generik',
	'apisb-legend-generator-parameters' => 'Generator',
	'apisb-result-request-url' => 'URL Permintaan:',
	'apisb-result-request-post' => 'Data POST:',
	'apisb-label-format' => 'Format',
	'apisb-label-action' => 'Tindakan',
	'apisb-label-doc' => 'Dokumentasi',
	'apisb-select-action' => 'Pilih tindakan',
	'apisb-select-query' => '(pilih permintaan)',
	'apisb-select-value' => '(pilih nilai)',
	'apisb-docs-more' => 'baca lebih lanjut',
	'apisb-params-param' => 'Parameter',
	'apisb-params-input' => 'Masukan',
	'apisb-params-desc' => 'Keterangan',
	'apisb-loading' => 'Memuat...',
	'apisb-load-error' => 'Galat sewaktu memuat deskripsi API',
	'apisb-request-error' => 'Galat sewaktu melakukan permintaan API',
	'apisb-namespaces-error' => 'Galat sewaktu memuat ruang nama',
	'apisb-ns-main' => '(Utama)',
	'apisb-submit' => 'Kirim permintaan',
	'apisb-query-prop' => 'Properti',
	'apisb-query-list' => 'Daftar',
	'apisb-query-meta' => 'Informasi meta',
	'apisb-example' => 'Contoh',
	'apisb-examples' => 'Contoh',
	'apisb-clear' => 'Kosongkan',
	'apisb-request-time' => 'Lama permintaan: $1',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'apisb-legend-result' => 'Nfụ́fụ̀tà',
	'apisb-ns-main' => '(Ḿkpà)',
);

/** Iloko (Ilokano)
 * @author Lam-ang
 */
$messages['ilo'] = array(
	'apisb-desc' => 'Agpalubos ti panag-ikkat ti kiteb ti [//www.mediawiki.org/wiki/API MediaWiki API] a tumawag manipud idiay pagbasabasa',
	'apisandbox' => 'API a pagpsubokan',
	'apisb-no-js' => "''Biddut''': daytoy a langa ket makasapul ti JavaScript.",
	'apisb-intro' => "Usaren daytoy a panid ti panagsubok ti '''MediaWiki a sapot a serbisio ti API'''.
Agiturong idiay [//www.mediawiki.org/wiki/API:Main_page the API dokumentasion] para iti ad-adu pay a salaysay ti panag-usar ti API. Kas pagarigan: [//www.mediawiki.org/wiki/API#A_simple_example alaen ti linaon ti Umuna a Panid].  Agpili ti maaramid tapno makakita ti adu pay a kas pagarigan.",
	'apisb-api-disabled' => 'Ti API ket nabaldado iti daytoy a pagsaadan.',
	'apisb-legend-parameters' => 'Dagiti parametro',
	'apisb-legend-result' => 'Nagbanagan',
	'apisb-legend-generic-parameters' => 'Dagiti kadawyan a parametro',
	'apisb-legend-generator-parameters' => 'Agpaandar',
	'apisb-result-request-url' => 'Agkiddaw ti URL:',
	'apisb-result-request-post' => 'POST a datos:',
	'apisb-label-format' => 'Pormat',
	'apisb-label-action' => 'Aramid',
	'apisb-label-doc' => 'Dokumentasion',
	'apisb-select-action' => '(agpili ti aramid)',
	'apisb-select-query' => '(agpili ti damdamagen)',
	'apisb-select-value' => '(agpili ti kuenta)',
	'apisb-docs-more' => 'agbasa pay ti dadduma',
	'apisb-params-param' => 'Parametro',
	'apisb-params-input' => 'Ti ikabil',
	'apisb-params-desc' => 'Deskripsion',
	'apisb-loading' => 'Agkarkarga...',
	'apisb-load-error' => 'Biddut ti panagkarga ti deskripsion ti API',
	'apisb-request-error' => 'Biddut i panagtungpal ti kiniddaw nga API',
	'apisb-namespaces-error' => 'Biddut ti panag-karga dagiti nagan ti lugar',
	'apisb-ns-main' => '(Umuna)',
	'apisb-submit' => 'Agaramid ti kiddaw',
	'apisb-query-prop' => 'Dagiti tagikua',
	'apisb-query-list' => 'Dagiti listaan',
	'apisb-query-meta' => 'Pakaammo a meta',
	'apisb-example' => 'Kas pagarigan',
	'apisb-examples' => 'Dagiti kas pagarigan',
	'apisb-clear' => 'Dalusan',
	'apisb-request-time' => 'Oras ti kiddaw: $1',
);

/** Icelandic (íslenska)
 * @author පසිඳු කාවින්ද
 */
$messages['is'] = array(
	'apisb-params-desc' => 'Lýsing',
	'apisb-loading' => 'Hleð...',
);

/** Italian (italiano)
 * @author Aushulz
 * @author Beta16
 * @author F. Cosoleto
 * @author Gianfranco
 * @author Rippitippi
 */
$messages['it'] = array(
	'apisb-desc' => 'Permette di eseguire il debug delle chiamate [//www.mediawiki.org/wiki/API MediaWiki API] dal browser',
	'apisandbox' => 'Pagina di prova API',
	'apisb-no-js' => "'''Errore''': questa funzione richiede JavaScript.",
	'apisb-intro' => "Utilizza questa pagina per sperimentare con le '''MediaWiki web service API'''.
Per ulteriori dettagli di utilizzo delle API, fai riferimento alla [//www.mediawiki.org/wiki/API:Main_page documentazione API].

Esempio: [//www.mediawiki.org/wiki/API#A_simple_example ottenere il contenuto della pagina principale]. Seleziona un'azione per vedere altri esempi.",
	'apisb-api-disabled' => 'Le funzionalità API sono disabilitate su questo sito.',
	'apisb-legend-parameters' => 'Parametri',
	'apisb-legend-result' => 'Risultato',
	'apisb-legend-generic-parameters' => 'Parametri generici',
	'apisb-legend-generator-parameters' => 'Generatore',
	'apisb-result-request-url' => 'URL di richiesta:',
	'apisb-result-request-post' => 'Dati POST:',
	'apisb-label-format' => 'Formato',
	'apisb-label-action' => 'Azione',
	'apisb-label-doc' => 'Documentazione',
	'apisb-select-action' => 'Seleziona azione',
	'apisb-select-query' => '(seleziona query)',
	'apisb-select-value' => '(seleziona valore)',
	'apisb-docs-more' => 'per saperne di più',
	'apisb-params-param' => 'Parametro',
	'apisb-params-input' => 'Input',
	'apisb-params-desc' => 'Descrizione',
	'apisb-loading' => 'Caricamento in corso...',
	'apisb-load-error' => 'Errore durante il caricamento descrizione API',
	'apisb-request-error' => "Errore durante l'elaborazione della richiesta API",
	'apisb-namespaces-error' => 'Errore durante il caricamento dei namespace',
	'apisb-ns-main' => '(Principale)',
	'apisb-submit' => 'Inoltra richiesta',
	'apisb-query-prop' => 'Proprietà',
	'apisb-query-list' => 'Liste',
	'apisb-query-meta' => 'Informazioni meta',
	'apisb-example' => 'Esempio',
	'apisb-examples' => 'Esempi',
	'apisb-clear' => 'Pulisci',
	'apisb-request-time' => 'Tempo richiesto: $1',
);

/** Japanese (日本語)
 * @author Shirayuki
 * @author Whym
 */
$messages['ja'] = array(
	'apisb-desc' => 'ブラウザーからの [//www.mediawiki.org/wiki/API MediaWiki API] 呼び出しをデバッグできるようにする',
	'apisandbox' => 'APIサンドボックス',
	'apisb-no-js' => "'''エラー:''' この機能には JavaScript が必要です。",
	'apisb-intro' => "このページを使用すると '''MediaWiki ウェブサービス API''' を試用できます。
API の使用方法の詳細は [//www.mediawiki.org/wiki/API:Main_page API のドキュメント]をご覧ください。例: [//www.mediawiki.org/wiki/API#A_simple_example メインページの内容を取得]。アクションを選択すると他の例を見ることができます。",
	'apisb-api-disabled' => 'このウェブサイトでは、API は無効になっています。',
	'apisb-legend-parameters' => '引数',
	'apisb-legend-result' => '結果',
	'apisb-legend-generic-parameters' => '汎用的な引数',
	'apisb-legend-generator-parameters' => 'ジェネレーター',
	'apisb-result-request-url' => 'リクエスト URL:',
	'apisb-result-request-post' => 'POST データ:',
	'apisb-label-format' => '形式',
	'apisb-label-action' => '操作',
	'apisb-label-doc' => '説明書',
	'apisb-select-action' => '(操作を選択)',
	'apisb-select-query' => '(クエリを選択)',
	'apisb-select-value' => '(値を選択)',
	'apisb-docs-more' => '続きを読む',
	'apisb-params-param' => '引数',
	'apisb-params-input' => '入力',
	'apisb-params-desc' => '説明',
	'apisb-loading' => '読み込み中...',
	'apisb-load-error' => 'API の説明の読み込み中のエラー',
	'apisb-request-error' => 'API リクエストの実行中のエラー',
	'apisb-namespaces-error' => '名前空間の読み込みエラー',
	'apisb-ns-main' => '(標準)',
	'apisb-submit' => 'リクエストする',
	'apisb-query-prop' => 'プロパティ',
	'apisb-query-list' => '一覧',
	'apisb-query-meta' => 'メタ情報',
	'apisb-example' => '例',
	'apisb-examples' => '例',
	'apisb-clear' => '消去',
	'apisb-request-time' => 'リクエスト時間: $1',
);

/** Javanese (Basa Jawa)
 * @author NoiX180
 */
$messages['jv'] = array(
	'apisb-desc' => 'Nglilakaké ndebug [//www.mediawiki.org/wiki/API API MediaWiki] ngundang saka pramban',
	'apisandbox' => 'Kothak wedhi API',
	'apisb-no-js' => "'''Kasalahan''': fitur iki mbutuhaké JavaScript.",
	'apisb-intro' => "Anggo kaca iki kanggo njajal-njajal '''API layanan wèb MediaWiki'''.
Rujuk [//www.mediawiki.org/wiki/API:Main_page the dhokumèntasi API] kanggo panganggoan API luwih rinci. Conto: [//www.mediawiki.org/wiki/API#A_simple_example ngéntukaké kontèn Kaca Utama]. Pilih laku kanggo ndelok conto luwih akèh.",
	'apisb-api-disabled' => 'API dipatèni nèng situs iki.',
	'apisb-legend-parameters' => 'Paramèter',
	'apisb-legend-result' => 'Asil',
	'apisb-legend-generic-parameters' => 'Paramèter gènerik',
	'apisb-legend-generator-parameters' => 'Gènerator',
	'apisb-result-request-url' => 'URL dikarepaké:',
	'apisb-result-request-post' => 'Data POST:',
	'apisb-label-format' => 'Format',
	'apisb-label-action' => 'Laku',
	'apisb-label-doc' => 'Dhokumèntasi',
	'apisb-select-action' => '(pilih laku)',
	'apisb-select-query' => '(pilih kuèri)',
	'apisb-select-value' => '(pilih nilè)',
	'apisb-docs-more' => 'waca luwih lanjut',
	'apisb-params-param' => 'Paramèter',
	'apisb-params-input' => 'Lebon',
	'apisb-params-desc' => 'Wedharan',
	'apisb-loading' => 'Ngemot...',
	'apisb-load-error' => 'Kasalahan ngemot pawedharan API',
	'apisb-request-error' => 'Kasalahan nglakokaké panjalukan API',
	'apisb-namespaces-error' => 'Kasalahan ngemot jeneng bilik',
	'apisb-ns-main' => '(Utama)',
	'apisb-submit' => 'Gawé panjalukan',
	'apisb-query-prop' => 'Properti',
	'apisb-query-list' => 'Daptar',
	'apisb-query-meta' => 'Informasi méta',
	'apisb-example' => 'Conto',
	'apisb-examples' => 'Conto',
	'apisb-clear' => 'Resiki',
	'apisb-request-time' => 'Suwéné panjalukan: $1',
);

/** Georgian (ქართული)
 * @author BRUTE
 * @author David1010
 */
$messages['ka'] = array(
	'apisandbox' => 'API-ს სავარჯიშო',
	'apisb-no-js' => "'''შეცდომა''': ეს შესაძლებლობა მოითხოვს JavaScript-ს.",
	'apisb-api-disabled' => 'API ამ საიტზე გამორთულია.',
	'apisb-legend-parameters' => 'პარამეტრები',
	'apisb-legend-result' => 'შედეგი',
	'apisb-legend-generic-parameters' => 'საერთო პარამეტრები',
	'apisb-legend-generator-parameters' => 'გენერატორი',
	'apisb-result-request-url' => 'მოთხოვნის URL:',
	'apisb-result-request-post' => 'POST მონაცემები:',
	'apisb-label-format' => 'ფორმატი',
	'apisb-label-action' => 'მოქმედება',
	'apisb-label-doc' => 'დოკუმენტაცია',
	'apisb-select-action' => '(აირჩიეთ მოქმედება)',
	'apisb-select-query' => '(აირჩიეთ მოთხოვნა)',
	'apisb-select-value' => '(აირჩიეთ მნიშვნელობა)',
	'apisb-docs-more' => 'მეტი',
	'apisb-params-param' => 'პარამეტრი',
	'apisb-params-input' => 'შეყვანა',
	'apisb-params-desc' => 'აღწერა',
	'apisb-loading' => 'იტვირთება...',
	'apisb-load-error' => 'შეცდომა API-ის აღწერის ჩატვირთვისას',
	'apisb-request-error' => 'შეცდომა API-ის მოთხოვნის შესრულებაზე',
	'apisb-namespaces-error' => 'შეცდომა სახელთა სივრცის ჩარტვირთვისას',
	'apisb-ns-main' => '(მთავარი)',
	'apisb-submit' => 'მოთხოვნის გაკეთება',
	'apisb-query-prop' => 'პარამეტრები',
	'apisb-query-list' => 'სიები',
	'apisb-query-meta' => 'მეტა-ინფორმაცია',
	'apisb-example' => 'მაგალითი',
	'apisb-examples' => 'მაგალითები',
	'apisb-clear' => 'წაშლა',
	'apisb-request-time' => 'თხოვნის დრო: $1',
);

/** Khmer (ភាសាខ្មែរ)
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'apisb-loading' => 'កំពុងផ្ទុក…',
	'apisb-load-error' => 'បញ្ហាក្នុងការផ្ទុកការពណ៌នា API',
	'apisb-request-error' => 'បញ្ហាក្នុងការបំពេញសំណើ API',
	'apisb-namespaces-error' => 'បញ្ហាក្នុងការផ្ទុកលំហឈ្មោះ',
	'apisb-ns-main' => '(ទូទៅ)',
	'apisb-submit' => 'ដាក់សំណើ',
	'apisb-query-prop' => 'លក្ខណៈសម្បត្តិ',
	'apisb-query-list' => 'បញ្ជី',
	'apisb-example' => 'ឧទាហរណ៍',
	'apisb-examples' => 'ឧទាហរណ៍',
	'apisb-clear' => 'ជម្រះ',
	'apisb-request-time' => 'រយៈពេលធ្វើសំណើ៖ $1',
);

/** Korean (한국어)
 * @author Freebiekr
 * @author Kwj2772
 * @author 아라
 */
$messages['ko'] = array(
	'apisb-desc' => '브라우저에서 [//www.mediawiki.org/wiki/API 미디어위키 API] 호출을 디버그할 수 있습니다',
	'apisandbox' => 'API 실험실',
	'apisb-no-js' => "'''오류''': 이 기능을 쓰려면 자바스크립트가 필요합니다.",
	'apisb-intro' => "'''미디어위키 웹 서비스 API'''를 시험해보려면 이 페이지를 이용해보세요.
사용법에 대해서는 [//www.mediawiki.org/wiki/API:Main_page API 사용법]을 참고해보십시오. 예시: [//www.mediawiki.org/wiki/API#A_simple_example 대문의 내용 요청하기]. 더 많은 예시를 보려면 동작을 선택하세요.",
	'apisb-api-disabled' => '이 사이트에서는 API가 꺼져 있습니다.',
	'apisb-legend-parameters' => '변수',
	'apisb-legend-result' => '결과',
	'apisb-legend-generic-parameters' => '일반 매개변수',
	'apisb-legend-generator-parameters' => '제네레이터',
	'apisb-result-request-url' => '요청 URL:',
	'apisb-result-request-post' => 'POST 데이터:',
	'apisb-label-format' => '형식',
	'apisb-label-action' => '동작',
	'apisb-label-doc' => '설명서',
	'apisb-select-action' => '동작을 선택하세요',
	'apisb-select-query' => '(쿼리 선택)',
	'apisb-select-value' => '(값 선택)',
	'apisb-docs-more' => '더 읽어보기',
	'apisb-params-param' => '변수',
	'apisb-params-input' => '입력',
	'apisb-params-desc' => '설명',
	'apisb-loading' => '불러오는 중...',
	'apisb-load-error' => 'API 설명을 불러오는 중 오류가 발생했습니다',
	'apisb-request-error' => 'API 요청을 수행하는 중 오류가 발생했습니다',
	'apisb-namespaces-error' => '이름공간을 불러오는 중 오류가 발생했습니다',
	'apisb-ns-main' => '(문서)',
	'apisb-submit' => '요청하기',
	'apisb-query-prop' => '속성',
	'apisb-query-list' => '목록',
	'apisb-query-meta' => '메타 정보',
	'apisb-example' => '예시',
	'apisb-examples' => '예시',
	'apisb-clear' => '지우기',
	'apisb-request-time' => '요청 처리 시간: $1',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'apisb-desc' => 'Hellef noh Fähler ze söhke bei [//www.mediawiki.org/wiki/API MediaWiki <i lang="en">API</i>] Oprohfe uss_em Brauser.',
	'apisandbox' => 'De <i lang="en">API</i> ußprobeere',
	'apisb-no-js' => "'''Fähler''': heh bruch mer JavaSkrep för.",
	'apisb-intro' => "Op heh dä Sigg kanns De met dä '''MediaWiki web service <i lang=\"en\">API</i>''' eröm schpelle.
Beloor Der de Einzelheite, wi di jebruch weed, op dä iere [//www.mediawiki.org/wiki/API:Main_page Sigg met de Verklieronge].
E Beiscpell: [//www.mediawiki.org/wiki/API#A_simple_example De Houpsigg holle].
Söhk ene {{int:Apisb-label-action}} uß, öm mieh Beishpell aanjezeisch ze krijje.",
	'apisb-api-disabled' => 'Dat <i lang="en">API</i> es en heh dämm Wiki afjeschalldt.',
	'apisb-legend-parameters' => 'Parrameetere',
	'apisb-legend-result' => 'Erus jekumme es',
	'apisb-legend-generic-parameters' => 'jrondlääje Parrameetere',
	'apisb-legend-generator-parameters' => 'Siggejeneraator',
	'apisb-result-request-url' => 'Dä <i lang="en">URL</i> vun dä Aanfrooch:',
	'apisb-result-request-post' => 'POST-Daate:',
	'apisb-label-format' => 'Fomaat',
	'apisb-label-action' => 'Vörjang udder Opdraacht',
	'apisb-label-doc' => 'Dokkemäntazjuhn',
	'apisb-select-action' => '(ene Vörjang udder Opdraacht ußwähle)',
	'apisb-select-query' => '(en Frooch ußwähle)',
	'apisb-select-value' => '(ene Wäät ußwähle)',
	'apisb-docs-more' => 'mieh lässe',
	'apisb-params-param' => 'Parrameeter',
	'apisb-params-input' => 'Enjaabe',
	'apisb-params-desc' => 'Verklierong',
	'apisb-loading' => 'Aam Laade{{int:ellipsis}}',
	'apisb-load-error' => 'Ene Fähler es opjetrodde beim Laade vun dä <i lang="en">API</i> ier Äklieronge.',
	'apisb-request-error' => 'Ene Fähler es opjetrodde beim Oproofe vun dä <i lang="en">API</i>.',
	'apisb-namespaces-error' => 'Ene Fähler es opjetrodde beim Appachtemang-Naame-Laade.',
	'apisb-ns-main' => '(Atikkele)',
	'apisb-submit' => 'Lohß jonn!',
	'apisb-query-prop' => 'Eijeschafte',
	'apisb-query-list' => 'Leste',
	'apisb-query-meta' => 'Metta-Enfommazjuhne:',
	'apisb-example' => 'Bäijshpell',
	'apisb-examples' => 'Bäijshpell',
	'apisb-clear' => 'Läddesch maache',
	'apisb-request-time' => 'De Zigg vum Afroof: $1',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'apisb-legend-parameters' => 'Parametre',
	'apisb-legend-result' => 'Encam',
	'apisb-params-param' => 'Parametre',
	'apisb-params-desc' => 'Danasîn',
	'apisb-query-list' => 'Lîste',
	'apisb-example' => 'Mînak',
	'apisb-examples' => 'Mînak',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'apisandbox' => 'API-Sandkëscht',
	'apisb-no-js' => "'''Feeler''': dës Fonctioun brauch JavaScript",
	'apisb-api-disabled' => 'API ass op dësem Site ausgeschalt.',
	'apisb-legend-parameters' => 'Parameteren',
	'apisb-legend-result' => 'Resultat',
	'apisb-result-request-url' => 'URL fir Ufroen:',
	'apisb-label-format' => 'Format',
	'apisb-label-action' => 'Aktioun',
	'apisb-label-doc' => 'Dokumentatioun',
	'apisb-select-action' => 'Aktioun eraussichen',
	'apisb-select-value' => '(Wäert eraussichen)',
	'apisb-docs-more' => 'liest méi',
	'apisb-params-param' => 'Parameter',
	'apisb-params-desc' => 'Beschreiwung',
	'apisb-loading' => 'Lueden...',
	'apisb-load-error' => 'Feeler beim Luede vun der API- Beschreiwung',
	'apisb-namespaces-error' => 'Feeler beim Luede vun den Nummraim',
	'apisb-ns-main' => '(Haapt)',
	'apisb-submit' => 'Ufro maachen',
	'apisb-query-prop' => 'Eegeschaften',
	'apisb-query-list' => 'Lëschten',
	'apisb-query-meta' => 'Meta-Informatioun',
	'apisb-example' => 'Beispill',
	'apisb-examples' => 'Beispiller',
	'apisb-clear' => 'Eidel maachen',
	'apisb-request-time' => 'Zäitpunkt vun der Ufro: $1',
);

/** Limburgish (Limburgs)
 * @author Pahles
 */
$messages['li'] = array(
	'apisb-desc' => "Maak 't mäögelik óm [//www.mediawiki.org/wiki/API API-verzeuke veur MediaWiki] vanoet 'ne browser te debugge",
	'apisandbox' => 'API-zandjbak',
	'apisb-no-js' => "'''Fout''': dees funktie vereis JavaScript.",
	'apisb-intro' => "Gebroek dees pagina óm te experimentere mit de '''MediaWiki API'''.
Zuuch de [//www.mediawiki.org/wiki/API:Main_page API-dokkemèntatie] veur mier details euver 't gebroek van de API.", # Fuzzy
	'apisb-api-disabled' => 'API is oetgesjakeld op deze site.',
	'apisb-legend-result' => 'Rizzeltaat',
	'apisb-legend-generic-parameters' => 'Algemein parameters',
	'apisb-legend-generator-parameters' => 'Generator',
	'apisb-result-request-url' => 'Verzeuk-URL:',
	'apisb-result-request-post' => 'POST-gegaeves:',
	'apisb-select-action' => 'Hanjeling selektere',
	'apisb-select-query' => 'Wat is dien vraog?', # Fuzzy
	'apisb-select-value' => 'Selekteer waerde', # Fuzzy
	'apisb-loading' => 'Laje…',
	'apisb-load-error' => "Fout bie 't laje van de API-besjrieving",
	'apisb-request-error' => "Fout bie 't oetveure van 't API-verzeuk",
	'apisb-namespaces-error' => "Fout bie 't laje van de naamruumdes",
	'apisb-ns-main' => '(Hoofnaamruumde)',
	'apisb-submit' => 'Verzeuk oetveure',
	'apisb-query-prop' => 'Eigensjappe',
	'apisb-query-list' => 'Lieste',
	'apisb-query-meta' => 'Meta-infermasie',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 * @author Ignas693
 * @author Vogone
 */
$messages['lt'] = array(
	'apisb-desc' => 'Leidžia derinti [MediaWiki API http://www.mediawiki.org/wiki/API] skambučių iš naršyklės',
	'apisandbox' => 'API smėlio dėžės',
	'apisb-no-js' => '"" Klaida "": ši funkcija reikalauja JavaScript.',
	'apisb-intro' => "Naudokite šį puslapį norėdami eksperimentuoti su '''MediaWiki API \"„.
	Ieškokite [//www.mediawiki.org/wiki/API:Main_page API dokumentacijoje] Išsamesnės informacijos apie API naudojimo.", # Fuzzy
	'apisb-api-disabled' => 'API yra išjungtas šioje svetainėje.',
	'apisb-legend-parameters' => 'Parametrai',
	'apisb-legend-result' => 'Rezultatai',
	'apisb-legend-generator-parameters' => 'Generatorius',
	'apisb-result-request-url' => 'Prašyti URL:',
	'apisb-result-request-post' => 'POST duomenys:',
	'apisb-label-format' => 'Formatas',
	'apisb-label-action' => 'Veiksmas',
	'apisb-label-doc' => 'Dokumentacija',
	'apisb-select-action' => 'Pasirinkite veiksmą',
	'apisb-select-query' => 'Ką užklausą?', # Fuzzy
	'apisb-select-value' => 'Pasirinkite vertę', # Fuzzy
	'apisb-docs-more' => 'skaityti daugiau',
	'apisb-params-param' => 'Parametras',
	'apisb-params-input' => 'Įvestis',
	'apisb-params-desc' => 'Aprašymas',
	'apisb-loading' => 'Kraunasi ...',
	'apisb-load-error' => 'Klaida įkeliant API aprašymas',
	'apisb-request-error' => 'Klaida scenos API prašymą',
	'apisb-namespaces-error' => 'Klaida pakrovimo vardų sritys',
	'apisb-ns-main' => '(Pagrindinė)',
	'apisb-submit' => 'Pateikti prašymą',
	'apisb-query-prop' => 'Nusttymai',
	'apisb-query-list' => 'Sąrašai',
	'apisb-query-meta' => 'Meta informacija',
	'apisb-example' => 'Pavyzdys',
	'apisb-examples' => 'Pavyzdžiai',
	'apisb-clear' => 'Išvalyti',
);

/** Latvian (latviešu)
 * @author GreenZeb
 * @author Papuass
 */
$messages['lv'] = array(
	'apisb-api-disabled' => 'API ir atspējots šajā tīmekļa vietnē.',
	'apisb-legend-parameters' => 'Parametri',
	'apisb-legend-result' => 'Rezultāts',
	'apisb-result-request-url' => 'Pieprasījuma URL:',
	'apisb-result-request-post' => 'POST dati:',
	'apisb-label-format' => 'Formāts',
	'apisb-label-action' => 'Darbība',
	'apisb-label-doc' => 'Dokumentācija',
	'apisb-loading' => 'Ielādē…',
	'apisb-query-list' => 'Saraksti',
	'apisb-example' => 'Piemērs',
	'apisb-examples' => 'Piemēri',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'apisb-desc' => 'Овозможува отстранување на грешки во повикувањата на [//www.mediawiki.org/wiki/API?uselang=mk посредникот за програмирање на прилози (API) на МедијаВики] од прелистувачот',
	'apisandbox' => 'API-песочница',
	'apisb-no-js' => "'''Грешка''': оваа функција бара JavaScript.",
	'apisb-intro' => "Страницава служи за експериментирање со '''МедијаВики API'''.
	Повеќе за употребата на овој API ќе најдете во [//www.mediawiki.org/wiki/API:Main_page неговата документација].  Пример: [//www.mediawiki.org/wiki/API#A_simple_example преземање на содржината на главната страница].  Одберете дејство за да видите повеќе примери.",
	'apisb-api-disabled' => 'API е оневозможен на ова мрежно место.',
	'apisb-legend-parameters' => 'Параметри',
	'apisb-legend-result' => 'Извод',
	'apisb-legend-generic-parameters' => 'Општи параметри',
	'apisb-legend-generator-parameters' => 'Создавач',
	'apisb-result-request-url' => 'URL на барањето:',
	'apisb-result-request-post' => 'POST-податоци:',
	'apisb-label-format' => 'Формат',
	'apisb-label-action' => 'Дејство',
	'apisb-label-doc' => 'Документација',
	'apisb-select-action' => 'Одберете дејство',
	'apisb-select-query' => '(изберете барање)',
	'apisb-select-value' => '(изерете вредност)',
	'apisb-docs-more' => 'прочитајте повеќе',
	'apisb-params-param' => 'Параметар',
	'apisb-params-input' => 'Внос',
	'apisb-params-desc' => 'Опис',
	'apisb-loading' => 'Вчитувам...',
	'apisb-load-error' => 'Грешка при вчитувањето на описот на API',
	'apisb-request-error' => 'Грешка при извршувањето на барањето од API',
	'apisb-namespaces-error' => 'Грешка при вчитувањето на именските простори',
	'apisb-ns-main' => '(Главен)',
	'apisb-submit' => 'Постави барање',
	'apisb-query-prop' => 'Својства',
	'apisb-query-list' => 'Списоци',
	'apisb-query-meta' => 'Метаинформации',
	'apisb-example' => 'Пример',
	'apisb-examples' => 'Примери',
	'apisb-clear' => 'Исчисти',
	'apisb-request-time' => 'Време за барањето: $1',
);

/** Malayalam (മലയാളം)
 * @author Junaidpv
 * @author Praveenp
 */
$messages['ml'] = array(
	'apisb-desc' => 'ബ്രൗസർ ഉപയോഗിച്ച് [//www.mediawiki.org/wiki/API മീഡിയവിക്കി എ.പി.ഐ.] വിളികൾ പരിശോധിക്കാൻ അനുവദിക്കുന്നു',
	'apisandbox' => 'എ.പി.ഐ. എഴുത്തുകളരി',
	'apisb-no-js' => "'''പിഴവ്''': ഈ ഉപകരണത്തിന് ജാവാസ്ക്രിപ്റ്റ് ആവശ്യമാണ്.",
	'apisb-intro' => "'''മീഡിയവിക്കി വെബ്‌ സെർവീസ് എ.പി.ഐ.'''യിൽ പരീക്ഷണങ്ങൾ നടത്താൻ ഈ താൾ ഉപയോഗിക്കുക.
എ.പി.ഐ.യുടെ ഉപയോഗത്തെക്കുറിച്ചുള്ള കൂടുതൽ വിവരങ്ങൾക്കായി [//www.mediawiki.org/wiki/API:Main_page the എ.പി.ഐ. സഹായം] പരിശോധിക്കുക. ഉദാഹരണം: [//www.mediawiki.org/wiki/API#A_simple_example പ്രധാന താളിന്റെ ഉള്ളടക്കം എടുക്കുക]. കൂടുതൽ ഉദാഹരണങ്ങൾക്കായി പ്രവൃത്തി തിരഞ്ഞെടുക്കുക.",
	'apisb-api-disabled' => 'ഈ സൈറ്റിൽ എ.പി.ഐ. പ്രവർത്തനരഹിതമാക്കിയിരിക്കുന്നു.',
	'apisb-legend-parameters' => 'ചരങ്ങൾ',
	'apisb-legend-result' => 'ഫലം',
	'apisb-legend-generic-parameters' => 'പൊതു ചരങ്ങൾ',
	'apisb-legend-generator-parameters' => 'നിർമ്മിതി ഉപകരണം',
	'apisb-result-request-url' => 'അഭ്യർത്ഥനാ യൂ.ആർ.എൽ.:',
	'apisb-result-request-post' => 'POST വിവരം:',
	'apisb-label-format' => 'വിന്യാസം',
	'apisb-label-action' => 'പ്രവൃത്തി',
	'apisb-label-doc' => 'സഹായം',
	'apisb-select-action' => 'പ്രവൃത്തി തിരഞ്ഞെടുക്കുക',
	'apisb-select-query' => '(ക്വറി തിരഞ്ഞെടുക്കുക)',
	'apisb-select-value' => '(വില തിരഞ്ഞെടുക്കുക)',
	'apisb-docs-more' => 'കൂടുതൽ വായിക്കുക',
	'apisb-params-param' => 'ചരം',
	'apisb-params-input' => 'ഇൻപുട്ട്',
	'apisb-params-desc' => 'വിവരണം',
	'apisb-loading' => 'ശേഖരിക്കുന്നു...',
	'apisb-load-error' => 'എ.പി.ഐ. വിവരണം ശേഖരിക്കുന്നതിൽ പിഴവുണ്ടായി',
	'apisb-request-error' => 'എ.പി.ഐ. അഭ്യർത്ഥന നടപ്പിൽ വരുത്തുന്നതിൽ പിഴവുണ്ടായി',
	'apisb-namespaces-error' => 'നാമമേഖലകൾ ശേഖരിക്കുന്നതിൽ പിഴവുണ്ടായി',
	'apisb-ns-main' => '(മുഖ്യം)',
	'apisb-submit' => 'അഭ്യർത്ഥിക്കുക',
	'apisb-query-prop' => 'സവിശേഷതകൾ',
	'apisb-query-list' => 'പട്ടികകൾ',
	'apisb-query-meta' => 'മെറ്റ വിവരങ്ങൾ',
	'apisb-example' => 'ഉദാഹരണം',
	'apisb-examples' => 'ഉദാഹരണങ്ങൾ',
	'apisb-clear' => 'ശൂന്യമാക്കുക',
	'apisb-request-time' => 'നടപ്പിലാക്കാൻ എടുത്ത സമയം: $1',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'apisb-desc' => 'Membolehkan penyahpepijatan panggilan [//www.mediawiki.org/wiki/API MediaWiki API] dari pelayar',
	'apisandbox' => 'Kotak pasir API',
	'apisb-no-js' => "'''Perhatian''': ciri ini memerlukan JavaScript.",
	'apisb-intro' => "Gunakan laman ini untuk bereksperimen dengan '''API perkhidmatan sesawang MediaWiki'''.
Rujuk [//www.mediawiki.org/wiki/API:Main_page dokumentasi API] untuk keterangan lanjut tentang penggunaan API.
Contoh: [//www.mediawiki.org/wiki/API#A_simple_example dapatkan kandungan Laman Utama].  Pilih satu tindakan untuk melihat banyak lagi contoh.",
	'apisb-api-disabled' => 'API dimatikan di tapak web ini.',
	'apisb-legend-parameters' => 'Parameter',
	'apisb-legend-result' => 'Hasil',
	'apisb-legend-generic-parameters' => 'Parameter am',
	'apisb-legend-generator-parameters' => 'Penjana',
	'apisb-result-request-url' => 'URL permohonan:',
	'apisb-result-request-post' => 'Data POST:',
	'apisb-label-format' => 'Format',
	'apisb-label-action' => 'Tindakan',
	'apisb-label-doc' => 'Dokumentasi',
	'apisb-select-action' => 'Pilih tindakan',
	'apisb-select-query' => '(pilih pertanyaan)',
	'apisb-select-value' => '(pilih nilai)',
	'apisb-docs-more' => 'baca lagi',
	'apisb-params-param' => 'Parameter',
	'apisb-params-input' => 'Input',
	'apisb-params-desc' => 'Keterangan',
	'apisb-loading' => 'Memuatkan...',
	'apisb-load-error' => 'Ralat ketika memuatkan keterangan API',
	'apisb-request-error' => 'Ralat ketika melakukan permohonan API',
	'apisb-namespaces-error' => 'Ralat ketika memuatkan ruang nama',
	'apisb-ns-main' => '(Utama)',
	'apisb-submit' => 'Buat permintaan',
	'apisb-query-prop' => 'Sifat',
	'apisb-query-list' => 'Senarai',
	'apisb-query-meta' => 'Maklumat meta',
	'apisb-example' => 'Contoh',
	'apisb-examples' => 'Contoh',
	'apisb-clear' => 'Padamkan',
	'apisb-request-time' => 'Waktu pemohonan: $1',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'apisb-desc' => 'Jippermetti l-iddibaggjar tal-talbiet tal-[//www.mediawiki.org/wiki/API API tal-MediaWiki] mill-browżer',
	'apisandbox' => 'Paġna tal-provi tal-API',
	'apisb-no-js' => "'''Żball:''' din il-funzjoni għandha bżonn tal-JavaScript.",
	'apisb-intro' => "Uża din il-paġna sabiex tesperimenta mal-'''MediaWiki web service API'''.
Żur id-[//www.mediawiki.org/wiki/API:Main_page dokumentazzjoni tal-API] għal aktar dettalji dwar l-użu tal-API. Eżempju: [//www.mediawiki.org/wiki/API#A_simple_example ikseb il-kontenut tal-paġna prinċipali]. Agħżel azzjoni sabiex tara aktar eżempji.",
	'apisb-api-disabled' => 'L-API hija diżattivata fuq dan is-sit.',
	'apisb-legend-parameters' => 'Parametri',
	'apisb-legend-result' => 'Riżultat',
	'apisb-legend-generic-parameters' => 'Parametri ġeneriċi',
	'apisb-legend-generator-parameters' => 'Ġeneratur',
	'apisb-result-request-url' => "URL ta' rikjesta:",
	'apisb-result-request-post' => 'Dejta POST:',
	'apisb-label-format' => 'Format',
	'apisb-label-action' => 'Azzjoni',
	'apisb-label-doc' => 'Dokumentazzjoni',
	'apisb-select-action' => 'Agħżel azzjoni',
	'apisb-select-value' => 'Agħżel opzjoni',
	'apisb-docs-more' => 'aqra iktar',
	'apisb-params-param' => 'Parametru',
	'apisb-params-desc' => 'Deskrizzjoni',
	'apisb-loading' => "Tiela'...",
	'apisb-load-error' => 'Żball fit-tlugħ tad-deskrizzjoni tal-API',
	'apisb-request-error' => 'Żball fit-twettiq tar-rikjesta tal-API',
	'apisb-namespaces-error' => 'Żball fit-tlugħ tal-ispazji tal-isem',
	'apisb-ns-main' => '(Prinċipali)',
	'apisb-submit' => 'Agħmel rikjesta',
	'apisb-query-prop' => 'Proprjetajiet',
	'apisb-query-list' => 'Elenki',
	'apisb-query-meta' => 'Informazzjoni meta',
	'apisb-example' => 'Eżempju',
	'apisb-examples' => 'Eżempji',
	'apisb-clear' => 'Ħassar',
	'apisb-request-time' => "Ħin ta' rikjesta: $1",
);

/** Norwegian Bokmål (norsk (bokmål)‎)
 * @author Danmichaelo
 * @author EivindJ
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'apisb-desc' => 'Tillater å feilsøke [//www.mediawiki.org/wiki/API MediaWiki API]-kall fra nettleseren',
	'apisandbox' => 'API-sandkasse',
	'apisb-no-js' => "'''Feil''': denne funksjonen krever JavaScript.",
	'apisb-intro' => "Bruk denne siden for å eksperimentere med '''MediaWiki web service APIet'''.
Sjekk [//www.mediawiki.org/wiki/API:Main_page API-dokumentasjonen] for mer informasjon om bruk av APIet. Eksempel: [//www.mediawiki.org/wiki/API#A_simple_example hente innholdet til en hovedside]. Velg en handling for å se flere eksempler.",
	'apisb-api-disabled' => 'API er deaktivert på dette nettstedet.',
	'apisb-legend-parameters' => 'Parametre',
	'apisb-legend-result' => 'Resultat',
	'apisb-legend-generic-parameters' => 'Generiske parametre',
	'apisb-legend-generator-parameters' => 'Generator',
	'apisb-result-request-url' => 'Forespurt URL:',
	'apisb-result-request-post' => 'POST-data:',
	'apisb-label-format' => 'Format',
	'apisb-label-action' => 'Handling',
	'apisb-label-doc' => 'Dokumentasjon',
	'apisb-select-action' => 'Velg handling',
	'apisb-select-query' => '(velg forespørsel)',
	'apisb-select-value' => '(velg verdi)',
	'apisb-docs-more' => 'les mer',
	'apisb-params-param' => 'Parameter',
	'apisb-params-input' => 'Inndata',
	'apisb-params-desc' => 'Beskrivelse',
	'apisb-loading' => 'Laster...',
	'apisb-load-error' => 'Feil under lasting av API-beskrivelse',
	'apisb-request-error' => 'Feil under utføring av API-forespørsel',
	'apisb-namespaces-error' => 'Feil under lasting av navnerom',
	'apisb-ns-main' => '(Hoved)',
	'apisb-submit' => 'Foreta en forespørsel',
	'apisb-query-prop' => 'Egenskaper',
	'apisb-query-list' => 'Lister',
	'apisb-query-meta' => 'Metainformasjon',
	'apisb-example' => 'Eksempel',
	'apisb-examples' => 'Eksempler',
	'apisb-clear' => 'Tilbakestill',
	'apisb-request-time' => 'Forespørselstid: $1',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'apisb-desc' => 'Maakt het mogelijk om [//www.mediawiki.org/wiki/API API-verzoeken voor MediaWiki] vanuit een browser te debuggen',
	'apisandbox' => 'API-zandbak',
	'apisb-no-js' => "'''Fout''': deze functie vereist JavaScript.",
	'apisb-intro' => "Gebruik deze pagina om te experimenteren met de '''MediaWiki-API'''.
Zie de [//www.mediawiki.org/wiki/API:Main_page API-documentatie] voor verdere details over het gebruik van de API. Voorbeeld: [//www.mediawiki.org/wiki/API#A_simple_example hoe de inhoud van een Hoofdpagina ophalen]. Selecteer een handeling om meer voorbeelden te zien.",
	'apisb-api-disabled' => 'De API is uitgeschakeld op deze site.',
	'apisb-legend-parameters' => 'Parameters',
	'apisb-legend-result' => 'Resultaat',
	'apisb-legend-generic-parameters' => 'Algemene parameters',
	'apisb-legend-generator-parameters' => 'Generator',
	'apisb-result-request-url' => 'Verzoek-URL:',
	'apisb-result-request-post' => 'POST-gegevens:',
	'apisb-label-format' => 'Indeling',
	'apisb-label-action' => 'Handeling',
	'apisb-label-doc' => 'Documentatie',
	'apisb-select-action' => '(selecteer handeling)',
	'apisb-select-query' => '(selecteer zoekopdracht)',
	'apisb-select-value' => '(selecteer waarde)',
	'apisb-docs-more' => 'meer lezen',
	'apisb-params-param' => 'Parameter',
	'apisb-params-input' => 'Invoer',
	'apisb-params-desc' => 'Beschrijving',
	'apisb-loading' => 'Bezig met laden…',
	'apisb-load-error' => 'Fout bij het laden van de API-beschrijving',
	'apisb-request-error' => 'Fout bij het uitvoeren van het API-verzoek',
	'apisb-namespaces-error' => 'Fout laden bij het laden van de naamruimten',
	'apisb-ns-main' => '(Hoofdnaamruimte)',
	'apisb-submit' => 'Verzoek uitvoeren',
	'apisb-query-prop' => 'Eigenschappen',
	'apisb-query-list' => 'Lijsten',
	'apisb-query-meta' => 'Metagegevens',
	'apisb-example' => 'Voorbeeld',
	'apisb-examples' => 'Voorbeelden',
	'apisb-clear' => 'Wissen',
	'apisb-request-time' => 'Doorlooptijd verzoek: $1',
);

/** Norwegian Nynorsk (norsk (nynorsk)‎)
 * @author Njardarlogar
 */
$messages['nn'] = array(
	'apisb-desc' => 'Tillèt feilsøking av [//www.mediawiki.org/wiki/API MediaWiki API]-kall frå nettlesaren',
	'apisandbox' => 'API-sandkasse',
	'apisb-no-js' => "'''Feil''': denne funksjonen krev JavaScript.",
	'apisb-intro' => "Nytt sida til å røyna ut '''MediaWiki web service API''-en.
Sjå [//www.mediawiki.org/wiki/API:Main_page API-dokumentasjonen] for meir informasjon om bruk av API-en. Døme: [//www.mediawiki.org/wiki/API#A_simple_example hent innhaldet til ei hovudside].
Vel ei handling for å sjå fleire døme.",
	'apisb-api-disabled' => 'API er slege av på nettstaden.',
	'apisb-legend-parameters' => 'Parametrar',
	'apisb-legend-result' => 'Utfall',
	'apisb-legend-generic-parameters' => 'Generiske parametrar',
	'apisb-legend-generator-parameters' => 'Generator',
	'apisb-result-request-url' => 'Førespurd URL:',
	'apisb-result-request-post' => 'POST-data:',
	'apisb-label-format' => 'Format',
	'apisb-label-action' => 'Handling',
	'apisb-label-doc' => 'Dokumentasjon',
	'apisb-select-action' => '(vel handling)',
	'apisb-select-query' => '(vel spørjing)',
	'apisb-select-value' => '(vel verdi)',
	'apisb-docs-more' => 'les meir',
	'apisb-params-param' => 'Parameter',
	'apisb-params-input' => 'Inndata',
	'apisb-params-desc' => 'Skildring',
	'apisb-loading' => 'Lastar …',
	'apisb-load-error' => 'Feil ved lasting av API-skildring',
	'apisb-request-error' => 'Feil ved utføring av API-førespurnad',
	'apisb-namespaces-error' => 'Feil ved lasting av namnerom',
	'apisb-ns-main' => '(Hovud)',
	'apisb-submit' => 'Gjer førespurnad',
	'apisb-query-prop' => 'Eigenskapar',
	'apisb-query-list' => 'Lister',
	'apisb-query-meta' => 'Metainformasjon',
	'apisb-example' => 'Døme',
	'apisb-examples' => 'Døme',
	'apisb-clear' => 'Tøm',
	'apisb-request-time' => 'Førespurnadstid: $1',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Ansumang
 * @author Jnanaranjan Sahu
 * @author Odisha1
 * @author Psubhashish
 * @author Shisir 1945
 */
$messages['or'] = array(
	'apisb-desc' => 'ବ୍ରାଉଜରରୁ [//www.mediawiki.org/wiki/API MediaWiki API]ରେ ଥିବା ଅସୁବିଧାକୁ ସୁଧାରିବା ପାଇଁ ଅନୁମତି ଦେବେ',
	'apisandbox' => 'API ପରଖଘର',
	'apisb-no-js' => "'''ଭୁଲ''': ଏହି ସୁବିଧା ପାଇଁ JavaScript ଲୋଡ଼ା ।",
	'apisb-api-disabled' => 'API ଟି ଏହି ସାଇଟରେ ଅଚଳ କରାଯାଇଛି ।',
	'apisb-legend-result' => 'ପରିଣାମ',
	'apisb-legend-generic-parameters' => 'ସାଧାରଣ ମୂଲ୍ୟାଙ୍କ',
	'apisb-legend-generator-parameters' => 'ଉତ୍ପାଦକ',
	'apisb-result-request-url' => 'URL ଅନୁରୋଧ କରିବେ:',
	'apisb-result-request-post' => 'POST ତଥ୍ୟ:',
	'apisb-label-format' => 'ସଜାଣି',
	'apisb-label-action' => 'କାମ',
	'apisb-select-action' => 'କାମ ବାଛିବେ',
	'apisb-select-query' => 'ପ୍ରଶ୍ନଟି କଣ?', # Fuzzy
	'apisb-select-value' => '(ମୂଲ୍ୟ ବାଛିବେ)',
	'apisb-docs-more' => 'ଆହୁରି ପଢିବେ',
	'apisb-params-param' => 'ପରିମାଣ',
	'apisb-params-input' => 'ଇନ୍‌ପୁଟ୍‌',
	'apisb-params-desc' => 'ବିବରଣୀ',
	'apisb-loading' => 'ଲୋଡ଼ ହେଉଛି...',
	'apisb-load-error' => 'API ବିବରଣୀ ଲୋଡ଼ କରିବାରେ ଅସୁବିଧା',
	'apisb-request-error' => 'API ଅନୁରୋଧ କାର୍ଯ୍ୟକାରୀ କରିବାରେ ଅସୁବିଧା',
	'apisb-namespaces-error' => 'ନେମସ୍ପେସ ଲୋଡ଼ କରିବାରେ ଅସୁବିଧା',
	'apisb-ns-main' => '(ମୂଳ)',
	'apisb-submit' => 'ଅନୁରୋଧ କରିବେ',
	'apisb-query-prop' => 'ସଜାଣି',
	'apisb-query-list' => 'ତାଲିକା',
	'apisb-query-meta' => 'ମେଟା ତଥ୍ୟ',
	'apisb-example' => 'ଉଦାହରଣ',
	'apisb-examples' => 'ଉଦାହରଣ',
	'apisb-clear' => 'ଖାଲି କରିଦିଅନ୍ତୁ',
	'apisb-request-time' => 'ଅନୁରୋଧ ସମୟ: $1',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'apisb-ns-main' => '(Bledder)',
);

/** Pälzisch (Pälzisch)
 * @author Manuae
 */
$messages['pfl'] = array(
	'apisb-api-disabled' => 'Die API isch uffm Wiki abgschdelld worre.',
);

/** Polish (polski)
 * @author Beau
 * @author BeginaFelicysym
 * @author Matma Rex
 * @author Olgak85
 * @author Sp5uhe
 * @author Woytecr
 */
$messages['pl'] = array(
	'apisb-desc' => 'Pozwala debugować zapytania do [//www.mediawiki.org/wiki/API API MediaWiki] z poziomu przeglądarki',
	'apisandbox' => 'Środowisko testowe API',
	'apisb-no-js' => "'''Błąd''': ta funkcja wymaga JavaScriptu.",
	'apisb-intro' => "Użyj tej strony do eksperymentowania z '''API serwisu MediaWiki'''.
Więcej szczegółów na temat wykorzystywania API można znaleźć w [//www.mediawiki.org/wiki/API:Main_page dokumentacji API].
Przykład: [//www.mediawiki.org/wiki/API#A_simple_example pobranie zawartości strony głównej].  Wybierz akcję, by zobaczyć więcej przykładów.",
	'apisb-api-disabled' => 'API jest wyłączone na tej stronie.',
	'apisb-legend-parameters' => 'Parametry',
	'apisb-legend-result' => 'Rezultat',
	'apisb-legend-generic-parameters' => 'Parametry standardowe',
	'apisb-legend-generator-parameters' => 'Generator',
	'apisb-result-request-url' => 'URL zapytania:',
	'apisb-result-request-post' => 'Dane POST:',
	'apisb-label-format' => 'Format',
	'apisb-label-action' => 'Akcja',
	'apisb-label-doc' => 'Dokumentacja',
	'apisb-select-action' => '(wybierz akcję)',
	'apisb-select-query' => '(wybierz typ zapytania)',
	'apisb-select-value' => '(wybierz wartość)',
	'apisb-docs-more' => 'dowiedz się więcej',
	'apisb-params-param' => 'Parametr',
	'apisb-params-input' => 'Wartość',
	'apisb-params-desc' => 'Opis',
	'apisb-loading' => 'Trwa ładowanie…',
	'apisb-load-error' => 'Błąd podczas ładowania opisu API.',
	'apisb-request-error' => 'Błąd podczas wykonywania żądania API.',
	'apisb-namespaces-error' => 'Błąd ładowania przestrzeni nazw.',
	'apisb-ns-main' => '(główna)',
	'apisb-submit' => 'Wykonaj zapytanie',
	'apisb-query-prop' => 'Właściwości',
	'apisb-query-list' => 'Listy',
	'apisb-query-meta' => 'Metainformacje',
	'apisb-example' => 'Przykład',
	'apisb-examples' => 'Przykłady',
	'apisb-clear' => 'Wyczyść',
	'apisb-request-time' => 'Czas przetwarzania zapytania: $1',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'apisb-desc' => 'A përmëtt ëd gavé ij bigat a le ciamà [//www.mediawiki.org/wiki/API API ëd MediaWiki] a parte dal navigador',
	'apisandbox' => 'Spassi dle preuve API',
	'apisb-no-js' => "'''Eror''': sta funsion a l'ha damanca ëd JavaScript",
	'apisb-intro' => "Ch'a deuvra sta pàgina për sperimenté ël '''servissi an sl'aragnà MediaWiki API'''.
Ch'a fasa riferiment a [//www.mediawiki.org/wiki/API:Main_page la documentassion ëd l'API] për d'àutri detaj an sl'utilisassion ëd l'API. Për esempi: [//www.mediawiki.org/wiki/API#A_simple_example oten-e ël contnù ëd na pàgina d'Intrada]. Ch'a selession-a n'assion për vëdde d'àutri esempi.",
	'apisb-api-disabled' => "API a l'é disabilità ansima a 's sit.",
	'apisb-legend-parameters' => 'Paràmetr',
	'apisb-legend-result' => 'Arzultà',
	'apisb-legend-generic-parameters' => 'Paràmetr genérich',
	'apisb-legend-generator-parameters' => 'Generator',
	'apisb-result-request-url' => "Anliura d'arcesta:",
	'apisb-result-request-post' => 'Dat ëd POST:',
	'apisb-label-format' => 'Formà',
	'apisb-label-action' => 'Assion',
	'apisb-label-doc' => 'Documentassion',
	'apisb-select-action' => "Selessioné n'assion",
	'apisb-select-query' => "(selessioné l'arcesta)",
	'apisb-select-value' => '(selessioné ël valor)',
	'apisb-docs-more' => "les anco'",
	'apisb-params-param' => 'Paràmetr',
	'apisb-params-input' => 'Anseriment',
	'apisb-params-desc' => 'Descrission',
	'apisb-loading' => 'A caria ...',
	'apisb-load-error' => "Eror an cariand la descrission dl'API",
	'apisb-request-error' => "Eror fasend la ciamà dl'API",
	'apisb-namespaces-error' => 'Eror cariand jë spassi nominaj',
	'apisb-ns-main' => '(Prinsipal)',
	'apisb-submit' => "Fé l'arcesta",
	'apisb-query-prop' => 'Proprietà',
	'apisb-query-list' => 'Liste',
	'apisb-query-meta' => 'Meta-anformassion',
	'apisb-example' => 'Esempi',
	'apisb-examples' => 'Esempi',
	'apisb-clear' => 'Scancela',
	'apisb-request-time' => 'Temp necessari: $1',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'apisb-legend-result' => 'پايله',
	'apisb-result-request-url' => 'د URL غوښتنه کول:',
	'apisb-label-format' => 'بڼه',
	'apisb-label-action' => 'چاره',
	'apisb-label-doc' => 'لاسوند',
	'apisb-select-action' => 'چاره ټاکل',
	'apisb-select-value' => '(ارزښت ټاکل)',
	'apisb-docs-more' => 'نور لوستل',
	'apisb-params-desc' => 'څرګندونه',
	'apisb-loading' => 'برسېرېدنې کې دی...',
	'apisb-ns-main' => '(آرنی)',
	'apisb-submit' => 'غوښته کول',
	'apisb-query-prop' => 'ځانتياوې',
	'apisb-query-list' => 'لړليکونه',
	'apisb-query-meta' => 'مېټا مالومات',
	'apisb-example' => 'بېلګه',
	'apisb-examples' => 'بېلګې',
	'apisb-clear' => 'سپينول',
	'apisb-request-time' => 'د غوښتنې وخت: $1',
);

/** Portuguese (português)
 * @author Alchimista
 * @author Giro720
 * @author Hamilton Abreu
 * @author Luckas Blade
 * @author SandroHc
 */
$messages['pt'] = array(
	'apisb-desc' => 'Permite depurar chamadas à [//www.mediawiki.org/wiki/API API do MediaWiki] a partir do browser',
	'apisandbox' => 'Testes da API',
	'apisb-no-js' => "'''Erro''': Esta funcionalidade requer o JavaScript.",
	'apisb-intro' => "Use esta página para fazer experiências com a '''API do MediaWiki'''.
Consulte a [//www.mediawiki.org/wiki/API:Main_page documentação da API] para informações sobre o uso da API. Exemplo: [//www.mediawiki.org/wiki/API#A_simple_example get the content of a Main Page]. Selecione um acção para ver mais exemplos.",
	'apisb-api-disabled' => 'A API está desactivada neste site.',
	'apisb-legend-parameters' => 'Parâmetros',
	'apisb-legend-result' => 'Resultado',
	'apisb-legend-generic-parameters' => 'Parâmetros genéricos',
	'apisb-legend-generator-parameters' => 'Gerador',
	'apisb-result-request-url' => 'URL do pedido:',
	'apisb-result-request-post' => 'Dados POST:',
	'apisb-label-format' => 'Formato',
	'apisb-label-action' => 'Ação',
	'apisb-label-doc' => 'Documentação',
	'apisb-select-action' => 'Seleccionar acção',
	'apisb-select-query' => '(selecionar consultar)',
	'apisb-select-value' => '(selecionar valor)',
	'apisb-docs-more' => 'leia mais',
	'apisb-params-param' => 'Parâmetro',
	'apisb-params-input' => 'Entrada',
	'apisb-params-desc' => 'Descrição',
	'apisb-loading' => 'A carregar…',
	'apisb-load-error' => 'Erro ao carregar a descrição da API',
	'apisb-request-error' => 'Erro ao executar o pedido da API',
	'apisb-namespaces-error' => 'Erro ao carregar os espaços nominais',
	'apisb-ns-main' => '(Principal)',
	'apisb-submit' => 'Fazer o pedido',
	'apisb-query-prop' => 'Propriedades',
	'apisb-query-list' => 'Listas',
	'apisb-query-meta' => 'Meta informação',
	'apisb-example' => 'Exemplo',
	'apisb-examples' => 'Exemplos',
	'apisb-clear' => 'Limpar',
	'apisb-request-time' => 'Tempo do pedido: $1',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Giro720
 * @author Luckas Blade
 * @author Rafael Vargas
 * @author 555
 */
$messages['pt-br'] = array(
	'apisb-desc' => 'Permite depurar chamadas do [//www.mediawiki.org/wiki/API API do MediaWiki] a partir do navegador',
	'apisandbox' => 'Caixa de areia da API',
	'apisb-no-js' => "'''Erro''': este recurso requer JavaScript.",
	'apisb-intro' => "Use esta página para realizar testes com o '''serviço web de API do MediaWiki'''.
Consulte a [//www.mediawiki.org/wiki/API:Main_page the API documentação] para obter mais detalhes de uso da API.  Exemplo: [//www.mediawiki.org/wiki/API#A_simple_example obter o conteúdo de uma Página principal].  Selecione uma ação para mais exemplos.",
	'apisb-api-disabled' => 'A API está desabilitada neste site.',
	'apisb-legend-parameters' => 'Parâmetros',
	'apisb-legend-result' => 'Resultado',
	'apisb-legend-generic-parameters' => 'Parâmetros genéricos',
	'apisb-legend-generator-parameters' => 'Gerador',
	'apisb-result-request-url' => 'URL solicitante:',
	'apisb-result-request-post' => 'Dados POST:',
	'apisb-label-format' => 'Formato',
	'apisb-label-action' => 'Ação',
	'apisb-label-doc' => 'Documentação',
	'apisb-select-action' => 'Selecione a ação',
	'apisb-select-query' => '(selecionar consulta)',
	'apisb-select-value' => '(selecionar valor)',
	'apisb-docs-more' => 'leia mais',
	'apisb-params-param' => 'Parâmetro',
	'apisb-params-input' => 'Entrada',
	'apisb-params-desc' => 'Descrição',
	'apisb-loading' => 'Carregando...',
	'apisb-load-error' => 'Erro ao carregar a descrição da API',
	'apisb-request-error' => 'Erro na requisição de API',
	'apisb-namespaces-error' => 'Erro carregando namespaces',
	'apisb-ns-main' => '(Principal)',
	'apisb-submit' => 'Fazer requisição',
	'apisb-query-prop' => 'Propriedades',
	'apisb-query-list' => 'Listas',
	'apisb-query-meta' => 'Meta informação',
	'apisb-example' => 'Exemplo',
	'apisb-examples' => 'Exemplos',
	'apisb-clear' => 'Limpar',
	'apisb-request-time' => 'Tempo do pedido: $1',
);

/** Romanian (română)
 * @author Firilacroco
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'apisandbox' => 'Cutia cu nisip pentru API',
	'apisb-no-js' => "'''Eroare''': această caracteristică necesită JavaScript.",
	'apisb-api-disabled' => 'API este dezactivat pe acest site.',
	'apisb-legend-parameters' => 'Parametri',
	'apisb-legend-result' => 'Rezultat',
	'apisb-legend-generic-parameters' => 'Parametri generici',
	'apisb-legend-generator-parameters' => 'Generator',
	'apisb-result-request-url' => 'URL cerere:',
	'apisb-result-request-post' => 'Date POST:',
	'apisb-label-format' => 'Formatare',
	'apisb-label-action' => 'Acțiune',
	'apisb-label-doc' => 'Documentație',
	'apisb-select-action' => 'Alegeți o acțiune',
	'apisb-select-query' => '(selectați interogarea)',
	'apisb-select-value' => '(selectați valoarea)',
	'apisb-docs-more' => 'citiți mai mult',
	'apisb-params-param' => 'Parametru',
	'apisb-params-input' => 'Date de intrare',
	'apisb-params-desc' => 'Descriere',
	'apisb-loading' => 'Se încarcă...',
	'apisb-load-error' => 'Eroare la încărcarea descrierii API',
	'apisb-request-error' => 'Eroare la executarea cererii API',
	'apisb-namespaces-error' => 'Eroare la încărcarea spațiilor de nume',
	'apisb-ns-main' => '(Principal)',
	'apisb-submit' => 'Efectuați cererea',
	'apisb-query-prop' => 'Proprietăți',
	'apisb-query-list' => 'Liste',
	'apisb-query-meta' => 'Meta-informații',
	'apisb-example' => 'Exemplu',
	'apisb-examples' => 'Exemple',
	'apisb-clear' => 'Curăță',
	'apisb-request-time' => 'Durata cererii: $1',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 * @author Reder
 */
$messages['roa-tara'] = array(
	'apisb-desc' => "Permette de verificà le chiamate de [//www.mediawiki.org/wiki/API MediaWiki API] da 'u browser",
	'apisandbox' => "Sandbox de l'API",
	'apisb-no-js' => "'''Errore''': sta funzionalità vole 'u JavaScript.",
	'apisb-intro' => "Ause sta pàgene pe sperimendà cu le '''API de le web service pe MediaUicchi'''.
Fà referimende a [//www.mediawiki.org/wiki/API:Main_page 'a documendazione de l'API] pe cchiù dettaglie de l'ause de l'API.
Esembie: [//www.mediawiki.org/wiki/API#A_simple_example pigghie 'u condenute d'a Pàgene Prengepàle]. Scacchie 'n'azione pe 'ndrucà otre esembie.",
	'apisb-api-disabled' => "API non g'è abbiletate sus a stu site.",
	'apisb-legend-parameters' => 'Parametre',
	'apisb-legend-result' => 'Resultate',
	'apisb-legend-generic-parameters' => 'Parametre generiche',
	'apisb-legend-generator-parameters' => 'Generatore',
	'apisb-result-request-url' => 'URL richieste:',
	'apisb-result-request-post' => "POST d'u date:",
	'apisb-label-format' => 'Formate',
	'apisb-label-action' => 'Azione',
	'apisb-label-doc' => 'Documendazione',
	'apisb-select-action' => "Scacchie l'azione",
	'apisb-select-query' => "(scacchie l'inderrogazione)",
	'apisb-select-value' => "(scacchie 'nu valore)",
	'apisb-docs-more' => 'ligge de cchiù',
	'apisb-params-param' => 'Parametre',
	'apisb-params-input' => 'Ingresse',
	'apisb-params-desc' => 'Descrizione',
	'apisb-loading' => 'Stoche a careche…',
	'apisb-load-error' => "Errore jndr'à 'u carecamende d'a descrizione de l'API",
	'apisb-request-error' => "Errore in esecuzione d'a richieste de l'API",
	'apisb-namespaces-error' => 'Errore de caricamende de le namespace',
	'apisb-ns-main' => '(Prengepàle)',
	'apisb-submit' => "Fà 'na richieste",
	'apisb-query-prop' => 'probbietà',
	'apisb-query-list' => 'Elenghe',
	'apisb-query-meta' => "'Mbormaziune sus a le Meta",
	'apisb-example' => 'Esembie',
	'apisb-examples' => 'Esembie',
	'apisb-clear' => 'Pulizze',
	'apisb-request-time' => 'Tiembe cercate: $1',
);

/** Russian (русский)
 * @author DCamer
 * @author DR
 * @author Eleferen
 * @author KPu3uC B Poccuu
 * @author Kaganer
 * @author KorneySan
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'apisb-desc' => 'Позволяет отлаживать вызовы [//www.mediawiki.org/wiki/API MediaWiki API] из браузера',
	'apisandbox' => 'Песочница API',
	'apisb-no-js' => "'''Ошибка''': эта возможность требует JavaScript.",
	'apisb-intro' => "Используйте эту страницу для экспериментов с '''MediaWiki API'''.
Обратитесь к [//www.mediawiki.org/wiki/API:Main_page документации API] для получения дополнительной информации об использовании API.  Например о том, [//www.mediawiki.org/wiki/API#A_simple_example как получить содержание Заглавной страницы]. Выберите действие, чтобы увидеть другие примеры.",
	'apisb-api-disabled' => 'API отключен на этом сайте.',
	'apisb-legend-parameters' => 'Параметры',
	'apisb-legend-result' => 'Результат',
	'apisb-legend-generic-parameters' => 'Общие параметры',
	'apisb-legend-generator-parameters' => 'Генератор',
	'apisb-result-request-url' => 'URL-адрес запроса:',
	'apisb-result-request-post' => 'POST данные:',
	'apisb-label-format' => 'Формат',
	'apisb-label-action' => 'Действие',
	'apisb-label-doc' => 'Документация',
	'apisb-select-action' => 'Выберите действие',
	'apisb-select-query' => '(выберите запрос)',
	'apisb-select-value' => '(выберите значение)',
	'apisb-docs-more' => 'подробнее',
	'apisb-params-param' => 'Параметр',
	'apisb-params-input' => 'Ввод',
	'apisb-params-desc' => 'Описание',
	'apisb-loading' => 'Загрузка…',
	'apisb-load-error' => 'Ошибка при загрузке описания API',
	'apisb-request-error' => 'Ошибка выполнения запроса API',
	'apisb-namespaces-error' => 'Ошибка при загрузке пространств имен',
	'apisb-ns-main' => '(основное)',
	'apisb-submit' => 'Сделать запрос',
	'apisb-query-prop' => 'Свойства',
	'apisb-query-list' => 'Списки',
	'apisb-query-meta' => 'Мета-информация',
	'apisb-example' => 'Пример',
	'apisb-examples' => 'Примеры',
	'apisb-clear' => 'Очистить',
	'apisb-request-time' => 'Время запроса: $1',
);

/** Sanskrit (संस्कृतम्)
 * @author Ansumang
 * @author Shubha
 */
$messages['sa'] = array(
	'apisb-legend-parameters' => 'परिमितिः',
	'apisb-legend-result' => 'परिणामम्',
	'apisb-legend-generator-parameters' => 'उत्पादकः',
	'apisb-label-format' => 'प्रारूपम्',
	'apisb-label-action' => 'क्रिया',
	'apisb-docs-more' => 'अधिकं पठतु',
	'apisb-params-param' => 'परिमितिः',
	'apisb-params-input' => 'निवेष्यम्',
	'apisb-params-desc' => 'वर्णनम्',
	'apisb-loading' => 'आरोप्यमाणमस्ति.....',
	'apisb-ns-main' => '(मुख्य)',
	'apisb-submit' => 'निवेदनं करोतु',
	'apisb-query-prop' => 'गुणधर्माः',
	'apisb-query-list' => 'सूच्यः',
	'apisb-example' => 'उदाहरणम्',
	'apisb-examples' => 'उदाहरणानि',
	'apisb-clear' => 'स्वच्छीक्रियताम्',
);

/** Sicilian (sicilianu)
 * @author Aushulz
 */
$messages['scn'] = array(
	'apisb-ns-main' => '(Principali)',
	'apisb-submit' => 'Addumanna',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'apisb-desc' => 'ගවේෂකයෙන් [//www.mediawiki.org/wiki/API මාධ්‍යවිකි API] ඇමතුම්වල දෝෂ ඉවත් කිරීමට ඉඩදෙන්න',
	'apisandbox' => 'API වැලිපිල්ල',
	'apisb-no-js' => "'''දෝෂය''': මෙම ගුණාංගය සඳහා ජාවාස්ක්‍රිප්ට් අවශ්‍ය වේ.",
	'apisb-intro' => "'''මාධ්‍යවිකි API''' සමඟ අත්හදා බැලීම සඳහා මෙම පිටුව භාවිතා කරන්න.
	API භාවිතය පිලිබඳ වැඩිදුර විස්තර සඳහා  [//www.mediawiki.org/wiki/API:Main_page API ප්‍රලේඛනය] හී ඉල්ලීමක් කරන්න.", # Fuzzy
	'apisb-api-disabled' => 'මෙම අඩවියෙහි API අක්‍රීය කොට ඇත.',
	'apisb-legend-parameters' => 'පරාමිතීන්',
	'apisb-legend-result' => 'ප්‍රතිඵලය',
	'apisb-legend-generic-parameters' => 'ප්‍රජාතීය පරාමිතීන්',
	'apisb-legend-generator-parameters' => 'උත්පාදකය',
	'apisb-result-request-url' => 'URL ලිපිනය අයදින්න:',
	'apisb-result-request-post' => 'POST දත්ත:',
	'apisb-label-format' => 'ආකෘතිය',
	'apisb-label-action' => 'ක්‍රියාව',
	'apisb-label-doc' => 'ප්‍රලේඛනය',
	'apisb-select-action' => 'කාර්ය තෝරන්න',
	'apisb-select-query' => 'ප්‍රශ්නය කුමක්ද?', # Fuzzy
	'apisb-select-value' => '(අගය තෝරන්න)',
	'apisb-docs-more' => 'තවත් කියවන්න',
	'apisb-params-param' => 'පරාමිතිය',
	'apisb-params-input' => 'ආදානය',
	'apisb-params-desc' => 'විස්තරය',
	'apisb-loading' => 'පූරණය වෙමින්...',
	'apisb-load-error' => 'API විස්තරය පූරණය වීමේ දෝෂය',
	'apisb-request-error' => 'API අයදුම රඟ දැක්වීමේ දෝෂය',
	'apisb-namespaces-error' => 'නාමඅවකාශ පූර්ණය කිරීමේ දෝෂය',
	'apisb-ns-main' => '(ප්‍රධාන)',
	'apisb-submit' => 'අයදුමක් සිදු කරන්න',
	'apisb-query-prop' => 'ගුණ',
	'apisb-query-list' => 'ලැයිස්තු',
	'apisb-query-meta' => 'මෙටා තොරතුරු',
	'apisb-example' => 'නිදසුන',
	'apisb-examples' => 'නිදසුන්',
	'apisb-clear' => 'හිස් කරන්න',
	'apisb-request-time' => 'අයැදු කාලය: $1',
);

/** Slovak (slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'apisandbox' => 'API pieskovisko',
	'apisb-legend-result' => 'Výsledok',
	'apisb-result-request-url' => 'URL požiadavky:',
	'apisb-result-request-post' => 'Údaje POST:',
	'apisb-select-action' => 'Vyberte operáciu',
	'apisb-select-query' => 'Požiadavku na čo?', # Fuzzy
	'apisb-select-value' => 'Vyberte hodnotu', # Fuzzy
	'apisb-loading' => 'Načítava sa...',
	'apisb-ns-main' => '(Hlavné)',
	'apisb-submit' => 'Podať žiadosť',
	'apisb-query-prop' => 'Vlastnosti',
	'apisb-query-list' => 'Zoznamy',
	'apisb-query-meta' => 'Metainformácie',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'apisb-desc' => 'Omogoča popravljanje napak klicev [//www.mediawiki.org/wiki/API MediaWiki API] iz brskalnika',
	'apisandbox' => 'Peskovnik API',
	'apisb-no-js' => "'''Napaka''': funkcija potrebuje JavaScript.",
	'apisb-intro' => "Uporabite to stran za preizkušanje '''API spletnih storitev MediaWiki'''.
	Oglejte si [//www.mediawiki.org/wiki/API:Main_page dokumentacijo API] za nadaljnje podrobnosti o uporabi API.  Primer: [//www.mediawiki.org/wiki/API#A_simple_example pridobi vsebino Glavne strani].  Izberite dejanje, da si ogledate več primerov.",
	'apisb-api-disabled' => 'API je onemogočen na tej spletni strani.',
	'apisb-legend-parameters' => 'Parametri',
	'apisb-legend-result' => 'Rezultat',
	'apisb-legend-generic-parameters' => 'Generični parametri',
	'apisb-legend-generator-parameters' => 'Generator',
	'apisb-result-request-url' => 'URL zahteve:',
	'apisb-result-request-post' => 'Podatki POST:',
	'apisb-label-format' => 'Oblika',
	'apisb-label-action' => 'Dejanje',
	'apisb-label-doc' => 'Dokumentacija',
	'apisb-select-action' => 'Izberite dejanje',
	'apisb-select-query' => '(izberite poizvedbo)',
	'apisb-select-value' => '(izberite vrednost)',
	'apisb-docs-more' => 'preverite več',
	'apisb-params-param' => 'Parameter',
	'apisb-params-input' => 'Vhod',
	'apisb-params-desc' => 'Opis',
	'apisb-loading' => 'Nalaganje ...',
	'apisb-load-error' => 'Napaka pri nalaganju opisa API',
	'apisb-request-error' => 'Napak pri izvajanju zahteve API',
	'apisb-namespaces-error' => 'Napaka pri nalaganju imenskih prostorov',
	'apisb-ns-main' => '(Osnovno)',
	'apisb-submit' => 'Izvedi zahtevo',
	'apisb-query-prop' => 'Lastnosti',
	'apisb-query-list' => 'Seznami',
	'apisb-query-meta' => 'Metapodatki',
	'apisb-example' => 'Primer',
	'apisb-examples' => 'Primeri',
	'apisb-clear' => 'Počisti',
	'apisb-request-time' => 'Trajanje zahteve: $1',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'apisb-api-disabled' => 'АПИ је онемогућен на овом сајту.',
	'apisb-legend-result' => 'Резултат',
	'apisb-legend-generic-parameters' => 'Општи параметри',
	'apisb-legend-generator-parameters' => 'Стварач',
	'apisb-result-request-url' => 'Адреса захтева:',
	'apisb-result-request-post' => 'POST подаци:',
	'apisb-select-action' => 'Изаберите радњу',
	'apisb-select-query' => '(изаберите упит)',
	'apisb-select-value' => '(изаберите вредност)',
	'apisb-loading' => 'Учитавам…',
	'apisb-load-error' => 'Грешка при учитавању описа АПИ-ја',
	'apisb-request-error' => 'Грешка при извршавању захтева од АПИ-ја',
	'apisb-namespaces-error' => 'Грешка при учитавању именских простора',
	'apisb-ns-main' => '(главно)',
	'apisb-submit' => 'Постави захтев',
	'apisb-query-prop' => 'Својства',
	'apisb-query-list' => 'Спискови',
	'apisb-query-meta' => 'Метаподаци',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 */
$messages['sr-el'] = array(
	'apisb-api-disabled' => 'API je onemogućen na ovom sajtu.',
	'apisb-legend-result' => 'Rezultat',
	'apisb-legend-generic-parameters' => 'Opšti parametri',
	'apisb-legend-generator-parameters' => 'Stvarač',
	'apisb-result-request-url' => 'Adresa zahteva:',
	'apisb-result-request-post' => 'POST podaci:',
	'apisb-select-action' => 'Izaberite radnju',
	'apisb-select-query' => '(izaberite upit)',
	'apisb-select-value' => '(izaberite vrednost)',
	'apisb-loading' => 'Učitavam…',
	'apisb-load-error' => 'Greška pri učitavanju opisa API-ja',
	'apisb-request-error' => 'Greška pri izvršavanju zahteva od API-ja',
	'apisb-namespaces-error' => 'Greška pri učitavanju imenskih prostora',
	'apisb-ns-main' => '(glavno)',
	'apisb-submit' => 'Postavi zahtev',
	'apisb-query-prop' => 'Svojstva',
	'apisb-query-list' => 'Spiskovi',
	'apisb-query-meta' => 'Metapodaci',
);

/** Swedish (svenska)
 * @author Ainali
 * @author Lokal Profil
 * @author Skalman
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'apisb-desc' => 'Gör det möjligt att felsöka [//www.mediawiki.org/wiki/API MediaWiki API]-samtal från webbläsaren',
	'apisandbox' => 'API-sandlåda',
	'apisb-no-js' => "'''Fel''': Denna funktion kräver JavaScript.",
	'apisb-intro' => "Använd den här sidan för att experimentera med '''MediaWiki web service API:et'' \".
Använd [//www.mediawiki.org/wiki/API:Main_page API dokumentationen] för mer information om API-användningen.  Exempel: [//www.mediawiki.org/wiki/API#A_simple_example få innehållet från en huvusida].  Välj en åtgärd för att se fler exempel.",
	'apisb-api-disabled' => 'API är inaktiverat på denna webbplats.',
	'apisb-legend-parameters' => 'Parametrar',
	'apisb-legend-result' => 'Resultat',
	'apisb-legend-generic-parameters' => 'Generiska parametrar',
	'apisb-legend-generator-parameters' => 'Generator',
	'apisb-result-request-url' => 'Begär URL:',
	'apisb-result-request-post' => 'POST-data:',
	'apisb-label-format' => 'Format',
	'apisb-label-action' => 'Åtgärd',
	'apisb-label-doc' => 'Dokumentation',
	'apisb-select-action' => 'Välj handling',
	'apisb-select-query' => '(välj begäran)',
	'apisb-select-value' => '(välj värde)',
	'apisb-docs-more' => 'läs mer',
	'apisb-params-param' => 'Parametrar',
	'apisb-params-input' => 'Indata',
	'apisb-params-desc' => 'Beskrivning',
	'apisb-loading' => 'Läser in...',
	'apisb-load-error' => 'Fel uppstod när API-beskrivningen skulle läsas in',
	'apisb-request-error' => 'Fel uppstod när API skulle begäras',
	'apisb-namespaces-error' => 'Fel uppstod när namnrymden skulle läsas in',
	'apisb-ns-main' => '(Huvud)',
	'apisb-submit' => 'Gör en begäran',
	'apisb-query-prop' => 'Egenskaper',
	'apisb-query-list' => 'Listor',
	'apisb-query-meta' => 'Metainformation',
	'apisb-example' => 'Exempel',
	'apisb-examples' => 'Exempel',
	'apisb-clear' => 'Rensa',
	'apisb-request-time' => 'Tid för begäran: $1',
);

/** Swahili (Kiswahili)
 * @author Kwisha
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'apisb-desc' => 'Imakubali kueua [//www.mediawiki.org/wiki/API MediaWiki API] kutoka kwa kivinjari.',
	'apisb-legend-result' => 'Tokeo',
	'apisb-label-action' => 'Tendo',
	'apisb-docs-more' => 'soma zaidi',
	'apisb-params-param' => 'Kigezo',
	'apisb-params-input' => 'Mchango',
	'apisb-params-desc' => 'Maelezo',
	'apisb-loading' => 'Inapakiwa...',
	'apisb-submit' => 'Weka ombi',
	'apisb-query-prop' => 'Sifa',
	'apisb-query-list' => 'Orodha',
	'apisb-query-meta' => 'Taarifa ya meta',
	'apisb-example' => 'Mfano',
	'apisb-examples' => 'Mifano',
	'apisb-clear' => 'Tandua',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author Shanmugamp7
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'apisandbox' => 'API மணற்தொட்டி',
	'apisb-no-js' => "'''பிழை''': இதற்கு ஜாவாஸ்கிரிப்டு வேண்டும்.",
	'apisb-api-disabled' => 'இத் தளத்தில் API செயலிழக்கம் செய்யப்பட்டுள்ளது.',
	'apisb-legend-parameters' => 'அளபுருக்கள்',
	'apisb-legend-result' => 'முடிவு',
	'apisb-legend-generic-parameters' => 'பொதுவானஅளவுருக்கள்',
	'apisb-label-format' => 'வடிவமைப்பு',
	'apisb-label-action' => 'செயல்',
	'apisb-label-doc' => 'ஆவணப்படுத்துதல்',
	'apisb-select-action' => '(செயலைத் தெரியவும்)',
	'apisb-select-query' => '(வினவலைத் தெரியவும்)',
	'apisb-select-value' => '(பெறுமானத்தைத் தெரியவும்)',
	'apisb-docs-more' => 'மேலும் படிக்க',
	'apisb-params-param' => 'அளபுரு',
	'apisb-params-input' => 'உள்ளீடு',
	'apisb-params-desc' => 'விவரம்',
	'apisb-loading' => 'ஏற்றுகிறது...',
	'apisb-namespaces-error' => 'பெயர்வெளிகளை இறக்குவதில் பிழை',
	'apisb-ns-main' => '(முதன்மை)',
	'apisb-submit' => 'கோரிக்கை செய்',
	'apisb-query-prop' => 'பண்புகள்',
	'apisb-query-list' => 'பட்டியல்கள்',
	'apisb-query-meta' => 'Meta தகவல்',
	'apisb-example' => 'உதாரணம்',
	'apisb-examples' => 'உதாரணங்கள்',
	'apisb-clear' => 'வெறுமையாக்கு',
	'apisb-request-time' => 'வேண்டுகோள் நேரம்: $1',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'apisb-legend-parameters' => 'పరామితులు',
	'apisb-legend-result' => 'ఫలితం',
	'apisb-label-action' => 'చర్య',
	'apisb-select-action' => 'చర్యను ఎంచుకోండి',
	'apisb-select-value' => '(విలువని ఎంచుకోండి)',
	'apisb-docs-more' => 'మరింత చదవండి',
	'apisb-params-param' => 'పరామితి',
	'apisb-params-desc' => 'వివరణ',
	'apisb-loading' => 'లోడవుతోంది...',
	'apisb-ns-main' => '(మొదటి)',
	'apisb-query-list' => 'జాబితాలు',
	'apisb-query-meta' => 'మెటా సమాచారం',
	'apisb-example' => 'ఉదాహరణ',
	'apisb-examples' => 'ఉదాహరణలు',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'apisb-desc' => 'Nagpapahintulot ng pagkumpuni ng mga pagtawag ng [//www.mediawiki.org/wiki/API MediaWiki API] mula sa pantingin-tingin',
	'apisandbox' => 'Kahong buhanginan ng API',
	'apisb-no-js' => "'''Kamalian''': nangangailangan ng JavaScript ang tampok na ito.",
	'apisb-intro' => "Gamitin ang pahinang ito upang mag-eksperimento sa pamamagitan ng '''Paglilingkod na pangsangkasaputan ng API ng MediaWiki'''.
Sumangguni sa [//www.mediawiki.org/wiki/API:Main_page dokumentasyon ng API] para sa karagdagan pang mga detalye sa paggamit ng API. Halimbawa: [//www.mediawiki.org/wiki/API#A_simple_example kuhanin ang nilalaman ng isang Pangunahing Pahina]. Pumili ng isang galaw upang makakita ng mas marami pang mga halimbawa.",
	'apisb-api-disabled' => 'Hindi pinagagana ang API sa sityong ito.',
	'apisb-legend-parameters' => 'Mga parametro',
	'apisb-legend-result' => 'Kinalabasan',
	'apisb-legend-generic-parameters' => 'Mga parametrong panlahat',
	'apisb-legend-generator-parameters' => 'Panlikha',
	'apisb-result-request-url' => 'Hilingin ang URL:',
	'apisb-result-request-post' => 'Dato ng POST:',
	'apisb-label-format' => 'Anyo',
	'apisb-label-action' => 'Galaw',
	'apisb-label-doc' => 'Kasulatan',
	'apisb-select-action' => 'Piliin ang kilos',
	'apisb-select-query' => '(piliin ang itatanong)',
	'apisb-select-value' => '(piliin ang halaga)',
	'apisb-docs-more' => 'magbasa pa ng iba',
	'apisb-params-param' => 'Parametro',
	'apisb-params-input' => 'Pampasok',
	'apisb-params-desc' => 'Paglalarawan',
	'apisb-loading' => 'Ikinakarga...',
	'apisb-load-error' => 'Kamalian sa pagkakarga ng paglalarawan ng API',
	'apisb-request-error' => 'Kamalian sa pagsasagawa ng hiling ng API',
	'apisb-namespaces-error' => 'Kamalian sa pagkakarga ng mga puwang ng pangalan',
	'apisb-ns-main' => '(Pangunahin)',
	'apisb-submit' => 'Gumawa ng kahilingan',
	'apisb-query-prop' => 'Mga katangiang-ari',
	'apisb-query-list' => 'Mga talaan',
	'apisb-query-meta' => 'Kabatirang meta',
	'apisb-example' => 'Halimbawa',
	'apisb-examples' => 'Mga halimbawa',
	'apisb-clear' => 'Hawiin',
	'apisb-request-time' => 'Oras ng paghiling: $1',
);

/** Turkish (Türkçe)
 * @author Emperyan
 * @author Incelemeelemani
 * @author Karduelis
 */
$messages['tr'] = array(
	'apisb-legend-parameters' => 'Parametreler',
	'apisb-legend-result' => 'Sonuç',
	'apisb-legend-generic-parameters' => 'Genel parametreler',
	'apisb-docs-more' => 'devamı',
	'apisb-params-param' => 'Parametre',
	'apisb-params-desc' => 'Tanım',
	'apisb-loading' => 'Yükleniyor...',
	'apisb-load-error' => 'API tanımı yüklenirken hata oluştu',
	'apisb-ns-main' => '(Ana)',
	'apisb-query-prop' => 'Özellikler',
	'apisb-query-list' => 'Listeler',
	'apisb-query-meta' => 'Meta bilgi',
	'apisb-example' => 'Örnek',
	'apisb-examples' => 'Örnekler',
	'apisb-clear' => 'Temizle',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Arlin
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'apisb-desc' => 'توركۆرگۈدىن [//www.mediawiki.org/wiki/API MediaWiki API] سازلاشنى چاقىرىشقا يول قويىدۇ',
	'apisandbox' => 'API قۇم ساندۇقى',
	'apisb-no-js' => "'''خاتا''': بۇ ئىقتىدار JavaScript نى تەلەپ قىلىدۇ",
	'apisb-intro' => "بۇ بەت ئارقىلىق '''MediaWiki تور مۇلازىمىتى ئەپ ئېغىزى (API)نى سىناڭ'''.
بۇ API نى ئىشلىتىشنىڭ تەپسىلاتىنى بىلمەكچى بولسىڭىز [//www.mediawiki.org/wiki/API:Main_page the API قوللانمىسى]نى كۆرۈڭ. مەسىلەن: [//www.mediawiki.org/wiki/API#A_simple_example مەلۇم ئاساسىي بەتنىڭ مەزمۇنىغا ئېرىشىش]، ئاندىن بىر مەشغۇلاتنى تاللاپ تېخىمۇ كۆپ ئۈلگە مىسالنى كۆرۈڭ.",
	'apisb-api-disabled' => 'مەزكۇر بېكەتتە API چەكلەندى.',
	'apisb-legend-parameters' => 'پارامېتىر',
	'apisb-legend-result' => 'نەتىجە',
	'apisb-legend-generic-parameters' => 'ئۇنىۋېرسال پارامېتىرلار',
	'apisb-legend-generator-parameters' => 'ھاسىللىغۇچ',
	'apisb-result-request-url' => 'تەلەپ قىلغان URL:',
	'apisb-result-request-post' => 'POST سانلىق مەلۇمات:',
	'apisb-label-format' => 'پىچىم',
	'apisb-label-action' => 'مەشغۇلات',
	'apisb-label-doc' => 'قوللانمىلار',
	'apisb-select-action' => '(مەشغۇلاتنى تاللاڭ)',
	'apisb-select-query' => '(سۈرۈشتۈرۈشنى تاللاڭ)',
	'apisb-select-value' => '(قىممەتنى تاللاڭ)',
	'apisb-docs-more' => 'داۋاملىق',
	'apisb-params-param' => 'پارامېتىر',
	'apisb-params-input' => 'كىرگۈز',
	'apisb-params-desc' => 'چۈشەندۈرۈش',
	'apisb-loading' => 'يۈكلەۋاتىدۇ…',
	'apisb-load-error' => 'API چۈشەندۈرۈشنى يۈكلەشتە خاتالىق كۆرۈلدى.',
	'apisb-request-error' => 'API ئىلتىماس ئىجرا قىلىش جەريانىدا خاتالىق كۆرۈلدى',
	'apisb-namespaces-error' => 'ئىسىم بوشلۇق يۈكلەش خاتا',
	'apisb-ns-main' => '(ئاساسىي)',
	'apisb-submit' => 'ئىلتىماس يوللا',
	'apisb-query-prop' => 'خاسلىق',
	'apisb-query-list' => 'تىزىملار',
	'apisb-query-meta' => 'بەت ئۇچۇر',
	'apisb-example' => 'مىسال',
	'apisb-examples' => 'مىساللار',
	'apisb-clear' => 'تازىلا',
	'apisb-request-time' => 'ئىلتىماس ۋاقتى: $1',
);

/** Ukrainian (українська)
 * @author AS
 * @author Base
 * @author Microcell
 * @author Sodmy
 * @author Тест
 */
$messages['uk'] = array(
	'apisb-desc' => 'Дозволяє налагоджувати виклики [//www.mediawiki.org/wiki/API MediaWiki API] з браузера',
	'apisandbox' => 'Майданчик для тестування API',
	'apisb-no-js' => "'''Помилка''': ця функція вимагає JavaScript.",
	'apisb-intro' => "Ця сторінка служить для експериментування з '''MediaWiki API'''.
Звертайтеся до [//www.mediawiki.org/wiki/API:Main_page документації] для докладнішої інформації про використання API.  Наприклад: [//www.mediawiki.org/wiki/API#A_simple_example як отримати вміст головної сторінки].  Виберіть дію, щоб побачити більше прикладів.",
	'apisb-api-disabled' => 'API вимкнуто на цьому сайті.',
	'apisb-legend-parameters' => 'Параметри',
	'apisb-legend-result' => 'Результат',
	'apisb-legend-generic-parameters' => 'Загальні параметри',
	'apisb-legend-generator-parameters' => 'Генератор',
	'apisb-result-request-url' => 'URL-адреса запиту:',
	'apisb-result-request-post' => 'POST-дані:',
	'apisb-label-format' => 'Формат',
	'apisb-label-action' => 'Дія',
	'apisb-label-doc' => 'Документація',
	'apisb-select-action' => 'Виберіть дію',
	'apisb-select-query' => '(виберіть запит)',
	'apisb-select-value' => '(виберіть значення)',
	'apisb-docs-more' => 'Детальніше',
	'apisb-params-param' => 'Параметр',
	'apisb-params-input' => 'Введення',
	'apisb-params-desc' => 'Опис',
	'apisb-loading' => 'Завантаження…',
	'apisb-load-error' => 'Помилка завантаження API опису',
	'apisb-request-error' => 'Помилка виконання запиту API',
	'apisb-namespaces-error' => 'Помилка завантаження простору імен',
	'apisb-ns-main' => '(Основний)',
	'apisb-submit' => 'Зробити запит',
	'apisb-query-prop' => 'Властивості',
	'apisb-query-list' => 'Списки',
	'apisb-query-meta' => 'Мета-інформація',
	'apisb-example' => 'Приклад',
	'apisb-examples' => 'Приклади',
	'apisb-clear' => 'Очистити',
	'apisb-request-time' => 'Час запиту $1',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'apisb-legend-parameters' => 'پیرامیٹرز',
	'apisb-legend-result' => 'نتیجہ',
	'apisb-legend-generic-parameters' => 'عام پیرامیٹر',
	'apisb-label-action' => 'کارروائی',
	'apisb-docs-more' => 'مزید پڑھیں',
	'apisb-params-desc' => 'تفصیل',
	'apisb-ns-main' => '(اہم)',
	'apisb-submit' => 'بنانے کی درخواست',
	'apisb-query-prop' => 'کی خصوصیات',
	'apisb-example' => 'مثال کے طور پر',
	'apisb-examples' => 'مثال کے طور',
	'apisb-clear' => 'واضح',
);

/** Veps (vepsän kel’)
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'apisb-legend-result' => "Rezul'tat",
	'apisb-query-prop' => 'Ičendad',
	'apisb-query-list' => 'Nimikirjutesed',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Trần Nguyễn Minh Huy
 */
$messages['vi'] = array(
	'apisb-desc' => 'Cho phép gỡ lỗi các lần gọi [//www.mediawiki.org/wiki/API API của MediaWiki] trong trình duyệt',
	'apisandbox' => 'Chỗ thử API',
	'apisb-no-js' => "'''Lỗi:''' Tính năng này cần JavaScript.",
	'apisb-intro' => "Trang này dùng để thử nghiệm với '''API dịch vụ Web của MediaWiki'''.
	Hãy tra cứu [//www.mediawiki.org/wiki/API:Main_page tài liệu API] để biết chi tiết về cách sử dụng API. Ví dụ: [//www.mediawiki.org/wiki/API#A_simple_example lấy nội dung của Trang Chính]. Chọn một tác vụ để xem thêm ví dụ.",
	'apisb-api-disabled' => 'API đã bị vô hiệu hóa trên trang web này.',
	'apisb-legend-parameters' => 'Tham số',
	'apisb-legend-result' => 'Kết quả',
	'apisb-legend-generic-parameters' => 'Tham số chung',
	'apisb-legend-generator-parameters' => 'Bộ xuất phát',
	'apisb-result-request-url' => 'URL của yêu cầu:',
	'apisb-result-request-post' => 'Dữ liệu POST:',
	'apisb-label-format' => 'Định dạng',
	'apisb-label-action' => 'Tác vụ',
	'apisb-label-doc' => 'Tài liệu',
	'apisb-select-action' => 'Chọn tác vụ',
	'apisb-select-query' => '(chọn truy vấn)',
	'apisb-select-value' => '(chọn giá trị)',
	'apisb-docs-more' => 'xem tiếp',
	'apisb-params-param' => 'Tham số',
	'apisb-params-input' => 'Đầu vào',
	'apisb-params-desc' => 'Miêu tả',
	'apisb-loading' => 'Đang tải…',
	'apisb-load-error' => 'Lỗi khi tải miêu tả API',
	'apisb-request-error' => 'Lỗi khi phản ứng yêu cầu API',
	'apisb-namespaces-error' => 'Lỗi khi tải các không gian tên',
	'apisb-ns-main' => '(Chính)',
	'apisb-submit' => 'Yêu cầu',
	'apisb-query-prop' => 'Thuộc tính',
	'apisb-query-list' => 'Danh sách',
	'apisb-query-meta' => 'Siêu thông tin',
	'apisb-example' => 'Ví dụ',
	'apisb-examples' => 'Ví dụ',
	'apisb-clear' => 'Tẩy trống',
	'apisb-request-time' => 'Thời gian xử lý: $1',
);

/** Yiddish (ייִדיש)
 * @author Imre
 * @author පසිඳු කාවින්ද
 */
$messages['yi'] = array(
	'apisb-legend-result' => 'רעזולטאט',
	'apisb-label-format' => 'פֿאָרמאַט',
	'apisb-label-action' => 'אַקציע',
	'apisb-params-desc' => 'באַשרײַבונג',
	'apisb-loading' => 'לאָדט…',
	'apisb-ns-main' => '(הויפט)',
	'apisb-query-list' => 'ליסטעס',
	'apisb-clear' => 'רייניקן',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Anakmalaysia
 * @author Hydra
 * @author Hzy980512
 * @author Liangent
 * @author Linforest
 * @author PhiLiP
 * @author Shizhao
 * @author Xiaomingyan
 */
$messages['zh-hans'] = array(
	'apisb-desc' => '允许从浏览器调试[//www.mediawiki.org/wiki/API MediaWiki API]调用',
	'apisandbox' => 'API沙盒',
	'apisb-no-js' => "'''错误'''：此功能需要 JavaScript。",
	'apisb-intro' => '使用这个页面来试验“MediaWiki Web 服务应用程序接口（API）”。
欲知API使用详情，请参阅[//www.mediawiki.org/wiki/API:Main_page API文档]。
例如：[//www.mediawiki.org/wiki/API#A_simple_example 取得某个主页的内容]，然后选择一个操作来看更多范例。',
	'apisb-api-disabled' => '此站点上禁用了API。',
	'apisb-legend-parameters' => '参数',
	'apisb-legend-result' => '结果',
	'apisb-legend-generic-parameters' => '通用参数',
	'apisb-legend-generator-parameters' => '生成器',
	'apisb-result-request-url' => '请求的URL：',
	'apisb-result-request-post' => 'POST数据：',
	'apisb-label-format' => '格式',
	'apisb-label-action' => '操作',
	'apisb-label-doc' => '文档',
	'apisb-select-action' => '选择操作',
	'apisb-select-query' => '（请选择查询）',
	'apisb-select-value' => '（选择值）',
	'apisb-docs-more' => '阅读更多',
	'apisb-params-param' => '参数',
	'apisb-params-input' => '输入',
	'apisb-params-desc' => '说明',
	'apisb-loading' => '正在载入...',
	'apisb-load-error' => '加载 API 说明时出错',
	'apisb-request-error' => '执行 API 请求时出错',
	'apisb-namespaces-error' => '载入名字空间出错',
	'apisb-ns-main' => '（主）',
	'apisb-submit' => '提交请求',
	'apisb-query-prop' => '属性',
	'apisb-query-list' => '列表',
	'apisb-query-meta' => 'Meta 信息',
	'apisb-example' => '示例',
	'apisb-examples' => '示例',
	'apisb-clear' => '清除',
	'apisb-request-time' => '请求时间：$1',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Anakmalaysia
 * @author Liangent
 * @author Oapbtommy
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'apisb-desc' => '允許從瀏覽器調試[//www.mediawiki.org/wiki/API MediaWiki API]調用',
	'apisandbox' => 'API沙箱',
	'apisb-no-js' => "'''錯誤'''：此功能需要 JavaScript。",
	'apisb-intro' => '使用這個頁面來試驗“MediaWiki 網上服務應用程式介面（API）”。
欲知API使用詳情，請參閱[//www.mediawiki.org/wiki/API:Main_page API文檔]。
例如：[//www.mediawiki.org/wiki/API#A_simple_example 取得某個主頁的內容]，然後選擇一個操作來看更多範例。',
	'apisb-api-disabled' => '此站點上禁用了API。',
	'apisb-legend-parameters' => '參數',
	'apisb-legend-result' => '結果',
	'apisb-legend-generic-parameters' => '通用參數',
	'apisb-legend-generator-parameters' => '生成器',
	'apisb-result-request-url' => '請求的 URL：',
	'apisb-result-request-post' => 'POST數據：',
	'apisb-label-format' => '格式',
	'apisb-label-action' => '操作',
	'apisb-label-doc' => '說明',
	'apisb-select-action' => '（選擇動作）',
	'apisb-select-query' => '（請選擇查詢）',
	'apisb-select-value' => '（選擇值）',
	'apisb-docs-more' => '閱讀更多',
	'apisb-params-param' => '參數',
	'apisb-params-input' => '輸入',
	'apisb-params-desc' => '說明',
	'apisb-loading' => '正在載入...',
	'apisb-load-error' => '加載 API 說明時出錯',
	'apisb-request-error' => '執行 API 請求時出錯',
	'apisb-namespaces-error' => '載入名字空間出錯',
	'apisb-ns-main' => '（主）',
	'apisb-submit' => '提出要求',
	'apisb-query-prop' => '屬性',
	'apisb-query-list' => '列表',
	'apisb-query-meta' => 'Meta 信息',
	'apisb-example' => '示例',
	'apisb-examples' => '示例',
	'apisb-clear' => '清除',
	'apisb-request-time' => '請求時間：$1',
);
