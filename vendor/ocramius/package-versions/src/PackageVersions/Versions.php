<?php

declare(strict_types=1);

namespace PackageVersions;

use OutOfBoundsException;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'doctrine/annotations' => '1.10.3@5db60a4969eba0e0c197a19c077780aadbc43c5d',
  'doctrine/cache' => '1.10.1@35a4a70cd94e09e2259dfae7488afc6b474ecbd3',
  'doctrine/collections' => '1.6.5@fc0206348e17e530d09463fef07ba8968406cd6d',
  'doctrine/common' => '2.13.1@fb00cd761126b11d8f334c09cf5b1f3f83fefc17',
  'doctrine/dbal' => '2.10.2@aab745e7b6b2de3b47019da81e7225e14dcfdac8',
  'doctrine/doctrine-bundle' => '2.1.0@0fb513842c78b43770597ef3c487cdf79d944db3',
  'doctrine/doctrine-migrations-bundle' => '2.1.2@856437e8de96a70233e1f0cc2352fc8dd15a899d',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '2.2.1@a3987131febeb0e9acb3c47ab0df0af004588934',
  'doctrine/orm' => 'v2.7.3@d95e03ba660d50d785a9925f41927fef0ee553cf',
  'doctrine/persistence' => '1.3.7@0af483f91bada1c9ded6c2cfd26ab7d5ab2094e0',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'doctrine/sql-formatter' => '1.0.1@490ed58757f1af4cf13b3285287ff960533acb83',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.2.1@ce4dc0bdf3b14b7f9815775af9dfee80a63b4748',
  'laminas/laminas-zendframework-bridge' => '1.0.4@fcd87520e4943d968557803919523772475e8ea3',
  'nikic/php-parser' => 'v4.4.0@bd43ec7152eaaab3bd8c6d0aa95ceeb1df8ee120',
  'ocramius/package-versions' => '1.8.0@421679846270a5772534828013a93be709fb13df',
  'ocramius/proxy-manager' => '2.8.0@ac1dd414fd114cfc0da9930e0ab46063c2f5e62a',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v5.5.5@c76bb1c5c67840ecb6d9be8e9d8d7036e375e317',
  'symfony/asset' => 'v5.0.8@be35f49cf2cf1c54de30bc31d2c5ff3c1d880be8',
  'symfony/cache' => 'v5.0.8@0c5f5b1882dc82b255a4bdead4ed3c7738cddc04',
  'symfony/cache-contracts' => 'v2.1.2@87c92f62c494626598e9148208aaa6d1716b8e3c',
  'symfony/config' => 'v5.0.8@db1674e1a261148429f123871f30d211992294e7',
  'symfony/console' => 'v5.0.8@5fa1caadc8cdaa17bcfb25219f3b53fe294a9935',
  'symfony/dependency-injection' => 'v5.0.8@92d8b3bd896a87cdd8aba0a3dd041bc072e8cfba',
  'symfony/doctrine-bridge' => 'v5.0.8@013f4ce1a10c6aad81c4ad14466e49d802417f4f',
  'symfony/dotenv' => 'v5.0.8@28658ee990ea643c8111bac242d6ee5f3a15ef72',
  'symfony/error-handler' => 'v5.0.8@949ffc17c3ac3a9f8e6232220e2da33913c04ea4',
  'symfony/event-dispatcher' => 'v5.0.8@24f40d95385774ed5c71dbf014edd047e2f2f3dc',
  'symfony/event-dispatcher-contracts' => 'v2.1.2@405952c4e90941a17e52ef7489a2bd94870bb290',
  'symfony/filesystem' => 'v5.0.8@7cd0dafc4353a0f62e307df90b48466379c8cc91',
  'symfony/finder' => 'v5.0.8@600a52c29afc0d1caa74acbec8d3095ca7e9910d',
  'symfony/flex' => 'v1.7.1@a53056880aae0ce034ac6c38906e162ee5cfd2df',
  'symfony/form' => 'v5.0.8@a3ec37026c13851565599522f7c1d26cdcdbf7dd',
  'symfony/framework-bundle' => 'v5.0.8@3fd5aec4bc84750752ba1f039829362fa071e037',
  'symfony/http-foundation' => 'v5.0.8@e47fdf8b24edc12022ba52923150ec6484d7f57d',
  'symfony/http-kernel' => 'v5.0.8@3565e51eecd06106304baba5ccb7ba89db2d7d2b',
  'symfony/inflector' => 'v5.0.8@70c25c66427e2bb6ba0827d668366d60b0a90cbf',
  'symfony/intl' => 'v5.0.8@dc50ad5039ac685ca87306a346dc119cacdfea25',
  'symfony/maker-bundle' => 'v1.19.0@bea8c3c959e48a2c952cc7c4f4f32964be8b8874',
  'symfony/mime' => 'v5.0.8@5d6c81c39225a750f3f43bee15f03093fb9aaa0b',
  'symfony/options-resolver' => 'v5.0.8@3707e3caeff2b797c0bfaadd5eba723dd44e6bf1',
  'symfony/orm-pack' => 'v1.0.8@c9bcc08102061f406dc908192c0f33524a675666',
  'symfony/polyfill-intl-icu' => 'v1.17.0@4ef3923e4a86e1b6ef72d42be59dbf7d33a685e3',
  'symfony/polyfill-intl-idn' => 'v1.17.0@3bff59ea7047e925be6b7f2059d60af31bb46d6a',
  'symfony/polyfill-mbstring' => 'v1.17.0@fa79b11539418b02fc5e1897267673ba2c19419c',
  'symfony/polyfill-php73' => 'v1.17.0@a760d8964ff79ab9bf057613a5808284ec852ccc',
  'symfony/property-access' => 'v5.0.8@259f26529231ab653fc96fb358e5e41dbb438aed',
  'symfony/routing' => 'v5.0.8@9b18480a6e101f8d9ab7c483ace7c19441be5111',
  'symfony/security-bundle' => 'v5.0.8@b26fa15f2f748430112731f51f2c3c70fc6bbe1a',
  'symfony/security-core' => 'v5.0.8@5945abf1e64df5fdfb6aae9753c04f130fe96010',
  'symfony/security-csrf' => 'v5.0.8@c3ceba9a0a85326af509f418d178a993c31d6d4d',
  'symfony/security-guard' => 'v5.0.8@9e9ebbd005ca5af051e57a47d46394357cdff1d8',
  'symfony/security-http' => 'v5.0.8@052d81213d007c07e61c9c4407cfd34e67b9ed17',
  'symfony/service-contracts' => 'v2.1.2@66a8f0957a3ca54e4f724e49028ab19d75a8918b',
  'symfony/stopwatch' => 'v5.0.8@a1d86d30d4522423afc998f32404efa34fcf5a73',
  'symfony/translation-contracts' => 'v2.1.2@e5ca07c8f817f865f618aa072c2fe8e0e637340e',
  'symfony/twig-bridge' => 'v5.0.8@5962eb3be6591cc985f32be1632e7b096d0979e3',
  'symfony/twig-bundle' => 'v5.0.8@6167dbac6f32961b7d19112a7531602f511bf500',
  'symfony/twig-pack' => 'v1.0.0@8b278ea4b61fba7c051f172aacae6d87ef4be0e0',
  'symfony/validator' => 'v5.0.8@909c45839d32f9e4c09d4f155a7d761201e7e47e',
  'symfony/var-dumper' => 'v5.0.8@09de28632f16f81058a85fcf318397218272a07b',
  'symfony/var-exporter' => 'v5.0.8@5d18811da9e1ae2bb86b0a97fb2d784e27ffd59f',
  'symfony/yaml' => 'v5.0.8@482fb4e710e5af3e0e78015f19aa716ad953392f',
  'twig/extra-bundle' => 'v3.0.3@6eaf1637abe6b68518e7e0949ebb84e55770d5c6',
  'twig/twig' => 'v3.0.3@3b88ccd180a6b61ebb517aea3b1a8906762a1dc2',
  'webimpress/safe-writer' => '2.0.1@d6e879960febb307c112538997316371f1e95b12',
  'paragonie/random_compat' => '2.*@5d001c2da28242fb4c738992c74530f99cb698b4',
  'symfony/polyfill-ctype' => '*@5d001c2da28242fb4c738992c74530f99cb698b4',
  'symfony/polyfill-iconv' => '*@5d001c2da28242fb4c738992c74530f99cb698b4',
  'symfony/polyfill-php72' => '*@5d001c2da28242fb4c738992c74530f99cb698b4',
  'symfony/polyfill-php71' => '*@5d001c2da28242fb4c738992c74530f99cb698b4',
  'symfony/polyfill-php70' => '*@5d001c2da28242fb4c738992c74530f99cb698b4',
  'symfony/polyfill-php56' => '*@5d001c2da28242fb4c738992c74530f99cb698b4',
  '__root__' => 'dev-marcin@5d001c2da28242fb4c738992c74530f99cb698b4',
);

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
