# farapayamak-perfex-module
This module is designed for sending SMS messages through the Perfex CRM script using the Farapayamak SMS service.
<br>
این ماژول برای ارسال پیامک‌های اسکریپت مدیریت ارتباط با مشتری پرفکس با استفاده از سامانه پیامکی فراپیامک ساخته شده است.
# Step 1 Persian:
ابتدا به مسیر زیر بروید:<br>
`application/helpers`<br>
فایل `sms_helper.php` را باز کنید.<br>
تابع `function app_init_sms_gateways()` را پیدا کنید.<br>
عبارت `'sms/sms_farapayamak'` را به `$gateways` تابع اضافه کنید.<br>
توجه داشته باشید اگر `'sms/sms_farapayamak'` را به آخر استفاده میکنید در انتهای خط قبلی حتما علامت `,` را بگذارید.<br>

مقدار `$gateways` قبل از اعمال تغییرات:
```php
$gateways = [
    'sms/sms_clickatell',
    'sms/sms_msg91',
    'sms/sms_twilio'
];
```

مقدار `$gateways` بعد از اعمال تغییرات:
```php
$gateways = [
    'sms/sms_clickatell',
    'sms/sms_msg91',
    'sms/sms_twilio', //علامت `,` به اتهای خط اضافه شده است.
    'sms/sms_farapayamak'  // این خط اضافه شده است
];
```
# Step 1 English:
First, navigate to the following path: <br>
`application/helpers` <br>
Then, open the `sms_helper.php` file. <br>
Find the function called `app_init_sms_gateways()`. <br>
Add the string `'sms/sms_farapayamak'` to the `$gateways` array within the function. <br>
Note that if you are adding `'sms/sms_farapayamak'` at the end, make sure to place a comma `,` at the end of the previous line. <br>

The value of `$gateways` before the changes:
```php
$gateways = [
    'sms/sms_clickatell',
    'sms/sms_msg91',
    'sms/sms_twilio'
];
```

The value of `$gateways` after the changes:
```php
$gateways = [
    'sms/sms_clickatell',
    'sms/sms_msg91',
    'sms/sms_twilio',
    'sms/sms_farapayamak'  // Added this new line
];
```

This translation should accurately convey the instructions in English for modifying the `sms_helper.php` file. If you need any further assistance or additional details added, feel free to ask!

