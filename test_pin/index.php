<?php

class ConfigRepository extends ArrayObject
{
    /**
     * @var array
     */
    private $configArray;

    /**
     * @param array $configuration
     * ConfigRepository Constructor
     */
    public function __construct(array $configuration = [])
    {
        parent::__construct($configuration);
        $this->configArray = $configuration;
    }

    /**
     * Determine whether the config array contains the given key
     *
     * @param string $key
     * @return bool
     */
    public function has($key)
    {
        return (array_key_exists($key, $this->configArray) && $this->offsetExists($key));
    }

    /**
     * Set a value on the config array
     *
     * @param string $key
     * @param mixed $value
     * @return \Coalition\ConfigRepository
     */
    public function set($key, $value)
    {
        $this->configArray[$key] = $value;

        return $this;
    }

    /**
     * Get an item from the config array
     *
     * If the key does not exist the default
     * value should be returned
     *
     * @param string $key
     * @param null|mixed $default
     * @return mixed
     */
    public function get($key, $default = null)
    {
        if (array_key_exists($key, $this->configArray)) {

            return $this->configArray[$key];
        }

        return $default;
    }

    /**
     * Remove an item from the config array
     *
     * @param string $key
     * @return \Coalition\ConfigRepository
     */
    public function remove($key)
    {
        unset($this->configArray[$key]);

        return $this;
    }

    /**
     * Load config items from a file or an array of files
     *
     * The file name should be the config key and the value
     * should be the return value from the file
     *
     * @param array|string The full path to the files $files
     * @return void
     */
    public function load($files)
    {

        if (is_string($files)) {

            $fileInfo = pathinfo($files);
            $key = str_replace('.' . $fileInfo['extension'], '', $fileInfo['basename']);
            $this->configArray[$key] = (include $files);

        } else {
            foreach ($files as $file) {

                $this->load($file);
            }
        }
    }
}


$config = new ConfigRepository(['foo' => 'bar']);
$config['foo23'] = 'bar';
unset($config['foo']);
$dic = $config->has('foo');

echo $dic;
