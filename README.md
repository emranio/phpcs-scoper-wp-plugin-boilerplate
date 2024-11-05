# phpcs-scoper-boilerplate
A blank WP plugin, has phpcs, scoper, psr autoloading and utility package  etc preinstalled.

## To enable Scoper
1. Run `composer scoped-install` to install and prepare everything in one command
2. Run `composer install` to install composer & php-scoper
3. Run `composer scoped` to run php-scoper and composer dump-autoload
4. Update `scoper.inc.php` file to set scoper related configuration like below
   
   
   - Change `'prefix' => 'PhpcsScoperBoilerplate',` to project related namespace prefix which will be prepend to all namespace after successfully scoped.
   [must be different with root namespace of your project]

   - `'finders' => []` will hold the target folder where we can exclude some folders where we don't need to check anything for scoping

   - add root name space to ignore being scoped 
   `'exclude-namespaces'=> [ "MyPluginNamespace", ]`


   - Note: `php-scoper` has limited support for prefixing some strings where indirectly references the original namespace. These will include, for example, strings or string manipulations. Then you have to scoped them manually using patchers which can be found at `scoper.inc.php` file.

      ```php
         'patchers' => [
            static function (string $filePath, string $prefix, string $contents): string {
               
               return $contents;
            },
         ],
      ```
      To fix alias type string, please see below code:
      ```php
         $contents = preg_replace(
            [
               "%GuzzleHttp\\\\\\\\ClientInterface%", 
               '%Google_Client%',
               '%Google_Http_Batch%',
               '%Google_Service_Exception%',
               '%Google_AccessToken%',
               '%Google_AuthHandler%',
               '%Google_Task%',
               '%Google_Model%',
               '%Google_Utils_UriTemplate%',
               '%Google_Http%',
               '%Google_Collection%',
               '%Google_Exception%',
               '%Google_Service_Resource%'
            ],
            [
               $prefix . '\\\\\\\\GuzzleHttp\\\\\\\\ClientInterface',
               $prefix .'_Google_Client',
               $prefix .'_Google_Http_Batch',
               $prefix .'_Google_Service_Exception',
               $prefix .'_Google_AccessToken',
               $prefix .'_Google_AuthHandler',
               $prefix .'_Google_Task',
               $prefix .'_Google_Model',
               $prefix .'_Google_Utils_UriTemplate',
               $prefix .'_Google_Http',
               $prefix .'_Google_Collection',
               $prefix .'_Google_Exception',
               $prefix .'_Google_Service_Resource'
            ],
            $contents
         );
      ```
      To fix some fo the unscoped namespace, can be fixed manually like below
      ```php
         $contents = preg_replace(
               "%GuzzleHttp\\\\\\\\ClientInterface%",
               '' . $prefix . '\\\\\\\\GuzzleHttp\\\\\\\\ClientInterface',
               $contents
         );
      ```



### explanation patchers  

      When scoping PHP files, there will be scenarios where some of the code being scoped indirectly references the original namespace. These will include, for example, strings or string manipulations. PHP-Scoper has limited support for prefixing such strings, so you may need to define patchers, one or more callables in a scoper.inc.php configuration file which can be used to replace some of the code being scoped.

      Here's a simple example:

      * Class names in strings.

      You can imagine instantiating a class from a variable which is based on a known namespace, but also on a variable classname which is selected at runtime. Perhaps code similar to:
```PHP
      $type = 'Foo'; // determined at runtime
      $class = 'Humbug\\Format\\Type\\' . $type;
```

      If we scoped the Humbug namespace to PhpScoperABC\Humbug, then the above snippet would fail as PHP-Scoper cannot interpret the above as being a namespaced class. To complete the scoping successfully, a) the problem must be located and b) the offending line replaced.

      The patched code which would resolve this issue might be:
```PHP
      $type = 'Foo'; // determined at runtime
      $scopedPrefix = array_shift(explode('\\', __NAMESPACE__));
      $class = $scopedPrefix . '\\Humbug\\Format\\Type\\' . $type;
```


      This and similar issues may arise after scoping, and can be debugged by running the scoped code and checking for issues. For this purpose, having a couple of end-to-end tests to validate post-scoped code or PHARs is recommended.

      Applying such a change can be achieved by defining a suitable patcher in scoper.inc.php:

   ```PHP
      <?php declare(strict_types=1);

      // scoper.inc.php

      return [
         'patchers' => [
            static function (string $filePath, string $prefix, string $content): string {
                  //
                  // PHP-Parser patch conditions for file targets
                  //
                  if ($filePath === '/path/to/offending/file') {
                     return preg_replace(
                        "%\$class = 'Humbug\\\\Format\\\\Type\\\\' . \$type;%",
                        '$class = \'' . $prefix . '\\\\Humbug\\\\Format\\\\Type\\\\\' . $type;',
                        $content
                     );
                  }

                  return $content;
            },
         ],
      ];
```

