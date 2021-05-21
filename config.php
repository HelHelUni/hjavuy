<?php

define('LANDING_DIR', '');

$apiKey = '';          // Ключ доступа к API
$offer_id = 6567;         // для каждого оффера свой айди, надо уточнять его в админке или у суппортов
$stream_hid = '';     // id потока
$landKey = 'e26aa01b853dce98e301dfb0546ecc39';

$default_main_site = 'http://api.cpa.tl';
$apiSendLeadUrl = 'http://api.cpa.tl/api/lead/send_archive';
$apiGetLeadUrl = 'http://api.cpa.tl/api/lead/feed';

$dataOffers = '{"25024":{"id":25024,"name":"Cellulite Massage","country":{"code":"HU","name":"\u0412\u0435\u043d\u0433\u0440\u0438\u044f"},"price":"12900","price2":"25800","currency":{"code":"HUF","name":"Ft"}},"25025":{"id":25025,"name":"Cellulite Massage","country":{"code":"IT","name":"\u0418\u0442\u0430\u043b\u0438\u044f"},"price":"49","price2":"98","currency":{"code":"EUR","name":"\u20ac"}},"25026":{"id":25026,"name":"Cellulite Massage","country":{"code":"SK","name":"\u0421\u043b\u043e\u0432\u0430\u043a\u0438\u044f"},"price":"39","price2":"78","currency":{"code":"EUR","name":"\u20ac"}},"25027":{"id":25027,"name":"Cellulite Massage","country":{"code":"CZ","name":"\u0427\u0435\u0445\u0438\u044f"},"price":"990","price2":"1980","currency":{"code":"CZK","name":"K\u010d"}},"25028":{"id":25028,"name":"Cellulite Massage","country":{"code":"BG","name":"\u0411\u043e\u043b\u0433\u0430\u0440\u0438\u044f"},"price":"79","price2":"158","currency":{"code":"BGN","name":"\u043b\u0435\u0432"}},"25030":{"id":25030,"name":"Cellulite Massage","country":{"code":"RO","name":"\u0420\u0443\u043c\u044b\u043d\u0438\u044f"},"price":"189","price2":"378","currency":{"code":"RON","name":"RON"}}}';
$dataOffer = '{"id":25027,"name":"Cellulite Massage","country":{"code":"CZ","name":"\u0427\u0435\u0445\u0438\u044f"},"price":"990","price2":"1980","currency":{"code":"CZK","name":"K\u010d"}}';
$is_geo_detect = '';
$productName = 'Cellulite Massage';
$invoice = 'index.php';
$push_link = '';
$language = 'cz';
$companyInfo = array('address' => '620024, Свердловская область, г. Екатеринбург, ул. Бисертская, д. 4А, помещ. 2', 'detail' => 'ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "ТЭКС-ТОРГ" ОГРН: 1206600061205 ИНН: 6679137567 КПП: 667901001');
$companyInfoEN = array('address' => '129090, Moscow, pereulok Zhivarev, house 8, stroenie 3, flat 16 email: ostrov.prodazh@mail.com Skype: ostrov.prodazh@mail.com', 'detail' => 'OOO "OSTROV PRODAZH" OGRN: 1197746695530 VAT: 7708365555');
$fb_verification = '';

$_debug = False; // установите True для вывода дополнительной информации для отладки и поиска ошибок
$pixels = [
    'fb_pixel', 'fb_verify', 'google_pixel', 'google_adw_pixel', 'tiktok_pixel', 'topmail_pixel', 'vk_pixel', 'yandex_metrika',
];

if(!$apiKey){
    echo 'Ключ доступа к API не определен. Получите в личном кабинете или обратитесь в службу поддержки';
    die;
}

if(!$offer_id){
    echo 'ID оффера не определен';
    die;
}
