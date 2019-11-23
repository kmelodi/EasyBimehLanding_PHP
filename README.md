# Getting started

EasyBimehConnect یک ساب برند از ایزی بیمه است که وظیفه ارائه خدمات B2B را برپایه API و B2B2C را بر پایه وایت لیبل بر عهده دارد. اگر اپلیکیشن و یا سایت غیر بیمه‌ای دارید و تمایل به فروش بیمه نامه دارید از امروز میتوانید با کمترین هزینه و کمترین زمان به زنجیره نوآوری در صنعت بیمه متصل شوید و تجارت جدیدی بسازید.

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=Easy%20Bimeh%20Landing-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the EasyBimehLanding library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=Easy%20Bimeh%20Landing-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=Easy%20Bimeh%20Landing-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=Easy%20Bimeh%20Landing-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=Easy%20Bimeh%20Landing-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=Easy%20Bimeh%20Landing-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=Easy%20Bimeh%20Landing-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=Easy%20Bimeh%20Landing-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=Easy%20Bimeh%20Landing-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=Easy%20Bimeh%20Landing-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=Easy%20Bimeh%20Landing-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=Easy%20Bimeh%20Landing-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=Easy%20Bimeh%20Landing-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### 

API client can be initialized as following.

```php

$client = new EasyBimehLandingLib\EasyBimehLandingClient();
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [FileManagerController](#file_manager_controller)
* [LiabilityDoctorInsuranceController](#liability_doctor_insurance_controller)
* [CarBodyController](#car_body_controller)
* [ElectronicEquipmentInsuranceController](#electronic_equipment_insurance_controller)
* [OtherInsuranceTypesController](#other_insurance_types_controller)
* [ThirdPartyInsuranceController](#third_party_insurance_controller)
* [MotorcycleInsuranceController](#motorcycle_insurance_controller)
* [FireInsuranceController](#fire_insurance_controller)
* [EarthquakeInsuranceController](#earthquake_insurance_controller)
* [TravelInsuranceController](#travel_insurance_controller)
* [ElevatorInsuranceController](#elevator_insurance_controller)
* [MainController](#main_controller)
* [ComboDataController](#combo_data_controller)
* [TrackingDamageController](#tracking_damage_controller)
* [FooterController](#footer_controller)
* [InsurancePolicyPlanController](#insurance_policy_plan_controller)

## <a name="file_manager_controller"></a>![Class: ](https://apidocs.io/img/class.png ".FileManagerController") FileManagerController

### Get singleton instance

The singleton instance of the ``` FileManagerController ``` class can be accessed from the API Client.

```php
$fileManager = $client->getFileManager();
```

### <a name="upload"></a>![Method: ](https://apidocs.io/img/method.png ".FileManagerController.upload") upload

> آپلود فایل در ایزی بیمه
> بعد از آپلود، ادرس فایل باید در api های بعدی ارسال شود.


```php
function upload(
        $subDomain,
        $xApiKey,
        $file)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subDomain |  ``` Required ```  | دامنه یا زیر دامنه ی مرکز بیمه |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |
| file |  ``` Required ```  | فایل ارسالی |



#### Example Usage

