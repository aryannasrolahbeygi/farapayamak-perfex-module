# farapayamak-perfex-module
This module is designed for sending SMS messages through the Perfex CRM script using the Farapayamak SMS service.
<br>
این ماژول برای ارسال پیامک‌های اسکریپت مدیریت ارتباط با مشتری پرفکس با استفاده از سامانه پیامکی فراپیامک ساخته شده است.
# Step 1:
ابتدا به مسیر زیر بروید:
application/helpers
فایل sms_helper.php را باز کنید.
تابع function app_init_sms_gateways() را پیدا کنید.
عبارت 'sms/sms_farapayamak' را به $gateways تابع اضافه کنید.
توجه داشته باشید اگر 'sms/sms_farapayamak' را به آخر استفاده میکنید در انتهای خط قبلی حتما علامت ',' را بگذارید.

مقدار $gateways قبل از اعمال تغییرات:
    $gateways = [
        'sms/sms_clickatell',
        'sms/sms_msg91',
        'sms/sms_twilio'
    ];

مقدار $gateways بعد از اعمال تغییرات:
    $gateways = [
        'sms/sms_clickatell',
        'sms/sms_msg91',
        'sms/sms_twilio',
        'sms/sms_farapayamak'
    ];
