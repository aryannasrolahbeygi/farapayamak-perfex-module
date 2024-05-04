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

# Step 2 Persian:
فایل `Sms_farapayamak.php` را در مسیر `application/libraries/sms` آپلود کنید. <br><br>
اکنون پنل مدیریتی پرفکس را باز کنید و به مسیر `تنظیمات > پیامک` بروید، در این قسمت `فراپیامک` اضافه شده. روی آن کلیک کنید و `نام کاربری` ، `رمز سامانه` و `شماره فرستنده`  که میخواهید پیامک ها با آن شماره ارسال شود را وارد کنید (مشخصات سامانه پیامکی شما)، تیک گزینه فعال را روی `بله` و دکمه `ذخیره تنظیمات` را بزنید. <br><br>
<b>نکته:</b> باتوجه به اجباری بودن درج عبارت `لغو11` در پایان پیامک‌ها، این عبارت به صورت خودکار در پایان تمام پبامک‌ها درج می‌شود و شما نیاز نیست عبارت `لغو11` را اضافه کنید. <br><br>
از این ماژول لذت ببرید!

# Step 2 English:
Upload the `Sms_farapayamak.php` file to the path `application/libraries/sms`.

Now, open the Perfex admin panel and navigate to `Settings > SMS`. In this section, 'Farapayamak' has been added. Click on it and enter the `username`, `password` for the SMS platform, and the `sender number` you want the SMS messages to be sent from (your SMS platform details). Check the 'Active' option to `Yes` and click the `Save Settings` button.
<br><br>
<b>Note</b>: Given the mandatory inclusion of the phrase `لغو11` at the end of SMS messages, this phrase is automatically appended to the end of all messages. You do not need to add `لغو11` yourself.<br><br>
Enjoy!
