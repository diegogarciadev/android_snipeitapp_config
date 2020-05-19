# Configuration file for Android Snipe-IT Scan App 

### Try Demo version on Google Play: https://bit.ly/snipeitapp_demo
### Full version https://bit.ly/snipeit_app

In order to configre yor Android app, follow this steps:

**1.** Download **snipeitapp_config.php** file and copy it to your Snipe-IT public directory, so it would be acceded as **http(s)://snipeit.yourdomain.com/snipeitapp_config.php**

**2.** Edit **snipeitapp_config.php** file and set your api key:

```
<?php
...
...

define("API_KEY", "Enter your api key here!!");

...
```

**3.** Open your app and go to: Settings > Snipe-IT server address

* Fill yor server address and press CONFIGURE APP button

If all works fine, you will see a green notification "**App configured!!**"


## HIGHLY RECOMMENDED: DELETE THE FILE snipeitapp_config.php AFTER APP CONFIGURATION