## some notes :: 
 * php scoper make a copy of all dependencies of vendor files to a different dir adding prefix with all files 
 * we tell the composer script to copy all files to scoped folder by 
   ```php
      "scoped": [
                  "composer bin php-scoper require --dev humbug/php-scoper",
                  "vendor/bin/php-scoper add-prefix --output-dir temp --force",
                  "composer dump-autoload -d temp"
            ],
   ```
* in scoper.inc.php we also told to ignore root namespace .
* this generate a new scoper-autoload file at temp/vendor folder which include our newly prefixed all classes and files etc .
* later "mv source_directory target_directory && rm -rf directory_to_delete" will move the temp/vendor directory to the root with the name "vendor-prefixed". [this command will only works on linux and macOS].
* by including this scoper-autoload from "vendor-prefixed" we can access all new scoped files and classes.





To know more in detail with example please follow this link: 
   - https://deliciousbrains.com/php-scoper-namespace-composer-depencies/

## To enable phpcs
1. Make sure you have `PHP` globally accessible
2. Install PHP_CodeSniffer by following its installation instructions[https://github.com/squizlabs/PHP_CodeSniffer#installation] (via Composer, Phar file, PEAR, or Git checkout).
3. Clone the WordPress standards repository:
   `git clone -b master https://github.com/WordPress/WordPress-Coding-Standards.git wpcs`
4. Add its path to the PHP_CodeSniffer configuration:
   `phpcs --config-set installed_paths /path/to/wpcs`   
5. Run `phpcs -i` to check and confirm WPCS configuration are set properly   
6. Run `phpcs .` or `phpcs system/`
7. To Add or Remove more rules for current project specific, update the `phpcs.xml` file. To add/remove WP related rule set you can check what inside `WPCS` folder for each specific rule checking in detail.   

Note: Make sure `WPCS` is on `master` branch after taking pull, because it has default to `develop` branch where you may face errors while running phpcs.

Ref. 
 - https://github.com/squizlabs/PHP_CodeSniffer

- https://github.com/WordPress/WordPress-Coding-Standards.git



## if you want to integrate utility package in a project with scoper follow the process 
## Utility package installation with Php Scoper : 

* Init composer 
* Add script require require-dev config and extra like listed 1.1


```php
## list 1.1
 "scripts": {
        "install": [
            "composer install --no-cache"
        ],
        "scoped": [
            "composer bin php-scoper require --dev humbug/php-scoper",
            "vendor/bin/php-scoper add-prefix --output-dir temp --force",
            "composer dump-autoload -d temp"
        ],
        "scoped-install": [
            "composer install",
            "composer scoped",
            "mv temp/vendor vendor-prefixed && rm -rf temp"
        ]
    },
    "require": { },
     "require-dev": {
        "bamarni/composer-bin-plugin": "^1.5"
    },
    "config": {
        "vendor-dir": "vendor",
        "allow-plugins": {
            "bamarni/composer-bin-plugin": true,
            "kylekatarnls/update-helper": true
        }
    },
    "extra": {
        "bamarni-bin": {
            "target-directory": "vendor/vendor-bin"
        }
    },
    "autoload": {
        "psr-4": {
            "MyPluginNamespace\\": "../src"
        }
    }

```

* Add require dependencies in composer
* Add file scoper.inc.php
* Add prefix in scoper.inc.php
* Add Exclude  file   utility-story-template.php in scoper.inc.php

```php 
## list 2.1
'exclude-files'           => [
           // $exFiles,
   ],

```

* Add Exclude  root namespace [mustbe different from scoped prefix] in scoper.inc.php
```php 
## list 2.3
'exclude-namespaces' => [
        'MyPluginNamespace'                     // The Acme\Foo namespace (and sub-namespaces)
        // '~^PHPUnit\\\\Framework$~',    // The whole namespace PHPUnit\Framework (but not sub-namespaces)
        // '~^$~',                        // The root namespace only
        // '',                            // Any namespace
    ],

```
* Run composer install 
* Run composer scoped (which will run the script added in composer)

If you dont add scoper.inc.php file and run the script command composer will generate that file for you after that you need to add prefix and others configuration in that scoper.inc.php file then rebuild the scoper .

##Explanation : 
scoper makes a copy of all vendor files with adding the prefix given in scoper.inc.php 
at dir scoped folder which is configured script at composer.json 
``
"scoped": [
            "composer bin php-scoper require --dev humbug/php-scoper",
            "vendor/bin/php-scoper add-prefix --output-dir prefixed --force",
            "composer dump-autoload -d prefixed"
        ],
``


### scoper-autoload.php file 

```php
// include  the autoload in vendor/build/vendor/src/autoload.php;
require_once __DIR__.'vendor/prefixed/vendor/scoper-autoload.php';
```




