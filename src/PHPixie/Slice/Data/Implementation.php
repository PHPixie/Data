<?php

namespace PHPixie\Slice\Data;

abstract class Implementation implements \PHPixie\Slice\Data
{
    protected $sliceBuilder;
    
    public function __construct($sliceBuilder)
    {
        $this->sliceBuilder = $sliceBuilder;
    }
    
    public function get($key = null, $default = null)
    {
        return $this->getData($key, false, $default);
    }
    
    public function getRequired($key = null)
    {
        return $this->getData($key, true);
    }
    
    protected function mergePath($prefix, $path = null)
    {
        if($prefix === null)
            return $path;
        
        if ($path === null)
            return $prefix;
        
        return $prefix.'.'.$path;
    }
}
