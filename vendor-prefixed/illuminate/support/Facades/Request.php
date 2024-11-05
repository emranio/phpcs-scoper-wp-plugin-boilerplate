<?php

namespace MyVendorPrefix\Illuminate\Support\Facades;

/**
 * @method static \Illuminate\Http\Request capture()
 * @method static \Illuminate\Http\Request instance()
 * @method static string method()
 * @method static string root()
 * @method static string url()
 * @method static string fullUrl()
 * @method static string fullUrlWithQuery(array $query)
 * @method static string fullUrlWithoutQuery(array|string $keys)
 * @method static string path()
 * @method static string decodedPath()
 * @method static string|null segment(int $index, string|null $default = null)
 * @method static array segments()
 * @method static bool is(mixed ...$patterns)
 * @method static bool routeIs(mixed ...$patterns)
 * @method static bool fullUrlIs(mixed ...$patterns)
 * @method static string host()
 * @method static string httpHost()
 * @method static string schemeAndHttpHost()
 * @method static bool ajax()
 * @method static bool pjax()
 * @method static bool prefetch()
 * @method static bool secure()
 * @method static string|null ip()
 * @method static array ips()
 * @method static string|null userAgent()
 * @method static \Illuminate\Http\Request merge(array $input)
 * @method static \Illuminate\Http\Request mergeIfMissing(array $input)
 * @method static \Illuminate\Http\Request replace(array $input)
 * @method static mixed get(string $key, mixed $default = null)
 * @method static \Symfony\Component\HttpFoundation\InputBag|mixed json(string|null $key = null, mixed $default = null)
 * @method static \Illuminate\Http\Request createFrom(\Illuminate\Http\Request $from, \Illuminate\Http\Request|null $to = null)
 * @method static \Illuminate\Http\Request createFromBase(\Symfony\Component\HttpFoundation\Request $request)
 * @method static \Illuminate\Http\Request duplicate(array|null $query = null, array|null $request = null, array|null $attributes = null, array|null $cookies = null, array|null $files = null, array|null $server = null)
 * @method static bool hasSession(bool $skipIfUninitialized = false)
 * @method static \Symfony\Component\HttpFoundation\Session\SessionInterface getSession()
 * @method static \Illuminate\Contracts\Session\Session session()
 * @method static void setLaravelSession(\Illuminate\Contracts\Session\Session $session)
 * @method static void setRequestLocale(string $locale)
 * @method static void setDefaultRequestLocale(string $locale)
 * @method static mixed user(string|null $guard = null)
 * @method static \Illuminate\Routing\Route|object|string|null route(string|null $param = null, mixed $default = null)
 * @method static string fingerprint()
 * @method static \Illuminate\Http\Request setJson(\Symfony\Component\HttpFoundation\InputBag $json)
 * @method static \Closure getUserResolver()
 * @method static \Illuminate\Http\Request setUserResolver(\Closure $callback)
 * @method static \Closure getRouteResolver()
 * @method static \Illuminate\Http\Request setRouteResolver(\Closure $callback)
 * @method static array toArray()
 * @method static void initialize(array $query = [], array $request = [], array $attributes = [], array $cookies = [], array $files = [], array $server = [], string|resource|null $content = null)
 * @method static \Illuminate\Http\Request createFromGlobals()
 * @method static \Illuminate\Http\Request create(string $uri, string $method = 'GET', array $parameters = [], array $cookies = [], array $files = [], array $server = [], string|resource|null $content = null)
 * @method static void setFactory(callable|null $callable)
 * @method static void overrideGlobals()
 * @method static void setTrustedProxies(array $proxies, int $trustedHeaderSet)
 * @method static string[] getTrustedProxies()
 * @method static int getTrustedHeaderSet()
 * @method static void setTrustedHosts(array $hostPatterns)
 * @method static string[] getTrustedHosts()
 * @method static string normalizeQueryString(string|null $qs)
 * @method static void enableHttpMethodParameterOverride()
 * @method static bool getHttpMethodParameterOverride()
 * @method static bool hasPreviousSession()
 * @method static void setSession(\Symfony\Component\HttpFoundation\Session\SessionInterface $session)
 * @method static array getClientIps()
 * @method static string|null getClientIp()
 * @method static string getScriptName()
 * @method static string getPathInfo()
 * @method static string getBasePath()
 * @method static string getBaseUrl()
 * @method static string getScheme()
 * @method static int|string|null getPort()
 * @method static string|null getUser()
 * @method static string|null getPassword()
 * @method static string|null getUserInfo()
 * @method static string getHttpHost()
 * @method static string getRequestUri()
 * @method static string getSchemeAndHttpHost()
 * @method static string getUri()
 * @method static string getUriForPath(string $path)
 * @method static string getRelativeUriForPath(string $path)
 * @method static string|null getQueryString()
 * @method static bool isSecure()
 * @method static string getHost()
 * @method static void setMethod(string $method)
 * @method static string getMethod()
 * @method static string getRealMethod()
 * @method static string|null getMimeType(string $format)
 * @method static string[] getMimeTypes(string $format)
 * @method static string|null getFormat(string|null $mimeType)
 * @method static void setFormat(string|null $format, string|string[] $mimeTypes)
 * @method static string|null getRequestFormat(string|null $default = 'html')
 * @method static void setRequestFormat(string|null $format)
 * @method static string|null getContentTypeFormat()
 * @method static void setDefaultLocale(string $locale)
 * @method static string getDefaultLocale()
 * @method static void setLocale(string $locale)
 * @method static string getLocale()
 * @method static bool isMethod(string $method)
 * @method static bool isMethodSafe()
 * @method static bool isMethodIdempotent()
 * @method static bool isMethodCacheable()
 * @method static string|null getProtocolVersion()
 * @method static string|resource getContent(bool $asResource = false)
 * @method static \Symfony\Component\HttpFoundation\InputBag getPayload()
 * @method static array getETags()
 * @method static bool isNoCache()
 * @method static string|null getPreferredFormat(string|null $default = 'html')
 * @method static string|null getPreferredLanguage(string[] $locales = null)
 * @method static string[] getLanguages()
 * @method static string[] getCharsets()
 * @method static string[] getEncodings()
 * @method static string[] getAcceptableContentTypes()
 * @method static bool isXmlHttpRequest()
 * @method static bool preferSafeContent()
 * @method static bool isFromTrustedProxy()
 * @method static array filterPrecognitiveRules(array $rules)
 * @method static bool isAttemptingPrecognition()
 * @method static bool isPrecognitive()
 * @method static bool isJson()
 * @method static bool expectsJson()
 * @method static bool wantsJson()
 * @method static bool accepts(string|array $contentTypes)
 * @method static string|null prefers(string|array $contentTypes)
 * @method static bool acceptsAnyContentType()
 * @method static bool acceptsJson()
 * @method static bool acceptsHtml()
 * @method static bool matchesType(string $actual, string $type)
 * @method static string format(string $default = 'html')
 * @method static string|array|null old(string|null $key = null, \Illuminate\Database\Eloquent\Model|string|array|null $default = null)
 * @method static void flash()
 * @method static void flashOnly(array|mixed $keys)
 * @method static void flashExcept(array|mixed $keys)
 * @method static void flush()
 * @method static string|array|null server(string|null $key = null, string|array|null $default = null)
 * @method static bool hasHeader(string $key)
 * @method static string|array|null header(string|null $key = null, string|array|null $default = null)
 * @method static string|null bearerToken()
 * @method static bool exists(string|array $key)
 * @method static bool has(string|array $key)
 * @method static bool hasAny(string|array $keys)
 * @method static \Illuminate\Http\Request|mixed whenHas(string $key, callable $callback, callable|null $default = null)
 * @method static bool filled(string|array $key)
 * @method static bool isNotFilled(string|array $key)
 * @method static bool anyFilled(string|array $keys)
 * @method static \Illuminate\Http\Request|mixed whenFilled(string $key, callable $callback, callable|null $default = null)
 * @method static bool missing(string|array $key)
 * @method static \Illuminate\Http\Request|mixed whenMissing(string $key, callable $callback, callable|null $default = null)
 * @method static array keys()
 * @method static array all(array|mixed|null $keys = null)
 * @method static mixed input(string|null $key = null, mixed $default = null)
 * @method static \Illuminate\Support\Stringable str(string $key, mixed $default = null)
 * @method static \Illuminate\Support\Stringable string(string $key, mixed $default = null)
 * @method static bool boolean(string|null $key = null, bool $default = false)
 * @method static int integer(string $key, int $default = 0)
 * @method static float float(string $key, float $default = 0)
 * @method static \Illuminate\Support\Carbon|null date(string $key, string|null $format = null, string|null $tz = null)
 * @method static object|null enum(string $key, string $enumClass)
 * @method static \Illuminate\Support\Collection collect(array|string|null $key = null)
 * @method static array only(array|mixed $keys)
 * @method static array except(array|mixed $keys)
 * @method static string|array|null query(string|null $key = null, string|array|null $default = null)
 * @method static string|array|null post(string|null $key = null, string|array|null $default = null)
 * @method static bool hasCookie(string $key)
 * @method static string|array|null cookie(string|null $key = null, string|array|null $default = null)
 * @method static array allFiles()
 * @method static bool hasFile(string $key)
 * @method static \Illuminate\Http\UploadedFile|\Illuminate\Http\UploadedFile[]|array|null file(string|null $key = null, mixed $default = null)
 * @method static never dd(mixed ...$keys)
 * @method static \Illuminate\Http\Request dump(mixed $keys = [])
 * @method static void macro(string $name, object|callable $macro)
 * @method static void mixin(object $mixin, bool $replace = true)
 * @method static bool hasMacro(string $name)
 * @method static void flushMacros()
 * @method static array validate(array $rules, ...$params)
 * @method static array validateWithBag(string $errorBag, array $rules, ...$params)
 * @method static bool hasValidSignature(bool $absolute = true)
 *
 * @see \Illuminate\Http\Request
 */
class Request extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'request';
    }
}
