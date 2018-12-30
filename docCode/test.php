<?php

namespace test_pin;


class test extends \ArrayObject
{
    /**
     * @param array $configuration
     * ConfigRepository Constructor
     */
    public function __construct(array $configuration = [])
    {
        parent::__construct($configuration);
    }

    /**
     * Determine whether the config array contains the given key
     *
     * @param string $key
     * @return bool
     */
    public function has($key)
    {
        return $this->offsetExists($key);
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
        $this->offsetSet($key, $value);

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
        if ($this->offsetExists($key)) {

            return $this->offsetGet($key);
        }

        return $default;
    }


    /**
     * @param $key
     * @return $this
     */
    public function remove($key)
    {
        $this->offsetUnset($key);

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
            $values = (include $files);
            $this->offsetSet($key, $values);

        } else {
            foreach ($files as $file) {

                $this->load($file);
            }
        }
    }
}

$config = new test(['foo' => 'bar', 'baz' => 'bam']);

$config->set('paths', ['base' => 'path', 'app' => 'path'])
    ->set('options', ['foo' => 'bar']);

$value = $config->has('paths');

$v =  $config->get('paths');
$config->remove('foo')->remove('baz');

echo $value;
