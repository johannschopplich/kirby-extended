<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit87ac086e0582aff779837a1930970fff
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '7f15a39b34659ec7c61fd4bc2f79c539' => __DIR__ . '/../..' . '/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'voku\\helper\\' => 12,
            'voku\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\CssSelector\\' => 30,
        ),
        'P' => 
        array (
            'PhpOption\\' => 10,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
            'KirbyExtended\\' => 14,
        ),
        'G' => 
        array (
            'GrahamCampbell\\ResultType\\' => 26,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'voku\\helper\\' => 
        array (
            0 => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper',
        ),
        'voku\\' => 
        array (
            0 => __DIR__ . '/..' . '/voku/html-min/src/voku',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\CssSelector\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/css-selector',
        ),
        'PhpOption\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
        'KirbyExtended\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/KirbyExtended',
        ),
        'GrahamCampbell\\ResultType\\' => 
        array (
            0 => __DIR__ . '/..' . '/graham-campbell/result-type/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Dotenv\\Dotenv' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Dotenv.php',
        'Dotenv\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ExceptionInterface.php',
        'Dotenv\\Exception\\InvalidEncodingException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidEncodingException.php',
        'Dotenv\\Exception\\InvalidFileException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidFileException.php',
        'Dotenv\\Exception\\InvalidPathException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidPathException.php',
        'Dotenv\\Exception\\ValidationException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ValidationException.php',
        'Dotenv\\Loader\\Loader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Loader.php',
        'Dotenv\\Loader\\LoaderInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/LoaderInterface.php',
        'Dotenv\\Loader\\Resolver' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Resolver.php',
        'Dotenv\\Parser\\Entry' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Entry.php',
        'Dotenv\\Parser\\EntryParser' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/EntryParser.php',
        'Dotenv\\Parser\\Lexer' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Lexer.php',
        'Dotenv\\Parser\\Lines' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Lines.php',
        'Dotenv\\Parser\\Parser' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Parser.php',
        'Dotenv\\Parser\\ParserInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/ParserInterface.php',
        'Dotenv\\Parser\\Value' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Value.php',
        'Dotenv\\Repository\\AdapterRepository' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/AdapterRepository.php',
        'Dotenv\\Repository\\Adapter\\AdapterInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/AdapterInterface.php',
        'Dotenv\\Repository\\Adapter\\ApacheAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ApacheAdapter.php',
        'Dotenv\\Repository\\Adapter\\ArrayAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ArrayAdapter.php',
        'Dotenv\\Repository\\Adapter\\EnvConstAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/EnvConstAdapter.php',
        'Dotenv\\Repository\\Adapter\\GuardedWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/GuardedWriter.php',
        'Dotenv\\Repository\\Adapter\\ImmutableWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ImmutableWriter.php',
        'Dotenv\\Repository\\Adapter\\MultiReader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/MultiReader.php',
        'Dotenv\\Repository\\Adapter\\MultiWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/MultiWriter.php',
        'Dotenv\\Repository\\Adapter\\PutenvAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/PutenvAdapter.php',
        'Dotenv\\Repository\\Adapter\\ReaderInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ReaderInterface.php',
        'Dotenv\\Repository\\Adapter\\ReplacingWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ReplacingWriter.php',
        'Dotenv\\Repository\\Adapter\\ServerConstAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ServerConstAdapter.php',
        'Dotenv\\Repository\\Adapter\\WriterInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/WriterInterface.php',
        'Dotenv\\Repository\\RepositoryBuilder' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/RepositoryBuilder.php',
        'Dotenv\\Repository\\RepositoryInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/RepositoryInterface.php',
        'Dotenv\\Store\\FileStore' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/FileStore.php',
        'Dotenv\\Store\\File\\Paths' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/File/Paths.php',
        'Dotenv\\Store\\File\\Reader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/File/Reader.php',
        'Dotenv\\Store\\StoreBuilder' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StoreBuilder.php',
        'Dotenv\\Store\\StoreInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StoreInterface.php',
        'Dotenv\\Store\\StringStore' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StringStore.php',
        'Dotenv\\Util\\Regex' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Util/Regex.php',
        'Dotenv\\Util\\Str' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Util/Str.php',
        'Dotenv\\Validator' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Validator.php',
        'GrahamCampbell\\ResultType\\Error' => __DIR__ . '/..' . '/graham-campbell/result-type/src/Error.php',
        'GrahamCampbell\\ResultType\\Result' => __DIR__ . '/..' . '/graham-campbell/result-type/src/Result.php',
        'GrahamCampbell\\ResultType\\Success' => __DIR__ . '/..' . '/graham-campbell/result-type/src/Success.php',
        'KirbyExtended\\Env' => __DIR__ . '/../..' . '/classes/KirbyExtended/Env.php',
        'KirbyExtended\\HigherOrderTapProxy' => __DIR__ . '/../..' . '/classes/KirbyExtended/HigherOrderTapProxy.php',
        'KirbyExtended\\HtmlMinTemplate' => __DIR__ . '/../..' . '/classes/KirbyExtended/HtmlMinTemplate.php',
        'KirbyExtended\\PageMeta' => __DIR__ . '/../..' . '/classes/KirbyExtended/PageMeta.php',
        'KirbyExtended\\SiteMeta' => __DIR__ . '/../..' . '/classes/KirbyExtended/SiteMeta.php',
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
        'PhpOption\\LazyOption' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/LazyOption.php',
        'PhpOption\\None' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/None.php',
        'PhpOption\\Option' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/Option.php',
        'PhpOption\\Some' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/Some.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'Symfony\\Component\\CssSelector\\CssSelectorConverter' => __DIR__ . '/..' . '/symfony/css-selector/CssSelectorConverter.php',
        'Symfony\\Component\\CssSelector\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/css-selector/Exception/ExceptionInterface.php',
        'Symfony\\Component\\CssSelector\\Exception\\ExpressionErrorException' => __DIR__ . '/..' . '/symfony/css-selector/Exception/ExpressionErrorException.php',
        'Symfony\\Component\\CssSelector\\Exception\\InternalErrorException' => __DIR__ . '/..' . '/symfony/css-selector/Exception/InternalErrorException.php',
        'Symfony\\Component\\CssSelector\\Exception\\ParseException' => __DIR__ . '/..' . '/symfony/css-selector/Exception/ParseException.php',
        'Symfony\\Component\\CssSelector\\Exception\\SyntaxErrorException' => __DIR__ . '/..' . '/symfony/css-selector/Exception/SyntaxErrorException.php',
        'Symfony\\Component\\CssSelector\\Node\\AbstractNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/AbstractNode.php',
        'Symfony\\Component\\CssSelector\\Node\\AttributeNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/AttributeNode.php',
        'Symfony\\Component\\CssSelector\\Node\\ClassNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/ClassNode.php',
        'Symfony\\Component\\CssSelector\\Node\\CombinedSelectorNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/CombinedSelectorNode.php',
        'Symfony\\Component\\CssSelector\\Node\\ElementNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/ElementNode.php',
        'Symfony\\Component\\CssSelector\\Node\\FunctionNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/FunctionNode.php',
        'Symfony\\Component\\CssSelector\\Node\\HashNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/HashNode.php',
        'Symfony\\Component\\CssSelector\\Node\\NegationNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/NegationNode.php',
        'Symfony\\Component\\CssSelector\\Node\\NodeInterface' => __DIR__ . '/..' . '/symfony/css-selector/Node/NodeInterface.php',
        'Symfony\\Component\\CssSelector\\Node\\PseudoNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/PseudoNode.php',
        'Symfony\\Component\\CssSelector\\Node\\SelectorNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/SelectorNode.php',
        'Symfony\\Component\\CssSelector\\Node\\Specificity' => __DIR__ . '/..' . '/symfony/css-selector/Node/Specificity.php',
        'Symfony\\Component\\CssSelector\\Parser\\Handler\\CommentHandler' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Handler/CommentHandler.php',
        'Symfony\\Component\\CssSelector\\Parser\\Handler\\HandlerInterface' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Handler/HandlerInterface.php',
        'Symfony\\Component\\CssSelector\\Parser\\Handler\\HashHandler' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Handler/HashHandler.php',
        'Symfony\\Component\\CssSelector\\Parser\\Handler\\IdentifierHandler' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Handler/IdentifierHandler.php',
        'Symfony\\Component\\CssSelector\\Parser\\Handler\\NumberHandler' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Handler/NumberHandler.php',
        'Symfony\\Component\\CssSelector\\Parser\\Handler\\StringHandler' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Handler/StringHandler.php',
        'Symfony\\Component\\CssSelector\\Parser\\Handler\\WhitespaceHandler' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Handler/WhitespaceHandler.php',
        'Symfony\\Component\\CssSelector\\Parser\\Parser' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Parser.php',
        'Symfony\\Component\\CssSelector\\Parser\\ParserInterface' => __DIR__ . '/..' . '/symfony/css-selector/Parser/ParserInterface.php',
        'Symfony\\Component\\CssSelector\\Parser\\Reader' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Reader.php',
        'Symfony\\Component\\CssSelector\\Parser\\Shortcut\\ClassParser' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Shortcut/ClassParser.php',
        'Symfony\\Component\\CssSelector\\Parser\\Shortcut\\ElementParser' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Shortcut/ElementParser.php',
        'Symfony\\Component\\CssSelector\\Parser\\Shortcut\\EmptyStringParser' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Shortcut/EmptyStringParser.php',
        'Symfony\\Component\\CssSelector\\Parser\\Shortcut\\HashParser' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Shortcut/HashParser.php',
        'Symfony\\Component\\CssSelector\\Parser\\Token' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Token.php',
        'Symfony\\Component\\CssSelector\\Parser\\TokenStream' => __DIR__ . '/..' . '/symfony/css-selector/Parser/TokenStream.php',
        'Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\Tokenizer' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Tokenizer/Tokenizer.php',
        'Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\TokenizerEscaping' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Tokenizer/TokenizerEscaping.php',
        'Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\TokenizerPatterns' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Tokenizer/TokenizerPatterns.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\AbstractExtension' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/AbstractExtension.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\AttributeMatchingExtension' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/AttributeMatchingExtension.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\CombinationExtension' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/CombinationExtension.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\ExtensionInterface' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/ExtensionInterface.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\FunctionExtension' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/FunctionExtension.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\HtmlExtension' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/HtmlExtension.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\NodeExtension' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/NodeExtension.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\PseudoClassExtension' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/PseudoClassExtension.php',
        'Symfony\\Component\\CssSelector\\XPath\\Translator' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Translator.php',
        'Symfony\\Component\\CssSelector\\XPath\\TranslatorInterface' => __DIR__ . '/..' . '/symfony/css-selector/XPath/TranslatorInterface.php',
        'Symfony\\Component\\CssSelector\\XPath\\XPathExpr' => __DIR__ . '/..' . '/symfony/css-selector/XPath/XPathExpr.php',
        'Symfony\\Polyfill\\Ctype\\Ctype' => __DIR__ . '/..' . '/symfony/polyfill-ctype/Ctype.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'Symfony\\Polyfill\\Php80\\Php80' => __DIR__ . '/..' . '/symfony/polyfill-php80/Php80.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
        'voku\\helper\\AbstractDomParser' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/AbstractDomParser.php',
        'voku\\helper\\AbstractSimpleHtmlDom' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/AbstractSimpleHtmlDom.php',
        'voku\\helper\\AbstractSimpleHtmlDomNode' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/AbstractSimpleHtmlDomNode.php',
        'voku\\helper\\AbstractSimpleXmlDom' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/AbstractSimpleXmlDom.php',
        'voku\\helper\\AbstractSimpleXmlDomNode' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/AbstractSimpleXmlDomNode.php',
        'voku\\helper\\DomParserInterface' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/DomParserInterface.php',
        'voku\\helper\\HtmlDomParser' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/HtmlDomParser.php',
        'voku\\helper\\HtmlMin' => __DIR__ . '/..' . '/voku/html-min/src/voku/helper/HtmlMin.php',
        'voku\\helper\\HtmlMinDomObserverInterface' => __DIR__ . '/..' . '/voku/html-min/src/voku/helper/HtmlMinDomObserverInterface.php',
        'voku\\helper\\HtmlMinDomObserverOptimizeAttributes' => __DIR__ . '/..' . '/voku/html-min/src/voku/helper/HtmlMinDomObserverOptimizeAttributes.php',
        'voku\\helper\\HtmlMinInterface' => __DIR__ . '/..' . '/voku/html-min/src/voku/helper/HtmlMinInterface.php',
        'voku\\helper\\SelectorConverter' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SelectorConverter.php',
        'voku\\helper\\SimpleHtmlAttributes' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleHtmlAttributes.php',
        'voku\\helper\\SimpleHtmlAttributesInterface' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleHtmlAttributesInterface.php',
        'voku\\helper\\SimpleHtmlDom' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleHtmlDom.php',
        'voku\\helper\\SimpleHtmlDomBlank' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleHtmlDomBlank.php',
        'voku\\helper\\SimpleHtmlDomInterface' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleHtmlDomInterface.php',
        'voku\\helper\\SimpleHtmlDomNode' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleHtmlDomNode.php',
        'voku\\helper\\SimpleHtmlDomNodeBlank' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleHtmlDomNodeBlank.php',
        'voku\\helper\\SimpleHtmlDomNodeInterface' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleHtmlDomNodeInterface.php',
        'voku\\helper\\SimpleXmlDom' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleXmlDom.php',
        'voku\\helper\\SimpleXmlDomBlank' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleXmlDomBlank.php',
        'voku\\helper\\SimpleXmlDomInterface' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleXmlDomInterface.php',
        'voku\\helper\\SimpleXmlDomNode' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleXmlDomNode.php',
        'voku\\helper\\SimpleXmlDomNodeBlank' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleXmlDomNodeBlank.php',
        'voku\\helper\\SimpleXmlDomNodeInterface' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleXmlDomNodeInterface.php',
        'voku\\helper\\XmlDomParser' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/XmlDomParser.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit87ac086e0582aff779837a1930970fff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit87ac086e0582aff779837a1930970fff::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit87ac086e0582aff779837a1930970fff::$classMap;

        }, null, ClassLoader::class);
    }
}
