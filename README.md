# rector-functional-php

## Reproducer

```shell
composer install
vendor/bin/rector process
```

## Stack trace

```shell
Fatal error: Cannot redeclare Functional\each() (previously declared in /rector-functional-php/vendor/lstrojny/functional-php/src/Functional/Each.php:24) in /rector-functional-php/vendor/lstrojny/functional-php/src/Functional/each.php on line 24

Call Stack:
    0.2524     395984   1. {main}() /rector-functional-php/vendor/rector/rector/bin/rector:0
    0.4150     415984   2. require_once('/rector-functional-php/vendor/rector/rector/bin/rector.php') /rector-functional-php/vendor/rector/rector/bin/rector:4
   26.4234   44509760   3. Rector\Core\Console\ConsoleApplication->run(???, ???) /rector-functional-php/vendor/rector/rector/bin/rector.php:78
   26.4246   44516464   4. Rector\Core\Console\ConsoleApplication->doRun(???, ???) /rector-functional-php/vendor/symfony/console/Application.php:166
   26.4268   44519016   5. Rector\Core\Console\ConsoleApplication->doRun(???, ???) /rector-functional-php/vendor/rector/rector/src/Console/ConsoleApplication.php:115
   26.4289   44523704   6. Rector\Core\Console\ConsoleApplication->doRunCommand(???, ???, ???) /rector-functional-php/vendor/symfony/console/Application.php:290
   26.4290   44523704   7. Rector\Core\Console\Command\ProcessCommand->run(???, ???) /rector-functional-php/vendor/symfony/console/Application.php:971
   26.4290   44523704   8. Rector\Core\Console\Command\ProcessCommand->run(???, ???) /rector-functional-php/vendor/rector/rector/src/Console/Command/AbstractCommand.php:44
   26.4299   44526336   9. Rector\Core\Console\Command\ProcessCommand->execute(???, ???) /rector-functional-php/vendor/symfony/console/Command/Command.php:255
   26.5865   44838440  10. Rector\Core\Application\RectorApplication->runOnFileInfos(???) /rector-functional-php/vendor/rector/rector/src/Console/Command/ProcessCommand.php:207
   27.4912   60228912  11. Rector\Core\Application\RectorApplication->tryCatchWrapper(???, ???, ???) /rector-functional-php/vendor/rector/rector/src/Application/RectorApplication.php:144
   27.4914   60228912  12. Rector\Core\Application\RectorApplication->Rector\Core\Application\{closure:/rector-functional-php/vendor/rector/rector/src/Application/RectorApplication.php:142-144}(???) /rector-functional-php/vendor/rector/rector/src/Application/RectorApplication.php:227
   27.4914   60228912  13. Rector\Core\Application\FileProcessor->postFileRefactor(???) /rector-functional-php/vendor/rector/rector/src/Application/RectorApplication.php:143
   27.4915   60228504  14. Rector\PostRector\Application\PostFileProcessor->traverse(???) /rector-functional-php/vendor/rector/rector/src/Application/FileProcessor.php:165
   27.5270   60229368  15. PhpParser\NodeTraverser->traverse(???) /rector-functional-php/vendor/rector/rector/packages/post-rector/src/Application/PostFileProcessor.php:36
   27.5270   60229368  16. PhpParser\NodeTraverser->traverseArray(???) /rector-functional-php/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:91
   27.5272   60229808  17. PhpParser\NodeTraverser->traverseNode(???) /rector-functional-php/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:223
   27.5276   60229808  18. PhpParser\NodeTraverser->traverseArray(???) /rector-functional-php/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:114
   27.5287   60230280  19. PhpParser\NodeTraverser->traverseNode(???) /rector-functional-php/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:223
   27.5289   60230280  20. PhpParser\NodeTraverser->traverseArray(???) /rector-functional-php/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:114
   27.5290   60230720  21. PhpParser\NodeTraverser->traverseNode(???) /rector-functional-php/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:223
   27.5292   60230720  22. PhpParser\NodeTraverser->traverseArray(???) /rector-functional-php/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:114
   27.5293   60231160  23. PhpParser\NodeTraverser->traverseNode(???) /rector-functional-php/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:223
   27.5294   60231160  24. PhpParser\NodeTraverser->traverseNode(???) /rector-functional-php/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:146
   27.5294   60231160  25. Rector\PostRector\Rector\NameImportingPostRector->enterNode(???) /rector-functional-php/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:123
   27.5294   60231160  26. Rector\PostRector\Rector\NameImportingPostRector->processNodeName(???) /rector-functional-php/vendor/rector/rector/packages/post-rector/src/Rector/NameImportingPostRector.php:61
   27.5296   60231208  27. Rector\CodingStyle\Node\NameImporter->importName(???) /rector-functional-php/vendor/rector/rector/packages/post-rector/src/Rector/NameImportingPostRector.php:122
   27.5296   60231208  28. Rector\CodingStyle\Node\NameImporter->shouldSkipName(???) /rector-functional-php/vendor/rector/rector/rules/coding-style/src/Node/NameImporter.php:87
   27.5297   60231208  29. Rector\CodingStyle\Node\NameImporter->isNonExistingClassLikeAndFunctionFullyQualifiedName(???) /rector-functional-php/vendor/rector/rector/rules/coding-style/src/Node/NameImporter.php:127
   27.5298   60231256  30. Rector\NodeTypeResolver\ClassExistenceStaticHelper::doesClassLikeExist(???) /rector-functional-php/vendor/rector/rector/rules/coding-style/src/Node/NameImporter.php:215
   40.1930   60239776  31. class_exists(???) /rector-functional-php/vendor/rector/rector/packages/node-type-resolver/src/ClassExistenceStaticHelper.php:11
   40.1930   60239816  32. spl_autoload_call(???) /rector-functional-php/vendor/rector/rector/packages/node-type-resolver/src/ClassExistenceStaticHelper.php:11
   40.1931   60239856  33. Composer\Autoload\ClassLoader->loadClass(???) /rector-functional-php/vendor/rector/rector/packages/node-type-resolver/src/ClassExistenceStaticHelper.php:11
   40.1932   60240016  34. Composer\Autoload\includeFile(???) /rector-functional-php/vendor/composer/ClassLoader.php:322
```