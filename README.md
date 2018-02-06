# Magento 2 Hide Price Not Login

This Extension is used for hide price at category and product detail when user not login, included setting at configuration for enable or disable when and setting default wording

## Features:

### Frontend
- hide final price at category
- hide final price at product detail

### Backend
- configuration for enable and disable extension
- setting default wording

## Introduction installation:

### Install Magento 2 Hide Price Not Login
- Download file
- Unzip the file
- Create a folder [root]/app/code/Dangs/Hideprice
- Copy to folder

### Enable Extension

```
php bin/magento module:enable Dangs_Hideprice
php bin/magento setup:upgrade
php bin/magento cache:clean
php bin/magento setup:static-content:deploy
```


## Screenshot
![ScreenShot](https://github.com/dsasmita/magento2-hide-price-not-login/blob/master/File/category.png)
![ScreenShot](https://github.com/dsasmita/magento2-hide-price-not-login/blob/master/File/configuration.png)

## Donation
If you find this extension help you,  feel free to donate
:)

[![](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](http://bit.ly/2nFWFZI)