```php
$subDomain = 'hfz1';
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';
$file = 'file';

$result = $fileManager->upload($subDomain, $xApiKey, $file);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="liability_doctor_insurance_controller"></a>![Class: ](https://apidocs.io/img/class.png ".LiabilityDoctorInsuranceController") LiabilityDoctorInsuranceController

### Get singleton instance

The singleton instance of the ``` LiabilityDoctorInsuranceController ``` class can be accessed from the API Client.

```php
$liabilityDoctorInsurance = $client->getLiabilityDoctorInsurance();
```

### <a name="get_liability_doctor_insurance"></a>![Method: ](https://apidocs.io/img/method.png ".LiabilityDoctorInsuranceController.getLiabilityDoctorInsurance") getLiabilityDoctorInsurance

> در یافت اطلاعات اولیه برای استعلام بیمه مسئولیت پزشکان


```php
function getLiabilityDoctorInsurance(
        $subDomain,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subDomain |  ``` Required ```  | دامنه یا زیر دامنه ی مرکز بیمه |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$subDomain = 'hfz1';
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $liabilityDoctorInsurance->getLiabilityDoctorInsurance($subDomain, $xApiKey);

```


### <a name="get_medical_specialties"></a>![Method: ](https://apidocs.io/img/method.png ".LiabilityDoctorInsuranceController.getMedicalSpecialties") getMedicalSpecialties

> دریافت لیست تخصص های پزشکی


```php
function getMedicalSpecialties(
        $id,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | نوع تخصص => ParamedicalExpertise => پیراپزشکی MedicalExpertise => پزشکی |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$id = 'ParamedicalExpertise';
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $liabilityDoctorInsurance->getMedicalSpecialties($id, $xApiKey);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="car_body_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CarBodyController") CarBodyController

### Get singleton instance

The singleton instance of the ``` CarBodyController ``` class can be accessed from the API Client.

```php
$carBody = $client->getCarBody();
```

### <a name="get_car_brand"></a>![Method: ](https://apidocs.io/img/method.png ".CarBodyController.getCarBrand") getCarBrand

> دریافت برند خودرو


```php
function getCarBrand($xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| xApiKey |  ``` Required ```  | شناسه ی اختصاصی ارتباط با سرور |



#### Example Usage

```php
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $carBody->getCarBrand($xApiKey);

```


### <a name="get_car_brand_tips"></a>![Method: ](https://apidocs.io/img/method.png ".CarBodyController.getCarBrandTips") getCarBrandTips

> دریافت لیست تیپ خودرو


```php
function getCarBrandTips(
        $carBrandId,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| carBrandId |  ``` Required ```  | شناسه ی برند خودرو |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$carBrandId = 190;
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $carBody->getCarBrandTips($carBrandId, $xApiKey);

```


### <a name="get_has_plan"></a>![Method: ](https://apidocs.io/img/method.png ".CarBodyController.getHasPlan") getHasPlan

> آیا این نوع بیمه نامه، طرح بیمه ای دارد؟


```php
function getHasPlan(
        $subDomain,
        $insurancePolicyType,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subDomain |  ``` Required ```  | دامنه یا زیر دامنه ی مرکز بیمه |
| insurancePolicyType |  ``` Required ```  | شناسه ی نوع بیمه نامه => بیمه بدنه=2 |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$subDomain = 'hfz1';
$insurancePolicyType = 2;
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $carBody->getHasPlan($subDomain, $insurancePolicyType, $xApiKey);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="electronic_equipment_insurance_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ElectronicEquipmentInsuranceController") ElectronicEquipmentInsuranceController

### Get singleton instance

The singleton instance of the ``` ElectronicEquipmentInsuranceController ``` class can be accessed from the API Client.

```php
$electronicEquipmentInsurance = $client->getElectronicEquipmentInsurance();
```

### <a name="get_electronic_equipment_insurance"></a>![Method: ](https://apidocs.io/img/method.png ".ElectronicEquipmentInsuranceController.getElectronicEquipmentInsurance") getElectronicEquipmentInsurance

> دریافت اطلاعات اولیه استعلام بیمه نامه ی تجهیزات الکترونیک


```php
function getElectronicEquipmentInsurance(
        $subDomain,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subDomain |  ``` Required ```  | دامنه یا زیر دامنه ی مرکز بیمه |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$subDomain = 'subDomain';
$xApiKey = 'x-api-key';

$result = $electronicEquipmentInsurance->getElectronicEquipmentInsurance($subDomain, $xApiKey);

```


### <a name="get_device_brand_types"></a>![Method: ](https://apidocs.io/img/method.png ".ElectronicEquipmentInsuranceController.getDeviceBrandTypes") getDeviceBrandTypes

> دریافت لیست نوع برند دستگاه


```php
function getDeviceBrandTypes(
        $deviceGroup,
        $deviceTypeId,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| deviceGroup |  ``` Required ```  | شناسه ی گروه دستگاه |
| deviceTypeId |  ``` Required ```  | شناسه ی نوع دستگاه |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$deviceGroup = 1;
$deviceTypeId = 1;
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $electronicEquipmentInsurance->getDeviceBrandTypes($deviceGroup, $deviceTypeId, $xApiKey);

```


### <a name="get_divice_franchisee"></a>![Method: ](https://apidocs.io/img/method.png ".ElectronicEquipmentInsuranceController.getDiviceFranchisee") getDiviceFranchisee

> دریافت لیست فرانشیر استعلام بیمه نامه ی تجهیزات الکترونیک


```php
function getDiviceFranchisee(
        $deviceModelId,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| deviceModelId |  ``` Required ```  | شناسه ی مدل دستگاه |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$deviceModelId = 1340;
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $electronicEquipmentInsurance->getDiviceFranchisee($deviceModelId, $xApiKey);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="other_insurance_types_controller"></a>![Class: ](https://apidocs.io/img/class.png ".OtherInsuranceTypesController") OtherInsuranceTypesController

### Get singleton instance

The singleton instance of the ``` OtherInsuranceTypesController ``` class can be accessed from the API Client.

```php
$otherInsuranceTypes = $client->getOtherInsuranceTypes();
```

### <a name="get_other_insurance_types"></a>![Method: ](https://apidocs.io/img/method.png ".OtherInsuranceTypesController.getOtherInsuranceTypes") getOtherInsuranceTypes

> دریافت لیست سایر بیمه نامه ها


```php
function getOtherInsuranceTypes(
        $subDomain,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subDomain |  ``` Required ```  | دامنه یا زیر دامنه ی مرکز بیمه |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$subDomain = 'hfz1';
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $otherInsuranceTypes->getOtherInsuranceTypes($subDomain, $xApiKey);

```


### <a name="get_send_sms_token"></a>![Method: ](https://apidocs.io/img/method.png ".OtherInsuranceTypesController.getSendSmsToken") getSendSmsToken

> ارسال توکن تایید شماره تماس، برای احراز هویت کاربر


```php
function getSendSmsToken(
        $mobile,
        $insuranceCentreSubDomain,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| mobile |  ``` Required ```  | شماره موبایل |
| insuranceCentreSubDomain |  ``` Required ```  | دامنه یا زیردامنه ی مرکز بیمه |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$mobile = '09018318086';
$insuranceCentreSubDomain = 'hfz1';
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $otherInsuranceTypes->getSendSmsToken($mobile, $insuranceCentreSubDomain, $xApiKey);

```


### <a name="get_verify_sms_token"></a>![Method: ](https://apidocs.io/img/method.png ".OtherInsuranceTypesController.getVerifySmsToken") getVerifySmsToken

> تایید توکن پیامک شده به کاربر، برای احراز هویت


```php
function getVerifySmsToken(
        $mobile,
        $token,
        $insuranceCentreSubDomain,
        $aliasName,
        $resource,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| mobile |  ``` Required ```  | شماره موبایل |
| token |  ``` Required ```  | توکن دریافتی کاربر از پیامک |
| insuranceCentreSubDomain |  ``` Required ```  | دامنه یا زیر دامنه ی اختصاصی مرکز بیمه |
| aliasName |  ``` Required ```  | نام و نام خانوادگی کاربر |
| resource |  ``` Required ```  | دامنه ی درخواست دهنده |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$mobile = '09018318086';
$token = 27763;
$insuranceCentreSubDomain = 'hfz1';
$aliasName = 'علی موسوی';
$resource = 'https://hfz1.easybimeh.com';
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $otherInsuranceTypes->getVerifySmsToken($mobile, $token, $insuranceCentreSubDomain, $aliasName, $resource, $xApiKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Bad Request |



[Back to List of Controllers](#list_of_controllers)

## <a name="third_party_insurance_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ThirdPartyInsuranceController") ThirdPartyInsuranceController

### Get singleton instance

The singleton instance of the ``` ThirdPartyInsuranceController ``` class can be accessed from the API Client.

```php
$thirdPartyInsurance = $client->getThirdPartyInsurance();
```

### <a name="get_car_brands"></a>![Method: ](https://apidocs.io/img/method.png ".ThirdPartyInsuranceController.getCarBrands") getCarBrands

> دریافت لیست برند خودرو ها


```php
function getCarBrands(
        $carTypeGroup,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| carTypeGroup |  ``` Required ```  | شناسه ی گروه خودرو |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$carTypeGroup = 1;
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $thirdPartyInsurance->getCarBrands($carTypeGroup, $xApiKey);

```


### <a name="get_risk_level"></a>![Method: ](https://apidocs.io/img/method.png ".ThirdPartyInsuranceController.getRiskLevel") getRiskLevel

> دریافت لیست تخفیف های بیمه


```php
function getRiskLevel(
        $insurancePolicyType,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| insurancePolicyType |  ``` Required ```  | شناسه ی نوع بیمه نامه |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$insurancePolicyType = 0;
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $thirdPartyInsurance->getRiskLevel($insurancePolicyType, $xApiKey);

```


### <a name="get_car_brand_tips"></a>![Method: ](https://apidocs.io/img/method.png ".ThirdPartyInsuranceController.getCarBrandTips") getCarBrandTips

> دریافت لیست تیپ خودرو


```php
function getCarBrandTips(
        $carBrandId,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| carBrandId |  ``` Required ```  | شناسه ی برند خودرو |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$carBrandId = 190;
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $thirdPartyInsurance->getCarBrandTips($carBrandId, $xApiKey);

```


### <a name="get_car_uses"></a>![Method: ](https://apidocs.io/img/method.png ".ThirdPartyInsuranceController.getCarUses") getCarUses

> دریافت لیست نوع کاربری خودرو


```php
function getCarUses(
        $carTypeId,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| carTypeId |  ``` Required ```  | شناسه ی نوع خودرو |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$carTypeId = 103;
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $thirdPartyInsurance->getCarUses($carTypeId, $xApiKey);

```


### <a name="get_has_plan"></a>![Method: ](https://apidocs.io/img/method.png ".ThirdPartyInsuranceController.getHasPlan") getHasPlan

> آیا این نوع بیمه نامه، طرح بیمه ای دارد؟


```php
function getHasPlan(
        $subDomain,
        $insurancePolicyType,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subDomain |  ``` Required ```  | دامنه یا زیر دامنه ی مرکز بیمه |
| insurancePolicyType |  ``` Required ```  | شناسه ی نوع بیمه |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$subDomain = 'hfz1';
$insurancePolicyType = 0;
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $thirdPartyInsurance->getHasPlan($subDomain, $insurancePolicyType, $xApiKey);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="motorcycle_insurance_controller"></a>![Class: ](https://apidocs.io/img/class.png ".MotorcycleInsuranceController") MotorcycleInsuranceController

### Get singleton instance

The singleton instance of the ``` MotorcycleInsuranceController ``` class can be accessed from the API Client.

```php
$motorcycleInsurance = $client->getMotorcycleInsurance();
```

### <a name="get_car_brands"></a>![Method: ](https://apidocs.io/img/method.png ".MotorcycleInsuranceController.getCarBrands") getCarBrands

> دریافت لیست برند موتور سیکلت


```php
function getCarBrands(
        $carTypeGroup,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| carTypeGroup |  ``` Required ```  | شناسه ی گروه خودرویی، موتور سیکلت =>0 |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$carTypeGroup = 0;
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $motorcycleInsurance->getCarBrands($carTypeGroup, $xApiKey);

```


### <a name="get_car_brand_tips"></a>![Method: ](https://apidocs.io/img/method.png ".MotorcycleInsuranceController.getCarBrandTips") getCarBrandTips

> دریافت لیست تیپ موتور سیکلت


```php
function getCarBrandTips(
        $carBrandId,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| carBrandId |  ``` Required ```  | شناسه ی برند موتور سیکلت |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$carBrandId = 472;
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $motorcycleInsurance->getCarBrandTips($carBrandId, $xApiKey);

```


### <a name="get_has_plan"></a>![Method: ](https://apidocs.io/img/method.png ".MotorcycleInsuranceController.getHasPlan") getHasPlan

> آیا این نوع بیمه نامه، طرح بیمه ای دارد؟


```php
function getHasPlan(
        $subDomain,
        $insurancePolicyType,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subDomain |  ``` Required ```  | دامنه یا زیر دامنه ی مرکز بیمه |
| insurancePolicyType |  ``` Required ```  | شناسه ی نوع بیمه نامه |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$subDomain = 'hfz1';
$insurancePolicyType = 7;
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $motorcycleInsurance->getHasPlan($subDomain, $insurancePolicyType, $xApiKey);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="fire_insurance_controller"></a>![Class: ](https://apidocs.io/img/class.png ".FireInsuranceController") FireInsuranceController

### Get singleton instance

The singleton instance of the ``` FireInsuranceController ``` class can be accessed from the API Client.

```php
$fireInsurance = $client->getFireInsurance();
```

### <a name="get_fire_insurance"></a>![Method: ](https://apidocs.io/img/method.png ".FireInsuranceController.getFireInsurance") getFireInsurance

> دریافت اطلاعات پایه بیمه ی آتش سوزی


```php
function getFireInsurance(
        $subDomain,
        $insurancePolicyId,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subDomain |  ``` Required ```  | دامنه یا زیر دامنه ی مرکز بیمه |
| insurancePolicyId |  ``` Required ```  | شناسه ی بیمه نامه |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$subDomain = 'hfz1';
$insurancePolicyId = 0;
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $fireInsurance->getFireInsurance($subDomain, $insurancePolicyId, $xApiKey);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="earthquake_insurance_controller"></a>![Class: ](https://apidocs.io/img/class.png ".EarthquakeInsuranceController") EarthquakeInsuranceController

### Get singleton instance

The singleton instance of the ``` EarthquakeInsuranceController ``` class can be accessed from the API Client.

```php
$earthquakeInsurance = $client->getEarthquakeInsurance();
```

### <a name="get_earthquake"></a>![Method: ](https://apidocs.io/img/method.png ".EarthquakeInsuranceController.getEarthquake") getEarthquake

> دریافت اطلاعات پایه ی بیمه ی زلزله


```php
function getEarthquake(
        $subDomain,
        $insurancePolicyId,
        $insurancePolicyType,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subDomain |  ``` Required ```  | دامنه یا زیر دامنه ی مرکز بیمه |
| insurancePolicyId |  ``` Required ```  | شناسه ی بیمه نامه |
| insurancePolicyType |  ``` Required ```  | شناسه ی نوع بیمه نامه |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$subDomain = 'hfz1';
$insurancePolicyId = 0;
$insurancePolicyType = 6;
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $earthquakeInsurance->getEarthquake($subDomain, $insurancePolicyId, $insurancePolicyType, $xApiKey);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="travel_insurance_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TravelInsuranceController") TravelInsuranceController

### Get singleton instance

The singleton instance of the ``` TravelInsuranceController ``` class can be accessed from the API Client.

```php
$travelInsurance = $client->getTravelInsurance();
```

### <a name="get_travel_insurance"></a>![Method: ](https://apidocs.io/img/method.png ".TravelInsuranceController.getTravelInsurance") getTravelInsurance

> TODO: Add Description


```php
function getTravelInsurance(
        $subDomain,
        $insurancePolicyId,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subDomain |  ``` Required ```  | دامنه یا زیر دامنه ی مرکز بیمه |
| insurancePolicyId |  ``` Required ```  | شناسه ی بیمه نامه |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$subDomain = 'hfz1';
$insurancePolicyId = 0;
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $travelInsurance->getTravelInsurance($subDomain, $insurancePolicyId, $xApiKey);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="elevator_insurance_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ElevatorInsuranceController") ElevatorInsuranceController

### Get singleton instance

The singleton instance of the ``` ElevatorInsuranceController ``` class can be accessed from the API Client.

```php
$elevatorInsurance = $client->getElevatorInsurance();
```

### <a name="get_elevator_insurance"></a>![Method: ](https://apidocs.io/img/method.png ".ElevatorInsuranceController.getElevatorInsurance") getElevatorInsurance

> دریافت اطلاعات پایه ی بیمه نامه ی آسانسور


```php
function getElevatorInsurance(
        $subDomain,
        $insurancePolicyId,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subDomain |  ``` Required ```  | دامنه یا زیر دامنه ی مرکز بیمه |
| insurancePolicyId |  ``` Required ```  | شناسه ی بیمه نامه |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$subDomain = 'hfz1';
$insurancePolicyId = 0;
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $elevatorInsurance->getElevatorInsurance($subDomain, $insurancePolicyId, $xApiKey);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="main_controller"></a>![Class: ](https://apidocs.io/img/class.png ".MainController") MainController

### Get singleton instance

The singleton instance of the ``` MainController ``` class can be accessed from the API Client.

```php
$main = $client->getMain();
```

### <a name="get_portal_landing_page"></a>![Method: ](https://apidocs.io/img/method.png ".MainController.getPortalLandingPage") getPortalLandingPage

> در یافت اطلاعات لندینگ مراکز بیمه


```php
function getPortalLandingPage(
        $id,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | دامنه یا زیر دامنه ی مرکز بیمه |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$id = 'hfz1';
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $main->getPortalLandingPage($id, $xApiKey);

```


### <a name="get_insurance_centre_policy_types"></a>![Method: ](https://apidocs.io/img/method.png ".MainController.getInsuranceCentrePolicyTypes") getInsuranceCentrePolicyTypes

> دریافت لیست بیمه ی های ارائه شده توسط مرکز بیمه


```php
function getInsuranceCentrePolicyTypes(
        $subDomain,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subDomain |  ``` Required ```  | دامنه یا زیر دامنه ی مرکز بیمه |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$subDomain = 'hfz1';
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $main->getInsuranceCentrePolicyTypes($subDomain, $xApiKey);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="combo_data_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ComboDataController") ComboDataController

### Get singleton instance

The singleton instance of the ``` ComboDataController ``` class can be accessed from the API Client.

```php
$comboData = $client->getComboData();
```

### <a name="get_damage_type"></a>![Method: ](https://apidocs.io/img/method.png ".ComboDataController.getDamageType") getDamageType

> دریافت لیست نوع خسارت


```php
function getDamageType($xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $comboData->getDamageType($xApiKey);

```


### <a name="get_insurance_types"></a>![Method: ](https://apidocs.io/img/method.png ".ComboDataController.getInsuranceTypes") getInsuranceTypes

> دریافت لیست نوع بیمه نامه


```php
function getInsuranceTypes(
        $subDomain,
        $issueInsurance,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subDomain |  ``` Required ```  | دامنه یا زیر دامنه ی مرکز بیمه |
| issueInsurance |  ``` Required ```  | دریافت بیمه نامه های قابل صدور |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$subDomain = 'hfz1';
$issueInsurance = false;
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $comboData->getInsuranceTypes($subDomain, $issueInsurance, $xApiKey);

```


### <a name="get_insurance_companies"></a>![Method: ](https://apidocs.io/img/method.png ".ComboDataController.getInsuranceCompanies") getInsuranceCompanies

> دریافت لیست شرکت های بیمه


```php
function getInsuranceCompanies(
        $subDomain,
        $insuranceTypeId,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subDomain |  ``` Required ```  | دامنه یا زیر دامنه ی مرکز بیمه |
| insuranceTypeId |  ``` Required ```  | شناسه ی نوع بیمه نامه |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$subDomain = 'hfz1';
$insuranceTypeId = 1;
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $comboData->getInsuranceCompanies($subDomain, $insuranceTypeId, $xApiKey);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="tracking_damage_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TrackingDamageController") TrackingDamageController

### Get singleton instance

The singleton instance of the ``` TrackingDamageController ``` class can be accessed from the API Client.

```php
$trackingDamage = $client->getTrackingDamage();
```

### <a name="get_tracking_code"></a>![Method: ](https://apidocs.io/img/method.png ".TrackingDamageController.getTrackingCode") getTrackingCode

> استعلام وضعیت خسارت


```php
function getTrackingCode(
        $mTrackingCode,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| mTrackingCode |  ``` Required ```  | کد پیگیری خسارت |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$mTrackingCode = '/{TrackingCode}';
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $trackingDamage->getTrackingCode($mTrackingCode, $xApiKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Bad Request |



### <a name="create_tracking_damage"></a>![Method: ](https://apidocs.io/img/method.png ".TrackingDamageController.createTrackingDamage") createTrackingDamage

> ثبت خسارت بیمه


```php
function createTrackingDamage(
        $body,
        $xApiKey,
        $contentType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | اطلاعات خسارت |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |
| contentType |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$bodyValue = "{\r\n  \"personalityType\": 0,\r\n  \"trackingDamageStatus\": [\r\n    {\r\n      \"trackingDamageFile\": [\r\n        {\r\n          \"id\": 162747,\r\n          \"url\": \"https://media.easybimeh.com//Easybimeh/FileManager/InsuranceCentre/hfz1/637089119345134776.jpeg\",\r\n          \"title\": \"کارت شناسایی\"\r\n        }\r\n      ]\r\n    }\r\n  ],\r\n  \"description\": \"بدنه ی خودرو خسارت دیده\",\r\n  \"insuranceTypeId\": 1,\r\n  \"insuranceCompanyId\": 34,\r\n  \"insurancePolicyNumber\": \"123456\",\r\n  \"damageType\": \"مالی\",\r\n  \"name\": \"کاظم\",\r\n  \"nationalCode\": \"3080118383\",\r\n  \"mobile\": \"09018318086\",\r\n  \"insuredProfile\": \"پژو 405\",\r\n  \"subDomain\": \"hfz1\"\r\n}";
$body = APIHelper::deserialize($bodyValue);
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';
$contentType = 'application/json';

$result = $trackingDamage->createTrackingDamage($body, $xApiKey, $contentType);

```


### <a name="get_status_status_collections"></a>![Method: ](https://apidocs.io/img/method.png ".TrackingDamageController.getStatusStatusCollections") getStatusStatusCollections

> دریافت لیست وضعیت های خسارت


```php
function getStatusStatusCollections(
        $statusType,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| statusType |  ``` Required ```  | نوع وضعیت ها ی خسارت => 0 |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$statusType = 0;
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $trackingDamage->getStatusStatusCollections($statusType, $xApiKey);

```


### <a name="get_status"></a>![Method: ](https://apidocs.io/img/method.png ".TrackingDamageController.getStatus") getStatus

> دریافت اطلاعات وضعیت


```php
function getStatus(
        $entityId,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| entityId |  ``` Required ```  | شناسه ی وضعیت |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$entityId = 1129;
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $trackingDamage->getStatus($entityId, $xApiKey);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="footer_controller"></a>![Class: ](https://apidocs.io/img/class.png ".FooterController") FooterController

### Get singleton instance

The singleton instance of the ``` FooterController ``` class can be accessed from the API Client.

```php
$footer = $client->getFooter();
```

### <a name="get_portal_landing_contact_about"></a>![Method: ](https://apidocs.io/img/method.png ".FooterController.getPortalLandingContactAbout") getPortalLandingContactAbout

> دریافت اطلاعات درباره ی ما


```php
function getPortalLandingContactAbout($xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| xApiKey |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $footer->getPortalLandingContactAbout($xApiKey);

```


### <a name="get_faq_insurance_centre"></a>![Method: ](https://apidocs.io/img/method.png ".FooterController.getFaqInsuranceCentre") getFaqInsuranceCentre

> دریافت لیست سوالات متداول


```php
function getFaqInsuranceCentre($xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $footer->getFaqInsuranceCentre($xApiKey);

```


### <a name="get_insurance_policy_tracking"></a>![Method: ](https://apidocs.io/img/method.png ".FooterController.getInsurancePolicyTracking") getInsurancePolicyTracking

> پیگیری وضعیت بیمه نامه


```php
function getInsurancePolicyTracking(
        $trackingCode,
        $nationalCode,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| trackingCode |  ``` Required ```  | شماره ی پیگیری بیمه نامه |
| nationalCode |  ``` Required ```  | کد ملی کاربر |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$trackingCode = 213981083;
$nationalCode = 3080115309;
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $footer->getInsurancePolicyTracking($trackingCode, $nationalCode, $xApiKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 500 | Internal Server Error |



[Back to List of Controllers](#list_of_controllers)

## <a name="insurance_policy_plan_controller"></a>![Class: ](https://apidocs.io/img/class.png ".InsurancePolicyPlanController") InsurancePolicyPlanController

### Get singleton instance

The singleton instance of the ``` InsurancePolicyPlanController ``` class can be accessed from the API Client.

```php
$insurancePolicyPlan = $client->getInsurancePolicyPlan();
```

### <a name="get_special_plan"></a>![Method: ](https://apidocs.io/img/method.png ".InsurancePolicyPlanController.getSpecialPlan") getSpecialPlan

> دریافت لیست طرح های بیمه ای


```php
function getSpecialPlan(
        $subDomain,
        $xApiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subDomain |  ``` Required ```  | دامنه یا زیر دامنه ی مرکز بیمه |
| xApiKey |  ``` Required ```  | کلید اختصاصی ارتباط با سرور |



#### Example Usage

```php
$subDomain = 'hfz1';
$xApiKey = 'd6dfd932-75d8-e911-811a-000c294ecf01';

$result = $insurancePolicyPlan->getSpecialPlan($subDomain, $xApiKey);

```


[Back to List of Controllers](#list_of_controllers)



