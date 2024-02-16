<?php

namespace ContainerJeLjmue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationExtractService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'console.command.translation_extract' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationUpdateCommand.php';

        $container->privates['console.command.translation_extract'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand(($container->privates['translation.writer'] ?? $container->load('getTranslation_WriterService')), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), $container->getEnv('ECCUBE_LOCALE'), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'/src/Eccube/Resource/locale/'), 4 => (\dirname(__DIR__, 4).'/app/Customize/Resource/locale/')], [0 => (\dirname(__DIR__, 4).'/app/template/'.$container->getEnv('string:ECCUBE_TEMPLATE_CODE')), 1 => (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/default'), 2 => (\dirname(__DIR__, 4).'/app/Plugin'), 3 => (\dirname(__DIR__, 4).'/app/template/admin'), 4 => (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/admin'), 5 => (\dirname(__DIR__, 4).'/app/template/user_data'), 6 => (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/toolbar'), 7 => (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/common'), 8 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 9 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), 10 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php'), 11 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractShoppingController.php'), 12 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/AbstractCsvImportController.php'), 13 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/AdminController.php'), 14 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/BlockController.php'), 15 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/CacheController.php'), 16 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/CssController.php'), 17 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/FileController.php'), 18 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/JsController.php'), 19 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/LayoutController.php'), 20 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/MaintenanceController.php'), 21 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/NewsController.php'), 22 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/PageController.php'), 23 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Customer/CustomerController.php'), 24 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Customer/CustomerDeliveryEditController.php'), 25 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Customer/CustomerEditController.php'), 26 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/CsvImportController.php'), 27 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/EditController.php'), 28 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/MailController.php'), 29 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/OrderController.php'), 30 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/ShippingController.php'), 31 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/CategoryController.php'), 32 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/ClassCategoryController.php'), 33 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/ClassNameController.php'), 34 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/CsvImportController.php'), 35 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/ProductClassController.php'), 36 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/ProductController.php'), 37 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/TagController.php'), 38 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/CalendarController.php'), 39 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/CsvController.php'), 40 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/DeliveryController.php'), 41 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/MailController.php'), 42 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/OrderStatusController.php'), 43 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/PaymentController.php'), 44 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/ShopController.php'), 45 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/TaxRuleController.php'), 46 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/TradeLawController.php'), 47 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/AuthorityController.php'), 48 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/LogController.php'), 49 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/LoginHistoryController.php'), 50 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/MasterdataController.php'), 51 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/MemberController.php'), 52 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/SecurityController.php'), 53 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/TwoFactorAuthController.php'), 54 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Store/OwnerStoreController.php'), 55 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Store/PluginController.php'), 56 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Store/TemplateController.php'), 57 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Block/CalendarController.php'), 58 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Block/CartController.php'), 59 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Block/SearchProductController.php'), 60 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/CartController.php'), 61 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/ContactController.php'), 62 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/EntryController.php'), 63 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/ForgotController.php'), 64 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/HelpController.php'), 65 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Install/InstallController.php'), 66 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/InstallPluginController.php'), 67 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Mypage/ChangeController.php'), 68 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Mypage/DeliveryController.php'), 69 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Mypage/MypageController.php'), 70 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Mypage/WithdrawController.php'), 71 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/NonMemberShoppingController.php'), 72 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/ProductController.php'), 73 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/ShippingMultipleController.php'), 74 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/ShoppingController.php'), 75 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/SitemapController.php'), 76 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/TopController.php'), 77 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/TradeLawController.php'), 78 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/UserDataController.php'), 79 => (\dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php'), 80 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 81 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 82 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ChoiceType.php'), 83 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ColorType.php'), 84 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 85 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/FormTypeValidatorExtension.php'), 86 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 87 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 88 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/ValidatorBuilder.php'), 89 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 90 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 91 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/FormExtension.php'), 92 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/src/Helper/Processor.php')], []);

        $instance->setName('translation:extract');
        $instance->setAliases([0 => 'translation:update']);
        $instance->setDescription('Extract missing translations keys from code to translation files.');

        return $instance;
    }
}
