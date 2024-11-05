<?php

namespace MyVendorPrefix\Illuminate\Support;

class DefaultProviders
{
    /**
     * The current providers.
     *
     * @var array
     */
    protected $providers;
    /**
     * Create a new default provider collection.
     *
     * @return void
     */
    public function __construct(?array $providers = null)
    {
        $this->providers = $providers ?: [\MyVendorPrefix\Illuminate\Auth\AuthServiceProvider::class, \MyVendorPrefix\Illuminate\Broadcasting\BroadcastServiceProvider::class, \MyVendorPrefix\Illuminate\Bus\BusServiceProvider::class, \MyVendorPrefix\Illuminate\Cache\CacheServiceProvider::class, \MyVendorPrefix\Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class, \MyVendorPrefix\Illuminate\Cookie\CookieServiceProvider::class, \MyVendorPrefix\Illuminate\Database\DatabaseServiceProvider::class, \MyVendorPrefix\Illuminate\Encryption\EncryptionServiceProvider::class, \MyVendorPrefix\Illuminate\Filesystem\FilesystemServiceProvider::class, \MyVendorPrefix\Illuminate\Foundation\Providers\FoundationServiceProvider::class, \MyVendorPrefix\Illuminate\Hashing\HashServiceProvider::class, \MyVendorPrefix\Illuminate\Mail\MailServiceProvider::class, \MyVendorPrefix\Illuminate\Notifications\NotificationServiceProvider::class, \MyVendorPrefix\Illuminate\Pagination\PaginationServiceProvider::class, \MyVendorPrefix\Illuminate\Auth\Passwords\PasswordResetServiceProvider::class, \MyVendorPrefix\Illuminate\Pipeline\PipelineServiceProvider::class, \MyVendorPrefix\Illuminate\Queue\QueueServiceProvider::class, \MyVendorPrefix\Illuminate\Redis\RedisServiceProvider::class, \MyVendorPrefix\Illuminate\Session\SessionServiceProvider::class, \MyVendorPrefix\Illuminate\Translation\TranslationServiceProvider::class, \MyVendorPrefix\Illuminate\Validation\ValidationServiceProvider::class, \MyVendorPrefix\Illuminate\View\ViewServiceProvider::class];
    }
    /**
     * Merge the given providers into the provider collection.
     *
     * @param  array  $providers
     * @return static
     */
    public function merge(array $providers)
    {
        $this->providers = array_merge($this->providers, $providers);
        return new static($this->providers);
    }
    /**
     * Replace the given providers with other providers.
     *
     * @param  array  $items
     * @return static
     */
    public function replace(array $replacements)
    {
        $current = collect($this->providers);
        foreach ($replacements as $from => $to) {
            $key = $current->search($from);
            $current = is_int($key) ? $current->replace([$key => $to]) : $current;
        }
        return new static($current->values()->toArray());
    }
    /**
     * Disable the given providers.
     *
     * @param  array  $providers
     * @return static
     */
    public function except(array $providers)
    {
        return new static(collect($this->providers)->reject(fn($p) => in_array($p, $providers))->values()->toArray());
    }
    /**
     * Convert the provider collection to an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->providers;
    }
}
